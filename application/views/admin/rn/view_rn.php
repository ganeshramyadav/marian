<div class="row">
    <div class="col-sm-12" data-spy="scroll" data-offset="0">                            
        <div class="panel panel-default">            
            <!-- main content -->
            <div class="panel-heading">
                <div class="row">
                    <div  class="col-lg-12 panel-title">
                        <h3 class="col-lg-4 col-md-4 col-sm-4">Nurse Detail</h3>
                        <div class="pull-right">                               
                            <span><?php echo btn_edit('admin/rn/add_rn/' . $rn_info->uid); ?></span>
                            <span><?php echo btn_pdf('admin/rn/make_pdf/' . $rn_info->uid); ?></span>
                            <button class="margin btn-print" type="button" data-toggle="tooltip" title="Print" onclick="printDiv('printableArea')"><?php echo btn_print(); ?></button>                                                              
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
                                            <td><strong>Nurse ID</strong></td>
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
                                                <a href="<?php echo base_url() . $rn_info->i9_tax; ?>" target="_blank" style="text-decoration: underline;">View I9 Tax</a>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($rn_info->state_of_ack)): ?>                                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Statement of acknowledgement : </label>
                                        <div class="col-sm-8">                                                        
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $rn_info->state_of_ack; ?>" target="_blank" style="text-decoration: underline;">View Statement of acknowledgement</a>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($rn_info->back_check)): ?>                                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Background Check : </label>
                                        <div class="col-sm-8">                                                        
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $rn_info->back_check; ?>" target="_blank" style="text-decoration: underline;">View Background Check</a>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($rn_info->w4_form)): ?>                                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">W4 Form : </label>
                                        <div class="col-sm-8">                                                        
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $rn_info->w4_form; ?>" target="_blank" style="text-decoration: underline;">View W4 Form</a>
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
                            </div>
                        </div>
                    </div><!-- ************************ Bank Details End ******************************* -->                            
                </div>                
            </div>
        </div>
    </div>
</div>

<!-- RN form   -->


