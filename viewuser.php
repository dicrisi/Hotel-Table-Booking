<?php
include("style.php");
include("config.php");
include("adminheader.php");
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

<h2>User Details</h2>
<br>

<br>
	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    <th bgcolor=orange><font color=blue size=2>User ID</font></th>
			<th bgcolor=orange><font color=blue size=2>User Name</font></th>
			<th bgcolor=orange><font color=blue size=2>User Mail</font></th>
			<th bgcolor=orange><font color=blue size=2>Address</font></th>
			<th bgcolor=orange><font color=blue size=2>Mobile</font></th>
<th bgcolor=orange><font color=blue size=2>Delete</font></th>
			  
	</tr>
	
	<?php
	
	$query = "select * from user";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       <td bgcolor=orange><b><font color=white size=2><?php echo $row['id']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['name']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['mail']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['address']; ?></font><b></td>
		<td bgcolor=orange><b><font color=white size=2><?php echo $row['mobile']; ?></font><b></td>
		<td bgcolor=orange><b><font size=2><a href="?delete=<?php echo $row['id'];?>" style="color:red;">Delete</a></font><b></td>

		
	</tr>
	<?php }  ?>
	
	</table>


</center>
</form>
<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from user where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:viewuser.php");
	exit;
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