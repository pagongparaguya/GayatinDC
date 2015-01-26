<?php $this->load->view('header', array('num' => 1, 'title' => 'Add Appointment')); ?>
<section id="main-slider" style="margin:100px">
		<form method="post" action="<?php echo base_url();?>cadmin/add_patient" role="form">
			<div class="row clearfix">				
					<div class="col-md-3 columns"></div>
					<div class="col-md-6 columns">
					<legend>Appointment Reservation for (DATE) at (TIME)</legend><br>
					<label for="fname">Firstname : </label>
		  			<input id="fname" class="form-control" name="fname" type="text" placeholder="First Name" required/><br>
		  			<label for="lname">Lastname : </label>
		  			<input id="lname" class="form-control" name="lname" type="text" placeholder="Last Name" required/><br>
		  			<label for="mname">Middlename : </label>
		  			<input id="mname" class="form-control" name="mname" type="text" placeholder="Middle Name" required/><br>
		  			<label for="cno">Contact No. : </label>
		  			<input id="cno" class="form-control" name="cnum" type="text" placeholder="Contact Number" required/><br>
		  			<label for="patient-type">Patient Type</label>
		  			<select id="patient-type" class="form-control" name="ptype" required>
		  			  <option value="" disabled default selected style="display:none;"></option>
			          <option value="old">Old Patient</option>
			          <option value="new">New Patient</option>
			        </select><br>
			        
			        <button type="submit" class="btn btn-lg btn-success">SUBMIT</button>
					</div>
					<div class="col-md-3 columns"></div>
			</div>
			
		</form>
</section>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		// $('#append').hide();
		// $('#next').click(function(){
		// 	if($('#date').val()==''){
		// 		$('#message').html("# Pick date before you proceed !");
		// 	}
		// 	else{
		// 		$('#message').html('');
		// 		$('#append').fadeIn(700);
		// 		$('#date').prop('disabled',true);

		// 	}
		// });
	});
</script>