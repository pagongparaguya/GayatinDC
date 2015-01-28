<?php $this->load->view('header', array('num' => 7, 'title' => '(DATE) Appointments')); ?>
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
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href=""><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
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
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href=""><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
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
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href=""><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
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
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href=""><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
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
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href=""><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
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
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>"><button type="button" class="btn btn-info add">ACCEPT</button></a>  <a href=""><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
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
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>"><button type="button" id="add" class="btn btn-info add">ACCEPT</button></a>  <a href=""><button type="button" class="btn btn-info remove">REMOVE</button></a></td>
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
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable();
        $('#add').click(function(event){
          if(confirm('Do you want to proceed?')==true){
            //NOTHING
          }else{
            event.preventDefault();  
          }
        });
    });
</script>