<?php 

 $host="localhost";
$username="root";
  $pwd='';

$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
$db=mysql_select_db("creart_bd",$conn);
 
$id_item_work=$_POST['id_item']; 
 
 $result_set=mysql_query("select work from music  where id ='".$id_item_work."' ");
 $row=mysql_fetch_row($result_set) ;
 
 
 $id_work  =$row[0];   
  $id_user=$_POST['id_user'];
 $item_name=$_POST['Audio_name'];
 $item_categorie=$_POST['categorie'];
 $item_changes=$_POST['Changes'];
 $item_description=$_POST['description'];
  $Date= date('Y-m-d  H:i:s');

 
 
 
if(isset($_FILES['Audio'])){ 
 
$Audio= $_FILES['Audio'] ; 
$Audio= $_FILES['Audio'] ; 
$Audio_Name=$Audio['name'] ; 
$Audio_tmp= $Audio['tmp_name']; 
$Audio_size=$Audio['size'] ; 
$Audio_error=$Audio['error'] ;
$Audio_allowed= array('mp3' ,'webm' , 'ogg' ) ;

$Audio_ext=  explode('.',$Audio_Name);
$Audio_ext=  strtolower(end($Audio_ext));


             mysql_query("Insert Into music (title_music,kind,description,date_pub,taux_rating,nb_view,music_extension,changes,work,id_user) Values ('".$item_name."','".$item_categorie."','".$item_description."','".$Date."',0,0,'".$Audio_ext."','". $item_changes."','". $id_work ."','".$id_user."')   "); 
			 $result_set=mysql_query("select id  from music  where title_music='".$item_name."' ");
			 $row=mysql_fetch_row($result_set) ;
		 	 $id_Audio=$row[0];




if(in_array( $Audio_ext,$Audio_allowed)) 
{
if($Audio_error==0)
  {
 
      $Audio_name_new= $id_Audio.'.'.$Audio_ext;
	  $Audio_destination_new=  '../Upload/Music/'.$id_work.'/'.$Audio_name_new ; 
	  
	  
	  
	  
	  if (move_uploaded_file($Audio_tmp,$Audio_destination_new) )
	  {
	  header ("location: /creart.com/music_affich.php?id_item=$id_Audio" );
	  }  
	  else 
	  {
	  header ("location: /creart.com/music_affich.php?id_item=$id_item_work" );
	  }
	  
	  
}
 	}
 
 
	
	}

?>