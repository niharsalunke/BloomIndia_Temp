<?php

class Admin_model extends CI_Model {
    
    function get_event_by_id($id)
    {
        $query = $this->db->select('*')->from('events')->where('id', $id)->get()->row();
        return $query;
    }

    function get_offer_by_id($id)
    {
        $query = $this->db->select('*')->from('offers')->where('id', $id)->get()->row();
        return $query;
    }    
    

    function search_donor($search_data)
    {
        extract($search_data);
        $query =$this->db->query("select id,firstname as fname,email,phone_number, sqrt(pow(home_address_latitude - ".$Lat.",2) + pow(home_address_longitude - ".$Lon.",2))*111 as distance from bloom_pledge where bloodgroup='".$bloodgroup."' AND rh_factor='".$rh_factor."' having distance < '".$distance."' ORDER BY `distance` ASC LIMIT 10");
        if ($query->num_rows()>0) {
            return $query->result_array();
        } else {
            return 'no';
        }
    }
    function search_data_count()
    {
        $this->db->select('count(id) as search_data_count');
        $this->db->from('seeker_search_data');
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->row();
        } else {
            return 'no';
        }
    }
	 function blood_data_count()
    {
        $this->db->select('count(id) as blood_data_count');
        $this->db->from('events');
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->row();
        } else {
            return 'no';
        }
    }

	function delete_donorByID($id){
		$this->db->where('id',$id);
		$this->db->delete('bloom_pledge');
		return true;
	}

    function donors_count()
    {
        $this->db->select('count(id) as donors_count');
        $this->db->from('bloom_pledge');
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->row();
        } else {
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
    
    function admin_validate()
    {
        $email=$this->input->post('email_id');
        $pwd=md5($this->input->post('password'));
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where('email_id', $email);
        $this->db->where('password', $pwd);
        $this->db->where('authentication', 'S');
        $this->db->where('is_active', 1);
        $this->db->where('is_delete', 0);
        $query = $this->db->get();
        if($query->num_rows == 1)
        {
            foreach ($query->result() as $row)
            {
                $adminsession = array(
                    'admin_username'     => $row->display_name,
                    'admin_email'        => $row->email_id,
                    'admin_userid'	    => $row->user_id,
                    'pic'	            => $row->pic,
                    'auth'	            => $row->authentication,
                    'logged_in'          => TRUE,
                );
                $this->session->set_userdata($adminsession);
                
                $data = array(
                    'last_login' => $last_login,
                    'last_login_ip'=>$last_login_ip
                );
                $this->db->where('email_id',$row->email_id);
                $this->db->update('user_login',$data);
            }
            return "valid";
        }
        else
        {
            return "invalid";
        }
    }
    
    function get_donors_list()
    {
        $this->db->select('*');
        $this->db->from('bloom_pledge');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        if($query->num_rows > 0){
            return $query->result();
        }else{
            return 'false';
        }
    }
	 function get_search_list()
    {
        $this->db->select('*');
        $this->db->from('seeker_search_data');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        if($query->num_rows > 0){
            return $query->result();
        }else{
            return 'false';
        }
    }

	function addevent($addevent)
    {
        $result = $this->db->insert('events', $addevent);
        //print_r($result);exit;
        if ($result) {
            return $this->db->insert_id();
        } else {
            return 'no';
        }
    }
	function get_event_list()
    {
        $this->db->select('*');
        $this->db->from('events');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        if($query->num_rows > 0){
            return $query->result();
        }else{
            return 'false';
        }
    }
    
	function get_event_list_raw()
    {
        $this->db->select('*');
        $this->db->from('events');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        return $query;
    }
	function delete_eventByID($id){
		$this->db->where('id',$id);
		$this->db->delete('events');
		return true;
	}
	function addoffer($addoffer)
    {
        $result = $this->db->insert('offers', $addoffer);
        //print_r($result);exit;
        if ($result) {
            return $this->db->insert_id();
        } else {
            return 'no';
        }
    }
	function get_offer_list()
    {
        $this->db->select('*');
        $this->db->from('offers');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        if($query->num_rows > 0){
            return $query->result();
        }else{
            return 'false';
        }
    }
    function get_offer_list_raw()
    {
        $this->db->select('*');
        $this->db->from('offers');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        return $query;
    }
	function delete_offerByID($id){
		$this->db->where('id',$id);
		$this->db->delete('offers');
		return true;
	}

	function change_cp($newpassword,$user_id)
	{
		$this->db->set('password',md5($newpassword));
		$this->db->where('user_id',$user_id);
		$this->db->update('user_login');
	}
	function cp_check($cp,$user_id)
	{
		$this->db->select('password');
		$this->db->from('user_login');
		$this->db->where('password',md5($cp));
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		if($query->num_rows > 0){
			return 'yes';
		}else{
			return 'no';
		}
	}
	
	 function addpartner($addpartner)
    {
        $result = $this->db->insert('partner', $addpartner);
        if ($result) {
            return $this->db->insert_id();
        } else {
            return 'no';
        }
    }
    
    function get_partner_list()
    {
        $this->db->select('*');
        $this->db->from('partner');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        if($query->num_rows > 0){
            return $query->result();
        }else{
            return 'false';
        }
    }

    function delete_partnerByID($id){
		$this->db->where('id',$id);
		$this->db->delete('partner');
		return true;
    }
    
        function get_partner_list_raw()
    {
        $this->db->select('*');
        $this->db->from('partner');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        return $query;
    }
    
    function update_partner_status($id)
    {
        $query = $this->db->select('*')->from('partner')->where('id', $id)->get()->row();
        
        if($query->status=='Enabled')
        {
            $this->db->select('*')->from('partner')->set('status','Disabled')->where('id', $id);
            $data=$this->db->update('partner');
        } 
        else if($query->status=='Disabled')
        {
            $this->db->select('*')->from('partner')->set('status','Enabled')->where('id', $id);
            $data=$this->db->update('partner');
        }
        return $query;
    }

    function update_gallery()
    {
        $sql = $this->db->select('*')->from('gallery')->order_by('id','desc')->get()->result_array();
        $images = array_chunk($sql,3);
        return $images;
    }

    function get_gallery()
    {
        $query = $this->db->select('*')->from('gallery')->order_by('id','desc')->limit(1)->get()->row();
       return $query;           
    }

    public function insert($data = array()){ 
        $insert = $this->db->insert_batch('gallery',$data); 
        return $insert?true:false; 
    } 

    function get_gallery_list()
    {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        if($query->num_rows > 0){
            return $query->result();
        }else{
            return 'false';
        }
    }
    function delete_galleryByID($id){
		$this->db->where('id',$id);
		$this->db->delete('gallery');
		return true;
    }    

	 function addtestimonial($addtestimonial)
    {
        $result = $this->db->insert('testimonial', $addtestimonial);
        if ($result) {
            return $this->db->insert_id();
        } else {
            return 'no';
        }
    }
    
    function get_testimonial_list()
    {
        $this->db->select('*');
        $this->db->from('testimonial');
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        if($query->num_rows > 0){
            return $query->result();
        }else{
            return 'false';
        }
    }

    function delete_testimonialByID($id){
		$this->db->where('id',$id);
		$this->db->delete('testimonial');
		return true;
    }
    function update_testimonial_status($id)
    {
        $query = $this->db->select('*')->from('testimonial')->where('id', $id)->get()->row();
        
        if($query->status=='Enabled')
        {
            $this->db->select('*')->from('testimonial')->set('status','Disabled')->where('id', $id);
            $data=$this->db->update('testimonial');
        } 
        else if($query->status=='Disabled')
        {
            $this->db->select('*')->from('testimonial')->set('status','Enabled')->where('id', $id);
            $data=$this->db->update('testimonial');
        }
        return $query;
    }    
    
    function get_testimonial(){
        $query = $this->db->query("SELECT * FROM testimonial ORDER BY id DESC");
        return $query->result_array();
    }
    function get_events(){
        $query = $this->db->query("SELECT * FROM events ORDER BY id DESC");
        return $query->result_array();
    }
}

