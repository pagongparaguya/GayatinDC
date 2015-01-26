<?php $this->load->view('header', array('num' => 1, 'title' => 'Schedule Timeslots')); ?>
					
							<div id="sched">
							<div class="row" style="margin-top: 80px">
	  						<div class="col-md-12 columns">
	  						<div class="col-md-3 columns"></div>
	  						<div class="col-md-6 columns">	
							<legend><b>Issue an Appointment</b></legend>
							<span id="message" style="color:red"></span><br>
							<label for="date">Date : </label>
							<input id="date" class="form-control" name="date" type="date" placeholder="Date" required/><br>
					
	  								<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	  								        <thead>
	  								            <tr>
	  								                <th colspan="2" style="text-align: center; font-weight: bold; font-size: 150%">The Clinic Timeslots</th>
	  								            </tr>
	  								        </thead>
	  								 
	  								        <tbody id="tbody" style="text-align: center">						          
	  								            <tr>					                
	  								            	<td width="80%" class="time">7:30 - 8:30 AM</td>
	  								            	<td width="20%">
	  								            		<!-- <a class="href" href="<?php echo base_url();?>pages/add_appointment"> -->
	  								            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>
	  								            <tr>					                
	  								            	<td width="80%" class="time">8:30 - 9:30 AM</td>
	  								            	<td width="20%">
	  								            		<!-- <a href="<?php echo base_url();?>pages/add_appointment"> -->
	  								            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>
	  								            <tr>					                
	  								            	<td width="80%" class="time">9:30 - 10:30 AM</td>
	  								            	<td width="20%">
	  								            		<!-- <a href="<?php echo base_url();?>pages/add_appointment"> -->
	  								            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>
	  								            <tr>					                
	  								            	<td width="80%" class="time">10:30 - 11:30 AM</td>
	  								            	<td width="20%">
	  								            		<!-- <a href="<?php echo base_url();?>pages/add_appointment"> -->
	  								            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>
	  								            <tr>					                
	  								            	<td colspan="2">11:30 - 1:00  (LUNCH BREAK)</td>	  								            	
	  								            </tr>
	  								            <tr>					                
	  								            	<td width="80%" class="time">1:00 - 2:00 PM</td>
	  								            	<td width="20%">
	  								            		<!-- <a href="<?php echo base_url();?>pages/add_appointment"> -->
	  								            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>
	  								            <tr>					                
	  								            	<td width="80%" class="time">2:00 - 3:00 PM</td>
	  								            	<td width="20%">
	  								            		<!-- <a href="<?php echo base_url();?>pages/add_appointment"> -->
	  								            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>						          
	  								            <tr>					                
	  								            	<td width="80%" class="time">3:00 - 4:00 PM</td>
	  								            	<td width="20%">
	  								            		<!-- <a href="<?php echo base_url();?>pages/add_appointment"> -->
	  								            		<button type="button" class="btn btn-info add">Add Appointment</button></a>
	  								            	</td>
	  								            </tr>
	  								        </tbody>
	  								      </table>
	  						</div>
	  						<div class="col-md-3 columns"></div>
	  					</div>
	  					</div>
	  					</div>

			<div id="info">
			<form method="post" action="<?php echo base_url();?>appointment/add_appointment" role="form">
			<div class="row" style="margin-top: 80px">
	  		<div class="col-md-12 columns">			
					<div class="col-md-3 columns"></div>
					<div class="col-md-6 columns">
					<legend id="title"></legend><br>
					<span id="message" style="color:orange">Note: # Invalid / Dummy data will be ignored.</span><br>
					<input type="hidden" name="date" id="idate"/>
					<input type="hidden" name="time" id="itime"/>
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
			          <option value="Old Patient">Old Patient</option>
			          <option value="New Patient">New Patient</option>
			        </select><br>
			        <input id="chk" type="checkbox"> I agree that my appointment reservation is still on a pending status and the clinic staff will still contact me.<br><br>
			        
			        <button id="sub" type="submit" class="btn btn-lg btn-success">SUBMIT</button>
					</div>
					<div class="col-md-3 columns"></div>
			</div>	
			</div>	
		</form>
		</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#info').hide();
		$("#tbody").on('click','.add',function(){
			if($('#date').val()==''){
				$('#message').html("# Pick date first before you proceed !");
			}
			else{
				$('#info').fadeIn(900);
				var elem = $('#info');
				var date = $('#date').val();
				var time = $(this).parent().siblings(".time").text();
				if(elem) {
				    $(window).scrollTop(elem.offset().top).scrollLeft(elem.offset().left);
				}
				$('#idate').val(date);
				$('#itime').val(time);
				$('#title').html("Appointment for " +date+ " at " +time);
			}
		});
		$('#sub').click(function(event){
			if($("#chk").prop("checked")){
				//NOTHING
			}
			else{
				alert('Agree plzzz');
				event.preventDefault();
			}
		});
	});
</script>
    <!-- var cctr=1;
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
</script -->