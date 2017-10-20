<?php
$limit = 5; #item per page
# db connect
$host="localhost";
$username="root";
$password="";
$connect=@mysql_connect($host,$username,$password)
or die ("PROBLEME LORS DE LA CONNEXION A LA BASE DE DONNNES");
mysql_select_db("creart_bd");
?>