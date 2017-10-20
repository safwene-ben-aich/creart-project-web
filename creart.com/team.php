<?php 
include_once 'common.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Team</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styleTeam.css" rel="stylesheet">
  
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
  

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
  
          <div id="content">
          <section id="team" class="single-page scrollblock">
      
        <h1><?php echo $lang['M']; ?></h1>
        <!-- Five columns -->
        <div class="row">
          <div class="span2 offset1">
            <div class="teamalign"><a href="https://www.facebook.com/kurabicaa?fref=ts"><img class="team-thumb img-circle" src="images/portrait-1.jpg" alt=""></a></div>
            <h3>Safwene</h3>
            <div class="job-position">Ben Aich</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
            <div class="teamalign"><a href="https://www.facebook.com/atef.azzouz.35?fref=ts"><img class="team-thumb img-circle" src="images/portrait-2.jpg" alt=""></a></div>
            <h3>Atef</h3>
            <div class="job-position">Azzouz</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
            <div class="teamalign"><a href="https://www.facebook.com/ghadas.abdlii?fref=ts"><img class="team-thumb img-circle" src="images/portrait-3.jpg" alt=""> </a></div>
            <h3>Ghada</h3>
            <div class="job-position">Abdelmoumen</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
            <div class="teamalign"><a href="https://www.facebook.com/aymen.praty?fref=ts"><img class="team-thumb img-circle" src="images/portrait-4.jpg" alt=""></a></div>
            <h3>Aymen</h3>
            <div class="job-position">Bel Habib</div>
          </div>
          <!-- ./span2 -->
          <div class="span2">
            <div class="teamalign"><a href="https://www.facebook.com/bayrem.abdelmalek?fref=ts"><img class="team-thumb img-circle" src="images/portrait-5.jpg" alt=""> </a></div>
            <h3>Bayrem</h3>
            <div class="job-position">Abdelmalek</div>
          </div>
          <!-- ./span2 -->
        </div>
        <!-- /.row -->
        <br/><br/><br/>
                <div class="row">
          <div class="span10 offset1">
            
            <div class="featurette">
              <h2 class="featurette-heading"><img class="team-thumb img-circle" src="images/esprit.png" alt=""> </h2>
            
         </div> 
        </div>  <!--end content--> 
        
     
     
     
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
