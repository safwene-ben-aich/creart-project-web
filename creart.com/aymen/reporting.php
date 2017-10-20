<?php

$host="localhost";
$username="root";
 $pwd='';
$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
$db=mysql_select_db("creart_bd",$conn);

$id_item= $_POST['id_item'] ;
$id_user=$_POST['id_user'];
				$item_type= $_POST['itemtype'] ;
					 if ($item_type=='m' )
							$type= 'music';
					 else if  ($item_type=='p' )
							$type='photography';
					 else if  ($item_type=='l') 
							$type='literature';
					 else if  ($item_type=='c' ) 
							$type='cinema' ; 
 

$report_content=$_POST['report_content'];
 
mysql_query("Insert Into opinion (id_item,report,signal_content,type,id_user) Values ('".$id_item."',1,'".$report_content."','".$type."','".$id_user."')");


					 if ($item_type=='m' )
							header ("location: /creart.com/music_affich.php?id_item=$id_item" );
					 else if  ($item_type=='p' )
							header ("location: /creart.com/photography_affich.php?id_item=$id_item" );
					 else if  ($item_type=='l') 
							header ("location: /creart.com/literature_affich.php?id_item=$id_item" );
					 else if  ($item_type=='c' ) 
					
							header ("location: /creart.com/cinema_affich.php?id_item=$id_item" );

 ?>
