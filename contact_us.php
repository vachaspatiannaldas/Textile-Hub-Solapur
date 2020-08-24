<?php
include ('adminhead.php');
$con=mysqli_connect("localhost","root","","textilehub");
$i=$nm=$em=$sub=$msg="";

	if(isset($_POST['b1']))
	{
	 $i=$_POST['t1'];
	 $nm=$_POST['t2'];
	 $em=$_POST['t3'];
	 $sub=$_POST['t4'];
	 $msg=$_POST['t5'];
	 $s="insert into contact_us values('$i','$nm','$em','$sub','$msg')";
	 mysqli_query($con,$s);
	 echo "<script>alert('Record Inserted...')</script>";
	}

	
?>

<html>
<head><title>Contact</title></head>
<body>
<form action="" method="post">
<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Contact</div>
      <div class="card-body">
        <form>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t1" value="<?php echo $i;?>" class="form-control" autofocus="autofocus">
                  
				  <label for="firstName">Contact Id</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t2" value="<?php echo $nm;?>" class="form-control">
                  
                  <label for="lastName">Name</label>
                </div>
              </div>
            
          <div class="form-group">
            <div class="form-label-group">
			<input type="text" name="t3" value="<?php echo $em;?>" class="form-control">
              <label for="inputEmail">Email</label>
            </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t4" value="<?php echo $sub;?>" class="form-control">
                  <label for="inputPassword">Subject</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				   <input type="text" name="t5" value="<?php echo $msg;?>" class="form-control">
                  <label for="confirmPassword">Message</label>
            </div>
          </div>
		      		  
          <input type="submit" name="b1" value="SUBMIT" class="btn btn-primary btn-block">
		  
		  
        </form>
        <div class="text-center">
          
        </div>
      </div>
    </div>
  </div>

<?php include ('adminfooter.php');?>