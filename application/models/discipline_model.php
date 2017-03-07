<?php

/**
 * Description of employee_model
 *
 * @author NaYeM
 */
class Discipline_Model extends MY_Model {

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

   public function all_info_form($id = NULL){
       $this->db->select('*');
       $this->db->from('hr_employee_form_record');
       $this->db->where('hr_employee_form_record.uid',$id);
       $query_result = $this->db->get();
       $result = $query_result->row();
       return $result;
   }
 
    public function all_info($id = NULL) {
        $this->db->select('*');
        //$this->db->where('hr_users.discipline_id', 2);
        $this->db->from('hr_users');
        $this->db->join('hr_discipline','hr_users.discipline_id = hr_discipline.discipline_id');
       // $this->db->join('hr_userdetail', 'hr_userdetail.uid = hr_users.uid');
       // $this->db->join('hr_employee_document','hr_employee_document.uid = hr_users.uid');
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
            $this->db->join('countries', 'countries.idCountry  =  hr_users.nationality');
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
				//$result->service_country;
				
            }
        }

     	
        return $result;
		
    }
	

   public function all_rn_hospicelist($id = NULL) {
        $this->db->select('*');
        $this->db->where('hr_users.discipline_id', 21);
        $this->db->from('hr_users');
        $this->db->join('hr_userdetail', 'hr_userdetail.uid = hr_users.uid');
     
	   
	    if (!empty($id)) {
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
            $this->db->from('hr_users');
            $this->db->join('countries', 'countries.idCountry  =  hr_users.nationality');
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
			
            if (!empty($service_country)) {
                $result->service_country1 = $service_country->countryName;
			
				
            }
        }

     	     
        return $result;
		
    }
	
	
  public function all_rn_list($id = NULL,$disciplineid) {
        $this->db->select('*');
        // $this->db->where('hr_users.discipline_id', $disciplineid);
        $user_id = $this->session->userdata('employee_id');
        $this->db->where(array('hr_users.discipline_id' => $disciplineid, 'hr_users.users_id' => $user_id));
        $this->db->from('hr_users');
        $this->db->order_by("last_name", "asc");
        $this->db->join('hr_userdetail', 'hr_userdetail.uid = hr_users.uid');
        $this->db->join('hr_discipline','hr_users.discipline_id = hr_discipline.discipline_id');
     
	   
	if (!empty($id)) {
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
            $this->db->from('hr_users');
            $this->db->join('countries', 'countries.idCountry  =  hr_users.nationality');
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
			
            if (!empty($service_country)) {
                $result->service_country1 = $service_country->countryName;
			
				
            }
        }

     	     
        return $result;
		
    }
	
    public function all_location($id = NULL) {
        $this->db->select('*');
        $this->db->from('location_5');
        //$this->db->join('location_5', 'location_5.location_4 = location_4.id');
        	   
       if (!empty($id)) {
            $this->db->where('location_5.location_4', $id);
            $this->db->order_by("name", "asc");
            $query_result = $this->db->get();
            $result = $query_result->result_array();
			
        } else {
            $this->db->order_by("name", "asc");
            $query_result = $this->db->get();
            $result = $query_result->result_array();
        }  

	   
        return $result;
		
    }

    public function location_namebyid($id = NULL,$location = NULL) {
        $this->db->select('*');
     if($location == 'country'){
        $this->db->from('location_1');
        $this->db->where('location_1.id', $id);
     }
     if($location == 'state'){
        $this->db->from('location_3');
        $this->db->where('location_3.id', $id);
     }
     if($location == 'county'){
        $this->db->from('location_4');
        $this->db->where('location_4.id', $id);
     }
     if($location == 'city'){
        $this->db->from('location_5');
         $this->db->where('location_5.id', $id);
     }
       
       if (!empty($id)) {
            
            $this->db->order_by("name", "asc");
            $query_result = $this->db->get();
            $result = $query_result->result_array();
			
        } else {
            $this->db->order_by("name", "asc");
            $query_result = $this->db->get();
            $result = $query_result->result_array();
        }  

	   
        return $result;
		
    }


    public function service_areamap($id = NULL) {
        $this->db->select('*');
        $this->db->from('location_5');
        //$this->db->join('location_5', 'location_5.location_4 = location_4.id');
        	   
       if (!empty($id)) {
            $this->db->where('location_5.id', $id);
            $query_result = $this->db->get();
            $result = $query_result->result_array();
			
        } else {
            $query_result = $this->db->get();
            $result = $query_result->result_array();
        }  

	   
        return $result;
		
    }

    public function discipline_namebyid($id = NULL) {
        $this->db->select('*');
        $this->db->from('hr_discipline');
        $this->db->where('hr_discipline.discipline_id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
	   
        return $result;
		
    }

	public function discipline_idbyname($name = NULL) {
        $this->db->select('*');
        $this->db->from('hr_discipline');
        $this->db->where('hr_discipline.discipline', $name);
        $query_result = $this->db->get();
        $result = $query_result->row();
	   
        return $result;
		
    }

      public function address_namebyid($id = NULL,$name= NULL) {
        $this->db->select('*');
        $this->db->from($name);
        $this->db->where($name.'.id', $id);
        $query_result = $this->db->get();
        $result = $query_result->row();
	return $result;
		
    }

     public function check_username($username =NULL){
        $this->db->select('*');
        $this->db->from('hr_users');
        $this->db->where('hr_users.user_name', $username);
        $query_result = $this->db->get();
        $result = $query_result->row();
	return $result;

    }
	
}