<div class="row">
     
             <div class="wrap-fpanel">
                   <div class="panel panel-default">
                     <div class="panel-heading">
                              <div class="panel-title">
                                    <strong ><center>INITIAL COMPETENCY ASSESSMENT SKILLS CHECKLIST</center></strong>
                              </div>
                     </div>
                </div>
            </div>
         <div class=""><!-- ************************ Initial Competency******************************* -->
            <div class="panel panel-info">
            
                <div class="panel-heading">
                          <div class="panel-title">
                           <h4 class="panel-title" ><center>REGISTERED NURSE</center></h4>
                         </div>
                </div>
                
             <div class="panel-body ">


					 <div class="row">
							   <div class="col-sm-6">
							   
								  <table>
											  <tr>
												<td style="width:200px;">Name:</td>
												<td><?php echo $info1->first_name;?></td>
												
											  </tr>
											  <tr>
												<td>Date of Employment:</td>
												<td><?php echo $info1->date_of_employment;?></td>
												<tr>
												<td>Date Completed:</td>
												<td><?php echo $info1->date_of_completion;?></td>
											  </tr>
											  
											</table>

									  </div>
					 </div>
             
        <br/>
      <br/>
   
					 <table border="1" cellspacing="0" cellpadding="0"  >
                                         <thead>
                                          <tr>
                                           <th  colspan="2" > <center>Self Assessment</center></th>
                                           <th  width="234" rowspan="2">Competency for the Registered Nurse</th>
                                           <th  rowspan="2">Proficiency Required</th>
                                           <th  rowspan="2">Evaluation Method</th>
                                           <th   width="160" rowspan="2">Competency Validation Indicated by Preceptors Initials and Date</th>
                                         </tr>
                                       
                                       
                                        <tr>
                                           <td >Do you have experience with this skill?</td>
                                           <td >Are you competent performing the following?</td>
                                        </tr>
                                       </thead>

                                      <tbody>
                                        <tr>
                                            <td>
	                                       
                                           </td>
                                         <td>
	                                   
                                       </td>
                                       <td>
                                         <b>A.Demonstrates ability to process paperwork and associated functions necessary to facilitate:</b>

                                      </td>
                                      <td class="text-center">*</td>
                                      <td> &nbsp;</td>
                                      <td> &nbsp;</td>
                                    </tr>



                           <tr>
                               <td>&nbsp;</td>
                               <td>&nbsp;</td>
                                <td>1.Admission to organization</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                           </tr>

                           <tr>
                               <td>
                                           
											   <?php echo $info1->row11;?>
											  
							   </td>
                               <td> 
                                    
										   <?php echo $info1->row12;?>
										  
                               </td>
                                <td>&nbsp;&nbsp;a.Initiates assessment form</td>
                                <td class="text-center">*</td>
                                <td><?php echo $info1->row13; ?></td>
                                <td><?php echo $info1->row14;?></td>
                          </tr>


                           <tr>
                            <td>
                                        
										  <?php echo $info1->row21;?></td>
                            <td>
                                 
										   <?php echo $info1->row22;?></td>

                            <td>&nbsp;&nbsp; b.Initiates care plan based on assessment</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row23;?></td>
                            <td><?php echo $info1->row24;?></td>
                         </tr>
                      

                          <tr>
                            <td>
                              
										  <?php echo $info1->row31;?>
                           </td>
                            <td>
                                 
										   <?php echo $info1->row32;?>
                           </td>
                            <td>&nbsp;&nbsp;c.Knowledge of nursing process</td>
                            <td class="text-center">*</td>
                            <td> <?php echo $info1->row33;?></td>
                            <td><?php echo $info1->row34;?></td>
                         </tr>

                         <tr>
                            <td>
                              
										  <?php echo $info1->row41;?>
										  </td>
                            <td>
                                  
										   <?php echo $info1->row42;?>
                         </td>
                            <td>&nbsp;&nbsp;d.Health history/physical exam</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row43;?></td>
                            <td><?php echo $info1->row44;?></td>
                         </tr>

                         <tr>
                            <td>
                                
										  <?php echo $info1->row51;?>
                           </td>
                            <td>
                              
										  <?php echo $info1->row52;?>
										  
                           </td>
                            <td>&nbsp;&nbsp;e.Development of problem list and care planning</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row53;?></td>
                            <td><?php echo $info1->row54;?></td>
                         </tr>

                       <tr>
                            <td>
                                   
										  <?php echo $info1->row61;?>
                            </td>
                            <td>
                                       	<?php echo $info1->row62;?>
                           </td>
                            <td>&nbsp;&nbsp;f.Conducts complete initial evaluation</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row63;?></td>
                            <td><?php echo $info1->row64;?></td>
                       </tr>

                      <tr>
                            <td>
                                       
										  <?php echo $info1->row71;?>
										  </td>
                            <td>
                                       
										  <?php echo $info1->row72;?>
                           </td>
                            <td>2.Transfer of patient</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row73;?></td>
                            <td><?php echo $info1->row74;?></td>
                     </tr>


                     <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>3.Care coordination/discharge planning</td>
                            <td class="text-center">*</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                    </tr>
                     
                    <tr>
                            <td>
										  <?php echo $info1->row81;?>
							</td>
                            <td>
							 <?php echo $info1->row82;?>
							</td>
                            <td>a.Care planning</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row83;?></td>
                            <td><?php echo $info1->row84;?></td>
                    </tr>

                       <tr>
                            <td><?php echo $info1->row91;?></td>
                            <td><?php echo $info1->row92;?></td>
                            <td>b.Case conference</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row93;?></td>
                            <td><?php echo $info1->row94;?></td>
                         </tr>

                        <tr>
                            <td>
										  <?php echo $info1->row101;?>
										  </td>
                            <td>
										  <?php echo $info1->row102;?>
										  </td>
                            <td>c.60 day summary</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row103;?></td>
                            <td><?php echo $info1->row104;?></td>
                         </tr>
                       
                        <tr>
                            <td> <?php echo $info1->row111;?></td>
                            <td>
							<?php echo $info1->row112;?>
							 </td>
                            <td>d.Case management</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row113;?></td>
                            <td><?php echo $info1->row114;?></td>
                         </tr>
                         
                        <tr>
                            <td><?php echo $info1->row121;?></td>
                            <td><?php echo $info1->row122;?></td>
                            <td>e.Adheres to POC</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row123;?></td>
                            <td><?php echo $info1->row124;?></td>
                         </tr>

                       <tr>
                            <td>
										  <?php echo $info1->row131;?></td>
                            <td><?php echo $info1->row132;?></td>
                            <td>f.Reports and documents key information to physician, DC planner, Case Manager, pharmacist, supervisor</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row133;?></td>
                            <td><?php echo $info1->row134;?></td>
                         </tr>


                         <tr>
                            <td><?php echo $info1->row141;?></td>
                            <td><?php echo $info1->row142;?></td>
                            <td>g.Coordinates community resources</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row143;?></td>
                            <td><?php echo $info1->row144;?></td>
                         </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>4.Documentation</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>


                     <tr>
                            <td>
										  <?php echo $info1->row161;?>
										  </td>
                            <td><?php echo $info1->row162;?></td>
                            <td>a.Medicare guidelines for documentation</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row163;?></td>
                            <td><?php echo $info1->row164;?></td>
                         </tr>

                   <tr>
                            <td><?php echo $info1->row171;?></td>
                            <td><?php echo $info1->row172;?></td>
                            <td>b.Corrections to the clinical record</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row173;?></td>
                            <td><?php echo $info1->row174;?></td>
                         </tr>

                     <tr>
                            <td><?php echo $info1->row181;?></td>
                            <td><?php echo $info1->row182;?></td>
                            <td>c.Accident/incident reports</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row183;?></td>
                            <td><?php echo $info1->row184;?></td>
                     </tr>

                    <tr>
                            <td><?php echo $info1->row191;?></td>
                            <td><?php echo $info1->row192;?></td>
                            <td>d.Clinical notes, flow charts</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row193;?></td>
                            <td><?php echo $info1->row194;?></td>
                     </tr>

                  <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>5.Other</td>
                            <td></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                   </tr>

                   <tr>
                            <td><?php echo $info1->row201;?>
										  </td>
                            <td><?php echo $info1->row202;?></td>
                            <td>a.Supervision of ancillary personnel</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row203;?></td>
                            <td><?php echo $info1->row204;?></td>
                    </tr>

                     <tr>
                            <td><?php echo $info1->row211;?></td>
                            <td><?php echo $info1->row212;?></td>
                            <td>b.Supply requisition and management</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row213;?></td>
                            <td><?php echo $info1->row214;?></td>
                     </tr>

                      <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><b>B.Review of Systems:  Demonstrates ability to obtain and document appropriate age specific history/ assessment for patients in the following categories:</b> </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                     </tr>

                   
                    <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>1.Pulmonary System</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                    </tr>

                   <tr>
                            <td>
										  <?php echo $info1->row221;?>
										  </td>
                            <td><?php echo $info1->row222;?>
							</td>
                            <td>a.Pulmonary Assessment</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row223;?></td>
                            <td><?php echo $info1->row224;?></td>
                   </tr>
                        <tr>
                            <td><?php echo $info1->row231;?></td>
                            <td><?php echo $info1->row232;?></td>
                            <td>b.Tracheostomy care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row233;?></td>
                            <td><?php echo $info1->row234;?></td>
                         </tr>

                        <tr>
                            <td><?php echo $info1->row241;?></td>
                            <td><?php echo $info1->row242;?></td>
                            <td>c.Oxygen administration</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row243;?></td>
                            <td><?php echo $info1->row244;?></td>
                         </tr>

                       <tr>
                            <td><?php echo $info1->row251;?></td>
                            <td><?php echo $info1->row252;?></td>
                            <td>d.Pharyngeal suction</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row253;?></td>
                            <td><?php echo $info1->row254;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row261;?></td>
                            <td><?php echo $info1->row262;?></td>
                            <td>e.Use of oral/nasal inhalers</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row263;?></td>
                            <td><?php echo $info1->row264;?></td>
                         </tr>

                        <tr>
                            <td><?php echo $info1->row271;?></td>
                            <td><?php echo $info1->row272;?></td>
                            <td>f.Oxymeter</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row273;?></td>
                            <td><?php echo $info1->row274;?></td>
                         </tr>

                       <tr>
                            <td><?php echo $info1->row281;?></td>
                            <td><?php echo $info1->row282;?></td>
                            <td>g.CPAP</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row283;?></td>
                            <td><?php echo $info1->row284;?></td>
                         </tr>

                       <tr>
                            <td><?php echo $info1->row291;?></td>
                            <td><?php echo $info1->row292;?></td>
                            <td>h.Oxygen mask, nasal cannula, concentrator, portable oxygen</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row293;?></td>
                            <td><?php echo $info1->row294;?></td>
                         </tr>

                        <tr>
                            <td><?php echo $info1->row301;?></td>
                            <td><?php echo $info1->row302;?></td>
                            <td>i.Airway insertion</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row303;?></td>
                            <td><?php echo $info1->row304;?></td>
                       </tr>


                      <tr>
                            <td><?php echo $info1->row311;?></td>
                            <td><?php echo $info1->row312;?></td>
                            <td>j.SVN/Nebulizer treatment</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row313;?></td>
                            <td><?php echo $info1->row314;?></td>
                     </tr>

                       <tr>
                            <td><?php echo $info1->row321;?></td>
                            <td><?php echo $info1->row322;?></td>
                            <td>k.Home ventilator management</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row323;?></td>
                            <td><?php echo $info1->row324;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row331;?></td>
                            <td><?php echo $info1->row332;?></td>
                            <td>l.Foreign body airway obstruction</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row333;?></td>
                            <td><?php echo $info1->row334;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row341;?></td>
                            <td><?php echo $info1->row342;?></td>
                            <td>m.Breathing exercises/incentive spirometry</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row343;?></td>
                            <td><?php echo $info1->row344;?></td>
                         </tr>

                          <tr>
                            <td><?php echo $info1->row351;?></td>
                            <td><?php echo $info1->row352;?></td>
                            <td>n.Other</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row353;?></td>
                            <td><?php echo $info1->row354;?></td>
                         </tr>

                         <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>2.Cardiovascular System</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row361;?></td>
                            <td><?php echo $info1->row362;?></td>
                            <td>a.Cardiovascular assessment</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row363;?></td>
                            <td><?php echo $info1->row364;?></td>
                         </tr>

                          <tr>
                            <td><?php echo $info1->row371;?></td>
                            <td><?php echo $info1->row372;?></td>
                            <td>b.Pulses(apical, radical, femoral, pedal)</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row373;?></td>
                            <td><?php echo $info1->row374;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row381;?></td>
                            <td><?php echo $info1->row382;?></td>
                            <td>c.Edema assessment and management</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row383;?></td>
                            <td><?php echo $info1->row384;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row391;?></td>
                            <td><?php echo $info1->row392;?></td>
                            <td>d.Supine and orthostatic blood pressure</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row393;?></td>
                            <td><?php echo $info1->row394;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row401;?></td>
                            <td><?php echo $info1->row402;?></td>
                            <td>e.NTG use, inhaler use</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row403;?></td>
                            <td><?php echo $info1->row404;?></td>
                         </tr>

                          <tr>
                            <td><?php echo $info1->row411;?></td>
                            <td><?php echo $info1->row412;?></td>
                            <td>f.CPR</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row413;?></td>
                            <td><?php echo $info1->row414;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row421;?></td>
                            <td><?php echo $info1->row422;?></td>
                            <td>g.Energy conservation techniques</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row423;?></td>
                            <td><?php echo $info1->row424;?></td>
                         </tr>

                        <tr>
                            <td><?php echo $info1->row431;?></td>
                            <td><?php echo $info1->row432;?></td>
                            <td>h.Other</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row433;?></td>
                            <td><?php echo $info1->row434;?></td>
                         </tr>

                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>3.Neurologic System</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>


                         <tr>
                            <td><?php echo $info1->row441;?></td>
                            <td><?php echo $info1->row442;?></td>
                            <td>a.Neurologic assessment</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row443;?></td>
                            <td><?php echo $info1->row444;?></td>
                         </tr>


                          <tr>
                            <td><?php echo $info1->row451;?></td>
                            <td><?php echo $info1->row452;?></td>
                            <td>b.Aphasia care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row453;?></td>
                            <td><?php echo $info1->row454;?></td>
                         </tr>


                        <tr>
                            <td><?php echo $info1->row461;?></td>
                            <td><?php echo $info1->row462;?></td>
                            <td>c.Mental status exam</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row463;?></td>
                            <td><?php echo $info1->row464;?></td>
                         </tr>

                       <tr>
                            <td><?php echo $info1->row471;?></td>
                            <td><?php echo $info1->row472;?></td>
                            <td>d.Seizure precautions</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row473;?></td>
                            <td><?php echo $info1->row474;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row481;?></td>
                            <td><?php echo $info1->row482;?></td>
                            <td>e.Spinal cord injuries care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row483;?></td>
                            <td><?php echo $info1->row484;?></td>
                         </tr>

                         <tr>
						 
                            <td><?php echo $info1->row491;?></td>
                            <td><?php echo $info1->row492;?></td>
                            <td>f.Head injury care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row493;?></td>
                            <td><?php echo $info1->row494;?></td>
                         </tr>

                          <tr>
                            <td><?php echo $info1->row501;?></td>
                            <td><?php echo $info1->row502;?></td>
                            <td>g.Other</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row503;?></td>
                            <td><?php echo $info1->row504;?></td>
                         </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>4.Gastrointestinal System</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

                        <tr>
                            <td><?php echo $info1->row511;?></td>
                            <td><?php echo $info1->row512;?></td>
                            <td>a.Gastrointestinal assessment</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row513;?></td>
                            <td><?php echo $info1->row514;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row521;?></td>
                            <td><?php echo $info1->row522;?></td>
                            <td>b.NG tube insertion/care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row523;?></td>
                            <td><?php echo $info1->row524;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row531;?></td>
                            <td><?php echo $info1->row532;?></td>
                            <td>c.Jejunostomy tube care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row533;?></td>
                            <td><?php echo $info1->row534;?></td>
                         </tr>

                        <tr>
                            <td><?php echo $info1->row541;?></td>
                            <td><?php echo $info1->row542;?></td>
                            <td>d.Gastrostomy tube care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row543;?></td>
                            <td><?php echo $info1->row544;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row551;?></td>
                            <td><?php echo $info1->row552;?></td>
                            <td>e.Enteral feedings</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row553;?></td>
                            <td><?php echo $info1->row554;?></td>
                         </tr>

                        <tr>
                            <td><?php echo $info1->row561;?></td>
                            <td><?php echo $info1->row562;?></td>
                            <td>f.Suction machine(s)</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row563;?></td>
                            <td><?php echo $info1->row564;?></td>
                         </tr>

                        <tr>
                            <td><?php echo $info1->row571;?></td>
                            <td><?php echo $info1->row572;?></td>
                            <td>g.Ostomy care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row573;?></td>
                            <td><?php echo $info1->row574;?></td>
                         </tr>

                       <tr>
                            <td><?php echo $info1->row581;?></td>
                            <td><?php echo $info1->row582;?></td>
                            <td>h.Dysphagia precautions</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row583;?></td>
                            <td><?php echo $info1->row584;?></td>
                         </tr>


                       <tr>
                            <td><?php echo $info1->row591;?></td>
                            <td><?php echo $info1->row592;?></td>
                            <td>i.Impaction removal</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row593;?></td>
                            <td><?php echo $info1->row594;?></td>
                         </tr>


                       <tr>
                            <td><?php echo $info1->row601;?></td>
                            <td><?php echo $info1->row602;?></td>
                            <td>j.Enema</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row603;?></td>
                            <td><?php echo $info1->row604;?></td>
                         </tr>

                        <tr>
                            <td><?php echo $info1->row701;?></td>
                            <td><?php echo $info1->row702;?></td>
                            <td>k.Bowel training</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row703;?></td>
                            <td><?php echo $info1->row704;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row711;?></td>
                            <td><?php echo $info1->row712;?></td>
                            <td>l.Other</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row713;?></td>
                            <td><?php echo $info1->row714;?></td>
                         </tr>

                         <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>5.Genitourinary System</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row721;?></td>
                            <td><?php echo $info1->row722;?></td>
                            <td>a.GU assessment</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row723;?></td>
                            <td><?php echo $info1->row724;?></td>
                         </tr>

                         <tr>
                            <td><?php echo $info1->row731;?></td>
                            <td><?php echo $info1->row732;?></td>
                            <td>b.Urinary catheterization insertion and care (male and female)</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row733;?></td>
                            <td><?php echo $info1->row734;?></td>
                         </tr>


                         <tr>
                            <td><?php echo $info1->row741;?></td>
                            <td><?php echo $info1->row742;?></td>
                            <td>c.Irrigation of catheters</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row743;?></td>
                            <td><?php echo $info1->row744;?></td>
                         </tr>


                          <tr>
                            <td><?php echo $info1->row751;?></td>
                            <td><?php echo $info->row752;?></td>
                            <td>d.Obtaining specimens</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row753;?></td>
                            <td><?php echo $info1->row754;?></td>
                         </tr>


                        <tr>
                            <td><?php echo $info1->row761;?></td>
                            <td><?php echo $info1->row762;?></td>
                            <td>e.Removal of urinary catheter</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row763;?></td>
                            <td><?php echo $info1->row764;?></td>
                         </tr>


                          <tr>
                            <td><?php echo $info1->row771;?></td>
                            <td><?php echo $info1->row772;?></td>
                            <td>f.Care of supra-pubic catheter</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row773;?></td>
                            <td><?php echo $info1->row774;?></td>
                         </tr>


                         <tr>
                            <td><?php echo $info1->row781;?></td>
                            <td><?php echo $info1->row782;?></td>
                            <td>g.Care of urostomy</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row783;?></td>
                            <td><?php echo $info1->row784;?></td>
                         </tr>


                        <tr>
                            <td><?php echo $info1->row791;?></td>
                            <td><?php echo $info1->row792;?></td>
                            <td>h.Bladder training</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row793;?></td>
                            <td><?php echo $info1->row794;?></td>
                         </tr>



                         <tr>
                            <td><?php echo $info1->row801;?></td>
                            <td><?php echo $info1->row802;?></td>
                            <td>i.Nephrostomy tubes</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row803;?></td>
                            <td><?php echo $info1->row804;?></td>
                         </tr>

                          <tr>
                            <td><?php echo $info1->row811;?></td>
                            <td><?php echo $info1->row812;?></td>
                            <td>j.Knowledge of types of catheters and indications for use (straight, indwelling, condom)</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row813;?></td>
                            <td><?php echo $info1->row814;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row821;?></td>
                            <td><?php echo $info1->row822;?></td>
                            <td>k.Ileostomy care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row823;?></td>
                            <td><?php echo $info1->row824;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row831;?></td>
                            <td><?php echo $info1->row832;?></td>
                            <td>l.Incontinence care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row833;?></td>
                            <td><?php echo $info1->row834;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row841;?></td>
                            <td><?php echo $info1->row842;?></td>
                            <td>m.GU post op care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row843;?></td>
                            <td><?php echo $info1->row844;?></td>
                         </tr>



