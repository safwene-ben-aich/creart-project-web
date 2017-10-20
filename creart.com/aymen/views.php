<?php

$end=0; 
$view_id_user=$id_user;
$view_type_item=$type;
$view_id_item=$id_item;
 
$comande=mysql_query("select id_view from view  where id_user=$view_id_user and type_item='$view_type_item' and id_item=$view_id_item ") ;
  
if(!mysql_fetch_row($comande))
{
	mysql_query ("Insert Into view (type_item,id_user,id_item) Values ('$view_type_item' ,$view_id_user,$view_id_item) ")	;
	$commande2=mysql_query("select * from view where type_item='".$view_type_item."' and id_item='".$view_id_item."'");
	$cmp=0;
	while($var=mysql_fetch_row($commande2))
	{
		$cmp=$cmp+1;
 
		}
	 
	
	mysql_query("Update  $type  SET nb_view=$cmp where id=$view_id_item");	
	$nb_view=$cmp;
 
}
else 
{	$result=mysql_query("select nb_view from  $type  where id ='".$id_item."' ");
 	$rows=mysql_fetch_row($result) ;
	$nb_view=$rows['0'];
	}
 




 ?>