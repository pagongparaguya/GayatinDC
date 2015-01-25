<?php $this->load->view('header', array('num' => 1, 'title' => 'Add Appointment')); ?>
<section id="main-slider" style="margin:100px">
		<form method="post" action="<?php echo base_url();?>cadmin/add_patient" role="form">
			<div class="row clearfix">				
					<div class="col-md-3 columns"></div>
					<div class="col-md-6 columns">
					<legend>Appointment Reservation for (DATE) at (TIME)</legend>

		  			<input class="form-control" name="fname" type="text" placeholder="First Name" /><br>
		  			<input class="form-control" name="lname" type="text" placeholder="Last Name" /><br>
		  			<input class="form-control" name="mname" type="text" placeholder="Middle Name" /><br>
		  			<input class="form-control" name="cnum" type="text" placeholder="Contact Number" /><br>
		  			<label for="patient-type">Patient Type</label>
		  			<select id="patient-type" class="form-control" name="gender">
			          <option value="old">Old Patient</option>
			          <option value="new">New Patient</option>
			        </select><br>
			        
			        <button type="submit" class="btn btn-success">SUBMIT</button>
					</div>
					<div class="col-md-3 columns"></div>
			</div>
			
		</form>
</section>
<?php $this->load->view('footer'); ?>