<tr>
                            <td>
								 <?php echo $info1->row851;?>
								 </td>
                            <td><?php echo $info1->row852;?></td>
                            <td>n.Other</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row853;?></td>
                            <td><?php echo $info1->row854;?></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>6.Integumentary/Wounds/Dressings</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td>
										  <?php echo $info1->row861;?>
										  </td>
                            <td><?php echo $info1->row862;?></td>
                            <td>a.Assessment of skin/wound</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row863;?></td>
                            <td><?php echo $info1->row864;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row871;?></td>
                            <td><?php echo $info1->row872;?></td>
                            <td>b.Measurement of wounds</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row873;?></td>
                            <td><?php echo $info1->row874;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row881;?></td>
                            <td><?php echo $info1->row882;?></td>
                            <td>c.Wound irrigation</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row883;?></td>
                            <td><?php echo $info1->row874;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row891;?></td>
                            <td><?php echo $info1->row892;?></td>
                            <td>d.Wet to dry dressing(s)</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row893;?></td>
                            <td><?php echo $info1->row894;?></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>e.Decubitis care:</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row894;?></td>
                            <td><?php echo $info1->row894;?></td>
                            <td>1.Assessment and staging</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row903;?></td>
                            <td><?php echo $info1->row904;?></td>
                         </tr>




