<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>
<?php if($title == 'Hospice Rn List'){ ?> 
<h4><?php echo anchor('admin/rn/add_hospicern', '<i class="fa fa-plus"></i> Add Rn'); ?></h4>
<?php }else{ ?>
<h4><?php echo anchor('admin/rn/add_rn', '<i class="fa fa-plus"></i> Add Rn'); ?></h4>
<?php } ?>
<br/>
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
                        <strong><?php echo $this->language->form_heading()[12] ?></strong>
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
                            <th class="col-sm-1">Rn ID</th>
                            <th>Employee Name</th>
                            <th>Dept. > Designations</th>
                           <!-- <th class="show_print">Email</th>-->
                            <th>Mobile</th>
                            <th>Status</th>
                            <th class="col-sm-1 hidden-print">View</th>                                             
                            <th class="col-sm-2 hidden-print">Action</th>
                        </tr>
                    </thead>
                    <tbody>                    
                        <?php if (!empty($all_rn_info)): foreach ($all_rn_info as $rn_employee) : ?>

                               
                                 
                                <tr>
                                    <td><?php echo $rn_employee['uid'];?></td>
                                    <td><?php echo $rn_employee['first_name']." ".$rn_employee['last_name']; ?></td>
                                    <td><?php echo $v_employee->department_name . ' > ' . $v_employee->designations ?></td>
                                   <!-- <td class="show_print"><?php echo $v_employee->email?></td>  -->                              
                                    <td><?php echo $rn_employee['mobile']; ?></td>                                
                                    <td><?php
                                        if ($rn_employee['status'] == 1) {
                                            echo '<span class="label label-success">Active</span>';
                                        } else {
                                            echo '<span class="label label-danger">Deactive</span>';
                                        }
                                        ?></td>                                
                                    <td class="hidden-print"><?php echo btn_view('admin/rn/view_rn/' . $rn_employee['uid']); ?></td>                                
                                    <td class="hidden-print"> 
                                        <?php echo btn_edit('admin/rn/add_rn/' . $rn_employee['uid']); ?>
                                        <?php echo btn_delete('admin/rn/delete_rn/' . $rn_employee['uid']); ?>
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
    function employee_list(employee_list) {
        var printContents = document.getElementById(employee_list).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
