<?php
Abstract class BaseTemplate
{
	protected $registry;
	
	function __construct($registry) {
		$this->registry = $registry;
	}
	
	function model($name){
		require_once(__SITE_PATH.$this->registry->models.$name.'.model.php');
		$model = $name."Model";
		$this->$model = new $model($this->registry->connector);
	}
	
	function view($name){
		require_once(__SITE_PATH.$this->registry->views.$name.'.view.php');
		$view = $name."View";
		$this->$view = new $view($this->registry);
	}
}
?>