<?php include_once 'asset/admin-ajax.php'; ?>

<?php echo message_box('success'); ?>
<?php echo message_box('error'); ?>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script> 
<script src="<?php echo base_url() ?>asset/js/bootstrap-multiselect.js"></script>
<link href="<?php echo base_url() ?>asset/css/bootstrap-multiselect.css" rel="stylesheet"/>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6G9NuwDMIOy4XsaSZ3sThm4rAS2Oddkk"></script>

<div ng-app="myApp"  ng-controller="FormController">

<form role="form"  id="employee-form" enctype="multipart/form-data" action="<?php echo base_url() ?>admin/rn/save_rn/<?php
if (!empty($rn_info->uid)) {
    echo $rn_info->uid;
}?>"  method="post" class="form-horizontal form-groups-bordered">    

<div class="row">
        <?php
		
			// echo "<pre>"; print_r($rn_info); echo "</pre>";
		
		?>
        
         <!-- ************************ Personal Information Panel Start ************************-->
         
         <input type="hidden" name="discipline_id" value="2" class="form-control">
		 <input type="hidden" name="agency_id" value="<?php echo $rn_info->user_id; ?>" class="form-control">
         <div class="col-sm-6">
            <div class="panel panel-info">
                           <div class="panel-heading">
                             <h4 class="panel-title">Personal Details</h4>
                           </div>
                   <div class="panel-body ">
                        
                        <div class="">
                           <label class="control-label" >First Name <span class="required">*</span></label>
                           <input type="text" name="first_name" ng-model="q.first_name" class="form-control">
                       </div>
                       
                       <div class="">
                        <label class="control-label" >Last Name<span class="required">*</span></label>
                        <input type="text" name="last_name" ng-model="q.last_name" class="form-control">
                       </div>
                    
                    
                      <div class="">
                        <label class="control-label" >Date Of Birth <span class="required"> *</span></label>
                         <div class="input-group">
                             <input type="text" name="date_of_birth" ng-model="q.date_of_birth"  class="form-control datepicker" data-format="yyy-mm-dd" style="z-index:0;">
                             <div class="input-group-addon">
                                <a href="#"><i class="entypo-calendar"></i></a>
                             </div>
                         </div>
                     </div>
					 
					
                     
                     
                     <div class="">
                        <label class="control-label" ><?php echo $this->language->from_body()[12][4] ?> <span class="required"> *</span></label>
                        <select name="gender" ng-model="q.gender" class="form-control" >
                            <option value="">Select Gender ...</option>
                            <option value="Male" <?php
                            if (!empty($rn_info->gender)) {
                                echo $rn_info->gender == 'Male' ? 'selected' : '';
                            }
                            ?>>Male</option>
                            <option value="Female" <?php
                            if (!empty($rn_info->gender)) {
                                echo $rn_info->gender == 'Female' ? 'selected' : '';
                            }
                            ?>>Female</option>
                        </select>
                    </div>


					<?php
						// foreach ($all_language as $v_country){
							// echo "<pre>"; print_r($v_country); echo "</pre>"; 
						// }
						// echo "<pre>"; print_r($all_language); echo "</pre>"; 
						
						// echo "<pre>"; print_r($all_country); echo "</pre>";
						// echo "<pre>"; print_r($rn_info); echo "</pre>";
						// echo "country_id";
					?>
 
   
                    <div class="">
                        <label class="control-label"><?php echo $this->language->from_body()[12][7] ?><span class="required"> *</span></label>
                        <!-- praveen code for multiselect -->
                        
						<select name="nationality[]" id="language-spoken" ng-model="q.nationality" multiple="multiple" class="form-control col-sm-5" >
							<option value="" >Select Language</option>
							
								<?php foreach ($all_language as $v_language) : ?>
									<option value="<?php echo $v_language->id ?>" <?php
										if (!empty($rn_info->language_id)) {
											echo $v_language->id == $rn_info->nationality ? 'selected' : '';
										}
										?>><?php echo $v_language->language_name ?>
									</option>
								<?php endforeach; ?>
							<!--
                                <option value="1" ><?php echo 'American'; ?></option>
                                <option value="2" ><?php echo 'Spanish'; ?></option>
                                <option value="3" ><?php echo 'Mexican'; ?></option>
                                <option value="4" ><?php echo 'Mandarin Chinese'; ?></option>
                                <option value="5" ><?php echo 'Cantonese Chinese'; ?></option>
							-->
                        </select>
                    </div>

					<div class="form-group col-sm-6">
						<label for="field-1" class="control-label"><?php echo $this->language->from_body()[12][9] ?> <span class="required">*</span></label>
						<div class="input-group">     
							<input type="hidden" name="old_path" ng-model="q.old_path" value="<?php
							if (!empty($rn_info->photo_a_path)) {
								echo $rn_info->photo_a_path;
							}
							?>">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
									<?php if (!empty($rn_info->photo)): ?>
									<img src="<?php echo base_url() . $rn_info->photo; ?>" >  
									<?php else: ?>
									<img src="http://placehold.it/350x260" alt="Please Connect Your Internet">     
									<?php endif; ?>                                 
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;">
									<input type="file" value="<?php if (!empty($rn_info)) echo base_url() . $rn_info->photo; ?>" name="photo" id="photo" ng-model="q.photo" size="20" />
								</div>
								<div>
									<span class="btn btn-default btn-file">
									<span class="fileinput-new"><input type="file"  name="photo" ng-model="q.photo" size="20" /></span>
									<span class="fileinput-exists">Change</span>    
									</span>
									<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
							<div id="valid_msg" style="color: #e11221">
							</div>
						</div>
					</div>
					<?php
						// echo "<pre>"; print_r($rn_info); echo "</pre>";
					?>
					<div class="form-group col-sm-6">
						<label for="field-1" class="control-label"><?php echo "e Signature"; ?> <span class="required">*</span></label>
						<div class="input-group">     
							<input type="hidden" name="old_path" ng-model="q.old_path" value="<?php
							if (!empty($rn_info->signature_path)) {
								echo $rn_info->signature_path;
							}
							?>">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
									<?php if (!empty($rn_info->signature)): ?>
									<img src="<?php echo base_url() . $rn_info->signature; ?>" >  
									<?php else: ?>
									<img src="http://placehold.it/350x260" alt="Please Connect Your Internet">     
									<?php endif; ?>                                 
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 150px; max-height: 150px;">
									<input type="file" value="<?php if (!empty($rn_info)) echo base_url() . $rn_info->signature; ?>" name="signature" id="signature" ng-model="q.signature" size="20" />
								</div>
								<div>
									<span class="btn btn-default btn-file">
									<span class="fileinput-new"><input type="file"  name="signature" ng-model="q.signature" size="20" /></span>
									<span class="fileinput-exists">Change</span>    
									</span>
									<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
							<div id="valid_msg" style="color: #e11221">
							</div>
						</div>
					</div>
                   
                        </div>
                </div>
            </div>
                    
			 <div class="col-sm-6">
			  <div class="panel panel-info">
				  <div class="panel-heading">
					  <h4 class="panel-title">Contact Details</h4>
				  </div>
			  <div class="panel-body ">
			
			
					<div class="">
						<label class="control-label" >Permanent Address<span class="required"> *</span></label>
						<textarea id="present"  name="present_address" ng-model="q.present_address" class="form-control"><?php
					if (!empty($rn_info->present_address)) {
						echo $rn_info->present_address;
					}
					?></textarea>
						
					</div>
				 
					<div class="">
						<label class="control-label" >Address<span class="required"> *</span></label>
						<input type="text" value="<?php
				if (!empty($rn_info->permanent)) {
					echo $rn_info->permanent;
				}
				?>" name="permanent" ng-model="q.permanent" value="" class="form-control">
					</div>
					
					<div class="">
					   <label class="control-label" >Service Area<span class="required"> *</span></label>
						<select name="service_country" ng-model="q.service_country" class="form-control col-sm-5" >
							<option value="" >Select Country...</option>
						   <?php foreach ($all_country as $v_country) : ?>
						<option value="<?php echo $v_country->idCountry ?>" <?php
						if (!empty($rn_info->country_id)) {
							echo $v_country->idCountry == $rn_info->service_country ? 'selected' : '';
							 
						}
						?>><?php echo $v_country->countryName ?></option>
							<?php endforeach; ?>
						</select>
						
					</div>
					
					<?php
						
						// echo "<pre>"; print_r($all_country); echo "</pre>";
						// echo "<pre>"; print_r($cityarray); echo "</pre>";
						// echo "<pre>"; print_r($all_city); echo "</pre>";
						// echo "<pre>"; print_r($all_county); echo "</pre>";
						// echo "<pre>"; print_r($all_city_info); echo "</pre>";
						
					?>
					
					
					
					<div class="">
						<select name="service_state" ng-model="q.service_state"   class="form-control col-sm-5"  >
							<option value="" >Select State</option>
							<option value="1" >California</option>
						</select>
						
						<!-- <select name="service_county"  ng-model="q.service_county" class="form-control col-sm-5"  class="form-control col-sm-5" id="countyval" onChange="getState();"> -->
						<select name="service_county"  ng-model="q.service_county" class="form-control col-sm-5"  class="form-control col-sm-5" id="countyval" onChange="getState();">
							<option value="" >Select County</option>
                                                            <?php foreach ($all_county as $v_county) : ?>
						<option value="<?php echo $v_county->id ?>" <?php
						if (!empty($rn_info->county_id)) {
							echo $v_county->id == $rn_info->service_county ? 'selected' : '';
						}
						?>><?php echo $v_county->name ?></option>
							<?php endforeach; ?>
							
						</select>
						
						<!-- <select name="service_city[]" id="service_city" ng-model="q.service_city" multiple="multiple" class="form-control col-sm-5" id="city-list" onChange="getCityGoogleMap();"> -->
						<select name="service_city[]" id="service_city" ng-model="q.service_city" multiple="multiple" class="form-control col-sm-5" id="city-list" >
							<option value="" >Select City</option>
							
							<?php if(!empty($all_city)){
								foreach ($all_city as $v_city) : ?>
									<option value="<?php echo $v_city->id ?>" <?php
									if (!empty($rn_info->city_id)) {
										foreach($cityarray as $city_array){
											echo $v_city->id == $city_array ? 'selected' : '';
										}
									}
									?>><?php echo $v_city->name ?></option>
								<?php endforeach; 
							} ?>
						</select>
					</div>
                                               <!-- col-sm-6 -->
			           <div class=""> <label class="control-label" >Service Area Map</label>
			             
                                   </div> 
			   
<script type="text/javascript">
debugger;
var map;
var global_markers = [];    
var markers;

var infowindow = new google.maps.InfoWindow({});

