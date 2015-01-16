<?php $this->load->view('header', array('num' => 2, 'title' => 'Add New Patient')); ?>
<section id="main-slider" style="margin:100px 200px;">
	<legend>Add New Profile</legend>
		<center><span style="color:red;"><?php echo $message;?></span></center><br><br>

		<form method="post" action="<?php echo base_url();?>cadmin/add_patient" role="form">
		<div class="row clearfix">
  		<div class="col-md-6 columns">
  			<span>	<h5>Personal Information</h5></span>
  			<input class="form-control" name="fname" type="text" placeholder="First Name" required/><br>
  			<input class="form-control" name="lname" type="text" placeholder="Last Name" required/><br>
  			<input class="form-control" name="mname" type="text" placeholder="Middle Name" required/><br>
  			<input class="form-control" name="hadd" type="text" placeholder="Home Address" required/><br>
  			<input class="form-control" name="htno" type="text" placeholder="Tel. No." /><br>
  			<input class="form-control" name="mno" type="text" placeholder="Mobile No." pattern="[0][9][0-9]{9}" required/><br>
			<div class="col-md-6 columns">
				<select class="form-control" name="gender" required>
		          <option value="" disabled default selected style="display:none;">Gender</option>
		          <option value="Male">Male</option>
		          <option value="Female">Female</option>
		        </select><br>
			</div>

			<div class="col-md-6 columns">
				<select class="form-control" name="mstat" required>
		          <option value="" disabled default selected style="display:none;">Marital Status</option>
		          <option value="Single">Single</option>
		          <option value="Married">Married</option>
		        </select>
			</div>
			
  		</div>
		
  		<div class="col-md-6 columns">
  			<span><h5>Work Info</h5></span>
  			<input class="form-control" name="oadd" type="text" placeholder="Office Address" /><br>
  			<input class="form-control" name="otno" type="text" placeholder="Tel. No." /><br>
  		</div>
	</div>
	<br><br>

	<div class="row">
		
		<div class="col-md-6 columns">
			<span><h5>Dental Information</h5></span>
			<select class="form-control" name="occ" required>
		        <option value="" disabled default selected style="display:none;">OCCLUSION</option>
		        <option value="Class I">Class I</option>
		        <option value="Class II (Div.1)">Class II (Div.1)</option>
		        <option value="Class II (Div.2)">Class II (Div.2)</option>
		        <option value="Class III">Class III</option>
		        <option value="None">None</option>
		     </select><br>
			<select class="form-control" name="perdon" required>
		        <option value="" disabled default selected style="display:none;">Periodontal Condition</option>
		        <option value="Normal">Normal</option>
		        <option value="With Periodontal Problem">With Periodontal Problem</option>
		     </select><br>
  			<select class="form-control" name="orhy" required>
		        <option value="" disabled default selected style="display:none;">Oral Hygiene</option>
		        <option value="Good">Good</option>
		        <option value="Poor">Poor</option>
		     </select><br>
  		</div>

  		<div class="col-md-6 columns">
			<!-- <span><h5>Denture</h5></span>

			<div class="col-md-4 columns">
				<br><input id="checkbox1" name-"dupper" type="checkbox"><label for="checkbox1"> Upper</label><br>
				<br><input id="checkbox2" name="dlower" type="checkbox"><label for="checkbox2"> Lower</label>
			</div>

			<div class="col-md-4 columns">
				<input class="form-control" name="usince" disabled type="text"  placeholder="Since" /><br>
  				<input class="form-control" name="lsince" disabled type="text" placeholder="Since" /><br>
			</div> -->
		</div>
	
	</div>
	<br><br>
	<div class="row">
		<div id="dtcon" class="col-md-6 columns">
  			<select class="form-control" name="phb" required>
		        <option value="" disabled default selected style="display:none;">Previous History of Bleeding</option>
		        <option value="Yes">Yes</option>
		        <option value="No">No</option>
		     </select><br>
  			
  			<label for="add_chrail">Chronic Ailments</label><br />
  			<div id="ca1">
  				<button id="add_chrail"  type="button" class="btn btn-info">Add Chronic Ailments</button>       
  				<button id="rmv_chrail" type="button" class="btn btn-danger">Remove</button>
  			</div><br>
  			
  			<label for="add_drugs">Drugs Taken</label>
	  			<div id="dt1">
	  				<button id="add_drugs" type="button" class="btn btn-info">Add Drugs Taken</button>       
	  				<button id="rmv_drugs" type="button" class="btn btn-danger">Remove</button>
	  			</div>
  		</div>
  		<div id="alcon" class="col-md-6 columns">
  			<input class="form-control" name="bp" type="text" placeholder="Blood Pressure" /><br>
  			
  			<label for="add_allergy">Allergies</label><br />
  			<div id="al1">
  				<button id="add_allergy" type="button" class="btn btn-info">Add Allergy </button>       
				<button id="rmv_allergy" type="button" class="btn btn-danger">Remove</button>
  			</div>
		</div>
		<div class="row clearfix">
			<div class="col-md-12 columns">
				<hr />
				<div class="col-md-6 columns">
					<button type="submit" class="btn btn-success">SUBMIT</button>
				</div>
			</div>
		</div>
	</div>

	
	</form>
</section>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    var cctr=1;
    var actr=1;
    var rctr=1;

    $(document).ready(function(){
                $("#add_drugs").click(function(){
                	ctemp = cctr;
                	cctr+=1;
                    $('<br id="bdt' + cctr + '"><textarea id="dt' + cctr + '" class="form-control" name="adt[]" placeholder="Drugs Taken ('+ ctemp +')"></textarea>').insertAfter("#dt"+ ctemp);
                });

                $("#rmv_drugs").click(function() {
                    if (cctr != 1) { 
                      $('#bdt' + cctr).remove();
                      $('#dt' + cctr).remove();
                      cctr -= 1; 
                    }
                });

                $("#add_allergy").click(function(){
                	atemp = actr;
                	actr+=1; 
                    $('<br id="bal' + actr + '"><textarea id="al' + actr + '" class="form-control" name="aal[]" placeholder="Allergies ('+ atemp +')"></textarea>').insertAfter("#al"+ atemp);                
                });

                $("#rmv_allergy").click(function() {
                    if (actr != 1) { 
                      $('#bal' + actr).remove();
                      $('#al' + actr).remove();
                      actr -= 1; 
                    }
                });

                $("#add_chrail").click(function(){
                	rtemp = rctr;
                	rctr+=1;
                    $('<br id="bca' + rctr + '"><input id="ca' + rctr + '" class="form-control" name="aca[]" placeholder="Chronic Ailments ('+ rtemp +')"/>').insertAfter("#ca"+ rtemp);
                });

                $("#rmv_chrail").click(function() {
                    if (rctr != 1) { 
                      $('#bca' + rctr).remove();
                      $('#ca' + rctr).remove();
                      rctr -= 1; 
                    }
                });
    });



</script>