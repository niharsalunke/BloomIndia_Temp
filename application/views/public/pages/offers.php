

  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="<?php echo public_css_url();?>offer.css"/>
<style>
    
    .btn-default{
			background-image: linear-gradient(white, #dadad5);
		}
			* {
   font-family:'Poppins';
}
	
</style>

  <!-- ======= Hero Section ======= -->
  <section id="herox" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row">
          <div class = "col"></div>
        <div class="col-xs-12 text-center" style = "text-align:centre;">
          <h1>Offers In BloomIndia</h1>
          <h2><a href = "https://www.bloomindia.in/become-donor">Pledge</a> to Avail these Offers</h2>
        </div>
        <div class = "col"></div>
      </div>

      <div class="row icon-boxes">

      <?php if($get_offer_list!='no'){
      foreach($get_offer_list as $el){?>

        <div class="col-md-6 col-md-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
              
              
          <img width="95%" height="200"  src="<?php echo base_url();?>/assets/public/uploadoffer/<?php echo $el->offerimg?>" post="eveid" alt="">
          
          
            <h4 class="title"><?=$el->productname?></h4>
            
            
            <p class="description"><h3 ><strike>₹<?=$el->srating?></strike>   ₹<?=$el->ratings?></h3></p>
            
            
            <p class="description"><?=$el->offerdesc?></p>
            
            <p><a class="btn btn-default" href="<?php echo base_url();?>index.php/welcome_public/offerpage/<?php echo $el->id;?>" role="button">View details &raquo;</a></p>
            
          </div>
        </div>

      <?php }}?>

      </div>
    </div>
    
<div class="col-xs-12"><center>  <?php echo $pagination; ?></center></div>
  </section><!-- End Hero -->


<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Template Main JS File -->
  <script src="assets/public/js/main.js"></script>