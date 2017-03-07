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
class Agency extends Super_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('agency_model');
    }

	public function agency_list($id = NULL) {
		$data['title'] = "Agency List";
		$user_flag = $this->session->userdata['user_flag'];
		$data['all_agency_info'] = $this->agency_model->all_agency('',$user_flag);
		
		$data['subview'] = $this->load->view('super/agency/agency_list', $data, TRUE);
		$this->load->view('super/_layout_main', $data);
    }	
	
    public function add_agency($id = NULL) {
		$data['title'] = "Add Agency";
		if (!empty($id)) {
		
            $data['agency_info'] = $this->agency_model->all_agency($id);
            if (empty($data['agency_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('super/agency/add_agency');
            }
        }
        $data['subview'] = $this->load->view('super/agency/agency', $data, TRUE);
        $this->load->view('super/_layout_main', $data);
    }
	
    public function save_agency($id = NULL) {
		$data['f_name'] = $_POST['f_name'];
		$data['l_name'] = $_POST['l_name'];
		$data['user_name'] = $_POST['user_name'];
		$data['flag'] = 1;
		$data['admin_name'] = $_POST['admin_name'];
		$data['password'] = $this->hash($_POST['password']);		
		// $data['password'] = $this->hash($this->input->post('new_password'));
		$data['created_date'] = date("Y-m-d");
		$data['status_id'] = $_POST['status'];
		
        $this->agency_model->_table_name = "tbl_user"; 
        $this->agency_model->_primary_key = "user_id";
		
		if (!empty($id)) {
			$agency_id = $this->agency_model->save($data, $id);
		} else {
			$agency_id = $this->agency_model->save($data);
		}
		echo $agency_id;
	}
	
	public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }
	
	public function delete($id) {
  
		$this->agency_model->_table_name = "tbl_user"; // table name
		$this->agency_model->_primary_key = "user_id"; // $id
		$this->agency_model->delete($id);

		$type = "success";
		$message = "Agency Information Successfully Delete!";
		set_message($type, $message);
		redirect('super/agency/agency_list'); //redirect page
	}
	
	public function agency_list_pdf() {
	
		$data['title'] = "Agency List";
		$data['all_rn_info'] = $this->agency_model->all_agency_list();

		$this->load->helper('dompdf');
		$view_file = $this->load->view('super/agency/agency_list_pdf', $data, true);
		pdf_create($view_file, 'Agency List');

	}
}
