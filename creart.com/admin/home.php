<?php
require_once 'config.php';
require_once 'hit.php';
error_reporting(E_ERROR | E_PARSE);

$selectHits = mysql_query ("SELECT * FROM stats WHERE date='".$time."' GROUP BY ip") or die (mysql_error());
$uniqueToday =mysql_num_rows ($selectHits);
$hitsToday =mysql_result (mysql_query("SELECT SUM(hits) as total FROM stats WHERE date='".$time."' GROUP BY date"),0,"total");
$totalUHits =mysql_result (mysql_query("SELECT COUNT(hits)FROM stats"),0);
$totalHits= mysql_result(mysql_query("SELECT SUM(hits) as total FROM stats"),0,"total");
$diff = time()-300;
$countOnline=mysql_query ("SELECT * FROM stats WHERE online>'".$diff."'") or die(mysql_error());
$countOnline =mysql_num_rows($countOnline);
	

?>
<html>
 <link rel="stylesheet"
href="cssAdmin/styleList.css" type="text/css" /> 
  <body>
 
<h3>Unique visitors today : <?php echo $uniqueToday ?> <br/>
Number of loaded pages today : <?php echo $hitsToday ?> <br/>
<br/>
Total unique visitors :<?php echo $totalUHits ?> <br/>
Number of loaded pages :<?php echo $totalHits ?> <br/>

Current visitors online :<?php echo $countOnline ?> <br/><br/><br/><br/></h3>

<h1>Messages today </h1>
<table align="center">
	
	
	<tr>
	<th>user name</th>
	<th>subject</th>
	<th>content</th>
	<th>mail of the user</th> </tr>	
<?php

$sql_query="SELECT * FROM message";
$messageT=0;
$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))
{
$user_name=$row[0];
$mail =mysql_result (mysql_query("SELECT email FROM subscriber where username='$user_name'"),0);
if ($row[1]==date('d-m-Y'))
{
?>
	

	
	
	<td><?php echo $row[0];?></td>
	<td><?php echo $row[2];?></td>
	<td><?php echo $row[3];?></td>
	<td><a href="mailto:"> <?php echo $mail;?> </a></td>
	</tr>
	
<?php } }?>

</table>  
	

 
           
 
 </body>
</html>

