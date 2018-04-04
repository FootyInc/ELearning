<?php
class phpView extends BaseView
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
      <div class="panel-heading   "><h1 class ="custom-font"><center>HTML Elements </center></h1></div>
      <div class="panel-body">    	
      	<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Tables</h3>
		        <p>Manage Tables content</p>
		         <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tableModal" role="button">Manage</a></p>
		      </div>
		    </div>
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Forms</h3>
		        <p>Manage Forms content</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#formModal" role="button">Manage</a></p>
		      </div>
		    </div> 
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>CSS</h3>
		        <p>Manage CSS content</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#cssModal" role="button">Manage</a></p>
		      </div>
		    </div>  
		     <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Tags</h3>
		        <p>Manage Tags content</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tagModal" role="button">Manage</a></p>
		      </div>
		    </div>  
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Lists</h3>
		        <p>Manage Lists content</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#listModal" role="button">Manage</a></p>
		      </div>
		    </div>  
		        <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Quiz</h3>
		        <p>Manage Quiz</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#quizModal" role="button">Manage</a></p>
		      </div>
		    </div>  
</div>    
    </div>
  </div>
  
  <!-- Table Modal --> 
  <div id="tableModal" style="color:black" class="modal modal-wide fade">
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
 <!-- tables Modal -->
 

  <!-- Form Modal --> 
 <div id="formModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">Forms</h2>
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
</div>
 <!-- form Modal -->
  <!-- CSS Modal --> 
 <div id="cssModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title">Cascading Style Sheets</h1>
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
 <!-- CSS Modal -->
  <!-- Tags Modal --> 
  <div id="tagModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title">HTML Tags</h1>
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
 <!-- Tags Modal -->
  <!-- Lists Modal --> 
  <div id="listModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
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
 <!-- Lists Modal -->
<!-- Quiz Modal --> 
 <div id="quizModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title">HTML Quiz</h1>
      </div>
      <div class="modal-body">	
      		<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Add Question</h3>
		        <p>Add a question</p>
		         <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addQuizModal" role="button">Add</a></p>
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
 <!-- Quiz Modal -->
 <!-- QuizAddNestedModal --> 
 <div id="addQuizModal" style="color:black" class="modal  fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title">Add Question</h1>
      </div>
      <div class="modal-body">	
      	
 <form id = "addQuestionForm" name = "addQuestionForm" method="post" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add a new question</legend>

<div class="form-group"> 
  <div class="col-md-4">
  <input id="creID" name="creID" type="hidden" value="<?php echo $userID ?>" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="qDes">Question</label>  
  <div class="col-md-4">
  <input id="qDes" name="qDes" type="text" placeholder="Type question here!" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="opOne">Option A</label>  
  <div class="col-md-4">
  <input id="opOne" name="opOne" type="text" placeholder="Type option 1 here!" class="form-control input-md"> 
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="opTwo">Option B</label>  
  <div class="col-md-4">
  <input id="opTwo" name="opTwo" type="text" placeholder="Type option 2 here!" class="form-control input-md"> 
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="opThree">Option C</label>  
  <div class="col-md-4">
  <input id="opThree" name="opThree" type="text" placeholder="Type option 3 here!" class="form-control input-md"> 
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="opFour">Option D</label>  
  <div class="col-md-4">
  <input id="opFour" name="opFour" type="text" placeholder="Type option 4 here!" class="form-control input-md"> 
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="qAns">Answer</label>  
  <div class="col-md-4">
  <input id="qAns" name="qAns" type="text" placeholder="Type questions answer here!" class="form-control input-md"> 
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-6">
  	<input type = "hidden" id = "subaction" name = "subaction" value="createTest">
    <button id="Qsubmit" name="Qsubmut" type="submit" class="btn btn-primary">Create</button>
  </div>
</div>

</fieldset>
</form>
<div id = "addQResponse" name="addQResponse"></div>

      		
      </div>

      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- QuizAddNestedModal -->

        
<?php

}//admin

