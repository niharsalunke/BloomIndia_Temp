<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">


					<!-- Zero Configuration Table -->
					<div class="panel panel-default">
						<div class="panel-heading">Add Event</div>
						<div class="panel-body">	
<?php if($message=='no'){?>
<!-- Page Heading/Breadcrumbs -->

<?php ?>
       
       <form name="event" method="post" enctype="multipart/form-data"><strong>
            <div class="row">
                <div class="col-lg-6 mb-4">
                	<div >Event Name<span style="color:red">*</span></div>
                    <div>
                    	<input type="text" name="eventname" class="form-control" placeholder="Event name" required>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                	<div >Venue<span style="color:red">*</span></div>
                	<div><input type="text" name="venue" class="form-control" placeholder="Venue" required></div>
                </div>
                <div class="col-lg-6 mb-4">
                	<div >Contact Persons<span style="color:red">*</span></div>
               		<div><input type="text" name="contactpersons" class="form-control" placeholder="Contact person" pattern="[0-9]{10,10}" required></div>
                </div>                
                              
                <div class="col-lg-6 mb-4">
                	<div >Event Date<span style="color:red">*</span></div>
                	<div><input type="date" name="eventdate" class="form-control" placeholder="" required></div>
                </div>    

				<div class="col-lg-12 mb-4">
                	<div >Event Image<span style="color:red">*</span></div>
                	<div><input type="file" name="eventimg" class="form-control" placeholder="" id="eventimg" required></div>
                </div> 
                
				<div class="col-lg-12 mb-4">
                	<div >Event Description<span style="color:red">*</span></div>
                	<div><textarea name="eventdesc" class="form-control" placeholder="Event description" required></textarea></div>
                </div> 

           </div>
           
     
          <div class="row">
                <div class="col-lg-12 mb-4">
                	<div><center>
                		</br><input style="width:50%;" type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></center>
                	</div>
                </div>
          </div>
	</form>   
<?php
}else if($message=='success'){?>
<div class="succWrap" style="color:green;font-size:20px;">
	 <center>
	 <p style="color:green;font-size:20px;"></br>Event Successfully Added</p>
	 
	 </center>
</div>

<?php }else{?>

<?php }?>
</div>
					</div>
				</div>
			</div>
		</div>
</div>

<div class="col-lg-12">
<br/><center><a href='<?php echo base_url();?>/dashboard'><img class="imagew" width=15% src='<?php echo public_img_url();?>home.png'></a></center>
</div>
</div>