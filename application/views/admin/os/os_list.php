<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<h4><?php echo anchor('admin/os/add_os/'.$officestaff_type, '<i class="fa fa-plus"></i> Add '.$officestaff_type); ?></h4>
<br/>
<div id="employee_list">
    <div class="show_print" style="width: 100%; border-bottom: 2px solid black;margin-bottom: 20px;">
        <input type="hidden" name="officestaff_type" value="<?php echo $officestaff_type;?>">
        <table style="width: 100%; vertical-align: middle;">
            <tr>
                <?php
                $genaral_info = $this->session->userdata('genaral_info');
                if (!empty($genaral_info)) {
                    foreach ($genaral_info as $info) {
                        ?>
                        <td style="width: 35px; border: 0px;">
                     <img style="width: 50px;height: 50px" src="<?php echo base_url() . $info->logo ?>" alt="" class="img-circle"/>
                        </td>
                        <td style="border: 0px;">
                            <p style="margin-left: 10px; font: 14px lighter;"><?php echo $info->name ?></p>
                        </td>
                        <?php
                    }
                } else {
                    ?>
                    <td style="width: 35px; border: 0px;">
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
    <div class="row" ng-app="office_staff" ng-controller="OfficeStaffCtrl">
        <div class="col-sm-12 wrap-fpanel" data-spy="scroll" data-offset="0">                            
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <div class="panel-title">
                        <strong><?php echo $officestaff_type.' Office Staff' ?></strong>
                        <div class="pull-right hidden-print">                                                                      
                            <span><?php echo btn_pdf('admin/rn/rn_list_pdf'); ?></span>
                            <button class="btn-print" type="button" data-toggle="tooltip" title="Print" onclick="employee_list('employee_list')"><?php echo btn_print(); ?></button>                                                              
                        </div>
                    </div>
                </div>
                <br />
                <!-- Table -->
                <table class="table table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Dept. > Designations</th>
                            <th>Employee Name</th>
		        	<th class="col-sm-2 hidden-print">Job Description</th> 
                            <th class="col-sm-2 hidden-print">Action</th>
                            <!-- 
                                  <th class="col-sm-1 hidden-print">View</th>                                             
                                  <th class="col-sm-2 hidden-print">Action</th> 
                             -->
                        </tr>
                    </thead>
                    <tbody>     
                         
              <?php if(!empty($all_staff_info)){ ?>
                         <tr ng-repeat="(key, data) in p">
                                    <td> {{key}}</td>
                                    <td><input type="text" ng-model="p[key]"   /> </td>
				    <td class="hidden-print"> 
					<span ng-repeat="(key2, data2) in q">
					<span ng-if="key == key2">
					<a class="btn btn-default btn-file" href="<?php echo base_url() . 'admin/os/makejobdesc_pdf/{{q[key2]}}/{{key}}'; ?>" target="_blank" >Print</a> 
					</span> 
				        </span>
				     </td>
                                     <td class="hidden-print"> 
				         <span ng-repeat="(key1, data1) in q">
				         <span ng-if="key == key1">
                                        <?php echo btn_edit('admin/discipline/edit_discipline/{{q[key1]}}'); ?>
					 </span>
					 </span>
                                        <?php echo btn_delete('admin/os/delete_os/'.$officestaff_type.'/{{key}}' ); ?>
                                    </td>  
                         </tr>
                          
               <?php } else { ?>        
                         <td colspan="3" ng-if="!p">
                            <strong>There is no data to display</strong>
                        </td>
                 <?php } ?>
                    </tbody>
                </table>          
                 
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
               <!-- <input type="hidden" name="uid" ng-model="p.uid" value="<?php echo $uid;?>"> -->
              <!--  <input type="button" value="submit" class="btn btn-primary btn-block" ng-click="test()"/> -->
                <button id="btn_emp_save" ng-click="test()" type="submit" class="btn btn-primary btn-block">Submit</button> 
               </div>    

     </div>
         

            </div>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
<script type="text/javascript">

    var path = window.location.href.split('admin');
    debugger; 
     
     var path2 = 'admin' + path[1];
     path2 = path2.split("/").join("_");
      $(document).ready(function(e){
         $("#admin_dashboard").removeClass('active');
         var openedid = $('#' + path2).attr('parent');
          $('#' + openedid).addClass('opened');
          $('#' + path2).addClass('active');
      });
    

    function employee_list(employee_list) {
        var printContents = document.getElementById(employee_list).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

var app = angular.module('office_staff',[]);
app.controller('OfficeStaffCtrl',function($scope)
{
   $scope.p =  JSON.parse('<?php echo $staff_details ?>');
   $scope.q = JSON.parse('<?php echo $userstaff_details ?>');
debugger;

$scope.test = function()
{
debugger;
var s = $scope.p;
$scope.p.id = <?php echo $id ?>;
$scope.p.officestaff_type = '<?php echo $officestaff_type ?>';
 $('#loadingmessage').show();
    $.ajax({ 
	url: '<?php echo base_url(); ?>admin/os/save_os_form',
	data : $scope.p,
	type:'POST',
	success:function(msj) 
	{   debugger;
		if(msj == "success")
		{ 			debugger;
			window.location.href = "<?php echo base_url(); ?>admin/os/officestaff_list/<?php echo $officestaff_type?>";
		}
		
	}
	
});

}

});

</script>
