<?php    
		include_once '../common.php';
  		include('../session.php');
		
		 $id_user=$row['id'] ;
$type = array ('cinema','literature','music' , 'photography' ); 
 ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title>My Work</title>
 

		<link href="../css/aymen/item.css" rel="stylesheet" type="text/css" />
		<link href="../css/style.css" rel="stylesheet" type="text/css" />

<link href="upload_fomr_style.css" rel="stylesheet" type="text/css" />
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<link rel="shortcut icon" href="../images/icone_logo.png" />

<!--aaa-->		
 
<link rel="stylesheet" type="text/css" media="all" href="../css/styles.css">
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


<div id="container">

 <?php include('../header_nav_co.php'); ?>
 
 
 
 
 <div id="main">

<?php

 
 
 
$result1=mysql_query("Select * from cinema  where id_user=".$id_user." ");  
  while ($my_item=mysql_fetch_row($result1) )
 {
    $name_item = $my_item['1'] ; 
	$id_item=$my_item['0'];
	$discription = $my_item['3']; 
	$changes=$my_item['8'] ; 
	$id_work=$my_item['9'];
	$item_rating=$my_item['5'];
	$nb_view=$my_item['6'];
	$result12=mysql_query("Select * from work where id_work=".$id_work." AND work_type ='cinema' ");  
	$my_item_work=mysql_fetch_row($result12);
	$include_in_work_name=$my_item_work['1'];
	
 
    echo "<div id=\"cinema_item\" class=\"my_items_\">" ; 
	?> 
    
    
    <form class="star-rating" style="float:right;"    >
    
			  <input type="radio" name="rating"  disabled    value="1"  <?php if($item_rating==1)echo 'checked'; ?> ><i></i>
			  <input type="radio" name="rating"   disabled value="2" <?php if($item_rating==2)echo 'checked';   ?>  ><i></i>
			  <input type="radio" name="rating"   disabled  value="3" <?php if($item_rating==3)echo 'checked';   ?>  ><i></i>
			  <input type="radio" name="rating"   disabled  value="4"  <?php if($item_rating==4)echo 'checked';  ?> ><i></i>
			  <input type="radio" name="rating" disabled	value="5"  <?php if($item_rating==5)echo 'checked';   ?> ><i></i>
 
			   
  </form>
	<?PHP
	echo "<ul id=\"my_work_item\">" ;
	echo "<li>" ;
	echo "<h1>cinema</h1>" ; 
	echo "</li>" ;
	echo "<li>" ;
	echo "name =".$name_item;
		echo "</li>" ;
			echo "<li>" ;
		echo "view =".$nb_view;
		
		echo "</li>" ;
			echo "<li>" ;
		echo "changes =".$changes;
		
		echo "</li>" ;
			echo "<li style=\"max-width:200px;\">" ;
		echo " discription= ".$discription;
		
		echo "</li>" ;
			echo "<li>" ;
		echo "included in the work:".$include_in_work_name;   
		echo "</li>" ;
					
					echo "<li>" ;
		 ?>
       <form id="my_work_update" enctype="multipart/form-data" method="post" action="update_item.php">
          <input type="hidden" name="type" value="cinema"> 
          <input type="hidden" name="id_item" value="<?php echo$id_item ; ?>">
          <button id="my_work_button_update"  type="submit"  class="action">Update item</button>
          </form>
            <form id="my_work_delete" enctype="multipart/form-data" method="post" action="delete_item.php">
           <input type="hidden" name="type" value="cinema"> 
          <input type="hidden" name="id_item" value="<?php echo$id_item ; ?>">
          <button id="my_work_button_delete"  type="submit"  class="action">Delete item</button>
          </form>
     <a href="../cinema_affich.php?id_item=<?php echo$id_item ; ?>" title="link to the content "> <img src="../images/see_your_work_icon.png" title="see it .." style=" border-radius: 50%;margin-top:-40px;margin-left:450px;    " width="60" height="40" > </a> 

		 <?php  
		echo "</li>" ;
	 echo "</ul>" ;
	 echo "</div> ";
	
 }
 
 
 
 
  $result2=mysql_query("Select * from music where id_user=".$id_user." ");  
  while ($my_item2=mysql_fetch_row($result2) )
 {
    $name_item = $my_item2['1'] ; 
	$id_item=$my_item2['0'];
	$discription = $my_item2['3']; 
	$changes=$my_item2['8'] ; 
	$nb_view=$my_item2['6'];
		$id_work=$my_item2['9'];
		$item_rating=$my_item['5'];
	$result12=mysql_query("Select * from work where item=".	$id_work." AND work_type = 'music'");  
	$my_item_work=mysql_fetch_row($result12);
	$include_in_work_name=$my_item_work['1'];
	
	 

    echo "<div id=\"music_item\" class=\"my_items_\">" ; 
	
		?> 
    
    
    <form class="star-rating" style="float:right;"    >
    
			  <input type="radio" name="rating"  disabled    value="1"  <?php if($item_rating==1)echo 'checked'; ?> ><i></i>
			  <input type="radio" name="rating"   disabled value="2" <?php if($item_rating==2)echo 'checked';   ?>  ><i></i>
			  <input type="radio" name="rating"   disabled  value="3" <?php if($item_rating==3)echo 'checked';   ?>  ><i></i>
			  <input type="radio" name="rating"   disabled  value="4"  <?php if($item_rating==4)echo 'checked';  ?> ><i></i>
			  <input type="radio" name="rating" disabled	value="5"  <?php if($item_rating==5)echo 'checked';   ?> ><i></i>
 
			   
  </form>
	<?PHP
	echo "<ul id=\"my_work_item\">" ;
	echo "<li>" ;
	echo "<h1> music</h1>" ; 
	echo "</li>" ;
	echo "<li>" ;
	echo "name =".$name_item;
		echo "</li>" ;
			echo "<li>" ;
		echo "view =".$nb_view;
		
		echo "</li>" ;
			echo "<li>" ;
		echo "changes =".$changes;
		
		echo "</li>" ;
			echo "<li>" ;
		echo " discription= ".$discription;
		
		echo "</li>" ;
			echo "<li>" ;
		echo "included in the work:".$include_in_work_name;   
		echo "</li>" ;
		echo "<li>" ;
		 ?>
        <form id="my_work_update" enctype="multipart/form-data" method="post" action="update_item.php">
          <input type="hidden" name="type" value="music"> 
          <input type="hidden" name="id_item" value="<?php echo$id_item ; ?> ">
          <button id="my_work_button_update"  type="submit"  class="action">Update item</button>
          </form>
    
            <form id="my_work_delete" enctype="multipart/form-data" method="post" action="delete_item.php">
           <input type="hidden" name="type" value="music"> 
          <input type="hidden" name="id_item" value="<?php echo$id_item ; ?> ">
          <button id="my_work_button_delete"  type="submit"  class="action">Delete item</button>
          </form>
    
          <a href="../music_affich.php?id_item=<?php echo$id_item ; ?>" title="link to the content "><img src="../images/see_your_work_icon.png" title="see it .." style=" border-radius: 50%;margin-top:-40px;margin-left:450px;    " width="60" height="40" > </a> 

         <?php  
		echo "</li>" ;
	 echo "</ul>" ;
		 echo "</div> ";
 }
 
 
  $result3=mysql_query("Select * from literature where id_user=".$id_user." ");  
  while ($my_item3=mysql_fetch_row($result3) )
 {
    $name_item = $my_item3['1'] ; 
	$id_item=$my_item3['0'];
	$discription = $my_item3['3']; 
	$changes=$my_item3['8'] ; 
	$nb_view=$my_item3['6'];
		$id_work=$my_item3['9'];
		$item_rating=$my_item['5'];
		 
	$result15=mysql_query("Select * from work where id_work=".$id_work."  AND work_type='Literature' ");  
	$my_item_work3=mysql_fetch_row($result15);
	$include_in_work_name=$my_item_work3['1'];
	
	 

 echo "<div id=\"literature_item\" class=\"my_items_\">" ; 
 	?> 
    
    
    <form class="star-rating" style="float:right;"    >
    
			  <input type="radio" name="rating"  disabled    value="1"  <?php if($item_rating==1)echo 'checked'; ?> ><i></i>
			  <input type="radio" name="rating"   disabled value="2" <?php if($item_rating==2)echo 'checked';   ?>  ><i></i>
			  <input type="radio" name="rating"   disabled  value="3" <?php if($item_rating==3)echo 'checked';   ?>  ><i></i>
			  <input type="radio" name="rating"   disabled  value="4"  <?php if($item_rating==4)echo 'checked';  ?> ><i></i>
			  <input type="radio" name="rating" disabled	value="5"  <?php if($item_rating==5)echo 'checked';   ?> ><i></i>
 
			   
  </form>
	<?PHP
	echo "<ul id=\"my_work_item\">" ;
	echo "<li>" ;
	echo "<h1> Literature </h1>" ; 
	echo "</li>" ;
	echo "<li>" ;
	echo "name =".$name_item;
		echo "</li>" ;
			echo "<li>" ;
		echo "view =".$nb_view;
		
		echo "</li>" ;
			echo "<li>" ;
		echo "changes =".$changes;
		
		echo "</li>" ;
			echo "<li>" ;
		echo " discription= ".$discription;
		
		echo "</li>" ;
			echo "<li>" ;
		echo "included in the work:".$include_in_work_name;   
		echo "</li>" ;
		echo "<li>" ;
		 ?>
         <form id="my_work_update" enctype="multipart/form-data" method="post" action="update_item.php">
          <input type="hidden" name="type" value="literature"> 
          <input type="hidden" name="id_item" value="<?php echo$id_item ; ?> ">
          <button id="my_work_button_update"  type="submit"  class="action">Update item</button>
          </form>
            <form id="my_work_delete" enctype="multipart/form-data" method="post" action="delete_item.php">
           <input type="hidden" name="type" value="literature"> 
          <input type="hidden" name="id_item" value="<?php echo$id_item ; ?> ">
          <button id="my_work_button_delete"  type="submit"  class="action">Delete item</button>
          </form>
           <a href="../literature_affich.php?id_item=<?php echo$id_item ; ?>" title="link to the content "> <img src="../images/see_your_work_icon.png" title="see it .." style=" border-radius: 50%;margin-top:-40px;margin-left:450px;    " width="60" height="40" > </a> 
         <?php  
		echo "</li>" ;
	 echo "</ul>" ;
		 echo "</div> ";
 }
  
 
 
 
  
  $result4=mysql_query("Select * from photography where id_user=".$id_user." ");  
  while ($my_item4=mysql_fetch_row($result4) )
 {
    $name_item = $my_item4['1'] ; 
	$id_item=$my_item4['0'];
	$discription = $my_item4['3']; 
	$changes=$my_item4['8'] ; 
	$nb_view=$my_item4['6'];
		$id_work=$my_item4['9'];
		$item_rating=$my_item['5'];
	$result12=mysql_query("Select * from work where id_work=".$id_work." AND work_type = 'photography'");  
	$my_item_work4=mysql_fetch_row($result12);
	$include_in_work_name=$my_item_work4['1'];
	
	 

 echo "<div id=\"photography_item\" class=\"my_items_\">" ; 
 	?> 
    
    
    <form class="star-rating" style="float:right;"    >
    
			  <input type="radio" name="rating"  disabled    value="1"  <?php if($item_rating==1)echo 'checked'; ?> ><i></i>
			  <input type="radio" name="rating"   disabled value="2" <?php if($item_rating==2)echo 'checked';   ?>  ><i></i>
			  <input type="radio" name="rating"   disabled  value="3" <?php if($item_rating==3)echo 'checked';   ?>  ><i></i>
			  <input type="radio" name="rating"   disabled  value="4"  <?php if($item_rating==4)echo 'checked';  ?> ><i></i>
			  <input type="radio" name="rating" disabled	value="5"  <?php if($item_rating==5)echo 'checked';   ?> ><i></i>
 
			   
  </form>
	<?PHP
	echo "<ul id=\"my_work_item\">" ;
	echo "<li>" ;
	echo "<h1>Photography</h1>" ; 
	echo "</li>" ;
	echo "<li>" ;
	echo "name =".$name_item;
		echo "</li>" ;
			echo "<li>" ;
		echo "view =".$nb_view;
		
		echo "</li>" ;
			echo "<li>" ;
		echo "changes =".$changes;
		
		echo "</li>" ;
			echo "<li>" ;
		echo " discription= ".$discription;
		
		echo "</li>" ;
			echo "<li>" ;
		echo "included in the work:".$include_in_work_name;   
		echo "</li>" ;
		echo "<li>" ;
		 ?>
         <form id="my_work_update" enctype="multipart/form-data" method="post" action="update_item.php">
          <input type="hidden" name="type" value="photography"> 
          <input type="hidden" name="id_item" value="<?php echo$id_item ; ?> ">
          <button id="my_work_button_update"  type="submit"  class="action">Update item</button>
          </form>
            <form id="my_work_delete" enctype="multipart/form-data" method="post" action="delete_item.php">
           <input type="hidden" name="type" value="photography"> 
          <input type="hidden" name="id_item" value="<?php echo$id_item ; ?> ">
          <button id="my_work_button_delete"  type="submit"  class="action">Delete item</button> 
          </form>
          <a href="../photography_affich.php?id_item=<?php echo$id_item ; ?>" title="link to the content "> <img src="../images/see_your_work_icon.png" title="see it .." style=" border-radius: 50%;margin-top:-40px;margin-left:450px;    " width="60" height="40" > </a> 
         <?php  
		echo "</li>" ;
	 echo "</ul>" ;
		 echo "</div> ";
 }  
?>
 


</div>

 <div class="arrierefooter">
<?php include('../footer.php'); ?>

          </div>  
                    <div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-2x fa-arrow-circle-up"></i>
	</span>
</div>

       

 
</div>




 

 
</body>
	 
 </html>


















