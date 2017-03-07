<?php

/**
 * Description of employee_model
 *
 * @author NaYeM
 */
class Pe_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;


    public function all_pe_info($disciplineid = NULL,$id=NULL) {
		
	
		$this->db->select('*');

		$this->db->from('hr_users');
		//$this->db->where('hr_users.discipline_id',$disciplineid);
		//$this->db->join('hr_userdetail', 'hr_userdetail.uid = hr_users.uid');
		
		//$this->db->join('hr_users', 'hr_users.uid = pe_bulk.uid');
		$user_id = $this->session->userdata('employee_id');
        	$this->db->where(array('hr_users.discipline_id' => $disciplineid, 'hr_users.users_id' => $user_id));
        	


	   
	    if (!empty($id)) {
			$this->db->join('hr_userdetail', 'hr_userdetail.uid = hr_users.uid');
			$this->db->join('hr_employee_document','hr_employee_document.uid = hr_users.uid');
            $this->db->where('hr_users.uid', $id);
            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
             
			 $query_result = $this->db->get();
             $result = $query_result->result_array();
        }
	   
	     if (!empty($id)) {
            $this->db->select('hr_users.nationality', FALSE);
            $this->db->select('countries.countryName', FALSE);
            $this->db->where('hr_users.uid', $id);
            $this->db->from('hr_users');
            $this->db->join('countries', 'countries.idCountry  =  hr_users.nationality ', 'left');
            $query_nationality = $this->db->get();
            $nationality = $query_nationality->row();
            if (!empty($nationality)) {
                $result->nationality1 = $nationality->countryName;
            }
        }
	   
	   if (!empty($id)) {
            $this->db->select('hr_userdetail.service_country', FALSE);
            $this->db->select('countries.countryName', FALSE);
            $this->db->where('hr_userdetail.uid', $id);
            $this->db->from('hr_userdetail');
            $this->db->join('countries', 'countries.idCountry  =  hr_userdetail.service_country ', 'left');
            $query_service_country= $this->db->get();
		   
            $service_country = $query_service_country->row();
			
            if (!empty($service_country)) {
                $result->service_country1 = $service_country->countryName;
            }
        }

        return $result;
    }
	
	
	
	

	public function pe_bulklist($disciplineid = NULL,$id=NULL){
	  
		$this->db->select('*');
		
		$this->db->from('pe_bulk');
		//$this->db->where('pe_bulk.discipline_id', $disciplineid );
		$this->db->join('hr_users', 'hr_users.uid = pe_bulk.uid');
		$user_id = $this->session->userdata('employee_id');
        	$this->db->where(array('hr_users.discipline_id' => $disciplineid, 'hr_users.users_id' => $user_id));
		
		 if (!empty($id)) {
			$this->db->where('pe_bulk.id', $id);
			$query_result = $this->db->get();
			$result = $query_result->row();
		} else {
			$query_result = $this->db->get();
			$result = $query_result->result_array();
		}
	   return $result;
	}
	
	
	

	
    public function all_location($id = NULL) {
        $this->db->select('*');
        $this->db->from('location_5');
        //$this->db->join('location_5', 'location_5.location_4 = location_4.id');
        	   
       if (!empty($id)) {
            $this->db->where('location_5.location_4', $id);
            $query_result = $this->db->get();
            $result = $query_result->result_array();
			
        } else {
            $query_result = $this->db->get();
            $result = $query_result->result_array();
        }  
        return $result;
    }		
  

}