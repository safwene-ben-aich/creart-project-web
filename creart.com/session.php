<?php
//Ceci est pour ingorer les erreurs concernant la version du mysql
error_reporting(E_ALL ^ E_DEPRECATED);
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("creart_bd", $connection);
if(!isset($_SESSION)) 
    { 
session_start();// Starting Session

	}
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from subscriber where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: /creart.com/connect.php'); // Redirecting To Home Page
}
?>