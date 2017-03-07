	<div class="container" style="width:90%; padding-left: 2em; padding-right: 2em; text-align:justify; font-size:10pt;">

		<div class="section-header row" style="text-align:center;">
			<h2>STATEMENT & ACKNOWLEDGEMENT</h2>
<!--		
			<div class="col-sm-3 dhs-seal">
				<img src="images/dhs.png" alt="DHS Seal"/>
			</div>

			<div class="col-sm-6" style="text-align:center;">
			<div><strong>Department of Homeland Security</strong></div>
				U.S. Citizenship and Immigration Services
			</div>

			<div class="col-sm-3">
				<strong><br> Form W-4</strong>
				<small>
				<div>OMB No. 1615-0047</div>
				<div>Expires 03/31/2016</div>
				</small>
			</div>
-->			
		</div>
<style>
	label{
		    font-weight: bold;
	}
</style>
	
	
    <hr class="heavy"/>
		<br />
	<form method="post" class="saform" action="#">
		<div class="row" style="text-align: justify; width: 90%; padding-left: 3em;">
			<div class="row">
				<div class="col-sm-8" style="">
					<label for="last-name">CONFLICT OF INTEREST DISCLOSURE STATEMENT</label>
				</div>
				<div class="col-sm-4">
					Initial<input name="sa_1" value="1" <?php if($sa_info->sa_1=="1"){ echo "checked"; } ?> type="checkbox" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					I have received a copy of the Conflict of Interest Disclosure Statement. I was given an opportunity to ask questions and I fully understand my responsibilities.
				</span>
			</div>
			<br />
			
			<div class="row">
				<div class="col-sm-8">
					<label for="last-name">ATTESTATION OF CORPORATE COMPLIANCE PLAN</label>
				</div>
				<div class="col-sm-4">
					Initial<input name="sa_2" value="1" <?php if($sa_info->sa_2=="1"){ echo "checked"; } ?> type="checkbox" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					As an employee / contractor of <?php echo $discipline_name?>, I do hereby attest that I have read the Policy and Procedure pertaining to Medicare/Medical Fraud and Abuse (Corporate Compliance Plan). I also had the opportunity to ask questions and I am aware that if I have any queries or concerns, I will consult with the Corporate Compliance Officer.
				</span>
			</div>
			<br />
			
			<div class="row">
				<div class="col-sm-8">
					<label for="last-name">CONFIDENTIALITY STATEMENT</label>
				</div>
				<div class="col-sm-4">
					Initial<input name="sa_3" value="1" <?php if($sa_info->sa_3=="1"){ echo "checked"; } ?> type="checkbox" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					I have received a copy of the Confidentiality Statement. I was given an opportunity to ask questions and I fully understand my responsibilities.
				</span>
			</div>
			<br />
			
			<div class="row">
				<div class="col-sm-8">
					<label for="last-name">SECURITY STATEMENT</label>
				</div>
				<div class="col-sm-4">
					Initial<input name="sa_4" value="1" <?php if($sa_info->sa_4=="1"){ echo "checked"; } ?> type="checkbox" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					I have received a copy of the Security Agreement. I was given an opportunity to ask questions and I fully understand my responsibilities.
				</span>
			</div>
			<br />
			
			<div class="row">
				<div class="col-sm-8">
					<label for="last-name">CHILD ABUSE REPORTING STATEMENT</label>
				</div>
				<div class="col-sm-4">
					Initial<input name="sa_5" value="1" <?php if($sa_info->sa_5=="1"){ echo "checked"; } ?> type="checkbox" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					I acknowledge the provisions of Section 11166 of the California Penal Code of which I have a copy and I will comply with its provisions.
				</span>
			</div>
			<br />
			
			<div class="row">
				<div class="col-sm-8">
					<label for="last-name">DEPENDENT ADULT ABUSE REPORTING STATEMENT</label>
				</div>
				<div class="col-sm-4">
					Initial<input name="sa_6" value="1" <?php if($sa_info->sa_6=="1"){ echo "checked"; } ?> type="checkbox" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					I acknowledge the provisions of Section 15630 of the California Welfare Code of which I have a copy and I will comply with its provisions.
				</span>
			</div>
			<br />
			
			<div class="row">
				<div class="col-sm-8">
					<label for="last-name">SEXUAL HARRASSMENT</label>
				</div>
				<div class="col-sm-4">
					Initial<input name="sa_7" value="1" <?php if($sa_info->sa_7=="1"){ echo "checked"; } ?> type="checkbox" style="display: inline;width: inherit;width: inherit;height: inherit;margin-top: 0.5em;">
				</div>
			</div>
			<div class="row">
				<span>
					I certify that I have read and understood the Law and Agency Policy on Sexual Harassment and I will comply with the same. I understand that sexual harassment is prohibited by law and is a ground for dismissal from the Agency.
				</span>
				<p></p>
				<br />
				<span>
					<p style="font-weight:bold;">I acknowledge understanding each preceding Statements and I am aware that I will be subject to probation or termination should I violate any of the provisions therein.</p>
				</span>
			</div>
			<p></p>
			<br />
			<br />
			<br />
		</div>
		
		<br /><br />
		<br />
		<br />
		
		<div class="row">
			<div class="col-sm-6">
				<label for="last-name">Name and Title of Employee/Contractor</label>
				<input name="sa_name" value="<?php echo $sa_info->sa_name?>" class="form-control" style="display: inline;"/>
				<br /><br />
				<div class="row">
				
					<div class="col-sm-2">
						<label for="last-name">Signature</label>
					</div>
					<div class="col-sm-5">
						<div class="fileinput-new thumbnail" style="">
							<img id="soa_esign" src="<?php echo $rn_info->signature ?>" >
						</div>
					</div>
					<div class="col-sm-2">
						<label for="last-name">Date</label>
					</div>
					<div class="col-sm-3"><input name="sa_date" value="<?php echo $sa_info->sa_date?>" type="date" class="form-control" style="display: inline;"/></div>
				</div>
			</div>
			
		</div>
		<br />
		<style>
			p{
				    margin-left: 2em;
			}
		</style>
		
		<hr class="heavy"/>
		
		<div class="row" style="text-align:center;"><b>CONFLICT OF INTEREST DISCLOSURE STATEMENT</b></div>
		<br />
		<div class="row">
			<span >
				<p style="margin-left: 1em;">I,<span><input name="sa_name1" value="<?php echo $sa_info->sa_name1?>" class="form-control" style="display: inline;width: inherit;"/></span>an employee of <?php echo $discipline_name?> do hereby state that I will:</p>
			</span>
			<span>
				<ol style="margin-left: 1em;">
					<li type="A"><p>
						Act in the course of my duties solely in the best interests of the organization without consideration to the interests of any other agency, organization, or association with which I am associated, and refrain from taking part in any transaction where I do not believe in good faith that I can act with undivided loyalty to the Agency.
					</p></li>
					<li type="A"><p>
						Disclose any material, financial, or other beneficial interest to any entity engaged in the delivery of goods or services to the organization or its members.
					</p></li>
					<li type="A"><p>
						Disclose any transactions with the organization that would result in any benefit to myself, my immediate family/caregivers, or any entity in which 
					</p></li>
					<li type="A"><p>
						I hold a significant financial ownership or other interests, and refrain from participation in any action on such matters, except upon approval of the Governing Body after full and frank disclose.
					</p></li>
					<li type="A"><p>
						Agree to devote my best efforts to the organization and not directly or indirectly be engaged in or connected with any other commercial pursuits whatsoever without written authorization of the organization.
					</p></li>
					<li type="A"><p>
						Engage in private practice of a service similar to that provided by the organization within the geographic area services by the organization, without the written permission of the Executive Director/Administrator.
					</p></li>
					<li type="A"><p>
						Will be subject to probation or termination should I violate the preceding statement.
					</p></li>
				</ol>
			</span>
		</div>
		<br />
		<hr class="heavy"/>
		
		<div class="row" style="text-align:center;"><b>CORPORATE COMPLIANCE PLAN</b></div>
		
		
		<span >
			<ol>
				<li type="I">
					<p>INTRODUCTION</p>
					<p>
						<?php echo $discipline_name?> adopted the Code of Conduct (the "Code"). It is the purpose of the Code to state clearly and succinctly the Company's commitment to integrity and to provide guidelines to help employees recognize and be able to respond properly to situations that may arise in the performance of their jobs. The Code also sets forth in general terms the responsibilities of supervisors and employees.
					</p>
					<p>
						<?php echo $discipline_name?> has adopted the Corporate Compliance Plan (the "Compliance Plan") in order to provide guidance for implementation of the Code means to prevent and detect violations. Further, there are now in place, and there will be issued other policies and procedures tailored to particular Company needs in order to provide additional guidance, instruction and direction for fulfillment of the Code and Compliance Plan. (the "Implementing Policies"). The Code, the Compliance Plan and the Implementing Policies are sometimes referred to as the "Code Core Documents".
					</p>
					<p>
						The Code Core Documents do not affect the "employment at will" status of employees or create any contractual obligation between the Company and any employee.
					</p>
					<p>
						Contractors, independent contractors, suppliers, agent and representatives are expected to comply with the Code Core Documents in their dealings with <?php echo $discipline_name?>
					</p>
				</li>
				<li type="I">
					<p>COMPLIANCE PLAN RESPONSIBILITIES</p>
					<span>
						<ol style="list-style-type: upper-alpha;">
							<li>
								<p>Corporate Compliance Officer</p>
								<p>
									As set forth in the Code, <?php echo $discipline_name?>, as appropriate, will appoint a Corporate Compliance Officer (CCO).
								</p>
								<p>
									The Compliance Officer's primary responsibilities will include:
								</p>
								<ol style="margin-left: 2em; list-style-type: decimal;">
									<li style="/*list-style-type: decimal;*/">
										Overseeing and monitoring the implementation of the compliance program;
									</li>
									<li>
										Reporting on a regular basis to the home health agency's governing body, CEO, and compliance committee (if applicable) on the progress of implementation, and assisting these components in establishing methods to improve the home health agency's efficiency and quality of services and to reduce the home health agency's vulnerability to fraud, abuse and waste;
									</li>
									<li>
										Periodically revising the program in light of changes in the organization's needs, and in the law and policies and procedures of government and private payor health plans;
									</li>
									<li>
										Reviewing employee's certifications that they have received, read and understood the standards of conduct;
									</li>
									<li>
										Developing, coordinating and participating in a multifaceted educational and training program that focuses on the elements of the compliance program, and seeks to ensure that<br />
										all relevant employees and management are knowledgeable of and comply with, pertinent federal and state standards;
									</li>
									<li>
										Ensuring that independent contractors and agents who furnish nursing or other health care services to the clients of the home health agency, or billing services to the home health agency, are aware of the requirements of the home health agency's compliance program with respect to coverage, billing and marketing, among other things;
									</li>
									<li>
										Coordinating personnel issues with the home health agency's Personnel office to ensure that the *National Practitioner Data Bank and * Cumulative Sanction Report have been checked with respect to all employees, medical staff and independent contractors (as appropriate); employees, medical staff and independent contractors (as appropriate);
									</li>
									<li>
										Assisting the home health agency's financial management in coordinating internal compliance review and monitoring activities;
									</li>
									<li>
										Independently investigating and acting on matters related to compliance, including the flexibility to design and coordinate internal investigations (e.g., responding to reports of problems or suspected, violations) and any resulting corrective action (e.g., making necessary improvements to home health agency policies and practices, taking appropriate disciplinary action, etc) with all home health agency departments, subcontracted providers, and health care professionals under the home health agency's control and any other agents if appropriate;
									</li>
									<li>
										Developing policies and programs that encourage managers and employees to report suspected fraud and other improprieties without fear of retaliation; and
									</li>
									<li>
										Continuing the momentum of the compliance program and the accomplishment of its objectives long after the initial years of implementation
									</li>
								</ol>
								<br />
								<ul type="disc">
									<li>
										The National Practitioner Data Bank is a database that contains information about medical malpractice payments, sanctions by boards of medical examiners or state licensing boards, adverse clinical privilege actions, and adverse professional society membership actions. Health Care entities can have access to this database to seek information about their own medical or clinical staff, as well as prospective employees.
									</li>
									<li>
										The Cumulative Sanction Report is a 016-produced report available on the Internet at http://www.dhhs.go/progorg/goi. It is updated on a regular basis to reflect the status of health care providers who have been excluded from participation in the Medicare and Medical program. In addition, the General Services Administration maintains a monthly listing of debarred contractors on the Internet at http://www. amet.gov/epls.
									</li>
								</ul>
							</li>
							<br/>
							<li>
								<p>Corporate Compliance Committee (CCC)</p>
								<p>
									<?php echo $discipline_name?> will establish a Corporate Compliance Committee (CCC) to advise the compliance officer and assist the implementation of the compliance program. Members of the committee including the compliance officer shall be selected from individuals with varying responsibilities in the organization. These Committee members and compliance officer are expected to demonstrate high integrity, good judgments, assertiveness, and an approachable demeanor, while eliciting the respect and trust of employees and having significant professional experience working with billing, medical records, documentation and auditing principles.
								</p>
								<p>
									The committee's function should include:
								</p>
								<span>
									<ol style="margin-left: 2em;">
										<li>
											Analyzing the organization's regulatory environment, the legal requirements with which it must comply, and specific risks areas;
										</li>
										<li>
											Assessing existing policies and procedures that address these risk areas for possible incorporation into the compliance program;
										</li>
										<li>
											Working with appropriate managers or department heads to develop standards of conduct and policies and procedures to promote compliance with legal and ethical requirements;
										</li>
										<li>
											Recommending and monitoring, in conjunction with the relevant departments, the development of internal systems and controls to carry out the organization's standards, policies and procedures as part of its daily operations;
										</li>
										<li>
											Determining the appropriate strategy/approach to promote compliance with the program and detection of any potential violations, such as through hotlines and other fraud reporting mechanisms;
										</li>
										<li>
											Developing a system to solicit, evaluate and respond to complaints and problems; and
										</li>
										<li>
											Monitoring internal and external audits and investigations for the purpose of identifying troublesome issues and deficient areas experienced by the home health agency and implementing corrective and preventive action.
										</li>
									</ol>
								</span>
								<br />
								<p>
									The committee may also address other functions as the compliance concept becomes part of the overall home health agency operating structure and daily routine.
								</p>
							</li>
							<br />
							<li>
								<p>Dissemination of Information</p>
								<p>
									The CCO is responsible for establishing and implementing procedures to ensure that employees have received, read, understand and agree to comply with the Code and the Compliance Plan Implementing policies and are in place communicated to employees. The following are procedures to accomplish the foregoing objectives:
								</p>
								<span >
									<ol style="margin-left: 2em;">
										<li>
											Within 90 days following the adoption of the Code and Compliance Plan and after participating in an orientation program developed by the CCO all present employees will be given a copy of the Code and the Compliance Plan and will be expected to read them and sign an acknowledge form stating they have read such documents, understood them as they relate to their job responsibilities and agree to abide by them.
										</li>
										<li>
											Every newly hired employee will be given a copy of the Code and the Compliance Plan and within 14 days after receiving such documents and after participating in an orientation program developed by the CCO, the new employee will be  expected to read them and sign an acknowledgement form stating that they have read, understand and agree to abide by them.
										</li>
										<li>
											Annually, at the time of their annual reviews, all employees will be expected to sign an acknowledgement form reconfirming their understanding and commitment to the Code and the Compliance Plan.
										</li>
										<li>
											Appropriate acknowledgement forms will be prepared by the CCO in coordination with the CCC. The original of the acknowledgement form will be placed in each employee's personnel file.
										</li>
									</ol>
								</span>
							</li>
							<br />
							<li>
								<p>Conducting Effective Training and Education</p>
								<p>
									The elements of an effective compliance program will include the proper education and training of corporate officers, managers, employees, nurses and other health care professionals, and the continual retaining of current personnel at all levels.
								</p>
								<span>
									<ol style="margin-left: 2em;">
										<li>
											As part of the compliance program, <?php echo $discipline_name?> will require at personnel to attend specific training on a periodic basis, including appropriate training in federal and state statutes, regulations, guidelines and the policies of private payors, and training in corporate ethics, which emphasizes the organizations commitment to compliance with these legal requirements and policies.
										</li>
										<li>
											These training programs will include sessions highlighting the organizations compliance program, summarizing fraud and abuse laws, federal health care program requirements, claim development and submission processes, patient rights and marketing practices that reflect current legal and program standards.
										</li>
										<li>
											The CCO is responsible for developing and implementing procedures to ensure that education and training programs and appropriate supplemental materials regarding the Code Core Documents are developed and made available to all employees. This responsibility may be delegated by the available to all employees. This responsibility may be delegated by the CCO to others with necessary expertise. In coordination with the CCC, the CCO win develop supplemental education and training programs and materials tailored, as appropriate to their organization.
										</li>
										<li>
											Education and Training will be conducted for all personnel and will be under the oversight of the CCC. The frequency of training will be determined by the CCO, in coordination with the CCC.
										</li>
										<li>
											The Personnel Director in coordination will ensure that all education and training programs conducted are documented in their personnel files to show programs attended by each employee.
										</li>
										<li>
											Training instructors may come from the outside but must be qualified to present the subject matter involved and experienced enough in the issues presented, to adequately field questions and coordinate discussions among those being trained. New employees will be trained during their orientation program and will take into account the skills, experience and knowledge of the individual trainees. The CCO will document and formal training undertaken as part of the compliance program.
										</li>
										<li>
											Targeted training will be provided to corporate officers, managers/supervisors and other employees whose actions affect the accuracy of the claims submitted to the government, such as employees involved in the billing. Cost reporting and marketing processes. In addition, primary training for appropriate corporate officers, managers and other employees will include such topics as:
										
											<span >
												<ol style="margin-left: 2em;">
													<li>
														Government and private payor reimbursement principles;
													</li>
													<li>
														General provisions on paying or receiving remuneration to induce referrals;
													</li>
													<li>
														Improper alterations to clinical records;
													</li>
													<li>
														providing home health services with proper authorization;
													</li>
													<li>
														Proper documentation of services rendered, including the correct application of official ICD and CPT coding rules and guidelines;
													</li>
													<li>
														Patient rights and patient education;
													</li>
													<li>
														Compliance with Medicare Condition of participation; and
													</li>
													<li>
														Duty to report misconduct.
													</li>
												</ol>
											</span>
										</li>
										<li>
											Following the recommendation of the Office of Inspector General (OIG), <?php echo $discipline_name?> will make the attendance and participation in training programs, a coordination of continued employment and that failure to comply with training requirements, will result in disciplinary action, including possible termination when failure is serious.
										</li>
										<li>
											A minimum of two (2) hours will be required for basic training and an additional hour of training will be given to specialty fields such as billing and marketing.
										</li>
										<li>
											The annual performance evaluation and merit raise (when indicated) for each employee will include an assessment of his or her compliance with the Code Core documents.
										</li>
										<li>
											<?php echo $discipline_name?> will retain adequate records of training of employees, including attendance logs and materials distributed at training sessions in a three-way binder.
										</li>
									</ol>
								</span>
							</li>
							<br />
							<li>
								<p>Dealing with Excluded or Convicted Persons or Entities</p>
								<p>
									The Administrator is responsible for developing, in coordination with the CCO and the CCC procedures to ensure that the organization does not knowingly employ, engage, with or without pay, any individual or entity who is listed by a federal agency as disbarred, suspended or otherwise ineligible for federal programs in any position where such employment or engagement is prohibited by law or regulations.
								</p>
							</li>
							<br />
							<li>
								<p>Developing Effective Lines of Communication</p>
								<span>
									<ol style="margin-left: 2em;">
										<li>
											Access to the Compliance Officer
											<p>
												An open communication between the CCO and the agency employees is equally important to the successful implementation of a compliance program and the reduction of any potential for fraud, abuse and waste.
											</p>
											<p>
												Written confidentiality and non- retaliation policies will be developed by the CCO in coordination with the CCC and to be distributed to all employees, to encourage communication and the reporting of reporting of incidents of potential fraud. Independent reporting paths will be developed for an employee to report fraud, waste or abuse so that employee can feel comfortable outside the normal chain of command and supervisors or other personnel cannot divert such reports. In the event of any confusion in regard to policies, practices or procedures, the employees may ask clarification for the CCO or the CCC.
											</p>
											<p>
												The CCO may want to solicit employee input in developing these communications and reporting systems.
											</p>
										</li>
										<br />
										<li>
											Hotlines and Other Forms of Communication
											<p>
												<?php echo $discipline_name?> will establish a hotline number when  financially feasible and other forms of information exchange, such as e-mails, written memoranda, newsletters, suggestion boxes, to maintain these open lines of communication.
											</p>
											<p>
												When the hotline is established, the telephone number will be made readily available to all employees and independent contractors. Employees will be permitted to not report matters on an anonymous basis.
											</p>
											<p>
												<?php echo $discipline_name?> will post in a prominent, available area the HHS-OIG Hotline telephone number, 1-800-447-8477 (1-800-HHS-TIPS), in addition to any company hotlines number that may be posted.
											</p>
											<p>
												Matters reported through the hotlines or other communication sources that suggest substantial violations of compliance policies, federal health care program requirements, regulations or status will be documented and investigated promptly to determine their veracity.
											</p>
											<p>A log will be maintained by the CCO that record such calls, including the nature of any investigation and its results. The form could include:</p>
											<span>
												<ol style="margin-left: 2em;">
													<li>
														Date the potential problem was reported;
													</li>
													<li>
														The internal investigative methods utilized;
													</li>
													<li>
														The results of the investigation;
													</li>
													<li>
														The corrective action implemented;
													</li>
													<li>
														The disciplinary measures imposed; and
													</li>
													<li>
														Any identified overpayments and monies returned.
													</li>
												</ol>
											</span>
											<p>Such information will be included in reports to the governing body, the CEO and the CCC.</p>
											<p>
												In addition to methods of communication used by current employees, an effective exit interview program will be designed to solicit information from departing employees, regarding potential misconduct and suspected violations of policies and procedures.
											</p>
											<p>
												Assertions of fraud and abuse by employees who may have participated in illegal conduct or committed other malfeasance, raise numerous complex legal and management issues, that should be examined on a case by case basis. The CCO and Administrator will work closely with legal counsel, who can provide guidance regarding such issues.
											</p>
										</li>
									</ol>
								</span>
							</li>
							<br />
							<li>
								Enforcing Standards Through Well-Publicized Disciplinary Guidelines
								<span>
									<ol>
										<li>
											Discipline Policy and Actions
											<p>
												A written policy statement will be developed by the CCO, in coordination with the CCC, and approved by the governing body, setting forth the degrees of disciplinary actions that may be imposed upon corporate officers, managers, employees and other and other health care professionals, for falling to comply with the agency's standards and policies and applicable statues and regulations.
											</p>
											<p>
												Intentional or reckless noncompliance will subject transgressors to significant sanctions. Such sanctions could range from oral warnings to suspension, termination, or financial penalties, as appropriate.	
											</p>
											<p>
												These written standards of conduct will elaborate on the procedures, for handling disciplinary problems and those responsible for taking appropriate action.
											</p>
											<p>
												Personnel will be advised by the agency, the disciplinary action will be taken on a fair and equitable basis.
											</p>
											<p>
												Managers will be made aware, that they have a responsibility to discipline employees in an appropriate and consistent manner.
											</p>
											<p>
												<?php echo $discipline_name?> will publish and disseminate the range of disciplinary standards, for improper conduct and to educate officers and employees regarding these standards.
											</p>
											<p>
												All levels of employees will be potentially subject to the same types of disciplinary action, for the commission of similar offenses and the consequences of noncompliance will be consistently enforced, in order for the disciplinary policy to have the required deterrent effect.
											</p>
										</li>
										<li>
											New Employee Policy
											<p>
												<?php echo $discipline_name?> will conduct a reasonable and prudent background check, including a reference check for all new employees who have discretionary authority to make decisions that may involve compliance with the law or compliance oversight, as part of every such employment application. The applicant will be required to disclose any criminal conviction, as defined by 42 U.S.C. & 1320a-7 (i), or exclusion action.
											</p>
											<p>
												<?php echo $discipline_name?> will not employ individuals, who have been recently convicted of a criminal offense related to health care or who are listed debarred, excluded, or otherwise ineligible for participation in federal health care programs.
											</p>
											<p>
												Current employees or independent contractors convicted, debarred or excluded from participation in the federal health care program, will be terminated.
											</p>
										</li>
									</ol>
								</span>
							</li>
							<br />
							<li>
								Auditing & Monitoring
								<p>
									<?php echo $discipline_name?> will incorporate thorough monitoring of its implementation of its compliance program and regular reporting to the Administrator and the governing body, in order to be effective program. Compliance reports created by this ongoing monitoring, including reports of non-compliance will be maintained by the CCO and shared with the senior management and the CCC.
								</p>
								<p>
									The Audits will be done by the CCO with the assistance of the Quality Improvement Coordinator or Supervisor, at least annually as part of the annual as part of the annual program evaluation process. Areas to be addressed will include but not limited to:
								</p>
								<span>
									<ol>
										<li>
											The agency's compliance with laws regarding kickback arrangement s;
										</li>
										<li>
											The Physician self- referral prohibitions;
										</li>
										<li>
											Claim development and submission:
										</li>
										<li>
											Reimbursement;
										</li>
										<li>
											Cost reporting; and
										</li>
										<li>
											Marketing;
										</li>
									</ol>
								</span>
								<p>
									The audits will also inquire into the agency's compliance with the Medicare Condition of Participation and the specific rules and regulations that have been the focus of particular attention on the part of fiscal intermediaries and the information from OIG Special Fraud Alerts and other law enforcement initiatives.
								</p>
								<p>
									Monitoring techniques may include sampling protocols that permit the CCO to identify and review variations from an established baseline. Appropriate, prompt, corrective action or no action shall be taken for any deviation that occurred, depending on the cause of the deviation.
								</p>
								<p>
									In addition, monitoring techniques will also include a review of the reserves the agency has established for payments that it may owe Medicare or other federal health care programs and a review of whether the programs compliance elements have been satisfied.
								</p>
								<p>
									As part of the review process, the CCO or reviewers should consider techniques such as:
								</p>
								<span>
									<ol>
										<li>
											Visits and interviews of patients at their homes;
										</li>
										<li>
											
										</li>
										<li>
											Analysis of  utilization patterns;
										</li>
										<li>
											Testing clinical and billing staff on their knowledge of reimbursement coverage criteria and official coding guidelines;
										</li>
										<li>
											Assessment of existing relationships with physicians, hospitals and other potential referral sources;
										</li>
										<li>
											Unannounced mock surveys, audits and investigations;
										</li>
										<li>
											Re-evaluations of deficiencies cited in past surveys for Medicare Condition of Participation;
										</li>
										<li>
											Examination of agency complaint logs;
										</li>
										<li>
											Checking personnel records to determine whether any individuals who have been reprimanded for compliance issues in the past, are among those currently engaged in improper conduct;
										</li>
										<li>
											Interviews with personnel involved in management, operations, claim development and submission, patient care, and other related activities;
										</li>
										<li>
											Questionnaires to solicit impressions of employees and staff;
										</li>
										<li>
											Interviews with physicians who order services provided by the home health agency;
										</li>
										<li>
											Reviews of clinical documentation (i.e., plan of care, nursing notes, etc.), financial records and Medicare cost reports;
										</li>
										<li>
											Validation of qualifications of physicians who order services provided by the home health agency; and
										</li>
										<li>
											Evaluation of written material and documentation outlining the home health agency's policies and procedures.
										</li>
									</ol>
								</span>
								<br />
								<p>
									The assessments can be undertaken by outside consultants or inside staff with authoritative knowledge of health care compliance requirements. The reviewers should:
								</p>
								<span>
									<ol>
										<li>
											Have the qualifications and experience necessary to adequately identify potential issues with the subject matter that is reviewed ;
										</li>
										<li>
											Be objective and independent of line management to the extent reasonably possible ;
										</li>
										<li>
											Have access to existing audit and health care resources, relevant  personnel and all relevant areas of operation;
										</li>
										<li>
											Present written evaluative report the CEO, governing body and committee on a regular basis, and
										</li>
										<li>
											Specifically identify areas where corrective actions are needed.
										</li>
									</ol>
								</span>
							</li>
							<br />
							<li>
								Responding to Detected Offenses and Developing Corrective Action Initiatives
								<p>
									<?php echo $discipline_name?> will treat any alleged violation of the Code Core Documents seriously, will review or investigate the allegation promptly and will take all appropriate corrective action. Where appropriate, it will also make a report to the federal or state government and make public disclosure.
								</p>
								<span>
									<ol>
										<li>
											Violation and Investigation
											<p>
												<?php echo $discipline_name?> wants to know promptly any potential or suspected violation of the Code Documents.
											</p>
											<p>
												The CCO and other management officials have the responsibility to investigates promptly the conduct in question to determine whether a material violation of applicable law or the requirements of the compliance program has occurred, and if so, take decisive steps to correct the problem. As appropriate, such steps may include an immediate referral to criminal and/or civil law enforcement authorities, a corrective action plan, a report to the government, and the return of any overpayments, if applicable.
											</p>
											<p>
												Where potential fraud or False Claims Act liability is not involved, the agency will return overpayments to the government through normal repayment channels.
											</p>
											<p>
												Depending upon the nature of the alleged violations, an internal investigation will probably include interviews and a review of relevant documents. Records of the investigation should contain documentation of the alleged violations, a description of the investigative process, copies of interview notes and key documents, a log of the witnesses interviewed and the documents reviewed, the results of the investigation e.g., any disciplinary action taken and the corrective action implemented.
											</p>
											<p>
												During the investigation of an alleged violation, the employee under investigation will be removed from his or her current work activity if the CCO believes that the integrity of the investigation may be at stake because of the presence of the employee. In addition, the CCO will take appropriate steps to secure or prevent the destruction of documents or other evidence relevant to the investigation.
											</p>
											<p>
												If it is determined by the agency that disciplinary action is warranted it will be imposed promptly and in accordance with the agency's written standards of disciplinary action.
											</p>
										</li>
										<br />
										<li>
											Reporting
											<p>
												<?php echo $discipline_name?> will promptly report the existence of misconduct to the appropriate federal and state authorities within a reasonable period, but not more than sixty (60) days after determining that there is credible evidence of a violation.
											</p>
											<p>
												When reporting misconduct to the government, the agency will provide all evidence relevant to the alleged violation of applicable federal and state law(s) and potential cost impact.
											</p>
											<p>
												The CCO under advice of counsel, and with guidance from the government authorities, could be requested to continue to investigate the reported violation. Once the investigation is completed, the CCO will notify the appropriate governmental authorities of the outcome of the investigation, including a description of the impact of the alleged violation on the operation of the applicable health programs or their beneficiaries. If the investigation ultimately reveals that criminal, civil or administrative violations have occurred, the appropriate federal and state authorities will be notified immediately.
											</p>
										</li>
									</ol>
								</span>
							</li>
						</ol>
					</span>
				</li>
			</ol>
		</span>
		<br />
		<div class="row">
			<div class="row" style="text-align:center;">
				<span ><b>CONFIDENTIALITY STATEMENT</b></span>
			</div>
			<p>
				I understand and agree that it is my responsibility to assure that confidential information is not given to anyone who is not involved directly with the patient’s care and / or who does not have a legal right and a legitimate need for the information.  Confidential patient (living or dead) information shall include:
			</p>
			<span>
				<ol>
					<li>
						Documentation in the medical record
					</li>
					<li>
						Data contained in any computer file
					</li>
					<li>
						Proceedings or reports heard or observed concerning any patient
					</li>
				</ol>
			</span>
			<p>
				I understand and agree that information regarding fellow employees related to illness or personal lives will be treated confidentially.
			</p>
			<p>
				I further understand and agree that the unauthorized use, possession or dissemination of confidential information shall be grounds for professional discipline which includes dismissal.
			</p>
		</div>
		<br />
		<!--
		<div class="row">
			<div class="row" style="text-align:center;">
				<span style="text-align:center;"><b>SECURITY AGREEMENTY</b></span>
			</div>
			
			<p>
				As an employee of <?php echo $discipline_name?> Lifelink (hereinafter “the Provider”), and as a condition of my employment, I agree to the following:
			</p>
			<span>
				<ol>
					<li>
						I understand that I am responsible for complying with the HIPAA policies, which were provided and reviewed by me (TRAINING).  I understand that I am responsible for complying with the policies and procedures and that I am required to seek guidance from the Privacy Officer if I have questions or concerns regarding patient confidentiality
					</li>
					<li>
						I will treat all information received in the course of my employment with the Provider, which relates to the patients of the provider, as confidential and privileged information.
					</li>
					<li>
						I will not access patient information unless I have a need to know this information in order to perform my job.
					</li>
					<li>
						I will not disclose information regarding the Provider’s patients to any person or entity, other than as necessary to perform my job, and as permitted under the Provider’s HIPAA Policies.
					</li>
					<li>
						I will not log on to any of the Provider’s computer systems that currently exist or may exist in the future using a password other than my own.  I will not disable the password protected screensaver.
					</li>
					<li>
						I will abide by the Provider’s policy regarding computerized notes.  When making computerized notes, I will log on to my personal computer with a password.  I will save the computerized notes only in diskettes and not on my hard drive.  I will set up a password protected screensaver that activates in ten (10) minutes when the computer is idle. I will exercise extraordinary diligence to safeguard the diskettes containing the computerized notes until such time that I submit the same every Monday to the Provider
					</li>
					<li>
						I will safeguard my computer password and will not post it in a public place, such as the computer monitor or a place where it will be easily lost, such as on my nametag.
					</li>
					<li>
						I will not allow anyone, including other employees, to use my password to log on to the computer.
					</li>
					<li>
						I will log off of the computer as soon as I have finished using it.
					</li>
					<li>
						I will not use e-mail to transmit patient information unless I am instructed to do so by the Privacy Officer.
					</li>
					<li>
						I will not take patient information from the premises of the Provider in paper or electronic form without first receiving permission from the Privacy Officer.
					</li>
					<li>
						I will return or destroy the hardcopy of documents (i.e. Plan of Care, Referral Intake/Form, Medication Profile) containing protected information every time the patient is discharged or whenever such documents had been modified.
					</li>
					<li>
						Upon cessation of my employment with the provider, I agree to continue to maintain the confidentiality of any information I learned while an employee and agree to turn over any keys, access cards, or any other device that would provide access to the provider or its information.
					</li>
				</ol>
			</span>
			<p>
				I understand that violation of this agreement could result in disciplinary actions.
			</p>
		</div>
		-->
		
		<br />
		<div class="row">
			<div class="row" style="text-align:center;"><b>SECURITY AGREEMENTY</b></div>
			<p>
				As an employee of <?php echo $discipline_name?> Lifelink (hereinafter “the Provider”), and as a condition of my employment, I agree to the following:
			</p>
			<span>
				<ol>
					<li>
						I understand that I am responsible for complying with the HIPAA policies, which were provided and reviewed by me (TRAINING).  I understand that I am responsible for complying with the policies and procedures and that I am required to seek guidance from the Privacy Officer if I have questions or concerns regarding patient confidentiality
					</li>
					<li>
						I will treat all information received in the course of my employment with the Provider, which relates to the patients of the provider, as confidential and privileged information.
					</li>
					<li>
						I will not access patient information unless I have a need to know this information in order to perform my job.
					</li>
					<li>
						I will not disclose information regarding the Provider’s patients to any person or entity, other than as necessary to perform my job, and as permitted under the Provider’s HIPAA Policies.
					</li>
					<li>
						I will not log on to any of the Provider’s computer systems that currently exist or may exist in the future using a password other than my own.  I will not disable the password protected screensaver.
					</li>
					<li>
						I will abide by the Provider’s policy regarding computerized notes.  When making computerized notes, I will log on to my personal computer with a password.  I will save the computerized notes only in diskettes and not on my hard drive.  I will set up a password protected screensaver that activates in ten (10) minutes when the computer is idle. I will exercise extraordinary diligence to safeguard the diskettes containing the computerized notes until such time that I submit the same every Monday to the Provider
					</li>
					<li>
						I will safeguard my computer password and will not post it in a public place, such as the computer monitor or a place where it will be easily lost, such as on my nametag.
					</li>
					<li>
						I will not allow anyone, including other employees, to use my password to log on to the computer.
					</li>
					<li>
						I will log off of the computer as soon as I have finished using it.
					</li>
					<li>
						I will not use e-mail to transmit patient information unless I am instructed to do so by the Privacy Officer.
					</li>
					<li>
						I will not take patient information from the premises of the Provider in paper or electronic form without first receiving permission from the Privacy Officer.
					</li>
					<li>
						I will return or destroy the hardcopy of documents (i.e. Plan of Care, Referral Intake/Form, Medication Profile) containing protected information every time the patient is discharged or whenever such documents had been modified.
					</li>
					<li>
						Upon cessation of my employment with the provider, I agree to continue to maintain the confidentiality of any information I learned while an employee and agree to turn over any keys, access cards, or any other device that would provide access to the provider or its information.
					</li>
				</ol>
			</span>
			<p>
				I understand that violation of this agreement could result in disciplinary actions.
			</p>
		</div>
		<br />
		
		<br />
		<div class="row">
			<div class="row" style="text-align:center;"><b>CHILD ABUSE REPORTING STATEMENT</b></div>
			<page>
				<p>
					Section 11133 of the Penal Code requires any child care custodian medical practitioner or non-medical practitioner who has knowledge of or observes a child in his or her professional capacity or within the scope of his or her employment whom he or she knows or reasonable suspects has been a victim of child abuse to report the known or suspected instance of child abuse to child protective agency immediately or as soon as practically possible by telephone and to prepare and to send a written report thereof within 36 hours of receiving the information concerning the incident.
				</p>
				<p>
					“Child Care Custodian” includes teachers, administrative officers, supervisors of child welfare and attendance, or certified pupil personnel employees of any public or private school; administrators of public or private day camp; licenses, administrators and employees of community care facilities or child care facilities licensed to care children; head-start teachers; licensing workers or licensing evaluators; public assistance workers; employees of a child care institution including, but not limited to, foster parents, group home personnel and personnel of residential care facilities; and social workers or probation officers.
				</p>
				<p>
					“Medical Practitioner” includes physicians and surgeons, psychiatrist, psychologist, dentists, residents, interns, podiatrist, chiropractors, licensed nurse, dental hygienist, or any other person licensed under Division 2 (commencing the Section 500) of the Business and Professions Code or emergency technicians I or II, paramedics or other person certified pursuant to division 2, 5 (commencing with Section 1797) of the Health and Safety Code, or psychological assistants registered pursuant to Section 2913 of the Business and Professional Code.
				</p>
				<p>
					“Non-Medical Practitioner” includes state or county public employees who treat minors for venereal disease or any other condition; coroners; paramedics; marriage/family or child counselors and religious practitioners who diagnose, examine, or treat children.
				</p>
			</page>
		</div>
		<br />
		<div class="row">
			<span style="text-align:center;">
				<b>DEPENDENT ADULT ABUSE REPORTING STATEMENT</b>
				<p>CONDITIONS UNDER WHICH REPORTING OF PHYSICAL ABUSE IS REQUIRED:</p>
			</span>
			<page>
				<p>
					Welfare and Institutions Code Section 15630 (a) (1):  Any elder of dependent adult care custodian, health practitioner, or employee of a county adult protective, or employee of a county adult protective services agency or a local law enforcement agency who, in his or her professional capacity or within the scope of his or her employment, either has observed an incident that reasonably appears to be physical abuse, has observed a physical injury where nature of the injury, its location on the body, or the repetition of the injury clearly indicates that physical abuse has occurred or is told by an elder or dependent adult that he or she has experienced behavior constituting physical abuse, shall report the known or suspected instance of physical abuse either to the long-term care ombudsman coordinator or to a local law enforcement agency when the physical abuse is alleged to have occurred in a long-term care facility, or to either the count adult protective services agency or to a local law enforcement agency when the physical abuse is alleged to have occurred anywhere else, immediately or as soon as possible by telephone, and shall prepare and send a written report thereof within two working days.
				</p>
				<p>
					 “Care Custodian” means an administrator or an employee of the following public or private facilities:
				</p>
			</page>
			<span>
				<ol>
					<li>
						Health Facility
					</li>
					<li>
						Clinic
					</li>
					<li>
						Home Health Agency
					</li>
					<li>
						Educational Institution
					</li>
					<li>
						Shelter Workshop
					</li>
					<li>
						Camp
					</li>
					<li>
						Respite Care Facilities
					</li>
					<li>
						Residential Care Institution, includes foster homes and group homes
					</li>
					<li>
						Community Care Facility
					</li>
					<li>
						Adult Day Care Facility, including Adult Day Health Care Services
					</li>
					<li>
						Regional center for persons withdevelopmental disabilities
					</li>
					<li>
						Licensing Worker or Evaluator
					</li>
					<li>
						Public Assistance Worker
					</li>
					<li>
						Adult Protective Services Agency
					</li>
					<li>
						Patient’s Right Advocate
					</li>
					<li>
						Nursing Home Ombudsman
					</li>
					<li>
						Legal Guardian or Conservator
					</li>
					<li>
						Skilled Nursing Facility
					</li>
					<li>
						Local Law Enforcement Agency
					</li>
					<li>
						Any other person who provides goods or services necessary to avoidphysical harm and who performs such duties.
					</li>
				</ol>
			</span>
		</div>
		<br />
		<div class="row">
			<div class="row" style="text-align:center;">
				<p>SEXUAL HARRASSMENT</p>
			</div>
			<p>
				<?php echo $discipline_name?> is committed to a policy of prohibiting any staff from engaging in any verbal or physical sexual harassment of other staff, job applicants, or patients.  Any personnel violating this policy may be subject to immediate termination.  If staff feel they have been sexually harassed, they must notify the Executive Director/Administrator immediately and in writing.
			</p>
		</div>
		<br />
		<br />
    </form>
	<button id="btn_mhr_save" onclick="callfunc()" type="button" class="btn btn-primary btn-block" style="width: 20%; float: right;">Next</button>
	<br />
	<br />
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
	$('#sa_form').val(JSON.stringify($('form.saform').serializeObject()));
	$("#myModali9").hide();
	return false;
}
</script>