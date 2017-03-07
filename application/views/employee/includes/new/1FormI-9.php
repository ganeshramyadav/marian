     <div class="container" style="width: 100%;">
	<div class="section-header row">
      <div class="col-sm-3 dhs-seal">
      <!--
        <img src="images/dhs.png" alt="DHS Seal"/>
      -->
      </div>

      <div class="col-sm-6">
        <h1>Employment Eligibility Verification</h1>

        <!--
        <div><strong>Department of Homeland Security</strong></div>
        U.S. Citizenship and Immigration Services
        -->
      </div>

      <div class="col-sm-3">
        <strong>USCIS<br> Form I-9</strong>
        <!--
        <small>
          <div>OMB No. 1615-0047</div>
          <div>Expires 03/31/2016</div>
        </small>
        -->
      </div>
    </div>

	
	
    <hr class="heavy"/>

    <form method="post" action="#" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 19px;">

      <p><strong>► START HERE. <small>Read instructions carefully before
            completing this form. The instructions must be available during
            completion of this form.</small></strong><br>
      <strong>ANTI-DISCRIMINATION NOTICE:</strong> It is illegal to
        discriminate against work-authorized individuals. Employers
        <strong>CANNOT</strong> specify which document(s) they will accept from an
        employee. The refusal to hire an individual because the documentation
        presented has a future expiration date may also constitute illegal
        discrimination.</p>

      <div class="header-box container" style="border: 1px solid black; padding: .25em; background-color: #e0e0e0;width: 100%;">
        <strong>Section 1. Employee Information and Attestation</strong>
        <em>(Employees must complete and sign Section 1 of Form I-9 no later
          than the <strong>first day of employment</strong>, but not before
          accepting a job offer.)</em>
      </div>

      <div class="form-box container" style="border-right: 1px solid black;border-bottom: 1px solid black;margin-bottom: 1ex; width: 100%;">
        <div class="row">
          <div class="col-sm-8" style="border-top: 1px solid black;border-left: 1px solid black;padding-bottom: .5em;">

            <div class="row">
              <div class="col-sm-4">
                <label for="last-name">Last Name <em>(Family Name)</em></label>
                <input id="last-name" class="form-control" value="<?php echo $rn_info->last_name?>" style="font-weight: bold; font-size: 14pt;"/>
              </div>

              <div class="col-sm-4">
                <label for="first-name">First Name <em>(Given Name)</em></label>
                <input id="first-name" class="form-control" value="<?php echo $rn_info->first_name?>" style="font-weight: bold; font-size: 14pt;"/>
              </div>

              <div class="col-sm-4">
                <label for="middle-initial">Middle Initial</label>
                <input id="middle-initial" class="form-control" value="" style="font-weight: bold; font-size: 14pt;"/>
              </div>

            </div>
          </div>

          <div class="col-sm-4" style="border-top: 1px solid black;border-left: 1px solid black;padding-bottom: .5em;">
            <label for="other-names">Other Names Used <em>(if any)</em></label>
            <input id="other-names" class="form-control" style="font-weight: bold; font-size: 14pt;"/>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4" style="border-top: 1px solid black;border-left: 1px solid black;padding-bottom: .5em;">
            <label for="address">Address <em>(Street Number and Name)</em></label>
            <input id="address" class="form-control" value="<?php echo $rn_info->present_address?>" style="font-weight: bold; font-size: 14pt;"/>
          </div>

          <div class="col-sm-2" style="border-top: 1px solid black;border-left: 1px solid black;padding-bottom: .5em;">
            <label for="apt-number">Apt. Number</label>
            <input id="apt-number" class="form-control" style="font-weight: bold; font-size: 14pt;"/>
          </div>

          <div class="col-sm-3" style="border-top: 1px solid black;border-left: 1px solid black;padding-bottom: .5em;">
            <label for="city-or-town">City or Town</label>
            <input id="city-or-town" class="form-control" value="<?php echo $rn_info->present_address?>" style="font-weight: bold; font-size: 14pt;"/>
          </div>

          <div class="col-sm-1" style="border-top: 1px solid black;border-left: 1px solid black;padding-bottom: .5em;">
            <label for="state">State</label>
            <input id="state" class="form-control" value="<?php echo $rn_info->present_address?>" style="font-weight: bold; font-size: 14pt;"/>
          </div>

          <div class="col-sm-2" style="border-top: 1px solid black;border-left: 1px solid black;padding-bottom: .5em;">
            <label for="zip-code">Zip Code</label>
            <input id="zip-code" class="form-control" value="<?php echo $rn_info->present_address?>" style="font-weight: bold; font-size: 14pt;"/>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3" style="border-top: 1px solid black;border-left: 1px solid black;padding-bottom: .5em;">
            <label for="date-of-birth">Date of Birth <em>(mm/dd/yyyy)</em></label>
            <input id="date-of-birth" type="date" class="form-control" value="<?php echo $rn_info->date_of_birth?>" style="font-weight: bold; font-size: 14pt;"/>
          </div>

          <div class="col-sm-3" style="border-top: 1px solid black;border-left: 1px solid black;padding-bottom: .5em;">
            <label for="ssn">U.S. Social Security Number</label>
            <input id="ssn" class="form-control" value="<?php echo "123456" ?>" style="font-weight: bold; font-size: 14pt;"/>
          </div>

          <div class="col-sm-4" style="border-top: 1px solid black;border-left: 1px solid black;padding-bottom: .5em;">
            <label for="email">E-mail Address</label>
            <input id="email" type="email" class="form-control" value="<?php echo $rn_info->email?>" style="font-weight: bold; font-size: 14pt;"/>
          </div>

          <div class="col-sm-2" style="border-top: 1px solid black;border-left: 1px solid black;padding-bottom: .5em;">
            <label for="telephone">Telephone Number</label>
            <input id="telephone" type="tel" class="form-control" value="<?php echo $rn_info->mobile?>" style="font-weight: bold; font-size: 14pt;"/>
          </div>
        </div>
      </div>

      <p><strong>I am aware that federal law provides for imprisonment and/or fines for
          false statements or use of false documents in connection with the
          completion of this form.</strong></p>

      <p><strong>I attest, under penalty of perjury, that I am (check one of the
          following):</strong></p>

      <ul class="list-unstyled checkbox-list">
        <li><input type="radio" name="person-status" id="citizen" value="citizen" style="display: inline; width: 1em; height: 1em;"/>
          <label for="citizen">A citizen of the United States</label>
        </li>

        <li><input type="radio" name="person-status" id="noncitizen" value="noncitizen" style="display: inline; width: 1em; height: 1em;"/>
          <label for="noncitizen">A noncitizen national of the United
            States</label>
          <em>(See instructions)</em></li>

        <li><input type="radio" name="person-status" id="permanent-resident" value="permanent-resident" style="display: inline; width: 1em; height: 1em;"/>
          <label for="permanent-resident">A lawful permanent resident</label>
          <label for="alien-number">(Alien Registration Number/USCIS Number):</label>
          <input id="alien-number" class="form-control input-control" style="display: inline; width: auto; padding: 0 .5ex;" /></li>

        <li><input type="radio" name="person-status" id="alien-authorized" value="alien-authorized" style="display: inline; width: 1em; height: 1em;"/>
          <label for="alien-authorized">An alien authorized to work until</label>
          <label for="expiration">(expiration date, if applicable, mm/dd/yyyy)</label>
          <input id="expiration" type="date" class="form-control input-control" style="display: inline; width: auto; padding: 0 .5ex;"/>. Some aliens may write "N/A" in this field. <em>(See instructions)</em>

          <p><em>For aliens authorized to work, provide your Alien Registration Number/USCIS Number <strong>OR</strong> Form I-94 Admission Number:</em></p>
          <ol>

            <li><label for="alien-authorized-number">Alien Registration Number/USCIS Number:</label>
              <input id="alien-authorized-number" class="form-control input-control" style="display: inline; width: auto; padding: 0 .5ex;" />

              <strong class="big" style="text-transform: uppercase;font-size: 2em;display: block;">or</strong>
            </li>

            <!--
            <div>
            3-D Barcode
            Do Not Write in This Space
            </div>
            -->

            <li>
              <label for="i94-admission">Form I-94 Admission Number:</label>
              <input id="i94-admission" class="form-control input-control" style="display: inline; width: auto; padding: 0 .5ex;" />

              <p>If you obtained your admission number from CBP in connection with
                your arrival in the United States, include the following:</p>

              <label for="foreign-passport">Foreign Passport Number:</label>
              <input id="foreign-passport" class="form-control input-control" style="display: inline; width: auto; padding: 0 .5ex;"/>
              <br>

              <label for="foreign-country">Country of Issuance:</label>
              <input id="foreign-country" class="form-control input-control" style="display: inline; width: auto; padding: 0 .5ex;"/>

              <p>Some aliens may write "N/A" on the Foreign Passport Number and Country
                of Issuance fields. <em>(See instructions)</em></p>
            </li>
          </ol>
        </li>
      </ul>

      <div class="form-box container" style="border-right: 1px solid black;border-bottom: 1px solid black;border-top: 1px solid black;border-left: 1px solid black;margin-bottom: 1ex;width: 100%;">
        <div class="row">
          <div class="col-sm-8" style="/* border-top: 1px solid black; *//* border-left: 1px solid black; *//* padding-bottom: .5em; */ float:left">
            <label for="signature">Signature of Employee:</label>
            <div class="fileinput-new thumbnail" style="width: 7em; /* height: 150px; */ /* float: right; */ /* padding-left: 0em; */ margin-left: 13em;">
			<img id="electronic_signature" src="<?php echo $rn_info->signature?>" >
	    </div>
          </div>

          <div class="col-sm-4" style="/* border-top: 1px solid black; */border-left: 1px solid black;padding-bottom: .5em;">
            <label for="signature-date">Date <em>(mm/dd/yyyy)</em>:</label>
            <input id="signature-date" type="date" class="form-control"/>
          </div>
        </div>
      </div>

      <div class="header-box container" style="border: 1px solid black; padding: .25em; background-color: #e0e0e0; width:100%; text-align: center;">
        <strong>Preparer and/or Translator Certification</strong>
        <em>(To be completed and signed if Section 1 is prepared by a person
          other than the employee.)</em>
      </div>


      <p style="text-align: center;"><strong>I attest, under penalty of perjury, that I have assisted in the
          completion of this form and that to the best of my knowledge the
          information is true and correct.</strong></p>

      <div class="form-box container" style="border-left: 1px solid black; border-top: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black; margin-bottom: 1ex;">
        <div class="row">
          <div class="col-sm-8" style="border-right: 1px solid black; padding-bottom: .5em;">
            <label for="preparer-signature" style="white-space: nowrap;font-size: .9em;display: block;">Signature of Preparer or
              Translator:</label>
            <input id="preparer-signature" class="form-control"/>
          </div>

          <div class="col-sm-4">
            <label for="preparer-signature-date">Date
              <em>(mm/dd/yyyy)</em>:</label>
            <input id="preparer-signature-date" type="date"
              class="form-control input-control"/>
          </div>
        </div>

        <div class="row" style="border-top: 1px solid black; border-bottom: 1px solid black;">
          <div class="col-sm-6" style="border-right: 1px solid black; padding-bottom: .5em;">
            <label for="preparer-last-name">Last Name <em>(Family Name)</em></label>
            <input id="preparer-last-name" class="form-control" style="font-weight: bold; font-size: 14pt;"/>
          </div>

          <div class="col-sm-6" style="padding-bottom: .5em;">
            <label for="preparer-first-name">First Name <em>(Given Name)</em></label>
            <input id="preparer-first-name" class="form-control"/>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-5" style="border-right: 1px solid black; padding-bottom: .5em;">
            <label for="preparer-address">Address <em>(Street Number and Name)</em></label>
            <input id="preparer-address" class="form-control"/>
          </div>

          <div class="col-sm-4" style="border-right: 1px solid black; padding-bottom: .5em;">
            <label for="preparer-city-or-town">City or Town</label>
            <input id="preparer-city-or-town" class="form-control"/>
          </div>

          <div class="col-sm-1" style="border-right: 1px solid black; padding-bottom: .5em;">
            <label for="preparer-state">State</label>
            <input id="preparer-state" class="form-control"/>
          </div>

          <div class="col-sm-2">
            <label for="preparer-zip-code">Zip Code</label>
            <input id="preparer-zip-code" class="form-control"/>
          </div>
        </div>
      </div>

      <div class="stop" style="text-align: center; margin: .5em;">
        <img src="<?php echo base_url() ?>asset/img/stop.png" alt="Stop" style="width: 2em; height: 2em;">
        <div class="stop-text" style="font-size: 1.2em; padding: .2em 2em; margin: 0 .25em; font-weight: bold; font-style: oblique; display: inline-block; background-color: #e0e0e0; font-family: 'Times New Roman', Times, serif;">Employer Completes Next Page</div>
        <img src="<?php echo base_url() ?>asset/img/stop.png" alt="Stop" style="width: 2em; height: 2em;">
      </div>

      <hr class="heavy" style="border: solid black; border-width: 1ex 0 1px; height: .5ex; margin: 0; margin-top: 1em;"/>

      <div class="header-box" style="border: 1px solid black; padding: .25em; background-color: #e0e0e0;">
        <strong style="font-weight: 700;">Section 2. Employer or Authorized Representative Review and
          Verification</strong>
        <p><em>(Employers or their authorized representative must complete and
            sign Section 2 within 3 business days of the employee's first day of
            employment. You must physically examine one document from List A
            <strong style="font-weight: 700;">OR</strong> examine a combination of one document from List
            B and one document from List C as listed on the "Lists of Acceptable
            Documents" on the next page of this form. For each document you
            review, record the following information: document title, issuing
            authority, document number, and expiration date, if any.)</em></p>
      </div>

      <div class="form-cell" style="    border: 1px solid black; margin: 1ex 0; padding: 1ex;">
        <label for="employee" style="font-weight: normal;">Employee Last Name, First Name and Middle Initial
          from Section 1:</label>
        <input id="employee" class="form-control input-control" style="width: 30em; display: inline;" value="<?php echo $rn_info->first_name." ".$rn_info->last_name ?>" />
      </div>

