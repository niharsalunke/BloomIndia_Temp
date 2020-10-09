<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">


					<!-- Zero Configuration Table -->
					<div class="panel panel-default">
						<div class="panel-heading">Add Partner</div>
						<div class="panel-body">	
							<?php if($message=='no'){?>
							<!-- Page Heading/Breadcrumbs -->
							
								<form name="partner" method="post" enctype="multipart/form-data" ><strong>
									<div class="row part">
										<div class="col-lg-6 mb-4">
											<div >Company Name<span style="color:red">*</span></div>
										<div><input  type="text" name="name" class="form-control" placeholder="Company Name" required></div>
										</div>
										<div class="col-lg-6 mb-4">
											<div >Address<span style="color:red">*</span></div>
											<div><input  type="text" name="address" class="form-control" placeholder="Address" required></div>
										</div>
										<div class="col-lg-6 mb-4">
											<div >Email<span style="color:red">*</span></div>
											<div><input  type="email" name="email" class="form-control" placeholder="Email" required></div>
										</div>   
										<div class="col-lg-6 mb-4">
											<div >Industry<span style="color:red">*</span></div>
											<div><input  type="text" name="industry" class="form-control" placeholder="Industry" required></div>
										</div>
										<div class="col-lg-12 mb-4">
											<div >Logo<span style="color:red">*</span></div>
											<div><input  type="file" name="logo" class="form-control" placeholder="" id="logo" required></div>
										</div>    
										<div class="col-lg-12 mb-4">
											<div >Description<span style="color:red">*</span></div>
											<div><input  type="text" name="description" class="form-control" placeholder="Description" required></div>
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
									<p style="color:green;font-size:20px;"></br>Partner Successfully Added</p>
									
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