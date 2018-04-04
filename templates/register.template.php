<?php
class registerTemplate extends BaseTemplate
{
	public function __construct($registry)
	{
		$name = "register";		
		parent::__construct($registry);	
		parent::model($name);
		parent::view($name);
	}
	
	public function register()
	{
		
		error_reporting(E_ALL & ~E_NOTICE);
		
	

    
	   	if(isset($_POST['inputUName'], $_POST['inputPassword'])){
	   	$this->registerModel->createUser($_POST);
		}
		else {
	     
		 $this->registerView->register();
		 
		 exit;
		}
	   
			
			
			
		header("location:login");
			
	}
	
	
	
}//registerTemplate

?>
