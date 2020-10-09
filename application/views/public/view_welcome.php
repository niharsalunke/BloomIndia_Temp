<!DOCTYPE html>	 

<html class="no-js"> 
<script>

    window.onbeforeunload = function () {
  window.scrollTo({
  top: 0,
  left: 0,
  behavior: 'smooth'
});
}

</script>
<head>

 <?php $api_key='AIzaSyDZ-_qwKLm1gct8N4WzZaF9IRWhqnUMWGo';?>

	<meta charset="utf-8" />
    
    
	 
    <meta data-rh="true" property="og:title" content="<?php echo $fbtitle;?>">
<meta data-rh="true" property="og:description" content= "<?php echo $fbdescription;?>">
<meta  data-rh="true" property="og:image" content="<?php echo $fbimage;?>">
<meta  data-rh="true" property="og:url" content="<?php echo $fburl;?>">





<meta name = "twitter:image" content = "<?php echo $fbimage;?>">

<meta data-rh="true" name="twitter:title" content="<?php echo $fbtitle;?>">
<meta data-rh="true" name="twitter:description" content="<?php echo $fbdescription;?>">
<meta data-rh="true" name="twitter:image:src" content="<?php echo $fbimage;?>">
<meta data-rh="true" name="twitter:url" content="<?php echo $fburl;?>">
<meta data-rh="true" name="twitter:widgets:new-embed-design" content="on"/>
<meta data-rh="true" name="twitter:widgets:csp" content="on"/>
<meta data-rh="true" name="twitter:card" content="summary_large_image"/>

	
	


    
    
    
    
    

	<!-- Mobile viewport optimized: h5bp.com/viewport -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="index, follow">

    <meta name="title" content="<?php echo $pageTitle;?>" />

    <meta name="description" content="<?php echo $metaDescription;?>" />

    <meta name="keywords" content="<?php echo $metaKeywords;?>" />

    <!--meta name="author" content="Bodagala Veerendra Kumar,Pamujula Sudeep"/-->    

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="icon" href="<?php echo public_img_url();?>favicon.png" type="image/png" sizes="16x16">

    <title><?php echo $pageTitle;?></title>

   
    


     <link rel="stylesheet" type="text/css" href="<?php echo public_css_url();?>modern-business.css"/>

     <link rel="stylesheet" type="text/css" href="<?php echo public_css_url();?>bootstrap.min.css"/>

     <link rel="stylesheet" type="text/css" href="<?php echo public_css_url();?>style.css"/>

	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
    <link href="assets/public/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/public/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/public/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/public/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/public/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/public/vendor/aos/aos.css" rel="stylesheet">

     <?php if($pageName=='available'){?>

     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

     <SCRIPT language="javascript">
        $(function () {
            // add multiple select / deselect functionality
            $("#selectall").click(function () {
            $('.name').attr('checked', this.checked);
        });

        // if all checkbox are selected, then check the select all checkbox
        // and viceversa

        $(".name").click(function () {        
        
        if ($(".name").length == $(".name:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");

        

                    }

        

         

        

                });

        

            });

        	

        	$(function () {

        

                // add multiple select / deselect functionality

        

                $("#sms_all").click(function () {

        

                    $('.sms').attr('checked', this.checked);

        

                });

        

         

        

                // if all checkbox are selected, then check the select all checkbox

        

                // and viceversa

        

                $(".sms").click(function () {

        

         

        

                    if ($(".sms").length == $(".sms:checked").length) {

        

                        $("#sms_all").attr("checked", "checked");

        

                    } else {

        

                        $("#sms_all").removeAttr("checked");

        

                    }

        

         

        

                });

        

            });

        

        </SCRIPT>

<?php }?>

 

         

 </head>



 

 <!-- Core Scripts - Include with every page

 	<script type="text/javascript" src="<?php echo public_js_url();?>jquery-1.8.3.min.js"></script> -->

 	
     <!-- Vendor JS Files -->
  <script src="assets/public/vendor/jquery/jquery.min.js"></script>
  <script src="assets/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/public/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/public/vendor/php-email-form/validate.js"></script>
  <script src="assets/public/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/public/vendor/counterup/counterup.min.js"></script>
  <script src="assets/public/vendor/venobox/venobox.min.js"></script>
  <script src="assets/public/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/public/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/public/vendor/aos/aos.js"></script>

 	

 	

<body onload="" onpageshow="if (event.persisted) noBack();" onunload="" style = "padding-bottom:0px;"> 	 

<?php $this->view($layout);?>  

	<script src="<?php echo public_js_url();?>tether.min.js"></script>

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

   

	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	

	

	

	<?php if($pageName=="search_donor"){?>

		<script>

            var slider = document.getElementById("myRange");

            var output = document.getElementById("demo");

            output.innerHTML = slider.value;

            

            slider.oninput = function() {

              output.innerHTML = this.value;

            }

        </script>

         <script>

              function initAutocomplete() {

                // Create the search box and link it to the UI element.

                var input = document.getElementById('pac-input');

                var searchBox = new google.maps.places.SearchBox(input);

              }

        </script>

          

        <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $api_key;?>&libraries=places&callback=initAutocomplete"

                    async defer></script>



	<?php }?>

	<?php if($pageName=='search_donor'){?>

     

    <?php }?>

    

    

