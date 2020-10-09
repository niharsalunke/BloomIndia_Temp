<style>
	
	  .update {
  float: right;
  width: 65%;
  margin: auto;
  margin-top: 25px;
}

		.container{
			
			margin-top: 80px;
		}
		

.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default {
  background-image: linear-gradient(#fe9683,#f6755e);;
	
  color: black;
}
		
		
		.btn-default{
			background-image: linear-gradient(white, #dadad5);
		}
		/* Center the avatar image inside this container */
  .imgcontainer {
    text-align: left;
    margin: 50px 0 50px 0;
  }
 
  /* Avatar image */
  .avatar {
    width: 300px;
    height: 500px;
    border-radius: 0;
    margin-top: auto;
    vertical-align: left;
	transform: translate(50px, 50px);
   }
  
		
	</style>





<div class="container" style = "text-align: center; justify-content: center;">
    <img src="/assets/public/img/updatePic.jpg" alt="" class="avatar" style="left: auto;" width="20" height="20"> 
<div class="update">
<b><blockquote style="font-size:40px;">Update your <span style="color:red;">Profile</span><span style="color:Black;"> in just few clicks</span></blockquote></b>
		
			  <div class = "row col-xs-2"></div>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="col-xs-8" style = "text-align: center; justify-content: center;">
		  <div class = "row" style=" background-color: #eeeeee; border-radius: 30px;">
		  <div class = "col-xs-3"></div>
			  <div class = "col-xs-6">
		   <form class="form-signin" method="POST" action="/login<?php if(isset($page) || isset($_GET['page'])){echo '?page=refer';}?>">
		   <br>
        <h3  style="font-family: Poppins;">Enter your Registered email address</h3>
        
        
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name= "email" size = "40" id="inputEmail" class="form-control" placeholder="Email id" required autofocus style=" font-size: 20px; margin-top: 40px;"<?php if(isset($otpSent)) echo 'value='.$email; ?>>
		
		<br><br>
		 <?php if(isset($otpSent)){ ?>	   
			   <label for="inputEmail" class="sr-only">OTP</label>
        <input type="password" size = "40" name= "otp" id="inputOTP" class="form-control" placeholder="OTP" required autofocus style=" font-size: 20px; margin-top: 10px;">
        <?php } ?>
           

         <?php if(isset($page) || isset($_GET['page'])){ ?>   
        <input type="hidden" name="page" class="form-control" value="<?php echo 'refer'; ?>">
      <?php } ?>

         <label><?php if(isset($message)) echo $message; ?> </label>
        <button class="btn btn-lg btn-default btn-block" type="submit"  style="font-family: Poppins; margin-top: 10px; margin-bottom: 40px;"><?php if (isset($otpSent)){echo "Verify OTP";} else{echo "Send OTP";}?></button>
      </form></div>
		  <div class = "col-xs-2"></div>
		  
		  </div>
        
      </div>
			 <div class = "row col-xs-2"></div>

    </div> <!-- /container -->
	</div>
	

