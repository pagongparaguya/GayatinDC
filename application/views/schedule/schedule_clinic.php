<?php $this->load->view('header', array('num' => 1, 'title' => 'Schedule Timeslots')); ?>
<<<<<<< HEAD
		<div class="row" style="margin-top: 80px">
	  		<div class="col-md-12 columns">
	  						<div class="col-md-3 columns"></div>
	  						<div class="col-md-6 columns">	

	  								<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	  								        <thead>
	  								            <tr>
	  								                <th colspan="2" style="text-align: center; font-weight: bold; font-size: 150%">The Clinic Timeslots</th>
	  								            </tr>
	  								        </thead>
	  								 
	  								        <tbody style="text-align: center">						          
	  								            <tr>					                
	  								            	<td width="80%">7:30 - 8:30</td>
	  								            	<td width="20%">
	  								            		<a href="<?php echo base_url();?>pages/add_appointment"><button type="button" class="btn btn-info">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>
	  								            <tr>					                
	  								            	<td width="80%">8:30 - 9:30</td>
	  								            	<td width="20%">
	  								            		<a href="<?php echo base_url();?>pages/add_appointment"><button type="button" class="btn btn-info">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>
	  								            <tr>					                
	  								            	<td width="80%">9:30 - 10:30</td>
	  								            	<td width="20%">
	  								            		<a href="<?php echo base_url();?>pages/add_appointment"><button type="button" class="btn btn-info">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>
	  								            <tr>					                
	  								            	<td>10:30 - 11:30</td>
	  								            	<td width="20%">
	  								            		<a href="<?php echo base_url();?>pages/add_appointment"><button type="button" class="btn btn-info">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>
	  								            <tr>					                
	  								            	<td colspan="2">11:30 - 1:00  (LUNCH BREAK)</td>	  								            	
	  								            </tr>
	  								            <tr>					                
	  								            	<td width="80%">1:00 - 2:00</td>
	  								            	<td width="20%">
	  								            		<a href="<?php echo base_url();?>pages/add_appointment"><button type="button" class="btn btn-info">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>
	  								            <tr>					                
	  								            	<td width="80%">2:00 - 3:00</td>
	  								            	<td width="20%">
	  								            		<a href="<?php echo base_url();?>pages/add_appointment"><button type="button" class="btn btn-info">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>						          
	  								            <tr>					                
	  								            	<td width="80%">3:00 - 4:00</td>
	  								            	<td width="20%">
	  								            		<a href="<?php echo base_url();?>pages/add_appointment"><button type="button" class="btn btn-info">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>
	  								        </tbody>
	  								      </table>
	  						</div>
	  						<div class="col-md-3 columns"></div>
	  					</div>
	  	</div>
=======
<div class="col-md-12 col-lg-12 columns">
				<div class="col-md-4 col-lg-3 columns"></div>
				<div class="col-md-4 col-sm-12 col-lg-6 columns">					
						<div class="element-container nomargin-element-container">
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
							        <thead>
							            <tr>
							                <th colspan="2" style="text-align: center; font-weight: bold; font-size: 150%">The Clinic Timeslots</th>
							            </tr>
							        </thead>
							 
							        <tbody style="text-align: center">						          
							            <tr>					                
							            	<td width="60%">7:30 - 8:30</td>
							            	<td width="40%">
							            	AVAILABLE / UNAVAILABLE     		
							            	</td>
							            </tr>
							            <tr>					                
							            	<td width="60%">8:30 - 9:30</td>
							            	<td width="40%">
							            	AVAILABLE / UNAVAILABLE     		
							            	</td>
							            </tr>
							            <tr>					                
							            	<td width="60%">9:30 - 10:30</td>
							            	<td width="40%">
							            	AVAILABLE / UNAVAILABLE     		
							            	</td>
							            </tr>
							            <tr>					                
							            	<td>10:30 - 11:30</td>
							            	<td width="40%">
							            	AVAILABLE / UNAVAILABLE     		
							            	</td>
							            </tr>
							            <tr>					                
							            	<td colspan="2">11:30 - 1:00  (LUNCH BREAK)</td>	  								            	
							            </tr>
							            <tr>					                
							            	<td width="60%">1:00 - 2:00</td>
							            	<td width="40%">
							            	AVAILABLE / UNAVAILABLE     		
							            	</td>
							            </tr>
							            <tr>					                
							            	<td width="60%">2:00 - 3:00</td>
							            	<td width="40%">
							            	AVAILABLE / UNAVAILABLE     		
							            	</td>
							            </tr>						          
							            <tr>					                
							            	<td width="60%">3:00 - 4:00</td>
							            	<td width="40%">
							            	AVAILABLE / UNAVAILABLE     		
							            	</td>
							            </tr>
							        </tbody>
							      </table>
						</div>

				       <form method="post" action="<?php echo base_url();?>cadmin/add_patient" role="form">
							<div class="element-container">
								<legend>Appointment Reservation</legend>					  			

						        <label for="app-tslot">Time Slot</label>					  			
					  			<select id="app-tslot" class="form-control" name="app-tslot">
						          <option value="1">7:30am - 8:30am</option>
						          <option value="2">8:30am - 9:30am</option>
						          <option value="3">8:30am - 9:30am</option>
						          <option value="4">9:30am - 10:30am</option>
						          <option value="5">10:30am - 11:30am</option>
						          <option value="6">1:00pm - 2:00pm</option>
						          <option value="7">2:00pm - 3:00pm</option>
						          <option value="8">3:00pm - 4:00pm</option>
						        </select><br />

					  			<label for="app-fname">First Name</label>
					  			<input class="form-control" id="app-fname" name="app-fname" type="text" /><br>
					  			
					  			<label for="app-lname">Last Name</label>
					  			<input class="form-control" id="app-lname" name="app-lname" type="text" /><br>
					  			
					  			<label for="app-lname">Middle Name</label>
					  			<input class="form-control" id="app-mname" name="app-mname" type="text" /><br>
					  			
					  			<label for="app-lname">Contact Number</label>
					  			<input class="form-control" id="app-cnum" name="app-cnum" type="text" /><br>
					  			
					  			<label for="app-ptype">Patient Type</label>					  			
					  			<select id="app-ptype" class="form-control" name="app-ptype">
						          <option value="old">Old Patient</option>
						          <option value="new">New Patient</option>
						        </select><br>
						        <button type="submit" class="btn btn-success">SUBMIT</button>						        
							</div>
					   </form>						
				</div>
				<div class="col-md-4 col-lg-3 columns"></div>
</div>
>>>>>>> 3ce87711355cdd3e3a786268fd33e49f928dedcd

<?php $this->load->view('footer'); ?>
<!--script type="text/javascript">
    var cctr=1;
    var actr=1;

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
    });
</script-->