	<div class="container" style="width:100%; padding-left: 2em; padding-right: 2em;">
		<div class="section-header row" style="text-align: center;">
			<h2>ORIENTATION CHECKLIST</h2>
				
		</div>
		
		<style>
			label{
				font-weight: bold;
			}
		</style>
		
		
		<hr class="heavy" style="border: solid black; border-width: 1ex 0 1px; height: .5ex; margin: 0; margin-top: 1em;"/>
			<br />
		<form method="post" class="ocform" action="#">
			<div class="row">
				<div class="col-sm-3">
					<label for="employee-name" style="display: inline; width: initial;">EMPLOYEE:</label>
				</div>
				<div class="col-sm-3">
					<input id="employee_name" name="employee_name" value="<?php echo $oc_info->employee_name ?>" class="form-control" style="display: inline; width: initial;"/>
				</div>
				<div class="col-sm-3">
					<label for="position" style="display: inline; width: initial;">POSITION:</label>
				</div>
				<div class="col-sm-3">
					<input id="position" name="position" value="<?php echo $oc_info->position ?>" class="form-control" style="display: inline; width: initial;"/>
				</div>
			</div>
			<hr class="" style="height: .5ex; margin: 0; margin-top: 1em;"/>
			<br />
			
			
			<br />
			<div class="row" style="margin:auto; font-size: initial;">
				<span>
					<label>CLASSIFICATION</label>
				</span>
				<table class="table">
					<thead>
						<tr>
							<th style="text-align:;"> Sn </th>
							<th style="text-align:;"> ORIENTATION TO </th>
							<th style="text-align:;"> YES </th>
							<th style="text-align:;"> N/A </th>
							<!--<th style="text-align:;"> SIGNATURE </th>-->
							<th style="text-align:;"> DATE </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Basic Home safety: bathroom, electrical, environmental and fire</td>
			<td><input type="radio" name="oc_bhs" value="y" <?php if($oc_info->oc_bhs =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_bhs" value="n" <?php if($oc_info->oc_bhs =="n"){ echo "checked"; } ?> style=""></td>
			<td><input type="date" name="oc_bhs_date" id="oc_bhs_date" value="<?php echo $oc_info->oc_bhs_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Safety program:</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td>A. Risks within Hospice and patient's home</td>
			<td><input type="radio" name="oc_risk" value="y" <?php if($oc_info->oc_risk =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_risk" value="n" <?php if($oc_info->oc_risk =="n"){ echo "checked"; } ?> style=""></td>
			<td><input type="date" name="oc_risk_date" id="oc_risk_date" value="<?php echo $oc_info->oc_risk_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td></td>
							<td>B. Actions to eliminate, minimize or report risks</td>
			<td><input type="radio" name="oc_eliminate" value="y" <?php if($oc_info->oc_eliminate =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_eliminate" value="n" <?php if($oc_info->oc_eliminate =="n"){ echo "checked"; } ?> style=""></td>
        <td><input type="date" name="oc_eliminate_date" id="oc_eliminate_date" value="<?php echo $oc_info->oc_eliminate_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td></td>
							<td>C. Incident reporting and procedures to follow</td>
			<td><input type="radio" name="oc_incident" value="y" <?php if($oc_info->oc_incident =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_incident" value="n" <?php if($oc_info->oc_incident =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_incident_date" id="oc_incident_date" value="<?php echo $oc_info->oc_incident_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td></td>
							<td>D. Reporting processes for common problems, failures and user errors</td>
			<td><input type="radio" name="oc_report" value="y" <?php if($oc_info->oc_report =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_report" value="n" <?php if($oc_info->oc_report =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_report_date" id="oc_report_date" value="<?php echo $oc_info->oc_report_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Storage/handling/access to/transport of supplies/medical gases/drugs</td>
			<td><input type="radio" name="oc_storage" value="y" <?php if($oc_info->oc_storage =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_storage" value="n" <?php if($oc_info->oc_storage =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_storage_date" id="oc_storage_date" value="<?php echo $oc_info->oc_storage_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>4</td>
							<td>ID/handling/disposal of infectious wastes(blood & body fluids/precautions)</td>
			<td><input type="radio" name="oc_infect" value="y" <?php if($oc_info->oc_infect =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_infect" value="n" <?php if($oc_info->oc_infect =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_infect_date" id="oc_infect_date" value="<?php echo $oc_info->oc_infect_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>5</td>
							<td>Id/handling/disposal of hazardous waste(cytotoxic/chemotherapy drugs)</td>
			<td><input type="radio" name="oc_hazard" value="y" <?php if($oc_info->oc_hazard =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_hazard" value="n" <?php if($oc_info->oc_hazard =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_hazard_date" id="oc_hazard_date" value="<?php echo $oc_info->oc_hazard_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>6</td>
							<td>Infection Control and Prevention:</td>
						</tr>
						<tr>
							<td></td>
							<td>A. Personal hygiene(e.g., PPE & Hand hygiene)</td>
			<td><input type="radio" name="oc_hygiene" value="y" <?php if($oc_info->oc_hygiene =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_hygiene" value="n" <?php if($oc_info->oc_hygiene =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_hygiene_date" id="oc_hygiene_date" value="<?php echo $oc_info->oc_hygiene_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td></td>
							<td>B. Aseptic procedures</td>
			<td><input type="radio" name="oc_aseptic" value="y" <?php if($oc_info->oc_aseptic =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_aseptic" value="n" <?php if($oc_info->oc_aseptic =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_aseptic_date" id="oc_aseptic_date" value="<?php echo $oc_info->oc_aseptic_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td></td>
							<td>C. Communicable infections(TB, AIDS, etc.)</td>
			<td><input type="radio" name="oc_cinfect" value="y" <?php if($oc_info->oc_cinfect =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_cinfect" value="n" <?php if($oc_info->oc_cinfect =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_cinfect_date" id="oc_cinfect_date" value="<?php echo $oc_info->oc_cinfect_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td></td>
							<td>D. Cleaning/disinfection reusable equipment</td>
			<td><input type="radio" name="oc_disinfect" value="y" <?php if($oc_info->oc_disinfect =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_disinfect" value="n" <?php if($oc_info->oc_disinfect =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_disinfect_date" id="oc_disinfect_date" value="<?php echo $oc_info->oc_disinfect_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td></td>
							<td>E. Precautions to be taken (Standard Precautions,airborne, transmission, direct/indirect contact, compromised immunity)</td>
			<td><input type="radio" name="oc_precaut" value="y" <?php if($oc_info->oc_precaut =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_precaut" value="n" <?php if($oc_info->oc_precaut =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_precaut_date" id="oc_precaut_date" value="<?php echo $oc_info->oc_precaut_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>7</td>
							<td>Confidentiality of patient information/HIPAA policies and practices</td>
			<td><input type="radio" name="oc_hipaa" value="y" <?php if($oc_info->oc_hipaa =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_hipaa" value="n" <?php if($oc_info->oc_hipaa =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_hipaa_date" id="oc_hipaa_date" value="<?php echo $oc_info->oc_hipaa_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>8</td>
							<td>Community resources</td>
			<td><input type="radio" name="oc_comm_reso" value="y" <?php if($oc_info->oc_comm_reso =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_comm_reso" value="n" <?php if($oc_info->oc_comm_reso =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_comm_reso_date" id="oc_comm_reso_date" value="<?php echo $oc_info->oc_comm_reso_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>9</td>
							<td>Policies/procedures</td>
			<td><input type="radio" name="oc_policy" value="y" <?php if($oc_info->oc_policy =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_policy" value="n" <?php if($oc_info->oc_policy =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_policy_date" id="oc_policy_date" value="<?php echo $oc_info->oc_policy_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>10</td>
							<td>Responsibilities related to safety and infection control</td>
			<td><input type="radio" name="oc_safety" value="y" <?php if($oc_info->oc_safety =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_safety" value="n" <?php if($oc_info->oc_safety =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_safety_date" id="oc_safety_date" value="<?php echo $oc_info->oc_safety_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>11</td>
							<td>Advanced directives policies/procedures</td>
			<td><input type="radio" name="oc_procedure" value="y" <?php if($oc_info->oc_procedure =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_procedure" value="n" <?php if($oc_info->oc_procedure =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_procedure_date" id="oc_procedure_date" value="<?php echo $oc_info->oc_procedure_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>12</td>
							<td>Specific job duties/responsibilities and any limitations; performance</td>
			<td><input type="radio" name="oc_specific" value="y" <?php if($oc_info->oc_specific =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_specific" value="n" <?php if($oc_info->oc_specific =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_specific_date" id="oc_specific_date" value="<?php echo $oc_info->oc_specific_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>13</td>
							<td>Screening for alleged or suspected victims of abuse/neglect reporting</td>
			<td><input type="radio" name="oc_alleged" value="y" <?php if($oc_info->oc_alleged =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_alleged" value="n" <?php if($oc_info->oc_alleged =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_alleged_date" id="oc_alleged_date" value="<?php echo $oc_info->oc_alleged_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>14</td>
							<td>Emergency operations plan & role</td>
			<td><input type="radio" name="oc_emergency" value="y" <?php if($oc_info->oc_emergency =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_emergency" value="n" <?php if($oc_info->oc_emergency =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_emergency_date" id="oc_emergency_date" value="<?php echo $oc_info->oc_emergency_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>15</td>
							<td>Equipment use/management relevant to job description</td>
			<td><input type="radio" name="oc_equipment" value="y" <?php if($oc_info->oc_equipment =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_equipment" value="n" <?php if($oc_info->oc_equipment =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_equipment_date" id="oc_equipment_date" value="<?php echo $oc_info->oc_equipment_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>16</td>
							<td>Tuberculosis Program/Plan(OSHA)</td>
			<td><input type="radio" name="oc_tuber" value="y" <?php if($oc_info->oc_tuber =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_tuber" value="n" <?php if($oc_info->oc_tuber =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_tuber_date" id="oc_tuber_date" value="<?php echo $oc_info->oc_tuber_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>17</td>
							<td>Hazardous Materials in the Workplace Program(SDS)(OSHA)</td>
			<td><input type="radio" name="oc_sds" value="y" <?php if($oc_info->oc_sds =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_sds" value="n" <?php if($oc_info->oc_sds =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_sds_date" id="oc_sds_date" value="<?php echo $oc_info->oc_sds_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>18</td>
							<td>Bloodborne Pathogen Program(OSHA)</td>
			<td><input type="radio" name="oc_bpp" value="y" <?php if($oc_info->oc_bpp =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_bpp" value="n" <?php if($oc_info->oc_bpp =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_bpp_date" id="oc_bpp_date" value="<?php echo $oc_info->oc_bpp_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>19</td>
							<td>Managing the enviroment of care:(pt &Hospice site)</td>
						</tr>
						<tr>
							<td></td>
							<td>A. Safety</td>
			<td><input type="radio" name="oc_asafe" value="y" <?php if($oc_info->oc_asafe =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_asafe" value="n" <?php if($oc_info->oc_asafe =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_asafe_date" id="oc_asafe_date" value="<?php echo $oc_info->oc_asafe_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td></td>
							<td>B. Fire safety-fire escape, fire alarm system, fire extinguishers and prevention</td>
			<td><input type="radio" name="oc_fsafe" value="y" <?php if($oc_info->oc_fsafe =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_fsafe" value="n" <?php if($oc_info->oc_fsafe =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_fsafe_date" id="oc_asafe_date" value="<?php echo $oc_info->oc_fsafe_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td></td>
							<td>C. Security-Personal safety during home visits</td>
			<td><input type="radio" name="oc_sps" value="y" <?php if($oc_info->oc_sps =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_sps" value="n" <?php if($oc_info->oc_sps =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_sps_date" id="oc_sps_date" value="<?php echo $oc_info->oc_sps_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td></td>
							<td>D. Utilities</td>
			<td><input type="radio" name="oc_utility" value="y" <?php if($oc_info->oc_utility =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_utility" value="n" <?php if($oc_info->oc_utility =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_utility_date" id="oc_utility_date" value="<?php echo $oc_info->oc_utility_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td></td>
							<td>E. Responding to emergencies</td>
			<td><input type="radio" name="oc_rte" value="y" <?php if($oc_info->oc_rte =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_rte" value="n" <?php if($oc_info->oc_rte =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_rte_date" id="oc_rte_date" value="<?php echo $oc_info->oc_rte_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>20</td>
							<td>Pt rights/responsibilities</td>
			<td><input type="radio" name="oc_pr" value="y" <?php if($oc_info->oc_pr =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_pr" value="n" <?php if($oc_info->oc_pr =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_pr_date" id="oc_pr_date" value="<?php echo $oc_info->oc_pr_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>21</td>
							<td>Hospice complaint mechanism/Medicare state hotline # and purpose</td>
			<td><input type="radio" name="oc_hcm" value="y" <?php if($oc_info->oc_hcm =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_hcm" value="n" <?php if($oc_info->oc_hcm =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_hcm_date" id="oc_hcm_date" value="<?php echo $oc_info->oc_hcm_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>22</td>
							<td>QAPI program  & role</td>
			<td><input type="radio" name="oc_qapi" value="y" <?php if($oc_info->oc_qapi =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_qapi" value="n" <?php if($oc_info->oc_qapi =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_qapi_date" id="oc_qapi_date" value="<?php echo $oc_info->oc_qapi_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>23</td>
							<td>On-call & answering service</td>
			<td><input type="radio" name="oc_oas" value="y" <?php if($oc_info->oc_oas =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_oas" value="n" <?php if($oc_info->oc_oas =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_oas_date" id="oc_oas_date" value="<?php echo $oc_info->oc_oas_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>24</td>
							<td>Ethical aspects pt care, treatment and services and process to address ethical issues</td>
			<td><input type="radio" name="oc_eapc" value="y" <?php if($oc_info->oc_eapc =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_eapc" value="n" <?php if($oc_info->oc_eapc =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_eapc_date" id="oc_eapc_date" value="<?php echo $oc_info->oc_eapc_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>25</td>
							<td>Philosophy/mission/purpose/vision/goals</td>
			<td><input type="radio" name="oc_goals" value="y" <?php if($oc_info->oc_goals =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_goals" value="n" <?php if($oc_info->oc_goals =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_goals_date" id="oc_goals_date" value="<?php echo $oc_info->oc_goals_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>26</td>
							<td>Interpreters/communicating with hearing/speech/visually impaired</td>
			<td><input type="radio" name="oc_speech" value="y" <?php if($oc_info->oc_speech =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_speech" value="n" <?php if($oc_info->oc_speech =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_speech_date" id="oc_speech_date" value="<?php echo $oc_info->oc_speech_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>27</td>
							<td>Sentinel event policy/process</td>
			<td><input type="radio" name="oc_sep" value="y" <?php if($oc_info->oc_sep =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_sep" value="n" <?php if($oc_info->oc_sep =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_sep_date" id="oc_sep_date" value="<?php echo $oc_info->oc_sep_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>28</td>
							<td>Physical safety(e.g., body mechanics and safe lifting)</td>
			<td><input type="radio" name="oc_ps" value="y" <?php if($oc_info->oc_ps =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_ps" value="n" <?php if($oc_info->oc_ps =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_ps_date" id="oc_ps_date" value="<?php echo $oc_info->oc_ps_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>29</td>
							<td>Cultural diversity and sensitivity</td>
			<td><input type="radio" name="oc_cds" value="y" <?php if($oc_info->oc_cds =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_cds" value="n" <?php if($oc_info->oc_cds =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_cds_date" id="oc_cds_date" value="<?php echo $oc_info->oc_cds_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>30</td>
							<td>Conflict of interest</td>
			<td><input type="radio" name="oc_coi" value="y" <?php if($oc_info->oc_coi =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_coi" value="n" <?php if($oc_info->oc_coi =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_coi_date" id="oc_coi_date" value="<?php echo $oc_info->oc_coi_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>31</td>
							<td>Patient, family and volunteer role in Hospice care</td>
			<td><input type="radio" name="oc_prihc" value="y" <?php if($oc_info->oc_prihc =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_prihc" value="n" <?php if($oc_info->oc_prihc =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_prihc_date" id="oc_prihc_date" value="<?php echo $oc_info->oc_prihc_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>32</td>
							<td>Organizational structure, lines of authority & responsibility; supervision process</td>
			<td><input type="radio" name="oc_sp" value="y" <?php if($oc_info->oc_sp =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_sp" value="n" <?php if($oc_info->oc_sp =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_sp_date" id="oc_sp_date" value="<?php echo $oc_info->oc_sp_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>33</td>
							<td>Documentation requirements(record keeping and reporting)</td>
			<td><input type="radio" name="oc_docreq" value="y" <?php if($oc_info->oc_docreq =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_docreq" value="n" <?php if($oc_info->oc_docreq =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_docreq_date" id="oc_docreq_date" value="<?php echo $oc_info->oc_docreq_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>34</td>
							<td>Communication skills and barriers</td>
			<td><input type="radio" name="oc_csb" value="y" <?php if($oc_info->oc_csb =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_csb" value="n" <?php if($oc_info->oc_csb =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_csb_date" id="oc_csb_date" value="<?php echo $oc_info->oc_csb_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>35</td>
							<td>Care and comfort measures</td>
			<td><input type="radio" name="oc_ccm" value="y" <?php if($oc_info->oc_ccm =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_ccm" value="n" <?php if($oc_info->oc_ccm =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_ccm_date" id="oc_ccm_date" value="<?php echo $oc_info->oc_ccm_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>36</td>
							<td>Assessing and managing pain and symptoms</td>
			<td><input type="radio" name="oc_amps" value="y" <?php if($oc_info->oc_amps =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_amps" value="n" <?php if($oc_info->oc_amps =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_amps_date" id="oc_amps_date" value="<?php echo $oc_info->oc_amps_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>37</td>
							<td>Concept of death and dying</td>
			<td><input type="radio" name="oc_cdd" value="y" <?php if($oc_info->oc_cdd =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_cdd" value="n" <?php if($oc_info->oc_cdd =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_cdd_date" id="oc_cdd_date" value="<?php echo $oc_info->oc_cdd_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>38</td>
							<td>Psychosocial and spiritual issues related to death and dying</td>
			<td><input type="radio" name="oc_psirdd" value="y" <?php if($oc_info->oc_psirdd =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_psirdd" value="n" <?php if($oc_info->oc_psirdd =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_psirdd_date" id="oc_psirdd_date" value="<?php echo $oc_info->oc_psirdd_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>39</td>
							<td>Bereavement</td>
			<td><input type="radio" name="oc_bereav" value="y" <?php if($oc_info->oc_bereav =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_bereav" value="n" <?php if($oc_info->oc_bereav =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_bereav_date" id="oc_bereav_date" value="<?php echo $oc_info->oc_bereav_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>40</td>
							<td>Stress management, including emotional support</td>
			<td><input type="radio" name="oc_smies" value="y" <?php if($oc_info->oc_smies =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_smies" value="n" <?php if($oc_info->oc_smies =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_smies_date" id="oc_smies_date" value="<?php echo $oc_info->oc_smies_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>41</td>
							<td>Completion of Hospice Training Program</td>
			<td><input type="radio" name="oc_chtp" value="y" <?php if($oc_info->oc_chtp =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_chtp" value="n" <?php if($oc_info->oc_chtp =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_chtp_date" id="oc_chtp_date" value="<?php echo $oc_info->oc_chtp_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>42</td>
							<td>Professional boundaries</td>
			<td><input type="radio" name="oc_profbound" value="y" <?php if($oc_info->oc_profbound =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_profbound" value="n" <?php if($oc_info->oc_profbound =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_profbound_date" id="oc_profbound_date" value="<?php echo $oc_info->oc_profbound_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>43</td>
							<td>Corporate Compliance Plan</td>
			<td><input type="radio" name="oc_ccp" value="y" <?php if($oc_info->oc_ccp =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_ccp" value="n" <?php if($oc_info->oc_ccp =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_ccp_date" id="oc_ccp_date" value="<?php echo $oc_info->oc_ccp_date?>" style="width: 88%;"></td>
						</tr>
						<tr>
							<td>44</td>
							<td>Diseases and medical conditions common to Hospice.</td>
			<td><input type="radio" name="oc_dmcch" value="y" <?php if($oc_info->oc_dmcch =="y"){ echo "checked"; } ?> style=""></td>
			<td><input type="radio" name="oc_dmcch" value="n" <?php if($oc_info->oc_dmcch =="n"){ echo "checked"; } ?> style=""></td>
	<td><input type="date" name="oc_dmcch_date" id="oc_dmcch_date" value="<?php echo $oc_info->oc_dmcch_date?>" style="width: 88%;"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="row">
				<span>
					<div>(Note: See Job_specific Competency Checklist for Skills)</div>
				</span>
			</div>
			<br />
			
			<p></p>
			<div class="row">
				<div class="col-sm-6" style="text-align:center;">
					
				<img id="electronic_signature" src="<?php echo $rn_info->signature; ?>" style="max-width:100%;" alt="Employee’s signature">
					
					<p></p>
					<label for="last-name" style="display: inline; width: initial;">Employee Signature</label>
				</div>
				<p></p>
				<div class="col-sm-6" style="text-align:center;">
					<input id="last-name" type="date" class="form-control" style="display: inline; width: initial;"/>
					<p></p>
					<label for="last-name" style="">Date</label>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-6" style="text-align:center;">
					<!--<img src="C:/Users/Admin/Desktop/ganesh_doc/05012017/print for signature/praveen.png" style="max-width:100%;" alt="Employee’s signature">-->
					<p></p>
					<label for="last-name" style="display: inline; width: initial;">Supervisor Signature</label>
				</div>
				<p></p>
				<div class="col-sm-6" style="text-align:center;">
					<input id="last-name" type="date" class="form-control" style="display: inline; width: initial;"/>
					<p></p>
					<label for="last-name" style="">Date</label>
				</div>
			</div>
			<br />


                     <div class="row">
				
				<div class="col-sm-4">
                                        	 <img src="<?php
                                if (!empty($admin_info->esignature)) {
                                    echo $admin_info->esignature;
                                }
                                ?>"/>	
					
					<p>Administrator's Signature</p>
				</div>
				
			</div>                  

		</form>
		
		<button onclick="callfunc()" type="button" class="btn btn-primary btn-block" style="width: 20%; float: right;">Next</button>
	<br />
	<br />
	</div>
		
<script>
    $.fn.serializeObject = function(){
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

function callfunc(){ debugger;
	$("#oc_form").val(JSON.stringify($("form.ocform").serializeObject()));
	$("#myModalRC").hide();
	return false;
}
</script>

