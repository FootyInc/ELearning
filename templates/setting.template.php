<?php
class settingTemplate extends BaseTemplate
{

	public function __construct($registry)
	{
		$name = "setting";		
		parent::__construct($registry);	
		
		parent::view($name);
	}
	
	public function admin()
	{
		
	   	$this->settingView->admin();
	  
	}
		public function normal()
	{
		
	   	$this->settingView->normal();
	  
	}
	


}//settingTemplate

?>