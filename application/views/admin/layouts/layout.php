<?php 
      
if($pageName=='admin_login'){
    $this->view($content);
}else{
      $this->view($header);
      $this->view($sidebar);
      $this->view($content);
      $this->view($footer); 
}
		      
		      
?>

		
