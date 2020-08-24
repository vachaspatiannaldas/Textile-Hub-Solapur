<?php
include ('userhead.php');
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"textilehub");
if(isset($_POST['b2']))
		{
$add=$_POST['t1'];
$cn=$_POST['t2'];
$city=$_POST['t3'];
$state=$_POST['t4'];
$pin=$_POST['t5'];
$name=$_POST['pname'];
		
			$s="update cust_reg set address='$add', contact='$cn',city='$city',state='$state',pincode='$pin' where name='$name'";
			if(mysqli_query($con,$s))
			echo "<script>alert('update Successfully.....')</script>";
			else
			echo mysqli_error($con);
		}
	?>



<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
												

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Chadar
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="prod_index.php?nm=Delux">Delux</a></li>
											<li><a href="prod_index.php?nm=Dollar">Dollar</a></li>
											<li><a href="prod_index.php?nm=Mayur">Mayur</a></li>
											<li><a href="prod_index.php?nm=Monika">Monika</a></li>
											<li><a href="prod_index.php?nm=Mayurpankhi">Mayurpankhi</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Towels
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="prod_index.php?nm=Solid Design Towel">Solid</a></li>
											<li><a href="prod_index.php?nm=Pattern Design Towel">Pattern</a></li>
											<li><a href="prod_index.php?nm=Stripe Design Towel">Stripe</a></li>
											<li><a href="prod_index.php?nm=Crepe  Design Towel">Crepe</a></li>
											<li><a href="prod_index.php?nm=Beach Towel">Beach</a></li>
											<li><a href="prod_index.php?nm=Cabana Towel">Cabana</a></li>
											<li><a href="prod_index.php?nm=Handloom Towel">Handloom</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#napkin">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Napkins
										</a>
									</h4>
								</div>
								<div id="napkin" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="prod_index.php?nm=Cotton">Cotton</a></li>
											<li><a href="prod_index.php?nm=KitchenNapkin">KitchenNapkin</a></li>
											</ul>
									</div>
								</div>
							</div>
						
						
						
						
						
						</div><!--/category-products-->
					
					</div>
				</div>
<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
					<?php
					//session_start();
								$con=mysqli_connect("localhost","root","");
								mysqli_select_db($con,"textilehub");
								if($_SESSION["uid"]!=null)
								{
								$u=$_SESSION["uid"];
								
								$s="select * from cust_reg where cid='$u'";
								$res=mysqli_query($con,$s);
								while($r=mysqli_fetch_array($res))
								{
								?>
						
						<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Profile</h2>
						<form action="" method="POST">
						
							<input type="text" name="pname"  value="<?php echo $r[1];?>" placeholder="Name" readonly/>
							<input type="text" name="t1" value="<?php echo $r[2];?>" placeholder="Address"/>
							<input type="text" name="t2" value="<?php echo $r[3];?>" placeholder="Contact"/>
							<input type="text" value="<?php echo $r[4];?>" placeholder="Gender" readonly/>
							<input type="gmail" value="<?php echo $r[5];?>" placeholder="Gmail" readonly/>
							<input type="text" name="t3" value="<?php echo $r[6];?>" placeholder="City"/>
							<input type="text" name="t4" value="<?php echo $r[7];?>" placeholder="State"/>
							<input type="text" name="t5" value="<?php echo $r[8];?>" placeholder="Pincode"/>
							
							
							<input type="submit" name="b2" class="btn btn-default" value="Update">
						</form>
					</div><!--/sign up form-->
				</div>
						<?php }} ?>
					</div><!--/product-details-->
					</div>
				
			</div>
		</div>
	</section>
<?php
include ('userfooter.php');?>