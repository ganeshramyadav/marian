	<div>
		<div class="form-group">
			<label for="field-1" class="col-sm-4 control-label">I9 Tax</label>
			<input type="hidden" name="i9_tax_path" ng-model="q.i9_tax_path" value="<?php
			if (!empty($rn_info->i9_tax_path)) {
				echo $rn_info->i9_tax_path;
			}
			?>">
			<div class="col-sm-8">
				<div class="fileinput fileinput-new" data-provides="fileinput">
					<?php if (!empty($rn_info->i9_tax)): ?>
				   <a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->i9_tax; ?>" target="_blank" >Print</a> 
						<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
							<span class="fileinput-exists" style="display: block">Change</span>
							<input type="hidden" name="i9_tax" ng-model="q.i9_tax" value="<?php echo $rn_info->i9_tax ?>">
							<input type="file" name="i9_tax" ng-model="q.i9_tax" >
						</span>                                    
					   <!-- <span class="fileinput-filename"> <?php echo $rn_info->i9_tax_filename ?></span> -->  
						   
					<?php else: ?>
					<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/signature/I-9.pdf" target="_blank" >Print</a> 
						<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
							<span class="fileinput-exists" >Change</span>                                            
							<input type="file" name="i9_tax" ng-model="q.i9_tax" >
						</span> 
						<span class="fileinput-filename"></span>                                        
						<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>
					<?php endif; ?>
				</div>  
				<div id="msg_pdf" style="color: #e11221"></div>
			</div>
		</div> 
	</div><br />
	<div>
	  <div class="form-group">
			<label for="field-1" class="col-sm-4 control-label">Statement of acknowledgement</label>
			<input type="hidden" name="state_of_ack_path" ng-model="q.state_of_ack_path" value="<?php
			if (!empty($rn_info->state_of_ack_path)) {
				echo $rn_info->state_of_ack_path;
			}
			?>">
			<div class="col-sm-8">
				<div class="fileinput fileinput-new" data-provides="fileinput">
				   
					<?php if (!empty($rn_info->state_of_ack)): ?>
			 <a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->state_of_ack; ?>" target="_blank" >Print</a> 
						<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
							<span class="fileinput-exists" style="display: block">Change</span>
							<input type="hidden" name="state_of_ack" ng-model="q.state_of_ack" value="<?php echo $rn_info->state_of_ack ?>">
							<input type="file" name="state_of_ack" ng-model="q.state_of_ack" >
						</span>                                    
					  <!--  <span class="fileinput-filename"> <?php echo $rn_info->state_of_ack_filename ?></span>  -->
							
					<?php else: ?> 
					   <a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/signature/Statement & Acknowledgment.pdf" target="_blank" >Print</a>
						<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
							<span class="fileinput-exists" >Change</span>                                            
							<input type="file" name="state_of_ack" ng-model="q.state_of_ack"  >
						</span> 
						<span class="fileinput-filename"></span>                                        
						<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
					<?php endif; ?>
	
				</div>  
				<div id="msg_pdf" style="color: #e11221"></div>
			</div>
		</div>
	</div><br />
	<div>
		<div class="form-group">
			<label for="field-1" class="col-sm-4 control-label">Background Check</label>
			<input type="hidden" name="back_check_path" ng-model="q.back_check_path"  value="<?php
			if (!empty($rn_info->back_check_path)) {
				echo $rn_info->back_check_path;
			}
			?>">
			<div class="col-sm-8">
				<div class="fileinput fileinput-new" data-provides="fileinput">
				  
					<?php if (!empty($rn_info->back_check)): ?>
			  <a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->back_check; ?>" target="_blank" >Print</a> 
						<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
							<span class="fileinput-exists" style="display: block">Change</span>
							<input type="hidden" name="back_check_path"  ng-model="q.back_check_path" value="<?php echo $rn_info->back_check ?>">
							<input type="file" name="back_check" ng-model="q.back_check" >
						</span>                                    
						<span class="fileinput-filename"> <?php echo $rn_info->back_check_filename ?></span>  
						   
					<?php else: ?>
	 <a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/signature/Background.pdf" target="_blank">Print</a>
						<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
							<span class="fileinput-exists">Change</span>                                            
							<input type="file" name="back_check" ng-model="q.back_check" >
						</span> 
						<span class="fileinput-filename"></span>                                        
						<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
					<?php endif; ?>
	
				</div>  
				<div id="msg_pdf" style="color: #e11221"></div>
			</div>
		</div>
	</div><br />
	<div>
	 <div class="form-group">
			<label for="field-1" class="col-sm-4 control-label">W4 Form</label>
			<input type="hidden" name="w4_form_path" ng-model="q.w4_form_path" value="<?php
			if (!empty($rn_info->w4_form_path)) {
				echo $rn_info->w4_form_path;
			}
			?>">
			<div class="col-sm-8">
				<div class="fileinput fileinput-new" data-provides="fileinput">
				  
					<?php if (!empty($rn_info->w4_form)): ?>
				 <a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->w4_form; ?>" target="_blank" >Print</a>
						<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
							<span class="fileinput-exists" style="display: block">Change</span>
							<input type="hidden" name="w4_form" ng-model="q.w4_form" value="<?php echo $rn_info->w4_form ?>">
							<input type="file" name="w4_form" ng-model="q.w4_form" >
						</span>                                    
						<span class="fileinput-filename"> <?php echo $rn_info->w4_form_filename ?></span> 
																	 
					<?php else: ?>
	<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/signature/W-4.pdf" target="_blank">Print</a>
						<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
							<span class="fileinput-exists" >Change</span>                                            
							<input type="file" name="w4_form" ng-model="q.w4_form" >
						</span> 
						<span class="fileinput-filename"></span>                                        
						<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
					<?php endif; ?>
	
				</div>  
				<div id="msg_pdf" style="color: #e11221"></div>
			</div>
		</div>
	</div>

	<div>
	 <div class="form-group">
			<label for="field-1" class="col-sm-4 control-label">Addendum Electronic signature</label>
			<input type="hidden" name="electronic_signature_path" ng-model="q.electronic_signature_path" value="<?php
			if (!empty($rn_info->electronic_signature_path)) {
				echo $rn_info->electronic_signature_path;
			}
			?>">
			<div class="col-sm-8">
				<div class="fileinput fileinput-new" data-provides="fileinput">
				  
					<?php if (!empty($rn_info->electronic_signature)): ?>
				 <a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->electronic_signature; ?>" target="_blank" >Print</a>
						<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
							<span class="fileinput-exists" style="display: block">Change</span>
							<input type="hidden" name="electronic_signature" ng-model="q.electronic_signature" value="<?php echo $rn_info->electronic_signature ?>">
							<input type="file" name="electronic_signature" ng-model="q.electronic_signature" >
						</span>                                    
						<span class="fileinput-filename"> <?php echo $rn_info->electronic_signature_filename ?></span> 
																	 
					<?php else: ?>
	<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/signature/Electronic signature.pdf" target="_blank">Print</a>
						<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
							<span class="fileinput-exists" >Change</span>                                            
							<input type="file" name="electronic_signature" ng-model="q.electronic_signature" >
						</span> 
						<span class="fileinput-filename"></span>                                        
						<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
					<?php endif; ?>
	
				</div>  
				<div id="msg_pdf" style="color: #e11221"></div>
			</div>
		</div>
	</div>
