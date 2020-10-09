<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">

					<h2 class="page-title">Donors List</h2>

					<!-- Zero Configuration Table -->
					<div class="panel panel-default">
						<div class="panel-heading">Donors Info</div>
						<div class="panel-body">							
							<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
									<th>#</th>
										<th>Name</th>
										<th>Mobile No</th>
										<th>Email</th>
										<th>Gender</th>
										<th>Blood Group</th>
										<th>address</th>
										<th>action </th>
									</tr>
								</thead>
								<tbody>
								<?php $i=1; foreach($get_donors_list as $dl){?>
									<tr>
										<td><?php echo $i?></td>
										<td><?php echo $dl->firstname;?></td>
										<td><?php echo $dl->phone_number;?></td>
										<td><?php echo $dl->email;?></td>
										<td><?php echo $dl->gender;?></td>
										<td><?php echo $dl->bloodgroup; echo $dl->rh_factor;?></td>
										<td><?php echo $dl->home_address;?></td>
										<td>
											<a id="edit<?php echo $dl->id;?>" style="cursor:pointer;" onclick="return delete_donor('<?php echo $dl->id;?>');">
                                 				<i class="material-icons" style="color:red;">delete</i>
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