<?php include_once 'asset/admin-ajax.php'; ?>

<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
<script src="<?php echo base_url() ?>asset/js/bootstrap-multiselect.js"></script>
<link href="<?php echo base_url() ?>asset/css/bootstrap-multiselect.css" rel="stylesheet"/>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6G9NuwDMIOy4XsaSZ3sThm4rAS2Oddkk"></script>

<div ng-app="myApp"  ng-controller="FormController">

<form role="form" id="employee-form" action="<?php echo base_url() ?>super/agency/save_agency/<?php
if (!empty($agency_info->user_id)) {
    echo $agency_info->user_id;
}?>"  method="post" class="form-horizontal form-groups-bordered">    

	<div class="row">
        <?php
		
			// echo "<pre>"; print_r($agency_info); echo "</pre>";
			// echo $agency_info->user_id;
		?>
        
         <!-- ************************ Personal Information Panel Start ************************-->
<!--         
		<input type="hidden" name="discipline_id" value="2" class="form-control">
		<input type="hidden" name="agency_id" value="<?php echo $rn_info->user_id; ?>" class="form-control">
-->
		<div class="col-sm-12">
            <div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="panel-title">Branch Details</h4>
				</div>
				<div class="panel-body ">
                        
					<div class="">
						<label class="control-label" >First Name <span class="required">*</span></label>
						<input type="text" name="f_name" ng-model="q.f_name" class="form-control">
					</div>

					<div class="">
						<label class="control-label" >Last Name<span class="required">*</span></label>
						<input type="text" name="l_name" ng-model="q.l_name" class="form-control">
					</div>
					
					<div class="">
						<label class="control-label" >User Name<span class="required">*</span></label>
						<input type="text" name="user_name" ng-model="q.user_name" class="form-control">
					</div>
					<?php
					if(empty($agency_info->user_id)){ ?>
					<div class="">
						<label class="control-label" >Password<span class="required">*</span></label>
						<input type="text" name="password" ng-model="q.password" class="form-control">
					</div>
					<?php	}	?>
					
					<div class="">
						<label class="control-label" >Agency Name<span class="required">*</span></label>
						<input type="text" name="admin_name" ng-model="q.admin_name" class="form-control">
					</div>
                    
					<div class="">
						<select name="flag" ng-model="q.flag" class="form-control col-sm-5">
							<option value="" >Select Status</option>
							<option value="1" >Deactive</option>
							<option value="2" >Active</option>
							<option value="3" >Pending</option>
						</select>
					</div>

			 
					<div class="col-sm-3 margin pull-right">
						<div id='loadingmessage' style='display:none;position: absolute;
							top: 50%;
							left: 50%;
							margin-top: -50px;
							margin-left: -50px;
							width: 100px;
							height: 100px;'>
							<img src='http://elumba.com/hrm2/asset/img/demo_wait.gif' class="image1" id="gif"/>
						</div>
						 <button id="btn_emp_save" type="submit" class="btn btn-primary btn-block">SUBMIT</button> 
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
<script src="<?php echo base_url(); ?>asset/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
	user_id = 0;
	$("#employee-form").validate({
        rules: {
            f_name: "required",
            l_name: "required",
			user_name: "required",
			password: "required",
			admin_name: "required",
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
			if(user_id == 0){
				$.ajax( {
					url: "<?php echo base_url(); ?>super/agency/save_agency/",
					type: 'POST',
					data: new FormData( form ),
					processData: false,
					contentType: false,
					success:function(data) {  debugger;
						user_id=data;
						window.location.href = "<?php echo base_url(); ?>super/agency/agency_list";
					}
				});
			}else{
				$('#loadingmessage').show();
				debugger;
				$.ajax({
					url: "<?php echo base_url(); ?>super/agency/save_agency/"+user_id,
					type: 'POST',
					data: new FormData( form ),
					processData: false,
					contentType: false,
					success:function(data) {  debugger;
						window.location.href = "<?php echo base_url(); ?>super/agency/agency_list";
					}
				});
			}
			return false;
		}
    });
	
	var app = angular.module('myApp', []);
	app.controller('FormController',function($scope){
		<?php if(empty($agency_info)) { ?>
			$scope.q = new Object();
			$scope.q.user_id = user_id;
		<?php } else {   ?>
			$scope.q = JSON.parse('<?php echo json_encode($agency_info); ?>');
			user_id = $scope.q.user_id;
	    <?php	}   ?>
	});
	
</script>