<?php if($pageName=='become_donor' || $pageName=='profile')/* Later Pls change beome_donor_1 to become_donor*/{?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $api_key;?>&libraries=places"></script>

    <script>

    /*$(document).ready(function () {

       google.maps.event.addDomListener(window, 'load', initialize);

    });*/
    function stringtoHTML(str) {
          var parser = new DOMParser();
          var doc = parser.parseFromString(str, 'text/html');
          return doc.body;
      };
    
    
    function initialize() {
        /*
        var input = document.getElementById('location');

        var autocomplete = new google.maps.places.Autocomplete(input);
        console.log(autocomplete.getPlace());
    	var input2 = document.getElementById('location2');
        console.log(autocomplete.getPlace());
        var autocomplete = new google.maps.places.Autocomplete(input2);*/
        
                var input = document.getElementById('location');
		        var autocomplete = new google.maps.places.Autocomplete(input);
		        google.maps.event.addListener(autocomplete, 'place_changed', function () {
		            
		            var place = autocomplete.getPlace();
		            
					//console.log('City name:',place.address_components[0].long_name)
					//console.log('State name:',place.address_components[2].long_name)
					//console.log('Country name:',place.address_components[3].long_name)
					//console.log('Place: ',place)
					
					//stringtoHTML(temp1.adr_address).childNodes[1].className
					for( var i=0; i< stringtoHTML(place.adr_address).childNodes.length ; i+=1)
					{
					    if(stringtoHTML(place.adr_address).childNodes[i].className == "locality")
					    {
					       document.getElementsByName("district")[0].value = stringtoHTML(place.adr_address).childNodes[i].textContent
					       document.getElementsByName("city")[0].value = stringtoHTML(place.adr_address).childNodes[i].textContent
					       var cityname = stringtoHTML(place.adr_address).childNodes[i].textContent;
					    }
					    else if(stringtoHTML(place.adr_address).childNodes[i].className == "region")
					    {
					         document.getElementsByName("state")[0].value = stringtoHTML(place.adr_address).childNodes[i].textContent
					         var statename = stringtoHTML(place.adr_address).childNodes[i].textContent;
					    }
					    
					    else if(stringtoHTML(place.adr_address).childNodes[i].className == "postal-code")
					    {
					        document.getElementsByName("pincode")[0].value = stringtoHTML(place.adr_address).childNodes[i].textContent
					        var pincodevar = stringtoHTML(place.adr_address).childNodes[i].textContent;
					    }
					   
					}
					console.log('Location Formatted as: ',cityname,' ',statename,' ',pincodevar);
		        });
		        
		        
		        var input2 = document.getElementById('location2');
		        var autocomplete2 = new google.maps.places.Autocomplete(input2);
		        google.maps.event.addListener(autocomplete2, 'place_changed', function () {
		            var place2 = autocomplete2.getPlace();
		            
					console.log('City name:',place2.address_components[0].long_name)
					console.log('State name:',place2.address_components[2].long_name)
					console.log('Country name:',place2.address_components[3].long_name)
					console.log('Place: ',place2)
					
		        });

    }
google.maps.event.addDomListener(window, 'load', initialize); 
    </script>

 <?php }?> 

 <?php if($pageName=='available'){?>

		 <script>

		$(document).ready(function(){

			$('[data-toggle="tooltip"]').tooltip();   

		});

		</script>

     

 <?php }?>

 <?php if($pageName=='search_donor_old'){?>

     <script>

		var form = document.forms[0], 

			submit = document.getElementById('submit'),

			input = document.getElementById('bloodgroup');

			input1 = document.getElementById('rhfactor');

		input.addEventListener('invalid', function(e) {

			if(input.validity.valueMissing){

				e.target.setCustomValidity("Blood Group is mandatory"); 

			} 

			// to avoid the 'sticky' invlaid problem when resuming typing after getting a custom invalid message

			input.addEventListener('input', function(e){

				e.target.setCustomValidity('');

			});

			

		}, false);

			input1.addEventListener('invalid', function(e) {

			if(input1.validity.valueMissing){

				e.target.setCustomValidity("Rh Factor is mandatory"); 

			} 

			

			input1.addEventListener('input', function(e){

				e.target.setCustomValidity('');

			});

			

		}, false);

</script>

    <?php }?>


<script>

    function scrolltop(){
        console.log("scroll top WAS CALLED");
    document.getElementById("header").scrollIntoView({ behavior: 'smooth' });}
</script>

</body> 

</html>