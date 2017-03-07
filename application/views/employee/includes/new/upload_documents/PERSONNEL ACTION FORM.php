	<div class="container" style="width:100%; padding-left: 2em; padding-right: 2em;">
		<div class="section-header row">
			<h2>PERSONNEL ACTION FORM</h2>
					
		</div>
		
		<style>
			label{
				font-weight: bold;
			}
		</style>
		
		
		<hr class="heavy"/>
			<br />
		<form method="post" class="pafform" action="#">
			<div class="row">
				<div class="col-sm-6">
					<label for="paf_name" style="float:left;">NAME</label>
					<input id="paf_name" name="paf_name" value="<?php echo $paf_info->paf_name?>" class="form-control" style="width: inherit; margin-left: 9em;"/>
				</div>
				<div class="col-sm-6">
					<label for="paf_position" style="float:left;">POSITION</label>
					<input id="paf_position" name="paf_position" value="<?php echo $paf_info->paf_position?>" class="form-control" style="width: inherit; margin-left: 9em;"/>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-6">
					<label for="paf_doh" style="float:left;">DATE OF HIRE</label>
           <input type="date" id="paf_doh" name="paf_doh" value="<?php echo $paf_info->paf_doh?>" class="form-control" style="display: inline;"/>
					
				</div>
			</div>
			<br />
			
	      <div class="row">
		<table class="table table-striped">
		  <tbody>
		    <tr>
		     <td>
			<input type="checkbox" name="paf_1" id="paf_1" value="y" <?php if($paf_info->paf_1 =="y"){ echo "checked"; } ?> style="">
								<label for="paf_1" style="">New Hire</label>
							</td>
							<td> </td>
							<td> </td>
							<td> </td>
						</tr>
						<tr>
							<td>
			<input type="checkbox" name="paf_2" id="paf_2" value="y" <?php if($paf_info->paf_2 =="y"){ echo "checked"; } ?> style="">
								<label for="paf_2" style="">Rehire</label>
							</td>
							<td> </td>
							<td> </td>
							<td> </td>
						</tr>
						<tr>
							<td>
			<input type="checkbox" name="paf_3" id="paf_3" value="y" <?php if($paf_info->paf_3 =="y"){ echo "checked"; } ?> style="">
								<label for="paf_3" style="">Full Time</label>
							</td>
							<td> </td>
							<td> </td>
							<td> </td>
						</tr>
						<tr>
							<td>
			<input type="checkbox" name="paf_4" id="paf_4" value="y" <?php if($paf_info->paf_4 =="y"){ echo "checked"; } ?> style="">
								<label for="paf_4" style="">Part Time</label>
							</td>
							<td> </td>
							<td> </td>
							<td> </td>
						</tr>
						<tr>
							<td>
			<input type="checkbox" name="paf_5" id="paf_5" value="y" <?php if($paf_info->paf_5 =="y"){ echo "checked"; } ?> style="">
								<label for="paf_5" style="">Per Diem</label>
							</td>
							<td> </td>
							<td> </td>
							<td> </td>
						</tr>
						<tr>
							<td>
			<input type="checkbox" name="paf_6" id="paf_6" value="y" <?php if($paf_info->paf_6 =="y"){ echo "checked"; } ?> style="">
								<label for="paf_6" style="">On Call</label>
							</td>
							<td> </td>
							<td> </td>
							<td> </td>
						</tr>
						<tr>
							<td>
			<input type="checkbox" name="paf_7" id="paf_7" value="y" <?php if($paf_info->paf_7 =="y"){ echo "checked"; } ?> style="">
								<label for="paf_7" style="">Exempt</label>
							</td>
							<td>
								<label for="paf_time1" style="">Hrs/Day</label>
								<input name="paf_time1" id="paf_time1" value="<?php echo $paf_info->paf_time1?>" style="">
							</td>
							<td> </td>
							<td> </td>
						</tr>
						<tr>
							<td>
			<input type="checkbox" name="paf_8" id="paf_8" value="y" <?php if($paf_info->paf_8 =="y"){ echo "checked"; } ?> style="">
								<label for="paf_8" style="">Non-Exempt</label>
							</td>
							<td>
								<label for="paf_time2" style="">Hrs/Day</label>
								<input name="paf_time2" id="paf_time2" value="<?php echo $paf_info->paf_time2?>" style="">
							</td>
							<td> </td>
							<td> </td>
						</tr>
						<tr>
							<td>
			<input type="checkbox" name="paf_9" id="paf_9" value="y" <?php if($paf_info->paf_9 =="y"){ echo "checked"; } ?> style="">
								<label for="paf_9" style="">PayRate</label>
							</td>
							<td>
								<div class="row">
									<label for="dollar" style="">$</label>
								<input name="paf_hour" id="paf_hour" value="<?php echo $paf_info->paf_hour?>" style="">
									<label for="paf_hour" style="">Hourly</label>
								</div>
								<p></p>
								<div class="row">
									<label for="dollar" style="">$</label>
					<input name="paf_initialeval" id="paf_initialeval" value="<?php echo $paf_info->paf_initialeval?>" style="">
									<label for="paf_initialeval" style="">Initial Eval</label>
								</div>
							</td>
							<td>
								<div class="row"></div>
								<p></p>
								<div class="row" style="margin-top: 2em;">
									<label for="dollar" style="">$</label>
								<input name="paf_roc" id="paf_roc" value="<?php echo $paf_info->paf_roc?>" style="">
									<label for="paf_roc" style="">ROC</label>
								</div>
							</td>
							<td>
								<div class="row">
									<label for="dollar" style="">$</label>
								<input name="paf_rv" id="paf_rv" value="<?php echo $paf_info->paf_rv?>" style="">
									<label for="paf_rv" style="">Regular Visit</label>
								</div>
								<p></p>
								<div class="row">
									<label for="dollar" style="">$</label>
								<input name="paf_dc" id="paf_dc" value="<?php echo $paf_info->paf_dc?>" style="">
									<label for="paf_dc" style="">DC/Recert</label>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			<!--
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">DATE OF POSITIVE TB SKIN TEST</label>
				</div>
				<div class="col-sm-6">
					<input id="last-name" type="date" class="form-control" style="width: inherit;"/>
				</div>
			</div>
			-->
			<br />
			<br />
			<div class="row" style="margin:auto;">
				<span>
					<label>Position Change:</label>
				</span>
				<table class="table table-striped">
					<thead>
						<tr>
							<th style="text-align:center;"> From </th>
							<th style="text-align:center;"> To </th>
							<th style="text-align:center;"> Effective Date </th>
						</tr>
					</thead>
					<tbody style="text-align: center;">
						<tr>
						  <td><input name="paf_from1" id="paf_from1" value="<?php echo $paf_info->paf_from1?>" style=""></td>
						  <td><input name="paf_to1" id="paf_to1" value="<?php echo $paf_info->paf_to1?>" style=""></td>
                                                  <td><input id="paf_effdate1" name="paf_effdate1" type="date" class="form-control" value="<?php echo $paf_info->paf_effdate1?>" style="width: inherit; margin-left: 9em;"/></td>
						</tr>
						<tr>
						  <td><input name="paf_from2" id="paf_from2" value="<?php echo $paf_info->paf_from2?>" style=""></td>
						  <td><input name="paf_to2" id="paf_to2" value="<?php echo $paf_info->paf_to2?>" style=""></td>
                                                  <td><input id="paf_effdate2" name="paf_effdate2" type="date" class="form-control" value="<?php echo $paf_info->paf_effdate2?>" style="width: inherit; margin-left: 9em;"/></td>
						</tr>
						<tr>
						  <td><input name="paf_from3" id="paf_from3" value="<?php echo $paf_info->paf_from3?>" style=""></td>
						  <td><input name="paf_to3" id="paf_to3" value="<?php echo $paf_info->paf_to3?>" style=""></td>
                                                  <td><input id="paf_effdate3" name="paf_effdate3" type="date" class="form-control" value="<?php echo $paf_info->paf_effdate3?>" style="width: inherit; margin-left: 9em;"/></td>
						</tr>
					</tbody>
				</table>
			</div>
			<!--
			<div class="row">
				<span>
					<div>Please answer the following questions by checking the yes or no column.</div>
				</span>
			</div>
			-->
			<br />
			<br />
			
			<div class="row" style="margin:auto;">
				<span>
					<label>Disciplinary Action:</label>
				</span>
				<table class="table table-striped">
					<tbody>
						<tr>
							<td>
                                  <input type="checkbox" name="paf_9" id="paf_9" value="y" <?php if($paf_info->paf_9 =="y"){ echo "checked"; } ?> style="">
								<label for="paf_9" style="">Suspension </label>
							</td>
							<td>
								<div class="row">
									<label for="paf_from" style="">from</label>
								<input name="paf_from" id="paf_from" value="<?php echo $paf_info->paf_from?>" style="">
									<label for="paf_to" style="">to</label>
									<input name="paf_to" id="paf_to" value="<?php echo $paf_info->paf_to?>" style="">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<td>
				<input type="checkbox" name="paf_10" id="paf_10" value="y" <?php if($paf_info->paf_10 =="y"){ echo "checked"; } ?> style="">
								<label for="paf_10" style="">Involuntary Termination</label>
							</td>
							<td>
								<div class="row">
									<label for="paf_effect_date1" style="">effective date</label>
	<input name="paf_effect_date1" id="paf_effect_date1" type="date" value="<?php echo $paf_effect_date1?>" class="form-control" style="width: inherit; margin-left: 9em;">
								</div>
							</td>
							<td>
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<td>
				<input type="checkbox" name="paf_11" id="paf_11" value="y" <?php if($paf_info->paf_11 =="y"){ echo "checked"; } ?> style="">
								<label for="paf_11" style="">Voluntary Termination</label>
							</td>
							<td>
								<div class="row">
									<label for="paf_effect_date2" style="">effective date</label>
	<input name="paf_effect_date2" id="paf_effect_date2" type="date" value="<?php echo $paf_effect_date2?>" class="form-control" style="width: inherit; margin-left: 9em;">
								</div>
								<div class="row">
									<label for="paf_interview" style="">exit interview ?</label>
									<span>
										<label for="paf_interview1" style="">Y</label>
