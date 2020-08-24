<?php
include ('userhead.php');?>

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
											<li><a href="prod_index.php?nm=Crepe Design Towel">Crepe</a></li>
											<li><a href="prod_index.php?nm=Beach Towel">Beach</a></li>
											<li><a href="prod_index.php?nm=Cabana Towel">Cabana</a></li>
											<li><a href="prod_index.php?nm=Handloom Towel">Handloom</a></li>
											<li><a href="prod_index.php?nm=Napkin">Napkin</a></li>
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
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php
								$con=mysqli_connect("localhost","root","");
								mysqli_select_db($con,"textilehub");
								$n=$_GET['nm'];
								
								$s="select * from prod_mas where Prod_name='$n'";
								$res=mysqli_query($con,$s);
								while($r=mysqli_fetch_array($res))
								{
						?>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
							
								<div class="single-products">
								

										<div class="productinfo text-center">
											<img src="images/<?php echo $r[7];?>" alt="" height="220" />
											
											<p><?php echo $r[2];?></p>
											<p><?php echo $r[3];?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/><?php echo $r[4];?></h2>
												<a href="single.php?pid=<?php echo $r[0];?>"><p><?php echo $r[1];?></p></a>
												<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
							</div>
						</div>
						<?php } ?>
					</div><!--features_items-->
					
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
													<p>Mayur</p>
													
													<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
												</div>
												<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/>750</h2>
											<p>Mayur</p></a>
												<!--<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
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
													
													<a href="single.php?pid=<?php echo $r[0];?>"><p>Handloom</p></a>
													<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
												</div>
													<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/>50</h2>
												<p>Handloom</p></a>
												<!--<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
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
													
													<a href="single.php?pid=<?php echo $r[0];?>"><p>Mayur</p></a>
													<!--<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
												</div>
													<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/>700</h2>
												<p>Mayur</p></a>
												<!--<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
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
													
													<a href="single.php?pid=<?php echo $r[0];?>"><p>Mayurpankhi</p></a>
												<!--	<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
												</div>
													<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/>800</h2>
												<p>Mayurpankhi</p></a>
												<!--<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
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
													
													<a href="single.php?pid=<?php echo $r[0];?>"><p>Solid</p></a>
												<!--	<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
												</div>
													<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/>200</h2>
												<p>Solid</p></a>
											<!--	<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
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
													
													<a href="single.php?pid=<?php echo $r[0];?>"><p>Stripe</p></a>
												<!--	<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
												</div>
													<div class="product-overlay">
											<div class="overlay-content">
												<h2><img src="images/AJ/rs.png" alt="" height="20"/>70</h2>
												<p>Stripe</p></a>
											<!--	<a href="addtocart.php?pid=<?php echo $r[0];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>-->
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
	
		<?php
include ('userfooter.php');?>