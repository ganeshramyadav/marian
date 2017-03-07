<?php
class Pept extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('employee_model');
		$this->load->model('acpt_model');
		$this->load->model('icpt_model');
    }


    public function add_pt($id = NULL) { 
        
        $data['title'] = "Add PE";
	    $data1['acpt_info'] = $this->acpt_model->all_acpt_info(); 
	    $data1['icpt_info'] = $this->icpt_model->all_icpt_info();
       // echo "<pre>";print_r($data1);echo "</pre>";die;
		
		
		if (!empty($id)) {         
              
		       $data['pe_bulk'] = $this->icpt_model->pe_bulklist($id);
			   $data1['info2'] = json_decode($data['pe_bulk']->meta_data);
			   
	           $data1['info2']->pid = $data['pe_bulk']->id;
			   
			 
            if (empty($data['pe_bulk'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/pept/add_pt');
            }
        }
		
        $this->employee_model->_table_name = "countries"; //table name
        $this->employee_model->_order_by = "countryName";
        $data['all_country'] = $this->employee_model->get();

        //page load
        $data['subview'] = $this->load->view('admin/pt/pept', $data1, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
    
	
	
	public function pe_list($id = NULL) {
		
            $data['title'] = "PE List";

			//$data1['all_chha_info'] = $this->chha_model->all_chha_info();
			
			$data1['acpt_info'] = $this->acpt_model->all_acpt_info(); 
	        $data1['icpt_info'] = $this->icpt_model->all_icpt_info();
            $data1['all_info'] = $this->icpt_model->pe_bulklist();
			
			$dataarray = array();
			 foreach($data1['all_info'] as $value)
			 {
				 $array = array();
				
				 $array = json_decode($value['meta_data']);
				 $array->id = $value['id'];
				 
				  foreach($data1['acpt_info'] as $value1){
					 if($value['uid'] == $value1['uid']){
						$array->firstname = $value1['first_name'];
                        $array->lastname = $value1['last_name'];	
                        					
					 }
				 }
				 
				 
				 foreach($data1['icpt_info'] as $value1){
					 if($value['uid'] == $value1['uid']){
						$array->firstname = $value1['first_name'];
                        $array->lastname = $value1['last_name'];	
                        					
					 }
				 }
				 array_push($dataarray, $array);
				
			 }
	        $data['users'] = $dataarray;
           // echo "<pre>";print_r($data['users']);echo "</pre>";die;

            $data['subview'] = $this->load->view('admin/pt/pept_list',$data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }
	
	
	
	public function view_pe($id = NULL){
		
		 $data['acpt_info'] = $this->acpt_model->all_acpt_info(); 
	     $data['icpt_info'] = $this->icpt_model->all_icpt_info();
		
       if (!empty($id)) {         
	      
              
		       $data['pe_bulk'] = $this->icpt_model->pe_bulklist($id);
			   $data1['info'] = json_decode($data['pe_bulk']->meta_data);
			    
			   foreach($data['acpt_info'] as $value1){
					 if($data1['info']->user == $value1['uid']){
						$data1['info']->firstname = $value1['first_name'];
                        $data1['info']->lastname = $value1['last_name'];						
					 }
				 }
				 
				 foreach($data['icpt_info'] as $value1){
					 if($data1['info']->user == $value1['uid']){
						$data1['info']->firstname = $value1['first_name'];
                        $data1['info']->lastname = $value1['last_name'];						
					 }
				 }
				 
				 
			   
	            $data1['info']->pid = $data['pe_bulk']->id;
			 
            if (empty($data['pe_bulk'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/chha/add_pe');
            }
        }
	 	
		//echo "<pre>";print_r($data1);echo "</pre>";die;
		    $data['subview'] = $this->load->view('admin/pt/view_pe',$data1, TRUE);
            $this->load->view('admin/_layout_main', $data);
		
		
	}
	
	
	public function pe_delete($id){
		
		   
		         $this->icpt_model->_table_name = "pe_bulk"; // table name
				$this->icpt_model->_primary_key = "id"; // $id
			    $this->icpt_model->delete($id);
			
			    
				
				$type = "success";
               $message = "Employee Information Successfully Delete!";
               set_message($type, $message);
               redirect('admin/pept/pe_list');
		
		
		
		
	}
	
	
	public function PEmake_pdf($id = NULL){
		
		$data['acpt_info'] = $this->acpt_model->all_acpt_info(); 
	     $data['icpt_info'] = $this->icpt_model->all_icpt_info();

       if (!empty($id)) {         
	      
              
		       $data['pe_bulk'] = $this->icpt_model->pe_bulklist($id);
			   $data1['info'] = json_decode($data['pe_bulk']->meta_data);
			    
			   foreach($data['acpt_info'] as $value1){
					 if($data1['info']->user == $value1['uid']){
						$data1['info']->firstname = $value1['first_name'];
                        $data1['info']->lastname = $value1['last_name'];						
					 }
				 }
				 
				 foreach($data['icpt_info'] as $value1){
					 if($data1['info']->user == $value1['uid']){
						$data1['info']->firstname = $value1['first_name'];
                        $data1['info']->lastname = $value1['last_name'];						
					 }
				 }
			   
	            $data1['info']->pid = $data['pe_bulk']->id;
			 
                // echo "<pre>";print_r($data1);echo "</pre>";die;
            if (empty($data['pe_bulk'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/chha/add_pe');
            }
        }
		
		$this->load->helper('dompdf');
        $view_file = $this->load->view('admin/pt/pept_view_pdf', $data1, true);
        pdf_create($view_file, 'Performance Evaluation List');
	
}
	
	
	


}

?>