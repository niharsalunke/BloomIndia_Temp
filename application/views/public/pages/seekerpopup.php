 <style>
#myProgress {
  width: 100%;
  background-color: #ddd;
  border-radius: 30px;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: #4CAF50;
  border-radius: 30px;
}
.mystyle{
	color:red;
	display:none;
}
</style>
<div class="container succWrap" style="color:green;font-size:20px;">
		
	 <center>
	 	
	 <p class="pv" style="color:green;font-size:20px;"><br/><b id="myDIV"> Sending Email/SMS</b><br/></p>
	
	 </center>
	 <div id="myProgress">
          <div id="myBar"></div>

     </div>
    <?php echo "<br/><center><a href='".base_url()."'><span class='homeicon'></span></a></center>";?>
	
</div>
<script>
window.onload=move();
function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 100);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
	  if(width=='100'){
		   $(".pv").append("<b><img src='https://www.bloomindia.in/assets/public/img/tick_mark.png' style='width:50px;padding:10px'>Successfully sent email/SMS To the Donors. They Should reachout to you soon.</b>");
		   $(".homeicon").append("<center><a href='<?php echo base_url();?>'><img  width=15% src='<?php echo public_img_url();?>home.png'></a></center>");
		   var element = document.getElementById("myDIV");
		   element.classList.add("mystyle");
		}
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
</script>