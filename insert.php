<?php

	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"textilehub");
	$num=$_POST['t1'];
	$msg=$_POST['t2'];
	$email=$_POST['t3'];
							$s="insert into feedback(Cust_name,Msg,Cust_Email) values('$num','$msg','$email')";
							if(mysqli_query($con,$s))
							             echo "<script>alert('Record Sent')</script>";
	                        else
							             echo "<script>alert('unsuccessful')</script>";
?>