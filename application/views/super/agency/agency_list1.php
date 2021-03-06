<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<h4><?php echo anchor('super/agency/add_agency/', '<i class="fa fa-plus"></i> Add Agency'); ?></h4>
<?php


	
	// echo "<pre>"; print_r($this->session->userdata()); echo "</pre>";
	// echo "<pre>"; print_r($data); echo "</pre>";
	// echo "<pre>"; print_r($this->session->userdata); echo "</pre>";
	
	// echo $this->session->userdata->user_flag;
	// die;
	// echo $this->session->userdata['logged_in']['id'];
	// die;

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
                        <strong><?php echo "Agency List"; ?></strong>
                        <div class="pull-right hidden-print">                                                                      
                            <span><?php echo btn_pdf('super/agency/agency_list_pdf'); ?></span>
                            <!--<button class="btn-print" type="button" data-toggle="tooltip" title="Print" onclick="agency_list('agency_list')"><?php echo btn_print(); ?></button>-->
                        </div>
                    </div>
                </div>
                <br />
                <!-- Table -->
                <table class="table table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th class="col-sm-1">Agency ID</th>
                            <th>Agency Name</th>
							<th>Name</th>
							<!--
                            <th>Dept. > Designations</th>
                            <th class="show_print">Email</th>
							-->
                            <th>Mobile</th>
							<th>Created Date</th>
                            <th>Status</th>
							<!--
                            <th class="col-sm-1 hidden-print">View</th>
							-->
                            <th class="col-sm-2 hidden-print">Action</th>
                        </tr>
                    </thead>
                    <tbody>
						
                        <?php if (!empty($all_agency_info)): foreach ($all_agency_info as $agency_list) : ?>
                                <tr>
                                    <td><?php echo $agency_list['user_id'];?></td>
									<td><?php echo $agency_list['admin_name'];?></td>
                                    <td><?php echo $agency_list['f_name']." ".$agency_list['l_name']; ?></td>
									<!--
                                    <td><?php echo $v_employee->department_name . ' > ' . $v_employee->designations ?></td>
                                    <td class="show_print"><?php echo $v_employee->email?></td>
									-->
                                    <td><?php echo $agency_list['mobile']; ?></td>
									<td><?php echo $agency_list['created_date']; ?></td>
                                    <td><?php
                                        if ($agency_list['flag'] == 2) {
                                            echo '<span class="label label-success">Active</span>';
                                        } else if($agency_list['flag'] == 1) {
                                            echo '<span class="label label-danger">Deactive</span>';
                                        } else {
											echo '<span class="label label-danger">Pending</span>';
										}
                                        ?></td>
									<!--	
                                    <td class="hidden-print"><?php echo btn_view('super/agency/view_agency/' . $agency_list['user_id']); ?></td>
									-->
                                    <td class="hidden-print"> 
                                        <?php echo btn_edit('super/agency/add_agency/' . $agency_list['user_id']); ?>
                                        <?php echo btn_delete('super/agency/delete/' . $agency_list['user_id']); ?>
                                    </td>   
                                </tr>
                                <?php
                            endforeach;
                            ?>
                        <?php else : ?>
                        <td colspan="3">
                            <strong>There is no data to display</strong>
                        </td>
                    <?php endif; ?>
                    </tbody>
                </table>          
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
 debugger;
    function agency_list(agency_list) {
	 debugger;
        var printContents = document.getElementById(agency_list).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