function normal($questions)
{


	  $accountType = $_SESSION['accountype'];

?>
      <div>
      <div class="panel panel-default img-rounded  Bordwhite" >
      <div class="panel-heading   "><h1 class ="custom-font"><center>PHP Elements </center></h1></div>
      <div class="panel-body">    	
      	<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>PHP Syntax </h3>
		        <p>Tutorials On PHP Syntax </p>
		         <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tableModal" role="button">Learn Me</a></p>
		      </div>
		    </div>
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>PHP variables </h3>
		        <p>Tutorials on PHP variables </p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#formModal" role="button">Learn Me</a></p>
		      </div>
		    </div> 
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>PHP Functions</h3>
		        <p>Tutorials on functions</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#cssModal" role="button">Learn Me</a></p>
		      </div>
		    </div>  
		     <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>PHP Echo and Print</h3>
		        <p>Tutorials on echos and print statements</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tagModal" role="button">Learn Me</a></p>
		      </div>
		    </div>  
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Global Variables</h3>
		        <p>Tutorials on global variables</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#listModal" role="button">Learn Me</a></p>
		      </div>
		    </div>  
		        <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Quiz</h3>
		        <p>Test your knowledge with a Quiz!.</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#quizModal" role="button">Take Me</a></p>
		      </div>
		    </div>  
</div>    
    </div>
  </div>
  
  <!-- PHP Syntax  Modal --> 
  <div id="tableModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">Tables</h2>
      </div>
      <div class="modal-body">
      	<h3>HTML Table structure consists of 3 elements </h3>
      	<h1 class = "font-underline">What is PHP</h1>
      	<img class ="" id="tablelDia" src="images/table2.png"/>     	
      	<h1 class = "font-underline">PHP Comments</h1>
      	<img class ="" id="tablelDia" src="images/table3.png"/> 
      	<h1 class = "font-underline">PHP Case Sensitivity</h1>
      	<img class ="" id="tablelDia" src="images/table4.png"/>
      	<h1 class = "font-underline">Stages Implemented</h1>
         <img class ="" id="tablelDia" src="images/table1.png"/>
         <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tabModal" role="button">Try Me</a></p>
      </div>
      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- tables Modal -->
 <!-- TableNested Modal --> 
  <div id="tabModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">Tables</h2>
      </div>
      <div class="modal-body">
      	
      	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script src="jquery-linedtextarea.js"></script>
	<link href="jquery-linedtextarea.css" type="text/css" rel="stylesheet" />
	

      	
      	
      	<textarea  style = "resize: none; !important;height:500px" id ="htmlArea" name="htmlArea" rows="10" cols="60">

</textarea>   
			      		
      	<iframe id="myFrame" width="500" height="500" srcdoc="<h1>Coming Soon!!</h1>" src="demo_iframe.htm"></iframe>



<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
    document.getElementById("myFrame").srcdoc = document.getElementById("htmlArea").value;
}

	


</script>
      	
      </div>
      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- tableNested Modal -->

  <!-- PHP variables  Modal --> 
 <div id="formModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">Forms</h2>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#fmSt1">What is PHP Variable</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#fmSt2">Using PHP Variables</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#fmSt3">Global and local scope</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#fmImp">PHP Data Types</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#fmTry">Try It!</a></li>
   
    
  </ul>
  <style type="text/css">
ul li span {
  margin-right: 1170px;
}

</style>

