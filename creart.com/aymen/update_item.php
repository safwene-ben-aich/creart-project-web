<?php 
	include_once '../common.php';
include('../session.php');
	   $id_user=$row['id'] ;
	   $id_item=$_POST['id_item'];
	   $type=$_POST['type'];
	
    ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title>Update item</title>
 

		<link href="../css/aymen/item.css" rel="stylesheet" type="text/css" />
		<link href="../css/style.css" rel="stylesheet" type="text/css" />

<link href="upload_fomr_style.css" rel="stylesheet" type="text/css" />
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<link rel="shortcut icon" href="../images/icone_logo.png" />

<!--aaa-->		
 
<link rel="stylesheet" type="text/css" media="all" href="../css/styles.css">
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

    <?php include('../header_nav_co.php'); ?>

     
     <div id="featured">

     </div> <!--end  featured-->
     
     
        <div id="main">
		
 
   
        
          <div id="content">
 <article>
  
<h1>The New  Version </h1>
<form id="addPhoto" enctype="multipart/form-data" method="post"  action ="updating_item.php">
	<ul id="ul_addPhoto">
        <li id="li_addPhoto">
        	<label id="label_addPhoto" for="name">Your Masterpiece's New Name :</label>
            <input id="input_addPhoto" placeholder=" Insert the title of your version .. " type="text" required maxlength="40" size="50" name="version_name" />
        </li>
        
        
 
        
        
        <li id="li_addvideo"> 
        	<label id="label_addPhoto"  >Categorie : </label>
            <input id="input_addPhoto" placeholder=" What is your Masterpiece's categorie .. " size="50" type="text"   required="required" name="version_categorie"  />
        </li>
        
          <li id="li_addvideo"> 
        	<label id="label_addPhoto"  >Changes : </label>
            <input id="input_addPhoto" placeholder="Name of the sections that had changes .. " size="50" type="text"   required="required" name="version_Changes"  />
        </li>
        

	   <li id="li_addvideo">
        	<label id="label_addPhoto" for="message">Description :</label>
            <textarea id="textarea_addPhoto" placeholder="Describe your masterpiece..." required cols="50" rows="5" name="version_description"></textarea>
		</li>
        


       
</br>

	</ul>
   
   
  
   
    <p>
         <input type="hidden"    name ="id_user" value="<?php echo $id_user; ?>"  >
         <input type="hidden"    name ="id_item" value="<?php echo  $id_item; ?>"  > 
         <input type="hidden"    name ="type" value="<?php echo $type;?>"  > 
         <button id="upload_button"  type="submit"  >Update  your work </button>
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























