<div class="col-md-12">
    <div class="row">
        <div class="col-sm-12" data-spy="scroll" data-offset="0">                            
            <div class="panel panel-info">            
                <!-- main content -->
                <div class="panel-heading">
                    <div class="row">
                        <div  class="col-lg-12 panel-title">
                            <strong>Your Personal Profile</strong><span class="pull-right"><a onclick="history.go(-1);" class="view-all-front">Go Back</a></span>                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 well-user-profile">
                    <div class="row">                            
                        <div class="col-lg-2 col-sm-2">
                            <div class="fileinput-new thumbnail" style="width: 144px; height: 158px; margin-top: 14px; margin-left: 16px; background-color: #EBEBEB;">
                                <?php if (!empty($employee_details->photo)){ ?>
                                    <img src="<?php echo base_url() . $employee_details->photo; ?>" style="width: 142px; height: 148px; border-radius: 3px;" >  
                                <?php }else{ ?>
                                    <img src="http://elumba.com/hrm2/asset/img/user.jpg" alt="Employee_Image">
                                <?php }; ?>         
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-1">
                            &nbsp;
                        </div>
                        <div class="col-lg-8 col-sm-8 ">
                            <div>
                                <div style="margin-left: 20px;">                                        
                                    <h3><?php echo "$employee_details->first_name " . "$employee_details->last_name"; ?></h3>
                                    <hr />
                                    <table class="table-">
                                    <!--
                                    <table class="table-hover">
                                    
                                        <tr>
                                            <td><strong>Employee ID</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo $employee_details->employment_id ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Department</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo "$employee_details->department_name"; ?></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Designation</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo "$employee_details->designations"; ?></td>
                                        </tr>
                                       
                                        <tr>
                                            <td><strong>Joining Date</strong></td>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                            <td><?php echo date('d M Y', strtotime($employee_details->joining_date)); ?></td>
                                        </tr>     -->                                       
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
                                    <label class="col-sm-4 control-label">User Name : </label>
                                    <div class="col-sm-8">
                                        <?php if (!empty($employee_details->user_name)): ?>
                                            <p class="form-control-static"><?php echo "$employee_details->user_name"; ?></p>                                                                                          
                                        <?php endif; ?>
                                    </div>
                                </div> 
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Date of Birth: </label>
                                    <div class="col-sm-8">
                                        <p class="form-control-static"><?php echo date('d M Y', strtotime($employee_details->date_of_birth)); ?></p>                                                                                          
                                    </div>
                                </div>
                                
                                <?php 
                                
                                	// echo "<pre>"; print_r($employee_details); echo "</pre>";
                                
                                ?>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Gender:</label>
                                    <div class="col-sm-8">
                                        <p class="form-control-static"><?php echo "$employee_details->gender"; ?></p>                                                                                          
                                    </div>
                                </div>
                             <!--   <div class="form-group">
                                    <label class="col-sm-4 control-label">Maratial Status:</label>
                                    <div class="col-sm-8">
                                        <p class="form-control-static"><?php echo "$employee_details->maratial_status"; ?></p>                                                                                          
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Fathers Name: </label>
                                    <div class="col-sm-8">
                                        <p class="form-control-static"><?php echo "$employee_details->father_name"; ?></p>                                                                                          
                                    </div>
                                </div>  -->
                                
                                <?php foreach($all_language As $language){  ?>

                              <!--  <div class="form-group">
                                    <label class="col-sm-4 control-label">Language : </label>
                                    <div class="col-sm-8"> -->
                                        <?php if (!empty($employee_details->nationality)): ?>
                                            <p class="form-control-static"><?php// echo $language->language_name ; ?></p>                                                                                          
                                        <?php endif; ?>
                                 <!--   </div>
                                </div> -->
                                <?php } ?>
                                
                                <?php if (!empty($employee_details->ssn)): ?>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">SSN:</label>
                                    <div class="col-sm-8">
                                        <p class="form-control-static"><?php echo "$employee_details->ssn"; ?></p>                                                                                          
                                    </div>
                                </div>
                                <?php endif; ?>


                             <!--   <div class="form-group">
                                    <label class="col-sm-4 control-label">Passport Number: </label>
                                    <div class="col-sm-8">
                                        <?php if (!empty($employee_details->passport_number)): ?>
                                            <p class="form-control-static"><?php echo "$employee_details->passport_number"; ?></p>                                                                                          
                                        <?php endif; ?>                                
                                    </div>
                                </div>   -->                             

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
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Email : </label>
                                    <div class="col-sm-8">
                                        <?php if (!empty($employee_details->email)): ?>
                                            <p class="form-control-static"><?php echo "$employee_details->email"; ?></p>  
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Phone : </label>
                                    <div class="col-sm-8">
                                        <?php if (!empty($employee_details->phone)): ?>
                                            <p class="form-control-static"><?php echo "$employee_details->phone"; ?></p>  
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Mobile : </label>
                                    <div class="col-sm-8">
                                        <?php if (!empty($employee_details->mobile)): ?>
                                            <p class="form-control-static"><?php echo "$employee_details->mobile"; ?></p>  
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Address : </label>
                                    <div class="col-sm-8">
                                        <?php if (!empty($employee_details->present_address)): ?>
                                            <p class="form-control-static"><?php echo "$employee_details->present_address"; ?></p>   
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                
                                <?php if (!empty($employee_details->city)): ?>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">City : </label>
                                    <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$employee_details->city"; ?></p>
                                    </div>
                                </div>
                                <?php endif; ?>
                                
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Country : </label>
                                    <div class="col-sm-8">
                                        <?php if (!empty($employee_details->service_country)): ?>
                                            <p class="form-control-static"><?php echo "United States"; ?></p> 
                                        <?php endif; ?>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> <!-- ************************ Contact Details End ******************************* -->

                  
                                            
                </div>                
            </div>
        </div>
    </div>
</div>



