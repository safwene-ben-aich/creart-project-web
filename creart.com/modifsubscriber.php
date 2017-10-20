<?php
include('session.php');


$user_check=$row['username'];






$name=$_POST['name'];
//$password=$_POST['password'];
//$BirthMonth=$_POST['BirthMonth'];
$Birthday=$_POST['Birthday'];
//$birthyear=$_POST['birthyear'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$Country=$_POST['Country'];
//$pic=$_POST['pic'];
/*$Interested1=$_POST['Interested1'];
$Interested2=$_POST['Interested2'];
$Interested3=$_POST['Interested3'];
$Interested4=$_POST['Interested4'];*/

//$birthday=$birthyear.'/'.$BirthMonth.'/'.$BirthDay;
//$Interested=$Interested1." ".$Interested2." ".$Interested3." ".$Interested4;

//$sqldate=date('YY-mm-dd',strtotime($birthday));




$query1 = "UPDATE subscriber SET name='$name',birthday='$Birthday',gender='$gender',mobile='$phone',country='$Country' WHERE username='$user_check'";
$res = mysql_query($query1);





header('location:myaccount.php'); // Redirecting To Home Page



?>

