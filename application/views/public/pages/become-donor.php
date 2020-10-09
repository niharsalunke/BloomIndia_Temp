<div>

<?php 
if($message =='no')
{
?>
<!-- Page Heading/Breadcrumbs -->
<style>
	form
	{
		background-image: url('<?php echo public_img_url();?>heartoriginalll.png');
  		background-repeat: no-repeat; /* Do not repeat the image */
		background-size: 130%;
	}	
</style>
		
		<br>
        <div class="col-lg-12 mb-4">
        
		<div class="container-fluid">
		<br>

        <form name="donar" method="post" style="color:#727272; padding-left:20px; color:white; background-image: url('<?php echo public_img_url();?>bg1.jpg'); background-repeat: no-repeat; background-size: 100% 100%;" >
		<br>
		<h3 class="mt-4 mb-3" style = "padding-left:260px"><strong><u>Donor Pledge Form</u></strong></h3>
		<div class="row">
			<div class="col-lg-12 mb-4">
				<div style = "margin-top: 10px;">
					<div class="font-bold">
						<h4>
							<strong style="font-size:30px">If you are a COVID-19 Survivor, would you like to Donate Plasma?&nbsp;</strong>
							<label class="switch">
							<style>
							.switch {
							position: relative;
							display: inline-block;
							width: 40px;
							height: 20px;
							}

							.switch input { 
							opacity: 0;
							width: 0;
							height: 0;
							}

							.slider {
							position: absolute;
							cursor: pointer;
							top: 0;
							left: 0;
							right: 0;
							bottom: 0;
							background-color: #ccc;
							-webkit-transition: .4s;
							transition: .4s;
							}

							.slider:before {
							position: absolute;
							content: "";
							height: 20px;
							width: 20px;
							left: 0px;
							bottom: 0px;
							background-color: white;
							-webkit-transition: 0.5s;
							transition: 0.5s;
							}

							input:checked + .slider {
							background-color: #2196F3;
							}

							input:focus + .slider {
							box-shadow: 0 0 1px #2196F3;
							}

							input:checked + .slider:before {
							-webkit-transform: translateX(26px);
							-ms-transform: translateX(26px);
							transform: translateX(26px);
							}

							/* Rounded sliders */
							.slider.round {
							border-radius: 34px;
							}

							.slider.round:before {
							border-radius: 50%;
							}
							</style>
							<label class="switch">
							<input type="checkbox" unchecked name="condition3">
							<span class="slider round"></span>
							</label>						
						</h4>
					</div>
				</div>
			</div>
			</div>	
            <div class="row" style="margin-top: 10px;">
                <div class="col-lg-2 mb-4">
                    <div>
                    	<input type="text" name="fname" class="form-control" required placeholder="First Name *">
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                	<div>
						<input type="text" name="lname" class="form-control" required placeholder="Last Name *">
					</div>
                </div>
				<div class="col-lg-2 mb-4">
               		<div>
					   <input type="text" name="mobileno" class="form-control" required placeholder="Mobile Number *" pattern="[0-9]{10,10}" title="Please enter 10 numbers">
					</div>
                </div> 
			</div>

			<div class="row" style="margin-top: 5px;">	
				<div class="col-lg-2 mb-4">
                	<div>
						<br>
						<input type="email" name="emailid" class="form-control" required placeholder="Email-id *">
					</div>
                </div>
                <div class="col-lg-2 mb-4">
					<div style="color:white"> Date of Birth *</div>
                	<div>
						<input type="date" name="dob" class="form-control" required >
						</div>
                </div>                
                <div class="col-lg-2 mb-4">
               		<div style="color:white">Gender *</div>
                	<div>
                    	<select name="gender" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
							<option value="Others">Others</option>
                        </select>
               		</div>
                </div>               
			</div>

			<br>

			<div class="row" style="margin-top:0px;">
                <div class="col-lg-8 mb-4">
                	<div>
						<button style="background-color:#f0f0f5; border-radius: 5px; border: 0.5px solid #c2d6d6; color:black"  onclick= "alert('Please enter your Blood Group')" >Blood Group * </button>
					</div>
				
					<div style="margin-top: -10px;">
                       <ul class="donate-now"> 
						   <li>
								<input type="radio" id="A+ve" name="bloodgroup" value="A+VE" required/>
								<label style="color:white;" for="A+ve">A+ve</label>
							</li>
							<li>
								<input type="radio" id="A-ve" name="bloodgroup" value="A-VE" required/>
								<label style="color:white;" for="A-ve">A-ve</label>
							</li>
							<li>
								<input type="radio" id="B+ve" name="bloodgroup" value="B+VE" required/>
								<label style="color:white;" for="B+ve">B+ve</label>
							</li>
							<li>
								<input type="radio" id="B-ve" name="bloodgroup" value="B-VE" required/>
								<label style="color:white;" for="B-ve">B-ve</label>
							</li>
							<li>
								<input type="radio" id="O+ve" name="bloodgroup" value="O+VE" required/>
								<label style="color:white;" for="O+ve">O+ve</label>
							</li>
							<li>
								<input type="radio" id="O-ve" name="bloodgroup" value="O-VE" required/>
								<label style="color:white;" for="O-ve">O-ve</label>
							</li>
							<li>
								<input type="radio" id="AB+ve" name="bloodgroup" value="AB+VE" required/>
								<label style="color:white;" for="AB+ve">AB+ve</label>
							</li>
							<li>
								<input type="radio" id="AB-ve" name="bloodgroup" value="AB-VE" required/>
								<label style="color:white;" for="AB-ve">AB-ve</label>
							</li>
							<li>
								<input type="radio" id="Bombay" name="bloodgroup" value="Bombay" required/>
								<label style="color:white; padding-left: 8px;" for="Bombay" >Bombay</label>
							</li>
							<li>
								<input type="radio" id="Golden" name="bloodgroup" value="Golden" required/>
								<label style="color:white; padding-left: 10px;" for="Golden" >Golden</label>
							</li>
						</ul>
                	</div>
            </div>
			<div>
			</div>
			<div class="row" style="margin-top: 100px;"> 
			<br>               
                <div class="col-lg-6 mb-4">
                	<div style = "padding-left: 16px">
                		<input id="location" class="form-control" name="haddress" type="text" placeholder="Home Locality *" required>
                		<!-- <input type="text" name="hcity" class="form-control" placeholder="City"> -->
                	</div>
                </div>
			</div>

			<br>

			<div class="row">
                <div class="col-lg-6 mb-4">
                	<div style = "padding-left: 16px">
                		<input id="location2" name="waddress" class="form-control" type="text" placeholder="Work Locality *" required>
               			<!-- <input type="text" name="wcity" class="form-control" placeholder="City"> -->
               		</div>
                </div>                
            </div>

			<br>
			
				<div hidden class="row">
                <div class="col-lg-3 mb-3">
                	<div hidden>State<span style="color:red">*</span></div>
                    <div>
                    	<input hidden type="text" name="state" class="form-control" required placeholder="state" value= "Delhi">
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                	<div hidden>District<span style="color:red">*</span></div>
                    <div>
                    	<input hidden type="text" name="district" class="form-control" required placeholder="district" value= "Delhi">
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                	<div hidden>City<span style="color:red">*</span></div>
                    <div>
                    	<input hidden type="text" name="city" class="form-control" required placeholder="city" value= "Delhi">
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                	<div hidden>Pincode<span style="color:red">*</span></div>
                    <div>
                    	<input hidden type="number" name="pincode" class="form-control"  placeholder="pincode" value= "110001">
                    </div>
                </div>
            </div>
				
				
            <div class="row">
                <div class="col-lg-6 mb-4" style="padding-left:30px" >
                	<div class="font-bold"><strong>Would you donate for patients, on regular basis for Thalassemia, Sickle Cell Anaemia Patients ? *</strong>
					<label class="switch">
 					<style>
					.switch {
					position: relative;
					display: inline-block;
					width: 40px;
					height: 20px;
					}

					.switch input { 
					opacity: 0;
					width: 0;
					height: 0;
					}

					.slider {
					position: absolute;
					cursor: pointer;
					top: 0;
					left: 0;
					right: 0;
					bottom: 0;
					background-color: #ccc;
					-webkit-transition: .4s;
					transition: .4s;
					}

					.slider:before {
					position: absolute;
					content: "";
					height: 20px;
					width: 20px;
					left: 0px;
					bottom: 0px;
					background-color: white;
					-webkit-transition: 0.5s;
					transition: 0.5s;
					}

					input:checked + .slider {
					background-color: #2196F3;
					}

					input:focus + .slider {
					box-shadow: 0 0 1px #2196F3;
					}

					input:checked + .slider:before {
					-webkit-transform: translateX(26px);
					-ms-transform: translateX(26px);
					transform: translateX(26px);
					}

					/* Rounded sliders */
					.slider.round {
					border-radius: 34px;
					}

					.slider.round:before {
					border-radius: 50%;
					}
					</style>
					<label class="switch">
					<input type="checkbox" unchecked name="condition1">
					<span class="slider round"></span>
					</label>
				</div>
            </div>

			<br>
			<br>

			<div class="row">
                <div class="col-lg-4 mb-4" style="padding-left:45px">
                	<div class="font-bold"><strong>When was last time you donated blood ? * </strong></div>
				</div>
				<div class="col-lg-2 mb-4" style="width:200px">
                	<select style="border-radius: 40px; background-color:#f0f0f5;" name="condition2" class="form-control" required>
                        <option value="Before 3 Months">Before 3 Months</option>
                        <option value="After 3 Months">Within 3 Months</option>
                        <option value="Never">Never</option>
                    </select>
                </div>
            </div>

			<br>

			<div class="col-lg-12 mb-4">
                    <b style="padding-left:110px">Your information is extremely secured and is for Blood Donation purpose only.</b>
            </div>

        	<div class="col-lg-12 mb-4">
                    <b style="padding-left:210px">Thank you for being a Bloom member.</b>
            </div>

			<br>

			<div class="col-lg-12 mb-4" style = "padding-left: 270px; margin-top: 15px;" >
                    <input type="checkbox" required><a href="<?php echo base_url();?>terms" target="_black"><strong style="color:white">&nbsp;Terms & Conditions</strong></a>
            </div>
            
			<br>

            <div class="row">
                <div class="col-lg-8 mb-4 xs-12" >
                	<div style="padding-left: 60px">
                		<input style="width:60%; background-color:#f0f0f5; border-radius: 5px; border: 0.5px solid #c2d6d6; font-size:20px; color:black; " type="submit" name="submit"  value="I Agree to Pledge" style="cursor:pointer">
						<br>
					</div>
                </div>
            </div>
			<br>
		</form>
		</div>
		</div>
		<br>
			<form style="background-image: url('assets\\public\\img\\heartoriginalll.png'); background-repeat: no-repeat; background-size: 100%">
			<center>
			<div class="row">
				<div class="col-lg-12 mb-4">
					<h3 style ="color:#F67547;"><strong>Learn More about the Donation Procedures</strong></h3>
				</div>
				<br>
				<div class="row">
				<div class="col-lg-12 mb-4"  >
					<p style ="color:#F67547;"><strong>Click Anywhere<br><br></strong></p>
				</div>
				<div>
					<a href="https://www.bloomindia.in/learnmore"> <img src="assets\public\img\human.png" alt="Human Anatomy" width="35%"/></a>
				</div>
			</form>	
			<br>
			</center>
			<br>
			
</div>
</div>
<?php }
else if($message=='success'){?>
<div class="succWrap" style="color:#F67547;font-size:20px;">
	<center>
		<h1 style="color:#F67547;"><strong>Thank you for pledging <br> with Bloom India</strong></h1>
		<br>
		<h3 style="color:black;"><b>You just became someone's hero !<br>Spread the Word !</b></h3>
	</center>
	
	<br/>
	<center>
		<img width=35%  src="http://www.bloomindia.in/assets/public/herocards/<?php echo $pledged_id;?>pvcard.png">
	</center>
	<br>
	
	
	<br/>
	<center>
		<img width=35%  src="http://www.bloomindia.in/assets/public/herocards/<?php echo $pledged_id;?>.png">
	</center>
	<br>
	
	<center>
		<div>
			<h2><b><u>Share</u></b></h2>
			<br>
			<a style="background-color: #e6e6ff; width: 500px; border: 2px solid aliceblue;  padding: 20px; margin: 10px;" href="http://www.facebook.com/sharer.php?u=http://bloomindia.in/user_display/ "target="_blank"<?php echo $pledged_id;?>"><img src="assets\public\img\facebook.png" alt="Facebook" width="50px" /><b style="font-size: 30px;" >&nbsp;&nbsp;Share on Facebook</b></a> <a style="background-color: #e6e6ff; width: 500px; border: 2px solid aliceblue;; padding: 20px; margin: 10px;" href="http://twitter.com/share?url=http://bloomindia.in/user_display/"target="_blank"<?php echo $pledged_id;?>&amp;text=donate%20blood%20&amp;hashtags=donateblood"><img src="assets\public\img\twitter.png" alt="twitter" width="50px" /><b style="font-size: 30px;">&nbsp;&nbsp;Share  on  Twitter &nbsp;&nbsp;&nbsp;&nbsp;</b></a>
			<br>
			<br>
			<a  style="background-color: #e6e6ff; width: 500px; border: 2px solid aliceblue;; padding: 20px; margin: 10px;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://bloomindia.in/user_display/"target="_blank"<?php echo $pledged_id;?>" ><img src="assets\public\img\linkedin.png" alt="linkedin" width="50px" /><b style="font-size: 30px;">&nbsp;&nbsp;Share on LinkedIn&nbsp;&nbsp;</b></a><a  style="background-color: #e6e6ff; width: 500px; border: 2px solid aliceblue;; padding: 20px; margin: 10px;" href="http://instagram.com/pledgefordonation?igshid=1n21th7pof4xx" target="_blank"><img src="assets\public\img\instagram.png" alt="instagram" width="50px" /><b style="font-size: 30px;">&nbsp;&nbsp;Share on Instagram</b></a>
		</div>
	</center>

</div>
<br>
<br>
<script>
  var a2a_config = a2a_config || {};
  a2a_config.onclick = 1;
</script>
  
  <script async src="https://static.addtoany.com/menu/page.js"></script>


<?php }

else
{
	?>

<?php 
}
?>
</div>

<style>
   body
   {
       max-width: 100% !important;
       overflow-x:hidden !important;
   }
</style>