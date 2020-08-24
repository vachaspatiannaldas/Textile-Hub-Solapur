<?php
include ('adminhead.php');
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"textilehub");


	$i=$_GET['cid'];

	$s="select * from contact_us where cid='$i'";
	$res=mysqli_query($con,$s);
	while($r=mysqli_fetch_array($res))
	{
		$i=$r[0];
		$nm=$r[1];	
		$em=$r[2];
		$sub=$r[3];
		$msg=$r[4];
	}	
		
		if(isset($_POST['b1']))
			{
				$i=$_POST['t1'];
				$nm=$_POST['t2'];
				$em=$_POST['t3'];
				$sub=$_POST['t4'];
				$msg=$_POST['t5'];
				
				$s="update contact_us set name='$nm',email='$em',subject='$sub',message='$msg' where cid='$i'";
				
				if(mysqli_query($con,$s))
				echo "update Successfully.....";
				else
				echo mysqli_error($con);
			}
		
		
			if(isset($_POST['b2']))
			{
				$i=$_POST['t1'];
				$s="delete from contact_us where cid='$i'";
				mysqli_query($con,$s);
				echo "<script>alert('Record Deleted....')</script>";
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
		      		  
          <input type="submit" name="b1" value="UPDATE" class="btn btn-primary btn-block">
		  <input type="submit" name="b2" value="DELETE" class="btn btn-primary btn-block">
		  
        </form>
        <div class="text-center">
          
        </div>
      </div>
    </div>
  </div>


</form>
</body>
</html>



<?php include ('adminfooter.php');?>