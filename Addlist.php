<?php 
	include("head.php");
?>	
	<div style="padding-top: 10px;">
		
	</div>

	<div class="best-pro slider-items-products container">
		<div class="new_title">
        	<h2>Upload Painting </h2>
        </div>
		
		<div class="rows col-md-9 center">
		<form action="paitinguplode.php" method="POST" enctype="multipart/form-data">
		<div class="hading">Upload Painting  Name:</div>
		<hr>
		<input type="text" name="yname" placeholder="Upload Painting Name" class="form-control" required />
		<br>
		<div class="hading">Paiting  Description:</div>
		<hr/>
		<textarea cols="22" rows="2" placeholder="Painting Description" name="des" class="form-control" required></textarea>
		<br>
		<div class="hading">Painting Price :</div><hr/>
		<input type="number" name="price" class="form-control" required>
		<br>
		<div class="heading">	Upload Image:</div><hr/> 	
		<input type="file" name="file" class="form-control" required/>
		<hr/>
		
		<input type="submit" class="btn btn-default" name="submit"  value="Upload" >
		</td>
		</table>
		</div>
		</form>
		</center>
						 
						  
						  

					</div>
				</div>
			<!--//content-inner-section-->

 <!-- Footer -->
	<?php 
	include("footer.php");
?>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
			<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
			</script>
		<!-- //Dropdown-Menu-JavaScript -->
				<script src="js/main.js"></script>
			<!-- pop-up-box -->  
	<script src="js/lightbox-plus-jquery.min.js"> </script>

	<!--//pop-up-box -->

<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->


 

</body>
</html>