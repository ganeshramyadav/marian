<?php


class Pe extends Admin_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->model('admin_model');
	$this->load->model('pe_model');
        $this->load->model('discipline_model');
        $this->load->model('settings_model');
    }
 
    public function pe_disciplinelist($id=NULL) {
           
            $data['title'] = "Performance Evaluation List";
          // Total discipline
        $this->admin_model->_table_name = "hr_discipline"; //table name
        $this->admin_model->_order_by = "discipline_id"; // order by
       
        $disciplinedata = $this->admin_model->get();
     //   foreach ($disciplinedata as $key1 => $key) { 
     //        if($key->discipline == 'Homehealth Office Staff' || $key->discipline == 'Hospice Office Staff')
      //                      unset($disciplinedata[$key1]);
    //     }
         $data['discipline'] = $disciplinedata;
           $data['subview'] = $this->load->view('admin/pe/pe_disciplinelist', $data, TRUE);
           
            $this->load->view('admin/_layout_main', $data);
    }

    public function pe_list($id=NULL){
      $data['title'] = "PE List";
             
            $disciplineid = $_POST['select_discipline'];
           if (empty($disciplineid)) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/pe/pe_disciplinelist');
            }
             $data['disciplinedetail'] = $this->discipline_model->discipline_namebyid($disciplineid);
             
		$data['check'] = "PE";
	
		$data1['all_pe_info'] = $this->pe_model->all_pe_info($disciplineid ,$id);

		$data1['all_info'] = $this->pe_model->pe_bulklist($disciplineid , $id);
	
		$dataarray = array();
		foreach($data1['all_info'] as $value){
			
			$array = array();
			$array = json_decode($value['meta_data']);
			$array->id = $value['id'];
			foreach($data1['all_pe_info'] as $value1){
				if($value['uid'] == $value1['uid']){
					$array->firstname = $value1['first_name'];
					$array->lastname = $value1['last_name'];
				}
			}
			array_push($dataarray, $array);
		}
		$data['users'] = $dataarray;

           //  echo '<pre>';print_r($data);echo '</pre>';die;
		$data['subview'] = $this->load->view('admin/pe/pe_list',$data, TRUE);
		$this->load->view('admin/_layout_main', $data);
    }

  public function add_pe($disciplineid=NULL,$userid=NULL,$id = NULL) { 
     
		$data['title'] = "Add PE";
             $employee_id = $this->session->userdata('employee_id');
                $data1['admin_info'] = $this->settings_model->select_admin_info($employee_id);            

            if(!empty($userid)){
	      $all_pe_rowinfo = $this->pe_model->all_pe_info($disciplineid,$userid);
              $data1['username'] = $all_pe_rowinfo->first_name.' '.$all_pe_rowinfo->last_name;
              $data1['user_esign'] = $all_pe_rowinfo->signature;
              $userid = NULL;
              $data1['all_pe_info'] = $this->pe_model->all_pe_info($disciplineid,$userid);
            }else{
              $data1['all_pe_info'] = $this->pe_model->all_pe_info($disciplineid,$userid);
              $data1['username'] = "";
            }
            
	    $data1['disciplineid'] = $disciplineid;	
		 
	      if (!empty($id)) {         
              
		       $data['pe_bulk'] = $this->pe_model->pe_bulklist($disciplineid,$id);
			   $data1['info'] = json_decode($data['pe_bulk']->meta_data);
	           $data1['info']->pid = $data['pe_bulk']->id;
			 
            if (empty($data['pe_bulk'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/pe/add_pe');
            }
        }
	 	
       
	  
        $data['subview'] = $this->load->view('admin/pe/pe', $data1, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }


   public function pe_form($id = NULL){
		
		$uid = $_POST['user'];
		$discipline_id = $_POST['discipline_id'];
		$meta_data =json_encode($_POST);
		
		$bulkdata = array( 
			'uid' =>$uid,
			'discipline_id'=>$discipline_id,
			'meta_data' =>$meta_data
		);
	//echo "<pre>";print_r($meta_data);echo "</pre>";die;
    
	$this->discipline_model->_table_name = "pe_bulk";
	 if (!empty($id)) {
		  $this->discipline_model->_primary_key = "id";
		  $id = $this->discipline_model->save($bulkdata,$id);
	   }else{
	
	   // table name
    
	        $this->discipline_model->_primary_key = "id";
               $id = $this->discipline_model->save($bulkdata);  
	    }
	        $type = "success";
		echo $type;
	}
  
   public function pe_delete($id){
	
		$this->discipline_model->_table_name = "pe_bulk"; // table name
		$this->discipline_model->_primary_key = "id"; // $id
		$this->discipline_model->delete($id);

		$this->discipline_model->delete($id);

		$type = "success";
		$message = "Employee Information Successfully Delete!";
		set_message($type, $message);
		redirect('admin/pe/pe_disciplinelist');
	}

}

?>