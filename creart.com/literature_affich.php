<?php 
 
  	
		include_once 'common.php';
  
 		 include('session.php');
		 $id_user=$row['id'] ;
 		 $name_user=$row['name'];
  
	 $id_item=$_GET['id_item']  ; 
	 $result_set4=mysql_query("select * from literature  where id ='".$id_item."' ");
	 $row4=mysql_fetch_row($result_set4) ;
	 
 	$item_name=$row4['1']  ;
	$item_rating=$row4['5'];
	$id_work =$row4[9];  
	$ext=$row4[7]; 
	 $select_rating = mysql_query ("select * from opinion where   id_item=".$id_item." AND id_user=".$id_user." AND type='literature' " ) ;
     $row5=mysql_fetch_row($select_rating); 
     $item_rating  =$row5['3'];

     /************* View************/
     	 $type='literature';
	 include('aymen/views.php');
	 /************ end view *********/
	 
          ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title><?php echo $lang['LITERATURE']; ?></title>
 

 	 
		<link href="css/aymen/item.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
   <link href="css/aymen/comment_item.css"rel="stylesheet" />
  <link href="css/aymen/rating.css"rel="stylesheet" />

		<link rel="shortcut icon" href="images/icone_logo.png" />
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
          <script src="js/comment_items_aymen.js"></script>

<!--aaa-->		
 
<link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>



<script>
   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() -500;
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('fixed');
			 }
			 else {
				 $('nav').removeClass('fixed');
			 }
		});
	});
</script>


<link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">



<script>
 
$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>


</head>

<body>
   <div class="slached_background"></div>
   <div id ="related_work"class ="floating_related_items">
   <?php 
  
  $result_set11= mysql_query ("Select * from Literature where work=".$id_work."");
   while ($row55=mysql_fetch_row($result_set11))
   {  
  		 $name_rel = $row55['1'];
	     $id_rel= $row55['0'];
	     $changes_version_related=$row55['8']; 
	   
   
   		echo "<ul   id=\"one_related_item\">  " ; 
        echo "<li> " ; 
	    echo "<a href=\"literature_affich.php?id_item=".$id_rel."\" TITLE=\"".$changes_version_related."\"> ".$name_rel." </a>" ;
	    echo "</li> " ; 
	    echo "</ul> " ; 
      
	   
	   }
  
  
  ?>
  </div> 
 
