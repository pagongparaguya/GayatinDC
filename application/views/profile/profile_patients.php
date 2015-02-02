<?php $this->load->view('header', array('num' => 2, 'title' => 'Patient Profiles')); ?>
<div class="element-container">
    <div class="row center-block">
        <div class="col-sm-12 col-md-12 col-lg-12 columns large-centered">
            <legend>Find a Profile</legend>
               <a href="<?php echo base_url();?>cadmin/new_patient"><button class="btn btn-success">Add a Patient Profile</button></a><br><br>  
                <div class="col-md-1 col-lg-1 columns"> </div>
                <div class="col-sm-12 col-md-10 col-lg-10 columns">
                  <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Created by</th>
                            <th>Last Modified by</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                                 
                    <tbody>
                      <?php foreach($profile as $prof): ?>
                        <tr>
                            <td><a style="text-decoration:none;" href="<?php echo base_url();?>cadmin/view_patient_profile/<?php echo $prof->id;?>"><?php echo $prof->lastname;?>, <?php echo $prof->firstname;?> <?php echo $prof->middlename;?></a></td>
                            <td><?php echo $prof->createdby;?></td>
                            <td><?php echo $prof->lastmodifiedby;?></td>
                            <td><a style="text-decoration:none;" href="<?php echo base_url();?>cadmin/edit_patient/<?php echo $prof->id;?>"><img src="<?php echo base_url();?>assets/img/edit.png"> EDIT</a></td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-1 col-lg-1 columns"> </div>
          </div>
      </div>
</div>
    
<?php $this->load->view('footer'); ?>

<script>
  $(document).ready(function(){
      $('#example').dataTable();
  });
</script>