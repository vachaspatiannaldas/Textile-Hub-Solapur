<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");

if(isset($_POST['b1']))
{
$cid=$_POST['t1'];
$nm=$_POST['t2'];
$add=$_POST['t3'];
$cn=$_POST['t4'];
$gen=$_POST['t5'];
$gma=$_POST['t6'];
$city=$_POST['t7'];
$state=$_POST['t8'];
$pin=$_POST['t9'];
$uname=$_POST['t10'];
$pass=$_POST['t11'];

$s="insert into cust_reg values('$cid','$nm','$add','$cn','$gen','$gma','$city','$state','$pin','$uname','$pass')";
mysqli_query($con,$s);
echo "<script>alert('Record Inserted')</script>";
}

		
?>
<html>
<head><title>Customer</title></head>
<body>
<form  action="" method="post">
<table>

<tr>
<td>Customer id:</td><td><input type="text" name="t1"></td><br>
</tr>

<tr>
<td>Name:</td><td><input type="text" name="t2"></td><br>
</tr>

<tr>
<td>Address:</td><td><input type="text" name="t3"></td><br>
</tr>

<tr>
<td>Contact:</td><td><input type="text" name="t4"></td><br>
</tr>

<tr>
<td>Gender:</td><td><input type="text" name="t5"></td><br>
</tr>

<tr>
<td>Gmail:</td><td><input type="text" name="t6"></td><br>
</tr>

<tr>
<td>City:</td><td><input type="text" name="t7"></td><br>
</tr>

<tr>
<td>State:</td><td><input type="text" name="t8"></td><br>
</tr>

<tr>
<td>Pincode:</td><td><input type="text" name="t9"></td><br>
</tr>

<tr>
<td>User Name:</td><td><input type="text" name="t10"></td><br>
</tr>

<tr>
<td>Password:</td><td><input type="password" name="t11"></td><br>
</tr>

<tr>
<td></td><td><input type="submit" name="b1" value="SUBMIT"></td>
</tr>

</table>
</form>
</body>
</html>