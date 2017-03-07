<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<div class="col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4 class="panel-title">Performance Evaluation</h4>
                    </div>
                </div>
                <div class="panel-body">
			<form action="<?php echo base_url().'admin/pe/pe_list'?>" method="POST">	
                       <div class="">
                            <label class="control-label" >Select Discipline<span class="required"> *</span></label>
						   <select name="select_discipline" class="form-control col-sm-5"  >
							   <option value="">Select Status</option>
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