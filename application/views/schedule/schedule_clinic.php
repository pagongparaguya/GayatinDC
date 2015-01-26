<?php $this->load->view('header', array('num' => 1, 'title' => 'Schedule Timeslots')); ?>
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