<?php
include('session.php');


$user_check=$row['username'];
//$pwd_check=$row['pwd'];

$password=$_POST['password'];
//$old_pwd=$_POST['old_pwd'];
//$erreur="";



$query1 = "UPDATE subscriber SET pwd='$password' WHERE username='$user_check'";
$res = mysql_query($query1);




header('location:myaccount.php'); // Redirecting To Home Page



?>