function getState() { debugger;	
	var val = $("#countyval").val();
	$.ajax({
		type: "POST",
		dataType: 'json',
		url: "<?php echo base_url(); ?>admin/rn/location_list/",
		data:'id='+val,
		success: function(data){
			// initialize();
			debugger;
			//console.log("Test "+data);
			
			var htmlvalue = "";
			for (key in data){ debugger;
				var id = data[key].id;
				var name = data[key].name;
				htmlvalue += "<option id='' value='"+ id +"' >"+ name +"</option>";
			}
			debugger;
			$("#service_city").html('');
			$("#service_city").html(htmlvalue);
			$("#service_city").multiselect('destroy');
			$("#service_city").multiselect();
		}
	});
}
</script>
<script type="text/javascript">
/* 
   
  //initialize(latitude,longitude);
  

//var map;
//var global_markers = [];    
//var markers;

//var infowindow = new google.maps.InfoWindow({});

function initialize(latitude,longitude) { debugger;
    geocoder = new google.maps.Geocoder();
  //  var latlng = new google.maps.LatLng(40.77627, -73.910965);
    var latlng = new google.maps.LatLng(latitude, longitude);
    var myOptions = {
        zoom: 13,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    markers = [[latitude, longitude, 'trialhead0']];
    addMarker();
}

function addMarker() {
    for (var i = 0; i < markers.length; i++) {
        // obtain the attribues of each marker
        var lat = parseFloat(markers[i][0]);
        var lng = parseFloat(markers[i][1]);
        var trailhead_name = markers[i][2];

        var myLatlng = new google.maps.LatLng(lat, lng);

        var contentString = "<html><body><div><p><h2>" + trailhead_name + "</h2></p></div></body></html>";

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: "Coordinates: " + lat + " , " + lng + " | Trailhead name: " + trailhead_name
        });

        marker['infowindow'] = contentString;

        global_markers[i] = marker;

        google.maps.event.addListener(global_markers[i], 'click', function() {
            infowindow.setContent(this['infowindow']);
            infowindow.open(map, this);
        });
    }
}

function getState() { debugger;
  var val = $("#countyval").val();
	$.ajax({
	type: "POST",
	dataType: 'json',
	url: "<?php echo base_url(); ?>admin/rn/location_list/",
	data:'id='+val,
	success: function(data){ 
        // initialize();
	debugger;
	//console.log("Test "+data);
	    var htmlvalue = "";
	       for (key in data){ debugger;
		     var id = data[key].id;
			 var name = data[key].name;
			  htmlvalue += "<option id='' value='"+ id +"' >"+ name +"</option>";
		      
		   }
			$("#city-list").html(htmlvalue);
		}
	});
}

function getCityGoogleMap(){
  var val = $("#city-list").val();
  $.ajax({
	type: "POST",
	dataType: 'json',
	url: "<?php echo base_url(); ?>admin/rn/service_areamap/",
	data:'id='+val,
	success: function(data){ 
         //initialize();
	debugger;
	   for (key in data){ debugger;
		     var lat = data[key].lat;
		     var lng = data[key].lng;
			
		      
		   }
	   initialize(lat, lng);
	}
   });
  
}

*/
</script>
			   
					<!--
					<div class="">
						<label class="control-label" >City<span class="required"> *</span></label>
						<input type="text" name="city" ng-model="q.city" value="<?php
				if (!empty($rn_info->city)) {
					echo $rn_info->city;
				}
				?>" class="form-control" >
					</div>
					-->	 
					<div class="">
						<label class="control-label" >Phone</label>
						<input type="text" name="phone" ng-model="q.phone" value="<?php
				if (!empty($rn_info->phone)) {
					echo $rn_info->phone;
				}
				?>" class="form-control" >
					</div>
					
					
					<div class="">
						<label class="control-label" >Mobile<span class="required"> *</span></label>
						<input type="text" name="mobile" ng-model="q.mobile" value="<?php
				if (!empty($rn_info->phone)) {
					echo $rn_info->phone;
				}
				?>" class="form-control">
					</div>


                                    <div class="">
                                       <label class="control-label" >Email <span class="required"> *</span></label>
                                        <input type="text" name="email" ng-model="q.email"   class="form-control">
                                    </div>
			       </div>
		  
			     </div>
			 </div>
         
         
			<div class="col-sm-6"><!-- ***** Printing for signature Start ***** -->
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">
							<h4 class="panel-title">Printing For signature</h4>
						</div>
					</div>
					<div class="panel-body">
						<?php $this->load->view('admin/includes/print_signature.php'); ?>
					</div>
				</div>
			</div>   
         
         
        
         <div class="col-sm-6"><!-- ************************ Employee Documents Start ******************************* -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4 class="panel-title"><?php echo $this->language->from_body()[12][18] ?></h4>
                    </div>
                </div>
                <div class="panel-body">
				 <!-- Interview Date -->
                     <div class="">
		                            <label class="control-label" >Interview Date</label>
		                            <div class="input-group">
		                             <input type="text" name="date_of_interview"  ng-model="q.date_of_interview"  value="" class="form-control datepicker" data-format="yyy-mm-dd" style="z-index:0;">
		                             <div class="input-group-addon">
		                                <a href="#"><i class="entypo-calendar"></i></a>
		                             </div>
                                     </div> 
					  </div>	
					  
				  <!-- Official status -->
                       <div class="">
                            <label class="control-label" >Official Status<span class="required"> *</span></label>
						   <select name="official_status" ng-model="q.official_status"   class="form-control col-sm-5"  >
							   <option value="" >Select Status</option>
							   <option value="pending"  <?php
						if (!empty($rn_info->official_status)) {
							echo $rn_info->official_status == 'pending'  ? 'selected' : '';
							 
						}
						?> >Pending</option>
						           <option value="active"  <?php
						if (!empty($rn_info->official_status)) {
							echo $rn_info->official_status == 'active'  ? 'selected' : '';
							 
						}
						?> >Active</option>
						          <option value="inactive"  <?php
						if (!empty($rn_info->official_status)) {
							echo $rn_info->official_status == 'inactive'  ? 'selected' : '';
							 
						}
						?> >Pending</option>
							   
						    </select>
					    </div>
				   <!--   Date of Hire -->	  
				       <div class="">
		                            <label class="control-label" >Date of Hire</label>
		                            <div class="input-group">
		                             <input type="text" name="date_of_hire"  ng-model="q.date_of_hire"  value="" class="form-control datepicker" data-format="yyy-mm-dd" style="z-index:0;">
		                             <div class="input-group-addon">
		                                <a href="#"><i class="entypo-calendar"></i></a>
		                             </div>
                                     </div> 
					  </div>



                                   <!--  <button id="myBtn22" class="btn btn-default btn-file">Print</button> -->


               	   <!-- Resume --> 
				  
	                    <div class="" style="padding:15px;">
							<div class="">
								<div class="form-group">
									<label for="field-1" class="col-sm-4 control-label">Resume</label>
									
									<!-- <input type="hidden" name="resumes_path" ng-model="q.resumes_path" value="<?php
									if (!empty($rn_info->resumes_path)) {
										echo $rn_info->resumes_path;
									}
									?>"> -->
									<div class="col-sm-8">
										<div class="fileinput fileinput-new" data-provides="fileinput">
											<?php if (!empty($rn_info->resumes)): ?>
												<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Select file</span>
													<span class="fileinput-exists" style="display: block">Change</span>
													<input type="hidden" name="resumes" ng-model="q.resumes" value="<?php echo $rn_info->resumes ?>">
													<input type="file" name="resumes" ng-model="q.resumes" >
												</span>                                    
		<!-- <span class="fileinput-filename"> <?php echo $rn_info->resumes_filename ?></span> -->                                         
											<?php else: ?>
												<span class="btn btn-default btn-file"><span class="fileinput-new" >Select file</span>
								<span class="fileinput-exists" >Change</span>                                            
							<input type="file" name="resumes" ng-model="q.resumes" >
												</span> 
												<span class="fileinput-filename"></span>                                        
												<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
											<?php endif; ?>
					
										</div>  
										<div id="msg_pdf" style="color: #e11221"></div>
									</div>
								</div>
							</div>
	              	    </div>
						
<!--		  
	                    <div class="" style="padding:15px;">
							<div class="">
								<div class="form-group">
									<label for="field-1" class="col-sm-4 control-label">Resume</label>
									
									<input type="hidden" name="resumes_path" ng-model="q.resumes_path" value="<?php
										if (!empty($rn_info->resumes_path)) {
											echo $rn_info->resumes_path;
										}
										?>">
									<div class="col-sm-8">
										<div class="fileinput fileinput-new" data-provides="fileinput">
											<?php if (!empty($rn_info->resumes)): ?>
												<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Select file</span>
													<span class="fileinput-exists" style="display: block">Change</span>
													<input type="hidden" name="resumes" ng-model="q.resumes" value="<?php echo $rn_info->resumes ?>">
													<input type="file" name="resumes" ng-model="q.resumes" >
												</span>                                    
												<span class="fileinput-filename"> <?php echo $rn_info->resumes_filename ?></span>                                        
												<?php else: ?>
													<span class="btn btn-default btn-file"><span class="fileinput-new" >Select file</span>
												<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
													<span class="fileinput-exists">Change</span>                                            
													<input type="file" name="resumes" ng-model="q.resumes" >
												</span> 
												<span class="fileinput-filename"></span>             
												<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float:none;">&times;</a> 
											<?php endif; ?>
										</div>  
										<div id="msg_pdf" style="color: #e11221"></div>
									</div>
								</div>
							</div>
	              	    </div>
-->

        <!-- Resume End -->

	<!-- job Description -->
					
	<div>
		<div class="form-group">
			<label for="field-1" class="col-sm-4 control-label">Job Description<span class="required">*</span></label>
			<!-- <input type="hidden" name="resumes_path" ng-model="q.resumes_path" value="<?php
									if (!empty($rn_info->resumes_path)) {
										echo $rn_info->resumes_path;
									}
									?>"> -->
			<div class="col-sm-8">
				<div class="fileinput fileinput-new" data-provides="fileinput">
				  
					<?php if (!empty($rn_info->jobdescription)): ?>
						<a class="btn btn-default btn-file" href="<?php echo base_url() . $rn_info->jobdescription; ?>" target="_blank" >Print</a> 
						<span class="btn btn-default btn-file"><span class="fileinput-new" style="display: none" >Upload file</span>
							<span class="fileinput-exists" style="display: block;">Change</span>
							<input type="hidden" name="jobdescription"  ng-model="q.jobdescription" value="<?php echo $rn_info->jobdescription ?>">
							<input type="file" name="jobdescription" ng-model="q.jobdescription" >
						</span>                                    
					<!-- <span class="fileinput-filename"> <?php echo $rn_info->jobdescription ?></span> -->  
						   
					<?php else: ?>
						<a class="btn btn-default btn-file" href="http://elumba.com/hrm2/img/uploads/docs/rn.docx" target="_blank">Print</a>
						<span class="btn btn-default btn-file"><span class="fileinput-new" >Upload file</span>
							<span class="fileinput-exists">Change</span>                                            
							<input type="file" name="jobdescription" ng-model="q.jobdescription" >
						</span> 
						<span class="fileinput-filename"></span>                                        
						<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none;">&times;</a>                                                                                                            
					<?php endif; ?>
	
				</div>  
				<div id="msg_pdf" style="color: #e11221"></div>
			</div>
		</div>
	</div><br />
					





<!-- Upload documents -->

