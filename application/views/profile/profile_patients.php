<?php $this->load->view('header', array('num' => 2, 'title' => 'Patient Profiles')); ?>
<section id="main-slider" style="margin:100px;">
    <legend>Find a Profile</legend>
     <!-- <div class="row">
      <div class="row row-content"> -->
     <!-- <br><br><a href="<?php echo base_url();?>cadmin/new_patient" class="button info">Add New Patient</a><br><br>  -->
      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <!-- <th>Age</th> -->
                <th>Created by</th>
                <th>Last Modified by</th>
                <th>Action</th>
            </tr>
        </thead>
 
        <tbody>
          <?php foreach($profile as $prof): ?>
            <tr>
                <td><a style="text-decoration:none;" href="<?php echo base_url();?>cadmin/view_patient_profile/<?php echo $prof->id;?>"><?php echo $prof->lastname;?>, <?php echo $prof->firstname;?> <?php echo $prof->middlename;?></a></td>
                <!-- <td><?php echo $prof->age;?></td> -->
                <td><?php echo $prof->createdby;?></td>
                <td><?php echo $prof->lastmodifiedby;?></td>
                <td><a style="text-decoration:none;" href="<?php echo base_url();?>cadmin/edit_patient/<?php echo $prof->id;?>"><img src="<?php echo base_url();?>assets/img/edit.png"> EDIT</a></td>
            </tr>
          <?php endforeach;?>
        </tbody>
      </table>
      <!-- </div>
      </div> -->
    </section>
    <?php $this->load->view('footer'); ?>
      <br><br><br><br><br>

    <script>
    $(document).ready(function() {
        $('#example').dataTable();
    } );
    </script>