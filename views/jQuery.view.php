<?php
class jQueryView extends BaseView
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
      <div class="panel-heading   "><h1 class ="custom-font"><center>jQuery Elements </center></h1></div>
      <div class="panel-body">    	
      	<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>What is jQuery</h3>
		        <p>Manage jQuery content</p>
		         <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tableModal" role="button">Manage</a></p>
		      </div>
		    </div>
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Syntax</h3>
		        <p>Manage jQuery Syntax content</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#formModal" role="button">Manage</a></p>
		      </div>
		    </div> 
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>jQuery Events</h3>
		        <p>Manage jQuery Event content</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#cssModal" role="button">Manage</a></p>
		      </div>
		    </div>  
		     <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>jQuery Selectors</h3>
		        <p>Manage Selector content</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tagModal" role="button">Manage</a></p>
		      </div>
		    </div>  
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>jQuery Effects</h3>
		        <p>Manage Effect content</p>
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
        <h2 class="modal-title font-underline">What is jQuery</h2>
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
        <h2 class="modal-title font-underline">jQuery Syntax</h2>
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
        <h1 class="modal-title">jQuery Events</h1>
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
        <h1 class="modal-title">jQuery Selectors</h1>
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
        <h4 class="modal-title">jQuery Effects</h4>
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
        <h1 class="modal-title">jQuery Quiz</h1>
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
      <div class="panel-heading   "><h1 class ="custom-font"><center>JQuery Elements </center></h1></div>
      <div class="panel-body">    	
      	<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>What is Jquery </h3>
		        <p>Tutorials On What jQuery is </p>
		         <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#jQModal" role="button">Learn Me</a></p>
		      </div>
		    </div>
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Jquery Syntax </h3>
		        <p>Tutorials on jQuery Syntax </p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#jSynModal" role="button">Learn Me</a></p>
		      </div>
		    </div> 
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>jQuery Events</h3>
		        <p>Tutorials on events</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#jEventModal" role="button">Learn Me</a></p>
		      </div>
		    </div>  
		     <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>jQuery Selectors</h3>
		        <p>Tutorials on selectors</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#jSelModal" role="button">Learn Me</a></p>
		      </div>
		    </div>  
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>jQuery Effects</h3>
		        <p>Tutorials on effects of jQuery</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#jEffModal" role="button">Learn Me</a></p>
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
  
  <!-- what is jQuery -->
  
  
  
 <div id="jQModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">jQuery Description</h2>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#jqSt1">What is jQuery Sybtax</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#jqSt2">Tasks</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#jqSt3">Library</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#jqImp">Why jQuery</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#jqTry">Try It!</a></li>
   
    
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
			echo "<div id = 'jqSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>What is jQuery</h3>
				<br> 
			  <h4>1.jQuery is a lightweight, write less, do more, JavaScript library.</h4>
			  <br>
			  <h4>2.The purpose of jQuery is to make it much easier to use JavaScript on your website.</h4>		
			</div>";
			//Stage Two
			echo "<div id = 'jqSt2' class = 'tab-pane'><h3 class ='font-underline'>jQuery Tasks</h3>
			 	<br>
			  <h4>1.jQuery takes a lot of common tasks that require many lines of JavaScript code to accomplish, and wraps them into methods that you can call with a single line of code. </h4>
			  <br>
			  <h4>2.jQuery also simplifies a lot of the complicated things from JavaScript, like AJAX calls and DOM manipulation. </h4>
			</div>";
			//Stage Three
			echo "<div id = 'jqSt3' class = 'tab-pane '><h3 class ='font-underline'>jQuery Library</h3>
			<br>
			<h3>The jQuery library contains the following features:</h3>
			<h4>•HTML/DOM manipulation </h4>
			<h4>•CSS manipulation </h4>
			<h4>•HTML event methods </h4>
			<h4>•Effects and animations </h4>
			<h4>•AJAX</h4>
			<h4>•Utilities </h4>
			</div>";
			//Stages Implemented
			echo "<div id = 'jqImp' class = 'tab-pane '><h3 class ='font-underline'>Why JQuery</h3>
			<br>
			<h4>1.There are lots of other JavaScript frameworks out there, but jQuery seems to be the most popular, and also the most extendable.</h4>
			<br>
			<h3>2.Many of the biggest companies on the Web use jQuery, such as:</h3>
			<h4>•Google </h4>
			<h4>•Microsoft </h4>
			<h4>•IBM </h4>
			<h4>•Netflix </h4>
			<br>
		
			</div>";
			//Try it
			echo "<div id = 'jqTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='jqArea' name='jqArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='jqFrame' name='jqFrame' width='500' height='500' srcdoc='<h1>Hit Try Me!!</h1>' src='demo_iframe.htm'></iframe>      	
				<button class='btn btn-primary btn-lg col-xs-12' onclick='jqBox()'>Try it</button> 
				<script>
           	function jqBox() {
           		document.getElementById('jqFrame').srcdoc = document.getElementById('jqArea').value;
			   }
           </script>  	
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
  
  <!-- what is jQuery -->
  
 
  <!-- PHP variables  Modal --> 
 <div id="jSynModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">jQuery Syntax</h2>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#fmSt1">What is jQuery Sybtax</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#fmSt2">Using Basic Syntax</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#fmSt3">Syntax Example</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#fmImp">Document Ready Example</a></li>
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
			echo "<div id = 'fmSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>What is jQuery Syntax</h3>
				<br> 
			  <h4>1. The jQuery syntax is tailor-made for selecting HTML elements and performing some action on the element(s).</h4>		
			</div>";
			//Stage Two
			echo "<div id = 'fmSt2' class = 'tab-pane'><h3 class ='font-underline'>Basic Syntax</h3>
			 	<br>
			  <h4>1.Basic syntax is: $(selector).action().</h4>
			  <h4>2.A $ sign to define/access jQuery.</h4>
			  <h4>3.A (selector) to query (or find) HTML elements.</h4>
			  <h4>4.A jQuery action() to be performed on the element(s).</h4>
			</div>";
			//Stage Three
			echo "<div id = 'fmSt3' class = 'tab-pane '><h3 class ='font-underline'>Syntax Example</h3>
			<br>
			<img class ='frm1'' id='frmImg4' src='images/jQuery/syntax1.png'/> 
			</div>";
			//Stages Implemented
			echo "<div id = 'fmImp' class = 'tab-pane '><h3 class ='font-underline'>Documented Example</h3>
			<br>
			<h4>1. You might have noticed that all jQuery methods in our examples, are inside a document ready event.</h4>
			<br>
			<img class ='frm1'' id='frmImg5' src='images/jQuery/syntax2.png'/> 
			</div>";
			//Try it
			echo "<div id = 'fmTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='syArea' name='syArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='syFrame' name='syFrame' width='500' height='500' srcdoc='<h1>Hit Try Me!!</h1>' src='demo_iframe.htm'></iframe>      	
				<button class='btn btn-primary btn-lg col-xs-12' onclick='syBox()'>Try it</button> 
				<script>
           	function syBox() {
           		document.getElementById('syFrame').srcdoc = document.getElementById('syArea').value;
			   }
           </script>  	
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
 <div id="jEventModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title">jQuery Events</h1>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#csSt1">What are jQuery Events</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#csSt2">Event Examples</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#csSt3">Event Syntax</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#csImp">The on Method</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#csTry">Try It!</a></li> 
  </ul>
  <div class="tab-content">
  	<?php	 
  	//CSS
			//Stage One
			echo "<div id = 'csSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>What is jQuery Event</h3>
				<br> 
			  <h4>1. All the different visitor's actions that a web page can respond to are called events. </h4>	
			  <br>
			  <h4>2. An event represents the precise moment when something happens.</h4>	
			   <br>
			  <h4>3. Here are some common DOM events.</h4>
			  <br>
			  <img class ='cs3' id='csImg3' src='images/jQuery/event1.png'/> 
			</div>";
			//Stage Two
			echo "<div id = 'csSt2' class = 'tab-pane'><h3 class ='font-underline'>Event  examples </h3>
			 	<br>
			  <h4>1. In jQuery, most DOM events have an equivalent jQuery method.</h4>		
			  <br>
			  <h4>2. To assign a click event to you must pass a function to the event: </h4> 
			  <br>
			    <img class ='cs4' id='csImg4' src='images/jQuery/event2.png'/> 
			</div>";
			//Stage Three
			echo "<div id = 'csSt3' class = 'tab-pane '><h3 class ='font-underline'>Event Syntax</h3>
			<br> 
			  <h4>The mouseenter() method attaches an event handler function to an HTML element. </h4>
			    <img class ='cs5' id='csImg5' src='images/jQuery/event3.png'/> 	
			  <br>
			</div>";
			//Stages Implemented
			echo "<div id = 'csImp' class = 'tab-pane '><h3 class ='font-underline'>The On Method</h3>
			
			<br>
			  <h4>1. The on() method attaches one or more event handlers for the selected elements.</h4>		
			  <br>
			   <img class ='cs5' id='csImg5' src='images/jQuery/event4.png'/> 	
			  
			</div>";
			//Try it
			echo "<div id = 'csTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='evArea' name='evArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='evFrame' name='evFrame' width='500' height='500' srcdoc='<h1>Hit Try Me!!</h1>' src='demo_iframe.htm'></iframe>      	
				<button class='btn btn-primary btn-lg col-xs-12' onclick='evBox()'>Try it</button> 
				<script>
           	function evBox() {
           		document.getElementById('evFrame').srcdoc = document.getElementById('evArea').value;
			   }
           </script>  	
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
  <div id="jSelModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title">HTML Tags</h1>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#tgSt1">What is jQuery Selector</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#tgSt2">Selector Example</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#tgSt3">ID selector</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#tgImp">Class selector</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#tgTry">Try It!</a></li>  
  </ul>
  <div class="tab-content">
  	<?php	
  	//tags
			//Stage One
			echo "<div id = 'tgSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>What is jQuery Selector?</h3>
				<br> 
			  <h4>1.jQuery selectors allow you to select and manipulate HTML element(s).</h4>	
			  <br>
			    <h4>2.jQuery selectors are used to find (or select) HTML elements based on their name, id, classes, types, attributes, values of attributes and much more. It's based on the existing CSS Selectors, and in addition, it has some own custom selectors.</h4>
			    <h4>3. All selectors in jQuery start with the dollar sign and parentheses: $(). </h4>	
			   <br>
			</div>";
			//Stage Two
			echo "<div id = 'tgSt2' class = 'tab-pane'><h3 class ='font-underline'>jQuery Selector Example</h3>
			 	<br> 
			  <img class ='cs1' id='csImg1' src='images/jQuery/select1.png'/> 
			   <br>
			</div>";
			//Stage Three
			echo "<div id = 'tgSt3' class = 'tab-pane '><h3 class ='font-underline'>jQuery ID Selector</h3>
			<br>
			
			</div>";
			//Stages Implemented
			echo "<div id = 'tgImp' class = 'tab-pane '><h3 class ='font-underline'>Stages Implementated</h3>
			<br>
		    <h4>1. The jQuery #id selector uses the id attribute of an HTML tag to find the specific element.</h4>
		    <br>
		    <h4>2. An id should be unique within a page, so you should use the #id selector when you want to find a single, unique element.</h4>
		    <br>
		    <h4>3. To find an element with a specific id, write a hash character, followed by the id of the HTML element:</h4>
		    <br>
		    <img class ='cs1' id='jqImg1' src='images/jQuery/select2.png'/> 
			</div>";
			//Try it
			echo "<div id = 'tgTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='slArea' name='slArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='slFrame' name='slFrame' width='500' height='500' srcdoc='<h1>Hit Try Me!!</h1>' src='demo_iframe.htm'></iframe>      	
				<button class='btn btn-primary btn-lg col-xs-12' onclick='slBox()'>Try it</button> 
				<script>
           	function slBox() {
           		document.getElementById('slFrame').srcdoc = document.getElementById('slArea').value;
			   }
           </script>  	
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
  <div id="jEffModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">jQuery Effects</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#ltSt1">Hide and Show Effects</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#ltSt2">Fading</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#ltSt3">Sliding</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#ltImp">Animation</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#ltTry">Try It!</a></li>  
  </ul>
  <div class="tab-content">
  	<?php	 
  	//Lists 
			//Stage One
			echo "<div id = 'ltSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>jQuery Hide and Show</h3>
				<br> 
			<h4>With jQuery, you can hide and show HTML elements with the hide() and show() methods: </h4>
			<img class ='cs1' id='jqImg1' src='images/jQuery/effect1.png'/> 
			</div>";
			//Stage Two
			echo "<div id = 'ltSt2' class = 'tab-pane'><h3 class ='font-underline'>jQuery Fading</h3>
			 	<br>
			  <h4>1. With jQuery you can fade elements in and out of visibility. </h4>
			  <img class = 'fade1'  id='fading1' src='images/jQuery/effect2.png'/>
			  <br>
			  <h4>2. The jQuery fadeOut() method is used to fade out a visible element. </h4>
			  
			  <br> 
			  <img class = 'fade1'  id='fading1' src='images/jQuery/effect3.png'/> 
			</div>";
			//Stage Three
			echo "<div id = 'ltSt3' class = 'tab-pane '><h3 class ='font-underline'>jQuery Sliding</h3>
			<br>
			<h4>1. The jQuery slideDown() method is used to slide down an element. </h4>
			<img class ='frm1'' id='frmImg4' src='images/jQuery/effect4.png'/>
			<br>
			<h4>2. The jQuery slideToggle() method toggles between the slideDown() and slideUp() methods. </h4> 
			<h4>3.If the elements have been slid down, slideToggle() will slide them up.</h4>
			<h4>4.If the elements have been slid up, slideToggle() will slide them down. </h4>
			<br>
			<img class ='frm1'' id='frmImg4' src='images/jQuery/effect5.png'/>
			</div>";
			//Stages Implemented
			echo "<div id = 'ltImp' class = 'tab-pane '><h3 class ='font-underline'>jQuery Animation</h3>
			<br>
			<h4>1.The jQuery animate() method is used to create custom animations. </h4>
			<br>
			<img class ='frm1'' id='frmImg4' src='images/jQuery/effect6.png'/>
			<h3>Muitple Animaton Properties</h3>
			<br>
			<h4>1.Notice that multiple properties can be animated at the same time:</h4>
			<br>
			<img class ='frm1'' id='frmImg4' src='images/jQuery/effect7.png'/>
			<br>
			<h4>2. This means that if you write multiple animate() calls after each other, jQuery creates an internal queue with these method calls. Then it runs the animate calls ONE by ONE.
			 </h4>
			 <br>
			 <img class ='frm1'' id='frmImg4' src='images/jQuery/effect8.png'/>
			</div>";
			//Try it
			echo "<div id = 'ltTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='efArea' name='efArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='efFrame' name='efFrame' width='500' height='500' srcdoc='<h1>Hit Try Me!!</h1>' src='demo_iframe.htm'></iframe>      	
				<button class='btn btn-primary btn-lg col-xs-12' onclick='efBox()'>Try it</button> 
				<script>
           	function efBox() {
           		document.getElementById('efFrame').srcdoc = document.getElementById('efArea').value;
			   }
           </script>  	
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
        <h1 class="modal-title">jQuery Quiz</h1>
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
				 
		        <p><a href='http://localhost/ProgramLearnWeb/jQuery' class='btn btn-primary' role='button'>Back To jQuery</a></p>
		      </div>
		    </div>
		    
</div>    
    </div>
  </div>
        
<?php
}//score
	
}//php
?>