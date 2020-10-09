<div class="content-wrapper">
    <div class="col-md-12">
    <h2 class="page-title">Dashboard</h2>
    	<a href="<?php echo base_url();?>search-list" >
    	<div class="col-md-4">
    		<div class="panel panel-default">
    			<div class="panel-body bk-primary text-light">
    				<div class="stat-panel text-center">
    					<div class="stat-panel-number h1 "><?php echo $search_data_count->search_data_count;?></div>
    					<div class="stat-panel-title text-uppercase">Seeker Data</div>
    				</div>
    			</div>
    			<span class="block-anchor panel-footer text-center">Full Detail <i class="fa fa-arrow-right"></i>
    		</div>
    	</div>
    	</a>
		<a href="<?php echo base_url();?>gallery-list" >
    	<div class="col-md-4">
    		<div class="panel panel-default">
    			<div class="panel-body bk-danger text-light">
    				<div class="stat-panel text-center">
    					<div class="stat-panel-number h1 "><?php echo $gallery_count;?></div>
    					<div class="stat-panel-title text-uppercase">Event Gallery</div>
    				</div>
    			</div>
    			<span class="block-anchor panel-footer text-center">Full Detail <i class="fa fa-arrow-right"></i>
    		</div>
    	</div>
    	</a>

    	<a href="<?php echo base_url();?>donor-list">
    		<div class="col-md-4">
    			<div class="panel panel-default">
    				<div class="panel-body bk-success text-light">
    					<div class="stat-panel text-center">
    						<div class="stat-panel-number h1 "><?php echo $donors_count->donors_count;?></div>
    						<div class="stat-panel-title text-uppercase">Donors List</div>
    					</div>
    				</div>
    				<span class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i>
    		</div>
    	</a>
    </div>
</div>












			</div>
		</div>