

<?php
require_once 'fonctions_literature_safwene.php';
$rech="";
$order="";

$page = (int) (!isset($_GET['p'])) ? 1 : $_GET['p'];
$start = ($page * $limit) - $limit;


if (isset($_GET['x'])){
$_SESSION['recherche']=$_GET['x'];

}


if (isset($_SESSION['categorieLiterature'])){
$order=$_SESSION['categorieLiterature'];
}
if (isset($_SESSION['recherche'])){
$rech=$_SESSION['recherche'];
}
$literatures=recup_article($rech,$order,"");
if(sizeof($literatures) > ($page * $limit) ){
	$next = ++$page;
}

if (isset($_SESSION['categorieLiterature'])){
$order=$_SESSION['categorieLiterature'];

}
if (isset($_SESSION['recherche'])){
$rech=$_SESSION['recherche'];
}

$literatures=recup_article($rech,$order," LIMIT {$start}, {$limit}");
?>
<?php 


foreach ($literatures as $literature) {
	
?>

<div class="item_safwene" id="item_safwene-<?php echo $literature['id'] ?>">


<?php

	echo"<h2 class='h2literature'>  Title : <a href='../literature_affich.php?id_item=".$literature['id']."'>".$literature['title_literature']."</a></h2>Vu(s) : ".$literature['nb_view']. " 
	<span class='uploader' ><h4> Posté par : ".$literature['membre']." le ".$literature['date_pub']."</h4></span>
	<hr><p>".$literature['description']."<hr>";
		
echo "<div class='commentaire'>
<a href='#commentaire' id=".$literature['id'].">(".($literature['totales_commentaires']==NULL ? 0 :$literature['totales_commentaires']).") commentaires</a>, dérnier commentaire posté le ".($literature['dernier_commentaire']== NULL ?
		
		'(Aucun commentaire trouvé)':$literature['dernier_commentaire'])  ." </p>
		</div>";


		echo'<span class="starRating">'; 

for($i=5;$i>0;$i--)
					{
						$checked = "";
						if($i==($literature['taux_rating'] | 0))
							$checked = "checked";
						echo "<input type='radio' name='rating-".$literature['id']."' value='".$i."' ".$checked.">";
						echo "<label for='rating5-".$literature['id']."'>".$i."</label>";
					}
		echo "</span>";
?>

<div id="feedback<?php echo $literature['id']; ?>" style=" display:none;"></div>
<form method="POST" class="PostCommentaire"action="" id="form<?php echo $literature['id'];?>">
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
		<a href='literature.php?p=<?php echo $next?>'>Next</a>
	</div>
	<?php endif?>
