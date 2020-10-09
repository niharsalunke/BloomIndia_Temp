<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">


					<!-- Zero Configuration Table -->
					<div class="panel panel-default">
						<div class="panel-heading">Donors Registration form</div>
						<div class="panel-body">	
<?php if($message=='no'){?>
<!-- Page Heading/Breadcrumbs -->
       
       <form name="donar" method="post"><strong>
            <div class="row">
                <div class="col-lg-4 mb-4">
                	<div >First Name<span style="color:red">*</span></div>
                    <div>
                    	<input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                	<div >Last Name<span style="color:red">*</span></div>
                	<div><input type="text" name="lname" class="form-control" placeholder="Last Name" required></div>
                </div>
                <div class="col-lg-4 mb-4">
                	<div >Mobile Number<span style="color:red">*</span></div>
               		<div><input type="number" name="mobileno" class="form-control" placeholder="Mobile Number" required ></div>
                </div>                
                <div class="col-lg-4 mb-4">
                	<div >Email Id<span style="color:red">*</span></div>
                	<div><input type="email" name="emailid" class="form-control" placeholder="Email Id" required></div>
                </div>                
                <div class="col-lg-4 mb-4">
                	<div >Date of Birth<span style="color:red">*</span></div>
                	<div><input type="date" name="dob" class="form-control" placeholder="" required></div>
                </div>                
                <div class="col-lg-4 mb-4">
               		<div >Gender<span style="color:red">*</span></div>
                	<div>
                    	<select name="gender" class="form-control" required>
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
               		</div>
                </div>
           </div>
           <div class="row">
                <div class="col-lg-4 mb-4">
                	<div></br>Blood Group:<span style="color:red">*</span>
                        <label ><input type="radio" name="bloodgroup" value="A" required>&nbsp;A</label> &nbsp; 
                        <label ><input type="radio" name="bloodgroup" value="B" required>&nbsp;B</label> &nbsp; 
                        <label ><input type="radio" name="bloodgroup" value="O" required>&nbsp;O</label> &nbsp; 
                        <label><input type="radio" name="bloodgroup" value="AB" required>&nbsp;AB</label>
               			<br/>Rh Factor:<span style="color:red">*</span>&nbsp;&nbsp;
                        <label ><input type="radio" name="rhfactor" value="+VE" required>&nbsp;+VE</label>&nbsp; 
                        <label ><input type="radio" name="rhfactor" value="-VE" required>&nbsp;-VE</label>
                	</div>
                </div>                
                <div class="col-lg-4 mb-4">
                	<div >Home Locality<span style="color:red">*</span></div>
                	<div>
                		<input id="location" class="form-control" name="haddress" type="text" placeholder="Home Locality" required>
                		<!-- <input type="text" name="hcity" class="form-control" placeholder="City"> -->
                	</div>
                </div>
                <div class="col-lg-4 mb-4">
                	<div >Work Locality<span style="color:red">*</span></div>
                	<div>
                		<input id="location2" name="waddress" class="form-control" type="text" placeholder="Work Locality" required>
               			<!-- <input type="text" name="wcity" class="form-control" placeholder="City"> -->
               		</div>
                </div>      
                <br/>          
           </div>
           <div class="row">
                <div class="col-lg-10 mb-4">
                	<div class="">Would you like to donate for patients who need blood on regular basis like Thalassimia,Sickle Cell Anemia Patients ? <span style="color:red">*</span></div>
                </div>
                <div class="col-lg-2 mb-4">
                	<select name="condition1" class="form-control" required>
                        <option value="">Select like to donate</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
           </div>
           <div class="row">
                <div class="col-lg-4 mb-4">
                
                	<div class="font-bold"><br/>When You Recently Donate Blood ?<span style="color:red">*</span></div>
                </div>
                <div class="col-lg-2 mb-4">
                	<select name="condition2" class="form-control" required>
                        <option value="">When You Recently Donate Blood ?</option>
                        <option value="Before 3 Months">Before 3 Months</option>
                        <option value="After 3 Months">With in 3 Months</option>
                        <option value="Never">Never</option>
                    </select>
                </div>
          </div>
          <center>
              <div class="col-lg-12 mb-4">
                    <p style="color:green;">Your information is extremely secure with us. We will not be using it for any other purpose.</p>
                    <p style="color:green;">THANKS FOR BEING PART OF BLOOM FAMILY.</P>
              </div>
          </center>
          <div class="row">
                <div class="col-lg-12 mb-4">
                	<div><center>
                		<input style="width:50%;" type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></center>
                	</div>
                </div>
          </div>
	</form>   
<?php }else if($message=='success'){?>
<div class="succWrap" style="color:green;font-size:20px;">
	 <center>
	 <p style="color:green;font-size:20px;"></br>Your Details have been added.Someone from <b>BLOOM </b>will get in touch with you in case someone needs your blood group.</p><b>THANKS</b></br><h1><?php echo $firstname;?></h1> For volunteering to Donate
	 </br><img src="<?php echo public_img_url();?>coupon.png" alt="Coupon" >
	 </center>
</div>

<?php }else{?>

<?php }?>
</div>
					</div>
				</div>
			</div>
		</div>
</div></div>