<div class="form-group" style="padding:15px;">
	
	<button id="myBtn22" class="btn btn-default btn-file">Upload Important Documents Here</button>
	
	<div id="myModal" class="modal" >
	  <!-- Modal content -->
	  <div class="modal-content">
	        <div class="modal-header">
	          <span class="close">×</span>
	          <h2>Upload Important Documents</h2>
	        </div>
		<div class="modal-body">
			  <?php $this->load->view('admin/includes/employeedocuments.php'); ?>
	        </div>
	      <div class="modal-footer">
	        <h3></h3>
	      </div>
	  </div>
        </div>
	
<script>
    $(document).ready(function(evt)
    {
    $("#myModal .close").click(function(e){
     
    $("#myModal").hide();
    
    });
    
	$("#myBtn22").click(function(e){
     
    $("#myModal").show();
		return false;
    });
	
    
    });

	// Get the modal

</script>	
	
	
	
	
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>	



	
</div>



			
		                  
		                  
                               <!-- Physical Examination -->
                                                        
                             
                               <!-- End Physical Examination Test Date -->
                          
	              	       <!-- TB Test -->
	              	         	 
		               <!-- End TB Test Date -->    
		                  

                </div>
                
                
            </div>
          </div>    
 
      
         <div class="col-sm-3 margin pull-right">
<div id='loadingmessage' style='display:none;position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -50px;
    margin-left: -50px;
    width: 100px;
    height: 100px;'>
                   <img src='http://elumba.com/hrm2/asset/img/demo_wait.gif' class="image1" id="gif"/>
         </div> 

               <button id="btn_emp_save"  type="submit" class="btn btn-primary btn-block">Next</button> 
               </div>    

     </div>
         
    </form>




<form role="form" id="employee-form1" enctype="multipart/form-data"  ng-submit="submitForm()"  method="post" class="form-horizontal form-groups-bordered">    
	
 <input type="hidden" name="uid" ng-model="p.uid" value="<?php echo $rn_info->uid;?>">
     <div class="row">
     
             <div class="wrap-fpanel">
                   <div class="panel panel-default">
                     <div class="panel-heading">
                              <div class="panel-title">
                                    <strong>INITIAL COMPETENCY ASSESSMENT SKILLS CHECKLIST</strong>
                              </div>
                     </div>
                </div>
        </div>
         <div class=""><!-- ************************ Initial Competency******************************* -->
            <div class="panel panel-info">
            
            
             <div class="panel-heading">
                          <div class="panel-title">
                           <h4 class="panel-title">REGISTERED NURSE</h4>
                      </div>
                     </div>
                
                <div class="panel-body ">

                   <!--  <div class="row">
                       <div class="col-sm-6">
                        <div class="">
                           <label class="control-label" >First Name <span class="required"> *</span></label>
                           <input type="text" name="rn_name"  class="form-control">
                       </div>
                     </div>
                 </div> -->

               <div class="row">
                        <div class="col-sm-6">
                         <div class="">
                        <label class="control-label" >Date of Employment: <span class="required"> *</span></label>
                         <div class="input-group">
                             <input type="text" name="date_of_employment" ng-model="p.date_of_employment" value="" class="form-control datepicker" data-format="yyy-mm-dd" style="z-index:0;">
                             <div class="input-group-addon">
                                <a href="#"><i class="entypo-calendar"></i></a>
                             </div>
                         </div>
                     </div>
                      </div>
                      <div class="col-sm-6">
                             <div class="">
                        <label class="control-label" >Date Completed: <span class="required"> *</span></label>
                         <div class="input-group">
                             <input type="text" name="date_of_completion" ng-model="p.date_of_completion" value="" class="form-control datepicker" data-format="yyy-mm-dd" style="z-index:0;">
                             <div class="input-group-addon">
                                <a href="#"><i class="entypo-calendar"></i></a>
                             </div>
                         </div>
                     </div>
                      </div>
                 </div>

               
                     
        <br/>
      <br/>


                       
                       
					 <table border="1"  class="table table-hover table-striped">
                                         <thead>
                                          <tr>
                                           <th  colspan="2" > <center>Self Assessment</center></th>
                                           <th  width="234" rowspan="2">Competency for the Registered Nurse</th>
                                           <th  rowspan="2">Proficiency Required</th>
                                           <th  rowspan="2">Evaluation Method</th>
                                           <th   width="234" rowspan="2">Competency Validation Indicated by Preceptors Initials and Date</th>
                                         </tr>
                                       
                                       
                                        <tr>
                                           <td >Do you have experience with this skill?</td>
                                           <td >Are you competent performing the following?</td>
                                        </tr>
                                       </thead>

                                      <tbody>
                                        <tr>
                                            <td>
	                                       
                                           </td>
                                         <td>
	                                   
                                       </td>
                                       <td>
                                         <b>A.Demonstrates ability to process paperwork and associated functions necessary to facilitate:</b>

                                      </td>
                                      <td class="text-center">*</td>
                                      <td> &nbsp;</td>
                                      <td> &nbsp;</td>
                                    </tr>



                           <tr>
                               <td>&nbsp;</td>
                               <td>&nbsp;</td>
                                <td>1.Admission to organization</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                           </tr>

                           <tr>
                               <td>
                                            <select name="row11" ng-model="p.row11" class="form-control col-sm-5" >
	                                       <option value="" >Select Choice...</option>
                                               <option value="yes" >yes</option>
	                                       <option value="no" >no</option>        
                                              </select>
							   </td>
                               <td> 
                                    <select name="row12" ng-model="p.row12" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select>
                               </td>
                                <td>&nbsp;&nbsp;a.Initiates assessment form</td>
                                <td class="text-center">*</td>
                                <td><input type="text" name="row13" ng-model="p.row13" value="" class="form-control"></td>
                                <td><input type="text" name="row14" ng-model="p.row14" value="" class="form-control"></td>
                          </tr>


                           <tr>
                            <td>
                                        <select name="row21" ng-model="p.row21"  class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>
                                  <select name="row22" ng-model="p.row22" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select>
