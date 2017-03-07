<?php

class Dashboard extends Employee_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('discipline_model');
        $this->load->model('ca_model');
	$this->load->model('admin_model');
        $this->load->model('emp_model');
        $this->load->model('global_model');
        $this->load->model('mailbox_model');
        $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            'id' => 'ck_editor',
            'path' => 'asset/js/ckeditor',
            'config' => array(
                'toolbar' => "Full",
                'width' => "100%",
                'height' => "350px"
            )
        );
    }

    public function index() {
		
	$data['menu'] = array("index" => 1);
        $data['title'] = "Employee Panel";
        $employee_id = $this->session->userdata('employee_id');
	$data['employee_details'] = $this->emp_model->all_emplyee_info($employee_id);
		
		
		 //get employee details by employee id
        $data['employee_details'] = $this->emp_model->all_emplyee_info($employee_id);
        //Total Attendance
        $this->emp_model->_table_name = "tbl_attendance"; //table name
        $this->emp_model->_order_by = "employee_id";
        $data['total_attendance'] = count($this->total_attendace_in_month($employee_id));
        // get working days holiday
        $holidays = count($this->global_model->get_holidays()); //tbl working Days Holiday
        // get public holiday
        $public_holiday = count($this->total_attendace_in_month($employee_id, TRUE));

        // get total days in a month
        $month = date('m');
        $year = date('Y');
        $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        // total attend days in a month without public holiday and working days
        $data['total_days'] = $days - $holidays - $public_holiday;

        //leave applied         
        $data['total_leave_applied'] = count($this->emp_model->get_approved_leave($employee_id));

        //award received
        $this->emp_model->_table_name = "tbl_employee_award"; //table name
        $this->emp_model->_order_by = "employee_id";
        $data['total_award_received'] = count($this->emp_model->get_by(array('employee_id' => $employee_id,), FALSE));

        //get all notice by flag       
        $data['notice_info'] = $this->emp_model->get_all_notice(TRUE);

        //get all upcomming events
        $data['event_info'] = $this->emp_model->get_all_events();

        // get upcoming birthday
        $this->admin_model->_table_name = "tbl_employee"; //table name
        $this->admin_model->_order_by = "employee_id"; // order by
        $data['employee'] = $this->admin_model->get_by(array('status' => 1)); // get resutl 
        // get recent email          
        $data['get_inbox_message'] = $this->mailbox_model->get_inbox_message($data['employee_details']->email, $flag = NULL, TRUE);
        $data['subview'] = $this->load->view('employee/main_content', $data, TRUE);
       //   echo "<pre>"; print_r($data); echo "</pre>";die;
        $this->load->view('employee/_layout_main', $data);
    
		// die;
		// $data['title'] = "Employee Panel";
        // echo $employee_id = $this->session->userdata('employee_id');
		// echo $data['employee_details'] = $this->emp_model->all_emplyee_info($employee_id);
		
		// echo "<pre>"; print_r($data); echo "</pre>";
		
		return $result;
    }
    
    
	public function all_competency(){
	
		$data['title'] = "ADD COMPETENCY ASSESSMENT";
		$userid = $this->session->userdata('employee_id');
		$data['username'] = $this->session->userdata('user_name');
		$data['discipline_id'] = $this->session->userdata('discipline_id');
		$disciplineid = $this->session->userdata('discipline_id');
		
		$data1['username'] = $this->session->userdata('user_name');
		$data1['userid'] = $userid;
		$data1['disciplineid'] = $disciplineid;

			
		if (!empty($userid)) {
 

                        $date['ca_details'] = $this->ca_model->ca_details($userid);
 
                        foreach($date['ca_details'] As $id){
                                 
                                 $id = $id['id'];
                        }
			
			$data['pe_bulk'] = $this->ca_model->pe_bulklist($disciplineid, $id);
			$data1['info'] = json_decode($data['pe_bulk']->meta_data);
			$data1['info']->uid = $data['pe_bulk']->uid;
			$data1['info']->pid = $data['pe_bulk']->id;
	           
	        }else{
			$data1['all_pe_info'] = $this->ca_model->ca_info($disciplineid,$userid);
			$data1['username'] = "";
		}
			
			
		$data['subview'] = $this->load->view('employee/view_competency', $data1, TRUE);
	        $this->load->view('employee/_layout_main', $data);
		
	}
    
    
    
    

    public function total_attendace_in_month($employee_id, $flag = NULL) {
        $month = date('m');
        $year = date('Y');

        if ($month >= 1 && $month <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
            $start_date = $year . "-" . '0' . $month . '-' . '01';
            $end_date = $year . "-" . '0' . $month . '-' . '31';
        } else {
            $start_date = $year . "-" . $month . '-' . '01';
            $end_date = $year . "-" . $month . '-' . '31';
        }
        if (!empty($flag)) { // if flag is not empty that means get pulic holiday
            $get_public_holiday = $this->emp_model->get_public_holiday($start_date, $end_date);
            if (!empty($get_public_holiday)) { // if not empty the public holiday
                foreach ($get_public_holiday as $v_holiday) {
                    if ($v_holiday->start_date == $v_holiday->end_date) { // if start date and end date is equal return one data
                        $total_holiday[] = $v_holiday->start_date;
                    } else { // if start date and end date not equan return all date
                        for ($j = $v_holiday->start_date; $j <= $v_holiday->end_date; $j++) {
                            $total_holiday[] = $j;
                        }
                    }
                }
                return $total_holiday;
            }
        } else {
            $get_total_attendance = $this->emp_model->get_total_attendace_by_date($start_date, $end_date, $employee_id); // get all attendace by start date and in date 
            return $get_total_attendance;
        }
    }

    public function leave_application() {
        $data['menu'] = array("leave_application" => 1);
        $data['title'] = "Employee Panel";

        //get leave applied with category name
        $employee_id = $this->session->userdata('employee_id');
        $data['all_leave_applications'] = $this->emp_model->get_all_leave_applied($employee_id);

        $data['subview'] = $this->load->view('employee/emp_leave_application', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function apply_leave_application() {
        $data['title'] = "New Leave Application";

        //get leave category for dropdown
        $this->emp_model->_table_name = "tbl_leave_category"; // table name
        $this->emp_model->_order_by = "leave_category_id"; // $id
        $data['all_leave_category'] = $this->emp_model->get(); // get result

        $data['subview'] = $this->load->view('employee/apply_new_leave_application', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function save_leave_application() {
        $this->emp_model->_table_name = "tbl_application_list"; // table name
        $this->emp_model->_primary_key = "application_list_id"; // $id
        //receive form input by post
        $data['employee_id'] = $this->session->userdata('employee_id');
        $data['leave_category_id'] = $this->input->post('leave_category_id');
        $data['leave_start_date'] = $this->input->post('leave_start_date');
        $data['leave_end_date'] = $this->input->post('leave_end_date');
        $data['reason'] = $this->input->post('reason');

        //save data in database
        $this->emp_model->save($data);

        // messages for user
        $type = "success";
        $message = "Leave Application Successfully Submitted !";
        set_message($type, $message);
        redirect('employee/dashboard/leave_application');
    }

    public function all_notice() {
        $data['menu'] = array("notice" => 1);
        $data['title'] = "All Notice";

        // get all notice by flag       
        $data['notice_info'] = $this->emp_model->get_all_notice();

        $data['subview'] = $this->load->view('employee/all_notice', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function notice_detail($id) {
        $data['title'] = "Notice Details";

        //get leave category for dropdown
        $this->emp_model->_table_name = "tbl_notice"; // table name
        $this->emp_model->_order_by = "notice_id"; // $id
        $data['full_notice_details'] = $this->emp_model->get_by(array('notice_id' => $id,), TRUE); // get result


        $data['subview'] = $this->load->view('employee/notice_details', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function all_events() {
        $data['menu'] = array("events" => 1);
        $data['title'] = "All Events";

        // get all notice by flag       
        $data['event_info'] = $this->emp_model->get_all_events();

        $data['subview'] = $this->load->view('employee/events', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function event_detail($id) {
        $data['title'] = "Event Details";

        //get leave category for dropdown
        $this->emp_model->_table_name = "tbl_holiday"; // table name
        $this->emp_model->_order_by = "holiday_id"; // $id
        $data['event_details'] = $this->emp_model->get_by(array('holiday_id' => $id,), TRUE); // get result

        $data['subview'] = $this->load->view('employee/event_details', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function all_award() {
        $data['menu'] = array("awards" => 1);
        $data['title'] = "All Awards";

        // get all notice by flag       
        $data['award_info'] = $this->emp_model->get_all_awards();

        $data['subview'] = $this->load->view('employee/all_awards', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function award_detail($id) {
        $data['title'] = "All Awards";

        //get award detail info for particular employee    
        $data['employee_award_info'] = $this->emp_model->get_all_awards($id);

        $data['subview'] = $this->load->view('employee/award_details_page', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }
    
    

    public function profile() {
        $data['title'] = "User Profile";
        $employee_id = $this->session->userdata('employee_id');
        

        //get employee details
        $data['employee_details'] = $this->emp_model->all_emplyee_info($employee_id);
        
        $language_id = $data['employee_details']->nationality;
        
        
        //echo "<pre>"; print_r($data['employee_details']); echo "</pre>";
        
         // For Language
	$this->discipline_model->_table_name = "hr_spokenlanguage"; //table name
	$this->discipline_model->_order_by = "language_name";
	$where = "hr_spokenlanguage.id";
	$data['all_language'] = $this->discipline_model->getwhere($where, $language_id, 'result');

	// For country
	$this->discipline_model->_table_name = "countries"; //table name
	$this->discipline_model->_order_by = "countryName";
	$data['all_country']=$this->discipline_model->get();
	//echo "<pre>"; print_r($data['all_country']); echo "</pre>";

	// For county
	$this->discipline_model->_table_name = "location_4"; //table name
	$this->discipline_model->_order_by = "name";
	$data['all_county']=$this->discipline_model->get();
	//echo "<pre>"; print_r($data['all_county']); echo "</pre>";
		
	// get city details by county id
	$this->discipline_model->_table_name = "location_5"; //table name
	$this->discipline_model->_order_by = "name";
	$where = "location_5.location_4";
	$data['all_city'] = $this->discipline_model->getwhere($where, $data['employee_details']->service_county, 'result');
	$data['cityarray'] = explode(",",$data['employee_details']->service_city);
        
//        echo "<pre>"; print_r($data['employee_details']); echo "</pre>";

        $data['subview'] = $this->load->view('employee/user_profile', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }
    


   public function profile_update($id = NULL){
        // **** Employee Personal Details,Contact Details and Official Status Save And Update Start *** 
        $date_of_birth = $_POST['date_of_birth'];
       $date_of_birth = date('Y-m-d', strtotime($date_of_birth));
             
      $data=$this->discipline_model->array_from_post(array('first_name','last_name','user_name','email','gender','present_address','permanent','city','phone','mobile','status','fax','ssn'));
  
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

    

        
       $signature = $_POST['signature'];
       $data['signature'] = $signature;    
        
        $data['status'] = 1; 
     
	
   
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
	
    $document_data=$this->discipline_model->array_from_post(array('service_country','service_county','service_state'));

    

    
       $service_city = $_POST['service_city'];
       $servicecities ="";
       foreach($service_city as $servicecity)
       {
          $servicecities = $servicecities.''.$servicecity.',';
       }
        $document_data['service_city'] = rtrim($servicecities,','); 
    
	
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
        
       $signature = $_POST['signature'];
       $data['signature'] = $signature;    
    
        
     
	$data['users_id'] = $this->session->userdata['employee_id'];
        

        $document_data['uid'] = $rn_id;
			 		  
        if (!empty($check_existing_data)) {
	      $check = $this->discipline_model->save($document_data,$rn_id);
	} else {
	      $check = $this->discipline_model->save($document_data);
        }

       echo $rn_id;
   }
   
   
   
   



   public function profile_edit() {
        $data['title'] = "Edit User Profile";
        $employee_id = $this->session->userdata('employee_id');
		
		// For Language
		$this->discipline_model->_table_name = "hr_spokenlanguage"; //table name
		$this->discipline_model->_order_by = "language_name";
		$data['all_language'] = $this->discipline_model->get();
		// echo "<pre>"; print_r($data['all_language']); echo "</pre>";die;

		// For country
		$this->discipline_model->_table_name = "countries"; //table name
		$this->discipline_model->_order_by = "countryName";
		$data['all_country']=$this->discipline_model->get();

		// For county
		$this->discipline_model->_table_name = "location_4"; //table name
		$this->discipline_model->_order_by = "name";
		$data['all_county']=$this->discipline_model->get();

                //get employee details
                $data['employee_details'] = $this->emp_model->all_emplyee_info($employee_id);

                $dob = $data['employee_details']->date_of_birth;
        if($dob == NULL){ 
			$dob = "0000-00-00";
		}  

                if($dob != "0000-00-00"){
         $date_of_birth = date('m-d-Y', strtotime($dob));
         $dob = str_replace('-', '/', $date_of_birth);
        }
        $data['employee_details']->date_of_birth = $dob;

               
                // get city details by county id
                $this->discipline_model->_table_name = "location_5"; //table name
                $this->discipline_model->_order_by = "name";
                $where = "location_5.location_4";
                $data['all_city'] = $this->discipline_model->getwhere($where, $data['employee_details']->service_county, 'result');
                $data['cityarray'] = explode(",",$data['employee_details']->service_city);

		$discipline_id = $data['employee_details']->discipline_id;
		$data['discipline'] = $this->emp_model->discipline($discipline_id);
	// echo "<pre>"; print_r($data); echo "</pre>";die;
        $data['subview'] = $this->load->view('employee/edit_profile', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }
    
    
	
    public function location_list(){
		$id = $_POST['id'];
		$data['all_city_info'] = $this->discipline_model->all_location($id);
		echo json_encode($data['all_city_info']);
    }
    
    
    
    
    public function edit_signature(){
    
    	$data['title'] = "Edit User Profile";
    	$employee_id = $this->session->userdata('employee_id');
    	$data['form_info'] = $this->discipline_model->all_info_form($employee_id);
		
             


		// For Language
		$this->discipline_model->_table_name = "hr_spokenlanguage"; //table name
		$this->discipline_model->_order_by = "language_name";
		$data['all_language'] = $this->discipline_model->get();
		// echo "<pre>"; print_r($data['all_language']); echo "</pre>";die;

		// For country
		$this->discipline_model->_table_name = "countries"; //table name
		$this->discipline_model->_order_by = "countryName";
		$data['all_country']=$this->discipline_model->get();

		// For county
		$this->discipline_model->_table_name = "location_4"; //table name
		$this->discipline_model->_order_by = "name";
		$data['all_county']=$this->discipline_model->get();
		
		

                //get employee details
                $data['employee_details'] = $this->emp_model->all_emplyee_info($employee_id);

                $dob = $data['employee_details']->date_of_birth;
	        if($dob == NULL){ 
				$dob = "0000-00-00";
			}  
	
	                if($dob != "0000-00-00"){
	         $date_of_birth = date('m-d-Y', strtotime($dob));
	         $dob = str_replace('-', '/', $date_of_birth);
	        }
	        $data['employee_details']->date_of_birth = $dob;

               
                // get city details by county id
                $this->discipline_model->_table_name = "location_5"; //table name
                $this->discipline_model->_order_by = "name";
                $where = "location_5.location_4";
                $data['all_city'] = $this->discipline_model->getwhere($where, $data['employee_details']->service_county, 'result');
                $data['cityarray'] = explode(",",$data['employee_details']->service_city);

		$discipline_id = $data['employee_details']->discipline_id;
		$data['discipline'] = $this->emp_model->discipline($discipline_id);
		//echo '<pre>';print_r($data);echo '</pre>';die;
		
    	$data['subview'] = $this->load->view('employee/signature', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }
    
    

    
    
    public function save_discipline($id = NULL) {


       // ***********   


       // ***********
     
     
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

        $document_data['uid'] = $id;
			 		  
        if (!empty($check_existing_data)) {
	      $check = $this->discipline_model->save($document_data,$id);
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
		
		// SSN
        if (!empty($_FILES['ssn']['name'])) {
            $old_path = $this->input->post('ssn_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->discipline_model->uploadFile('ssn');
            $val == TRUE || redirect('admin/discipline/add_discipline');
           
           $document_employee['ssn'] = $val['path'];
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

	
       

        $document_employee['uid'] = $id;
        $check_existing_data = $this->discipline_model->check_by(array('uid' => $id), 'hr_employee_document');
	       
        if (!empty($check_existing_data)) {
	      $check = $this->discipline_model->save($document_employee,$id);
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


                  
         $mhr_json_data = $this->discipline_model->array_from_post(array('medical_history_record_form','w4_form','aes_form','bc_form','i9_form','iv_form','tb_form','rfto_form','hv_form','rc_form','rcc_form'));

         $mhr_json_data['uid'] = $id;
         
        $check_existing_data = $this->discipline_model->check_by(array('uid' => $id), 'hr_employee_form_record');




         if (!empty($check_existing_data)) {
	      $check = $this->discipline_model->save($mhr_json_data,$id);
	} else {
	      $check = $this->discipline_model->save($mhr_json_data);
        }

       echo $check;
       
    }
    
    
    
    
    
    
      public function iform($id = NULL) { 
		$data['title'] = "i9 Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['i9_info'] = json_decode($form_info->i9_form);
             	$data['rn_info'] = $this->discipline_model->all_info($id);
	        $this->load->view('employee/includes/new/FormI-9', $data);
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
		$this->load->view('employee/includes/new/W4', $data);
    }
	public function SOA($id) {
		$data['title'] = "STATEMENT & ACKNOWLEDGEMENT";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['sa_info'] = json_decode($form_info->sa_form);
                $data['rn_info'] = $this->discipline_model->all_info($id);
                $this->load->view('employee/includes/new/STATEMENT_ACKNOWLEDGEMENT', $data);
    }

	public function background($id) {
		$data['title'] = "BACKGROUND CHECK";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['bc_info'] = json_decode($form_info->bc_form);
                $data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('employee/includes/new/BACKGROUND_CHECK', $data);
    }
	
	public function AES($id) {
		$data['title'] = "Electronic Signature Policy";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['aes_info'] = json_decode($form_info->aes_form);
                $data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('employee/includes/new/Electronic_Signature_Policy', $data);
    }
    
public function reference_check($id) {
		$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['rcc_info'] = json_decode($form_info->rcc_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('employee/includes/new/upload_documents/reference_check', $data);
    }
	
    public function reference($id) {
		$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['rc_info'] = json_decode($form_info->rc_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('employee/includes/new/upload_documents/reference', $data);
    }
    
    public function tb($id) {
		//$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['tb_info'] = json_decode($form_info->tb_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('employee/includes/new/upload_documents/annual_tb_screening_questionnaire', $data);
    }
    
    public function mhr($id) {
		//$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['mhr_info'] = json_decode($form_info->medical_history_record_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('employee/includes/new/upload_documents/PERSONNEL MEDICAL HISTORY RECORD', $data);
    }

    public function oc($id) {
		//$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['oc_info'] = json_decode($form_info->oc_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('employee/includes/new/upload_documents/orientation checklist', $data);
    }
   
   public function paf($id) {
		//$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['paf_info'] = json_decode($form_info->paf_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('employee/includes/new/upload_documents/PERSONNEL ACTION FORM', $data);
    }	

   public function rfto($id) {
		//$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['rfto_info'] = json_decode($form_info->rfto_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('employee/includes/new/upload_documents/REQUEST FOR TIME OFF', $data);
    }	

   public function hv($id) {
		//$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['hv_info'] = json_decode($form_info->hv_form);
		$data['rn_info'] = $this->discipline_model->all_info($id);
		$this->load->view('employee/includes/new/upload_documents/Hepatitis_Vaccine', $data);
    }
   
   public function ii($id) {
		//$data['title'] = "reference_check Form";
                $form_info = $this->discipline_model->all_info_form($id);
                $data['iv_info'] = json_decode($form_info->iv_form);
                $data['rn_info'] = $this->discipline_model->all_info($id); 
		$this->load->view('employee/includes/new/upload_documents/INFLUENZA VACCINATION', $data);
    }    
    


    
      // Mailbox Controllers starts ------
     

    public function inbox() {
        $data['menu'] = array("mailbox" => 1, "inbox" => 1);
        $data['title'] = "Employee Panel";
        $employee_id = $this->session->userdata('employee_id');

        //get leave category for dropdown
        $this->emp_model->_table_name = "tbl_employee"; // table name
        $this->emp_model->_order_by = "employee_id"; // $id
        $data['employee_details'] = $this->emp_model->get_by(array('employee_id' => $employee_id,), TRUE); // get result        
        $email = $data['employee_details']->email;

        // get all inbox by email 
        $data['get_inbox_message'] = $this->mailbox_model->get_inbox_message($email);
        $data['unread_mail'] = count($this->mailbox_model->get_inbox_message($email, TRUE));

        $data['subview'] = $this->load->view('employee/emp_inbox', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function read_inbox_mail($id) {
        $data['title'] = "Inbox";
        $this->mailbox_model->_table_name = 'tbl_inbox';
        $this->mailbox_model->_order_by = 'inbox_id';
        $data['read_mail'] = $this->mailbox_model->get_by(array('inbox_id' => $id), true);

        $this->mailbox_model->_primary_key = 'inbox_id';
        $updata['view_status'] = '1';
        $this->mailbox_model->save($updata, $id);

        $data['subview'] = $this->load->view('employee/emp_read_mail', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function delete_inbox_mail() {
        // get sellected id into inbox email page
        $selected_inbox_id = $this->input->post('selected_inbox_id', TRUE);
        if (!empty($selected_inbox_id)) { // check selected message is empty or not
            foreach ($selected_inbox_id as $v_inbox_id) {
                $this->mailbox_model->_table_name = 'tbl_inbox';
                $this->mailbox_model->delete_multiple(array('inbox_id' => $v_inbox_id));
            }
            $type = "success";
            $message = "Your message has been Deleted.";
        } else {
            $type = "error";
            $message = "Please Select a Message to Delete.";
        }
        set_message($type, $message);
        redirect('employee/dashboard/inbox');
    }

    public function sent() {
        $data['menu'] = array("mailbox" => 1, "sent" => 1);
        $data['title'] = "Send Email";

        $employee_id = $this->session->userdata('employee_id');
        $data['get_sent_message'] = $this->mailbox_model->get_sent_message($employee_id);

        $data['subview'] = $this->load->view('employee/emp_sent', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function read_send_mail($id) {
        $data['title'] = "Inbox";
        $this->mailbox_model->_table_name = 'tbl_send';
        $this->mailbox_model->_order_by = 'send_id';
        $data['read_mail'] = $this->mailbox_model->get_by(array('send_id' => $id), true);

        $data['subview'] = $this->load->view('employee/dashboard/emp_read_mail', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function delete_send_mail() {
        // get sellected id into send email page
        $selected_send_id = $this->input->post('selected_send_id', TRUE);

        if (!empty($selected_send_id)) {
            foreach ($selected_send_id as $v_send_id) {
                $this->mailbox_model->_table_name = 'tbl_send';
                $this->mailbox_model->delete_multiple(array('send_id' => $v_send_id));
            }
            $type = "success";
            $message = "Your message has been Deleted.";
        } else {
            $type = "error";
            $message = "Please Select a Message to Delete.";
        }
        set_message($type, $message);
        redirect('employee/dashboard/sent');
    }

    public function compose() {
        $data['title'] = "Inbox";
        $this->mailbox_model->_table_name = 'tbl_employee';
        $this->mailbox_model->_order_by = 'employee_id';
        $data['get_employee_email'] = $this->mailbox_model->get_by(array('status' => '1'), FALSE);
        $data['editor'] = $this->data;
        $data['subview'] = $this->load->view('employee/emp_compose_mail', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function send_mail() {

        $discard = $this->input->post('discard', TRUE);
        if ($discard) {
            redirect('employee/dashboard/inbox');
        }
        $all_email = $this->input->post('to', TRUE);

        // get all email address
        foreach ($all_email as $v_email) {
            $data = $this->mailbox_model->array_from_post(array('subject', 'message_body'));
            if (!empty($_FILES['attach_file']['name'])) {
                $old_path = $this->input->post('attach_file_path');
                if ($old_path) {
                    unlink($old_path);
                }
                $val = $this->mailbox_model->uploadAllType('attach_file');
                $val == TRUE || redirect('employee/emp_compose_mail');
                // save into send table
                $data['attach_filename'] = $val['fileName'];
                $data['attach_file'] = $val['path'];
                $data['attach_file_path'] = $val['fullPath'];
                // save into inbox table
                $idata['attach_filename'] = $val['fileName'];
                $idata['attach_file'] = $val['path'];
                $idata['attach_file_path'] = $val['fullPath'];
            } else {
                $data['attach_filename'] = NULL;
                $data['attach_file'] = NULL;
                $data['attach_file_path'] = NULL;
                // save into inbox table
                $idata['attach_filename'] = NULL;
                $idata['attach_file'] = NULL;
                $idata['attach_file_path'] = NULL;
            }
            $data['to'] = $v_email;
            
              // Email Configuaration 
             
            $employee_id = $this->session->userdata('employee_id');

            //get employee email address by employee id
            $this->emp_model->_table_name = "tbl_employee"; // table name
            $this->emp_model->_order_by = "employee_id"; // $id
            $employee_details = $this->emp_model->get_by(array('employee_id' => $employee_id,), TRUE); // get result   

            $name = $employee_details->email;
            $info = $data['subject'];
            // set from email
            $from = array($name, $info);
            // set sender email
            $to = $v_email;
            //set subject
            $subject = $data['subject'];
            $data['employee_id'] = $employee_id;
            $data['message_time'] = date('Y-m-d H:i:s');
            // save into send 
            $this->mailbox_model->_table_name = 'tbl_send';
            $this->mailbox_model->_primary_key = 'send_id';
            $send_id = $this->mailbox_model->save($data);

            // get mail info by send id to send
            $this->mailbox_model->_table_name = 'tbl_send';
            $this->mailbox_model->_order_by = 'send_id';
            $data['read_mail'] = $this->mailbox_model->get_by(array('send_id' => $send_id), true);

            // set view page
            $view_page = $this->load->view('employee/read_mail', $data, TRUE);
            $send_email = $this->mail->sendEmail($from, $to, $subject, $view_page);
            // save into inbox table procees 
            $idata['to'] = $employee_details->email;
            $idata['from'] = $data['to'];
            $idata['subject'] = $data['subject'];
            $idata['message_body'] = $data['message_body'];
            $idata['message_time'] = date('Y-m-d H:i:s');
            // save into inbox
            $this->mailbox_model->_table_name = 'tbl_inbox';
            $this->mailbox_model->_primary_key = 'inbox_id';
            $this->mailbox_model->save($idata);
        }
        if ($send_email) {
            $type = "success";
            $message = "Your message has been sent.";
            set_message($type, $message);
            redirect('employee/dashboard/sent');
        } else {
            show_error($this->email->print_debugger());
        }
    }

    
      // Mailbox Controllers ends ------
     

    public function change_password() {
        $data['menu'] = array("profile" => 1, "change_password" => 1);
        $data['title'] = "Change Password";
        $data['subview'] = $this->load->view('employee/change_password', $data, TRUE);
        $this->load->view('employee/_layout_main', $data);
    }

    public function check_employee_password($val) {
        $password = $this->hash($val);
//        $check_dupliaction_id = $this->emp_model->check_by(array('password' => $password), 'tbl_employee_login');
        $check_dupliaction_id = $this->emp_model->check_by(array('password' => $password), 'hr_users');
        if (empty($check_dupliaction_id)) {
            $result = '<small style="padding-left:10px;color:red;font-size:10px">Your Entered Password Do Not Match !<small>';
        } else {
            $result = NULL;
        }
        echo $result;
    }

    public function set_password() {
    
        //$employee_login_id = $this->session->userdata('uid');
        $employee_login_id = $this->session->userdata('employee_id');
	$this->input->post('new_password');
		
        $data['password'] = $this->hash($this->input->post('new_password'));
        $this->emp_model->_table_name = 'hr_users';
        $this->emp_model->_primary_key = 'uid';
		
        $this->emp_model->save($data, $employee_login_id);
		
		
        $type = "success";
        $message = "Password Successfully Changed!";
        set_message($type, $message);
        redirect('employee/dashboard/change_password'); //redirect page
    }

    public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }



	
}