<style>

    

.documents h6 {
    display: block; margin: 0; font-size: 1.2em; font-weight: bold; text-transform: uppercase;
}
.documents th.or-column {
    background: inherit;
}
.documents tbody {
    border: 1px solid black;
    vertical-align: top;
}
.documents td {
    text-align: center;
}
.document-item {
    font-size: 0.8em;
    padding: 0;
    border-bottom: 2px solid black;
    text-align: left;
}
.document-cell {
    padding: .1em .5em;
    margin: 0;
    border-bottom: 1px solid black;
}
.document-cell label {
    display: block;
}
label {
    font-weight: normal;
}
.document-cell input {
    height: auto;
    padding: .2em .5em;
    border: none;
}
.document-add {
    margin: .2em;
    padding: 0 .5em;
}
table .or-column {
    text-transform: uppercase;
    width: 1.5em;
    padding: 0 0 .3em 0;
    vertical-align: bottom;
    background-color: #c0c0c0;
}
h4.large {
    font-size: 1.15em;
    margin-top: .5em;
    margin-bottom: .5em;
}

h4 {
    font-size: 1em;
    font-weight: bold;
    margin-top: 1em;
    margin-bottom: .25em;
}
p {
    margin-bottom: 0.5em;
}
b, strong {
    font-weight: 700;
}
.input-control {
    display: inline;
    width: auto;
    padding: 0 .5ex;
}
.form-box {
    border-right: 1px solid black;
    border-bottom: 1px solid black;
    margin-bottom: 1ex;
	width: 100%;
}
.form-box > .row > div {
    border-top: 1px solid black;
    border-left: 1px solid black;
    padding-bottom: 1em;
}
.form-box label {
    white-space: nowrap;
    font-size: .9em;
    display: block;
}
.header-box {
    border: 1px solid black;
    padding: .25em;
    background-color: #e0e0e0;
}
.form-cell {
    border: 1px solid black;
    padding: 1ex;
	width: 100%;
}


