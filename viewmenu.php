<?php
include('userheader.php');
include('style.php');
include('config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Menu</title>

    <style>
        body {
            background-image: url('ab.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            color: white;
        }

        h2 {
            text-align: center;
        }

        table {
            margin: 0 auto;
        }

        table,
        th,
        td {
            border: 1px solid white;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: lightblue;
            color: black;
        }

        td {
            background-color: white;
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

    <h2>Today's Menu</h2>

    <?php
    // Fetch today's date
   // $current_date = date("Y-m-d");
    $query = "SELECT * FROM menu WHERE curdate= curdate()";
    $result = mysql_query($query);

    if (mysql_num_rows($result) > 0) {
        $row = mysql_fetch_assoc($result);
    ?>

        <p style="text-align: center;"><b>Date: <?php echo $row['curdate']; ?></b></p>

        <div>
            <table>
                <tr>
                    <th>Breakfast</th>
                    <th>Lunch</th>
                    <th>Dinner</th>
                </tr>

                <tr>
                    <td><?php echo $row['breakfast']; ?></td>
                    <td><?php echo $row['lunch']; ?></td>
                    <td><?php echo $row['dinner']; ?></td>
                </tr>
            </table>
        </div>

    <?php
    } else {
        echo "<p style='text-align: center;'>No menu available for today.</p>";
    }
    ?>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<br>
	<br>

    <?php include('footer.php'); ?>

</body>

</html>
