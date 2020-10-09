<!DOCTYPE html>	 
<html class="no-js"> 
<head>
	<meta charset="utf-8" />
	<!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="title" content="<?php echo $pageTitle;?>" />
    <meta name="description" content="<?php echo $metaDescription;?>" />
    <meta name="keywords" content="<?php echo $metaKeywords;?>" />
    <meta name="author" content="Bodagala Veerendra Kumar"/>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="<?php echo public_img_url();?>favicon.png" type="image/png" sizes="16x16">
    <title><?php echo $pageTitle;?></title>
    <script type="text/javascript">
		var baseURL = "<?php echo base_url();?>";
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo admin_css_url();?>font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo admin_css_url();?>dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo admin_css_url();?>bootstrap-social.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo admin_css_url();?>bootstrap-select.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo admin_css_url();?>fileinput.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo admin_css_url();?>awesome-bootstrap-checkbox.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo admin_css_url();?>style.css"/>
		
         
 </head>

 
 
 	
 	
 	
<body> 	 
<div class="ts-main-content">
	<?php $this->view($layout);?>  
</div>
<?php if($pageName=='add_donor'){?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApKVxWo-ZURfIv8erosyebukfeC050-RM&libraries=places"></script>
    <script>
    $(document).ready(function () {
       google.maps.event.addDomListener(window, 'load', initialize);
    });
    
    function initialize() {
        var input = document.getElementById('location');
        var autocomplete = new google.maps.places.Autocomplete(input);
    	var input2 = document.getElementById('location2');
        var autocomplete = new google.maps.places.Autocomplete(input2);
    }
    </script>
 <?php }?>


<script type="text/javascript">
	     function delete_donor(id)
			 {
				 t=confirm("Do You Want Delete..!");
					if(t==true){
					$.post(baseURL+'delete-donor/'+id,function(data){
						if(data!=''){
								window.location.reload();
							} else {
								alert('database error');
							}
					 });						
				}
			 }
			 function delete_event(id)
			 {
				 t=confirm("Do You Want Delete..!");
					if(t==true){
					$.post(baseURL+'delete-event/'+id,function(data){
						if(data!=''){
								window.location.reload();
							} else {
								alert('database error');
							}
					 });						
				}
			 }
			 function delete_offer(id)
			 {
				 t=confirm("Do You Want Delete..!");
					if(t==true){
					$.post(baseURL+'delete-offer/'+id,function(data){
						if(data!=''){
								window.location.reload();
							} else {
								alert('database error');
							}
					 });						
				}
			 }
			 function delete_partner(id)
			 {
				 t=confirm("Do You Want Delete..!");
					if(t==true){
					$.post(baseURL+'delete-partner/'+id,function(data){
						if(data!=''){
								window.location.reload();
							} else {
								alert('database error');
							}
					 });						
				}
			 }
			 function partner_status(id)
			 {
				 t=confirm("Do You Want Change the Status..!");
					if(t==true){
					$.post(baseURL+'partner-status/'+id,function(data){
						if(data!=''){
								window.location.reload();
							} else {
								alert('database error');
							}
					 });						
				}
			 }
			 function delete_testimonial(id)
			 {
				 t=confirm("Do You Want Delete..!");
					if(t==true){
					$.post(baseURL+'delete-testimonial/'+id,function(data){
						if(data!=''){
								window.location.reload();
							} else {
								alert('database error');
							}
					 });						
				}
			 }
 			 function testimonial_status(id)
			 {
				 t=confirm("Do You Want Change the Status..!");
					if(t==true){
					$.post(baseURL+'testimonial-status/'+id,function(data){
						if(data!=''){
								window.location.reload();
							} else {
								alert('database error');
							}
					 });						
				}
			 }
			 function delete_gallery(id)
			 {
				 t=confirm("Do You Want Delete..!");
					if(t==true){
					$.post(baseURL+'delete-gallery/'+id,function(data){
						if(data!=''){
								window.location.reload();
							} else {
								alert('database error');
							}
					 });						
				}
			 }			 
	</script>
	
<!-- Core Scripts - Include with every page -->
 	<script type="text/javascript" src="<?php echo admin_js_url();?>jquery.min.js"></script>
 	<script type="text/javascript" src="<?php echo admin_js_url();?>bootstrap-select.min.js"></script>
 	<script type="text/javascript" src="<?php echo admin_js_url();?>bootstrap.min.js"></script>
 	<script type="text/javascript" src="<?php echo admin_js_url();?>jquery.dataTables.min.js"></script>
 	<script type="text/javascript" src="<?php echo admin_js_url();?>dataTables.bootstrap.min.js"></script>
 	<script type="text/javascript" src="<?php echo admin_js_url();?>Chart.min.js"></script>
 	<script type="text/javascript" src="<?php echo admin_js_url();?>fileinput.js"></script>
 	<script type="text/javascript" src="<?php echo admin_js_url();?>chartData.js"></script>
 	<script type="text/javascript" src="<?php echo admin_js_url();?>main.js "></script>


	<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

</body> 
</html>