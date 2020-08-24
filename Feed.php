<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");

	if(isset($_POST['b1']))
	{
	$i=$_POST['t1'];
	$num=$_POST['t2'];
	$msg=$_POST['t3'];
	$email=$_POST['t4'];

	$s="insert into feedback values('$i','$num','$msg','$email')";
	mysqli_query($con,$s);
	echo "<script>alert('Record Sent')</script>";
	}

	
?>
<html>
<head><title>Product_Master</title></head>
<body>
<form action="" method="post">
<table>

<tr>
<td>Feedback_Id:</td><td><input type="text" name="t1"></td>
</tr>

<tr>
<td>Cust_Name:</td><td><input type="text" name="t2"></td>
</tr>

<tr>
<td>Message:</td><td><textarea name="t3"></textarea></td>
</tr>

<tr>
<td>Email:</td><td><input type="text" name="t4"></td>
</tr>

<tr>
<td></td><td><input type="submit" name="b1" value="SUBMIT"></td>
</tr>

</table>
</form>
</body>
</html>