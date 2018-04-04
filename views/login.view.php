<?php
class loginView extends BaseView
{
	


	

function test()
{
	?>
	<h1>Test Login Call Function Complete</h1>
	<?php
}//test


function login()
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
     <link href="css/cover.css" rel="stylesheet">
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
        <div class="cover-text">
            <h1>E-Learning Application</h1>
            <p class="lead">This is a E-Learning Attachable Web Application.</p>
            
            
            
            <form id = "signin" class = "form-signin " method = "POST" action="">
                <div class = "form-group">
                    <input class = "form-control" id = "inputUName" name = "inputUName" placeholder = "Username" type = "text">
                </div>
                 <div class = "form-group">
                    <input class = "form-control" id = "inputPassword" name = "inputPassword" placeholder = "Password" type = "password">
                </div>
                 <div class = "form-group ">
                    <input type="hidden" name="subaction" value="login">
                    <button class=" btn-lg btn btn-info" name="submit" type="submit">Sign In</button>
                     <a href="register" class="btn btn-info btn-lg " data-toggle="modal" data-target="#regModal" role="button">Register</a>
                </div>
              
            </form>
            <img src="img/alex.jpg" alt="image" class="img-circle">
        </div>
    </div>
    
     
  
    <!-- register Modal --> 
  <div id="regModal" style="color:black" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">Tables</h2>
      </div>
      <div class="modal-body">
      <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Add Question</h3>
		        <p>Add a question</p>
		         <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tableModal" role="button">Add</a></p>
		      </div>
		    </div>	
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Remove Question</h3>
		        <p>Remove a question</p>
		         <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tableModal" role="button">Remove</a></p>
		      </div>
		    </div>	
      </div>
      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- register Modal -->
 
  
    
    
   
        
    
   
    
    <footer>
        Designed  by Alex Lord
    </footer>

 

</body>
</html>




<?php

}


}//loginTemplate

?>
