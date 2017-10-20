<?php 

 $host="localhost";
$username="root";
  $pwd='';

$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
$db=mysql_select_db("creart_bd",$conn);
 
$id_item_work=$_POST['id_item']; 

 
  $result_set=mysql_query("select work from Photography  where id ='".$id_item_work."' ");
 $row99=mysql_fetch_row($result_set) ;
 
 
 $id_work  =$row99[0];   
  $id_user=$_POST['id_user'];
 $item_name=$_POST['Photo_name'];
 $item_categorie=$_POST['categorie'];
 $item_changes=$_POST['Changes'];
 $item_description=$_POST['description'];
  $Date= date('Y-m-d  H:i:s');

 
 
 
 
if(isset($_FILES['Photo'])){ 
 
 
$Photo= $_FILES['Photo'] ; 
$Photo_Name=$Photo['name'] ; 
$Photo_tmp= $Photo['tmp_name']; 
$Photo_size=$Photo['size'] ; 
$Photo_error=$Photo['error'] ;
$Photo_allowed=array( 'jpg','bmp','png');

$Photo_ext=  explode('.',$Photo_Name);
$Photo_ext=  strtolower(end($Photo_ext));



             mysql_query("Insert Into photography (title_photography,kind,description,date_pub,taux_rating,nb_view,photography_extension,changes,work,id_user) Values ('".$item_name."','".$item_categorie."','".$item_description."','".$Date."',0,0,'".$Photo_ext."','". $item_changes."','". $id_work ."','".$id_user."')   "); 
			 $result_set=mysql_query("select id  from photography  where title_photography='".$item_name."' ");
			 $row=mysql_fetch_row($result_set) ;
		 	 $id_Photo=$row[0];


 

if(in_array( $Photo_ext,$Photo_allowed)) 
{
if($Photo_error==0)
  {
 
      $Photo_name_new= $id_Photo.'.'.$Photo_ext;
	  $Photo_destination_new=  '../Upload/Photography/'.$id_work.'/'.$Photo_name_new ; 
	  if (move_uploaded_file($Photo_tmp,$Photo_destination_new) )
	  {
 header ("location: ../photography_affich.php?id_item=$id_Photo" );
	  }
	  	  else 
	  {
	  header ("location: /creart.com/photography_affich.php?id_item=$id_item_work" );
	  }
}
 	}
 
 
	
	}

?>