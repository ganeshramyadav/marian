	<div class="container" style="width:100%; padding-left: 2em; padding-right: 2em;">
		<div class="section-header row">
			<h2>REQUEST FOR TIME OFF</h2>
				
		</div>
		
		<style>
			label{
				font-weight: bold;
			}
		</style>
		
		
		<hr class="heavy"/>
			<br />
		<form class="rftoform" method="post" action="#">
			<div class="row">
				<span>
			<input type="checkbox" name="rfto_1" id="rfto_1" value="y" <?php if($rfto_info->rfto_1 =="y"){ echo "checked"; } ?> style="">
						<label for="last-name" style="">VACATION</label>
				</span>
				<br />
				<span>
			<input type="checkbox" name="rfto_2" id="rfto_2" value="y" <?php if($rfto_info->rfto_2 =="y"){ echo "checked"; } ?> style="">
					<label for="last-name" style="">SICK CALL</label>
				</span>
				<br />
				<span>
			<input type="checkbox" name="rfto_3" id="rfto_3" value="y" <?php if($rfto_info->rfto_3 =="y"){ echo "checked"; } ?> style="">
					<label for="last-name" style="">COMP TIME</label>
				</span>
				<br />
				<span>
			<input type="checkbox" name="rfto_4" id="rfto_4" value="y" <?php if($rfto_info->rfto_4 =="y"){ echo "checked"; } ?> style="">
					<label for="last-name" style="">LEAVE WITHOUT PAY</label>
				</span>
				<br />
				<span>
			<input type="checkbox" name="rfto_5" id="rfto_5" value="y" <?php if($rfto_info->rfto_5 =="y"){ echo "checked"; } ?> style="">
					<label for="last-name" style="">PERSONAL TIME OFF</label>
				</span>
				<br />
				<div class="row">
					<div class="col-sm-2">
						<label for="rfto_name" style="">NAME</label>
					</div>
					<div class="col-sm-4">
						<input name="rfto_name" id="rfto_name" value="<?php echo $rfto_info->rfto_name?>" style="">
					</div>
					<div class="col-sm-2">
						<label for="rfto_date" style="">DATE</label>
					</div>
					<div class="col-sm-2">
		<input type="date" id="rfto_date" name="rfto_date" value="<?php echo $rfto_info->rfto_date?>" class="form-control" style="display: inline;"/>
					</div>
				</div>
				<br />
				<div class="row">
					
						<div class="col-sm-2">
							<label for="rfto_deptname" style="">DEPARTMENT</label>
						</div>
						<div class="col-sm-4">
						<input name="rfto_deptname" id="rfto_deptname" value="<?php echo $rfto_info->rfto_deptname?>" style="">
						</div>
						<div class="col-sm-2">
							<label for="rfto_doh" style="">DOH</label>
						</div>
						<div class="col-sm-2">
							<input type="date" id="rfto_doh" name="rfto_doh" value="<?php echo $rfto_info->rfto_doh?>" class="form-control" style="display: inline;"/>
						</div>
					<p></p>
					<div class="container" style="margin-top: 3em;">
						<div class="row">
							<div class="col-sm-2">
								<label for="rfto_startdate" style="">START DATE</label>
							</div>
							<div class="col-sm-4">
								<input type="date" id="rfto_startdate" name="rfto_startdate" value="<?php echo $rfto_info->rfto_startdate?>" class="form-control" style="display: inline;"/>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-sm-2">
								<label for="last-name" style="">END DATE</label>
							</div>
							<div class="col-sm-4">
								<input type="date" id="rfto_enddate" name="rfto_enddate" value="<?php echo $rfto_info->rfto_enddate?>" class="form-control" style="display: inline;"/>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-sm-2">
								<label for="rfto_days" style="">TOTAL DAYS</label>
							</div>
							<div class="col-sm-4">
								<input name="rfto_days" id="rfto_days" value="<?php echo $rfto_info->rfto_days?>" style="">
							</div>
							<div class="col-sm-2">
								<label for="rfto_hours" style="">TOTAL HOURS</label>
							</div>
							<div class="col-sm-4">
								<input name="rfto_hours" id="rfto_hours" value="<?php echo $rfto_info->rfto_hours?>" style="">
							</div>
						</div>
						<br />
						<br />
					</div>
				</div>
			</div>
			<br />
			<hr class="" style="height: .5ex; margin: 0; margin-top: 1em;"/>
			<div class="row">
				<div class="col-sm-3">
					<label for="last-name" style="">SIGNATURE</label>
				</div>
				<div class="col-sm-5">
					<img id="rtfo_signature" src="<?php echo $rn_info->signature?>" style="max-width:100%;" alt="Employee’s signature">
				</div>
			</div>
			<hr class="" style="height: .5ex; margin: 0; margin-top: 1em;"/>
			<br />
			<div class="row">
				<div class="col-sm-3">
					<label for="rfto_availvacation" style="">AVAILABLE VACATION:  </label>
				</div>
				<div class="col-sm-3">
				<input name="rfto_availvacation" id="rfto_availvacation" value="<?php echo $rfto_info->rfto_availvacation?>" style="">
				</div>
				<div class="col-sm-3">
					<label for="rfto_availsick" style="">AVAILABLE SICK:  </label>
				</div>
				<div class="col-sm-3">
				<input name="rfto_availsick" id="rfto_availsick" value="<?php echo $rfto_info->rfto_availsick?>" style="">
				</div>
			</div>
			<br />
			<hr class="" style="height: .5ex; margin: 0; margin-top: 1em;"/>
			<br />
			<div class="row">
				<div class="row" style="margin-left: initial; padding-left: 1em;">
					<span>
						<label for="rfto_approve" style="">APPROVED</label>
						<input type="radio" name="rfto_approve" id="rfto_approve" value="y" <?php if($rfto_info->rfto_approve =="y"){ echo "checked"; } ?> style="">
										
					</span>
					<span>
						<label for="rfto_disapprove" style="">DISAPPROVED</label>
					<input type="radio" name="rfto_disapprove" id="rfto_disapprove" value="n" <?php if($rfto_info->rfto_disapprove =="n"){ echo "checked"; } ?> style="">
					</span>
				</div>
				
				<div class="col-sm-6" style="text-align:center;">
					<img src="<?php echo $admin_info->esignature?>" style="max-width:100%;" alt="Administrator’s signature" />
					<p></p>
					<label for="last-name" style="display: inline; width: initial;">ADMINISTRATOR</label>
				</div>
				<p></p>
				<div class="col-sm-6" style="text-align:center;">
					<input type="date" id="rfto_date2" name="rfto_date2" value="<?php echo $rfto_info->rfto_date2?>" class="form-control" style="display: inline;"/>
					<p></p>
					<label for="last-name" style="">Date</label>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="row" style="margin-left: initial; padding-left: 1em;">
					<span>
						<label for="rfto_approve1" style="">APPROVED</label>
						<input type="radio" name="rfto_approve1" id="rfto_approve1" value="y" <?php if($rfto_info->rfto_approve1 =="y"){ echo "checked"; } ?> style="">
										
					</span>
					<span>
						<label for="rfto_disapprove1" style="">DISAPPROVED</label>
					<input type="radio" name="rfto_disapprove1" id="rfto_disapprove1" value="n" <?php if($rfto_info->rfto_disapprove1 =="n"){ echo "checked"; } ?> style="">
					</span>
				</div>
				
				<div class="col-sm-6" style="text-align:center;">
					<img src="" style="max-width:100%;" alt="Supervisor’s signature">
					<p></p>
					<label for="last-name" style="display: inline; width: initial;">SUPERVISOR</label>
				</div>
				<p></p>
				<div class="col-sm-6" style="text-align:center;">
					<input type="date" id="rfto_date1" name="rfto_date1" value="<?php echo $rfto_info->rfto_date1?>" class="form-control" style="display: inline;"/>
					<p></p>
					<label for="last-name" style="">Date</label>
				</div>
			</div>
			<hr class="" style="height: .5ex; margin: 0; margin-top: 1em;"/>
			<br />
			<div class="row">
				<div class="col-sm-5" style="margin-top: 1em;">
					<label for="last-name" style="display: inline; width: initial;">COMMENTS / DETAIL WORK DONE FOR COMP TIME: </label><span style="font-size: small;">Use additional sheet if necessary<span>
				</div>
				<div class="col-sm-6">
					<textarea name="rfto_comments"><?php echo $rfto_info->rfto_comments?></textarea>
				</div>
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
	$('#rfto_form').val(JSON.stringify($('form.rftoform').serializeObject()));
	$("#myModalRC").hide();
	return false;
}
</script>