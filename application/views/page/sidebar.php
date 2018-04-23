		<style>
		#i1
		{
			border-radius: 50%;
		    border: 2px solid #dedede;
		    background: #fff;
		    padding: 7px;
		    box-shadow: 0 7px 10px #999;
		    -webkit-transition: 0.3s;
		    -moz-transition: 0.3s;
		    -o-transition: 0.3s;
		    transition: 0.3s;
		}
		.gray-btn:hover {
    		background: #999;
    		color: #FFF;
		}	
		.main-btn:hover {
			    background: green;
			    color: #FFF;
			}		
		.main-btn, .gray-btn, .white-btn, .outline-btn 
			{
			    display: inline-block;
			    padding:5px 45px;
			    margin: 3px;
			    border: 2px solid transparent;
			    border-radius: 3px;
			    -webkit-transition: 0.2s opacity;
			    transition: 0.2s opacity;
			}
	</style>
		<!-- blog -->
				<div class="col-md-3">
					<div class="blog">
						
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="img-responsive"></i><img id="i1" src="<?php echo base_url();?>images/l1.jpg"></li><br>						
							</ul>
							<input type="file" class="input" name="img" id="img">
							<a class="gray-btn" href="<?php echo base_url()?>login/profile">Profile</a>
						</div>
					</div>

					<div class="blog">
						<div class="blog-content">
							<ul class="blog-meta">
								<li><a class="main-btn" href="<?php echo base_url()?>login/user_dashboard">Dashboard</a></li><br>
								<li><a class="gray-btn" href="<?php echo base_url()?>login/address">Address</a></li><br>
								<li><a class="gray-btn" href="<?php echo base_url()?>login/payment">Payment</a></li><br>
								<li><a class="gray-btn" href="<?php echo base_url()?>login/security">Security</a></li><br>
								<li><a class="gray-btn" href="<?php echo base_url()?>login/transaction">Transaction</a></li><br>
								<li><a class="gray-btn" href="<?php echo base_url()?>login/support">Support</a></li><br>								
							</ul>							
						</div>
					</div>
				</div>
				<!-- /blog -->