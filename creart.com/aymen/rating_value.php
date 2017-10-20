<?php 
$host="localhost";
$username="root";
 $pwd='';
$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
$db=mysql_select_db("creart_bd",$conn);


$id_item=$_GET['id_item'];
$rating_selected=$_GET['rating'];
$ext=$_GET['ext'];
$id_user=$_GET['id_user'];
$type=$_GET['type']; 
 

 
 
 if($type=='c' )
 $type='cinema' ;
 else if ($type=='m')
 $type='music';
 else if ($type=='l') 
 $type='literature';
 else if ($type=='p' )
 $type=  'photography';
 
 
  $result_set=mysql_query("select rating from opinion  where  id_item=".$id_item." AND id_user=".$id_user." AND type ='".$type."';  ");
   
  
 
 if ( $row1=mysql_fetch_row($result_set) )
 { mysql_query("Update  opinion  SET rating=".$rating_selected."  where id_item =".$id_item." and id_user=".$id_user." and type ='".$type."' "); 

 }
else 
 { mysql_query( "INSERT INTO  opinion (rating,id_item  ,type,id_user) VALUES     (".$rating_selected.",".$id_item.",'".$type."',".$id_user.") ");
 
 }
$total=0 ; 
$nbr =0 ;  

$count= mysql_query("select rating from opinion where id_item =".$id_item." and type ='".$type."' ");
while($counter=mysql_fetch_row($count))
 {
	 $total=$counter['0']+$total;	
	$nbr=$nbr+1;  
	 }
	 
$rest=$total%$nbr;
 $moy=($total-$rest)/$nbr;
 if($type=='cinema' )
 mysql_query("Update cinema set taux_rating=".$moy." where id  =".$id_item."  ");
 else if ($type=='music') 
  mysql_query("Update music set taux_rating=".$moy." where id  =".$id_item."  ");
 else if ($type=='literature') 
 mysql_query("Update literature set taux_rating=".$moy." where id  =".$id_item."  ");
 else if ($type=='photography' )
 mysql_query("Update photography set taux_rating=".$moy." where id  =".$id_item."  ");
 
 
   header("location: ../".$type."_affich.php?id_item=".$id_item." ");
 
?>