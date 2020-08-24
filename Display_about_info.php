<?php
include ('adminhead.php');
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"textilehub");


	$i=$_GET['aid'];

	$s="select * from about_us where aid='$i'";
	$res=mysqli_query($con,$s);
	while($r=mysqli_fetch_array($res))
	{
		$i=$r[0];
		$im=$r[1];	
		$de=$r[2];
		$t=$r[3];
		
	}	
		
		if(isset($_POST['b1']))
			{
				$i=$_POST['t1'];
				$im=$_POST['t2'];
				$de=$_POST['t3'];
				$t=$_POST['t4'];
				
				$s="update about_us set image='$im', descrption='$de', title='$t' where aid='$i'";
				
				if(mysqli_query($con,$s))
				echo "update Successfully.....";
				else
				echo mysqli_error($con);
			}
		
		
			if(isset($_POST['b2']))
			{
				$i=$_POST['t1'];
				$s="delete from about_us where aid='$i'";
				mysqli_query($con,$s);
				echo "<script>alert('Record Deleted....')</script>";
				}
?>

<html>
<head><title>About us</title></head>
<body>
<form action="" method="post">
<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">About</div>
      <div class="card-body">
        <form>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t1" value="<?php echo $i;?>" class="form-control" autofocus="autofocus">
                  
				  <label for="firstName">About id</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t2" value="<?php echo $im;?>" class="form-control">
                  
                  <label for="lastName">Image</label>
                </div>
              </div>
            
          <div class="form-group">
            <div class="form-label-group">
			<input type="text" name="t3" value="<?php echo $de;?>" class="form-control">
              <label for="inputEmail">Description</label>
            </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t4" value="<?php echo $t;?>" class="form-control">
                  <label for="inputPassword">Title</label>
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