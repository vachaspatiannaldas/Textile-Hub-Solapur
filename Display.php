<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");


$i=$_GET['cid'];

$s="select * from cust_reg where cid='$i'";
$res=mysqli_query($con,$s);
while($r=mysqli_fetch_array($res))
{
	$cid=$r[0];
	$nm=$r[1];	
	$add=$r[2];
	$cn=$r[3];
	$gen=$r[4];
	$gma=$r[5];
	$city=$r[6];
	$state=$r[7];
	$pin=$r[8];
	
}	
	if(isset($_POST['b2']))
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
		
			$s="update cust_reg set name='$nm',address='$add',contact='$cn',gender='$gen',gmail='$gma',city='$city',state='$state',pincode='$pin',uname='$uname',password='$pass' where cid='$i'";
			
			if(mysqli_query($con,$s))
			echo "update Successfully.....";
			else
			echo mysqli_error($con);
		}
	
	
		if(isset($_POST['b3']))
		{
			$i=$_POST['t1'];
			$s="delete from cust_reg where cid='$i'";
			mysqli_query($con,$s);
			echo "<script>alert('Record Deleted....')</script>";
		}
?>
<html>
<head><title>Display</title></head>
<body>
<form  action="" method="post">
<tr>
<td>Customer id:</td><td><input type="text" name="t1" value="<?php echo $cid;?>"></td><br>
</tr>

<tr>
<td>Name:</td><td><input type="text" name="t2" value="<?php echo $nm;?>"></td><br>
</tr>

<tr>
<td>Address:</td><td><input type="text" name="t3" value="<?php echo $add;?>"></td><br>
</tr>

<tr>
<td>Contact:</td><td><input type="text" name="t4" value="<?php echo $cn;?>"></td><br>
</tr>

<tr>
<td>Gender:</td><td><input type="text" name="t5" value="<?php echo $gen;?>"></td><br>
</tr>

<tr>
<td>Gmail:</td><td><input type="text" name="t6" value="<?php echo $gma;?>"></td><br>
</tr>

<tr>
<td>City:</td><td><input type="text" name="t7" value="<?php echo $city;?>"></td><br>
</tr>

<tr>
<td>State:</td><td><input type="text" name="t8" value="<?php echo $state;?>"></td><br>
</tr>

<tr>
<td>Pincode:</td><td><input type="text" name="t9" value="<?php echo $pin;?>"></td><br>
</tr>

<tr>
<td></td><td><input type="submit" name="b2" value="UPDATE"></td>
</tr>

<tr>
<td></td><td><input type="submit" name="b3" value="DELETE"></td>
</tr>