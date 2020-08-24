<?php
include ('adminhead.php');

?>
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="showfeed.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data for Feedback</div>
          <div class="card-body">
            <div class="table-responsive">
	<?php		$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");

	$s="select * from feedback";
	$res=mysqli_query($con,$s);
	echo "<table border='1' class='table table-bordered'>";
	echo"<tr>
	<td>fid</td>
	<td>Cust_name</td>
	<td>msg</td>
	<td>Cust_Email</td>
	</tr>";
	while($r=mysqli_fetch_array($res))
	{		
		echo"<tr>";
		echo "<th>".$fid=$r[0]."</th>";
		echo "<th>".$Cust_name=$r[1]."</th>";
		echo "<th>".$msg=$r[2]."</th>";
		echo "<th>".$Cust_Email=$r[3]."</th>";
		
		//echo "<td><a href='Display_prod_info.php?i=$r[0]'>Click</a></td>";
		echo"</tr>";
		//header("location: Display.php");
	}
	
	
	echo "</table>";

?>
              
            </div>
          </div>
          
        </div>

        

      </div>
      <!-- /.container-fluid -->

<?php include ('adminfooter.php'); ?>