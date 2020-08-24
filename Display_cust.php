<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");

	$s="select * from cust_reg";
	$res=mysqli_query($con,$s);
	echo "<table border='1'>";
	echo"<tr>
	<td>cid</td>														
	<td>name</td>
	<td>address</td>
	<td>contact_no</td>
	<td>gender</td>
	<td>gmail</td>
	<td>city</td>
	<td>state</td>
	<td>pincode</td>
	</tr>";
	while($r=mysqli_fetch_array($res))
	{		
		echo"<tr>";
		echo "<th>".$cid=$r[0]."</th>";
		echo "<th>".$nm=$r[1]."</th>";
		echo "<th>".$add=$r[2]."</th>";
		echo "<th>".$cn=$r[3]."</th>";
		echo "<th>".$gen=$r[4]."</th>";
		echo "<th>".$gma=$r[5]."</th>";
		echo "<th>".$city=$r[6]."</th>";
		echo "<th>".$state=$r[7]."</th>";
		echo "<th>".$pin=$r[8]."</th>";
		echo "<td><a href='Display.php?cid=$r[0]'>Click</a></td>";
		echo"</tr>";
		//header("location: Display.php");
	}
	
	
	echo "</table>";

?>
