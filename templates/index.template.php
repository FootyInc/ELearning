<?php
class indexTemplate extends BaseTemplate
{

	public function __construct($registry)
	{
		$name = "index";		
		parent::__construct($registry);	
		
		parent::view($name);
	}
	
	public function admin()
	{
		
	   	$this->indexView->admin();
	  
	}
		public function normal()
	{
		
	   	$this->indexView->normal();
	  
	}
	public function leader()
	{
		
	   	$this->indexView->leader();
	  
	}
	public function aoh()
	{
		
	   	$this->indexView->aoh();
	  
	}
	


}//indexTemplate

?>