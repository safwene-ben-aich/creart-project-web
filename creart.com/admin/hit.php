<?php
require_once 'config.php';
$getStats= mysql_query("SELECT * FROM stats WHERE ip='".$ip."'&& date='".$time."'") or die(mysql_error());
$num_rows=mysql_num_rows( $getStats);
if ($num_rows==0)
{
$select =mysql_query("INSERT INTO stats (ip,date,hits,online) VALUES ('".$ip."','".$time."','1','".$timestamp."')") or die(mysql_error());
}
else
{
$select=mysql_query ("UPDATE stats SET hits =hits+1 ,online='".$timestamp."' WHERE ip='".$ip."' && date='".$time."'")or die(mysql_error())	;
}
?>