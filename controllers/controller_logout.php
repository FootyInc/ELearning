<?php
class logoutController extends baseController
{
	
	function __construct($registry)
	{
		$name = "logout";
		parent::__construct($registry);
		parent::findView($name);
	}
	
	
	
	function index()
	{
			

    
	 
		 $this->logout->logout();
		 
	
		
	}
	
	
	
}//logoutController




?>