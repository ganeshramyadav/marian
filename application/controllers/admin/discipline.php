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
class Discipline extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('discipline_model');
	$this->load->model('settings_model');
    }

    public function add_discipline($id = NULL) { 
        
         $data['title'] = "Add Discipline";
	
        $data['discipline_id'] = $id;

         // For Language
	$this->discipline_model->_table_name = "hr_spokenlanguage"; //table name
	$this->discipline_model->_order_by = "language_name";
	$data['all_language']=$this->discipline_model->get();
        	 
          // For country
           $this->discipline_model->_table_name = "countries"; //table name
           $this->discipline_model->_order_by = "countryName";
           $data['all_country']=$this->discipline_model->get();

         // For county
           $this->discipline_model->_table_name = "location_4"; //table name
           $this->discipline_model->_order_by = "name";
           $data['all_county']=$this->discipline_model->get();
           

        
              $data['service_map_lat'] = '33.7877778';
              $data['service_map_lng'] = '-117.8522222';
        
            

	   
        $data['subview'] = $this->load->view('admin/discipline/discipline', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

   public function edit_discipline($id = NULL) {  
        
         $data['title'] = "Edit Discipline";
	
        if (!empty($id)) {// retrive data from db by id  
                     
            $data['rn_info'] = $this->discipline_model->all_info($id); 
            $data['form_info'] = $this->discipline_model->all_info_form($id);
            $city =  $this->discipline_model->all_info($id); 
            $data['discipline_id'] = $city->discipline_id; 
          //  echo '<pre>';print_r($data);echo '</pre>';die;
            
        $dob = $city->date_of_birth;
        if($dob == NULL){ 
	    $dob = "0000-00-00";
        }    
        
        if($dob != "0000-00-00"){
            $date_of_birth = date('m-d-Y', strtotime($dob));
            $dob = str_replace('-', '/', $date_of_birth);
        }
        $data['rn_info']->date_of_birth = $dob;

       $doi = $city->date_of_interview;
       if($doi == NULL){ 
	     $doi = "0000-00-00";
	} 
       if($doi != "0000-00-00"){          
             $date_of_interview = date('m-d-Y', strtotime($doi));
             $doi = str_replace('-', '/', $date_of_interview);
       }
       if($doi == "0000-00-00"){
              $doi = " ";
        }
       $data['rn_info']->date_of_interview = $doi;

       $doh = $city->date_of_hire;
       if($doh == NULL){ 
	     $doh = "0000-00-00";
       }         
       if($doh !="0000-00-00"){
        $date_of_hire = date('m-d-Y', strtotime($doh));
        $doh = str_replace('-', '/', $date_of_hire);
       }
       if($doh == "0000-00-00"){
              $doh = " ";
        }
        $data['rn_info']->date_of_hire = $doh;

       $physical_examination_expiry_date = $city->physical_examination_expiry_date;
       if($physical_examination_expiry_date == NULL){ 
			$physical_examination_expiry_date = "0000-00-00";
		}  
       if($physical_examination_expiry_date!="0000-00-00"){
           $physical_examination_expiry_date = date('m-d-Y', strtotime($physical_examination_expiry_date));
           $physical_examination_expiry_date = str_replace('-', '/', $physical_examination_expiry_date);
       } 
         $data['rn_info']->physical_examination_expiry_date = $physical_examination_expiry_date; 


       $TB_test_expiry_date = $city->TB_test_expiry_date;
        if($TB_test_expiry_date == NULL){ 
			$TB_test_expiry_date = "0000-00-00";
		}  
       
       if($TB_test_expiry_date!="0000-00-00"){
           $TB_test_expiry_date = date('m-d-Y', strtotime($TB_test_expiry_date));
           $TB_test_expiry_date = str_replace('-', '/', $TB_test_expiry_date);
       } 
        $data['rn_info']->TB_test_expiry_date = $TB_test_expiry_date;           
        
       $TB_questionnaire_expiry_date = $city->TB_questionnaire_expiry_date;
         if($TB_questionnaire_expiry_date == NULL){ 
			$TB_questionnaire_expiry_date = "0000-00-00";
		}   
       if($TB_questionnaire_expiry_date!="0000-00-00"){   
        $TB_questionnaire_expiry_date = date('m-d-Y', strtotime($TB_questionnaire_expiry_date));
        $TB_questionnaire_expiry_date = str_replace('-', '/', $TB_questionnaire_expiry_date);
       }
        $data['rn_info']->TB_questionnaire_expiry_date = $TB_questionnaire_expiry_date;
       
       $chest_XRay_results_expiry_date = $city->chest_XRay_results_expiry_date;
        if($chest_XRay_results_expiry_date == NULL){ 
			$chest_XRay_results_expiry_date = "0000-00-00";
		}
       if($chest_XRay_results_expiry_date!="0000-00-00"){            
        $chest_XRay_results_expiry_date = date('m-d-Y', strtotime($chest_XRay_results_expiry_date));
        $chest_XRay_results_expiry_date = str_replace('-', '/', $chest_XRay_results_expiry_date);
       }
        $data['rn_info']->chest_XRay_results_expiry_date = $chest_XRay_results_expiry_date;

       $influenza_immunization_expiry_date = $city->influenza_immunization_expiry_date;
         if($influenza_immunization_expiry_date == NULL){ 
			$influenza_immunization_expiry_date = "0000-00-00";
		}
       if($influenza_immunization_expiry_date!="0000-00-00"){           
        $influenza_immunization_expiry_date = date('m-d-Y', strtotime($influenza_immunization_expiry_date));
        $influenza_immunization_expiry_date = str_replace('-', '/', $influenza_immunization_expiry_date);
       }
        $data['rn_info']->influenza_immunization_expiry_date = $influenza_immunization_expiry_date;

       $ninety_day_performance_evaluation_expiry_date = $city->ninety_day_performance_evaluation_expiry_date;
          if($ninety_day_performance_evaluation_expiry_date == NULL){ 
			$ninety_day_performance_evaluation_expiry_date = "0000-00-00";
		}
       if($ninety_day_performance_evaluation_expiry_date!="0000-00-00"){          
        $ninety_day_performance_evaluation_expiry_date = date('m-d-Y', strtotime($ninety_day_performance_evaluation_expiry_date));
        $ninety_day_performance_evaluation_expiry_date = str_replace('-', '/', $ninety_day_performance_evaluation_expiry_date);
       }
        $data['rn_info']->ninety_day_performance_evaluation_expiry_date = $ninety_day_performance_evaluation_expiry_date;

       $initial_competency_assessment_expiry_date = $city->initial_competency_assessment_expiry_date;
        if($initial_competency_assessment_expiry_date == NULL){ 
			$initial_competency_assessment_expiry_date = "0000-00-00";
		}
       if($initial_competency_assessment_expiry_date!="0000-00-00"){            
        $initial_competency_assessment_expiry_date = date('m-d-Y', strtotime($initial_competency_assessment_expiry_date));
        $initial_competency_assessment_expiry_date = str_replace('-', '/', $initial_competency_assessment_expiry_date);
       }
        $data['rn_info']->initial_competency_assessment_expiry_date = $initial_competency_assessment_expiry_date;

       $automobile_insurance_expiry_date = $city->automobile_insurance_expiry_date;
          if($automobile_insurance_expiry_date == NULL){ 
			$automobile_insurance_expiry_date = "0000-00-00";
		}
       if($automobile_insurance_expiry_date!="0000-00-00"){            
        $automobile_insurance_expiry_date = date('m-d-Y', strtotime($automobile_insurance_expiry_date));
        $automobile_insurance_expiry_date = str_replace('-', '/', $automobile_insurance_expiry_date);
       }
        $data['rn_info']->automobile_insurance_expiry_date = $automobile_insurance_expiry_date;

       $CPR_card_expiry_date = $city->CPR_card_expiry_date;
         if($CPR_card_expiry_date == NULL){ 
			$CPR_card_expiry_date = "0000-00-00";
		}
       if($CPR_card_expiry_date!="0000-00-00"){            
        $CPR_card_expiry_date = date('m-d-Y', strtotime($CPR_card_expiry_date));
        $CPR_card_expiry_date = str_replace('-', '/', $CPR_card_expiry_date);
       }
        $data['rn_info']->CPR_card_expiry_date = $CPR_card_expiry_date;

        $drivers_license_expiry_date = $city->drivers_license_expiry_date;
          if($drivers_license_expiry_date == NULL){ 
			$drivers_license_expiry_date = "0000-00-00";
		}
        if($drivers_license_expiry_date!="0000-00-00"){           
          $drivers_license_expiry_date = date('m-d-Y', strtotime($drivers_license_expiry_date));
          $drivers_license_expiry_date = str_replace('-', '/', $drivers_license_expiry_date);
        }
        $data['rn_info']->drivers_license_expiry_date = $drivers_license_expiry_date;

      $equipment_management_expiry_date = $city->equipment_management_expiry_date;
          if($equipment_management_expiry_date == NULL){ 
			$equipment_management_expiry_date = "0000-00-00";
		}
       if($equipment_management_expiry_date!="0000-00-00"){            
        $equipment_management_expiry_date = date('m-d-Y', strtotime($equipment_management_expiry_date));
        $equipment_management_expiry_date = str_replace('-', '/', $equipment_management_expiry_date);
       }
        $data['rn_info']->equipment_management_expiry_date = $equipment_management_expiry_date;

       $hand_washing_competency_expiry_date = $city->hand_washing_competency_expiry_date;
         if($hand_washing_competency_expiry_date == NULL){ 
			$hand_washing_competency_expiry_date = "0000-00-00";
		}
       if($hand_washing_competency_expiry_date!="0000-00-00"){            
        $hand_washing_competency_expiry_date = date('m-d-Y', strtotime($hand_washing_competency_expiry_date));
        $hand_washing_competency_expiry_date = str_replace('-', '/', $hand_washing_competency_expiry_date);
       }
        $data['rn_info']->hand_washing_competency_expiry_date = $hand_washing_competency_expiry_date;

      $glucose_competency_expiry_date = $city->glucose_competency_expiry_date;
          if($glucose_competency_expiry_date == NULL){ 
			$glucose_competency_expiry_date = "0000-00-00";
		}
       if($glucose_competency_expiry_date!="0000-00-00"){            
        $glucose_competency_expiry_date = date('m-d-Y', strtotime($glucose_competency_expiry_date));
        $glucose_competency_expiry_date = str_replace('-', '/', $glucose_competency_expiry_date);
       }
        $data['rn_info']->glucose_competency_expiry_date = $glucose_competency_expiry_date;

      $prof_liability_Insurance_expiry_date = $city->prof_liability_Insurance_expiry_date;
        if($prof_liability_Insurance_expiry_date == NULL){ 
			$prof_liability_Insurance_expiry_date = "0000-00-00";
		}
       if($prof_liability_Insurance_expiry_date!="0000-00-00"){            
        $prof_liability_Insurance_expiry_date = date('m-d-Y', strtotime($prof_liability_Insurance_expiry_date));
        $prof_liability_Insurance_expiry_date = str_replace('-', '/', $prof_liability_Insurance_expiry_date);
       }
        $data['rn_info']->prof_liability_Insurance_expiry_date = $prof_liability_Insurance_expiry_date;

     $professional_license_expiry_date = $city->professional_license_expiry_date;
          if($professional_license_expiry_date == NULL){ 
			$professional_license_expiry_date = "0000-00-00";
		}
       if($professional_license_expiry_date!="0000-00-00"){            
        $professional_license_expiry_date = date('m-d-Y', strtotime($professional_license_expiry_date));
        $professional_license_expiry_date = str_replace('-', '/', $professional_license_expiry_date);
       }
        $data['rn_info']->professional_license_expiry_date = $professional_license_expiry_date;


           // echo '<pre>';print_r($data);echo '</pre>';die;
           // $data['all_city'] = $this->discipline_model->all_cities($city->service_county);
	  
            $data['rn_bulk'] = $this->discipline_model->all_bulk($id); 
            
            // For city
           $this->discipline_model->_table_name = "location_5"; //table name
           $this->discipline_model->_order_by = "name";
           $where = "location_5.location_4";
           $data['all_city'] = $this->discipline_model->getwhere($where, $city->service_county, 'result');
         		
            if (empty($data['rn_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/discipline/add_discipline');
            }
        }

          // For Language
	$this->discipline_model->_table_name = "hr_spokenlanguage"; //table name
	$this->discipline_model->_order_by = "language_name";
	$data['all_language']=$this->discipline_model->get();
		 
          // For country
           $this->discipline_model->_table_name = "countries"; //table name
           $this->discipline_model->_order_by = "countryName";
           $data['all_country']=$this->discipline_model->get();

         // For county
           $this->discipline_model->_table_name = "location_4"; //table name
           $this->discipline_model->_order_by = "name";
           $data['all_county']=$this->discipline_model->get();
           

         if (!empty($id)) {
             $service_map_info = $this->discipline_model->service_areamap($city->service_city);
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
        $data['subview'] = $this->load->view('admin/discipline/discipline', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }


    public function save_discipline1($id = NULL) {

        // **** Mail to New User with login credential *** 
           if(empty($id)){
               $adminid = $this->session->userdata['employee_id'];
               $admin_info = $this->settings_model->select_general_infobyuserid($adminid);
               $agency_name = $admin_info->agency_mailname;
               $admin_name = $this->session->userdata['user_name'];
               $admin_email = $this->session->userdata['employee_email'];
               $to = $_POST['email'];
               $name = $_POST['first_name'].' '.$_POST['last_name'];
               $username = $_POST['user_name'];
               $from = $admin_email;
               $subject = 'Welcome to '.$agency_name;
               $readmail = array();
               if(!empty($admin_info->phone))
                 $agency_contactno = $admin_info->phone;
               else
                 $agency_contactno = $admin_info->mobile;
              $readmail['agency_name'] = $agency_name;
              $readmail['agency_contactno'] = $agency_contactno;
              $readmail['agency_website'] = $admin_info->website;
               $readmail['username'] = $username;
               $data['read_mail'] = $readmail;
           $view_page = $this->load->view('admin/mailbox/newuser_welcome', $data, TRUE);
           $send_email = $this->mail->sendEmail($from, $to, $subject, $view_page);
     }
           
          echo $admin_email;
    }     
   
       
     public function save_discipline($id = NULL) {

        // **** Mail to New User with login credential *** 
            if(empty($id)){
               $adminid = $this->session->userdata['employee_id'];
               $admin_info = $this->settings_model->select_general_infobyuserid($adminid);
               $agency_name = $admin_info->agency_mailname;
               $admin_name = $this->session->userdata['user_name'];
               $admin_email = $this->session->userdata['employee_email'];
               $to = $_POST['email'];
               $name = $_POST['first_name'].' '.$_POST['last_name'];
               $username = $_POST['user_name'];
               $from = $admin_email;
               $subject = 'Welcome to '.$agency_name;
               $readmail = array();
               if(!empty($admin_info->phone))
                 $agency_contactno = $admin_info->phone;
               else
                 $agency_contactno = $admin_info->mobile;
              $readmail['agency_name'] = $agency_name;
              $readmail['agency_contactno'] = $agency_contactno;
              $readmail['agency_website'] = $admin_info->website;
               $readmail['username'] = $username;
               $data['read_mail'] = $readmail;
           $view_page = $this->load->view('admin/mailbox/newuser_welcome', $data, TRUE);
           $send_email = $this->mail->sendEmail($from, $to, $subject, $view_page);
     }


        // **** Employee Personal Details,Contact Details and Official Status Save And Update Start *** 

          $date_of_birth = $_POST['date_of_birth'];
        if($date_of_birth!="")
          $date_of_birth = date('Y-m-d', strtotime($date_of_birth));
        
           
          $data=$this->discipline_model->array_from_post(array('first_name','last_name','user_name','email','gender','present_address','permanent','city','phone','mobile','status','fax','discipline_id','ssn'));
  
        $data['date_of_birth'] = $date_of_birth;
       
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

            $val = $this->discipline_model->uploadImage('photo');
            $val == TRUE || redirect('admin/discipline/add_discipline');
            $data['photo'] = $val['path'];
            $data['photo_a_path'] = $val['fullPath'];
        }

     //   if (!empty($_FILES['signature']['name'])) {
     //       $old_path1 = $this->input->post('oldsign_path');
     //       if ($old_path1) {
     //           unlink($old_path1);
     //       }

       //     $val = $this->discipline_model->uploadImage('signature');
       //     $val == TRUE || redirect('admin/discipline/add_discipline');
       //     $data['signature'] = $val['path'];
       //     $data['signature_a_path'] = $val['fullPath'];
       // }

        
       $signature = $_POST['signature'];
       $data['signature'] = $signature;    
        if (empty($id)) {
           $data['password'] = $this->hash('employee');
        }
        $data['status'] = 1; 
     
	$data['users_id'] = $this->session->userdata['employee_id'];
   
        // ************* Save into Employee Table 
        $this->discipline_model->_table_name = "hr_users"; // table name
        $this->discipline_model->_primary_key = "uid"; // $id
        
        if (!empty($id)) {
             $rn_id = $this->discipline_model->save($data, $id);
        } else {
             $rn_id = $this->discipline_model->save($data);
        }

        


        // **** Employee Personal Details,Contact Details and Official Status Save And Update End *** 


	 $this->discipline_model->_table_name = "hr_userdetail"; // table name
	 
	 if (!empty($id)) {
		 $this->discipline_model->_primary_key = "uid";
	 }else{
	         $this->discipline_model->_primary_key = "detail_id";
         }	   
		 
   
	 $check_existing_data = $this->discipline_model->check_by(array('uid' => $rn_id), 'hr_userdetail');
	
    $document_data=$this->discipline_model->array_from_post(array('service_country','service_county','service_state','resume_id','official_status'));

         $date_of_interview = $_POST['date_of_interview'];
      if($date_of_interview!="")
          $date_of_interview = date('Y-m-d', strtotime($date_of_interview));
    
         $date_of_hire = $_POST['date_of_hire'];
       if($date_of_hire!="")
          $date_of_hire = date('Y-m-d', strtotime($date_of_hire));

       $document_data['date_of_interview'] = $date_of_interview;
       $document_data['date_of_hire'] = $date_of_hire;

    
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
            $val = $this->discipline_model->uploadFile('resumes');
            $val == TRUE || redirect('admin/discipline/add_discipline');
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
            $val = $this->discipline_model->uploadAllType('i9_tax');
            $val == TRUE || redirect('admin/discipline/add_discipline');
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
            $val = $this->discipline_model->uploadAllType('state_of_ack');
            $val == TRUE || redirect('admin/discipline/add_discipline');
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
            $val = $this->discipline_model->uploadAllType('back_check');
            $val == TRUE || redirect('admin/discipline/add_discipline');
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
            $val = $this->discipline_model->uploadAllType('w4_form');
            $val == TRUE || redirect('admin/discipline/add_discipline');
            $document_data['w4_form_filename'] = $val['fileName'];
            $document_data['w4_form'] = $val['path'];
            $document_data['w4_form_path'] = $val['fullPath'];
        }
        
     //  Electronic Signature

        if (!empty($_FILES['electronic_signature']['name'])) {
            $old_path = $this->input->post('electronic_signature_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadAllType('electronic_signature');
            $val == TRUE || redirect('admin/discipline/add_discipline');
            $document_data['electronic_signature_filename'] = $val['fileName'];
            $document_data['electronic_signature'] = $val['path'];
            $document_data['electronic_signature_path'] = $val['fullPath'];
        }        

        $document_data['uid'] = $rn_id;
			 		  
        if (!empty($check_existing_data)) {
	      $check = $this->discipline_model->save($document_data,$rn_id);
	} else {
	      $check = $this->discipline_model->save($document_data);
        }

        

 // **** Employee Personal Details , Document and Official Status Save And Update End *** 

	 $this->discipline_model->_table_name = "hr_employee_document"; // table name
	 if (!empty($id)) {
		 $this->discipline_model->_primary_key = "uid";
	 }else{
	         $this->discipline_model->_primary_key = "document_id";
         }	   
		 
        $document_employee = array();

        //  medical history record
        if (!empty($_FILES['medical_history_record']['name'])) {
            $old_path = $this->input->post('medical_history_record_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('medical_history_record');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['medical_history_record'] = $val['path'];
        }     

       //  orientation checklist
        if (!empty($_FILES['orientation_checklist']['name'])) {
            $old_path = $this->input->post('orientation_checklist_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('orientation_checklist');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['orientation_checklist'] = $val['path'];
        }    

       //  personnel action form
        if (!empty($_FILES['personnel_action_form']['name'])) {
            $old_path = $this->input->post('personnel_action_form_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('personnel_action_form');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['personnel_action_form'] = $val['path'];
        }    

        //  hepatitis vaccine
        if (!empty($_FILES['hepatitis_vaccine']['name'])) {
            $old_path = $this->input->post('hepatitis_vaccine_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('hepatitis_vaccine');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['hepatitis_vaccine'] = $val['path'];
        }    

       

        //  reference check
        if (!empty($_FILES['reference_check']['name'])) {
            $old_path = $this->input->post('reference_check_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('reference_check');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['reference_check'] = $val['path'];
        } 
        
        
       //  reference check
        if (!empty($_FILES['reference_check1']['name'])) {
            $old_path = $this->input->post('reference_check1_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('reference_check1');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['reference_check1'] = $val['path'];
        } 

       // cbc
         
       if (!empty($_FILES['cbc']['name'])) {
            $old_path = $this->input->post('cbc_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('cbc');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['cbc'] = $val['path'];
        } 

        // obc
         
       if (!empty($_FILES['obc']['name'])) {
            $old_path = $this->input->post('obc_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('obc');
            $val == TRUE || redirect('admin/discipline/add_discipline');
          
           $document_employee['obc'] = $val['path'];
        } 

         //  physical examination form
        if (!empty($_FILES['physical_examination_date']['name'])) {
            $old_path = $this->input->post('physical_examination_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('physical_examination_date');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['physical_examination_date'] = $val['path'];
        } 

     //  TB test date form
        if (!empty($_FILES['TB_test_date']['name'])) {
            $old_path = $this->input->post('TB_test_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('TB_test_date');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['TB_test_date'] = $val['path'];
        } 

       //  TB Questionnaire test date form
        if (!empty($_FILES['TB_Questionnaire_date']['name'])) {
            $old_path = $this->input->post('TB_Questionnaire_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('TB_Questionnaire_date');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['TB_Questionnaire_date'] = $val['path'];
        }

        //  Chest X-Ray Results
        if (!empty($_FILES['Chest_XRay_Results']['name'])) {
            $old_path = $this->input->post('Chest_XRay_Results_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('Chest_XRay_Results');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['Chest_XRay_Results'] = $val['path'];
        } 

       // Influenza Immunization / Refusal Test
       if (!empty($_FILES['Influenza_Immunization']['name'])) {
            $old_path = $this->input->post('Influenza_Immunization_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('Influenza_Immunization');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['Influenza_Immunization'] = $val['path'];
        } 

      // 90 day Performance Evaluation date
         if (!empty($_FILES['ninety_day_Performance_Evaluation_date']['name'])) {
            $old_path = $this->input->post('ninety_day_Performance_Evaluation_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('ninety_day_Performance_Evaluation_date');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['ninety_day_Performance_Evaluation_date'] = $val['path'];
        } 

        // Initial_Competency_Assessment_date
         if (!empty($_FILES['Initial_Competency_Assessment_date']['name'])) {
            $old_path = $this->input->post('Initial_Competency_Assessment_date_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('Initial_Competency_Assessment_date');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['Initial_Competency_Assessment_date'] = $val['path'];
        } 

       // automobile_insurance_expires
         if (!empty($_FILES['automobile_insurance_expires']['name'])) {
            $old_path = $this->input->post('automobile_insurance_expires_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('automobile_insurance_expires');
            $val == TRUE || redirect('admin/discipline/add_discipline');
          
           $document_employee['automobile_insurance_expires'] = $val['path'];
        } 

       // CPR_Card_expires
         if (!empty($_FILES['CPR_Card_expires']['name'])) {
            $old_path = $this->input->post('CPR_Card_expires_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('CPR_Card_expires');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['CPR_Card_expires'] = $val['path'];
        } 

       // drivers_license_expires
         if (!empty($_FILES['drivers_license_expires']['name'])) {
            $old_path = $this->input->post('drivers_license_expires_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('drivers_license_expires');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['drivers_license_expires'] = $val['path'];
        } 
  
        // prof_liability_insurance_expires
        if (!empty($_FILES['prof_liability_insurance_expires']['name'])) {
            $old_path = $this->input->post('prof_liability_insurance_expires_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('prof_liability_insurance_expires');
            $val == TRUE || redirect('admin/discipline/add_discipline');
          
           $document_employee['prof_liability_insurance_expires'] = $val['path'];
        } 

      // professional_license_expires
       if (!empty($_FILES['professional_license_expires']['name'])) {
            $old_path = $this->input->post('professional_license_expires_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('professional_license_expires');
            $val == TRUE || redirect('admin/discipline/add_discipline');
          
           $document_employee['professional_license_expires'] = $val['path'];
        } 




      // professional_license_verification
       if (!empty($_FILES['professional_license_verification']['name'])) {
            $old_path = $this->input->post('professional_license_verification_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('professional_license_verification');
            $val == TRUE || redirect('admin/discipline/add_discipline');
          
           $document_employee['professional_license_verification'] = $val['path'];
        } 

        // SSN
        if (!empty($_FILES['ssndoc']['name'])) {
            $old_path = $this->input->post('ssndoc_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('ssndoc');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['ssndoc'] = $val['path'];
        }


      //other files
         if (!empty($_FILES['other1']['name'])) {
            $old_path = $this->input->post('other1_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('other1');
            $val == TRUE || redirect('admin/discipline/add_discipline');
          
           $document_employee['other1'] = $val['path'];
        } 

        if (!empty($_FILES['other2']['name'])) {
            $old_path = $this->input->post('other2_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('other2');
            $val == TRUE || redirect('admin/discipline/add_discipline');
          
           $document_employee['other2'] = $val['path'];
        } 

         if (!empty($_FILES['other3']['name'])) {
            $old_path = $this->input->post('other3_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('other3');
            $val == TRUE || redirect('admin/discipline/add_discipline');
          
           $document_employee['other3'] = $val['path'];
        } 

        $physical_examination_expiry_date = $_POST['physical_examination_expiry_date'];
        if($physical_examination_expiry_date!="")
           $physical_examination_expiry_date = date('Y-m-d', strtotime($physical_examination_expiry_date));
        $document_employee['physical_examination_expiry_date'] = $physical_examination_expiry_date;

        $TB_test_expiry_date = $_POST['TB_test_expiry_date'];
        if($TB_test_expiry_date!="")
          $TB_test_expiry_date = date('Y-m-d', strtotime($TB_test_expiry_date));
        $document_employee['TB_test_expiry_date'] = $TB_test_expiry_date;

        $TB_questionnaire_expiry_date = $_POST['TB_questionnaire_expiry_date'];
        if($TB_questionnaire_expiry_date!="")
          $TB_questionnaire_expiry_date = date('Y-m-d', strtotime($TB_questionnaire_expiry_date));
        $document_employee['TB_questionnaire_expiry_date'] = $TB_questionnaire_expiry_date;

        $chest_XRay_results_expiry_date = $_POST['chest_XRay_results_expiry_date'];
        if($chest_XRay_results_expiry_date!="")
            $chest_XRay_results_expiry_date = date('Y-m-d', strtotime($chest_XRay_results_expiry_date));
        $document_employee['chest_XRay_results_expiry_date'] = $chest_XRay_results_expiry_date;

        $influenza_immunization_expiry_date = $_POST['influenza_immunization_expiry_date'];
        if($influenza_immunization_expiry_date!="")
           $influenza_immunization_expiry_date = date('Y-m-d', strtotime($influenza_immunization_expiry_date));
        $document_employee['influenza_immunization_expiry_date'] = $influenza_immunization_expiry_date;

        $ninety_day_performance_evaluation_expiry_date = $_POST['ninety_day_performance_evaluation_expiry_date'];
        if($ninety_day_performance_evaluation_expiry_date!="")
          $ninety_day_performance_evaluation_expiry_date = date('Y-m-d', strtotime($ninety_day_performance_evaluation_expiry_date));
        $document_employee['ninety_day_performance_evaluation_expiry_date'] = $ninety_day_performance_evaluation_expiry_date;

        $initial_competency_assessment_expiry_date = $_POST['initial_competency_assessment_expiry_date'];
        if($initial_competency_assessment_expiry_date!="")
           $initial_competency_assessment_expiry_date = date('Y-m-d', strtotime($initial_competency_assessment_expiry_date));
        $document_employee['initial_competency_assessment_expiry_date'] = $initial_competency_assessment_expiry_date;

        $automobile_insurance_expiry_date = $_POST['automobile_insurance_expiry_date'];
        if($automobile_insurance_expiry_date!="")
            $automobile_insurance_expiry_date = date('Y-m-d', strtotime($automobile_insurance_expiry_date));
        $document_employee['automobile_insurance_expiry_date'] = $automobile_insurance_expiry_date;

        $CPR_card_expiry_date = $_POST['CPR_card_expiry_date'];
        if($CPR_card_expiry_date!="")
            $CPR_card_expiry_date = date('Y-m-d', strtotime($CPR_card_expiry_date));
        $document_employee['CPR_card_expiry_date'] = $CPR_card_expiry_date;

        $drivers_license_expiry_date = $_POST['drivers_license_expiry_date'];
        if($drivers_license_expiry_date!="")
            $drivers_license_expiry_date = date('Y-m-d', strtotime($drivers_license_expiry_date));
        $document_employee['drivers_license_expiry_date'] = $drivers_license_expiry_date;

        
        $prof_liability_Insurance_expiry_date = $_POST['prof_liability_Insurance_expiry_date'];
        if($prof_liability_Insurance_expiry_date!="")
             $prof_liability_Insurance_expiry_date = date('Y-m-d', strtotime($prof_liability_Insurance_expiry_date));
        $document_employee['prof_liability_Insurance_expiry_date'] = $prof_liability_Insurance_expiry_date;

        $professional_license_expiry_date = $_POST['professional_license_expiry_date'];
        if($professional_license_expiry_date!="")
           $professional_license_expiry_date = date('Y-m-d', strtotime($professional_license_expiry_date));
        $document_employee['professional_license_expiry_date'] = $professional_license_expiry_date;

	
       

        $document_employee['uid'] = $rn_id;
        $check_existing_data = $this->discipline_model->check_by(array('uid' => $rn_id), 'hr_employee_document');
	       
        if (!empty($check_existing_data)) {
	      $check = $this->discipline_model->save($document_employee,$rn_id);
	} else {
	      $check = $this->discipline_model->save($document_employee);
        }

		 
       // *****  Employee form record details  ******* //
         $this->discipline_model->_table_name = "hr_employee_form_record"; // table name
	 if (!empty($id)) {
		 $this->discipline_model->_primary_key = "uid";
	 }else{
	         $this->discipline_model->_primary_key = "id";
         }
	
         $mhr_json_data = array();
                  
         $mhr_json_data = $this->discipline_model->array_from_post(array('medical_history_record_form','w4_form','aes_form','bc_form','i9_form','iv_form','tb_form','paf_form','rfto_form','hv_form','rc_form','rcc_form'));
      
         $mhr_json_data['uid'] = $rn_id;
         
        $check_existing_data = $this->discipline_model->check_by(array('uid' => $rn_id), 'hr_employee_form_record');
         if (!empty($check_existing_data)) {
	      $check = $this->discipline_model->save($mhr_json_data,$rn_id);
	} else {
	      $check = $this->discipline_model->save($mhr_json_data);
        }

       echo $agency_name;
      // echo $rn_id;
    }

     public function discipline_list($id = NULL) {
            $data['title'] = "Discipline List";
            $data['discipline_id'] = $id;
            //echo '<pre>';print_r($this->session->userdata);echo '</pre>';die;
            // echo $user_id = $this->session->userdata('employee_id');
            $disciplineresult = $this->discipline_model->discipline_namebyid($id);
             $data['disciplinename'] = $disciplineresult->discipline;
            $data['all_rn_info'] = $this->discipline_model->all_rn_list('',$id);
           // echo '<pre>';print_r($data);echo '</pre>';die;
	    $data['subview'] = $this->load->view('admin/discipline/discipline_list', $data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }


    public function discipline_lists($id = NULL) {
            $data['title'] = "Discipline List";
            $data['disciplinename'] = $id; 
            $disciplineresult = $this->discipline_model->discipline_idbyname($id);
             $data['discipline_id'] = $disciplineresult->discipline_id;
             $disciplineid = $disciplineresult->discipline_id;
            // $data['disciplinename'] = $disciplineresult->discipline_id;
            $data['all_rn_info'] = $this->discipline_model->all_rn_list('',$disciplineid);
          //  echo '<pre>';print_r($data);echo '</pre>';die;
	    $data['subview'] = $this->load->view('admin/discipline/discipline_list', $data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }

   public function rn_hospicelist($id = NULL) {
            $data['title'] = "Hospice Rn List";
            $data['all_rn_info'] = $this->discipline_model->all_rn_hospicelist();
		 // echo "<pre>";print_r($data['all_rn_info']);echo "</pre>";die;
            $data['subview'] = $this->load->view('admin/rn/rn_list', $data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }

   public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }

	
   public function view_discipline($id = NULL) {
        $data['title'] = "View Discipline Details";
        if (!empty($id)) {
            $data['rn_info'] = $this->discipline_model->all_info($id); // echo "<pre>";print_r( $data['rn_info']);echo "</pre>";die;
            $countryname = $this->discipline_model->location_namebyid($data['rn_info']->service_country,'country');
            $statename = $this->discipline_model->location_namebyid($data['rn_info']->service_state,'state');
            $countyname = $this->discipline_model->location_namebyid($data['rn_info']->service_county,'county');
            $cityname = $this->discipline_model->location_namebyid($data['rn_info']->service_city,'city');
            foreach($countryname as $locationname){ 
               $data['rn_info']->service_country = $locationname['name'];
            }
            foreach($statename as $locationname){ 
               $data['rn_info']->service_state = $locationname['name'];
            }
            foreach($countyname as $locationname){ 
               $data['rn_info']->service_county = $locationname['name'];
            }
            foreach($cityname as $locationname){ 
               $data['rn_info']->service_city = $locationname['name'];
            }
			 
            if (empty($data['rn_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/discipline/discipline_list');
            }
        }
		
		
		$data['rn_bulk'] = $this->discipline_model->all_bulk($id);
		$name=$data['rn_info']->first_name;
	    $info =json_decode($data['rn_bulk']->meta_data);
	    $info->first_name = $name;
		$data['info1']=$info;
	 //  echo '<pre>';print_r($data);echo '</pre>';die;
        $data['subview'] = $this->load->view('admin/discipline/view_discipline', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

	public function delete_discipline($id,$disciplineid) {
  
			   $this->discipline_model->_table_name = "hr_users"; // table name
				$this->discipline_model->_primary_key = "uid"; // $id
			    $this->discipline_model->delete($id);
			
			   $this->discipline_model->_table_name = "hr_userdetail"; // table name
				$this->discipline_model->_primary_key = "uid"; // $id
			    $this->discipline_model->delete($id);

                           $this->discipline_model->_table_name = "hr_employee_form_record"; // table name
				$this->discipline_model->_primary_key = "uid"; // $id
			    $this->discipline_model->delete($id);
				
				$type = "success";
               $message = "Employee Information Successfully Delete!";
               set_message($type, $message);
               redirect('admin/discipline/discipline_list/'.$disciplineid); //redirect page

 }
 
 public function discipline_list_pdf($disciplineid) {
        $data['title'] = "Employee List";
        $id = NULL;
        $data['all_rn_info'] = $this->discipline_model->all_rn_list($id,$disciplineid);
	$title = $data['all_rn_info'][0]['discipline'];	
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/discipline/discipline_list_pdf', $data, true);
        pdf_create($view_file, $title);
    }
 
 
  public function make_pdf($id) {
       
		$data['title'] = "RN Form";
        $data['rn_info'] = $this->discipline_model->all_info($id);
		$name=$data['rn_info']->first_name;
		
		$data['rn_bulk'] = $this->discipline_model->all_bulk($id);
	    $info =json_decode($data['rn_bulk']->meta_data);
	    $info->first_name = $name;
		// echo '<pre>';print_r($info);echo '</pre>';die;
        $this->load->helper('dompdf');
	   
        $view_file = $this->load->view('admin/discipline/discipline_view_pdf',$info, true);
        pdf_create($view_file,$name);
		
    }


 public function makejobdesc_pdf($id) {
       
		$data['title'] = "RN Form";
                $data['rn_info'] = $this->discipline_model->all_info($id);  
		$name=$data['rn_info']->first_name;
	//	$data['rn_info']->esignature = "http://elumba.com/hrm2/".$data['rn_info']->signature;
                $data['rn_info']->esignature = $data['rn_info']->signature;
                $data['rn_info']->date = date('m/d/Y');
		$data['rn_bulk'] = $this->discipline_model->all_bulk($id);
	        $info =json_decode($data['rn_info']);
	        $info->first_name = $name;
		
                $this->load->helper('dompdf');
	   
        $view_file = $this->load->view('admin/jobdescription/job_description_pdf_'.$data['rn_info']->discipline,$data['rn_info'], true);
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

	 $this->discipline_model->_table_name = "hr_rn_bulk"; // table name
    
	 
	   if (!empty($id)) {
		   $this->discipline_model->_primary_key = "uid";
		  $id = $this->discipline_model->save($bulkdata,$id);  
	
	   }
	  else
      {   $this->discipline_model->_primary_key = "rn_id";
		  $id = $this->discipline_model->save($bulkdata);  
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
    
	$this->discipline_model->_table_name = "pe_bulk";
	 if (!empty($id)) {
		   $this->discipline_model->_primary_key = "id";
		  $id = $this->discipline_model->save($bulkdata,$id);  
	
	   }
	else{
	
	   // table name
    
	  $this->discipline_model->_primary_key = "id";
      $id = $this->discipline_model->save($bulkdata);  
	  		  
	}
	
	
	    $type = "success";
		echo $type;

	}
	
	
	public function pe_delete($id){
		
		
		         $this->discipline_model->_table_name = "pe_bulk"; // table name
				$this->discipline_model->_primary_key = "id"; // $id
			    $this->discipline_model->delete($id);
			
			    $this->discipline_model->delete($id);
				
				$type = "success";
               $message = "Employee Information Successfully Delete!";
               set_message($type, $message);
               redirect('admin/lvn/pe_list');
		
		
		
		
	}
	
	
    public function location_list() {
               // $data['title'] = "Rn List";
            $id = $_POST['id'];
            $data['all_city_info'] = $this->discipline_model->all_location($id);
		 // echo "<pre>";print_r($data['all_city_info']);echo "</pre>";die;
                // $data['subview'] = $this->load->view('admin/rn/rn_list', $data, TRUE);
                //  $this->load->view('admin/_layout_main', $data);
		  // echo $data['all_city_info'];
	    echo json_encode($data['all_city_info']);
		//  echo $data['all_city_info'];
    }
 
    public function service_areamap(){
       $id = $_POST['id'];
       $data['service_map_info'] = $this->discipline_model->service_areamap($id);
       echo json_encode($data['service_map_info']);
    }
 
 
 
 // Add New Line
  public function iform($id = NULL) {
		$data['title'] = "i9 Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['i9_info'] = json_decode($form_info->i9_form);
             	$data['rn_info'] = $this->discipline_model->all_info($id);
	        $this->load->view('admin/includes/new/FormI-9', $data);
    }
	
	public function wform($id) {
		$data['title'] = "W-4 Form";
                $data['rn_info'] = $this->discipline_model->all_info($id);
                $discipline_data = $this->discipline_model->all_info($id);
                
                if($discipline_data->service_city!=""){
                   $addressname = "location_5"; 
                   $result = $this->discipline_model->address_namebyid($discipline_data->service_city , $addressname);
                   $data['city'] = $result->name; 
                } 
                if($discipline_data->service_state!=""){
                   $addressname = "location_3"; 
                   $result = $this->discipline_model->address_namebyid($discipline_data->service_state , $addressname);
                   $data['state'] = $result->name; 
                } 

                $form_info = $this->discipline_model->all_info_form($id);
                $data['w4_info'] = json_decode($form_info->w4_form);

              //  echo '<pre>';print_r($data);echo '</pre>';
		$this->load->view('admin/includes/new/W4', $data);
    }
	public function SOA($id) {
		$data['title'] = "STATEMENT & ACKNOWLEDGEMENT";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['sa_info'] = json_decode($form_info->sa_form);
                $data['rn_info'] = $this->discipline_model->all_info($id);
                $data['discipline_name'] = $this->discipline_model->discipline_namebyid($data['rn_info']->discipline_id);
                $string = $data['discipline_name']->discipline;
                if (strpos($string, 'Hospice') !== false) {
                       $data['discipline_name'] = 'Lifelink Hospice &amp; Palliative Care';
                  }
                else{
                      $data['discipline_name'] = 'Lifelink Health Providers, Inc.';
                  }
                $this->load->view('admin/includes/new/STATEMENT_ACKNOWLEDGEMENT', $data);
    }

	public function background($id) {
		$data['title'] = "BACKGROUND CHECK";
                $employee_id = $this->session->userdata('employee_id');
                $data['admin_info'] = $this->settings_model->select_admin_info($employee_id);
                $form_info = $this->discipline_model->all_info_form($id); 
                $data['bc_info'] = json_decode($form_info->bc_form);
                $data['rn_info'] = $this->discipline_model->all_info($id);
                $data['discipline_name'] = $this->discipline_model->discipline_namebyid($data['rn_info']->discipline_id);
                $string = $data['discipline_name']->discipline;
                if (strpos($string, 'Hospice') !== false) {
                       $data['discipline_name'] = 'Lifelink Hospice &amp; Palliative Care';
                  }
                else{
                      $data['discipline_name'] = 'Lifelink Health Providers, Inc.';
                  }
		$this->load->view('admin/includes/new/BACKGROUND_CHECK', $data);
    }
	
	public function AES($id) {
		$data['title'] = "Electronic Signature Policy";
                $form_info = $this->discipline_model->all_info_form($id);
                $employee_id = $this->session->userdata('employee_id');
                $data['admin_info'] = $this->settings_model->select_admin_info($employee_id);
                $data['aes_info'] = json_decode($form_info->aes_form);
                $data['rn_info'] = $this->discipline_model->all_info($id);
                $data['discipline_name'] = $this->discipline_model->discipline_namebyid($data['rn_info']->discipline_id);
                $string = $data['discipline_name']->discipline;
                if (strpos($string, 'Hospice') !== false) {
                       $data['discipline_name'] = 'Lifelink Hospice &amp; Palliative Care';
                  }
                else{
                      $data['discipline_name'] = 'Lifelink Health Providers, Inc.';
                  }
               
		$this->load->view('admin/includes/new/Electronic_Signature_Policy', $data);
    }
    
    public function reference_check($id) {
		$data['title'] = "reference_check Form";
                $employee_id = $this->session->userdata('employee_id');
                $data['admin_info'] = $this->settings_model->select_admin_info($employee_id);
                $form_info = $this->discipline_model->all_info_form($id);
                $data['rcc_info'] = json_decode($form_info->rcc_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('admin/includes/new/upload_documents/reference_check', $data);
    }
	
    public function reference($id) {
		$data['title'] = "reference_check Form";
                $employee_id = $this->session->userdata('employee_id');
                $data['admin_info'] = $this->settings_model->select_admin_info($employee_id);
                $form_info = $this->discipline_model->all_info_form($id);
                $data['rc_info'] = json_decode($form_info->rc_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('admin/includes/new/upload_documents/reference', $data);
    }
    
    public function tb($id) {
		//$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['tb_info'] = json_decode($form_info->tb_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('admin/includes/new/upload_documents/annual_tb_screening_questionnaire', $data);
    }
    
    public function mhr($id) {
		//$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['mhr_info'] = json_decode($form_info->medical_history_record_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('admin/includes/new/upload_documents/PERSONNEL MEDICAL HISTORY RECORD', $data);
    }

    public function oc($id) {
		//$data['title'] = "reference_check Form";
                $employee_id = $this->session->userdata('employee_id');
                $data['admin_info'] = $this->settings_model->select_admin_info($employee_id);
                $form_info = $this->discipline_model->all_info_form($id);
                $data['oc_info'] = json_decode($form_info->oc_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
                $data['discipline_name'] = $this->discipline_model->discipline_namebyid($data['rn_info']->discipline_id);
                $string = $data['discipline_name']->discipline;
                if (strpos($string, 'Hospice') !== false) {
                      $this->load->view('admin/includes/new/upload_documents/orientation checklist', $data);
                  }
                else{
                     $this->load->view('admin/includes/new/upload_documents/orientation checklist hh', $data);
                  }
		//$this->load->view('admin/includes/new/upload_documents/orientation checklist', $data);
    }
   
   public function paf($id) {
		//$data['title'] = "reference_check Form";
                $employee_id = $this->session->userdata('employee_id');
                $data['admin_info'] = $this->settings_model->select_admin_info($employee_id);
                $form_info = $this->discipline_model->all_info_form($id);
                $data['paf_info'] = json_decode($form_info->paf_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('admin/includes/new/upload_documents/PERSONNEL ACTION FORM', $data);
    }	

   public function rfto($id) {
		//$data['title'] = "reference_check Form";
                $employee_id = $this->session->userdata('employee_id');
                $data['admin_info'] = $this->settings_model->select_admin_info($employee_id);
                $form_info = $this->discipline_model->all_info_form($id);
                $data['rfto_info'] = json_decode($form_info->rfto_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('admin/includes/new/upload_documents/REQUEST FOR TIME OFF', $data);
    }	

   public function hv($id) {
		//$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['hv_info'] = json_decode($form_info->hv_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('admin/includes/new/upload_documents/Hepatitis_Vaccine', $data);
    }
   
   public function ii($id) {
		//$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['iv_info'] = json_decode($form_info->iv_form);
                $data['rn_info'] = $this->discipline_model->all_info($id); 
		$this->load->view('admin/includes/new/upload_documents/INFLUENZA VACCINATION', $data);
    }

   public function usernameavailability($username){
          $user_info = $this->discipline_model->check_username($username);
          if(count($user_info) > 0)
             $result = '0';
          else
             $result = '1';
          echo $result;
   }

}
