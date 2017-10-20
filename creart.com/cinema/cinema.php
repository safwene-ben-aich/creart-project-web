<?php
include_once '../common.php';
if (isset($_GET['sort'])){
	$_SESSION['categorieCinema']=$_GET['sort'];
}

include('../session.php');

?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<link rel="stylesheet" href="css_cinema/style_cinema.css">
	
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />




<link rel="stylesheet" type="text/css" href="../css/style_common.css" />
<link rel="stylesheet" type="text/css" href="../css/style1.css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" media="all" href="../css/styles.css">

  <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>


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

     <div id="featured">
     </div> <!--end featured-->
     
     
        <div id="main">
          <div id="content">
          <?php include('../share.html'); 
          		include('index_cinema_safwene.php');
          ?>



     </div> <!--end content--> 
     </div> <!--end main-->  
     
     
<div class="arrierefooter">
<?php include('../footer.php'); ?>

          </div> <!--end arrierefooter-->
                    <div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-2x fa-arrow-circle-up"></i>
	</span>
</div>
  
</div> <!--end contrainer-->





</body>
</html>
<?php
include_once('..\ghada\include_pop.php');
?>