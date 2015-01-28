<?php $this->load->view('header', array('num' => 1, 'title' => 'Appointment Queue')); ?>
<div class="element-container">
    <legend><?php echo date("F j, Y", strtotime($date));?></legend>
    <span id="message" style="color:red"></span>

      <div id="content" style="margin:20px">
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
        <thead>
        </thead>
        <tbody id="tbody" style="text-align: center">                     
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default" width="100%">
                      <div class="panel-heading">
                           <span>7:30 - 9:30 AM</span>
                      </div>
                      <?php foreach($time_reservations as $ts):?>
                      <?php if($ts->time == '7:30 - 8:30 AM'){?>
                      <div class="panel-body">  
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->contactno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  
                              <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <?php } ?>
                    <?php endforeach;?>
                  </div>
              </td> 
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>8:30 - 9:30 AM</span>
                      </div>
                      <?php foreach($time_reservations as $ts):?>
                      <?php if($ts->time == '8:30 - 9:30 AM'){?>
                        <div class="panel-body">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->contactno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                      <?php } ?>
                    <?php endforeach;?>
                  </div>
              </td>
             
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>9:30 - 10:30 AM</span>
                      </div> 
                      <?php foreach($time_reservations as $ts):?>
                      <?php if($ts->time == '9:30 - 10:30 AM'){?> 
                        <div class="panel-body">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->contactno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                      <?php } ?>
                    <?php endforeach;?>
                    <span></span>
                  </div>
              </td>
             
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>10:30 - 11:30 AM</span>
                      </div>
                      <?php foreach($time_reservations as $ts):?>
                      <?php if($ts->time == '10:30 - 11:30 AM'){?>
                      <div class="panel-body">  
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->contactno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <?php } ?>
                    <?php endforeach;?>
                  </div>
              </td>
             
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>1:00 - 2:00 PM</span>
                      </div>
                      <?php foreach($time_reservations as $ts):?>
                      <?php if($ts->time == '1:00 - 2:00 PM'){?>
                      <div class="panel-body">  
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->contactno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <?php } ?>
                    <?php endforeach;?>
                  </div>
              </td>
             
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>2:00 - 3:00 PM</span>
                      </div>
                      <?php foreach($time_reservations as $ts):?>
                      <?php if($ts->time == '2:00 - 3:00 PM'){?>
                      <div class="panel-body">  
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->contactno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <?php } ?>
                    <?php endforeach;?>
                  </div>
              </td>
             
            </tr>                     
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>3:00 - 4:00 PM</span>
                      </div>
                      <?php foreach($time_reservations as $ts):?>
                      <?php if($ts->time == '3:00 - 4:00 PM'){?>
                      <div class="panel-body">  
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact No.</th>
                                <th>Patient Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->contactno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <?php } ?>
                    <?php endforeach;?>
                  </div>
              </td>
             
            </tr>
        </tbody>
      </table>
      </div>

     <!--  <div class="about-us-content col-sm-12 col-md-12 col-lg-12 columns ">
        <div class="col-md-1 col-lg-3 columns"></div>
        <div class="col-sm-12 col-md-10 col-lg-6 columns">
                  <div class="panel panel-default frame about-us-frame">
                      <div class="panel-heading">
                           <span class="glyphicon glyphicon-home"></span>
                           <span>Visit Our Clinic</span>
                      </div>
                      <div class="panel-body">
                            Subangdako, Mandaue City, Cebu
                      </div>
                  </div>
                  
                  <div class="panel panel-default frame about-us-frame">
                      <div class="panel-heading">
                            <span class="glyphicon glyphicon-phone-alt"></span>
                            <span>Contact Us</span>
                      </div>
                      <div class="panel-body">
                            <p>344 - 0377</p>
                            <p>511 - 9250</p>
                      </div>
                  </div>
                  
                  <div class="panel panel-default frame about-us-frame">
                      <div class="panel-heading">
                          <span class="glyphicon glyphicon-time"></span>
                          <span>Clinic Schedules</span>
                      </div>
                  
                      <div class="panel-body">
                          
                              <p class="italicized">Monday - Friday</p>
                              <p>7:30am - 4:00pm</p>
                              <p>(on school days)</p>
                              <p>9:00am - 5:00pm</p>
                              <p>(on summer)</p>
                          
                      
                          
                              <p class="italicized">Saturday</p>
                              <p>9:00am - 5:00pm</p>
                          
                      </div>
                  </div>
          </div>
          <div class="col-md-1 col-lg-3 columns"></div>      
</div> -->

</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable();
        // $('#add').click(function(){
        //   $('#stfmod').modal({backdrop: 'static',keyboard: false}); 
        //   $('#stfmod').modal('show');
        // });
        // $('#content').hide();
        // $('#sear').click(function(){
        //   if($('#date').val()==''){
        //     $('#message').html("Date / Time is blank.");
        //   }
        //   else if($("#time :selected").val()==''){
        //     $('#message').html("Date / Time is blank.");
        //   }
        //   else{
        //     $('#message').html("");
        //     alert('a');
        //   }
        // });
    });
</script>