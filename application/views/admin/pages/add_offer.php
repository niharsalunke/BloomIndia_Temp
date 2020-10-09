<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">


				<!-- Zero Configuration Table -->
				<div class="panel panel-default">
					<div class="panel-heading">Add Offer</div>
						<div class="panel-body">	
							<?php if($message=='no'){?>
							<!-- Page Heading/Breadcrumbs -->
								
								<form name="offer" method="post" enctype="multipart/form-data"><strong>
									<div class="row">
										<div class="col-lg-6 mb-6">
											<div >Add Company Name<span style="color:red">*</span></div>
											<div><input type="text" name="companyname" class="form-control" placeholder="Enter Company Name here..." required></div>
										</div>
										<div class="col-lg-6 mb-6">
											<div >Add Product Name<span style="color:red">*</span></div>
											<div><input type="text" name="productname" class="form-control" placeholder="Enter Product Name here..." required></div>
										</div>
										<div class="col-lg-6 mb-6">
											<div >Add Striked Rating <span style="color:red">*</span></div>
											<div><input type="text" name="srating" class="form-control" placeholder="Enter Rating here..." required></div>
										</div>
										<div class="col-lg-6 mb-6">
											<div >Add Rating <span style="color:red">*</span></div>
											<div><input type="text" name="ratings" class="form-control" placeholder="Enter Rating here..." required></div>
										</div>
										<div class="col-lg-6 mb-6">
											<div >Add Starting Date <span style="color:red">*</span></div>
											<div><input type="date" name="startdate" class="form-control" required></div>
										</div>
										<div class="col-lg-6 mb-6">
											<div >Add Ending Date <span style="color:red">*</span></div>
											<div><input type="date" name="enddate" class="form-control" required></div>
										</div>
										<div class="col-lg-12  mb-4">
											<div >Offer Image<span style="color:red">*</span></div>
											<div><input type="file" name="offerimg" class="form-control" placeholder="" id="eventimg" required></div>
										</div>
										<div class="col-lg-12 mb-4">
											<div >Offer Description<span style="color:red">*</span></div>
											<div><textarea name="offerdesc" class="form-control" placeholder="Offer description" required></textarea></div>
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
									<p style="color:green;font-size:20px;"></br>Offer Successfully Added</p>
									
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