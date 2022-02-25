<html>
<body>
<center>
<?php
session_start();
if(isset($_POST['book']))
{
if($_POST['book'] == 'Shutter Island')
{
$_SESSION["lprize"]=500;
$_SESSION["lname"]=$_POST["book"];
}
if($_POST['book'] == 'Gone Girl')
{
$_SESSION["lprize"]=400;
$_SESSION["lname"]=$_POST["book"];
}
if($_POST['book'] == 'Misery')
{
$_SESSION["lprize"]=800;
$_SESSION["lname"]=$_POST["book"];
}
}
?>

<h1><b><center>Your Cart</center></b></h1>


<table width="100%" border="1">
<tr style="height:70px">
<td>Your selected Products</td>
<td>price</td>
</tr>
<tr style="height:50px">
<td>
<?php echo $_SESSION['bname']; ?>
</td>
<td>


<?php echo $_SESSION['bprice']; ?>
</td>
</tr>
<tr style="height:50px">
<td>
<?php echo $_SESSION['mname']; ?>
</td>
<td>
<?php echo $_SESSION['mprice']; ?>
</td>
</tr>
<tr style="height:50px">
<td>
<?php echo $_SESSION['lname']; ?>
</td>
<td>
<?php echo $_SESSION['lprize']; ?>
</td>
</tr>
<tr style="height:70px">
<td><h3>Total</h3></b></td>
<td><?php echo $_SESSION['bprice']+$_SESSION['mprice']+$_SESSION['lprize']; ?>
</td>
</tr>
<tr style="height:70px">

<th colspan="1">
<td><input type="submit" name="submit" value="Buy "</th>

</tr>
</table>
</form>
</center>
</body>
</html>