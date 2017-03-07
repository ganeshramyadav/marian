<?php include_once 'asset/admin-ajax.php'; ?>
<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 

<div ng-app="myApp"  ng-controller="FormController">
<form role="form" id="employee-form1" enctype="multipart/form-data"  ng-submit="submitForm()"  method="post" class="form-horizontal form-groups-bordered">    
   
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

          <!-- <input type="hidden" name="discipline_id" ng-model="q.discipline_id"  class="form-control" > -->
          <?php $this->load->view('admin/pe/includes/pe'.$disciplineid.'.php'); ?>
    
									                       
	</div>          
		</div>
			</div>
              <div class="row">
                   <div class="col-sm-4">
                        <img src="<?php echo $admin_info->esignature;?>">	
			    <p>Administrator Signature</p>
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
				$scope.q = JSON.parse('<?php echo json_encode($info); ?>');
				id = $scope.q.pid;
		<?php	}   ?>
	 
		$scope.submitForm = function(){ debugger;
		
			$scope.q.discipline_id= <?php echo $disciplineid?>;
			
			<?php if(empty($info)) { ?>
					$('#loadingmessage').show();
					$.ajax({
						url: '<?php echo base_url(); ?>admin/pe/pe_form',
						data : $scope.q,
						type:'POST',
						success:function(msj){   
                                                       
							if(msj == "success"){  debugger;
								 window.location.href = "<?php echo base_url(); ?>admin/pe/pe_disciplinelist";
							}
						}
					});

		   <?php }  else { ?>
					$('#loadingmessage').show();
					$.ajax({
						url: '<?php echo base_url(); ?>admin/pe/pe_form/'+id,
						data : $scope.q,
						type:'POST',
						success:function(msj){    
							if(msj == "success"){ debugger;
								window.location.href = "<?php echo base_url(); ?>admin/pe/pe_disciplinelist";
							}
						}
					});
			<?php } ?>
		}
	});
  
</script>


