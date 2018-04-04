<?php
class wlangView extends BaseView
{
	
	function __construct($registry)
	{
		parent::__construct($registry);		
	}
		



function admin()
{


	  $accountType = $_SESSION['accountype'];

?>
     
	
	       <div>
      <div class="panel panel-default img-rounded  Bordwhite" >
      <div class="panel-heading   "><h1 class ="custom-font"><center>Web Development</center></h1></div>
      <div class="panel-body">    	
      	<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>HTML</h3>
		        <p>Manage HTML topics</p>
		        <p><a href="//localhost/ELearning/html" class="btn btn-primary btn-lg" role="button">Manage</a></p>
		      </div>
		    </div>
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>PHP</h3>
		        <p>Manage PHP topics</p>
		        <p><a href="//localhost/ELearning/php" class="btn btn-primary btn-lg" role="button">Manage</a></p>
		      </div>
		    </div> 
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>JQuery</h3>
		        <p>Manage JQuery.</p>
		        <p><a href="//localhost/ELearning/jQuery" class="btn btn-primary btn-lg" role="button">Manage</a></p>
		      </div>
		    </div>  
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Tests</h3>
		        <p>Manage Tests</p>
		        <p><a href="" class="btn btn-primary btn-lg" role="button">Manage</a></p>
		      </div>
		    </div>  
</div>    
    </div>
  </div>
  
  
	
     
        
<?php

}//admin



function normal()
{


	  $accountType = $_SESSION['accountype'];

?>
   
	
	       <div>
      <div class="panel panel-default img-rounded  Bordwhite" >
      <div class="panel-heading   "><h1 class ="custom-font"><center>Web Development</center></h1></div>
      <div class="panel-body">    	
      	<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>HTML</h3>
		        <p>Tutorials On HTML</p>
		        <p><a href="http://localhost/ELearning/html" class="btn btn-primary btn-lg" role="button">Learn</a></p>
		      </div>
		    </div>
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>PHP</h3>
		        <p>Tutorials on PHP</p>
		        <p><a href="//localhost/ELearning/php" class="btn btn-primary btn-lg" role="button">Learn</a></p>
		      </div>
		    </div> 
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>JQuery</h3>
		        <p>Learn JQuery.</p>
		        <p><a href="//localhost/ELearning/jQuery" class="btn btn-primary btn-lg" role="button">Learn</a></p>
		      </div>
		    </div>  
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Test</h3>
		        <p>Take the test.</p>
		        <p><a href="" class="btn btn-primary btn-lg" role="button">Test</a></p>
		      </div>
		    </div>  
		    
</div>    
    </div>
  </div>
  
  
    
	
       
        
<?php

}//admin
	
}//wlang
?>