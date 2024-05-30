<?php
include('userheader.php');
include('style.php');
include('config.php');
error_reporting(0);
session_start();
?>

<style>
    body {
        background-image: url('ab.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
    }

    table.displaycontent {
        border-collapse: collapse;
        width: 1000px; /* Adjust width as needed */
        margin: 0 auto; /* Center the table */
    }

    table.displaycontent th,
    table.displaycontent td {
        padding: 8px;
        border: 1px solid #000;
        background-color: white;
        color: black;
        font-size: 14px;
    }
</style>

<form method="post">

    <div>

        <br>
        <br>
        <br>
        <br>

        <br>

        <h2 align="center">My Details</h2>

        <table border="2" cellspacing="6" class="displaycontent" width="1000" height="120" style="border:4px solid lightblue;" align="center">
            <tr>

                <th bgcolor=white><font color=black size=2>id</font></th>
                <th bgcolor=white><font color=black size=2>Name</font></th>
		        <th bgcolor=white><font color=black size=2>Email</font></th>
                <th bgcolor=white><font color=black size=2>Password</font></th>
              
                <th bgcolor=white><font color=black size=2>Address</font></th>
				  <th bgcolor=white><font color=black size=2>Mobile</font></th>
            
            </tr>
            <br><br>
            <br>
            <br>

            <br>
            <?php

            $query = "SELECT * FROM user WHERE mail='" . $_SESSION['umail'] . "'";
            $result = mysql_query($query) or die(mysql_error());
            while ($row = mysql_fetch_assoc($result)) {
            ?>
                <tr>

                    <td bgcolor=white><font color=black size=2><?php echo $row['id']; ?></font></td>
                    <td bgcolor=white><font color=black size=2><?php echo $row['uname']; ?></font></td>
					 <td bgcolor=white><font color=black size=2><?php echo $row['mail']; ?></font></td>
                    <td bgcolor=white><font color=black size=2><?php echo $row['pwd']; ?></font></td>
              
                    <td bgcolor=white><font color=black size=2><?php echo $row['address']; ?></font></td>
					      <td bgcolor=white><font color=black size=2><?php echo $row['mobile']; ?></font></td>
                  

                </tr>
            <?php }  ?>

        </table>
    </div>

</form>

<br>
<br>
<br>
<br>
<br>

<?php
include('footer.php');
?>
