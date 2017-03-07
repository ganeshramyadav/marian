<?php include_once 'asset/admin-ajax.php'; ?>

<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
<script src="<?php echo base_url() ?>asset/js/bootstrap-multiselect.js"></script>
<link href="<?php echo base_url() ?>asset/css/bootstrap-multiselect.css" rel="stylesheet"/>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6G9NuwDMIOy4XsaSZ3sThm4rAS2Oddkk"></script>
<script src="<?php echo base_url() ?>asset/js/jSignature.min.js" ></script>
<script src="<?php echo base_url() ?>asset/js/jSignature.min.noconflict" ></script>
<script src="<?php echo base_url() ?>asset/js/flashcanvas.js" ></script>


<?php

	//echo "<pre>"; print_r($employee_details); echo "</pre>";
	
?>

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
                                <?php if ($employee_details->photo): ?>
                                    <img src="<?php echo base_url() . $employee_details->photo; ?>" style="width: 142px; height: 148px; border-radius: 3px;" >  
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
                                    <h3><?php echo "$employee_details->first_name " . "$employee_details->last_name"; ?></h3>
                                    <hr />
                                    <table class="table-hover">
                                      <!--  <tr>
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
                                        </tr>  -->                             
                                    </table>                                                                           
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
				
	<!-- user edit details -->	

     <div ng-app="myApp"  ng-controller="FormController">

