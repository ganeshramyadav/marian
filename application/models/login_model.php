<?php

class Login_Model extends MY_Model {

    protected $_table_name;
    protected $_order_by;
    public $rules = array(
        'user_name' => array(
            'field' => 'user_name',
            'label' => 'User Name',
            'rules' => 'trim|required|xss_clean'
        ),
        'password' => array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required'
        )
    );

    public function login() {
        //check user type

		// echo "<pre>"; print_r($this->input->post); echo "</pre>";
		
		
		
        $this->_table_name = 'tbl_user';
        $this->_order_by = 'user_id';

        $admin = $this->get_by(array(
            'user_name' => $this->input->post('user_name'),
            'password' => $this->hash($this->input->post('password')),
                ), TRUE);
				
			
		
        if ($admin) {
			if($admin->flag == 1){
				$data = array(
					'user_name' => $admin->user_name,
					'first_name' => $admin->f_name,
					'last_name' => $admin->l_name,
					'employee_id' => $admin->user_id,
					'employee_login_id' => $admin->user_id,
									'employee_email' => $admin->email,
					'loggedin' => TRUE,
					'user_type' => 1,
					'user_flag' => $admin->flag,
					'url' => 'admin/dashboard'
				);
				$this->session->set_userdata($data);
			}else if($admin->flag == 4){  
				$data = array(
					'user_name' => $admin->user_name,
					'first_name' => $admin->f_name,
					'last_name' => $admin->l_name,
					'employee_id' => $admin->user_id,
					'employee_login_id' => $admin->user_id,
									'employee_email' => $admin->email,
					'loggedin' => TRUE,
					'user_type' => 1,
					'user_flag' => $admin->flag,
					'url' => 'super/dashboard'
				);
				$this->session->set_userdata($data);
			}
        } else {
        
	    $this->_table_name = 'hr_users';
            $this->_order_by = 'uid';
            $employee = $this->get_by(array(
                'user_name' => $this->input->post('user_name'),
                'password' => $this->hash($this->input->post('password')),
                // 'activate' => 1
				'status' => 1
                    ), TRUE);
					
	   if (count($employee)) {
                // Log in user
           $employee_id = $employee->uid;
	   $this->_table_name = "hr_users"; //table name
				
	   $data = array(
		    'name' => $employee->first_name . ' ' . $employee->last_name,
		    'employee_id' => $employee->uid,
		    'user_name' => $employee->user_name,
		    'employee_login_id' => $employee->uid,
		    'discipline_id' => $employee->discipline_id,
		    'loggedin' => TRUE,
		    'user_type' => 2,
		    'url' => 'employee/dashboard',
		);
	   $this->session->set_userdata($data);
           }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
    }

    public function loggedin() {
        return (bool) $this->session->userdata('loggedin');
    }

    public function hash($string) {
        return hash('sha512', $string . config_item('encryption_key'));
    }

}
