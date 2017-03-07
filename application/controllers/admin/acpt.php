<?php
class Acpt extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('acpt_model');
		$this->load->model('rn_model');
    }


    public function add_acpt($id = NULL) { 
       
       $data['title'] = "Add Acpt";
	   
	      if (!empty($id)) {// retrive data from db by id            
            
		$data['acpt_info'] = $this->rn_model->all_info($id);
		//echo "<pre>";print_r($data['acpt_info']);echo "</pre>";die;
		$data['acpt_bulk'] = $this->rn_model->all_bulk($id); 
		    
		// For city
		$this->rn_model->_table_name = "location_5"; //table name
		$this->rn_model->_order_by = "name";
		$where = "location_5.location_4";
		$data['all_city']=$this->rn_model->getwhere($where, $city->service_county, 'result');
		    
		    
            if (empty($data['acpt_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/acpt/add_acpt');
            }
        }
	  

        $this->acpt_model->_table_name = "countries"; //table name
        $this->acpt_model->_order_by = "countryName";
        $data['all_country'] = $this->acpt_model->get();

         // For county
	$this->rn_model->_table_name = "location_4"; //table name
	$this->rn_model->_order_by = "name";
	$data['all_county']=$this->rn_model->get();

        //page load
        $data['subview'] = $this->load->view('admin/pt/acpt', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
    
	


	 public function acpt_list($id = NULL) { 
		$data['title'] = "acpt List";
		$data['all_acpt_info'] = $this->acpt_model->all_acpt_info();
		//echo "<pre>";print_r($data);echo "</pre>";die;
		$data['subview'] = $this->load->view('admin/pt/acpt_list', $data, TRUE);
		$this->load->view('admin/_layout_main', $data);
}

   public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }

	
	public function view_acpt($id = NULL) {
        $data['title'] = "View Nurse Details";
        if (!empty($id)) {// retrive data from db by id
            $data['acpt_info'] = $this->acpt_model->all_acpt_info($id); 
			
			
            if (empty($data['acpt_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/acpt/acpt_list');
            }
        }
		
		
		$data['acpt_bulk'] = $this->rn_model->all_bulk($id);
		//echo "<pre>";print_r($data);echo "</pre>";die;
		$name=$data['acpt_info']->first_name;
	    $info =json_decode($data['acpt_bulk']->meta_data);
	    $info->first_name = $name;
		$data['info1']=$info;
		//echo "<pre>";print_r($data['info1']);echo "</pre>";die;
		
        $data['subview'] = $this->load->view('admin/pt/view_acpt', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
	
	
	
	
	public function delete_acpt($id) {
  
              // echo $id;die;
			    $this->acpt_model->_table_name = "hr_users"; // table name
				$this->acpt_model->_primary_key = "uid"; // $id
			    $this->acpt_model->delete($id);
			   

			    $this->acpt_model->_table_name = "hr_userdetail"; // table name
				$this->acpt_model->_primary_key = "uid"; // $id
			    $this->acpt_model->delete($id);
				
				$type = "success";
                $message = "Employee Information Successfully Delete!";
                set_message($type, $message);
                redirect('admin/acpt/acpt_list'); //redirect page

  
 }
 
 
 
 public function acpt_list_pdf() {
        $data['title'] = "Employee List";
        $data['all_acpt_info'] = $this->acpt_model->all_acpt_info();
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/pt/acpt_list_pdf', $data, true);
        pdf_create($view_file, 'acpt List');
    }
 
 
  public function make_pdf($id) {
	  
        $data['title'] = "Employee List";
        $data['acpt_info'] = $this->acpt_model->all_acpt_info($id);
		
		
		$data1['acpt_bulk'] = $this->rn_model->all_bulk($id);
		//echo "<pre>";print_r($data);echo "</pre>";die;
		$name=$data['acpt_info']->first_name;
	    $info =json_decode($data1['acpt_bulk']->meta_data);
	    $info->first_name = $name;
		$data['info1']=$info;
		
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/pt/acpt_view_pdf', $data, true);
        pdf_create($view_file, $data['acpt_info']->first_name);
    }
	
	
	

	


}

?>