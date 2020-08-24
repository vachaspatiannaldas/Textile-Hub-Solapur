<?php
include ('adminhead.php');
$con=mysqli_connect("localhost","root","","textilehub");


$selecdir="Images/";

	if(isset($_FILES['t2']))
	{
	$filenm=$_FILES['t2']['name'];
	$tempnm=$_FILES['t2']['tmp_name'];
	$size=$_FILES['t2']['size'];
	$filetype=$_FILES['t2']['type'];
	$filepath=$selecdir.$filenm;
	$file_result=move_uploaded_file($tempnm,$filepath);
  
	}

	if(isset($_POST['b1']))
	{
	 $i=$_POST['t1'];
	 $im=$filenm;
	 $de=$_POST['t3'];
	 $t=$_POST['t4'];
	 $s="insert into about_us values('$i','$im','$de','$t')";
	 mysqli_query($con,$s);
	 echo "<script>alert('Record Inserted...')</script>";
	}

	
?>

<html>
<head><title>About us</title></head>
<body>
<form action="" method="post"  enctype="multipart/form-data">
<div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">About</div>
      <div class="card-body">
        <form>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t1" class="form-control" autofocus="autofocus">
                  
				  <label for="aboutid">About id</label>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
				<input type="file" name="t2" class="form-control">
                  
                  <label for="image">Image</label>
                </div>
              </div>
            
          <div class="form-group">
            <div class="form-label-group">
			<input type="text" name="t3" class="form-control">
              <label for="description">Description</label>
            </div>
          </div>
          <div class="form-group">
                <div class="form-label-group">
				<input type="text" name="t4" class="form-control">
                  <label for="title">Title</label>
                </div>
              </div>
              
		      		  
          <input type="submit" name="b1" value="SUBMIT" class="btn btn-primary btn-block">
		  
		  
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