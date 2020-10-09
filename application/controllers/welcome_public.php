<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
					use PHPMailer\PHPMailer\PHPMailer;
					use PHPMailer\PHPMailer\SMTP;
					use PHPMailer\PHPMailer\Exception;
	require_once 'PHPMailer/PHPMailer/vendor/autoload.php';
					
				
    require_once('phpqrcode/qrlib.php');

				

class Welcome_public extends CI_Controller {


	
				

	/**

	 * Index Page for this controller.

	 *

	 * Maps to the following URL

	 * 		http://example.com/index.php/welcome

	 *	- or -  

	 * 		http://example.com/index.php/welcome/index

	 *	- or -

	 * Since this controller is set as the default controller in 

	 * config/routes.php, it's displayed at http://example.com/

	 *

	 * So any other public methods not prefixed with an underscore will

	 * map to /index.php/welcome/<method_name>

	 * @see http://codeigniter.com/user_guide/general/urls.html

	 */


	
	
	

function general()

	{

		$data['layout'] 		= 'public/layouts/layout';

		$data['header'] 		= 'public/layouts/header';

		$data['footer'] 		= 'public/layouts/footer';

		$data['fbtitle'] = "Bloom India - Blood Donation Website";
		$data['fbimage'] = "https://www.bloomindia.in/assets/public/img/Bloom-logo-taglline.png";
		
		$data['fbdescription'] = "Pledge To Donate Blood OR, Search For A Donor";
		$data['fburl'] = "http://www.bloomindia.in/";

		return $data;

	}
	
	

	
	
	function refer()
	{
	   
	    $data = $this->general();
	    $this->load->library('session');
		if(empty($this->session->userdata('email'))){
		    redirect('/login?page=refer');
		}
		if(sizeof($_POST)>0){
            $y_email=$this->session->userdata('email');
            $y_name=$_POST['y_name'];
            $f_email=$_POST['f_email'];
            $f_name=$_POST['f_name'];
            $y_msg=$_POST['y_msg'];
            
            $user = $this->public_model->getUserByEmail($y_email);
            $y_name = $user['firstname'];
        	
        	$mail = new PHPMailer(true);
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
			$mail->Host = "bloomindia.in";
			$mail->Port = 465;
			$mail->IsHTML(true);
			$mail->Username = "admin@bloomindia.in ";//Enter username here
			$mail->Password = "admin@12345";//Enter password here
			$mail->SetFrom("admin@bloomindia.in");
			$mail->Subject = "Hi $f_name, your friend $y_name requested you to visit BloomIndia"; // Subject for mail
			$mail->Body = "<p>Please visit <a href='https://www.bloomindia.in/?ref=$y_email'>BloomIndia</a></p><p>$y_msg</p>"; //body of the mail
			$mail->AddAddress($f_email);
			
			 if(!$mail->Send()) {
			     	$data['message'] ='Some technical issue... Try later';
			 } else {
			     	$data['message'] ='Email Sent';
			 }
	    }
	    
	    $data['pageName']    = "refer";
	    $data['pageTitle']   ='Refer';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'public/pages/refer';
	    $this->load->view('public/view_welcome',$data);
	    
	}
	


	function index()

	{

		$data = $this->general();

		$data['pageName']    = "home";

		$data['pageTitle']   ='BLOOM-HOME PAGE';

		$data['testimonial'] = $this->admin_model->get_testimonial();

		$data['events'] = $this->admin_model->get_events();

		$data['metaKeywords'] ='';

		$data['metaDescription'] ='';

		$data['content'] = 'public/pages/home';
        
        
        $data['get_offer_list'] =  $this->admin_model->get_offer_list();
		
		$data['max_id'] = ($this->admin_model->get_offer_list()[0]->id);
		
		
		$this->load->view('public/view_welcome',$data);

		

	}



	

	function search_donor()

	{

	    $data = $this->general();


	    $data['pageName']    = "search_donor";

	    $data['pageTitle']   ='Search-Donor';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/search-donor';

	    $this->load->view('public/view_welcome',$data);

	    

	}

	
	
	
		
	function user_display($arg1){
		
		
		
		
		 $data = $this->general();
		$data['pageName'] = "User Display Page";
		$data['pageTitle'] ='Pledged User';
		$data['metaKeywords'] ='';
		$data['metaDescription'] ='';
		$data['content'] = 'public/pages/user_display';
	    
	    
	    
    	$data['fbtitle'] = "The Hero Our Society Deserves ! ";
		$data['fbimage'] = "http://www.bloomindia.in/assets/public/herocards/".$arg1.".png";
		
		$data['fbdescription'] = "Donate Blood, Leave A Legacy... Every two seconds someone needs blood. Every year our nation requires about 5 Crore units of blood, out of which only a meager 2.5 Crore units of blood are available.The gift of blood is the gift of life. There is no substitute for human blood.";
		$data['fburl'] = "http://www.bloomindia.in/user_display/".$arg1;
	    
		$data['arg1']=(string)$arg1;
		$this->load->view('public/view_welcome',$data);
		
		
	}
	
	
	
	
	
	
	
	

	function seekerpopup()

	{
	   // print_r("HELLO1");
          $data = $this->general();

	         if(sizeof($_POST)>0){

	        echo $v = base64_decode($this->input->post('pv'));
           // print_r("HELLO2");
	        

	        $seeker_name=$_POST['seeker_name'];
	     //   print_r($seeker_name);

	        $seeker_mobileno=$_POST['seeker_mobileno'];
	       // print_r($seeker_mobileno);

	        $seeker_email=$_POST['seeker_email'];
           // print_r($seeker_email);
            
	        $seeker_description=$_POST['seeker_description'];
           // print_r($seeker_description);
            
            
            $seeker_list = $_POST['finalcontacts'];
            //print_r($seeker_list);
            
            $seeker_list_exploded = explode(" and ",$seeker_list);
        
            
            foreach ($seeker_list_exploded as $value){ 
                       
                        $temp =  $this->public_model->getEmailbyId($value);
                        //print_r(array_pop($temp));
                       // print_r($temp[0]['email']);
                            
                            
                            
                        
                        $mail = new PHPMailer(true);
    					$mail->SMTPAuth = true; // authentication enabled
    					$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    					$mail->Host = "bloomindia.in";
    					$mail->Port = 465;
    					$mail->IsHTML(true);
    					$mail->Username = "admin@bloomindia.in ";//Enter username here
    					$mail->Password = "admin@12345";//Enter password here
    					$mail->SetFrom("admin@bloomindia.in ");
    					$mail->Subject = "Blood Requirment By ".$seeker_name; // Subject for mail
    					$mail->Body = "<p> Immediate Blood requirement in your vicinity... Be READY !</p><br><p>".$seeker_description."</p><br>Contact: ".$seeker_mobileno; //body of the mail
    					$mail->AddAddress($temp[0]['email']);
    					
    					 if(!$mail->Send()) {
    					     	$data['message'] ='Some technical issue... Try later';
    					 } else {
    					    //
    						}
    						$temp2 =  $this->public_model->getMobilenobyId($value);
            
                        $sms_list = (int)$temp2[0]['phone_number'];
                        //echo $sms_list;
                        
						$sms_message =urlencode("BLOOM ALERT \n".$seeker_name. " in your vicinity needs Blood !  Call: ".$seeker_mobileno.".  Message: ".$seeker_description."");
						$curl = curl_init();
						  curl_setopt_array($curl, array(
						  CURLOPT_URL => "http://api.msg91.com/api/v2/sendsms",
						  CURLOPT_RETURNTRANSFER => true,
						  CURLOPT_ENCODING => "",
						  CURLOPT_MAXREDIRS => 10,
						  CURLOPT_TIMEOUT => 30,
						  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						  CURLOPT_CUSTOMREQUEST => "POST",
						  CURLOPT_POSTFIELDS =>'{
												  "sender": "BLMIND",
												  "route": "4",
												  "country": "91",
												  "sms": [
															{
															  "message": "'.$sms_message.'",
															  "to": [
																"'.$sms_list.'"
															  ]
															}
														  ]
												}',
						  CURLOPT_SSL_VERIFYHOST => 0,
						  CURLOPT_SSL_VERIFYPEER => 0,
						  CURLOPT_HTTPHEADER => array(
							"authkey: 171279AvMW5C89599d5395",
							"content-type: application/json"
						  ),
						));

						$response = curl_exec($curl);
						$err = curl_error($curl);

						curl_close($curl);

						if ($err) {
						  //echo "Message Failed ! to :".$sms_list."Error Message: ".$err;
						} else {
						  //echo  "Message Success ! to :".$sms_list."Success Message: ".$response;
						}
            
            
            
                    } 
    
            
    
   
    
    
    
            
	    }
        
        
        
        
        
        
        
        
        
        
        
        
        

