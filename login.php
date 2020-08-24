<?php	
$con=mysqli_connect("localhost","root","","textilehub");
	if(isset($_POST['b1']))
	{
		$u=$_POST['t1'];
		$p=$_POST['t2'];
		$s="select * from cust_reg where uname='$u' and password='$p'";
		$res=mysqli_query($con,$s);
		while($r=mysqli_fetch_array($res))
		{
			//echo "<script>alert('Login Successfully...')</script>";
			header("location: home.php");
		}
	}
?>
<html>
<body>
<head><title>Login</title></head>
<form method="post">
Enter Username:<input type="text" name="t1"><br>
Enter Password:<input type="password" name="t2"><br>
<input type="submit" name="b1" value="Login"><br>
</form>
</body>
</html>