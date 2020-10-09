<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_admin extends CI_Controller {


function general()
	{
		$data['layout'] 		= 'admin/layouts/layout';
		$data['header'] 		= 'admin/layouts/header';
		$data['sidebar'] 		= 'admin/layouts/sidebar';
		$data['footer'] 		= 'admin/layouts/footer';
		
		return $data;
	}
	function admin()
	{
	    
	    $data = $this->general();
	    if($this->input->post('submit')){
	        $msg = $this->admin_model->admin_validate();
	        if($msg=='valid')
	        {
	            redirect('dashboard');
	        } else {
	           echo $this->session->set_flashdata('message', 'Invalid login credentials');
	            redirect('admin');
	        }
	    }
	    $data['pageName']    = "admin_login";
	    $data['pageTitle']   ='ADMIN-LOGIN';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'admin/pages/login';
	    $this->load->view('admin/admin_welcome',$data);
	}
	function delete_donor($id){
		//$delete_donor=$this->admin_model->delete_donor($id);
		
		$update_Records = $this->admin_model->delete_donorByID($id);
		echo '1';exit;
	}
	function change_password()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');

	    }
		//echo $this->session->userdata('admin_userid');exit;

	    $data = $this->general();
	    if($this->input->post('submit')){
			//echo 'ddd';exit;
	        $cp=$this->input->post('c_password');
			
			$user_id = $this->session->userdata('admin_userid');
			
			$cp_check = $this->admin_model->cp_check($cp,$user_id);
		//	echo $cp_check;exit;

			if($cp_check=='no'){
				 $this->session->set_flashdata('cp', 'please enter correct password');
				  redirect('change-password');
			}else{
				$newpassword=$this->input->post('newpassword');
				$change_cp = $this->admin_model->change_cp($newpassword,$user_id);
				//echo $change_cp;exit;
				$this->session->set_flashdata('cps', 'Successfully changed your password');
				 redirect('change-password');
			}
	    }
	    $data['pageName']    = "change_password";
	    $data['pageTitle']   ='ADMIN-Change Password';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'admin/pages/change_password';
	    $this->load->view('admin/admin_welcome',$data);
	}
	function dashboard()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
		$data['search_data_count'] = $this->admin_model->search_data_count();
		$data['donors_count'] = $this->admin_model->donors_count();
		$data['blood_data_count'] = $this->admin_model->blood_data_count();
		$data['gallery_count'] = count($this->admin_model->update_gallery());
		$data['pageName']    = "dashboard";
		$data['pageTitle']   ='ADMIN-BLOOM';
		$data['metaKeywords'] ='';
		$data['metaDescription'] ='';
		$data['content'] = 'admin/pages/dashboard';
		$this->load->view('admin/admin_welcome',$data);
		
	}
	
	function logout()
	{
	    $logout_session = array (
	        'admin_userid' => '',
	        'user_logged_in' => FALSE
	    );
	    //print_r($logout_session);exit;
	    $this->session->unset_userdata ($logout_session);
	    $this->session->sess_destroy ();
	    redirect('admin/','refresh');
	}
	
	function donor_list()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
	    $data['get_donors_list'] = $this->admin_model->get_donors_list();
	    $data['pageName']    = "donor_list";
	    $data['pageTitle']   ='ADMIN-BLOOM';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'admin/pages/donor_list';
	    $this->load->view('admin/admin_welcome',$data);
	    
	}

	function search_list()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
	    $data['get_search_list'] = $this->admin_model->get_search_list();
	    $data['pageName']    = "search_list";
	    $data['pageTitle']   ='ADMIN-BLOOM';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'admin/pages/search_list';
	    $this->load->view('admin/admin_welcome',$data);
	    
	}

	function add_bloodgroup()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
	    $data['pageName']    = "add_bloodgroup";
	    $data['pageTitle']   ='ADMIN-BLOOM';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'admin/pages/add_bloodgroup';
	    $this->load->view('admin/admin_welcome',$data);
	    
	}
	function manage_bloodgroup()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
	    $data['pageName']    = "manage_bloodgroup";
	    $data['pageTitle']   ='ADMIN-BLOOM';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'admin/pages/manage_bloodgroup';
	    $this->load->view('admin/admin_welcome',$data);
	    
	}
	
	function add_donor()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
	    if(sizeof($_POST)>0){
	        $firstname=$_POST['fname'];
	        $lastname=$_POST['lname'];
	        $phone_number=$_POST['mobileno'];
	        $email=$_POST['emailid'];
	        $res = explode("/", $_POST['dob']);
	        $dob = $res[0];
	        $gender=$_POST['gender'];
	        $bloodgroup=$_POST['bloodgroup'];
	        $rh_factor=$_POST['rhfactor'];
	        $home_address=$_POST['haddress'];
	        $work_address=$_POST['waddress'];
	        $Address = urlencode($home_address);
	        $request_url = "https://maps.googleapis.com/maps/api/geocode/xml?key=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c&address=".$Address."&sensor=true";
	        $xml = simplexml_load_file($request_url) or die("url not loading");
	        $status = $xml->status;
	        if ($status=="OK") {
	            $home_address_latitude = $xml->result->geometry->location->lat;
	            $home_address_longitude = $xml->result->geometry->location->lng;
	        }else{
	            $home_address_latitude = '';
				$home_address_longitude = '';

				for($i=1; $i<100; $i++){					
						//echo $i;
						$request_url = "https://maps.googleapis.com/maps/api/geocode/xml?key=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c&address=".$Address."&sensor=true";
						$xml = simplexml_load_file($request_url) or die("url not loading");
						$status = $xml->status;
							if ($status=="OK") {
								$home_address_latitude = $xml->result->geometry->location->lat;
								$home_address_longitude = $xml->result->geometry->location->lng;
								break;
							}
					}				
				}
			
			
	        $Address_W = urlencode($work_address);
	        $request_url_W = "https://maps.googleapis.com/maps/api/geocode/xml?key=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c&address=".$Address_W."&sensor=true";
	        $xml_w = simplexml_load_file($request_url_W) or die("url not loading");
	        $status = $xml_w->status;
	        if ($status=="OK") {
	            $work_address_latitude = $xml_w->result->geometry->location->lat;
	            $work_address_longitude = $xml_w->result->geometry->location->lng;
	        }else{
	           	for($i=1; $i<100; $i++){						
						$request_url_W = "https://maps.googleapis.com/maps/api/geocode/xml?key=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c&address=".$Address_W."&sensor=true";
						$xml_w = simplexml_load_file($request_url_W) or die("url not loading");
						$status = $xml_w->status;
						if ($status=="OK") {
							$work_address_latitude = $xml_w->result->geometry->location->lat;
							$work_address_longitude = $xml_w->result->geometry->location->lng;
							break;
						}						
					}
	        }
			//echo $work_address_latitude;exit;
	        
	        $when_u_donote=$_POST['condition2'];
	        $question=$_POST['condition1'];
	        $created_at = date('Y-m-d h:i:s');
	       
	        $register = array(
	            'gender'=>$gender,
	            'firstname'=>$firstname,
	            'lastname'=>$lastname,
	            'dob'=>$dob,
	            'bloodgroup'=>$bloodgroup,
	            'rh_factor'=>$rh_factor,
	            'phone_number'=>$phone_number,
	            'email'=>$email,
	            'when_u_donote'=>$when_u_donote,
	            'home_address'=>$home_address,
	            'home_address_latitude'=>$home_address_latitude,
	            'home_address_longitude'=>$home_address_longitude,
	            'work_address'=>$work_address,
	            'work_address_latitude'=>$work_address_latitude,
	            'work_address_longitude'=>$work_address_longitude,
	            'question'=>$question,
	            'created_at'=>$created_at
	        );
	        $insert = $this->public_model->registration($register);
	        if($insert=='no'){
	            $data['message'] ='Please retry some technical issue...!';
	            
	        }else{
	            $data['firstname']=$firstname;
	            $data['message'] ='success';
	        }
	    }else{
	        $data['message']='no';
	    }
	    $data['pageName']    = "add_donor";
	    $data['pageTitle']   ='Add-donor';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'admin/pages/add_donor';
	    $this->load->view('admin/admin_welcome',$data);
	    
	}

	function add_event()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
		$data = $this->general();

	    if(sizeof($_POST)>0){
	        $eventname=$_POST['eventname'];
	        $venue=$_POST['venue'];
	        $res = explode("/", $_POST['eventdate']);
	        $eventdate = $res[0];
	        $contactpersons=$_POST['contactpersons'];
			$created_at = date('Y-m-d h:i:s');	  
			$eventimg = $_FILES['eventimg']['name'];
			$eventdesc = $_POST['eventdesc']; 
	        $addevent = array(
	            'eventname'=>$eventname,
	            'venue'=>$venue,
	            'eventdate'=>$eventdate, 
	            'contactpersons'=>$contactpersons,
				'created_at'=>$created_at,
				'eventimg'=>$eventimg,
				'eventdesc'=>$eventdesc
	        );
	        $insert = $this->admin_model->addevent($addevent);
	        if($insert=='no'){
	            $data['message'] ='Please retry some technical issue...!';
	            
	        }else{
	            $data['eventname']=$eventname;
	            $data['message'] ='success';
	        }
	    }else{
	        $data['message']='no';
	    }
	    $data['pageName']    = "add_event";
	    $data['pageTitle']   ='Add-event';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
		$data['content'] = 'admin/pages/add_event';
		
		if(sizeof($_FILES)>0)
		{
			$target_dir = "assets/public/uploadevent/";
			$target_file = $target_dir . basename($_FILES["eventimg"]["name"]);
			move_uploaded_file($_FILES["eventimg"]["tmp_name"], $target_file);
		}

	    $this->load->view('admin/admin_welcome',$data);
	    
	}
	
	
	function event_list()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
	    $data['get_event_list'] = $this->admin_model->get_event_list();
	    $data['pageName']    = "event_list";
	    $data['pageTitle']   ='Event List';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'admin/pages/event_list';
	    $this->load->view('admin/admin_welcome',$data);
	    
	}
	
	function delete_event($id){
		//$delete_donor=$this->admin_model->delete_donor($id);
		
		$update_Records = $this->admin_model->delete_eventByID($id);
		echo '1';exit;
	}
	function add_offer()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
	    if(sizeof($_POST)>0){
			$companyname=$_POST['companyname'];
			$productname=$_POST['productname'];
			$startdate = $_POST['startdate'];      
			$enddate = $_POST['enddate'];      
			$created_at = date('Y-m-d h:i:s');
			$ratings = $_POST['ratings']; 	
			$offerimg = $_FILES['offerimg']['name'];  
			$srating = $_POST['srating'];
			$offerdesc = $_POST['offerdesc'];
	        $addoffer = array(
				'companyname'=>$companyname,
				'productname'=>$productname,
				'startdate'=>$startdate,
				'enddate'=>$enddate,
				'created_at'=>$created_at,
				'ratings'=>$ratings,
				'offerimg'=>$offerimg,
				'srating'=>$srating,
				'offerdesc'=>$offerdesc
	        );
	        $insert = $this->admin_model->addoffer($addoffer);
	        if($insert=='no'){
	            $data['message'] ='Please retry some technical issue...!';
	            
	        }else{
	            $data['offer']=$companyname;
	            $data['message'] ='success';
	        }
	    }else{
	        $data['message']='no';
	    }
	    $data['pageName']    = "add_offer";
	    $data['pageTitle']   ='Add-Offer';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
		$data['content'] = 'admin/pages/add_offer';
		
		if(sizeof($_FILES)>0)
		{
			$target_dir = "assets/public/uploadoffer/";
			$target_file = $target_dir . basename($_FILES["offerimg"]["name"]);
			move_uploaded_file($_FILES["offerimg"]["tmp_name"], $target_file);
		}

	    $this->load->view('admin/admin_welcome',$data);
	    
	}
	function offer_list()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
	    $data['get_offer_list'] = $this->admin_model->get_offer_list();
	    $data['pageName']    = "offer_list";
	    $data['pageTitle']   ='Offer List';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'admin/pages/offer_list';
	    $this->load->view('admin/admin_welcome',$data);
	    
	}
	function delete_offer($id){
		//$delete_donor=$this->admin_model->delete_donor($id);
		
		$update_Records = $this->admin_model->delete_offerByID($id);
		echo '1';exit;
	}
	function add_partner()
	{
		if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
	    if(sizeof($_POST)>0 & sizeof($_FILES)>0){
	        $name=$_POST['name'];
	        $address=$_POST['address'];
			$email=$_POST['email']; 
			$industry=$_POST['industry'];
	        $description=$_POST['description'];
			$logo=$_FILES['logo']['name']; 
			$created_at = date('Y-m-d h:i:s');
	        $addpartner = array(
	            'name'=>$name,
	            'address'=>$address,
				'email'=>$email,
				'industry'=>$industry,
	            'description'=>$description,
				'logo'=>$logo,
				'created_at'=>$created_at,
	        );
	        $insert = $this->admin_model->addpartner($addpartner);
	        if($insert=='no'){
	            $data['message'] ='Please retry some technical issue...!';
	            
	        }else{
	            $data['name']=$name;
	            $data['message'] ='success';
	        }
	    }else{
	        $data['message']='no';
	    }
	    $data['pageName']    = "add_partner";
		$data['pageTitle']   ='Add Partner';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
		$data['content'] = 'admin/pages/add_partner';
		
		
		if(sizeof($_FILES)>0)
		{
			$target_dir = "assets/public/uploadpartner/";
			$target_file = $target_dir . basename($_FILES["logo"]["name"]);
			move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);
		}

	    $this->load->view('admin/admin_welcome',$data);
	    
	}
	function partner_list()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
		$data['get_partner_list'] = $this->admin_model->get_partner_list();
	    $data['pageName']    = "partner_list";
	    $data['pageTitle']   ='Partner List';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'admin/pages/partner_list';
	    $this->load->view('admin/admin_welcome',$data);
	    
	}
	function delete_partner($id){		
		$update_Records = $this->admin_model->delete_partnerByID($id);
		echo '1';
		exit;
	}
	function partner_status($id){
		$this->admin_model->update_partner_status($id);
		echo '1';
		exit;
	}

    function add_gallery()
	{
		if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
		$data = $this->general();
		$data['pageName']    = "add_gallery";
	    $data['pageTitle']   ='Add-Gallery';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
		$data['content'] = 'admin/pages/add_gallery';
		
		$id=$this->uri->segment(3);
			$query = $this->db->select('*')->from('events')->where('id', $id)->get()->row();
			$eventname = $query->eventname;
			$venue = $query->venue;
	        $eventdate = $query->eventdate;
		$data['events'] = $query;

		if(sizeof($_POST)>0){
			$gallerydesc = $_POST['gallerydesc']; 
		}

		$errorUploadType = $statusMsg = ''; 

		// If file upload form submitted 
		if($this->input->post('fileSubmit')){ 
			
			$filesCount = count($_FILES['files']['name']); 
			if($filesCount == 3){
			
				// If files are selected to upload 
				if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){ 
					
					for($i = 0; $i < 3; $i++){ 
						$_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
						$_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
						$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
						$_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
						$_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
						
						// File upload configuration 
						$uploadPath = 'assets/public/eventgallery/'; 
						$config['upload_path'] = $uploadPath; 
						$config['allowed_types'] = 'jpg|jpeg|png|gif'; 
						//$config['max_size']    = '100'; 
						//$config['max_width'] = '1024'; 
						//$config['max_height'] = '768'; 
						
						// Load and initialize upload library 
						$this->load->library('upload', $config); 
						$this->upload->initialize($config); 
						
						// Upload file to server 
						if($this->upload->do_upload('file')){ 
							// Uploaded file data 
							$fileData = $this->upload->data(); 
							$uploadData[$i]['file_name'] = $fileData['file_name']; 
							$uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s"); 
							$uploadData[$i]['eventname'] = $eventname; 

							if($i==2) {	 
								$uploadData[$i]['gallerydesc'] = $gallerydesc; 						
								$uploadData[$i]['eventdate'] = $eventdate; 
								$uploadData[$i]['venue'] = $venue; 	
							}else{
								$uploadData[$i]['gallerydesc'] = NULL; 						
								$uploadData[$i]['eventdate'] = NULL; 
								$uploadData[$i]['venue'] = NULL; 	
							}					

						}else{  
							$errorUploadType .= $_FILES['file']['name'].' | ';  
						} 
					} 
					
					$errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
					if(!empty($uploadData)){ 
						// Insert files data into the database 
						$insert = $this->admin_model->insert($uploadData); 
						
						// Upload status message 
						$statusMsg = $insert?'Files uploaded successfully!'.$errorUploadType:'Some problem occurred, please try again.'; 
					}else{ 
						$statusMsg = "Sorry, there was an error uploading your file.".$errorUploadType; 
					} 
				}else{ 
					$statusMsg = 'Please select image files to upload.'; 
				} 
			}else{
				$statusMsg = 'Upload Exactly Three Files.';
			}
			
			$data['statusMsg'] = $statusMsg; 
		} 
		$this->load->view('admin/admin_welcome',$data);
    } 
 
	function gallery_list()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
		$data['get_gallery_list'] = $this->admin_model->get_gallery_list();

	    $data['pageName']    = "gallery_list";
	    $data['pageTitle']   ='Gallery List';
	    $data['metaKeywords'] ='';
		$data['metaDescription'] ='';
		
	    $data['content'] = 'admin/pages/gallery_list';
	    $this->load->view('admin/admin_welcome',$data);
	    
	}
	function delete_gallery($id){		
		$update_Records = $this->admin_model->delete_galleryByID($id);
		echo '1';
		exit;
	}
	
	function add_testimonial()
	{
		if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
	    
		if(!empty($_FILES['photo']['name'])){
		    $photo=$_FILES['photo']['name'];    
			$target_dir = "assets/public/uploadtestimonial/";
			$target_file = $target_dir . basename($_FILES["photo"]["name"]);
			move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
		}else{ 
		    $photo = 'username_logo.png';
		}
		
	    if(sizeof($_POST)>0){
	        $name=$_POST['name'];
	        $company=$_POST['company'];
			$designation=$_POST['designation']; 
			$city=$_POST['city'];
	        $testimonial=$_POST['testimonial'];
			
			$created_at = date('Y-m-d h:i:s');
	        $addtestimonial = array(
	            'name'=>$name,
	            'company'=>$company,
				'designation'=>$designation,
				'city'=>$city,
	            'testimonial'=>$testimonial,
				'photo'=>$photo,
				'created_at'=>$created_at,
	        );
	        $insert = $this->admin_model->addtestimonial($addtestimonial);
	        if($insert=='no'){
	            $data['message'] ='Please retry some technical issue...!';
	            
	        }else{
	            $data['name']=$name;
	            $data['message'] ='success';
	        }
	    }else{
	        $data['message']='no';
	    }
	    $data['pageName']    = "add_testimonial";
		$data['pageTitle']   ='Add Testimonial';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
		$data['content'] = 'admin/pages/add_testimonial';
	

	    $this->load->view('admin/admin_welcome',$data);
	    
	}
	function testimonial_list()
	{
	    if($this->session->userdata('admin_userid')==''){
	        redirect('admin');
	    }
	    $data = $this->general();
		$data['get_testimonial_list'] = $this->admin_model->get_testimonial_list();
	    $data['pageName']    = "testimonial_list";
	    $data['pageTitle']   ='Testimonial List';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'admin/pages/testimonial_list';
	    $this->load->view('admin/admin_welcome',$data);
	    
	}
	function delete_testimonial($id){		
		$update_Records = $this->admin_model->delete_testimonialByID($id);
		echo '1';
		exit;
	}	
	function testimonial_status($id){
		$this->admin_model->update_testimonial_status($id);
		echo '1';
		exit;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */