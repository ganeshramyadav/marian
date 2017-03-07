<?php include_once 'asset/admin-ajax.php'; ?>
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 

<?php
	// echo "<pre>"; print_r($all_pe_info); echo "</pre>";
	
	// echo "<pre>"; print_r($info); echo "</pre>";
?>

<div ng-app="myApp"  ng-controller="FormController">
	<form role="form" id="employee-form1" enctype="multipart/form-data"  ng-submit="submitForm()"  method="post" class="form-horizontal form-groups-bordered">    
	   <input type="hidden" name="time_interval" value="<?php echo $time_interval?>">
		<div class="row">
			<div class="wrap-fpanel">
				<div class="text-center">
					<strong>COMPETENCY ASSESSMENT SKILLS CHECKLIST</strong>
				</div>		
			</div>
		</div> <br />
		

		
		<div class="row">
			<div class="panel-body ">
				<div class="row">
                    <div class="col-sm-6">
						<div class="">
							<!--<label class="control-label">User:<span class="required"> *</span></label>-->
							
							<?php if(!empty($username)) {?>
								
								<!--<input type="text" value="<?php echo $username ?>" class="form-control" readonly>-->
								
							<?php }else{ ?>
<label class="control-label">User:<span class="required"> *</span></label>
							<select name="uid" ng-model="p.uid" class="form-control col-sm-5" >
								<option value="" >Select user...</option>
								<?php foreach ($all_pe_info as $pe_info) : ?>
									<option <?php if($pe_info['first_name']." ".$pe_info['last_name'] == $username) echo 'selected';?> value="<?php echo $pe_info['uid']; ?>" ><?php echo $pe_info['first_name']." ".$pe_info['last_name']; ?></option>
								
								<?php endforeach; ?>
								
							</select> 
							<?php 
								}// echo "<pre>"; print_r($pe_info); echo "</pre>";
							?>
							
							<!--<input type="text" name="first_name" ng-model="q.first_name"  class="form-control">-->
						</div>
                    </div>
                </div>
				<div class="row">
					<div class="col-sm-6">
						<div class="">
							<label class="control-label" >Date of Employment: <span class="required"> *</span></label>
							<div class="input-group">
							<input type="text" name="date_of_employment" ng-model="p.date_of_employment" value="" class="form-control datepicker" data-date-format="mm/dd/yyyy">
								<div class="input-group-addon">
									<a href="#"><i class="entypo-calendar"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="">
							<label class="control-label" >Date Completed: <span class="required"> *</span></label>
							<div class="input-group">
								<input type="text" name="date_of_completion" ng-model="p.date_of_completion" value="" class="form-control datepicker" data-date-format="mm/dd/yyyy">
								<div class="input-group-addon">
									<a href="#"><i class="entypo-calendar"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<br/>
				<p class="text-center" <?php if($disciplineid == 2 or $disciplineid == 4 or $disciplineid == 6 or $disciplineid == 12 or $disciplineid == 14 or $disciplineid == 15 or $disciplineid == 16 or $disciplineid == 13 ){ echo "hidden"; } ?> >Verbal Test=<b>V*</b>Written Test=<b>W*</b>Observation=<b>O*</b>Demostration=<b>D*</b>Special Training=<b>ST</b></p>
				<?php 
					$this->load->view('admin/ca/includes/competency/ca'.$disciplineid.'.php'); 
				?>
			</div>
		</div>
	<!--   
          <div class="row">
              <div class="col-sm-6">
                   <div class="">
                        <label class="control-label">Comments: </label>
                        <div class="input-group">
                            <textarea name="comments" ng-model="p.comments" class="ng-pristine ng-valid"></textarea>
                        </div>
                   </div>
              </div>
           </div> -->

	   
          

	   
	   
	   
	   <!--
		<div class="row">
			<div class="wrap-fpanel">
			   <div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
						   <strong>PERFORMANCE EVALUATION</strong>
						</div>
					</div>
				</div>
			</div>
			<div class="">
				<div class="panel-body ">
					<?php 
						// $this->load->view('admin/pe/includes/pe'.$disciplineid.'.php'); 
					?>
				</div>          
			</div>
		</div>
		-->	  
				
				 
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
	app.controller('FormController',function($scope){	debugger;
	 
		<?php if(!empty($info)) { ?>
				$scope.p = JSON.parse('<?php echo json_encode($info); ?>');
				id = $scope.p.pid;
		<?php	}   ?>
	 
		$scope.submitForm = function(){ debugger;
		$scope.p.discipline_id= <?php echo $disciplineid?>;
		$scope.p.time_interval = <?php echo $time_interval?>;	
		<?php if(empty($info)) { ?>
				$('#loadingmessage').show();
				$.ajax({
					url: '<?php echo base_url(); ?>admin/ca/ca_form',
					data : $scope.p,
					type:'POST',
					success:function(msj){
						if(msj == "success"){  debugger;
							window.location.href = "<?php echo base_url(); ?>admin/ca/ca_disciplinelist";
						}
					}
				});

		<?php }  else { ?>
				$('#loadingmessage').show();
				$.ajax({
					url: '<?php echo base_url(); ?>admin/ca/ca_form/'+id,
					data : $scope.p,
					type:'POST',
					success:function(msj){    
						if(msj == "success"){ debugger;
							window.location.href = "<?php echo base_url(); ?>admin/ca/ca_disciplinelist";
						}
					}
				});
		<?php } ?>
		}
	});
  
</script>


