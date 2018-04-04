<?php
class navigationTemplate extends BaseTemplate
{

	public function __construct($registry)
	{
		parent::__construct($registry);	
		parent::view("navigation");
	}
	
	public function output()
	{
		$accountType = $_SESSION['accountype'];
		$route = (empty($_GET['rt'])) ? '' : $_GET['rt'];
        $parts = explode('/', $route);
	?>
	

	
	 <nav id = "regNav" class="navbar navbar-default " role="navigation">		
      <div class="navbar-header col-xs-12 ">
      	<div class="row">
	      	<div id="head" class="col-xs-12" >
	      		<div class="col-xs-12 col-sm-10">
		          <a class="col-xs-12 col-sm-5" href="http://localhost/ELearning/index">
		          	<img class ="" id="headlogo" src="images/footylogo.png">
		          </a>			          
		          <h1 class="col-xs-12 col-sm-5">E-Learning</h1>
                    <div  id="info" class="col-xs-12 col-sm-1 ">
                    <p style=" padding: 30px;  "><a  href="http://localhost/ELearning/logout" class="btn btn-lg btn-primary " role="button">Logout</a></p>
		        </div>	
		        </div>
		        		   
		   	</div>
		</div>
	  </div>	
	</nav>
	
	
         	
		
<?php
	}
	public function admin()
	{
		$accountType = $_SESSION['accountype'];
		$route = (empty($_GET['rt'])) ? '' : $_GET['rt'];
        $parts = explode('/', $route);
	?>
	

	
	
	<nav class="navbar navbar-default " role="navigation">		
      <div class="navbar-header col-xs-12 ">
      	<div class="row">
	      	<div id="head" class="col-xs-12" >
	      		<div class="col-xs-12 col-sm-10">
		          <a class="col-xs-12 col-sm-5" href="http://localhost/ELearning/index">
		          	<img class ="body" id="headlogo" src="images/logo-imhappy.jpg">
		          </a>			          
		          <h1 class="col-xs-12 col-sm-7 custom-font font-underline">Programming Learning Application</h1>
		        </div>
		        <div  id="info " class="col-xs-12 col-sm-2">
		        
		          	<p><a href="http://localhost/ELearning/logout" class="btn btn-primary" role="button">Logout</a></p>
		        
		        </div>			   
		   	</div>
		</div>
	  </div>	
	</nav>
	<div>
          
	
      
         	
		
<?php
	}
}
?>