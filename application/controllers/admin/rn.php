<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of employee
 *
 * @author NaYeM
 */
class Rn extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('rn_model');
	
    }

    public function add_rn($id = NULL) { 
        
         $data['title'] = "Add Rn";
	 	
		
	if (!empty($id)) {// retrive data from db by id  
                     
            $data['rn_info'] = $this->rn_model->all_info($id); 
            $city =  $this->rn_model->all_info($id); 
           // echo '<pre>';print_r($city);echo '</pre>';die;
           // $data['all_city'] = $this->rn_model->all_cities($city->service_county);
	  
            $data['rn_bulk'] = $this->rn_model->all_bulk($id); 
            
            // For city
           $this->rn_model->_table_name = "location_5"; //table name
           $this->rn_model->_order_by = "name";
           $where = "location_5.location_4";
           $data['all_city'] = $this->rn_model->getwhere($where, $city->service_county, 'result');
         	//echo '<pre>';print_r($data['all_city']);echo '</pre>';die;		
            if (empty($data['rn_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/rn/add_rn');
            }
        }
        
        
	// For Language
	$this->rn_model->_table_name = "hr_spokenlanguage"; //table name
	$this->rn_model->_order_by = "language_name";
	$data['all_language']=$this->rn_model->get();
	 
	// For country
	$this->rn_model->_table_name = "countries"; //table name
	$this->rn_model->_order_by = "countryName";
	$data['all_country']=$this->rn_model->get();
	
	// For county
	$this->rn_model->_table_name = "location_4"; //table name
	$this->rn_model->_order_by = "name";
	$data['all_county']=$this->rn_model->get();
           

         if (!empty($id)) {
             $service_map_info = $this->rn_model->service_areamap($city->service_city);
             foreach($service_map_info as $service_map){
               $data['service_map_lat'] = $service_map['lat'];
               $data['service_map_lng'] = $service_map['lng'];
             }
         }else{
              $data['service_map_lat'] = '33.7877778';
              $data['service_map_lng'] = '-117.8522222';
         }
             $data['cityarray'] = explode(",",$city->service_city);

	   // echo '<pre>';print_r($data);echo '</pre>';die;
        $data['subview'] = $this->load->view('admin/rn/rn', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

   public function add_hospicern($id = NULL) { 
        
         $data['title'] = "Add Rn";
		
		
	if (!empty($id)) {// retrive data from db by id  
                     
            $data['rn_info'] = $this->rn_model->all_info($id); 
            $city =  $this->rn_model->all_info($id); 
           
           // $data['all_city'] = $this->rn_model->all_cities($city->service_county);
	  
            $data['rn_bulk'] = $this->rn_model->all_bulk($id); 
            
            // For city
           $this->rn_model->_table_name = "location_5"; //table name
           $this->rn_model->_order_by = "name";
           $where = "location_5.location_4";
           $data['all_city'] = $this->rn_model->getwhere($where, $city->service_county, 'result');
         			
            if (empty($data['rn_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/rn/add_rn');
            }
        }
        
        
	// For Language
	$this->rn_model->_table_name = "hr_spokenlanguage"; //table name
	$this->rn_model->_order_by = "language_name";
	$data['all_language']=$this->rn_model->get();        
	 
	// For country
	$this->rn_model->_table_name = "countries"; //table name
	$this->rn_model->_order_by = "countryName";
	$data['all_country']=$this->rn_model->get();
	
	// For county
	$this->rn_model->_table_name = "location_4"; //table name
	$this->rn_model->_order_by = "name";
	$data['all_county']=$this->rn_model->get();
           

         if (!empty($id)) {
             $service_map_info = $this->rn_model->service_areamap($city->service_city);
             foreach($service_map_info as $service_map){
               $data['service_map_lat'] = $service_map['lat'];
               $data['service_map_lng'] = $service_map['lng'];
             }
         }else{
              $data['service_map_lat'] = '33.7877778';
              $data['service_map_lng'] = '-117.8522222';
         }
	    
        $data['subview'] = $this->load->view('admin/rn/hospicern', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

   public function saveuploaddocument_rn($id = NULL) {
        if (!empty($_FILES['TB_Questionnaire_date']['name'])) {
            $old_path = $this->input->post('TB_Questionnaire_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('TB_Questionnaire_date');
            $val == TRUE || redirect('admin/rn/add_rn');
          //  $document_data['resumes_filename'] = $val['fileName'];
			 
          //  $document_data['resumes'] = $val['path'];
            $document_data['TB_Questionnaire_date'] = $val['fullPath'];
        }  

         $this->rn_model->_table_name = "hr_employee_document"; // table name
	 
	 if (!empty($id)) {
		 $this->rn_model->_primary_key = "uid";
	 }else{
	         $this->rn_model->_primary_key = "document_id";
         }	

         $check_existing_data = $this->rn_model->check_by(array('uid' => $id), 'hr_employee_document');
	
       // $document_employee=$this->rn_model->array_from_post(array('physical_examination_expiry_date','TB_test_expiry_date'));
    
        if (!empty($check_existing_data)) {
			
            $check = $this->rn_model->save($document_data,$id);
		   
        } else {
		 
            $check = $this->rn_model->save($document_data);
        }
		 
		
	echo $document_data['TB_Questionnaire_date'];
      
   }
 
     
    public function save_rn($id = NULL) {
        // **** Employee Personal Details,Contact Details and Official Status Save And Update Start *** 
        //input post
   
       
 $data=$this->rn_model->array_from_post(array('first_name','last_name','date_of_birth','email','gender','present_address','permanent','city','phone','mobile','password','status','discipline_id'));
  // echo "<pre>";print_r($data);echo "</pre>";die;
  
	$nationality = $_POST['nationality'];
	$language ="";
	foreach($nationality as $language1){
		$language = $language.''.$language1.',';
	}
	$data['nationality'] = rtrim($language,',');
  
  
        if (!empty($_FILES['photo']['name'])) {
            $old_path = $this->input->post('old_path');
            if ($old_path) {
                unlink($old_path);
            }

            $val = $this->rn_model->uploadImage('photo');
            $val == TRUE || redirect('admin/rn/add_rn');
            $data['photo'] = $val['path'];
            $data['photo_a_path'] = $val['fullPath'];
        }

        $data['password'] = $this->hash('employee');
       // $data['discipline_id']= '2';
        $data['status'] = 1; 
     
	
   
        // ************* Save into Employee Table 
        $this->rn_model->_table_name = "hr_users"; // table name
        $this->rn_model->_primary_key = "uid"; // $id
        
           
			
        if (!empty($id)) {
             
           // $rn_id = $id;
		   
            $rn_id = $this->rn_model->save($data, $id);
        } else {
           
            $rn_id = $this->rn_model->save($data);
        }
		
        
        

     // **** Employee Personal Details,Contact Details and Official Status Save And Update End *** 


	 $this->rn_model->_table_name = "hr_userdetail"; // table name
	 
	 if (!empty($id)) {
		 $this->rn_model->_primary_key = "uid";
	 }else{
	         $this->rn_model->_primary_key = "detail_id";
         }	   
		 
   
	 $check_existing_data = $this->rn_model->check_by(array('uid' => $rn_id), 'hr_userdetail');
	
    $document_data=$this->rn_model->array_from_post(array('service_country','service_county','service_state','resume_id','date_of_hire','date_of_interview','official_status'));

       $service_city = $_POST['service_city'];
       $servicecities ="";
       foreach($service_city as $servicecity)
       {
          $servicecities = $servicecities.''.$servicecity.',';
       }
        $document_data['service_city'] = rtrim($servicecities,','); 
    
	// Resumes
	 if (!empty($_FILES['resumes']['name'])) {
            $old_path = $this->input->post('resumes_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('resumes');
            $val == TRUE || redirect('admin/rn/add_rn');
            $document_data['resumes_filename'] = $val['fileName'];
			 
            $document_data['resumes'] = $val['path'];
            $document_data['resumes_path'] = $val['fullPath'];
        }  
     
     
       //  I9 Tax  File upload
        if (!empty($_FILES['i9_tax']['name'])) {
            $old_path = $this->input->post('i9_tax_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('i9_tax');
            $val == TRUE || redirect('admin/rn/add_rn');
            $document_data['i9_tax_filename'] = $val['fileName'];
			 
            $document_data['i9_tax'] = $val['path'];
            $document_data['i9_tax_path'] = $val['fullPath'];
        } 


    
       //  Statement of acknowledgement
        if (!empty($_FILES['state_of_ack']['name'])) {
            $old_path = $this->input->post('state_of_ack_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('state_of_ack');
            $val == TRUE || redirect('admin/rn/add_rn');
            $document_data['state_of_ack_filename'] = $val['fileName'];
            $document_data['state_of_ack'] = $val['path'];
            $document_data['state_of_ack_path'] = $val['fullPath'];
        } 



      //  background check
        if (!empty($_FILES['back_check']['name'])) {
            $old_path = $this->input->post('back_check_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('back_check');
            $val == TRUE || redirect('admin/rn/add_rn');
            $document_data['back_check_filename'] = $val['fileName'];
            $document_data['back_check'] = $val['path'];
            $document_data['back_check_path'] = $val['fullPath'];
        } 

     //  w4 form
        if (!empty($_FILES['w4_form']['name'])) {
            $old_path = $this->input->post('w4_form_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('w4_form');
            $val == TRUE || redirect('admin/rn/add_rn');
            $document_data['w4_form_filename'] = $val['fileName'];
            $document_data['w4_form'] = $val['path'];
            $document_data['w4_form_path'] = $val['fullPath'];
        } 
 
		   $document_data['uid'] = $rn_id;
		   
		 //  echo "<pre>";print_r($document_data);echo "</pre>";die;
		  
        if (!empty($check_existing_data)) {
			
            $check = $this->rn_model->save($document_data,$rn_id);
		   
        } else {
			
           $check = $this->rn_model->save($document_data);
        }


         // **** Employee Personal Details , Document and Official Status Save And Update End *** 


	 $this->rn_model->_table_name = "hr_employee_document"; // table name
	 
	 if (!empty($id)) {
		 $this->rn_model->_primary_key = "uid";
	 }else{
	         $this->rn_model->_primary_key = "document_id";
         }	   
		 
         $document_employee = $this->rn_model->array_from_post(array('physical_examination_expiry_date','TB_test_expiry_date','TB_questionnaire_expiry_date','chest_XRay_results_expiry_date','influenza_immunization_expiry_date','ninety_day_performance_evaluation_expiry_date','initial_competency_assessment_expiry_date','automobile_insurance_expiry_date','CPR_card_expiry_date','drivers_license_expiry_date','equipment_management_expiry_date','hand_washing_competency_expiry_date','glucose_competency_expiry_date','prof_liability_Insurance_expiry_date','professional_license_expiry_date'));     

        

          //  job description
        if (!empty($_FILES['jobdescription']['name'])) {
            $old_path = $this->input->post('jobdescription_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('jobdescription');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['physical_examination_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['jobdescription'] = $val['fullPath'];
        }     


         //  medical history record
        if (!empty($_FILES['medical_history_record']['name'])) {
            $old_path = $this->input->post('medical_history_record_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('medical_history_record');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['medical_history_record'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['medical_history_record'] = $val['fullPath'];
        }     

       //  orientation checklist
        if (!empty($_FILES['orientation_checklist']['name'])) {
            $old_path = $this->input->post('orientation_checklist_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('orientation_checklist');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['medical_history_record'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['orientation_checklist'] = $val['fullPath'];
        }    

       //  personnel action form
        if (!empty($_FILES['personnel_action_form']['name'])) {
            $old_path = $this->input->post('personnel_action_form_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('personnel_action_form');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['medical_history_record'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['personnel_action_form'] = $val['fullPath'];
        }    

        //  hepatitis vaccine
        if (!empty($_FILES['hepatitis_vaccine']['name'])) {
            $old_path = $this->input->post('hepatitis_vaccine_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('hepatitis_vaccine');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['medical_history_record'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['hepatitis_vaccine'] = $val['fullPath'];
        }    

        //  availability coverage area
        if (!empty($_FILES['availability_coverage_area']['name'])) {
            $old_path = $this->input->post('availability_coverage_area_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('availability_coverage_area');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['medical_history_record'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['availability_coverage_area'] = $val['fullPath'];
        }   

        //  reference check
        if (!empty($_FILES['reference_check']['name'])) {
            $old_path = $this->input->post('reference_check_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('reference_check');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['medical_history_record'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['reference_check'] = $val['fullPath'];
        } 

       // cbc
         
       if (!empty($_FILES['cbc']['name'])) {
            $old_path = $this->input->post('cbc_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('cbc');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['cbc'] = $val['fullPath'];
        } 

        // obc
         
       if (!empty($_FILES['obc']['name'])) {
            $old_path = $this->input->post('obc_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('obc');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['obc'] = $val['fullPath'];
        } 


        //  physical examination form
        if (!empty($_FILES['physical_examination_date']['name'])) {
            $old_path = $this->input->post('physical_examination_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('physical_examination_date');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['physical_examination_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['physical_examination_date'] = $val['fullPath'];
        } 

     //  TB test date form
        if (!empty($_FILES['TB_test_date']['name'])) {
            $old_path = $this->input->post('TB_test_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('TB_test_date');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['TB_test_date'] = $val['fullPath'];
        } 

       //  TB Questionnaire test date form
        if (!empty($_FILES['TB_Questionnaire_date']['name'])) {
            $old_path = $this->input->post('TB_Questionnaire_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('TB_Questionnaire_date');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['TB_Questionnaire_date'] = $val['fullPath'];
        } 


        //  Chest X-Ray Results
        if (!empty($_FILES['Chest_XRay_Results']['name'])) {
            $old_path = $this->input->post('Chest_XRay_Results_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('Chest_XRay_Results');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['Chest_XRay_Results'] = $val['fullPath'];
        } 

       // Influenza Immunization / Refusal Test
       if (!empty($_FILES['Influenza_Immunization']['name'])) {
            $old_path = $this->input->post('Influenza_Immunization_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('Influenza_Immunization');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['Influenza_Immunization'] = $val['fullPath'];
        } 

      // 90 day Performance Evaluation date
         if (!empty($_FILES['ninety_day_Performance_Evaluation_date']['name'])) {
            $old_path = $this->input->post('ninety_day_Performance_Evaluation_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('ninety_day_Performance_Evaluation_date');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['ninety_day_Performance_Evaluation_date'] = $val['fullPath'];
        } 

        // Initial_Competency_Assessment_date
         if (!empty($_FILES['Initial_Competency_Assessment_date']['name'])) {
            $old_path = $this->input->post('Initial_Competency_Assessment_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('Initial_Competency_Assessment_date');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['Initial_Competency_Assessment_date'] = $val['fullPath'];
        } 

       // automobile_insurance_expires
         if (!empty($_FILES['automobile_insurance_expires']['name'])) {
            $old_path = $this->input->post('automobile_insurance_expires_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('automobile_insurance_expires');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['automobile_insurance_expires'] = $val['fullPath'];
        } 

       // CPR_Card_expires
         if (!empty($_FILES['CPR_Card_expires']['name'])) {
            $old_path = $this->input->post('CPR_Card_expires_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('CPR_Card_expires');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['CPR_Card_expires'] = $val['fullPath'];
        } 

       // drivers_license_expires
         if (!empty($_FILES['drivers_license_expires']['name'])) {
            $old_path = $this->input->post('drivers_license_expires_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('drivers_license_expires');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['drivers_license_expires'] = $val['fullPath'];
        } 

       // equipment_management_date
        if (!empty($_FILES['equipment_management_date']['name'])) {
            $old_path = $this->input->post('equipment_management_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('equipment_management_date');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['equipment_management_date'] = $val['fullPath'];
        } 

       // hand_washing_competency_date
        if (!empty($_FILES['hand_washing_competency_date']['name'])) {
            $old_path = $this->input->post('hand_washing_competency_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('hand_washing_competency_date');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['hand_washing_competency_date'] = $val['fullPath'];
        } 
        
       // glucose_competency_date
        if (!empty($_FILES['glucose_competency_date']['name'])) {
            $old_path = $this->input->post('glucose_competency_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('glucose_competency_date');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['glucose_competency_date'] = $val['fullPath'];
        } 
 
       // prof_liability_insurance_expires
        if (!empty($_FILES['prof_liability_insurance_expires']['name'])) {
            $old_path = $this->input->post('prof_liability_insurance_expires_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('prof_liability_insurance_expires');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['prof_liability_insurance_expires'] = $val['fullPath'];
        } 

      // professional_license_expires
       if (!empty($_FILES['professional_license_expires']['name'])) {
            $old_path = $this->input->post('professional_license_expires_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->rn_model->uploadFile('professional_license_expires');
            $val == TRUE || redirect('admin/rn/add_rn');
           // echo '<pre>';print_r($val);echo '</pre>';die;
           // $document_employee['TB_test_date'] = $val['fileName'];
           // $document_data['w4_form'] = $val['path'];
           $document_employee['professional_license_expires'] = $val['fullPath'];
        } 

        $document_employee['uid'] = $rn_id;

	 $check_existing_data = $this->rn_model->check_by(array('uid' => $rn_id), 'hr_employee_document');
	
       // $document_employee=$this->rn_model->array_from_post(array('physical_examination_expiry_date','TB_test_expiry_date'));
    
        if (!empty($check_existing_data)) {
			
            $check = $this->rn_model->save($document_employee,$rn_id);
		   
        } else {
			
            $check = $this->rn_model->save($document_employee);
        }
		 
      echo $service_city;	
      // echo $rn_id;
	
        
    }

     public function rn_list($id = NULL) { 
            $data['title'] = "Rn List";
            $data['all_rn_info'] = $this->rn_model->all_rn_list();
		//  echo "<pre>";print_r($data['all_rn_info']);echo "</pre>";die;
            $data['subview'] = $this->load->view('admin/rn/rn_list', $data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }

   public function rn_hospicelist($id = NULL) {
            $data['title'] = "Hospice Rn List";
            $data['all_rn_info'] = $this->rn_model->all_rn_hospicelist();
		 // echo "<pre>";print_r($data['all_rn_info']);echo "</pre>";die;
            $data['subview'] = $this->load->view('admin/rn/rn_list', $data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }

   public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }

	
	public function view_rn($id = NULL) {
        $data['title'] = "View Nurse Details";
        if (!empty($id)) {
            $data['rn_info'] = $this->rn_model->all_info($id); 
			// echo "<pre>";print_r( $data['rn_info']);echo "</pre>";die;
            if (empty($data['rn_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/rn/rn_list');
            }
        }
		
		
		$data['rn_bulk'] = $this->rn_model->all_bulk($id);
		$name=$data['rn_info']->first_name;
	    $info =json_decode($data['rn_bulk']->meta_data);
	    $info->first_name = $name;
		$data['info1']=$info;
	
        $data['subview'] = $this->load->view('admin/rn/view_rn', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

	public function delete_rn($id) {
  
			   $this->rn_model->_table_name = "hr_users"; // table name
				$this->rn_model->_primary_key = "uid"; // $id
			    $this->rn_model->delete($id);
			
			   $this->rn_model->_table_name = "hr_userdetail"; // table name
				$this->rn_model->_primary_key = "uid"; // $id
			    $this->rn_model->delete($id);
				
				$type = "success";
               $message = "Employee Information Successfully Delete!";
               set_message($type, $message);
               redirect('admin/rn/rn_list'); //redirect page

 }
 
 public function rn_list_pdf() {
        $data['title'] = "Employee List";
        $data['all_rn_info'] = $this->rn_model->all_rn_list();
		
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/rn/rn_list_pdf', $data, true);
        pdf_create($view_file, 'Rn List');
    }
 
 
  public function make_pdf($id) {
       
		$data['title'] = "RN Form";
        $data['rn_info'] = $this->rn_model->all_info($id);
		$name=$data['rn_info']->first_name;
		
		$data['rn_bulk'] = $this->rn_model->all_bulk($id);
	    $info =json_decode($data['rn_bulk']->meta_data);
	    $info->first_name = $name;
		
        $this->load->helper('dompdf');
	   
        $view_file = $this->load->view('admin/rn/rn_view_pdf',$info, true);
        pdf_create($view_file,$name);
		
    }
 
 
 public function save_rn_bulk_form($id = NULL)
 {
	  $uid = $_POST['uid'];
	  $employment = $_POST['date_of_employment'];
	  $completion = $_POST['date_of_completion'];
	  $meta_data = json_encode($_POST);
	  $bulkdata = array(
                          'uid' => $uid,
	                  'meta_data' => $meta_data,
                          'date_of_employment' => $employment,
                          'date_of_completion' => $completion
                          );

	 $this->rn_model->_table_name = "hr_rn_bulk"; // table name
    
	 
	   if (!empty($id)) {
		   $this->rn_model->_primary_key = "uid";
		  $id = $this->rn_model->save($bulkdata,$id);  
	
	   }
	  else
      {   $this->rn_model->_primary_key = "rn_id";
		  $id = $this->rn_model->save($bulkdata);  
	  }		  
	 
	    $type = "success";
		echo $type;
	
 }
 
 
   public function pe_form($id = NULL){
	
		
		$uid = $_POST['user'];
		$discipline_id = $_POST['discipline_id'];
		$meta_data =json_encode($_POST);
	  
		
		$bulkdata = array( 
		 'uid' =>$uid,
		 'discipline_id'=>$discipline_id,
		 'meta_data' =>$meta_data
		 );
	
	
	//echo "<pre>";print_r($meta_data);echo "</pre>";die;
    
	$this->rn_model->_table_name = "pe_bulk";
	 if (!empty($id)) {
		   $this->rn_model->_primary_key = "id";
		  $id = $this->rn_model->save($bulkdata,$id);  
	
	   }
	else{
	
	   // table name
    
	  $this->rn_model->_primary_key = "id";
      $id = $this->rn_model->save($bulkdata);  
	  		  
	}
	
	
	    $type = "success";
		echo $type;

	}
	
	
	public function pe_delete($id){
		
		
		         $this->rn_model->_table_name = "pe_bulk"; // table name
				$this->rn_model->_primary_key = "id"; // $id
			    $this->rn_model->delete($id);
			
			    $this->rn_model->delete($id);
				
				$type = "success";
               $message = "Employee Information Successfully Delete!";
               set_message($type, $message);
               redirect('admin/lvn/pe_list');
		
		
		
		
	}
	
	
    public function language_list() {
		$id = $_POST['id'];
		$data['all_language_info'] = $this->rn_model->all_language($id);
		// echo "<pre>";print_r($data['all_language_info']);echo "</pre>";die;
		echo json_encode($data['all_language_info']);
    }	
	
	
    public function location_list() {
               // $data['title'] = "Rn List";
            $id = $_POST['id'];
            $data['all_city_info'] = $this->rn_model->all_location($id);
		 // echo "<pre>";print_r($data['all_city_info']);echo "</pre>";die;
                // $data['subview'] = $this->load->view('admin/rn/rn_list', $data, TRUE);
                //  $this->load->view('admin/_layout_main', $data);
		  // echo $data['all_city_info'];
	    echo json_encode($data['all_city_info']);
		//  echo $data['all_city_info'];
    }
 
    public function service_areamap(){
       $id = $_POST['id'];
       $data['service_map_info'] = $this->rn_model->service_areamap($id);
       echo json_encode($data['service_map_info']);
    }
 
  
	
}
