
<?php $this->load->view('header', array('num' => 2, 'title' => 'Add New Patient')); ?>
<div class="row">
  <div class="col-lg-12 columns">
  <div class="element-container" style="padding: 25px;">
              <legend>Add New Profile</legend>
              <center><span style="color:red;"><?php echo $message;?></span></center>
              <form method="post" action="<?php echo base_url();?>cadmin/add_patient" role="form">
              <div class="row clearfix">
                <div class="col-lg-6 columns">
                  <span>  <h4>Personal Information</h4></span>
                  
                  <label for="profile-fname">First Name</label>
                  <input id="profile-fname" class="form-control" name="fname" type="text" required /><br>
                  
                  <label for="profile-lname">Last Name</label>
                  <input id="profile-lname" class="form-control" name="lname" type="text" required /><br>
                  
                  <label for="profile-mname">Middle Name</label>
                  <input id="profile-mname" class="form-control" name="mname" type="text" required /><br>
                  
                  <label for="profile-address">Home Address</label>
                  <input id="profile-address" class="form-control" name="hadd" type="text" required /><br>
                  
                  <label for="profile-tel">Telephone Number</label>
                  <input id="profile-tel" placeholder="example: 722-6971" class="form-control" name="htno" pattern="[0-9]{3}[-][0-9]{4}" type="text" /><br>
                  
                  <label for="profile-mobile">Mobile Number</label>
                  <input id="profile-mobile" placeholder="example: 09269440273" class="form-control" name="mno" type="text" pattern="[0][9][0-9]{9}" required/><br>
                
                  <div class="col-lg-3 columns">
                      <label for="profile-gender">Gender</label>
                      <div class="profile-gender">
                            <div class="radio">
                              <label for="male">
                                <input type="radio" name="gender" id="optionRadios1" value="male" />
                                  Male
                              </label>
                            </div>
                            <div class="radio">
                              <label for="female">
                                <input type="radio" name="gender" id="optionRadios2" value="female" />
                                  Female
                              </label>
                            </div>
                      </div>
                  </div>
                
                  <div class="col-lg-3 columns">
                    <label for="profile-mstatus">Marital Status</label>
                    <select id="profile-mstatus" class="form-control" name="mstat" required>
                                  <option value="" disabled default selected style="display:none;"></option>
                                  <option value="Single">Single</option>
                                  <option value="Married">Married</option>
                                </select>
                  </div>
                <br><br><br><br>
                  <span><h4>Work Information</h4></span>
              
                  <label for="profile-oaddress">Office Address</label>
                  <input id="profile-oaddress"class="form-control" name="oadd" type="text" /><br>
              
                  <label for="profile-otel">Telephone Number</label>
                  <input id="profile-otel" placeholder="example: 722-471" class="form-control" name="otno" pattern="[0-9]{3}[-][0-9]{4}" type="text" /><br>
                </div>
              
              <div class="col-lg-6 columns">
                <span><h4>Dental Information</h4></span>
              
                <div class="col-lg-6 columns">
                  <label for="profile-occ">OCCLUSION</label>
                  <select id="profile-occ" class="form-control" name="occ" required>
                              <option value="" disabled default selected style="display:none;"></option>
                              <option value="Class I">Class I</option>
                              <option value="Class II (Div.1)">Class II (Div.1)</option>
                              <option value="Class II (Div.2)">Class II (Div.2)</option>
                              <option value="Class III">Class III</option>
                              <option value="None">None</option>
                           </select><br>
                </div>
              
                  <div class="col-lg-6 columns">
                    <label for="profile-pc">Periodontal Condition</label> 
                          <select id="profile-pc" class="form-control" name="perdon" required>
                        <option value="" disabled default selected style="display:none;"></option>
                        <option value="Normal">Normal</option>
                        <option value="With Periodontal Problem">With Periodontal Problem</option>
                     </select><br>
                  </div>
              
                  <div class="col-lg-6 columns">
                    <label for="profile-oh">Oral Hygiene</label>  
                            <select id="profile-oh" class="form-control" name="orhy" required>
                        <option value="" disabled default selected style="display:none;"></option>
                        <option value="Good">Good</option>
                        <option value="Poor">Poor</option>
                     </select><br>
                  </div>

                 <div class="col-lg-6 columns">
                    <label for="profile-hob">Previous History of Bleeding</label>
                    <select id="profile-hob" class="form-control" name="phb" required>
                                <option value="" disabled default selected style="display:none;"></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                             </select><br>
                  </div>  
            <br><br>
              <div id="dtcon">
                  
              
                  <div class="col-lg-6 columns">
                    <label for="profile-bp">Blood Pressure</label>
                    <input id="profile-bp" class="form-control" name="bp" type="text" /><br>
                  </div>
                  <div class="col-lg-12 columns"></div>
              
                  
                    <div class="col-lg-4 columns">
                      <label for="add_chrail">Chronic Ailments</label><br />
                      <div id="ca1">
                        <button id="add_chrail"  type="button" class="btn btn-info">Add Chronic Ailments</button>        
                        <button id="rmv_chrail" type="button" class="btn btn-danger">Remove</button>
                      </div><br>
                    </div>
                    
                    <div class="col-lg-4 columns">
                      <label for="add_drugs">Drugs Taken</label>
                                <div id="dt1">
                                  <button id="add_drugs" type="button" class="btn btn-info">Add Drugs Taken</button>       
                                  <button id="rmv_drugs" type="button" class="btn btn-danger">Remove</button>
                                </div>
                    </div>
                          </div>
                          <div id="alcon">        
                    <div class="col-lg-4 columns">
                      <label for="add_allergy">Allergies</label><br />
                      <div id="al1">
                        <button id="add_allergy" type="button" class="btn btn-info">Add Allergy </button>        
                              <button id="rmv_allergy" type="button" class="btn btn-danger">Remove</button>
                      </div>
                    </div>
                        </div>
                        
                  </div>
            
                <div class="col-md-12 columns">
                  <hr />
                  <div>
                    <button type="submit" class="btn btn-success">SUBMIT</button>
                  </div>
                </div>
  
  </div>
  </form>
    </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    var cctr=1;
    var actr=1;
    var rctr=1;

    $(document).ready(function(){
                $("#add_drugs").click(function(){
                	ctemp = cctr;
                	cctr+=1;
                    $('<br id="bdt' + cctr + '"><textarea id="dt' + cctr + '" class="form-control" name="adt[]" placeholder="Drug '+ ctemp +' "></textarea>').insertAfter("#dt"+ ctemp);
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
                    $('<br id="bal' + actr + '"><textarea id="al' + actr + '" class="form-control" name="aal[]" placeholder="Allergy '+ atemp +' "></textarea>').insertAfter("#al"+ atemp);                
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
                    $('<br id="bca' + rctr + '"><input id="ca' + rctr + '" class="form-control" name="aca[]" placeholder="Chronic Ailment '+ rtemp +' "/>').insertAfter("#ca"+ rtemp);
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