<input type="radio" name="paf_interview1" id="paf_interview1" value="y" <?php if($paf_info->paf_interview1 =="y"){ echo "checked"; } ?> style="">
										
									</span>
									
									<span>
										<label for="paf_interview1" style="">N</label>
<input type="radio" name="paf_interview1" id="paf_interview2" value="n" <?php if($paf_info->paf_interview1 =="n"){ echo "checked"; } ?> style="">
									</span>
								</div>
							</td>
							<td>
							</td>
							<td>
								<div class="row">
									<label for="paf_eligible" style="padding-top: 2em;">eligible to rehire ?</label>
									<span>
										<label for="last-name" style="">Y</label>
<input type="radio" name="paf_eligible" id="paf_eligible" value="y" <?php if($paf_info->paf_eligible =="y"){ echo "checked"; } ?> style="">
									</span>
									
									<span>
										<label for="paf_eligible" style="">N</label>
<input type="radio" name="paf_eligible" id="paf_eligible" value="n" <?php if($paf_info->paf_eligible =="n"){ echo "checked"; } ?> style="">
									</span>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<br />
			<br />
			
			<div class="row">
				<div class="col-sm-2">
					<label for="paf_comments" style="margin-top: 1em;">Comments</label>
				</div>
				<div class="col-sm-8">
					<textarea name="paf_comments" id="paf_comments" style="width: inherit;"><?php echo $paf_info->paf_comments?></textarea>
				</div>
			</div>
			<br />
			<p></p>
			<div class="row">
				<div class="col-sm-6" style="text-align:center;">
					<img id="paf_signature" src="<?php echo $rn_info->signature?>" alt="Employee’s signature">
					<p></p>
					<label for="paf_empsign" style="display: inline; width: initial;">Employee Signature</label>
				</div>
				<p></p>
				<div class="col-sm-6" style="text-align:center;">
					<input id="paf_empdate" name="paf_empdate" value="<?php echo $paf_info->paf_empdate?>" type="date" class="form-control" style="display: inline; width: initial;"/>
					<p></p>
					<label for="paf_empdate" style="">Date</label>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-6" style="text-align:center;">
					<img src="" style="max-width:100%;" alt="DPCS signature">
					<p></p>
					<label for="paf_dpcssign" style="display: inline; width: initial;">DPCS Signature</label>
				</div>
				<p></p>
				<div class="col-sm-6" style="text-align:center;">
					<input id="paf_dpcsdate" name="paf_dpcsdate" value="<?php echo $paf_info->paf_dpcsdate?>" type="date" class="form-control" style="display: inline; width: initial;"/>
					<p></p>
					<label for="paf_dpcsdate" style="">Date</label>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-6" style="text-align:center;">
					<img src="" style="max-width:100%;" alt="Administrator signature">
					<p></p>
					<label for="paf_adminsign" style="display: inline; width: initial;">Administrator Signature</label>
				</div>
				<p></p>
				<div class="col-sm-6" style="text-align:center;">
					<input id="paf_admindate" name="paf_admindate" value="<?php echo $paf_info->paf_admindate?>" type="date" class="form-control" style="display: inline; width: initial;"/>
					<p></p>
					<label for="paf_admindate" style="">Date</label>
				</div>
			</div>
			
			<br />
			<div class="row" style="text-align:center;">
				<span>
					<p><b>(Note: Where will the expired licenses or forms be stored? Old documents need to be accessible.)</b></p>
				</span>
			</div>
		</form>
               <button onclick="callfunc()" type="button" class="btn btn-primary btn-block" style="width: 20%; float: right;">Next</button>
	</div>
<script>
    $.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

function callfunc(){
	$('#paf_form').val(JSON.stringify($('form.pafform').serializeObject()));
	$("#myModalRC").hide();
	return false;
}
</script>
