<?php
include_once ('config.php');
include_once '../common.php';
include_once('../login.php'); // Includes Login Script

function recup_article($rech,$order,$LIMIT){
$arciles=array();
$requette="SELECT literature.id, 
	literature.title_literature, 
	literature.kind,
	literature.taux_rating,
	literature.membre, 
	literature.description, 
	DATE_FORMAT (literature.date_pub,'%d/%m/%Y %H:%i:%S') AS date_pub, 
	literature.taux_rating, 
	literature.nb_view, 
	commentaires_literature.totales_commentaires,
	DATE_FORMAT(commentaires_literature.dernier_commentaire,'%d/%m/%Y %H:%i:%S') AS dernier_commentaire

	FROM literature LEFT JOIN (

		SELECT id_article,COUNT(id_commentaire) AS totales_commentaires,
		MAX(date_commentaire) AS dernier_commentaire
		FROM commentaires_literature GROUP BY id_article

	)AS commentaires_literature ON literature.id= commentaires_literature.id_article 
	";





if ($rech!=""){

$requette=$requette." WHERE literature.title_literature like '%$rech%'";
}
if ($order!=""){
	$requette=$requette. "ORDER BY $order DESC";
}

if ($LIMIT!=""){
	$requette=$requette.$LIMIT;
}




	$result=mysql_query($requette) or die (mysql_error());

	if (mysql_num_rows($result) < 1) {
	header('HTTP/1.0 404 Not Found');
	echo 'Page not found!';
	exit();
}



while ($row=mysql_fetch_assoc($result)){
	$literature[]=$row;

}


return $literature;
}


function inserer_commentaire($id,$membre_commentaire,$corps_commentaire)
{

$inserer="INSERT INTO commentaires_literature (id_commentaire,id_article,membre_commentaire,corps_commentaire,date_commentaire) VALUES ('','$id','$membre_commentaire','$corps_commentaire',NOW())";
mysql_query($inserer) or die ("ERREUR LORS DU POST DU COMMENTAIRE ".mysql_error());

}

function recup_commentaires($id){

	$id=(int)$id;
	$commentaires= array();
	$sql= mysql_query("SELECT
	membre_commentaire,
	corps_commentaire,
	DATE_FORMAT (date_commentaire,'%d/%m/%Y %H:%i:%S') AS date_commentaire

	FROM commentaires_literature WHERE id_article='$id' ORDER BY id_commentaire DESC 

		") or die ("ERREUR LORS DE l'AFFICHAGE DES COMMENTAIRES ".mysql_error());


			while ($row=mysql_fetch_assoc($sql))
			{
				$commentaires[]=$row;
			}
			return $commentaires;
}









function afficher_commentaires($id){
$afficher="SELECT * from commentaires_literature where id_article='$id'";
$result=mysql_query($afficher) or die ("Erreur lors de l'affichage des commentaires");
if (mysql_num_rows($result)>0){

	while ($row=mysql_fetch_assoc($result)){

		extract($row);
		echo " <p> Commentaire emis par : <strong> $membre_commentaire</strong>, en date du $date_commentaire </p><p>$corps_commentaire</p>";
	}
	echo "<hr>";

}
else echo "Pas de commentaire pour cet article"; 
}

