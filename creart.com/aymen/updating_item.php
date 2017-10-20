<?php 


$host="localhost";
$username="root";
 
$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
$db=mysql_select_db("creart_bd",$conn);


$id_item=$_POST['id_item'];
$type=$_POST['type'];
$name=$_POST['version_name'];
$description=$_POST['version_description'];
$change=$_POST['version_Changes'];
$categorie=$_POST['version_categorie'];
  
if ( $type =='cinema' )
 {
	  
		mysql_query( "UPDATE cinema SET  title_cinema='".$name."' , kind='".$categorie."' , description='".$description."' , changes ='".$change."' where id =".$id_item." "); 
 }
else if ($type=='literature')
{
    mysql_query( "update Literature set  title_Literature='".$name."' , kind='".$categorie."' , description='".$description."' , changes ='".$change."' where id =".$id_item."  "); 
}
else if ($type=='music')
 {	  
mysql_query( "update music  set title_music='".$name."' , kind='".$categorie."' , description='".$description."' , changes ='".$change."' where id =".$id_item." "); 
 }
else if ($type=='photography')
 {	mysql_query( "update photography set title_photography='".$name."' , kind='".$categorie."' , description='".$description."' , changes ='".$change."' where id =".$id_item." "); 
  
 }
   header ("location: my_items.php" );
?> 