<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">

					<h2 class="page-title">Events List</h2>

					<!-- Zero Configuration Table -->
					<div class="panel panel-default">
						<div class="panel-heading">Events Info</div>
						<div class="panel-body table-responsive">							
							<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
									<th>#</th>
										<th>Event Name</th>
										<th>Venue</th>
										<th>Event Date</th>
										<th>Contact Persons</th>
										<th>Created At</th>
										<th>Event Image</th>
										<th>Description</th>
										<th>Action </th>
										<th>Gallery </th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1; foreach($get_event_list as $el){?>
									<tr>
										<td><?php echo $i?></td>
										<td><?php echo $el->eventname;?></td>
										<td><?php echo $el->venue;?></td>
										<td><?php echo $el->eventdate;?></td>
										<td><?php echo $el->contactpersons;?></td>
										<td><?php echo $el->created_at;?></td>
										<td><img width="200" src="<?php echo base_url('assets/public/uploadevent/'.$el->eventimg); ?>"><?php echo $el->eventimg;?></td>
										<td><?php echo $el->eventdesc;?></td>
										<td>
                                            <a id="edit<?php echo $el->id;?>" style="cursor:pointer;" onclick="return delete_event('<?php echo $el->id;?>');">
                                 				<i class="fa fa-trash" style="color:red;"> Delete</i>
                                 			</a>
										</td>
										<td>
											<a style="cursor:pointer;" href='<?php echo base_url();?>index.php/welcome_admin/add_gallery/<?php echo $el->id;?>'>
											<i class="fa fa-dot-circle-o"> Gallery</i></a>
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