<tr>
                            <td><?php echo $info1->row911;?></td>
                            <td><?php echo $info1->row912;?></td>
                            <td>2.Prevention</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row913;?></td>
                            <td><?php echo $info1->row914;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row921;?></td>
                            <td><?php echo $info1->row922;?></td>
                            <td>3.Various treatments (hydrocollid, calcium alginate, transparent films)</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row923;?></td>
                            <td><?php echo $info1->row924;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row931;?></td>
                            <td><?php echo $info1->row932;?></td>
                            <td>4.Documentation/pictures</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row933;?></td>
                            <td><?php echo $info1->row934;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row941;?></td>
                            <td><?php echo $info1->row942;?></td>
                            <td>f.Ace wrap, cast care, compresses</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row943;?></td>
                            <td><?php echo $info1->row944;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row951;?></td>
                            <td><?php echo $info1->row952;?></td>
                            <td>g.Hemovac</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row953;?></td>
                            <td><?php echo $info1->row954;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row961;?></td>
                            <td><?php echo $info1->row962;?></td>
                            <td>h.Sterile dressing change</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row963;?></td>
                            <td><?php echo $info1->row964;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row971;?></td>
                            <td><?php echo $info1->row972;?></td>
                            <td>i.Suture/staple removal</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row973;?></td>
                            <td><?php echo $info1->row974;?></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>7.Musculoskeletal System</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>


