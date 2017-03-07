<?php
class Icst extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('icst_model');
		$this->load->model('rn_model');
    }


    public function add_icst($id = NULL) { 
       
       $data['title'] = "Add icst";
	   
	   
	   
	      if (!empty($id)) {// retrive data from db by id            
            $data['icst_info'] = $this->icst_model->all_icst_info($id);
			$data['icst_bulk'] = $this->rn_model->all_bulk($id); 
			// For city
			$this->rn_model->_table_name = "location_5"; //table name
			$this->rn_model->_order_by = "name";
			$where = "location_5.location_4";
			$data['all_city']=$this->rn_model->getwhere($where, $city->service_county, 'result');
			
			
          //  echo "<pre>";print_r($data);echo "</pre>";die;
            if (empty($data['icst_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/icst/add_icst');
            }
        }
	   
	   

		$this->icst_model->_table_name = "countries"; //table name
		$this->icst_model->_order_by = "countryName";
		$data['all_country'] = $this->icst_model->get();
		
		// For county
		$this->rn_model->_table_name = "location_4"; //table name
		$this->rn_model->_order_by = "name";
		$data['all_county']=$this->rn_model->get();			

        //page load
        $data['subview'] = $this->load->view('admin/st/icst', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
    
	
	
	
	
	public function save_icst($id = NULL) {
        // **** Employee Personal Details,Contact Details and Official Status Save And Update Start *** 
        //input post
   
       
 $data=$this->icst_model->array_from_post(array('first_name','last_name','date_of_birth','gender','nationality','present_address','permanent','city','phone','mobile','password','status','discipline_id'));
     
        if (!empty($_FILES['photo']['name'])) {
            $old_path = $this->input->post('old_path');
            if ($old_path) {
                unlink($old_path);
            }

            $val = $this->icst_model->uploadImage('photo');
            $val == TRUE || redirect('admin/icst/add_icst');
            $data['photo'] = $val['path'];
            $data['photo_a_path'] = $val['fullPath'];
        }

        $data['password'] = $this->hash('employee');
        $data['discipline_id']= '16';
        $data['status'] = 1; 
     

        // ************* Save into Employee Table 
        $this->icst_model->_table_name = "hr_users"; // table name
        $this->icst_model->_primary_key = "uid"; // $id
        
           
			
	    if (!empty($id)) {
             
           // $chha_id = $id;
			
            $icst_id = $this->icst_model->save($data, $id);
        } else {
          
           $icst_id = $this->icst_model->save($data);
        }
			
        //$employee_id = $this->chha_model->save($data);
       //  echo "<script>alert('wait started');</script>";
      //  sleep(60);
       // $insert_id = $this->db->insert_id();
       // echo $insert_id;die;
        
        

     // **** Employee Personal Details,Contact Details and Official Status Save And Update End *** 


	 $this->icst_model->_table_name = "hr_userdetail"; // table name
	 
	 if (!empty($id)) {
		 $this->icst_model->_primary_key = "uid";
		 
	 }
   else
   {
	   $this->icst_model->_primary_key = "detail_id";
   }	   
		 
    // $this->chha_model->_primary_key = "uid"; // $id
	 $check_existing_data = $this->icst_model->check_by(array('uid' => $icst_id), 'hr_userdetail');
	
    $document_data=$this->icst_model->array_from_post(array('service_country','service_county','service_state','service_city','resume_id','job_id','date_of_interview','official_status'));
    
     
       //  I9 Tax  File upload
        if (!empty($_FILES['i9_tax']['name'])) {
            $old_path = $this->input->post('i9_tax_path');
            if ($old_path) {
                unlink($old_path);
            }
            $val = $this->icst_model->uploadFile('i9_tax');
            $val == TRUE || redirect('admin/icst/add_icst');
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
            $val = $this->icst_model->uploadFile('state_of_ack');
            $val == TRUE || redirect('admin/icst/add_icst');
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
            $val = $this->icst_model->uploadFile('back_check');
            $val == TRUE || redirect('admin/icst/add_icst');
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
            $val = $this->icst_model->uploadFile('w4_form');
            $val == TRUE || redirect('admin/icst/add_icst');
            $document_data['w4_form_filename'] = $val['fileName'];
            $document_data['w4_form'] = $val['path'];
            $document_data['w4_form_path'] = $val['fullPath'];
        } 
 
		   $document_data['uid'] = $icst_id;
		   
		 //  echo "<pre>";print_r($document_data);echo "</pre>";die;
		  
		  if (!empty($check_existing_data)) {
			
            $check = $this->icst_model->save($document_data,$icst_id);
		   
        } else {
			
            $this->icst_model->save($document_data);
        }
		 
		 //  
          //$this->chha_model->save($document_data);
         
      
        $type = "success";
        $message = "Employee Information Successfully Saved!";
        set_message($type, $message);
        redirect('admin/icst/icst_list'); //redirect page
 
        
    }




         public function icst_list($id = NULL) { 
            $data['title'] = "icst List";
            $data['all_icst_info'] = $this->icst_model->all_icst_info();
			//echo "<pre>";print_r($data);echo "</pre>";die;
            $data['subview'] = $this->load->view('admin/st/icst_list', $data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }

   public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }

	
	public function view_icpt($id = NULL) {
        $data['title'] = "View Nurse Details";
        if (!empty($id)) {// retrive data from db by id
            $data['icst_info'] = $this->icst_model->all_icst_info($id); 
			
			
            if (empty($data['icpt_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/icst/icst_list');
            }
        }
		
		
		$data1['icpt_bulk'] = $this->rn_model->all_bulk($id);
		//echo "<pre>";print_r($data);echo "</pre>";die;
		$name=$data['icst_info']->first_name;
	    $info =json_decode($data1['icst_bulk']->meta_data);
	    $info->first_name = $name;
		$data['info1']=$info;
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $data['subview'] = $this->load->view('admin/pt/view_icst', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
	
	
	
	
	public function delete_icst($id) {
  
              // echo $id;die;
			   $this->icst_model->_table_name = "hr_users"; // table name
				$this->icst_model->_primary_key = "uid"; // $id
			    $this->icst_model->delete($id);
			   

			   $this->icst_model->_table_name = "hr_userdetail"; // table name
				$this->icst_model->_primary_key = "uid"; // $id
			    $this->icst_model->delete($id);
				
				$type = "success";
        $message = "Employee Information Successfully Delete!";
        set_message($type, $message);
        redirect('admin/icst/icst_list'); //redirect page

  
 }
 
 
 
 public function icst_list_pdf() {
        $data['title'] = "Employee List";
        $data['all_icst_info'] = $this->icst_model->all_icst_info();
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/st/icst_list_pdf', $data, true);
        pdf_create($view_file, 'icst List');
    }
 
 
  public function make_pdf($id) {
        $data['title'] = "Employee List";
        $data['icst_info'] = $this->icst_model->all_icst_info($id);
		
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/st/icst_view_pdf', $data, true);
        pdf_create($view_file, $data['icst_info']->first_name);
    }
	
	
	public function location_list() {
		$id = $_POST['id'];
		$data['all_city_info'] = $this->icpt_model->all_location($id);
		echo json_encode($data['all_city_info']);
    }

	


}

?>