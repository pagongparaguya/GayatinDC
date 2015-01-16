<?php $this->load->view('header', array('num' => 5, 'title' => 'Create Admin')); ?>
	<div class="row" style="margin-top: 80px">		
					<div class="col-md-12 columns">						
						<div class="col-md-3 columns"></div>
						<div class="col-md-6 columns">
							<legend>Create Admin Account</legend>
							<center><span style="color:red;"><?php echo $message;?></span></center><br><br>	
							<form method="post" action="<?php echo base_url();?>cadmin/add_staff" role="form">
				  		
						  		<div class="personal-inf">
						  			<span><h5>Personal Information</h5></span>
						  			<input class="form-control" name="fname" type="text" placeholder="First Name" required/><br>
						  			<input class="form-control" name="lname" type="text" placeholder="Last Name" required/><br>
						  		</div>
						
						  		<div class="account-inf">
						  			<span><h5>Account Information</h5></span>
						  			<input class="form-control" name="username" type="text" placeholder="Username" required/><br>
						  			<input id="pass" class="form-control" name="password" type="password" placeholder="Password" required/><br>
						  			<input id="cpass" class="form-control" name="confirm_password" type="password" placeholder="Confirm password" required/><br>
						  		</div>
								<button id="sub" type="submit" class="btn btn-success">SUBMIT</button>
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
		// $('#sub').click(function(){
		// 	if($('#pass').val()!=$('#cpass').val()){
	 //            alert("Password/Confirm Password Doesn't Match");
	 //            event.preventDefault();
		// 	}
		// });
	});	
</script>