<div id="container">

    
     
  <?php include('header_nav_co.php'); ?>
  
     
        
     
      
      
     
        <div    >
		
 
	 <div id="literature_header" style="padding:40px; " >
       <div id="item_name" style="float:left;">
      <h1><?php echo $item_name.' ___Views('.$nb_view.')';?> </h1> 
       </div>
       <div id="item_rating"  >
    	  <form class="star-rating" enctype="multipart/form-data" method="GET" action="aymen/rating_value.php" onchange="this.submit()" >
    
  <input type="radio" name="rating" value="1"  <?php if($item_rating==1)echo 'checked'; ?> ><i></i>
  <input type="radio" name="rating" value="2" <?php if($item_rating==2)echo 'checked';   ?>  ><i></i>
  <input type="radio" name="rating" value="3" <?php if($item_rating==3)echo 'checked';   ?>  ><i></i>
  <input type="radio" name="rating" value="4"  <?php if($item_rating==4)echo 'checked';  ?> ><i></i>
  <input type="radio" name="rating" value="5"  <?php if($item_rating==5)echo 'checked';   ?> ><i></i>
  <input type="hidden" name="id_item" value="<?php   echo $id_item ;   ?>"> 
   <input type="hidden" name="id_user" value="<?php   echo $id_user ;   ?>"> 
      <input type="hidden" name="ext" value="<?php   echo    $ext;   ?>"> 
      <input type="hidden" name="type" value='l' > 
   
  </form> 
       </div>
       </div> 
       
        
   
       
         
 			<div id="literature_tv">
    
     			<iframe id="literature_show" src="<?php echo "upload/literature/$id_work/$id_item.$ext" ;?>" align="middle"></iframe>
       </div>
    
     
   
        <div id="item_options">
   	<ul> 
    <li id="download"> 
 <a href="<?php echo "upload/literature/$id_work/$id_item.$ext" ;?>" download > <img src="images/download_item.png" width="40px" height="60px"></a>
 </li>
   <li id="repport" > 
  <a href="aymen/report_item.php?id_item=<?php echo $_GET['id_item']?>&amp;type=l"> <img src="images/report.png" width="40px" height="60px"> </a>
  </li>
      <li>
    <a href="#"id="hide_comment_zone"hidden="able" ><img src="images/comment_zone(s&amp;h).png"> </a>  
    
    <a href="#"id="show_comment_zone" ><img src="images/comment_zone(s&amp;h).png"> </a> 
    </li>
   
    
       <li>
       <a href="#"id="show_related_item"><img src="images/fleche.png"> </a> 
       <a href="#"id="hide_related_item" hidden="able"><img src="images/fleche.png"> </a> 
  		</li>
            
     </ul>
  </div>       
       
       
       
          
          
      <div id="comment_zone" >
   
   
   <?php 
   $comment= mysql_query("select * from commentaires_literature  where id_article =".$id_item."   ");
   while ($row_comment=mysql_fetch_row($comment))
   {   	 	
	   $user_comment=$row_comment['2'];
	     
		 $user_photo=mysql_fetch_row( mysql_query("select pic from subscriber  where  name='".$user_comment."' "));
	      $photo=$user_photo['0'];
	   $comment_content=$row_comment['3'];
	   $comment_date=  $row_comment['4'];
	   ?>
       <div id="the_comment">
      <ul  >
      
      <li>
      	 	  <?php 	  echo "<h2 id=\"comment_username\">";
		   echo "[".$user_comment."]";
		  echo "</h2>"; ?>
      <div id="comment_pic" ><img id="comment_pic" src="<?php echo $photo; ?>" alt="avatar" title="<?php echo $user_comment; ?>" height="110" width="90"></br>       
	   
      </div> 
	  </li>
	  <li>
	  <?php
       
	  	   	  echo "<ul>";


	  	  echo "<h3 id=\"comment_date\">";
		  echo "(".$comment_date.")";

		  echo "</h3>";		  
	  	  echo "<p id=\"content_comment\">";
		  echo $comment_content ; 
		  echo "</p>";
		  		
				    		  if ($user_comment== $name_user) 
		  { 
		  
            
		 
          ?> 
      
          <div id="button_comment"  >
           <form id="update_comment" class="comment_button"   method="POST" action="aymen/update_comment_item.php">
          
        <input type="hidden" name="date" value="<?php echo $comment_date; ?>">
        <input type="hidden" name="user_name" value="<?php echo $name_user;?>"> 
        <input type="hidden" name="id_article" value="<?php echo $id_item; ?>">
        <input type="hidden" name="type_article" value="literature">
        <button id="button_addAudio"  type="submit"  class="action"><img src="images/modifier_comment.png" height="20px" width="18px"></button>
          </form>       
          
            <form id="delete_comment"      method="POST" action="aymen/delete_comment_item.php">
        <input type="hidden" name="date" value="<?php echo $comment_date; ?>">
        <input type="hidden" name="user_name" value="<?php echo $name_user;?>"> 
        <input type="hidden" name="id_article" value="<?php echo $id_item; ?>">
        <input type="hidden" name="type_article" value="literature">
        <button id="button_addAudio"  type="submit"  class="action"><img src="images/delete_comment.png"height="20px" width="18px"> </button>
          </form>       
          </div> 
		  <?php 
			  
			  } echo "<div style=\"padding:10px;\"></div>";
			  echo "</ul>";	
			  echo "</li>";	
	   	  
 	    
  	   
echo "</ul>";
	    echo "</div>";
		}   
   
   
     ?>

   
   
      
    
  </div> 
     
   <form  id="add_comment"   enctype="multipart/form-data" method="POST" action="aymen/comment_item.php"  >
   <label id="user_name_comment" > <h2> <?php echo $name_user;?></h2> </label> 
   <textarea id="textarea_comment" placeholder="ADD a comment..." required cols="50" rows="5" name="comment"></textarea>
		<input type="hidden" name="user_name" value="<?php echo $name_user;?>"> 
        <input type="hidden" name="id_article" value="<?php echo $id_item; ?>">
        <input type="hidden" name="type_article" value="literature">
         
        <button id="button_restcomment" type="submit" class="right">comment</button>

   
   </form> 
      
   
   

  
  <div id="upload_space" style="padding:40px; " >
  
  <p>Do you like it ? You want to make it better : so what you're waiting upload your version :D </p> <a href="aymen/upload_item_literature.php?id_item=<?php echo   $id_item ;?>">  UPLOAD  </a>
  
    
   </div> 
  <div id="upload_new_work" style="padding:40px;  "  >
   <p>  You have a thought ,  creative mind .. many  ideas? Who cares? You have nothing until you actually do something. so upload and show us what you can actualy do :D </p><a href="aymen/upload_work.php"> ADD WORK</a> 
  </div>
     
           
     </div>  
     
     
     
     
     
     
     <div class="arrierefooter">
<?php include('footer.php'); ?>

          </div>  
                    <div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-2x fa-arrow-circle-up"></i>
	</span>
</div>

    
</div>  


 

 
 </div>
  


</body>
	 
 </html>
