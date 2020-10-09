<div class="container">

        <?php if($get_partner_list!='no'){
        foreach($get_partner_list as $pl){
            if($pl->status=='Enabled'){?>

                <div class="col-lg-3 col-sm-6 portfolio-item well" style="margin: 30px" align="center">
                        
                    <img width="95%" height="200" src="<?php echo base_url();?>/assets/public/uploadpartner/<?= $pl->logo?>">
                    <h3><b><?=$pl->name?></b></h3>
                    <p >Location: <?= $pl->address;?></p>
                    <p >Email: <?= $pl->email;?></p>
                    <p >Industry: <?= $pl->industry;?></p>
                    <p >Description: <?= $pl->description;?></p>

                </div>
   
        <?php }}}?>

</div>