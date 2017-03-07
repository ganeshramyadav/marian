<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admistrator
 *
 * @author pc mart ltd
 */
class Dashboard extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index() {
        $data['title'] = "Human Resource Management System";
        $employee_id = $this->session->userdata('employee_id');
        $data['get_result'] = $this->admin_model->get_event_by_id($employee_id);
        $data['get_holiday'] = $this->admin_model->check_holiday_by_date();
        $data['recent_application'] = $this->admin_model->get_recent_application();
       // echo '<pre>';print_r($data['recent_application']);echo '</pre>';die;
         //  echo '<pre>';print_r($this->session->userdata);echo '</pre>';die;
        // get absent employee         
        $data['absent_employee'] = $this->admin_model->get_absent_employee();


        //total award count
        $this->admin_model->_table_name = "tbl_employee_award"; //table name
        $this->admin_model->_order_by = "employee_award_id"; // order by 
        $data['total_award'] = count($this->admin_model->get()); // get result
        //total expense count
        $this->admin_model->_table_name = "tbl_expense"; //table name
        $this->admin_model->_order_by = "expense_id"; // order by 
        $total_expense = $this->admin_model->get(); // get result

        $total = 0;
        foreach ($total_expense as $v_expense) {
            $total+=$v_expense->amount;
        }
        $data['total_expense'] = $total;
        //
        //total employee count
        //$this->admin_model->_table_name = "tbl_employee"; // table name
        // $this->admin_model->_order_by = "employee_id"; // order by
        $this->admin_model->_table_name = "hr_users"; // table name
        $this->admin_model->_order_by = "date_of_birth"; // order by
        $data['employee'] = $this->admin_model->get_by(array('status' => 1,'users_id' => $employee_id)); // get result         
        $data['total_employee'] = count($this->admin_model->get()); // get result 

        //echo $data['total_employee'];
    
        //total user count
        $this->admin_model->_table_name = "hr_users"; //table name
        $this->admin_model->_order_by = "uid"; // order by
        $data['users'] = $this->admin_model->get_by(array('status' => 1,'users_id' => $employee_id)); // get result 
        $data['users_count'] = count($this->admin_model->get_by(array('status' => 1,'users_id' => $employee_id )));        
        $data['total_users'] = count($this->admin_model->get()); // get result 
        
       

        // Total discipline
        $this->admin_model->_table_name = "hr_discipline"; //table name
        $this->admin_model->_order_by = "discipline_id"; // order by
        $data['discipline'] = $this->admin_model->get();
        $data['discipline_detail'] = count($this->admin_model->get()); // get result 
         
        $disciplinearray = array();
        
         foreach ($data['discipline'] as $discipline_data) {
            $count = 0;
            $disciplineid = $discipline_data->discipline_id; 
            foreach($data['users'] as $users_data){ 
               if($disciplineid == $users_data->discipline_id){
                   $count = $count + 1;
               }
            }
           
            $value = $discipline_data->discipline.' '.$count;
            array_push($disciplinearray,$value); 
         }
     $data['discipline_data'] = $disciplinearray;

     //Expiry date of employee

