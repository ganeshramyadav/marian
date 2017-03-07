<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<h4><?php echo anchor('#', '<i class="fa fa-plus"></i> Add Employee'); ?></h4>
<?php

	foreach ($all_employee_info as $employee_info){
		//echo "<pre>"; print_r($employee_info); echo "</pre>";
	}
?>


<div id="employee_list">
    <div class="show_print" style="width: 100%; border-bottom: 2px solid black;margin-bottom: 20px;">
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
				
				echo "<pre>"; print_r($genaral_info); echo "</pre>";
				echo "<pre>"; print_r($info); echo "</pre>";
				
				
                ?>
            </tr>
        </table>
    </div><!--            show when print start-->   
    <div class="row">
        <div class="col-sm-12 wrap-fpanel" data-spy="scroll" data-offset="0">                            
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <div class="panel-title">
                        <strong><?php echo $this->language->form_heading()[12]?></strong>
                        <div class="pull-right hidden-print">                                                                      
                            <span><?php echo btn_pdf('super/agency/agency_list_pdf'); ?></span>
                            <button class="btn-print" type="button" data-toggle="tooltip" title="Print" onclick="agency_list('agency_list')"><?php echo btn_print(); ?></button>                                                              
                        </div>
                    </div>
                </div>
                <br />
				
				<div class="">
					<label class="control-label" ><?php echo "Select Agency" ?> <span class="required"> *</span></label>
					<select name="agency" ng-model="q.agency" class="form-control" id="agency" onclick="myagency()">
						<option value="">Select Agency ...</option>
						<?php foreach ($all_agency_info as $agency_info) : ?>
							<option value="<?php echo $agency_info['user_id'] ?>" <?php
								
								?>><?php echo $agency_info['admin_name'] ?>
							</option>
						<?php endforeach; ?>
					</select>
				</div>
				<br />
				
				<div class="" id="disc" style="display:none;">
					<label class="control-label"><?php echo "Discipline"; ?> <span class="required"> *</span></label>
					<select name="discipline" ng-model="q.discipline" class="form-control" id="discipline" onChange="getEmps();">
						<option value="">Select Discipline ...</option>
						<?php foreach ($all_discipline as $discipline) : ?>
							<option value="<?php echo $discipline['discipline_id'] ?>" <?php
								
								?>><?php echo $discipline['discipline'] ?>
							</option>
						<?php endforeach; ?>
					</select>
				</div></br />
				<?php
				// echo "<pre>"; print_r($all_employee_info); echo "</pre>";
				// echo "<pre>"; print_r($cityarray); echo "</pre>";
				// foreach ($all_employee_info as $employee_info){
					// echo "<pre>"; print_r($employee_info); echo "</pre>";
					// foreach($employee_info as $employee){
						// echo "<pre>"; print_r($employee); echo "</pre>";
					// }
				// }
				// uid
				?>
				</br />

<script>

function myagency(){
	var agencyval = $("#agency").val();
	if(agencyval == 0){
		$("#disc").hide();
	}else{
		$("#disc").show();
	}
}

function getEmps() {	debugger;
	debugger;
	var val = $("#discipline").val();
	var agencyval = $("#agency").val();
	// function count(obj) { 
		// return Object.keys(obj).length; 
	// }
	
	$.ajax({
		type: "POST",
		dataType: 'json',
		url: "<?php echo base_url(); ?>super/emps/employees/",
		data:{disciplineid : val, agencyid : agencyval},
		success: function(data){debugger;
			debugger;
			var htmlvalue = "";
			for (key in data){
			
				var object = Object.keys(data[key]).length;
				if(object == '0'){
						htmlvalue += '<td colspan="3"><strong>There is no data to display</strong></td>';
				}else{
					for(key1 in data[key]){
						var id = data[key][key1].uid;
						var name = data[key][key1].first_name + ' ' + data[key][key1].last_name;
						var discipline = data[key][key1].discipline_id;
						var mobile = data[key][key1].mobile;
						var status = data[key][key1].status;
						
						htmlvalue += '<tr><td>'+id+'</td><td>'+name+'</td><td>'+discipline+'</td><td>'+mobile+'</td><td>';
						debugger;
						// +status+'</td><td></td></tr>'
						if(status == 1){
							var check_status = 'Active';
							htmlvalue += '<span class="label label-success">'+check_status+'</span>';
						}else{
							var check_status = 'Deactive';
							htmlvalue += '<span class="label label-danger">'+check_status+'</span>';
						}
						
						// btn_delete("admin/discipline/delete_discipline/"
						var edit = '<?php echo btn_edit("super/discipline/edit_discipline/"."'+id+'"); ?>';
						
						del = "<a href=\"http://localhost:8888/ganesh/hrm2/admin/discipline/delete_discipline/"+id+ "\" class=\"btn btn-danger btn-xs\" title=\"Delete\" data-toggle=\"tooltip\" data-placement=\"top\" onclick=\"return confirm('You are about to delete a record. This cannot be undone. Are you sure?');><i class=\"fa fa-trash-o\"></i> Delete</a>";
						
						htmlvalue += '</td><td></td><td class="hidden-print">'+ edit + " " + del +'</td><td class="hidden-print"></td></tr>';

						// hthmlvalue += '<td>'+status+'</td><td></td></tr>';
					}
				}
			}
			$("#tables").show();
			$("#employeeresult").html(htmlvalue);
		}
	});
}


</script>

				<!-- show when print start-->   
				<div class="row" id="tables" style="display:none;">
					<div class="col-sm-12 wrap-fpanel" data-spy="scroll" data-offset="0">                            
						<div class="panel panel-default">
							<!-- Default panel contents -->
							<!--
							<div class="panel-heading">
								<div class="panel-title">
									<strong><?php echo $this->language->form_heading()[12] ?></strong>
									<div class="pull-right hidden-print">                                                                      
										<span><?php echo btn_pdf('super/discipline/discipline_list_pdf'); ?></span>
										<button class="btn-print" type="button" data-toggle="tooltip" title="Print" onclick="employee_list('employee_list')"><?php echo btn_print(); ?></button>                                                              
									</div>
								</div>
							</div>
							-->
							<br />
							
							<!-- Table -->
							<table class="table table-bordered table-hover" id="dataTables-example" >
								<thead>
									<tr>
										<th class="col-sm-1">ID</th>
										<th>Employee Name</th>
										<th>Dept. > Designations</th>
									   <!-- <th class="show_print">Email</th>-->
										<th>Mobile</th>
										<th>Status</th>
										<th class="col-sm-1 hidden-print">View</th>                                             
										<th class="col-sm-2 hidden-print">Action</th>
									</tr>
								</thead>
								<tbody id="employeeresult">
								</tbody>
							</table>          
						</div>
					</div>
				</div>
				
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // function agency_list(agency_list) { debugger;
        // var printContents = document.getElementById(agency_list).innerHTML;
        // var originalContents = document.body.innerHTML;
        // document.body.innerHTML = printContents;
        // window.print();
        // document.body.innerHTML = originalContents;
    // }
	
	function employee_list(employee_list) { debugger;
        var printContents = document.getElementById(employee_list).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
