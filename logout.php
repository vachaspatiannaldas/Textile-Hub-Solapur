<?php 
session_start();
if($_SESSION["uid"]!=null)
{
$_SESSION["uid"]=null;
header("location:userindex.php");
}
?>

