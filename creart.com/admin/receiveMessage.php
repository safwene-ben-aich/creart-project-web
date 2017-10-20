<?php
include_once 'config.php';
error_reporting(E_ERROR | E_PARSE);
?>

<head>

<link rel="stylesheet"
href="cssAdmin/styleList.css" type="text/css" />


<script type="text/javascript">


function delete_id(id)
{
	if(confirm('Sure to delete ?'))
	{
		window.location.href=
		'adminMessage.php?delete_id='+id;
	<?php
if (isset($_GET['delete_id']) ) 
{
	$id=$_GET['delete_id'];
	$sql_query="delete from message where id='$id'";
	mysql_query($sql_query);
   
	}

?>
	
	}
}
</script>


</head>
<body>

<center>

	<table align="center">
	<tr>
	<th  colspan="9">
	Messages</th>
	</tr>
	<tr>
	
	<th>user name</th>
	<th>Sending date</th>
	<th>subject</th>
	<th>content</th>
	<th>mail of the user</th>
	
	
	
	<th >Delete</th>
</tr>
<?php

$sql_query="SELECT * FROM message";

$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))
{
$user_name=$row[0];
$mail =mysql_result (mysql_query("SELECT email FROM subscriber where username='$user_name'"),0);
	
	?>
	<tr>
	
	<td><?php echo $row[0];?></td>
	<td><?php echo $row[1];?></td>
	<td><?php echo $row[2];?></td>
	<td><?php echo $row[3];?></td>
	<td><a href="mailto:"> <?php echo $mail;?> </a></td>
	
	
	<td align ="center"><a href=
	"javascript:delete_id('<?php echo $row[4];?>')">
	<img src="images/delete.png" width="20" height="20" align="Delete" /></a></td>
	</tr>
<?php } ?>

</table>  
</center>
