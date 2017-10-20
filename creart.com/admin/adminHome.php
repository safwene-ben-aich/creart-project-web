<?php
include('../session.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administration Home</title>
<link href="cssAdmin/styleAdmin.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icone_logo.png" />

<link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
<link href="cssAdmin/main.css" rel="stylesheet" type="text/css" />
<script src="js/script.js"></script>

<link rel="stylesheet" type="text/css" media="all" href="cssAdmin/styles.css">
  
</head>

<body>

<div id="container">
<?php include("adminHeader.php"); ?>

    <div id="main">
    <div id="content">

     </div> <!--end content--> 
     <?php include("home.php"); ?>  
	 </div> <!--end main-->  
     
<?php include("adminFooter.php"); ?>    

</div> <!--end contrainer-->





</body>
</html>
