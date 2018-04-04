<?php
class Registry
{
	private $vars = array();
	
	public function __construct()
	{	
		
		include 'extras/init.php';
		
		
	}
	
	public function __set($index, $value)
 	{
        $this->vars[$index] = $value;
 	}
 	public function __get($index)
	{
        return $this->vars[$index];
	}	
	public function getPath($path)
	{
		$url = $this->__get("address").$this->__get($path."Path");
		return $url;
	}
	
	
	
} 
$registry = new Registry();
?>
