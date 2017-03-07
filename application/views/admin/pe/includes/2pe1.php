<table border="1"  class="table table-hover table-striped" border-collapse="collapse">
        <thead>
            <tr>
                <td><div class="input-group">&nbsp;&nbsp;&nbsp;Job Title/Position:  <b>Registered Nurse</div></b></th>
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
                <td><b><i>Patient Care</i></b></td>
                <td colspan="4" style="text-align:center;">Rating</td>
            </tr>

            <tr>
                <td>1. 	Completes an initial assessment of patient and family to determine home care needs.   Provides a complete physical assessment and history of current and previous illness(es).</td>
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
                <td colspan="">2.	Regularly re-evaluates patient nursing needs.</td>
                <td><select name="row2" ng-model="q.row2" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>

            <tr>
                <td colspan="">3.	Initiates the plan of care.</td>
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
                <td colspan="">4.	Uses health assessment data to determine nursing diagnosis.</td>
                <td><select name="row4" ng-model="q.row4" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>

            <tr>
                <td colspan="">5.	Develops a care plan that establishes goals, based on nursing diagnosis and incorporates therapeutic, preventive, and rehabilitative nursing actions.  Includes the patient and the family in the planning process.</td>
                <td><select name="row5" ng-model="q.row5" class="form-control col-sm-6">
	                     <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>

            <tr>
                <td colspan="">6.	Initiates appropriate preventive and rehabilitative nursing procedures.  Administers medications and treatments as prescribed by the physician.</td>
                <td><select name="row6" ng-model="q.row6" class="form-control col-sm-6">
	                   <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>
                     
            <tr>
                <td colspan="">7.	Counselsthe patient and family in meeting nursing and related needs.</td>
                <td><select name="row7" ng-model="q.row7" class="form-control col-sm-6">
	                     <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>

            <tr>
                <td colspan="">8.	Provides health care instructions to the patient as appropriate per assessment and plan.</td>
                <td><select name="row8" ng-model="q.row8" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>
			
			<tr>
                <td colspan="">9.	Identifiesdischargeplanning needs as part of the care plan development and implements prior to discharge of the patient.</td>
                <td><select name="row91" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>
			
			<tr>
                <td><b><i>Communication</i></b></td>
                <td colspan="4" style="text-align:center;">Rating</td>
            </tr>
			
			<tr>
                <td colspan="">1.	Prepares clinical notes and updates the primary physician when necessary and at least every other week.</td>
                <td><select name="row92" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>
			
			<tr>
                <td colspan="">2.	Communicates with the physician regarding the patient’s needs and reports and changes in the patient’s condition; obtains/receives physician’s orders as required. </td>
                <td>
					<select name="row93" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select>
				</td>
            </tr>
			
			<tr>
                <td colspan="">3.	Communicates with community health related persons to coordinate the care plan.</td>
                <td><select name="row94" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>
			
			<tr>
                <td><b><i>Additional Duties</i></b></td>
                <td colspan="4" style="text-align:center;">Rating</td>
            </tr>
			
			<tr>
                <td colspan="">1.	Participates in on-call duties as defined by the on-call policy.</td>
                <td><select name="row95" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>
			
			<tr>
                <td colspan="">2.	Ensures that arrangements for equipment and other necessary items and services are available.</td>
                <td>
					<select name="row96" ng-model="q.row91" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select>
				</td>
            </tr>
			
			<tr>
                <td colspan="">3.	Instructs, supervises and evaluates hospice aide care provided every fourteen days.</td>
                <td><select name="row96" ng-model="q.row91" class="form-control col-sm-6">
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
                <td colspan="">1.	Adheres to patient assignments as appropriate and reviews plan of care on an ongoing basis to maintain coordination of services.</td>
                <td><select name="row9" ng-model="q.row9" class="form-control col-sm-6">
	                     <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>

			<tr>
                <td colspan="">2. Maintains an acceptable work record.<input type="text" name="tardy" ng-model="q.tardy" value=""> Days Tardy <input type="text" name="absent" ng-model="q.absent" value=""> Days Absent</td>
                <td><select name="row11" ng-model="q.row11" class="form-control col-sm-6">
	                   <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>
					
			<tr>
                <td colspan="">3. Informs coordinator of availability weekly.</td>
                <td><select name="row12" ng-model="q.row12" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
					</select></td>
            </tr>
					
			<tr>
                <td colspan="">4. Reviews policy manual when patient care procedures and organization personnel procedures need clarification.</td>
                <td><select name="row13" ng-model="q.row13" class="form-control col-sm-6">
	                    <option value="">Select Choice...</option>
                        <option value="1-Unacceptable Performance">1-Unacceptable Performance</option>
	                    <option value="2-Inconsistent Performance">2-Inconsistent Performance</option>
						<option value="3-Satisfactory Performance">3-Satisfactory Performance</option>
						<option value="4-Superior Performance">4-Superior Performance</option>
				    </select></td>
            </tr>
			
			<tr>
                <td colspan="">5. Supervises LPNs and hospice aides/nursing assistants for care provided.</td>
                <td><select name="row10" ng-model="q.row10" class="form-control col-sm-6">
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