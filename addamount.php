<?php
include('adminheader.php');
include('style.php');
include('config.php');

if(isset($_GET['select'])){
    $query2 = "SELECT * FROM tablebooking WHERE tid='" . $_GET['select'] . "'";
    $result = mysql_query($query2);
    if(mysql_num_rows($result)){
        $row = mysql_fetch_assoc($result);
    }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add units</title>
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
</head>
<body>
    <br><br><br><br><br><br>

    <h2>Add Amount  </h2>

    <form method="post" action="">
        <table>
            <tr>
                    <td><b>Id</b></td>
                    <td><input name="aid" type="text" value="<?php echo $row['tid'] ?>" readonly /></td>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><input name="name" type="text" value="<?php echo $row['name'] ?>" readonly /></td>
                </tr>
                <tr> 
                    <td><b>Email</b></td>
                    <td><input name="mail" type="text" value="<?php echo $row['mail'] ?>" readonly /></td>
                </tr>
                <tr> 
                    <td><b>Mobile</b></td>
                    <td><input name="mobile" type="text" value="<?php echo $row['mobile'] ?>" readonly /></td>
                </tr>
                <tr> 
                    <td><b>People</b></td>
                    <td><input name="people" type="text" value="<?php echo $row['people'] ?>" readonly /></td>
                </tr>
                <tr> 
                    <td><b>Table</b></td>
                    <td><input name="table" type="text" value="<?php echo $row['table'] ?>" readonly /></td>
                </tr>
                <tr> 
                    <td><b>Food</b></td>
                    <td><input name="food" type="text" value="<?php echo $row['food'] ?>" readonly /></td>
                </tr>
				  <tr> 
                    <td><b>Data and Time</b></td>
                    <td><input name="dattym" type="datetime-local" value="<?php echo $row['dattym'] ?>" readonly /></td>
                </tr>
				 
				 
                <tr> 
                    <td><b> Add Amount</b></td>
                    <td><input name="amount" type="text" value="" required/></td>
                </tr>
				 <tr>
                    <td><b>Accept/Decline</b></td>
                    <td>
                        <select name="accept_decline">
                            <option value="accepted">Accept</option>
                            <option value="declined">Decline</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" name="submit" value="submit" id="button1" />
        </center>
    </form>

    <br><br><br><br><br><br>

<?php
if(isset($_POST['submit'])) {
    $query = "INSERT INTO `tablebooking` VALUES (null, '".$_POST['name']."', '".$_POST['mail']."', '".$_POST['mobile']."', '".$_POST['people']."', '".$_POST['table']."', '".$_POST['food']."', '".$_POST['dattym']."', '".$_POST['amount']."', '".$_POST['accept_decline']."')";

    if(mysql_query($query)){
        // Update the status to 'accepted'
        $update_query = "UPDATE tablebooking SET status='accepted' WHERE tid='" . $_POST['aid'] . "'";
        mysql_query($update_query);

        echo ' SUCCESSFULLY';
    } else {
        // Registration failed
        header("Location: vbooking.php");
        exit;
    }
    header("Location: vbooking.php");
    exit;
}
?>


</body>
</html>
 <?php
   include('footer.php');
    ?>
