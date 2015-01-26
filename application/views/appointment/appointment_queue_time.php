<?php $this->load->view('header', array('num' => 1, 'title' => 'Appointment Queue')); ?>
<section id="main-slider" style="margin:100px;">
    <legend>Pending Appointment Date</legend>
    <span id="message" style="color:red"></span>

      <div id="content" style="margin:20px">
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
        <thead>
            <tr>
                <th>Date</th>
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
</section>
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