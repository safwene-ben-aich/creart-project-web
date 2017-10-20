<?php 
include ('fonctions_music_safwene.php');

if (isset($_POST['id']) && !empty($_POST['id'])){

$id=$_POST['id'];
$commentaires =(recup_commentaires($id));

foreach ($commentaires as $commentaire) {
	echo "<h4>commentaire posté par : ".$commentaire['membre_commentaire']."
	le ".$commentaire['date_commentaire']."</h4><p>".$commentaire['corps_commentaire']."</p><hr/>";
}

}


 ?>