<tr>
                            <td><?php echo $info1->row981;?></td>
                            <td><?php echo $info1->row982;?></td>
                            <td>a.Assessment</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row983;?></td>
                            <td><?php echo $info1->row984;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row991;?></td>
                            <td><?php echo $info1->row992;?></td>
                            <td>b.Range of motion (ROM)</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row993;?></td>
                            <td><?php echo $info1->row994;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row1001;?></td>
                            <td><?php echo $info1->row1002;?></td>
                            <td>c.TED hose</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row1003;?></td>
                            <td><?php echo $info1->row1004;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row1101;?></td>
                            <td><?php echo $info1->row1102;?></td>
                            <td>d.Total knee care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row1103;?></td>
                            <td><?php echo $info1->row1104;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row1201;?></td>
                            <td><?php echo $info1->row1202;?></td>
                            <td>e.Total hip care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row1203;?></td>
                            <td><?php echo $info1->row1204;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row1301;?></td>
                            <td><?php echo $info1->row1302;?></td>
                            <td>f.Cast assessment and care</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row1303;?></td>
                            <td><?php echo $info1->row1304;?></td>
                         </tr>
<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>g.Devices:</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row1401;?></td>
                            <td><?php echo $info1->row1402;?></td>
                            <td>1.Walker</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row1403;?></td>
                            <td><?php echo $info1->row1404;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row1501;?></td>
                            <td><?php echo $info1->row1502;?></td>
                            <td>2.Wheelchair</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row1503;?></td>
                            <td><?php echo $info1->row1504;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row1601;?></td>
                            <td><?php echo $info1->row1602;?></td>
                            <td>3.Transfer board</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row1603;?></td>
                            <td><?php echo $info1->row1604;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row1701;?></td>
                            <td><?php echo $info1->row1702;?></td>
                            <td>4.Hoyer lift</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row1703;?></td>
                            <td><?php echo $info1->row1704;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row1801;?></td>
                            <td><?php echo $info1->row1802;?></td>
                            <td>h.Pain assessment</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row1803;?></td>
                            <td><?php echo $info1->row1804;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row1901;?></td>
                            <td><?php echo $info1->row1902;?></td>
                            <td>i.Transfers</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row1903;?></td>
                            <td><?php echo $info1->row1904;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row2001;?></td>
                            <td><?php echo $info1->row2002;?></td>
                            <td>j.Other</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row2003;?></td>
                            <td><?php echo $info1->row2004;?></td>
                         </tr>
<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>8.Pain assessment and management</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>
<tr>
                            <td><?php echo $info1->row2101;?></td>
                            <td><?php echo $info1->row2102;?></td>
                            <td>a.Conducts pain evaluation which includes location, onset, intensity, duration, alleviating factors</td>
                           <td class="text-center">*</td>
                            <td><?php echo $info1->row2103;?></td>
                            <td><?php echo $info1->row2104;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row2201;?></td>
                            <td><?php echo $info1->row2202;?></td>
                            <td>b.Utilizes a pain rating scale to collect data</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row2203;?></td>
                            <td><?php echo $info1->row2204;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row2301;?></td>
                            <td><?php echo $info1->row2302;?></td>
                            <td>c.Knowledgeable about types of pain (neuropathic, viseral, bone, smooth muscle, psychologic)</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row2303;?></td>
                            <td><?php echo $info1->row2304;?></td>
                         </tr>

<tr>
                            <td></td>
                            <td></td>
                            <td>d.Knowledgeable about drug therapies indication and dosing</td>
                            <td></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row2501;?></td>
                            <td><?php echo $info1->row2502;?></td>
                            <td>1.NSAIDS</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row2503;?></td>
                            <td><?php echo $info1->row2504;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row2601;?></td>
                            <td><?php echo $info1->row2602;?></td>
                            <td>2.Steroids</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row2603;?></td>
                            <td><?php echo $info1->row2604;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row2701;?></td>
                            <td><?php echo $info1->row2702;?></td>
                            <td>3.Benzodiazipines</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row2703;?></td>
                            <td><?php echo $info1->row2704;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row2801;?></td>
                            <td><?php echo $info1->row2802;?></td>
                            <td>4.Tricylic antidepressants</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row2803;?></td>
                            <td><?php echo $info1->row2804;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row3001;?></td>
                            <td><?php echo $info1->row3002;?></td>
                            <td>5.Anticonvulsants</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row3003;?></td>
                            <td><?php echo $info1->row3004;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row3101;?></td>
                            <td><?php echo $info1->row3102;?></td>
                            <td>6.Narcotics</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row3103;?></td>
                            <td><?php echo $info1->row3104;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row3201;?></td>
                            <td><?php echo $info1->row3202;?></td>
                            <td>7.Other</td>
                            <td></td>
                            <td><?php echo $info1->row3203;?></td>
                            <td><?php echo $info1->row3204;?></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>e.Non-pharmacologic methods:</td>
                            <td></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>


