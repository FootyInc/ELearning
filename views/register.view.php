<?php
class registerView extends BaseView
{
function register()
{

?>
<!DOCTYPE html>
<!-- saved from url=(0041)https://getbootstrap.com/examples/cover/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
     <link href="css/startup.css" rel="stylesheet">
     <link href="css/register.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  

 
    
    <div class="cover">
        <div class="reg-text">
            
             <!-- nav   !-->
            
            
              <nav id = "regNav" class="navbar navbar-default " role="navigation">		
      <div class="navbar-header col-xs-12 ">
      	<div class="row">
	      	<div id="head" class="col-xs-12" >
	      		<div class="col-xs-12 col-sm-10">
		          <a class="col-xs-12 col-sm-5" href="http://localhost/ProgramLearnWeb/index">
		          	<img class ="" id="headlogo" src="images/footylogo.png">
		          </a>			          
		          <h1 class="col-xs-12 col-sm-5">E-Learning</h1>
		        </div>
		        <div  id="info" class="col-xs-12 col-sm-2">        
		        </div>			   
		   	</div>
		</div>
	  </div>	
	</nav>
            
        <!-- nav !-->
            

             <div class="panel panel-default img-rounded " >
              <div class="panel-heading   "><h1 class ="custom-font"><center>HTML Elements </center></h1></div>
              <div class="panel-body">    	
              <form class="form-horizontal" style="color: black" method="post" action="">
        <fieldset>

        <!-- Form Name -->
        <legend>Register Page</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Username</label>  
          <div class="col-md-4">
          <input id="inputUName" name="inputUName" type="text" placeholder="Enter username" class="form-control input-md"> 
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Password</label>  
          <div class="col-md-4">
          <input id="inputPassword" name="inputPassword" type="text" placeholder="Enter password" class="form-control input-md"> 
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">First Name</label>  
          <div class="col-md-4">
          <input id="inputFName" name="inputFName" type="text" placeholder="Enter your first name" class="form-control input-md">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Last Name</label>  
          <div class="col-md-4">
          <input id="inputLName" name="inputLName" type="text" placeholder="Enter your last name" class="form-control input-md">
          </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
          <div class="col-md-12">
            <input type="hidden" name="subaction" value="register">
            <button id="button1id" name="button1id" class="btn btn-primary">Register</button>
            <button id="button2id" name="button2id" class="btn btn-primary" type="reset">Reset</button>
            <button id="button2id" name="button2id" class="btn btn-primary">Back</button>
          </div>
        </div>

        </fieldset>
        </form>

        </div>    
            </div>
          

            
            
            
            
             <!--    !-->
        </div>
    </div>




    
      
    <footer>
        Designed  by Alex Lord
    </footer>

 

</body>
</html>




<?php

}


}//registerTemplate

?>
