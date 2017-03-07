<?php
class Icpt extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('icpt_model');
		$this->load->model('rn_model');
    }


    public function add_icpt($id = NULL) { 
       
       $data['title'] = "Add icpt";
	   
	   
	   
	    if (!empty($id)) {// retrive data from db by id            
			$data['icpt_info'] = $this->rn_model->all_info($id);
			//  echo "<pre>";print_r($data);echo "</pre>";die;
			$data['icpt_bulk'] = $this->rn_model->all_bulk($id);
			
           // For city
           $this->rn_model->_table_name = "location_5"; //table name
           $this->rn_model->_order_by = "name";
           $where = "location_5.location_4";
           $data['all_city']=$this->rn_model->getwhere($where, $city->service_county, 'result');
			
            if (empty($data['icpt_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/icpt/add_icpt');
            }
        }
	   
	   

        $this->icpt_model->_table_name = "countries"; //table name
        $this->icpt_model->_order_by = "countryName";
        $data['all_country'] = $this->icpt_model->get();

		// For county
		$this->rn_model->_table_name = "location_4"; //table name
		$this->rn_model->_order_by = "name";
		$data['all_county']=$this->rn_model->get();			
		
        //page load
        $data['subview'] = $this->load->view('admin/pt/icpt', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
    
	
	
	
	
	




         public function icpt_list($id = NULL) { 
            $data['title'] = "icpt List";
            $data['all_icpt_info'] = $this->icpt_model->all_icpt_info();
			//echo "<pre>";print_r($data);echo "</pre>";die;
            $data['subview'] = $this->load->view('admin/pt/icpt_list', $data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }

   public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }

	
	public function view_icpt($id = NULL) {
        $data['title'] = "View Nurse Details";
        if (!empty($id)) {// retrive data from db by id
            $data['icpt_info'] = $this->icpt_model->all_icpt_info($id); 
			
			
            if (empty($data['icpt_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/icpt/icpt_list');
            }
        }
		
		
		$data1['icpt_bulk'] = $this->rn_model->all_bulk($id);
		//echo "<pre>";print_r($data);echo "</pre>";die;
		$name=$data['icpt_info']->first_name;
	    $info =json_decode($data1['icpt_bulk']->meta_data);
	    $info->first_name = $name;
		$data['info1']=$info;
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $data['subview'] = $this->load->view('admin/pt/view_icpt', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
	
	
	
	
	public function delete_icpt($id) {
  
              // echo $id;die;
			   $this->icpt_model->_table_name = "hr_users"; // table name
				$this->icpt_model->_primary_key = "uid"; // $id
			    $this->icpt_model->delete($id);
			   

			   $this->icpt_model->_table_name = "hr_userdetail"; // table name
				$this->icpt_model->_primary_key = "uid"; // $id
			    $this->icpt_model->delete($id);
				
			  $type = "success";
              $message = "Employee Information Successfully Delete!";
              set_message($type, $message);
              redirect('admin/icpt/icpt_list'); //redirect page

  
 }
 
 
 
 public function icpt_list_pdf() {
        $data['title'] = "Employee List";
        $data['all_icpt_info'] = $this->icpt_model->all_icpt_info();
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/pt/icpt_list_pdf', $data, true);
        pdf_create($view_file, 'icpt List');
    }
 
 
  public function make_pdf($id) {
        $data['title'] = "Employee List";
        $data['icpt_info'] = $this->icpt_model->all_icpt_info($id);
		
		//echo "<pre>";print_r($data);echo "</pre>";die;
		
		$data1['icpt_bulk'] = $this->rn_model->all_bulk($id);
		//echo "<pre>";print_r($data);echo "</pre>";die;
		$name=$data['icpt_info']->first_name;
	    $info =json_decode($data1['icpt_bulk']->meta_data);
	    $info->first_name = $name;
		$data['info1']=$info;
		
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/pt/icpt_view_pdf', $data, true);
        pdf_create($view_file, $data['icpt_info']->first_name);
    }
	
	public function location_list() {
		$id = $_POST['id'];
		$data['all_city_info'] = $this->icpt_model->all_location($id);
		echo json_encode($data['all_city_info']);
    }

}

?>