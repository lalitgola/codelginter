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
							<a href="<?php echo base_url();?>bitcoin" class="main-btn">New Address</a>				
						</div>
						<div class="blog-content">							
							 <table class="table scrolling">
							    <thead>
							      <tr>
							        <th>Id</th>
							        <th>Address</th>
							        <th>Date</th>
							      </tr>
							    </thead>
							    <tbody>
							    	<?php $i=1; foreach($listing as $list) { ?>
							      <tr>
							        <td><?php echo $i++;?></td>
							        <td><img src="http://chart.apis.google.com/chart?cht=qr&amp;chs=300x300&amp;chl=<?php echo $list ?>" alt="QR Code" style="width:50px;border:0;"></td>
							        <td></td>
							      </tr>      
							      <?php } ?>
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