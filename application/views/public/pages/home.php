
<link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/carousel/">

    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <link href="https://getbootstrap.com/docs/3.3/examples/carousel/carousel.css" rel="stylesheet">



<style>
	
	.carousel-control.right:hover,.carousel-control.left:hover {
    color: #f6755e;
}
	
	
	.carousel-control.left, .carousel-control.right {
   background-image:none !important;
   filter:none !important;
		color: white;
}
	
	.carousel .item {
    
    background-color: #fff;
}
    
    .btn-default{
        background-image:linear-gradient(white,#dadad5);
    }
    .card:hover{transition-timing-function: ease-in-out; transform: scale(1.002); transition: all .2s  ease-in-out;    
  padding: 10px;
  box-shadow: 1px 1px 11px black;
	color: black;
	
	}
	
	*{
	    font-family:'Poppins';
	}
.h2, h2 {
    
    font-family: Poppins;
}
	
</style>
  


    <div id="myCarousel" class="carousel slide" data-ride="carousel" style = "height:auto">
      <!-- Indicators -->
      <!--ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol-->
      <div class="carousel-inner" role="listbox" style = "height:auto">
        <div class="item" style = "height:700px">
          <img class="first-slide" src="<?php echo public_img_url();?>pledge_home_image.jpg" alt="First slide" style = "height:100%">
          <div class="container">
            <div class="carousel-caption">
              <h1 style = "text-shadow: 2px 2px 5px black;">Leave A Legacy, Pledge Today ! </h1>
				
              <!--p>Note: If you're viewing this page via a  URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p-->
              <p><a class="btn btn-lg btn-danger" href="/become-donor" role="button" style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">PLEDGE</a></p>
            </div>
          </div>
        </div>
        <div class="item active" style = "height:700px">
          <img class="second-slide" src="https://images.unsplash.com/photo-1548345680-f5475ea5df84?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80" alt="Second slide" style = "height:100%">
          <div class="container">
            <div class="carousel-caption">
              <!--h1>Search For Donors</h1>
              <!--p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p-->
				<h1 style = "text-shadow: 2px 2px 5px black;">Find A Nearby Donor !</h1>
              <p><a class="btn btn-lg btn-danger" href="/search-donor" role="button" style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">SEARCH DONORS</a></p>
            </div>
          </div>
        </div>
        <div class="item" style = "height:700px">
          <img class="third-slide" src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="Third slide" style = "height:100%;width:100%;">
          <div class="container">
            <div class="carousel-caption">
              <h1 style = "text-shadow: 2px 2px 5px black;">Refer A Friend, </h1>
				<h1 style = "text-shadow: 2px 2px 5px black;">One more for good measure.</h1>
              <!--p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p-->
              <p><a class="btn btn-lg btn-danger" href="/refertofriend" role="button" style = "box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">REFER</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
		</div>	  
<div class="container" style="width: 100%;">
	


	  
	
<hr>
	  <div class = "container marketting">
	<div class="row"><div class="col-xs-4"></div><div class="col-xs-4" style = "text-align: center;"><h2>Testimonials</h2></div><div class="col-xs-4"></div></div></div>
	  
	  
	  
	   <div class="container marketting" style = "height:auto; ">
    <div id="myCarousel1" class="carousel slide" data-ride="carousel" style = "height:auto; " >
		
      <div class="carousel-inner" role="listbox" style=" width:100%; background-color:white;height:auto; ">
		  
		  
		  
		  <?php foreach($testimonial as $key => $value){ 			
                  $image = $testimonial[$key]['photo'];
                  $name = $testimonial[$key]['name'];
                  $say = $testimonial[$key]['testimonial']; 	?>
		  
        <div class="item <?= ($key == 0) ? 'active' : '' ?>" style = "height:auto; ">
		
         <div class="media" style="padding:20px; background-color: #eeeeee;border-radius: 15px; ">
  <div class="media-left media-middle">
    <a href="#">
      <img class="media-object" src="<?php echo base_url().'/assets/public/uploadtestimonial/' . $image ;?>" height="200" width="200" alt="..." style="border-radius: 15px;">
    </a>
  </div>
  <div class="media-body">
     <h2><?php echo $say;?></h2>
          <p class="lead"><?php echo $say;?></p>
	  
    
  </div>
</div>
        </div>
		  
		  <?php } ?>
		  

      </div>
      <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
		</div>
    </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  <hr>
	  
	 <!-- ************************* EVENTS CAROUSEL ************************ -->
	  
	  
	  
	  
	  
	  <div class = "container marketting">
	<div class="row"><div class="col-xs-4"></div><div class="col-xs-4" style = "text-align: center;"><h2>Events</h2></div><div class="col-xs-4"></div></div></div>
	  
	  
	  
	  
	  
	  <div class="container marketting" style = "height:auto; ">
    <div id="myCarousel2" class="carousel slide" data-ride="carousel" style = "height:auto; " >
		
      <div class="carousel-inner" role="listbox" style=" width:100%; background-color:white;height:auto; ">
		  
		  
		  <?php foreach($events as $key => $value){ 
                  $id = $events[$key]['id'];		
                  $image = $events[$key]['eventimg'];
                  $name = $events[$key]['eventname'];
                  $date = $events[$key]['eventdate'];
                  $desc = $events[$key]['eventdesc']; 	?>
		  
        <div class="item <?= ($key == 0) ? 'active' : '' ?>" style = "height:auto; ">
		
         <div class="media" style="padding:20px; background-color: #eeeeee;border-radius: 15px; ">
  <div class="media-left media-middle col-xs-4">
   
      <img class="media-object col-xs-12" src="<?= base_url().'/assets/public/uploadevent/'. $image ;?>" alt="..." style="border-radius: 15px;">
    
  </div>
  <div class="media-body">
     <h2><?php echo $name;?></h2>
	  <span class="text-muted"><?php echo date("j M Y",strtotime($date));?> </span>
          <p class="lead"><?php echo $desc;?></p>
	
    
	  
	  
	  <p><a class="btn btn-default" href="<?php echo base_url();?>index.php/welcome_public/EventPage/<?php echo $id;?>" role="button">Read More&raquo;</a></p>
	  
  </div>
</div>
        </div>
		  
		  <?php } ?>
		  

      </div>
      <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
		</div>
    </div>
	  
	  

<hr>




	  <div class = "container marketting">
	<div class="row"><div class="col-xs-4"></div><div class="col-xs-4" style = "text-align: center;"><h2>Offers</h2></div><div class="col-xs-4"></div></div></div>
	  
	  
	  
	  
	  
	  <div class="container marketting" style = "height:auto; ">
    <div id="myCarousel3" class="carousel slide" data-ride="carousel" style = "height:auto; " >
		
      <div class="carousel-inner" role="listbox" style=" width:100%; background-color:white;height:auto; ">
		  
		   <?php if($get_offer_list!='no'){
      foreach($get_offer_list as $el){?>
		  

        <div class="item <?= ($el->id == $max_id) ? 'active' : '' ?>" style = " height:auto;">
		
         <div class="media" style="padding:20px; background-color: #eeeeee;border-radius: 15px; ">
  <div class="media-left media-middle col-xs-4">
   
      <img class="media-object col-xs-12" src="<?php echo base_url();?>/assets/public/uploadoffer/<?php echo $el->offerimg?>" alt="..." style="border-radius: 15px;">
    
  </div>
  <div class="media-body">
     <h2><?=$el->productname?></h2>
	  <span class="text-muted"><h3 ><strike>₹<?=$el->srating?></strike>   ₹<?=$el->ratings?></h3></span>
          <p class="lead"><?=$el->offerdesc?></p>
	
    
	  
	  
	  <p><a class="btn btn-default" href="<?php echo base_url();?>index.php/welcome_public/offerpage/<?php echo $el->id;?>" role="button">Read More&raquo;</a></p>
	  
  </div>
</div>
        </div>
		  
		  <?php }}?>
		  

      </div>
      <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
		</div>
    </div>

	  
    <hr>





	  <div class = "container marketting">
	<div class="row"><div class="col-xs-4"></div><div class="col-xs-4" style = "text-align: center;"><h2>Blogs</h2></div><div class="col-xs-4"></div></div></div>

        <div class="container marketting">
    <!--Carousel Wrapper-->
    <div id="myCarousel4" class="carousel slide carousel-multi-item" data-ride="carousel">
      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="item active">

          <div class="row">
            <div class="col-sm-4" style="padding: 25px;">

              <form action="<?php echo base_url(); ?>biology_of_blood_groups" method="post">
                <div class="card" style="background-color: #eeeeee; padding:10px;  border-radius: 15px;">
                  <img class="cardimage" src="https://images.unsplash.com/photo-1455390582262-044cdead277a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=966&q=80" alt="Generic placeholder image" style="max-width:100%;
                    max-height:50%; margin:5px,5px,5px,5px; border-radius: 15px;">
                  <h2>Biolog Of Blood Groups</h2>
                  <p style="" class="text-muted"> We would have studied this in our Std X Text Books. Consider this as a quick refresher. There are 4 main Blood groups ( Phenotypes ) – A, B, AB, O. Now each of these can be RH Positive or Negative...
                  </p>
                  <p><button class="btn btn-default" type="submit">Read More&raquo;</button></p>
                </div>
              </form>
            </div>

            <div class="col-sm-4 clearfix d-none d-md-block" style="padding: 25px; ">

              <form action="<?php echo base_url(); ?>voluntary_blood_donation" method="post">
                <div class="card" style="background-color: #eeeeee; padding:10px;  border-radius: 15px;">
                  <img class="cardimage" src="https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" alt="Generic placeholder image" style="max-width:100%;
                        max-height:50%; margin:5px,5px,5px,5px; border-radius: 15px;">
                  <h2>Gift To Life: Voluntary Blood Donation</h2>
                  <p style="" class="text-muted">Recently, one of our close friends Arjun (name changed) met with a road accident while returning back from office. A speeding car had lost its control and in...


                  </p>
                  <p><button class="btn btn-default" type="submit">Read More&raquo;</button></p>

                </div>
              </form>
            </div>

            <div class="col-sm-4 clearfix d-none d-md-block" style="padding: 25px; text-justify: inter-word;">

              <form action="<?php echo base_url(); ?>be_a_superhero" method="post">

                <div class="card" style="background-color: #eeeeee; padding:10px;  border-radius: 15px;">
                  <img class="cardimage" src="https://www.bloomindia.in/assets/public/img/blog4img.jpg" alt="Generic placeholder image" style="max-width:100%;
                    max-height:50%; margin:5px,5px,5px,5px; border-radius: 15px;">
                  <h2>Be a Superhero - Save a life & your life will Bloom ...</h2>
                  <p style="" class="text-muted">Donate blood. Donate now. Donate often.

                    There was a time when getting bitten by a spider, being son of a Odin or being an alien from Krypton...</p>
                  <p><button class="btn btn-default" type="submit">Read More&raquo;</button></p>

                </div>
              </form>
            </div>
          </div>
        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="item">

          <div class="row">
            <div class="col-sm-4" style="padding: 25px; text-justify: inter-word;">

              <form action="<?php echo base_url(); ?>index.php/welcome_public/volunteer_blood_donation" method="post">

                <div class="card" style="background-color: #eeeeee; padding:10px;  border-radius: 15px;">
                  <img class="cardimage" src="<?php echo public_img_url(); ?>blog4.jpeg" alt="Generic placeholder image" style="max-width:100%;
                        max-height:50%; margin:5px,5px,5px,5px; border-radius: 15px;">
                  <h2>Bloom - Network to Increase Volunteer Blood Donation</h2>
                  <p style="" class="text-muted">There is no greater joy then saving a life - Right Blood. Right Time. Right Place.</p>
                  <p style="margin-top: 10px;"><button class="btn btn-default" type="submit">Read More&raquo;</button></p>

                </div>
              </form>
            </div>

            <div class="col-sm-4 clearfix d-none d-md-block" style="padding: 25px; text-justify: inter-word;">

              <form action="<?php echo base_url(); ?>index.php/welcome_public/bombay_blood_group" method="post">

                <div class="card" style="background-color: #eeeeee; padding:10px;  border-radius: 15px; ">
                  <img class="cardimage" src="<?php echo public_img_url(); ?>blog5.jpeg" alt="Generic placeholder image" style="max-width:100%;
                  max-height:50%; margin:5px,5px,5px,5px; border-radius: 15px;">
                  <h2>BOMBAY BLOOD GROUP</h2>
                  <p style="" class="text-muted"> Bombay blood group is the rarest of rare blood groups...</p>
                  <p style="margin-top: 120px;"><button class="btn btn-default" type="submit">Read More&raquo;</button></p>

                </div>
              </form>
            </div>

            <div class="col-sm-4 clearfix d-none d-md-block" style="padding: 25px; text-justify: inter-word;">

              <form action="<?php echo base_url(); ?>index.php/welcome_public/leukemia_blood_cancer" method="post">

                <div class="card" style="background-color: #eeeeee; padding:10px;  border-radius: 15px; ">
                  <img class="cardimage" src="<?php echo public_img_url(); ?>blog6.jpeg" alt="Generic placeholder image" style="max-width:100%;
                        max-height:50%; margin:5px,5px,5px,5px; border-radius: 15px;">
                  <h2>Leukemia - Blood Cancer</h2>
                  <p style="" class="text-muted"> Leukemia which is commonly known as blood cancer is the cancer of the blood and blood-forming tissues, including bone marrow. Leukemia begins in the bone marrow and results in the in the production of a high...</p>
                  <p><button class="btn btn-default" type="submit">Read More&raquo;</button></p>

                </div>
              </form>
            </div>

            

          </div>

        </div>
        <!--/.Second slide-->


        <!--/.Slides-->

      </div>
      <!--/.Carousel Wrapper-->
      <a class="left carousel-control" href="#myCarousel4" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel4" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>
</div>
<br>
<br>
<br>