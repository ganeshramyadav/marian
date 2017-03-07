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
class Os extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('discipline_model');
        $this->load->model('os_model');
	
    }
 
     public function officestaff_list($officestafftype = NULL) {
            $data['title'] = "Office Staff List";
           // $userdetail = $this->session->all_userdata();
          // echo '<pre>'; print_r($this->session->all_userdata());echo '</pre>';die;
          // echo $this->session->userdata['employee_id'];die;
            
            $data['all_staff_info'] = $this->os_model->all_officestaff_list($this->session->userdata['employee_id'],$officestafftype);
            if(!empty($data['all_staff_info'])){
	            foreach($data['all_staff_info'] as $dt){
	                $data['id'] = $dt['id'];
	                $data['officestaff_type'] = $dt['officestaff_type'];
	                $data['staff_details'] =$dt['officestaff_details'];
		        $data['userstaff_details'] =$dt['userstaff_details'];
	            }
           }else{
              $data['officestaff_type'] = $officestafftype;
           
           }
		// echo "<pre>";print_r($data);echo "</pre>";die;
            $data['subview'] = $this->load->view('admin/os/os_list', $data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }

    public function save_os_form($id = NULL) { 
        $meta_data = json_encode($_POST);
        $meta_data = json_decode($meta_data);
        $count = count($meta_data);
        $officestaff_details = '{';
          foreach($meta_data as $key => $data){
            $d = $key;
            if($key == 'officestaff_type')
              $officestaff_type = $data;
            elseif($key == 'id')
              $id = $data;
            else{
              $officestaff_details = $officestaff_details.'"'.$key.'":"'.$data.'",';
            }               
         }
	$officestaff_details = rtrim($officestaff_details, '",');
        $officestaff_details = $officestaff_details.'"}';

        $adminid = $this->session->userdata['employee_id'];   
   
        $bulkdata = array(
                          'adminid' => $adminid,
                          'officestaff_details' => $officestaff_details,
                          'officestaff_type' => $officestaff_type
                         );

         $this->os_model->_table_name = "hr_officestaff"; // table name
         if (!empty($id)) {
               $this->os_model->_primary_key = "id";
               $id = $this->os_model->save($bulkdata,$id);  
 
          }

        $type = "success";
        echo $type;
        
	 
    }


    public function add_os($id = NULL) { 
        
        $data['title'] = "Add Officestaff";
	
       
        $data['officestaff_type'] = $id;
	    
        $data['subview'] = $this->load->view('admin/os/os_add', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

    public function save_os($id = NULL){
        $data['title'] = "Add Officestaff";
        $designation = $_POST['designation_name'];
        $person_name = $_POST['person_name'];
        $officestafftype = $_POST['officestaff_type'];
    
            $all_staff_info = $this->os_model->all_officestaff_list($this->session->userdata['employee_id'],$officestafftype);
            foreach($all_staff_info as $dt){
                $data['id'] = $dt['id'];
                $id = $data['id'];
                $data['officestaff_type'] = $dt['officestaff_type'];
                $staff_details =$dt['officestaff_details'];
				$userstaff_details = $dt['userstaff_details'];
            }
			
			// Save in users table 
			   $this->discipline_model->_table_name = "hr_users"; // table name
               $this->discipline_model->_primary_key = "uid"; // $id
			// End 
			
			   if($officestafftype=="Homehealth"){
				   $userdata['discipline_id'] = '17';
			   }else{
				   $userdata['discipline_id'] = '18';
			   }
			 
			   $userdata['first_name'] = $person_name;
			
			   $uid = $this->discipline_model->save($userdata);
			   
			   
			   // Save in userdetail table 
			   $this->discipline_model->_table_name = "hr_userdetail"; // table name
               $this->discipline_model->_primary_key = "detailid"; // $id
			// End 
			   $userdetaildata['uid'] = $uid;
			
			   $userdetailid = $this->discipline_model->save($userdetaildata);
			   
			   // Save in userdocumentdetail table 
			   $this->discipline_model->_table_name = "hr_employee_document"; // table name
               $this->discipline_model->_primary_key = "document_id"; // $id
			// End 
			   $userdocumentdata['uid'] = $uid;
			
			   $userdocumentid = $this->discipline_model->save($userdocumentdata);
			   			 
			
         $adminid = $this->session->userdata['employee_id'];
            $this->os_model->_table_name = "hr_officestaff"; // table name
            $this->os_model->_primary_key = "id"; // $id
      if(!empty($id)){
          //$officestaff_details = '{"'.$designation.'":"'.$person_name.'"}';
		  $userstaff_details = json_decode($userstaff_details);
		  $userstaff_details->$designation = $uid;
		  $userstaff_details = json_encode($userstaff_details);
		  $dataos['userstaff_details'] = $userstaff_details;
          
           $staff_details = json_decode($staff_details);
           $staff_details->$designation = $person_name;
           $staff_details = json_encode($staff_details);
           $dataos['officestaff_details'] = $staff_details;
           $os_id = $this->os_model->save($dataos, $id);
        
       }else{
		  $userstaff_details = '{"'.$designation.'":"'.$uid.'"}';
          $officestaff_details = '{"'.$designation.'":"'.$person_name.'"}';
          $data['adminid'] = $adminid;
          $data['officestaff_type'] = $officestafftype;
          $data['officestaff_details'] = $officestaff_details;
		  $data['userstaff_details'] = $userstaff_details;
          $os_id = $this->os_model->save($data);
       }
       
       
        //echo $userstaff_details.'&'.$officestaff_details.'&'.$adminid;
      echo $os_id;
      
    }


    public function delete_os($officestafftype = NULL, $designation = NULL){
        
         $all_staff_info = $this->os_model->all_officestaff_list($this->session->userdata['employee_id'],$officestafftype);
            foreach($all_staff_info as $dt){
                $data['id'] = $dt['id'];
                $id = $data['id'];
                $data['officestaff_type'] = $dt['officestaff_type'];
                $staff_details =$dt['officestaff_details'];
				$userstaff_details =$dt['userstaff_details'];
            }
          $staff_details = json_decode($staff_details);
          $userstaff_details = json_decode($userstaff_details);
           foreach($staff_details as $key=>$value){
              if($designation == $key){
                   unset($staff_details->$key);
               }
            }
			
			foreach($userstaff_details as $key1=>$value1){
              if($designation == $key1){
                   $deleteid = $value1;
				   unset($userstaff_details->$key1);
               }
            }
			
			 $this->discipline_model->_table_name = "hr_users"; // table name
				$this->discipline_model->_primary_key = "uid"; // $id
			    $this->discipline_model->delete($deleteid);
			
			   $this->discipline_model->_table_name = "hr_userdetail"; // table name
				$this->discipline_model->_primary_key = "uid"; // $id
			    $this->discipline_model->delete($deleteid);
			
			   $this->discipline_model->_table_name = "hr_employee_document"; // table name
				$this->discipline_model->_primary_key = "uid"; // $id
			    $this->discipline_model->delete($deleteid);
			
           $this->os_model->_table_name = "hr_officestaff"; // table name
           $this->os_model->_primary_key = "id"; // $id
           $staff_details = json_encode($staff_details);
		   $userstaff_details = json_encode($userstaff_details);
           $dataos['officestaff_details'] = $staff_details;
		   $dataos['userstaff_details'] = $userstaff_details;
           $os_id = $this->os_model->save($dataos, $id);
         
        redirect('admin/os/officestaff_list/'.$officestafftype);
      
   }

    public function makejobdesc_pdf($id,$discipline) {
       
		$data['title'] = "RN Form";
                $data['rn_info'] = $this->discipline_model->all_info($id);
                $name=$data['rn_info']->first_name;
                $disciplinename = $data['rn_info']->discipline;
	//	$data['rn_info']->esignature = "http://elumba.com/hrm2/".$data['rn_info']->signature;
                $data['rn_info']->esignature = $data['rn_info']->signature;
                
                $data['rn_info']->date = date('m/d/Y');
		$data['rn_bulk'] = $this->discipline_model->all_bulk($id);
	        $info =json_decode($data['rn_info']);
	        $info->first_name = $name;
		$discipline = str_replace("%20"," ",$discipline);
                $this->load->helper('dompdf'); 
	     $activeuserid = $this->session->userdata['employee_id'];
        $view_file = $this->load->view('admin/jobdescription/'.$activeuserid.'/'.$disciplinename.'/'.$discipline,$data['rn_info'], true);
        pdf_create($view_file,$name);
		
    }

 
}