     //  $this->admin_model->_table_name = "hr_employee_document"; //table name
    //   $this->admin_model->_order_by = "document_id"; // order by
     //  $where = "employee_id";
    //   $employeedocument = $this->admin_model->get(); // get result  
      // $employeedocument = $this->admin_model->get_by(array('employee_id' => $employee_id)); // get result  
     // echo '<pre>';print_r($employeedocument);echo '</pre>';die;
      $employeedocument = $this->admin_model->get_expiry_credentials();
    //  echo '<pre>';print_r($employeedocument);echo '</pre>';die;
       $expireday = array();
       foreach($employeedocument as $employeedoc){
           
            $now = time(); // or your date as well
            
            if(!empty($employeedoc->physical_examination_expiry_date)){
               $phy_exam_expiry = strtotime($employeedoc->physical_examination_expiry_date);
               $datediff = $phy_exam_expiry - $now; 

               $days = floor($datediff / (60 * 60 * 24));
               if($days == 30 || $days == 15 || $days == 5){
              
                 $day = array();
                 $day[0] = 'Physical Examination will be expire '.$employeedoc->physical_examination_expiry_date;
                 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
                 $day[2] = $employeedoc->email;
		 $day[3] = 'Physical Examination Date Expired';
              
                 array_push($expireday,$day);
               }
             
            }
       
      // echo $employeedoc->TB_test_expiry_date;die;
           if(!empty($employeedoc->TB_test_expiry_date)){
            $tb_test_expiry = strtotime($employeedoc->TB_test_expiry_date);
            $datediff = $tb_test_expiry - $now; 

            $days = floor($datediff / (60 * 60 * 24));
            if($days == 30 || $days == 15 || $days == 5){
              
                 $day = array();
                 $day[0] = 'TB Test will be expire '.$employeedoc->TB_test_expiry_date;
                 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
                 $day[2] = $employeedoc->email;
		 $day[3] = 'TB Test Date Expired';
              
                 array_push($expireday,$day);
              }
             
            }
            
            // Add New Line
     	   // TB_questionnaire_expiry_date
	     if(!empty($employeedoc->TB_questionnaire_expiry_date)){
	            $tb_test_expiry = strtotime($employeedoc->TB_questionnaire_expiry_date);
	            $datediff = $tb_test_expiry - $now; 
	
	            $days = floor($datediff / (60 * 60 * 24));
	            if($days == 30 || $days == 15 || $days == 5){
	              
	                 $day = array();
	                 $day[0] = 'TB Questionnaire will be expire '.$employeedoc->TB_questionnaire_expiry_date;
	                 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
	                 $day[2] = $employeedoc->email;
			 $day[3] = 'TB Questionnaire date Expired';
	              
	                 array_push($expireday,$day);
	              }
	             
	       }
	       
	       // chest_XRay_results_expiry_date
	     if(!empty($employeedoc->chest_XRay_results_expiry_date)){
	            $tb_test_expiry = strtotime($employeedoc->chest_XRay_results_expiry_date);
	            $datediff = $tb_test_expiry - $now; 
	
	            $days = floor($datediff / (60 * 60 * 24));
	            if($days == 30 || $days == 15 || $days == 5){
	              
	                 $day = array();
	                 $day[0] = 'Chest XRay Results will be expire '.$employeedoc->chest_XRay_results_expiry_date;
	                 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
	                 $day[2] = $employeedoc->email;
			 $day[3] = 'Chest XRay Results date Expired';
	              
	                 array_push($expireday,$day);
	              }
	             
	       }
	       
	         // influenza_immunization_expiry_date
	     if(!empty($employeedoc->influenza_immunization_expiry_date)){
	            $tb_test_expiry = strtotime($employeedoc->influenza_immunization_expiry_date);
	            $datediff = $tb_test_expiry - $now; 
	
	            $days = floor($datediff / (60 * 60 * 24));
	            if($days == 30 || $days == 15 || $days == 5){
	              
	                 $day = array();
	                 $day[0] = 'Influenza Immunization will be expire '.$employeedoc->influenza_immunization_expiry_date;
	                 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
	                 $day[2] = $employeedoc->email;
			 $day[3] = 'Influenza Immunization date Expired';
	              
	                 array_push($expireday,$day);
	              }
	             
	       }
	       
	        // ninety_day_performance_evaluation_expiry_date
	     if(!empty($employeedoc->ninety_day_performance_evaluation_expiry_date)){
	            $tb_test_expiry = strtotime($employeedoc->ninety_day_performance_evaluation_expiry_date);
	            $datediff = $tb_test_expiry - $now; 
	
	            $days = floor($datediff / (60 * 60 * 24));
	            if($days == 30 || $days == 15 || $days == 5){
	              
	                 $day = array();
	                 $day[0] = 'Ninety Day Performance Evaluation will be expire '.$employeedoc->ninety_day_performance_evaluation_expiry_date;
	                 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
	                 $day[2] = $employeedoc->email;
			 $day[3] = 'Performance Evaluation date Expired';
	              
	                 array_push($expireday,$day);
	              }
	             
	       }
	       
	       // initial_competency_assessment_expiry_date
	     if(!empty($employeedoc->initial_competency_assessment_expiry_date)){
	            $tb_test_expiry = strtotime($employeedoc->initial_competency_assessment_expiry_date);
	            $datediff = $tb_test_expiry - $now; 
	
	            $days = floor($datediff / (60 * 60 * 24));
	            if($days == 30 || $days == 15 || $days == 5){
	              
	                 $day = array();
	                 $day[0] = 'Initial Competency Assessment will be expire '.$employeedoc->initial_competency_assessment_expiry_date;
	                 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
	                 $day[2] = $employeedoc->email;
			 $day[3] = 'Initial Competency Assessment date Expired';
	              
	                 array_push($expireday,$day);
	              }
	             
	       }
	       
	       // automobile_insurance_expiry_date
	     if(!empty($employeedoc->automobile_insurance_expiry_date)){
	            $tb_test_expiry = strtotime($employeedoc->automobile_insurance_expiry_date);
	            $datediff = $tb_test_expiry - $now; 
	
	            $days = floor($datediff / (60 * 60 * 24));
	            if($days == 30 || $days == 15 || $days == 5){
	              
	                 $day = array();
	                 $day[0] = 'Automobile Insurance will be expire '.$employeedoc->automobile_insurance_expiry_date;
	                 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
	                 $day[2] = $employeedoc->email;
			 $day[3] = 'Automobile Insurance date Expired';
	              
	                 array_push($expireday,$day);
	              }
	             
	       }
	       
	        // CPR_card_expiry_date
	     if(!empty($employeedoc->CPR_card_expiry_date)){
	            $tb_test_expiry = strtotime($employeedoc->CPR_card_expiry_date);
	            $datediff = $tb_test_expiry - $now; 
	
	            $days = floor($datediff / (60 * 60 * 24));
	            if($days == 30 || $days == 15 || $days == 5){
	              
	                 $day = array();
	                 $day[0] = 'CPR Card will be expire '.$employeedoc->CPR_card_expiry_date;
	                 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
	                 $day[2] = $employeedoc->email;
			 $day[3] = 'CPR Card date Expired';
	              
	                 array_push($expireday,$day);
	              }
	             
	       }
	       
	         // drivers_license_expiry_date
	     if(!empty($employeedoc->drivers_license_expiry_date)){
	            $tb_test_expiry = strtotime($employeedoc->drivers_license_expiry_date);
	            $datediff = $tb_test_expiry - $now; 
	
	            $days = floor($datediff / (60 * 60 * 24));
	            if($days == 30 || $days == 15 || $days == 5){
	              
	                 $day = array();
	                 $day[0] = 'Drivers License will be expire '.$employeedoc->drivers_license_expiry_date;
	                 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
	                 $day[2] = $employeedoc->email;
			 $day[3] = 'Drivers License date Expired';
	              
	                 array_push($expireday,$day);
	              }
	             
	       }
	       
	        // prof_liability_Insurance_expiry_date
	     if(!empty($employeedoc->prof_liability_Insurance_expiry_date)){
	            $tb_test_expiry = strtotime($employeedoc->prof_liability_Insurance_expiry_date);
	            $datediff = $tb_test_expiry - $now; 
	
	            $days = floor($datediff / (60 * 60 * 24));
	            if($days == 30 || $days == 15 || $days == 5){
	              
	                 $day = array();
	                 $day[0] = 'Prof Liability Insurance will be expire '.$employeedoc->prof_liability_Insurance_expiry_date;
	                 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
	                 $day[2] = $employeedoc->email;
			 $day[3] = 'Prof Liability Insurance date Expired';
	              
	                 array_push($expireday,$day);
	              }
	             
	       }
	       
	        // professional_license_expiry_date
	     if(!empty($employeedoc->professional_license_expiry_date)){
	            $tb_test_expiry = strtotime($employeedoc->professional_license_expiry_date);
	            $datediff = $tb_test_expiry - $now; 
	
	            $days = floor($datediff / (60 * 60 * 24));
	            if($days == 30 || $days == 15 || $days == 5){
	              
	                 $day = array();
	                 $day[0] = 'Professional License will be expire '.$employeedoc->professional_license_expiry_date;
	                 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
	                 $day[2] = $employeedoc->email;
			 $day[3] = 'Professional License date Expired';
	              
	                 array_push($expireday,$day);
	              }
	             
	       }
	       
	       
           
       }
          
