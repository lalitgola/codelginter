<?php 
	 if(!$this->session->userdata('user_id'))
	 {
	 	 redirect(base_url().'login');
	 }

	 $this->load->view('page/header') ; 
	  
?>

	<div id="blog" class="section bg-grey">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">

				<?php $this->load->view('page/sidebar'); ?>
	
				<!-- blog -->
				<div class="col-md-9">
					<div class="blog">					
						<div class="blog-content" style="max-width: 400px;margin-left: 15%;">			<button class="main-btn">Spending Password</button>				
							<form class="contact-form" method="post" action="">

								<input type="text" class="input" placeholder="Old Password" name="opass" id="opass" style="width: 100%;"><br>
								<input type="text" class="input" placeholder="New Password" name="npass" id="npass">
								<input type="text" class="input" placeholder="Confirm Password" name="cpass" id="cpass">

								<input type="button" class="main-btn" name="submit" id="submit" value="Submit">
							</form>							
						</div>
					</div>
				</div>
				<!-- /blog -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->


<?php  $this->load->view('page/footer'); ?>