<form role="form"  id="employee-form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/discipline/save_rn/<?php
if (!empty($employee_details->uid)) {
    echo $employee_details->uid;
}?>"  method="post" class="form-horizontal form-groups-bordered"> 		

                <div class="row">
                    <!-- ************************ Personal Information Panel Start ************************-->
                <input type="hidden" name="discipline_id" value="<?php echo $discipline_id ?>" class="form-control">
                    <div class="col-sm-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">Personal Details</h4>
                            </div>
                            <div class="panel-body form-horizontal">
							
							<!--
								<div class="">
									<label class="control-label" ><?php echo "Select Discipline" ?> <span class="required"> *</span></label>
									<select name="discipline" ng-model="q.discipline" class="form-control" >
										<option value="">Select discipline ...</option>
										<?php foreach ($discipline as $disciplines) : ?>
											<option value="<?php echo $disciplines->discipline_id ?>" <?php
												if (!empty($disciplines->discipline_id)) {
													echo $disciplines->discipline_id == $disciplines->discipline ? 'selected' : '';
												}
												?>><?php echo $disciplines->discipline ?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>
								-->
								<?php
									
								?>
								<div class="">
									<label class="control-label" >Discipline Name <span class="required">*</span></label>
									<input type="text" name="discipline_name" value="<?php echo $discipline->discipline; ?>" class="form-control" disabled>
								</div>
							
								<div class="">
									<label class="control-label" >First Name <span class="required">*</span></label>
									<input type="text" name="first_name" value="<?php echo $employee_details->first_name;?>" class="form-control">
								</div>

								<div class="">
									<label class="control-label" >Last Name<span class="required">*</span></label>
									<input type="text" name="last_name" ng-model="q.last_name" value="<?php echo $employee_details->last_name;?>" class="form-control">
								</div>
								
								<div class="">
									<label class="control-label" >User Name<span class="required">*</span></label>
									<input id="user_name" type="text" name="user_name" ng-model="q.user_name" value="<?php echo $employee_details->user_name;?>" class="form-control">
									<!-- <input type='button' id='check_username_availability' value='Check Availability'>  -->
									<div id='username_availability_result'></div>
								</div>
								
								<div class="">
									<label class="control-label" >Date Of Birth <span class="required"> *</span></label>
									<div class="input-group">
	<input type="text" name="date_of_birth" ng-model="q.date_of_birth" data-date-start-date="06" value="<?php echo $employee_details->date_of_birth;?>" class="form-control datepicker" data-date-format="mm/dd/yyyy" style="z-index:0;">
										<div class="input-group-addon">
											<a href="#"><i class="entypo-calendar"></i></a>
										</div>
									</div>
								</div>
								
								<div class="">
									<label class="control-label" ><?php echo $this->language->from_body()[12][4] ?> <span class="required"> *</span></label>
									<select name="gender" ng-model="q.gender" class="form-control" >
										<option value="">Select Gender ...</option>
										<option value="Male" <?php
										if (!empty($employee_details->gender)) {
											echo $employee_details->gender == 'Male' ? 'selected' : '';
										}
										?>>Male</option>
										<option value="Female" <?php
										if (!empty($employee_details->gender)) {
											echo $employee_details->gender == 'Female' ? 'selected' : '';
										}
										?>>Female</option>
									</select>
								</div>
								
								<div class="">
									<label class="control-label"><?php echo $this->language->from_body()[12][7] ?><span class="required"> *</span></label>
										<select name="nationality[]" id="language-spoken" ng-model="q.nationality" multiple="multiple" class="form-control col-sm-5" >
											<?php foreach ($all_language as $v_language) : ?>
												<option value="<?php echo $v_language->id ?>" <?php
													if (!empty($employee_details->nationality)) {
														echo $v_language->id == $employee_details->nationality ? 'selected' : '';
													}
													?>><?php echo $v_language->language_name ?>
												</option>
											<?php endforeach; ?>
											
									</select>
								</div>
								
								<div class="form-group col-sm-12">
									<label for="field-1" class="control-label"><?php echo $this->language->from_body()[12][9] ?> <span class="required">*</span></label>
									<div class="input-group">     
										<input type="hidden" name="old_path" ng-model="q.old_path" value="<?php
										if (!empty($employee_details->photo_a_path)) {
											echo $employee_details->photo_a_path;
										}
										?>">
										<div class="fileinput fileinput-new" data-provides="fileinput">
											<div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
												<?php if (!empty($employee_details->photo)): ?>
													<img src="<?php echo base_url() . $employee_details->photo; ?>" >  
												<?php else: ?>
													<img src="http://placehold.it/350x260" alt="Please Connect Your Internet">     
												<?php endif; ?>                                 
											</div>
											<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;">
												<input type="file" value="<?php if (!empty($employee_details)) echo base_url() . $employee_details->photo; ?>" name="photo" id="photo" ng-model="q.photo" size="20" />
											</div>
											<div>
												<span class="btn btn-default btn-file">
													<span class="fileinput-new"><input type="file"  name="photo" ng-model="q.photo" size="20" /></span>
													<span class="fileinput-exists">Change</span>    
												</span>
												<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
											</div>
										</div>
										<div id="valid_msg" style="color: #e11221">
										</div>
									</div>
								</div>
								
								<!--   Image signature -->
								<div class="form-group col-sm-12">
									<label for="field-1" class="control-label"><?php echo "e Signature"; ?> <span class="required">*</span></label>
									<div class="form-group">
										<div class="input-group"> 
											<div id="esign" style="height:100px;border: black 1px solid;"></div>
										</div>
									</div>
									<input type="button" id="resetesign" value="Reset">
									<input type="button" id="esignsrc" value="Upload Sign">
									<input type="hidden" id="esignature" name="signature" ng-model="q.signature" value="<?php echo $employee_details->signature;?>">
									<img src="<?php
										if (!empty($employee_details->signature)) {
											echo $employee_details->signature;
										}
										?>" ng-model="q.signature" id="esignsrcval"/>

                                                                   <script>
                                 
				$(document).ready(function(){
					$("#esign").jSignature({ cssclass: "signature", width: 315, height: 100 });
                                      
                                      $("#resetesign").click(function(){
                                           $("#esign").jSignature('reset');
                                       });
                                       $("#esignsrc").click(function(){
                                          var value = $("#esign").jSignature('getData');
                                           $("#esignsrcval").attr("src",value);
                                           $("#esignature").val(value); 
                                           
                                       });
                                        
				  });
    			    </script>

		
									
								</div>
								<!--  End of image signature -->
								
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
								<div class="">
									<label class="control-label" >Address <!-- <span class="required"> *</span> --> </label>
									<textarea id="present"  name="present_address" ng-model="q.present_address" class="form-control"><?php
									// if (!empty($rn_info->present_address)) {
									if (!empty($employee_details->present_address)) {
									// echo $rn_info->present_address;
									echo $employee_details->present_address;
									}
									?></textarea>
								</div> 
								
								<div class="">
								   <label class="control-label" >Service Area<span class="required"> *</span></label>
									<select name="service_country" ng-model="q.service_country" class="form-control col-sm-5" >
										<option value="" >Select Country...</option>
										<?php foreach ($all_country as $v_country) : ?>
											<option value="<?php echo $v_country->idCountry ?>" <?php
											if (!empty($employee_details->service_country)) {
								echo $v_country->idCountry == $employee_details->service_country ? 'selected' : '';
											}
											?>><?php echo $v_country->countryName ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								
								
								<div class="">
									<select name="service_state" ng-model="q.service_state"   class="form-control col-sm-5"  >
										<option value="" >Select State</option>
										<option value="1" <?php if (!empty($employee_details->service_state)) {
								                                        echo 'selected' ;
											}?> >California</option>
									</select>

									<select name="service_county"  ng-model="q.service_county" class="form-control col-sm-5"  class="form-control col-sm-5" id="countyval" onChange="getState();">
										<option value="" >Select County</option>
										<?php foreach ($all_county as $v_county) : ?>
											<option value="<?php echo $v_county->id ?>" <?php
											if (!empty($employee_details->service_county)) {
											echo $v_county->id == $employee_details->service_county ? 'selected' : '';
											}
											?>><?php echo $v_county->name ?></option>
										<?php endforeach; ?>
									</select>

									<select name="service_city[]" id="service_city" ng-model="" multiple="multiple" class="form-control col-sm-5"  >
										<option value="" >Select City</option>
										<?php if(!empty($all_city)){

										foreach ($all_city as $v_city) : ?>
										<option value="<?php echo $v_city->id ?>" <?php
											if (!empty($cityarray)) {
												foreach($cityarray as $city_array){
													echo $v_city->id == $city_array ? 'selected' : '';
												}
											}?>>
											<?php echo $v_city->name ?>
										</option>
						<?php endforeach; } ?>
									</select>
								</div>
								
								<script type="text/javascript">
									function getState() {
										var val = $("#countyval").val();
										$.ajax({
											type: "POST",
											dataType: 'json',
											url: "<?php echo base_url(); ?>employee/dashboard/location_list/",
											data:'id='+val,
											success: function(data){
											
												var htmlvalue = "";
												for (key in data){	debugger;
													var id = data[key].id;
													var name = data[key].name;
													htmlvalue += "<option id='' value='"+ id +"' >"+ name +"</option>";
												}

												$("#service_city").html('');
												$("#service_city").html(htmlvalue);
												 $("#service_city").multiselect('destroy');
												 $("#service_city").multiselect();
											}
										});
									}
								</script>
								
								<div class="">
									<label class="control-label" >Phone No.</label>
									<input type="text" id="phone" name="phone" ng-model="q.phone" value="<?php
									if (!empty($employee_details->phone)) {
									echo $employee_details->phone;
									}
									?>" class="form-control" maxlength="14" placeholder="(XXX) XXX-XXXX"> 
								</div>

								<div class="">
									<label class="control-label" >Secondary Phone No.</label>
									<input type="text" id="mobile" name="mobile" ng-model="q.mobile" value="<?php
									if (!empty($employee_details->mobile)) {
									echo $employee_details->mobile;
									}
									?>" class="form-control" maxlength="14" placeholder="(XXX) XXX-XXXX">
								</div>
								
								<div class="">
									<label class="control-label" >Fax No.</label>
									<input type="text" id="fax" name="fax" ng-model="q.fax" value="<?php
									if (!empty($employee_details->fax)) {
										echo $employee_details->fax;
									}
									?>" class="form-control" maxlength="14" placeholder="(XXX) XXX-XXXX">
								</div>
								
								<div class="">
									<label class="control-label" > Social Security Number </label>
									<input type="text" id="ssn" name="ssn" ng-model="q.ssn" value="<?php
									if (!empty($employee_details->ssn)) {
										echo $employee_details->ssn;
									}
									?>" class="form-control" maxlength="11" placeholder="XXX-XX-XXXX">
								</div>
								
								<div class="">
								   <label class="control-label" >Email <span class="required"> *</span></label>
									<input type="text" name="email" value="<?php echo $employee_details->email;?>"  class="form-control">
								</div>
							</div>
							
                        </div>
                    </div>
					<!-- ************************ Contact Details End ******************************* -->
					<!-- ************************ Employee Documents Start ******************************* -->
					<!--
                    <div class="col-sm-6 hidden-print">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4 class="panel-title">Employee Documents</h4>
                                </div>
                            </div>
                            <div class="panel-body form-horizontal">
                                                                                                 
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Resume : </label>
                                    <div class="col-sm-8"> 
                                        <?php if (!empty($employee_details->resume)): ?>       
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $employee_details->resume; ?>" target="_blank" style="text-decoration: underline;">View Employee Resume</a>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Offer Letter : </label>
                                    <div class="col-sm-8">  
                                        <?php if (!empty($employee_details->offer_letter)): ?> 
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $employee_details->offer_letter; ?>" target="_blank" style="text-decoration: underline;">View Offer Latter</a>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Joining Letter : </label>
                                    <div class="col-sm-8">
                                        <?php if (!empty($employee_details->joining_letter)): ?>  
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $employee_details->joining_letter; ?>" target="_blank" style="text-decoration: underline;">View Joining Letter</a>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Contract Paper : </label>
                                    <div class="col-sm-8"> 
                                        <?php if (!empty($employee_details->contract_paper)): ?>          
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $employee_details->contract_paper; ?>" target="_blank" style="text-decoration: underline;">View Contract Paper</a>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">ID Proff : </label>
                                    <div class="col-sm-8"> 
                                        <?php if (!empty($employee_details->id_proff)): ?>     
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $employee_details->id_proff; ?>" target="_blank" style="text-decoration: underline;">View ID Proff</a>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Other Document : </label>
                                    <div class="col-sm-8"> 
                                        <?php if (!empty($employee_details->other_document)): ?>      
                                            <p class="form-control-static">
                                                <a href="<?php echo base_url() . $employee_details->other_document; ?>" target="_blank" style="text-decoration: underline;">View Other Document</a>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					-->
					<!-- ************************ Employee Documents Start ******************************* -->

                    <!-- ************************      Bank Details Start******************************* -->
					<!--
                    <div class="col-sm-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h4 class="panel-title">Bank Information</h4>
                                </div>
                            </div>
                            <div class="panel-body form-horizontal">                                
                                <?php if (!empty($employee_details->bank_name)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" > Bank Name :</label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$employee_details->bank_name"; ?></p>                                                                                          
                                        </div>
                                    </div>
                                <?php endif; ?>                                
                                <?php if (!empty($employee_details->branch_name)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" >Branch Name :</label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$employee_details->branch_name"; ?></p>                                                                                          
                                        </div>
                                    </div>
                                <?php endif; ?>                                
                                <?php if (!empty($employee_details->account_name)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Account Name : </label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$employee_details->account_name"; ?></p>                                                                                          
                                        </div>
                                    </div>
                                <?php endif; ?>                                
                                <?php if (!empty($employee_details->account_number)): ?>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Account Number : </label>
                                        <div class="col-sm-8">
                                            <p class="form-control-static"><?php echo "$employee_details->account_number"; ?></p>                                                                                          
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
					-->
					<!-- ************************ Bank Details End ******************************* -->                            
                </div>                
            </div>
        </div>
    </div>
</div>

 <div class="col-sm-3 margin pull-right">
<div id='loadingmessage1' style='display:none;position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -50px;
    margin-left: -50px;
    width: 100px;
    height: 100px;'>
                   <img src='http://elumba.com/hrm2/asset/img/demo_wait.gif' class="image1" />
         </div> 

                  <button id="btn_emp" type="submit" class="btn btn-primary btn-block">Save & Continue>></button>
               </div> 
              			   
              
       

</form>
</div>


<script src="<?php echo base_url(); ?>asset/js/jquery.validate.js" type="text/javascript"></script>

<script>
$("#service_city").multiselect(); 
    $('#language-spoken').multiselect();

   
   
 
</script>

<script>
 
    uid = 0;
	  
	  
	  $("#employee-form").validate({
        rules: {
            first_name: "required",
            last_name: "required",            
             user_name: "required",           
            date_of_birth: "required",
            gender: "required",
            
            nationality: "required",            
           
			service_country: "required",
            city: "required",
            country_id: "required",
            mobile: "required",
            email: "required",
            
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
		submitHandler: function(form,event){
					debugger;
                                
 				
                              
			if(uid == 0)
			{
				debugger; $('#loadingmessage').show();
	  $.ajax( {
      url: "<?php echo base_url(); ?>employee/dashboard/profile_update/",
      type: 'POST',
      data: new FormData( form ),
      processData: false,
      contentType: false,
	  success:function(data) {  debugger;
    uid=data;
	    //window.location.href = "<?php echo base_url(); ?>employee/dashboard/profile_edit";
	    window.location.href = "<?php echo base_url(); ?>employee/dashboard/edit_signature";
	  // $("#employee-form1").show();
          // $("#employee-form").hide();
	  }
	  });
			}
			else{  
                   debugger;
           $('#loadingmessage').show();
				 $.ajax( {
      url: "<?php echo base_url(); ?>employee/dashboard/profile_update/"+uid,
      type: 'POST',
      data: new FormData( form ),
      processData: false,
      contentType: false,
	  success:function(data) {  debugger;
   	    //window.location.href = "<?php echo base_url(); ?>employee/dashboard/profile_edit";
   	    window.location.href = "<?php echo base_url(); ?>employee/dashboard/edit_signature";
	   //  $("#employee-form1").show();
          // $("#employee-form").hide();
	     }
	  });
				
			}
			//event.preventDefault();
			return false;
		
		}

    });

     var app = angular.module('myApp', []);
   app.controller('FormController',function($scope){
	debugger;
	    
	
		<?php if(empty($employee_details)) { ?>
               
             $scope.q = new Object();
			 $scope.q.uid =uid;
			 debugger;
		<?php }
		else {   ?>
                      
		      $scope.q = JSON.parse('<?php echo json_encode($employee_details); ?>');
			 
			   uid = $scope.q.uid;

	    <?php	}   ?>
   });


</script>


<script>
   
   $(document).ready(function(evt){ 
      
       $('#phone')

	.keydown(function (e) {
		var key = e.which || e.charCode || e.keyCode || 0;
		$phone = $(this);

    // Don't let them remove the starting '('
    if ($phone.val().length === 1 && (key === 8 || key === 46)) {
			$phone.val('('); 
      return false;
		} 
    // Reset if they highlight and type over first char.
    else if ($phone.val().charAt(0) !== '(') {
			$phone.val('('+String.fromCharCode(e.keyCode)+''); 
		}

		// Auto-format- do not expose the mask as the user begins to type
		if (key !== 8 && key !== 9) {
			if ($phone.val().length === 4) {
				$phone.val($phone.val() + ')');
			}
			if ($phone.val().length === 5) {
				$phone.val($phone.val() + ' ');
			}			
			if ($phone.val().length === 9) {
				$phone.val($phone.val() + '-');
			}
		}

		// Allow numeric (and tab, backspace, delete) keys only
		return (key == 8 || 
				key == 9 ||
				key == 46 ||
				(key >= 48 && key <= 57) ||
				(key >= 96 && key <= 105));	
	})
	
	.bind('focus click', function () {
		$phone = $(this);
		
		if ($phone.val().length === 0) {
			$phone.val('(');
		}
		else {
			var val = $phone.val();
			$phone.val('').val(val); // Ensure cursor remains at the end
		}
	})
	
	.blur(function () {
		$phone = $(this);
		
		if ($phone.val() === '(') {
			$phone.val('');
		}
	});

       $('#mobile')

	.keydown(function (e) {
		var key = e.which || e.charCode || e.keyCode || 0;
		$phone = $(this);

    // Don't let them remove the starting '('
    if ($phone.val().length === 1 && (key === 8 || key === 46)) {
			$phone.val('('); 
      return false;
		} 
    // Reset if they highlight and type over first char.
    else if ($phone.val().charAt(0) !== '(') {
			$phone.val('('+String.fromCharCode(e.keyCode)+''); 
		}

		// Auto-format- do not expose the mask as the user begins to type
		if (key !== 8 && key !== 9) {
			if ($phone.val().length === 4) {
				$phone.val($phone.val() + ')');
			}
			if ($phone.val().length === 5) {
				$phone.val($phone.val() + ' ');
			}			
			if ($phone.val().length === 9) {
				$phone.val($phone.val() + '-');
			}
		}

		// Allow numeric (and tab, backspace, delete) keys only
		return (key == 8 || 
				key == 9 ||
				key == 46 ||
				(key >= 48 && key <= 57) ||
				(key >= 96 && key <= 105));	
	})
	
	.bind('focus click', function () {
		$phone = $(this);
		
		if ($phone.val().length === 0) {
			$phone.val('(');
		}
		else {
			var val = $phone.val();
			$phone.val('').val(val); // Ensure cursor remains at the end
		}
	})
	
	.blur(function () {
		$phone = $(this);
		
		if ($phone.val() === '(') {
			$phone.val('');
		}
	});


    // For SSN 

  $('#ssn')

	.keydown(function (e) {
		var key = e.which || e.charCode || e.keyCode || 0;
		$phone = $(this);

    

		// Auto-format- do not expose the mask as the user begins to type
		if (key !== 8 && key !== 9) {
			if ($phone.val().length === 3) {
				$phone.val($phone.val() + '-');
			}
						
			if ($phone.val().length === 6) {
				$phone.val($phone.val() + '-');
			}
		}

		// Allow numeric (and tab, backspace, delete) keys only
		return (key == 8 || 
				key == 9 ||
				key == 46 ||
				(key >= 48 && key <= 57) ||
				(key >= 96 && key <= 105));	
	})
	
	.bind('focus click', function () {
		$phone = $(this);
		
		if ($phone.val().length === 0) {
			
		}
		else {
			var val = $phone.val();
			$phone.val('').val(val); // Ensure cursor remains at the end
		}
	})
	
	.blur(function () {
		$phone = $(this);
		
	});


	
	
	
	// For Fax
	
	$('#fax')

	.keydown(function (e) {
		var key = e.which || e.charCode || e.keyCode || 0;
		$phone = $(this);

    // Don't let them remove the starting '('
    if ($phone.val().length === 1 && (key === 8 || key === 46)) {
			$phone.val('('); 
      return false;
		} 
    // Reset if they highlight and type over first char.
    else if ($phone.val().charAt(0) !== '(') {
			$phone.val('('+String.fromCharCode(e.keyCode)+''); 
		}

		// Auto-format- do not expose the mask as the user begins to type
		if (key !== 8 && key !== 9) {
			if ($phone.val().length === 4) {
				$phone.val($phone.val() + ')');
			}
			if ($phone.val().length === 5) {
				$phone.val($phone.val() + ' ');
			}			
			if ($phone.val().length === 9) {
				$phone.val($phone.val() + '-');
			}
		}

		// Allow numeric (and tab, backspace, delete) keys only
		return (key == 8 || 
				key == 9 ||
				key == 46 ||
				(key >= 48 && key <= 57) ||
				(key >= 96 && key <= 105));	
	})
	
	.bind('focus click', function () {
		$phone = $(this);
		
		if ($phone.val().length === 0) {
			$phone.val('(');
		}
		else {
			var val = $phone.val();
			$phone.val('').val(val); // Ensure cursor remains at the end
		}
	})
	
	.blur(function () {
		$phone = $(this);
		
		if ($phone.val() === '(') {
			$phone.val('');
		}
	});


   });
  


</script>

<script>
    
     $(document).ready(function() {  
  
        //the min chars for username  
        var min_chars = 3;  
  
        //result texts  
        var characters_error = 'Minimum amount of chars is 3';  
        var checking_html = 'Checking...';  
  
        //when button is clicked  
     //   $('#check_username_availability').click(function(){  
          $('#user_name').keyup(function(){
            //run the character number check  
            if($('#user_name').val().length < min_chars){  
                //if it's bellow the minimum show characters_error text '  
                $('#username_availability_result').html(characters_error);  
            }else{  
                //else show the checking_text and run the function to check  
                $('#username_availability_result').html(checking_html);  
                check_availability();  
            }  
        });  
  
  });  
  
//function to check username availability  
function check_availability(){  
  
        //get the username  
        var username = $('#user_name').val();  
         //use ajax to run the check  
          $.ajax({ 
					url: '<?php echo base_url(); ?>admin/discipline/usernameavailability/'+username ,
					type:'POST',
					success:function(result) 
					{   debugger;
						//if the result is 1  
                if(result == 1){  
                    //show that the username is available  
                    $('#username_availability_result').html('<span style="color:green;"><b>' +username + '</b> is Available</span>');
                }else{  
                    //show that the username is NOT available  
                    $('#username_availability_result').html('<span style="color:red;"><b>' +username + '</b> is not Available</span>');
                    $('#user_name').val(''); 
                }  
						
					}
					
				});
				


        
  
}  

</script>
