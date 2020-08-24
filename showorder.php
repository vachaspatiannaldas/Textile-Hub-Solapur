<?php
include ('adminhead.php');

?>
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="showorder.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data for Order</div>
          <div class="card-body">
            <div class="table-responsive">
	<?php		$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");

	$s="select * from order_Mas";
	$res=mysqli_query($con,$s);
	echo "<table border='1' class='table table-bordered'>";
	echo"<tr>
	<td>order_id</td>
	<td>product_id</td>
	<td>customer_id</td>
	<td>date</td>
	<td>amount</td>
	
	</tr>";
	while($r=mysqli_fetch_array($res))
	{		
		echo"<tr>";
		echo "<th>".$oi=$r[0]."</th>";
		echo "<th>".$pid=$r[1]."</th>";
		echo "<th>".$cid=$r[2]."</th>";
		echo "<th>".$d=$r[3]."</th>";
		echo "<th>".$a=$r[4]."</th>";
		
		//echo "<td><a href='Display_prod_info.php?i=$r[0]'>Click</a></td>";
		echo"</tr>";
		//header("location: Display.php");
	}
	
	
	echo "</table>";

?>
<br/>
              
            </div>
          </div>
          
        </div>

        

      </div>
      <!-- /.container-fluid -->

<?php include ('adminfooter.php'); ?>