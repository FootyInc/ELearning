<?php
abstract Class baseController
{
	private $registry;
	
	function __construct($registry)
	{
		$this->registry = $registry;
		
		
		require_once(__SITE_PATH.$this->registry->models.'base.model.php');
		require_once(__SITE_PATH.$this->registry->views.'base.view.php');
		require_once(__SITE_PATH.$this->registry->templates."base.template.php");
		require_once(__SITE_PATH.$this->registry->templates.'header.template.php');
		require_once(__SITE_PATH.$this->registry->templates.'navigation.template.php');
	    require_once(__SITE_PATH.$this->registry->templates.'footer.template.php');
		
		$this->header = new headerTemplate($registry);
		$this->navigation = new navigationTemplate($registry);
		$this->footer = new footerTemplate($registry); 
		
		
	}//construct
	
	abstract function index();
	
	function findView($name)
	{
		
		
	
		
		require_once(__SITE_PATH.$this->registry->templates.$name.'.template.php');
		
		$fileview = $name."template";
		$this->$name = new $fileview($this->registry);
	}//findView
	
	
	
}//baseController



?>