<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of emp_model
 *
 * @author nayem
 */
class Emps_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;
	
	
	public function all_discipline($id = NULL) {
	
		$this->db->select('*');
        	$this->db->from('hr_discipline');
		
	    if (!empty($id)) {
	            $this->db->where('tbl_user.user_id', $id);
	            $query_result = $this->db->get();
	            $result = $query_result->row();
	        } else {
				$query_result = $this->db->get();
	            $result = $query_result->result_array();
	        }
		return $result;
	}
	
    public function all_emplyee_info($disciplineid = NULL, $agencyid = NULL) {
	
		$this->db->select('*');
        $this->db->from('hr_users');
		
		if (!empty($agencyid)) { 
            
			$this->db->where('hr_users.users_id', $agencyid);
			
			if(!empty($disciplineid)){ 
			
				$this->db->where('hr_users.discipline_id', $disciplineid);
				$query_result = $this->db->get();
				$result = $query_result->result_array();
			}else{
				$query_result = $this->db->get();
				$result = $query_result->result_array();
			}
        }else{
		
			$query_result = $this->db->get();
			$result = $query_result->result_array();
		
		}
		
		return $result;
    }
	
/*
	public function all_emplyee_info($disciplineid = NULL, $agencyid = NULL) {
	
		$this->db->select('*');
        	$this->db->from('hr_users');
        	//$this->db->where('hr_users.users_id', $agencyid);
        	//$this->db->where('hr_users.discipline_id', $disciplineid);
        	
        	echo "$disciplineid"."  "."$agencyid";
        	
		
		if (!empty($agencyid)) {
			echo "agencyid is available.";
            
			$this->db->where('hr_users.users_id', $agencyid);
			
			if(!empty($disciplineid)){ 
			
				$this->db->where('hr_users.discipline_id', $disciplineid);
				$query_result = $this->db->get();
				$result = $query_result->result_array();
			}else{
				$query_result = $this->db->get();
				$result = $query_result->result_array();
			}
        	}else{
		
			$query_result = $this->db->get();
			$result = $query_result->result_array();
		
		}
		
		// $query_result = $this->db->get();
		// $result = $query_result->result_array();
		
		return $result;
	
    }
*/
}