</td>
                            <td>&nbsp;&nbsp; b.Initiates care plan based on assessment</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row23" ng-model="p.row23" value="" class="form-control"></td>
                            <td><input type="text" name="row24" ng-model="p.row24"  value="" class="form-control"></td>
                         </tr>
                      

                          <tr>
                            <td>
                              <select name="row31" ng-model="p.row31" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select>
                           </td>
                            <td>
                                 <select name="row32" ng-model="p.row32" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select>
                           </td>
                            <td>&nbsp;&nbsp;c.Knowledge of nursing process</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row33" ng-model="p.row33" value="" class="form-control"></td>
                            <td><input type="text" name="row34" ng-model="p.row34" value="" class="form-control"></td>
                         </tr>


                         <tr>
                            <td>
                              <select name="row41" ng-model="p.row41" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>
                                   <select name="row42" ng-model="p.row42" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select>
                         </td>
                            <td>&nbsp;&nbsp;d.Health history/physical exam</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row43" ng-model="p.row43" value="" class="form-control"></td>
                            <td><input type="text" name="row44" ng-model="p.row44" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td>
                                <select name="row51" ng-model="p.row51" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select>
                           </td>
                            <td>
                              <select name="row52" ng-model="p.row52" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select>
                           </td>
                            <td>&nbsp;&nbsp;e.Development of problem list and care planning</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row53" ng-model="p.row53" value="" class="form-control"></td>
                            <td><input type="text" name="row54" ng-model="p.row54" value="" class="form-control"></td>
                         </tr>

                       <tr>
                            <td>
                                   <select name="row61" ng-model="p.row61" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select>
                            </td>
                            <td>
                                       <select name="row62" ng-model="p.row62" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select>
                           </td>
                            <td>&nbsp;&nbsp;f.Conducts complete initial evaluation</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row63" ng-model="p.row63" value="" class="form-control"></td>
                            <td><input type="text" name="row64" ng-model="p.row64"  value="" class="form-control"></td>
                       </tr>

                      <tr>
                            <td>
                                       <select name="row71" ng-model="p.row71" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>
                                       <select name="row72" ng-model="p.row72" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select>
                           </td>
                            <td>2.Transfer of patient</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row73" ng-model="p.row73" value="" class="form-control"></td>
                            <td><input type="text" name="row74" ng-model="p.row74" value="" class="form-control"></td>
                     </tr>


                     <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>3.Care coordination/discharge planning</td>
                            <td class="text-center">*</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                    </tr>
                     
                    <tr>
                            <td><select name="row81" ng-model="p.row81" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row82" ng-model="p.row82" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Care planning</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row83" ng-model="p.row83" value="" class="form-control"></td>
                            <td><input type="text" name="row84" ng-model="p.row84" value="" class="form-control"></td>
                    </tr>

                       <tr>
                            <td><select name="row91" ng-model="p.row91" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row92" ng-model="p.row92" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Case conference</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row93" ng-model="p.row93" value="" class="form-control"></td>
                            <td><input type="text" name="row94" ng-model="p.row94" value="" class="form-control"></td>
                         </tr>

                        <tr>
                            <td><select name="row101" ng-model="p.row101" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row102" ng-model="p.row102" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.60 day summary</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row103" ng-model="p.row103" value="" class="form-control"></td>
                            <td><input type="text" name="row104" ng-model="p.row104" value="" class="form-control"></td>
                         </tr>
                       
                        <tr>
                            <td><select name="row111" ng-model="p.row111" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row112" ng-model="p.row112" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Case management</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row113" ng-model="p.row113" value="" class="form-control"></td>
                            <td><input type="text" name="row114" ng-model="p.row114" value="" class="form-control"></td>
                         </tr>
                         
                        <tr>
                            <td><select name="row121" ng-model="p.row121" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row122" ng-model="p.row122" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.Adheres to POC</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row123" ng-model="p.row123" value="" class="form-control"></td>
                            <td><input type="text" name="row124" ng-model="p.row124" value="" class="form-control"></td>
                         </tr>

                       <tr>
                            <td><select name="row131" ng-model="p.row131" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row132" ng-model="p.row132" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>f.Reports and documents key information to physician, DC planner, Case Manager, pharmacist, supervisor</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row133" ng-model="p.row133" value="" class="form-control"></td>
                            <td><input type="text" name="row134" ng-model="p.row134" value="" class="form-control"></td>
                         </tr>


                         <tr>
                            <td><select name="row141" ng-model="p.row141" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row142" ng-model="p.row142" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>g.Coordinates community resources</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row143" ng-model="p.row143" value="" class="form-control"></td>
                            <td><input type="text" name="row144" ng-model="p.row144" value="" class="form-control"></td>
                         </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>4.Documentation</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>


                     <tr>
                            <td><select name="row161" ng-model="p.row161" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row162" ng-model="p.row162" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Medicare guidelines for documentation</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row163" ng-model="p.row163" value="" class="form-control"></td>
                            <td><input type="text" name="row164" ng-model="p.row164" value="" class="form-control"></td>
                         </tr>

                   <tr>
                            <td><select name="row171" ng-model="p.row171" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row172" ng-model="p.row172" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Corrections to the clinical record</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row173" ng-model="p.row173" value="" class="form-control"></td>
                            <td><input type="text" name="row174" ng-model="p.row174" value="" class="form-control"></td>
                         </tr>

                     <tr>
                            <td><select name="row181" ng-model="p.row181" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row182" ng-model="p.row182" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Accident/incident reports</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row183" ng-model="p.row183" value="" class="form-control"></td>
                            <td><input type="text" name="row184" ng-model="p.row184" value="" class="form-control"></td>
                     </tr>

                    <tr>
                            <td><select name="row191" ng-model="p.row191" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row192" ng-model="p.row192" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Clinical notes, flow charts</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row193" ng-model="p.row193" value="" class="form-control"></td>
                            <td><input type="text" name="row194" ng-model="p.row194" value="" class="form-control"></td>
                     </tr>

                  <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>5.Other</td>
                            <td></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                   </tr>

                   <tr>
                            <td><select name="row201" ng-model="p.row201" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row202" ng-model="p.row202" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Supervision of ancillary personnel</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row203" ng-model="p.row203" value="" class="form-control"></td>
                            <td><input type="text" name="row204" ng-model="p.row204" value="" class="form-control"></td>
                    </tr>

                     <tr>
                            <td><select name="row211" ng-model="p.row211" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row212" ng-model="p.row212" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Supply requisition and management</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row213" ng-model="p.row213" value="" class="form-control"></td>
                            <td><input type="text" name="row214" ng-model="p.row214" value="" class="form-control"></td>
                     </tr>

                      <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><b>B.Review of Systems:  Demonstrates ability to obtain and document appropriate age specific history/ assessment for patients in the following categories:</b> </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                     </tr>

                   
                    <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>1.Pulmonary System</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                    </tr>

                   <tr>
                            <td><select name="row221" ng-model="p.row221" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row222" ng-model="p.row222" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Pulmonary Assessment</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row223" ng-model="p.row223" value="" class="form-control"></td>
                            <td><input type="text" name="row224" value="" class="form-control"></td>
                   </tr>
                        <tr>
                            <td><select name="row231" ng-model="p.row231" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row232" ng-model="p.row232" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Tracheostomy care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row233" ng-model="p.row233" value="" class="form-control"></td>
                            <td><input type="text" name="row234" ng-model="p.row234" value="" class="form-control"></td>
                         </tr>

                        <tr>
                            <td><select name="row241" ng-model="p.row241" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row242" ng-model="p.row242" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Oxygen administration</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row243" ng-model="p.row243" value="" class="form-control"></td>
                            <td><input type="text" name="row244" ng-model="p.row244" value="" class="form-control"></td>
                         </tr>

                       <tr>
                            <td><select name="row251" ng-model="p.row251" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row252" ng-model="p.row252" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Pharyngeal suction</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row253" ng-model="p.row253" value="" class="form-control"></td>
                            <td><input type="text" name="row254" ng-model="p.row254" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row261" ng-model="p.row261" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row262" ng-model="p.row262" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.Use of oral/nasal inhalers</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row263" ng-model="p.row263" value="" class="form-control"></td>
                            <td><input type="text" name="row264" ng-model="p.row264" value="" class="form-control"></td>
                         </tr>

                        <tr>
                            <td><select name="row271" ng-model="p.row271" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row272" ng-model="p.row272" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>f.Oxymeter</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row273" ng-model="p.row273" value="" class="form-control"></td>
                            <td><input type="text" name="row274" ng-model="p.row274" value="" class="form-control"></td>
                         </tr>

                       <tr>
                            <td><select name="row281" ng-model="p.row281" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row282" ng-model="p.row282" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>g.CPAP</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row283" ng-model="p.row283" value="" class="form-control"></td>
                            <td><input type="text" name="row284" ng-model="p.row284" value="" class="form-control"></td>
                         </tr>

                       <tr>
                            <td><select name="row291" ng-model="p.row291" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row292" ng-model="p.row292" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>h.Oxygen mask, nasal cannula, concentrator, portable oxygen</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row293" ng-model="p.row293" value="" class="form-control"></td>
                            <td><input type="text" name="row294" ng-model="p.row294" value="" class="form-control"></td>
                         </tr>

                        <tr>
                            <td><select name="row301" ng-model="p.row301" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row302" ng-model="p.row302" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>i.Airway insertion</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row303" ng-model="p.row303" value="" class="form-control"></td>
                            <td><input type="text" name="row304" ng-model="p.row304" value="" class="form-control"></td>
                       </tr>


                      <tr>
                            <td><select name="row311" ng-model="p.row311" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row312" ng-model="p.row312" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>j.SVN/Nebulizer treatment</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row313" ng-model="p.row313" value="" class="form-control"></td>
                            <td><input type="text" name="row314" ng-model="p.row314" value="" class="form-control"></td>
                     </tr>

                       <tr>
                            <td><select name="row321" ng-model="p.row321" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="yes" >no</option>        
                                          </select></td>
                            <td><select name="row322" ng-model="p.row322" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>k.Home ventilator management</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row323" ng-model="p.row323" value="" class="form-control"></td>
                            <td><input type="text" name="row324" ng-model="p.row324" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row331" ng-model="p.row331" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row332" ng-model="p.row332" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>l.Foreign body airway obstruction</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row333" ng-model="p.row333" value="" class="form-control"></td>
                            <td><input type="text" name="row334" ng-model="p.row334" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row341" ng-model="p.row341" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row342" ng-model="p.row342" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>m.Breathing exercises/incentive spirometry</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row343" ng-model="p.row343" value="" class="form-control"></td>
                            <td><input type="text" name="row344" ng-model="p.row344" value="" class="form-control"></td>
                         </tr>

                          <tr>
                            <td><select name="row351" ng-model="p.row351" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row352" ng-model="p.row352" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>n.Other</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row353" ng-model="p.row353" value="" class="form-control"></td>
                            <td><input type="text" name="row354" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>2.Cardiovascular System</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

                         <tr>
                            <td><select name="row361" ng-model="p.row361" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row362" ng-model="p.row362" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Cardiovascular assessment</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row363" ng-model="p.row363" value="" class="form-control"></td>
                            <td><input type="text" name="row364" value="" class="form-control"></td>
                         </tr>

                          <tr>
                            <td><select name="row371" ng-model="p.row371" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row372" ng-model="p.row372" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Pulses(apical, radical, femoral, pedal)</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row373" ng-model="p.row373" value="" class="form-control"></td>
                            <td><input type="text" name="row374" ng-model="p.row374" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row381" ng-model="p.row381" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row382" ng-model="p.row382" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Edema assessment and management</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row383" ng-model="p.row383" value="" class="form-control"></td>
                            <td><input type="text" name="row384" ng-model="p.row384" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row391" ng-model="p.row391" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row392" ng-model="p.row392" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Supine and orthostatic blood pressure</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row393" ng-model="p.row393" value="" class="form-control"></td>
                            <td><input type="text" name="row394" ng-model="p.row394" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row401" ng-model="p.row401" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row402" ng-model="p.row402" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.NTG use, inhaler use</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row403" ng-model="p.row403" value="" class="form-control"></td>
                            <td><input type="text" name="row404" ng-model="p.row404" value="" class="form-control"></td>
                         </tr>

                          <tr>
                            <td><select name="row411" ng-model="p.row411" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row412" ng-model="p.row412" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>f.CPR</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row413" ng-model="p.row413" value="" class="form-control"></td>
                            <td><input type="text" name="row414" ng-model="p.row414" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row421" ng-model="p.row421" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row422" ng-model="p.row422" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>g.Energy conservation techniques</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row423" ng-model="p.row423" value="" class="form-control"></td>
                            <td><input type="text" name="row424" ng-model="p.row424" value="" class="form-control"></td>
                         </tr>

                        <tr>
                            <td><select name="row431" ng-model="p.row431" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row432" ng-model="p.row432" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>h.Other</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row433" ng-model="p.row433" value="" class="form-control"></td>
                            <td><input type="text" name="row434" ng-model="p.row434" value="" class="form-control"></td>
                         </tr>

                          <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>3.Neurologic System</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>


                         <tr>
                            <td><select name="row441" ng-model="p.row441" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row442" ng-model="p.row442" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Neurologic assessment</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row443" ng-model="p.row443" value="" class="form-control"></td>
                            <td><input type="text" name="row444" ng-model="p.row444" value="" class="form-control"></td>
                         </tr>


                          <tr>
                            <td><select name="row451" ng-model="p.row451" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row452" ng-model="p.row452" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Aphasia care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row453" ng-model="p.row453" value="" class="form-control"></td>
                            <td><input type="text" name="row454" ng-model="p.row454" value="" class="form-control"></td>
                         </tr>


                        <tr>
                            <td><select name="row461" ng-model="p.row461" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row462" ng-model="p.row462" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Mental status exam</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row463" ng-model="p.row463" value="" class="form-control"></td>
                            <td><input type="text" name="row464" ng-model="p.row464" value="" class="form-control"></td>
                         </tr>

                       <tr>
                            <td><select name="row471" ng-model="p.row471" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row472" ng-model="p.row472" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Seizure precautions</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row473" ng-model="p.row473" value="" class="form-control"></td>
                            <td><input type="text" name="row474" ng-model="p.row474" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row481" ng-model="p.row481" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row482" ng-model="p.row482" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.Spinal cord injuries care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row483" ng-model="p.row483" value="" class="form-control"></td>
                            <td><input type="text" name="row484" ng-model="p.row484" value="" class="form-control"></td>
                         </tr>

                         <tr>
						 
                            <td><select name="row491" ng-model="p.row491"   class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row492" ng-model="p.row492" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>f.Head injury care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row493" ng-model="p.row493" value="" class="form-control"></td>
                            <td><input type="text" name="row494" ng-model="p.row494" value="" class="form-control"></td>
                         </tr>

                          <tr>
                            <td><select name="row501" ng-model="p.row501" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row502" ng-model="p.row502" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>g.Other</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row503" ng-model="p.row503" value="" class="form-control"></td>
                            <td><input type="text" name="row504" ng-model="p.row504" value="" class="form-control"></td>
                         </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>4.Gastrointestinal System</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

                        <tr>
                            <td><select name="row511" ng-model="p.row511" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row512" ng-model="p.row512" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Gastrointestinal assessment</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row513" ng-model="p.row513" value="" class="form-control"></td>
                            <td><input type="text" name="row514" ng-model="p.row514" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row521" ng-model="p.row521" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row522" ng-model="p.row522" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.NG tube insertion/care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row523" ng-model="p.row523" value="" class="form-control"></td>
                            <td><input type="text" name="row524" ng-model="p.row524" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row531" ng-model="p.row531" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row532" ng-model="p.row532" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Jejunostomy tube care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row533" ng-model="p.row533" value="" class="form-control"></td>
                            <td><input type="text" name="row534" ng-model="p.row534" value="" class="form-control"></td>
                         </tr>

                        <tr>
                            <td><select name="row541" ng-model="p.row541" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row542" ng-model="p.row542" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Gastrostomy tube care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row543" ng-model="p.row543" value="" class="form-control"></td>
                            <td><input type="text" name="row544" ng-model="p.row544" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row551" ng-model="p.row544" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row552" ng-model="p.row544" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.Enteral feedings</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row553" ng-model="p.row553" value="" class="form-control"></td>
                            <td><input type="text" name="row554" ng-model="p.row554" value="" class="form-control"></td>
                         </tr>

                        <tr>
                            <td><select name="row561" ng-model="p.row561" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row562" ng-model="p.row562" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>f.Suction machine(s)</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row563" ng-model="p.row563" value="" class="form-control"></td>
                            <td><input type="text" name="row564" ng-model="p.row564" value="" class="form-control"></td>
                         </tr>

                        <tr>
                            <td><select name="row571" ng-model="p.row571" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row572" ng-model="p.row572" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>g.Ostomy care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row573" ng-model="p.row573" value="" class="form-control"></td>
                            <td><input type="text" name="row574" ng-model="p.row574" value="" class="form-control"></td>
                         </tr>

                       <tr>
                            <td><select name="row581" ng-model="p.row581" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row582" ng-model="p.row582" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>h.Dysphagia precautions</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row583" ng-model="p.row583" value="" class="form-control"></td>
                            <td><input type="text" name="row584" ng-model="p.row584" value="" class="form-control"></td>
                         </tr>


                       <tr>
                            <td><select name="row591" ng-model="p.row591" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row592" ng-model="p.row592" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>i.Impaction removal</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row593" ng-model="p.row593" value="" class="form-control"></td>
                            <td><input type="text" name="row594" ng-model="p.row594" value="" class="form-control"></td>
                         </tr>


                       <tr>
                            <td><select name="row601" ng-model="p.row601" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row602" ng-model="p.row602" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>j.Enema</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row603" ng-model="p.row603" value="" class="form-control"></td>
                            <td><input type="text" name="row604" ng-model="p.row604" value="" class="form-control"></td>
                         </tr>

                        <tr>
                            <td><select name="row701" ng-model="p.row604" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row702" ng-model="p.row604" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>k.Bowel training</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row703" ng-model="p.row604" value="" class="form-control"></td>
                            <td><input type="text" name="row704" ng-model="p.row604" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row711" ng-model="p.row711" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row712" ng-model="p.row712" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>l.Other</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row713" ng-model="p.row713" value="" class="form-control"></td>
                            <td><input type="text" name="row714" ng-model="p.row714" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>5.Genitourinary System</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

                         <tr>
                            <td><select name="row721" ng-model="p.row721" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row722" ng-model="p.row722" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.GU assessment</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row723" ng-model="p.row723" value="" class="form-control"></td>
                            <td><input type="text" name="row724" ng-model="p.row724" value="" class="form-control"></td>
                         </tr>

                         <tr>
                            <td><select name="row731" ng-model="p.row731" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row732" ng-model="p.row732" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Urinary catheterization insertion and care (male and female)</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row733" ng-model="p.row733" value="" class="form-control"></td>
                            <td><input type="text" name="row734" ng-model="p.row734" value="" class="form-control"></td>
                         </tr>


                         <tr>
                            <td><select name="row741" ng-model="p.row741" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row742" ng-model="p.row742" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Irrigation of catheters</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row743" ng-model="p.row743" value="" class="form-control"></td>
                            <td><input type="text" name="row744" ng-model="p.row744" value="" class="form-control"></td>
                         </tr>


                          <tr>
                            <td><select name="row751" ng-model="p.row751" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row752" ng-model="p.row752" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Obtaining specimens</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row753" ng-model="p.row753" value="" class="form-control"></td>
                            <td><input type="text" name="row754" ng-model="p.row754" value="" class="form-control"></td>
                         </tr>


                        <tr>
                            <td><select name="row761" ng-model="p.row761" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row762" ng-model="p.row762" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.Removal of urinary catheter</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row763" ng-model="p.row763" value="" class="form-control"></td>
                            <td><input type="text" name="row764" ng-model="p.row764" value="" class="form-control"></td>
                         </tr>


                          <tr>
                            <td><select name="row771" ng-model="p.row771" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row772" ng-model="p.row772" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>f.Care of supra-pubic catheter</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row773" ng-model="p.row773" value="" class="form-control"></td>
                            <td><input type="text" name="row774" ng-model="p.row774" value="" class="form-control"></td>
                         </tr>


                         <tr>
                            <td><select name="row781" ng-model="p.row781" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row782" ng-model="p.row782" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>g.Care of urostomy</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row783" ng-model="p.row783" value="" class="form-control"></td>
                            <td><input type="text" name="row784" ng-model="p.row784" value="" class="form-control"></td>
                         </tr>


                        <tr>
                            <td><select name="row791" ng-model="p.row791" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row792" ng-model="p.row792" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>h.Bladder training</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row793" ng-model="p.row793" value="" class="form-control"></td>
                            <td><input type="text" name="row794" ng-model="p.row794" value="" class="form-control"></td>
                         </tr>



                         <tr>
                            <td><select name="row801" ng-model="p.row801" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row802" ng-model="p.row802" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>i.Nephrostomy tubes</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row803" ng-model="p.row803" value="" class="form-control"></td>
                            <td><input type="text" name="row804" ng-model="p.row804" value="" class="form-control"></td>
                         </tr>

                          <tr>
                            <td><select name="row811" ng-model="p.row811" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row812" ng-model="p.row812" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>j.Knowledge of types of catheters and indications for use (straight, indwelling, condom)</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row813" ng-model="p.row813" value="" class="form-control"></td>
                            <td><input type="text" name="row814" ng-model="p.row814" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row821" ng-model="p.row821" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row822" ng-model="p.row822" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>k.Ileostomy care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row823" ng-model="p.row823" value="" class="form-control"></td>
                            <td><input type="text" name="row824" ng-model="p.row824" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row831" ng-model="p.row831" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row832" ng-model="p.row832" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>l.Incontinence care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row833" ng-model="p.row833" value="" class="form-control"></td>
                            <td><input type="text" name="row834" ng-model="p.row834" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row841" ng-model="p.row834" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row842" ng-model="p.row842" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>m.GU post op care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row843" ng-model="p.row843" value="" class="form-control"></td>
                            <td><input type="text" name="row844" ng-model="p.row844" value="" class="form-control"></td>
                         </tr>



