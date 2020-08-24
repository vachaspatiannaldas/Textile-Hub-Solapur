<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"order_mas");

if(isset($_POST['b1']))
{
	$oi=$_POST['t1'];
	$odt=$_POST['t2'];
	$pid=$_POST['t3'];
	$cid=$_POST['t4'];
	$am=$_POST['t5'];
	$q=$_POST['t6'];

	$s="insert into order values('$oi','$odt','$pid','$cid','$am','$q')";
	mysqli_query($con,$s);
	echo "<script>alert('Record Inserted')</script>";
}
?>
<html>
<head><title>order</title></head>
<body>
<form action="" method="post">
<table>

<tr>
<td>Order Id:</td><td><input type="text" name="t1"></td>
</tr>

<tr>
<td>Order Date:</td><td><input type="text" name="t2"></td>
</tr>

<tr>
<td>Product Id:</td><td><input type="text" name="t3"></td>
</tr>

<tr>
<td>Customer Id:</td><td><input type="text" name="t4"></td>
</tr>
<tr>
<td>Amount:</td><td><input type="text" name="t5"></td>
</tr>
<tr>
<td>Quantity:</td><td><input type="text" name="t6"></td>
</tr>

<tr>
<td></td><td><input type="submit" name="b1" value="Submit"></td>
</tr>
</table>
</form>
</body>
</html>