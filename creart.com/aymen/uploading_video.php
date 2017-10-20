<?php 

 $host="localhost";
$username="root";
 $pwd='';
$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
$db=mysql_select_db("creart_bd",$conn);
 
$id_item_work=$_POST['id_item']; 
 
 
 $result_set=mysql_query("select work from cinema  where id =".$id_item_work." ");
 $row2=mysql_fetch_row($result_set) ;
 
 
 $id_work  =$row2[0];   
 $id_user=$_POST['id_user'];
 $item_name=$_POST['version_name'];
 $item_categorie=$_POST['version_categorie'];
 $item_changes=$_POST['version_Changes'];
 $item_description=$_POST['version_description'];
  $Date= date('Y-m-d  H:i:s');

 
 
 
 
if(isset($_FILES['video'])){ 
 
 
 
$video= $_FILES['video'] ; 
$video_Name=$video['name'] ; 
$video_tmp= $video['tmp_name']; 
$video_size=$video['size'] ; 
$video_error=$video['error'] ;
$video_allowed= array('mp4' ,'webm' , 'ogg' ) ;

$video_ext=  explode('.',$video_Name);
$video_ext=  strtolower(end($video_ext));
 																							 

 			  mysql_query("Insert Into cinema (title_cinema,kind,description,date_pub,taux_rating,nb_view,video_extension,changes,work,id_user) Values ('".$item_name."','".$item_categorie."','".$item_description."','".$Date."',0,0, '".$video_ext."','". $item_changes."', '".$id_work."' ,'".$id_user."' )   "); 
			 $result_set=mysql_query("select id  from cinema  where title_cinema='".$item_name."' ");
			 $row=mysql_fetch_row($result_set) ;
		 	 $id_video=$row[0];



if(in_array( $video_ext,$video_allowed)) 
{
if($video_error==0)
  { 
      $video_name_new= $id_video.'.'.$video_ext;
	
	  $video_destination_new=  '/creart.com/Upload/cinema/'.$id_work.'/'.$video_name_new ; 
 
	  if (move_uploaded_file($video_tmp,$video_destination_new) )
	  {
 	    header ("location: /creart.com/cinema_affich.php?id_item=$id_video" );
	  }
	  else 
	  {
		   header ("location: /creart.com/cinema_affich.php?id_item=$id_item_work" );
			}
	  
}
 	}
 
 
	
	}
	 

?>