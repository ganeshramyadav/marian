<table border="1"  class="table table-hover table-striped" border-collapse="collapse">
					<thead>
						<tr>
							<td><div class="input-group">&nbsp;&nbsp;&nbsp;Job Title/Position:  <b>Administrative Volunteer</div></b></th>
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
							<td>Serves as a member of IDG when requested.</td>
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
							<td>Provides assigned services.</td>
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
	                                                <td>Documents services provided. Submits documentation according to Hospice policy.</td>
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
							<td>Reports incomplete work assignments to Volunteer Coordinator.</td>
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
							<td>Demonstrates listening skills.</td>
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
							<td>Attends position related inservices and meetings.</td>
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
							<td>Demonstrates understand of Hospice philosophy.</td>
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
							<td>Demonstrates volunteer role in Hospice care.</td>
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
							<td>Demonstrates effective communication skills.</td>
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
							<td>Demonstrates understanding of bereavement, if applicable.</td>
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
							<td>Demonstrates understanding of the concept of the Hospice family.</td>
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
							<td>Demonstrates understanding of patient confidentiality.</td>
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
							<td>Demonstrates understanding of applicable infection control policies.</td>
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
							<td>Demonstrates appropriate stress management techniques.</td>
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
							<td>Appearance is always within Hospice standard; is clean and well groomed.</td>
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
							<td>Demonstrates sound judgment and decision making.</td>
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
							<td>Performs other duties as assigned.</td>
							<td><select name="row17" ng-model="q.row17" class="form-control col-sm-6">
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