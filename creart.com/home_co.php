<?php
include_once 'common.php';

include('session.php');

?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />


<link href="css/styleHome.css" rel="stylesheet" type="text/css" media="all" />


<link rel="stylesheet" type="text/css" href="css/style_common.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
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

<body onload="setInterval('chat.update()', 1000)">

<div id="container">

    <?php include('header_nav_co.php'); 
include ('chat/index_chat.php');
    ?>
   

     <div id="featured">
     </div> <!--end featured-->
     
     
        <div id="main">
          <div id="content">
          <?php include('share.html'); 
        

          ?>

<div class="main">
                <div class="view view-first">
                    <img src="images/3.jpg" />
                    <div class="mask">
                        <h2><?php echo $lang['CINEMA']; ?></h2>
                        <p><?php echo $lang['TEXT']; ?></p>
                        <a href="/creart.com/cinema/cinema.php?sort=date_pub" class="info"><?php echo $lang['READMORE']; ?></a>
                    </div>
                </div>  
                <div class="view view-first">
                    <img src="images/2.jpg" />
                    <div class="mask">
                        <h2><?php echo $lang['MUSIC']; ?></h2>
                        <p><?php echo $lang['TEXT']; ?></p>
                        <a href="/creart.com/music/music.php?sort=date_pub" class="info"><?php echo $lang['READMORE']; ?></a>
                    </div>
                </div>  
                <div class="view view-first">
                    <img src="images/4.jpg" />
                    <div class="mask">
                        <h2><?php echo $lang['PHOTOGRAPHY']; ?></h2>
                        <p><?php echo $lang['TEXT']; ?></p>
                        <a href="/creart.com/photography/photography.php?sort=date_pub" class="info"><?php echo $lang['READMORE']; ?></a>
                    </div>
                </div>  
                
                <div class="view view-first">
                
                    <img src="images/5.jpg" />
                    <div class="mask">
                        <h2><?php echo $lang['LITERATURE']; ?></h2>
                        <p><?php echo $lang['TEXT']; ?></p>
                        <a href="/creart.com/literature/literature.php?sort=date_pub" class="info"><?php echo $lang['READMORE']; ?></a>
                    </div>
                    
                </div> 
                
                         
                         
                 
            </div>          
     </div> <!--end content--> 
     </div> <!--end main-->  
     
     <div  class="sevice" id="service">
  <div id="wrap">
    <div class="service-grids">
            <div class="images_1_of_4">
              <a href="ghada\more_details.php"><img src="images/round1.png"></a>
              <h3><?php echo $lang['EVENTCALENDAR']; ?></h3>
              <p><?php echo $lang['C_TEXT1']; ?></p>
                <!--<div class="button"><span><a href="#">Read More</a></span></div>-->
            </div>
            <div class="images_1_of_4">
               <a href="#"><img src="images/round2.png"></a>
               <h3><?php echo $lang['HIT_PARADE']; ?></h3>
               <p><?php echo $lang['C_TEXT2']; ?></p>
                <!-- <div class="button"><span><a href="#">Read More</a></span></div>-->
            </div>
            <div class="images_1_of_4">
               <a href="aboutus.php"><img src="images/round3.png"></a>
               <h3><?php echo $lang['CONDITION']; ?></h3>
               <p><?php echo $lang['C_TEXT3']; ?></p>
                <!-- <div class="button"><span><a href="#">Read More</a></span></div>-->
            </div>
            <div class="images_1_of_4">
               <a href="sendMessage.php"><img src="images/round4.png"></a>
               <h3><?php echo $lang['CONTACTUS']; ?></h3>
               <p><?php echo $lang['C_TEXT4']; ?></p>
                <!-- <div class="button"><span><a href="#">Read More</a></span></div>-->
            </div>
            <div class="clear"> </div>
     </div>
</div> 
        

<div class="arrierefooter">
<?php include('footer.php'); ?>

          </div> <!--end arrierefooter-->
                    <div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-2x fa-arrow-circle-up"></i>
	</span>
</div>

</div> <!--end contrainer-->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


</body>
</html>
