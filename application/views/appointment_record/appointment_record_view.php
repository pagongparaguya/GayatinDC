<?php $this->load->view('header', array('num' => 2, 'title' => 'Date of Appointment Record')); ?>
<div class="col-md-12 col-lg-12 columns">
				<div class="col-md-4 col-sm-12 col-lg-8 col-lg-offset-2 columns">					
						<div class="element-container nomargin-element-container">
							<legend>Date of Appointment</legend>
							<div class="col-lg-6 col-lg-offset-4 columns">
								<br>
								<dl class="dl-vertical">
								  <dt>Dentist in charge</dt>
								  <dd>Dr. Cynthia Gayatin</dd>
								</dl>
								
								<dl class="dl-vertical">
								  <dt>Total amount for treatments rendered (PHP)</dt>
								  <dd>1000</dd>
								</dl>
								
								<dl class="dl-vertical">
								  <dt>Amount paid (PHP)</dt>
								  <dd>1000</dd>
								</dl>
								
								<dl class="dl-vertical">
								  <dt>Remaining balance</dt>
								  <dd>0</dd>
								</dl>
							</div>
				
							<br><br>
							<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
							        <thead>
							            <tr>
							                <th width="50%" style="text-align: center; font-weight: bold; font-size: 100%">Treatment Rendered</th>
				                            <th width="10%" style="text-align: center; font-weight: bold; font-size: 100%">Tooth</th>
				                            <th width="25%" style="text-align: center; font-weight: bold; font-size: 100%">Tooth Surface</th>
				                            <th width="15%" style="text-align: center; font-weight: bold; font-size: 100%">Price (PHP)</th>
							            </tr>
							        </thead>
							 
							        <tbody style="text-align: center">						          
							            <tr>					                
							            	<td>Tuli</td>
							            	<td>Top</td>
							            	<td>Meshial</td>
							            	<td>100</td>
							            </tr>							            
							            <tr>					                
							            	<td>Tuli</td>
							            	<td>Top</td>
							            	<td>Meshial</td>
							            	<td>100 000</td>
							            </tr>							            
							            <tr>					                
							            	<td>Tuli</td>
							            	<td>Top</td>
							            	<td>Meshial</td>
							            	<td>100</td>
							            </tr>							            
							        </tbody>
							      </table>
						</div>				       
				</div>
</div>
<?php $this->load->view('footer'); ?>