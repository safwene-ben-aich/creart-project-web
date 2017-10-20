<?php 
$host="localhost";
$username="root";
 
$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
$db=mysql_select_db("creart_bd",$conn);


$id_item=$_POST['id_item'];
$type=$_POST['type'];
 
  
if ( $type =='cinema' )
 {
	  
		mysql_query( "Delete from cinema where id_cinema=".$id_item." "); 
 }
else if ($type=='literature')
{
    mysql_query( "delete from Literature    where id_Literature=".$id_item."  "); 
}
else if ($type=='music')
 {	  
mysql_query( " delete from music    where id_music=".$id_item." "); 
 }
else if ($type=='photography')
 {	mysql_query( "delete from photography     where id_photography=".$id_item." "); 
  
 }
   header ("location: my_items.php" );
    ?> 
 