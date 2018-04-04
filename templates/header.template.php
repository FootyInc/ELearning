<?php
class headerTemplate extends BaseTemplate
{
	//private $head;	
	
	public function __construct($registry)
	{
		parent::__construct($registry);
	}
	
	public function output()
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

    <title>E-Learning Application</title>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
    
    
    <style>


.modal.modal-wide .modal-dialog {
		  width: 90%;
		}
		.modal-wide .modal-body {
		  overflow-y: auto;
		}
		
		/* irrelevant styling */
		body { text-align: center; }
		body p { 
		  max-width: 400px; 
		  margin: 20px auto; 
		}
		#tallModal .modal-body p { margin-bottom: 900px }
		
		
		.textarea{
    background: url(http://i.imgur.com/2cOaJ.png);
	background-attachment: local;
	background-repeat: no-repeat;
	padding-left: 35px;
	padding-top: 10px;
    border-color:#ccc;
}

.text{
	font-size: 20px;
}
		
		
</style>
<script>


	
    $(".modal-wide").on("show.bs.modal", function() {
  var height = $(window).height() - 200;
  $(this).find(".modal-body").css("max-height", height);
});


$(document).ready(function()
{
    $("#quizBtn").click(function()  //awaiting botton event to trigger ajac request, this controls data to remove function.
    {
       
       
        

        $.ajax(
        {
            type: "POST",
            url: 'quiz.php',
            data: $('#quizForm').serialize(),
            success: function(result)
            {
                $("#quizReply").html(result);
            }
        });
    });
});
    	
    




           	
          
</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
      
      <div class="cover">
        <div class="reg-text">
            
	





	<?php
	}
}
?>