<script>
           	function test() {
           		document.getElementById("myFrame").srcdoc = document.getElementById("htmlArea").value;
			   }
           </script>


  <div class="tab-content">
  	   
	  <?php	  	  	  
    	//Form 
			//Stage One
			echo "<div id = 'fmSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>PHP Variables</h3>
				<br> 
			  <h4>1. In PHP, a variable starts with the $ sign, followed by the name of the variable:</h4>
			  <img class ='frm1' id='frmImg1' src='images/php/varia.png'/> 		
			</div>";
			//Stage Two
			echo "<div id = 'fmSt2' class = 'tab-pane'><h3 class ='font-underline'>Using PHP Variables</h3>
			 	<br>
			  <h4>1.The PHP echo statement is often used to output data to the screen.</h4>
			  <h4>2.The following example will show how to output text and a variable:.</h4>
			  <br>  
			  <img class ='frm1' id='frmImg2' src='images/php/variaInput.png'/>  
			  <br>
			  <br>
			</div>";
			//Stage Three
			echo "<div id = 'fmSt3' class = 'tab-pane '><h3 class ='font-underline'>Global and local scope</h3>
			<br>
			<h4>1. A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:.</h4>
			<h4>2. Form actions can be used to submit data, for example post stores data as a post type!, Look example below.</h4>
			<img class ='frm1'' id='frmImg4' src='images/php/globalVar.png'/> 
			</div>";
			//Stages Implemented
			echo "<div id = 'fmImp' class = 'tab-pane '><h3 class ='font-underline'>Data Types</h3>
			<br>
			<h4>1. Variables can store data of different types, and different data types can do different things.</h4>
			<h4>2. PHP supports the following data types:.</h4>
			<h3>1. String</h3>
			<h3>2. Integer</h3>
			<h3>3. Float (floating point numbers - also called double)</h3>
			<h3>4. Boolean</h3>
			<h3>5. Array</h3>
			<h3>6. Object</h3>
			<h3>7. NULL</h3>
			<h3>8. Resource</h3>
			</div>";
			//Try it
			echo "<div id = 'fmTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='htmlArea' name='htmlArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='myFrame' name='myFrame' width='500' height='500' srcdoc='<h1>Coming Soon!!</h1>' src='demo_iframe.htm'></iframe>      	
				<button onclick='test()'>Try it</button>   	
			</div>";
		//variables 		
           ?> 
      </div>
      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
 <!-- form Modal -->
  <!-- PHP functions Modal --> 
 <div id="cssModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title">PHP Functions</h1>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#csSt1">PHP Functions</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#csSt2">Function Arguments</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#csSt3">Returning values</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#csImp">Stages implemented</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#csTry">Try It!</a></li> 
  </ul>
  <div class="tab-content">
  	<?php	 
  	//CSS
			//Stage One
			echo "<div id = 'csSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>Function - User Defined Functions</h3>
				<br> 
			  <h4>1. Besides the built-in PHP functions, we can create our own functions.. </h4>	
			  <br>
			  <h4>2. A function is a block of statements that can be used repeatedly in a program..</h4>	
			   <br>
			  <h4>3. A function will be executed by a call to the function.</h4>
			  <br>
			  <img class ='cs3' id='csImg3' src='images/php/functionUser.png'/> 
			</div>";
			//Stage Two
			echo "<div id = 'csSt2' class = 'tab-pane'><h3 class ='font-underline'>Function - Arguments </h3>
			 	<br>
			  <h4>1. Information can be passed to functions through arguments. An argument is just like a variable..</h4>		
			  <br>
			  <h4>2. Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.</h4> 
			  <br>
			  <h4>3. The following example has a function with one argument fname. When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:</h4>
			    <img class ='cs4' id='csImg4' src='images/php/functionArg.png'/> 
			</div>";
			//Stage Three
			echo "<div id = 'csSt3' class = 'tab-pane '><h3 class ='font-underline'>PHP- Returning Values</h3>
			<br> 
			  <h4>1. To let a function return a value, use the return statement: . </h4>
			    <img class ='cs5' id='csImg5' src='images/php/functionRet.png'/> 	
			  <br>
			</div>";
			//Stages Implemented
			echo "<div id = 'csImp' class = 'tab-pane '><h3 class ='font-underline'>Stages Implementated</h3>
			<br> 
			  
			</div>";
			//Try it
			echo "<div id = 'csTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='htmlArea' name='htmlArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='myFrame' name='myFrame' width='500' height='500' srcdoc='<h1>Coming Soon!!</h1>' src='demo_iframe.htm'></iframe>      	
				<button onclick='test()'>Try it</button>   	
			</div>";
		//CSS
  	?>
  	</div>
      </div>
      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- function Modal -->
  <!-- ecoh nd print Modal --> 
  <div id="tagModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title">HTML Tags</h1>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#tgSt1">PHP Echo</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#tgSt2">Echo Variables</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#tgSt3">Print Statement</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#tgImp">Stages implemented</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#tgTry">Try It!</a></li>  
  </ul>
  <div class="tab-content">
  	<?php	
  	//tags
			//Stage One
			echo "<div id = 'tgSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>PHP - Echo Statement</h3>
				<br> 
			  <h4>1. The echo statement can be used with or without parentheses: echo or echo()..</h4>	
			  <br>
			    <h4>2. The following example shows how to output text with the echo command (notice that the text can contain HTML markup):.</h4>
			    <img class ='cs1' id='csImg1' src='images/php/echo1.png'/> 	
			   <br>
			</div>";
			//Stage Two
			echo "<div id = 'tgSt2' class = 'tab-pane'><h3 class ='font-underline'>PHP - Display Variables</h3>
			 	<br> 
			  <h4>1. The print statement can be used with or without parentheses: print or print().. </h4>	
			  <br>
			  <h4>2. The following example shows how to output text with the print command (notice that the text can contain HTML markup):
			  </h4>	
			  <img class ='cs1' id='csImg1' src='images/php/print1.png'/> 
			   <br>
			</div>";
			//Stage Three
			echo "<div id = 'tgSt3' class = 'tab-pane '><h3 class ='font-underline'>Stage Three</h3>
			<br>
			
			</div>";
			//Stages Implemented
			echo "<div id = 'tgImp' class = 'tab-pane '><h3 class ='font-underline'>Stages Implementated</h3>
			<br>
		
			</div>";
			//Try it
			echo "<div id = 'tgTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='htmlArea' name='htmlArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='myFrame' name='myFrame' width='500' height='500' srcdoc='<h1>Hit Try Me!!</h1>' src='demo_iframe.htm'></iframe>      	
				<button onclick='test()'>Try it</button>   	
			</div>";
		//Tags 
  	?>
  	</div>
      </div>
      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- Tags Modal -->
  <!-- global variables Modal --> 
  <div id="listModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#ltSt1">Super Globals</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#ltSt2">Globals</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#ltSt3">Server</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#ltImp">Stages implemented</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#ltTry">Try It!</a></li>  
  </ul>
  <div class="tab-content">
  	<?php	 
  	//Lists 
			//Stage One
			echo "<div id = 'ltSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>PHP Global Variables</h3>
				<br> 
			  <h4>1. Several predefined variables in PHP are superglobals, which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.</h4>
			  <br>
			  <h4>2. The PHP superglobal variables are:</h4>
			  <h3>1. GLOBALS</h3>
			   <h3>2. SERVER</h3>
			    <h3>3. REQUEST</h3>
			     <h3>4. POST</h3>
			      <h3>5. GET</h3>
			       <h3>6. FILES</h3>
			        <h3>7. ENV</h3>
			         <h3>8. COOKIE</h3>
			          <h3>9. SESSION</h3>
		
			</div>";
			//Stage Two
			echo "<div id = 'ltSt2' class = 'tab-pane'><h3 class ='font-underline'>PHP - Globals</h3>
			 	<br>
			  <h4>1. GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script (also from within functions or methods)..</h4>
			  <br>  
			 
			  <h4>2. TPHP stores all global variables in an array called GLOBALS[index]. The index holds the name of the variable..</h4>
			  <br>
			  <h4 class = 'style = 'text-align: center;'>3. These can be used to submit data in the form of Form Post data.</h4>
			  <br>
			  <h4>4. The example below shows how to use the super global variable GLOBALS:</h4>
			  <br>
			  <img class ='frm1'' id='frmImg3' src='images/php/global.png'/> 
			</div>";
			//Stage Three
			echo "<div id = 'ltSt3' class = 'tab-pane '><h3 class ='font-underline'>PHP - Server</h3>
			<br>
			<h4>1. SERVER is a PHP super global variable which holds information about headers, paths, and script locations.</h4>
			<h4>2. The example below shows how to use some of the elements in SERVER:</h4>
			<img class ='frm1'' id='frmImg4' src='images/php/server.png'/> 
			</div>";
			//Stages Implemented
			echo "<div id = 'ltImp' class = 'tab-pane '><h3 class ='font-underline'>Stages Implementated</h3>
			<br>
			</div>";
			//Try it
			echo "<div id = 'ltTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='htmlArea' name='htmlArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='myFrame' name='myFrame' width='500' height='500' srcdoc='<h1>Hit Try Me!!</h1>' src='demo_iframe.htm'></iframe>      	
				<button onclick='test()'>Try it</button>   	
			</div>";
		//Lists	
  	?>
  	</div>
      </div>
      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- Lists Modal -->