<tr>
                            <td><select name="row851" ng-model="p.row851" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row852" ng-model="p.row852" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>n.Other</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row853" ng-model="p.row853" value="" class="form-control"></td>
                            <td><input type="text" name="row854" ng-model="p.row854" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>6.Integumentary/Wounds/Dressings</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row861" ng-model="p.row861" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row862" ng-model="p.row862" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Assessment of skin/wound</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row863" ng-model="p.row863" value="" class="form-control"></td>
                            <td><input type="text" name="row864" ng-model="p.row864" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row871" ng-model="p.row871" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >0</option>        
                                          </select></td>
                            <td><select name="row872" ng-model="p.row872" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Measurement of wounds</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row873" ng-model="p.row873" value="" class="form-control"></td>
                            <td><input type="text" name="row874" ng-model="p.row874" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row881" ng-model="p.row881" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row882" ng-model="p.row882" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Wound irrigation</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row883" ng-model="p.row883" value="" class="form-control"></td>
                            <td><input type="text" name="row884" ng-model="p.row884" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row891" ng-model="p.row891" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row892" ng-model="p.row892" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Wet to dry dressing(s)</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row893" ng-model="p.row893" value="" class="form-control"></td>
                            <td><input type="text" name="row894" ng-model="p.row894" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>e.Decubitis care:</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row901" ng-model="p.row901" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row902" ng-model="p.row902" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>1.Assessment and staging</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row903" ng-model="p.row903" value="" class="form-control"></td>
                            <td><input type="text" name="row904" ng-model="p.row904" value="" class="form-control"></td>
                         </tr>




<tr>
                            <td><select name="row911" ng-model="p.row911" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row912" ng-model="p.row912" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>2.Prevention</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row913" ng-model="p.row913" value="" class="form-control"></td>
                            <td><input type="text" name="row914" ng-model="p.row914" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row921" ng-model="p.row921" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row922" ng-model="p.row922" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>3.Various treatments (hydrocollid, calcium alginate, transparent films)</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row923" ng-model="p.row923" value="" class="form-control"></td>
                            <td><input type="text" name="row924" ng-model="p.row924" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row931" ng-model="p.row931" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row932" ng-model="p.row932"  class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>4.Documentation/pictures</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row933" ng-model="p.row933" value="" class="form-control"></td>
                            <td><input type="text" name="row934" ng-model="p.row934" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row941" ng-model="p.row941" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row942" ng-model="p.row942" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>f.Ace wrap, cast care, compresses</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row943" ng-model="p.row943" value="" class="form-control"></td>
                            <td><input type="text" name="row944" ng-model="p.row944" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row951" ng-model="p.row951" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row952" ng-model="p.row952" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>g.Hemovac</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row953" ng-model="p.row953" value="" class="form-control"></td>
                            <td><input type="text" name="row954" ng-model="p.row954" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row961" ng-model="p.row961" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row962" ng-model="p.row962" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>h.Sterile dressing change</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row963" ng-model="p.row963" value="" class="form-control"></td>
                            <td><input type="text" name="row964" ng-model="p.row964" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row971" ng-model="p.row971" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row972" ng-model="p.row972" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>i.Suture/staple removal</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row973" ng-model="p.row973" value="" class="form-control"></td>
                            <td><input type="text" name="row974" ng-model="p.row974" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>7.Musculoskeletal System</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>


<tr>
                            <td><select name="row981" ng-model="p.row981" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row982" ng-model="p.row982" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Assessment</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row983" ng-model="p.row983" value="" class="form-control"></td>
                            <td><input type="text" name="row984" ng-model="p.row984" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row991" ng-model="p.row991" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row992" ng-model="p.row992" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Range of motion (ROM)</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row993" ng-model="p.row993" value="" class="form-control"></td>
                            <td><input type="text" name="row994" ng-model="p.row994" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row1001" ng-model="p.row1001" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row1002" ng-model="p.row1002" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.TED hose</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row1003" ng-model="p.row1003" value="" class="form-control"></td>
                            <td><input type="text" name="row1004" ng-model="p.row1004" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row1101" ng-model="p.row1101" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row1102" ng-model="p.row1102" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Total knee care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row1103" ng-model="p.row1103" value="" class="form-control"></td>
                            <td><input type="text" name="row1104" ng-model="p.row1104" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row1201" ng-model="p.row1104" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row1202" ng-model="p.row1202" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.Total hip care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row1203" ng-model="p.row1203" value="" class="form-control"></td>
                            <td><input type="text" name="row1204" ng-model="p.row1204" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row1301" ng-model="p.row1301" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row1302" ng-model="p.row1302" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>f.Cast assessment and care</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row1303" ng-model="p.row1303" value="" class="form-control"></td>
                            <td><input type="text" name="row1304" ng-model="p.row1304" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>g.Devices:</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row1401" ng-model="p.row1401" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row1402" ng-model="p.row1402"  class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>1.Walker</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row1403"  ng-model="p.row1403" value="" class="form-control"></td>
                            <td><input type="text" name="row1404"  ng-model="p.row1404" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row1501"  ng-model="p.row1501" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row1502" ng-model="p.row1502" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>2.Wheelchair</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row1503" ng-model="p.row1503"  value="" class="form-control"></td>
                            <td><input type="text" name="row1504" ng-model="p.row1504" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row1601" ng-model="p.row1601" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row1602" ng-model="p.row1602" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>3.Transfer board</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row1603" ng-model="p.row1603" value="" class="form-control"></td>
                            <td><input type="text" name="row1604" ng-model="p.row1604" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row1701" ng-model="p.row1701" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row1702" ng-model="p.row1702" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>4.Hoyer lift</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row1703" ng-model="p.row1703" value="" class="form-control"></td>
                            <td><input type="text" name="row1704" ng-model="p.row1704" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row1801" ng-model="p.row1801" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row1802" ng-model="p.row1802" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>h.Pain assessment</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row1803" ng-model="p.row1803" value="" class="form-control"></td>
                            <td><input type="text" name="row1804" ng-model="p.row1804" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row1901" ng-model="p.row1901" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row1902" ng-model="p.row1902" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>i.Transfers</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row1903" ng-model="p.row1903" value="" class="form-control"></td>
                            <td><input type="text" name="row1904" ng-model="p.row1904" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row2001" ng-model="p.row2001" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row2002" ng-model="p.row2002" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>j.Other</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row2003" ng-model="p.row2002" value="" class="form-control"></td>
                            <td><input type="text" name="row2004" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>8.Pain assessment and management</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>
