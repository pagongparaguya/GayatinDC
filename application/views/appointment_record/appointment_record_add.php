<?php $this->load->view('header', array('num' => 2, 'title' => 'Add New Patient')); ?>
		<form method="post" action="<?php echo base_url();?>cadmin/add_patient_record" role="form">
		<div class="row clearfix">
  		<div class="col-lg-12 col-md-11 col-sm-12 columns">  			
                <div class="element-container">
                      <legend>New appointment record for (patient name) on (date)</legend>
                      <div class="col-lg-4 col-lg-offset-4 columns">
                        <label for="profile-gender">Dentist in Charge</label>
                        <select id="profile-gender"class="form-control" name="gender" required>
                                      <option value="" disabled default selected style="display:none;"></option>
                                      <option value="Male">Cynthia Gayatin</option>
                                      <option value="Female">John Gayatin</option>
                        </select><br>
                      </div>
                      <div class="col-lg-12 columns" style="margin-bottom: 10px;">
                          <label id="services-rendered">Services Rendered</label>
                          <a href="" id="services-rendered"><button class="btn btn-info">Add Services</button></a>
                          <a href=""><button class="btn btn-warning">Remove</button></a>
                      </div>
                      <table style="margin-top: 10px" class="table table-bordered table-striped" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th style="text-align: center; font-weight: bold; font-size: 100%">Type of Service</th>
                            <th style="text-align: center; font-weight: bold; font-size: 100%">Tooth</th>
                            <th style="text-align: center; font-weight: bold; font-size: 100%">Part of Tooth</th>
                            <th style="text-align: center; font-weight: bold; font-size: 100%">Price for Service (PHP)</th>
                            <th style="text-align: center; font-weight: bold; font-size: 100%"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
  		</div>
                        
    </div>
              <div class="col-md-12 columns">
                <div>
                  <a href=""><button class="btn btn-info">Submit</button></a> 
                </div>
              </div>
          
          </div>
          </form>
</div>

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
</script>