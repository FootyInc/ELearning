<?php
class wlangTemplate extends BaseTemplate
{

	public function __construct($registry)
	{
		$name = "wlang";		
		parent::__construct($registry);	
		
		parent::view($name);
	}
	
	public function admin()
	{
		
	   	$this->wlangView->admin();
	  
	}
		public function normal()
	{
		
	   	$this->wlangView->normal();
	  
	}
	public function leader()
	{
		
	   	$this->wlangView->leader();
	  
	}
	public function aoh()
	{
		
	   	$this->wlangView->aoh();
	  
	}
	


}//wlangTemplate

?>