

<?php
require_once ('fonctions_music_safwene.php');

?>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>music</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="ajax_music_safwene.js"></script>
	<script type="text/javascript" src="../js/jquery-ias.min.js"></script>

	

<center><h1 class="h2music">Les nouveautés en music</h2></center>

<div class="wrap_safwene" id="wrap_safwene">
<?php 
		ob_start();
		include 'fichier_music_safwene.php';
		echo ob_get_clean();
?>
</div>

<script src="func_safwene.js"></script>
