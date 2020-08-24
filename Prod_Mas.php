<?php
include ('adminhead.php');
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");

$selecdir="Images/";

if(isset($_FILES['t8']))
{
  $filenm=$_FILES['t8']['name'];
  $tempnm=$_FILES['t8']['tmp_name'];
  $size=$_FILES['t8']['size'];
  $filetype=$_FILES['t8']['type'];
  $filepath=$selecdir.$filenm;
  $file_result=move_uploaded_file($tempnm,$filepath);
  
}

if(isset($_POST['b1']))
{
$i=$_POST['t1'];
$nm=$_POST['t2'];
$si=$_POST['t3'];
$w=$_POST['t4'];
$p=$_POST['t5'];
$mnm=$_POST['t6'];
$des=$_POST['t7'];
$img=$filenm;
$q=$_POST['t9'];

$s="insert into prod_mas values('$i','$nm','$si','$w','$p','$mnm','$des','$img','$q')";
mysqli_query($con,$s);
echo "<script>alert('Record Inserted')</script>";
}

		
?>
<html>
<head><title>Product_Master</title></head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Product Master</div>
      <div class="card-body">
        <form>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t1" class="form-control" autofocus="autofocus">
                  
				  <label for="firstName">Product Id</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t2" class="form-control">
                  
                  <label for="lastName">Product Name</label>
                </div>
              </div>
            
          <div class="form-group">
            <div class="form-label-group">
			<input type="text" name="t3" class="form-control">
              <label for="inputEmail">Product Size</label>
            </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t4" class="form-control">
                  <label for="inputPassword">Product Weight</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				   <input type="text" name="t5" class="form-control">
                  <label for="confirmPassword">Product Price</label>
            </div>
          </div>
		      <div class="form-group">
                <div class="form-label-group">
				   <input type="text" name="t6" class="form-control">
                  <label for="confirmPassword">Product Merchant Name</label>
            </div>
          </div>
		  <div class="form-group">
                <div class="form-label-group">
				   <input type="text" name="t7" class="form-control">
                  <label for="confirmPassword">Product Description</label>
            </div>
          </div>
		  <div class="form-group">
                <div class="form-label-group">
				   <input type="file" name="t8" class="form-control">
                  <label for="confirmPassword">Product Image</label>
            </div>
          </div>
	      <div class="form-group">
                <div class="form-label-group">
				   <input type="text" name="t9" class="form-control">
                  <label for="confirmPassword">Product Quantity</label>
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