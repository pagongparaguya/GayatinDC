<?php $this->load->view('header', array('num' => 4, 'title' => 'ABOUT US')); ?>

<div class="frame">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">          
          <div class="item active">
                <img src="<?php echo base_url();?>assets/img/clinic.jpg" alt="image1" />
                <div class="carousel-caption"></div>
          </div>          
      </div>        
  </div>
</div>
</div>
    
<div class="about-us-content">
    <div class="panel panel-default col-lg-3 columns frame about-us-frame">
        <div class="panel-heading">
             <span class="glyphicon glyphicon-home"></span>
             <span>Visit Our Clinic</span>
        </div>
        <div class="panel-body">
              Subangdako, Mandaue City, Cebu
        </div>
    </div>
    
    <div class="panel panel-default col-lg-3 columns frame about-us-frame">
        <div class="panel-heading">
              <span class="glyphicon glyphicon-phone-alt"></span>
              <span>Contact Us</span>
        </div>
        <div class="panel-body">
              <p>344 - 0377</p>
              <p>511 - 9250</p>
        </div>
    </div>
    
    <div class="panel panel-default col-lg-3 columns frame about-us-frame">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-time"></span>
            <span>Clinic Schedules</span>
        </div>

        <div class="panel-body">
            <div class="col-lg-6 columns">
                <p class="italicized">Monday - Friday</p>
                <p>7:30am - 4:00pm</p>
                <p>(on school days)</p>
                <p>9:00am - 5:00pm</p>
                <p>(on summer)</p>
            </div>
        
            <div class="col-lg-6 columns">
                <p class="italicized">Saturday</p>
                <p>9:00am - 5:00pm</p>
            </div>
        </div>
    </div>
</div>
    