<?php
class Icot extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('icot_model');
    }


    public function add_icot($id = NULL) { 
       
       $data['title'] = "Add icot";
	   
	   
	   
	      if (!empty($id)) {// retrive data from db by id            
            $data['icot_info'] = $this->icot_model->all_icot_info($id);
          //  echo "<pre>";print_r($data);echo "</pre>";die;
            if (empty($data['icot_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/icot/add_icot');
            }
        }
	   
	   

         $this->icot_model->_table_name = "countries"; //table name
        $this->icot_model->_order_by = "countryName";
        $data['all_country'] = $this->icot_model->get();

        //page load
        $data['subview'] = $this->load->view('admin/ot/icot', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
    
	
	
	
	
	public function save_icot($id = NULL) {
        // **** Employee Personal Details,Contact Details and Official Status Save And Update Start *** 
        //input post
   
       
 $data=$this->icot_model->array_from_post(array('first_name','last_name','date_of_birth','gender','nationality','present_address','permanent','city','phone','mobile','password','status','discipline_id'));
     
        if (!empty($_FILES['photo']['name'])) {
            $old_path = $this->input->post('old_path');
            if ($old_path) {
                unlink($old_path);
            }

            $val = $this->icot_model->uploadImage('photo');
            $val == TRUE || redirect('admin/icot/add_icot');
            $data['photo'] = $val['path'];
            $data['photo_a_path'] = $val['fullPath'];
        }

        $data['password'] = $this->hash('employee');
        $data['discipline_id']= '14';
        $data['status'] = 1; 
     

        // ************* Save into Employee Table 
        $this->icot_model->_table_name = "hr_users"; // table name
        $this->icot_model->_primary_key = "uid"; // $id
        
           
			
	    if (!empty($id)) {
             
           // $chha_id = $id;
			
            $icot_id = $this->icot_model->save($data, $id);
        } else {
          
           $icot_id = $this->icot_model->save($data);
        }
			
        //$employee_id = $this->chha_model->save($data);
       //  echo "<script>alert('wait started');</script>";
      //  sleep(60);
       // $insert_id = $this->db->insert_id();
       // echo $insert_id;die;
        
        

     // **** Employee Personal Details,Contact Details and Official Status Save And Update End *** 


	 $this->icot_model->_table_name = "hr_userdetail"; // table name
	 
	 if (!empty($id)) {
		 $this->icot_model->_primary_key = "uid";
		 
	 }
   else
   {
	   $this->icot_model->_primary_key = "detail_id";
   }	   
		 
    // $this->chha_model->_primary_key = "uid"; // $id
	 $check_existing_data = $this->icot_model->check_by(array('uid' => $icot_id), 'hr_userdetail');
	
    $document_data=$this->icot_model->array_from_post(array('service_country','service_county','service_state','service_city','resume_id','job_id','date_of_interview','official_status'));
    
     
       //  I9 Tax  File upload
        if (!empty($_FILES['i9_tax']['name'])) {
            $old_path = $this->input->post('i9_tax_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->icot_model->uploadFile('i9_tax');
            $val == TRUE || redirect('admin/icot/add_icot');
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
            $val = $this->icot_model->uploadFile('state_of_ack');
            $val == TRUE || redirect('admin/icot/add_icot');
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
            $val = $this->icot_model->uploadFile('back_check');
            $val == TRUE || redirect('admin/icot/add_icot');
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
            $val = $this->icot_model->uploadFile('w4_form');
            $val == TRUE || redirect('admin/icot/add_icot');
            $document_data['w4_form_filename'] = $val['fileName'];
            $document_data['w4_form'] = $val['path'];
            $document_data['w4_form_path'] = $val['fullPath'];
        } 
 
		   $document_data['uid'] = $icot_id;
		   
		 //  echo "<pre>";print_r($document_data);echo "</pre>";die;
		  
		  if (!empty($check_existing_data)) {
			
            $check = $this->icot_model->save($document_data,$icot_id);
		   
        } else {
			
            $this->icot_model->save($document_data);
        }
		 
		 //  
          //$this->chha_model->save($document_data);
         
      
        $type = "success";
        $message = "Employee Information Successfully Saved!";
        set_message($type, $message);
        redirect('admin/icot/icot_list'); //redirect page
 
        
    }




         public function icot_list($id = NULL) { 
            $data['title'] = "icot List";
            $data['all_icot_info'] = $this->icot_model->all_icot_info();
			//echo "<pre>";print_r($data);echo "</pre>";die;
            $data['subview'] = $this->load->view('admin/ot/icot_list', $data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }

   public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }

	
	public function view_icot($id = NULL) {
        $data['title'] = "View Nurse Details";
        if (!empty($id)) {// retrive data from db by id
            $data['icot_info'] = $this->icot_model->all_icot_info($id); 
			
			
            if (empty($data['icot_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/icot/icot_list');
            }
        }
        $data['subview'] = $this->load->view('admin/ot/view_icot', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
	
	
	
	
	public function delete_icot($id) {
  
              // echo $id;die;
			   $this->icot_model->_table_name = "hr_users"; // table name
				$this->icot_model->_primary_key = "uid"; // $id
			    $this->icot_model->delete($id);
			   

			   $this->icot_model->_table_name = "hr_userdetail"; // table name
				$this->icot_model->_primary_key = "uid"; // $id
			    $this->icot_model->delete($id);
				
				$type = "success";
        $message = "Employee Information Successfully Delete!";
        set_message($type, $message);
        redirect('admin/icot/icot_list'); //redirect page

  
 }
 
 
 
 public function icot_list_pdf() {
        $data['title'] = "Employee List";
        $data['all_icot_info'] = $this->icot_model->all_icot_info();
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/ot/icot_list_pdf', $data, true);
        pdf_create($view_file, 'icot List');
    }
 
 
  public function make_pdf($id) {
        $data['title'] = "Employee List";
        $data['icot_info'] = $this->icot_model->all_icot_info($id);
		
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/ot/icot_view_pdf', $data, true);
        pdf_create($view_file, $data['icot_info']->first_name);
    }
	
	
	

	


}

?>