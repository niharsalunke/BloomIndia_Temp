<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">

					<h2 class="page-title">Testimonial List</h2>

					<!-- Zero Configuration Table -->
					<div class="panel panel-default">
						<div class="panel-heading">Testimonial Info</div>
						<div class="panel-body table-responsive">							
							<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
									<th>#</th>
										<th>Name</th>
										<th>Company</th>
										<th>Designation</th>
										<th>City</th>
										<th>Created At</th>
										<th>Photo</th>
										<th>Testimonial</th>
										<th>Enable/Disable</th>
										<th>Action </th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1; foreach($get_testimonial_list as $el){?>
									<tr>
										<td><?php echo $i?></td>
										<td><?php echo $el->name;?></td>
										<td><?php echo $el->company;?></td>
										<td><?php echo $el->designation;?></td>
										<td><?php echo $el->city;?></td>
										<td><?php echo $el->created_at;?></td>
										<td><img width="200" src="<?php echo base_url('assets/public/uploadtestimonial/'.$el->photo); ?>"><?php echo $el->photo;?></td>
										<td><?php echo $el->testimonial;?></td>
										<td>
                                            <a style="cursor:pointer;" onclick="return testimonial_status('<?php echo $el->id;?>');">
                                            <i class="fa fa-dot-circle-o">  <?php echo $el->status;?></i></a>
                                        </td>
										<td>
											<a id="edit<?php echo $el->id;?>" style="cursor:pointer;" onclick="return delete_testimonial('<?php echo $el->id;?>');">
                             				<i class="fa fa-trash" style="color:red;"> Delete</i>
                                 			</a>
										</td>

									</tr>
								<?php $i++; }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>