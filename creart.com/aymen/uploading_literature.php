<?php 
 
 $host="localhost";
$username="root";
  $pwd='';

$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
$db=mysql_select_db("creart_bd",$conn);
 
$id_item_work=$_POST['id_item']; 
 
 
 
 $result_set=mysql_query("select work from Literature  where id ='".$id_item_work."' ");
 $row2=mysql_fetch_row($result_set) ;
 
 
  $id_work  =$row2[0];   
  $id_user=$_POST['id_user'];
  $item_name=$_POST['literature_name'];
  $item_categorie=$_POST['categorie'];
  $item_changes=$_POST['Changes'];
  $item_description=$_POST['description'];
  $Date= date('Y-m-d  H:i:s');

 
 
 
 
 
 
 
if(isset($_FILES['literature'])){ 


 
$literature= $_FILES['literature'] ; 
$literature_Name=$literature['name'] ; 
$literature_tmp= $literature['tmp_name']; 
$literature_size=$literature['size'] ; 
$literature_error=$literature['error'] ;
$literature_allowed=array( 'pdf','txt' );

$literature_ext=  explode('.',$literature_Name);
$literature_ext=  strtolower(end($literature_ext));

 
																																								 					
		 mysql_query("Insert Into literature (title_literature,kind,description,date_pub,taux_rating,nb_view,literature_extension,changes,work,id_user) Values ('".$item_name."','".$item_categorie."','".$item_description."','".$Date."',0,0,'".$literature_ext."','". $item_changes."','". $id_work ."','".$id_user."')   "); 
			 $result_set=mysql_query("select id  from Literature  where title_Literature='".$item_name."' ");
			 $row=mysql_fetch_row($result_set) ;
		 $id_literature=$row[0];
 
if(in_array( $literature_ext,$literature_allowed)) 
{
	 
if($literature_error==0)
  {


      $literature_name_new= $id_literature.'.'.$literature_ext;
	  $literature_destination_new=  '../Upload/literature/'.$id_work.'/'.$literature_name_new ; 
 
	
	if (move_uploaded_file($literature_tmp,$literature_destination_new) )
	  {
   header ("location: /creart.com/literature_affich.php?id_item=$id_literature" );		
	  }
	  else 
	  {
		     header ("location: /creart.com/literature_affich.php?id_item=$id_item_work" );	
		  }
}
 	}
 
 
	
	}
 
?>