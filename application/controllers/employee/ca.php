<?php


class Ca extends Employee_Controller {

    public function __construct() {
	
		parent::__construct();
        $this->load->model('emp_model');
		$this->load->model('discipline_model');
        $this->load->model('global_model');
        $this->load->model('mailbox_model');
        $this->load->helper('ckeditor');
        $this->data['ckeditor'] = array(
            'id' => 'ck_editor',
            'path' => 'asset/js/ckeditor',
            'config' => array(
                'toolbar' => "Full",
                'width' => "100%",
                'height' => "350px"
            )
        );
    }
 

	public function ca_form($id = NULL){

		
		$id = $id;
		
		$userid = $this->session->userdata('employee_id');
		
		$discipline_id = $_POST['discipline_id'];
		$date_of_employment = $_POST['date_of_employment'];
		$date_of_completion = $_POST['date_of_completion'];
		$meta_data =json_encode($_POST);
		
		$bulkdata = array( 
			'uid' =>$userid,
			'discipline_id'=>$discipline_id,
			'date_of_employment' => $date_of_employment,
			'date_of_completion' => $date_of_completion,
			'meta_data' =>$meta_data
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

}

?>