<?php
session_start();

/**
 * Description of Super_Controller
 *
 * @author pc mart ltd
 */

class Super_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
		
		$this->load->model('global_model');
		$this->load->model('super_model');
        // $this->load->model('admin_model');

        $user_type = $this->session->userdata('user_type');
		$user_flag = $this->session->userdata('user_flag');
		
		// echo "<pre>"; print_r($user_type); echo "</pre>";
		// echo "<pre>"; print_r($user_type); echo "</pre>";
		// echo "<pre>"; print_r($this->session->userdata); echo "</pre>";
		

    }

}