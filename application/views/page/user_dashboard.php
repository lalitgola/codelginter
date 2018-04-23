<?php 
	 if(!$this->session->userdata('user_id'))
	 {
	 	 redirect(base_url().'login');
	 }

	 $this->load->view('page/header') ; 
	  
?>

	<style>
		.service:hover
			{
			    background: gray;
			    opacity: 0.2;
			    color: #FFF;
			}		
	</style>

	<div id="blog" class="section bg-grey">
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">

				<?php $this->load->view('page/sidebar'); ?>
				<!-- blog -->
				<div class="col-md-9">
					<div class="blog">		
						<div class="blog-content">

							<div class="col-md-6 col-sm-6">
								<div class="service">
									<i class="fa fa-cloud-download"></i>
									<h3>Recieve</h3>
									<p>55500</p>
								</div>
							</div>	
							<div class="col-md-6 col-sm-6">
								<div class="service">
									<i class="fa fa-cloud-upload"></i>
									<h3>Send</h3>
									<p>60000</p>
								</div>
							</div>	

							<div id="container" style="height: 400px; min-width: 310px"></div>
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