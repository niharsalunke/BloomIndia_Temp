
<section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1 >Be a Partner</h1><br>
      <h1 >Let's Save Lives Together!!</h1>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
    </div>
  </div>
</div>

</section>
<div class="container">
<div class="add">
<?php if($message=='no'){?>
<br><br>

<div style="background-color: grey;margin-left:25%; width:50%; border:1px solid black">
<center><h4 class="mt-4 mb-3" style="color: white; font-size: 40px;" ><b>Want to join  us as a Partner?</b> </h4></center>
</div>
       <form name="partner" method="post" enctype="multipart/form-data" style="background-color: #F1F1F1;color:#727272;margin-left:25%; width:50%; border:1px solid black;  
  padding:20px;" >
 
      
      
         <br>
        
            <div class="row part" style="color: black; font-size: 20px; font-weight: bold; ">
                <div class="col-lg-12  col-sm-12 col-md-12 col-xs-12 mb-4">
                	<div >Company Name<span style="color:red">*</span></div>
                    <div><input  type="text" name="name" class="form-control" placeholder="Company Name" required></div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mb-4">
                	<div >Address<span style="color:red">*</span></div>
                	<div><input  type="text" name="address" class="form-control" placeholder="Address" required></div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mb-4">
                	<div >Email<span style="color:red">*</span></div>
               		<div><input  type="email" name="email" class="form-control" placeholder="Email" ></div>
                </div>   
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mb-4">
                	<div >Industry<span style="color:red">*</span></div>
               		<div><input  type="text" name="industry" class="form-control" placeholder="Industry" ></div>
                </div>   
                <div class="col-lg-12 col-sm-12  col-md-12 col-xs-12 mb-4">
                	<div >Description<span style="color:red">*</span></div>
               		<div><input  type="text" name="description" class="form-control" placeholder="Description" ></div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mb-4">
                	<div >Logo<span style="color:red">*</span></div>
                	<div><input type="file" name="logo"  class="form-control" placeholder="" id="logo" accept="image/png, image/jpeg, image/jpg" required></div>
                </div>                                        
            </div>
                             
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mb-4 ">
                    <div><input style="margin:20px; width:50%;margin-left:25%;background-color:#454545;color:white;" type="submit" name="submit" class="btn btn-lg" value="Add Partner" style="cursor:pointer"></div>
                </div>
            </div>
           
	    </form>  
     

<?php }else if($message=='success'){?>

    <div class="succWrap" style="font-size:40px;">
	 <center>
	 <p style="color:darkgreen;font-size:30px; font-weight: bold;"></br>Partner Successfully Added</p>

    <button class="btn btn-lg" style="background-color:#454545;color:white;" onclick="window.location='<?php echo base_url();?>add_partner'">Add Another Partner</button>
    <button class="btn btn-lg" style="background-color:#454545;color:white;"  onclick="window.location='<?php echo base_url();?>partner'">Partner Page</button>
	 
	 </center>
    </div>

<?php }else{?>

<?php }?>
    </br><br/>
    <center><a href='<?php echo base_url();?>'><img class="imagew" width=10% src='<?php echo public_img_url();?>home.png'></a></center>
</div>
</div>

