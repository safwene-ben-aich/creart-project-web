<?php 
 
$host="localhost";
$username="root";
  $pwd='';

$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
$db=mysql_select_db("creart_bd",$conn);
	 
  

$result_upload= 'no'; 
$id_user=$_POST['id_user'];
$item_type=$_POST['work_type'];
$Name=$_POST['Work_title'];
$Item_name=$_POST['item_name'];
$Category=$_POST['categorie'];
$description=$_POST['description'];
$Date= date('Y-m-d  H:i:s');
 
 
 
if($item_type=='Music') 
{  
mysql_query("Insert Into music (title_music,kind,description,date_pub,taux_rating,nb_view,music_extension,changes,work,id_user) Values ('".$Item_name."','".$Category."','".$description."','".$Date."',0,0,'aaa','The First Version',0,'".$id_user."' )"); 
 
 $result_set=mysql_query("select id  from music  where title_music='".$Item_name."' ");
 $row=mysql_fetch_row($result_set) ;
 
 
$id_item =$row[0];  

}

else if($item_type=='Cinema') 
{mysql_query("Insert Into cinema (title_cinema,kind,description,date_pub,taux_rating,nb_view,video_extension,changes,work,id_user) Values ('".$Item_name."','".$Category."','".$description."','".$Date."',0,0,'aaa','The First Version',0,'".$id_user."')"); 
 
 $result_set=mysql_query("select id  from cinema  where title_cinema='".$Item_name."' ");
 $row=mysql_fetch_row($result_set) ;
 
 
$id_item =$row[0];  

}
else if ($item_type=='Photography') 
{  
	mysql_query("Insert Into photography (title_photography,kind,description,date_pub,taux_rating,nb_view,photography_extension,changes,work,id_user) Values ('".$Item_name."','".$Category."','".$description."','".$Date."',0,0,'aaa','The First Version',0,'".$id_user."')"); 
 
 $result_set=mysql_query("select id  from photography  where title_photography='".$Item_name."' ");
 $row=mysql_fetch_row($result_set) ;
 
  
$id_item =$row[0];
 

}
else if ($item_type=='Literature') 

{mysql_query("Insert Into literature (title_literature,kind,description,date_pub,taux_rating,nb_view,literature_extension,changes,work,id_user) Values ('".$Item_name."','".$Category."','".$description."','".$Date."',0,0,'aaa','The First Version',0,'".$id_user."')"); 
 
 $result_set=mysql_query("select id  from Literature  where title_Literature='".$Item_name."' ");
 $row=mysql_fetch_row($result_set) ;
 
 
$id_item =$row[0];  

}


 
 

 
 
  
  
  
  
 mysql_query("Insert Into work (item,work_name,work_type) Values ('".$id_item."','".$Name."' ,'".$item_type."' )") ; 

$result_set1=mysql_query("select id_work from work  where item='".$id_item."' AND work_type='".$item_type."' ");
$row1=mysql_fetch_row($result_set1) ;
 
$id_work= $row1[0];
  

 
 
 
 
 
 
if(isset($_FILES['work'])){ 
 
 
 
$work= $_FILES['work'] ; 
$work_Name=$work['name'] ; 
$work_tmp= $work['tmp_name']; 
$work_size=$work['size'] ; 
$work_error=$work['error'] ;
$video_allowed= array('mp4' ,'webm' , 'ogg' ) ;
$Audio_allowed= array('mp3','ogg','wav');
$Photo_allowed=array( 'jpg','bmp','png');
$literature_allowed=array('doc', 'docx' ,'txt', 'pdf');
$work_allowed= array( 'mp4' ,'webm' , 'ogg','mp3' ,'wav','jpg','bmp','png','doc', 'docx' ,'txt', 'pdf');
$work_item_type='nothing' ; 
$item_type=$_POST['work_type'];



$work_ext=  explode('.',$work_Name);
$work_ext=  strtolower(end($work_ext));


if ( in_array($work_ext, $video_allowed)&& $item_type=='Cinema')
{$work_item_type='cinema' ; }
else if ( in_array($work_ext,$Audio_allowed) && $item_type=='Music'  )
{$work_item_type='music' ; }
else if(in_array($work_ext,$Photo_allowed)&& $item_type=='Photography' )
{$work_item_type='photography' ; }
else if(in_array($work_ext,$literature_allowed)&& $item_type=='Literature' )
{$work_item_type='Literature' ; } 
  
 
 

if((in_array( $work_ext,$work_allowed)) && $work_item_type!='nothing' ) 
{
if($work_error==0)
  {
 
      $work_name_new= $id_item.'.'.$work_ext;
	    mkdir('../upload/'.$work_item_type.'/'.$id_work.' /', 0777, true);
	  $work_destination_new=  '../Upload/'.$work_item_type.'/'.$id_work.'/'.$work_name_new ; 
	  if (move_uploaded_file($work_tmp,$work_destination_new) )
	  {
	  $result_upload= 'yes';
	  }
}
 	}
 
 }  

 
 
 $Item_ext=$work_ext ; 


if($item_type=='Music') 
 mysql_query("UPDATE  music  SET  music_extension = '".$Item_ext."' ,work='".$id_work."' where id = '".$id_item."' "); 
else if($item_type=='Cinema') 
mysql_query("UPDATE cinema SET video_extension = '".$Item_ext."'  , work='".$id_work."' where id = '".$id_item."'"); 

else if ($item_type=='Photography') 
mysql_query("UPDATE  photography SET  photography_extension ='".$Item_ext."'  , work='".$id_work."' where id = '".$id_item."'"); 

else if ($item_type=='Literature') 
mysql_query("UPDATE  literature SET literature_extension ='".$Item_ext."' , work='".$id_work."' where id = '".$id_item."' "); 


 
 

 if($result_upload=='yes')
 {
	 if($item_type=='Music')
	 {
		  
	 
 		 header ("location: /creart.com/music_affich.php?id_item=$id_item" );		 
		 
		 }
	 else if ($item_type=='Cinema')
	 {
		 		  
		 
 		 header ("location: /creart.com/cinema_affich.php?id_item=$id_item" ); 	 }
	 else if ($item_type=='Photography')
	 {
		 header ("location: /creart.com/Photography_affich.php?id_item=$id_item" );		
		 }
	 else if ($item_type=='Literature')
	 {
		  header ("location: /creart.com/literature_affich.php?id_item=$id_item" );		
		 }
	 
	 }
 
  
 
  
?>