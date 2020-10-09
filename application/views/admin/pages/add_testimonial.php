<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">


					<!-- Zero Configuration Table -->
					<div class="panel panel-default">
						<div class="panel-heading">Add Testimonial</div>
						<div class="panel-body">	
							<?php if($message=='no'){?>
							<!-- Page Heading/Breadcrumbs -->
							
								<form name="testimonial" method="post" enctype="multipart/form-data" ><strong>
									<div class="row part">
										<div class="col-lg-6 mb-4">
											<div >Name<span style="color:red">*</span></div>
										<div><input  type="text" name="name" class="form-control" placeholder="Name" required></div>
										</div>
										<div class="col-lg-6 mb-4">
											<div >Company</div>
											<div><input  type="text" name="company" class="form-control" placeholder="Company"></div>
										</div>
										<div class="col-lg-6 mb-4">
											<div >Designation</div>
											<div><input  type="text" name="designation" class="form-control" placeholder="Designation"></div>
										</div>   
										<div class="col-lg-6 mb-4">
											<div >City<span style="color:red">*</span></div>
											<div><input  type="text" name="city" class="form-control" placeholder="City" required></div>
										</div>
										<div class="col-lg-12 mb-4">
											<div >Photo</div>
											<div><input  type="file" name="photo" class="form-control" id="photo"></div>
										</div>    
										<div class="col-lg-12 mb-4">
											<div >Testimonial<span style="color:red">*</span></div>
											<div><textarea name="testimonial" class="form-control" placeholder="Testimonial" required></textarea></div>
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
							<?php }else if($message=='success'){?>
								<div class="succWrap" style="color:green;font-size:20px;">
									<center>
									<p style="color:green;font-size:20px;"></br>Testimonial Successfully Added</p>
									
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
</div>