<tr>
                            <td><select name="row2101" ng-model="p.row2101" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row2102" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Conducts pain evaluation which includes location, onset, intensity, duration, alleviating factors</td>
                           <td class="text-center">*</td>
                            <td><input type="text" name="row2103" ng-model="p.row2103" value="" class="form-control"></td>
                            <td><input type="text" name="row2104" ng-model="p.row2104" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row2201"  ng-model="p.row2201" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row2202" ng-model="p.row2202" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Utilizes a pain rating scale to collect data</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row2203" ng-model="p.row2203" value="" class="form-control"></td>
                            <td><input type="text" name="row2204" ng-model="p.row2204" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row2301" ng-model="p.row2301" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row2302" ng-model="p.row2302" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Knowledgeable about types of pain (neuropathic, viseral, bone, smooth muscle, psychologic)</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row2303" ng-model="p.row2303" value="" class="form-control"></td>
                            <td><input type="text" name="row2304" ng-model="p.row2304" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td></td>
                            <td></td>
                            <td>d.Knowledgeable about drug therapies indication and dosing</td>
                            <td></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row2501" ng-model="p.row2501" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row2502" ng-model="p.row2502" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>1.NSAIDS</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row2503" ng-model="p.row2503" value="" class="form-control"></td>
                            <td><input type="text" name="row2504" ng-model="p.row2504" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row2601" ng-model="p.row2601" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row2602" ng-model="p.row2602" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>2.Steroids</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row2603" ng-model="p.row2603" value="" class="form-control"></td>
                            <td><input type="text" name="row2604" ng-model="p.row2604" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row2701" ng-model="p.row2701" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row2702" ng-model="p.row2702" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>3.Benzodiazipines</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row2703" ng-model="p.row2703" value="" class="form-control"></td>
                            <td><input type="text" name="row2704" ng-model="p.row2704" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row2801" ng-model="p.row2801" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row2802" ng-model="p.row2802" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>4.Tricylic antidepressants</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row2803" ng-model="p.row2803" value="" class="form-control"></td>
                            <td><input type="text" name="row2804" ng-model="p.row2804" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row3001" ng-model="p.row3001" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row3002" ng-model="p.row3002" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>5.Anticonvulsants</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row3003" ng-model="p.row3003" value="" class="form-control"></td>
                            <td><input type="text" name="row3004" ng-model="p.row3004" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row3101" ng-model="p.row3101" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row3102" ng-model="p.row3102" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>6.Narcotics</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row3103" ng-model="p.row3103" value="" class="form-control"></td>
                            <td><input type="text" name="row3104" ng-model="p.row3104" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row3201" ng-model="p.row3201" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row3202" ng-model="p.row3202" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="2" >no</option>        
                                          </select></td>
                            <td>7.Other</td>
                            <td></td>
                            <td><input type="text" name="row3203" ng-model="p.row3203" value="" class="form-control"></td>
                            <td><input type="text" name="row3204" ng-model="p.row3204" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>e.Non-pharmacologic methods:</td>
                            <td></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>


<tr>
                            <td><select name="row3301" ng-model="p.row3301" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row3302" ng-model="p.row3302" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>1.Relaxation (guided imagery, meditation, massage)</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row3303" ng-model="p.row3303" value="" class="form-control"></td>
                            <td><input type="text" name="row3304" ng-model="p.row3304" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row3401" ng-model="p.row3401" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row3402" ng-model="p.row3402" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>2.Psychologic (biofeedback, therapy)</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row3403" ng-model="p.row3403" value="" class="form-control"></td>
                            <td><input type="text" name="row3404" ng-model="p.row3404" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row3501" ng-model="p.row3501" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row3502" ng-model="p.row3502" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>3.Neurologic (TENS)</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row3503" ng-model="p.row3503" value="" class="form-control"></td>
                            <td><input type="text" name="row3504" ng-model="p.row3504" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row3601" ng-model="p.row3601" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row3602" ng-model="p.row3602" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>4.Ice/heat</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row3603" ng-model="p.row3603" value="" class="form-control"></td>
                            <td><input type="text" name="row3604" ng-model="p.row3604" value="" class="form-control"></td>
                         </tr>



<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>f.Patient/family teaching</td>
                            <td></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>


<tr>
                            <td><select name="row3701" ng-model="p.row3701" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row3702" ng-model="p.row3702" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>1.Drug use, side effects</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row3703" ng-model="p.row3703" value="" class="form-control"></td>
                            <td><input type="text" name="row3704" ng-model="p.row3704" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row3801" ng-model="p.row3801" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row3802" ng-model="p.row3802" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>2.Management of constipation</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row3803" ng-model="p.row3803" value="" class="form-control"></td>
                            <td><input type="text" name="row3804" ng-model="p.row3804" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row3901" ng-model="p.row3901" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row3902" ng-model="p.row3902" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>3.Addiction vs. tolerance</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row3903" ng-model="p.row3903" value="" class="form-control"></td>
                            <td><input type="text" name="row3904" ng-model="p.row3904" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row4001" ng-model="p.row4001" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row4002" ng-model="p.row4002" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>4.Other</td>
                            <td ></td>
                            <td><input type="text" name="row4003" ng-model="p.row4003" value="" class="form-control"></td>
                            <td><input type="text" name="row4004" ng-model="p.row4004" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>9.Metabolic</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row4101" ng-model="p.row4101" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row4102" ng-model="p.row4102" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Assessment</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row4103" ng-model="p.row4103" value="" class="form-control"></td>
                            <td><input type="text" name="row4104" ng-model="p.row4104" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>b.Diabetic assessment and teaching</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row4201" ng-model="p.row4201" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row4202" ng-model="p.row4202" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>1.Insulin types and teaching</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row4203" ng-model="p.row4203" value="" class="form-control"></td>
                            <td><input type="text" name="row4204" ng-model="p.row4204" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row4301" ng-model="p.row4301" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row4302" ng-model="p.row4302" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>2.Use, care and teaching of glucose monitoring system</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row4303" ng-model="p.row4303" value="" class="form-control"></td>
                            <td><input type="text" name="row4304" ng-model="p.row4304" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row4401" ng-model="p.row4401" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row4402" ng-model="p.row4402" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>3.Diet, exercise and sick day teaching</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row4403" ng-model="p.row4403" value="" class="form-control"></td>
                            <td><input type="text" name="row4404" ng-model="p.row4404" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row4501" ng-model="p.row4501" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row4502" ng-model="p.row4502" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>4.Signs and symptoms of Hypo-Hyperglycemic reactions</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row4503" ng-model="p.row4503" value="" class="form-control"></td>
                            <td><input type="text" name="row4504" ng-model="p.row4504" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row4601" ng-model="p.row4601" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row4602" ng-model="p.row4602" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>5.Foot and skin care</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row4603" ng-model="p.row4603" value="" class="form-control"></td>
                            <td><input type="text" name="row4604" ng-model="p.row4604" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row4701" ng-model="p.row4701" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row4602" ng-model="p.row4602" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Coumadin therapy</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row4703" ng-model="p.row4604" value="" class="form-control"></td>
                            <td><input type="text" name="row4704" ng-model="p.row4604" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row4801" ng-model="p.row4801" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row4802" ng-model="p.row4802" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Other</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row4803" ng-model="p.row4803" value="" class="form-control"></td>
                            <td><input type="text" name="row4804" ng-model="p.row4804" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>10.Behavioral Assessment</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>
<tr>
                            <td><select name="row4901" ng-model="p.row4901" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row4902" ng-model="p.row4902" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Psychosocial Status</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row4903" ng-model="p.row4903" value="" class="form-control"></td>
                            <td><input type="text" name="row4904" ng-model="p.row4904" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row5001" ng-model="p.row5001" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row5002" ng-model="p.row5002" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Suicide precautions</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row5003" ng-model="p.row5003" value="" class="form-control"></td>
                            <td><input type="text" name="row5004" ng-model="p.row5004" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row5101" ng-model="p.row5101" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row5102" ng-model="p.row5102" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Psychotropic drugs</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row5103" ng-model="p.row5103" value="" class="form-control"></td>
                            <td><input type="text" name="row5104" ng-model="p.row5104" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row5201" ng-model="p.row5201" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row5202" ng-model="p.row5202" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Care of the demented patient</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row5203" ng-model="p.row5203" value="" class="form-control"></td>
                            <td><input type="text" name="row5204" ng-model="p.row5204" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row5301" ng-model="p.row5204" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row5302" ng-model="p.row5302" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.Other</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row5303" ng-model="p.row5303" value="" class="form-control"></td>
                            <td><input type="text" name="row5304" ng-model="p.row5304" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>11.Miscellaneous Skills</td>
                            <td class="text-center">*</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row5401" ng-model="p.row5401" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row5402" ng-model="p.row5402" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Vital signs</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row5403" ng-model="p.row5403" value="" class="form-control"></td>
                            <td><input type="text" name="row5404" ng-model="p.row5404" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row5501" ng-model="p.row5404"  class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row5502" ng-model="p.row5502" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Intake and output</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row5503" ng-model="p.row5503" value="" class="form-control"></td>
                            <td><input type="text" name="row5504" ng-model="p.row5504" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row5601" ng-model="p.row5601" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row5602" ng-model="p.row5602" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Caring for immuno-compromised patients</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row5603" ng-model="p.row5603" value="" class="form-control"></td>
                            <td><input type="text" name="row5604" ng-model="p.row5604" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row5701" ng-model="p.row5701" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row5702" ng-model="p.row5702" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.eye/ear irrigation</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row5703" ng-model="p.row5703" value="" class="form-control"></td>
                            <td><input type="text" name="row5704" ng-model="p.row5704" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row5801" ng-model="p.row5801" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row5802" ng-model="p.row5802" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.Post mortem care</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row5803" ng-model="p.row5803" value="" class="form-control"></td>
                            <td><input type="text" name="row5804" ng-model="p.row5804" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row5901" ng-model="p.row5901" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row5902" ng-model="p.row5902" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>f.Collection, labeling and delivering laboratory specimens (blood, urine, sputum, wound, stool)</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row5903" ng-model="p.row5903" value="" class="form-control"></td>
                            <td><input type="text" name="row5904" ng-model="p.row5904" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>g.Concepts of death and dying</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row6001" ng-model="p.row6001" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row6002" ng-model="p.row6002" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>1.Normal vs. abnormal</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row6003" ng-model="p.row6003" value="" class="form-control"></td>
                            <td><input type="text" name="row6004" ng-model="p.row6004" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row6101" ng-model="p.row6101" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row6102" ng-model="p.row6102" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>2.Cultural attitudes toward death</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row6103" ng-model="p.row6103" value="" class="form-control"></td>
                            <td><input type="text" name="row6104" ng-model="p.row6104" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row6201" ng-model="p.row6201" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row6202" ng-model="p.row6202" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>3.Values of patient/family</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row6203" ng-model="p.row6203" value="" class="form-control"></td>
                            <td><input type="text" name="row6204" ng-model="p.row6204"  value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row6301" ng-model="p.row6301" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row6302" ng-model="p.row6302" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>4.Denial and coping mechanisms</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row6303" ng-model="p.row6303" value="" class="form-control"></td>
                            <td><input type="text" name="row6304" ng-model="p.row6304" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row6401" ng-model="p.row6401" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row6402" ng-model="p.row6402" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>5.Grief and family, children and others</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row6403" ng-model="p.row6403" value="" class="form-control"></td>
                            <td><input type="text" name="row6404" ng-model="p.row6404" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row6501" ng-model="p.row6501" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row6502" ng-model="p.row6502" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>6.Anticipatory grief</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row6503" ng-model="p.row6503" value="" class="form-control"></td>
                            <td><input type="text" name="row6504" ng-model="p.row6504" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row6601" ng-model="p.row6601" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row6602" ng-model="p.row6601" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>7.Other</td>
                            <td ></td>
                            <td><input type="text" name="row6603" ng-model="p.row6603" value="" class="form-control"></td>
                            <td><input type="text" name="row6604" ng-model="p.row6604" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><b>C.Medication Administration:  Demonstrates ability to administer, monitor and document medications for patients.</b>
