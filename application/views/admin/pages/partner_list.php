<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                                    
                <h2 class="page-title">Partners List</h2>							
                    <table style="margin:0px;" id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Industry</th>
                                <th>Description</th>
                                <th>Logo</th>
                                <th>Created At</th>
                                <th>Enable/Disable</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; foreach($get_partner_list as $ol){?>
                            <tr>
                                <td><?php echo $i?></td>
                                <td><?php echo $ol->name;?></td>
                                <td><?php echo $ol->address;?></td>
                                <td><?php echo $ol->email;?></td>
                                <td><?php echo $ol->industry;?></td>
                                <td><?php echo $ol->description;?></td>
                                <td><img width="250" height="200" src="<?php echo base_url();?>/assets/public/uploadpartner/<?php echo $ol->logo?>"></td>
                                <td><?php echo $ol->created_at;?></td>
                                <td>
                                    <a style="cursor:pointer;" onclick="return partner_status('<?php echo $ol->id;?>');">
                                    <i class="fa fa-dot-circle-o">  <?php echo $ol->status;?></i></a>
                                </td>
                                <td>
                                    <a id="edit<?php echo $ol->id;?>" style="cursor:pointer;" onclick="return delete_partner('<?php echo $ol->id;?>');">
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
