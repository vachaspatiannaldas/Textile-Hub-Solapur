<?php
include ('adminhead.php');
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");


$i=$_GET['i'];
$nm=$ad=$c=$gm="";
$s="select * from  mer_info where id='$i'";
$res=mysqli_query($con,$s);
while($r=mysqli_fetch_array($res))
{
	$i=$r[0];
	$nm=$r[1];	
	$ad=$r[2];
	$c=$r[3];
	$gm=$r[4];	
}	
	
	if(isset($_POST['b2']))
		{
			$i=$_POST['t1'];
			$nm=$_POST['t2'];
			$ad=$_POST['t3'];
			$c=$_POST['t4'];
			$gm=$_POST['t5'];
		
			$s="update mer_info set name='$nm',address='$ad',contact='$c',gmail='$gm' where id='$i'";
			
			if(mysqli_query($con,$s))
			echo "update Successfully.....";
			else
			echo mysqli_error($con);
		}
	
	
		if(isset($_POST['b3']))
		{
			$i=$_POST['t1'];
			$s="delete from mer_info where id='$i'";
			mysqli_query($con,$s);
			echo "<script>alert('Record Deleted....')</script>";
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
				<input type="text" name="t1" value="<?php echo $i;?>" class="form-control" autofocus="autofocus">
                  
                  <label for="firstName">Merchand Id</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t2" value="<?php echo $nm;?>" class="form-control">
                  
                  <label for="lastName">Merchand Name</label>
                
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
			<input type="text" name="t3" value="<?php echo $ad;?>" class="form-control">
              
              <label for="inputEmail">Merchand Address</label>
            </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t4" value="<?php echo $c;?>" class="form-control">
                  
                  <label for="inputPassword">Merchand Contact_No.</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t5" value="<?php echo $gm;?>" class="form-control">
                  
                  <label for="confirmPassword">Gmail</label>
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
<?php include ('adminfooter.php');?>