<?php
	
	
	
	
    $site_path = realpath(dirname(__FILE__));
	define('__SITE_PATH',$site_path);
	
	require_once('registry.php');
	require_once('router.php');
	require_once('connector.php');
	$registry->connector = new Connector();
	$registry->router = new Router($registry);
	$registry->router->getController();	
	   
	
	   
?>