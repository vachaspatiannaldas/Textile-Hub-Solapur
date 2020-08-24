<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");
session_start();
if(isset($_SESSION["uid"]))
{
$uid=$_SESSION["uid"];
$pid=$_GET['pid'];
$nm=$price="";
$s="select * from prod_mas where prod_id='$pid'";
$res=mysqli_query($con,$s);
while($r=mysqli_fetch_array($res))
{
   $nm=$r[1];
   $price=$r[4];
}
$s1="insert into cart(pid,pname,price,uid) values('$pid','$nm','$price','$uid')";
mysqli_query($con,$s1);
echo "<script>alert('Record Inserted')</script>";
header("Location: usercart.php");
}
else
{
header("Location: registration.php");
}
?>