<?php
//error_reporting(E_ALL ^ E_DEPRECATED);
if(!isset($_SESSION)) 
    { 
session_start(); // Starting Session
	}
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

/*if($username=="admin" && $password=="admin" )
	header("location: admin/adminHome.php");*/


// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("creart_bd", $connection);



$ses_sql=mysql_query("SELECT actif FROM subscriber WHERE username='$username'", $connection);
 $row = mysql_fetch_assoc($ses_sql);

    $actif = $row['actif']; // $actif contiendra alors 0 ou 1


if($actif == '1') // Si $actif est égal à 1, on autorise la connexion
  {

// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from subscriber where pwd='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
if($_SESSION['login_user']=="admin")
{
header("location: admin/adminHome.php");// Redirecting To Other Page
exit(); 
}
else{


header("location: home_co.php");// Redirecting To Other Page
exit(); 
}
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection); // Closing Connection
}
else // Sinon la connexion est refusé...
  {
   //...
   mysql_close($connection); // Closing Connection

$error = 'not activated yet';   //...
  }


}
}
?>