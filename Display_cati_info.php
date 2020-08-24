<?php
include ('adminhead.php');
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");


$id=$_GET['i'];
$i=$ty="";
$s="select * from  cati where Categary_Id='$id'";
$res=mysqli_query($con,$s);
while($r=mysqli_fetch_array($res))
{
	$i=$r[0];
	$ty=$r[1];	
		
}	
	
	if(isset($_POST['b2']))
		{
			$i=$_POST['t1'];
			$ty=$_POST['t2'];
			
		
			$s="update cati set Categary_Type='$ty' where Categary_Id='$i'";
			
			if(mysqli_query($con,$s))
			echo "update Successfully.....";
			else
			echo mysqli_error($con);
		}
	
	
		if(isset($_POST['b3']))
		{
			$ty=$_POST['t1'];
			$s="delete from cati where Categary_Id='$i'";
			mysqli_query($con,$s);
			echo "<script>alert('Record Deleted....')</script>";
			}
?>
<html>
<head><title>Categary</title></head>
<body>
<form action="" method="post">
<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Categary</div>
      <div class="card-body">
        <form>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t1" value="<?php echo $i;?>" class="form-control" autofocus="autofocus">
                  
				  <label for="firstName">Categary ID</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t2" value="<?php echo $ty;?>" class="form-control">
                  
                  <label for="lastName">Categary Type</label>
                </div>
              </div>
			  <input type="submit" name="b2" value="UPDATE" class="btn btn-primary btn-block">
			  <input type="submit" name="b3" value="DELETE" class="btn btn-primary btn-block">
		  
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>


</form>
</body>
</html>

<?php include('adminfooter.php'); ?>