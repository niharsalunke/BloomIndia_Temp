<?php

class Api_model extends CI_Model {


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
	
	
	
	function search_donor($search_donor)
	{
	    extract($search_donor);
		//print_r($bloodgroup);exit;
		$query =$this->db->query("select id, '' as location_type, firstname as fname,email,phone_number, sqrt(pow(home_address_latitude - ".$latitude.",2) + pow(home_address_longitude - ".$longitude.",2))*111 as distance from bloom_pledge where bloodgroup='".$bloodgroup."' AND rh_factor='".$rh_factor."' having distance < '".$distance."' ORDER BY `distance` ASC LIMIT 50");
		if ($query->num_rows()>0) {
			return $query->result_array();
		} else {
			return 'no';
		}
	}
	
	function search_donor_w($search_donor)
	{
	    extract($search_donor);
		//print_r($bloodgroup);exit;
		$query =$this->db->query("select id, 'work' as location_type, firstname as fname,email,phone_number, sqrt(pow(work_address_latitude - ".$latitude.",2) + pow(work_address_longitude - ".$longitude.",2))*111 as distance from bloom_pledge where bloodgroup='".$bloodgroup."' AND rh_factor='".$rh_factor."' having distance < '".$distance."' ORDER BY `distance` ASC LIMIT 50");
		if ($query->num_rows()>0) {
			return $query->result_array();
		} else {
			return 'no';
		}
	}

	function seeker_search_data($seeker_search_data)
	{
		$result = $this->db->insert('seeker_search_data', $seeker_search_data);
		//print_r($result);exit;
		if ($result) {
			return $this->db->insert_id();
		} else {
			return 'no';
		}
	}

	function info($id)
	{
		$query = $this->db->query("SELECT * FROM bloom_pledge WHERE id='".$id."'");
		return $query->result_array();
	}
	

}
?>