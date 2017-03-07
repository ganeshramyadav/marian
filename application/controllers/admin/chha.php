<?php
class chha extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('chha_model');
		$this->load->model('rn_model');
    }


    public function add_chha($id = NULL) { 
       
       $data['title'] = "Add Chha";
	   
	   
           if (!empty($id)) {      
            	$data['rn_info'] = $this->rn_model->all_info($id);  
		  
		$data['rn_bulk'] = $this->rn_model->all_bulk($id); 
		    
		    
		// For city
		$this->rn_model->_table_name = "location_5"; //table name
		$this->rn_model->_order_by = "name";
		$where = "location_5.location_4";
		$data['all_city']=$this->rn_model->getwhere($where, $city->service_county, 'result');		    
			
            if (empty($data['rn_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/rn/add_rn');
            }
         }
		 
      
           $this->rn_model->_table_name = "countries"; //table name
           $this->rn_model->_order_by = "countryName";
           $data['all_country']=$this->rn_model->get();
           
         // For county
           $this->rn_model->_table_name = "location_4"; //table name
           $this->rn_model->_order_by = "name";
           $data['all_county']=$this->rn_model->get();           
           
        //page load
        $data['subview'] = $this->load->view('admin/chha/chha', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
    
	


         public function chha_list($id = NULL) {
            $data['title'] = "chha List";
            $data['all_chha_info'] = $this->chha_model->all_chha_info();
			//echo "<pre>";print_r($data);echo "</pre>";die;
            $data['subview'] = $this->load->view('admin/chha/chha_list', $data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }

   public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }

	
	public function view_chha($id = NULL) {
        $data['title'] = "View Nurse Details";
        if (!empty($id)) {// retrive data from db by id
            $data['chha_info'] = $this->chha_model->all_chha_info($id); 
			
			
            if (empty($data['chha_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/chha/chha_list');
            }
        }
		
		$data['rn_bulk'] = $this->rn_model->all_bulk($id);
		$name=$data['chha_info']->first_name;
	    $info =json_decode($data['rn_bulk']->meta_data);
	    $info->first_name = $name;
		$data['info1']=$info;
		//echo "<pre>";print_r($data['info1']);echo "</pre>";die;
		
		
        $data['subview'] = $this->load->view('admin/chha/view_chha', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
	
	
	
	
	public function delete_chha($id) {
  
              // echo $id;die;
			   $this->chha_model->_table_name = "hr_users"; // table name
				$this->chha_model->_primary_key = "uid"; // $id
			    $this->chha_model->delete($id);
			   

			   $this->chha_model->_table_name = "hr_userdetail"; // table name
				$this->chha_model->_primary_key = "uid"; // $id
			    $this->chha_model->delete($id);
				
				$type = "success";
        $message = "Employee Information Successfully Delete!";
        set_message($type, $message);
        redirect('admin/chha/chha_list'); //redirect page

  
 }
 
 
 
 public function chha_list_pdf() {
        $data['title'] = "Employee List";
        $data['all_chha_info'] = $this->chha_model->all_chha_info();
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/chha/chha_list_pdf', $data, true);
        pdf_create($view_file, 'chha List');
    }
 
 
  public function make_pdf($id = NULL) {
        $data['title'] = "Employee List";
        //$data['info1'] = $this->chha_model->all_chha_info($id);
		
       $data1['chha_info'] = $this->chha_model->all_chha_info($id); 
			       
	   $data1['rn_bulk'] = $this->rn_model->all_bulk($id);
		$name=$data1['chha_info']->first_name;
	    $info =json_decode($data1['rn_bulk']->meta_data);
	    $info->first_name = $name;
		$data['info1']=$info;
	
	
		
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/chha/chha_view_pdf', $data, true);
        pdf_create($view_file, $data['info1']->first_name);
    }
	
	



    public function add_pechha($id = NULL) { 
        
        $data['title'] = "PE";
		 
		$data1['all_chha_info'] = $this->chha_model->all_chha_info();
		
		
		if (!empty($id)) {         
              
		       $data['pe_bulk'] = $this->chha_model->pe_bulklist($id);
			  
			   $data1['info'] = json_decode($data['pe_bulk']->meta_data);
	           $data1['info']->pid = $data['pe_bulk']->id;
			 
            if (empty($data['pe_bulk'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/lvn/add_pe');
            }
        }

        $this->rn_model->_table_name = "countries"; //table name
        $this->rn_model->_order_by = "countryName";
        $data['all_country'] = $this->rn_model->get();

        //page load
        $data['subview'] = $this->load->view('admin/chha/pechha', $data1, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
	
	
	
	public function pe_list($id = NULL) {
		
            $data['title'] = "PE List";
		    
			
			$data1['all_chha_info'] = $this->chha_model->all_chha_info();
            		    
			$data1['all_info'] = $this->chha_model->pe_bulklist();
			//echo "<pre>";print_r($data1);echo "</pre>";die;
          
			$dataarray = array();
			 foreach($data1['all_info'] as $value)
			 {
				 $array = array();
				
				 $array = json_decode($value['meta_data']);
				 $array->id = $value['id'];
				  foreach($data1['all_chha_info'] as $value1){
					 if($value['uid'] == $value1['uid']){
						$array->firstname = $value1['first_name'];
                        $array->lastname = $value1['last_name'];	
                        					
					 }
				 }
				 array_push($dataarray, $array);
				
			 }
	         $data['users'] = $dataarray;
			 // echo "<pre>";print_r($data);echo "</pre>";die;
			 
		
            $data['subview'] = $this->load->view('admin/chha/pechha_list',$data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }
	
	
	
	public function view_pe($id = NULL){
		
		 
		 $data1['all_chha_info'] = $this->chha_model->all_chha_info();
		
       if (!empty($id)) {         
	      
              
		       $data['pe_bulk'] = $this->chha_model->pe_bulklist($id);
			   $data1['info'] = json_decode($data['pe_bulk']->meta_data);
			    
			   foreach($data1['all_chha_info'] as $value1){
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
		    $data['subview'] = $this->load->view('admin/chha/view_pe',$data1, TRUE);
            $this->load->view('admin/_layout_main', $data);
		
		
	}
	
	
	
	public function PEmake_pdf($id = NULL){
		
		$data1['all_chha_info'] = $this->chha_model->all_chha_info($id);

       if (!empty($id)) {         
	      
              
		       $data['pe_bulk'] = $this->chha_model->pe_bulklist($id);
			   $data1['info'] = json_decode($data['pe_bulk']->meta_data);
			    
			   foreach($data1['all_chha_info'] as $value1){
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
		
		  $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/chha/pechha_view_pdf', $data1, true);
        pdf_create($view_file, 'Performance Evaluation List');
	
}



public function pe_delete($id){
		
		
		         $this->chha_model->_table_name = "pe_bulk"; // table name
				$this->chha_model->_primary_key = "id"; // $id
			    $this->chha_model->delete($id);
			
			    $this->rn_model->delete($id);
				
				$type = "success";
               $message = "Employee Information Successfully Delete!";
               set_message($type, $message);
               redirect('admin/chha/pe_list');
		
		
		
		
	}


	
	
	
	
	
	
	
	
	


}

?>