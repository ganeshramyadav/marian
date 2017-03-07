<?php

/**
 * Description of officestaff_model
 *
 * @author NaYeM
 */
class Os_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

     public function all_officestaff_list($id = NULL,$officestafftype = NULL) {
        $this->db->select('*');
        $this->db->where('adminid', $id);
        $this->db->where('officestaff_type',$officestafftype);
        $this->db->from('hr_officestaff');
        $query_result = $this->db->get();
        $result = $query_result->result_array();
	    	   
        return $result;
		
    }


}