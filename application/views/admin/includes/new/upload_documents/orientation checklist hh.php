<div class="panel-body">
	<div class="">
		<label class="control-label" >Name <span class="required">*</span></label>
		<input type="text" name="name" ng-model="q.name" class="form-control">
	</div>

	<div class="">
		<label class="control-label" >Date<span class="required">*</span></label>
		<input type="date" name="date" ng-model="q.date" class="form-control">
	</div>
</div>

<table border="1" class="table table-hover table-striped">
	<thead style="background-color: darkgrey;">
		<tr>
			<th style="text-align: center;">CHECKLIST</th>
			<th style="text-align: center;">DATE COMPLETED</th>
			<th style="text-align: center;">ORIENTATION BY WHOM</th>
			<th style="text-align: center;">PERSONNEL INITIALS</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td> 1.	Tour of office/introduction of organization personnel</td>
			<td><input type="date" name="row001" ng-model="p.row001" value="" class="form-control"></td>
			<td><input type="text" name="row002" ng-model="p.row002" value="" class="form-control"></td>
			<td><input type="text" name="row003" ng-model="p.row003" value="" class="form-control"></td>
		</tr>
		<tr>
			<td> 2.  	Introduction to work stations</td>
			<td><input type="date" name="row011" ng-model="p.row011" value="" class="form-control"></td>
			<td><input type="text" name="row012" ng-model="p.row012" value="" class="form-control"></td>
			<td><input type="text" name="row013" ng-model="p.row013" value="" class="form-control"></td>
		</tr>
		<tr>
			<td> 3.	Completion of all employment forms</td>
			<td><input type="date" name="row021" ng-model="p.row021" value="" class="form-control"></td>
			<td><input type="text" name="row022" ng-model="p.row022" value="" class="form-control"></td>
			<td><input type="text" name="row023" ng-model="p.row023" value="" class="form-control"></td>
		</tr>
		<tr>
			<td>
				4.	Personnel file
				<ol type="A">
					<li>Application</li>
					<li>Sign job description (copy to personnel)</li>
					<li>Professional license, certification, registration, as appropriate</li>
					<li>Driver's license, as appropriate</li>
					<li>Proof of auto insurance, as appropriate</li>
					<li>Physical exam and drug test, as appropriate</li>
					<li>Standard precautions orientation</li>
					<li>Criminal background check</li>
				</ol>
			</td>
			<td><input type="date" name="row031" ng-model="p.row031" value="" class="form-control"></td>
			<td><input type="text" name="row032" ng-model="p.row032" value="" class="form-control"></td>
			<td><input type="text" name="row033" ng-model="p.row033" value="" class="form-control"></td>
		</tr>
		<tr>
			<td> 5.	Name and Photo Identification </td>
			<td><input type="date" name="row041" ng-model="p.row041" value="" class="form-control"></td>
			<td><input type="text" name="row042" ng-model="p.row042" value="" class="form-control"></td>
			<td><input type="text" name="row043" ng-model="p.row043" value="" class="form-control"></td>
		</tr>
		<tr>
			<td>
				6.	The orientation content for all personnel will include the following as applicable and appropriate to the care and service provided:
				<ol type="A">
					<li>General orientation to organization, including Mission, Philosophy, Vision</li>
					<li>Review of organizational chart</li>
					<li>Human resources processes</li>
					<li>Care and services provided by the organization</li>
					<li>Organization safety review</li>
					<li>Infection prevention and control within the organization </li>
					<li>Performance improvement process</li>
					<li>Confidentiality of organization and patient information/HIPAA</li>
					<li>Type of care delivered in the patient’s environment</li>
					<li>Available community resources</li>
					<li>Equipment management</li>
					<li>Home safety issues</li>
					<li>Storage, handling and access to supplies, medical gases and drugs</li>
					<li>Identification, handling and disposal of hazardous or infectious materials</li>
					<li>Infection control practices (specific to the home setting)</li>
					<li>Actions in unsafe situations</li>
					<li>Other patient care and service responsibilities</li>
					<li>Specific tests to be performed by organization personnel(i.e., venipuncture, HGM)</li>
					<li>Advance directives</li>
					<li>Appropriate policies and procedures</li>
					<li>Screening for abuse and negle</li>
					<li>Guideline for appropriate referrals, including timeliness</li>
					<li>Emergency preparedness within the organization and home care setting</li>
					<li>Information regarding services provided by other members of the organization personnel</li>
					<li>Death and dying</li>
					<li>Patient Rights and Responsibilities</li>
					<li>Ethical issues</li>
					<li>Cultural diversity and sensitivity</li>
				</ol>
			</td>
			<td><input type="date" name="row051" ng-model="p.row051" value="" class="form-control"></td>
			<td><input type="text" name="row052" ng-model="p.row052" value="" class="form-control"></td>
			<td><input type="text" name="row053" ng-model="p.row053" value="" class="form-control"></td>
		</tr>
	</tbody>
</table>
    
      	<div class="row">
				<div class="col-sm-4">
                                 	
					<img id="os_esign" src="<?php echo $rn_info->signature; ?>" style="max-width:100%;" >
					<p>Employee's Signature</p>
				</div>
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
                                        	 <img src="<?php
                                if (!empty($admin_info->esignature)) {
                                    echo $admin_info->esignature;
                                }
                                ?>"/>	
					
					<p>Administrator's Signature</p>
				</div>
				
			</div> 


	<button onclick="callfunc()" type="button" class="btn btn-primary btn-block" style="width: 20%; float: right;">Next</button>
	<br />
	<br />
	<br />
	