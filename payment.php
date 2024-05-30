<?php
include("style.php");
include("config.php");
include("userheader.php");
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

<h2>View Payment Details</h2>
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
				<th bgcolor=white><font color=black size=2>Amount  </font></th>
					<th bgcolor=white><font color=black size=2>Paynow  </font></th>


			  
	</tr>
	
	<?php
$query = "SELECT * FROM tablebooking WHERE mail='" . $_SESSION['umail'] . "' AND status='accepted'";




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
						             
	<td bgcolor=white><b><font color=black size=2>
    <a href="paynow.php?select=<?php echo $row['tid']; ?>" style="display: inline-block; padding: 8px 12px; background-color:blue; color: white;  border-radius: 4px;">Paynow </a>
</td>



		
	</tr>
	<?php }  ?>
	
	</table>


</center>
</form>



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