<tr>
                            <td><?php echo $info1->row3301;?></td>
                            <td><?php echo $info1->row3302;?></td>
                            <td>1.Relaxation (guided imagery, meditation, massage)</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row3303;?></td>
                            <td><?php echo $info1->row3304;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row3401;?></td>
                            <td><?php echo $info1->row3402;?></td>
                            <td>2.Psychologic (biofeedback, therapy)</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row3403;?></td>
                            <td><?php echo $info1->row3404;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row3501;?></td>
                            <td><?php echo $info1->row3502;?></td>
                            <td>3.Neurologic (TENS)</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row3503;?></td>
                            <td><?php echo $info1->row3504;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row3601;?></td>
                            <td><?php echo $info1->row3602;?></td>
                            <td>4.Ice/heat</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row3603;?></td>
                            <td><?php echo $info1->row3604;?></td>
                         </tr>



<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>f.Patient/family teaching</td>
                            <td></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>


<tr>
                            <td><?php echo $info1->row3701;?></td>
                            <td><?php echo $info1->row3702;?></td>
                            <td>1.Drug use, side effects</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row3703;?></td>
                            <td><?php echo $info1->row3704;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row3801;?></td>
                            <td><?php echo $info1->row3802;?></td>
                            <td>2.Management of constipation</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row3803;?></td>
                            <td><?php echo $info1->row3804;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row3901;?></td>
                            <td><?php echo $info1->row3902;?></td>
                            <td>3.Addiction vs. tolerance</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row3903;?></td>
                            <td><?php echo $info1->row3904;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row4001;?></td>
                            <td><?php echo $info1->row4002;?></td>
                            <td>4.Other</td>
                            <td ></td>
                            <td><?php echo $info1->row4003;?></td>
                            <td><?php echo $info1->row4004;?></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>9.Metabolic</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row4101;?></td>
                            <td><?php echo $info1->row4102;?></td>
                            <td>a.Assessment</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row4103;?></td>
                            <td><?php echo $info1->row4104;?></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>b.Diabetic assessment and teaching</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row4201;?></td>
                            <td><?php echo $info1->row4202;?></td>
                            <td>1.Insulin types and teaching</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row4203;?></td>
                            <td><?php echo $info1->row4204;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row4301;?></td>
                            <td><?php echo $info1->row4302;?></td>
                            <td>2.Use, care and teaching of glucose monitoring system</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row4303;?></td>
                            <td><?php echo $info1->row4304;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row4401;?></td>
                            <td><?php echo $info1->row4402;?></td>
                            <td>3.Diet, exercise and sick day teaching</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row4403;?></td>
                            <td><?php echo $info1->row4404;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row4501;?></td>
                            <td><?php echo $info1->row4502;?></td>
                            <td>4.Signs and symptoms of Hypo-Hyperglycemic reactions</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row4503;?></td>
                            <td><?php echo $info1->row4504;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row4601;?></td>
                            <td><?php echo $info1->row4602;?></td>
                            <td>5.Foot and skin care</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row4603;?></td>
                            <td><?php echo $info1->row4604;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row4701;?></td>
                            <td><?php echo $info1->row4702;?></td>
                            <td>c.Coumadin therapy</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row4703;?></td>
                            <td><?php echo $info1->row4604;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row4801;?></td>
                            <td><?php echo $info1->row4802;?></td>
                            <td>d.Other</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row4803;?></td>
                            <td><?php echo $info1->row4804;?></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>10.Behavioral Assessment</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>
<tr>
                            <td><?php echo $info1->row4901;?></td>
                            <td><?php echo $info1->row4902;?></td>
                            <td>a.Psychosocial Status</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row4903;?></td>
                            <td><?php echo $info1->row4904;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row5001;?></td>
                            <td><?php echo $info1->row5002;?></td>
                            <td>b.Suicide precautions</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row5003;?></td>
                            <td><?php echo $info1->row5004;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row5101;?></td>
                            <td><?php echo $info1->row5102;?></td>
                            <td>c.Psychotropic drugs</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row5103;?></td>
                            <td><?php echo $info1->row5104;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row5201;?></td>
                            <td><?php echo $info1->row5202;?></td>
                            <td>d.Care of the demented patient</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row5203;?></td>
                            <td><?php echo $info1->row5204;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row5301;?></td>
                            <td><?php echo $info1->row5302;?></td>
                            <td>e.Other</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row5303;?></td>
                            <td><?php echo $info1->row5304;?></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>11.Miscellaneous Skills</td>
                            <td class="text-center">*</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

                        <tr>
                            <td><?php echo $info1->row5403;?></td>
                            <td><?php echo $info1->row5404;?></td>
                            <td>a.Vital signs</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row5403;?></td>
                            <td><?php echo $info1->row5404;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row5501;?></td>
                            <td><?php echo $info1->row5502;?></td>
                            <td>b.Intake and output</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row5503;?></td>
                            <td><?php echo $info1->row5504;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row5601;?></td>
                            <td><?php echo $info1->row5602;?></td>
                            <td>c.Caring for immuno-compromised patients</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row5603;?></td>
                            <td><?php echo $info1->row5604;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row5701;?></td>
                            <td><?php echo $info1->row5702;?></td>
                            <td>d.eye/ear irrigation</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row5703;?></td>
                            <td><?php echo $info1->row5704;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row5801;?></td>
                            <td><?php echo $info1->row5802;?></td>
                            <td>e.Post mortem care</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row5803;?></td>
                            <td><?php echo $info1->row5804;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row5901;?></td>
                            <td><?php echo $info1->row5902;?></td>
                            <td>f.Collection, labeling and delivering laboratory specimens (blood, urine, sputum, wound, stool)</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row5903;?></td>
                            <td><?php echo $info1->row5904;?></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>g.Concepts of death and dying</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row6001;?></td>
                            <td><?php echo $info1->row6002;?></td>
                            <td>1.Normal vs. abnormal</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row6003;?></td>
                            <td><?php echo $info1->row6004;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row6101;?></td>
                            <td><?php echo $info1->row6102;?></td>
                            <td>2.Cultural attitudes toward death</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row6103;?></td>
                            <td><?php echo $info1->row6104;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row6201;?></td>
                            <td><?php echo $info1->row6202;?></td>
                            <td>3.Values of patient/family</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row6203;?></td>
                            <td><?php echo $info1->row6204;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row6301;?></td>
                            <td><?php echo $info1->row6302;?></td>
                            <td>4.Denial and coping mechanisms</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row6303;?></td>
                            <td><?php echo $info1->row6304;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row6401;?></td>
                            <td><?php echo $info1->row6402;?></td>
                            <td>5.Grief and family, children and others</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row6403;?></td>
                            <td><?php echo $info1->row6404;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row6501;?></td>
                            <td><?php echo $info1->row6502;?></td>
                            <td>6.Anticipatory grief</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row6503;?></td>
                            <td><?php echo $info1->row6504;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row6601;?></td>
                            <td><?php echo $info1->row6602;?></td>
                            <td>7.Other</td>
                            <td ></td>
                            <td><?php echo $info1->row6603;?></td>
                            <td><?php echo $info1->row6604;?></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><b>C.Medication Administration:  Demonstrates ability to administer, monitor and document medications for patients.</b>
