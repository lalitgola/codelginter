	<?php $this->load->view('page/header'); ?>
	<!-- Blog -->
	<div id="blog" class="section">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Main -->
				<main id="main" class="col-md-6 offset-md-3">
					<div class="">
						
						
						<!-- /blog comments -->

						<!-- reply form -->
						<div class="reply-form">
							<h3 style="color: white;" class="">User Signup </h3>
							<div  style="border: 2px solid red;padding: 50px;">
							<form method="post" action="<?php echo base_url();?>login/signup">
								<input class="input" type="text" name="user_name" id="user_name" placeholder="Name"><br>
								<input class="input" type="email" name="user_email" id="user_email" placeholder="Email"><br>
								<input class="input" type="password" name="user_pass" id="user_pass" placeholder="password******"><br>
								<input type="submit" class="main-btn" name="signup" id="signup" value="Submit">
							</form>
						</div>
						<!-- /reply form -->
					</div>
				</main>
				<!-- /Main -->


				
			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="<?php echo base_url();?>creative/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>creative/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>creative/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>creative/js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>creative/js/main.js"></script>
