<?php
include ('adminhead.php');

?>
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="showcust.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data for Customer</div>
          <div class="card-body">
            <div class="table-responsive">
	<?php		$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");

	$s="select * from cust_reg";
	$res=mysqli_query($con,$s);
	echo "<table border='1' class='table table-bordered'>";
	echo"<tr>
	<td>cid</td>
	<td>name</td>
	<td>address</td>
	<td>count</td>
	<td>gender</td>
	<td>gmail</td>
	<td>city</td>
	<td>state</td>
	<td>pincode</td>
	<td>password</td>
	</tr>";
	while($r=mysqli_fetch_array($res))
	{		
		echo"<tr>";
		echo "<th>".$ci=$r[0]."</th>";
		echo "<th>".$nm=$r[1]."</th>";
		echo "<th>".$adr=$r[2]."</th>";
		echo "<th>".$cnt=$r[3]."</th>";
		echo "<th>".$gen=$r[4]."</th>";
		echo "<th>".$gm=$r[5]."</th>";
		echo "<th>".$cty=$r[6]."</th>";
		echo "<th>".$st=$r[7]."</th>";
		echo "<th>".$pin=$r[8]."</th>";
		echo "<th>".$pass=$r[9]."</th>";
		
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