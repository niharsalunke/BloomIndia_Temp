<?php 
	if($pageName=='offers_api' || $pageName=='events_api' || $pageName=='partners_api'){
		$this->view($content);
	}else{
		$this->view($header);  
		$this->view($content); 
		$this->view($footer);
	}
		
