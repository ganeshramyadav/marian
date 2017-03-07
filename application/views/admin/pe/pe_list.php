<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>


<h4><?php echo anchor('admin/pe/add_pe/'.$disciplinedetail->discipline_id, '<i class="fa fa-plus"></i> Add PE-'.$disciplinedetail->discipline); ?></h4>


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
                        <strong>Performance Evaluation List</strong>
                        <div class="pull-right hidden-print">                                                                      
                            <!--<span><?php echo btn_pdf('admin/lvn/pelvn_list_pdf'); ?></span>
                            <button class="btn-print" type="button" data-toggle="tooltip" title="Print" onclick="employee_list('employee_list')"><?php echo btn_print(); ?></button> -->
                        </div>
                    </div>
                </div>
                <br />
                <!-- Table -->
                <table class="table table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
						    <th class="col-sm-1">PE Id</th>
                            <th class="col-sm-1">Date</th>
                              <th class="col-sm-1">Reviewer</th>
							  <th class="col-sm-1">User</th>
							  <th class="col-sm-1">Time</th>
							  
                            <th class="col-sm-1 hidden-print">View</th>                                             
                            <th class="col-sm-2 hidden-print">Action</th>
                        </tr>
                    </thead>
                    <tbody>  
                        			
									
                        <?php if (!empty($users)): foreach ($users as $item) : ?>

                              
                                 
                                <tr>
								    <td><?php echo $item->id;?></td>
                                    <td><?php echo $item->date;?></td>
                                    <td><?php echo $item->reviewer; ?></td>
                                    <td><?php echo $item->firstname." ".$item->lastname; ?></td>
									 <td><?php echo $item->time; ?></td>
                                                            
                                    <td class="hidden-print"><?php echo btn_view('admin/lvn/view_pe/' . $item->id); ?></td>                                
                                    <td class="hidden-print">
										<?php if($check == 'PE-AC'){
												echo btn_edit('admin/lvn/add_acpe/' . $item->id);
												echo btn_delete('admin/rn/pe_delete/' . $item->id);
											}else{
												echo btn_edit('admin/pe/add_pe/'. $disciplinedetail->discipline_id.'/'.$item->user.'/'. $item->id);
												echo btn_delete('admin/pe/pe_delete/' . $item->id);
											}
										?>
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
