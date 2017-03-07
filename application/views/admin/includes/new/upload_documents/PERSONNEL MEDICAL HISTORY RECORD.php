	<div class="container" style="width:100%; padding-left: 2em; padding-right: 2em;">
		<div class="section-header row" style="text-align: center;">
			<h2>PERSONNEL MEDICAL HISTORY RECORD</h2>
		</div>
		
		<style>
			label{
				font-weight: bold;
			}
		</style>
		
		<hr class="heavy" style="border: solid black; border-width: 1ex 0 1px; height: .5ex; margin: 0; margin-top: 1em;"/>
			<br />
		<form method="post" class="mhrform" action="">
			<div class="row">
				<div class="col-sm-6">
					<div class="col-sm-6">
						<label for="first-name" style="display: inline; width: initial;">First Name</label>
					</div>
					<div class="col-sm-6">
						<input id="mhr_first_name" name="mhr_first_name" value="<?php echo $mhr_info->mhr_first_name?>" class="form-control" style="display: inline; width: initial;"/>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="col-sm-6">
						<label for="last-name" style="display: inline; width: initial;">Last Name</label>
					</div>
					<div class="col-sm-6">
						<input id="mhr_last_name" name="mhr_last_name" value="<?php echo $mhr_info->mhr_last_name?>" class="form-control" style="display: inline; width: initial;"/>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-6">
					<div class="col-sm-6">
						<label for="last-name" style="display: inline; width: initial;">Marital Status</label>
					</div>
					<div class="col-sm-6">
						<input id="mhr_marital" name="mhr_marital" value="<?php echo $mhr_info->mhr_marital?>" class="form-control" style="display: inline; width: initial;"/>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="col-sm-6">
						<label for="last-name" style="display: inline; width: initial;">Address</label>
					</div>
					<div class="col-sm-6">
						<input id="mhr_address" class="form-control" name="mhr_address" value="<?php echo $mhr_info->mhr_address?>" style="display: inline; width: initial;"/>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-3">
					<div class="row">
						<div class="col-sm-6">
							<label for="last-name" style="">City</label>
						</div>
						<div class="col-sm-6">
							<input id="mhr_city" name="mhr_city" value="<?php echo $mhr_info->mhr_city?>" class="form-control" style=""/>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row">
						<div class="col-sm-6">
							<label for="last-name" style="">State</label>
						</div>
						<div class="col-sm-6">
							<input id="mhr_state" name="mhr_state" value="<?php echo $mhr_info->mhr_state?>" class="form-control" style=""/>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row">
						<div class="col-sm-6">
							<label for="last-name" style="">Zip</label>
						</div>
						<div class="col-sm-6">
							<input id="mhr_zip" name="mhr_zip" value="<?php echo $mhr_info->mhr_zip?>" class="form-control" style=""/>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row">
						<div class="col-sm-6">
							<label for="last-name" style="">Tel No.</label>
						</div>
						<div class="col-sm-6">
							<input id="mhr_phone" name="mhr_phone" value="<?php echo $mhr_info->mhr_phone?>" class="form-control" style="display: inline;"/>
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name" style="">Physician's Name</label>
						</div>
						<div class="col-sm-5">
							<input id="mhr_physician_name" name="mhr_physician_name" value="<?php echo $mhr_info->mhr_physician_name?>" class="form-control" style=""/>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name" style="">Address</label>
						</div>
						<div class="col-sm-5">
							<input id="mhr_address1" name="mhr_address1" value="<?php echo $mhr_info->mhr_address1?>" class="form-control" style=""/>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name" style="">Tel No.</label>
						</div>
						<div class="col-sm-5">
							<input id="mhr_phone1" name="mhr_phone1" value="<?php echo $mhr_info->mhr_phone1?>" class="form-control" style=""/>
						</div>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-2">
					<label for="last-name" style="display: inline; width: initial;">Date & Reason for last visit</label>
				</div>
				<div class="col-sm-6">
					<input id="mhr_visit_reason" name="mhr_visit_reason" value="<?php echo $mhr_info->mhr_visit_reason?>" class="form-control" style="display: inline;"/>
					<p></p>
					<input type="date" id="mhr_visit_date" name="mhr_visit_date" value="<?php echo $mhr_info->mhr_visit_date?>" class="form-control" style="display: inline;"/>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-2">
					<label for="last-name" style="display: inline; width: initial;">Present Weight</label>
				</div>
				<div class="col-sm-6">
					<input id="mhr_weight" name="mhr_weight" value="<?php echo $mhr_info->mhr_weight?>" class="form-control" style="display: inline;"/>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-2">
					<input type="checkbox" name="mhr_1" value="y" <?php if($mhr_info->mhr_1 =="y"){ echo "checked"; } ?> id="mhr_1" >
					<label for="last-name" style="">Diabetes</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="mhr_2" value="y" <?php if($mhr_info->mhr_2 =="y"){ echo "checked"; } ?> id="mhr_2" >
					<label for="last-name" style="">Tuberculosis</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="mhr_3" value="y" <?php if($mhr_info->mhr_3 =="y"){ echo "checked"; } ?> id="mhr_3" >
					<label for="last-name" style="">Mental illness</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="mhr_4" value="y" <?php if($mhr_info->mhr_4 =="y"){ echo "checked"; } ?> id="mhr_4" >
					<label for="last-name" style="">Nervousness</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="mhr_5" value="y" <?php if($mhr_info->mhr_5 =="y"){ echo "checked"; } ?> id="mhr_5" >
					<label for="last-name" style="">Epilepsy</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="mhr_6" value="y" <?php if($mhr_info->mhr_6 =="y"){ echo "checked"; } ?> id="mhr_6" >
					<label for="last-name" style="">Overweight</label>
				</div>
			</div>
			<br />
			<br />
			<div class="row">
				<div class="col-sm-12">
					<span>
						If you have been injured or had an illness, disease or any other medical condition, on the list below, please encircle any appropriate item:
					</span>
				</div>
			</div>
			<br />
			<div class="container" style="width:100%; font-size: 9pt;">
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_1" value="y" <?php if($mhr_info->mhr_disease_1 =="y"){ echo "checked"; } ?> id="mhr_disease_1" >
						<label for="last-name" style="">Brain/skull</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_2" value="y" <?php if($mhr_info->mhr_disease_2 =="y"){ echo "checked"; } ?> id="mhr_disease_2" >
						<label for="last-name" style="">Eyes</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_3" value="y" <?php if($mhr_info->mhr_disease_3 =="y"){ echo "checked"; } ?> id="mhr_disease_3" >
						<label for="last-name" style="">Nose</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_4" value="y" <?php if($mhr_info->mhr_disease_4 =="y"){ echo "checked"; } ?> id="mhr_disease_4" >
						<label for="last-name" style="">Throat</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_5" value="y" <?php if($mhr_info->mhr_disease_5 =="y"){ echo "checked"; } ?> id="mhr_disease_5" >
						<label for="last-name" style="">Heart</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_6" value="y" <?php if($mhr_info->mhr_disease_6 =="y"){ echo "checked"; } ?> id="mhr_disease_6" >
						<label for="last-name" style="">Lungs</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_7" value="y" <?php if($mhr_info->mhr_disease_7 =="y"){ echo "checked"; } ?> id="mhr_disease_7" >
						<label for="last-name" style="">Stomachs/intestines</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_8" value="y" <?php if($mhr_info->mhr_disease_8 =="y"){ echo "checked"; } ?> id="mhr_disease_8" >
						<label for="last-name" style="">Ulcer/spleen</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_9" value="y" <?php if($mhr_info->mhr_disease_9 =="y"){ echo "checked"; } ?> id="mhr_disease_9" >
						<label for="last-name" style="">Gall bladder</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_10" value="y" <?php if($mhr_info->mhr_disease_10 =="y"){ echo "checked"; } ?> id="mhr_disease_10" >
						<label for="last-name" style="">Kidneys/bladder</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_11" value="y" <?php if($mhr_info->mhr_disease_11 =="y"){ echo "checked"; } ?> id="mhr_disease_11" >
						<label for="last-name" style="">Bones/joints</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_12" value="y" <?php if($mhr_info->mhr_disease_12 =="y"){ echo "checked"; } ?> id="mhr_disease_12" >
						<label for="last-name" style="">Back/spine</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_13" value="y" <?php if($mhr_info->mhr_disease_13 =="y"){ echo "checked"; } ?> id="mhr_disease_13" >
						<label for="last-name" style="">Skin</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_14" value="y" <?php if($mhr_info->mhr_disease_14 =="y"){ echo "checked"; } ?> id="mhr_disease_14" >
						<label for="last-name" style="">Abdominal pain/ appendicitis</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_15" value="y" <?php if($mhr_info->mhr_disease_15 =="y"){ echo "checked"; } ?> id="mhr_disease_15" >
						<label for="last-name" style="">Anemia/blood disease</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_16" value="y" <?php if($mhr_info->mhr_disease_16 =="y"){ echo "checked"; } ?> id="mhr_disease_16" >
						<label for="last-name" style="">Breast trouble</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_17" value="y" <?php if($mhr_info->mhr_disease_17 =="y"){ echo "checked"; } ?> id="mhr_disease_17" >
						<label for="last-name" style="">Genitals</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_18" value="y" <?php if($mhr_info->mhr_disease_18 =="y"){ echo "checked"; } ?> id="mhr_disease_18" >
						<label for="last-name" style="">Painful or flat feet</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_19" value="y" <?php if($mhr_info->mhr_disease_19 =="y"){ echo "checked"; } ?> id="mhr_disease_19" >
						<label for="last-name" style="">Dizziness</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_20" value="y" <?php if($mhr_info->mhr_disease_20 =="y"){ echo "checked"; } ?> id="mhr_disease_20" >
						<label for="last-name" style="">Frequent migraine/ headache</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_21" value="y" <?php if($mhr_info->mhr_disease_21 =="y"){ echo "checked"; } ?> id="mhr_disease_21" >
						<label for="last-name" style="">Running or ringing ears</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_22" value="y" <?php if($mhr_info->mhr_disease_22 =="y"){ echo "checked"; } ?> id="mhr_disease_22" >
						<label for="last-name" style="">Frequent clods/ sore throat</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_23" value="y" <?php if($mhr_info->mhr_disease_23 =="y"){ echo "checked"; } ?> id="mhr_disease_23" >
						<label for="last-name" style="">Fainting spells</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_24" value="y" <?php if($mhr_info->mhr_disease_24 =="y"){ echo "checked"; } ?> id="mhr_disease_24" >
						<label for="last-name" style="">Prostrate trouble</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_25" value="y" <?php if($mhr_info->mhr_disease_25 =="y"){ echo "checked"; } ?> id="mhr_disease_25" >
						<label for="last-name" style="">Chest pains/ palpitation</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_26" value="y" <?php if($mhr_info->mhr_disease_26 =="y"){ echo "checked"; } ?> id="mhr_disease_26" >
						<label for="last-name" style="">Shortness of breath</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_27" value="y" <?php if($mhr_info->mhr_disease_27 =="y"){ echo "checked"; } ?> id="mhr_disease_27" >
						<label for="last-name" style="">Chronic cough</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_28" value="y" <?php if($mhr_info->mhr_disease_28 =="y"){ echo "checked"; } ?> id="mhr_disease_28" >
						<label for="last-name" style="">Coughing of blood</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_29" value="y" <?php if($mhr_info->mhr_disease_29 =="y"){ echo "checked"; } ?> id="mhr_disease_29" >
						<label for="last-name" style="">Allergies</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_30" value="y" <?php if($mhr_info->mhr_disease_30 =="y"){ echo "checked"; } ?> id="mhr_disease_30" >
						<label for="last-name" style="">Poor appetite/ chronic indigestion</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_31" value="y" <?php if($mhr_info->mhr_disease_31 =="y"){ echo "checked"; } ?> id="mhr_disease_31" >
						<label for="last-name" style="">Bowel trouble or colitis</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_32" value="y" <?php if($mhr_info->mhr_disease_32 =="y"){ echo "checked"; } ?> id="mhr_disease_32" >
						<label for="last-name" style="">Varicose veins</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_33" value="y" <?php if($mhr_info->mhr_disease_33 =="y"){ echo "checked"; } ?> id="mhr_disease_33" >
						<label for="last-name" style="">Recurrent nausea/ vomiting</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_34" value="y" <?php if($mhr_info->mhr_disease_34 =="y"){ echo "checked"; } ?> id="mhr_disease_34" >
						<label for="last-name" style="">Vomiting of blood</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_35" value="y" <?php if($mhr_info->mhr_disease_35 =="y"){ echo "checked"; } ?> id="mhr_disease_35" style="">
						<label for="last-name" style="">Chronic constipation</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_36" value="y" <?php if($mhr_info->mhr_disease_36 =="y"){ echo "checked"; } ?> id="mhr_disease_36" style="">
						<label for="last-name" style="">Black or bloody bowel movement</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_37" value="y" <?php if($mhr_info->mhr_disease_37 =="y"){ echo "checked"; } ?> id="mhr_disease_37" style="">
						<label for="last-name" style="">Frequent or painful urination</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_38" value="y" <?php if($mhr_info->mhr_disease_38 =="y"){ echo "checked"; } ?> id="mhr_disease_38" style="">
						<label for="last-name" style="">Blood in urine</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_39" value="y" <?php if($mhr_info->mhr_disease_39 =="y"){ echo "checked"; } ?> id="mhr_disease_39" style="">
						<label for="last-name" style="">Swollen ankles</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_40" value="y" <?php if($mhr_info->mhr_disease_40 =="y"){ echo "checked"; } ?> id="mhr_disease_40" style="">
						<label for="last-name" style="">High blood in urine</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_41" value="y" <?php if($mhr_info->mhr_disease_41 =="y"){ echo "checked"; } ?> id="mhr_disease_41" style="">
						<label for="last-name" style="">Jaundice</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_42" value="y" <?php if($mhr_info->mhr_disease_42 =="y"){ echo "checked"; } ?> id="mhr_disease_42" style="">
						<label for="last-name" style="">Hernia(rupture)</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_43" value="y" <?php if($mhr_info->mhr_disease_43 =="y"){ echo "checked"; } ?> id="mhr_disease_43" style="">
						<label for="last-name" style="">Stomach/duodenal ulcers</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_44" value="y" <?php if($mhr_info->mhr_disease_44 =="y"){ echo "checked"; } ?> id="mhr_disease_44" style="">
						<label for="last-name" style="">Pneumonia/ pleurisy</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_45" value="y" <?php if($mhr_info->mhr_disease_45 =="y"){ echo "checked"; } ?> id="mhr_disease_45" style="">
						<label for="last-name" style="">Kidney stones of nephritis</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_46" value="y" <?php if($mhr_info->mhr_disease_46 =="y"){ echo "checked"; } ?> id="mhr_disease_46" style="">
						<label for="last-name" style="">Piles</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_47" value="y" <?php if($mhr_info->mhr_disease_47 =="y"){ echo "checked"; } ?> id="mhr_disease_47" style="">
						<label for="last-name" style="">Rashes/ excema</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_48" value="y" <?php if($mhr_info->mhr_disease_48 =="y"){ echo "checked"; } ?> id="mhr_disease_48" style="">
						<label for="last-name" style="">Boils/ staph infection</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_49" value="y" <?php if($mhr_info->mhr_disease_49 =="y"){ echo "checked"; } ?> id="mhr_disease_49" style="">
						<label for="last-name" style="">Fits/ convulsions</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_50" value="y" <?php if($mhr_info->mhr_disease_50 =="y"){ echo "checked"; } ?> id="mhr_disease_50" style="">
						<label for="last-name" style="">Sciatica</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_51" value="y" <?php if($mhr_info->mhr_disease_51 =="y"){ echo "checked"; } ?> id="mhr_disease_51" style="">
						<label for="last-name" style="">Tuberculosis</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_52" value="y" <?php if($mhr_info->mhr_disease_52 =="y"){ echo "checked"; } ?> id="mhr_disease_52" style="">
						<label for="last-name" style="">Malaria/dysentery</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_53" value="y" <?php if($mhr_info->mhr_disease_53 =="y"){ echo "checked"; } ?> id="mhr_disease_53" style="">
						<label for="last-name" style="">Rheumatic fever</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_54" value="y" <?php if($mhr_info->mhr_disease_54 =="y"){ echo "checked"; } ?> id="mhr_disease_54" style="">
						<label for="last-name" style="">Polio/meningitis</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_55" value="y" <?php if($mhr_info->mhr_disease_55 =="y"){ echo "checked"; } ?> id="mhr_disease_55" style="">
						<label for="last-name" style="">Cancer/tumor</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_56" value="y" <?php if($mhr_info->mhr_disease_56 =="y"){ echo "checked"; } ?> id="mhr_disease_56" style="">
						<label for="last-name" style="">Asthma/bronchitis</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_57" value="y" <?php if($mhr_info->mhr_disease_57 =="y"){ echo "checked"; } ?> id="mhr_disease_57" style="">
						<label for="last-name" style="">Hay fever</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_58" value="y" <?php if($mhr_info->mhr_disease_58 =="y"){ echo "checked"; } ?> id="mhr_disease_58" style="">
						<label for="last-name" style="">Diabetes</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_59" value="y" <?php if($mhr_info->mhr_disease_59 =="y"){ echo "checked"; } ?> id="mhr_disease_59" style="">
						<label for="last-name" style="">Arthritis/rhenuatism</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_60" value="y" <?php if($mhr_info->mhr_disease_60 =="y"){ echo "checked"; } ?> id="mhr_disease_60" style="">
						<label for="last-name" style="">Nervous breakdown</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_61" value="y" <?php if($mhr_info->mhr_disease_61 =="y"){ echo "checked"; } ?> id="mhr_disease_61" style="">
						<label for="last-name" style="">Backaches</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_62" value="y" <?php if($mhr_info->mhr_disease_62 =="y"){ echo "checked"; } ?> id="mhr_disease_62" style="">
						<label for="last-name" style="">Chronic sinus infections</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_63" value="y" <?php if($mhr_info->mhr_disease_63 =="y"){ echo "checked"; } ?> id="mhr_disease_63" style="">
						<label for="last-name" style="">Thyroid trouble or goiter</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="mhr_disease_64" value="y" <?php if($mhr_info->mhr_disease_64 =="y"){ echo "checked"; } ?> id="mhr_disease_64" style="">
						<label for="last-name" style="">Serious dental problems</label>
					</div>
				</div>
				<br />
				<br />
				<br />
				<div class="row">
					<div class="col-sm-4">
						<label for="last-name" style="">Do you wear eyeglasses?</label>
					</div>
					<div class="col-sm-4">
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">Yes</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q1" id="mhr_65" value="y" <?php if($mhr_info->q1 =="y"){ echo "checked"; } ?> style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q1" id="mhr_66" value="n" <?php if($mhr_info->q1 =="n"){ echo "checked"; } ?> style="">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label for="last-name" style="">Do you have a hearing problems?</label>
					</div>
					<div class="col-sm-4">
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">Yes</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q2" id="mhr_67" value="y" <?php if($mhr_info->q2 =="y"){ echo "checked"; } ?> style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q2" id="mhr_68" value="n" <?php if($mhr_info->q2 =="n"){ echo "checked"; } ?> style="">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label for="last-name" style="">Do you have a hearing problems?</label>
					</div>
					<div class="col-sm-4">
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">Yes</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q3" id="mhr_69" value="y" <?php if($mhr_info->q3 =="y"){ echo "checked"; } ?> style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q3" id="mhr_70" value="n" <?php if($mhr_info->q3 =="n"){ echo "checked"; } ?> style="">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label for="last-name" style="">Have you gained or lost weight in the past year?</label>
					</div>
					<div class="col-sm-4">
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">Yes</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q4" id="mhr_71" value="y" <?php if($mhr_info->q4 =="y"){ echo "checked"; } ?> style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q4" id="mhr_72" value="n" <?php if($mhr_info->q4 =="n"){ echo "checked"; } ?> style="">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label for="last-name" style="">Have you ever been refused employment because of your health?</label>
					</div>
					<div class="col-sm-4">
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">Yes</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q5" id="mhr_73" value="y" <?php if($mhr_info->q5 =="y"){ echo "checked"; } ?> style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q5" id="mhr_74" value="n" <?php if($mhr_info->q5 =="n"){ echo "checked"; } ?> style="">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label for="last-name" style="">Are Currently under the care of a physician?</label>
					</div>
					<div class="col-sm-4">
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">Yes</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q6" id="mhr_75" value="y" <?php if($mhr_info->q6 =="y"){ echo "checked"; } ?> style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q6" id="mhr_76" value="n" <?php if($mhr_info->q6 =="n"){ echo "checked"; } ?> style="">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label for="last-name" style="">Are you currently taking drugs / medication?</label>
					</div>
					<div class="col-sm-4">
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">Yes</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q7" id="mhr_77" value="y" <?php if($mhr_info->q7 =="y"){ echo "checked"; } ?> style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q7" id="mhr_78" value="n" <?php if($mhr_info->q7 =="n"){ echo "checked"; } ?>style="">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label for="last-name" style="">Do you have any defect deformity or disease that may interfere with your work?</label>
					</div>
					<div class="col-sm-4">
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">Yes</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q8" id="mhr_79" value="y" <?php if($mhr_info->q8 =="y"){ echo "checked"; } ?> style=""/>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q8" id="mhr_80" value="n" <?php if($mhr_info->q8 =="n"){ echo "checked"; } ?> style="">
							</div>
						</div>
					</div>
				</div>
				<br />
				<br />
				<div class="row">
					<span>
						Please describe your present state of health
					</span>
					<br />
					<span>
						<input type="checkbox" name="mhr_81" id="mhr_81" value="y" <?php if($mhr_info->mhr_81 =="y"){ echo "checked"; } ?> style="">
						<label for="last-name" style="">Excellent</label>
					</span>
					<br />
					<span>
						<input type="checkbox" name="mhr_82" id="mhr_82" value="y" <?php if($mhr_info->mhr_82 =="y"){ echo "checked"; } ?> style="">
						<label for="last-name" style="">Good</label>
					</span>
					<br />
					<span>
						<input type="checkbox" name="mhr_83" id="mhr_83" value="y" <?php if($mhr_info->mhr_83 =="y"){ echo "checked"; } ?> style="">
						<label for="last-name" style="">Fair</label>
					</span>
					<br />
					<span>
						<input type="checkbox" name="mhr_84" id="mhr_84" value="y" <?php if($mhr_info->mhr_84=="y"){ echo "checked"; } ?> style="">
						<label for="last-name" style="">Poor</label>
					</span>
				</div>
				<br />
				<br />
				<h2> <u>DECLARATION</u> </h2>
				<div class="row">
					<span>
						<i>I hereby clearly understood the above questions, and the answers given by me are true and correct to the best of my knowledge and belief. I understand that any misrepresentation or omission of facts which might tend to render inaccurate an evaluation of this medical history record constitutes cause for immediate dismissal. If in the opinion of the prospective employer, a medical examination is considered necessary, I consent to such laboratory tests, x-rays, or other routine examination procedure as the examining physician deems advisable. (Employer reserves the right to designate the examining physician.)</i>
					</span>
				</div>
			</div>
			
			<br />
			<br />
			<br />
			
			<div class="row">
				<div class="col-sm-6" style="text-align:center;">
					<!--<img src="<?php echo $rn_info->signature?>" style="max-width:100%;" alt="Employee’s signature">-->
					<img id="mhr_signature" src="<?php echo $rn_info->signature?>" >
					<p></p>
					<label for="last-name" style="display: inline; width: initial;">Signature of Employee</label>
				</div>
				<p></p>
				<div class="col-sm-6" style="text-align:center;">
					<input id="mhr_signature_date" type="date" class="form-control" style="display: inline; width: initial;" name="mhr_signature_date" value="<?php echo $mhr_info->mhr_signature_date?>"/>
					<p></p>
					<label for="last-name" style="">Date</label>
				</div>
			</div>
                     
		</form>
               <button id="btn_mhr_save" onclick="callfunc()" type="button" class="btn btn-primary btn-block" style="width: 20%; float: right;">Next</button>
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
	$('#mhr_form').val(JSON.stringify($('form.mhrform').serializeObject()));
	$("#myModalRC").hide();
	return false;
}
</script>