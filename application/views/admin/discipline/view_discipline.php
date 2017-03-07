<div class="row">
    <div class="col-sm-12" data-spy="scroll" data-offset="0">                            
        <div class="panel panel-default">            
            <!-- main content -->
            <div class="panel-heading">
                <div class="row">
                    <div  class="col-lg-12 panel-title">
                        <h3 class="col-lg-4 col-md-4 col-sm-4"><?php echo $rn_info->discipline ?> Detail</h3>
                        <div class="pull-right">                               
                            <span><?php echo btn_edit('admin/discipline/edit_discipline/' . $rn_info->uid); ?></span>
                            <span><?php // echo btn_pdf('admin/discipline/make_pdf/' . $rn_info->uid); ?></span>
                            <button class="margin btn-print" type="button" data-toggle="tooltip" title="Print" onclick="printDiv('printableArea')"><?php // echo btn_print(); ?></button>                                                              
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div id="printableArea"> 
                <div class="show_print" style="width: 100%; border-bottom: 2px solid black;">
                    <table style="width: 100%; vertical-align: middle;">
                        <tr>
                            <?php
                            $genaral_info = $this->session->userdata('genaral_info');
                            if (!empty($genaral_info)) {
                                foreach ($genaral_info as $info) {
                                    ?>
                                    <td style="width: 75px; border: 0px;">
                                        <img style="width: 50px;height: 50px" src="<?php echo base_url() . $info->logo ?>" alt="" class="img-circle"/>
                                    </td>
                                    <td style="border: 0px;">
                                        <p style="margin-left: 10px; font: 14px lighter;"><?php echo $info->name ?></p>
                                    </td>
                                    <?php
                                }
                            } else {
                                ?>
                                <td style="width: 75px; border: 0px;">
                                    <img style="width: 50px;height: 50px" src="<?php echo base_url() ?>img/logo.png" alt="Logo" class="img-circle"/>
                                </td>
                                <td style="border: 0px;">
                                    <p style="margin-left: 10px; font: 14px lighter;">Human Resource Management System</p>
                                </td>
                                <?php
                            }
							 
                            ?>
                        </tr>
                    </table>
                </div><!--            show when print start-->
                <br/>
                <div class="col-lg-12 well">
                    <div class="row">                            
                        <div class="col-lg-2 col-sm-2">
                            <div class="fileinput-new thumbnail" style="width: 144px; height: 158px; margin-top: 14px; margin-left: 16px; background-color: #EBEBEB;">
                                <?php if ($rn_info->photo): ?>
                                    <img src="<?php echo base_url() . $rn_info->photo; ?>" style="width: 142px; height: 148px; border-radius: 3px;" >  
                                <?php else: ?>
                                    <img src="<?php echo base_url() ?>/img/user.png" alt="Employee_Image">
                                <?php endif; ?>         
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-1">
                            &nbsp;
                        </div>
                        <div class="col-lg-8 col-sm-8 ">
                            <div>
                                <div style="margin-left: 20px;">                                        
                                    <h3><?php echo "$rn_info->first_name " . "$rn_info->last_name"; ?></h3>
                                    <hr />
                                    <table class="table-hover">
                                        <tr>
                                            <td><strong>Employee ID</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo $rn_info->uid ?></td>
                                        </tr>
                                       <!-- <tr>
                                            <td><strong>Department</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo "$employee_info->department_name"; ?></td>
                                        </tr> -->
                                      <!--  <tr>
                                            <td><strong>Designation</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo "$employee_info->designations"; ?></td>
                                        </tr>  -->                                                                              
                                       <!-- <tr>
                                            <td><strong>Joining Date</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo date('d M Y', strtotime($employee_info->joining_date)); ?></td>
                                        </tr> -->                                           
                                    </table>                                                                           
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <!-- ************************ Personal Information Panel Start ************************-->
                    <div class="col-sm-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">Personal Details</h4>
                            </div>
                            <div class="panel-body form-horizontal">                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Date of Birth: </label>
                                    <div class="col-sm-8">
                                        <p class="form-control-static"><?php echo date('d M Y', strtotime($rn_info->date_of_birth)); ?></p>                                                                                          
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Gender:</label>
                                    <div class="col-sm-8">
                                        <p class="form-control-static"><?php echo "$rn_info->gender"; ?></p>                                                                                          
                                    </div>
                                </div>
                              
                                <?php if (!empty($rn_info->nationality)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Nationality : </label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$rn_info->nationality1"; ?></p>                                                                                          
                                        </div>
                                    </div>                                
                                <?php endif; ?>
                                                         
                            </div>            
                        </div>            
                    </div> <!-- ************************ Personal Information Panel End ************************-->       
                    <div class="col-sm-6"><!-- ************************ Contact Details Start******************************* -->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4 class="panel-title">Contact Details</h4>
                                </div>
                            </div>
                            <div class="panel-body form-horizontal">
                                <?php if (!empty($employee_info->email)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Email : </label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$employee_info->email"; ?></p>                                                                                          
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($rn_info->phone)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Phone : </label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$rn_info->phone"; ?></p>                                                                                          
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($rn_info->mobile)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Mobile : </label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$rn_info->mobile"; ?></p>                                                                                          
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($rn_info->present_address)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Address : </label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$rn_info->present_address"; ?></p>                                                                                          
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($rn_info->city)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">City : </label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$rn_info->city"; ?></p>                                                                                          
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
								
								<?php if (!empty($rn_info->service_country1)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Service Area : </label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static">Country:<?php echo "$rn_info->service_country1"; ?></p>  
                                            <p class="form-control-static">County:<?php echo "$rn_info->service_county"; ?></p> 
                                            <p class="form-control-static">State:<?php echo "$rn_info->service_state"; ?></p> 
                                             <p class="form-control-static">City:<?php echo "$rn_info->service_city"; ?></p>   											
                                        </div>
										
                                    </div> 
                                <?php endif; ?>
								
								
                            </div>
                        </div>
                    </div> <!-- ************************ Contact Details End ******************************* -->

                    <div class="col-sm-6 hidden-print"><!-- ************************ Employee Documents Start ******************************* -->
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4 class="panel-title">Printing For Signature</h4>
                                </div>
                            </div>
                            <div class="panel-body form-horizontal">
                                <!-- CV Upload -->                                                                  
                                <?php if (!empty($rn_info->i9_tax)): ?>                                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">I9 Tax : </label>
                                        <div class="col-sm-8">                                                        
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $rn_info->i9_tax; ?>" target="_blank" style="text-decoration: underline;">View</a>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($rn_info->state_of_ack)): ?>                                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Statement of acknowledgement : </label>
                                        <div class="col-sm-8">                                                        
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $rn_info->state_of_ack; ?>" target="_blank" style="text-decoration: underline;">View</a>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($rn_info->back_check)): ?>                                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Background Check : </label>
                                        <div class="col-sm-8">                                                        
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $rn_info->back_check; ?>" target="_blank" style="text-decoration: underline;">View</a>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($rn_info->w4_form)): ?>                                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">W4 Form : </label>
                                        <div class="col-sm-8">                                                        
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $rn_info->w4_form; ?>" target="_blank" style="text-decoration: underline;">View</a>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($rn_info->electronic_signature)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Electronic Signature Policy and Agreement : </label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $rn_info->electronic_signature; ?>" target="_blank" style="text-decoration: underline;">View</a>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                                                                          
                            </div>
                        </div>
                    </div> <!-- ************************ Employee Documents Start ******************************* -->

                    <!-- ************************      Bank Details Start******************************* -->
                    <div class="col-sm-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4 class="panel-title">Employee Documents</h4>
                                </div>
                            </div>
                            <div class="panel-body form-horizontal">                                
                                                        
                               <?php if (!empty($rn_info->resume_id)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" > Resume :</label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$rn_info->resume_id"; ?></p>                                                                                          
                                        </div>
                                    </div>
                                <?php endif; ?>                              
                                <?php if (!empty($rn_info->job_id)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Job Description : </label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$rn_info->job_id"; ?></p>                                                                                          
                                        </div>
                                    </div>
                                <?php endif; ?>                                
                                <?php if (!empty($rn_info->date_of_interview)): ?>
                                   <div class="form-group">
                                    <label class="col-sm-4 control-label">Interview Date: </label>
                                    <div class="col-sm-8">
                                        <p class="form-control-static"><?php echo date('d M Y', strtotime($rn_info->date_of_interview)); ?></p>                                                                                          
                                    </div>
                                </div>
                                <?php endif; ?>
								
								                       
                                <?php if (!empty($rn_info->official_status)): ?>
                                   <div class="form-group">
                                    <label class="col-sm-4 control-label">Official Status: </label>
                                    <div class="col-sm-8">
                                       <p class="form-control-static"><?php echo "$rn_info->official_status"; ?></p>                                                                                           
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                <?php if (!empty($rn_info->medical_history_record)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Medical History Record : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->medical_history_record; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->orientation_checklist)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Orientation Checklist : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->orientation_checklist; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->personnel_action_form)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Personnel Action Form : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->personnel_action_form; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->request_for_time_off)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Request For Time Off Form : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->request_for_time_off; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->hepatitis_vaccine)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Hepatitis Vaccine / Refusal : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->hepatitis_vaccine; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->reference_check)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Reference Check 1 : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->reference_check; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->reference_check1)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Reference Check 2 : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->reference_check1; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->cbc)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Criminal Background check : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->cbc; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->obc)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">OIG Background Check : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->obc; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->other1)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Others1 : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->other1; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				<?php if (!empty($rn_info->other2)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Others2 : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->other2; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				<?php if (!empty($rn_info->other3)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Others3 : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->other3; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->physical_examination_date)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Physical Test : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->physical_examination_date; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->TB_test_date)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">TB Test : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->TB_test_date; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->TB_Questionnaire_date)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">TB Questionnaire Test : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->TB_Questionnaire_date; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->Chest_XRay_Results)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Chest X-Ray Test : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->Chest_XRay_Results; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->Influenza_Immunization)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Influenza Immunization / Refusal date : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->Influenza_Immunization; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->ninety_day_Performance_Evaluation_date)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Performance Evaluation date : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->ninety_day_Performance_Evaluation_date; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->Initial_Competency_Assessment_date)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Competency Assessment date : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->Initial_Competency_Assessment_date; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->automobile_insurance_expires)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Automobile Insurance date : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->automobile_insurance_expires; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->CPR_Card_expires)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">CPR Card expires : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->CPR_Card_expires; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->drivers_license_expires)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Driver’s License expires : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->drivers_license_expires; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->prof_liability_insurance_expires)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Prof Liability Insurance expires : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->prof_liability_insurance_expires; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->professional_license_expires)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Professional License expires : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->professional_license_expires; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if (!empty($rn_info->professional_license_verification)): ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Professional License Verification : </label>
						<div class="col-sm-8">
							<p class="form-control-static">
								<a href="<?php echo base_url() . $rn_info->professional_license_verification; ?>" target="_blank" style="text-decoration: underline;">View</a>
							</p>
						</div>
					</div>
				<?php endif; ?>
                                
                            </div>
                        </div>
                    </div><!-- ************************ Bank Details End ******************************* -->                            
                </div>                
            </div>
        </div>
    </div>
</div>

<!-- RN form   -->


			 <!-- End of rn form -->






<script type="text/javascript">
    function printDiv(printableArea) {
        var printContents = document.getElementById(printableArea).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

