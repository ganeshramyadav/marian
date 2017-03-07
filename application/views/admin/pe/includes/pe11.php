<table border="1"  class="table table-hover table-striped" border-collapse="collapse">
					<thead>
						<tr>
							<td><div class="input-group">&nbsp;&nbsp;&nbsp;Job Title/Position:  <b>Social Worker/Social Work Assistant</div></b></th>
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
							<td>Documents all patient/family services provided as required by Home Health policy; works with the family.</td>
							<td><select name="row1" ng-model="q.row1" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Provides input into revision and implementation of Home Health policies and procedures as requested.</td>
							<td><select name="row2" ng-model="q.row2" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Informs the IDG of changes in the patient's condition and needs.</td>
							<td><select name="row3" ng-model="q.row3" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Follows the policies and procedures of Home Health. Observes confidentiality and safeguards all patient-related information in compliance with HIPAA regulations.</td>
							<td><select name="row4" ng-model="q.row4" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Attends staff meetings and IDG conferences as scheduled.</td>
							<td><select name="row5" ng-model="q.row5" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Completes documentation and paperwork in a timely manner as per Home Health policy; prepares clinical and progress notes.</td>
							<td><select name="row6" ng-model="q.row6" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Immediately reports to Manager of Patient Services/Director any patient incidents/variances or complaints.</td>
							<td><select name="row7" ng-model="q.row7" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Adheres to Home Health standards and consistently interprets and accurately performs all assigned responsibilities.</td>
							<td><select name="row8" ng-model="q.row8" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Maintains acceptable attendance status, per Home Health policy.</td>
							<td><select name="row9" ng-model="q.row9" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Maintains acceptable level of tardiness, per Home Health policy.</td>
							<td><select name="row10" ng-model="q.row10" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Reports all incomplete work assignments to Director/Manager of Patient Services.</td>
							<td><select name="row11" ng-model="q.row11" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Appearance is always within Home Health standard; is clean and well groomed.</td>
							<td><select name="row12" ng-model="q.row12" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Demonstrates effective time management skills through daily documentation and infrequent overtime for routine assignments.</td>
							<td><select name="row13" ng-model="q.row13" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Performs initial psychosocial, emotional, spiritual and bereavement assessments and assists in the development and implementation of goal-directed IDG care plan.</td>
							<td><select name="row14" ng-model="q.row14" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Conducts ongoing reassessments of patient/family needs and counseling as required.</td>
							<td><select name="row15" ng-model="q.row15" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Provides short term crisis intervention and individual or family counseling when indicated.</td>
							<td><select name="row16" ng-model="q.row16" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Participates as a member of the Bereavement Team as assigned.</td>
							<td><select name="row17" ng-model="q.row17" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Observes, evaluates and brings to IDG conferences information regarding psychosocial, emotional, spiritual, physical and financial conditions affecting the patient and family.</td>
							<td><select name="row18" ng-model="q.row18" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Assumes the active role of advocate for the patient/family unit.</td>
							<td><select name="row19" ng-model="q.row19" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Develops and maintains contact with appropriate community agencies and services in order to promote interagency cooperation and to facilitate related referrals.</td>
							<td><select name="row20" ng-model="q.row20" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Documents psychosocial and emotional information clearly and concisely in a timely manner.</td>
							<td><select name="row21" ng-model="q.row21" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>All patient/family visits, telephone contacts and referral actions are recorded in the patient record per policy.</td>
							<td><select name="row22" ng-model="q.row22" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Provides ongoing counseling related to issues of death and dying to the patient and family as needed.</td>
							<td><select name="row23" ng-model="q.row23" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Attends staff meetings, IDG and other meetings as assigned and appropriate.</td>
							<td><select name="row24" ng-model="q.row24" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Participates in the orientation program as assigned.</td>
							<td><select name="row25" ng-model="q.row25" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Acts as consultant to other Home Health personnel.</td>
							<td><select name="row26" ng-model="q.row26" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Assumes responsibility for own personal and professional development and maintenance of skills in social work.</td>
							<td><select name="row27" ng-model="q.row27" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Exhibits Home Health philosophy in all job related roles</td>
							<td><select name="row28" ng-model="q.row28" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Attends and participates in inservice education programs as assigned.</td>
							<td><select name="row29" ng-model="q.row29" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Maintains clean and neat work environment.</td>
							<td><select name="row30" ng-model="q.row30" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Complies with Home Health infection control policies and procedures.</td>
							<td><select name="row31" ng-model="q.row31" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Demonstrates sound judgment and decision making.</td>
							<td><select name="row32" ng-model="q.row32" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Maintains current CPR certification, if required.</td>
							<td><select name="row33" ng-model="q.row33" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Performs other duties as assigned by Director.</td>
							<td><select name="row34" ng-model="q.row34" class="form-control col-sm-6">
									<option value="">Select Choice...</option>
									<option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
									<option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
									<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
									<option value="4-Superior Performance">4-Superior Performance</option>
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