</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>1.Medication Administration Techniques</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row6701" ng-model="p.row6701" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row6702" ng-model="p.row6702" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Oral</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row6703" ng-model="p.row6703" value="" class="form-control"></td>
                            <td><input type="text" name="row6704" ng-model="p.row6704" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row6801" ng-model="p.row6801" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row6802" ng-model="p.row6802" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Intra muscular</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row6803" ng-model="p.row6803" value="" class="form-control"></td>
                            <td><input type="text" name="row6804" ng-model="p.row6804" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row6901" ng-model="p.row6901" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row6902" ng-model="p.row6902" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Intravenous-bolus/push</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row6903" ng-model="p.row6903" value="" class="form-control"></td>
                            <td><input type="text" name="row6904" ng-model="p.row6904" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row7001" ng-model="p.row7001" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row7002" ng-model="p.row7002" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Subcutaneous</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row7003" ng-model="p.row7003" value="" class="form-control"></td>
                            <td><input type="text" name="row7004" ng-model="p.row7004" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row7101" ng-model="p.row7101" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row7102" ng-model="p.row7102" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.Total Parenteral Nutrition</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row7103" ng-model="p.row7103" value="" class="form-control"></td>
                            <td><input type="text" name="row7104" ng-model="p.row7104" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row7201" ng-model="p.row7201" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row7202" ng-model="p.row7202" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>f.Suppositories</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row7203" ng-model="p.row7203" value="" class="form-control"></td>
                            <td><input type="text" name="row7204" ng-model="p.row7204" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row7301" ng-model="p.row7204" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row7302" ng-model="p.row7302" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>g.Ear, eye, nose drops</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row7303" ng-model="p.row7303" value="" class="form-control"></td>
                            <td><input type="text" name="row7304" ng-model="p.row7304" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row7401" ng-model="p.row7401" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row7402" ng-model="p.row7402" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>h.Heparin administration</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row7403" ng-model="p.row7403" value="" class="form-control"></td>
                            <td><input type="text" name="row7404" ng-model="p.row7404" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row7501" ng-model="p.row7501" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row7502" ng-model="p.row7502" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>i.Insulin administration, site rotation</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row7503" ng-model="p.row7503" value="" class="form-control"></td>
                            <td><input type="text" name="row7504" ng-model="p.row7504" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row7601" ng-model="p.row7601" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row7602" ng-model="p.row7602" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>j.Assessment for side effects, adverse reactions, therapeutic response</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row7603"  ng-model="p.row7603" value="" class="form-control"></td>
                            <td><input type="text" name="row7604" ng-model="p.row7604" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>2.Intravenous Therapy</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>
<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>a.Technique and care of:</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>
<tr>
                            <td><select name="row7701" ng-model="p.row7701" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row7702" ng-model="p.row7702" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>1.Venipuncture</td>
                            <td>&nbsp;</td>
                            <td><input type="text" name="row7703" ng-model="p.row7703" value="" class="form-control"></td>
                            <td><input type="text" name="row7704" ng-model="p.row7704" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row7801" ng-model="p.row7801" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row7802" ng-model="p.row7802" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>2.Butterfly</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row7803" ng-model="p.row7803" value="" class="form-control"></td>
                            <td><input type="text" name="row7804" ng-model="p.row7804" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row7901" ng-model="p.row7901" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row7902" ng-model="p.row7902" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>3.Over the needle catheter</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row7903" ng-model="p.row7903" value="" class="form-control"></td>
                            <td><input type="text" name="row7904" ng-model="p.row7904" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row8001" ng-model="p.row8001" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row8002" ng-model="p.row8002" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>4.Regulation of IV flow rate, use of infusion pumps</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row8003" ng-model="p.row8003" value="" class="form-control"></td>
                            <td><input type="text" name="row8004" ng-model="p.row8004" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>b.Other</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>3.Central Venous Access Devices</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row8101" ng-model="p.row8101" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row8102" ng-model="p.row8102"  class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Drawing blood from</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row8103" ng-model="p.row8103" value="" class="form-control"></td>
                            <td><input type="text" name="row8104" ng-model="p.row8104" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row8201" ng-model="p.row8201" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row8202" ng-model="p.row8202" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Site care</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row8203" ng-model="p.row8203" value="" class="form-control"></td>
                            <td><input type="text" name="row8204" ng-model="p.row8204" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row8301" ng-model="p.row8301" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row8302" ng-model="p.row8302" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Flushing</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row8303" ng-model="p.row8303" value="" class="form-control"></td>
                            <td><input type="text" name="row8304" ng-model="p.row8304" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row8401" ng-model="p.row8401" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row8402" ng-model="p.row8402" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Cap change</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row8403" ng-model="p.row8403" value="" class="form-control"></td>
                            <td><input type="text" name="row8404" ng-model="p.row8404" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row8501" ng-model="p.row8501" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row8502" ng-model="p.row8502" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.Needleless system</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row8503" ng-model="p.row8503" value="" class="form-control"></td>
                            <td><input type="text" name="row8504" ng-model="p.row8504" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row8601" ng-model="p.row8601" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row8602" ng-model="p.row8602" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>f.Other</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row8603" ng-model="p.row8603" value="" class="form-control"></td>
                            <td><input type="text" name="row8604" ng-model="p.row8604" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><b>D.Infection Control</b></td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row8701" ng-model="p.row8701" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row8702" ng-model="p.row8702" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>1.Hand washing technique</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row8703" ng-model="p.row8703" value="" class="form-control"></td>
                            <td><input type="text" name="row8704" ng-model="p.row8704" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row8801" ng-model="p.row8801" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row8802" ng-model="p.row8802" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>2.Aseptic technique</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row8803" ng-model="p.row8803" value="" class="form-control"></td>
                            <td><input type="text" name="row8804" ng-model="p.row8804" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row8901" ng-model="p.row8901" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row8902" ng-model="p.row8902" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>3.Proper bag technique</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row8903" ng-model="p.row8903" value="" class="form-control"></td>
                            <td><input type="text" name="row8904" ng-model="p.row8904" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row9001" ng-model="p.row9001" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row9002" ng-model="p.row9002" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>4.Safe needle technique</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row9003" ng-model="p.row8904" value="" class="form-control"></td>
                            <td><input type="text" name="row9004" ng-model="p.row8904" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row9101" ng-model="p.row9101" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row9102" ng-model="p.row9102" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>5.Personal protective equipmentr</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row9103" ng-model="p.row9103" value="" class="form-control"></td>
                            <td><input type="text" name="row9104" ng-model="p.row9104" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row9201" ng-model="p.row9201" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row9202" ng-model="p.row9202" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>6.Exposure control plan</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row9203" ng-model="p.row9203" value="" class="form-control"></td>
                            <td><input type="text" name="row9204" ng-model="p.row9204" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row9301" ng-model="p.row9301" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row9302" ng-model="p.row9302" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>7.TB exposure control plan</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row9303" ng-model="p.row9303" value="" class="form-control"></td>
                            <td><input type="text" name="row9304" ng-model="p.row9304" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row9401" ng-model="p.row9401" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row9402" ng-model="p.row9402" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>8.Reporting of infections for patient and personnel</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row9403" ng-model="p.row9403" value="" class="form-control"></td>
                            <td><input type="text" name="row9404" ng-model="p.row9404" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row9501" ng-model="p.row9501" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row9502" ng-model="p.row9502" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>9.Standard precautions</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row9503" ng-model="p.row9503" value="" class="form-control"></td>
                            <td><input type="text" name="row9504" ng-model="p.row9504" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><b>E.Equipment</b></td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>1.Displays knowledge of the following</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row9601" ng-model="p.row9601" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row9602" ng-model="p.row9602" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Electric bed</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row9603" ng-model="p.row9603" value="" class="form-control"></td>
                            <td><input type="text" name="row9604" ng-model="p.row9604" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row9701" ng-model="p.row9701" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row9702" ng-model="p.row9702" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Special beds</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row9703" ng-model="p.row9703" value="" class="form-control"></td>
                            <td><input type="text" name="row9704" ng-model="p.row9704" value="" class="form-control"></td>
                         </tr>
