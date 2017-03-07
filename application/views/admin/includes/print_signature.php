<div class="form-group" style="padding:15px;">
        <div class="fileinput fileinput-new" data-provides="fileinput">
        	<button id="myBtni9" class="btn btn-default btn-file">I9 Tax</button>
		<?php if (!empty($rn_info->i9_tax)): ?>
			<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
				<span class="fileinput-exists" style="display: block">Change</span>
				<input type="hidden" name="i9_tax" ng-model="q.i9_tax" value="<?php echo $rn_info->i9_tax?>">
				<input type="file" name="i9_tax" ng-model="q.i9_tax" >
			</span>
	
		<?php else: ?>
			<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
				<span class="fileinput-exists" >Change</span>
				<input type="file" name="i9_tax" ng-model="q.i9_tax"  >
			</span>
			<span class="fileinput-filename"></span>
			<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>
		<?php endif; ?>
        </div>
        
		


	<!--<span><?php echo btn_pdf('admin/rn/make_ipdf/' . $rn_info->uid); ?></span>-->
	<div id="myModali9" class="modal" style="z-index:9999;">
	
	  <!-- Modal content -->
		<div class="row">
			<div class="col-12">
				<div class="modal-content">
					<div class="modal-header">
						<span class="close">×</span>
						<!-- <h2>I9 Tax Form</h2> -->
					</div>
					<div id='Iform' class="modal-body" style="padding: 2px 36px;">
						
					</div>
					<div class="modal-footer">
						<h3> 
							<!--<span><?php echo btn_pdf('admin/rn/make_ipdf/' . $rn_info->uid); ?></span>-->
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
$(document).ready(function(evt){
	$("#myModali9 .close").click(function(e){
		$("#myModali9").hide();
	});
	$("#myBtni9").click(function(e){
                var sign = $('#esignature').val(); 
               
              	$("#myModali9").show();
		$("#Iform").load("<?php echo base_url()?>admin/discipline/iform/<?php echo $rn_info->uid ?>",'',function(response,status,xhr){
                      if(sign!="")
                        $("#electronic_signature").attr("src",sign);
                   });
		return false;
	});
});
</script>
</div>

<div class="form-group" style="padding:15px;">
	<div class="fileinput fileinput-new" data-provides="fileinput">
		<button id="Btn_W4" class="btn btn-default btn-file">W4 Form</button>
	        <!--  
	        <div class="fileinput fileinput-new" data-provides="fileinput">
		  <span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
	              <span class="fileinput-exists" >Change</span>                                            
		     <input type="file" name="w4_form" ng-model="q.w4_form" >
	              
		  </span> 
		   
		</div>  
	        <span class="fileinput-filename"></span> 
	-->
		<?php if (!empty($rn_info->w4_form)): ?>
			<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
				<span class="fileinput-exists" style="display: block">Change</span>
				<input type="hidden" name="w4_form" ng-model="q.w4_form" value="<?php echo $rn_info->w4_form?>">
				<input type="file" name="w4_form" ng-model="q.w4_form" >
			</span>
	
		<?php else: ?>
			<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
				<span class="fileinput-exists" >Change</span>
				<input type="file" name="w4_form" ng-model="q.w4_form"  >
			</span>
			<span class="fileinput-filename"></span>
			<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>
		<?php endif; ?>
	</div>
	
<script>
$(document).ready(function(evt){
	$("#Modal_W4 .close").click(function(e){
		$("#Modal_W4").hide();
	});  
	$("#Btn_W4").click(function(e){ debugger;
                    var sign = $('#esignature').val(); 
			$("#myModali9").show();
		$("#Iform").load("<?php echo base_url()?>admin/discipline/wform/<?php echo $rn_info->uid ?>",'',function(response,status,xhr){
                     if(sign!="")
                       $("#w4esign").attr("src",sign);
                   });
		return false;
	});
});
</script>
</div>

<div class="form-group" style="padding:15px;">
	<div class="fileinput fileinput-new" data-provides="fileinput">
		<button id="Btn_SOA" class="btn btn-default btn-file">Statement of Acknowledgement</button>
	<!--
	        <div class="fileinput fileinput-new" data-provides="fileinput">
		  <span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
	              <span class="fileinput-exists" >Change</span>                                            
		     <input type="file" name="state_of_ack" ng-model="q.state_of_ack" >
	              
		  </span> 
		   
		</div>  
	        <span class="fileinput-filename"></span> 
	-->
		<?php if (!empty($rn_info->state_of_ack)): ?>
			<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
				<span class="fileinput-exists" style="display: block">Change</span>
				<input type="hidden" name="state_of_ack" ng-model="q.state_of_ack" value="<?php echo $rn_info->state_of_ack?>">
				<input type="file" name="state_of_ack" ng-model="q.state_of_ack" >
			</span>
	
		<?php else: ?>
			<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
				<span class="fileinput-exists" >Change</span>
				<input type="file" name="state_of_ack" ng-model="q.state_of_ack"  >
			</span>
			<span class="fileinput-filename"></span>
			<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>
		<?php endif; ?>
	</div>


	<div id="Modal_SOA" class="modal"  style="z-index:9999;" >
		<div class="row">
			<div class="col-12">
				<div class="modal-content">
					<div class="modal-header">
						<span class="close">×</span>
						<h2>Statement of acknowledgement Form</h2>
					</div>
					<div id="SOAForm" class="modal-body">
						
					</div>
					<div class="modal-footer">
						<h3>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
