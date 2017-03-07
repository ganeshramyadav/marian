<div>
	<div class="container" style="width:100%; padding-left: 2em; padding-right: 2em;">

		<div class="section-header row">
			<div class="col-sm-3 dhs-seal">
			<!--
			<img src="images/dhs.png" alt="DHS Seal"/>
			-->
			</div>

			<div class="col-sm-6" style="text-align:center;">
			<h1><?php echo $discipline_name?></h1>
			<h2><u>BACKGROUND CHECK DISCLOSURE AND AUTHORIZATION FORM</u></h2>

			<!--
			<div><strong>Department of Homeland Security</strong></div>
			U.S. Citizenship and Immigration Services
			-->
			</div>

			<div class="col-sm-3">
			<!--
			<strong><br> Form W-4</strong>
			
			<small>
			<div>OMB No. 1615-0047</div>
			<div>Expires 03/31/2016</div>
			</small>
			-->
			</div>
		</div>

	
	
    <hr class="heavy"/>
		<br />
	<form method="post" class="bcform" action="">

			<div class="row" style="text-align: justify;">
				<div >
					<span>
						<p>
							In the interest of maintaining the safety and security of our customers, employees and property, <b><?php echo $discipline_name?></b>
							will order a “consumer report” (a background report) on you in connection with your employment application, and if you are hired, or if you
							already work for the Company, may order additional background reports on you for employment purposes.
						</p><p>
							The background check company, ADP Screening and Selection Services, will prepare the background report for <b><?php echo $discipline_name?></b>
							ADP Screening and Selection Services is located at 301 Remington Street, Fort Collins, CO, 80524, and can be
							reached by phone at 800-367-5933 or at their Internet Web site address <a href="www.adpselect.com">www.adpselect.com.</a>
						</p><p>
							The background report may contain information concerning your character, general reputation, personal characteristics, mode of living,
							and credit standing. The types of information that may be ordered include but are not limited to: Social Security number verification;
							criminal, public, educational and, as appropriate, driving records checks; verification of prior employment; reference, licensing and
							certification checks; credit reports; and drug testing results. The information may be obtained from private and public record sources,
							including personal interviews with your associates, friends, and neighbors. (An “investigative consumer report” is a background report
							that includes information from such personal interviews, except in California where that term means any background report.) The nature
							and scope of the most common form of investigative consumer report is an investigation into your education and/or employment history
							conducted by ADP Screening and Selection Services or another outside organization.
						</p><p>
							You may request more information about the nature and scope of an investigative consumer report, if any, by calling <b><?php echo $discipline_name?> at 818-453-3371</b>. A summary of your rights under the Fair Credit Reporting Act is also being provided to you with
							this form.
						</p>
					</span>
					<br />
					<span>
						<p>Please note the following:</p>
					</span>
					<div class="" style="border: 1px solid black; ">
						<span>
							<p style="margin-left: 1em; margin-right: 1em;">
								<b>CALIFORNIA:</b> You may view the file that ADP Screening and Selection Services has for you, and order a copy of the file, upon submitting proper identification and paying copying costs, by coming to their offices, during normal business hours and on reasonable notice, or by mail. You may also ask for a file-summary by telephone. ADP Screening and Selection Services can answer questions about information in your file, including any coded information. If you come in person, another person can come with you, so long as that person can show proper identification.
							</p>
						</span>
					</div>
					<br />
					<span>
						<p>
							After carefully reading this Background Check Disclosure and Authorization form, I authorize <b><?php echo $discipline_name?></b> to order my background report, including investigative consumer reports. I understand that <b><?php echo $discipline_name?></b> may rely on this authorization to order additional background reports, including investigative consumer reports, during my employment without asking me for my authorization again as allowed by law.
						</p><p>
							I also authorize the following agencies and entities to disclose to ADP Screening and Selection Services and its agents all information about or concerning me, including but not limited to: my past or present employers; learning institutions, including colleges and universities; law enforcement and all other federal, state and local agencies; federal, state and local courts; the military; credit bureaus; testing facilities; motor vehicle records agencies; all other private and public sector repositories of information; and any other person, organization, or agency with any information about or concerning me. The information that can be disclosed to ADP Screening and Selection Services and its agents includes, but is not limited to, information concerning my employment history, earnings history, education, credit history, motor vehicle history, criminal history, military service, professional credentials and licenses and substance abuse testing.
						</p><p>
							I agree that <b><?php echo $discipline_name?></b> may rely on this authorization to order background reports, including investigative consumer reports, from companies other than ADP Screening and Selection Services without asking me for my authorization again as allowed by law. I also agree that a copy of this form is valid like the signed original. I certify that all of my personal information on this form is true and correct and understand that dishonesty will disqualify me from consideration for employment with <b><?php echo $discipline_name?></b>, or if I am hired or already work for <b><?php echo $discipline_name?></b>, that my employment may be terminated.
						</p>
					</span>
				</div>
			</div>
			<p></p>
			
			<div class="row">
				<div class="row">
					<div class="col-sm-3">
						<label for="first-name">First Name: </label>
					</div>
					<div class="col-sm-3">
					<input class="form-control" name="bc_first_name" value="<?php echo $bc_info->bc_first_name?>" style="display: inline;"/>
					</div>
					<div class="col-sm-3">
						<label for="last-name">Last Name: </label>
					</div>
					<div class="col-sm-3">
					<input class="form-control" name="bc_last_name" value="<?php echo $bc_info->bc_last_name?>" style="display: inline;"/>
					</div>
				</div>
				<p></p>
				<div class="row">
					<div class="col-sm-3">
						<label for="years-used">Years Used: </label>
					</div>
					<div class="col-sm-3">
						<input class="form-control" type="date" style="display: inline;" name="bc_year_used" value="<?php echo $bc_info->bc_year_used?>"/>
					</div>
					<div class="col-sm-3">
						<label for="social-security-no">Social Security Number: </label>
					</div>
					<div class="col-sm-3">
						<input class="form-control" style="display: inline;" name="bc_ssn" value="<?php echo $bc_info->bc_ssn?>"/>
					</div>
				</div>
				<p></p>
				<div class="row">
					<div class="col-sm-2">
						<label for="driver-license">Driver’s License Number: </label>
					</div>
					<div class="col-sm-2">
						<input class="form-control" style="display: inline;" name="bc_dln" value="<?php echo $bc_info->bc_dln?>" />
					</div>
					<div class="col-sm-2">
						<label for="state">State: </label>
					</div>
					<div class="col-sm-2">
						<input class="form-control" style="display: inline;" name="bc_state" value="<?php echo $bc_info->bc_state?>" />
					</div>
					<div class="col-sm-2">
						<label for="dob">Date of Birth: </label>
					</div>
					<div class="col-sm-2">
						<input type="date" class="form-control" style="display: inline;" name="" value="<?php echo $rn_info->date_of_birth?>"/>
					</div>
				</div>
			</div>
			
			<br />
			
			<div class="row">
				<div class="row" style="text-align:center;">
					<span style=""><u>Addresses Within The Past Seven Years (use a separate sheet as needed)</u></span>
				</div>
				<p></p>
				<p></p>
			
				<div class="row">
					<label for="present-address">Present Street Address: </label>
				<input class="form-control" style="display: inline; width: 50%;" name="bc_address1" value="<?php echo $bc_info->bc_address1?>" />
				</div>
				<p></p>
				<div class="row">
					<div class="col-sm-4">
						<label for="city">City: </label>
						<input class="form-control" style="display: inline; width: initial;" name="bc_city1" value="<?php echo $bc_info->bc_city1?>" />
					</div>
					<div class="col-sm-4">
						<label for="state">State: </label>
						<input class="form-control" style="display: inline; width: initial;" name="bc_state1" value="<?php echo $bc_info->bc_state1?>" />
					</div>
					<div class="col-sm-4">
						<label for="zip">ZIP: </label>
						<input class="form-control" style="display: inline; width: initial;" name="bc_zip1" value="<?php echo $bc_info->bc_zip1?>" />
					</div>
				</div>
				<br />
				<div class="row">
					<label for="street-address">Prior Street Address: </label>
					<input class="form-control" style="display: inline; width: 50%;" name="bc_address2" value="<?php echo $bc_info->bc_address2?>" />
					
					<!--
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">Prior Street Address: </label>
							<input id="last-name" class="form-control" style="display: inline; width: 50%;"/>
						</div>
					</div>
					-->
					<p></p>
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">From: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_from1" value="<?php echo $bc_info->bc_from1?>" />
						</div>
						<p></p>
						<div class="col-sm-4">
							<label for="last-name">To: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_to1" value="<?php echo $bc_info->bc_to1?>" />
						</div>
					</div>
				<br />
				</div>
				
				<br />
				<div class="row">
					<label for="last-name">Prior Street Address: </label>
					<input class="form-control" style="display: inline; width: 50%;" name="bc_address3" value="<?php echo $bc_info->bc_address3?>" />
					
					<!--
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">Prior Street Address: </label>
							<input id="last-name" class="form-control" style="display: inline; width: 50%;"/>
						</div>
					</div>
					-->
					<p></p>
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">From: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_from2" value="<?php echo $bc_info->bc_from2?>"/>
						</div>
						<p></p>
						<div class="col-sm-4">
							<label for="last-name">To: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_to2" value="<?php echo $bc_info->bc_to2?>" />
						</div>
					</div>
				<br />
				</div>
				
				<br />
				<div class="row">
					<label for="last-name">Prior Street Address: </label>
					<input class="form-control" style="display: inline; width: 50%;" name="bc_address4" value="<?php echo $bc_info->bc_address4?>" />
					
					<!--
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">Prior Street Address: </label>
							<input id="last-name" class="form-control" style="display: inline; width: 50%;"/>
						</div>
					</div>
					-->
					<p></p>
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">From: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_from3" value="<?php echo $bc_info->bc_from3?>" />
						</div>
						<p></p>
						<div class="col-sm-4">
							<label for="last-name">To: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_to3" value="<?php echo $bc_info->bc_to3?>"/>
						</div>
					</div>
				<br />
				</div>
				
				<br />
				<div class="row">
					<label for="last-name">Prior Street Address: </label>
					<input class="form-control" style="display: inline; width: 50%;" name="bc_address5" value="<?php echo $bc_info->bc_address5?>" />
					
					<!--
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">Prior Street Address: </label>
							<input id="last-name" class="form-control" style="display: inline; width: 50%;"/>
						</div>
					</div>
					-->
					<p></p>
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">From: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_from4" value="<?php echo $bc_info->bc_from4?>" />
						</div>
						<p></p>
						<div class="col-sm-4">
							<label for="last-name">To: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_to4" value="<?php echo $bc_info->bc_to4?>" />
						</div>
					</div>
				<br />
				</div>
				
				<br />
				<div class="row">
					<label for="last-name">Prior Street Address: </label>
					<input class="form-control" style="display: inline; width: 50%;" name="bc_address6" value="<?php echo $bc_info->bc_address6?>" />
					
					<!--
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">Prior Street Address: </label>
							<input id="last-name" class="form-control" style="display: inline; width: 50%;"/>
						</div>
					</div>
					-->
					<p></p>
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">From: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_from5" value="<?php echo $bc_info->bc_from5?>" />
						</div>
						<p></p>
						<div class="col-sm-4">
							<label for="last-name">To: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_to5" value="<?php echo $bc_info->bc_to5?>" />
						</div>
					</div>
				<br />
				</div>
				
				<br />
				<div class="row">
					<label for="last-name">Prior Street Address: </label>
					<input class="form-control" style="display: inline; width: 50%;" name="bc_address7" value="<?php echo $bc_info->bc_address7?>" />
					
					<!--
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">Prior Street Address: </label>
							<input id="last-name" class="form-control" style="display: inline; width: 50%;"/>
						</div>
					</div>
					-->
					<p></p>
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">From: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_from6" value="<?php echo $bc_info->bc_from6?>" />
						</div>
						<p></p>
						<div class="col-sm-4">
							<label for="last-name">To: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_to6" value="<?php echo $bc_info->bc_to6?>" />
						</div>
					</div>
				<br />
				</div>
				
				<br />
				<div class="row">
					<label for="last-name">Prior Street Address: </label>
					<input class="form-control" style="display: inline; width: 50%;" name="bc_address8" value="<?php echo $bc_info->bc_address8?>" />
					
					<!--
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">Prior Street Address: </label>
							<input id="last-name" class="form-control" style="display: inline; width: 50%;"/>
						</div>
					</div>
					-->
					<p></p>
					<div class="row">
						<div class="col-sm-4">
							<label for="last-name">From: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_from7" value="<?php echo $bc_info->bc_from7?>" />
						</div>
						<p></p>
						<div class="col-sm-4">
							<label for="last-name">To: </label>
							<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_to7" value="<?php echo $bc_info->bc_to7?>" />
						</div>
					</div>
				<br />
				</div>
				
			</div>
			<br/ >
			<div class="row">
				<div class="row">
					<div class="col-sm-8">
						<label for="signature" style="float: left;">Employee's Signature</label>
						<div class="fileinput-new thumbnail" style="width: 7em; /* height: 150px; */ /* float: right; */ /* padding-left: 0em; */ margin-left: 13em;">
							<img id="bc_esign" src="<?php echo $rn_info->signature; ?>" >
						</div>
					</div>
					<div class="col-sm-4">
						<label for="last-name">Date:</label>
						<input type="date" class="form-control" style="display: inline; width: 50%;" name="bc_sign_date" value="<?php echo $bc_info->bc_sign_date?>" />
					</div>
				</div>
				<br />
				<div class="row">
					<label for="last-name" style="float:left;">Check this box if you would like a free copy of your background check report: </label>
					<input type="checkbox" class="form-control" style="display: inline; width: inherit; height: inherit; margin-top: 0.5em;" name="bc_check" value="1" <?php if($bc_info->bc_check=="1"){ echo "checked"; } ?> />
				</div>
			</div>
			<br/ >
			<div class="row">
				<div class="">
					<div class="row" style="font-size: 10pt; text-align:justify;">
						<span>
							<b>Para informacion en espanol, visite </a href="www.ftc.gov/credit">www.ftc.gov/credit</a> o escribe a la FTC Consumer Response Center, Room 130-A 600 Pennsylvania Ave. N.W., Washington, D.C. 20580.</b>
						</span>
						<br />
						<br />
						<span>
							<b>A Summary of Your Rights Under the Fair Credit Reporting Act</b>
						</span>
						<br />
						<br />
						<span>
							<p>
								The federal Fair Credit Reporting Act (FCRA) promotes the accuracy, fairness, and privacy of information in the files of consumer reporting agencies. There are many types of consumer reporting agencies, including credit bureaus and specialty agencies (such as agencies that sell information about check writing histories, medical records, and rental history records). Here is a summary of your major rights under the FCRA. <b>For more information, including information about additional rights, go to <a href="www.ftc.gov/credit">www.ftc.gov/credit</a> or write to: Consumer Response Center, Room 130-A, Federal Trade Commission, 600 Pennsylvania Ave. N.W., Washington, D.C. 20580.</b>
							</p>
						
							<ul>
								<li>
									<p>
										<b>You must be told if information in your file has been used against you.</b> Anyone who uses a credit report or another type of consumer report to deny your application for credit, insurance, or employment – or to take another adverse action against you – must tell you, and must give you the name, address, and phone number of the agency that provided the information.
									</p>
								</li>
								<li>
									<p>
										<b>You have the right to know what is in your file.</b> You may request and obtain all the information about you in the files of a consumer reporting agency (your “file disclosure”). You will be required to provide proper identification, which may include your Social Security number. In many cases, the disclosure will be free. You are entitled to a free file disclosure if:
									</p>
									<ul>
										<li>
											<p>
												a person has taken adverse action against you because of information in your credit report;
											</p>
										</li>
										<li>
											<p>
												you are the victim of identity theft and place a fraud alert in your file;
											</p>
										</li>
										<li>
											<p>
												your file contains inaccurate information as a result of fraud;
											</p>
										</li>
										<li>
											<p>
												you are on public assistance;
											</p>
										</li>
										<li>
											<p>
												you are unemployed but expect to apply for employment within 60 days.
											</p>
										</li>
									</ul>
								</li>
								
								<span>
									<p>
										In addition, by September 2005 all consumers will be entitled to one free disclosure every 12 months upon request from each nationwide credit bureau and from nationwide specialty consumer reporting agencies. See <a href="www.ftc.gov/credit">www.ftc.gov/credit</a> for additional information.
									</p>
								</span>
								
								<li>
									<p>
										<b>You have the right to ask for a credit score.</b> Credit scores are numerical summaries of your credit-worthiness based on information from credit bureaus. You may request a credit score from consumer reporting agencies that create scores or distribute scores used in residential real property loans, but you will have to pay for it. In some mortgage transactions, you will receive credit score information for free from the mortgage lender.
									</p>
								</li>
								<li>
									<p>
										<b>You have the right to dispute incomplete or inaccurate information.</b> If you identify information in your file that is incomplete or inaccurate, and report it to the consumer reporting agency, the agency must investigate unless your dispute is frivolous. See <a href="www.ftc.gov/credit">www.ftc.gov/credit</a> for an explanation of dispute procedures.
									</p>
								</li>
								<li>
									<p>
										<b>Consumer reporting agencies must correct or delete inaccurate, incomplete, or unverifiable information.</b> Inaccurate, incomplete or unverifiable information must be removed or corrected, usually within 30 days. However, a consumer reporting agency may continue to report information it has verified as accurate.
									</p>
								</li>
								<li>
									<p>
										<b>Consumer reporting agencies may not report outdated negative information.</b> In most cases, a consumer reporting agency may not report negative information that is more than seven years old, or bankruptcies that are more than 10 years old.
									</p>
								</li>
								<li>
									<p>
										<b>Access to your file is limited.</b> A consumer reporting agency may provide information about you only to people with a valid need -- usually to consider an application with a creditor, insurer, employer, landlord, or other business. The FCRA specifies those with a valid need for access.
									</p>
								</li>
								<li>
									<p>
										<b>You must give your consent for reports to be provided to employers.</b> A consumer reporting agency may not give out information about you to your employer, or a potential employer, without your written consent given to the employer. Written consent generally is not required in the trucking industry. For more information, go to <a href="www.ftc.gov/credit">www.ftc.gov/credit</a>.
									</p>
								</li>
								<li>
									<p>
										<b>You may limit “prescreened” offers of credit and insurance you get based on information in your credit report.</b> Unsolicited “prescreened” offers for credit and insurance must include a toll-free phone number you can call if you choose to remove your name and address from the lists these offers are based on. You may opt-out with the nationwide credit bureaus at 1-888-5-OPTOUT (1-888-567-8688).
									</p>
								</li>
								<li>
									<p>
										<b>You may seek damages from violators.</b> If a consumer reporting agency, or, in some cases, a user of consumer reports or a furnisher of information to a consumer reporting agency violates the FCRA, you may be able to sue in state or federal court.
									</p>
								</li>
								<li>
									<p>
										<b>Identity theft victims and active duty military personnel have additional rights.</b> For more information, visit <a href="www.ftc.gov/credit">www.ftc.gov/credit</a>.
									</p>
								</li>
							</ul>
							
							<p>
								<b>States may enforce the FCRA, and many states have their own consumer reporting laws. In some cases, you may have more rights under state law. For more information, contact your state or local consumer protection agency or your state Attorney General. Federal enforcers are:</b>
							</p>
							
						</span>
					</div>
				</div>
			</div>
			<br />
			
			<div class="panel panel-default" style="font-size: 10pt;">
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>TYPE OF BUSINESS:</th>
								<th>CONTACT:</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="">Consumer reporting agencies, creditors and others not listed below</td>
								<td style="">Federal Trade Commission: Consumer Response Center - FCRA Washington, DC 20580 1-877-382-4357</td>
							</tr>
							<tr>
								<td style="">National banks, federal branches/agencies of foreign banks (word "National" or initials "N.A." appear in or after bank's name)</td>
								<td style="">Office of the Comptroller of the Currency Compliance Management, Mail Stop 6-6 Washington, DC 20219 800-613-6743</td>
							</tr>
							<tr>
								<td style="">Federal Reserve System member banks (except national banks, and federal branches/agencies of foreign banks)</td>
								<td style="">Federal Reserve Consumer Help (FRCH) P O Box 1200, Minneapolis, MN 55480 Telephone: 888-851-1920 Website Address: <a href="www.federalreserveconsumerhelp.gov">www.federalreserveconsumerhelp.gov</a> Email Address: ConsumerHelp@FederalReserve.gov</td>
							</tr>
							<tr>
								<td style="">Savings associations and federally chartered savings banks (word "Federal" or initials "F.S.B." appear in federal institution's name)</td>
								<td style="">Office of Thrift Supervision Consumer Complaints Washington, DC 20552 800-842-6929</td>
							</tr>
							<tr>
								<td style="">Federal credit unions (words "Federal Credit Union" appear in institution's name)</td>
								<td style="">National Credit Union Administration 1775 Duke Street Alexandria, VA 22314 703-519-4600</td>
								
							</tr>
							<tr>
								<td style="">State-chartered banks that are not members of the Federal Reserve System</td>
								<td style="">Federal Deposit Insurance Corporation Consumer Response Center, 2345 Grand Avenue, Suite 100 Kansas City, Missouri 64108-2638 1-877-275-3342</td>
							</tr>
							<tr>
								<td style="">Air, surface, or rail common carriers regulated by former Civil Aeronautics Board or Interstate Commerce Commission</td>
								<td style="">Department of Transportation , Office of Financial Management Washington, DC 20590 202-366-1306</td>
							</tr>
							<tr>
								<td style="">Activities subject to the Packers and Stockyards Act, 1921</td>
								<td style="">Department of Agriculture Office of Deputy Administrator - GIPSA Washington, DC 20250 202-720-7051</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

          <div class="row">
				
				<div class="col-sm-4">
                                        	 <img src="<?php
                                if (!empty($admin_info->esignature)) {
                                    echo $admin_info->esignature;
                                }
                                ?>"/>	
					
					<p>Administrator's Signature</p>
				</div>
				
			</div> 
    </form>
	<button id="btn_mhr_save" onclick="callfunc()" type="button" class="btn btn-primary btn-block" style="width: 20%; float: right;">Next</button>
	<br />
	<br />
	<br />
</div>
	
<script>
    $.fn.serializeObject = function(){
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
	$('#bc_form').val(JSON.stringify($('form.bcform').serializeObject()));
	$("#myModali9").hide();
	return false;
}
</script>