</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>1.Medication Administration Techniques</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row6701;?></td>
                            <td><?php echo $info1->row6702;?></td>
                            <td>a.Oral</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row6703;?></td>
                            <td><?php echo $info1->row6704;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row6801;?></td>
                            <td><?php echo $info1->row6802;?></td>
                            <td>b.Intra muscular</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row6803;?></td>
                            <td><?php echo $info1->row6804;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row6901;?></td>
                            <td><?php echo $info1->row6902;?></td>
                            <td>c.Intravenous-bolus/push</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row6903;?></td>
                            <td><?php echo $info1->row6904;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row7001;?></td>
                            <td><?php echo $info1->row7002;?></td>
                            <td>d.Subcutaneous</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row7003;?></td>
                            <td><?php echo $info1->row7004;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row7101;?></td>
                            <td><?php echo $info1->row7102;?></td>
                            <td>e.Total Parenteral Nutrition</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row7103;?></td>
                            <td><?php echo $info1->row7104;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row7201;?></td>
                            <td><?php echo $info1->row7202;?></td>
                            <td>f.Suppositories</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row7203;?></td>
                            <td><?php echo $info1->row7204;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row7301;?></td>
                            <td><?php echo $info1->row7302;?></td>
                            <td>g.Ear, eye, nose drops</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row7303;?></td>
                            <td><?php echo $info1->row7304;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row7401;?></td>
                            <td><?php echo $info1->row7402;?></td>
                            <td>h.Heparin administration</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row7403;?></td>
                            <td><?php echo $info1->row7404;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row7501;?></td>
                            <td><?php echo $info1->row7502;?></td>
                            <td>i.Insulin administration, site rotation</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row7503;?></td>
                            <td><?php echo $info1->row7504;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row7601;?></td>
                            <td><?php echo $info1->row7602;?></td>
                            <td>j.Assessment for side effects, adverse reactions, therapeutic response</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row7603;?></td>
                            <td><?php echo $info1->row7604;?></td>
                         </tr>
<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>2.Intravenous Therapy</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>
<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>a.Technique and care of:</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>
<tr>
                            <td><?php echo $info1->row7701;?></td>
                            <td><?php echo $info1->row7702;?></td>
                            <td>1.Venipuncture</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row7703;?></td>
                            <td><?php echo $info1->row7704;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row7801;?></td>
                            <td><?php echo $info1->row7802;?></td>
                            <td>2.Butterfly</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row7803;?></td>
                            <td><?php echo $info1->row7804;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row7901;?></td>
                            <td><?php echo $info1->row7902;?></td>
                            <td>3.Over the needle catheter</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row7903;?></td>
                            <td><?php echo $info1->row7904;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row8001;?></td>
                            <td><?php echo $info1->row8002;?></td>
                            <td>4.Regulation of IV flow rate, use of infusion pumps</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row8003;?></td>
                            <td><?php echo $info1->row8004;?></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>b.Other</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>3.Central Venous Access Devices</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row8101;?></td>
                            <td><?php echo $info1->row8102;?></td>
                            <td>a.Drawing blood from</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row8103;?></td>
                            <td><?php echo $info1->row8104;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row8201;?></td>
                            <td><?php echo $info1->row8202;?></td>
                            <td>b.Site care</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row8203;?></td>
                            <td><?php echo $info1->row8204;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row8301;?></td>
                            <td><?php echo $info1->row8302;?></td>
                            <td>c.Flushing</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row8303;?></td>
                            <td><?php echo $info1->row8304;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row8401;?></td>
                            <td><?php echo $info1->row8402;?></td>
                            <td>d.Cap change</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row8403;?></td>
                            <td><?php echo $info1->row8404;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row8501;?></td>
                            <td><?php echo $info1->row8502;?></td>
                            <td>e.Needleless system</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row8503;?></td>
                            <td><?php echo $info1->row8504;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row8601;?></td>
                            <td><?php echo $info1->row8602;?></td>
                            <td>f.Other</td>
                            <td>&nbsp;</td>
                            <td><?php echo $info1->row8603;?></td>
                            <td><?php echo $info1->row8604;?></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><b>D.Infection Control</b></td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row8701;?></td>
                            <td><?php echo $info1->row8702;?></td>
                            <td>1.Hand washing technique</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row8703;?></td>
                            <td><?php echo $info1->row8704;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row8801;?></td>
                            <td><?php echo $info1->row8802;?></td>
                            <td>2.Aseptic technique</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row8803;?></td>
                            <td><?php echo $info1->row8804;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row8901;?></td>
                            <td><?php echo $info1->row8902;?></td>
                            <td>3.Proper bag technique</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row8903;?></td>
                            <td><?php echo $info1->row8904;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row9001;?></td>
                            <td><?php echo $info1->row9002;?></td>
                            <td>4.Safe needle technique</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row9003;?></td>
                            <td><?php echo $info1->row9004;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row9101;?></td>
                            <td><?php echo $info1->row9102;?></td>
                            <td>5.Personal protective equipmentr</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row9103;?></td>
                            <td><?php echo $info1->row9104;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row9201;?></td>
                            <td><?php echo $info1->row9202;?></td>
                            <td>6.Exposure control plan</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row9203;?></td>
                            <td><?php echo $info1->row9204;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row9301;?></td>
                            <td><?php echo $info1->row9302;?></td>
                            <td>7.TB exposure control plan</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row9303;?></td>
                            <td><?php echo $info1->row9304;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row9401;?></td>
                            <td><?php echo $info1->row9402;?></td>
                            <td>8.Reporting of infections for patient and personnel</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row9403;?></td>
                            <td><?php echo $info1->row9404;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row9501;?></td>
                            <td><?php echo $info1->row9502;?></td>
                            <td>9.Standard precautions</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row9503;?></td>
                            <td><?php echo $info1->row9504;?></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><b>E.Equipment</b></td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>1.Displays knowledge of the following</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row9601;?></td>
                            <td><?php echo $info1->row9602;?></td>
                            <td>a.Electric bed</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row9603;?></td>
                            <td><?php echo $info1->row9604;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row9701;?></td>
                            <td><?php echo $info1->row9702;?></td>
                            <td>b.Special beds</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row9703;?></td>
                            <td><?php echo $info1->row9704;?></td>
                         </tr>
