<?php
include('adminheader.php');
include('style.php');
include('config.php');

if(isset($_POST['submit'])) {
    $breakfast = $_POST['breakfast'];
    $lunch = $_POST['lunch'];
    $dinner = $_POST['dinner'];
    
    // Insert only the current date automatically
    $query = "INSERT INTO `menu` (`curdate`, `breakfast`, `lunch`, `dinner`) VALUES (CURDATE(), '$breakfast', '$lunch', '$dinner')";
    if(mysql_query($query)) {
        echo '<script>alert("Food items added successfully"); window.location.href = "addmenu.php";</script>';
    } else {
        echo '<script>alert("Failed to add food items");</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu</title>

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
    color: black;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover,
input[type="reset"]:hover {
    background-color: black;
}

a {
    color: black;
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

    <h2>Add Menu</h2>

    <form method="post" action="">
        <table>
            <tr>
    <td><b style="color: black;">Breakfast:</b></td>
    <td><input type="text" name="breakfast" required></td>
</tr>

            <tr>
                <td><b style="color: black;">Lunch:</b></td>
                <td><input type="text" name="lunch" required></td>
            </tr>
            <tr>
                <td><b style="color: black;">Dinner:</b></td>
                <td><input type="text" name="dinner" required></td>
            </tr>
        </table>

        <input type="submit" name="submit" value="Submit">
        <br>
       
    </form>

    <div>
        <h2 align="center">View Menu</h2>

        <table border="2" cellspacing="6" class="displaycontent" width="1000" height="120" style="border:4px solid lightblue;" align="center">
            <tr>
                <th bgcolor=white><font color=black size=2>ID</font></th>
                <th bgcolor=white><font color=black size=2>Current Date</font></th>
                <th bgcolor=white><font color=black size=2>Breakfast</font></th>
                <th bgcolor=white><font color=black size=2>Lunch</font></th>
                <th bgcolor=white><font color=black size=2>Dinner</font></th>
                <th bgcolor=white><font color=black size=2>Delete</font></th>
            </tr>

            <?php
            $query = "SELECT * FROM menu";
            $result = mysql_query($query) or die(mysql_error());
            while($row = mysql_fetch_assoc($result)) {
            ?>
            <tr>
                <td bgcolor=white><font color=black size=2><?php echo $row['mid']; ?></font></td>
                <td bgcolor=white><font color=black size=2><?php echo $row['curdate']; ?></font></td>
                <td bgcolor=white><font color=black size=2><?php echo $row['breakfast']; ?></font></td>
                <td bgcolor=white><font color=black size=2><?php echo $row['lunch']; ?></font></td>
                <td bgcolor=white><font color=black size=2><?php echo $row['dinner']; ?></font></td>
                <td bgcolor=white><font color=black size=2><a href="?delete=<?php echo $row['mid']; ?>">Delete</a></font></td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <?php
    if(isset($_GET['delete'])) {
        $query = "DELETE FROM menu WHERE mid='" . $_GET['delete'] . "'";
        mysql_query($query);
        echo '<script>alert("Deleted");</script>';
        header("location:addmenu.php");
        exit;
    }
    ?>

    <?php include('footer.php'); ?>

</body>

</html>
