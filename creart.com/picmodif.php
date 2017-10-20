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


  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>

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
    <?php 
	$path_img="uploads/".$row['pic'];
	
	?>
      <div id="userphoto"><img src="<?php echo $row['pic'] ?>" alt="avatar" WIDTH=147 HEIGHT=147></br>
      
      
      
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

    		<form id="contactform" name="subscribe_form" method="post" action="picmodifrequ.php" enctype="multipart/form-data" > 

        
<p class="setting"><p class="contact"><label for="Pic"><?php echo $lang['YOUR_NEW_PIC']; ?></label></p> 
            <input type="file" id="exampleInputFile" name="pic"></p>
        


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
     
</div> <!--end contrainer-->




</body>
</html>
