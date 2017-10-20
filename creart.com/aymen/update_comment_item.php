<?php 
include_once '../common.php';
include('../session.php');
$id_user=$row['id'];
$name_user=$row['name'];

  $host="localhost";
$username="root";
 
$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
$db=mysql_select_db("creart_bd",$conn);
 
 
$name_membre=$_POST['user_name'];
$comment_content=$_POST['comment'];
$id_item=$_POST['id_article'];
$type_article=$_POST['type_article'];
$Date=$_POST['date'];
 
 
		 $comment= mysql_query("select * from commentaires  where  type_article='".$type_article."' AND id_article='".$id_item."'  AND membre_commentaire='".$name_membre."' AND date_commentaire='".$Date."'");
		$row_comment1=mysql_fetch_row($comment);
		  $comment_content1=$row_comment1['4'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<title>Update comment</title>
 

 
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
 
<h1> Update   Comment </h1>
<form id="addvideo" enctype="multipart/form-data" method="post"  action ="updating_comment_item.php">
	<ul id="ul_addvideo">
     
         
   
                <li id="li_addvideo">
        	<label id="label_addvideo" for="message">comment:</label>
            <textarea id="comment" placeholder="update your comment..." required="required" cols="50" rows="5" name="comment"    ><?php echo $comment_content1 ; ?></textarea>
		
   
        </li>
         


 

	</ul>
   
   
   
   
   
    <p>
             <input type="hidden" name="date" value="<?php echo $Date; ?>">
        <input type="hidden" name="user_name" value="<?php echo $name_user;?>"> 
        <input type="hidden" name="id_article" value="<?php echo $id_item; ?>">
        <input type="hidden" name="type_article" value="<?php echo $type_article; ?>">
        <button   type="submit"  >Update </button>
        <button id="button_addvideo" type="reset" class="right">Reset</button>
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
  
 
          <div id="copyright">
       <p>Copyright ©2015 Creart.com <img src="../images/NextCopyright.png" width="61" height="21"/></p>
        </div>  
</div>  


 



</body>
 </html>
