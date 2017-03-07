	<div class="container" style="width:100%; padding-left: 2em; padding-right: 2em;">
		<div class="section-header row">
			<h2>ANNUAL TB SCREENING QUESTIONNAIRE</h2>
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
		<form method="post" action="#">
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">NAME</label>
				</div>
				<div class="col-sm-6">
					<input id="last-name" class="form-control" style=""/>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">DATE OF POSITIVE TB SKIN TEST</label>
				</div>
				<div class="col-sm-6">
					<input id="last-name" type="date" class="form-control" style=""/>
				</div>
			</div>
			<br />
			<div class="row" style="margin:auto;">
				<span>
					<label>CLASSIFICATION</label>
				</span>
				<table class="table table-striped">
				  <tbody>
							<tr>
								<td><input type="radio" name="person-status" id="citizen" value="citizen" style="float: right;"	></td>
								<td>Pre-Employment</td>
							</tr>
							<tr>
								<td><input type="radio" name="person-status" id="citizen" value="citizen"style="float: right;"></td>
								<td>Annual Testing</td>
							</tr>
							<tr>
								<td><input type="radio" name="person-status" id="citizen" value="citizen" style="float: right;"></td>
								<td>Exposure Testing</td>
							</tr>
						</tbody>
				</table>
			</div>
			<div class="row">
				<span>
					<div>Please answer the following questions by checking the yes or no column.</div>
				</span>
			</div>
			<br />
			<div class="row" style="margin:auto;">
				<span>
					<label>During the past year, have you experienced the following:</label>
				</span>
				<table class="table table-striped">
					<thead>
						<tr>
							<th> </th>
							<th> </th>
							<th style="text-align:center;"> YES </th>
							<th style="text-align:center;"> NO </th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Persistent cough</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_1" id="TB1" value="citizen"></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_1" id="TB11" value="citizen"></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Unexplained fever</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_2" id="TB2"></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_2" id="TB22"></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Loss of weight</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_3" id="TB3"	></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_3" id="TB33" ></td>
						</tr>
						<tr>
							<td>4</td>
							<td>Fatigue</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_4" id="TB4" ></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_4" id="TB44" ></td>
						</tr>
						<tr>
							<td>5</td>
							<td>Night sweats</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_5" id="TB5" ></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_5" id="TB55" ></td>
						</tr>
						<tr>
							<td>6</td>
							<td>
								<span style="float: left;">Exposure to known case of infectious TB if yes, when adn where</span>
								<input id="last-name" class="form-control" style="    width: 37%;"/>
							</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_6" id="TB6"></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_6" id="TB66"></td>
						</tr>
						<tr>
							<td>7</td>
							<td>Blood streaked sputum</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_7" id="TB7"></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_7" id="TB77"></td>
						</tr>
					</tbody>
				</table>
			</div>
			<br />
			<div class="row">
				<span>
					This questionnaire will be reviewed and, if indicated, you will be required to have chest X-ray and/or further follow up.
				</span>
			</div>
			<p></p>
			<div class="row">
				<div class="col-sm-6" style="text-align:center;">
					<img src="C:/Users/Admin/Desktop/ganesh_doc/05012017/print for signature/praveen.png" style="max-width:100%;" alt="Employee’s signature">
					<p></p>
					<label for="last-name" style="display: inline; width: initial;">Signature</label>
				</div>
				<p></p>
				<div class="col-sm-6" style="text-align:center;">
					<input id="last-name" type="date" class="form-control" style="display: inline; width: initial;"/>
					<p></p>
					<label for="last-name" style="">Date</label>
				</div>
			</div>
			<br />
			<br />
		</form>

		<script src="js/i9.js"></script>
	</div>
