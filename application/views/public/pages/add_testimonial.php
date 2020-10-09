
<div class="container">
<div class="add">
<?php if($message=='no'){?>
<br><br>

<div style="background-color: grey;margin-left:25%; width:50%; border:1px solid #727272">
<center><h4 class="mt-4 mb-3" style="color: white; font-size: 40px;" ><b>Want to give a Testimonial?</b> </h4></center>
</div>
       <form name="testimonial" method="post" enctype="multipart/form-data" style="background-color: #F1F1F1;color:#727272;margin-left:25%; width:50%; border:1px solid #727272;  
  padding:20px;" >
 
      
      
         <br>
        
            <div class="row part" style="color: black; font-size: 20px; font-weight: bold; ">
                <div class="col-lg-12  col-sm-12 col-md-12 col-xs-12 mb-4">
                	<div >Name<span style="color:red">*</span></div>
                    <div><input  type="text" name="name" class="form-control" placeholder=" Name" required></div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mb-4">
                	<div >Company</div>
                	<div><input  type="text" name="company" class="form-control" placeholder="Company" ></div>
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mb-4">
                	<div >Designation</div>
               		<div><input  type="text" name="designation" class="form-control" placeholder="Designation" ></div>
                </div>   
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mb-4">
                	<div>City<span style="color:red">*</span></div>
               		<div><input  type="text" name="city" class="form-control" placeholder="City" required></div>
                </div> 
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mb-4">
                	<div >Picture</div>
                	<div><input type="file" name="photo"  class="form-control" placeholder="" id="photo" ></div>
                </div>  
                <div class="col-lg-12 col-sm-12  col-md-12 col-xs-12 mb-4">
                	<div >Testimonial<span style="color:red">*</span></div>
               		<div><textarea name="testimonial" class="form-control" placeholder="Testimonial" required></textarea></div>
                </div>                                        
            </div>
                             
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 mb-4 ">
                    <div><input style="margin:20px; width:50%;margin-left:25%;background-color:#454545;color:white;" type="submit" name="submit" class="btn btn-lg" value="Add testimonial" style="cursor:pointer"></div>
                </div>
            </div>
           
	    </form>  
     

<?php }else if($message=='success'){?>

    <div class="succWrap" style="font-size:40px;">
	 <center>
	 <p style="color:darkgreen;font-size:30px; font-weight: bold;"></br>Testimonial Successfully Added</p>

    <button class="btn btn-lg" style="background-color:#454545;color:white;" onclick="window.location='<?php echo base_url();?>add_testimonial'">Add Another Testimonial</button>
	 
	 </center>
    </div>

<?php }else{?>

<?php }?>
    </br><br/>
    <center><a href='<?php echo base_url();?>'><img class="imagew" width=10% src='<?php echo public_img_url();?>home.png'></a></center>
</div>
</div>

