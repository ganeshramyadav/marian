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
		<form method="post" class="rccform" action="">

			<div class="row" style="text-align: justify;">
				<div class="col-md-1">
					<label for="last-name">DATE: </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="date" style="display: inline;" name="rcc_date" value="<?php echo $rcc_info->rcc_date?>" />
				</div>
				<div class="col-md-4"></div>
			</div>
			<p></p>
			<div class="row" style="text-align: justify;">
				<div class="col-md-1">
					<label for="last-name">TO: </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" style="display: inline;" name="rcc_to" value="<?php echo $rcc_info->rcc_to?>" />
				</div>
				<div class="col-md-4"></div>
			</div>
			<p></p>
			<div class="row" style="text-align: justify;">
				<div class="col-md-1">
					<label for="last-name">ADDRESS: </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" style="display: inline;" name="rcc_address" value="<?php echo $rcc_info->rcc_address?>" />
				</div>
				<div class="col-md-4"></div>
			</div>
			<p></p>
			<div class="row" style="text-align: justify;">
				<div class="col-md-1">
					<label for="last-name">PHONE: </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" style="display: inline;" name="rcc_phone" value="<?php echo $rcc_info->rcc_phone?>" />
				</div>
				<div class="col-md-4"></div>
			</div>
			<p></p>
			<div class="row" style="text-align: justify;">
				<div class="col-md-1">
					<label for="last-name">EMAIL/FAX: </label>
				</div>
				<div class="col-md-6">
					<input class="form-control" style="display: inline;" name="rcc_email_fax" value="<?php echo $rcc_info->rcc_email_fax?>" />
				</div>
				<div class="col-md-4"></div>
			</div>
			<br />
		
			<p style="font-size: 12pt; font-style: oblique;">The undersigned, having applied for a position with this home health agency, does hereby authorize you to please provide its authorized representative with the information requested herein. I specially consent to disclosure in accordance with the provisions of all applicable and state laws.</p>
			
			<br />
			
			<div class="row">
				<div class="col-sm-4">
					<label for="last-name">Name: </label>
					<input class="form-control" style="display: inline; width: initial;" name="rcc_name" value="<?php echo $rcc_info->rcc_name?>" />
				</div>
				<div class="col-sm-4">
					<label for="last-name">SSN: </label>
					<input class="form-control" style="display: inline; width: initial;" name="rcc_ssn" value="<?php echo $rcc_info->rcc_ssn?>" />
				</div>
				<div class="col-sm-4">
					<label for="last-name">Position: </label>
					<input class="form-control" style="display: inline; width: initial;" name="rcc_position" value="<?php echo $rcc_info->rcc_position?>" />
				</div>
			</div>
			<br />
			<p></p>
			
			<div class="row">
				<div class="col-sm-4">
					<label for="last-name">Date of Employment: </label>
					<input class="form-control" type="date" style="display: inline; width: initial;" name="rcc_date_of_employment" value="<?php echo $rcc_info->rcc_date_of_employment?>" />
				</div>
			</div>
			<p></p>
			<div class="row">
				<div class="col-sm-4">
					<label for="last-name">Application Signature: </label>
					<input class="form-control" style="display: inline; width: initial;" name="rcc_application_sign" value="<?php echo $rcc_info->rcc_application_sign?>" />
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
						<label for="last-name" style="float:left;">Yes</label><input type="radio" name="rcc_information" style="float: left;" value="1" <?php if($rcc_info->rcc_information =="1"){ echo "checked"; } ?>>
						<label for="last-name" style="float:left;">No</label><input type="radio" name="rcc_information" style="float: left;" value="2" <?php if($rcc_info->rcc_information =="2"){ echo "checked"; } ?>>
					</div>
				</div>
				<div class="row" style="border: 1px solid black; width: inherit;">
					<label for="last-name" style="float:left;">Is applicant eligible for rehire?</label>
					<div style="padding-left:19em;">
						<label for="last-name" style="float:left;">Yes</label><input type="radio" name="rcc_applicant" style="float: left;" value="1" <?php if($rcc_info->rcc_applicant =="1"){ echo "checked"; } ?>>
						<label for="last-name" style="float:left;">No</label><input type="radio" name="rcc_applicant" style="float: left;" value="2" <?php if($rcc_info->rcc_applicant =="2"){ echo "checked"; } ?>>
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
								<td><input class="form-control" style="display: inline;" name="rcc_col1" value="<?php echo $rcc_info->rcc_col1?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col2" value="<?php echo $rcc_info->rcc_col2?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col3" value="<?php echo $rcc_info->rcc_col3?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Punctuality</td>
								<td><input class="form-control" style="display: inline;" name="rcc_col4" value="<?php echo $rcc_info->rcc_col4?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col5" value="<?php echo $rcc_info->rcc_col5?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col6" value="<?php echo $rcc_info->rcc_col6?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Quality of Work</td>
								<td><input class="form-control" style="display: inline;" name="rcc_col7" value="<?php echo $rcc_info->rcc_col7?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col8" value="<?php echo $rcc_info->rcc_col8?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col9" value="<?php echo $rcc_info->rcc_col9?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Job Knowledge</td>
								<td><input class="form-control" style="display: inline;" name="rcc_col10" value="<?php echo $rcc_info->rcc_col10?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col11" value="<?php echo $rcc_info->rcc_col11?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col12" value="<?php echo $rcc_info->rcc_col12?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Ability to Respond to Stress</td>
								<td><input class="form-control" style="display: inline;" name="rcc_col13" value="<?php echo $rcc_info->rcc_col13?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col14" value="<?php echo $rcc_info->rcc_col14?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col15" value="<?php echo $rcc_info->rcc_col15?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Rapport with Clients/CoWorkers</td>
								<td><input class="form-control" style="display: inline;" name="rcc_col16" value="<?php echo $rcc_info->rcc_col16?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col17" value="<?php echo $rcc_info->rcc_col17?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col18" value="<?php echo $rcc_info->rcc_col18?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Organizational Skills</td>
								<td><input class="form-control" style="display: inline; " name="rcc_col19" value="<?php echo $rcc_info->rcc_col19?>" /> </td>
								<td><input class="form-control" style="display: inline; " name="rcc_col20" value="<?php echo $rcc_info->rcc_col20?>" /> </td>
								<td><input class="form-control" style="display: inline; " name="rcc_col21" value="<?php echo $rcc_info->rcc_col21?>" /> </td>
							</tr>
							<tr>
								<td style="text-align:center;">Attitude</td>
								<td><input class="form-control" style="display: inline;" name="rcc_col22" value="<?php echo $rcc_info->rcc_col22?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col23" value="<?php echo $rcc_info->rcc_col23?>" /> </td>
								<td><input class="form-control" style="display: inline;" name="rcc_col24" value="<?php echo $rcc_info->rcc_col24?>" /> </td>
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
						<textarea rows="4" cols="50" style="width:100%" name="rcc_comments" ><?php echo $rcc_info->rcc_comments?></textarea>
					</div>
				</div>
				
				<div class="row" style="border: 1px solid black; width: inherit;">
					<p></p>
					<div class="col-md-2">
						<label for="last-name" style="float:left;">Reasons for Leaving (if applicable):  </label>
					</div>
					<div class="col-md-10">
						<input class="form-control" style="display: inline;" name="rcc_reasons" value="<?php echo $rcc_info->rcc_reasons?>" /> 
					</div>
					<p></p>
				</div>
				
				<div class="row" style="border: 1px solid black; width: inherit;">
					<p></p>
					<div class="col-md-6">
						<div class="col-md-4">
							<label for="last-name" style="float:left; margin-top: .5em;">Printed Name:  </label>
						</div>
						
						<input class="form-control" style="display: inline; width: inherit;" name="rcc_print_name" value="<?php echo $rcc_info->rcc_print_name?>" />
						<p></p>
					</div>
					<div class="col-md-6">
						<label for="last-name" style="float:left; margin-top: .5em;">Title:  </label>
						<input class="form-control" style="display: inline; width: inherit; margin-left: 4em;" name="rcc_title" value="<?php echo $rcc_info->rcc_title?>" />
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
						<input type="date" class="form-control" style="display: inline; width: inherit; margin-left: 4em;" name="rcc_sign_date" value="<?php echo $rcc_info->rcc_sign_date?>" />
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
						
						<input class="form-control" style="display: inline; width: inherit;" name="rcc_verify_name" value="<?php echo $rcc_info->rcc_verify_name?>" />
						<p></p>
					</div>
					<div class="col-md-6">
						<label for="last-name" style="float:left; margin-top: .5em;">Date:  </label>
						<input type="date" class="form-control" style="display: inline; width: inherit; margin-left: 4em;" name="rcc_verify_date" value="<?php echo $rcc_info->rcc_verify_date?>" />
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
	$("#rcc_form").val(JSON.stringify($("form.rccform").serializeObject()));
	$("#myModalRC").hide();
	return false;
}
</script>