<!-- CSS Modal --> 
 <div id="quizModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title">HTML Quiz</h1>
      </div>
      <div class="modal-body">		
			<form  method="post" id="quizForm" name="quizForm" type = "post" >		
			
                 
            
			<?php
			if(count($questions)>0)
			{
				foreach($questions as $question)
				{
				?>
				<h3><?php echo $question['question'] ?></h3>

				<div class = "col-xs-12">
				
				<input type="radio" name="answer[<?php echo $question['testID'] ?>]" id="answer[<?php echo $question['testID'] ?>]" value="<?php echo $question['option1']?>" />
				
				<label for="question-1-answers-A">A)<?php echo $question['option1'] ?> </label>
				
				</div>
				
				<div class = "col-xs-12">
				
				<input type="radio" name="answer[<?php echo $question['testID'] ?>]" id="answer[<?php echo $question['testID'] ?>]" value="<?php echo $question['option2']?>" />
				
				<label for="question-1-answers-B">B)<?php echo $question['option2'] ?></label>
				
				</div>
				
				<div class = "col-xs-12">
				
				<input type="radio" name="answer[<?php echo $question['testID'] ?>]" id="answer[<?php echo $question['testID'] ?>]" value="<?php echo $question['option3']?>" />
				
				<label for="question-1-answers-C">C)<?php echo $question['option3'] ?></label>
				
				</div>
				
				<div class = "col-xs-12">
				
				<input type="radio" name="answer[<?php echo $question['testID'] ?>]" id="answer[<?php echo $question['testID'] ?>]" value="<?php echo $question['option4']?>" />
				
				<label for="question-1-answers-D">D)<?php echo $question['option4'] ?></label>
				<br>
				<br>
				
				
				</div>
				
			
				<?php
				}
					echo "<input type='hidden' name='subaction' id='subaction' value='chkQuestion'> <button class='btn btn-primary' name='submit' type='submit'>Submit</button> </form>";

			}
			else
				echo "No Quiz Found </form>";
			
			
                  
               
				 

	
	
	     
              
        ?>  
       </div>
		<div class="text" id="quizReply"></div>
      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- CSS Modal -->

        
<?php

	

}//admin

function score($result, $questions)
{
	
	  $accountType = $_SESSION['accountype'];
	  $userID = $_SESSION['userID'];
	  $fName = $_SESSION['fname'];
	  $lName = $_SESSION['lname'];

?>
     <div>
      <div class="panel panel-default img-rounded  Bordwhite" style = "color: black" >
      <div class="panel-heading   "><h1 class ="custom-font"><center>Control Panel</center></h1></div>
      <div class="panel-body thumbnail">
      	<h1>Score Result!</h1>    	
      	<div class="thumbnail col-xs-12 col-sm-12">
		      <div class="caption">
		      	
		      	  <?php
		      	 
				  	error_reporting(E_ALL & ~E_NOTICE);
					if($result == null)
				   {
				   	$result = '0';
				   	echo "<h1> Your Score is $result/$questions </h1>";
				   }
				   else {
					   echo "<h1> Your Score is $result/$questions </h1>";
				   }
		      	 
				  
				 ?>
				 
		        <p><a href='http://localhost/ProgramLearnWeb/php' class='btn btn-primary' role='button'>Back To PHP</a></p>
		      </div>
		    </div>
		    
</div>    
    </div>
  </div>
        
<?php
}//score
	
}//php
?>