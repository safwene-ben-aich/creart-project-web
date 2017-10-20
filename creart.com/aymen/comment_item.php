<?php 
 
  $host="localhost";
$username="root";
 
$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
$db=mysql_select_db("creart_bd",$conn);
 
 
$name_membre=$_POST['user_name'];
$comment_content=$_POST['comment'];
$id_article=$_POST['id_article'];
$type_article=$_POST['type_article'];
$Date= date('Y-m-d  H:i:s');
 
if($type_article=='cinema') 
{
	mysql_query("Insert into commentaires_cinema (id_article,membre_commentaire,corps_commentaire,date_commentaire) values ('".$id_article."' ,'".$name_membre."','".$comment_content."','".$Date."')") ; 

	 }
else if ($type_article=='literature') 
{
	mysql_query("Insert into commentaires_literature (id_article ,membre_commentaire,corps_commentaire,date_commentaire) values ('".$id_article."' ,'".$name_membre."','".$comment_content."','".$Date."')") ; 

	}
else if ($type_article=='music') 
{
	mysql_query("Insert into commentaires_music (id_article ,membre_commentaire,corps_commentaire,date_commentaire) values ('".$id_article."' ,'".$name_membre."','".$comment_content."','".$Date."')") ; 

	}
else if ($type_article=='photography') 
{
	mysql_query("Insert into commentaires_photography (id_article ,membre_commentaire,corps_commentaire,date_commentaire) values ('".$id_article."' ,'".$name_membre."','".$comment_content."','".$Date."')") ; 

	}


  
  header ("location: ../".$type_article."_affich.php?id_item=$id_article" );
 ?> 