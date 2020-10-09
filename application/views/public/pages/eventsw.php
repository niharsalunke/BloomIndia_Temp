
  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="<?php echo public_css_url();?>event.css"/>


  <!-- ======= Hero Section ======= -->
  <section id="herox" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xs-12 text-center">
            <?php $first = $get_gallery;?>
            <h1><?=$first->eventname?></h1>
            <center><img width="70%" src="<?php echo base_url('assets/public/eventgallery/'.$first->file_name);?>"></center>
            <h3 style="margin-left:15%;">Date: <?= date("j M Y",strtotime($first->eventdate));?></h3>
        </div>
      </div>
      
      </br></br>         <div class="col-xs-12"><h2>UPCOMING EVENTS</h2></div></br></br>

      <div class="row icon-boxes">

      <?php if($get_event_list!='no'){
      foreach($get_event_list as $el){?>

        <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box"> <a href='<?php echo base_url();?>index.php/welcome_public/eventpage/<?php echo $el->id;?>'>
            <img width="95%" height="200" src="<?php echo base_url();?>/assets/public/uploadevent/<?php echo $el->eventimg?>" post="eveid" alt=""></a>
            <h4 class="title"><?=$el->eventname?></h4>
            <p class="description">Date: <?= $el->eventdate;?></p>
            <p class="description">Venue: <?= $el->venue;?></p>
          </div>
        </div>

      <?php }}?>

      </div>
    </div>
    
        <div class="col-xs-12"><center>  <?php echo $pagination; ?></center>
  </section><!-- End Hero -->



  <section>
</br></br>
  <div class="row" data-aos="fade-up" data-aos-delay="200">
    
    <div class="col-md-12">
        <div id="Carousel" class="carousel slide">
        <div class="col-xs-12"><h2>EVENTS GALLERY</h2> </div>
            <!--  <ol class="carousel-indicators">
                <?php $gallery_count = $gallery_count;
                for($i = 0 ; $i < $gallery_count ; $i++){?>
                  <li data-target="#Carousel" data-slide-to="0" class="<?= ($i == 0) ? 'active' : '' ?>"></li>
                <?php } ?>
              </ol>-->

          <div class="carousel-inner">
            <?php $name=''; foreach($update_gallery as $el=>$gr){ ?>
              <div class="item <?= ($el == 0) ? 'active' : '' ?>">
                <div class="row">
                  <?php $desc=''; foreach($gr as $i=>$image){ ?>
                  <h3 class="name"><?php if($image['eventname'] != $name){?>

                     <?php echo $image['eventname'];?></h3>
                     <h4 class="name"><?php echo date("j M Y",strtotime($image['eventdate']));
                      $name = $image['eventname']; }?></h4>

                    <div class="col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="200"><a href="#" class="thumbnail">
                      <img  src="<?php echo base_url('assets/public/eventgallery/'.$image['file_name']);?>" alt="Image" ></a>
                    </div>
                    <h4 class="name1"> <?php $desc .= $image['gallerydesc']; } echo $desc; ?></h4>

                </div>
              </div>
            <?php }?>

         </div>
            <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a> 
            <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
        </div>
                
		</div>
	</div>		
</section>       


</br></br>

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Template Main JS File -->
  <script src="assets/public/js/main.js"></script>
  
