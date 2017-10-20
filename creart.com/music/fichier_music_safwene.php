

<?php
require_once 'fonctions_music_safwene.php';
$rech="";
$order="";

$page = (int) (!isset($_GET['p'])) ? 1 : $_GET['p'];
$start = ($page * $limit) - $limit;


if (isset($_GET['x'])){
$_SESSION['recherche']=$_GET['x'];

}


if (isset($_SESSION['categorieMusic'])){
$order=$_SESSION['categorieMusic'];
}
if (isset($_SESSION['recherche'])){
$rech=$_SESSION['recherche'];
}
$musics=recup_article($rech,$order,"");
if(sizeof($musics) > ($page * $limit) ){
	$next = ++$page;
}

if (isset($_SESSION['categorieMusic'])){
$order=$_SESSION['categorieMusic'];

}
if (isset($_SESSION['recherche'])){
$rech=$_SESSION['recherche'];
}

$musics=recup_article($rech,$order," LIMIT {$start}, {$limit}");
?>
<?php 


foreach ($musics as $music) {
	
?>

<div class="item_safwene" id="item_safwene-<?php echo $music['id'] ?>">


<?php

	echo"<h2 class='h2music'>  Title : <a href='../music_affich.php?id_item=".$music['id']."'>".$music['title_music']."</a></h2>Vu(s) : ".$music['nb_view']. " 
	<span class='uploader' ><h4> Posté par : ".$music['membre']." le ".$music['date_pub']."</h4></span>
	<hr><p>".$music['description']."<hr>";
		
echo "<div class='commentaire'>
<a href='#commentaire' id=".$music['id'].">(".($music['totales_commentaires']==NULL ? 0 :$music['totales_commentaires']).") commentaires</a>, dérnier commentaire posté le ".($music['dernier_commentaire']== NULL ?
		
		'(Aucun commentaire trouvé)':$music['dernier_commentaire'])  ." </p>
		</div>";


		echo'<span class="starRating">'; 

for($i=5;$i>0;$i--)
					{
						$checked = "";
						if($i==($music['taux_rating'] | 0))
							$checked = "checked";
						echo "<input type='radio' name='rating-".$music['id']."' value='".$i."' ".$checked.">";
						echo "<label for='rating5-".$music['id']."'>".$i."</label>";
					}
		echo "</span>";
?>

<div id="feedback<?php echo $music['id']; ?>" style=" display:none;"></div>
<form method="POST" class="PostCommentaire"action="" id="form<?php echo $music['id'];?>">
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
		<a href='music.php?p=<?php echo $next?>'>Next</a>
	</div>
	<?php endif?>
