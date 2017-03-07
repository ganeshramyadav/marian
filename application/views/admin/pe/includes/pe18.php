	<table border="1"  class="table table-hover table-striped" border-collapse="collapse">
        <thead>
            <tr>
                <td><div class="input-group">&nbsp;&nbsp;&nbsp;Job Title/Position: OFFICE STAFF</div></th>
                <td width="234" rowspan="2"></th>
            </tr>

            <tr>
                <td> 
					<div class="col-sm-6">
						<div class="">
							Date of Hire:	
							<div class="input-group">
								<input type="text" name="hiredate" ng-model="q.hiredate"  class="form-control datepicker" data-format="yyy-mm-dd">
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
                <td><b></b></td>
                <td colspan="4" style="text-align:center;">Rating</td>
            </tr>
			
			<tr>
                <td><b><i>MISSION AND OBJECTIVES</i></b></td>
                <td colspan="4" style="text-align:center;"></td>
            </tr>

            <tr>
                <td>1.	Works cooperatively with all co-workers.</td>
                <td>
					<select name="row1" ng-model="q.row1" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Below Standards">1-Below Standards</option>
	                    <option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
				    </select>
				</td>
            </tr>

            <tr>
                <td colspan="">2.	Offers assistance to facilitate Agency objectives.</td>
                <td>
					<select name="row2" ng-model="q.row2" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Below Standards">1-Below Standards</option>
	                    <option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
				    </select>
				</td>
            </tr>

            <tr>
                <td colspan="">3.	Uses Agency equipment in a safe and careful manner.</td>
                <td>
					<select name="row3" ng-model="q.row3" class="form-control col-sm-6">
						<option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
					</select>
				</td>
            </tr>
			
			<tr>
                <td><b><i>CLIENT RELATIONS</i></b></td>
                <td></td>
            </tr>

            <tr>
                <td colspan="">1.	Demonstrates respect for client’s rights to confidentiality by refraining from discussion of client information except as necessary.</td>
                <td>
					<select name="row4" ng-model="q.row4" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
					</select>
				</td>
            </tr>
            <tr>
                <td colspan="">2.	Communication with clients / caregivers / families is courteous and respectful.</td>
                <td>
					<select name="row5" ng-model="q.row5" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
					</select>
				</td>
            </tr>
			
			<tr>
                <td><b><i>RELIABILITY</i></b></td>
                <td></td>
            </tr>

            <tr>
                <td colspan="">1.	Provides proper notification of absences.</td>
                <td>
					<select name="row6" ng-model="q.row6" class="form-control col-sm-6">
	                   <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
					</select>
				</td>
            </tr>
            <tr>
                <td colspan="">2.	Follows through on work assignments and reports any incomplete assignments.</td>
                <td>
					<select name="row7" ng-model="q.row7" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
					</select>
				</td>
            </tr>

            <tr>
                <td colspan="">3.	Performs duties with minimum supervision within work hour schedule.</td>
                <td>
					<select name="row8" ng-model="q.row8" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
				    </select>
				</td>
            </tr>
			
			<tr>
                <td colspan="">4.	Willingly accepts new procedures and activities introduced by management.</td>
                <td>
					<select name="row91" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
				    </select>
				</td>
            </tr>
			
			<tr>
                <td><b><i>TIME UTILIZATION</i></b></td>
                <td></td>
            </tr>
			
			<tr>
                <td colspan="">1.	Coordinates activities to achieve maximum productivity and efficiency.</td>
                <td>
					<select name="row92" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
				    </select>
				</td>
            </tr>
			
			<tr>
                <td colspan="">2.	Completes assignments in a timely manner.</td>
                <td>
					<select name="row93" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
				    </select>
				</td>
            </tr>
			
			<tr>
                <td><b><i>JUDGEMENTS AND DECISION MAKING</i></b></td>
                <td></td>
            </tr>
			
			<tr>
                <td colspan="">1.	Seeks guidance and direction as necessary for duties.</td>
                <td>
					<select name="row94" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
				    </select>
				</td>
            </tr>
			
			<tr>
                <td colspan="">2.	Recognizes how employee’s position and duties relate to overall Agency function.</td>
                <td>
					<select name="row95" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
				    </select>
				</td>
            </tr>
			
			<tr>
                <td><b><i>COMMUNICATIONS</i></b></td>
                <td></td>
            </tr>
			
			<tr>
                <td colspan="">1.	Communicates with physicians, referral source. management, and team members in a professional manner.</td>
                <td>
					<select name="row96" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
				    </select>
				</td>
            </tr>
			
			<tr>
                <td colspan="">2.	Represents the Agency with courtesy and tact.</td>
                <td>
					<select name="row96" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
				    </select>
				</td>
            </tr>

			<tr>
                <td colspan="">3.	Answers pages and telephone calls promptly and courteously.</td>
                <td>
					<select name="row9" ng-model="q.row9" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
					</select>
				</td>
            </tr>
			
			<tr>
                <td><b><i>SAFETY STANDARDS</i></b></td>
                <td></td>
            </tr>

			<tr>
                <td colspan="">1.	Follows safety procedures to prevent accidents.</td>
                <td>
					<select name="row11" ng-model="q.row11" class="form-control col-sm-6">
						<option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
				    </select>
				</td>
            </tr>
					
			<tr>
                <td colspan="">2.	Safely operates equipment in performance of job duties.</td>
                <td>
					<select name="row12" ng-model="q.row12" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
					</select>
				</td>
            </tr>
			
			<tr>
                <td><b><i>QUALITY MANGEMENT</i></b></td>
                <td></td>
            </tr>

			<tr>
                <td colspan="">1.	Presents problems and suggestions for improvement to the attention of management.</td>
                <td>
					<select name="row13" ng-model="q.row13" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
				    </select>
				</td>
            </tr>
			
			<tr>
                <td colspan="">2.	Participates in QM activities.</td>
                <td>
					<select name="row10" ng-model="q.row10" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
						<option value="1-Below Standards">1-Below Standards</option>
						<option value="2-Meets Standards">2-Meets Standards</option>
						<option value="3-Exceeds Standards">3-Exceeds Standards</option>
					</select>
				</td>
			</tr>
       </tbody>
    </table>
	<br />
	<div class="">
		<div class="row">
			<label class="control-label">COMMENTS ON JOB SPECIFIC FUNCTIONS:</label>
			<textarea name="function" ng-model="q.function"> </textarea>
		</div>
		<br/>
		<div class="row">
			<label class="control-label">EMPLOYEES COMMENTS:</label>
			<textarea name="comments" ng-model="q.comments"> </textarea>
		</div>
		<br/>
		<div class="row">
			<label class="control-label">GOALS FOR NEXT REVIEW PERIOD:</label>
			<textarea name="review" ng-model="q.review"> </textarea>
		</div>
	</div>
	<br />
	<div class="row">
     <div class="col-sm-4">
        <?php if(!empty($user_esign)){ ?><img src="<?php echo $user_esign;?>"> <?php }else{ ?> <p style="margin-top:40px;">------------------------</p> <?php } ?>	
	 <p>Employee's Signature</p>
     </div>
</div>