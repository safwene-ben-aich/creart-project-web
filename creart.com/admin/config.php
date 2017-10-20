<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host="localhost";
$username="root";
$pwd="";
$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
mysql_select_db("creart_bd");


function _ip()
{
if (preg_match ( "/^([d]{1,3}).([d]{1,3}).([d]{1,3}).([d]{1,3})$/", getenv('HTTP_X_FORWARDED_FOR')))
    {
        return getenv('HTTP_X_FORWARDED_FOR');
    }
    return getenv('REMOTE_ADDR');
}
$ip= _ip();
$time = date('d-m-Y');
$timestamp= time();

?>