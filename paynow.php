<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("userheader.php");
	error_reporting(0);

?>
<?php 
if(isset($_GET['select'])){
$query2 = "select * from tablebooking where tid='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}
}

?>	


<style>
h2 {
  color: white;
  font-family: verdana;
  font-size: 240%;

}
p  {
  color: white;
  font-family: Georgia, serif;
  font-size: 100%;
   font-weight: bold;
}
</style>

  <!-- Carousel Start -->
  
                       <div class="container">

 <style>
  body {
            background-image: url('ab.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        
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

<form action="" method="post" enctype="multipart/form-data" name="addroom">
    <center>
        
        <center><font color="black" size="8">Paying Details</font></center>
        </br>

        <table>
           <tr>
                <td><b>Id</b></td>
                <td><input name="tid" type="text" value="<?php echo $row['tid'] ?>"  readonly/></td>
            </tr>
            <tr>
                <td><b>Name</b></td>
                <td><input name="name" type="text" value="<?php echo $row['name'] ?>" readonly/></td>
            </tr>
            <tr> 
                <td><b>Email</b></td>
                <td><input name="mail" type="text" value="<?php echo $row['mail'] ?>" readonly/></td>
            </tr>
            <tr> 
                <td><b> mobile</b></td>
                <td><input name="mobile" type="text" value="<?php echo  $row['mobile'] ?>"readonly /></td>
            </tr>
			   <tr> 
                <td><b>people</b></td>
                <td><input name="people" type="text" value="<?php echo  $row['people']  ?>"readonly /></td>
            </tr>
			 <tr> 
                <td><b>table</b></td>
                <td><input name="table" type="text" value="<?php echo  $row['table']  ?>"readonly /></td>
            </tr>
			 <tr> 
                <td><b>Food</b></td>
                <td><input name="food" type="text" value="<?php echo  $row['food']  ?>"readonly /></td>
            </tr>
			 <tr> 
                <td><b>Date And Time</b></td>
                <td><input name="dattym" type="text" value="<?php echo  $row['dattym']  ?>"readonly /></td>
            </tr>
			 <tr> 
                <td><b>  Amount</b></td>
                <td><input name="amount" type="text" value="<?php echo  $row['amount']  ?>"readonly /></td>
            </tr>
			<tr> 
    <td><b>CardNumber</b></td>
    <td><input name="cardnum" type="text" pattern="[0-9]{12}" title="Card number must be a 12-digit number." maxlength="12" required value="<?php echo $row['cardnum']; ?>" /></td>
</tr>


			  
        </table>

        <input type="submit" name="submit" value="PayNow" id="button1" />
        <br>
    </center>
</form>



<?php
 
 
if (isset($_POST['cardnum']) && isset($_GET['select'])) {
    $cardnum = $_POST['cardnum'];
    $tid = $_GET['select'];

   
    $query = "UPDATE tablebooking SET status='paid' WHERE tid='$tid'";

    $updateResult = mysql_query($query);

    if ($updateResult) {
        echo 'Payment updated successfully. Status changed to paid.';
       
    } else {
        echo 'Failed to update payment status.';
    }
}
?>

<br>
<br>
<br>
<br>
<br>

<?php 
	include_once("footer.php");
	?>