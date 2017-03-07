
	<div class="container" style="width:100%; padding-left: 2em; padding-right: 2em;">
		<div class="section-header row">
			<h2>INFLUENZA VACCINATION NOTICE FOR STAFFF</h2>
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
					
				</div>
				<div class="col-sm-6" style="text-align:left;">
					<div class="">
						<label for="last-name" style="float:left;">Date</label>
					</div>
					<div>
						<input id="last-name" type="date" class="form-control" style="display: inline; width: inherit;"/>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">STAFF NAME</label>
				</div>
				<div class="col-sm-6">
					<input id="last-name" class="form-control" style="display: inline; width: inherit;"/>
				</div>
			</div>
			<p></p>
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">I HAVE RECEIVED THE INFLUENZA VACCINE FROM</label>
				</div>
				<div class="col-sm-6">
					<input id="last-name" class="form-control" style="display: inline; width: inherit;"/>
				</div>
			</div>
			<p></p>
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">AS OF THEIS DATE</label>
				</div>
				<div class="col-sm-6">
					<input id="last-name" type="date" class="form-control" style="display: inline; width: inherit;"/>
				</div>
			</div>
			<p></p>
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">I PLAN TO RECEIVE THE INFLUENZA VACCINE FORM</label>
				</div>
				<div class="col-sm-6">
					<input id="last-name" class="form-control" style="display: inline; width: inherit;"/>
				</div>
			</div>
			<p></p>
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">ON THIS  Date</label>
				</div>
				<div class="col-sm-6">
					<input id="last-name" type="date" class="form-control" style="display: inline; width: inherit;"/>
				</div>
			</div>
			<br />
			<div class="">
				<div class="row">
					<div>
						I HAVE DECLINED TO OBTAIN VACCINATION DUE TO:
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2">
					</div>
					<div class="col-sm-8">
						<div class="row">
							<span>
								<p>Allergy to contents of the caccine.</p>
							</span>
							<span>
								<p>Medical contraindication to receiving the vaccine.</p>
							</span>
							<span>
								<p>Previous weakness or allergic reactions vaccine.</p>
							</span>
							<span>
								<p>Cultural and/or rellgious beliefs.</p>
							</span>
							<span>
								<p>Personal preference that I do not wish to divulge.</p>
							</span>
						</div>
						<div class="row">
							<div class="col-sm-1">
								<p>Other</p>
							</div>
							<div class="col-sm-8">
								<textarea style=""></textarea>
							</div>
						</div>
					</div>
				</div>
				<br />
				<div class="row" style="text-align: justify;">
					<span>
						<p>FUTHERMORE, I HAVE BEEN ADVISED AS TO THE POTENTIALLY DANGEROUS RISKS AND CONSEQUENCES OF MY FAILURE TO RECEIVE THE INFLUNZA VACCINE. NOTWITHSTANDING THIS ADVICE, I DECLINE VACCIONATION.</p>
					</span>
					<p></p>
					<span>
						<p> ACKNOWLEDGE that I am aware, having been informed by Lifelink Home Health Providers of the availability of the influenza vaccine at:</p>
						<ul>
							<li>Walgreen’s Pharmacy at(800)925-4733;</li>
							<li>CVS Pharmacy at (800)746-7287;</li>
							<li>Wal-Mart Pharmacy at (800)925-6278;</li>
							<li>Costco Pharmacy at (800)607-6861;</li>
							<li>Or my own Primary M.D.</li>
						</ul>
					</span>
				</div>
				<br />
				
				<p></p>
				<div class="row">
					<div class="col-sm-6" style="text-align:center;">
						<!--<img src="C:/Users/Admin/Desktop/ganesh_doc/05012017/print for signature/praveen.png" style="max-width:100%;" alt="Employee’s signature">-->
						<img src="<?php echo $rn_info->signature; ?>" >
						<p></p>
						<label for="last-name" style="display: inline; width: initial;">Staff Signature</label>
					</div>
					<p></p>
					<div class="col-sm-6" style="text-align:center;">
						<input id="last-name" type="date" class="form-control" style="display: inline; width: initial;"/>
						<p></p>
						<label for="last-name" style="">Date</label>
					</div>
				</div>
				
				
				
				
				
				<!--
				<div class="row">
					<div class="col-sm-6">
						<div>
						<label for="last-name" style="float:left;">STAFF SIGNATURE</label>
						</div>
						<div>
						<img src="<?php echo $rn_info->signature; ?>" >
						</div>
					</div>
					<div class="col-sm-6">
						<label for="last-name" style="float:left;">Date</label>
						<input id="last-name" type="date" class="form-control" style="display: inline; width: inherit;"/>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6"></div>
					<div class="col-sm-6"></div>
				</div>
				-->
			</div>
			<br />
			<br />
			<br />
		</form>

		<script src="js/i9.js"></script>
	</div>
