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
            color:white;
        }

        h2 {
            text-align: center;
        }

        form {
            text-align: center;
            margin-top: 50px;
        }

        table {
            margin: 0 auto;
        }

        label, input {
            display: inline-block;
            margin-bottom: 10px;
        }

        label {
            width: 120px; 
            text-align: right;
            margin-right: 10px;
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

<h2>View Booking Details</h2>
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
				<th bgcolor=white><font color=black size=2>  Action</font></th>
			


			  
	</tr>
	
	<?php
	
	$query = "select * from tablebooking where status='REQUESTED'";
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
						
                 
	<td bgcolor=white><b><font color=black size=2>
    <a href="addamount.php?select=<?php echo $row['tid']; ?>" style="display: inline-block; padding: 8px 12px; background-color:blue; color: white;  border-radius: 4px;">Add Amount</a>
</td>

		
	</tr>
	<?php }  ?>
	
	</table>


</center>
</form>
<?php 

if (isset($_POST['delete'])) {
    $deleteId = $_POST['delete'];
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