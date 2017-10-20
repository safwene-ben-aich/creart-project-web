

<?php
require_once 'fonctions_cinema_safwene.php';
$rech="";
$order="";

$page = (int) (!isset($_GET['p'])) ? 1 : $_GET['p'];
$start = ($page * $limit) - $limit;


if (isset($_GET['x'])){
$_SESSION['recherche']=$_GET['x'];

}


if (isset($_SESSION['categorieCinema'])){
$order=$_SESSION['categorieCinema'];
}
if (isset($_SESSION['recherche'])){
$rech=$_SESSION['recherche'];
}
$cinemas=recup_article($rech,$order,"");
if(sizeof($cinemas) > ($page * $limit) ){
	$next = ++$page;
}

if (isset($_SESSION['categorieCinema'])){
$order=$_SESSION['categorieCinema'];

}
if (isset($_SESSION['recherche'])){
$rech=$_SESSION['recherche'];
}

$cinemas=recup_article($rech,$order," LIMIT {$start}, {$limit}");
?>
<?php 


foreach ($cinemas as $cinema) {
	
?>

<div class="item_safwene" id="item_safwene-<?php echo $cinema['id'] ?>">


<?php

	echo"<h2 class='h2Cinema'>  Title : <a href='../cinema_affich.php?id_item=".$cinema['id']."'>".$cinema['title_cinema']."</a></h2>Vu(s) : ".$cinema['nb_view']. " 
	<span class='uploader' ><h4> Posté par : ".$cinema['membre']." le ".$cinema['date_pub']."</h4></span>
	<hr><p>".$cinema['description']."<hr>";
		
echo "<div class='commentaire'>
<a href='#commentaire' id=".$cinema['id'].">(".($cinema['totales_commentaires']==NULL ? 0 :$cinema['totales_commentaires']).") commentaires</a>, dérnier commentaire posté le ".($cinema['dernier_commentaire']== NULL ?
		
		'(Aucun commentaire trouvé)':$cinema['dernier_commentaire'])  ." </p>
		</div>";


		echo'<span class="starRating">'; 

for($i=5;$i>0;$i--)
					{
						$checked = "";
						if($i==($cinema['taux_rating'] | 0))
							$checked = "checked";
						echo "<input type='radio' name='rating-".$cinema['id']."' value='".$i."' ".$checked.">";
						echo "<label for='rating5-".$cinema['id']."'>".$i."</label>";
					}
		echo "</span>";
?>

<div id="feedback<?php echo $cinema['id']; ?>" style=" display:none;"></div>
<form method="POST" class="PostCommentaire"action="" id="form<?php echo $cinema['id'];?>">
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
		<a href='cinema.php?p=<?php echo $next?>'>Next</a>
	</div>
	<?php endif?>
