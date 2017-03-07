<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<div ng-app="myApp"  ng-controller="FormController">

<form role="form"  id="officestaff-form" method="post" class="form-horizontal form-groups-bordered">    

<div class="row">
        
        
         <!-- ************************ Personal Information Panel Start ************************-->
         
         <input type="hidden" name="officestaff_type" value="<?php echo $officestaff_type; ?>" class="form-control">
         <div class="col-sm-6">
                   <div class="panel panel-info">
                            <div class="panel-heading">
                             <h4 class="panel-title">Personal Details</h4>
                   </div>
                   <div class="panel-body ">
                        
                        <div class="">
                           <label class="control-label" >Designation <span class="required">*</span></label>
                           <input type="text" name="designation_name" ng-model="" class="form-control">
                       </div>
                       
                       <div class="">
                        <label class="control-label" >Person Name<span class="required">*</span></label>
                        <input type="text" name="person_name" ng-model="" class="form-control">
                      </div>
                   </div>
				   
				   
				   

<div id='loadingmessage1' style='display:none;position:absolute;top:50%;left:50%;margin-top:-50px;margin-left:-50px;width:100px;height:100px;'>
                   <img src='http://elumba.com/hrm2/asset/img/demo_wait.gif' class="image1" />
         </div> 

                 <button id="btn_emp_save"  type="submit" class="btn btn-primary btn-block">Submit</button> 
          </div>
</div>
</form>
</div>
<script src="<?php echo base_url(); ?>asset/js/jquery.validate.js" type="text/javascript"></script>
<script>
   var id = 0;
   $("#officestaff-form").validate({
        rules: {
                  designation_name: "required",
                  person_name: "required",            
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
                                
 				
                              
			if(id == 0)
			{
				debugger; $('#loadingmessage').show();
	  $.ajax( {
      url: "<?php echo base_url(); ?>admin/os/save_os/",
      type: 'POST',
      data: new FormData( form ),
      processData: false,
      contentType: false,
	  success:function(data) {  debugger;
            id=data;
	    window.location.href = "<?php echo base_url(); ?>admin/os/officestaff_list/<?php echo $officestaff_type ?>";
	  // $("#employee-form1").show();
          // $("#employee-form").hide();
	  }
	  });
			}
			else{  
              
           $('#loadingmessage').show();
				 $.ajax( {
      url: "<?php echo base_url(); ?>admin/discipline/save_os/"+id,
      type: 'POST',
      data: new FormData( form ),
      processData: false,
      contentType: false,
	  success:function(data) {  debugger;
   	    window.location.href = "<?php echo base_url(); ?>admin/discipline/discipline_list/<?php echo $discipline_id ?>";
	   //  $("#employee-form1").show();
          // $("#employee-form").hide();
	     }
	  });
				
			}
			//event.preventDefault();
			return false;
		
		}

    });
</script>