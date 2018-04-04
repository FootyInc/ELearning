<?php
class loginTemplate extends BaseTemplate
{
	public function __construct($registry)
	{
		$name = "login";		
		parent::__construct($registry);	
		parent::model($name);
		parent::view($name);
	}
	
	public function login()
	{
		session_start();
		error_reporting(E_ALL & ~E_NOTICE);
		
	

    if(!$_SESSION['loggedin'])
	   {
	   	if(isset($_POST['inputUName'], $_POST['inputPassword'])){
	   	$this->loginModel->checklogin($_POST);
		}
		else {
	     
		 $this->loginView->login();
		 
		 exit;
		}
	   }
			
			
			
		header("location:index");
			
	}
	
	public function checkLogin()
	{
		$login = $this->registry->parts[2];
		$this->loginModel->checkLogin();
	}
	
}//loginTemplate

?>
