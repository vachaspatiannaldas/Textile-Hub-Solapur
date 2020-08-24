<?php
include ('adminhead.php');

?>
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="merchand.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data for Merchant</div>
          <div class="card-body">
            <div class="table-responsive">
	<?php		$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");

	$s="select * from mer_info";
	$res=mysqli_query($con,$s);
	echo "<table border='1' class='table table-bordered'>";
	echo"<tr>
		<td>id</td>
		<td>name</td>
		<td>address</td>
		<td>contact</td>
		<td>gmail</td>
		<td>Modify</td>
	</tr>";
	while($r=mysqli_fetch_array($res))
	{		
		echo"<tr>";
		echo "<th>".$i=$r[0]."</th>";
		echo "<th>".$nm=$r[1]."</th>";
		echo "<th>".$ad=$r[2]."</th>";
		echo "<th>".$c=$r[3]."</th>";
		echo "<th>".$gm=$r[4]."</th>";
		echo "<td><a href='Display_mer_info.php?i=$r[0]'>Click</a></td>";
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

<?php include('adminfooter.php'); ?>