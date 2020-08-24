<?php
include ('userhead.php');
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"textilehub");
							if(isset($_POST['b1']))
							{
							$num=$_POST['t1'];
							$msg=$_POST['t2'];
							$email=$_POST['t3'];
							$s="insert into feedback(Cust_name,Msg,Cust_Email) values('$num','$msg','$email')";
							mysqli_query($con,$s);
							echo "<script>alert('Record Sent')</script>";
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
											<li><a href="prod_index.php?nm=Napkin">Napkin</a></li>
										</ul>
									</div>
								</div>
							</div>
							</div><!--/category-products-->
							<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
					<?php
								$con=mysqli_connect("localhost","root","");
								mysqli_select_db($con,"textilehub");
								$i=$_GET['pid'];
								$s="select * from prod_mas where Prod_id='$i'";
								$res=mysqli_query($con,$s);
								while($r=mysqli_fetch_array($res))
								{
								?>
						<div class="col-sm-5">
							<div class="view-product">
								<img src="images/<?php echo $r[7];?>" alt="" />
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
									</div>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $r[1];?></h2>
								<p><b>Product ID:</b><?php echo $r[0];?></p>
							<span>
								<span><img src="images/AJ/rs.png" alt="" height="20"/><?php echo $r[4];?></span>
									<label>Quantity:</label>
									<input type="text" value="<?php echo $r[8];?>" />
									<a href="usercart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Description:</b><?php echo $r[6];?></p>
								<p><b>Product Size:</b><?php echo $r[2];?></p>
								<p><b>Product weight:</b> <?php echo $r[3];?></p>
								<p><b>Brand:</b>Solapur Textiles</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
						<?php } ?>
					</div><!--/product-details-->
						
							<div class="tab-pane fade active in" id="review" >
							
							
								<div class="col-sm-12">
									
									
									<p><b>Write Your Review</b></p>
									
									<form action="" method="POST">
										
											<input type="text" name="t1" placeholder="Your Name"/>
											<textarea name="t2" placeholder="Message"></textarea>
											<input type="Text" name="t3" placeholder="Email Address"/>
										
										
										
										<input type="button" name="b1" value="Submit" class="btn btn-default pull-right">
											
										
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					</div>
				</div>	
	<div class="recommended_items"><!--recommended_items-->
				
						<h2 class="title text-center">recommended Product</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/mayur3.jpg" alt="" height="220"/>
														<a href="recommended.php?pid=<?php echo $r[0];?>"><p>Mayur</p></a>
													
													<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/>750</h2>
												<a href="recommended.php?pid=<?php echo $r[0];?>"><p>Mayur</p></a>
												<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/Handloom3.jpg" alt="" height="220" />
													
													<a href="recommended.php?pid=<?php echo $r[0];?>"><p>Handloom</p></a>
													<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
													<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/>50</h2>
													<a href="recommended.php?pid=<?php echo $r[0];?>"><p>Handloom</p></a>
												<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/mayur1.jpg" alt="" height="220"/>
													
													<a href="recommended.php?pid=<?php echo $r[0];?>"><p>Mayur</p></a>
													<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
													<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/>700</h2>
												<a href="recommended.php?pid=<?php echo $r[0];?>"><p>Mayur</p></a>
												<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/mayurpankhi1.jpg" alt="" height="220"/>
													
													<a href="recommended.php?pid=<?php echo $r[0];?>"><p>Mayurpankhi</p></a>
													<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
													<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/>800</h2>
												<a href="recommended.php?pid=<?php echo $r[0];?>"><p>Mayurpankhi</p></a>
												<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/Solid1.jpg" alt="" height="220"/>
													
													<a href="recommended.php?pid=<?php echo $r[0];?>"><p>Solid</p></a>
													<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
													<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/>200</h2>
												<a href="recommended.php?pid=<?php echo $r[0];?>"><p>Solid</p></a>
												<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/Stripe1.jpg" alt="" height="220"/>
													
													<a href="recommended.php?pid=<?php echo $r[0];?>"><p>Stripe</p></a>
													<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
													<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/>70</h2>
													<a href="recommended.php?pid=<?php echo $r[0];?>"><p>Stripe</p></a>
												<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	