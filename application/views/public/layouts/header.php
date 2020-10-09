<link rel="stylesheet" type="text/css" href="<?php echo public_css_url();?>layout.css"/>

<?php 
     $this->load->library('session');
?>

<header id="header">
<nav class="navbar" onload = "scrolltop()">
    <div class="navbar-header">
      <button type="button" class="navb navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <div><a href="<?php echo base_url();?>"><img src="<?php echo public_img_url();?>new_logo.png" width="80px" style = "margin-left:20px;margin-bottom:10px;"></a></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="navbar-nav" style="font-weight: bold;">
        <li><a href="<?php echo base_url();?>" <?php if($pageName=='home'){ echo "class='active'"; }?>>Home</a></li>
        <li><a href="<?php echo base_url();?>search-donor" <?php if($pageName=='search_donor' || $pageName=='available' || $pageName=='seekerpopup' ){ echo "class='active'"; }?>>Search</a></li>
         <?php 
     $this->load->library('session');
     $email = $this->session->userdata('email');
     if(empty($email))
     {?>
        <li><a href="<?php echo base_url();?>become-donor"  <?php if($pageName=='become_donor'){ echo "class='active'"; }?>>Pledge</a></li>
	<?php }
    ?>
		<li><a href="<?php echo base_url();?>refertofriend"  <?php if($pageName=='refertofriend'){ echo "class='active'"; }?>>Refer</a></li>
		<li><a href="<?php echo base_url();?>bloom-story"  <?php if($pageName=='bloom_story'){ echo "class='active'"; }?>>Bloom Story</a></li>
        
        
	


    <?php 
     $email = $this->session->userdata('email');
     if(!empty($email))
     {?>
      <li><a href="<?php echo base_url();?>profile" ?>Profile</a></li>
      <li><a href="<?php echo base_url();?>logoutUser" ?>Logout</a></li>
    <?php }
    else{?>
        <li><a href="<?php echo base_url();?>login"  <?php if($pageName=='login'){ echo "class='active'"; }?>>Update Profile</a></li>
    <?php
        }
    ?>
         
    
      </ul>
    </div>
</nav>
</header>
<script>
    function scrolltop(){
        console.log("scroll top WAS CALLED")
    document.getElementById("header").scrollIntoView({ behavior: 'smooth' });}
</script>