</style>	  
	  
      <table class="documents" style="background-color: transparent; border-spacing: 0; border-collapse: collapse;">
        <thead>
          <tr>
            <th style="position: relative; border-bottom: 1px solid black; width: 33.3%; padding: .5em; font-size: .9em; text-align: center;">
              <h6 style="display: block; margin: 0; font-size: 1.2em; font-weight: bold; text-transform: uppercase;">List A</h6>
              Identity and Employment Authorization
            </th>

            <th class="or-column" style="text-transform: uppercase; width: 1.5em; padding: 0 0 .3em 0; vertical-align: bottom; background: inherit; border-bottom: 1px solid black;">or</th>

            <th style="position: relative; border-bottom: 1px solid black; width: 33.3%; padding: .5em; font-size: .9em; text-align: center;">
              <h6>List B</h6>
              Identity

              <div class="cell-corner" style="position: absolute; bottom: .3em; right: -1em; width: 2em; text-align: center; text-transform: uppercase;">and</div>
            </th>

            <th style="position: relative; border-bottom: 1px solid black; width: 33.3%; padding: .5em; font-size: .9em; text-align: center;">
              <h6>List C</h6>
              Employment Authorization
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="document-list-a">
              <div class="document-item" id="document-item-template">
                <div class="document-cell">
                  <label for="document-title-a[0]">Document Title:</label>
                  <input id="document-title-a[0]" class="form-control"/>
                </div>

                <div class="document-cell">
                  <label for="document-authority-a[0]">Issuing Authority:</label>
                  <input id="document-authority-a[0]" class="form-control"/>
                </div>

                <div class="document-cell">
                  <label for="document-number-a[0]">Document Number:</label>
                  <input id="document-number-a[0]" class="form-control"/>
                </div>

                <div class="document-cell">
                  <label for="document-expiration-a[0]">Expiration Date
                    <em>(if any) (mm/dd/yyyy)</em></label>
                  <input id="document-expiration-a[0]" class="form-control"/>
                </div>
              </div>

              <button class="document-add btn" id="document-add-a">+</button>
            </td>

            <td class="or-column"></td>

            <td id="document-list-b">
              <button class="document-add btn" id="document-add-b">+</button>
            </td>

            <td id="document-list-c">
              <button class="document-add btn" id="document-add-c">+</button>
            </td>
          </tr>
        </tbody>
      </table>

      <h4 class="large">Certification</h4>
      <p><strong>I attest, under penalty of perjury, that (1) I have examined
          the document(s) presented by the above-named employee, (2) the
          above-listed document(s) appear to be genuine and to relate to the
          employee named, and (3) to the best of my knowledge the employee is
          authorized to work in the United States.</strong></p>

      <p><label for="first-day"><strong>The employee's first day of employment
            <em>(mm/dd/yyyy)</em>:</strong></label>
        <strong><input id="first-day" type="date"
          class="form-control input-control"/>
        <em>(See instructions for exemptions.)</em></strong>
      </p>

      <div class="form-box container">
        <div class="row">
          <div class="col-sm-5">
            <label for="employer-signature">Signature of Employer or Authorized
              Representative</label>
            <input id="employer-signature" class="form-control"/>
          </div>

          <div class="col-sm-2">
            <label for="employer-signature-date">Date (mm/dd/yyyy):</label>
            <input id="employer-signature-date" type="date"
              class="form-control input-control"/>
          </div>

          <div class="col-sm-5">
            <label for="employer-title">Title of Employer or Authorized
              Representative</label>
            <input id="employer-title" class="form-control input-control"/>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">
            <label for="employer-last-name">Last Name <em>(Family Name)</em></label>
            <input id="employer-last-name" class="form-control"/>
          </div>

          <div class="col-sm-3">
            <label for="employer-first-name">First Name <em>(Given Name)</em></label>
            <input id="employer-first-name" class="form-control"/>
          </div>

          <div class="col-sm-6">
            <label for="employer-business-name">Employer's Business or
              Organization Name</label>
            <input id="employer-business-name" class="form-control"/>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <label for="employer-address">Employer's Business or Organization
              Address <em>(Street Number and Name)</em></label>
            <input id="employer-address" class="form-control"/>
          </div>

          <div class="col-sm-3">
            <label for="employer-city-or-town">City or Town</label>
            <input id="employer-city-or-town" class="form-control"/>
          </div>

          <div class="col-sm-1">
            <label for="employer-state">State</label>
            <input id="employer-state" class="form-control"/>
          </div>

          <div class="col-sm-2">
            <label for="employer-zip-code">Zip Code</label>
            <input id="employer-zip-code" class="form-control"/>
          </div>
        </div>
      </div>

      <div class="header-box container" style="width: 89%;">
        <strong>Section 3. Reverification and Rehires</strong>
        <em>(To be completed and signed by employer or authorized
          representative.)</em>
      </div>

      <div class="form-box container">
        <div class="row">
          <div class="col-sm-8">
            <label for="new-name"><strong>A.</strong>
              New Name <em>(if applicable)</em> Last Name <em>(Family Name)</em>
              First Name <em>(Given Name) Middle Initial</em></label>
            <input id="new-name" class="form-control"/>
          </div>

          <div class="col-sm-4">
            <label for="rehire-date"><strong>B.</strong>
              Date of Rehire <em>(if applicable) (mm/dd/yyyy)</em></label>
            <input id="rehire-date" type="date" class="form-control"/>
          </div>
        </div>
      </div>

      <div class="form-cell container">
        <strong>C.</strong> If employee's previous grant of employment
        authorization has expired, provide the information for the document from
        List A or List C the employee presented that establishes current
        employment authorization in the space provided below.
      </div>

      <div class="form-box container">
        <div class="row">
          <div class="col-sm-4">
            <label for="document-title">Document Title:</label>
            <input id="document-title" class="form-control"/>
          </div>

          <div class="col-sm-4">
            <label for="document-number">Document Number:</label>
            <input id="document-number" class="form-control"/>
          </div>

          <div class="col-sm-4">
            <label for="expiration-date">Expiration Date
              <em>(if any) (mm/dd/yyyy)</em></label>
            <input id="expiration-date" type="date" class="form-control"/>
          </div>
        </div>
      </div>

      <p style="margin-bottom: 0.5em; margin-left: 2em; margin-right: 2em; text-align: center;"><strong>I attest, under penalty of perjury, that to the best of my
          knowledge, this employee is authorized to work in the United States,
          and if the employee presented document(s), the document(s) I have
          examined appear to be genuine and to relate to the
          individual.</strong></p>

      <div class="form-box container">
        <div class="row">
          <div class="col-sm-5">
            <label for="employer-signature2">Signature of Employer or Authorized
              Representative:</label>
            <input id="employer-signature2" class="form-control"/>
          </div>

          <div class="col-sm-2">
            <label for="employer-signature-date">Date
              <em>(mm/dd/yyyy)</em>:</label>
            <input id="employer-signature2-date" type="date"
              class="form-control"/>
          </div>

          <div class="col-sm-5">
            <label for="employer-name">Print Name of Employer or Authorized
              Representative:</label>
            <input id="employer-name" class="form-control"/>
          </div>
        </div>
      </div>

