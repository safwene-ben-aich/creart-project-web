<?php
include_once 'common.php';



include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: home_co.php");
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Connect</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />


  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
</head>

<body>

<div id="container">

<?php include('header_nav.php'); ?>

     <div id="featured">
     </div> <!--end featured-->
     
     
        <div id="main">
          <div id="content">


          <?php include('share.html'); ?>


  <html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login_03</title>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

	<div id="login">

		<form  method="post" action="">

			<span class="fontawesome-user"></span><input type="text" name="username" required value="<?php echo $lang['USERNAME']; ?>" onBlur="if(this.value=='')this.value='Username'" onFocus="if(this.value=='Username')this.value='' "> <!-- JS because of IE support; better: placeholder="Username" -->
			<span class="fontawesome-lock"></span><input type="password" name="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->
			<input type="submit" value="<?php echo $lang['LOGIN']; ?>" name="submit">
           </br> </br>
            <label id="forget_pwd" ><a href="forgetpwd.php"><?php echo $lang['FORGET_PWD']; ?></a></label>

            </br> </br>
            <label id="error_subscribe" ><?php echo $error; ?></label>
            <?php if(!empty($erreur_mail)) { ?>
            <label id="error_subscribe" ><?php echo $info; ?></label>
            <?php } ?>

		</form>
        
       

	</div> <!-- end login -->



     </div> <!--end content--> 
     </div> <!--end main-->  
     
     
<div class="arrierefooter">
<?php include('footer.php'); ?>

          </div> <!--end arrierefooter-->
  
</div> <!--end contrainer-->




</body>
</html>