      $data['expire'] = $expireday;
     // echo '<pre>';print_r($data['expire']);echo '</pre>';die;
       
  
        // active check with current month
        $data['current_month'] = date('m');

        if ($this->input->post('year', TRUE)) { // if input year 
            $data['year'] = $this->input->post('year', TRUE);
        } else { // else current year
            $data['year'] = date('Y'); // get current year
        }

        // get all expense list by year and month
        $data['all_expense'] = $this->get_expense_list($data['year']);
         // echo '<pre>';print_r($data);echo '</pre>';die;
        $data['subview'] = $this->load->view('admin/main_content', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function checkexpirydocuments(){
	  $expiry = $_POST['result'];
	  $expiry = json_decode($expiry,true);
	  
	  $admin_name = $this->session->userdata['user_name'];
	  $admin_email = $this->session->userdata['employee_email'];
	  foreach($expiry as $emailday){
		    
		         $from = "sky.mahu@gmail.com";
				 $to = $emailday[2];
				 $subject = $emailday[3];
				 $readmail = array();
				 $readmail['to'] = $to;
                                 $readmail['expirename'] = $emailday[1];
				 $readmail['subject'] = $subject;
				 $readmail['message_body'] = $emailday[0];
				 $readmail['name'] = $emailday[1];
				 $data['read_mail'] = $readmail;
				 $view_page = $this->load->view('admin/mailbox/read_mail1', $data, TRUE);
				 $send_email = $this->mail->sendEmail($from, $to, $subject, $view_page);
				 
				 $to = $admin_email;
				 $message_body = $emailday[1].':'.$emailday[0];
				 $readmail['message_body'] = $message_body;
				 $readmail['name'] = $admin_name;
				 $data['read_mail'] = $readmail;
				 $view_page = $this->load->view('admin/mailbox/read_mail1', $data, TRUE);
				 $send_email = $this->mail->sendEmail($from, $to, $subject, $view_page);
	  }
	  echo '1';
	}

    public function get_expense_list($year) {// this function is to create get monthy recap report 
        for ($i = 1; $i <= 12; $i++) { // query for months
            if ($i >= 1 && $i <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
                $start_date = $year . "-" . '0' . $i . '-' . '01';
                $end_date = $year . "-" . '0' . $i . '-' . '31';
            } else {
                $start_date = $year . "-" . $i . '-' . '01';
                $end_date = $year . "-" . $i . '-' . '31';
            }
            $get_expense_list[$i] = $this->admin_model->get_expense_list_by_date($start_date, $end_date); // get all report by start date and in date 
        }
        return $get_expense_list; // return the result
    }

}
