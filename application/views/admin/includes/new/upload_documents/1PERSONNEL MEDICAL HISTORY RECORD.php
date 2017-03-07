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
						<input id="mhr_last_name" name="mhr_last_name" class="form-control" style="display: inline; width: initial;"/>
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
						<input id="last-name" class="form-control" style="display: inline; width: initial;"/>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="col-sm-6">
						<label for="last-name" style="display: inline; width: initial;">Address</label>
					</div>
					<div class="col-sm-6">
						<input id="last-name" class="form-control" style="display: inline; width: initial;"/>
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
							<input id="last-name" class="form-control" style=""/>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row">
						<div class="col-sm-6">
							<label for="last-name" style="">State</label>
						</div>
						<div class="col-sm-6">
							<input id="last-name" class="form-control" style=""/>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row">
						<div class="col-sm-6">
							<label for="last-name" style="">Zip</label>
						</div>
						<div class="col-sm-6">
							<input id="last-name" class="form-control" style=""/>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="row">
						<div class="col-sm-6">
							<label for="last-name" style="">Tel No.</label>
						</div>
						<div class="col-sm-6">
							<input id="last-name" class="form-control" style="display: inline;"/>
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
							<input id="last-name" class="form-control" style=""/>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name" style="">Address</label>
						</div>
						<div class="col-sm-5">
							<input id="last-name" class="form-control" style=""/>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name" style="">Tel No.</label>
						</div>
						<div class="col-sm-5">
							<input id="last-name" class="form-control" style=""/>
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
					<input id="last-name" class="form-control" style="display: inline;"/>
					<p></p>
					<input type="date" id="last-name" class="form-control" style="display: inline;"/>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-2">
					<label for="last-name" style="display: inline; width: initial;">Present Weight</label>
				</div>
				<div class="col-sm-6">
					<input id="last-name" class="form-control" style="display: inline;"/>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-2">
					<input type="checkbox" name="person-status" id="citizen" value="" style="">
					<label for="last-name" style="">Diabetes</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="person-status" id="citizen" value="" style="">
					<label for="last-name" style="">Tuverculosis</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="person-status" id="citizen" value="" style="">
					<label for="last-name" style="">Mental illness</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="person-status" id="citizen" value="" style="">
					<label for="last-name" style="">Nervousness</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="person-status" id="citizen" value="" style="">
					<label for="last-name" style="">Epilepsy</label>
				</div>
				<div class="col-sm-2">
					<input type="checkbox" name="person-status" id="citizen" value="" style="">
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
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Brain/skull</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Eyes</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Nose</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Throat</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Heart</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Lungs</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Stomachs/intestines</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Ulcer/spleen</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Gall bladder</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Kidneys/bladder</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Bones/joints</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Back/spine</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Skin</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Abdominal pain/ appendicitis</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Anemia/blood disease</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Breast trouble</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Genitals</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Painful or flat feet</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Dizziness</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Frequent migraine/ headache</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Running or ringing ears</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Frequent clods/ sore throat</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Fainting spells</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Prostrate trouble</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Chest pains/ palpitation</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Shortness of breath</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Chronic cough</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Coughing of blood</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Allergies</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Poor appetite/ chronic indigestion</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Bowel trouble or colitis</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Varicose veins</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Recurrent nausea/ vomiting</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Vomiting of blood</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Chronic constipation</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Black or bloody bowel movement</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Frequent or painful urination</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Blood in urine</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Swollen ankles</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">High blood in urine</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Jaundice</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Hernia(rupture)</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Stomach/duodenal ulcers</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Pneumonia/ pleurisy</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Kidney stones of nephritis</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Piles</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Rashes/ excema</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Boils/ staph infection</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Fits/ convulsions</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Sciatica</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Tuberculosis</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Malaria/dysentery</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Rheumatic fever</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Polio/meningitis</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Cancer/tumor</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Asthma/bronchitis</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Hay fever</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Diabetes</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Arthritis/rhenuatism</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Nervous breakdown</label>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Backaches</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Chronic sinus infections</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
						<label for="last-name" style="">Thyroid trouble or goiter</label>
					</div>
					<div class="col-sm-2">
						<input type="checkbox" name="person-status" id="citizen" value="" style="">
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
								<input type="radio" name="q1" id="" value="" style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q1" id="" value="" style="">
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
								<input type="radio" name="q2" id="" value="" style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q2" id="" value="" style="">
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
								<input type="radio" name="q3" id="" value="" style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q3" id="" value="" style="">
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
								<input type="radio" name="q4" id="" value="" style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q4" id="" value="" style="">
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
								<input type="radio" name="q5" id="" value="" style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q5" id="" value="" style="">
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
								<input type="radio" name="q6" id="" value="" style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q6" id="" value="" style="">
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
								<input type="radio" name="q7" id="" value="" style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q7" id="" value="" style="">
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
								<input type="radio" name="q8" id="" value="" style="">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="col-sm-6">
								<label for="last-name" style="">No</label>
							</div>
							<div class="col-sm-6">
								<input type="radio" name="q8" id="" value="" style="">
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
						<input type="checkbox" name="q8" id="" value="" style="">
						<label for="last-name" style="">Excellent</label>
					</span>
					<br />
					<span>
						<input type="checkbox" name="q8" id="" value="" style="">
						<label for="last-name" style="">Good</label>
					</span>
					<br />
					<span>
						<input type="checkbox" name="q8" id="" value="" style="">
						<label for="last-name" style="">Fair</label>
					</span>
					<br />
					<span>
						<input type="checkbox" name="q8" id="" value="" style="">
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
					<img src="<?php echo $rn_info->signature?>" style="max-width:100%;" alt="Employee’s signature">
					<p></p>
					<label for="last-name" style="display: inline; width: initial;">Signature of Employee</label>
				</div>
				<p></p>
				<div class="col-sm-6" style="text-align:center;">
					<input id="last-name" type="date" class="form-control" style="display: inline; width: initial;"/>
					<p></p>
					<label for="last-name" style="">Date</label>
				</div>
			</div>
                     
		</form>
               <button id="btn_mhr_save" onclick="callfunc()" type="button" class="btn btn-primary btn-block">Submit</button> 
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
alert('ty');
     $('#mhr_form').val(JSON.stringify($('form.mhrform').serializeObject()));
         return false;

}



</script>