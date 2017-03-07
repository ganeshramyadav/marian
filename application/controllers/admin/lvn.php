<?php
class Lvn extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('lvn_model');
		$this->load->model('rn_model');
    }


    public function add_lvn($id = NULL) {
	
       
		$data['title'] = "Add lvn";
		if (!empty($id)) {
			$data['lvn_info'] = $this->lvn_model->all_lvn_info($id);
			// $data['lvn_info'] = $this->rn_model->all_info($id);
			$data['info']	=	$data['lvn_info'];
			$data['lvn_bulk'] = $this->rn_model->all_bulk($id);
			
			// echo"<pre>";print_r($data['lvn_info']);echo"</pre>";
		   
			// For city
			$this->lvn_model->_table_name = "location_5"; //table name
			$this->lvn_model->_order_by = "name";
			$where = "location_5.location_4";
			$data['all_city']=$this->lvn_model->getwhere($where, $city->service_county, 'result');
			
			// echo"<pre>";print_r($data['info']);echo"</pre>";
			// echo"<pre>";print_r($data);echo"</pre>";
			
			// die;
				
            if (empty($data['info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/lvn/add_lvn');
            }
        }
		// echo "Ganesh".$id; die;
		$this->lvn_model->_table_name = "countries"; //table name
		$this->lvn_model->_order_by = "countryName";
		$data['all_country'] = $this->lvn_model->get();
       
		// For county
		$this->rn_model->_table_name = "location_4"; //table name
		$this->rn_model->_order_by = "name";
		$data['all_county']=$this->rn_model->get();
	   
	   
	   // echo"<pre>";print_r($data);echo"</pre>";die;
	   
	   
        $data['subview'] = $this->load->view('admin/lvn/lvn', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
    
    public function add_hospicelvn($id = NULL) {
		
		$data['title'] = "Add Hospicelvn";
			if (!empty($id)) {

				$data['lvn_info'] = $this->lvn_model->all_aclvn_info($id);
				
				$data['info']	=	$data['lvn_info'];
				$data['lvn_bulk'] = $this->rn_model->all_bulk($id);
				   
				// For city
				$this->lvn_model->_table_name = "location_5"; //table name
				$this->lvn_model->_order_by = "name";
				$where = "location_5.location_4";
				$data['all_city']=$this->lvn_model->getwhere($where, $city->service_county, 'result');			   
				
            if (empty($data['lvn_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/lvn/add_hospicelvn');
            }
        }

		$this->lvn_model->_table_name = "countries"; //table name
		$this->lvn_model->_order_by = "countryName";
		$data['all_country'] = $this->lvn_model->get();
       
		// For county
		$this->rn_model->_table_name = "location_4"; //table name
		$this->rn_model->_order_by = "name";
		$data['all_county']=$this->rn_model->get();
		
		
		// echo"<pre>";print_r($data);echo"</pre>";die;
	   
        $data['subview'] = $this->load->view('admin/lvn/hospicelvn', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }


	public function lvn_list($id = NULL) {
		$data['title'] = "lvn List";
		$data['all_lvn_info'] = $this->lvn_model->all_lvn_info();
		$data['subview'] = $this->load->view('admin/lvn/lvn_list', $data, TRUE);
		$this->load->view('admin/_layout_main', $data);
    }
	
	public function lvn_aclist($id = NULL) {
		$data['title'] = "Hospice Lvn List";
		$data['all_lvn_info'] = $this->lvn_model->all_aclvn_info();
		$data['subview'] = $this->load->view('admin/lvn/lvn_list', $data, TRUE);
		$this->load->view('admin/_layout_main', $data);
    }

	public function hash($string) {
		return hash('sha512', $string . config_item('encryption_key'));
	}

	
	public function view_lvn($id = NULL) {
        $data['title'] = "View Nurse Details";
        if (!empty($id)) {
            $data['lvn_info'] = $this->lvn_model->all_lvn_info($id); 
			
			
            if (empty($data['lvn_info'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/lvn/lvn_list');
            }
        }
		
		$data['rn_bulk'] = $this->rn_model->all_bulk($id);
		$name=$data['lvn_info']->first_name;
	    $info =json_decode($data['rn_bulk']->meta_data);
	    $info->first_name = $name;
		$data['info1']=$info;
		
		//echo "<pre>";print_r($data);echo "</pre>";die;;
		
		
		
        $data['subview'] = $this->load->view('admin/lvn/view_lvn', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
	
	public function delete_lvn($id) {
		
		$b = (explode('.', $id));
		$id = $b[0];
		$check_id = $b[1];
		
		
		$this->lvn_model->_table_name = "hr_users"; // table name
		$this->lvn_model->_primary_key = "uid"; // $id
		$this->lvn_model->delete($id);


		$this->lvn_model->_table_name = "hr_userdetail"; // table name
		$this->lvn_model->_primary_key = "uid"; // $id
		$this->lvn_model->delete($id);

		$type = "success";
		$message = "Employee Information Successfully Delete!";
		set_message($type, $message);
		
		
		// redirect('admin/lvn/lvn_list'); //redirect page
		if(!empty($check_id)){	//redirect page
			echo 'admin/lvn/lvn_aclist';
			redirect('admin/lvn/lvn_aclist');
		}else{
			echo 'admin/lvn/lvn_list';
			redirect('admin/lvn/lvn_list');
		}
	}

 public function lvn_list_pdf() {
        $data['title'] = "Employee List";
        $data['all_lvn_info'] = $this->lvn_model->all_lvn_info();
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/lvn/lvn_list_pdf', $data, true);
        pdf_create($view_file, 'lvn List');
    }

  public function make_pdf($id) {
       
        $data['title'] = "Lvn Form";
        $data['lvn_info'] = $this->rn_model->all_info($id);
		$name=$data['lvn_info']->first_name;
		
		$data['lvn_bulk'] = $this->rn_model->all_bulk($id);
	    $info =json_decode($data['lvn_bulk']->meta_data);
	    $info->first_name = $name;
		
		//echo "<pre>";print_r($info);echo "</pre>";die;
		
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/lvn/lvn_view_pdf', $info, true);
        pdf_create($view_file, $data['lvn_info']->first_name);
    }
	
	
	public function save_lvn_bulk_form($id = NULL){

		$uid = $_POST['uid'];
		$employment = $_POST['date_of_employment'];
		$completion = $_POST['date_of_completion'];
		$meta_data = json_encode($_POST);
		$bulkdata = array(
			'uid' => $uid,
			'meta_data' => $meta_data,
			'date_of_employment' => $employment,
			'date_of_completion' => $completion
		);

		$this->rn_model->_table_name = "hr_rn_bulk"; // table name
		
		if (!empty($id)) {
			$this->rn_model->_primary_key = "uid";
			$id = $this->rn_model->save($bulkdata,$id);
		} else {
			$this->rn_model->_primary_key = "lvn_id";
			$id = $this->rn_model->save($bulkdata);  
		}
		$type = "success";
		echo $type;
	}	
	
	
	
	public function add_pe($id = NULL) { 
      
		$data['title'] = "Add PE";
	  
	    $data1['all_lvn_info'] = $this->lvn_model->all_lvn_info();
		// echo "<pre>"; print_r($data1['all_lvn_info']); echo "</pre>";die;
		
		// $data1['all_lvn_info'] = $this->lvn_model->all_aclvn_info();
		// echo "<pre>"; print_r($data1['all_lvn_info']); echo "</pre>";die;
		
	      if (!empty($id)) {         
              
		       $data['pe_bulk'] = $this->lvn_model->pe_bulklist($id);
			   $data1['info'] = json_decode($data['pe_bulk']->meta_data);
	           $data1['info']->pid = $data['pe_bulk']->id;
			 
            if (empty($data['pe_bulk'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/lvn/add_pe');
            }
        }
	 	
        
	   //  echo "<pre>";print_r($data1['info']);echo "</pre>";die;
        $data['subview'] = $this->load->view('admin/lvn/pelvn', $data1, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
	
	public function add_acpe($id = NULL) { 
      
		$data['title'] = "Add PE";
		$data1['all_lvn_info'] = $this->lvn_model->all_aclvn_info();

		if (!empty($id)) {	
		  
			$data['pe_bulk'] = $this->lvn_model->acpe_bulklist($id);
			$data1['info'] = json_decode($data['pe_bulk']->meta_data);
			$data1['info']->pid = $data['pe_bulk']->id;

			if (empty($data['pe_bulk'])) {
				$type = "error";
				$message = "No Record Found";
				set_message($type, $message);
				redirect('admin/lvn/add_pe');
			}
		}

		$data['subview'] = $this->load->view('admin/lvn/hospicepelvn', $data1, TRUE);
		$this->load->view('admin/_layout_main', $data);
    }
   
	
	public function pe_list($id = NULL) {
		$data['title'] = "PE List";
		$data['check'] = "PE";
	
		$data1['all_lvn_info'] = $this->lvn_model->all_lvn_info();

		$data1['all_info'] = $this->lvn_model->pe_bulklist();
	
		$dataarray = array();
		foreach($data1['all_info'] as $value){
			
			$array = array();
			$array = json_decode($value['meta_data']);
			$array->id = $value['id'];
			foreach($data1['all_lvn_info'] as $value1){
				if($value['uid'] == $value1['uid']){
					$array->firstname = $value1['first_name'];
					$array->lastname = $value1['last_name'];
				}
			}
			array_push($dataarray, $array);
		}
		$data['users'] = $dataarray;
		$data['subview'] = $this->load->view('admin/lvn/pelvn_list',$data, TRUE);
		$this->load->view('admin/_layout_main', $data);
    }

	public function pe_aclist($id = NULL) {
		$data['title'] = "PE List";
		$data['check'] = "PE-AC";
	
		$data1['all_lvn_info'] = $this->lvn_model->all_aclvn_info();
		
		$data1['all_info'] = $this->lvn_model->acpe_bulklist();
	
		$dataarray = array();
		foreach($data1['all_info'] as $value){
			$array = array();
			$array = json_decode($value['meta_data']);
			$array->id = $value['id'];
			foreach($data1['all_lvn_info'] as $value1){
				if($value['uid'] == $value1['uid']){
					$array->firstname = $value1['first_name'];
					$array->lastname = $value1['last_name'];
				}
			}
			array_push($dataarray, $array);
		}
		
		$data['users'] = $dataarray;
		$data['subview'] = $this->load->view('admin/lvn/pelvn_list',$data, TRUE);
		$this->load->view('admin/_layout_main', $data);
    }
	
	
	
	
	
	
	public function view_pe($id = NULL){
		
		 
		 $data1['all_lvn_info'] = $this->lvn_model->all_lvn_info();
		 
               
		 
       if (!empty($id)) {         
	      
              
		       $data['pe_bulk'] = $this->lvn_model->pe_bulklist($id);
			   $data1['info'] = json_decode($data['pe_bulk']->meta_data);
			    
			   foreach($data1['all_lvn_info'] as $value1){
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
                redirect('admin/lvn/add_pe');
            }
        }
	 	
		//echo "<pre>";print_r($data1);echo "</pre>";die;
		    $data['subview'] = $this->load->view('admin/lvn/view_pe',$data1, TRUE);
            $this->load->view('admin/_layout_main', $data);
		
		
	}




	public function pelvn_list_pdf() {
		
        $data['title'] = "Performance Evalution User List";
		$data1['all_lvn_info'] = $this->lvn_model->all_lvn_info();
		$data1['all_info'] = $this->lvn_model->pe_bulklist();

		$dataarray = array();
		foreach($data1['all_info'] as $value){
			$array = array();

			$array = json_decode($value['meta_data']);
			$array->id = $value['id'];
			foreach($data1['all_lvn_info'] as $value1){
				if($value['uid'] == $value1['uid']){
					$array->firstname = $value1['first_name'];
					$array->lastname = $value1['last_name'];						
				}
			}
			array_push($dataarray, $array);

		}
		$data['users'] = $dataarray;
		//echo "<pre>";print_r($data);echo "</pre>";die;
        $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/lvn/pelvn_list_pdf', $data, true);
        pdf_create($view_file, 'Performance Evaluation List');
    }

	

    public function PEmake_pdf($id = NULL){
		
		$data1['all_lvn_info'] = $this->lvn_model->all_lvn_info($id);
		 
             
		 
       if (!empty($id)) {         
	      
              
		       $data['pe_bulk'] = $this->lvn_model->pe_bulklist($id);
			   $data1['info'] = json_decode($data['pe_bulk']->meta_data);
			    
			   foreach($data1['all_lvn_info'] as $value1){
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
                redirect('admin/lvn/add_pe');
            }
        }
		
		//echo "<pre>";print_r($data1);echo "</pre>";die;
	 	
		  $this->load->helper('dompdf');
        $view_file = $this->load->view('admin/lvn/pelvn_view_pdf', $data1, true);
        pdf_create($view_file, 'Performance Evaluation List');
		
		
		
		
	}

	public function location_list() {
		    $id = $_POST['id'];
            $data['all_city_info'] = $this->lvn_model->all_location($id);
		 // echo "<pre>";print_r($data['all_city_info']);echo "</pre>";die;
           // $data['subview'] = $this->load->view('admin/rn/rn_list', $data, TRUE);
          //  $this->load->view('admin/_layout_main', $data);
		  // echo $data['all_city_info'];
		  echo json_encode($data['all_city_info']);
		//  echo $data['all_city_info'];
		
    }
	
	
	

}

?>