<style>
hr.heavy {
    border: solid black;
    border-width: 1ex 0 1px;
    height: .5ex;
    margin: 0;
    margin-top: 1em;
}

hr {
    border: none;
    border-top: 1px solid black;
    background: transparent;
    clear: both;
}
h2 {
    text-align: center;
    font-size: 1.2em;
    font-weight: bold;
    margin: .5em 0 0;
}
.documents-table {
    border: 1px solid black;
    border-collapse: collapse;
}
.documents-table th {
    position: relative;
    border-bottom: 1px solid black;
    width: 33.3%;
    padding: .5em;
    text-align: center;
}
.documents-table h6 {
    display: block;
    margin: 0;
    font-size: 1em;
    font-weight: bold;
    text-transform: uppercase;
}
table .or-column {
    text-transform: uppercase;
    width: 1.5em;
    padding: 0 0 .3em 0;
    vertical-align: bottom;
    background-color: #c0c0c0;
}
.documents-table td {
    border-right: 1px solid black;
    vertical-align: top;
}
.documents-table td > ol {
    padding: 0;
    counter-reset: table-list;
}
.documents-table td > ol > li:first-child {
    border-top-style: none;
}
.documents-table td > ol > li {
    border-top: 1px solid black;
    padding: .5em .5em .5em 2em;
    margin: 0;
    list-style: none;
}
.documents-table td > ol > li:before {
    content: counter(table-list, decimal) '.';
    counter-increment: table-list;
    font-weight: bold;
    margin-right: 1ex;
    margin-left: -1.5em;
}  
</style>
	  
	  
      <hr class="heavy"/>

      <h2>LISTS OF ACCEPTABLE DOCUMENTS</h2>
      <h2>All documents must be UNEXPIRED</h2>

      <br>

      <p class="text-center">Employees may present one selection from List
        A<br>
        or a combination of one selection from List B and one selection from
        List C.</p>

