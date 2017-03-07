<?php

/**
 * Description of employee_model
 *
 * @author NaYeM
 */
class Acst_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

   

    public function all_acst_info($id = NULL) {
		$this->db->select('*');

		$this->db->from('hr_users');
		$this->db->where('hr_users.discipline_id', 15);
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
	  // echo "<pre>";print_r($result);echo "</pre>";
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
			// echo "<pre>";print_r($result);echo "</pre>";
            if (!empty($service_country)) {
                $result->service_country1 = $service_country->countryName;
            }
        }
	   
	   
      
     // echo "<pre>";print_r($result);echo "</pre>";die;
        return $result;
    }

    public function all_location($id = NULL) {
        $this->db->select('*');
        $this->db->where('location_5.location_4', $id);
        $this->db->from('location_5');
        $query_result = $this->db->get();
        $result = $query_result->result_array();
        return $result;
    }	

}