<html>
<body>
<center>
<?php
session_start();
if(isset($_POST['book']))
{
if($_POST['book'] == 'Java')
{
$_SESSION["bprice"]=100;
$_SESSION["bname"]=$_POST["book"];
}
if($_POST['book'] == 'CPP')
{
$_SESSION["bprice"]=120;
$_SESSION["bname"]=$_POST["book"];

}
if($_POST['book'] == 'IT')
{
$_SESSION["bprice"]=150;
$_SESSION["bname"]=$_POST["book"];
}
}
?>
<form method ="post" action="third.php">
<h1><b><center>Fictional Books </center></b></h1>


<table style="width:100%" border=1 >
 <th>Book Name</th>
<th>price<h></th>
<tr style="height:70px">
<td><b>Dune</b></td>
<td><b>Price: 500</b></td>
<td><b>Select<input type="radio" name="book" value="Dune"></td>
</tr>
<tr style="height:70px">
<td><b>Harry Potter</b></td>
<td><b>Price: 700</b></td>
<td><b>Select<input type="radio" name="book" value="Harry Potter"></td>
</tr>
<tr style="height:70px">
<td><b>Alchemist</b></td>
<td><b>Price: 800</b></td>
<td><b>Select<input type="radio" name="book" value="Alchemist"></td>
</tr>
<tr>

<th colspan="2">
<td><input type="submit" name="submit" value="Add To Cart"</th>

</tr>
<tr>
<th colspan="1">
<td><b>Total</b></td><td><?php echo $_SESSION['bprice'];?></td></th></tr>
</table>
</form>
</center>
</body>
</html>