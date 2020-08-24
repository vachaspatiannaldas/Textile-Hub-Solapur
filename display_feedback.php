<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");

	$s="select * from feedback";
	$res=mysqli_query($con,$s);
	echo "<table border='1'>";
	echo"<tr>
		<td>id</td>
		<td>name</td>
		<td>message</td>
		<td>gmail</td>
	</tr>";
	while($r=mysqli_fetch_array($res))
	{		
		echo"<tr>";
		echo "<th>".$i=$r[0]."</th>";
		echo "<th>".$num=$r[1]."</th>";
		echo "<th>".$msg=$r[2]."</th>";
		echo "<th>".$email=$r[3]."</th>";
		//echo "<td><a href='Display_feed.php?i=$r[0]'>Click</a></td>";
		echo"</tr>";
		//header("location: Display.php");
	}
	
	
	echo "</table>";

?>
