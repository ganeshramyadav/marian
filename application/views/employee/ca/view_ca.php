	<?php
		// echo "<pre>"; print_r($data); echo "</pre>";
		// echo "<pre>"; print_r($data1); echo "</pre>";
		// echo "<pre>"; print_r($info); echo "</pre>";
		// echo "<pre>"; print_r($name); echo "</pre>";
		
	?>
	
	<div class="row">  <!-- ***** Annual Competency form start ***** -->
	  <div class="wrap-fpanel">
		<div class="text-center">
		  <strong>ANNUAL COMPETENCY ASSESSMENT SKILLS CHECKLIST LICENSED PRACTICAL/VOCATIONAL NURSE</strong>
		</div>		
	  </div>
	
	</div> <br />
    
	<div class="row">
		<div class="panel-body ">
			<div class="row">
				<div class="col-sm-6">
					<table>
						<tr>
							<td style="width:200px;">Name:</td>
							<td><?php echo $name;?></td>
						</tr>
						<tr>
							<td>Date of Employment:</td>
							<td><?php echo $info->date_of_employment;?></td>
						</tr>
						<tr>
							<td>Date Completed:</td>
							<td><?php echo $info->date_of_completion;?></td>
						</tr>
							  
					</table>
				</div>
			</div>

			<br/>
			<p class="text-center">Verbal Test=<b>V*</b>Written Test=<b>W*</b>Observation=<b>O*</b>Demostration=<b>D*</b>Special Training=<b>ST</b></p>		
			<?php
				if($disciplineid == 1){
					$this->load->view('admin/ca/includes/view/ca'.$disciplineid.'.php'); 
				}else{
					$this->load->view('admin/ca/includes/view/loading2.gif');
				}
				
			?>
			<!--
			<table border="1" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th colspan="2"> <center>Self Assessment</center></th>
						<th rowspan="2">Competency for the Licensed Practical/Vocational Nurse</th>
						<th rowspan="2">Proficiency Required</th>
						<th rowspan="2">Evaluation Method</th>
						<th rowspan="2">Competency Validation Indicated by Preceptors Initials and Date</th>
					</tr>

					<tr>
						<td >Do you have experience with this skill?</td>
						<td >Are you competent performing the following?</td>
					</tr>
				</thead>
			

				<tbody>
					<tr>
						<td></td>
						<td></td>
						<td>
							<b>A.Demonstrates ability to process paperwork and associated functions necessary to facilitate:</b>
						</td>
						<td class="text-center"></td>
						<td> &nbsp;</td>
						<td> &nbsp;</td>
					</tr>

					<tr>
						<td></td>
						<td></td>
						<td>1.	Admission to organization</td>
						<td class="text-center"></td>
						<td></td>
						<td></td>
					</tr>

					<tr>
						<td><?php echo $info->row11; ?></td>
						<td><?php echo $info->row12; ?> </td>
						  
			
					   <td>a.	Initiates assessment form</td>
					   <td></td>
					   <td><?php echo $info->row13; ?></td>
					   <td><?php echo $info->row14; ?></td>
					</tr>

					<tr>
					   <td><?php echo $info->row21; ?></td>
						<td><?php echo $info->row22; ?></td>
						<td>b.	Initiates care plan based on assessment</td>
						<td></td>
						<td><?php echo $info->row23; ?></td>
						<td><?php echo $info->row24; ?></td>
					</tr>   

					<tr>
						<td><?php echo $info->row31; ?></td>
						<td><?php echo $info->row32; ?></td>
						<td>c.	Knowledge of nursing process</td>
						<td></td>
						<td><?php echo $info->row33; ?></td>
						<td><?php echo $info->row35; ?></td>
					</tr>

					<tr>
						<td><?php echo $info->row41; ?></td>
						<td><?php echo $info->row42; ?></td>
						<td>d.	Health history/physical exam</td>
						<td></td>
						<td><?php echo $info->row43; ?></td>
						<td><?php echo $info->row44; ?></td>
					</tr>

					<tr>
						<td><?php echo $info->row51; ?></td>
						<td><?php echo $info->row52; ?></td>
						<td>e.	Development of problem list and care planning</td>
						<td></td>
						<td><?php echo $info->row53; ?></td>
						<td><?php echo $info->row54; ?></td>
					</tr>

					<tr>
						<td><?php echo $info->row61; ?></td>
						<td><?php echo $info->row62; ?></td>
						<td>f.	Conducts complete initial evaluation</td>
						<td></td>
						<td><?php echo $info->row63; ?></td>
						<td><?php echo $info->row64; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $info->row71; ?></td>
						<td><?php echo $info->row72; ?></td>
						<td>2.	Transfer of patient</td>
						<td></td>
						<td><?php echo $info->row73; ?></td>
						<td><?php echo $info->row74; ?></td>
					</tr>

					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>3.	Care coordination/discharge planning</td>
						<td class="text-center">&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>

					<tr>
						<td><?php echo $info->row81; ?></td>
						<td><?php echo $info->row82; ?></td>
						<td>&nbsp;&nbsp; a.	Care planning</td>
						<td></td>
						<td><?php echo $info->row83; ?></td>
						<td><?php echo $info->row84; ?></td>
					</tr>
					 
					<tr>
						<td><?php echo $info->row91; ?></td>
						<td><?php echo $info->row92; ?></td>
						<td>&nbsp;&nbsp; b.	Case conference</td>
						<td></td>
						<td><?php echo $info->row93; ?></td>
						<td><?php echo $info->row94; ?></td>
					</tr>

					<tr>
						<td><?php echo $info->row101; ?></td>
						<td><?php echo $info->row102; ?></td>
						<td>&nbsp;&nbsp; c.	60 day summary</td>
						<td></td>
						<td><?php echo $info->row103; ?></td>
						<td><?php echo $info->row104; ?></td>
					</tr>

					<tr>
						<td><?php echo $info->row111; ?></td>
						<td><?php echo $info->row112; ?></td>
						<td>&nbsp;&nbsp; d.	Case management</td>
						<td></td>
						<td><?php echo $info->row113; ?></td>
						<td><?php echo $info->row114; ?></td>
					</tr>
					   
					<tr>
						<td><?php echo $info->row121; ?></td>
						<td><?php echo $info->row122; ?></td>
						<td><b>e.	Adheres to POC</b></td>
						<td></td>
						<td><?php echo $info->row123; ?></td>
						<td><?php echo $info->row124; ?></td>
					</tr>
						 
					<tr>
						<td><?php echo $info->row131; ?></td>
						<td><?php echo $info->row132; ?></td>
						<td>f.	Reports and documents key information to physician, DC planner, Case Manager, pharmacist, supervisor</td>
						<td></td>
						<td><?php echo $info->row133; ?></td>
						<td><?php echo $info->row134; ?></td>
					</tr>

					<tr>
						<td><?php echo $info->row141; ?></td>
						<td><?php echo $info->row142; ?></td>
						<td>g.	Coordinates community resources</td>
						<td></td>
						<td><?php echo $info->row143; ?></td>
						<td><?php echo $info->row144; ?></td>
					</tr>

					<tr>
						<td></td>
						<td></td>
						<td>4.	Documentation</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>

					<tr>
						<td><?php echo $info->row161; ?></td>
						<td><?php echo $info->row162; ?></td>
						<td>a.	Medicare guidelines for documentation</td>
						<td></td>
						<td><?php echo $info->row163; ?></td>
						<td><?php echo $info->row164; ?></td>
					</tr>

					<tr>
						<td><?php echo $info->row171; ?></td>
						<td><?php echo $info->row172; ?></td>
						<td>b.	Corrections to the clinical record</td>
						<td></td>
						<td><?php echo $info->row173; ?></td>
						<td><?php echo $info->row174; ?></td>
					</tr>

				   <tr>
						<td><?php echo $info->row181; ?></td>
						<td><?php echo $info->row182; ?></td>
						<td>c.	Accident/incident reports</td>
						<td></td>
						<td><?php echo $info->row183; ?></td>
						<td><?php echo $info->row184; ?></td>
					</tr>

					<tr>
						<td><?php echo $info->row191; ?></td>
						<td><?php echo $info->row192; ?></td>
						<td>d.	Clinical notes, flow charts</td>
						<td></td>
						<td><?php echo $info->row193; ?></td>
						<td><?php echo $info->row194; ?></td>
					</tr>

					<tr>
						<td></td>
						<td></td>
						<td>5.	Other</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>

					<tr>
						<td><?php echo $info->row201; ?></td>
						<td><?php echo $info->row202; ?></td>
						<td>a.	Supervision of ancillary personnel</td>
						<td></td>
						<td><?php echo $info->row203; ?></td>
						<td><?php echo $info->row204; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $info->row211; ?></td>
						<td><?php echo $info->row212; ?></td>
						<td>b.	Supply requisition and management</td>
						<td></td>
						<td><?php echo $info->row213; ?></td>
						<td><?php echo $info->row214; ?></td>
					</tr>
					
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><b>B.	Review of Systems: Demonstrates ability to obtain and document appropriate age specific history/ assessment for patients in the following categories:</b></td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>

					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>1.	Pulmonary System</td>
						<td class="text-center">&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>

					<tr>
						<td><?php echo $info->row221; ?></td>
						<td><?php echo $info->row222; ?></td>
						<td>a.	Pulmonary Assessment</td>
						<td></td>
						<td><?php echo $info->row223; ?></td>
						<td><?php echo $info->row224; ?></td>
					</tr>

				   
					<tr>
						<td><?php echo $info->row231; ?></td>
						<td><?php echo $info->row232; ?></td>
						<td>b.	Tracheostomy care</td>
						<td></td>
						<td><?php echo $info->row233; ?></td>
						<td><?php echo $info->row234; ?></td>
					</tr>

					<tr>
						<td><?php echo $info->row241; ?></td>
						<td><?php echo $info->row242; ?></td>
						<td>c.	Oxygen administration</td>
						<td></td>
						<td><?php echo $info->row243; ?></td>
						<td><?php echo $info->row244; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $info->row251; ?></td>
						<td><?php echo $info->row252; ?></td>
						<td>d.	Pharyngeal suction</td>
						<td></td>
						<td><?php echo $info->row253; ?></td>
						<td><?php echo $info->row254; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $info->row261; ?></td>
						<td><?php echo $info->row262; ?></td>
						<td>e.	Use of oral/nasal inhalers</td>
						<td></td>
						<td><?php echo $info->row263; ?></td>
						<td><?php echo $info->row264; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $info->row271; ?></td>
						<td><?php echo $info->row272; ?></td>
						<td>f.	Oxymeter</td>
						<td></td>
						<td><?php echo $info->row273; ?></td>
						<td><?php echo $info->row274; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $info->row281; ?></td>
						<td><?php echo $info->row282; ?></td>
						<td>g.	CPAP</td>
						<td></td>
						<td><?php echo $info->row283; ?></td>
						<td><?php echo $info->row284; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $info->row291; ?></td>
						<td><?php echo $info->row292; ?></td>
						<td>h.	Oxygen mask, nasal cannula, concentrator, portable oxygen</td>
						<td></td>
						<td><?php echo $info->row293; ?></td>
						<td><?php echo $info->row294; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $info->row301; ?></td>
						<td><?php echo $info->row302; ?></td>
						<td>i.	Airway insertion</td>
						<td></td>
						<td><?php echo $info->row303; ?></td>
						<td><?php echo $info->row304; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $info->row311; ?></td>
						<td><?php echo $info->row312; ?></td>
						<td>j.	SVN/Nebulizer treatment</td>
						<td></td>
						<td><?php echo $info->row313; ?></td>
						<td><?php echo $info->row314; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $info->row321; ?></td>
						<td><?php echo $info->row322; ?></td>
						<td>k.	Home ventilator management</td>
						<td></td>
						<td><?php echo $info->row323; ?></td>
						<td><?php echo $info->row324; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $info->row331; ?></td>
						<td><?php echo $info->row332; ?></td>
						<td>l.	Foreign body airway obstruction</td>
						<td></td>
						<td><?php echo $info->row333; ?></td>
						<td><?php echo $info->row334; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row341; ?></td>
						<td><?php echo $info->row342; ?></td>
						<td>m.	Breathing exercises/incentive spirometry</td>
						<td></td>
						<td><?php echo $info->row343; ?></td>
						<td><?php echo $info->row344; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row351; ?></td>
						<td><?php echo $info->row352; ?></td>
						<td>n.	Other</td>
						<td></td>
						<td><?php echo $info->row353; ?></td>
						<td><?php echo $info->row354; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>2.	Cardiovascular System</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row361; ?></td>
						<td><?php echo $info->row362; ?></td>
						<td>a.	Cardiovascular assessment</td>
						<td></td>
						<td><?php echo $info->row363; ?></td>
						<td><?php echo $info->row364; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row371; ?></td>
						<td><?php echo $info->row372; ?></td>
						<td>b.	Pulses(apical, radical, femoral, pedal)</td>
						<td></td>
						<td><?php echo $info->row373; ?></td>
						<td><?php echo $info->row374; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row381; ?></td>
						<td><?php echo $info->row382; ?></td>
						<td>c.	Edema assessment and management</td>
						<td></td>
						<td><?php echo $info->row383; ?></td>
						<td><?php echo $info->row384; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row391; ?></td>
						<td><?php echo $info->row392; ?></td>
						<td>d.	Supine and orthostatic blood pressure</td>
						<td></td>
						<td><?php echo $info->row393; ?></td>
						<td><?php echo $info->row394; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row401; ?></td>
						<td><?php echo $info->row402; ?></td>
						<td>e.	NTG use, inhaler use</td>
						<td></td>
						<td><?php echo $info->row403; ?></td>
						<td><?php echo $info->row404; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row411; ?></td>
						<td><?php echo $info->row412; ?></td>
						<td>f.	CPR</td>
						<td></td>
						<td><?php echo $info->row413; ?></td>
						<td><?php echo $info->row414; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row421; ?></td>
						<td><?php echo $info->row422; ?></td>
						<td>g.	Energy conservation techniques</td>
						<td></td>
						<td><?php echo $info->row423; ?></td>
						<td><?php echo $info->row424; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row431; ?></td>
						<td><?php echo $info->row432; ?></td>
						<td>h.	Other</td>
						<td></td>
						<td><?php echo $info->row433; ?></td>
						<td><?php echo $info->row434; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>3.	Neurologic System</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row441; ?></td>
						<td><?php echo $info->row442; ?></td>
						<td>a.	Neurologic assessment</td>
						<td></td>
						<td><?php echo $info->row443; ?></td>
						<td><?php echo $info->row444; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row451; ?></td>
						<td><?php echo $info->row452; ?></td>
						<td>b.	Aphasia care</td>
						<td></td>
						<td><?php echo $info->row453; ?></td>
						<td><?php echo $info->row454; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row461; ?></td>
						<td><?php echo $info->row462; ?></td>
						<td>c.	Mental status exam</td>
						<td></td>
						<td><?php echo $info->row463; ?></td>
						<td><?php echo $info->row464; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row471; ?></td>
						<td><?php echo $info->row472; ?></td>
						<td>d.	Seizure precautions</td>
						<td></td>
						<td><?php echo $info->row473; ?></td>
						<td><?php echo $info->row474; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row481; ?></td>
						<td><?php echo $info->row482; ?></td>
						<td>e.	Spinal cord injuries care</td>
						<td></td>
						<td><?php echo $info->row483; ?></td>
						<td><?php echo $info->row484; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row491; ?></td>
						<td><?php echo $info->row492; ?></td>
						<td>f.	Head injury care</td>
						<td></td>
						<td><?php echo $info->row493; ?></td>
						<td><?php echo $info->row494; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row501; ?></td>
						<td><?php echo $info->row502; ?></td>
						<td>g.	Other</td>
						<td></td>
						<td><?php echo $info->row503; ?></td>
						<td><?php echo $info->row504; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>4.	Gastrointestinal System</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row511; ?></td>
						<td><?php echo $info->row512; ?></td>
						<td>a.	Gastrointestinal assessment</td>
						<td></td>
						<td><?php echo $info->row513; ?></td>
						<td><?php echo $info->row514; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row521; ?></td>
						<td><?php echo $info->row522; ?></td>
						<td>b.	NG tube insertion/care</td>
						<td></td>
						<td><?php echo $info->row523; ?></td>
						<td><?php echo $info->row524; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row531; ?></td>
						<td><?php echo $info->row532; ?></td>
						<td>c.	Jejunostomy tube care</td>
						<td></td>
						<td><?php echo $info->row533; ?></td>
						<td><?php echo $info->row534; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row541; ?></td>
						<td><?php echo $info->row542; ?></td>
						<td>d.	Gastrostomy tube care</td>
						<td></td>
						<td><?php echo $info->row543; ?></td>
						<td><?php echo $info->row544; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row551; ?></td>
						<td><?php echo $info->row552; ?></td>
						<td>e.	Enteral feedings</td>
						<td></td>
						<td><?php echo $info->row553; ?></td>
						<td><?php echo $info->row554; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row561; ?></td>
						<td><?php echo $info->row562; ?></td>
						<td>f.	Suction machine(s)</td>
						<td></td>
						<td><?php echo $info->row563; ?></td>
						<td><?php echo $info->row564; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row571; ?></td>
						<td><?php echo $info->row572; ?></td>
						<td>g.	Ostomy care</td>
						<td></td>
						<td><?php echo $info->row573; ?></td>
						<td><?php echo $info->row574; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row581; ?></td>
						<td><?php echo $info->row582; ?></td>
						<td>h.	Dysphagia precautions</td>
						<td></td>
						<td><?php echo $info->row583; ?></td>
						<td><?php echo $info->row584; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row591; ?></td>
						<td><?php echo $info->row592; ?></td>
						<td>i.	Impaction removal</td>
						<td></td>
						<td><?php echo $info->row593; ?></td>
						<td><?php echo $info->row594; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row601; ?></td>
						<td><?php echo $info->row602; ?></td>
						<td>j.	Enema</td>
						<td></td>
						<td><?php echo $info->row603; ?></td>
						<td><?php echo $info->row604; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row701; ?></td>
						<td><?php echo $info->row702; ?></td>
						<td>k.	Bowel training</td>
						<td></td>
						<td><?php echo $info->row703; ?></td>
						<td><?php echo $info->row704; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row711; ?></td>
						<td><?php echo $info->row712; ?></td>
						<td>l.	Other</td>
						<td></td>
						<td><?php echo $info->row713; ?></td>
						<td><?php echo $info->row714; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>5.	Genitourinary System</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row721; ?></td>
						<td><?php echo $info->row722; ?></td>
						<td>a.	GU assessment</td>
						<td></td>
						<td><?php echo $info->row723; ?></td>
						<td><?php echo $info->row724; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row731; ?></td>
						<td><?php echo $info->row732; ?></td>
						<td>b.	Urinary catheterization insertion and care (male and female)</td>
						<td></td>
						<td><?php echo $info->row733; ?></td>
						<td><?php echo $info->row734; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row741; ?></td>
						<td><?php echo $info->row742; ?></td>
						<td>c.	Irrigation of catheters</td>
						<td></td>
						<td><?php echo $info->row743; ?></td>
						<td><?php echo $info->row744; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row751; ?></td>
						<td><?php echo $info->row752; ?></td>
						<td>d.	Obtaining specimens</td>
						<td></td>
						<td><?php echo $info->row753; ?></td>
						<td><?php echo $info->row754; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row761; ?></td>
						<td><?php echo $info->row762; ?></td>
						<td>e.	Removal of urinary catheter</td>
						<td></td>
						<td><?php echo $info->row763; ?></td>
						<td><?php echo $info->row764; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row771; ?></td>
						<td><?php echo $info->row772; ?></td>
						<td>f.	Care of supra-pubic catheter</td>
						<td></td>
						<td><?php echo $info->row773; ?></td>
						<td><?php echo $info->row774; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row781; ?></td>
						<td><?php echo $info->row782; ?></td>
						<td>g.	Care of urostomy</td>
						<td></td>
						<td><?php echo $info->row783; ?></td>
						<td><?php echo $info->row784; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row791; ?></td>
						<td><?php echo $info->row792; ?></td>
						<td>h.	Bladder training</td>
						<td></td>
						<td><?php echo $info->row793; ?></td>
						<td><?php echo $info->row794; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row801; ?></td>
						<td><?php echo $info->row802; ?></td>
						<td>i.	Nephrostomy tubes</td>
						<td></td>
						<td><?php echo $info->row803; ?></td>
						<td><?php echo $info->row804; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row811; ?></td>
						<td><?php echo $info->row812; ?></td>
						<td>j.	Knowledge of types of catheters and indications for use (straight, indwelling, condom)</td>
						<td></td>
						<td><?php echo $info->row813; ?></td>
						<td><?php echo $info->row814; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row821; ?></td>
						<td><?php echo $info->row822; ?></td>
						<td>k.	Ileostomy care</td>
						<td></td>
						<td><?php echo $info->row823; ?></td>
						<td><?php echo $info->row824; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row831; ?></td>
						<td><?php echo $info->row832; ?></td>
						<td>l.	Incontinence care</td>
						<td></td>
						<td><?php echo $info->row833; ?></td>
						<td><?php echo $info->row834; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row841; ?></td>
						<td><?php echo $info->row842; ?></td>
						<td>m.	GU post op care</td>
						<td></td>
						<td><?php echo $info->row843; ?></td>
						<td><?php echo $info->row844; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row851; ?></td>
						<td><?php echo $info->row852; ?></td>
						<td>n.	Other</td>
						<td></td>
						<td><?php echo $info->row853; ?></td>
						<td><?php echo $info->row854; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>6.	Integumentary/Wounds/Dressings</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row861; ?></td>
						<td><?php echo $info->row862; ?></td>
						<td>a.	Assessment of skin/wound</td>
						<td></td>
						<td><?php echo $info->row863; ?></td>
						<td><?php echo $info->row864; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row871; ?></td>
						<td><?php echo $info->row872; ?></td>
						<td>b.	Measurement of wounds</td>
						<td></td>
						<td><?php echo $info->row873; ?></td>
						<td><?php echo $info->row874; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row881; ?></td>
						<td><?php echo $info->row882; ?></td>
						<td>c.	Wound irrigation</td>
						<td></td>
						<td><?php echo $info->row883; ?></td>
						<td><?php echo $info->row884; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row891; ?></td>
						<td><?php echo $info->row892; ?></td>
						<td>d.	Wet to dry dressing(s)</td>
						<td></td>
						<td><?php echo $info->row893; ?></td>
						<td><?php echo $info->row894; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>e.	Decubitis care:</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row901; ?></td>
						<td><?php echo $info->row902; ?></td>
						<td>1.	Assessment and staging</td>
						<td></td>
						<td><?php echo $info->row903; ?></td>
						<td><?php echo $info->row904; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row911; ?></td>
						<td><?php echo $info->row912; ?></td>
						<td>2.	Prevention</td>
						<td></td>
						<td><?php echo $info->row913; ?></td>
						<td><?php echo $info->row914; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row921; ?></td>
						<td><?php echo $info->row922; ?></td>
						<td>3.	Various treatments (hydrocollid, calcium alginate, transparent films)</td>
						<td></td>
						<td><?php echo $info->row923; ?></td>
						<td><?php echo $info->row924; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row931; ?></td>
						<td><?php echo $info->row932; ?></td>
						<td>4.	Documentation/pictures</td>
						<td></td>
						<td><?php echo $info->row933; ?></td>
						<td><?php echo $info->row934; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row941; ?></td>
						<td><?php echo $info->row942; ?></td>
						<td>f.	Ace wrap, cast care, compresses</td>
						<td></td>
						<td><?php echo $info->row943; ?></td>
						<td><?php echo $info->row944; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row951; ?></td>
						<td><?php echo $info->row952; ?></td>
						<td>g.	Hemovac</td>
						<td></td>
						<td><?php echo $info->row953; ?></td>
						<td><?php echo $info->row954; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row961; ?></td>
						<td><?php echo $info->row962; ?></td>
						<td>h.	Sterile dressing change</td>
						<td></td>
						<td><?php echo $info->row963; ?></td>
						<td><?php echo $info->row964; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row971; ?></td>
						<td><?php echo $info->row972; ?></td>
						<td>i.	Suture/staple removal</td>
						<td></td>
						<td><?php echo $info->row973; ?></td>
						<td><?php echo $info->row974; ?></td>
					</tr>
					
					<tr>
						<td></td>
						<td></td>
						<td>7.	Musculoskeletal System</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row981; ?></td>
						<td><?php echo $info->row982; ?></td>
						<td>a.	Assessment</td>
						<td></td>
						<td><?php echo $info->row983; ?></td>
						<td><?php echo $info->row984; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row991; ?></td>
						<td><?php echo $info->row992; ?></td>
						<td>b.	Range of motion (ROM)</td>
						<td></td>
						<td><?php echo $info->row993; ?></td>
						<td><?php echo $info->row994; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row1001; ?></td>
						<td><?php echo $info->row1002; ?></td>
						<td>c.	TED hose</td>
						<td></td>
						<td><?php echo $info->row1003; ?></td>
						<td><?php echo $info->row1004; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row1101; ?></td>
						<td><?php echo $info->row1102; ?></td>
						<td>d.	Total knee care</td>
						<td></td>
						<td><?php echo $info->row1103; ?></td>
						<td><?php echo $info->row1104; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row1201; ?></td>
						<td><?php echo $info->row1202; ?></td>
						<td>e.	Total hip care</td>
						<td></td>
						<td><?php echo $info->row1203; ?></td>
						<td><?php echo $info->row1204; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row1301; ?></td>
						<td><?php echo $info->row1302; ?></td>
						<td>f.	Cast assessment and care</td>
						<td></td>
						<td><?php echo $info->row1303; ?></td>
						<td><?php echo $info->row1304; ?></td>
					</tr>
					
					<tr>
						<td></td>
						<td></td>
						<td>g.	Devices:</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row1401; ?></td>
						<td><?php echo $info->row1402; ?></td>
						<td>1.	Walker</td>
						<td></td>
						<td><?php echo $info->row1403; ?></td>
						<td><?php echo $info->row1404; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row1501; ?></td>
						<td><?php echo $info->row1502; ?></td>
						<td>2.	Wheelchair</td>
						<td></td>
						<td><?php echo $info->row1503; ?></td>
						<td><?php echo $info->row1504; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row1601; ?></td>
						<td><?php echo $info->row1602; ?></td>
						<td>3.	Transfer board</td>
						<td></td>
						<td><?php echo $info->row1603; ?></td>
						<td><?php echo $info->row1604; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row1701; ?></td>
						<td><?php echo $info->row1702; ?></td>
						<td>4.	Hoyer lift</td>
						<td></td>
						<td><?php echo $info->row1703; ?></td>
						<td><?php echo $info->row1704; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row1801; ?></td>
						<td><?php echo $info->row1802; ?></td>
						<td>h.	Pain assessment</td>
						<td></td>
						<td><?php echo $info->row1803; ?></td>
						<td><?php echo $info->row1804; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row1901; ?></td>
						<td><?php echo $info->row1902; ?></td>
						<td>i.	Transfers</td>
						<td></td>
						<td><?php echo $info->row1903; ?></td>
						<td><?php echo $info->row1904; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row2001; ?></td>
						<td><?php echo $info->row2002; ?></td>
						<td>i.	Other</td>
						<td></td>
						<td><?php echo $info->row2003; ?></td>
						<td><?php echo $info->row2004; ?></td>
					</tr>
					
					<tr>
						<td></td>
						<td></td>
						<td>8.	Pain assessment and management</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row2101; ?></td>
						<td><?php echo $info->row2102; ?></td>
						<td>a.	Conducts pain evaluation which includes location, onset, intensity, duration, alleviating factors</td>
						<td></td>
						<td><?php echo $info->row2103; ?></td>
						<td><?php echo $info->row2104; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row2201; ?></td>
						<td><?php echo $info->row2202; ?></td>
						<td>b.	Utilizes a pain rating scale to collect data</td>
						<td></td>
						<td><?php echo $info->row2203; ?></td>
						<td><?php echo $info->row2204; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row2301; ?></td>
						<td><?php echo $info->row2302; ?></td>
						<td>c.	Knowledgeable about types of pain (neuropathic, viseral, bone, smooth muscle, psychologic)</td>
						<td></td>
						<td><?php echo $info->row2303; ?></td>
						<td><?php echo $info->row2304; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>d.	Knowledgeable about drug therapies indication and dosing</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row2501; ?></td>
						<td><?php echo $info->row2502; ?></td>
						<td>1.	NSAIDS</td>
						<td></td>
						<td><?php echo $info->row2503; ?></td>
						<td><?php echo $info->row2504; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row2601; ?></td>
						<td><?php echo $info->row2602; ?></td>
						<td>2.	Steroids</td>
						<td></td>
						<td><?php echo $info->row2603; ?></td>
						<td><?php echo $info->row2604; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row2701; ?></td>
						<td><?php echo $info->row2702; ?></td>
						<td>3.	Benzodiazipines</td>
						<td></td>
						<td><?php echo $info->row2703; ?></td>
						<td><?php echo $info->row2704; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row2801; ?></td>
						<td><?php echo $info->row2802; ?></td>
						<td>4.	Tricylic antidepressants</td>
						<td></td>
						<td><?php echo $info->row2803; ?></td>
						<td><?php echo $info->row2804; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row3001; ?></td>
						<td><?php echo $info->row3002; ?></td>
						<td>5.	Anticonvulsants</td>
						<td></td>
						<td><?php echo $info->row3003; ?></td>
						<td><?php echo $info->row3004; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row3101; ?></td>
						<td><?php echo $info->row3102; ?></td>
						<td>6.	Narcotics</td>
						<td></td>
						<td><?php echo $info->row3103; ?></td>
						<td><?php echo $info->row3104; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row3201; ?></td>
						<td><?php echo $info->row3202; ?></td>
						<td>7.	Other</td>
						<td></td>
						<td><?php echo $info->row3203; ?></td>
						<td><?php echo $info->row3204; ?></td>
					</tr>
					
					<tr>
						<td></td>
						<td></td>
						<td>e.	Non-pharmacologic methods:</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row3301; ?></td>
						<td><?php echo $info->row3302; ?></td>
						<td>1.	Relaxation (guided imagery, meditation, massage)</td>
						<td></td>
						<td><?php echo $info->row3303; ?></td>
						<td><?php echo $info->row3304; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row3401; ?></td>
						<td><?php echo $info->row3402; ?></td>
						<td>2.	Psychologic (biofeedback, therapy)</td>
						<td></td>
						<td><?php echo $info->row3403; ?></td>
						<td><?php echo $info->row3404; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row3501; ?></td>
						<td><?php echo $info->row3502; ?></td>
						<td>3.	Neurologic (TENS)</td>
						<td></td>
						<td><?php echo $info->row3503; ?></td>
						<td><?php echo $info->row3504; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row3601; ?></td>
						<td><?php echo $info->row3602; ?></td>
						<td>4.	Ice/heat</td>
						<td></td>
						<td><?php echo $info->row3603; ?></td>
						<td><?php echo $info->row3604; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>f.	Patient/family teaching</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row3701; ?></td>
						<td><?php echo $info->row3702; ?></td>
						<td>1.	Drug use, side effects</td>
						<td></td>
						<td><?php echo $info->row3703; ?></td>
						<td><?php echo $info->row3704; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row3801; ?></td>
						<td><?php echo $info->row3802; ?></td>
						<td>2.	Management of constipation</td>
						<td></td>
						<td><?php echo $info->row3803; ?></td>
						<td><?php echo $info->row3804; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row3901; ?></td>
						<td><?php echo $info->row3902; ?></td>
						<td>2.	Addiction vs. tolerance</td>
						<td></td>
						<td><?php echo $info->row3903; ?></td>
						<td><?php echo $info->row3904; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row4001; ?></td>
						<td><?php echo $info->row4002; ?></td>
						<td>4.	Other</td>
						<td></td>
						<td><?php echo $info->row4003; ?></td>
						<td><?php echo $info->row4004; ?></td>
					</tr>
					
					
					<tr>
						<td></td>
						<td></td>
						<td>9.	Metabolic</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row4101; ?></td>
						<td><?php echo $info->row4102; ?></td>
						<td>a.	Assessment</td>
						<td></td>
						<td><?php echo $info->row4103; ?></td>
						<td><?php echo $info->row4104; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>b.	Diabetic assessment and teaching</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row4201; ?></td>
						<td><?php echo $info->row4202; ?></td>
						<td>1.	Insulin types and teaching</td>
						<td></td>
						<td><?php echo $info->row4203; ?></td>
						<td><?php echo $info->row4204; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row4301; ?></td>
						<td><?php echo $info->row4302; ?></td>
						<td>2.	Use, care and teaching of glucose monitoring system</td>
						<td></td>
						<td><?php echo $info->row4303; ?></td>
						<td><?php echo $info->row4304; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row4401; ?></td>
						<td><?php echo $info->row4402; ?></td>
						<td>3.	Diet, exercise and sick day teaching</td>
						<td></td>
						<td><?php echo $info->row4403; ?></td>
						<td><?php echo $info->row4404; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row4501; ?></td>
						<td><?php echo $info->row4502; ?></td>
						<td>4.	Signs and symptoms of Hypo-Hyperglycemic reactions</td>
						<td></td>
						<td><?php echo $info->row4503; ?></td>
						<td><?php echo $info->row4504; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row4601; ?></td>
						<td><?php echo $info->row4602; ?></td>
						<td>5.	Foot and skin care</td>
						<td></td>
						<td><?php echo $info->row4603; ?></td>
						<td><?php echo $info->row4604; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row4701; ?></td>
						<td><?php echo $info->row4702; ?></td>
						<td>c.	Coumadin therapy</td>
						<td></td>
						<td><?php echo $info->row4703; ?></td>
						<td><?php echo $info->row4704; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row4801; ?></td>
						<td><?php echo $info->row4802; ?></td>
						<td>d.	Other</td>
						<td></td>
						<td><?php echo $info->row4803; ?></td>
						<td><?php echo $info->row4804; ?></td>
					</tr>
					
					<tr>
						<td></td>
						<td></td>
						<td>10.	Behavioral Assessment</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row4901; ?></td>
						<td><?php echo $info->row4902; ?></td>
						<td>a.	Psychosocial Status</td>
						<td></td>
						<td><?php echo $info->row4903; ?></td>
						<td><?php echo $info->row4904; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row5001; ?></td>
						<td><?php echo $info->row5002; ?></td>
						<td>b.	Suicide precautions</td>
						<td></td>
						<td><?php echo $info->row5003; ?></td>
						<td><?php echo $info->row5004; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row5101; ?></td>
						<td><?php echo $info->row5102; ?></td>
						<td>c.	Psychotropic drugs</td>
						<td></td>
						<td><?php echo $info->row5103; ?></td>
						<td><?php echo $info->row5104; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row5201; ?></td>
						<td><?php echo $info->row5202; ?></td>
						<td>d.	Care of the demented patient</td>
						<td></td>
						<td><?php echo $info->row5203; ?></td>
						<td><?php echo $info->row5204; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row5301; ?></td>
						<td><?php echo $info->row5302; ?></td>
						<td>e.	Other</td>
						<td></td>
						<td><?php echo $info->row5303; ?></td>
						<td><?php echo $info->row5304; ?></td>
					</tr>
					
					
					<tr>
						<td></td>
						<td></td>
						<td>11.	Miscellaneous Skills</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row5401; ?></td>
						<td><?php echo $info->row5402; ?></td>
						<td>a.	Vital signs</td>
						<td></td>
						<td><?php echo $info->row5403; ?></td>
						<td><?php echo $info->row5404; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row5501; ?></td>
						<td><?php echo $info->row5502; ?></td>
						<td>b.	Intake and output</td>
						<td></td>
						<td><?php echo $info->row5503; ?></td>
						<td><?php echo $info->row5504; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row5601; ?></td>
						<td><?php echo $info->row5602; ?></td>
						<td>c.	Caring for immuno-compromised patients</td>
						<td></td>
						<td><?php echo $info->row5603; ?></td>
						<td><?php echo $info->row5604; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row5701; ?></td>
						<td><?php echo $info->row5702; ?></td>
						<td>d.	eye/ear irrigation</td>
						<td></td>
						<td><?php echo $info->row5703; ?></td>
						<td><?php echo $info->row5704; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row5801; ?></td>
						<td><?php echo $info->row5802; ?></td>
						<td>e.	Post mortem care</td>
						<td></td>
						<td><?php echo $info->row5803; ?></td>
						<td><?php echo $info->row5804; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row5901; ?></td>
						<td><?php echo $info->row5902; ?></td>
						<td>f.	Collection, labeling and delivering laboratory specimens (blood, urine, sputum, wound, stool)</td>
						<td></td>
						<td><?php echo $info->row5903; ?></td>
						<td><?php echo $info->row5904; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>g.	Concepts of death and dying</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row6001; ?></td>
						<td><?php echo $info->row6002; ?></td>
						<td>1.	Normal vs. abnormal</td>
						<td></td>
						<td><?php echo $info->row6003; ?></td>
						<td><?php echo $info->row6004; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row6101; ?></td>
						<td><?php echo $info->row6102; ?></td>
						<td>2.	Cultural attitudes toward death</td>
						<td></td>
						<td><?php echo $info->row6103; ?></td>
						<td><?php echo $info->row6104; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row6201; ?></td>
						<td><?php echo $info->row6202; ?></td>
						<td>3.	Values of patient/family</td>
						<td></td>
						<td><?php echo $info->row6203; ?></td>
						<td><?php echo $info->row6204; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row6301; ?></td>
						<td><?php echo $info->row6302; ?></td>
						<td>4.	Denial and coping mechanisms</td>
						<td></td>
						<td><?php echo $info->row6303; ?></td>
						<td><?php echo $info->row6304; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row6401; ?></td>
						<td><?php echo $info->row6402; ?></td>
						<td>5.	Grief and family, children and others</td>
						<td></td>
						<td><?php echo $info->row6403; ?></td>
						<td><?php echo $info->row6404; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row6501; ?></td>
						<td><?php echo $info->row6502; ?></td>
						<td>6.	Anticipatory grief</td>
						<td></td>
						<td><?php echo $info->row6503; ?></td>
						<td><?php echo $info->row6504; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row6601; ?></td>
						<td><?php echo $info->row6602; ?></td>
						<td>7.	Other</td>
						<td></td>
						<td><?php echo $info->row6603; ?></td>
						<td><?php echo $info->row6604; ?></td>
					</tr>
					
					
					<tr>
						<td></td>
						<td></td>
						<td><b>C.	Medication Administration: Demonstrates ability to administer, monitor and document medications for patients.</b></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>1.	Medication Administration Techniques</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row6701; ?></td>
						<td><?php echo $info->row6702; ?></td>
						<td>a.	Oral</td>
						<td></td>
						<td><?php echo $info->row6703; ?></td>
						<td><?php echo $info->row6704; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row6801; ?></td>
						<td><?php echo $info->row6802; ?></td>
						<td>b.	Intra muscular</td>
						<td></td>
						<td><?php echo $info->row6803; ?></td>
						<td><?php echo $info->row6804; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row6901; ?></td>
						<td><?php echo $info->row6902; ?></td>
						<td>c.	Intravenous-bolus/push</td>
						<td></td>
						<td><?php echo $info->row6903; ?></td>
						<td><?php echo $info->row6904; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row7001; ?></td>
						<td><?php echo $info->row7002; ?></td>
						<td>d.	Subcutaneous</td>
						<td></td>
						<td><?php echo $info->row7003; ?></td>
						<td><?php echo $info->row7004; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row7101; ?></td>
						<td><?php echo $info->row7102; ?></td>
						<td>e.	Total Parenteral Nutrition</td>
						<td></td>
						<td><?php echo $info->row7103; ?></td>
						<td><?php echo $info->row7104; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row7201; ?></td>
						<td><?php echo $info->row7202; ?></td>
						<td>f.	Suppositories</td>
						<td></td>
						<td><?php echo $info->row7203; ?></td>
						<td><?php echo $info->row7204; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row7301; ?></td>
						<td><?php echo $info->row7302; ?></td>
						<td>g.	Ear, eye, nose drops</td>
						<td></td>
						<td><?php echo $info->row7303; ?></td>
						<td><?php echo $info->row7304; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row7401; ?></td>
						<td><?php echo $info->row7402; ?></td>
						<td>h.	Heparin administration</td>
						<td></td>
						<td><?php echo $info->row7403; ?></td>
						<td><?php echo $info->row7404; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row7501; ?></td>
						<td><?php echo $info->row7502; ?></td>
						<td>i.	Insulin administration, site rotation</td>
						<td></td>
						<td><?php echo $info->row7503; ?></td>
						<td><?php echo $info->row7504; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row7601; ?></td>
						<td><?php echo $info->row7602; ?></td>
						<td>j.	Assessment for side effects, adverse reactions, therapeutic response</td>
						<td></td>
						<td><?php echo $info->row7603; ?></td>
						<td><?php echo $info->row7604; ?></td>
					</tr>
					
					
					<tr>
						<td></td>
						<td></td>
						<td>2.	Intravenous Therapy</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>a.	Technique and care of:</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row7701; ?></td>
						<td><?php echo $info->row7702; ?></td>
						<td>1.	Venipuncture</td>
						<td></td>
						<td><?php echo $info->row7703; ?></td>
						<td><?php echo $info->row7704; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row7801; ?></td>
						<td><?php echo $info->row7802; ?></td>
						<td>2.	Butterfly</td>
						<td></td>
						<td><?php echo $info->row7803; ?></td>
						<td><?php echo $info->row7804; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row7901; ?></td>
						<td><?php echo $info->row7902; ?></td>
						<td>3.	Over the needle catheter</td>
						<td></td>
						<td><?php echo $info->row7903; ?></td>
						<td><?php echo $info->row7904; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row8001; ?></td>
						<td><?php echo $info->row8002; ?></td>
						<td>4.	Regulation of IV flow rate, use of infusion pumps</td>
						<td></td>
						<td><?php echo $info->row8003; ?></td>
						<td><?php echo $info->row8004; ?></td>
					</tr>
					
					
					<tr>
						<td></td>
						<td></td>
						<td>b.	Other</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>3.	Central Venous Access Devices</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row8101; ?></td>
						<td><?php echo $info->row8102; ?></td>
						<td>a.	Drawing blood from</td>
						<td></td>
						<td><?php echo $info->row8103; ?></td>
						<td><?php echo $info->row8104; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row8201; ?></td>
						<td><?php echo $info->row8202; ?></td>
						<td>b.	Site care</td>
						<td></td>
						<td><?php echo $info->row8203; ?></td>
						<td><?php echo $info->row8204; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row8301; ?></td>
						<td><?php echo $info->row8302; ?></td>
						<td>c.	Flushing</td>
						<td></td>
						<td><?php echo $info->row8303; ?></td>
						<td><?php echo $info->row8304; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row8401; ?></td>
						<td><?php echo $info->row8402; ?></td>
						<td>d.	Cap change</td>
						<td></td>
						<td><?php echo $info->row8403; ?></td>
						<td><?php echo $info->row8404; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row8501; ?></td>
						<td><?php echo $info->row8502; ?></td>
						<td>e.	Needleless system</td>
						<td></td>
						<td><?php echo $info->row8503; ?></td>
						<td><?php echo $info->row8504; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row8601; ?></td>
						<td><?php echo $info->row8602; ?></td>
						<td>f.	Other</td>
						<td></td>
						<td><?php echo $info->row8603; ?></td>
						<td><?php echo $info->row8604; ?></td>
					</tr>
					
					
					<tr>
						<td></td>
						<td></td>
						<td><b>D.	Infection Control</b></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row8701; ?></td>
						<td><?php echo $info->row8702; ?></td>
						<td>1.	Hand washing technique</td>
						<td></td>
						<td><?php echo $info->row8703; ?></td>
						<td><?php echo $info->row8704; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row8801; ?></td>
						<td><?php echo $info->row8802; ?></td>
						<td>2.	Aseptic technique</td>
						<td></td>
						<td><?php echo $info->row8803; ?></td>
						<td><?php echo $info->row8804; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row8901; ?></td>
						<td><?php echo $info->row8902; ?></td>
						<td>3.	Proper bag technique</td>
						<td></td>
						<td><?php echo $info->row8903; ?></td>
						<td><?php echo $info->row8904; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row9001; ?></td>
						<td><?php echo $info->row9002; ?></td>
						<td>4.	Safe needle technique</td>
						<td></td>
						<td><?php echo $info->row9003; ?></td>
						<td><?php echo $info->row9004; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row9101; ?></td>
						<td><?php echo $info->row9102; ?></td>
						<td>5.	Personal protective equipmentr</td>
						<td></td>
						<td><?php echo $info->row9103; ?></td>
						<td><?php echo $info->row9104; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row9201; ?></td>
						<td><?php echo $info->row9202; ?></td>
						<td>6.	Exposure control plan</td>
						<td></td>
						<td><?php echo $info->row9203; ?></td>
						<td><?php echo $info->row9204; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row9301; ?></td>
						<td><?php echo $info->row9302; ?></td>
						<td>7.	TB exposure control plan</td>
						<td></td>
						<td><?php echo $info->row9303; ?></td>
						<td><?php echo $info->row9304; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row9401; ?></td>
						<td><?php echo $info->row9402; ?></td>
						<td>8.	Reporting of infections for patient and personnel</td>
						<td></td>
						<td><?php echo $info->row9403; ?></td>
						<td><?php echo $info->row9404; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row9501; ?></td>
						<td><?php echo $info->row9502; ?></td>
						<td>9.	Standard precautions</td>
						<td></td>
						<td><?php echo $info->row9503; ?></td>
						<td><?php echo $info->row9504; ?></td>
					</tr>
					
					
					<tr>
						<td></td>
						<td></td>
						<td>E.	Equipment</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>1.	Displays knowledge of the following</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row9601; ?></td>
						<td><?php echo $info->row9602; ?></td>
						<td>a.	Electric bed</td>
						<td></td>
						<td><?php echo $info->row9603; ?></td>
						<td><?php echo $info->row9604; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row9701; ?></td>
						<td><?php echo $info->row9702; ?></td>
						<td>b.	Special beds</td>
						<td></td>
						<td><?php echo $info->row9703; ?></td>
						<td><?php echo $info->row9704; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row9801; ?></td>
						<td><?php echo $info->row9802; ?></td>
						<td>c.	Alternating pressure mattress</td>
						<td></td>
						<td><?php echo $info->row9803; ?></td>
						<td><?php echo $info->row9804; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row9901; ?></td>
						<td><?php echo $info->row9902; ?></td>
						<td>d.	Infusion pumps</td>
						<td></td>
						<td><?php echo $info->row9903; ?></td>
						<td><?php echo $info->row9904; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row10001; ?></td>
						<td><?php echo $info->row10002; ?></td>
						<td>e.	Ambulatory infusion devices</td>
						<td></td>
						<td><?php echo $info->row10003; ?></td>
						<td><?php echo $info->row10004; ?></td>
					</tr>
					
					<tr>
						<td></td>
						<td></td>
						<td>2.	Home Glucose Monitoring:</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row10011; ?></td>
						<td><?php echo $info->row10012; ?></td>
						<td>a.	Verbalizes purpose of test</td>
						<td></td>
						<td><?php echo $info->row10013; ?></td>
						<td><?php echo $info->row10014; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row10021; ?></td>
						<td><?php echo $info->row10022; ?></td>
						<td>b.	Specimen collection</td>
						<td></td>
						<td><?php echo $info->row10023; ?></td>
						<td><?php echo $info->row10024; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row10031; ?></td>
						<td><?php echo $info->row10032; ?></td>
						<td>c.	Instrument calibration</td>
						<td></td>
						<td><?php echo $info->row10033; ?></td>
						<td><?php echo $info->row10034; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row10041; ?></td>
						<td><?php echo $info->row10042; ?></td>
						<td>d.	Quality control process</td>
						<td></td>
						<td><?php echo $info->row10043; ?></td>
						<td><?php echo $info->row10044; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row10051; ?></td>
						<td><?php echo $info->row10052; ?></td>
						<td>e.	Test correctly performed and interpreted</td>
						<td></td>
						<td><?php echo $info->row10053; ?></td>
						<td><?php echo $info->row10054; ?></td>
					</tr>
					
					<tr>
						<td><?php echo $info->row10061; ?></td>
						<td><?php echo $info->row10062; ?></td>
						<td>3.	Other</td>
						<td></td>
						<td><?php echo $info->row10063; ?></td>
						<td><?php echo $info->row10064; ?></td>
					</tr>
					
					<tr>
						<td></td>
						<td></td>
						<td><b>F.		Safety</b></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row10071; ?></td>
						<td><?php echo $info->row10072; ?></td>
						<td>1.	Restraints, indications and policy</td>
						<td></td>
						<td><?php echo $info->row10073; ?></td>
						<td><?php echo $info->row10074; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row10081; ?></td>
						<td><?php echo $info->row10082; ?></td>
						<td>2.	Fire extinguishers</td>
						<td></td>
						<td><?php echo $info->row10083; ?></td>
						<td><?php echo $info->row10084; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row10091; ?></td>
						<td><?php echo $info->row10092; ?></td>
						<td>3.	Emergency preparedness</td>
						<td></td>
						<td><?php echo $info->row10093; ?></td>
						<td><?php echo $info->row10094; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row100101; ?></td>
						<td><?php echo $info->row100102; ?></td>
						<td>4.	Hazardous materials</td>
						<td></td>
						<td><?php echo $info->row100103; ?></td>
						<td><?php echo $info->row100104; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row100111; ?></td>
						<td><?php echo $info->row100112; ?></td>
						<td>5.	Assessment of patient safety risks and home safety</td>
						<td></td>
						<td><?php echo $info->row100113; ?></td>
						<td><?php echo $info->row100114; ?></td>
					</tr>
					
					<tr>
						<td></td>
						<td></td>
						<td><b>G.		Patient Education</b></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row100121; ?></td>
						<td><?php echo $info->row100122; ?></td>
						<td>1.	Determine patient and family learning needs</td>
						<td></td>
						<td><?php echo $info->row100123; ?></td>
						<td><?php echo $info->row100124; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row100131; ?></td>
						<td><?php echo $info->row100132; ?></td>
						<td>2.	Sets measurable objectives</td>
						<td></td>
						<td><?php echo $info->row100133; ?></td>
						<td><?php echo $info->row100134; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row100141; ?></td>
						<td><?php echo $info->row100142; ?></td>
						<td>3.	Develops/implements teaching plan</td>
						<td></td>
						<td><?php echo $info->row100143; ?></td>
						<td><?php echo $info->row100144; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row100151; ?></td>
						<td><?php echo $info->row100152; ?></td>
						<td>4.	Evaluates effectiveness of teaching</td>
						<td></td>
						<td><?php echo $info->row100153; ?></td>
						<td><?php echo $info->row100154; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row100161; ?></td>
						<td><?php echo $info->row100162; ?></td>
						<td>5.	Revises teaching plan based on patient needs</td>
						<td></td>
						<td><?php echo $info->row100163; ?></td>
						<td><?php echo $info->row100164; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row100171; ?></td>
						<td><?php echo $info->row100172; ?></td>
						<td>6.	Documents response to teaching</td>
						<td></td>
						<td><?php echo $info->row100173; ?></td>
						<td><?php echo $info->row100174; ?></td>
					</tr>
					
					<tr>
						<td></td>
						<td></td>
						<td>6.	Provides instruction in the following:</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row100181; ?></td>
						<td><?php echo $info->row100182; ?></td>
						<td>a.	Emergency care</td>
						<td></td>
						<td><?php echo $info->row100183; ?></td>
						<td><?php echo $info->row100184; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row100191; ?></td>
						<td><?php echo $info->row100192; ?></td>
						<td>b.	Diet and nutrition</td>
						<td></td>
						<td><?php echo $info->row100193; ?></td>
						<td><?php echo $info->row100194; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>c.	Medications</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><?php echo $info->row100201; ?></td>
						<td><?php echo $info->row100202; ?></td>
						<td>1.	Route, dosage, frequency, side effects, adverse reactions, safe storage, labeling, indications, drug/food interactions, home monitoring program, therapeutic blood levels</td>
						<td></td>
						<td><?php echo $info->row100203; ?></td>
						<td><?php echo $info->row100204; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row100211; ?></td>
						<td><?php echo $info->row100212; ?></td>
						<td>8.	Provides instruction about advance directives and patient rights</td>
						<td></td>
						<td><?php echo $info->row100213; ?></td>
						<td><?php echo $info->row100214; ?></td>
					</tr>
					<tr>
						<td><?php echo $info->row100221; ?></td>
						<td><?php echo $info->row100222; ?></td>
						<td>9.	Other</td>
						<td></td>
						<td><?php echo $info->row100223; ?></td>
						<td><?php echo $info->row100224; ?></td>
					</tr>
					
				</tbody>
			</table>
		-->
		</div>
	</div>    






<script type="text/javascript">
    function printDiv(printableArea) {
        var printContents = document.getElementById(printableArea).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

