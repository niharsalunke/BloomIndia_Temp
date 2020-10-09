<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">

					<h2 class="page-title">Donors List</h2>

					<!-- Zero Configuration Table -->
					<div class="panel panel-default">
						<div class="panel-heading">Donors Info</div>
						<div class="panel-body table-responsive">	
						
							<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Email</th>
										<th>Gender</th>
										<th>Blood Group</th>
										<th>HomeAddress</th>
										<th>WorkAddress</th>
										<th>Created At</th>
										<th>Action </th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1; foreach($get_donors_list as $dl){?>
									<tr>
										<td><?php echo $i?></td>
										<td>
											<i class="fa fa-user"></i> &nbsp;<?php echo $dl->firstname;?> <?php echo $dl->lastname;?><br/>
											<i class="fa fa-phone"></i> &nbsp; <?php echo $dl->phone_number;?>
										</td>
										<td><?php echo $dl->email;?></td>
										<td><?php echo $dl->gender;?></td>
										<td><?php echo $dl->bloodgroup; echo $dl->rh_factor;?></td>
										<td><?php echo $dl->home_address;?>
											<!--<a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo $dl->home_address;?>">
												<?php $ad = explode(',',$dl->home_address);?><?php echo $ad[0];?>..</a>-->
										</td>
										<td><?php echo $dl->work_address;?></td>
										<td><?php echo $dl->created_at;?></td>
										<td>
											<a id="edit<?php echo $dl->id;?>" style="cursor:pointer;" onclick="return delete_donor('<?php echo $dl->id;?>');">
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