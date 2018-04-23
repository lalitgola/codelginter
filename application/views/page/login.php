
	<?php

	if($this->session->userdata('user_id'))
	 {
	 	 redirect(base_url().'login/profile');
	 }
	 $this->load->view('page/header'); 

	?>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function()
	{
		$(function() 
		{
  			$("form[name='frm']").validate({
    		rules: {
     					user_email: {
        						required: true,
        						email: true
     							},
					    user_pass: {
					        required: true,
					        minlength: 5
      							   }
    				},
   			messages: {
     					user_pass: {
        							required: "Please provide a password",
       								minlength: "Your password must be at least 5 characters long"
      				 				},
      					user_email: {
        							required: "Please Enter your Email Id",
        							email: "Please Enter The Valid Email"
     								},
    				  },
    		submitHandler: function(form)
    			{
      			form.submit();
    			}
  			});
		});
	});
</script>
	<div id="blog" class="section">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Main -->
				<main id="main" class="col-md-6 offset-md-4">
					<div class="">
						
						
						<!-- /blog comments -->

						<!-- reply form -->
						<div class="reply-form">
							<h3 style="color: white;" class="">User Login </h3>
							<div  style="border: 2px solid red;padding: 50px;">
							<form method="post" name="frm" action="<?php echo base_url();?>login/login_user">
								<input class="input" type="email" name="user_email" id="user_email" placeholder="Email"><br>
								<input class="input" type="password" name="user_pass" id="user_pass" placeholder="password******"><br>
								<input type="submit" class="main-btn" name="login" id="login" value="Submit"><br><br>
								<a href="<?php echo base_url();?>login/signup_user">SignUp</a>
							<a style="margin-left: 20px;" href="<?php echo base_url();?>login/forget">Forget Password</a>
							</form>
							</div>
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
	<!-- /Blog -->

	<!-- Footer -->
	

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
