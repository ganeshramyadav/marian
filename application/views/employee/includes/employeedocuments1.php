<?php ?>
<div class="" style="padding-left: 15%;">

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
 
<script type="text/javascript">
function sendData()
{  debugger;
   
     $("#myModal").hide();
    
 
}
 
</script>
<!-- <form role="form" name="posting_comment" id="posting_comment" >  -->
       <!-- Resume --> 
				  
	                  	    
				<!-- Medical History Record -->    
	            <div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">Medical History Record</label>
					<button id="Btn_MHR" class="btn btn-default btn-file">Print</button>
					<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>       
						<input type="file" name="medical_history_record" ng-model="q.medical_history_record"  >
					</span>
				</div>  	    
	              	    
	              	   
	              	<!-- Orientation Checklist -->    
	             <div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">Orientation Checklist</label>
					<button id="Btn_OC" class="btn btn-default btn-file">Print</button>
					<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>       
						<input type="file" name="orientation_checklist" ng-model="q.orientation_checklist"  >
					</span>
				</div>  	    
	              	     	    
	          
		  <!-- Personnel Action Form -->    
	             <div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">Personnel Action Form</label>
					<button id="Btn_PAF" class="btn btn-default btn-file">Print</button>
					<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>       
						<input type="file" name="personnel_action_form" ng-model="q.personnel_action_form"  >
					</span>
				</div>					
				
		    <!-- REQUEST_FOR_TIME_OFF Form -->    
	             <div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">Request For Time Off Form</label>
					<button id="Btn_RFTO" class="btn btn-default btn-file">Print</button>
					<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>       
						<input type="file" name="request_for_time_off" ng-model="q.request_for_time_off"  >
					</span>
				</div>			
				
			<!-- Hepatitis Vaccine / Refusal -->    
	             <div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">Hepatitis Vaccine / Refusal</label>
					<button id="Btn_HV" class="btn btn-default btn-file">Print</button>
					<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>       
						<input type="file" name="hepatitis_vaccine" ng-model="q.hepatitis_vaccine"  >
					</span>
				</div>		
				
				
				
				
				
				
				
				<!-- Reference Check -->
				
				<div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">Reference Check</label>
					<button id="myBtnRC" class="btn btn-default btn-file">Print</button>
					<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>       
						<input type="file" name="reference_check" ng-model="q.reference_check"  >
					</span>
					<div id="myModalRC" class="modal" style="z-index:9999;">
					  <!-- Modal content -->
						<div class="row">
							<div class="col-12">
								<div class="modal-content">
									<div class="modal-header">
										<span class="close">×</span>
										<h2>Form</h2>
									</div>
									<div id='reference_check' class="modal-body">
										
									</div>
									<div class="modal-footer">
										<h3>
											<!--<span><?php echo btn_pdf('admin/rn/make_ipdf/' . $rn_info->uid); ?></span>-->
										</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<script>
					$(document).ready(function(evt){
						$("#myModalRC .close").click(function(e){
							$("#myModalRC").hide();
						});
						$("#myBtnRC").click(function(e){
							$("#myModalRC").show();
							$("#reference_check").load("<?php echo base_url()?>admin/discipline/reference_check/<?php echo $rn_info->uid ?>");
							return false;
						});
						$("#Btn_RC1").click(function(e){
								$("#myModalRC").show();
							$("#reference_check").load("<?php echo base_url()?>admin/discipline/reference/<?php echo $rn_info->uid ?>");

							return false;
						});

                                                $("#Btn_MHR").click(function(e){
								$("#myModalRC").show();
							$("#reference_check").load("<?php echo base_url()?>admin/discipline/mhr/<?php echo $rn_info->uid ?>");

							return false;
						});
                                               $("#Btn_OC").click(function(e){
								$("#myModalRC").show();
							$("#reference_check").load("<?php echo base_url()?>admin/discipline/oc/<?php echo $rn_info->uid ?>");

							return false;
						});
                                               $("#Btn_PAF").click(function(e){
								$("#myModalRC").show();
							$("#reference_check").load("<?php echo base_url()?>admin/discipline/paf/<?php echo $rn_info->uid ?>");

							return false;
						});
                                               $("#Btn_RFTO").click(function(e){
								$("#myModalRC").show();
							$("#reference_check").load("<?php echo base_url()?>admin/discipline/rfto/<?php echo $rn_info->uid ?>");

							return false;
						});
                                                $("#Btn_HV").click(function(e){
								$("#myModalRC").show();
							$("#reference_check").load("<?php echo base_url()?>admin/discipline/hv/<?php echo $rn_info->uid ?>");

							return false;
						});
						$("#Btn_II").click(function(e){
								$("#myModalRC").show();
							$("#reference_check").load("<?php echo base_url()?>admin/discipline/ii/<?php echo $rn_info->uid ?>");

							return false;
						});
						
						$("#Btn_TB").click(function(e){
								$("#myModalRC").show();
							$("#reference_check").load("<?php echo base_url()?>admin/discipline/tb/<?php echo $rn_info->uid ?>");

							return false;
						});
						
					});
					</script>
				</div>
				
				<div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">Reference Check 1</label>
					<button id="Btn_RC1" class="btn btn-default btn-file">Print</button>
					<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>       
						<input type="file" name="reference_check" ng-model="q.reference_check"  >
					</span>
				</div>
				
				
				
				
				
				
				
				
				<!-- Criminal Background check -->
				<div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">Criminal Background check</label>
					<input type="hidden" name="cbc_path" ng-model="q.cbc_path" value="<?php
					if (!empty($rn_info->cbc_path)) {
						echo $rn_info->cbc_path;
					}
					?>">
					<div class="col-sm-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
						   
							<?php if (!empty($rn_info->cbc)): ?>
								<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->cbc; ?>" target="_blank" >Print</a> 
								<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
									<span class="fileinput-exists" style="display: block">Change</span>
									<input type="hidden" name="cbc" ng-model="q.cbc" value="<?php echo $rn_info->cbc?>">
									<input type="file" name="cbc" ng-model="q.cbc" >
								</span>
									
							<?php else: ?>
								<!--	<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
								<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
									<span class="fileinput-exists" >Change</span>                                            
									<input type="file" name="cbc" ng-model="q.cbc"  >
								</span> 
								<span class="fileinput-filename"></span>                                        
								<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
							<?php endif; ?>
			
						</div>  
						<div id="msg_pdf" style="color: #e11221"></div>
					</div>
				</div><br />
				
				<!-- OIG Background Check -->
				<div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">OIG Background Check</label>
					<input type="hidden" name="obc_path" ng-model="q.obc_path" value="<?php
					if (!empty($rn_info->obc_path)) {
						echo $rn_info->obc_path;
					}
					?>">
					<div class="col-sm-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
						   
							<?php if (!empty($rn_info->obc)): ?>
								<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->obc; ?>" target="_blank" >Print</a> 
								<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
									<span class="fileinput-exists" style="display: block">Change</span>
									<input type="hidden" name="obc" ng-model="q.obc" value="<?php echo $rn_info->obc?>">
									<input type="file" name="obc" ng-model="q.obc" >
								</span>
									
							<?php else: ?>
							<!--	<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
								<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
									<span class="fileinput-exists" >Change</span>                                            
									<input type="file" name="obc" ng-model="q.obc"  >
								</span> 
								<span class="fileinput-filename"></span>                                        
								<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
							<?php endif; ?>
			
						</div>  
						<div id="msg_pdf" style="color: #e11221"></div>
					</div>
				</div><br />
				
                               <!-- Others First  -->
				<div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">Others</label>
					<input type="hidden" name="other1_path" ng-model="q.other1_path" value="<?php
					if (!empty($rn_info->other1_path)) {
						echo $rn_info->other1_path;
					}
					?>">
					<div class="col-sm-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
						   
							<?php if (!empty($rn_info->other1)): ?>
								<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->other1; ?>" target="_blank" >Print</a> 
								<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
									<span class="fileinput-exists" style="display: block">Change</span>
									<input type="hidden" name="other1" ng-model="q.other1" value="<?php echo $rn_info->other1?>">
									<input type="file" name="other1" ng-model="q.other1" >
								</span>
									
							<?php else: ?>
							<!--	<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
								<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
									<span class="fileinput-exists" >Change</span>                                            
									<input type="file" name="other1" ng-model="q.other1"  >
								</span> 
								<span class="fileinput-filename"></span>                                        
								<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
							<?php endif; ?>
			
						</div>  
						<div id="msg_pdf" style="color: #e11221"></div>
					</div>
				</div><br />
                          
                                <!-- Others second -->
				<div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">Others</label>
					<input type="hidden" name="other_path" ng-model="q.other2_path" value="<?php
					if (!empty($rn_info->other2_path)) {
						echo $rn_info->other2_path;
					}
					?>">
					<div class="col-sm-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
						   
							<?php if (!empty($rn_info->other2)): ?>
								<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->other2; ?>" target="_blank" >Print</a> 
								<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
									<span class="fileinput-exists" style="display: block">Change</span>
									<input type="hidden" name="other2" ng-model="q.other2" value="<?php echo $rn_info->other2?>">
									<input type="file" name="other2" ng-model="q.other2" >
								</span>
									
							<?php else: ?>
							<!--	<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
								<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
									<span class="fileinput-exists" >Change</span>                                            
									<input type="file" name="other2" ng-model="q.other2"  >
								</span> 
								<span class="fileinput-filename"></span>                                        
								<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
							<?php endif; ?>
			
						</div>  
						<div id="msg_pdf" style="color: #e11221"></div>
					</div>
				</div><br />

                                <!-- Others third -->
				<div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">Others</label>
					<input type="hidden" name="other3_path" ng-model="q.other3_path" value="<?php
					if (!empty($rn_info->other3_path)) {
						echo $rn_info->other3_path;
					}
					?>">
					<div class="col-sm-8">
						<div class="fileinput fileinput-new" data-provides="fileinput">
						   
							<?php if (!empty($rn_info->other3)): ?>
								<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->other3; ?>" target="_blank" >Print</a> 
								<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
									<span class="fileinput-exists" style="display: block">Change</span>
									<input type="hidden" name="other3" ng-model="q.other3" value="<?php echo $rn_info->other3?>">
									<input type="file" name="other3" ng-model="q.other3" >
								</span>
									
							<?php else: ?>
							<!--	<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
								<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
									<span class="fileinput-exists" >Change</span>                                            
									<input type="file" name="other3" ng-model="q.other3"  >
								</span> 
								<span class="fileinput-filename"></span>                                        
								<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
							<?php endif; ?>
			
						</div>  
						<div id="msg_pdf" style="color: #e11221"></div>
					</div>
				</div><br />

				<!-- Physical Examination date -->
				<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Physical Test</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->physical_examination_date)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->physical_examination_date ; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
										<input type="hidden" name="physical_examination_date" ng-model="q.physical_examination_date" value="<?php echo $rn_info->physical_examination_date ?>">
										<input type="file" name="physical_examination_date" ng-model="q.physical_examination_date " >
									</span>
										
								<?php else: ?>
									<!-- <a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
										<span class="fileinput-exists" >Change</span>                                            
										<input type="file" name="physical_examination_date" ng-model="q.physical_examination_date"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
