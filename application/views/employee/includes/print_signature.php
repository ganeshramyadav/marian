<div class="form-group" style="padding:15px;">
	<button id="myBtni9" class="btn btn-default btn-file">I9 Tax</button>
        
        <div class="fileinput fileinput-new" data-provides="fileinput">
	  <span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
              <span class="fileinput-exists" >Change</span>                                            
	     <input type="file" name="i9_tax" ng-model="q.i9_tax" >
              
	  </span> 
	   
	</div>  
        <span class="fileinput-filename"></span> 
		


	<!--<span><?php echo btn_pdf('admin/rn/make_ipdf/' . $rn_info->uid); ?></span>-->
	<div id="myModali9" class="modal" style="z-index:9999;">
	
	  <!-- Modal content -->
		<div class="row">
			<div class="col-12">
				<div class="modal-content">
					<div class="modal-header">
						<span class="close">×</span>
						 <h2>Form</h2>
					</div>
					<div id='Iform' class="modal-body">
						
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
$(document).ready(function(evt){	debugger;
	$("#myModali9 .close").click(function(e){
		$("#myModali9").hide();
	});
	$("#myBtni9").click(function(e){	debugger;
                var sign = $('#esignature').val(); 
               
              	$("#myModali9").show();
		$("#Iform").load("<?php echo base_url()?>employee/dashboard/iform/<?php echo $employee_details->uid ?>",'',function(response,status,xhr){
                      if(sign!="")
                        $("#electronic_signature").attr("src",sign);
                   });
		return false;
	});
});
</script>
</div>

<div class="form-group" style="padding:15px;">
	<button id="Btn_W4" class="btn btn-default btn-file">W4 Form</button>
          
        <div class="fileinput fileinput-new" data-provides="fileinput">
	  <span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
              <span class="fileinput-exists" >Change</span>                                            
	     <input type="file" name="w4_form" ng-model="q.w4_form" >
              
	  </span> 
	   
	</div>  
        <span class="fileinput-filename"></span> 

	
<script>
$(document).ready(function(evt){
	$("#Modal_W4 .close").click(function(e){
		$("#Modal_W4").hide();
	});  
	$("#Btn_W4").click(function(e){ debugger;
                    var sign = $('#esignature').val(); 
			$("#myModali9").show();
		$("#Iform").load("<?php echo base_url()?>employee/dashboard/wform/<?php echo $employee_details->uid ?>",'',function(response,status,xhr){
                     if(sign!="")
                       $("#w4esign").attr("src",sign);
                   });
		return false;
	});
});
</script>
</div>

<div class="form-group" style="padding:15px;">
	<button id="Btn_SOA" class="btn btn-default btn-file">Statement of acknowledgement</button>

        <div class="fileinput fileinput-new" data-provides="fileinput">
	  <span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
              <span class="fileinput-exists" >Change</span>                                            
	     <input type="file" name="state_of_ack" ng-model="q.state_of_ack" >
              
	  </span> 
	   
	</div>  
        <span class="fileinput-filename"></span> 


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
		$("#Iform").load("<?php echo base_url()?>employee/dashboard/SOA/<?php echo $employee_details->uid ?>",'',function(response,status,xhr){
                     if(sign!="")
                       $("#soa_esign").attr("src",sign);
                   });
		return false;
	});
});
</script>
</div>

<div class="form-group" style="padding:15px;">
	<button id="Btn_BC" class="btn btn-default btn-file">Background Check</button>

        <div class="fileinput fileinput-new" data-provides="fileinput">
	  <span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
              <span class="fileinput-exists" >Change</span>                                            
	     <input type="file" name="back_check" ng-model="q.back_check" >
              
	  </span> 
	   
	</div>  
        <span class="fileinput-filename"></span> 


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
		$("#Iform").load("<?php echo base_url()?>employee/dashboard/background/<?php echo $employee_details->uid ?>",'',function(response,status,xhr){
                     if(sign!="")
                       $("#bc_esign").attr("src",sign);
                   });
		return false;
	});
});
</script>
</div>

<div class="form-group" style="padding:15px;">
	<button id="Btn_AES" class="btn btn-default btn-file">Electronic Signature Policy and Agreement</button>

        <div class="fileinput fileinput-new" data-provides="fileinput">
	  <span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
              <span class="fileinput-exists" >Change</span>                                            
	     <input type="file" name="electronic_signature" ng-model="q.electronic_signature" >
              
	  </span> 
	   
	</div>  
        <span class="fileinput-filename"></span> 

	<div id="Modal_AES" class="modal"  style="z-index:9999;" >
		
	</div>
<script>
$(document).ready(function(evt){
	$("#Modal_AES .close").click(function(e){
		$("#Modal_AES").hide();
	});
	$("#Btn_AES").click(function(e){
                var sign = $('#esignature').val(); 
			$("#myModali9").show();
		$("#Iform").load("<?php echo base_url()?>employee/dashboard/AES/<?php echo $employee_details->uid ?>",'',function(response,status,xhr){
                      if(sign!="")
                       $("#aes_esign").attr("src",sign);
                       $("#aes_esign1").attr("src",sign);
                   });
		return false;
	});
});
</script>
</div>
