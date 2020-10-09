<div class="content-wrapper">
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">

				<h2 class="page-title">Offers List</h2>

				<!-- Zero Configuration Table -->
				<div class="panel panel-default">
					<div class="panel-heading">Offers Info</div>
					<div class="panel-body table-responsive">							
						<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
							<thead>
								<tr>
								<th>#</th>
									<th>Company Name</th>
									<th>Product Name</th>
									<th>Created At</th>
									<th>Strike Ratings</th>
									<th>Ratings</th>
									<th>Starting Date</th>
									<th>Ending Date</th>
									<th>Image</th>
									<th>Description</th>
									<th>Action </th>
								</tr>
							</thead>
							<tbody>
							<?php $i=1; foreach($get_offer_list as $ol){?>
								<tr>
									<td><?php echo $i?></td>
									<td><?php echo $ol->companyname;?></td>
									<td><?php echo $ol->productname;?></td>
									<td><?php echo $ol->created_at;?></td>
									<td><?php echo $ol->srating;?></td>
									<td><?php echo $ol->ratings;?></td>
									<td><?php echo $ol->startdate;?></td>
									<td><?php echo $ol->enddate;?></td>
									<td><img width="250" height="200" src="<?php echo base_url();?>/assets/public/uploadoffer/<?php echo $ol->offerimg?>"></td>
									<td><?php echo $ol->offerdesc;?></td>
									<td>
										<a id="edit<?php echo $ol->id;?>" style="cursor:pointer;" onclick="return delete_offer('<?php echo $ol->id;?>');">
										<i class="fa fa-trash" style="color:red;"> Delete</i></a>
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