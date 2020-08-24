<?php
include ('adminhead.php');

?>
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="Prod_Mas.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data for Product</div>
          <div class="card-body">
            <div class="table-responsive">
	<?php		$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");

	$s="select * from Prod_Mas";
	$res=mysqli_query($con,$s);
	echo "<table border='1' class='table table-bordered'>";
	echo"<tr>
	<td>id</td>
	<td>nm</td>
	<td>si</td>
	<td>w</td>
	<td>p</td>
	<td>mnm</td>
	<td>des</td>
	<td>img</td>
	<td>q</td>
	<td>Modify</td>
	</tr>";
	while($r=mysqli_fetch_array($res))
	{		
		echo"<tr>";
		echo "<th>".$i=$r[0]."</th>";
		echo "<th>".$nm=$r[1]."</th>";
		echo "<th>".$si=$r[2]."</th>";
		echo "<th>".$w=$r[3]."</th>";
		echo "<th>".$p=$r[4]."</th>";
		echo "<th>".$mnm=$r[5]."</th>";
		echo "<th>".$des=$r[6]."</th>";
		echo "<th>".$img=$r[7]."</th>";
		echo "<th>".$q=$r[8]."</th>";
		echo "<td><a href='Display_prod_info.php?i=$r[0]'>Click</a></td>";
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