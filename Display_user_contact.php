<?php
include ('userhead.php');

?>

<div id="contact-page" class="container">
<?php
								$con=mysqli_connect("localhost","root","");
								mysqli_select_db($con,"textilehub");
								$s="select *from contact_us";
								$res=mysqli_query($con,$s);
								while($r=mysqli_fetch_array($res))
								{
								?>
	    				
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-5">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
						<address>
	    					<p><?php echo $r[1];?></p>
							<p><?php echo $r[2];?></p>
							<p><?php echo $r[4];?></p>
							
	    				</address>
	    				
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
		<?php }?>
    </div><!--/#contact-page-->
	<?php
include ('userfooter.php');

?>
