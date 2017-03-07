<?php


class Ca extends Admin_Controller {

    public function __construct() {
        parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('ca_model');
		$this->load->model('discipline_model');
                $this->load->model('settings_model');
    }
 
    public function ca_disciplinelist($id=NULL) {
		$data['title'] = "COMPETENCY ASSESSMENT List";
		// Total discipline
		$this->admin_model->_table_name = "hr_discipline"; //table name
		$this->admin_model->_order_by = "discipline_id"; // order by
		$data['discipline'] = $this->admin_model->get();

		// echo '<pre>';print_r($data);echo '</pre>';die;
		$data['subview'] = $this->load->view('admin/ca/ca_disciplinelist', $data, TRUE);

		$this->load->view('admin/_layout_main', $data);
    }

    public function ca_list($id=NULL){
	
		$data['title'] = "COMPETENCY ASSESSMENT List";
                $time_interval = $_POST['time_interval']; 
		$disciplineid = $_POST['select_discipline'];
                if (empty($disciplineid)) {
                   $type = "error";
                   $message = "No Record Found";
                   set_message($type, $message);
                   redirect('admin/ca/ca_disciplinelist');
                }

		$data['disciplinedetail'] = $this->discipline_model->discipline_namebyid($disciplineid);
             
		$data['check'] = "PE";
	
		$data1['all_pe_info'] = $this->ca_model->all_pe_info($disciplineid ,$id);
         
		$data1['all_info'] = $this->ca_model->pe_bulklist($disciplineid , $id);
	         
		$dataarray = array();
		foreach($data1['all_info'] as $value){
		    if($value['time_interval'] == $time_interval){
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
		}
		$data['users'] = $dataarray;
                $data['time_interval'] = $time_interval;
              //  echo '<pre>';print_r($data);echo '</pre>';die;
		$data['subview'] = $this->load->view('admin/ca/ca_list',$data, TRUE);
		$this->load->view('admin/_layout_main', $data);
    }

  public function add_ca($disciplineid=NULL,$time=NULL,$userid=NULL,$id = NULL) { 
     
		$data['title'] = "Add COMPETENCY ASSESSMENT";
		
	    if(!empty($userid)){
			$all_pe_rowinfo = $this->ca_model->all_pe_info($disciplineid,$userid);
			$data1['username'] = $all_pe_rowinfo->first_name.' '.$all_pe_rowinfo->last_name;
                        $data1['user_esign'] = $all_pe_rowinfo->signature;
			$userid = NULL;
			$data1['all_pe_info'] = $this->ca_model->all_pe_info($disciplineid,$userid);
		}else{
			$data1['all_pe_info'] = $this->ca_model->ca_info($disciplineid,$userid);
			$data1['username'] = "";
		}

             $employee_id = $this->session->userdata('employee_id');
             $data1['admin_info'] = $this->settings_model->select_admin_info($employee_id);

		
	    $data1['disciplineid'] = $disciplineid;	
	    $data1['time_interval'] = $time;	 
		if (!empty($id)) {
			$data['pe_bulk'] = $this->ca_model->pe_bulklist($disciplineid, $id);
			$data1['info'] = json_decode($data['pe_bulk']->meta_data);
			$data1['info']->pid = $data['pe_bulk']->id;
			 
            if (empty($data['pe_bulk'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/ca/add_ca');
            }
        }
		//echo '<pre>';print_r($data1);echo '</pre>';die;
        $data['subview'] = $this->load->view('admin/ca/ca', $data1, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }


	public function ca_form($id = NULL){
		
		$uid = $_POST['uid'];
                $time_interval = $_POST['time_interval'];
		$discipline_id = $_POST['discipline_id'];
		$date_of_employment = $_POST['date_of_employment'];
		$date_of_completion = $_POST['date_of_completion'];
		$meta_data =json_encode($_POST);
		
		$bulkdata = array( 
			'uid' =>$uid,
			'discipline_id'=>$discipline_id,
			'date_of_employment' => $date_of_employment,
			'date_of_completion' => $date_of_completion,
			'meta_data' =>$meta_data,
                        'time_interval' => $time_interval
		);
		   
		$this->discipline_model->_table_name = "ca_bulk";
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
  
	public function ca_delete($id){
	
		$this->discipline_model->_table_name = "ca_bulk"; // table name
		$this->discipline_model->_primary_key = "id"; // $id
		$this->discipline_model->delete($id);

		$this->discipline_model->delete($id);

		$type = "success";
		$message = "Employee Information Successfully Delete!";
		set_message($type, $message);
		redirect('admin/ca/ca_disciplinelist');
	}
	
	public function view_ca($disciplineid=NULL, $userid=NULL, $id = NULL) {
	
        $data['title'] = "COMPETENCY ASSESSMENT SKILLS CHECKLIST";
        if (!empty($id)) {
			$data['pe_bulk'] = $this->ca_model->pe_bulklist($disciplineid, $id);
			if (empty($data['pe_bulk'])) {
                $type = "error";
                $message = "No Record Found";
                set_message($type, $message);
                redirect('admin/ca/ca_list');
            }
        }
	$data['info'] = $this->ca_model->all_pe_info($disciplineid, $userid);
	$data['pe_bulk'] = $this->ca_model->pe_bulklist($disciplineid, $id);
	$data1['info'] = json_decode($data['pe_bulk']->meta_data);
	$data1['name'] = $data['info']->first_name.' '.$data['info']->last_name;
	$data1['disciplineid'] = $disciplineid;
        $data['subview'] = $this->load->view('admin/ca/view_ca', $data1, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }

}

?>