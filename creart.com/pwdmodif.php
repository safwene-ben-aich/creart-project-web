<?php
include_once 'common.php';

include('session.php');
?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My account</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />

 <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

    <script type="text/javascript">
    
	function validatePass(password, p2) {
    if (password.value != p2.value || password.value == '' || p2.value == '') {
        p2.setCustomValidity('Password incorrect');
    } else {
        p2.setCustomValidity('');
    }
}
    
    </script>


    <script type="text/javascript">
    
	function validatePassbase(p3) {
		
		var pwd='<?php echo $row['pwd']?>';
    if (pwd != p3.value || p3.value == '') {
        p3.setCustomValidity('Password incorrect');
    } else {
        p3	.setCustomValidity('');
    }
}
    
    </script>


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












  
  <div id="w">
    <div id="content" class="clearfix">
      <div id="userphoto"><img src="<?php echo $row['pic'] ?>" alt="avatar"  WIDTH=147 HEIGHT=147></br>
      
      
      
      </div>
      <h1><?php echo $row['name']?></h1>

      <div id="profiletabs">
        <ul class="clearfix">
                    <li><a href="#bio" >Bio</a></li>
         <!-- <li><a href="#activity"><?php echo $lang['ACTIVITY']; ?></a></li>-->
          <li><a href="#settings" class="sel"><?php echo $lang['SETTINGS']; ?></a></li>
        </ul>
      </div>
      
      
            <section id="settings" >
        <p><?php echo $lang['EDIT_YOUR_SETT']; ?></p>
        
              <div  class="form">

    		<form id="contactform" name="subscribe_form" method="post" action="pwdmodifrequ.php"  > 

        
<p class="setting"><p class="contact"><label for="password"><?php echo $lang['OLD_PWD']; ?></label></p> 
    			<input type="password" id="old_pwd"  name="old_pwd" required="" onfocus="validatePassbase(this);" oninput="validatePassbase(this);"> 
</p>
        
    <p class="setting"><p class="contact"><label for="password"><?php echo $lang['NEW_PWD']; ?></label></p> 
    			<input type="password" id="password"  name="password" required=""> 
</p>

<p class="setting"><p class="contact"><label for="password"><?php echo $lang['CONFIRM_NEW_PWD']; ?></label></p> 
    			<input type="password" id="repassword"  name="repassword" required="" onfocus="validatePass(document.getElementById('password'), this);" oninput="validatePass(document.getElementById('password'), this);"> 
</p>   

        

            <input class="buttom" name="submit" id="submit" tabindex="5" value="OK"  type="submit"   > 	 
            <a href="myaccount.php"><input class="buttom" name="cancel" id="cancel" tabindex="5" value="<?php echo $lang['CANCELLED']; ?>" type="button"    > 	 </a>


   </form> 

</div>
      </section>
      
    
      

    </div><!-- @end #content -->
  </div><!-- @end #w -->













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
 
</div> <!--end contrainer-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>



</body>
</html>