<input type="text" name="physical_examination_expiry_date" ng-model="q.physical_examination_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->physical_examination_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>
				
				<!-- TB Test -->
				<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">TB Test</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->TB_test_date)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->TB_test_date; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
			<input type="hidden" name="TB_test_date" ng-model="q.TB_test_date" value="<?php echo $rn_info->tb?>">
			<input type="file" name="TB_test_date" ng-model="q.TB_test_date" >
									</span>
										
								<?php else: ?>
									<!-- <a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
										<span class="fileinput-exists" >Change</span>                                            
	<input type="file" name="TB_test_date" ng-model="q.TB_test_date"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
	<input type="text" name="TB_test_expiry_date" ng-model="q.TB_test_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->TB_test_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>
				
				<!-- TB Questionnaire date -->
				<div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">TB Questionnaire Test</label>
					<button id="Btn_TB" class="btn btn-default btn-file">Print</button>
					<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>       
						<input type="file" name="TB_Questionnaire_date" ng-model="q.TB_Questionnaire_date"  >
					</span>
                                        <div class="col-sm-6">
									<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
									<div class="input-group">
<input type="text" name="TB_questionnaire_expiry_date" ng-model="q.TB_questionnaire_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->TB_questionnaire_expiry_date;?>">
										<div class="input-group-addon">
											<a href="#"><i class="entypo-calendar"></i></a>
										</div>
									</div>
								</div>
				</div>
				
				
				
				<!-- Chest X-Ray Results date -->
				<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Chest X-Ray Test</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->Chest_XRay_Results)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->Chest_XRay_Results; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
	<input type="hidden" name="Chest_XRay_Results" ng-model="q.Chest_XRay_Results" value="<?php echo $rn_info->Chest_XRay_Results?>">
	<input type="file" name="Chest_XRay_Results" ng-model="q.Chest_XRay_Results" >
									</span>
										
								<?php else: ?>
									<!-- <a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
		<span class="fileinput-exists" >Change</span>                                            
		<input type="file" name="Chest_XRay_Results" ng-model="q.Chest_XRay_Results"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
				<input type="text" name="chest_XRay_results_expiry_date" ng-model="q.chest_XRay_results_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->chest_XRay_results_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>

                         <!-- Influenza Immunization / Refusal date -->
                               <div class="form-group">
					<label for="field-1" class="col-sm-4 control-label">Influenza Immunization / Refusal date</label>
					<button id="Btn_II" class="btn btn-default btn-file">Print</button>
					<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>       
						<input type="file" name="Influenza_Immunization" ng-model="q.Influenza_Immunization"  >
					</span>

                                        <div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
