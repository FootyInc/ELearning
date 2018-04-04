<?php
class htmlView extends BaseView
{
	
	function __construct($registry)
	{
		parent::__construct($registry);		
	}
		



function admin()
{


	  $accountType = $_SESSION['accountype'];
	  $userID = $_SESSION['userID'];

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
      <div class="panel-heading   "><h1 class ="custom-font"><center>HTML Elements </center></h1></div>
      <div class="panel-body">    	
      	<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Tables</h3>
		        <p>Tutorials On Tables</p>
		         <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tableModal" role="button">Learn Me</a></p>
		      </div>
		    </div>
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Forms</h3>
		        <p>Tutorials on Forms</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#formModal" role="button">Learn Me</a></p>
		      </div>
		    </div> 
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>CSS</h3>
		        <p>Tutorials on CSS</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#cssModal" role="button">Learn Me</a></p>
		      </div>
		    </div>  
		     <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Tags</h3>
		        <p>Tutorials on Tags</p>
		        <p><a href="" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#tagModal" role="button">Learn Me</a></p>
		      </div>
		    </div>  
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Lists</h3>
		        <p>Tutorials on Lists</p>
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
  
  
 
  <!-- css Modal --> 
 <div id="cssModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">Forms</h2>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#csSt1">Stage One</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#csSt2">Stage Two</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#csSt3">Stage Three</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#csImp">Stages implemented</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#csTry">Try It!</a></li>
   
    
  </ul>
  <style type="text/css">
ul li span {
  margin-right: 1170px;
}

</style>




  <div class="tab-content">
  	   
	  <?php	 
  	//CSS
			//Stage One
			echo "<div id = 'csSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>CSS - Syntax</h3>
				<br> 
			  <h4>1. Syntax – A CSS rule consists of two parts, a Selector and a Declaration. </h4>
			    <img class ='cs1' id='csImg1' src='images/css/select.jpg.png'/> 	
			  <br>
			  <h4>2. Selector – A selector points to the html element you wish to style.</h4>	
			   <br>
			  <h4>3. Declaration – A declaration is the rule, elements can have more than one declaration.</h4>
			  <br>
			  <h4>4. Each property is separated by a colon and wrapped in curly brackets.</h4>
			</div>";
			//Stage Two
			echo "<div id = 'csSt2' class = 'tab-pane'><h3 class ='font-underline'>CSS - Text Properties </h3>
			 	<br>
			  <h4>1. Color - You can change the color by using the color propertie.</h4>		
			    <img class ='cs2' id='csImg2' src='images/css/txtCol.png'/> 
			  <br>
			  <h4>2. Text Alignment - You can change the aligment of your text for example left, right or center.</h4>
			    <img class ='cs3' id='csImg3' src='images/css/txtAlign.png'/> 
			  <br>
			  <h4>2. Text Shadow - You can change the format of text for example you can use the shadow property.</h4>
			    <img class ='cs4' id='csImg4' src='images/css/txtShadow.png'/> 
			</div>";
			//Stage Three
			echo "<div id = 'csSt3' class = 'tab-pane '><h3 class ='font-underline'>CSS - Element Properties</h3>
			<br> 
			  <h4>1. Tables – You can use CSS to add style rules to tables!. </h4>
			    <img class ='cs5' id='csImg5' src='images/css/tblStyle.png'/> 	
			  <br>
			  <h4>1. Lists – You can use CSS to add style rules to lists! </h4>
			    <img class ='cs6' id='csImg6' src='images/css/listStyle.png'/> 	
			   <br>
			  <h4>1. Buttons – You can use CSS to add style rules to buttons! </h4>
			    <img class ='cs7' id='csImg7' src='images/css/btnStyle.png'/> 	
			  <br>
			  <h4>4. Each property is separated by a colon and wrapped in curly brackets.</h4>
			</div>";
			//Stages Implemented
			echo "<div id = 'csImp' class = 'tab-pane '><h3 class ='font-underline'>Stages Implementated</h3>
			<br> 
			  <h4>1. Example – Below displays an example with multiple CSS declarations for html elements. </h4>
			    <img class ='cs8' id='csImg8' src='images/css/cssImp.png'/> 	
			</div>";
			//Try it
			echo "<div id = 'csTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='cssArea' name='cssArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='cssFrame' name='cssFrame' width='500' height='500' srcdoc='<h1>Hit Try Me!!</h1>' src=''></iframe>      	
				<button class = 'btn btn-primary btn-lg col-xs-12' onclick='cssBox()'>Try it</button>
			</div>
			
			<script>
           	function cssBox() {
           		document.getElementById('cssFrame').srcdoc = document.getElementById('cssArea').value;
			   }
           </script>
			</div>";
		//CSS
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
 <!-- css Modal -->
 
 <!-- table Modal --> 
 <div id="tableModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">Forms</h2>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#tbSt1">Stage One</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#tbSt2">Stage Two</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#tbSt3">Stage Three</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#tbImp">Stages implemented</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#tbTry">Try It!</a></li>
   
    
  </ul>
  <style type="text/css">
ul li span {
  margin-right: 1170px;
}

</style>




  <div class="tab-content">
  	   
	  <?php	  	  	  
    	//table
			//Stage One
			echo "<div id = 'tbSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>Opening Table Elements</h3>
				<br> 
			  <h4>1. Table elements contain all the other elements to control caption, rows, content and formatting</h4>
			  <img class ='frm1' id='frmImg1' src='images/table/tbl1.png'/> 		
			</div>";
			//Stage Two
			echo "<div id = 'tbSt2' class = 'tab-pane'><h3 class ='font-underline'>Stage Two</h3>
			 	<br>
			  <h4>1. The tr elemetn acts as a container for a row of tabble cells, the end tag must be omitted!.</h4>
			  <h4>1. The tr element muct be in-between the table element!.</h4>
			  <br>  
			  <img class ='tb1' id='frmImg2' src='images/table/tbl2.png'/>  
			  <br>
			</div>";
			//Stage Three
			echo "<div id = 'tbSt3' class = 'tab-pane '><h3 class ='font-underline'>Stage Three</h3>
			<br>
			<h4>1. The td element defines a cell from which contains header infomation.</h4>
			<h4>2. The th element has two types of headder infomation available which is content and value attribute.</h4>
			<img class ='tbl1'' id='tblImg4' src='images/table/tbl3.png'/> 
			</div>";
			//Stages Implemented
			echo "<div id = 'tbImp' class = 'tab-pane '><h3 class ='font-underline'>Stages Implementated</h3>
			<br>
			<img class ='tbl1'' id='tblImg4' src='images/table/table1.png'/> 
			</div>";
			//Try it
			echo "<div id = 'tbTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='tableArea' name='tableArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='tableFrame' name='tableFrame' width='500' height='500' srcdoc='<h1>Hit Try Me!!</h1>' src=''></iframe>      	
				<button class ='btn btn-primary btn-lg col-xs-12' onclick='tableBox()'>Try it</button>
			</div>
			
			<script>
           	function tableBox() {
           		document.getElementById('tableFrame').srcdoc = document.getElementById('tableArea').value;
			   }
           </script>
			
			
			
			
			";
		//table 		
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
 <!-- css Modal -->
 
 <!-- Form Modal --> 
 <div id="formModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">Forms</h2>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#fmSt1">Stage One</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#fmSt2">Stage Two</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#fmSt3">Stage Three</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#fmImp">Stages implemented</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#fmTry">Try It!</a></li>
   
    
  </ul>
  <style type="text/css">
ul li span {
  margin-right: 1170px;
}

</style>




  <div class="tab-content">
  	   
	  <?php	  	  	  
    	//Form 
			//Stage One
			echo "<div id = 'fmSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>Opening Form Element</h3>
				<br> 
			  <h4>1. To open a form element you must open the form tags, Look example below</h4>
			  <img class ='frm1' id='frmImg1' src='images/form1.png'/> 		
			</div>";
			//Stage Two
			echo "<div id = 'fmSt2' class = 'tab-pane'><h3 class ='font-underline'>Stage Two</h3>
			 	<br>
			  <h4>1. You can add elements like labels and inputs to a form, look image below!.</h4>
			  <br>  
			  <img class ='frm1' id='frmImg2' src='images/form2.png'/>  
			  <br>
			  <h4>2. This adds interactional inputs for user to interaction.</h4>
			  <br>
			  <h4 class = 'style = 'text-align: center;'>3. These can be used to submit data in the form of Form Post data.</h4>
			  <br>
			  <h4>4. Look Below to view section code output.</h4>
			  <br>
			  <img class ='frm1'' id='frmImg3' src='images/frm2Re.png'/> 
			</div>";
			//Stage Three
			echo "<div id = 'fmSt3' class = 'tab-pane '><h3 class ='font-underline'>Stage Three</h3>
			<br>
			<h4>1. Now we must add a event form button to control the excution of data, we can use the input tag for this, Look example below.</h4>
			<h4>2. Form actions can be used to submit data, for example post stores data as a post type!, Look example below.</h4>
			<img class ='frm1'' id='frmImg4' src='images/frm3.png'/> 
			<h4>3. The follow code gives this example below.</h4>
			<img class ='frm1'' id='frmImg4' src='images/frm3Re.png'/> 
			</div>";
			//Stages Implemented
			echo "<div id = 'fmImp' class = 'tab-pane '><h3 class ='font-underline'>Stages Implementated</h3>
			<br>
			<h4>1. Below is all form stages implemented to create a login form. Look example below</h4>
			<img class ='frm1'' id='frmImg4' src='images/frm4.png'/> 
			<h4>2. Below is the result of the above from code.</h4>
			<img class ='frm1'' id='frmImg4' src='images/frm4Re.png'/> 	
			</div>";
			//Try it
			echo "<div id = 'fmTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='frmArea' name='frmArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='frmFrame' name='frmFrame' width='500' height='500' srcdoc='<h1>Hit Try Me!!</h1>' src=''></iframe>      	
				<button class='btn btn-primary btn-lg col-xs-12' onclick='frmBox()'>Try it</button>
			</div>
			
			<script>
           	function frmBox() {
           		document.getElementById('frmFrame').srcdoc = document.getElementById('frmArea').value;
			   }
           </script>
			
			
			
			
			";
		//Form 		
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
 <!-- table Modal -->
 
  <!-- Tags Modal --> 
  <div id="tagModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 class="modal-title">HTML Tags</h1>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#tgSt1">Stage One</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#tgSt2">Stage Two</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#tgSt3">Stage Three</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#tgImp">Stages implemented</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#tgTry">Try It!</a></li>  
  </ul>
  <div class="tab-content">
  	<?php	
  	//tags
			//Stage One
			echo "<div id = 'tgSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>Doctype Tag</h3>
				<br> 
			  <h4>1. The &lt!DOCTYPE&gt must be the very first tag in your HTML document, like so!.</h4>
			    <img class ='cs1' id='csImg1' src='images/tags/tgDoc.png'/> 	
			  <br>
			  <h4>2. It is important that you do not mistaken the &lt!DOCTYPE&gt declaration for a HTML tag; The &lt!DOCTYPE&gt is an instruction to the web browser about what version of HTML the page is written in.</h4>	
			   <br>
			</div>";
			//Stage Two
			echo "<div id = 'tgSt2' class = 'tab-pane'><h3 class ='font-underline'>Doctype Tag</h3>
			 	<br> 
			  <h4>1. Syntax – A CSS rule consists of two parts, a Selector and a Declaration. </h4>
			    <img class ='cs1' id='csImg1' src='images/css/select.jpg.png'/> 	
			  <br>
			  <h4>2. Selector – A selector points to the html element you wish to style.</h4>	
			   <br>
			  <h4>3. Declaration – A declaration is the rule, elements can have more than one declaration.</h4>
			  <br>
			  <h4>4. Each property is separated by a colon and wrapped in curly brackets.</h4>
			</div>";
			//Stage Three
			echo "<div id = 'tgSt3' class = 'tab-pane '><h3 class ='font-underline'>Stage Three</h3>
			<br>
			<h4>1. Now we must add a event form button to control the excution of data, we can use the input tag for this, Look example below.</h4>
			<h4>2. Form actions can be used to submit data, for example post stores data as a post type!, Look example below.</h4>
			<img class ='frm1'' id='frmImg4' src='images/frm3.png'/> 
			<h4>3. The follow code gives this example below.</h4>
			<img class ='frm1'' id='frmImg4' src='images/frm3Re.png'/> 
			</div>";
			//Stages Implemented
			echo "<div id = 'tgImp' class = 'tab-pane '><h3 class ='font-underline'>Stages Implementated</h3>
			<br>
			<h4>1. Below is all form stages implemented to create a login form. Look example below</h4>
			<img class ='frm1'' id='frmImg4' src='images/frm4.png'/> 
			<h4>2. Below is the result of the above from code.</h4>
			<img class ='frm1'' id='frmImg4' src='images/frm4Re.png'/> 	
			</div>";
			//Try it
			echo "<div id = 'tgTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='tagArea' name='tagArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='tagFrame' name='tagFrame' width='500' height='500' srcdoc='<h1>Hit Try Me!!</h1>' src='demo_iframe.htm'></iframe>      	
				<button class='btn btn-primary btn-lg col-xs-12' onclick='tagBox()'>Try it</button>
				
				<script>
           	function tagBox() {
           		document.getElementById('tagFrame').srcdoc = document.getElementById('tagArea').value;
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
  <!-- Lists Modal --> 
  <div id="listModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs">
    <li class="active"><a class = "font-underline" style="color: black" data-toggle="tab" href="#ltSt1">Stage One</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#ltSt2">Stage Two</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#ltSt3">Stage Three</a></li>
    <li><a class = "font-underline" style="color: black" data-toggle="tab" href="#ltImp">Stages implemented</a></li>
    <li><a class = "font-underline " style="color: black" data-toggle="tab" href="#ltTry">Try It!</a></li>  
  </ul>
  <div class="tab-content">
  	<?php	 
  	//Lists 
			//Stage One
			echo "<div id = 'ltSt1' class = 'tab-pane fade in active'><h3 class ='font-underline'>Opening Form Element</h3>
				<br> 
			  <h4>1. To open a form element you must open the form tags, Look example below</h4>
			  <img class ='frm1' id='frmImg1' src='images/form1.png'/> 		
			</div>";
			//Stage Two
			echo "<div id = 'ltSt2' class = 'tab-pane'><h3 class ='font-underline'>Stage Two</h3>
			 	<br>
			  <h4>1. You can add elements like labels and inputs to a form, look image below!.</h4>
			  <br>  
			  <img class ='frm1' id='frmImg2' src='images/form2.png'/>  
			  <br>
			  <h4>2. This adds interactional inputs for user to interaction.</h4>
			  <br>
			  <h4 class = 'style = 'text-align: center;'>3. These can be used to submit data in the form of Form Post data.</h4>
			  <br>
			  <h4>4. Look Below to view section code output.</h4>
			  <br>
			  <img class ='frm1'' id='frmImg3' src='images/frm2Re.png'/> 
			</div>";
			//Stage Three
			echo "<div id = 'ltSt3' class = 'tab-pane '><h3 class ='font-underline'>Stage Three</h3>
			<br>
			<h4>1. Now we must add a event form button to control the excution of data, we can use the input tag for this, Look example below.</h4>
			<h4>2. Form actions can be used to submit data, for example post stores data as a post type!, Look example below.</h4>
			<img class ='frm1'' id='frmImg4' src='images/frm3.png'/> 
			<h4>3. The follow code gives this example below.</h4>
			<img class ='frm1'' id='frmImg4' src='images/frm3Re.png'/> 
			</div>";
			//Stages Implemented
			echo "<div id = 'ltImp' class = 'tab-pane '><h3 class ='font-underline'>Stages Implementated</h3>
			<br>
			<h4>1. Below is all form stages implemented to create a login form. Look example below</h4>
			<img class ='frm1'' id='frmImg4' src='images/frm4.png'/> 
			<h4>2. Below is the result of the above from code.</h4>
			<img class ='frm1'' id='frmImg4' src='images/frm4Re.png'/> 	
			</div>";
			//Try it
			echo "<div id = 'ltTry' class = 'tab-pane '><h3>Try It!</h3>
			<textarea  style = 'resize: none; !important;height:500px' id ='lstArea' name='lstArea' rows='10' cols='60'></textarea>   				      		
		      	<iframe id='lstFrame' name='lstFrame' width='500' height='500' srcdoc='<h1>Hit Try Me!!</h1>' src='demo_iframe.htm'></iframe>      	
				<button class='btn btn-primary btn-lg col-xs-12' onclick='lstBox()'>Try it</button> 
				<script>
           	function lstBox() {
           		document.getElementById('lstFrame').srcdoc = document.getElementById('lstArea').value;
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

	

}//normal

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
		      	 
				  	
					
				   if($result == null)
				   {
				   	$result = '0';
				   	echo "<h1> Your Score is $result/$questions </h1>";
				   }
				   else {
					   echo "<h1> Your Score is $result/$questions </h1>";
				   }
				   
					  error_reporting(E_ALL & ~E_NOTICE); 	
				   
				  	
		      	 
				  
				 ?>
				 
		        <p><a href='http://localhost/ProgramLearnWeb/html' class='btn btn-primary' role='button'>Back To HTML</a></p>
		      </div>
		    </div>
		    
</div>    
    </div>
  </div>
        
<?php
}//score

	
}//html
?>