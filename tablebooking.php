<?php
include('userheader.php');
include('style.php');
include('config.php');
error_reporting(0);
?>
<br><BR>
<?php




$query2 = "select * from user where id='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}

?> 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>

   
   <style>
        body {
            background-image: url('ab.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
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
</head>

<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

    <h2>Table Booking</h2>

    <form method="post" action="">
        <table>
            <tr>
                <td><b>Name</b></td>
                <td><input type="text" name="name" value="<?php echo $_SESSION['uname']; ?>" readonly /></td>
            </tr>
			 <tr>
                <td><b>Email</b></td>
                <td><input type="email" name="mail" value="<?php echo $_SESSION['umail']; ?>" readonly /></td>
            </tr>
            
            <tr>
                <td><b>Mobile</b></td>
                <td><input type="text" name="mobile" value="<?php echo $_SESSION['mobile']; ?>" readonly /></td>
            </tr>
 <tr>
    <td><b>People</b></td>
     <td>
        <select name="people">
            <option value="1">People 1</option>
            <option value="2">People 2</option>
            <option value="3">People 3</option>
            <option value="4">People 4</option>
            <option value="5">People 5</option>
            <option value="6">People 6</option>
            <option value="7">People 7</option>
            <option value="8">People 8</option>
            <option value="9">People 9</option>
            <option value="10">People 10</option>
        </select>
    </td>
</tr>
<tr>
    <td><b>Table</b></td>
    <td>
        <select name="table">
            <option value="t1">Table 1</option>
            <option value="t2">Table 2</option>
            <option value="t3">Table 3</option>
            <option value="t4">Table 4</option>
            <option value="t5">Table 5</option>
            <option value="t6">Table 6</option>
            <option value="t7">Table 7</option>
            <option value="t8">Table 8</option>
            <option value="t9">Table 9</option>
            <option value="t10">Table 10</option>
        </select>
    </td>
</tr>
  <tr>
                <td><b>Food</b></td>
                <td>
        <select name="food">
            <option value="breakfast">Breakfast </option>
            <option value="lunch">Lunch </option>
            <option value="dinner">Dineer </option>
            </select>
    </td>
</tr>
           
          <tr>
    <td><b>Date and Time</b></td>
    <td><input type="datetime-local"  name="dattym" required></td>
</tr>
 

        </table>

        <br>

        <input type="submit" name="register" value="Register" style="color: #000000" />
        <br>
        <a href="userhome.php" style="color: black;">Back  </a>
    </form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

<?php

if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `tablebooking` VALUES (null,'".$_POST['name']."','".$_POST['mail']."',  '".$_POST['mobile']."' , '".$_POST['people']."' , '".$_POST['table']."','".$_POST['food']."' ,'".$_POST['dattym']."','NULL','REQUESTED')";

	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:tablebooking.php");
//	exit;
 
 }

?>

    <?php
   include('footer.php');
    ?>

</body>

</html>
