<?php 
include_once '../common.php';
include('../session.php');
$id_user=$row['id'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title>Repport</title>
 

 <link href="../css/aymen/item.css" rel="stylesheet" type="text/css" />

<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="upload_fomr_style.css" rel="stylesheet" type="text/css" />
 
<link rel="shortcut icon" href="../images/icone_logo.png" />
 
 <!--aa -->


 
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
   <div class="slached_background"></div>
<div id="container">

     <?php include('../header_nav_co.php'); ?>
    
     
     <div id="featured">
     </div>  
     
     
        <div id="main">
		
		 
        
        
          <div id="content">
 <article>
 
<h1>Repport </h1>
<form id="addvideo" enctype="multipart/form-data" method="post"  action ="reporting.php">
	<ul id="ul_addvideo">
     
         
   
                <li id="li_addvideo">
        	<label id="label_addvideo" for="message">Report :</label>
            <textarea id="version_description" placeholder="Describe your masterpiece..." required="required" cols="50" rows="5" name="report_content"  ></textarea>
		
        <input type="hidden"    name ="itemtype" value="<?php echo $_GET['type']; ?>"  > 
        <input type="hidden"    name ="id_item" value="<?php echo $_GET['id_item']; ?>"  > 
        </li>
         


 

	</ul>
   
   
   
   
   
    <p>
     <input type ="hidden" name ="id_user" value="<?php echo $id_user ;?> " />
        <button  id="upload_button" type="submit"  >Send Repport</button>
        <button id="upload_button" type="reset" class="right">Reset</button>
    </p>
</form>
</article>

          
     </div>  
 
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
