<?php
include ('userhead.php');
	
//session_start();
?>
<form method="POST">
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="userindex.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description">Description</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							
							<td></td>
						</tr>
					</thead>
					<tbody>
					
					<?php
								$con=mysqli_connect("localhost","root","");
								mysqli_select_db($con,"textilehub");
								$pid=0;
								//session_start();
								ob_start();
								if(!isset($_SESSION["uid"]))
	     						{
								
								   header("location: registration.php");
								 
								}
								else
								{
								$uid=$_SESSION['uid'];
								
								$s="select p.Prod_img, p.Prod_name, p.Prod_id,p.Prod_price,p.Prod_qty from prod_mas p,cart c where p.Prod_id=c.pid and c.uid='$uid'";
								$res=mysqli_query($con,$s);
								$tot=0;
								$cnt=1;
								$qty=1;
								while($r=mysqli_fetch_array($res))
								{
								if(isset($_POST['tot']))
	{
	$pr=$r[3];
	$qty=$_POST["quantity$cnt"];
$tot=$tot+($pr*$qty);
//echo "<script>alert('$qty')</script>";
//echo "<input type='text' name=$tot>";
	}
								?>
<tr>					
					<td class="cart_product">
								<a href=""><img src="images/<?php echo $r[0];?>" alt="" height="110"></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $r[1];?></a></h4>
								<p><?php echo $r[2];
								$pid=$r[2];
								?></p>
							</td>
							<td class="cart_price">
								<p><?php echo $r[3];
								
								?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
							
									<input class="cart_quantity_input" type="text" name="quantity<?php echo $cnt; $cnt++;?>" value="<?php echo $qty;?>" size="2">
							
								</div>
							</td>
							
							<td class="cart_delete">
							<!--input type="submit" class="cart_quantity_delete" name="b1"-->
								<a class="cart_quantity_delete" href="delete.php?pid=<?php echo $r[2]?>"><i class="fa fa-times"></i></a>
							</td>
					</tr>
					
	<?php
	
	} }
   ob_end_flush();
	?>
							
					</tbody>
				</table>
				
				<input type="submit" name="tot" Value="Get Total">
				
				<?php
				 echo "<input type='text' name='gtot' value='$tot'>";
				?>
			</div>
			
		</div>
	</section> <!--/#cart_items-->
	<center>
			<input type="submit" name="order" Value="Place Order">
			</center>
			</br>
			<?php 
			if(isset($_POST['order']))
			{ 
			  $con=mysqli_connect("localhost","root","");
								mysqli_select_db($con,"textilehub");
								$uid=$_SESSION['uid'];
								if(isset($_POST['order']))
								{
								//$qty=$_POST["quantity"];
								$tot=$_POST['gtot'];
								$dt=DATE('yyyy/MM/dd');
								  $s="insert into order_mas(product_id,customer_id,date,amount) values('$pid','$uid','$dt','$tot')";
								  mysqli_query($con,$s);
								  echo "<script>alert('Order Place Successfully...')</script>";
								  
								}
								
			}
			?>
			</form>
			<?php
			
include ('userfooter.php');?>