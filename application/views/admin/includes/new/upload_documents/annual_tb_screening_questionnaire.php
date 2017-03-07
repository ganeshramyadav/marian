	<div class="container" style="width:100%; padding-left: 2em; padding-right: 2em;">
		<div class="section-header row">
			<h2>ANNUAL TB SCREENING QUESTIONNAIRE</h2>	
		</div>
		
		<style>
			label{
				font-weight: bold;
			}
		</style>
		
		
		<hr class="heavy"/>
			<br />
		<form method="post" class="tbform" action="">
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">NAME</label>
				</div>
				<div class="col-sm-6">
					<input class="form-control" style="" name="tb_name" value="<?php echo $tb_info->tb_name?>"/>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<label for="last-name" style="float:left;">DATE OF POSITIVE TB SKIN TEST</label>
				</div>
				<div class="col-sm-6">
					<input type="date" class="form-control" style="" name="tb_skin_test_date" value="<?php echo $tb_info->tb_skin_test_date?>"/>
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
								<td><input type="radio" name="classification" style="float: right;" value="1" <?php if($tb_info->classification =="1"){ echo "checked"; } ?> ></td>
								<td>Pre-Employment</td>
							</tr>
							<tr>
								<td><input type="radio" name="classification" style="float: right;" value="2" <?php if($tb_info->classification =="2"){ echo "checked"; } ?> ></td>
								<td>Annual Testing</td>
							</tr>
							<tr>
								<td><input type="radio" name="classification"  style="float: right;" value="3" <?php if($tb_info->classification =="3"){ echo "checked"; } ?> ></td>
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
							<td style="text-align:center;"><input type="radio" name="annual_tb_1" id="TB1" value="1" <?php if($tb_info->annual_tb_1 =="1"){ echo "checked"; } ?> ></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_1" id="TB11" value="2" <?php if($tb_info->annual_tb_1 =="2"){ echo "checked"; } ?> ></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Unexplained fever</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_2" id="TB2" value="1" <?php if($tb_info->annual_tb_2 =="1"){ echo "checked"; } ?> ></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_2" id="TB22" value="2" <?php if($tb_info->annual_tb_2 =="2"){ echo "checked"; } ?> ></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Loss of weight</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_3" id="TB3" value="1" <?php if($tb_info->annual_tb_3 =="1"){ echo "checked"; } ?> ></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_3" id="TB33" value="2" <?php if($tb_info->annual_tb_3 =="2"){ echo "checked"; } ?> ></td>
						</tr>
						<tr>
							<td>4</td>
							<td>Fatigue</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_4" id="TB4" value="1" <?php if($tb_info->annual_tb_4 =="1"){ echo "checked"; } ?> ></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_4" id="TB44" value="2" <?php if($tb_info->annual_tb_4 =="2"){ echo "checked"; } ?> ></td>
						</tr>
						<tr>
							<td>5</td>
							<td>Night sweats</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_5" id="TB5" value="1" <?php if($tb_info->annual_tb_5 =="1"){ echo "checked"; } ?> ></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_5" id="TB55" value="2" <?php if($tb_info->annual_tb_5 =="2"){ echo "checked"; } ?> ></td>
						</tr>
						<tr>
							<td>6</td>
							<td>
								<span style="float: left;">Exposure to known case of infectious TB if yes, when and where</span>
								<input class="form-control" style="width: 37%;" name="tb_infectious" value="<?php echo $tb_info->tb_infectious?>"/>
							</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_6" id="TB6" value="1" <?php if($tb_info->annual_tb_6 =="1"){ echo "checked"; } ?> ></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_6" id="TB66" value="2" <?php if($tb_info->annual_tb_6 =="2"){ echo "checked"; } ?> ></td>
						</tr>
						<tr>
							<td>7</td>
							<td>Blood streaked sputum</td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_7" id="TB7" value="1" <?php if($tb_info->annual_tb_7 =="1"){ echo "checked"; } ?> ></td>
							<td style="text-align:center;"><input type="radio" name="annual_tb_7" id="TB77" value="2" <?php if($tb_info->annual_tb_7 =="2"){ echo "checked"; } ?> ></td>
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
					
					<img src="<?php echo $rn_info->signature; ?>" style="max-width:100%;">
					<p></p>
					<label for="last-name" style="display: inline; width: initial;">Signature</label>
				</div>
				<p></p>
				<div class="col-sm-6" style="text-align:center;">
					<input type="date" class="form-control" style="display: inline; width: initial;" name="tb_sign_date" value="<?php echo $tb_info->tb_sign_date?>"/>
					<p></p>
					<label for="last-name" style="">Date</label>
				</div>
			</div>
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
	$("#tb_form").val(JSON.stringify($("form.tbform").serializeObject()));
	$("#myModalRC").hide();
	return false;
}
</script>
