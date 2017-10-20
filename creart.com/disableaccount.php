<?php
include('session.php');


$user_check=$row['username'];


$query1 = "delete from subscriber where username='$user_check'";
$res = mysql_query($query1);


include('logout.php');

?>