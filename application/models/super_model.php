<?php

class Super_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function select_agency() {
		
		echo "select_agency";
	
        $this->db->select('*');
        $this->db->from('tbl_user');
        // $this->db->limit('3');
        $this->db->where('flag', 0);
        // $this->db->order_by("created_date", "DESC");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
	
	

}
