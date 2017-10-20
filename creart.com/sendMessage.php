<?php

include_once 'common.php';
include('session.php');



if(isset($_POST['btn-send']))
{
	$date=date('d-m-Y');
	$user_name= $row['username'] ;
    $subject=$_POST['subject'];
    $content=$_POST['content'];
	$sql_query="INSERT INTO message
	(user_name,subject,content,date) VALUES
	('$user_name','$subject','$content','$date')";	
	
	if(mysql_query($sql_query))
	{
		?>
	<script type ="text/javascript">
	alert('Your message has been sent !!');
	window.location.href='sendMessage.php';
	</script>
	<?php
	}
	else
	{?>
<script type ="text/javascript">
	alert('An error occured while sending please send again.');
	
	</script>
	<?php
	}
	
}
?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact us</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="admin/cssAdmin/styleList.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" href="images/icone_logo.png" />




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

<body>


<div id="container">

    <?php include('header_nav_co.php'); ?>

     <div id="featured">
     </div> <!--end featured-->
     
     
        <div id="main">
          <div id="content">
          <?php include('share.html'); ?>


<center>

	<strong><label > <h2>Contact us</h2></label></strong>
     

	
	<form method="post">
	
	<table align="center">
	<tr>
	
	</tr>
	<tr>
	<td><label ><?php echo $row['username'] ?></label></td>
	</tr>
	<tr>
	<td id="sub_contact_us"><input type="text" name="subject" 
	placeholder="Type the subject here " required /></td>
	</tr>
	<tr>
	<td row="4"><input type="text" name="content" 
	placeholder="Type your message here" required /></td>
	</tr>
	
	<tr>
	<td ><button type="submit" name="btn-send">
	<strong> Send </strong></button></td>
	</tr>
	</table>
	</form>
	
    
</center>


               
     </div> <!--end content--> 
     </div> <!--end main-->  
     
     
<div class="arrierefooter">
<?php include('footer.php'); ?>

          </div> <!--end arrierefooter-->
                    <div class="scroll-top-wrapper ">
	<span class="scroll-top-inner">
		<i class="fa fa-2x fa-arrow-circle-up"></i>
	</span>
</div>
          <div id="copyright">
       <p>Copyright ©2015 Creart.com <img src="images/NextCopyright.png" width="61" height="21"/></p>
        </div> <!--end copyright-->
</div> <!--end contrainer-->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


</body>
</html>












