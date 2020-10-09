
<div class="content-wrapper">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">

					<h2 class="page-title">Gallery List</h2>

					<!-- Zero Configuration Table -->
					<div class="panel panel-default">
						<div class="panel-heading">Gallery Info</div>
						<div class="panel-body table-responsive">							
							<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
								<thead>
									<tr>
									<th>#</th>
										<th>Event Name</th>
										<th>Event Date</th>
										<th>Venue</th>
                                        <th>Description</th>
										<th>Action</th>
										<th>Event Image</th>
                                    </tr>
								</thead>
								<tbody>
								<?php $i=1; $event =''; foreach($get_gallery_list as $el){
                                     if($el->eventname != $event){ ?>
									<tr>
                                    
										<td><?php echo $i?></td>
										<td><?php echo $el->eventname;?></td>
										<td><?php echo date("j M Y",strtotime($el->eventdate));?></td>
										<td><?php echo $el->venue;?></td>
                                        <td><?php echo $el->gallerydesc;?></td>
                                        <td>
                                            <a id="edit<?php echo $el->id;?>" style="cursor:pointer;" onclick="return delete_gallery('<?php echo $el->id;?>');">
                                            <i class="fa fa-trash" style="color:red;"> Delete</i></a>
                                        </td>
                                        
										<td><?php echo $el->file_name;?><p><img width='200' src="<?php echo base_url('assets/public/eventgallery/'.$el->file_name);?>" ></td>
	                                    
								<?php $event = $el->eventname; $i++;} else {
									 ?>
									<td><?php echo $el->file_name;?><p><img width='200' src="<?php echo base_url('assets/public/eventgallery/'.$el->file_name);?>"></td>
								<?php }}?>	
								
								        
									</tr>
								</tbody>

							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
