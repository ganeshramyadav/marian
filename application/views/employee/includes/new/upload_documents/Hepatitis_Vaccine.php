	<div class="container" style="width:100%; padding-left: 2em; padding-right: 2em;">
		<div class="section-header row">
			<h2>REFUSAL TO CONSENT FOR SCREENING AND IMMUNIZATION AGAINST HEPATITIS B VIRUS</h2>
				
		</div>
		
		<style>
			label{
				font-weight: bold;
			}
		</style>
		
		
		<hr class="heavy"/>
			<br />
		<form method="post" class="hvform" action="#">
			<div class="row">
				<span>
					I HEREBY ACKOWLEDGE that I have been informed of the availability of screening and immunization for Hepatitis B virus, and have been advised that the testing procedure and vaccination is indicated for me because of the possibility that I may be exposed to Hepatitis B in the course and scope of my employment.  I have also been advised as to the potentially dangerous risks and consequences of my failure to be tested and received vaccination at this time.  Notwithstanding this advice, I hereby request that I not be tested.  I further release all individuals who have advised me concerning the testing procedure and vaccine, and each other person participating in the testing and vaccination program, from any responsibility whatsoever for unfavorable or harmful results caused by my refusal to permit the testing and/or vaccination for Hepatitis B.
				</span>
				<br />
			</div>
			<br />
			
			
			<div class="row">
				<div class="col-sm-6" style="text-align:center;">
					<img src="" style="max-width:100%;" alt="Administrator’s signature">
					<p></p>
					<label for="last-name" style="display: inline; width: initial;">ADMINISTRATOR</label>
				</div>
				<p></p>
				<div class="col-sm-6" style="text-align:center;">
					<input id="hv_date1" name="hv_date1" value="<?php echo $hv_info->hv_date1?>" type="date" class="form-control" style="display: inline; width: initial;"/>
					<p></p>
					<label for="hv_date1" style="">Date</label>
				</div>
			</div>
		</form>
                <button onclick="callfunc()" type="button" class="btn btn-primary btn-block" style="width: 20%; float: right;">Next</button>
	</div>
		
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
	$('#hv_form').val(JSON.stringify($('form.hvform').serializeObject()));
	$("#myModalRC").hide();
	return false;
}
</script>