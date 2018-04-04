<?php
class indexController extends baseController
{
	
	
	function __construct($registry)
	{
		$name = "index";
		parent::__construct($registry);
		parent::findView($name);
	}
	
	
	
	function index()
	{
		
		
		session_start();
		
		$accountType = $_SESSION['accountype'];

    if(!$_SESSION['loggedin'])
	   {
	     
		 header("location:login");
		 exit;
	   }
	   
	   if($accountType == "super")
	   {
	   	$this->header->output();
		$this->navigation->admin();
	   	$this->index->admin();
		$this->footer->output();
	   }
	
	   	   
	   else  {
	   	$this->header->output();
		$this->navigation->output();
	   	$this->index->normal();
		$this->footer->output();
		   
	     }
		
		
		
		
	
		
		
		
	}
	
	
	
}//indexController




?>