<?php
include ('fonctions_literature_safwene.php');
if (isset($_POST['id']) && isset($_POST['membre_commentaire']) && isset($_POST['corps_commentaire']))
{
$id=(int)$_POST['id'];
$membre_commentaire= mysql_real_escape_string(htmlspecialchars($_POST['membre_commentaire']));
$corps_commentaire= mysql_real_escape_string(htmlspecialchars($_POST['corps_commentaire']));

	if (!empty($membre_commentaire)&& !empty($corps_commentaire))
	{

		inserer_commentaire($id,$membre_commentaire,$corps_commentaire);

	$commentaires =(recup_commentaires($id));

foreach ($commentaires as $commentaire) {
	echo "<h4>commentaire posté par : ".$commentaire['membre_commentaire']."
le ".$commentaire['date_commentaire']."</h4><p>".$commentaire['corps_commentaire']."</p><hr/>";

}

	}



}






 ?>