$(document).ready(function(evt){
	$("#Modal_SOA .close").click(function(e){
		$("#Modal_SOA").hide();
	});
	$("#Btn_SOA").click(function(e){
                 var sign = $('#esignature').val(); 
		$("#myModali9").show();
		$("#Iform").load("<?php echo base_url()?>admin/discipline/SOA/<?php echo $rn_info->uid ?>",'',function(response,status,xhr){
                     if(sign!="")
                       $("#soa_esign").attr("src",sign);
                   });
		return false;
	});
});
</script>
</div>

<div class="form-group" style="padding:15px;">
	<div class="fileinput fileinput-new" data-provides="fileinput">
		<button id="Btn_BC" class="btn btn-default btn-file">Background Check</button>
	<!--
	        <div class="fileinput fileinput-new" data-provides="fileinput">
		  <span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
	              <span class="fileinput-exists" >Change</span>                                            
		     <input type="file" name="back_check" ng-model="q.back_check" >
	              
		  </span> 
		   
		</div>  
	        <span class="fileinput-filename"></span> 
	-->
		<?php if (!empty($rn_info->back_check)): ?>
			<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
				<span class="fileinput-exists" style="display: block">Change</span>
				<input type="hidden" name="back_check" ng-model="q.back_check" value="<?php echo $rn_info->back_check?>">
				<input type="file" name="back_check" ng-model="q.back_check" >
			</span>
	
		<?php else: ?>
			<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
				<span class="fileinput-exists" >Change</span>
				<input type="file" name="back_check" ng-model="q.back_check"  >
			</span>
			<span class="fileinput-filename"></span>
			<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>
		<?php endif; ?>
	</div>



	<div id="Modal_BC" class="modal"  style="z-index:9999;" >
		<div class="row">
			<div class="col-12">
				<div class="modal-content">
					<div class="modal-header">
						<span class="close">×</span>
						<h2>Background Check Form</h2>
					</div>
					<div id="BCForm" class="modal-body">
						
					</div>
					<div class="modal-footer">
						<h3>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
$(document).ready(function(evt){
	$("#Modal_BC .close").click(function(e){
		$("#Modal_BC").hide();
	});
	$("#Btn_BC").click(function(e){
                var sign = $('#esignature').val(); 
		$("#myModali9").show();
		$("#Iform").load("<?php echo base_url()?>admin/discipline/background/<?php echo $rn_info->uid ?>",'',function(response,status,xhr){
                     if(sign!="")
                       $("#bc_esign").attr("src",sign);
                   });
		return false;
	});
});
</script>
</div>

<div class="form-group" style="padding:15px;">
	<div class="fileinput fileinput-new" data-provides="fileinput">
		<button id="Btn_AES" class="btn btn-default btn-file">Electronic Signature Policy and Agreement</button>
	<!--
	        <div class="fileinput fileinput-new" data-provides="fileinput">
		  <span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
	              <span class="fileinput-exists" >Change</span>                                            
		     <input type="file" name="electronic_signature" ng-model="q.electronic_signature" >
	              
		  </span> 
		   
		</div>  
	        <span class="fileinput-filename"></span> 
	-->
		<?php if (!empty($rn_info->electronic_signature)): ?>
			<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
				<span class="fileinput-exists" style="display: block">Change</span>
				<input type="hidden" name="electronic_signature" ng-model="q.electronic_signature" value="<?php echo $rn_info->electronic_signature?>">
				<input type="file" name="electronic_signature" ng-model="q.electronic_signature" >
			</span>
	
		<?php else: ?>
			<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
				<span class="fileinput-exists">Change</span>
				<input type="file" name="electronic_signature" ng-model="q.electronic_signature"  >
			</span>
			<span class="fileinput-filename"></span>
			<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>
		<?php endif; ?>
	</div>

	<div id="Modal_AES" class="modal"  style="z-index:9999;" >
		<div class="row">
			<div class="col-12">
				<div class="modal-content">
					<div class="modal-header">
						<span class="close">×</span>
						<h2>Electronic Signature Policy and Agreement</h2>
					</div>
					<div id="AESForm" class="modal-body">
						
					</div>
					<div class="modal-footer">
						<h3>
							<!--<?php echo btn_pdf('admin/discipline/make_ipdf/' . $rn_info->uid); ?>-->
						</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
$(document).ready(function(evt){
	$("#Modal_AES .close").click(function(e){
		$("#Modal_AES").hide();
	});
	$("#Btn_AES").click(function(e){
                var sign = $('#esignature').val(); 
			$("#myModali9").show();
		$("#Iform").load("<?php echo base_url()?>admin/discipline/AES/<?php echo $rn_info->uid ?>",'',function(response,status,xhr){
                      if(sign!="")
                       $("#aes_esign").attr("src",sign);
                       $("#aes_esign1").attr("src",sign);
                   });
		return false;
	});
});
</script>
</div>
