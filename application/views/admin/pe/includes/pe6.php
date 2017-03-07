<table border="1"  class="table table-hover table-striped" border-collapse="collapse">
					<thead>
						<tr>
							<td><div class="input-group">&nbsp;&nbsp;&nbsp;Job Title/Position:  <b>Hospice Aide</div></b></th>
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
							<td>Assists professional staff by performing patient care duties assigned.</td>
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
							<td>Provides personal care and bath as directed by RN.</td>
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
							<td>Shampoos hair as ordered/directed by RN.</td>
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
							<td>Bed linen change as needed/patient/family requests and/or is RN directed.</td>
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
							<td>Takes accurate temperature, pulse, respiration, blood pressure, as assigned.</td>
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
							<td>Reports any unusual findings, changes in patient’s condition to RN.</td>
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
							<td>Assists with placement of bedpan and urinal.</td>
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
							<td>Administers enemas as directed by the RN.</td>
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
							<td>Collects specimen as directed by RN; reports immediately to RN any unusual specimens.</td>
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
							<td>Leaves patient's room in order, disposing of papers, cups and other items in trash.</td>
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
							<td>Performs household services essential to Hospice care in the home as RN directed.</td>
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
							<td>Uses safety rules and regulations regarding assistive ambulatory devices.</td>
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
							<td>When assisting patients, uses good body mechanics.</td>
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
							<td>Performs simple procedures as an extension of service as directed.</td>
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
							<td>Follows Hospice policy for cleaning equipment between patient use.</td>
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
							<td>Carries out, reports and documents care given in an effective, timely manner as observed by the RN and through periodic record reviews.</td>
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
							<td>Realizes when help is needed and asks RN for assistance when appropriate.</td>
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
							<td>Understands responsibility for own actions and omissions.</td>
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
							<td>Completes all work assigned by the RN.</td>
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
							<td>Does not accept assignments for a patient with special needs for which he/she has not received appropriate training.</td>
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
							<td>Observes confidentiality and safeguards all patient related information.</td>
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
							<td>Attends staff meetings and IDG conferences as scheduled.</td>
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
							<td>Any variance, accident or unusual occurrence is reported to the RN, who is then responsible for initiating a variance report.</td>
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
							<td>Maintains current documentation of status on chart and gives proper report to RN as indicated by periodic supervision, chart reviews and observations.</td>
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
							<td>Adheres to Hospice standards and consistently interprets and accurately performs all assigned responsibilities.</td>
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
							<td>Understands and adheres to established policies/procedures.</td>
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
							<td>Maintains acceptable attendance status, per Hospice policy.</td>
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
							<td>Maintains acceptable level of tardiness, per Hospice policy.</td>
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
							<td>Reports incomplete work assignments to RN.</td>
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
							<td>Appearance is always within Hospice standard; is clean and well groomed.</td>
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
							<td>Demonstrates effective time management skills through daily documentation and infrequent overtime for routine assignments.</td>
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
							<td>Attends position related inservices. Attends all mandatory inservice programs as scheduled; minimally 12 hours/year.</td>
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
							<td>Maintains clean and neat work environment.</td>
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
							<td>Demonstrates sound judgment and decision making.</td>
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
							<td>Maintains current CPR certification, if required.</td>
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
							<td>Provides emotional support and compassionate care to the patient and family unit.</td>
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
							<td>Demonstrates listening skills.</td>
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
							<td>Offers encouragement when appropriate.</td>
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
							<td>Practices patience in voice and manner.</td>
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
							<td>Performs other duties as assigned.</td>
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