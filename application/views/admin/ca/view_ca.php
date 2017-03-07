	<?php
		// echo "<pre>"; print_r($data); echo "</pre>";
		// echo "<pre>"; print_r($data1); echo "</pre>";
		// echo "<pre>"; print_r($info); echo "</pre>";
		// echo "<pre>"; print_r($name); echo "</pre>";
		
	?>
	
	<div class="row">  <!-- ***** Annual Competency form start ***** -->
	  <div class="wrap-fpanel">
		<div class="text-center">
		  <strong>ANNUAL COMPETENCY ASSESSMENT SKILLS CHECKLIST LICENSED PRACTICAL/VOCATIONAL NURSE</strong>
		</div>		
	  </div>
	
	</div> <br />
    
	<div class="row">
		<div class="panel-body ">
			<div class="row">
				<div class="col-sm-6">
					<table>
						<tr>
							<td style="width:200px;">Name:</td>
							<td><?php echo $name;?></td>
						</tr>
						<tr>
							<td>Date of Employment:</td>
							<td><?php echo $info->date_of_employment;?></td>
						</tr>
						<tr>
							<td>Date Completed:</td>
							<td><?php echo $info->date_of_completion;?></td>
						</tr>
							  
					</table>
				</div>
			</div>

			<br/>
			<p class="text-center">Verbal Test=<b>V*</b>Written Test=<b>W*</b>Observation=<b>O*</b>Demostration=<b>D*</b>Special Training=<b>ST</b></p>		
			<?php
				if($disciplineid == 1){
					$this->load->view('admin/ca/includes/view/ca'.$disciplineid.'.php'); 
				}else{
					$this->load->view('admin/ca/includes/view/loading2.gif');
					
				}
				
			?>
		</div>
	</div>    






<script type="text/javascript">
    function printDiv(printableArea) {
        var printContents = document.getElementById(printableArea).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