<tr>
                            <td><select name="row9801" ng-model="p.row9801" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row9802" ng-model="p.row9801" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Alternating pressure mattress</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row9803" ng-model="p.row9803" value="" class="form-control"></td>
                            <td><input type="text" name="row9804" ng-model="p.row9804" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row9901" ng-model="p.row9901" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row9902" ng-model="p.row9902" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Infusion pumps</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row9903" ng-model="p.row9903" value="" class="form-control"></td>
                            <td><input type="text" name="row9904" ng-model="p.row9904" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row10001" ng-model="p.row10001" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row10002" ng-model="p.row10002" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.Ambulatory infusion devices</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row10003" ng-model="p.row10003" value="" class="form-control"></td>
                            <td><input type="text" name="row10004" ng-model="p.row10004" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>2.Home Glucose Monitoring:</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row10011" ng-model="p.row10011" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row10012" ng-model="p.row10012"  class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Verbalizes purpose of test</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row10013" ng-model="p.row10013" value="" class="form-control"></td>
                            <td><input type="text" name="row10014" ng-model="p.row10014" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row10021" ng-model="p.row10021" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row10022" ng-model="p.row10022" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Specimen collection</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row10023" ng-model="p.row10023" value="" class="form-control"></td>
                            <td><input type="text" name="row10024" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row10031" ng-model="p.row10031" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row10032" ng-model="p.row10032" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>c.Instrument calibration</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row10033" ng-model="p.row10033" value="" class="form-control"></td>
                            <td><input type="text" name="row10034" ng-model="p.row10034" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row10041" ng-model="p.row10041" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row10042" ng-model="p.row10042" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>d.Quality control process</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row10043" ng-model="p.row10043" value="" class="form-control"></td>
                            <td><input type="text" name="row10044" ng-model="p.row10044" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row10051" ng-model="p.row10051" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row10052" ng-model="p.row10052" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>e.Test correctly performed and interpreted</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row10053" ng-model="p.row10053" value="" class="form-control"></td>
                            <td><input type="text" name="row10054" ng-model="p.row10054" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row10061" ng-model="p.row10061" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row10062" ng-model="p.row10062" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>3.Other</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row10063" ng-model="p.row10063" value="" class="form-control"></td>
                            <td><input type="text" name="row10064" ng-model="p.row10064" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><b>F.Safety</b></td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row10071" ng-model="p.row10071" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row10072" ng-model="p.row10072" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>1.Restraints, indications and policy</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row10073" ng-model="p.row10073" value="" class="form-control"></td>
                            <td><input type="text" name="row10074" ng-model="p.row10074" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row10081" ng-model="p.row10081"  class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row10082" ng-model="p.row10082" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>2.Fire extinguishers</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row10083" ng-model="p.row10083" value="" class="form-control"></td>
                            <td><input type="text" name="row10084" ng-model="p.row10084" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row10091" ng-model="p.row10091" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row10092" ng-model="p.row10092" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>3.Emergency preparedness</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row10093" ng-model="p.row10093" value="" class="form-control"></td>
                            <td><input type="text" name="row10094" ng-model="p.row10094" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row100101" ng-model="p.row100101" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100102" ng-model="p.row100102" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>4.Hazardous materials</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row100103" ng-model="p.row100103" value="" class="form-control"></td>
                            <td><input type="text" name="row100104" ng-model="p.row100104" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row100111" ng-model="p.row100111" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100112" ng-model="p.row100112" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>5.Assessment of patient safety risks and home safety</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row100113" ng-model="p.row100113" value="" class="form-control"></td>
                            <td><input type="text" name="row100114" ng-model="p.row100114" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><b>G.Patient Education</b></td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>


<tr>
                            <td><select name="row100121" ng-model="p.row100121" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100122" ng-model="p.row100122" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>1.Determine patient and family learning needs</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row100123" ng-model="p.row100123" value="" class="form-control"></td>
                            <td><input type="text" name="row100124" ng-model="p.row100124" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row100131" ng-model="p.row100131" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100132" ng-model="p.row100132" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>2.Sets measurable objectives</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row100133" ng-model="p.row100133" value="" class="form-control"></td>
                            <td><input type="text" name="row100134" ng-model="p.row100134" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row100141" ng-model="p.row100141" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100142" ng-model="p.row100142" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>3.Develops/implements teaching plan</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row100143" ng-model="p.row100143" value="" class="form-control"></td>
                            <td><input type="text" name="row100144" ng-model="p.row100144" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row100151" ng-model="p.row100151" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100152" ng-model="p.row100152" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>4.Evaluates effectiveness of teaching</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row100153" ng-model="p.row100153" value="" class="form-control"></td>
                            <td><input type="text" name="row100154" ng-model="p.row100154" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row100161" ng-model="p.row100161" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100162" ng-model="p.row100162" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>5.Revises teaching plan based on patient needs</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row100163" ng-model="p.row100163" value="" class="form-control"></td>
                            <td><input type="text" name="row100164" ng-model="p.row100164" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row100171" ng-model="p.row100171" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100172" ng-model="p.row100172" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>6.Documents response to teaching</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row100173" ng-model="p.row100173" value="" class="form-control"></td>
                            <td><input type="text" name="row100174" ng-model="p.row100174" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>7.Provides instruction in the following:</td>
                            <td >&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row100181" ng-model="p.row100181" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100182" ng-model="p.row100182" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>a.Emergency care</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row100183" ng-model="p.row100183" value="" class="form-control"></td>
                            <td><input type="text" name="row100184" ng-model="p.row100184" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td><select name="row100191" ng-model="p.row100191" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100192" ng-model="p.row100192" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>b.Diet and nutrition</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row100193" ng-model="p.row100193" value="" class="form-control"></td>
                            <td><input type="text" name="row100194" ng-model="p.row100194" value="" class="form-control"></td>
                         </tr>

<tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>c.Medications</td>
                            <td class="text-center">*</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                         </tr>

<tr>
                            <td><select name="row100201" ng-model="p.row100201" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100202" ng-model="p.row100202" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>1.Route, dosage, frequency, side effects, adverse reactions, safe storage, labeling, indications, drug/food interactions, home monitoring program, therapeutic blood levels</td>
                            <td class="text-center">*</td>
                            <td><input type="text" name="row100203" ng-model="p.row100203" value="" class="form-control"></td>
                            <td><input type="text" name="row100204" ng-model="p.row100204" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row100211" ng-model="p.row100211" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100212" ng-model="p.row100212" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>8.Provides instruction about advance directives and patient rights</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row100213" ng-model="p.row100213" value="" class="form-control"></td>
                            <td><input type="text" name="row100214" ng-model="p.row100214" value="" class="form-control"></td>
                         </tr>


<tr>
                            <td><select name="row100221" ng-model="p.row100221"  class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td><select name="row100222" ng-model="p.row100222" class="form-control col-sm-5" >
	                                    <option value="" >Select Choice...</option>
                                            <option value="yes" >yes</option>
	                                    <option value="no" >no</option>        
                                          </select></td>
                            <td>9.Other</td>
                            <td >&nbsp;</td>
                            <td><input type="text" name="row100223" ng-model="p.row100223" value="" class="form-control"></td>
                            <td><input type="text" name="row100224" ng-model="p.row100224" value="" class="form-control"></td>
                         </tr>

                     
         </tbody>

       </table>
									                       
              </div>
              
              </div>
              </div>
              
             </div> <!-- Endofrow -->
			 
              
               <div class="col-sm-3 margin pull-right">
<div id='loadingmessage1' style='display:none;position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -50px;
    margin-left: -50px;
    width: 100px;
    height: 100px;'>
                   <img src='http://elumba.com/hrm2/asset/img/demo_wait.gif' class="image1" />
         </div> 

                  <button id="btn_emp" type="submit" class="btn btn-primary btn-block">Save</button>
               </div> 
              <div class="col-sm-3 margin pull-right">
                  <button id="btn_back" type="button"   class="btn btn-primary btn-block">Back</button>
               </div> 			   
              
       

</form>
</div>
<script src="<?php echo base_url(); ?>asset/js/jquery.validate.js" type="text/javascript"></script>
  <script type="text/javascript"> 
  debugger;
      $("#employee-form1").hide();
     
	  uid = 0;
	  
	  
	  $("#employee-form").validate({
        rules: {
            first_name: "required",
            last_name: "required",            
                       
            date_of_birth: "required",
            gender: "required",
            old_path: "required",
            nationality: "required",            
            present_address: "required",
			permanent: "required",
			service_country: "required",
            city: "required",
            country_id: "required",
            mobile: "required",
            email: "required",
            resume_id: "required",
            job_id: "required",
            date_of_interview: "required",
			official_status : "required" ,
            
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
		submitHandler: function(form,event){
					debugger;
                                
 				var sttt =	$("#service_city").val();
					debugger;
                              
			if(uid == 0)
			{
				debugger; $('#loadingmessage').show();
	  $.ajax( {
      url: "<?php echo base_url(); ?>admin/rn/save_rn/",
      type: 'POST',
      data: new FormData( form ),
      processData: false,
      contentType: false,
	  success:function(data) {  debugger;
    uid=data;
	
	   $("#employee-form1").show();
           $("#employee-form").hide();
	  }
	  });
			}
			else{  
              
           $('#loadingmessage').show();
				 $.ajax( {
      url: "<?php echo base_url(); ?>admin/rn/save_rn/"+uid,
      type: 'POST',
      data: new FormData( form ),
      processData: false,
      contentType: false,
	  success:function(data) {  debugger;
   	   
	     $("#employee-form1").show();
          $("#employee-form").hide();
	     }
	  });
				
			}
			//event.preventDefault();
			return false;
		
		}

    });


       

	
        $(document).ready(function() { 
	
		$("#btn_back").click(function(e) {
			$("#employee-form1").hide();
                        
                        $("#gif").hide();
			$("#employee-form").show();
			e.preventDefault();
        	});
	}); 
   
   
   
   var app = angular.module('myApp', []);
   app.controller('FormController',function($scope){
	debugger;
	    
	
		<?php if(empty($rn_info)) { ?>
             $scope.q = new Object();
			 $scope.q.uid =uid;
			 debugger;
		<?php }
		else {   ?>

		      $scope.q = JSON.parse('<?php echo json_encode($rn_info); ?>');
			 
			   uid = $scope.q.uid;

	    <?php	}   ?>
		
	$scope.p = new Object();
		<?php if(empty($rn_bulk)) { ?>
             $scope.p = new Object();
			 $scope.p.uid =uid;
			 debugger;
		<?php }
		else {   ?>
  
		      $scope.p = JSON.parse('<?php echo $rn_bulk->meta_data; ?>');
			 
			   uid = $scope.p.uid;

	    <?php	}   ?>
	
	
		
	$scope.submitForm = function()
	{ debugger;
	
	$scope.p.uid = uid;
	
	
	
	
	<?php if(empty($rn_bulk)) { ?>
	$('#loadingmessage1').show();
    $.ajax({ 
	url: '<?php echo base_url(); ?>admin/rn/save_rn_bulk_form',
	data : $scope.p,
	type:'POST',
	success:function(msj) 
	{   
		if(msj == "success")
		{ 			debugger;
			window.location.href = "<?php echo base_url(); ?>admin/rn/rn_list";
		}
		
	}
	
});
 
 
 <?php }
		else { 			?>
	
//end of empty     
                
                 $('#loadingmessage1').show();

					  $.ajax({ 
					url: '<?php echo base_url(); ?>admin/rn/save_rn_bulk_form/'+uid,
					data : $scope.p,
					type:'POST',
					success:function(msj) 
					{   
						if(msj == "success")
						{ 							debugger;
							window.location.href = "<?php echo base_url(); ?>admin/rn/rn_list";
						}
						
					}
					
				});
				
				
		<?php }			?>




	}
	
	
	
});



</script>
<script>
	$(document).ready(function(evt){
		$('#language-spoken').multiselect();
		$("#service_city").multiselect();
	});
</script>
        
        
        