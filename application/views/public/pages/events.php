<div class="container">

        <?php if($get_event_list!='no'){
        foreach($get_event_list as $el){?>

                <div class="col-lg-3 col-sm-6 portfolio-item well" style="margin: 30px" align="center">
                        
                        <img width="95%" height="200" src="<?php echo base_url();?>/assets/public/uploadevent/<?php echo $el->eventimg?>">
                        <h3 ><b><?php echo $el->eventname;?></b></h3>
                        <p ><b>Venue : </b> <?php echo $el->venue;?> </p>
                        <p ><b> Date : </b><?php echo $el->eventdate;?> </p>
                        <p ><b>Contact Person :</b><?php echo $el->contactpersons;?> </p>

                </div>
   
        <?php }}?>

</div>