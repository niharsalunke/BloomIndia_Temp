<?php

class Public_model extends CI_Model {
    function ajaxget($data){
         $this->db->where("city",$data["city"])->or_where("district",$data["city"]);
        return $this->db->get('location_table');
    }
    
    




    function getEmailbyId($id)
        {
           
          
          
          
          
          $query =$this->db->query("select email from bloom_pledge where id='".$id."' ");
        if ($query->num_rows()>0) {
            return $query->result_array();
        } else {
            return 'no';
        }
        
        
        }
    function getMobilenobyId($id)
    {
        $query=$this->db->query("select phone_number from bloom_pledge where id='".$id."' ");
        if ($query->num_rows()>0) {
            return $query->result_array();
        } else {
            return '00000';
        }
        
        
    }
    
    function search_donor($search_data)
    {
        extract($search_data);
			
		//echo $distance;exit;
        $query =$this->db->query("select id,home_address,firstname as fname,lastname as lname,email,phone_number,home_address_latitude,home_address_longitude, sqrt(pow(home_address_latitude - ".$Lat.",2) + pow(home_address_longitude - ".$Lon.",2))*111 as distance from bloom_pledge where bloodgroup='".$bloodgroup."' AND rh_factor='".$rh_factor."' having distance < '".$distance."' ORDER BY `distance` ASC LIMIT 50");
        if ($query->num_rows()>0) {
            return $query->result_array();
        } else {
            return 'no';
        }
    }
	function search_donor_w($search_data_w)
    {
        extract($search_data_w);
			
		//echo $distance;exit;
        $query =$this->db->query("select id,work_address,firstname as fname,lastname as lname,email,phone_number,work_address_latitude,work_address_longitude, sqrt(pow(work_address_latitude - ".$Lat_w.",2) + pow(work_address_longitude - ".$Lon_w.",2))*111 as distance from bloom_pledge where bloodgroup='".$bloodgroup."' AND rh_factor='".$rh_factor."' having distance < '".$distance."' ORDER BY `distance` ASC LIMIT 50");
        if ($query->num_rows()>0) {
            return $query->result_array();
        } else {
            return 'no';
        }
    }
    function insert_search_result($search_result)
    {
        $this->db->insert('seeker_search_data', $search_result);
        if($this->db->affected_rows()>0){
            return $this->db->insert_id();
        }else{
            return 'no';
        }
    }
    function registration($register)
    {
        $result = $this->db->insert('bloom_pledge', $register);
        //print_r($result);exit;
        if ($result) {
            return $this->db->insert_id();
        } else {
            return 'no';
        }
    }
    function registrationInLoc($toLoca){
          $result = $this->db->insert('location_table', $toLoca);
        //print_r($result);exit;
        if ($result) {
            return $this->db->insert_id();
        } else {
            return 'no';
        }
    }
    
    function getUserById($id=''){
        $this->db->where('id',$id);
        return $this->db->get('bloom_pledge')->result_array();
    }
    
	function getUserByEmail($email=''){
        $this->db->where('email',$email);
        return $this->db->get('bloom_pledge')->result_array()[0];
    }

    function checkUserByEmail($email=''){
        $this->db->where('email',$email);
        return $this->db->get('bloom_pledge');
    }
    
    
    function updateData($register){
        $this->db->where('email',$register['email']);
        return $this->db->update('bloom_pledge', $register);
       if ($this->db->affected_rows() > 0)
        {
          return TRUE;
        }
        else
        {
          return FALSE;
        }
    }
    
    function insertData($register){
        $this->db->where('email',$register['email']);
        $result = $this->db->insert('bloom_pledge', $register);
        //print_r($result);exit;
        if ($result) {
            return $this->db->insert_id();
        } else {
            return 'no';
        }
    }
}

