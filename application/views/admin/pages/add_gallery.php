<div class="content-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">


                <!-- Zero Configuration Table -->
                <div class="panel panel-default">
                    <div class="panel-heading">Add Gallery</div>
                        <div class="panel-body">

                       <h4> <?php echo !empty($statusMsg)?'<p class="status-msg">'.$statusMsg.'</p>':''; ?></h4>

                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group col-lg-4">
                                    <label>Event Name</label>: 
                                    <?php $e = $events; echo $e->eventname; ?>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>Event Date</label>: 
                                    <?php echo date("j M Y",strtotime($e->eventdate)); ?>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label>Event Venue</label>: 
                                    <?php echo $e->venue; ?>
                                </div>
                                <div class="form-group">
                                    <label>Choose Files</label>
                                    <input type="file" class="form-control" name="files[]" multiple required/>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" class="form-control" name="gallerydesc" required/>
                                </div>
                                <div class="form-group">
                                    <input style=" margin-left:25%; width:50%;" class="form-control btn-primary" type="submit" name="fileSubmit" value="UPLOAD" style="cursor:pointer" />
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


