<div>	
	<div class="container" style="width:100%; padding-left: 2em; padding-right: 2em;">

		<div class="section-header row">
			<div class="col-sm-3 dhs-seal">
			<!--
			<img src="images/dhs.png" alt="DHS Seal"/>
			-->
			</div>

			<div class="col-sm-6" style="text-align:center;">
				<h1>VERIFICATION AND REFERENCE CHECK</h1>
			</div>

			<div class="col-sm-3">
			
			</div>
		</div>

	
	
    <hr class="heavy"/>
		<br />
		<form method="post" class="rcform" action="">

			<div class="row" style="text-align: justify;">
				<div class="col-md-1">
					<label for="last-name">DATE: </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="date" style="display: inline;" name="rc_date" value="<?php echo $rc_info->rc_date?>" />
				</div>
				<div class="col-md-4"></div>
			</div>
			<p></p>
			<div class="row" style="text-align: justify;">
				<div class="col-md-1">
					<label for="last-name">TO: </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" style="display: inline;" name="rc_to" value="<?php echo $rc_info->rc_to?>" />
				</div>
				<div class="col-md-4"></div>
			</div>
			<p></p>
			<div class="row" style="text-align: justify;">
				<div class="col-md-1">
					<label for="last-name">ADDRESS: </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" style="display: inline;" name="rc_address" value="<?php echo $rc_info->rc_address?>" />
				</div>
				<div class="col-md-4"></div>
			</div>
			<p></p>
			<div class="row" style="text-align: justify;">
				<div class="col-md-1">
					<label for="last-name">PHONE: </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" style="display: inline;" name="rc_phone" value="<?php echo $rc_info->rc_phone?>" />
				</div>
				<div class="col-md-4"></div>
			</div>
			<p></p>
			<div class="row" style="text-align: justify;">
				<div class="col-md-1">
					<label for="last-name">EMAIL/FAX: </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" style="display: inline;" name="rc_email_fax" value="<?php echo $rc_info->rc_email_fax?>" />
				</div>
				<div class="col-md-4"></div>
			</div>
			<br />
		
			<p style="font-size: 12pt; font-style: oblique;">The undersigned, having applied for a position with this home health agency, does hereby authorize you to please provide its authorized representative with the information requested herein. I specially consent to disclosure in accordance with the provisions of all applicable and state laws.</p>
			
			<br />
			
			<div class="row">
				<div class="col-sm-4">
					<label for="last-name">Name: </label>
					<input class="form-control" style="display: inline; width: initial;" name="rc_name" value="<?php echo $rc_info->rc_name?>" />
				</div>
				<div class="col-sm-4">
					<label for="last-name">SSN: </label>
					<input class="form-control" style="display: inline; width: initial;" name="rc_ssn" value="<?php echo $rc_info->rc_ssn?>" />
				</div>
				<div class="col-sm-4">
					<label for="last-name">Position: </label>
					<input class="form-control" style="display: inline; width: initial;" name="rc_position" value="<?php echo $rc_info->rc_position?>" />
				</div>
			</div>
			<br />
			<p></p>
			
			<div class="row">
				<div class="col-sm-4">
					<label for="last-name">Date of Employment: </label>
					<input class="form-control" type="date" style="display: inline; width: initial;" name="rc_date_of_employment" value="<?php echo $rc_info->rc_date_of_employment?>" />
				</div>
			</div>
			<p></p>
			<div class="row">
				<div class="col-sm-4">
					<label for="last-name">Application Signature: </label>
					<input class="form-control" style="display: inline; width: initial;" name="rc_application_sign" value="<?php echo $rc_info->rc_application_sign?>" />
				</div>
			</div>
			<p></p>
			
			<div class="container" style="border: 1px solid black; width: inherit;">
				
				<div class="row" style="border: 1px solid black; width: inherit;">
					<p style="text-align:center;"><b>TO BE FILLED OUT BY APPLICANT’S FORMER EMPLOYER:</b></p>
				</div>
				
				<div class="row" style="border: 1px solid black; width: inherit;">
					<label for="last-name" style="float:left;">Is the above information correct?</label>
					<div style="padding-left:19em;">
						<label for="last-name" style="float:left;">Yes</label><input type="radio" name="rc_information" style="float: left;" value="1" <?php if($rc_info->rc_information =="1"){ echo "checked"; } ?>>
						<label for="last-name" style="float:left;">No</label><input type="radio" name="rc_information" style="float: left;" value="2" <?php if($rc_info->rc_information =="2"){ echo "checked"; } ?>>
					</div>
				</div>
				<div class="row" style="border: 1px solid black; width: inherit;">
					<label for="last-name" style="float:left;">Is applicant eligible for rehire?</label>
					<div style="padding-left:19em;">
						<label for="last-name" style="float:left;">Yes</label><input type="radio" name="rc_applicant" style="float: left;" value="1" <?php if($rc_info->rc_applicant =="1"){ echo "checked"; } ?>>
						<label for="last-name" style="float:left;">No</label><input type="radio" name="rc_applicant" style="float: left;" value="2" <?php if($rc_info->rc_applicant =="2"){ echo "checked"; } ?>>
					</div>
				</div>
				
				<div class="row" style="border: 1px solid black; width: inherit;">
					<p style="">PLEASE RATE APPLICANT BASED ON HIS/HER:</p>
				</div>
				
				<div class="row" style="border: 1px solid black; width: inherit;">
					<style>
						.responsive-stacked-table.with-mobile-labels tr td:first-child {
							font-weight: 300;
						}
						.responsive-stacked-table.with-mobile-labels td:before {
							display: block;
							font-weight: bold;
						}
						.responsive-stacked-table.with-mobile-labels td:nth-of-type(1):before {
							content: "Product:";
						}
						.responsive-stacked-table.with-mobile-labels td:nth-of-type(2):before {
							content: "Processor:";
						}
						.responsive-stacked-table.with-mobile-labels td:nth-of-type(3):before {
							content: "Memory:";
						}
						.responsive-stacked-table.with-mobile-labels td:nth-of-type(4):before {
							content: "Hard Drive:";
						}
						.responsive-stacked-table.with-mobile-labels td:nth-of-type(5):before {
							content: "Graphics Card:";
						}
						
					</style>
				
					<table class="responsive-stacked-table" style="width: 100%;">
						<thead>
							<tr>
								<th> </th>
								<th>Above Average </th>
								<th>Average </th>
								<th>Below Average </th>
							</tr>
						</thead>
						<tbody>
							<tr style="">
								<td style="text-align:center;">Dependability</td>
								<td><input class="form-control" style="display: inline;" name="rc_col1" value="<?php echo $rc_info->rc_col1?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col2" value="<?php echo $rc_info->rc_col2?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col3" value="<?php echo $rc_info->rc_col3?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Punctuality</td>
								<td><input class="form-control" style="display: inline;" name="rc_col4" value="<?php echo $rc_info->rc_col4?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col5" value="<?php echo $rc_info->rc_col5?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col6" value="<?php echo $rc_info->rc_col6?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Quality of Work</td>
								<td><input class="form-control" style="display: inline;" name="rc_col7" value="<?php echo $rc_info->rc_col7?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col8" value="<?php echo $rc_info->rc_col8?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col9" value="<?php echo $rc_info->rc_col9?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Job Knowledge</td>
								<td><input class="form-control" style="display: inline;" name="rc_col10" value="<?php echo $rc_info->rc_col10?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col11" value="<?php echo $rc_info->rc_col11?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col12" value="<?php echo $rc_info->rc_col12?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Ability to Respond to Stress</td>
								<td><input class="form-control" style="display: inline;" name="rc_col13" value="<?php echo $rc_info->rc_col13?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col14" value="<?php echo $rc_info->rc_col14?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col15" value="<?php echo $rc_info->rc_col15?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Rapport with Clients/CoWorkers</td>
								<td><input class="form-control" style="display: inline;" name="rc_col16" value="<?php echo $rc_info->rc_col16?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col17" value="<?php echo $rc_info->rc_col17?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col18" value="<?php echo $rc_info->rc_col18?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Organizational Skills</td>
								<td><input class="form-control" style="display: inline; " name="rc_col19" value="<?php echo $rc_info->rc_col19?>" /> </td>
								<td><input class="form-control" style="display: inline; " name="rc_col20" value="<?php echo $rc_info->rc_col20?>" /> </td>
								<td><input class="form-control" style="display: inline; " name="rc_col21" value="<?php echo $rc_info->rc_col21?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Attitude</td>
								<td><input class="form-control" style="display: inline;" name="rc_col22" value="<?php echo $rc_info->rc_col22?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col23" value="<?php echo $rc_info->rc_col23?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rc_col24" value="<?php echo $rc_info->rc_col24?>" /> </td>
							</tr>
						</tbody>
					</table>
				</div>
				<br />
				<div class="row" style="border: 1px solid black; width: inherit;">
					<p></p>
					<div class="col-md-2">
						<label for="last-name" style="float:left;">Comments: </label>
					</div>
					<div class="col-md-10">
						<textarea rows="4" cols="50" style="width:100%" name="rc_comments" ><?php echo $rc_info->rc_comments?></textarea>
					</div>
				</div>
				
				<div class="row" style="border: 1px solid black; width: inherit;">
					<p></p>
					<div class="col-md-2">
						<label for="last-name" style="float:left;">Reasons for Leaving (if applicable):  </label>
					</div>
					<div class="col-md-10">
						<input class="form-control" style="display: inline;" name="rc_reasons" value="<?php echo $rc_info->rc_reasons?>" /> 
					</div>
					<p></p>
				</div>
				
				<div class="row" style="border: 1px solid black; width: inherit;">
					<p></p>
					<div class="col-md-6">
						<div class="col-md-4">
							<label for="last-name" style="float:left; margin-top: .5em;">Printed Name:  </label>
						</div>
						
						<input class="form-control" style="display: inline; width: inherit;" name="rc_print_name" value="<?php echo $rc_info->rc_print_name?>" />
						<p></p>
					</div>
					<div class="col-md-6">
						<label for="last-name" style="float:left; margin-top: .5em;">Title:  </label>
						<input class="form-control" style="display: inline; width: inherit; margin-left: 4em;" name="rc_title" value="<?php echo $rc_info->rc_title?>" />
						<p></p>
					</div>
					<p></p>
				</div>
				
				<div class="row" style="border: 1px solid black; width: inherit;">
					<p></p>
					<div class="col-md-6">
						<div class="col-md-4">
							<label for="last-name" style="float:left; margin-top: .5em;">Signature:  </label>
						</div>
						
						<img src="<?php echo $rn_info->signature; ?>" style="max-width:100%;">
						<p></p>
					</div>
					<div class="col-md-6">
						<label for="last-name" style="float:left; margin-top: .5em;">Date:  </label>
						<input type="date" class="form-control" style="display: inline; width: inherit; margin-left: 4em;" name="rc_sign_date" value="<?php echo $rc_info->rc_sign_date?>" />
						<p></p>						
					</div>
					<p></p>
				</div>
				
				<div class="row" style="border: 1px solid black; width: inherit;">
					<p></p>
					<div class="col-md-6">
						<div class="col-md-4">
							<label for="last-name" style="float:left; margin-top: .5em;">Information Verified By:  </label>
						</div>
						
						<input class="form-control" style="display: inline; width: inherit;" name="rc_verify_name" value="<?php echo $rc_info->rc_verify_name?>" />
						<p></p>
					</div>
					<div class="col-md-6">
						<label for="last-name" style="float:left; margin-top: .5em;">Date:  </label>
						<input type="date" class="form-control" style="display: inline; width: inherit; margin-left: 4em;" name="rc_verify_date" value="<?php echo $rc_info->rc_verify_date?>" />
						<p></p>
					</div>
					<p></p>
				</div>
			</div>
		<br />
		<br />
		<br />
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

function callfunc(){	debugger;
	$("#rc_form").val(JSON.stringify($("form.rcform").serializeObject()));
	$("#myModalRC").hide();
	return false;
}
</script>