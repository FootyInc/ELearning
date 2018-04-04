<?php
class logoutTemplate extends BaseTemplate
{
	public function __construct($registry)
	{
		$name = "logout";		
		parent::__construct($registry);	
		
	}
	
	public function logout()
	{
		session_start();
		$name = $_SESSION['name'];
		session_destroy();
		
		header("location:login?logout!");

		
	
	}
	
}//logoutTemplate

?>
