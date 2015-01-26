<?php $this->load->view('header', array('num' => 5, 'title' => 'Admin Accounts')); ?>
<section id="main-slider" style="margin:100px;">
    <legend>Admin Accounts</legend>
     <!-- <div class="row">
      <div class="row row-content"> -->
     <!-- <br><br><a href="<?php echo base_url();?>cadmin/new_patient" class="button info">Add New Patient</a><br><br>  -->
     <a href="<?php echo base_url();?>cadmin/edit_staff/<?php echo $this->session->userdata('id');?>"><button type="button" class="btn btn-info">Customize Profile</button></a>
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact No.</th>
                <th>Action</th>
            </tr>
        </thead>
 
        <tbody>
          <?php foreach($staff as $stf): ?>
            <tr>
                <td><?php echo $stf->firstname;?> <?php echo $stf->lastname;?></td>
                <td><?php echo $stf->username;?></td>
                <td>
                  <a style="text-decoration:none;" href="<?php echo base_url();?>cadmin/edit_staff/<?php echo $stf->id;?>"><!-- <img src="<?php echo base_url();?>assets/img/edit.png"> -->EDIT</a>
                    |
                  <a style="text-decoration:none;" href="<?php echo base_url();?>cadmin/delete_staff/<?php echo $stf->id;?>" onclick="return confirm('Are sure to delete ?');"><!-- <img src="<?php echo base_url();?>assets/img/edit.png"> -->REMOVE</a>
                </td>
                <!-- <td><a href="<?php echo base_url();?>cadmin/edit_patient/<?php echo $stf->id;?>"><img src="<?php echo base_url();?>assets/img/edit.png">REMOVE</a></td> -->
            </tr>
          <?php endforeach;?>
        </tbody>
      </table>
      <a href="<?php echo base_url();?>cadmin/new_staff"><button id="add" type="button" class="btn btn-info">Add New Staff</button></a>

    </section>
    <?php $this->load->view('footer'); ?>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable();
        // $('#add').click(function(){
        //   $('#stfmod').modal({backdrop: 'static',keyboard: false}); 
        //   $('#stfmod').modal('show');
        // });
    } );
    </script>