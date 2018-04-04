<?php
class loginController extends baseController
{
	
	function __construct($registry)
	{
		$name = "login";
		parent::__construct($registry);
		parent::findView($name);
	}
	
	
	
	function index()
	{
			

    
	 
		 $this->login->login();
		 
	
		
	}
	
	function checkLogin()
	{
		
		
		if(isset($_POST['subaction']) && $_POST['subaction'] == 'login')
{
      try
         {
             $this->login->checklogin();
         }
    catch(PDOException $e)
         {
          trigger_error($e);
         }
		
}
else
	{
		$this->login->checkLogin();
	}
	
				
			
	
	}//checkLogin
	
}//loginController




?>