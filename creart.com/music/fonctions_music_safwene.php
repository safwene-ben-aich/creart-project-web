<?php
include_once ('config.php');
include_once '../common.php';
include_once('../login.php'); // Includes Login Script

function recup_article($rech,$order,$LIMIT){
$arciles=array();
$requette="SELECT music.id, 
	music.title_music, 
	music.kind,
	music.taux_rating,
	music.membre, 
	music.description, 
	DATE_FORMAT (music.date_pub,'%d/%m/%Y %H:%i:%S') AS date_pub, 
	music.taux_rating, 
	music.nb_view, 
	commentaires_music.totales_commentaires,
	DATE_FORMAT(commentaires_music.dernier_commentaire,'%d/%m/%Y %H:%i:%S') AS dernier_commentaire

	FROM music LEFT JOIN (

		SELECT id_article,COUNT(id_commentaire) AS totales_commentaires,
		MAX(date_commentaire) AS dernier_commentaire
		FROM commentaires_music GROUP BY id_article

	)AS commentaires_music ON music.id= commentaires_music.id_article 
	";





if ($rech!=""){

$requette=$requette." WHERE music.title_music like '%$rech%'";
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
	$music[]=$row;

}


return $music;
}


function inserer_commentaire($id,$membre_commentaire,$corps_commentaire)
{

$inserer="INSERT INTO commentaires_music (id_commentaire,id_article,membre_commentaire,corps_commentaire,date_commentaire) VALUES ('','$id','$membre_commentaire','$corps_commentaire',NOW())";
mysql_query($inserer) or die ("ERREUR LORS DU POST DU COMMENTAIRE ".mysql_error());

}

function recup_commentaires($id){

	$id=(int)$id;
	$commentaires= array();
	$sql= mysql_query("SELECT
	membre_commentaire,
	corps_commentaire,
	DATE_FORMAT (date_commentaire,'%d/%m/%Y %H:%i:%S') AS date_commentaire

	FROM commentaires_music WHERE id_article='$id' ORDER BY id_commentaire DESC 

		") or die ("ERREUR LORS DE l'AFFICHAGE DES COMMENTAIRES ".mysql_error());


			while ($row=mysql_fetch_assoc($sql))
			{
				$commentaires[]=$row;
			}
			return $commentaires;
}









function afficher_commentaires($id){
$afficher="SELECT * from commentaires_music where id_article='$id'";
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

