<? php $this->load->view('header', array('num' => 2, 'title' => 'Add New Patient')); ?>
	
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
    var cctr=1;
    var actr=1;
    var rctr=1;

    $(document).ready(function(){
                $("#add_drugs").click(function(){
                	ctemp = cctr;
                	cctr+=1;
                    $('<br id="bdt' + cctr + '"><textarea id="dt' + cctr + '" class="form-control" name="adt[]" placeholder="Drug '+ ctemp +' "></textarea>').insertAfter("#dt"+ ctemp);
                });

                $("#rmv_drugs").click(function() {
                    if (cctr != 1) { 
                      $('#bdt' + cctr).remove();
                      $('#dt' + cctr).remove();
                      cctr -= 1; 
                    }
                });

                $("#add_allergy").click(function(){
                	atemp = actr;
                	actr+=1; 
                    $('<br id="bal' + actr + '"><textarea id="al' + actr + '" class="form-control" name="aal[]" placeholder="Allergy '+ atemp +' "></textarea>').insertAfter("#al"+ atemp);                
                });

                $("#rmv_allergy").click(function() {
                    if (actr != 1) { 
                      $('#bal' + actr).remove();
                      $('#al' + actr).remove();
                      actr -= 1; 
                    }
                });

                $("#add_chrail").click(function(){
                	rtemp = rctr;
                	rctr+=1;
                    $('<br id="bca' + rctr + '"><input id="ca' + rctr + '" class="form-control" name="aca[]" placeholder="Chronic Ailment '+ rtemp +' "/>').insertAfter("#ca"+ rtemp);
                });

                $("#rmv_chrail").click(function() {
                    if (rctr != 1) { 
                      $('#bca' + rctr).remove();
                      $('#ca' + rctr).remove();
                      rctr -= 1; 
                    }
                });
    });
</script>