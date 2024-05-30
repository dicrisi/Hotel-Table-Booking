<?php
include("style.php");
include("config.php");
include("header.php");
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



<form name="admin" method="post">

<h1 align="center">New User Register Here!</h1>
<br>
<br>
<table align="center">
<tr><td style="color:black;"><b>Enter Username<b></td><td><input type="text" name="uname" required placeholder="Enter Username"></td></tr>
<tr><td style="color:black;"><b>Enter Email<b></td><td><input type="email" name="mail" required placeholder="Enter E-mail"></td></tr>
<tr><td style="color:black;"><b>Enter Password<b></td><td><input type="password" name="pwd" required placeholder="Enter Password"></td></tr>
<tr><td style="color:black;"><b>Enter Address<b></td><td><input type="text" name="address" required placeholder="Enter Address"></td></tr>
<tr><td style="color:black;"><b>Enter Mobile<b></td><td><input type="text" pattern=[0-9]{10} name="mobile" required placeholder="Enter Mobile"></td></tr>
<tr><td></td><td><input type="submit" name="submit" value="Register"> <input type="reset" name="clear" value="Reset"></td></tr>
<tr><td colspan="2" align="center" ><b><a href="userlogin.php" style="color:black;">Back</a><b></td></tr>

</table>

</form>


<br>
<br>
<br>
<br>
<br>

<?php
if(isset($_POST['submit']))
{
$query1="select * from user where mail='".$_POST['mail']."'";
$check_result = mysql_query($query1);
if (mysql_num_rows($check_result) > 0) {
	echo '<script> alert("User Mail Already Exist, Try with different Mail ID"); </script>';
}
else
 {
	$query="insert into user values (null, '".$_POST['uname']."', '".$_POST['mail']."', '".$_POST['pwd']."', '".$_POST['address']."', '".$_POST['mobile']."')";
	if(mysql_query($query)){
		echo "registered Successfully";
	}
	else{
		echo 'NOT REGISTERED';
	}
	header("location:userlogin.php");
 }
}
?>

 <?php
include("footer.php");
?>