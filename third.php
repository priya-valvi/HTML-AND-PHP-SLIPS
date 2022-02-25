<html>
<body>
<center>
<?php
session_start();

if(isset($_POST['book']))
{
if($_POST['book'] == 'Dune')
{
$_SESSION["mprice"]=500;
$_SESSION["mname"]=$_POST["book"];
}
if($_POST['book'] == 'Harry Potter')
{
$_SESSION["mprice"]=700;
$_SESSION["mname"]=$_POST["book"];
}
if($_POST['book'] == 'Alchemist')
{
$_SESSION["mprice"]=800;
$_SESSION["mname"]=$_POST["book"];
}
}
?>
<form method ="post" action="fourth.php">
<h1><b><center>Thrillar books</center></b></h1>

<table style="width:100%" border=1 >

 <th>Book Name</th>
<th>price<h></th>

<tr style="height:70px">
<td><b>Shutter Island</b></td>
<td><b>Price: 500</b></td>
<td><b>Select<input type="radio" name="book" value="Shutter Island"></td>
</tr>

<tr style="height:70px">
<td><b>Gone Girl</b></td>
<td><b>Price:400 </b></td>
<td><b>Select<input type="radio" name="book" value="Gone Girl"></td>
</tr>

<tr style="height:70px">
<td><b>Misery</b></td>
<td><b>Price: 900</b></td>
<td><b>Select<input type="radio" name="book" value="Misery"></td>
</tr>
<tr>

<th colspan="2">
<td><input type="submit" name="submit" value="Add To Cart"</th>

</tr>
<tr>
<th colspan="1">

<td><b>Total</b></td><td><?php echo
$_SESSION['bprice']+$_SESSION['mprice'];?></td> </th></tr>

</table>
</form>
</<center>
</body>
</html>
