<?php
include('userheader.php');
include('style.php');
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">


<style>
body {
  background-image: url('ab.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}

 h1 {
            text-align: center;
        }
h3 {
     text-align: center;
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
<h1>Welcome  <?php echo $_SESSION['umail'] ?></h1>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>	
<br>
<br>
 
</head>


</body>
<?php
include('footer.php');
?>

</html>