	    $data['pageName']    = "seekerpopup";

	    $data['pageTitle']   ='seekerpopup';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/seekerpopup';

	    $this->load->view('public/view_welcome',$data);

	    

	}

	

	function available(){

	   $api_key='AIzaSyDZ-_qwKLm1gct8N4WzZaF9IRWhqnUMWGo';

	    $data = $this->general();

	    if(sizeof($_POST)>0){

	        $status=1;

			$str=$_POST['bloodgroup'];

			$bloodgroup=substr($str, 0, -3);

	        $rh_factor=substr($str, -3);

	        $place=$_POST['address'];			

	        $distance = $_POST['distance'];

	       

	      // Get JSON results from this request

			$geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?key='.$api_key.'&address='.urlencode($place).'&sensor=false');



			//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c



			$geo = json_decode($geo, true); // Convert the JSON to an array



			if (isset($geo['status']) && ($geo['status'] == 'OK')) {

			  $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude

			  $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude

			}else{

				for($i=1;$i<100;$i++){

					  $geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?key='.$api_key.'&address='.urlencode($place).'&sensor=false');

					  //apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c

					  $geo = json_decode($geo, true); // Convert the JSON to an array

					  if (isset($geo['status']) && ($geo['status'] == 'OK')) {

						$latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude

						$longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude

						//echo $i;

						break;

					  }



					}

				}





			$geo_w = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?key='.$api_key.'&address='.urlencode($place).'&sensor=false');

			//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c

			$geo_w = json_decode($geo_w, true); // Convert the JSON to an array



			if (isset($geo_w['status']) && ($geo_w['status'] == 'OK')) {

			  $latitude_w = $geo_w['results'][0]['geometry']['location']['lat']; // Latitude

			  $longitude_w = $geo_w['results'][0]['geometry']['location']['lng']; // Longitude

			}else{

				for($i=1;$i<100;$i++){

					  $geo_w = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?key='.$api_key.'&address='.urlencode($place).'&sensor=false');

					  //apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c

					  $geo_w = json_decode($geo_w, true); // Convert the JSON to an array

					  if (isset($geo_w['status']) && ($geo_w['status'] == 'OK')) {

						$latitude_w = $geo_w['results'][0]['geometry']['location']['lat']; // Latitude

						$longitude_w = $geo_w['results'][0]['geometry']['location']['lng']; // Longitude

						//echo $i;

						break;

					  }



					}

				}

			

	        $data['latitude'] = $latitude;
	        $data['longitude'] = $longitude;

	        $search_data = array('status'=>'1',

	            'bloodgroup'=>$bloodgroup,

	            'place'=>$place,

	            'distance'=>$distance,

	            'rh_factor'=>$rh_factor,

	            'Address'=>$place,

	            'Lat'=>$latitude,

	            'Lon'=>$longitude	            

	        );

			$search_data_w = array('status'=>'1',

	            'bloodgroup'=>$bloodgroup,

	            'place'=>$place,

	            'distance'=>$distance,

	            'rh_factor'=>$rh_factor,

	            'Address'=>$place,

	            'Lat_w'=>$latitude_w,

	            'Lon_w'=>$longitude_w	            

	        );

	        

	        $data['pv_search']= $search_data;

	        if($latitude==''){

	            $data['search_result']='Some Technical Issue Please try Again....';

	        }else{

	           $data['search_result']= $this->public_model->search_donor($search_data);

			   $data['search_result_w']= $this->public_model->search_donor_w($search_data_w);

	           //print_r($search_result);exit;

	        }

	    }

	    $data['pageName']    = "available";

	    $data['pageTitle']   ='Available';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/available';

	    $this->load->view('public/view_welcome',$data);

	}

	function logoutUser(){
		$data = $this->general();
		$this->load->library('session');
		$this->session->sess_destroy();
		session_destroy();
		redirect(base_url());	
	}

	function fbLogin(){
		session_start();
		require_once 'Facebook/autoload.php';
		$fb = new Facebook\Facebook([
		  'app_id' => '561735194771335',
		  'app_secret' => '7dcd73723d6c58bb966fe320fbf12591',
		  'default_graph_version' => 'v2.5',
		  'persistent_data_handler'=>'session',
		]);
	
		$helper = $fb->getRedirectLoginHelper();
		
		$permissions = ['email'];
		// For more permissions like user location etc you need to send your application for review
		$loginUrl = $helper->getLoginUrl('https://www.bloomindia.in/register-donor?provider=facebook', $permissions);
	
		header("location: ".$loginUrl);
	}
	
	

	function profile(){
		if(!empty($this->session->userdata('email')) && !empty($this->session->userdata('login'))){
			$email = $this->session->userdata('email');
			$data = $this->general();

			$userInfo = $this->public_model->getUserByEmail($email);
			$data['userInfo'] = $userInfo;
			
			$data['pageName'] = "profile";
			$data['pageTitle'] ='Profile';
			$data['metaKeywords'] ='';
			$data['metaDescription'] ='';
			$data['content'] = 'public/pages/profile';
			$this->load->view('public/view_welcome',$data);
		}else{
			redirect('/login');
		}
	}

	function updateUser(){
		if(!empty($this->session->userdata('email')) && !empty($this->session->userdata('login'))){
				$email = $this->session->userdata('email');
				$data = $this->general();
				$api_key='AIzaSyDZ-_qwKLm1gct8N4WzZaF9IRWhqnUMWGo';
	
				if(sizeof($_POST)>0){
					$firstname=$_POST['fname'];
					$lastname=$_POST['lname'];
					$phone_number=$_POST['mobileno'];
					$res = explode("/", $_POST['dob']);
					$dob = $res[0];
					$gender=$_POST['gender'];
					$str=$_POST['bloodgroup'];
					$bloodgroup=substr($str, 0, -3);
					$rh_factor=substr($str, -3);
					$home_address=$_POST['haddress'];
					$work_address=$_POST['waddress'];
					$Address = urlencode($home_address);
					$request_url = "https://maps.googleapis.com/maps/api/geocode/xml?key=".$api_key."&address=".$Address."&sensor=true";
					//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c
					
					
					$question = "default";
					$plasma = "default";
					if(isset($_POST['condition1']))
					{
						
						$question="yes";
					}
					else{
					
						$question = "no";
					}


					if(isset($_POST['condition3']))
					{
						
						$plasma="yes";
					}
					else{
						
						$plasma = "no";
					}

					
					$xml = simplexml_load_file($request_url) or die("url not loading");
					$status = $xml->status;
					
					if ($status=="OK") {
						$home_address_latitude = $xml->result->geometry->location->lat;
						$home_address_longitude = $xml->result->geometry->location->lng;
					}else{
						$home_address_latitude = '';
						$home_address_longitude = ''; 
						for($i=1; $i<2; $i++){ 
							//echo $i;
							$request_url = "https://maps.googleapis.com/maps/api/geocode/xml?key=".$api_key."&address=".$Address."&sensor=true";
							//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c
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
					$request_url_W = "https://maps.googleapis.com/maps/api/geocode/xml?key=".$api_key."&address=".$Address_W."&sensor=true";
					//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c
					$xml_w = simplexml_load_file($request_url_W) or die("url not loading");
					$status = $xml_w->status;
					
					if ($status=="OK") {
						$work_address_latitude = $xml_w->result->geometry->location->lat;
						$work_address_longitude = $xml_w->result->geometry->location->lng;
					}else{
					for($i=1; $i<2; $i++){ 
						$request_url_W = "https://maps.googleapis.com/maps/api/geocode/xml?key=".$api_key."&address=".$Address_W."&sensor=true";
						//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c
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
                    $plasma=$_POST['condition3'];
                    
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
                        'plasma'=>$plasma,
						'created_at'=>$created_at
					);
				
					$insert = $this->public_model->updateData($register);

					if(!$insert){
						die('Some Technical Issue... Try again later');
					}else{
						redirect('/');
					}
			
				}else{
					redirect('/login');
				}
		}
	}
	


	function login(){
		$data = $this->general();
		$this->load->library('session');
		if(!empty($this->session->userdata('email')) && !empty($this->session->userdata('login'))){
		    redirect('/profile');
		}
		
		if(!empty($_POST["otp"]) && isset($_POST["email"])){
		    //var_dump($_POST);
			$otp = $_POST["otp"];
			$email = $_POST["email"];
			$data['email'] = $email;			
		
			$userInfo = $this->public_model->getUserByEmail($email);
		    //print_r($userInfo);
			if($userInfo["otp"]==$otp){
				$otpTime = $userInfo["otp_time"];
		
				$date = strtotime($otpTime);
				$now = strtotime(date("Y-m-d h:i:s"));
				// print_r($date);
				// print_r($now);
				// $d = DateTime::createFromFormat('Y-m-d h:i:s', $date);
				// $delay = $d->diff(DateTime::createFromFormat('Y-m-d h:i:s',date("Y-m-d h:i:s")));
				// $minutes = $delay->days * 24 * 60;
				// $minutes += $delay->h * 60;
				// $minutes += $delay->i;
			$minutes = $now-($date);
			//print_r($minutes);
				if($minutes>600){
					$data['message'] ='OTP Time limit exceeds (10 minutes)... Try again';
				}else{
					$this->session->set_userdata('email',$email);
					if(isset($_POST["page"]) || isset($_POST["page"])){
					   redirect("/refer");
					}
					$this->session->set_userdata('login', 1);
					redirect("/profile");
				}
			}else{
				$data['message'] ="OTP Didn't match... Try again";
			}
		}elseif(isset($_POST['email'])){
			$email = $_POST['email'];
			$data['email'] = $email;
			$userInfo = $this->public_model->checkUserByEmail($email);
			if($userInfo->num_rows() > 0){
				$newOtp = rand(100000, 1000000);
				$generateTime = date('Y-m-d h:i:s');
				$infoToDb = array(
					'email'=>$email,
					'otp'=>$newOtp,
					'otp_time'=>$generateTime,
				);
				$dbResult = $this->public_model->updateData($infoToDb);
			
			    if(!$dbResult){
					$data['message'] ="Technical issue...db error";
				}else{
				   	////send OTP to $email
					$mail = new PHPMailer(true);
					$mail->SMTPAuth = true; // authentication enabled
					$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
					$mail->Host = "bloomindia.in";
					$mail->Port = 465;
					$mail->IsHTML(true);
					$mail->Username = "admin@bloomindia.in ";//Enter username here
					$mail->Password = "admin@12345";//Enter password here
					$mail->SetFrom("admin@bloomindia.in ");
					$mail->Subject = "Bloom India Login OTP"; // Subject for mail
					$mail->Body = "<p>Here is Your One Time Pin for Login :<strong>$newOtp</strong> <br/> Valid for 10 Minutes</p>"; //body of the mail
					$mail->AddAddress($email);
					
					 if(!$mail->Send()) {
					     	$data['message'] ='Some technical issue... Try later';
					 } else {
					    // print_r($infoToDb);
						$data['message'] ='OTP Sent... please check mail<br><sub>(Check spam folder & mark admin@bloomindia.in as no-spam)</sub>';
						$data['otpSent'] = 1;
						/*if($_GET['page']=="refer"){
						    $data['page'] = 'refer';
						}*/
					 }
				}

			}else{
				$data['message'] ="You have not Pledged...";
			}
		}
		
		$data['pageName'] = "login";
		$data['pageTitle'] ='Login';
		$data['metaKeywords'] ='';
		$data['metaDescription'] ='';
		$data['content'] = 'public/pages/login';
		$this->load->view('public/view_welcome',$data);
	}


    
  function register_donor()
  {
	$data = $this->general();
	$api_key='AIzaSyDZ-_qwKLm1gct8N4WzZaF9IRWhqnUMWGo';
	
	if(sizeof($_POST)>0){
		$firstname=$_POST['fname'];
		$lastname=$_POST['lname'];
		$phone_number=$_POST['mobileno'];
		$email=$_POST['emailid'];
		$res = explode("/", $_POST['dob']);
		$dob = $res[0];
		$gender=$_POST['gender'];
		$str=$_POST['bloodgroup'];
	
	if($str=="Golden"||$str=="Bombay")
		{
			$bloodgroup=$str;
			$rh_factor="+";
		}
		else{ 
		$bloodgroup=substr($str, 0, -3);
		$rh_factor=substr($str, -3);
		}	
		$home_address=$_POST['haddress'];
		$work_address=$_POST['waddress'];
		$Address = urlencode($home_address);
		$request_url = "https://maps.googleapis.com/maps/api/geocode/xml?key=".$api_key."&address=".$Address."&sensor=true";
		//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c
		
		$xml = simplexml_load_file($request_url) or die("url not loading");
		$status = $xml->status;
		///////
		
		//////
		if ($status=="OK") {
			$home_address_latitude = $xml->result->geometry->location->lat;
			$home_address_longitude = $xml->result->geometry->location->lng;
		}else{
		    /* delete else later*/
				    	$home_address_latitude = 28.7041;
				    	$home_address_longitude = 77.1025;
			$home_address_latitude = '';
			$home_address_longitude = ''; 
			for($i=1; $i<2; $i++){ 
				//echo $i;
				$request_url = "https://maps.googleapis.com/maps/api/geocode/xml?key=".$api_key."&address=".$Address."&sensor=true";
				//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c
				$xml = simplexml_load_file($request_url) or die("url not loading");
				$status = $xml->status;
				if ($status=="OK") {
					$home_address_latitude = $xml->result->geometry->location->lat;
					$home_address_longitude = $xml->result->geometry->location->lng;
					break;
				}
				else{
				      
				}
			} 
		}

		$Address_W = urlencode($work_address);
		$request_url_W = "https://maps.googleapis.com/maps/api/geocode/xml?key=".$api_key."&address=".$Address_W."&sensor=true";
		//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c
		$xml_w = simplexml_load_file($request_url_W) or die("url not loading");
		$status = $xml_w->status;
		
		if ($status=="OK") {
			$work_address_latitude = $xml_w->result->geometry->location->lat;
			$work_address_longitude = $xml_w->result->geometry->location->lng;
		}else{
		    			    /* delete else later*/
			    $work_address_latitude = 28.7041;
				    	$work_address_longitude = 77.1025;
		 for($i=1; $i<2; $i++){ 
			$request_url_W = "https://maps.googleapis.com/maps/api/geocode/xml?key=".$api_key."&address=".$Address_W."&sensor=true";
			//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c
			$xml_w = simplexml_load_file($request_url_W) or die("url not loading");
			$status = $xml_w->status;
			if ($status=="OK") {
				$work_address_latitude = $xml_w->result->geometry->location->lat;
				$work_address_longitude = $xml_w->result->geometry->location->lng;
				
				
				
				break;
			} 
			else{

			}
		 }
		}
		//echo $work_address_latitude;exit;
		$when_u_donote=$_POST['condition2'];
		
		$question = "default";
		$plasma = "default";
		if(isset($_POST['condition1']))
		{
			
			$question="yes";
		}
		else{
			
			$question = "no";
		}
        
		
		if(isset($_POST['condition3']))
		{
		
			$plasma="yes";
		}
		else{
		
			$plasma = "no";
		}
        
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
            'plasma'=>$plasma,
			'created_at'=>$created_at
		);
		// echo $home_address_longitude;exit;
		$insert = $this->public_model->registration($register);
		if($insert=='no'){
		$data['message'] ='Please retry some technical issue...!';
		}else{
		    $toLoca =array(
		        'id'=>$insert,
		        'state'=>$_POST['state'],
		        'district'=>$_POST['district'],
		        'city'=>$_POST['city'],
		        'pincode'=>$_POST['pincode'],
		        'lat'=>$home_address_latitude,
		        'lon'=>$home_address_longitude,
		        'bloodgroup'=>$bloodgroup.$rh_factor[0],
		        'name'=>$firstname.' '.$lastname,
				'plasma' => $plasma
		        );
		        
		    $locid = $this->public_model->registrationInLoc($toLoca);
			
			$data['firstname']=$firstname;
			$data['email']=$email;
			$data['message'] ='success';
		/////////
			
			
			//QRcode Generation
			$qrcodecontents = $firstname.$lastname;//Contents for qrcodes
			$tempDir="assets/public/img/QRcode";
			QRcode::png($qrcodecontents,$tempDir.'.png',QR_ECLEVEL_L,4);
			
			//Image Merge
			$template='assets/public/img/template.png';
			$qrcode="assets/public/img/QRcode.png";
			list($width,$height)=getimagesize($qrcode);
			$template=imagecreatefromstring(file_get_contents($template));
			$qrcode=imagecreatefromstring(file_get_contents($qrcode));
			imagecopymerge($template,$qrcode,524,150,00,00,$width-10,$height-10,100);
			//Image writting
			
			//header('Content-Type:image/png');
			$black = imagecolorallocate($template, 0x00, 0x00, 0x00);
			$textcolor = imagecolorallocate($template, 0, 0, 255);
			$font_file = realpath('assets/public/img/Roboto-Regular.ttf');//Path for font file
			$name=$firstname." ".$lastname;
		
            $uniq_no= rand(100000000000,900000000000)+time();
            $cardno=implode(" ", str_split($uniq_no, 4));
            
            $generateTime = date('d-m-Y');
			$infoToDb = array(
					'email'=>$email,
					'cardno'=>$cardno,
					'card_generate_time'=>$generateTime,
			);
			$dbResult = $this->public_model->updateData($infoToDb);
			
			if(!$dbResult){
			    die("Some Technical issue... db error");
			}
				
			
			$validtill= "Valid till ".date('d-m-Y',strtotime('+60 day'));
			
			imagefttext($template, 28, 00, 255, 300, $black, $font_file, $name);
    
   			 imagefttext($template, 27, 00, 255, 355, $black, $font_file, $cardno);
    
   			 imagefttext($template, 11, 00, 420, 415, $black, $font_file, $validtill);
    
         	 
			
			
			
			// Procedure for HERO Template *********************************
			$somearr = [
					1 => array(400,675),
					2 => array(410,650),
					3 => array(910,780),
					4 => array(535,669),
				];
			
			
			$filename = mt_rand(1,4);
			
			
			$image_file = (string)$filename;
			
			
			$xcdnate = $somearr[$filename][0];
			
			$ycdnate =$somearr[$filename][1];
			
			
			
			
			$template_hero='assets/public/img/'.$image_file.'.png';
			
			$template_hero=imagecreatefromstring(file_get_contents($template_hero));
			
			
			imagefttext($template_hero, 60, 00, $xcdnate, $ycdnate, $black, $font_file, $firstname);
			
		    $temp_hero=imagepng($template_hero,'assets/public/herocards/'.(string)$uniq_no.'.png');
			
			
			/********************************************************* */
			
			//Saving Image
			$temp=imagepng($template,'assets/public/herocards/'.(string)$uniq_no.'pvcard.png');
			//Mailing client
			$mail = new PHPMailer(true);
		
			// debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true; // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
			$mail->Host = "bloomindia.in";
			$mail->Port = 465;
			$mail->IsHTML(true);
			$mail->Username = "admin@bloomindia.in";//Enter username here
			$mail->Password = "admin@12345";//Enter password here
			$mail->SetFrom("admin@bloomindia.in");
			$mail->Subject = "Privilege Card By Bloom India"; // Subject for mail
			$mail->Body = "<p><strong>Thank you for pledging as donor.This is your privilege card.</strong> </p>"; //body of the mail
			$mail->AddAddress($email);
			$file_to_attach1 = 'assets/public/herocards/'.(string)$uniq_no.'pvcard.png'; //path to the pdf file 
			$file_to_attach2 = 'assets/public/img/PrivilegeCardBackside.png';
			$mail->AddAttachment( $file_to_attach1 , (string)$uniq_no.'pvcard.png'); //name of the pdf file while in the attachment 
			$mail->AddAttachment( $file_to_attach2 , 'PrivilegeCardBackside.png' ); //
			 if(!$mail->Send()) {
				echo "Mailer Error: " . $mail->ErrorInfo;
				echo $mail->ErrorInfo;
			 } 

			/////////
			
			
			
			
			$data['pageName'] = "become_donor";
			$data['pageTitle'] ='Pledge As A donor';
			$data['metaKeywords'] ='';
			$data['metaDescription'] ='';
			$data['content'] = 'public/pages/become-donor';



			$data['fbtitle'] = "A Hero Society Deserves ! ";
			$data['fbimage'] = "http://www.bloomindia.in/assets/public/img/pledge_home_image.jpg";/*"http://www.bloomindia.in/assets/public/herocards/".(string)$uniq_no.".png";*/

			$data['fbdescription'] = "Pledge to Donate, Leave A Legacy !";
			$data['fburl'] = "http://www.bloomindia.in/become-donor";
			
			
			$data['pledged_id'] = (string)$uniq_no;
			$this->load->view('public/view_welcome',$data);
			
			
			
			
	    }
	}else{
	$data['message']='no';
	$data['pageName'] = "become_donor";
	$data['pageTitle'] ='Pledge As A donor';
	$data['metaKeywords'] ='';
	$data['metaDescription'] ='';
	$data['content'] = 'public/pages/become-donor';
	  
	  
	  
    $data['fbtitle'] = "A Hero, The Society Deserves ! ";
		$data['fbimage'] = "https://www.bloomindia.in/assets/public/img/pledge_home_image.jpg";/*"http://www.bloomindia.in/assets/public/img/hero_card.png";*/
		
		$data['fbdescription'] = "Pledge to Donate Blood, Leave A Legacy !";
		$data['fburl'] = "http://www.bloomindia.in/become-donor";
	
	$this->load->view('public/view_welcome',$data);
	
	}

  } 
  


    /*****old with gmail and facebook login 
	function register_donor()
	{
		$this->load->library('session');
							
		//echo $this->session->userdata('email');
		require_once('google_settings.php');
		require_once('google-login-api.php');
		require_once 'Facebook/autoload.php';

		
		if($this->session->userdata('email')){
			$data['registered']=true;
			$registered=true;
			//echo $this->session->userdata('email');
		}
		
		// Google passes a parameter 'code' in the Redirect Url
	
		$api_key='AIzaSyBdOvlD20CtITdKRxB-ZrSA6IX28ZAAJYY';
	    if(sizeof($_POST)>0){
			$nocode=1;
	        $firstname=$_POST['fname'];
	        $lastname=$_POST['lname'];
			$phone_number=$_POST['mobileno'];
			$email=$this->session->userdata('email');
			if(empty($this->session->userdata('email'))){
				$email=$_POST['email'];
					$registered = true;
			}
	        $email=$this->session->userdata('email');
	        $res = explode("/", $_POST['dob']);
	        $dob = $res[0];
	        $gender=$_POST['gender'];
			$str=$_POST['bloodgroup'];
	        $bloodgroup=substr($str, 0, -3);
	        $rh_factor=substr($str, -3);
			$home_address_latitude = '';
			$home_address_longitude = '';
			$work_address_latitude = '';
			$work_address_longitude= '';

			$home_address=$_POST['haddress'];
	        $work_address=$_POST['waddress'];
	        $Address = urlencode($home_address);


			$request_url = "https://maps.googleapis.com/maps/api/geocode/xml?key=".$api_key."&address=".$Address."&sensor=true";
			//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c
	        $xml = simplexml_load_file($request_url) or die("url not loading");
	        $status = $xml->status;
	        if ($status=="OK") {
	            $home_address_latitude = $xml->result->geometry->location->lat;
	            $home_address_longitude = $xml->result->geometry->location->lng;
	        }else{
	            $home_address_latitude = '';
				$home_address_longitude = '';

				for($i=1; $i<2; $i++){					
						//echo $i;
						$request_url = "https://maps.googleapis.com/maps/api/geocode/xml?key=".$api_key."&address=".$Address."&sensor=true";
						//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c
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
	        $request_url_W = "https://maps.googleapis.com/maps/api/geocode/xml?key=".$api_key."&address=".$Address_W."&sensor=true";
			//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c
	        $xml_w = simplexml_load_file($request_url_W) or die("url not loading");
	        $status = $xml_w->status;
	        if ($status=="OK") {
	            $work_address_latitude = $xml_w->result->geometry->location->lat;
	            $work_address_longitude = $xml_w->result->geometry->location->lng;
	        }else{
	           	for($i=1; $i<2; $i++){						
						$request_url_W = "https://maps.googleapis.com/maps/api/geocode/xml?key=".$api_key."&address=".$Address_W."&sensor=true";
						//apikey=AIzaSyD-lbo8Y8gtYVOCbi-tyc9FWdZ77RXIp1c
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
		   // echo	$home_address_longitude;exit;
		   if(isset($registered)){
				$insert = $this->public_model->updateData($register);
		   }else{
			$insert = $this->public_model->insertData($register);
			if($insert=='no'){
				$data['message'] ='Please retry some technical issue...!';
	        }else{
	            $data['firstname']=$firstname;
	            $data['message'] ='success';
	        }
		   }
	        
	    }else{
	        $data['message']='no';
		}
		if(isset($_GET['code']) &&($_GET['provider']=="google") && !isset($nocode) && !isset($registered)) {
			try {
				$gapi = new GoogleLoginApi();
				
				// Get the access token 
				$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
				
				// Get user information
				$user_info = $gapi->GetUserProfileInfo($data['access_token']);
				$data['user_email']=$user_info['email'];
						$data['user_id']=$user_info['id'];
							$this->session->userdata('id');
						$data['user_name']=$user_info['name'];
							$this->session->userdata('name');
						$data['user_picture']=$user_info['picture'];
							$this->session->userdata('picture');        
					//redirect('user/become_doner');
					
					$register = array(
						'firstname'=>$user_info['name'],
						'email'=>$user_info['email'],
						'provider'=>"google",
					);
					if(!isset($registered)){
						$this->db->where('email',$user_info['email']);
						if($this->db->get('bloom_pledge')->num_rows()>0)
						{
							$registered = true;
							$this->load->library('session');
							$this->session->set_userdata('email', $user_info['email']);
							redirect('register-donor');
					}
				}
					if(!isset($registered)){
					$insert = $this->public_model->registration($register);
					if($insert=='no'){
						echo 'Please retry some technical issue...!';
						exit();
					}else{
						$this->load->library('session');
						$this->session->set_userdata('email', $user_info['email']);
						$this->session->set_userdata('name', $user_info['name']);
						$this->session->set_userdata('id', $insert);
						$this->session->set_userdata('picture', $user_info['picture']);
						 $data['id']=$insert;
					}
				}
					
			}
				catch(Exception $e) {
				echo $e->getMessage();
				exit();
				}
		}
		if(isset($_GET['code']) &&($_GET['provider']=="facebook") && !isset($nocode) && !isset($registered))
		{
		    
		    //session_destroy();
			require_once 'Facebook/autoload.php';
			$fb = new Facebook\Facebook([
			'app_id' => '561735194771335',
			'app_secret' => '7dcd73723d6c58bb966fe320fbf12591',
			'default_graph_version' => 'v2.5',
			]);
		
			
			$helper = $fb->getRedirectLoginHelper();  
		
			
			if (isset($_GET['state'])) {
			$helper->getPersistentDataHandler()->set('state', $_GET['state']);
			}
			try {  
				
				$accessToken = $helper->getAccessToken();  
				
			}catch(Facebook\Exceptions\FacebookResponseException $e) {  
			  // When Graph returns an error  
			  echo 'Graph returned an error: ' . $e->getMessage();  
			  exit;  
			} catch(Facebook\Exceptions\FacebookSDKException $e) {  
			  // When validation fails or other local issues  
			  echo 'Facebook SDK returned an error: ' . $e->getMessage();  
			  exit;  
			}  
			try {
			  // Get the Facebook\GraphNodes\GraphUser object for the current user.
			  // If you provided a 'default_access_token', the '{access-token}' is optional.
			  $response = $fb->get('/me?fields=id,name,email,first_name,last_name,birthday,location,gender', $accessToken);
			 // print_r($response);
			} catch(Facebook\Exceptions\FacebookResponseException $e) {
			  // When Graph returns an error
			  echo 'ERROR: Graph ' . $e->getMessage();
			  exit;
			} catch(Facebook\Exceptions\FacebookSDKException $e) {
			  // When validation fails or other local issues
			  echo 'ERROR: validation fails ' . $e->getMessage();
			  exit;
			}
		
			// User Information Retrival begins................................................
			$me = $response->getGraphUser();
			
			// $location = $me->getProperty('location');
			// echo "Full Name: ".$me->getProperty('name')."<br>";
			// echo "First Name: ".."<br>";
			// echo "Last Name: ".$me->getProperty('last_name')."<br>";
			// echo "Gender: ".$me->getProperty('gender')."<br>";
			// echo "Email: ".."<br>";
			// echo "location: ".$location['name']."<br>";
			// echo "Birthday: ".$me->getProperty('birthday')->format('d/m/Y')."<br>";
			// echo "Facebook ID: <a href='https://www.facebook.com/".$me->getProperty('id')."' target='_blank'>".$me->getProperty('id')."</a>"."<br>";
			// $profileid = $me->getProperty('id');
			// echo "</br><img src='//graph.facebook.com/$profileid/picture?type=large'> ";
			// echo "</br></br>Access Token : </br>".$accessToken; 
			
			$data['user_email']=$me->getProperty('email');
						$data['user_id']=$me->getProperty('id');
						$data['user_name']=$me->getProperty('first_name');
						$data['user_picture']="http://graph.facebook.com/".$me->getProperty('id')."/picture?type=large";
						
					$register = array(
						'firstname'=>$me->getProperty('first_name'),
						'email'=>$me->getProperty('email'),
						'provider'=>"facebook",
					);
					if(!isset($registered)){
					
						$this->db->where('email',$me->getProperty('email'));
						if($this->db->get('bloom_pledge')->num_rows()>0)
						{
							$registered = true;
							$this->load->library('session');
							$this->session->set_userdata('email', $me->getProperty('email'));
							redirect('register-donor');
					}
				}
					if(!isset($registered)){
					$insert = $this->public_model->registration($register);
					if($insert=='no'){
						echo 'Please retry some technical issue...!';
						exit();
					}else{
						$this->load->library('session');
						$this->session->set_userdata('email',$me->getProperty('email'));
						$this->session->set_userdata('name', $me->getProperty('first_name'));
						$this->session->set_userdata('id', $insert);
						$this->session->set_userdata('picture', "http://graph.facebook.com/".$me->getProperty('id')."/picture?type=large");
						 $data['id']=$insert;
					}
				}
		   
		}
		
		if(empty($this->session->userdata('email'))){
			redirect(base_url());
		}
	
		$data['layout'] 		= 'public/layouts/layout';
		$data['header'] 		= 'public/layouts/header';
		$data['footer'] 		= 'public/layouts/footer';

		$data['pageName']    = "become_donor";
	    $data['pageTitle']   ='Pledge As A donor';
	    $data['metaKeywords'] ='';
		$data['metaDescription'] ='';
		$data['content'] = 'public/pages/become-donor';
		$this->load->view('public/view_welcome',$data);
	    
	}
	****////
	
	public function pledge(){
		$data = $this->general();
		require_once('google_settings.php');
		$data['pageName']    = "pledge";
	    $data['pageTitle']   ='Pledge As A donor';
	    $data['metaKeywords'] ='';
	    $data['metaDescription'] ='';
	    $data['content'] = 'public/pages/pledge';
	    $this->load->view('public/view_welcome',$data);

	}
	

	function events()

	{

	    $data = $this->general();

	    $data['pageName']    = "events";

	    $data['pageTitle']   ='Events';

		$data['get_event_list'] = $this->admin_model->get_event_list();

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/events';

	    $this->load->view('public/view_welcome',$data);	    

	}

	

	function offers()

	{

	    /*$data = $this->general();

	    $data['pageName']    = "offers";

		$data['get_offer_list'] = $this->admin_model->get_offer_list();

	    $data['pageTitle']   ='Offers';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/offers';

	    $this->load->view('public/view_welcome',$data);*/
	    
	    
	    $data = $this->general();

	    $data['pageName']    = "Offers";

	    $data['pageTitle']   ='Offers';
	    
	    $this -> load -> library('pagination');
		$config = array();
		 
		  //deign for links
		  $config['full_tag_open'] = "<ul class='pagination'>";
		  $config['full_tag_close'] = '</ul>';
		  $config['num_tag_open'] = '<li>';
		  $config['num_tag_close'] = '</li>';
		  $config['cur_tag_open'] = '<li class="active"><a href="#">';
		  $config['cur_tag_close'] = '</a></li>';
		  $config['prev_tag_open'] = '<li>';
		  $config['prev_tag_close'] = '</li>';
		  $config['first_tag_open'] = '<li>';
		  $config['first_tag_close'] = '</li>';
		  $config['last_tag_open'] = '<li>';
		  $config['last_tag_close'] = '</li>';
		  $config['prev_link'] = 'Previous Page';
		  $config['prev_tag_open'] = '<li>';
		  $config['prev_tag_close'] = '</li>';
		  $config['next_link'] = 'Next Page';
		  $config['next_tag_open'] = '<li>';
		  $config['next_tag_close'] = '</li>';
		
		$config['base_url'] = site_url('offers/');
		$total = $this ->admin_model->get_offer_list_raw()->num_rows();
		$per_page = 12;
		$config['uri_segment'] = 2;
	  
		$config['total_rows'] = $total;
		$config['per_page'] = $per_page;
	  
  
  
		$this -> pagination -> initialize($config);
		$data['pagination'] = $this -> pagination -> create_links();
		  
		$data['get_offer_list'] = $this->db->order_by('id','desc')->get('offers', $config['per_page'], $this->uri->segment(2))->result();


	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/offers';

	    $this->load->view('public/view_welcome',$data);	   
	    
	    
	    

	}

	function eventsw()

	{

	    $data = $this->general();

	    $data['pageName']    = "events";

	    $data['pageTitle']   ='Events';
	    
      $this -> load -> library('pagination');
      $config = array();
       
        //deign for links
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['prev_link'] = 'Previous Page';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = 'Next Page';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
      
      $config['base_url'] = site_url('eventsw/');
      $total = $this ->admin_model->get_event_list_raw()->num_rows();
      $per_page = 12;
      $config['uri_segment'] = 2;
    
      $config['total_rows'] = $total;
      $config['per_page'] = $per_page;
    


      $this -> pagination -> initialize($config);
      $data['pagination'] = $this -> pagination -> create_links();
        
		$data['get_event_list'] = $this->db->order_by('id','desc')->get('events', $config['per_page'], $this->uri->segment(2))->result();
		
		$data['get_gallery'] = $this->admin_model->get_gallery();
		
		$data['update_gallery'] = $this->admin_model->update_gallery();
		
		$data['gallery_count'] = count($this->admin_model->update_gallery());

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/eventsw';

	    $this->load->view('public/view_welcome',$data);	    

	}

	function eventpage()
	{
		$data = $this->general();
		
	    $data['pageName']    = "eventpage";
	    
	    $data['pageTitle']   ='Event Page';
		
		$data['get_event_list'] = $this->admin_model->get_event_list();
		
		$id=$this->uri->segment(3);
		
		$data['get_id'] = $this->admin_model->get_event_by_id($id);
	    
	    $data['metaKeywords'] ='';
	    
	    
	    $data['metaDescription'] ='';
	    
	    $data['content'] = 'public/pages/eventpage';
	    
	    $this->load->view('public/view_welcome',$data);	    
	}
	

	function offersw()

	{

	    $data = $this->general();

	    $data['pageName']    = "offers";

	    $data['pageTitle']   ='Offers';
	    
	    $this -> load -> library('pagination');
		$config = array();
		 
		  //deign for links
		  $config['full_tag_open'] = "<ul class='pagination'>";
		  $config['full_tag_close'] = '</ul>';
		  $config['num_tag_open'] = '<li>';
		  $config['num_tag_close'] = '</li>';
		  $config['cur_tag_open'] = '<li class="active"><a href="#">';
		  $config['cur_tag_close'] = '</a></li>';
		  $config['prev_tag_open'] = '<li>';
		  $config['prev_tag_close'] = '</li>';
		  $config['first_tag_open'] = '<li>';
		  $config['first_tag_close'] = '</li>';
		  $config['last_tag_open'] = '<li>';
		  $config['last_tag_close'] = '</li>';
		  $config['prev_link'] = 'Previous Page';
		  $config['prev_tag_open'] = '<li>';
		  $config['prev_tag_close'] = '</li>';
		  $config['next_link'] = 'Next Page';
		  $config['next_tag_open'] = '<li>';
		  $config['next_tag_close'] = '</li>';
		
		$config['base_url'] = site_url('offersw/');
		$total = $this ->admin_model->get_offer_list_raw()->num_rows();
		$per_page = 12;
		$config['uri_segment'] = 2;
	  
		$config['total_rows'] = $total;
		$config['per_page'] = $per_page;
	  
  
  
		$this -> pagination -> initialize($config);
		$data['pagination'] = $this -> pagination -> create_links();
		  
		$data['get_offer_list'] = $this->db->order_by('id','desc')->get('offers', $config['per_page'], $this->uri->segment(2))->result();


	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/offersw';

	    $this->load->view('public/view_welcome',$data);	    

	}

	function offerpage()
	{
		$data = $this->general();
		
	    $data['pageName']    = "offerpage";
	    
	    $data['pageTitle']   ='Offer Page';
		
		$data['get_offer_list'] = $this->admin_model->get_offer_list();
		
		$id=$this->uri->segment(3);
		
		$data['get_id'] = $this->admin_model->get_offer_by_id($id);
	    
	    $data['metaKeywords'] ='';
	    
	    $data['metaDescription'] ='';
	    
	    $data['content'] = 'public/pages/offerpage';
	    
	    $this->load->view('public/view_welcome',$data);	    
	}

	function events_api()

	{

	    $data = $this->general();

	    $data['pageName']    = "events_api";

	    $data['pageTitle']   ='Events';

		$data['get_event_list'] = $this->admin_model->get_event_list();

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/events';

	    $this->load->view('public/view_welcome',$data);	    

	}

	

	function offers_api()

	{

	    $data = $this->general();

	    $data['pageName']    = "offers_api";

		$data['get_offer_list'] = $this->admin_model->get_offer_list();

	    $data['pageTitle']   ='Offers';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/offers';

	    $this->load->view('public/view_welcome',$data);	    

	}

	function pageerror()

	{

	    $data = $this->general();

	  

	    $data['pageName']    = "pageerror";

	    $data['pageTitle']   ='Bloom-Error';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/pageerror';

	    $this->load->view('public/view_welcome',$data);

	    

	}



	function terms()

	{

	    $data = $this->general();

	  

	    $data['pageName']    = "become_donor";

	    $data['pageTitle']   ='terms';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/terms';

	    $this->load->view('public/view_welcome',$data);

	    

	}

	function bloom_story()

	{

	    $data = $this->general();

	  

	    $data['pageName']    = "bloom_story";

	    $data['pageTitle']   ='Bloom Story';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/bloom-story';

	    $this->load->view('public/view_welcome',$data);

	    

	}

	function blog()
	{

	    $data = $this->general();

	    $data['pageName']    = "blog";

	    $data['pageTitle']   ='Blog';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/blog';

	    $this->load->view('public/view_welcome',$data);

	}



    	function leukemia_blood_cancer()
	{

	    $data = $this->general();

	    $data['pageName']    = "leukemia_blood_cancer";

	    $data['pageTitle']   ='Blog - Leukemia';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/leukemia_blood_cancer';

	    
		
		
		
		
		
		$data['fbtitle'] = "Leukemia - Blood Cancer";
		$data['fbimage'] = "https://media-exp1.licdn.com/dms/image/C5612AQFD9wQVYsz1kQ/article-inline_image-shrink_1000_1488/0?e=1601510400&v=beta&t=WpjUGD9MZfXrbUJC5NIlJHs_bmuPPoWnneDeiwDCqSE";
		
		$data['fbdescription'] = "Leukemia shows no obvious symptoms early in the disease, leukemia may be diagnosed incidentally during a physical exam or as a result of routine blood testing....";
		$data['fburl'] = "http://www.bloomindia.in/leukemia_blood_cancer";
	    
		$this->load->view('public/view_welcome',$data);
	}
	

	function volunteer_blood_donation()
	{

	    $data = $this->general();

	    $data['pageName']    = "volunteer_blood_donation";

	    $data['pageTitle']   ='Blog - Bloom - Network to Increase Volunteer Blood Donation';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/volunteer_blood_donation';

	    
		
		
		
		
		
		$data['fbtitle'] = "Bloom - Network to Increase Volunteer Blood Donation";
		$data['fbimage'] = "<?php echo public_img_url();?>blog4img.jpg";
		
		$data['fbdescription'] = "There is no greater joy then saving a life - Right Blood. Right Time. Right Place....";
		$data['fburl'] = "http://www.bloomindia.in/volunteer_blood_donation";
	    
		$this->load->view('public/view_welcome',$data);
	}

	function be_a_superhero()
	{

	    $data = $this->general();

	    $data['pageName']    = "be_a_superhero";

	    $data['pageTitle']   ='Blog - Be a Superhero - Save a life & your life will Bloom into infinite joy';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/be_a_superhero';

		
		
		
		
		$data['fbtitle'] = "Be a Superhero - Save a life & your life will Bloom into infinite joy";
		$data['fbimage'] = "http://www.bloomindia.in/assets/public/img/blog4img.jpg";
		
		$data['fbdescription'] = "There was a time when getting bitten by a spider, being son of a Odin or being an alien from Krypton made you a superhero. But times have changed, and now only a prick of a needle and a few minutes of your time can do it.";
		$data['fburl'] = "https://www.bloomindia.in/be_a_superhero";
		
		
		
		
	    $this->load->view('public/view_welcome',$data);

	}
	
	function bombay_blood_group()
	{

	    $data = $this->general();

	    $data['pageName']    = "bombay_blood_group";

	    $data['pageTitle']   ='Blog - Bombay Blood Group';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/bombay_blood_group';

		
		
		
		
		$data['fbtitle'] = "BOMBAY BLOOD GROUP";
		$data['fbimage'] = "http://www.bloomindia.in/assets/public/img/blog3img.jpg";
		
		$data['fbdescription'] = "In 1952, Dr Y.M. Bhende, C.K. Deshpande and H.M. Bhatia of the Seth Gordhandas Sunderdas Medical College, Mumbai came across an injured railway worker and stab wound victim who needed blood tranfusion...";
		$data['fburl'] = "https://www.bloomindia.in/bombay_blood_group";
		
		
		
		
	    $this->load->view('public/view_welcome',$data);

	}
	
	
	function voluntary_blood_donation()
	{

	    $data = $this->general();

	    $data['pageName']    = "voluntary_blood_donation";

	    $data['pageTitle']   ='Blog - Gift to Life';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/voluntary_blood_donation';

	    
		
		
		
		
		
		$data['fbtitle'] = "Gift To Life: Voluntary Blood Donation";
		$data['fbimage'] = "http://www.bloomindia.in/assets/public/img/blog2img.jpg";
		
		$data['fbdescription'] = "Recently, one of our close friends Arjun (name changed) met with a road accident while returning back from office. A speeding car had lost its control and in turn hit his two-wheelers from behind...";
		$data['fburl'] = "http://www.bloomindia.in/voluntary_blood_donation";
	    
		$this->load->view('public/view_welcome',$data);
	}
	
	
	
	function biology_of_blood_groups()
	{

	    $data = $this->general();

	    $data['pageName']    = "biology_of_blood_groups";

	    $data['pageTitle']   ='Blog - Biology of Blood Groups';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/biology_of_blood_groups';
		
		
		
		
		$data['fbtitle'] = "BIOLOGY OF BLOOD GROUPS";
		$data['fbimage'] = "http://www.bloomindia.in/assets/public/img/blog1img.png";
		
		$data['fbdescription'] = "Blood consists of RBC( Red Blood Cells ), WBC( White Blood Cells )and Platelets in a fluid called Plasma. RBC and WBCs float in Plasma. Most of our blood consists of RBC.";
		$data['fburl'] = "http://www.bloomindia.in/biology_of_blood_groups";
	    $this->load->view('public/view_welcome',$data);

	}
	
	
	
	
	function partner()
	{
	    $data = $this->general();
	  
	    $data['pageName']    = "partner";
	    
		$data['pageTitle']   ='Partner';
		
			$this -> load -> library('pagination');
		$config = array();
		 
		  //deign for links
		  $config['full_tag_open'] = "<ul class='pagination'>";
		  $config['full_tag_close'] = '</ul>';
		  $config['num_tag_open'] = '<li>';
		  $config['num_tag_close'] = '</li>';
		  $config['cur_tag_open'] = '<li class="active"><a href="#">';
		  $config['cur_tag_close'] = '</a></li>';
		  $config['prev_tag_open'] = '<li>';
		  $config['prev_tag_close'] = '</li>';
		  $config['first_tag_open'] = '<li>';
		  $config['first_tag_close'] = '</li>';
		  $config['last_tag_open'] = '<li>';
		  $config['last_tag_close'] = '</li>';
		  $config['prev_link'] = 'Previous Page';
		  $config['prev_tag_open'] = '<li>';
		  $config['prev_tag_close'] = '</li>';
		  $config['next_link'] = 'Next Page';
		  $config['next_tag_open'] = '<li>';
		  $config['next_tag_close'] = '</li>';
		
		$config['base_url'] = site_url('partner/');
		$total = $this ->admin_model->get_partner_list_raw()->num_rows();
		$per_page = 12;
		$config['uri_segment'] = 2;
	  
		$config['total_rows'] = $total;
		$config['per_page'] = $per_page;
	  
  
  
		$this -> pagination -> initialize($config);
		$data['pagination'] = $this -> pagination -> create_links();
		  
		$data['get_partner_list'] = $this->db->order_by('id','desc')->get('partner', $config['per_page'], $this->uri->segment(2))->result();
	    
	    $data['metaKeywords'] ='';
	    
	    $data['metaDescription'] ='';
	    
	    $data['content'] = 'public/pages/partner';
	    
	    $this->load->view('public/view_welcome',$data);
	    
	}

	function add_partner()
	{
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
				'created_at'=>$created_at
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
		$data['content'] = 'public/pages/add_partner';

		
		if(sizeof($_FILES)>0)
		{
			$target_dir = "assets/public/uploadpartner/";
			$target_file = $target_dir . basename($_FILES["logo"]["name"]);
			move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);
		}

	    $this->load->view('public/view_welcome',$data);
	    
	}


	function partners()
	{

	    $data = $this->general();

	    $data['pageName']    = "partners";

	    $data['pageTitle']   ='Partners';

		$data['get_partner_list'] = $this->admin_model->get_partner_list();

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/partners';

	    $this->load->view('public/view_welcome',$data);	    

	}
		function partners_api()

	{

	    $data = $this->general();

	    $data['pageName']    = "partners_api";

	    $data['pageTitle']   ='Partners';

		$data['get_partner_list'] = $this->admin_model->get_partner_list();

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/partners';

	    $this->load->view('public/view_welcome',$data);	    

	}
	

    function add_testimonial()
	{
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
		$data['content'] = 'public/pages/add_testimonial';
	
	    $this->load->view('public/view_welcome',$data);
	    
	}
	
	function learnmore()
	{

	    $data = $this->general();

	    $data['pageName']    = "learnmore";

	    $data['pageTitle']   ='Learn More';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/learnmore';

	    $this->load->view('public/view_welcome',$data);

	}
	

	function refertofriend()
	{

	    $data = $this->general();

	    $data['pageName']    = "refertofriend";

	    $data['pageTitle']   ='Refer to friend';

	    $data['metaKeywords'] ='';

	    $data['metaDescription'] ='';

	    $data['content'] = 'public/pages/refertofriend';

	    $this->load->view('public/view_welcome',$data);

	}
}



/* End of file welcome.php */

/* Location: ./application/controllers/welcome.php */