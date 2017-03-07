<!DOCTYPE html>
<html>
    <head>
        <title>Expense Report</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
        <style type="text/css">
            .table_tr1{
                background-color: rgb(224, 224, 224);
            }
            .table_tr1 td{
                padding: 7px 0px 7px 8px;
                font-weight: bold;
            }
            .table_tr2 td{
                padding: 7px 0px 7px 8px;
                border: 1px solid black;
            }            
        </style>
    </head>
    <body style="min-width: 100%; min-height: 100%; overflow: hidden; alignment-adjust: central;">
        <br />
        <div style="width: 100%; border-bottom: 2px solid black;">
            <table style="width: 100%; vertical-align: middle;">
                <tr>
                    <?php
                    $genaral_info = $this->session->userdata('genaral_info');
                    if (!empty($genaral_info)) {
                        foreach ($genaral_info as $info) {
                            ?>
                            <td style="width: 35px;">
                                <img style="width: 50px;height: 50px" src="<?php echo base_url() . $info->logo ?>" alt="" class="img-circle"/>
                            </td>
                            <td>
                                <p style="margin-left: 10px; font: 14px lighter;"><?php echo $info->name ?></p>
                            </td>
                            <?php
                        }
                    } else {
                        ?>
                        <td style="width: 35px;">
                            <img style="width: 50px;height: 50px" src="<?php echo base_url() ?>img/logo.png" alt="Logo" class="img-circle"/>
                        </td>
                        <td>
                            <p style="margin-left: 10px; font: 14px lighter;">Human Resource Management System</p>
                        </td>
                    <?php }
                    ?>                    
                </tr>
            </table>
        </div>
        <br />
        <div style="width: 100%;">
            <div style="width: 100%; background-color: rgb(224, 224, 224); padding: 1px 0px 5px 15px;">                
                <table style="width: 100%;">                    
                    <tr style="font-size: 20px;  text-align: center">
                        <td style="padding: 10px;">Rn List</td>
                    </tr>                                    
                </table>
            </div>
            <br/>            
            <table style="width: 100%; font-family: Arial, Helvetica, sans-serif; border-collapse: collapse;">
                <tr class="table_tr1">
                    <td style="border: 1px solid black;">Sl</td>                    
                    <td style="border: 1px solid black;">Rn ID</td>                    
                    <td style="border: 1px solid black;">Name</td>                    
                                     
                    <td style="border: 1px solid black;">Mobile</td>                    
                    <td style="border: 1px solid black;">Status</td>                                        
                </tr>  
                <?php
                $key = 1;
                $total_amount = 0;
                ?>
                <?php //if (!empty($all_employee_info)): foreach ($all_employee_info as $v_employee) : ?>
				
				 <?php if (!empty($all_rn_info)): foreach ($all_rn_info as $rn_employee) : ?>

                        <tr class="table_tr2">
                            <td><?php echo $key ?></td>
                            <td><?php echo $rn_employee['uid']; ?></td>
                            <td><?php echo $rn_employee['first_name']." ".$rn_employee['last_name']; ?></td>
                            
                            <td><?php echo $rn_employee['mobile']; ?></td>                                
                                                         
                            <td><?php
                                        if ($rn_employee['status'] == 1) {
                                            echo '<span class="label label-success">Active</span>';
                                        } else {
                                            echo '<span class="label label-danger">Deactive</span>';
                                        }
                                        ?></td>                                                            
                        </tr>
                        <?php
                        $key++;
                    endforeach;
                    ?>
                <?php else : ?>
                    <td colspan="3">
                        <strong>There is no data to display</strong>
                    </td>
                <?php endif; ?>
            </table>            
        </div>
    </body>
</html>