<input type="text" name="influenza_immunization_expiry_date" ng-model="q.influenza_immunization_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->influenza_immunization_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
					</div>                                        

				</div>

				
				
				
				<!-- 90 day Performance Evaluation date -->
				<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Performance Evaluation date</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->ninety_day_Performance_Evaluation_date)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->ninety_day_Performance_Evaluation_date; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
<input type="hidden" name="ninety_day_Performance_Evaluation_date" ng-model="q.ninety_day_Performance_Evaluation_date" value="<?php echo $rn_info->ninety_day_Performance_Evaluation_date ?>">
<input type="file" name="ninety_day_Performance_Evaluation_date" ng-model="q.ninety_day_Performance_Evaluation_date" >
									</span>
										
								<?php else: ?>
									<!-- <a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
										<span class="fileinput-exists" >Change</span>                                            
<input type="file" name="ninety_day_Performance_Evaluation_date" ng-model="q.ninety_day_Performance_Evaluation_date"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
	<input type="text" name="ninety_day_performance_evaluation_expiry_date" ng-model="q.ninety_day_performance_evaluation_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->ninety_day_performance_evaluation_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>
				
				 
				
				
				
				<!-- Initial Competency Assessment date -->
				<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Competency Assessment date</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->Initial_Competency_Assessment_date)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->Initial_Competency_Assessment_date; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
