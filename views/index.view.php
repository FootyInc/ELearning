<?php
class indexView extends BaseView
{
	
	function __construct($registry)
	{
		parent::__construct($registry);		
	}
		



function admin()
{


	  $accountType = $_SESSION['accountype'];
	  $userID = $_SESSION['userID'];
	  $fName = $_SESSION['fname'];
	  $lName = $_SESSION['lname'];

?>
     <div>
      <div class="panel panel-default img-rounded  Bordwhite" style = "color: black" >
      <div class="panel-heading   "><h1 class ="custom-font"><center>Control Panel</center></h1></div>
      <div class="panel-body">
      	<h1>Welcome <?php echo $fName, $userID, "  ", $lName ?></h1>    	
      	<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Web Development</h3>
		        <p>Manage web development</p>
		        <p><a href="http://localhost/Elearning/web" class="btn btn-primary" role="button">Web</a></p>
		      </div>
		    </div>
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Software Development</h3>
		        <p>Manage software development</p>
		        <p><a href="" class="btn btn-primary" role="button">Coming Soon!</a></p>
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
	  $userID = $_SESSION['userID'];
	  $fName = $_SESSION['fname'];
	  $lName = $_SESSION['lname'];

?>

<div>
      <div class="panel panel-default img-rounded  Bordwhite" style = "color: black" >
      <div class="panel-heading   "><h1 class ="custom-font"><center>Control Panel</center></h1></div>
      <div class="panel-body">
      	<h1>Welcome <?php echo $fName, " ", $lName ?></h1>    	
      	<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Web Development</h3>
		        <p>Learn, Test your web development skills</p>
		        <p><a href="http://localhost/Elearning/web" class="btn btn-primary" role="button">Web</a></p>
		      </div>
		    </div>
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Software Development</h3>
		        <p>Learn, Test your software development skills</p>
		        <p><a href="" class="btn btn-primary" role="button">Coming Soon!</a></p>
		      </div>
		    </div>  
</div>    
    </div>
  </div>
    
        
<?php

}//admin
	
}//index
?>