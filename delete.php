<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");
session_start();
$i=$_GET["pid"];
$uid=$_SESSION["uid"];		
			$s="delete from cart where pid='$i' and uid='$uid'";
			if(mysqli_query($con,$s))
			{
			echo "<script>alert('Deleted Successfully.....')</script>";
			header("Location: usercart.php");
			}
			else
			echo mysqli_error($con);
		
	?>