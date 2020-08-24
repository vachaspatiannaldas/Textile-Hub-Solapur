<?php
include ('adminhead.php');
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");


if(isset($_POST['b1']))
{
$i=$_POST['t1'];
$ty=$_POST['t2'];

$s="insert into cati values('$i','$ty')";
mysqli_query($con,$s);
echo "<script>alert('Record Inserted')</script>";
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
				<input type="text" name="t1" class="form-control" autofocus="autofocus">
                  
				  <label for="firstName">Categary Id</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t2" class="form-control">
                  
                  <label for="lastName">Categary Type</label>
                </div>
              </div>
			  <input type="submit" name="b1" value="SUBMIT" class="btn btn-primary btn-block">
		  
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
<?php include ('adminfooter.php');?>
