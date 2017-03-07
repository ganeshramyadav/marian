<table border="1"  class="table table-hover table-striped" border-collapse="collapse">
					<thead>
						<tr>
							<td><div class="input-group">&nbsp;&nbsp;&nbsp;Job Title/Position:  <b>Chaplain</div></b></th>
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
							<td>Provide direct spiritual support and/or counsel to patients/families in keeping with patients’/families’ beliefs.</td>
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
							<td>Work with staff, clergy and community groups to enhance their sensitivity to the spiritual concerns of patients/families experiencing terminal illness and loss.</td>
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
	                                                <td>Participate in IDG conference by exploring and assessing the potential spiritual needs of patients/families and reporting on services as indicated.</td>
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
							<td>Provide bereavement follow-up services as assigned.</td>
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
							<td>Maintain proper records of visits to patients/families.</td>
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
							<td>Make contact with clergy or appropriate representatives of patients/families as indicated.</td>
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
							<td>Perform occasional liturgical assignments, e.g., memorial services with staff.</td>
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
							<td>Conduct or make arrangements for funeral or memorial service when indicated.</td>
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
							<td>Develop and maintain a resource group of clergy to whom specific aspects of spiritual care may be delegated.</td>
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
							<td>Arrange for on-call availability of spiritual services.</td>
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
							<td>Provide educational programs for community clergy, religious and lay representatives as resources allow.</td>
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
							<td>Adheres to Hospice standards and consistently interprets and accurately performs all assigned responsibilities.</td>
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
							<td>Follows the policies and procedures of Hospice. Observes confidentiality and safeguards all patient-related information in compliance with HIPAA regulations.</td>
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
							<td>Completes documentation and paperwork in a timely manner per Hospice policy.</td>
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
							<td>Immediately reports to Manager of Patient Services any patient incidents/variances or complaints.</td>
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
							<td>Maintains acceptable attendance status, per Hospice policy.</td>
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
							<td>Maintains acceptable level of tardiness, per Hospice policy.</td>
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
							<td>Reports all incomplete work assignments to Manager of Patient Services.</td>
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
							<td>Demonstrates sound judgment and decision making.</td>
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
							<td>Appearance is always within Hospice standard; is clean and well groomed.</td>
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
							<td>Participates in inservice programs and presents inservices as assigned.</td>
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
							<td>Performs other duties as assigned by Manager of Patient Services.</td>
							<td><select name="row22" ng-model="q.row22" class="form-control col-sm-6">
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