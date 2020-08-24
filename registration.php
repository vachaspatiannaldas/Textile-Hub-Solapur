<?php ob_start(); ?>
<?php
//session_start();
include ('userhead.php');
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");
//session_start();
if(isset($_POST['b1']))
{
	$gma=$_POST['t11'];
	$pass=$_POST['t12'];
	$s="select * from cust_reg where gmail='$gma' and password='$pass'";
	$res=mysqli_query($con,$s);
	while($r=mysqli_fetch_array($res))
	{
		$i=$r[0];
		
		
		//header('location:Demo.php');
	}
	if($i>0)
	{
	//session_start();
	$_SESSION["uid"]=$i;
	//print_r($_SESSION);
	header("Location: prod_index.php?nm=Dollar");
	//echo "<script>alert('Login Successfully...')</script>";
   ob_end_flush(); 
	}
	else
	{
	echo "<script>alert('Login Failed...')</script>";
	}
}





if(isset($_POST['b2']))
{

$nm=$_POST['t1'];
$add=$_POST['t2'];
$cn=$_POST['t3'];
$gen=$_POST['t4'];
$gma=$_POST['t5'];
$city=$_POST['t6'];
$state=$_POST['t7'];
$pin=$_POST['t8'];
$pass=$_POST['t9'];

$s="insert into cust_reg(name,address,contact,gender,gmail,city,state,pincode,password) values('$nm','$add','$cn','$gen','$gma','$city','$state','$pin','$pass')";
mysqli_query($con,$s);
echo "<script>alert('Record Inserted')</script>";
}



?>

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="" method="POST">
							<input type="email" name="t11" placeholder="Email Address" />
							<input type="password" name="t12" placeholder="Password" />
							
							<input type="submit" name="b1" class="btn btn-default" value="Login">
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="" method="POST" enctype="multipart/form-data">
							<input type="text" name="t1" placeholder="Name"/>
							<input type="text" name="t2" placeholder="Address"/>
							<input type="text" name="t3" placeholder="Contact"/>
							<input type="text" name="t4" placeholder="Gender"/>
							<input type="gmail" name="t5" placeholder="Gmail"/>
							<input type="text" name="t6" placeholder="City"/>
							<input type="text" name="t7" placeholder="State"/>
							<input type="text" name="t8" placeholder="Pincode"/>
							<input type="password" name="t9" placeholder="Password"/>
							
							<input type="submit" name="b2" class="btn btn-default" value="Signup">
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

	<?php
include_once ('userfooter.php');?>