<input type="hidden" name="Initial_Competency_Assessment_date" ng-model="q.Initial_Competency_Assessment_date" value="<?php echo $rn_info->Initial_Competency_Assessment_date ?>">
<input type="file" name="Initial_Competency_Assessment_date" ng-model="q.Initial_Competency_Assessment_date" >
									</span>
										
								<?php else: ?>
									<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/competency_assessment/<?php echo $discipline_id.".docx";?>" target="_blank" >Print</a>
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
										<span class="fileinput-exists" >Change</span>                                            
<input type="file" name="Initial_Competency_Assessment_date" ng-model="q.Initial_Competency_Assessment_date"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
								
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
	<input type="text" name="initial_competency_assessment_expiry_date" ng-model="q.initial_competency_assessment_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->initial_competency_assessment_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>
				
				<!-- Automobile Insurance expires -->
				<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Automobile Insurance date</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->automobile_insurance_expires)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->automobile_insurance_expires; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
										<input type="hidden" name="automobile_insurance_expires" ng-model="q.automobile_insurance_expires" value="<?php echo $rn_info->automobile_insurance_expires ?>">
										<input type="file" name="automobile_insurance_expires" ng-model="q.automobile_insurance_expires" >
									</span>
										
								<?php else: ?>
									<!-- <a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
										<span class="fileinput-exists" >Change</span>                                            
			<input type="file" name="automobile_insurance_expires" ng-model="q.automobile_insurance_expires"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
	<input type="text" name="automobile_insurance_expiry_date" ng-model="q.automobile_insurance_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->automobile_insurance_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>
				
				<!-- CPR Card expires -->
				<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">CPR Card expires</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->CPR_Card_expires)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->CPR_Card_expires; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
