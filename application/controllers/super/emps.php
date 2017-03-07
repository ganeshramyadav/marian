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
class Emps extends Super_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('emps_model');
		$this->load->model('agency_model');
    }

    public function emps_list($id = NULL) {
	
        $data['title'] = "Employee List";
		
		$user_flag = $this->session->userdata['user_flag'];
		$data['all_agency_info'] = $this->agency_model->all_agency('',$user_flag);
		$data['all_employee_info'] = $this->emps_model->all_emplyee_info();
		$data['all_discipline'] = $this->emps_model->all_discipline();
        $data['subview'] = $this->load->view('super/emps/emps_list', $data, TRUE);
        $this->load->view('super/_layout_main', $data);
    }

	public function employees() {
	
		$disciplineid = $_POST['disciplineid'];
		$agencyid = $_POST['agencyid'];
	    
		$data['result'] = $this->emps_model->all_emplyee_info($disciplineid, $agencyid);
		
	 	echo json_encode($data);
    }
	
	public function emps_list_pdf($disciplineid = NULL, $agencyid = NULL) {
	
		$data['agencyid'] = $agencyid;
		$data['disciplineid'] = $disciplineid;
		// die;
        $data['title'] = "Employee List";
        $data['all_rn_info'] = $this->emps_model->all_emps_list($agencyid, $disciplineid);
		// echo "<pre>"; print_r($data['all_rn_info']); echo "</pre>";die;
		
        $this->load->helper('dompdf');
        $view_file = $this->load->view('super/emps/emps_list_pdf', $data, true);
        pdf_create($view_file, 'Employee List');
    }

}
