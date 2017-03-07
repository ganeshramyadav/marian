<?php
class Pemsw extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('employee_model');
    }


    public function add_msw($id = NULL) { 
        


         $this->employee_model->_table_name = "countries"; //table name
        $this->employee_model->_order_by = "countryName";
        $data['all_country'] = $this->employee_model->get();

        //page load
        $data['subview'] = $this->load->view('admin/msw/pemsw', $data, TRUE);
        $this->load->view('admin/_layout_main', $data);
    }
    


}

?>