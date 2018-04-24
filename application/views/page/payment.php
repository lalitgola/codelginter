<?php 
	 if(!$this->session->userdata('user_id'))
	 {
	 	 redirect(base_url().'login');
	 }

	 $this->load->view('page/header') ; 
	  
?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
							<ul class="nav nav-tabs">
								<li class="btn btn-primary active l"><a data-toggle="tab" href="#home">Send</a></li>
								<li class="btn btn-info"><a data-toggle="tab" href="#menu1">Receive</a></li>	
							</ul>
							<div class="tab-content" style="max-width: 400px;margin-left: 15%;">
								<div id="home" class="tab-pane fade in active">
								<h3></h3>
								<form class="contact-form" method="post" action="">
									<input type="text" class="input" placeholder="To" name="to" id="to" style="width: 100%"><br>
									<input type="text" class="input" placeholder="Amount" name="amount" id="amount">
									<input type="text" class="input" placeholder="Description" name="des" id="des">
									<input type="text" class="input" placeholder="Spending Password" name="spass" id="spass">
									<input type="button" class="main-btn" name="send" id="send" value="Send">
								</form>	
							</div>
							<div id="menu1" class="tab-pane fade">
								<h3></h3>
								<form class="contact-form" method="post" action="">    
									<input type="text" class="input" placeholder="Address" name="adddress" disabled id="address"><br>
									<img src="http://chart.apis.google.com/chart?cht=qr&amp;chs=300x300&amp;chl=2NAmNU63ofwYEAgvuEHqVZxsgA91ubtCEfo" alt="QR Code" style="width:200px;border:0;">
								</form>
							</div>											
					    </div>							    
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