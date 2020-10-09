<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_api extends CI_Controller {


 /*   function registration()
	{
	    if(sizeof($_POST)>0){
	        $firstname = $this->input->post('firstname');
    	    $lastname = $this->input->post('lastname');
    	    $dob = $this->input->post('dob');
    	    $bloodgroup = $this->input->post('bloodgroup');
    	    $rh_factor = $this->input->post('rh_factor');
    	    $phone_number = $this->input->post('phone_number');
    	    $email = $this->input->post('email');
    	    $when_u_donote = $this->input->post('when_u_donote');
    	    $home_address = $this->input->post('home_address');
    	    $home_address_latitude = $this->input->post('home_address_latitude');
    	    $home_address_longitude = $this->input->post('home_address_longitude');
    	    $work_address = $this->input->post('work_address');
    	    $work_address_latitude = $this->input->post('work_address_latitude');
    	    $work_address_longitude = $this->input->post('work_address_longitude');	   
    	    $question = $this->input->post('question');
    	    $created_at = $this->input->post('created_at');
			$gender = $this->input->post('gender');
    	    
    	    
    	    if($firstname==''){
    	        $message = 'Please send firstname..';
    	        $status = '400';
    	    }else if($lastname==''){
    	        $message = 'Please send lastname..';
    	        $status = '400';
    	    }else if($dob==''){
    	        $message = 'Please send dob..';
    	        $status = '400';
    	    }else if($bloodgroup==''){
    	        $message = 'Please send bloodgroup..';
    	        $status = '400';
    	    }else if($rh_factor==''){
    	        $message = 'Please send rh_factor..';
    	        $status = '400';
    	    }else if($phone_number==''){
    	        $message = 'Please send phone_number..';
    	        $status = '400';
    	    }else if($email==''){
    	        $message = 'Please send email..';
    	        $status = '400';
    	    }else if($when_u_donote==''){
    	        $message = 'Please send when_u_donote..';
    	        $status = '400';
    	    }else if($home_address==''){
    	        $message = 'Please send home_address..';
    	        $status = '400';
    	    }else if($home_address_latitude==''){
    	        $message = 'Please send ..';
    	        $status = '400';
    	    }else if($home_address_longitude==''){
    	        $message = 'Please send home_address_longitude..';
    	        $status = '400';
    	    }else if($work_address==''){
    	        $message = 'Please send work_address..';
    	        $status = '400';
    	    }else if($work_address_latitude==''){
    	        $message = 'Please send work_address_latitude..';
    	        $status = '400';
    	    }else if($work_address_longitude==''){
    	        $message = 'Please send work_address_longitude..';
    	        $status = '400';
    	    }else if($question==''){
    	        $message = 'Please send question..';
    	        $status = '400';
    	    }else if($created_at==''){
    	        $message = 'Please send created_at..';
    	        $status = '400';
    	    }else if($gender==''){
    	        $message = 'Please send gender..';
    	        $status = '400';
    	    }else if($rh_factor!='+VE' && $rh_factor!='-VE'){
    	        $message = 'Please send valid rh_factor value like +VE or -VE..';
    	        $status = '400';
    	    }else{	        
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
    	        $insert = $this->api_model->registration($register);
    	        if($insert=='no'){
    	            $message ='Please retry some technical issue...!';
    	            $status = '500';
    	        }else{
    	            $message ='success';
    	            $status = '200';
    	        }
    	    }
	    
    	    echo '{"status":"'.$status.'","message":"'.$message.'"}';
	    
	        
	    }else{
	       echo '{"status":"400","message":"Please Send me proper format"}';
	   }

    }
    
    function search_donor()
    {
        if(sizeof($_POST)>0){
            $blood_group = $this->input->post('blood_group');
            $rh_factor = $this->input->post('rh_factor');
            $search_range = $this->input->post('search_range');
            $location = $this->input->post('location');
            $latitude = $this->input->post('latitude');
            $longitude = $this->input->post('longitude');
            $description = $this->input->post('description');
            
            
            if($blood_group==''){
                $message = 'Please send blood_group..';
                $status = '400';
				$sr='[]';
            }else if($rh_factor==''){
                $message = 'Please send rh_factor..';
                $status = '400';
				$sr='[]';
            }else if($search_range==''){
                $message = 'Please send search_range..';
                $status = '400';
				$sr='[]';
            }else if($location==''){
                $message = 'Please send location..';
                $status = '400';
				$sr='[]';
            }else if($longitude==''){
                $message = 'Please send longitude..';
                $status = '400';
				$sr='[]';
            }else if($latitude==''){
                $message = 'Please send latitude..';
                $status = '400';
				$sr='[]';
            }else{
                $search_donor = array(
                    'bloodgroup'=>$blood_group,
                    'rh_factor'=>$rh_factor,
                    'distance'=>$search_range,
                    'location'=>$location,
                    'latitude'=>$latitude,
                    'longitude'=>$longitude
                );
                $search_result = $this->api_model->search_donor($search_donor);
				$search_result_w = $this->api_model->search_donor_w($search_donor);
				//$search_result_work = $this->api_model->search_donor_work($search_donor);
				//print_r($search_result);exit;
                if($search_result=='no'){
                    $message ='Sorry Donors Not Available, Please Try Different location';
                    $status = '400';
					$sr='[]';
                }else{
                    $message ='success';
                    $status = '200';
					$sr=json_encode(array_merge($search_result,$search_result_w));
                } 
               
               // $search_result='[{	"id": "1123","name":"veerendra"},{	"id": "1123","name":"veerendra"},{	"id": "1123","name":"veerendra"}]';
            }
            
            echo '{"status":"'.$status.'","message":"'.$message.'","search_result":'.$sr.'}';
            
            
        }else{
            echo '{"status":"400","message":"Please Send me proper format","search_result":[]}';
        }
        
    }
	function reach_out()
	{
		if(sizeof($_POST)>0){
			$seeker_name=$this->input->post('seeker_name');
			$seeker_mobileno=$this->input->post('seeker_mobileno');
			$seeker_emailid=$this->input->post('seeker_emailid');
			$seeker_description=$this->input->post('seeker_description');
			$seeker_selected_emails=$this->input->post('seeker_selected_emails');
			$seeker_selected_sms=$this->input->post('seeker_selected_sms');
			$blood_group = $this->input->post('blood_group');
            $rh_factor = $this->input->post('rh_factor');
            $search_range = $this->input->post('search_range');
            $location = $this->input->post('location');
            $latitude = $this->input->post('latitude');
            $longitude = $this->input->post('longitude');
            $description = $this->input->post('seeker_description');

			date_default_timezone_set("Asia/Kolkata");
			$created_at = date('Y-m-d h:s:i');
			if($seeker_name==''){
                $message = 'Please send seeker_name..';
                $status = '400';
            }else if($seeker_mobileno==''){
                $message = 'Please send seeker_mobileno..';
                $status = '400';
            }else if($seeker_emailid==''){
                $message = 'Please send seeker_emailid..';
                $status = '400';
            }else if($seeker_description==''){
                $message = 'Please send seeker_description..';
                $status = '400';
            }else if($seeker_selected_emails==''){
                $message = 'Please send seeker_selected_emails..';
                $status = '400';
            }else if($seeker_selected_sms==''){
                $message = 'Please send seeker_selected_sms..';
                $status = '400';
            }else if($blood_group==''){
                $message = 'Please send blood_group..';
                $status = '400';
            }else if($rh_factor==''){
                $message = 'Please send rh_factor..';
                $status = '400';
            }else if($search_range==''){
                $message = 'Please send search_range..';
                $status = '400';
            }else if($location==''){
                $message = 'Please send location..';
                $status = '400';
            }else if($longitude==''){
                $message = 'Please send longitude..';
                $status = '400';
            }else if($latitude==''){
                $message = 'Please send latitude..';
                $status = '400';
            }else{
                $seeker_search_data = array(
                    'seeker_name'=>$seeker_name,
                    'seeker_mobileno'=>$seeker_mobileno,
                    'seeker_emailid'=>$seeker_emailid,
                    'seeker_description'=>$seeker_description,
                    'seeker_selected_emails'=>$seeker_selected_emails,
                    'seeker_selected_sms'=>$seeker_selected_sms,
					'bloodgroup'=>$blood_group,
                    'rh_factor'=>$rh_factor,
                    'search_range'=>$search_range,
                    'location'=>$location,
                    'latitude'=>$latitude,
                    'longitude'=>$longitude,
					'created_at'=>$created_at
                );
                $insert_seeker_search_data = $this->api_model->seeker_search_data($seeker_search_data);
				//print_r($search_result);exit;
                if($insert_seeker_search_data=='no'){
    	            $message ='Please retry some technical issue...!';
    	            $status = '500';
    	        }else{
    	            $message ='success';
    	            $status = '200';
					
					 // Php Mail Configaration 
					 $de =$seeker_selected_emails;
					    $to = 'help@bloomindia.in';//$de;
						//echo $to;
						$subject = "Urgent ".$blood_group." ".$rh_factor." Blood Required @ ".$location."";
						$message1 = "<html>
										<body>
											<h2>Dear Donor!</h2>
											<h1 style='color:red'>Urgent Blood Required ".$blood_group." ".$rh_factor."</h1>
											<table style='padding:10px'>												
												<tr>
													<td>Donee Name :</td>
													<td>".$seeker_name."</td>
												</tr>
												<tr>
													<td>Donee Mobile Number :</td>
													<td><a href='mailto:".$seeker_mobileno."'>".$seeker_mobileno."</a></td>
												</tr>
												<tr>
													<td>Donee Email ID:</td>
													<td><a href='mailto:".$seeker_emailid."'>".$seeker_emailid."</a></td>
												</tr>
												<tr>
													<td>Blood Group Needed:</td>
													<td><b style='color:red;'>".$blood_group." " .$rh_factor."<b></td>
												</tr>
												<tr>
													<td>Location:</td>
													<td>".$location."</td>
												</tr>
												<tr>
													<td>Description:</td>
													<td>".$seeker_description."</td>
												</tr>
											</table>
											<h4>Thanks,<br/>Team BLOOM India</h4>
											<!--<img src='https://www.bloomindia.in/assets/public/img/logonew.png' width='20%'>-->
										</body>
									</html>
									";

						// Always set content-type when sending HTML email
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers .= "Bcc: ".$de."\r\n";
						// More headers
						$headers .= 'From: BLOOM INDIA <help@bloomindia.in>' . "\r\n";
						//$headers .= 'Cc: help@bloomindia.in' . "\r\n";

						$sent = mail($to,$subject,$message1,$headers);

						if($sent=='true'){
							 //echo "Message sent successfully... We will contact you with in 24 hrs";
						}else{
							// echo "Message could not be sent...";
						}


						//********************** SMS SENDING WRITTEN BY VEERENDRA KUMAR		 *****
		


						//$sms_message =urlencode("Name: ".$seeker_name."\nBlood Group: ".$blood_group." ".$rh_factor."\nPh# ".$seeker_mobileno."\nAddress: ".$location."\nDesc: ".$seeker_description."");
						$sms_message =urlencode("BLOOM ALERT \n".$seeker_name. " needs ".$blood_group." ".$rh_factor." @ ".$location." Call ".$seeker_mobileno.".  ".$seeker_description."");
						//echo $sms_message;exit;
						//echo $seeker_selected_sms;
						$sms_list = str_replace(',','","',$seeker_selected_sms);
						$curl = curl_init();

						  curl_setopt_array($curl, array(
						  CURLOPT_URL => "http://api.msg91.com/api/v2/sendsms",
						  CURLOPT_RETURNTRANSFER => true,
						  CURLOPT_ENCODING => "",
						  CURLOPT_MAXREDIRS => 10,
						  CURLOPT_TIMEOUT => 30,
						  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
						  CURLOPT_CUSTOMREQUEST => "POST",
						  //*CURLOPT_POSTFIELDS => "{ \"sender\": \"BLOOOM\", \"route\": \"4\", \"country\": \"91\", \"sms\": [ { \"message\": \"Name: ".$seeker_name."      Blood Group: ".$bloodgroup." ".$rh_factor."     Ph# ".$seeker_mobileno."        Address: ".$Address."       Desc: ".$seeker_description."\", \"to\": [ \"8686056016\", \"\" ] } ] }",

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
						  //echo "cURL Error #:" . $err;
						} else {
						  //echo $response;
						}

    	        }
			}
			echo '{"status":"'.$status.'","message":"'.$message.'"}';
		}else{
			 echo '{"status":"400","message":"Please Send me proper format"}';
		}
	}


	function test_api()
	{
		$id = $this->input->post('id');
		if($id==''){
			echo '{"message":"Please send ID...!"}';
		}else{
			//echo $id;exit;
			$info = $this->api_model->info($id);		
			echo json_encode($info);
		}
	}*/
	
	function add_partner()
	{

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
	            echo 'Please retry some technical issue...!';
	            
	        }else{
	            echo 'Information added successfully!!';
	        }
	    }else{
	        echo false;
	    }
		
		if(sizeof($_FILES)>0)
		{
			$target_dir = "assets/public/uploadpartner/";
			$target_file = $target_dir . basename($_FILES["logo"]["name"]);
			move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file);
		}
	    
	}
	
	function register_donor()
  {

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
		// echo $home_address_longitude;exit;
		$insert = $this->public_model->registration($register);
		if($insert=='no'){
		echo 'Please retry some technical issue...!';
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
    
         
			//Saving Image
			$image = 'assets/public/privilagecard/'.$cardno.'.png';
			$temp=imagepng($template,$image);
			
			echo $temp;
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
			$file_to_attach1 = 'assets/public/img/PrivilegeCard.png'; //path to the pdf file 
			$file_to_attach2 = 'assets/public/img/PrivilegeCardBackside.png';
			$mail->AddAttachment( $file_to_attach1 , 'PrivilegeCard.png' ); //name of the pdf file while in the attachment 
			$mail->AddAttachment( $file_to_attach2 , 'PrivilegeCardBackside.png' ); //
			 if(!$mail->Send()) {
				echo "Mailer Error: " . $mail->ErrorInfo;
				echo $mail->ErrorInfo;
			 } 

			/////////
			
	    }
	    echo true;
	}else{
	echo false;
	}

  } 
  
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */