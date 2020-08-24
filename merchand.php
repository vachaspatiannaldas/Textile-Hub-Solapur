<?php
include ('adminhead.php');
$con=mysqli_connect("localhost","root","","textilehub");
$i=$nm=$ad=$c=$gm=$u=$p="";

	if(isset($_POST['b1']))
	{
	 $i=$_POST['t1'];
	 $nm=$_POST['t2'];
	 $ad=$_POST['t3'];	
	 $c=$_POST['t4'];
	 $gm=$_POST['t5'];
	 $u=$_POST['t6'];
	 $p=$_POST['t7'];
	 $s="insert into mer_info values('$i','$nm','$ad','$c','$gm','$u','$p')";
	 mysqli_query($con,$s);
	 echo "<script>alert('Record Inserted...')</script>";
	}
	
	
?>
<html>
<head><title>Merchand_Detail</title></head>
<body>
<form method="post">
<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Merchand</div>
      <div class="card-body">
        <form>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t1" class="form-control" autofocus="autofocus">
                  
                  <label for="firstName">Merchand Id</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t2" class="form-control">
                  
                  <label for="lastName">Merchand Name</label>
                
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
			<input type="text" name="t3" class="form-control">
              
              <label for="inputEmail">Merchand Address</label>
            </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t4" class="form-control">
                  
                  <label for="inputPassword">Merchand Contact_No.</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t5" class="form-control">
                  
                  <label for="confirmPassword">Gmail</label>
                </div>
              </div>
			  <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t6" class="form-control">
                  
                  <label for="confirmPassword">Merchand User Name</label>
                </div>
              </div><div class="form-group">
                <div class="form-label-group">
				<input type="password" name="t7" class="form-control">
                  
                  <label for="confirmPassword">Password</label>
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