<?php
include("style.php");
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

<br><br><br><br><br><br>

<form name="admin" method="post">
    <h1>Admin Login</h1>
    <br><br>
    <table align="center">
        <tr>
            <td style="color:red;"><b>Username</b></td>
            <td><input type="text" name="uname" required placeholder="Enter Username"></td>
        </tr>
        <tr>
            <td style="color:red;"><b>Password</b></td>
            <td><input type="password" name="pwd" required placeholder="Enter Password"></td>
        </tr>
       <tr>
    <td>
    <td style="text-align: center;"><input type="submit" name="submit" value="Login"></td>
</tr>

        <tr>
            <td colspan="2" align="center"><b><a href="index.php">Back</a></b></td>
        </tr>
    </table>
</form>

<br><br><br><br><br><br><br><br><br>

<?php
if(isset($_POST['submit'])) {
    if($_POST['uname']=="admin" && $_POST['pwd']=="admin") {
        header("location:adminhome.php");
    } else {
        echo '<script> alert("Login Failed");</script>';
    }
}
?>

<?php
include("footer.php");
?>
