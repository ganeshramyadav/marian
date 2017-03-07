<?php

/**
 * Description of employee_model
 *
 * @author NaYeM
 */
class acpta_Model extends MY_Model {

    public $_table_name;
    public $_order_by;
    public $_primary_key;

   

    public function all_acpta_info($id = NULL) {
        $this->db->select('*');
        
        $this->db->from('hr_users');
		$this->db->where('hr_users.discipline_id', 19);
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
                $result->nationality = $nationality->countryName;
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
                $result->service_country = $service_country->countryName;
            }
        }
	   
	   
      
     // echo "<pre>";print_r($result);echo "</pre>";die;
        return $result;
    }

  

}