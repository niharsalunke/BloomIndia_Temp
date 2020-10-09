
<link rel="stylesheet" type="text/css" href="<?php echo public_css_url();?>offer.css"/>

<?php $data = $get_id?>

<!-- <section id="counts" class="counts section-bg fixed-bottom">
      <div class="container">

      <h2>Offer Description</h2>

        <div class="row justify-content-end">

          <div class="col-xs-12 col-md-4 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up"><?= date("j M Y",strtotime($data->eventdate));?></span>
              <p>Date</p>
            </div>
          </div>

          <div class="col-xs-12 col-md-4 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up"><?= $data->venue;?></span>
              <p>Venue</p>
            </div>
          </div>

          <div class="col-xs-12 col-md-4 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up"><?= $data->contactpersons;?></span>
              <p>Contact</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Counts Section -->

  <!-- ======= Hero Section ======= -->
  <section id="herox" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xs-12 text-left">
          <h1><?=$data->productname;?></h1>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-7 col-sm-6">
          <img class="img-responsive" style="width: 700px; height: 600px;" src="<?= base_url();?>/assets/public/uploadoffer/<?= $data->offerimg?>">
        </div>
        <div class="col-lg-5 col-sm-6">
            <br>
          <h3><?=$data->companyname?></h3><hr>
          <!-- <h4><?=$data->productname?></h4><hr> -->
          <h4><strike>₹<?=$data->srating?></strike>   ₹<?=$data->ratings?></h4><hr>
          <p><b><?=$data->startdate?>  to <?=$data->enddate?></b></p><hr>
          <p><?=$data->offerdesc?></p><hr>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <!-- <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h1>About Our Event</h1>
          <p><b><?= nl2br($data->offerdesc); ?></b></p>
          <p><b><strike>₹<?=($data->srating)?></strike> <?= nl2br($data->ratings); ?></b></p>
        </div>
      </div>
          
      <center><input type="button" value="Back" class="btn btn-lg" onclick="goBack()"/> </center>
    </section> -->
    <!-- End About Section -->
    <script>
        function goBack(){
        window.location.replace(document.referrer);
    }
</script>
<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Template Main JS File -->
  <script src="assets/public/js/main.js"></script>
