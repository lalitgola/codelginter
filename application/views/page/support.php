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
						<div class="blog-content" style="max-width: 600px;margin-left: 15%;">							
							<form class="contact-form" method="post" action="">
								<input type="text" class="input" placeholder="First Name" name="fname" id="fname">
								<input type="text" class="input" placeholder="Last Name" name="lname" id="lname">
								<input type="email" class="input" placeholder="Email" name="email" id="email">
								<input type="text" class="input" placeholder="Subject" name="sub" id="sub">
								<textarea class="input" placeholder="Message" name="msg" id="msg"></textarea>
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