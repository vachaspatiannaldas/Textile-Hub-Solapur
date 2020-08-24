<?php
include ('userhead.php');

?>

<div id="contact-page" class="container">
<?php
								$con=mysqli_connect("localhost","root","");
								mysqli_select_db($con,"textilehub");
								$s="select *from about_us";
								$res=mysqli_query($con,$s);
								while($r=mysqli_fetch_array($res))
								{
								?>
	    				
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">About <strong>Us</strong></h2>    			    				    				
					
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-12 ">
	    			<div class="contact-info">
	    				<!--<h2 class="title text-center">About</h2>-->
						<div class="productinfo text-center">
							<img src="images/<?php echo $r[1];?>" alt="" height="500" width="100" />
							<p><h2><?php echo $r[3];?></h2></p>
							<p><?php echo $r[2];?></p>
						</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
		<?php }?>
    </div><!--/#contact-page-->
	<?php
include ('userfooter.php');

?>
