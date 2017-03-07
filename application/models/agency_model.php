<?php

/**
 * Description of employee_model
 *
 * @author NaYeM
 */
class Agency_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

   

	
	public function all_agency($id = NULL) {
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$array = array('flag !=' => 4);
		$this->db->where($array);
		
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
	
	
	public function all_agency_list($id = NULL) {
	
	        $this->db->select('*');
	        $this->db->from('tbl_user');
		$array = array('flag !=' => 4);
		$this->db->where($array);
		
		$query_result = $this->db->get();
		$result = $query_result->result_array();
		
		return $result;
		
	}
	
	
}