	<div class="container" style="width:100%; padding-left: 2em; padding-right: 2em;">

		<div class="section-header row">
			<div class="col-sm-3 dhs-seal">
			<!--
			<img src="images/dhs.png" alt="DHS Seal"/>
			-->
			</div>

			<div class="col-sm-6" style="text-align:center;">
			<h1>STATEMENT & ACKNOWLEDGEMENT</h1>

			<!--
			<div><strong>Department of Homeland Security</strong></div>
			U.S. Citizenship and Immigration Services
			-->
			</div>

			<div class="col-sm-3">
			<!--
			<strong><br> Form W-4</strong>
			
			<small>
			<div>OMB No. 1615-0047</div>
			<div>Expires 03/31/2016</div>
			</small>
			-->
			</div>
		</div>
<style>
	label{
		    font-weight: bold;
	}
</style>
	
	
    <hr class="heavy"/>
		<br />
	<form method="post" action="#">
		<div class="row" style="text-align: justify;">
			<div class="row">
				<div class="col-sm-8" style="">
					<label for="last-name">CONFLICT OF INTEREST DISCLOSURE STATEMENT</label>
				</div>
				<div class="col-sm-4">
					Initial<input id="" type="checkbox" class="" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					I have received a copy of the Conflict of Interest Disclosure Statement. I was given an opportunity to ask questions and I fully understand my responsibilities.
				</span>
			</div>
			<br />
			
			<div class="row">
				<div class="col-sm-8">
					<label for="last-name">ATTESTATION OF CORPORATE COMPLIANCE PLAN</label>
				</div>
				<div class="col-sm-4">
					Initial<input id="" type="checkbox" class="" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					As an employee / contractor of Lifelink Health Providers, Inc., I do hereby attest that I have read the Policy and Procedure pertaining to Medicare/Medical Fraud and Abuse (Corporate Compliance Plan). I also had the opportunity to ask questions and I am aware that if I have any queries or concerns, I will consult with the Corporate Compliance Officer.
				</span>
			</div>
			<br />
			
			<div class="row">
				<div class="col-sm-8">
					<label for="last-name">CONFIDENTIALITY STATEMENT</label>
				</div>
				<div class="col-sm-4">
					Initial<input id="" type="checkbox" class="" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					I have received a copy of the Confidentiality Statement. I was given an opportunity to ask questions and I fully understand my responsibilities.
				</span>
			</div>
			<br />
			
			<div class="row">
				<div class="col-sm-8">
					<label for="last-name">SECURITY STATEMENT</label>
				</div>
				<div class="col-sm-4">
					Initial<input id="" type="checkbox" class="" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					I have received a copy of the Security Agreement. I was given an opportunity to ask questions and I fully understand my responsibilities.
				</span>
			</div>
			<br />
			
			<div class="row">
				<div class="col-sm-8">
					<label for="last-name">CHILD ABUSE REPORTING STATEMENT</label>
				</div>
				<div class="col-sm-4">
					Initial<input id="" type="checkbox" class="" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					I acknowledge the provisions of Section 11166 of the California Penal Code of which I have a copy and I will comply with its provisions.
				</span>
			</div>
			<br />
			
			<div class="row">
				<div class="col-sm-8">
					<label for="last-name">DEPENDENT ADULT ABUSE REPORTING STATEMENT</label>
				</div>
				<div class="col-sm-4">
					Initial<input id="" type="checkbox" class="" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					I acknowledge the provisions of Section 15630 of the California Welfare Code of which I have a copy and I will comply with its provisions.
				</span>
			</div>
			<br />
			
			<div class="row">
				<div class="col-sm-8">
					<label for="last-name">SEXUAL HARRASSMENT</label>
				</div>
				<div class="col-sm-4">
					Initial<input id="" type="checkbox" class="" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					I certify that I have read and understood the Law and Agency Policy on Sexual Harassment and I will comply with the same. I understand that sexual harassment is prohibited by law and is a ground for dismissal from the Agency.
				</span>
				<p></p>
				<br />
				<span>
					<p style="font-weight:bold;">I acknowledge understanding each preceding Statements and I am aware that I will be subject to probation or termination should I violate any of the provisions therein.</p>
				</span>
			</div>
			<p></p>
			<br />
			<br />
			<br />
		</div>
		
		<div class="row">
			<div class="row">
				<div class="col-sm-3">
					<label for="last-name">Name and Title of Employee/Contractor</label>
				</div>
				<div class="col-sm-3"><input id="last-name" class="form-control" value="<?php echo $rn_info->first_name.' '.$rn_info->last_name?>" style="display: inline;"/></div>
				

				
			</div>
			<div class="row">
				<div class="col-sm-3">
					<label for="last-name">Signature and Date</label>
				</div>
                                <img src="<?php echo $rn_info->signature; ?>" >
				<div class="col-sm-3"><input id="last-name" type="date" class="form-control" style="display: inline;"/></div>
				
				
			</div>
		</div>
		
		
		
    </form>