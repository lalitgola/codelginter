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
						<div class="blog-content">							
							 <table class="table scrolling">
							    <thead>
							      <tr>
							        <th>Date</th>
							        <th>Address</th>
							        <th>Type</th>
							        <th>Amount</th>
							        <th>Confirmation</th>
							        <th>Tx</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>Default</td>
							        <td>Defaultson</td>
							        <td>def@somemail.com</td>
							        <td>bbvndj</td>
							        <td>hbuan</td>
							        <td>hbuan</td>
							      </tr>      
							      <tr class="success">
							        <td>Success</td>
							        <td>Doe</td>
							        <td>john@example.com</td>
							         <td>bbvndj</td>
							        <td>hbuan</td>
							        <td>hbuan</td>
							      </tr>
							      <tr class="danger">
							        <td>Danger</td>
							        <td>Moe</td>
							        <td>mary@example.com</td>
							         <td>bbvndj</td>
							        <td>hbuan</td>
							        <td>hbuan</td>
							      </tr>
							      <tr class="info">
							        <td>Info</td>
							        <td>Dooley</td>
							        <td>july@example.com</td>
							         <td>bbvndj</td>
							        <td>hbuan</td>
							        <td>hbuan</td>
							      </tr>
							      <tr class="warning">
							        <td>Warning</td>
							        <td>Refs</td>
							        <td>bo@example.com</td>
							         <td>bbvndj</td>
							        <td>hbuan</td>
							        <td>hbuan</td>
							      </tr>
							      <tr class="active">
							        <td>Active</td>
							        <td>Activeson</td>
							        <td>act@example.com</td>
							         <td>bbvndj</td>
							        <td>hbuan</td>
							        <td>hbuan</td>
							      </tr>
							    </tbody>
  							</table>					
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