<tr>
                            <td><?php echo $info1->row9801;?></td>
                            <td><?php echo $info1->row9802;?></td>
                            <td>c.Alternating pressure mattress</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row9803;?></td>
                            <td><?php echo $info1->row9804;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row9901;?></td>
                            <td><?php echo $info1->row9902;?></td>
                            <td>d.Infusion pumps</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row9903;?></td>
                            <td><?php echo $info1->row9904;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row10001;?></td>
                            <td><?php echo $info1->row10002;?></td>
                            <td>e.Ambulatory infusion devices</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row10003;?></td>
                            <td><?php echo $info1->row10004;?></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>2.Home Glucose Monitoring:</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row10011;?></td>
                            <td><?php echo $info1->row10012;?></td>
                            <td>a.Verbalizes purpose of test</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row10013;?></td>
                            <td><?php echo $info1->row10014;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row10021;?></td>
                            <td><?php echo $info1->row10022;?></td>
                            <td>b.Specimen collection</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row10023;?></td>
                            <td><?php echo $info1->row10024;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row10031;?></td>
                            <td><?php echo $info1->row10032;?></td>
                            <td>c.Instrument calibration</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row10033;?></td>
                            <td><?php echo $info1->row10034;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row10041;?></td>
                            <td><?php echo $info1->row10042;?></td>
                            <td>d.Quality control process</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row10043;?></td>
                            <td><?php echo $info1->row10044;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row10051;?></td>
                            <td><?php echo $info1->row10052;?></td>
                            <td>e.Test correctly performed and interpreted</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row10053;?></td>
                            <td><?php echo $info1->row10054;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row10061;?></td>
                            <td><?php echo $info1->row10062;?></td>
                            <td>3.Other</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row10063;?></td>
                            <td><?php echo $info1->row10064;?></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><b>F.Safety</b></td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row10071;?></td>
                            <td><?php echo $info1->row10072;?></td>
                            <td>1.Restraints, indications and policy</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row10073;?></td>
                            <td><?php echo $info1->row10074;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row10081;?></td>
                            <td><?php echo $info1->row10082;?></td>
                            <td>2.Fire extinguishers</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row10083;?></td>
                            <td><?php echo $info1->row10084;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row10084;?></td>
                            <td><?php echo $info1->row10084;?></td>
                            <td>3.Emergency preparedness</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row10084;?></td>
                            <td><?php echo $info1->row10084;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row100101;?></td>
                            <td><?php echo $info1->row100102;?></td>
                            <td>4.Hazardous materials</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row100103;?></td>
                            <td><?php echo $info1->row100104;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row100111;?></td>
                            <td><?php echo $info1->row100112;?></td>
                            <td>5.Assessment of patient safety risks and home safety</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row100113;?></td>
                            <td><?php echo $info1->row100114;?></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><b>G.Patient Education</b></td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>


<tr>
                            <td><?php echo $info1->row100121;?></td>
                            <td><?php echo $info1->row100122;?></td>
                            <td>1.Determine patient and family learning needs</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row100123;?></td>
                            <td><?php echo $info1->row100124;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row100131;?></td>
                            <td><?php echo $info1->row100132;?></td>
                            <td>2.Sets measurable objectives</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row100133;?></td>
                            <td><?php echo $info1->row100134;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row100141;?></td>
                            <td><?php echo $info1->row100142;?></td>
                            <td>3.Develops/implements teaching plan</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row100143;?></td>
                            <td><?php echo $info1->row100144;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row100151;?></td>
                            <td><?php echo $info1->row100152;?></td>
                            <td>4.Evaluates effectiveness of teaching</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row100153;?></td>
                            <td><?php echo $info1->row100154;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row100161;?></td>
                            <td><?php echo $info1->row100162;?></td>
                            <td>5.Revises teaching plan based on patient needs</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row100163;?></td>
                            <td><?php echo $info1->row100164;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row100171;?></td>
                            <td><?php echo $info1->row100172;?></td>
                            <td>6.Documents response to teaching</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row100173;?></td>
                            <td><?php echo $info1->row100174;?></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>7.Provides instruction in the following:</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row100181;?></td>
                            <td><?php echo $info1->row100182;?></td>
                            <td>a.Emergency care</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row100183;?></td>
                            <td><?php echo $info1->row100184;?></td>
                         </tr>

<tr>
                            <td><?php echo $info1->row100191;?></td>
                            <td><?php echo $info1->row100192;?></td>
                            <td>b.Diet and nutrition</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row100193;?></td>
                            <td><?php echo $info1->row100194;?></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>c.Medications</td>
                            <td class="text-center">*</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><?php echo $info1->row100201;?></td>
                            <td><?php echo $info1->row100202;?></td>
                            <td>1.Route, dosage, frequency, side effects, adverse reactions, safe storage, labeling, indications, drug/food interactions, home monitoring program, therapeutic blood levels</td>
                            <td class="text-center">*</td>
                            <td><?php echo $info1->row100203;?></td>
                            <td><?php echo $info1->row100204;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row100211;?></td>
                            <td><?php echo $info1->row100212;?></td>
                            <td>8.Provides instruction about advance directives and patient rights</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row100194;?></td>
                            <td><?php echo $info1->row100194;?></td>
                         </tr>


<tr>
                            <td><?php echo $info1->row100221;?></td>
                            <td><?php echo $info1->row100222;?></td>
                            <td>9.Other</td>
                            <td >&nbsp;</td>
                            <td><?php echo $info1->row100223;?></td>
                            <td><?php echo $info1->row100224;?></td>
                         </tr>
						 

                     
         </tbody>

       </table>
									                       
              </div>
              
              </div>
              </div>
              
             </div> 
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

