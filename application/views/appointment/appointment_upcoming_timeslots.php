<?php $this->load->view('header', array('num' => 7, 'title' => 'Appointment Queue')); ?>
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
                           <span>7:30 - 8:30 AM</span>
                      </div>
                      <div class="panel-body">  
                      <?php $actr=0; foreach($time_reservations as $ts):?>
                      <?php if($ts->time == '7:30 - 8:30 AM'){ $actr+=1;?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th width="40%">Name</th>
                                <th width="20%">Mobile Number</th>
                                <th width="20%">Telephone Number</th>
                                <th width="15%">Patient Type</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->telno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">Done</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">Cancel</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="a" style="color:blue; font-size:20px; font-weight:bold;"></span>
                      </div>
                  </div>
              </td> 
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>8:30 - 9:30 AM</span>
                      </div>
                        <div class="panel-body">
                      <?php $bctr=0; foreach($time_reservations as $ts): ?>
                      <?php if($ts->time == '8:30 - 9:30 AM'){ $bctr+=1;?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th width="40%">Name</th>
                                <th width="20%">Mobile Number</th>
                                <th width="20%">Telephone Number</th>
                                <th width="15%">Patient Type</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->telno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">Done</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">Cancel</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="b" style="color:blue; font-size:20px; font-weight:bold;"></span>
                        </div>
                  </div>
              </td>
             
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>9:30 - 10:30 AM</span>
                      </div> 
                        <div class="panel-body">
                     <?php $cctr=0; foreach($time_reservations as $ts): ?>
                      <?php if($ts->time == '9:30 - 10:30 AM'){ $cctr+=1;?> 
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th width="40%">Name</th>
                                <th width="20%">Mobile Number</th>
                                <th width="20%">Telephone Number</th>
                                <th width="15%">Patient Type</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->telno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">Done</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">Cancel</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="c" style="color:blue; font-size:20px; font-weight:bold;"></span>
                        </div>
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
                      <div class="panel-body">  
                      <?php $dctr=0; foreach($time_reservations as $ts): ?>
                      <?php if($ts->time == '10:30 - 11:30 AM'){ $dctr+=1;?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th width="40%">Name</th>
                                <th width="20%">Mobile Number</th>
                                <th width="20%">Telephone Number</th>
                                <th width="15%">Patient Type</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->telno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">Done</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">Cancel</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="d" style="color:blue; font-size:20px; font-weight:bold;"></span>
                      </div>
                  </div>
              </td>
             
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>1:00 - 2:00 PM</span>
                      </div>
                      <div class="panel-body">  
                     <?php $ectr=0; foreach($time_reservations as $ts): ?>
                      <?php if($ts->time == '1:00 - 2:00 PM'){ $ectr+=1;?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th width="40%">Name</th>
                                <th width="20%">Mobile Number</th>
                                <th width="20%">Telephone Number</th>
                                <th width="15%">Patient Type</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->telno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">Done</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">Cancel</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="e" style="color:blue; font-size:20px; font-weight:bold;"></span>
                      </div>
                  </div>
              </td>
             
            </tr>
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>2:00 - 3:00 PM</span>
                      </div>
                      <div class="panel-body">  
                      <?php $fctr=0; foreach($time_reservations as $ts): ?>
                      <?php if($ts->time == '2:00 - 3:00 PM'){ $fctr+=1;?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th width="40%">Name</th>
                                <th width="20%">Mobile Number</th>
                                <th width="20%">Telephone Number</th>
                                <th width="15%">Patient Type</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->telno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">Done</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">Cancel</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="f" style="color:blue; font-size:20px; font-weight:bold;"></span>
                      </div>
                  </div>
              </td>
             
            </tr>                     
            <tr>                          
              <td width="100%" class="time">
                <div class="panel panel-default ">
                      <div class="panel-heading">
                           <span>3:00 - 4:00 PM</span>
                      </div>
                      <div class="panel-body">  
                      <?php $gctr=0; foreach($time_reservations as $ts): ?>
                      <?php if($ts->time == '3:00 - 4:00 PM'){ $gctr+=1;?>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
                        <thead>
                            <tr>
                                <th width="40%">Name</th>
                                <th width="20%">Mobile Number</th>
                                <th width="20%">Telephone Number</th>
                                <th width="15%">Patient Type</th>
                                <th width="5%">Action</th>
                            </tr>
                        </thead>
                          <tbody>
                            <tr>
                              <td ><?php echo $ts->lastname;?>, <?php echo $ts->firstname;?> <?php echo $ts->middlename;?></td>
                              <td ><?php echo $ts->mobileno;?></td>
                              <td ><?php echo $ts->telno;?></td>
                              <td ><?php echo $ts->patienttype;?></td>
                              <td ><a href="<?php echo base_url();?>appointment/accept_appointment/<?php echo $ts->id;?>" onclick="return confirm('Are sure to accept ?');"><button type="button" class="btn btn-info add">Done</button></a>  <a href="<?php echo base_url();?>appointment/remove_pending_appointment/<?php echo $date;?>/<?php echo $ts->id;?>" onclick="return confirm('Are sure to delete ?');"><button type="button" class="btn btn-info remove">Cancel</button></a></td>
                            </tr>
                          </tbody>
                        </table>
                      <?php } ?>
                    <?php endforeach;?>
                    <span id="g" style="color:blue; font-size:20px; font-weight:bold;"></span>
                      </div>
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
        var actr = <?php echo $actr;?>;
        var bctr = <?php echo $bctr;?>;
        var cctr = <?php echo $cctr;?>;
        var dctr = <?php echo $dctr;?>;
        var ectr = <?php echo $ectr;?>;
        var fctr = <?php echo $fctr;?>;
        var gctr = <?php echo $gctr;?>;
        if(actr==0){
          $('#a').html("NO SCHEDULED APPOINTMENT");
        }
        if(bctr==0){
          $('#b').html("NO SCHEDULED APPOINTMENT");
        }
        if(cctr==0){
          $('#c').html("NO SCHEDULED APPOINTMENT");
        }
        if(dctr==0){
          $('#d').html("NO SCHEDULED APPOINTMENT");
        }
        if(ectr==0){
          $('#e').html("NO SCHEDULED APPOINTMENT");
        }
        if(fctr==0){
          $('#f').html("NO SCHEDULED APPOINTMENT");
        }
        if(gctr==0){
          $('#g').html("NO SCHEDULED APPOINTMENT");
        }
        $('#example').dataTable();
    });
</script>