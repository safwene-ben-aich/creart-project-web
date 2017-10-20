<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: connect.php"); // Redirecting To Home Page
}
?>