<div class="table-responsive">
	<table class="table" >
<!--
	<table class="documents-table">
-->
<style>
.documents-table h6 {
    display: block; margin: 0; font-size: 1em; font-weight: bold; text-transform: uppercase;
}
.documents-table td > ol > li {
    border-top: 1px solid black; padding: .5em .5em .5em 2em; margin: 0; list-style: none;
}
.end-notes {
    text-align: center;
    font-weight: bold;
    font-size: 1.2em;
    margin: 1.5em 0;
}
</style>


        <thead style="border: 1px solid black; border-collapse: collapse;">
          <tr >
            <th style=" border-top: 1px solid black; position: relative; border-bottom: 1px solid black; width: 33.3%; padding: .5em; text-align: center;">
              <h6 style="display: block; margin: 0; font-size: 1em; font-weight: bold; text-transform: uppercase;">List A</h6>
              Documents that Establish<br>
              Both Identity and<br>
              Employment Authorization
            </th>

            <th class="or-column"  style=" border-top: 1px solid black; border-bottom: 1px solid black; text-transform: uppercase; width: 1.5em; padding: 0 0 .3em 0; vertical-align: bottom; background-color: #c0c0c0;">or</th>

            <th  style=" border-top: 1px solid black; position: relative; border-bottom: 1px solid black; width: 33.3%; padding: .5em; text-align: center;">
              <h6 style="display: block; margin: 0; font-size: 1em; font-weight: bold; text-transform: uppercase;">List B</h6>
              Documents that Establish Identity

              <div class="cell-corner" style="position: absolute; bottom: .3em; right: -1em; width: 2em; text-align: center; text-transform: uppercase;">and</div>
            </th>

            <th  style=" border-top: 1px solid black; position: relative; border-bottom: 1px solid black; width: 33.3%; padding: .5em; text-align: center;">
              <h6 style="display: block; margin: 0; font-size: 1em; font-weight: bold; text-transform: uppercase;"> List C</h6>
              Documents that Establish Employment Authorization
            </th>
          </tr>
        </thead>

        <tbody style="border: 1px solid black; border-collapse: collapse;">
          <tr>
            <td style="border-right: 1px solid black; vertical-align: top;">
              <ol style="">
                <li style="">U.S. Passport or U.S. Passport Card</li>
                <li>Permanent Resident Card or Alien
                  Registration Receipt Card (Form I-551)</li>
                <li>Foreign passport that contains a temporary I-551 stamp
                  or temporary I-551 printed notation on a machine- readable
                  immigrant visa</li>
                <li>Employment Authorization Document that contains a
                  photograph (Form I-766)</li>

                <li>For a nonimmigrant alien authorized to work for a
                  specific employer because of his or her status:
                  <ol>
                    <li>Foreign passport; and</li>
                    <li>Form I-94 or Form I-94A that has the following:
                      <ol>
                        <li>The same name as the passport; and</li>
                        <li>An endorsement of the alien's nonimmigrant
                          status as long as that period of endorsement has
                          not yet expired and the proposed employment is not
                          in conflict with any restrictions or limitations
                          identified on the form.</li>
                      </ol>
                    </li>
                  </ol>
                </li>

                <li>Passport from the Federated States of Micronesia (FSM)
                  or the Republic of the Marshall Islands (RMI) with Form
                  I-94 or Form I-94A indicating nonimmigrant admission under
                  the Compact of Free Association Between the United States
                  and the FSM or RMI</li>
              </ol>
            </td>

            <td class="or-column" style="border-right: 1px solid black; vertical-align: top;"></td>

            <td>
              <ol>
                <li>Driver's license or ID card issued by a State or
                  outlying possession of the United States provided it
                  contains a photograph or information such as name, date of
                  birth, gender, height, eye color, and address</li>
                <li>ID card issued by federal, state or local government
                  agencies or entities, provided it contains a photograph or
                  information such as name, date of birth, gender, height,
                  eye color, and address</li>
                <li>School ID card with a photograph</li>
                <li>Voter's registration card</li>
                <li>U.S. Military card or draft record</li>
                <li>Military dependent's ID card</li>
                <li>U.S. Coast Guard Merchant Mariner Card</li>
                <li>Native American tribal document</li>
                <li>Driver's license issued by a Canadian
                  government authority</li>
                <li class="list-break-note">For persons under age 18 who are
                    unable to present a document listed above:</li>
                <li>School record or report card</li>
                <li>Clinic, doctor, or hospital record</li>
                <li>Day-care or nursery school record</li>
              </ol>
            </td>

            <td style="border-left: 1px solid black; border-right: 1px solid black; vertical-align: top;">
              <ol>
                <li>A Social Security Account Number card, unless the card
                  includes one of the following restrictions:
                  <ol class="angry-list">
                    <li>Not valid for employment</li>
                    <li>Valid for work only with INS authorization</li>
                    <li>Valid for work only with DHS authorization</li>
                  </ol>
                </li>

                <li>Certification of Birth Abroad issued by the Department
                  of State (Form FS-545)</li>
                <li>Certification of Report of Birth issued by the
                  Department of State (Form DS-1350)</li>
                <li>Original or certified copy of birth certificate issued
                  by a State, county, municipal authority, or territory of
                  the United States bearing an official seal</li>
                <li>Native American tribal document</li>
                <li>U.S. Citizen ID Card (Form I-197)</li>
                <li>Identification Card for Use of Resident Citizen in the
                  United States (Form I-179)</li>
                <li>Employment authorization document issued by the
                  Department of Homeland Security</li>
              </ol>
            </td>
          </tr>
        </tbody>
  </table>
</div>

      <div class="end-notes">
        <p>Illustrations of many of these documents appear in Part 8 of the
          Handbook for Employers (M-274).</p>
        <p>Refer to Section 2 of the instructions, titled "Employer or
          Authorized Representative Review and Verification," for more
          information about acceptable receipts.</p>
      </div>

    </form>
<script src="<?php echo base_url()?>asset/js/i9.js"></script>
</div>