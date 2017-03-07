<?php include_once 'asset/admin-ajax.php'; ?>
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<script src="<?php echo base_url() ?>asset/js/jSignature.min.js" ></script>
<script src="<?php echo base_url() ?>asset/js/jSignature.min.noconflict" ></script>
<div class="row">    
    <form role="form" id="update_profile" action="<?php echo base_url(); ?>admin/settings/profile_updated" method="post" class="form-horizontal form-groups-bordered">                        
        <div class="col-sm-6 wrap-fpanel">
            <div class="panel panel-default" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        <strong>Update Profile</strong>
                    </div>                
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label">First Name <span class="required"> *</span></label>
                        <div class="col-sm-7">
                            <input type="text" name="first_name" value="<?php echo $this->session->userdata('first_name'); ?>" class="form-control"  placeholder="Enter Your First Name" />                                
                        </div>
                    </div>                                        
                    <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label">Last Name <span class="required"> *</span></label>
                        <div class="col-sm-7">
                            <input type="text" name="last_name" value="<?php echo $this->session->userdata('last_name'); ?>" class="form-control"  placeholder="Enter Your Last Name" />                                
                        </div>
                    </div>                                        
                    <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label">User Name <span class="required"> *</span></label>
                        <div class="col-sm-7">
                            <input type="text" name="user_name" value="<?php echo $this->session->userdata('user_name'); ?>" class="form-control"  placeholder="Enter Your User Name" />
                        </div>
                    </div>                                                                                                
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-5">
                            <button type="submit" class="btn btn-primary">Update</button>                            
                        </div>
                    </div>   
                </div>            
            </div>
        </div>
    </form>
    <form role="form" id="change_password" action="<?php echo base_url(); ?>admin/settings/set_password" method="post" class="form-horizontal form-groups-bordered">                        
        <div class="col-sm-6 wrap-fpanel">
            <div class="panel panel-default" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        <strong>Change Password</strong>
                    </div>                
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label">Old Password <span class="required"> *</span></label>
                        <div class="col-sm-7">
                            <input type="password" name="old_password" value="" class="form-control"  placeholder="Enter Your Old Password" onchange="check_current_password(this.value)"/>
                            <span id="id_error_msg"><small style="padding-left:10px;color:red;font-size:10px">Your Entered Password Do Not Match !</small></span>
                        </div>
                    </div>                                        
                    <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label">New Password <span class="required"> *</span></label>
                        <div class="col-sm-7">
                            <input type="password" name="new_password" id="new_password" value="" class="form-control"  placeholder="Enter Your New Password"/>
                        </div>
                    </div>                                        
                    <div class="form-group">
                        <label for="field-1" class="col-sm-4 control-label">Confirm Password <span class="required"> *</span></label>
                        <div class="col-sm-7">
                            <input type="password" name="confirm_password" value="" class="form-control"  placeholder="Enter Your Retype Password"/>
                        </div>
                    </div>                                        

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-5">
                            <button type="submit" id="sbtn" class="btn btn-primary">Update</button>                            
                        </div>
                    </div>   
                </div>            
            </div>
            <br/>   
        </div>   
    </form>
</div>   

<div class="row">
    <form role="form" id="e_signature" action="<?php echo base_url(); ?>admin/settings/set_esignature" method="post" class="form-horizontal form-groups-bordered">                        
        <div class="col-sm-6 wrap-fpanel">
            <div class="panel panel-default" data-collapsed="0">
                <div class="panel-heading">
                    <div class="panel-title">
                        <strong>E-Signature</strong>
                    </div>                
                </div>
                <div class="panel-body">

                    <!--   Image signature -->
                      
    <div class="form-group col-sm-12">
         <label for="field-1" class="control-label"><?php echo "e Signature"; ?> <span class="required">*</span></label>
         <div class="form-group" >
			 <div class="input-group"> 
				  <div id="esign" style="height:100px;border: black 1px solid;"></div>
			 </div>
		 </div>
		 <input type="button" id="resetesign" value="Reset">
		 <input type="button" id="esignsrc" value="Upload Sign">
         <input type="hidden" id="esignature" name="signature" ng-model="q.signature" value="<?php echo $admin_info->esignature;?>">
		  <img src="<?php
                                if (!empty($admin_info->esignature)) {
                                    echo $admin_info->esignature;
                                }
                                ?>"  id="esignsrcval"/>		
			    <script>
				 $(document).ready(function(evt){ debugger;
					$("#esign").jSignature();
                                      
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
                              <div class="form-group">
                                   <div class="col-sm-offset-4 col-sm-5">
                                        <button type="submit" class="btn btn-primary">Update</button>                            
                                   </div>
                              </div>

                </div>            
            </div>
            <br/>   
        </div>   
    </form>
    
</div>