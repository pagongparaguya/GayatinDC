<?php $this->load->view('header', array('num' => 5, 'title' => 'Edit Admin Account')); ?>
	<div class="row" style="margin-top: 80px">		
					<div class="col-md-12 columns">						
						<div class="col-md-3 columns"></div>
						<div class="col-md-6 columns">
							<legend>Edit Admin Account</legend>	
							<form method="post" action="<?php echo base_url();?>cadmin/update_staff" role="form">
				  				<?php foreach($user as $us):?>
						  		<div class="personal-inf">
						  			<span><h5>Personal Information</h5></span>
						  			<input class="form-control" value="<?php echo $us->id;?>" name="staffid" type="hidden" />
						  			<input class="form-control" value="<?php echo $us->firstname;?>" name="fname" type="text" placeholder="First Name" required/><br>
						  			<input class="form-control" value="<?php echo $us->lastname;?>" name="lname" type="text" placeholder="Last Name" required/><br>
						  		</div>
						
						  		<div class="account-inf">
						  			<span><h5>Account Information</h5></span>
						  			<input class="form-control" value="<?php echo $us->username;?>" name="username" type="text" placeholder="Username" required/><br>
						  			<input class="form-control" name="old_password" type="password" placeholder="Old Password" required/><br>
						  			<input class="form-control" name="password" type="password" placeholder="Password" /><br>
						  			<input class="form-control" name="confirm_password" type="password" placeholder="Confirm password"/><br>
						  		</div>	
								<button type="submit" class="btn btn-info">SUBMIT</button>
								<?php endforeach;?>
							</form>
						</div>
						<div class="col-md-3"></div>
					</div>
	</div>
</section>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.datepicker').datepicker();	
	});	
</script>