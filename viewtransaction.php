<?php
include("style.php");
include("config.php");
include("adminheader.php");
?>
<?php
if (isset($_POST['click'])) {
    $status = $_POST['status'];
    $tid = $_POST['click'];

    // Update the status in the database
    $updateQuery = "UPDATE tablebooking SET status='$status' WHERE tid='$tid'";
    $updateResult = mysql_query($updateQuery) or die(mysql_error());

    if ($updateResult) {
        echo 'Status updated successfully.';
        // You may choose to redirect or perform any other action after updating the status.
    } else {
        echo 'Failed to update status.';
    }
}
?>
<body>


<style>
body {
  background-image: url('ab.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<form action="" method="post" >
<center>

<h2>View Transaction Details</h2>
<br>

<br>
	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    <th bgcolor=white><font color=black size=2> ID</font></th>
			<th bgcolor=white><font color=black size=2> Name</font></th>
			<th bgcolor=white><font color=black size=2> Mail</font></th>

			<th bgcolor=white><font color=black size=2>Mobile</font></th>
				<th bgcolor=white><font color=black size=2> People</font></th>

			<th bgcolor=white><font color=black size=2>Table</font></th>
			<th bgcolor=white><font color=black size=2>Food</font></th>
			<th bgcolor=white><font color=black size=2>Date And Time</font></th>
				<th bgcolor=white><font color=black size=2>  Amount</font></th>
					<th bgcolor=white><font color=black size=2>  Status</font></th>
				<th bgcolor=white><font color=black size=2>  Delete</font></th>


			  
	</tr>
	
	<?php
	
	$query = "select * from tablebooking  ";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       <td bgcolor=white><b><font color=black size=2><?php echo $row['tid']; ?></font><b></td>
		<td bgcolor=white><b><font color=black size=2><?php echo $row['name']; ?></font><b></td>
		<td bgcolor=white><b><font color=black size=2><?php echo $row['mail']; ?></font><b></td>
	
		<td bgcolor=white><b><font color=black size=2><?php echo $row['mobile']; ?></font><b></td>
			<td bgcolor=white><b><font color=black size=2><?php echo $row['people']; ?></font><b></td>
				<td bgcolor=white><b><font color=black size=2><?php echo $row['table']; ?></font><b></td>
					<td bgcolor=white><b><font color=black size=2><?php echo $row['food']; ?></font><b></td>
						<td bgcolor=white><b><font color=black size=2><?php echo $row['dattym']; ?></font><b></td>
						
		
				<td bgcolor=white><b><font color=black size=2><?php echo $row['amount']; ?></font><b></td>
				
				<td bgcolor=white><b><font color=black size=2><?php echo $row['status']; ?></font><b></td>

		
	<td bgcolor=white><b><font color=black size=2><a href="?delete=<?php echo $row['tid'];?>">Delete</a></font></td>


		
	</tr>
	<?php }  ?>
	
	</table>


</center>
</form>
<?php
if (isset($_GET['delete'])) {
    $deleteId = $_GET['delete'];
    $deleteQuery = "DELETE FROM tablebooking WHERE tid='$deleteId'";
    if (mysql_query($deleteQuery)) {
        echo 'Record deleted successfully';
    } else {
        echo 'Error deleting record: ' . mysql_error();
    }
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

 <?php
include("footer.php");
?>