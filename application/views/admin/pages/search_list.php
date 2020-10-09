<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">

					<h2 class="page-title">SEEKER List</h2>

					<!-- Zero Configuration Table -->
					<div class="panel panel-default">
						<div class="panel-heading">SEEKER Info</div>
						<div class="panel-body table-responsive">							
							<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
									<th>#</th>
										<th>Seeker Name</th>
										<th>Email</th>
										<th>Description</th>
										<th>Blood Group</th>
										<th>Location</th>
										<th>Search Range</th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1; foreach($get_search_list as $dl){?>
									<tr>
										<td><?php echo $i?></td>
										<td>
											<i class="fa fa-user"></i> &nbsp; <?php echo $dl->seeker_name;?><br/>
											<i class="fa fa-phone"></i> &nbsp; <?php echo $dl->seeker_mobileno;?>
										</td>
										<td><?php echo $dl->seeker_emailid;?></td>
										<td><?php echo $dl->seeker_description;?></td>
										<td><?php echo $dl->bloodgroup; echo $dl->rh_factor;?></td>
										<td><?php echo $dl->location;?></td>
										<td><center><?php echo $dl->search_range;?> KM</center></td>
										<!--<td>
											<a id="edit<?php echo $dl->id;?>" style="cursor:pointer;" onclick="return delete_donor('<?php echo $dl->id;?>');">
                                 				<i class="material-icons" style="color:red;">delete</i>
                                 			</a>
										</td>-->
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