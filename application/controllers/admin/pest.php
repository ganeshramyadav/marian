<?php
class Pest extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('employee_model');
	$this->load->model('acst_model');
	$this->load->model('icst_model');
    }

	
	public function add_st($id = NULL) {		 
	    $data['title'] = "Add PE";
	    $data1['acst_info'] = $this->acst_model->all_acst_info(); 
	    $data1['icst_info'] = $this->icst_model->all_icst_info();		
				
		if (!empty($id)) {
		       $data['pe_bulk'] = $this->icst_model->pe_bulklist($id);
			   $data1['info2'] = json_decode($data['pe_bulk']->meta_data);
	           $data1['info2']->pid = $data['pe_bulk']->id;

            if (empty($data['pe_bulk'])) {
		
				echo "<pre>";print_r($data1['icst_info']);echo "</pre>";die;			
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/pest/add_st');
            }
        }
		
        $this->employee_model->_table_name = "countries"; //table name
        $this->employee_model->_order_by = "countryName";
        $data['all_country'] = $this->employee_model->get();
		
        //page load
        $data['subview'] = $this->load->view('admin/st/pest', $data1, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
	
	
	public function pe_list($id = NULL) {	
		
            $data['title'] = "PE List";

			$data1['acst_info'] = $this->acst_model->all_acst_info(); 
	        $data1['icst_info'] = $this->icst_model->all_icst_info();
            $data1['all_info'] = $this->icst_model->pe_bulklist();

			$dataarray = array();
			foreach($data1['all_info'] as $value){
				$array = array();

				$array = json_decode($value['meta_data']);
				$array->id = $value['id'];

				foreach($data1['acst_info'] as $value1){
					if($value['uid'] == $value1['uid']){
						$array->firstname = $value1['first_name'];
						$array->lastname = $value1['last_name'];
					}
				}
				foreach($data1['icst_info'] as $value1){
					if($value['uid'] == $value1['uid']){
						$array->firstname = $value1['first_name'];
						$array->lastname = $value1['last_name'];
					}
				}
				array_push($dataarray, $array);
			}
			
	        $data['users'] = $dataarray;
           // echo "<pre>";print_r($data['users']);echo "</pre>";die;

            $data['subview'] = $this->load->view('admin/st/pest_list',$data, TRUE);
            $this->load->view('admin/_layout_main', $data);
    }
	
	
	
	
	
	
	
	
    // public function add_st($id = NULL) {
        // $this->employee_model->_table_name = "countries"; //table name
        // $this->employee_model->_order_by = "countryName";
        // $data['all_country'] = $this->employee_model->get();

        // //page load
        // $data['subview'] = $this->load->view('admin/st/pest', $data, TRUE);
        // $this->load->view('admin/_layout_main', $data);
    // }
	
	
	
	
	
	
}

?>