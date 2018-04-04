<?php
Abstract class BaseView
{
	protected $registry;
	
	function __construct($registry) {
		$this->registry = $registry;
	}
	
}
?>