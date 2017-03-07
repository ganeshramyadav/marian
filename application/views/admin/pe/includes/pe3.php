<table border="1"  class="table table-hover table-striped" border-collapse="collapse">
        <thead>
            <tr>
                <td><div class="input-group">&nbsp;&nbsp;&nbsp;Job Title/Position:  <b>Licensed Practical/Vocational Nurse</div></b></th>
                <td width="234" rowspan="2"></th>
       
            </tr>

            <tr>
                <td> <div class="col-sm-6">
                     <div class="">
                        Date:
                     					
                         <div class="input-group">
						
                           <input type="text" name="date" ng-model="q.date"  class="form-control datepicker" data-date-format="mm/dd/yyyy">
                            <div class="input-group-addon">
                               <a href="#"><i class="entypo-calendar"></i></a>
                            </div>
                         </div>
                     </div> 
					 
					 
                      
					 
                   </div></td>     
            </tr>
        </thead>
<?php

	// echo "<pre>"; print_r($all_lvn_info); echo "</pre>";
	// echo "<pre>"; print_r($all_aclvn_info); echo "</pre>";

?>
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
                <td><b>1. Patient Care Responsibilities</b></td>
                <td colspan="4" style="text-align:center;">Rating</td>
            </tr>  

            <tr>
                <td>1. Provides direct patient care as defined, in State Nurse Practice Act.</td>
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
                <td colspan="">2. Implements plan of care based on the comprehensive assessment.</td>
                <td><select name="row2" ng-model="q.row2" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>

            <tr>
                <td colspan="">3. Provides accurate and timely documentation consistent with the plan of care.</td>
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
                <td colspan="">4. Assesses and provides patient and family/caregiver education and information pertinent to diagnosis and plan of care.</td>
                <td><select name="row4" ng-model="q.row4" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>

            <tr>
                <td colspan="">5. Participates in coordination of hospice services, appropriately reporting the identified needs for other disciplines (HHA, OT, PT, MSW, ST, and Dietician) to the clinician and/or Clinical Supervisor/Nursing Supervisor.</td>
                <td><select name="row5" ng-model="q.row5" class="form-control col-sm-6">
	                     <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>

            <tr>
                <td colspan="">6. Uses equipment and supplies effectively and efficiently.</td>
                <td><select name="row6" ng-model="q.row6" class="form-control col-sm-6">
	                   <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>
                     
            <tr>
                <td colspan="">7. Participates in personal, professional growth and development.</td>
                <td><select name="row7" ng-model="q.row7" class="form-control col-sm-6">
	                     <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>

            <tr>
                <td colspan="">8. Performs other duties as assigned by the RN.</td>
                <td><select name="row8" ng-model="q.row8" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>
					
			<tr>
                <td colspan=""><b>2. Organizational Responsibilities</b></td>
                <td>&nbsp;</td>
            </tr>
					
			<tr>
                <td colspan="">1. Adheres to patient assignments as directed by immediate Clinical Supervisor/Nursing Supervisor.</td>
                <td><select name="row9" ng-model="q.row9" class="form-control col-sm-6">
	                     <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>
					
			<tr>
                <td colspan="">2. Nursing care is covered by medical orders from the physician as appropriate.</td>
                <td><select name="row10" ng-model="q.row10" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>
					
			<tr>
                <td colspan="">3. Maintains an acceptable work record.<input type="text" name="tardy" ng-model="q.tardy" value=""> Days Tardy <input type="text" name="absent" ng-model="q.absent" value=""> Days Absent</td>
                <td><select name="row11" ng-model="q.row11" class="form-control col-sm-6">
	                   <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>
					
			<tr>
                <td colspan="">4. Informs coordinator of availability weekly.</td>
                <td><select name="row12" ng-model="q.row12" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>
					
			<tr>
                <td colspan="">5. Reviews policy manual when patient care procedures and organization personnel procedures need clarification.</td>
                <td><select name="row13" ng-model="q.row13" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>
					
			<tr>
                <td colspan="">6. Accepts responsibility for behavior and activity.</td>
                <td><select name="row14" ng-model="q.row14" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
			</tr>
					
			<tr>
                <td colspan="">7. Is respectful of individuals’ rights in interacting with patients, families/caregivers and coworkers.</td>
                <td><select name="row15" ng-model="q.row15" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>
					
		    <tr>
                <td colspan="">8. Follows organization guidelines in practice of: (a) Infection Control (b) Fire/Safety (c) Patient Care Stds.</td>
                <td><select name="row16" ng-model="q.row16" class="form-control col-sm-6">
	                     <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
						</select></td>
            </tr>
					
			<tr>
                <td colspan="">9. Displays appropriate management of equipment and supplies (acquisition to distribution).</td>
                <td><select name="row17" ng-model="q.row17" class="form-control col-sm-6">
						 <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>
					
			<tr>
                <td colspan="">10. Participates in organization quality assessment activities to improve organizational performance.</td>
                <td><select name="row18" ng-model="q.row18" class="form-control col-sm-6">
	                     <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>
					
			<tr>
                <td colspan="">11. Interacts collaboratively with all team members.</td>
                <td><select name="row19" ng-model="q.row19" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>
					
			<tr>
                <td colspan=""><b>3. Educational/In-service Responsibilities</b></td>
                <td>&nbsp;</td>
            </tr>
					
			<tr>
                <td colspan="">1. Completes CPR program annually.</td>
                <td><select name="row20" ng-model="q.row20" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>
					
			<tr>
                <td colspan="">2. Fire/Safety, Emergency Preparedness, Infection Control, Ethics, and Performance Improvement programs are attended annually.</td>
                <td><select name="row21" ng-model="q.row21" class="form-control col-sm-6">
	                   <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
			</tr>
					
			<tr>
                <td colspan="">3. Attends in-services quarterly and identifies self-learning goals.</td>
                <td><select name="row22" ng-model="q.row22" class="form-control col-sm-6">
						 <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>
					
			<tr>
                <td colspan="">4. Completes annual competency skills checklist.</td>
                <td><select name="row23" ng-model="q.row23" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
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