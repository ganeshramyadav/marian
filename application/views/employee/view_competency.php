<?php include_once 'asset/admin-ajax.php'; ?>
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 


<!--<div class="col-sm-12" data-offset="0">-->
<div class="col-sm-12">
    <div class="panel panel-default">
        <!-- Default panel contents -->
		
		

        <div class="panel-heading">
            <div class="panel-title">                 
                <strong>Competency Details</strong>
            </div>                    
        </div>    
        <div class="panel-body form-horizontal">
		
			
			<div ng-app="myApp" ng-controller="FormController">
				<form role="form" id="employee-form1" enctype="multipart/form-data"  ng-submit="submitForm()"  method="post" class="form-horizontal form-groups-bordered">    
				   
					<div class="row">
						<div class="wrap-fpanel">
							<div class="text-center">
								<strong>COMPETENCY ASSESSMENT SKILLS CHECKLIST</strong>
							</div>		
						</div>
					</div>
					
					<br />
					
					

					
					<div class="row">
						<div class="panel-body ">
							<div class="row">
								<div class="col-sm-6">
									<div class="">
										<label class="control-label">User:<span class="required"> *</span></label>
											<input type="text" value="<?php echo $username ?>" class="form-control" >
									</div>
								</div>
							</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="">
											<label class="control-label" >Date of Employment: <span class="required"> *</span></label>
											<div class="input-group">
											<input type="date" name="date_of_employment" ng-model="p.date_of_employment" value="" date-format="mm/dd/yyyy">
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="">
											<label class="control-label" >Date Completed: <span class="required"> *</span></label>
											<div class="input-group">
												<input type="date" name="date_of_completion" ng-model="p.date_of_completion" value="" date-format="mm/dd/yyyy">
											</div>
										</div>
									</div>
								</div>
							<br/>
							<!--class="form-control datepicker" data-date-format="mm/dd/yyyy"	<p class="text-center">Verbal Test=<b>V*</b>Written Test=<b>W*</b>Observation=<b>O*</b>Demostration=<b>D*</b>Special Training=<b>ST</b></p>	-->
							<?php
								$this->load->view('admin/ca/includes/competency/ca'.$disciplineid.'.php');
							?>
						</div>
					</div>

					<div class="col-sm-3 margin pull-right">
						<div id='loadingmessage' style='display:none;position: absolute;
						top: 50%;
						left: 50%;
						margin-top: -50px;
						margin-left: -50px;
						width: 100px;
						height: 100px;'>
							<img src='http://elumba.com/hrm2/asset/img/demo_wait.gif' class="image1" />
						</div>
						<button id="btn_emp" type="submit" class="btn btn-primary btn-block">Save</button>
					</div>
				</form>
			</div>
        </div>
    </div>
</div>

			<style>
			input[type="radio"] {
				-webkit-appearance: checkbox;
				-moz-appearance: checkbox;
				-ms-appearance: checkbox;     /* not currently supported */
				-o-appearance: checkbox;      /* not currently supported */
			}
			</style>

			<script src="<?php echo base_url(); ?>asset/js/jquery.validate.js" type="text/javascript"></script>

			<script type="text/javascript"> 
			  
				var app = angular.module('myApp', []);
				app.controller('FormController',function($scope){
				 
					<?php $info1 = $info->uid ?>
				 
						<?php if(!empty($info1)) { ?>  debugger;
								// alert(<?php echo $info; ?>);
								$scope.p = JSON.parse('<?php echo json_encode($info); ?>');
								id = $scope.p.pid;
						<?php	}   ?>
						
						
						
						$scope.submitForm = function(){
						$scope.p.discipline_id = <?php echo $disciplineid?>;

							debugger;

							<?php if(empty($info1)) { ?>
									$('#loadingmessage').show();
									$.ajax({
										url: '<?php echo base_url(); ?>employee/ca/ca_form',
										data : $scope.p,
										type:'POST',
										success:function(msj){
											if(msj == "success"){
												window.location.href = "<?php echo base_url(); ?>employee/dashboard/all_competency";
											}
										}
									});
							
							<?php }  else { ?> debugger;
									$('#loadingmessage').show();
									$.ajax({
										url: '<?php echo base_url(); ?>employee/ca/ca_form/'+id,
										data : $scope.p,
										type:'POST',
										success:function(msj){ debugger;
											if(msj == "success"){
												window.location.href = "<?php echo base_url(); ?>employee/dashboard/all_competency";
											}
										}
									});
									
							<?php } ?>

						}
						
					
				});
			  
			</script>

