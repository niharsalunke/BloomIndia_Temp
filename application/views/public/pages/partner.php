
  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="<?php echo public_css_url();?>partner.css"/>
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Partners</h1><br>
          <h1 data-aos="fade-up">Saving Lives Together</h1>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
<br> <br>
<div class="text-center">
        <button class="btn btn-danger" onclick="window.location='<?php echo base_url();?>add_partner'"  class="btn-get-started scrollto" style="width: 200px; height: 50px;"><b>ADD PARTNER</b></button>
      </div><br>
      
      <div >
      <center>  
      <h2><b> <span  style="color:red">Partnerships are a vital part of our work.</span></b><h2> <br>
      <p style="font-size:20px"><b>They help us to reach more people, increase the number of blood and organ donors and save more lives. If you would like to get involved, please email us at BloomIndia@gmail.com </b></p>
      </center>
    </div>

  <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">          

          <div class="col-xl-6 offset-3 d-flex align-items-stretch pt-4 pt-xl-0" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-right">
                  <div class="count-box">
                  <i class="fa fa-smile-o" aria-hidden="true" style="color:red"></i>
                    <span data-toggle="counter-up" style="color:red">65</span>
                    <p><strong>Happy Clients</strong> This is Why we do What we do!!<br> WE ARE HAPPY TO SERVE OUR CLIENT'S!! </p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-left">
                  <div class="count-box">
                  <i  class="fa fa-briefcase" aria-hidden="true" style="color:red"></i>
                    <span data-toggle="counter-up" style="color:red">85</span>
                    <p><strong>Partners</strong> We take pride in our Partner-Centric culture. We focus on strong connection with proven success to help exceed our Donee's and donor's specific needs. </p>
                  </div>
                </div>
              </div>
            
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      
    </section><!-- End Counts Section -->

    <br> 
 <!-- =======  Partners Section ======= -->
    <section id="partners" class="partners">
      <div class="container">

          <?php if($get_partner_list!='no'){
            foreach($get_partner_list as $pl){ 
                if($pl->status=='Enabled'){?> 
              
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch mt-4">
                <div class="card");' data-aos="fade-up" data-aos-delay="200">
                  <div class="card-body">
                    <h5 class="card-title"><a href=""> <img src="<?php echo base_url();?>/assets/public/uploadpartner/<?php echo $pl->logo?>" width="150" height="100" alt="logo" class="img-fluid"><hr><?=$pl->name?></a></h5>
                    <p class="card-text"><p class="description"  style="color:black;">Location: <?= $pl->address;?></p>
                    <p class="description" style="color:black;">Email: <?= $pl->email;?></p>
                    <p class="description" style="color:black;">Industry: <?= $pl->industry;?></p>
                    <p class="description" style="color:black;">Description: <?= $pl->description;?></p>
                  </div>
                </div>
              </div>
          <?php }}}?>

      </div>
      <center>  <?php echo $pagination; ?></center>
    </section><!-- End Partners Section -->
   <br> 
    <!-- ======= Additional Section =======  -->
      <section id="additional" >
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2 style="color:red"><span>What do our Partners Think?</span></h2>
          <p>
         <span style="color:black " ><b> We are thrilled to be partnering With the above Partners who are committed to serve for the cause, to support the ones who are in need. We are able to support and empowerthose most Vulnerable
          to help ease the Challenges they face each day. </b></span> 
          </p>
        </div>
      </div>
    </section>
 
       
 <a href="#" class="back-to-top"><i style="color:red" class="icofont-simple-up"></i></a>

 <script src="assets/public/js/main.js"></script>
