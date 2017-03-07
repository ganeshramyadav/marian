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


class Dashboard extends Super_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('super_model');
	}


	
	public function index() {
	
		$user_flag = $this->session->userdata('user_flag');
	
		if($user_flag == 4){
		
			$data['title'] = "Human Resourse Management System";
			$employee_id = $this->session->userdata('employee_id');
			$data['get_result'] = $this->admin_model->get_event_by_id($employee_id);
			$data['get_holiday'] = $this->admin_model->check_holiday_by_date();
			$data['recent_application'] = $this->admin_model->get_recent_application();
			
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
			$this->admin_model->_table_name = "tbl_employee"; // table name
			$this->admin_model->_order_by = "employee_id"; // order by
			$data['employee'] = $this->admin_model->get_by(array('status' => 1)); // get result         
			$data['total_employee'] = count($this->admin_model->get()); // get result 
		
			//total user count
			$this->admin_model->_table_name = "hr_users"; //table name
			$this->admin_model->_order_by = "uid"; // order by
			$data['users'] = $this->admin_model->get_by(array('status' => 1)); // get result         
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

		 
		  $employeedocument = $this->admin_model->get_expiry_credentials();
		
		   $expireday = array();
		   foreach($employeedocument as $employeedoc){
			   
				$now = time(); // or your date as well
				
				if(!empty($employeedoc->physical_examination_expiry_date)){
				   $phy_exam_expiry = strtotime($employeedoc->physical_examination_expiry_date);
				   $datediff = $phy_exam_expiry - $now; 

				   $days = floor($datediff / (60 * 60 * 24));
				   if($days == 30){
				  
					 $day = array();
					 $day[0] = 'Physical Examination will be expire '.$employeedoc->physical_examination_expiry_date;
					 $day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;
				  
					 array_push($expireday,$day);
				   }
				 
				}
		   
		  // echo $employeedoc->TB_test_expiry_date;die;
				if(!empty($employeedoc->TB_test_expiry_date)){
					$tb_test_expiry = strtotime($employeedoc->TB_test_expiry_date);
					$datediff = $tb_test_expiry - $now; 

					$days = floor($datediff / (60 * 60 * 24));
					if($days == 30){

						$day = array();
						$day[0] = 'TB Test will be expire '.$employeedoc->TB_test_expiry_date;
						$day[1] = $employeedoc->first_name.' '.$employeedoc->last_name;

						array_push($expireday,$day);
					}
				}
			}
			  
		  $data['expire'] = $expireday;
	  
			// active check with current month
			$data['current_month'] = date('m');

			if ($this->input->post('year', TRUE)) { // if input year 
				$data['year'] = $this->input->post('year', TRUE);
			} else { // else current year
				$data['year'] = date('Y'); // get current year
			}

			// get all expense list by year and month
			$data['all_expense'] = $this->get_expense_list($data['year']);
			 
			$data['subview'] = $this->load->view('super/main_content', $data, TRUE);
			$this->load->view('super/_layout_main', $data);
		
		}else{
		
			redirect('admin/dashboard');
		}
	
		
		
		
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
