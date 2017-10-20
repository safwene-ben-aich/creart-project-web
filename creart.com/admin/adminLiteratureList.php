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
		'adminLiterature.php?delete_id='+id;
	<?php
if (isset($_GET['delete_id']) ) 
{
	$id=$_GET['delete_id'];
	$sql_query="delete from literature where id='$id'";
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
	Literature</th>
	</tr>
	<tr>
	
	<th>Title</th>
	<th>Type</th>
	<th>Description</th>
	<th>Publication date</th>
	<th>Rating</th>
	<th>Number of views</th>
	<th>Changes to prior version</th>
	<th>Reports</th>
	
	
	<th >Delete</th>
</tr>
<?php

$sql_query="SELECT * FROM literature";

$result_set=mysql_query($sql_query);
while($row=mysql_fetch_row($result_set))
{
$id=$row[0];
$signal =mysql_result (mysql_query("SELECT COUNT(report)  FROM opinion where id_item='$id'&&report=1&&type='literature'"),0);
	
	?>
	<tr>
	
	<td><?php echo $row[1];?></td>
	<td><?php echo $row[2];?></td>
	<td><?php echo $row[3];?></td>
	<td><?php echo $row[4];?></td>
	<td><?php echo $row[5];?></td>
	<td><?php echo $row[6];?></td>
	<td><?php echo $row[8];?></td>
	<td><?php echo $signal;?></td>
	<td align ="center"><a href=
	"javascript:delete_id('<?php echo $row[0];?>')">
	<img src="images/delete.png" width="20" height="20" align="Delete" /></a></td>
	</tr>
<?php } ?>

   
</table>
</center>


