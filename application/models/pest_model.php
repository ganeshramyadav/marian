<?php

/**
 * Description of employee_model
 *
 * @author NaYeM
 */
class Pest_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

   
	public function all_bulk($id = NULL) {
		
		$this->db->select('*');
        $this->db->from('hr_rn_bulk');
		
		if (!empty($id)) {
			$this->db->where('hr_rn_bulk.uid', $id);
			$query_result = $this->db->get();
			$result = $query_result->row();
		}
		  return $result;
	}
	
	
    public function all_pest_info($id = NULL) {
	
		$this->db->select('*');
		$this->db->from('hr_users');
		$this->db->where('hr_users.discipline_id', 16);
		$this->db->join('hr_userdetail', 'hr_userdetail.uid = hr_users.uid');
	    if (!empty($id)) {
            $this->db->where('hr_users.uid', $id);
            $query_result = $this->db->get();
            $result = $query_result->row();
        } else {
             $query_result = $this->db->get();
         // $result = $query_result->row();
          $result = $query_result->result_array();
		  
		  //echo "<pre>";print_r($result);echo "</pre>";die;
 
        }
	   
	     if (!empty($id)) {
            $this->db->select('hr_users.nationality', FALSE);
            $this->db->select('countries.countryName', FALSE);
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
            $this->db->from('hr_userdetail');
            $this->db->join('countries', 'countries.idCountry  =  hr_userdetail.service_country ', 'left');
            $query_service_country= $this->db->get();
		   
            $service_country = $query_service_country->row();
			// echo "<pre>";print_r($service_country);echo "</pre>";die;
            if (!empty($service_country)) {
                $result->service_country1 = $service_country->countryName;
            }
        }
	   
	   
      
     // echo "<pre>";print_r($result);echo "</pre>";die;
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