<?php
error_reporting(E_ALL ^ E_NOTICE);
include_once 'common.php';





?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forget password</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />
    <script src="js/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="css/sweet-alert.css">
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

<?php include('header_nav.php'); ?>

     <div id="featured">
     </div> <!--end featured-->
     
     
        <div id="main">
          <div id="content">

          <?php include('share.html'); ?>

    

    
      <div  class="form">
            <form id="contactform" name="subscribe_form" method="post" action="forgetpwdrequ.php" > 
            
                
                
                
                
                
                <p class="contact"><label for="username"><?php echo $lang['USERNAME']; ?></label> <label for="email" id="error_subscribe"><?php if(!empty($erreur_user)) { ?> <?php echo $erreur_user ; ?> <?php } ?></label></p> 
                <input id="username" name="username" placeholder="<?php echo $lang['USERNAME']; ?>" required="" tabindex="2" type="text"> 
                 
             
        

        <p class="contact"><label for="Birthday"><?php echo $lang['YOUR_BIRTHDAY']; ?></label></p> 
                <input  type="date" id="Birthday" name="Birthday" required="required"> 
      
</br></br>
                
                
                
                



                             </br>


 




            
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Send me Email"  type="submit"   >   
   </form> 
</div>      








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

 <!--   <script>
function(){
    swal("Good job!", "you have been subscribed!", "success");
    }
 </script>-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


</body>
</html>

