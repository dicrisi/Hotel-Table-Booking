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

form {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 2px solid #ccc;
    border-radius: 10px;
    background-color: #f9f9f9;
}

h1 {
    text-align: center;
}

input[type="text"],
input[type="password"],
input[type="submit"],
input[type="reset"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box; /* Ensures padding and border are included in width */
}

input[type="submit"],
input[type="reset"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
    background-color: #45a049;
}

a {
    color: black;
}

</style>
<br>
<br>
<br>
<br>
<br>
<br>



<form name="admin" method="post">

<h1 align="center">User Login</h1>

<table align="center">
<tr><td style="color:red;"><b>Usermail<b></td><td><input type="text" name="umail" required placeholder="Enter Useremail"></td></tr>
<tr><td style="color:red;"><b>Password<b></td><td><input type="password" name="pwd" required placeholder="Enter Password"></td></tr>
<tr><td ></td><td><input type="submit" name="submit" value="Login"> </tr>

<br>
<br>
<tr><td colspan="2" align="center" ><b><a href="register.php" style="color:white;"><input type="button" name="newuser" value="New User? Click Here!" style="background-color: lightblue; color: black;"></a><b></td></tr>
</table>

</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
if(isset($_POST['submit']))
 {
	$query="select * from user where mail='".$_POST['umail']."' and pwd='".$_POST['pwd']."' ";
	$result = mysql_query($query);
	if(mysql_num_rows($result))
	 {
		$row= mysql_fetch_assoc($result);
		$_SESSION['umail']= $row['mail'];
		$_SESSION['uname']= $row['uname'];
			$_SESSION['mobile']= $row['mobile'];
		echo '<script> alert("Login success"); window.location.href = "userhome.php" </script>';
		}
 else
	 {
		echo '<script> alert("Login failed");</script>';
	 }
 } 
 

?>

 <?php
include("footer.php");
?>