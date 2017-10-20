<?php 
include_once '..\common.php';
include('../session.php');?>
<?php


$login = $_GET['id'];

$eventname=$_POST['eventname'];
$category=$_POST['category'];
$adresse=$_POST['adresse'];
$date=$_POST['date'];
$duration=$_POST['duration'];
$starttime=$_POST['starttime'];
$endtime=$_POST['endtime'];
$timezone=$_POST['timezone'];
$ticketprice=$_POST['ticketprice'];
$ticketlink=$_POST['ticketlink'];
$description=$_POST['description'];


$query1 =mysql_query("UPDATE events SET eventname='$eventname',category='$category',adresse='$adresse',date='$date',duration='$duration' ,starttime='$starttime',endtime='$endtime',timezone='$timezone',ticketprice='$ticketprice',ticketlink='$ticketlink' ,description='$description' WHERE id='$login'");
$res = mysql_query($query1) ;


?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consult Events</title>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="js/cntl.css">
   <script src="js/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="css/sweet-alert.css">


<link rel="stylesheet" type="text/css" href="css/style_common.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />
 <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />



  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

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

 
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css" type="text/css" media="all" />
  <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/css" media="all" />
 
  <!--google map search -->

  




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

<script>


	swal("<?php echo $lang['GOOD']; ?>", "<?php echo $lang['MODIFIED']; ?>", "success");

 </script>
<div id="container">

      <?php include('../header_nav_co.php'); ?>
     
     <div id="featured">

     </div> <!--end  featured-->


        <div id="main">
        
        
        
        
        
        
 
<br><br>
 <div id="content">
     <h1><?php echo $lang['HCONSULT']; ?> <?php echo"$user_check";?> </h1>

   
         <br/>

<div class="main">
                
                
        
        
      
        
        <?php

$result=mysql_query("SELECT * FROM EVENTS WHERE username='$user_check' ");
 
    

  while($row=mysql_fetch_array($result)){;

  
  echo"<details>";
        
            //titre
           
   
    
          echo"<summary>&nbsp&nbsp".$row['eventname'];
          echo"</strong></summary><ul><br/> ";
  
             
           
  ?>
    

            
          
                    
               
           
        
      
           


   <p class="setting"><span><?php echo $lang['NBPAR']; ?><?php echo "&nbsp&nbsp".$row['participe_nb'] ;?>  </span></br></p>


      

 <form  method='post' action="modifEvents.php?id=<?php echo $row['id']; ?>"> 

            
                    
               <p class="setting"><span><?php echo $lang['MODEVENT']; ?><button id="disableaccount"><img src="images/edit.png" alt="*Edit*"></button></span> </br></p>


      </form>
       <form  method='post' action="deleteEvent.php?id=<?php echo $row['id']; ?>"> 

            
                    
               <p class="setting"><span><?php echo $lang['SUPPEVENT']; ?><button id="disableaccount"><img src="images/edit.png" alt="*Edit*"></button></span> </p>


      </form>
      
        
            
  
          
    <?php 
         echo"<br /><br />";

                    
                   
      echo"
      
      </ul> 
        </details><br>";

      }
      ?>
    
        
            </div>







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



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</body>
</html>
