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

	
	$i=$_GET['i'];

	$s="select * from Prod_Mas where Prod_id='$i'";
	$res=mysqli_query($con,$s);
	while($r=mysqli_fetch_array($res))
	{
		$i=$r[0];
		$nm=$r[1];	
		$si=$r[2];
		$w=$r[3];
		$p=$r[4];
		$mnm=$r[5];
		$des=$r[6];
		$img=$r[7];
		$q=$r[8];
		
	}	
		
		if(isset($_POST['b2']))
			{
				$i=$_POST['t1'];
				$nm=$_POST['t2'];
				$si=$_POST['t3'];
				$w=$_POST['t4'];
				$p=$_POST['t5'];
				$mnm=$_POST['t6'];
				$des=$_POST['t7'];
				$img=$filenm;
				$img=$filenm;
				$q=$_POST['t9'];
			
				$s="update prod_mas set Prod_name='$nm',Prod_size='$si',Prod_weight='$w',Prod_price='$p',Prod_merchant='$mnm',Prod_descript='$des',Prod_img='$img',Prod_qty='$q' where Prod_id='$i'";
				
				if(mysqli_query($con,$s))
				echo "update Successfully.....";
				else
				echo mysqli_error($con);
			}
		
		
			if(isset($_POST['b3']))
			{
				$i=$_POST['t1'];
				$s="delete from prod_mas where Prod_id='$i'";
				mysqli_query($con,$s);
				echo "<script>alert('Record Deleted....')</script>";
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
				<input type="text" name="t1" value="<?php echo $i;?>" class="form-control" autofocus="autofocus">
                  
				  <label for="firstName">Product Id</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t2" value="<?php echo $nm;?>" class="form-control">
                  
                  <label for="lastName">Product Name</label>
                </div>
              </div>
            
          <div class="form-group">
            <div class="form-label-group">
			<input type="text" name="t3" value="<?php echo $si;?>" class="form-control">
              <label for="inputEmail">Product Size</label>
            </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t4" value="<?php echo $w;?>" class="form-control">
                  <label for="inputPassword">Product Weight</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				   <input type="text" name="t5" value="<?php echo $p;?>" class="form-control">
                  <label for="confirmPassword">Product Price</label>
            </div>
          </div>
		      <div class="form-group">
                <div class="form-label-group">
				   <input type="text" name="t6" value="<?php echo $mnm;?>" class="form-control">
                  <label for="confirmPassword">Product Merchant Name</label>
            </div>
          </div>
		  <div class="form-group">
                <div class="form-label-group">
				   <input type="text" name="t7" value="<?php echo $des;?>" class="form-control">
                  <label for="confirmPassword">Product Description</label>
            </div>
          </div>
		  <div class="form-group">
                <div class="form-label-group">
				   <input type="file" name="t8" value="<?php echo $img;?>" class="form-control">
                  <input type="text" name="i8" value="<?php echo $img;?>" class="form-control">
				  <label for="confirmPassword">Product Image</label>
            </div>
          </div>
	      <div class="form-group">
                <div class="form-label-group">
				   <input type="text" name="t9" value="<?php echo $q;?>" class="form-control">
                  <label for="confirmPassword">Product Quantity</label>
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

<?php include ('adminfooter.php'); ?>