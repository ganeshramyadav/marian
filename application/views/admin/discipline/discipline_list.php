<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<h4><?php echo anchor('admin/discipline/add_discipline/'.$discipline_id, '<i class="fa fa-plus"></i> Add '.$disciplinename); ?></h4>

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
                            <span><?php echo btn_pdf('admin/discipline/discipline_list_pdf/'.$discipline_id); ?></span>
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
                                    <td><?php echo $rn_employee['last_name']." ".$rn_employee['first_name']; ?></td>
                                    <td><?php echo $v_employee->department_name .  $rn_employee['discipline'] ?></td>
                                   <!-- <td class="show_print"><?php echo $v_employee->email?></td>  -->                              
                                    <td><?php echo $rn_employee['phone']; ?></td>                                
                                    <td><?php
                                        if ($rn_employee['official_status'] == 'active') {
                                            echo '<span class="label label-success">Active</span>';
                                        } 
                                        if ($rn_employee['official_status'] == 'inactive') {
                                            echo '<span class="label label-danger">Inactive</span>';
                                        }
                                        if ($rn_employee['official_status'] == 'pending') {
                                            echo '<span class="label label-warning">Pending</span>';
                                        }
                                        ?></td>                                
                                    <td class="hidden-print"><?php echo btn_view('admin/discipline/view_discipline/' . $rn_employee['uid']); ?></td>                                
                                    <td class="hidden-print"> 
                                        <?php echo btn_edit('admin/discipline/edit_discipline/' . $rn_employee['uid']); ?>
                                        <?php echo btn_delete('admin/discipline/delete_discipline/' . $rn_employee['uid'] . '/' . $discipline_id); ?>
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
</script>
