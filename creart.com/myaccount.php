<?php
include_once 'common.php';

include('session.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My account</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />


  <script src="js/sweet-alert.min.js"></script>
  <link rel="stylesheet" href="css/sweet-alert.css">


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







 

  
  <div id="w">
    <div id="content" class="clearfix">
      <div id="userphoto"><img src="<?php echo $row['pic'] ?>" alt="avatar"  WIDTH=147 HEIGHT=147></br>
      
      
      </div>
      <h1><?php echo $row['name']?></h1>

      <div id="profiletabs">
        <ul class="clearfix">
          <li><a href="#bio" class="sel">Bio</a></li>
         <!-- <li><a href="#activity"><?php echo $lang['ACTIVITY']; ?></a></li>-->
          <li><a href="#settings"><?php echo $lang['SETTINGS']; ?></a></li>
        </ul>
      </div>
      
      <section id="bio">
      
              <p><?php echo $lang['YOUR_INFO']; ?></p>

      
       <p class="setting"><span><?php echo $lang['NAME']; ?></span> <?php echo $row['name']?></p>
        
        
        <p class="setting"><span>E-mail </span> <?php echo $row['email']?></p>
        
        
                <p class="setting"><span><?php echo $lang['USERNAME']; ?> </span> <?php echo $row['username']?></p>
        
        
        <p class="setting"><span><?php echo $lang['YOUR_BIRTHDAY']; ?> </span> <?php echo $row['birthday']?></p>
        

          <p class="setting"><span><?php echo $lang['I_AM']; ?> </span> <?php echo $row['gender']?></p>

        
        
                  <p class="setting"><span><?php echo $lang['MOBILE_PHONE']; ?> </span> <?php echo $row['mobile']?></p>

<p class="setting"><span><?php echo $lang['COUNTRY']; ?> </span> <?php echo $row['country']?></p>

<p class="setting"><span><?php echo $lang['INTERESTED_IN']; ?> </span> <?php echo $row['interested']?></p>



      </section>
      
      <section id="activity" class="hidden">
        <p>Most recent actions:</p>
        
        <p class="activity">@10:15PM - Submitted a news article</p>
        
        <p class="activity">@9:50PM - Submitted a news article</p>
        
        <p class="activity">@8:15PM - Posted a comment</p>
        
        <p class="activity">@4:30PM - Added <strong>someusername</strong> as a friend</p>
        
        <p class="activity">@12:30PM - Submitted a news article</p>
      </section>
      

      
      <section id="settings" class="hidden">
        <p><?php echo $lang['EDIT_YOUR_SETT']; ?></p>
        
 

     

<p class="setting"><span><?php echo $lang['EDIT_YOUR_INFO']; ?>  <a href="myaccountmodif.php"> <button ><img src="images/edit.png" alt="*Edit*"></button></a></span> </br></p>

<p class="setting"><span><?php echo $lang['EDIT_YOUR_PWD']; ?> <a href="pwdmodif.php"> <button ><img src="images/edit.png" alt="*Edit*"></button></a></span> </br></p>

<p class="setting"><span><?php echo $lang['CHANGE_YOUR_PIC']; ?> <a href="picmodif.php"> <button ><img src="images/edit.png" alt="*Edit*"></button></a></span> </br></p>

<p class="setting"><span><?php echo $lang['DISABLE_ACCOUNT']; ?> <button id="disableaccount"><img src="images/edit.png" alt="*Edit*"></button></span> </p>


      </section>
    </div><!-- @end #content -->
  </div><!-- @end #w -->
<script type="text/javascript">
$(function(){
  $('#profiletabs ul li a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#profiletabs ul li a').removeClass('sel');
    $(this).addClass('sel');
    
    $('#content section').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
    });
    
    $(newcontent).removeClass('hidden');
  });
});
</script>













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

<script>

document.querySelector('.setting span #disableaccount').onclick = function(){
	swal({
		title: "<?php echo $lang['ARE_YOU_SURE']; ?>",
		text: "<?php echo $lang['NOT_ABLE_RECOVER']; ?>",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: '<?php echo $lang['YES_DESABLE']; ?>',
		cancelButtonText: "<?php echo $lang['NO_PLX']; ?>",
		closeOnConfirm: false,
		closeOnCancel: false
	},
	function(isConfirm){
    if (isConfirm){
      swal("<?php echo $lang['DISABLED']; ?>", "<?php echo $lang['CONFIRM_DISABLE']; ?>", "success");
	  window.location = "disableaccount.php";
	  
    } else {
      swal("<?php echo $lang['CANCELLED']; ?>", "<?php echo $lang['SAFE_ACCOUNT']; ?>", "error");
    }
	});
};
</script>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>




</body>
</html>
