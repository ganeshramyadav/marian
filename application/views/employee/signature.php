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
<script src="<?php echo base_url() ?>asset/js/jSignature.min.noconflict.js" ></script>
<script src="<?php echo base_url() ?>asset/js/flashcanvas.js" ></script>

<div ng-app="myApp"  ng-controller="FormController">

<!--<div class="col-sm-6"> ***** Printing for signature Start ***** -->
<form role="form" id="employee-form" enctype="multipart/form-data" method="post" class="form-horizontal form-groups-bordered">

	<?php

	//echo "<pre>"; print_r($employee_details); echo "</pre>";
	
?>

	 <input type="hidden" name="discipline_id" value="<?php echo $employee_details->discipline_id ?>" class="form-control">
         <input type="hidden" id="mhr_form" name="medical_history_record_form" value='<?php echo $form_info->medical_history_record_form?>'>
         <input type="hidden" id="w4_form" name="w4_form" value='<?php echo $form_info->w4_form?>'>
         <input type="hidden" id="sa_form" name="sa_form" value='<?php echo $form_info->sa_form?>'>
         <input type="hidden" id="oc_form" name="oc_form" value='<?php echo $form_info->oc_form?>'>
         <input type="hidden" id="aes_form" name="aes_form" value='<?php echo $form_info->aes_form?>'>
         <input type="hidden" id="paf_form" name="paf_form" value='<?php echo $form_info->paf_form?>'>
         <input type="hidden" id="bc_form" name="bc_form" value='<?php echo $form_info->bc_form?>'>
         <input type="hidden" id="i9_form" name="i9_form" value='<?php echo $form_info->i9_form?>'>
         <input type="hidden" id="iv_form" name="iv_form" value='<?php echo $form_info->iv_form?>'>
         <input type="hidden" id="rfto_form" name="rfto_form" value='<?php echo $form_info->rfto_form?>'>
         <input type="hidden" id="tb_form" name="tb_form" value='<?php echo $form_info->tb_form?>'>
         <input type="hidden" id="rc_form" name="rc_form" value='<?php echo $form_info->rc_form?>'>
         <input type="hidden" id="rcc_form" name="rcc_form" value='<?php echo $form_info->rcc_form?>'>
         <input type="hidden" id="hv_form" name="hv_form" value='<?php echo $form_info->hv_form?>'>

<div class="col-sm-6">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="panel-title">
				<h4 class="panel-title">Printing For signature</h4>
			</div>
		</div>
		<div class="panel-body">
			 <?php $this->load->view('employee/includes/print_signature.php'); ?>
		</div>
	</div>
</div>

<div class="col-sm-6">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="panel-title">
				<h4 class="panel-title">Upload Important Documents Here</h4>
			</div>
		</div>
		<div class="panel-body">
			<div class="form-group" style="padding:15px;">
	
			<button id="myBtn22" class="btn btn-default btn-file">Upload Important Documents Here</button>
			
			<div id="myModal" class="modal" >
			  <!-- Modal content -->
			  <div class="modal-content">
			        <div class="modal-header">
			          <span class="close">×</span>
			          <h2>Upload Important Documents</h2>
			        </div>
				<div class="modal-body">
					  <?php $this->load->view('employee/includes/employeedocuments.php'); ?>
			        </div>
			      <div class="modal-footer">
			        <h3></h3>
			      </div>
			  </div>
		        </div>
		</div>
	</div>
</div>
	<!-- Upload documents -->

	
<button id="btn_emp_save" type="submit" class="btn btn-primary btn-block">Save & Continue>></button>

</form>

<script>
 
    uid = 0;
	  
	  
	  $("#employee-form").on("submit", function(event) {
					debugger;
                                var s = this;
 				
                              
			if(uid == 0)
			{
				debugger; $('#loadingmessage').show();
	  $.ajax( {
      url: "<?php echo base_url(); ?>employee/dashboard/profile_update/",
      type: 'POST',
      data: new FormData( this),
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
alert(uid);
				 $.ajax( {
      url: "<?php echo base_url(); ?>employee/dashboard/save_discipline/"+uid,
      type: 'POST',
      data: new FormData( this),
      processData: false,
      contentType: false,
	  success:function(data) {  debugger;
              alert(data);
   	    //window.location.href = "<?php echo base_url(); ?>employee/dashboard/profile_edit";
   	    window.location.href = "<?php echo base_url(); ?>employee/dashboard/edit_signature";
	   //  $("#employee-form1").show();
          // $("#employee-form").hide();
	     }
	  });
				
			}
			//event.preventDefault();
			return false;
		
		

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
    $(document).ready(function(evt)
    {
    $("#myModal .close").click(function(e){
     
    $("#myModal").hide();
    
    });
    
	$("#myBtn22").click(function(e){
     
    $("#myModal").show();
		return false;
    });
	
    
    });

	// Get the modal

</script>



</div>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 5; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>	
