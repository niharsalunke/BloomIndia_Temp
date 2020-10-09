<div class="container">
<!-- Page Heading/Breadcrumbs -->
       <center><h4 class="mt-4 mb-3" style="color:#727272">Donor Profile </h4></center>
       <form name="donar" method="POST" style="color:#727272;" action="/updateUser">
            <div class="row">
                <div class="col-lg-4 mb-4">
                	<div >First Name<span style="color:red">*</span></div>
                    <div>
                    	<input type="text" name="fname" class="form-control" required placeholder="First Name" value="<?php echo $userInfo['firstname']; ?>">
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                	<div >Last Name<span style="color:red">*</span></div>
                	<div><input type="text" name="lname" class="form-control" required placeholder="Last Name" value="<?php echo $userInfo['lastname']; ?>"></div>
                </div>
                <div class="col-lg-4 mb-4">
                	<div >Mobile Number<span style="color:red">*</span></div>
               		<div><input type="text" name="mobileno" class="form-control" required placeholder="10 digit mobile number" pattern="[0-9]{10,10}" title="Please enter 10 numbers" value="<?php echo $userInfo['phone_number']; ?>"></div>
                </div>                
                <div class="col-lg-4 mb-4">
                	<div >Email Id<span style="color:red">*</span></div>
                	<div><input type="email" name="emailid" class="form-control" required placeholder="name@gmail.com" value="<?php echo $userInfo['email']; ?>"></div>
                </div>                
                <div class="col-lg-4 mb-4">
                	<div >Date of Birth<span style="color:red">*</span></div>
                	<div><input type="date" name="dob" class="form-control" required  value="<?php echo $userInfo['dob']; ?>"></div>
                </div>                
                <div class="col-lg-4 mb-4">
               		<div >Gender<span style="color:red">*</span></div>
                	<div>
                    	<select name="gender" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Male"  <?php if($userInfo['gender'] == "male") echo 'selected'; ?>>Male</option>
                            <option value="Female" <?php if($userInfo['gender'] == "female") echo 'selected'; ?>>Female</option>
                        </select>
               		</div>
                </div>
           </div>
           <div class="row" style="margin-top:0px;">
                <div class="col-lg-4 mb-4">
                	<div>Blood Group:<span style="color:red">*</span></div>
					<div style="margin-top:-20px;">
                       <ul class="donate-now"> 
						   <li>
								<input type="radio" id="A+ve" name="bloodgroup" value="A/+VE"  <?php if($userInfo['bloodgroup'].$userInfo['rh_factor'] == "A/+VE") echo 'checked'; ?> required/>
								<label for="A+ve">A+ve</label>
							</li>
							<li>
						<input type="radio" id="A-ve" name="bloodgroup" value="A-VE" <?php if($userInfo['bloodgroup'].$userInfo['rh_factor'] == "A-VE") echo 'checked'; ?> required/>
						<label for="A-ve">A-ve</label>
					</li>
					<li>
						<input type="radio" id="B+ve" name="bloodgroup" value="B+VE" <?php if($userInfo['bloodgroup'].$userInfo['rh_factor'] == "B+VE") echo 'checked'; ?>  required/>
						<label for="B+ve">B+ve</label>
					</li>
					<li>
						<input type="radio" id="B-ve" name="bloodgroup" value="B-VE" <?php if($userInfo['bloodgroup'].$userInfo['rh_factor'] == "B-VE") echo 'checked'; ?>  required/>
						<label for="B-ve">B-ve</label>
					</li>
					<li>
						<input type="radio" id="O+ve" name="bloodgroup" value="O+VE" <?php if($userInfo['bloodgroup'].$userInfo['rh_factor'] == "O+VE") echo 'checked'; ?>  required/>
						<label for="O+ve">O+ve</label>
					</li>
					<li>
						<input type="radio" id="O-ve" name="bloodgroup" value="O-VE" <?php if($userInfo['bloodgroup'].$userInfo['rh_factor'] == "O-VE") echo 'checked'; ?>  required/>
						<label for="O-ve">O-ve</label>
					</li>
					<li>
						<input type="radio" id="AB+ve" name="bloodgroup" value="AB+VE"  <?php if($userInfo['bloodgroup'].$userInfo['rh_factor'] == "AB+VE") echo 'checked'; ?> required/>
						<label for="AB+ve">AB+ve</label>
					</li>
					<li>
						<input type="radio" id="AB-ve" name="bloodgroup" value="AB-VE"  <?php if($userInfo['bloodgroup'].$userInfo['rh_factor'] == "AB-VE") echo 'checked'; ?> required/>
						<label for="AB-ve">AB-ve</label>
					</li>
						</ul>
                	</div>
                </div>                
                <div class="col-lg-4 mb-4">
                	<div >Home Locality<span style="color:red">*</span></div>
                	<div>
                		<input id="location" class="form-control" name="haddress" type="text" placeholder="Address" value="<?php echo $userInfo['home_address']; ?>" required>
                		<!-- <input type="text" name="hcity" class="form-control" placeholder="City"> -->
                	</div>
                </div>
                <div class="col-lg-4 mb-4">
                	<div >Work Locality<span style="color:red">*</span></div>
                	<div>
                		<input id="location2" name="waddress" class="form-control" type="text" placeholder="Address" value="<?php echo $userInfo['work_address']; ?>" required>
               			<!-- <input type="text" name="wcity" class="form-control" placeholder="City"> -->
               		</div>
                </div>                
           </div>
           
           <div class="row">
				
                <div class="col-lg-5 mb-4"  >
                	<div class="font-bold">Would you donate for patients, on regular basis for Thalassemia, Sickle Cell Anemia Patients? <span style="color:red">*</span></div>
                </div>
                <div class="col-lg-1 mb-4" >
                	<select name="condition1" class="form-control" required>
                        <option value="yes" <?php if($userInfo['question'] == "yes") echo 'selected'; ?>>Yes</option>
                        <option value="no" <?php if($userInfo['question'] == "no") echo 'selected'; ?>>No</option>
                    </select>
                </div>
           
                <div class="col-lg-4 mb-4">
                	<div class="font-bold">When was the last time you donated blood ?<span style="color:red">*</span></div>
                </div>
				<div class="col-lg-2"></div>
                <div class="col-lg-2 mb-4">
                	<select name="condition2" class="form-control" required>
                        <option value="Before 3 Months" <?php if($userInfo["when_u_donote"] == "Before 3 Months") echo 'selected'; ?>">Before 3 Months</option>
                        <option value="After 3 Months" <?php if($userInfo["when_u_donote"] == "After 3 Months") echo 'selected'; ?>>With in 3 Months</option>
                        <option value="Never" <?php if($userInfo['when_u_donate'] == "Never") echo 'selected'; ?>>Never</option>
                    </select>
                </div>
          </div>
          <center>
              <div class="col-lg-12 mb-4">
                    <p style="color:green;">Your information is extremely secured and for blood donation only.</p>
                    <b style="color:green;">Thank you for being a Bloom member.</b>
              </div>
			  <div class="col-lg-12 mb-4">
                    <input type="checkbox" required><a href="<?php echo base_url();?>terms" target="_black">Terms & Conditions</a>
              </div>
          </center>
          <div class="row">
                <div class="col-lg-12 mb-4 xs-12">
                	<div><center>
                		<input style="width:40%;" type="submit" name="submit" class="btn btn-primary" value="Update" style="cursor:pointer"></center>
                	</div>
                </div>
          </div>
	</form>   
<style>
   body{
       max-width: 100% !important;
       overflow-x:hidden !important;


   }
</style>