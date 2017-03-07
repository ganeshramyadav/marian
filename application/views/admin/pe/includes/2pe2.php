<table border="1"  class="table table-hover table-striped" border-collapse="collapse">
					<thead>
						<tr>
							<td><div class="input-group">&nbsp;&nbsp;&nbsp;Job Title/Position:  <b>Registered Nurse</div></b></th>
							<td width="234" rowspan="2"></th>
				   
						</tr>

						<tr>
							<td> 
								<div class="col-sm-6">
									<div class="">
										Date:
										<div class="input-group">
											<input type="text" name="date" ng-model="q.date"  class="form-control datepicker" data-date-format="mm/dd/yyyy">
											<div class="input-group-addon">
												<a href="#"><i class="entypo-calendar"></i></a>
											</div>
										</div>
									</div>
								</div>
							</td>     
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>
								<div class="col-sm-6">
									<div class="">
										<div class="input-group">
											<div class="">
												<label class="control-label" >Reviewer:</label>
												<input type="text" name="reviewer"  ng-model="q.reviewer" class="form-control" size="50">
											</div>
										</div>
									</div>
									<div class="">
										<label class="control-label">User:<span class="required"> *</span></label>
										<select name="user" ng-model="q.user" class="form-control col-sm-5" >
											<option value="" >Select user...</option>
											<?php foreach ($all_pe_info as $pe_info) : ?>
								<option <?php if($pe_info['first_name']." ".$pe_info['last_name'] == $username) echo 'selected';?> value="<?php echo $pe_info['uid']; ?>" ><?php echo $pe_info['first_name']." ".$pe_info['last_name']; ?></option>
							<?php endforeach; ?>
										</select> 
									</div>
								</div> 
							</td>
							<td>[<input type="radio" name="time" ng-model="q.time" value="annual" >] Annual &nbsp;[<input type="radio" name="time" ng-model="q.time" value="90day" >] 90 Day &nbsp;[<input type="radio" name="time" value="others" ng-model="q.time">] Other </td>
						</tr>

						

						<tr>
							<td><b>List</b></td>
							<td colspan="4" style="text-align:center;">Rating</td>
						</tr>
						
						<tr>
							<td>Provides services in accordance with the plan of care.</td>
							<td><select name="row1" ng-model="q.row1" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Performs initial assessments per time frame.</td>
							<td><select name="row2" ng-model="q.row2" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Initiates appropriate preventive and nursing procedures.</td>
							<td><select name="row3" ng-model="q.row3" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Prepares clinical and progress notes for each patient visit and summaries of care conferences on his/her patients in a timely manner as per Hospice policy.</td>
							<td><select name="row4" ng-model="q.row4" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Informs personnel of changes in the condition and needs of the patient.</td>
							<td><select name="row5" ng-model="q.row5" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Counsels with the patient and family in meeting nursing and related needs.</td>
							<td><select name="row6" ng-model="q.row6" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Participates in and presents inservice programs.</td>
							<td><select name="row7" ng-model="q.row7" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Processes orders and notifies physician of patient needs and changes in condition.</td>
							<td><select name="row8" ng-model="q.row8" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Implements and documents in nursing notes actions/interventions as outlined in the plan of care.</td>
							<td><select name="row9" ng-model="q.row9" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Determines the amount and type of nursing needed for the patient.</td>
							<td><select name="row10" ng-model="q.row10" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Involves the patient/family in developing the plan of care.</td>
							<td><select name="row11" ng-model="q.row11" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Supervises the Hospice Aide's work every fourteen days, either in the presence of or absence of the Aide, and completes supervisory visit form. </td>
							<td><select name="row12" ng-model="q.row12" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Participates in after hour on-call duty as assigned.</td>
							<td><select name="row13" ng-model="q.row13" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Obtains knowledge and supervised practice of new skills.</td>
							<td><select name="row14" ng-model="q.row14" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Coordinates the implementation of the plan of care for patients residing in SNF, NF, ICF or MR.</td>
							<td><select name="row15" ng-model="q.row15" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Attends staff meetings and patient care conferences as scheduled.</td>
							<td><select name="row16" ng-model="q.row16" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Completes documentation and paperwork in a timely manner per Hospice policy.</td>
							<td><select name="row17" ng-model="q.row17" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Immediately reports to Manager of Patient Services/Director any patient incidents/variances or complaints.</td>
							<td><select name="row18" ng-model="q.row18" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Demonstrates competent performance of technical skills according to established procedures.</td>
							<td><select name="row19" ng-model="q.row19" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Participates in peer review and QAPI activities as requested.</td>
							<td><select name="row20" ng-model="q.row20" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Understands and adheres to established policies/procedures.</td>
							<td><select name="row21" ng-model="q.row21" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Adheres to Hospice standards and consistently interprets and accurately performs all assigned responsibilities.</td>
							<td><select name="row22" ng-model="q.row22" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Maintains acceptable attendance status, per Hospice policy.</td>
							<td><select name="row23" ng-model="q.row23" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Maintains acceptable level of tardiness, per Hospice policy.</td>
							<td><select name="row24" ng-model="q.row24" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Reports all incomplete work assignments to Manager of Patient Services/Director.</td>
							<td><select name="row25" ng-model="q.row25" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Appearance is always within Hospice standard; is clean and well groomed.</td>
							<td><select name="row26" ng-model="q.row26" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Demonstrates effective time management skills through daily documentation and infrequent overtime for routine assignments.</td>
							<td><select name="row27" ng-model="q.row27" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Provides dietary counseling.</td>
							<td><select name="row28" ng-model="q.row28" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Maintains clean and neat work environment.</td>
							<td><select name="row29" ng-model="q.row29" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Demonstrates sound judgment and decision making.</td>
							<td><select name="row30" ng-model="q.row30" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Maintains current CPR certification, if required.</td>
							<td><select name="row31" ng-model="q.row31" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Performs other duties as assigned by Manager of Patient Services/Director.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Regularly assesses and reassesses the nursing needs of the patient.</td>
							<td><select name="row33" ng-model="q.row33" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Provides Hospice nursing services, treatments and preventive procedures.</td>
							<td><select name="row34" ng-model="q.row34" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Observes signs and symptoms and reports to the physician and IDG members any unexpected changes in the patient’s physical or emotional condition.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Teaches, supervises and counsels the patient and family members about providing care for the patient.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Supervises and trains other nursing service personnel.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Performs specific nursing procedures as needed (e.g., treatments, management of symptoms, preventive measures) following physician’s orders.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Attends team conferences.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Maintains records as required by the agency.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Observes confidentiality and safeguards all patient-related information in compliance with HIPAA regulations.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Always communicates to the Manager of Patient Services/Director if unable to meet a patient’s need or perform a procedure.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
                                               <tr>
							<td>Maintains skills and knowledge.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Works with IDG concept of patient care.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>

                                                <tr>
							<td>Organizes work schedule and utilizes time management to be able to attend all required meetings.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
                                               <tr>
							<td>Complies with infection control policies and protocols.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Assist with orientation, teaching and training as requested.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Does Not Meet Standards">1-Does Not Meet Standards</option>
									<option value="2-Needs Improvement">2-Needs Improvement</option>
									<option value="3-Meets Standards">3-Meets Standards</option>
									<option value="4-Exceeds Standards">4-Exceeds Standards</option>
								</select>
							</td>
						</tr>

						
					</tbody>
				</table>

<div class="row">
 <div class="col-sm-6">
  <div class="">
   <label class="control-label" >Targeted Goals For Next Review Cycle: </label>
   <div class="input-group">
   <textarea name="targetedgoals" ng-model="p.targetedgoals"></textarea>
   </div>
  </div>
 </div>
</div>

<div class="row">
 <div class="col-sm-6">
  <div class="">
   <label class="control-label" >Comments: </label>
   <div class="input-group">
   <textarea name="comments" ng-model="p.comments"></textarea>
   </div>
  </div>
 </div>
</div>

<div class="row">
     <div class="col-sm-4">
        <?php if(!empty($user_esign)){ ?><img src="<?php echo $user_esign;?>"> <?php }else{ ?> <p style="margin-top:40px;">------------------------</p> <?php } ?>	
	 <p>Employee's Signature</p>
     </div>
</div>