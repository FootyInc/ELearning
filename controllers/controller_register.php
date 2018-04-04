<?php
class registerController extends baseController
{
	
	function __construct($registry)
	{
		$name = "register";
		parent::__construct($registry);
		parent::findView($name);
	}
	
	
	
	function index()
	{
		 $this->register->register();
	}
	

}//registerController




?>