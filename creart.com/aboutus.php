<?php
include_once 'common.php';

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Us</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />


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

<div id="container">

    <?php 
if(isset($_SESSION['login_user'])){
  include('session.php');

     include('header_nav_co.php'); 

}else

{
     include('header_nav.php'); 
     }
     ?>
     <div id="featured">
     </div> <!--end featured-->
     
     
        <div id="main">
          <div id="content">
                    <?php include('share.html'); ?>

          <h1>
            <p>              <strong><?php echo $lang['ABOUT_CREART']; ?> </strong></p>
          </h1>
<p align="center">
  <strong></strong><?php echo $lang['P1']; ?></p>        
     </div> 
          <!--end content--> 
     </div> <!--end main-->  
       <div id="main">
          <div id="content">
          <h1>
            <p><strong><?php echo $lang['TERMS']; ?> </strong></p>
          </h1>
          <p><img src="images\noir.png" alt="eventbackground" width="8" height="8" /> <strong><em></em></strong><?php echo $lang['T1']; ?></p>
          <p><img src="images\noir.png" alt="eventbackground" width="8" height="8" /> <strong><em></em></strong><?php echo $lang['T2']; ?></em></p> 
          <p><img src="images\noir.png" alt="eventbackground" width="8" height="8" /> <strong><em></em></strong><?php echo $lang['T3']; ?></em></p> 
          <p><img src="images\noir.png" alt="eventbackground" width="8" height="8" /> <strong><em></em></strong><?php echo $lang['T4']; ?></em></p> 
          <p><img src="images\noir.png" alt="eventbackground" width="8" height="8" /> <strong><em></em></strong><?php echo $lang['T5']; ?></em></p> 
          <p><img src="images\noir.png" alt="eventbackground" width="8" height="8" /> <strong><em></em></strong><?php echo $lang['T6']; ?></em><em></em></p>  
     
         </div> 
          <!--end content--> 
     </div> <!--end main-->  
     
     
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
