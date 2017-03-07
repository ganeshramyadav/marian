	<div class="container" style="width:100%; padding-left: 2em; padding-right: 2em;">
		<div class="section-header row">
			<h2>INFLUENZA VACCINATION NOTICE FOR STAFFF</h2>
				
		</div>
		
		<style>
			label{
					font-weight: bold;
			}
		</style>
		
		
		<hr class="heavy"/>
			<br />
		<form class="ivform" method="post" action="#">
			<div class="row">
				<div class="col-sm-6">
					
				</div>
				<div class="col-sm-6" style="text-align:left;">
					<div class="">
						<label for="last-name" style="float:left;">Date</label>
					</div>
					<div>
						<input type="date" class="form-control" style="display: inline; width: inherit;" name="iv_date" value="<?php echo $iv_info->iv_date ?>"/>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">STAFF NAME</label>
				</div>
				<div class="col-sm-6">
					<input class="form-control" style="display: inline; width: inherit;" name="iv_staff_name" value="<?php echo $iv_info->iv_staff_name ?>"/>
				</div>
			</div>
			<p></p>
			<div class="row">
				<div class="col-sm-6">
					<input type="checkbox" name="iv_checkbox1" value="1" <?php if($iv_info->iv_checkbox1 =="1"){ echo "checked"; } ?> style="float: left; margin-top: auto;">
					<label for="last-name" style="float:left;">I HAVE RECEIVED THE INFLUENZA VACCINE FROM</label>
				</div>
				<div class="col-sm-6">
					<input class="form-control" style="display: inline; width: inherit;" name="iv_vaccine_from" value="<?php echo $iv_info->iv_vaccine_from ?>"/>
				</div>
			</div>
			<p></p>
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">AS OF THEIS DATE</label>
				</div>
				<div class="col-sm-6">
					<input type="date" class="form-control" style="display: inline; width: inherit;" name="iv_date1" value="<?php echo $iv_info->iv_date1 ?>"/>
				</div>
			</div>
			<p></p>
			<div class="row">
				<div class="col-sm-6">
					<input type="checkbox" name="iv_checkbox2" value="1" <?php if($iv_info->iv_checkbox2 =="1"){ echo "checked"; } ?> style="float: left; margin-top: auto;">
					<label for="last-name" style="float:left;">I PLAN TO RECEIVE THE INFLUENZA VACCINE FROM</label>
				</div>
				<div class="col-sm-6">
					<input class="form-control" style="display: inline; width: inherit;" name="iv_vaccine_from1" value="<?php echo $iv_info->iv_vaccine_from1 ?>" />
				</div>
			</div>
			<p></p>
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">ON THIS  Date</label>
				</div>
				<div class="col-sm-6">
					<input type="date" class="form-control" style="display: inline; width: inherit;" name="iv_date2" value="<?php echo $iv_info->iv_date2 ?>" />
				</div>
			</div>
			<br />
			<div class="">
				<div class="row">
					<div>
						<input type="checkbox" name="iv_checkbox3" value="1" <?php if($iv_info->iv_checkbox3 =="1"){ echo "checked"; } ?> style="">I HAVE DECLINED TO OBTAIN VACCINATION DUE TO:
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-sm-2">
					</div>
					<div class="col-sm-8">
						<div class="row">
							<span>
								<input type="checkbox" name="iv_checkbox4" value="1" <?php if($iv_info->iv_checkbox4 =="1"){ echo "checked"; } ?> style="float: left; margin-top: auto;">
								<p>Allergy to contents of the caccine.</p>
							</span>
							<span>
								<input type="checkbox" name="iv_checkbox5" value="1" <?php if($iv_info->iv_checkbox5 =="1"){ echo "checked"; } ?> style="float: left; margin-top: auto;">
								<p>Medical contraindication to receiving the vaccine.</p>
							</span>
							<span>
								<input type="checkbox" name="iv_checkbox6" value="1" <?php if($iv_info->iv_checkbox6 =="1"){ echo "checked"; } ?> style="float: left; margin-top: auto;">
								<p>Previous weakness or allergic reactions vaccine.</p>
							</span>
							<span>
								<input type="checkbox" name="iv_checkbox7" value="1" <?php if($iv_info->iv_checkbox7 =="1"){ echo "checked"; } ?> style="float: left; margin-top: auto;">
								<p>Cultural and/or rellgious beliefs.</p>
							</span>
							<span>
								<input type="checkbox" name="iv_checkbox8" value="1" <?php if($iv_info->iv_checkbox8 =="1"){ echo "checked"; } ?> style="float: left; margin-top: auto;">
								<p>Personal preference that I do not wish to divulge.</p>
							</span>
						</div>
						<div class="row">
							<div class="col-sm-1" style="margin-left: inherit;">
								<input type="checkbox" name="iv_checkbox10" value="1" <?php if($iv_info->iv_checkbox10 =="1"){ echo "checked"; } ?> style="float: left; margin-top: auto;">
								<p>Other</p>
							</div>
							<div class="col-sm-8">
								<textarea style="" name="iv_other" ><?php echo $iv_info->iv_other ?></textarea>
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
						<input type="checkbox" name="iv_checkbox9" value="1" <?php if($iv_info->iv_checkbox9 =="1"){ echo "checked"; } ?> style="float: left; margin-top: auto;">
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
						<img src="<?php echo $rn_info->signature; ?>" id="iv_signature">
						<p></p>
						<label for="last-name" style="display: inline; width: initial;">Staff Signature</label>
					</div>
					<p></p>
					<div class="col-sm-6" style="text-align:center;">
						<input type="date" class="form-control" style="display: inline; width: initial;" name="iv_staff_sign_date" value="<?php echo $iv_info->iv_staff_sign_date ?>" />
						<p></p>
						<label for="last-name" style="">Date</label>
					</div>
				</div>
				

			</div>
			<br />
			<br />
			<br />
		</form>
		
		<button onclick="callfunc()" type="button" class="btn btn-primary btn-block" style="width: 20%; float: right;">Next</button>
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

function callfunc(){	debugger;
	$("#iv_form").val(JSON.stringify($("form.ivform").serializeObject()));
	$("#myModalRC").hide();
	return false;
}
</script>