<input type="hidden" name="CPR_Card_expires" ng-model="q.CPR_Card_expires" value="<?php echo $rn_info->CPR_Card_expires?>">
<input type="file" name="CPR_Card_expires" ng-model="q.CPR_Card_expires" >
									</span>
										
								<?php else: ?>
									<!-- <a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
       <span class="fileinput-exists" >Change</span>                                            
       <input type="file" name="CPR_Card_expires" ng-model="q.CPR_Card_expires"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
	<input type="text" name="CPR_card_expiry_date" ng-model="q.CPR_card_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->CPR_card_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>
				
				<!-- Driver’s License expires -->
				<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Driver’s License expires</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->drivers_license_expires)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->drivers_license_expires; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
<input type="hidden" name="drivers_license_expires" ng-model="q.drivers_license_expires" value="<?php echo $rn_info->drivers_license_expires?>">
<input type="file" name="drivers_license_expires" ng-model="q.drivers_license_expires" >
									</span>
										
								<?php else: ?>
									<!-- <a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
										<span class="fileinput-exists" >Change</span>                                            
		<input type="file" name="drivers_license_expires" ng-model="q.drivers_license_expires"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
	<input type="text" name="drivers_license_expiry_date" ng-model="q.drivers_license_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->drivers_license_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>
				
				<!-- Equipment Management date -->
			<!--	<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Equipment Management date</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->equipment_management_date)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->equipment_management_date; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
<input type="hidden" name="equipment_management_date" ng-model="q.equipment_management_date" value="<?php echo $rn_info->equipment_management_date?>">
<input type="file" name="equipment_management_date" ng-model="q.equipment_management_date" >
									</span>
										
								<?php else: ?>
									<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/Equipment_management.docx" target="_blank" >Print</a>
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
										<span class="fileinput-exists" >Change</span>                                            
	<input type="file" name="equipment_management_date" ng-model="q.equipment_management_date"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
								
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
	<input type="text" name="equipment_management_expiry_date" ng-model="q.equipment_management_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->equipment_management_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>  -->
				
				<!-- Hand Washing Competency date -->
				<!--
				<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Hand Washing Competency date</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->hand_washing_competency_date)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->hand_washing_competency_date; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
