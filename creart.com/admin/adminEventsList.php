<?php
include_once 'config.php';
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
		'adminEvents.php?delete_id='+id;
	<?php
if (isset($_GET['delete_id']) ) 
{
	$id=$_GET['delete_id'];
	$sql_query="delete from events where id='$id'";
	mysql_query($sql_query);
   
	}

?>
	
	}
}
</script>


</head>


<center>

	
	<table align="center">
	<tr>
	<th  colspan="9">
	Users</th>
	</tr>
	<tr>
	<th>Event Name</th>
	<th>Category</th>
	<th>Adress</th>
	<th>Date</th>
	<th>Duration</th>
	<th>Description</th>
	<th>Number of participants</th>
	<th>Event creator</th>
	
	<th >Delete</th>
</tr>
<?php
$sql_query="SELECT * FROM events";
$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))
{
	?>
	<tr>
	
	<td><?php echo $row[1];?></td>
	<td><?php echo $row[2];?></td>
	<td><?php echo $row[3];?></td>
	<td><?php echo $row[4];?></td>
	<td><?php echo $row[5];?></td>
	<td><?php echo $row[11];?></td>
	<td><?php echo $row[12];?></td>
	<td><?php echo $row[13];?></td>
	
	
	
	<td align ="center"><a href=
	"javascript:delete_id('<?php echo $row[0];?>')">
	<img src="images/delete.png" width="20" height="20" align="Delete" /></a></td>
	</tr>
<?php } ?>
</table>
   
</center>
