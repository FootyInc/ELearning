<?php
class webView extends BaseView
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
      <div class="panel-heading   "><h1 class ="custom-font"><center>Web Development Admin Panel</center></h1></div>
      <div class="panel-body">    	
      	<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Langauges</h3>
		        <p>Select langauge</p>
		        <p><a href="http://localhost/ELearning/wlang" class="btn btn-primary" role="button">Web</a></p>
		      </div>
		    </div>
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Users</h3>
		        <p>Review, add, Edit users</p>
		        <p><a href="" class="btn btn-primary" role="button">Manage</a></p>
		      </div>
		    </div>  
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Quiz</h3>
		        <p>Manage Quiz</p>
		        <p><a href="" class="btn btn-primary" role="button">Manage</a></p>
		      </div>
		    </div>  
</div>    
    </div>
  </div>
        
<?php

}//admin



function normal($questions)
{


	  $accountType = $_SESSION['accountype'];

?>
     <div>
      <div class="panel panel-default img-rounded  Bordwhite" >
      <div class="panel-heading   "><h1 class ="custom-font"><center>Web Development</center></h1></div>
      <div class="panel-body">    	
      	<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Langauges</h3>
		        <p>Select langauge</p>
		        <p><a href="http://localhost/ELearning/wlang" class="btn btn-primary" role="button">Web</a></p>
		      </div>
		    </div>
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Report</h3>
		        <p>Review your progress</p>
		        <p><a href="http://localhost/ELearning/webReport" class="btn btn-primary" role="button">Report</a></p>
		      </div>
		    </div>  
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Quiz</h3>
		        <p>Try a quiz</p>
		        <p><a href="" class="btn btn-primary"  data-toggle="modal" data-target="#testModal" role="button">Quiz</a></p>
		      </div>
		    </div>  
</div>    
    </div>
  </div>
        
        <!-- Test Modal --> 
  <div id="testModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">Quiz</h2>
      </div>
      <div class="modal-body">
      <h1>Web Development Quiz</h1>
      
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
      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- Test Modal -->
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
				 
		        <p><a href='http://localhost/ProgramLearnWeb/web' class='btn btn-primary' role='button'>Back To Web</a></p>
		      </div>
		    </div>
		    
</div>    
    </div>
  </div>
        
<?php
}//score

	
}//web
?>