<input type="hidden" name="hand_washing_competency_date" ng-model="q.hand_washing_competency_date" value="<?php echo $rn_info->hand_washing_competency_date ?>">
		<input type="file" name="hand_washing_competency_date" ng-model="q.hand_washing_competency_date" >
									</span>
										
								<?php else: ?>
									<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a>
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
										<span class="fileinput-exists" >Change</span>                                            
	<input type="file" name="hand_washing_competency_date" ng-model="q.hand_washing_competency_date"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
								
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
	<input type="text" name="hand_washing_competency_expiry_date" ng-model="q.hand_washing_competency_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->hand_washing_competency_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>
				-->
				<!-- Glucose Competency date -->
			<!--	<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Glucose Competency date</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->glucose_competency_date)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->glucose_competency_date; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
										<input type="hidden" name="glucose_competency_date" ng-model="q.glucose_competency_date" value="<?php echo $rn_info->glucose_competency_date ?>">
										<input type="file" name="glucose_competency_date" ng-model="q.glucose_competency_date" >
									</span>
										
								<?php else: ?>
									<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/Glucose_Competency.docx" target="_blank" >Print</a>
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
										<span class="fileinput-exists" >Change</span>                                            
										<input type="file" name="glucose_competency_date" ng-model="q.glucose_competency_date"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
								
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
	<input type="text" name="glucose_competency_expiry_date" ng-model="q.glucose_competency_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->glucose_competency_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>  -->
				
				<!-- Prof Liability Insurance expires -->
				<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Prof Liability Insurance expires</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->prof_liability_insurance_expires)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->prof_liability_insurance_expires; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
										<input type="hidden" name="prof_liability_insurance_expires" ng-model="q.prof_liability_insurance_expires" value="<?php echo $rn_info->prof_liability_insurance_expires ?>">
										<input type="file" name="prof_liability_insurance_expires" ng-model="q.prof_liability_insurance_expires" >
									</span>
										
								<?php else: ?>
									<!-- <a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
										<span class="fileinput-exists" >Change</span>                                            
										<input type="file" name="prof_liability_insurance_expires" ng-model="q.prof_liability_insurance_expires"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
	<input type="text" name="prof_liability_Insurance_expiry_date" ng-model="q.prof_liability_Insurance_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->prof_liability_Insurance_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>
				
				<!-- Professional License expires -->
				<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Professional License expires</label>
						<div class="col-sm-2">
							<div class="fileinput fileinput-new" data-provides="fileinput">
							   
								<?php if (!empty($rn_info->professional_license_expires)): ?>
									<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->professional_license_expires; ?>" target="_blank" >Print</a> 
									<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload</span>
										<span class="fileinput-exists" style="display: block">Change</span>
<input type="hidden" name="professional_license_expires" ng-model="q.professional_license_expires" value="<?php echo $rn_info->professional_license_expires?>">
										<input type="file" name="professional_license_expires" ng-model="q.professional_license_expires" >
									</span>
										
								<?php else: ?>
									<!-- <a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/#" target="_blank" >Print</a> -->
									<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload</span>
										<span class="fileinput-exists" >Change</span>                                            
<input type="file" name="professional_license_expires" ng-model="q.professional_license_expires"  >
									</span> 
									<span class="fileinput-filename"></span>                                        
									<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
								<?php endif; ?>
							</div>
							<div id="msg_pdf" style="color: #e11221"></div>
						</div>
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-6">
								<label class="col-sm-4 control-label" >Expiry Date<span class="required"> *</span></label>
								<div class="input-group">
	<input type="text" name="professional_license_expiry_date" ng-model="q.professional_license_expiry_date"  class="form-control datepicker" data-date-format="mm/dd/yyyy" value="<?php echo $rn_info->professional_license_expiry_date;?>">
									<div class="input-group-addon">
										<a href="#"><i class="entypo-calendar"></i></a>
									</div>
								</div>
								</div>
							</div>
						</div>
					</div><br />
				</div>
		              	    
	              	    



	              	    
	              	    
	              	    
	              	    
	              	    
	              	    
	              	    
	              	    
	              	    
	              	    
	              	    
	              	    
	              	    
	              	    
	              	    
	              	    
	              	    
	              	    

        <!-- Resume End -->
      <!-- <input id="file_upload" name="attachment_file" class="file_upload_icon" type="file"/> -->
      <input type="button" class="post postbtn" style="border: none;outline:none;" value="Submit" onclick = "return sendData()"/>
<!-- </form> -->



</div>







