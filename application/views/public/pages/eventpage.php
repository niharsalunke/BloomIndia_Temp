
<link rel="stylesheet" type="text/css" href="<?php echo public_css_url();?>event.css"/>

<?php $data = $get_id?>

<section id="counts" class="counts section-bg fixed-bottom">
      <div class="container">

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
    </section><!-- End Counts Section -->


  <!-- ======= Hero Section ======= -->
  <section id="herox" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xs-12 text-center">
          <h1><?=$data->eventname;?></h1>
        </div>
      </div>


        <div class="d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          
            <img class="img" src="<?= base_url();?>/assets/public/uploadevent/<?= $data->eventimg?>">
          </div>
      

    </div>
  </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h1>About Our Event</h1>
          <p><b><?= nl2br($data->eventdesc); ?></b></p>
        </div>
          </div>
          
<center><input type="button" value="Back" class="btn btn-lg" onclick="goBack()"/> </center>
    </section><!-- End About Section -->
<script>
    function goBack(){
        window.location.replace(document.referrer);
    }
</script>
<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Template Main JS File -->
  <script src="assets/public/js/main.js"></script>
