<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<div class="col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4 class="panel-title">COMPETENCY ASSESSMENT</h4>
                    </div>
                </div>
                <div class="panel-body">
			<form action="<?php echo base_url().'admin/ca/ca_list'?>" method="POST">
                          <div class="">
                              <label class="control-label" >Select Initial / Annual<span class="required"> *</span></label>
						   <select name="time_interval" class="form-control col-sm-5"  >
                                                           <option value="">Select</option>
							   <option value="0">Initial</option>
                                                           <option value="1">Annual</option>							 
						    </select>
                          </div>
                          <div class="row" style="padding:10px;"></div>
                       <div class="">
                            <label class="control-label" >Select Discipline<span class="required"> *</span></label>
						   <select name="select_discipline" class="form-control col-sm-5"  >
							   <option value="">Select Discipline</option>
                                                         <?php if (!empty($discipline)) {
                                                             foreach($discipline as $disciplinedata) 
                                                                 echo '<option value="'.$disciplinedata->discipline_id.'">'.$disciplinedata->discipline.'</option>';
                                   
                                                           } ?>
							 
						    </select>
		        </div>
<br />
<br />
<br />
                          <button id="btn_emp" type="submit" class="btn btn-primary btn-block" style="width: inherit; float:right;">Submit</button>
			</form>	  

                     
		                  
                </div>
                
                
            </div>
          </div>    