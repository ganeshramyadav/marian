<?php
session_start();

/**
 * Description of Admin_Controller
 *
 * @author pc mart ltd
 */
class Admin_Controller extends MY_Controller
{
    function __construct(){
        
        parent::__construct();
        $this->load->model('global_model');
        $this->load->model('admin_model');


        $type = $this->session->userdata('user_type');
	$flag = $this->session->userdata('user_flag');
		


        if ($type == 1) {
			
		if($flag == 4){
			redirect('super/dashboard');
			
		}else{ 
			$this->admin_model->_table_name = "tbl_menu"; //table name
			$this->admin_model->_order_by = "menu_id";
			
			$_SESSION["user_roll"] = $this->admin_model->get();
		}

        } else { 
			
			// echo "Admin_Controller else super/dashboard"; die;
            $employee_login_id = $this->session->userdata('employee_login_id');
            $_SESSION["user_roll"] = $this->global_model->select_user_roll($employee_login_id);
        }


        // Login check
		$user_flag = $this->session->userdata('user_flag');
		if($user_flag == 4){
			redirect('admin/dashboard');
		}
		
        // if ($user_type != 1) {
		if ($user_flag != 1) {

            $exception_uris = array(
                'admin/user',
                'admin/user/user_list'
            );
            if (in_array(uri_string(), $exception_uris) == TRUE) {
                // redirect('admin/dashboard');
				redirect('super/dashboard');
            }
        }
    }
}