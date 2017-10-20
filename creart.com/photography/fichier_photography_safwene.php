

<?php
require_once 'fonctions_photography_safwene.php';
$rech="";
$order="";

$page = (int) (!isset($_GET['p'])) ? 1 : $_GET['p'];
$start = ($page * $limit) - $limit;


if (isset($_GET['x'])){
$_SESSION['recherche']=$_GET['x'];

}


if (isset($_SESSION['categoriePhotography'])){
$order=$_SESSION['categoriePhotography'];
}
if (isset($_SESSION['recherche'])){
$rech=$_SESSION['recherche'];
}
$photographys=recup_article($rech,$order,"");
if(sizeof($photographys) > ($page * $limit) ){
	$next = ++$page;
}

if (isset($_SESSION['categoriePhotography'])){
$order=$_SESSION['categoriePhotography'];

}
if (isset($_SESSION['recherche'])){
$rech=$_SESSION['recherche'];
}

$photographys=recup_article($rech,$order," LIMIT {$start}, {$limit}");
?>
<?php 


foreach ($photographys as $photography) {
	
?>

<div class="item_safwene" id="item_safwene-<?php echo $photography['id'] ?>">


<?php

	echo"<h2 class='h2photography'>  Title : <a href='../photography_affich.php?id_item=".$photography['id']."'>".$photography['title_photography']."</a></h2>Vu(s) : ".$photography['nb_view']. " 
	<span class='uploader' ><h4> Posté par : ".$photography['membre']." le ".$photography['date_pub']."</h4></span>
	<hr><p>".$photography['description']."<hr>";
		
echo "<div class='commentaire'>
<a href='#commentaire' id=".$photography['id'].">(".($photography['totales_commentaires']==NULL ? 0 :$photography['totales_commentaires']).") commentaires</a>, dérnier commentaire posté le ".($photography['dernier_commentaire']== NULL ?
		
		'(Aucun commentaire trouvé)':$photography['dernier_commentaire'])  ." </p>
		</div>";


		echo'<span class="starRating">'; 

for($i=5;$i>0;$i--)
					{
						$checked = "";
						if($i==($photography['taux_rating'] | 0))
							$checked = "checked";
						echo "<input type='radio' name='rating-".$photography['id']."' value='".$i."' ".$checked.">";
						echo "<label for='rating5-".$photography['id']."'>".$i."</label>";
					}
		echo "</span>";
?>

<div id="feedback<?php echo $photography['id']; ?>" style=" display:none;"></div>
<form method="POST" class="PostCommentaire"action="" id="form<?php echo $photography['id'];?>">
	<p>Votre nom:</p>
	<input type="text" id="membre_commentaire" 
	 <?php if(isset($_SESSION['login_user'])){?>
value=<?php echo $_SESSION['login_user']; ?> disabled

<?php
}
?>



	/>
	<p>Votre commentaire</p>
	<textarea rows="4" cols="20" id="corps_commentaire"> </textarea></br></br> 
	<input type="submit" value="Poster" id="submit"/> 

	</form>
	


<?php

echo "</div>
";
}

?>
<?php if (isset($next)): ?>
	<div class="nav">
		<a href='photography.php?p=<?php echo $next?>'>Next</a>
	</div>
	<?php endif?>
