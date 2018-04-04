<?php
class Router
{
			private $controller;		
			private $action;
			private $registry;
			
			function __construct($registry)
			{
				$this->registry = $registry;	
			}//contruct

			
			public function getController()
			{
				
				
				               
	        
				/*** get the route from the url ***/
		        $route = (empty($_GET['rt'])) ? '' : $_GET['rt'];
				$parts = explode('/', $route);
				
			
		        
		        if (empty($route))
		        {
		        	
		      		header("Location: ".$this->registry->address."index");
					exit();
					
				}   
		        
		        else
		        {
		            if(isset($parts[0]))
					  {                
	  	
						 
						 /*** Action now equals index ***/
						    $this->controller = $this->action = $parts[0];
						
					   }
					elseif (isset($parts[1]))
					{
						
						$this->controller = $this->action = $parts[1];
					}
					else 
						{
							print_r("..... else statement");
						}
					
					
				}
						

						
						require_once(__SITE_PATH.$this->registry->controllers.'controller_base.php');
						$this->file = __SITE_PATH.$this->registry->controllers."controller_".$this->controller.".php";
						
					//	print_r($this);
						
						if(is_readable($this->file) == FALSE)
						{
							print_r("not readable");
							header("Location: ".$this->registry->address."index");
						}
						
						
						
						//set the path
						require_once($this->file);
						$class = $this->controller . 'Controller';
                        $controller = new $class($this->registry);
						
						
						if (empty($this->action))
						{
							
							$this->action = 'index';
						}
						elseif (is_callable(array($controller, $this->action)) == false)
                        {
                        	
                            $action = 'index';
                        }
                            else
                        {
                        	
                           $action = $this->action;
                        }
                        
						$controller->$action();
			
						
						
			}//getController
			
			
			//Get Action
			
			
			
			

 
		    
}//router
?>