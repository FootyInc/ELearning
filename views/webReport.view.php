<?php
class webReportView extends BaseView
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
		        <p><a href="http://localhost/ProgramLearnWeb/wlang" class="btn btn-primary" role="button">Web</a></p>
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



function normal($score, $questions)
{


	  $accountType = $_SESSION['accountype'];

?>
     <div>
      <div class="panel panel-default img-rounded  Bordwhite" >
      <div class="panel-heading   "><h1 class ="custom-font"><center>Web Development Report</center></h1></div>
      <div class="panel-body">    	
      	<div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Web Development Overview</h3>
		        <p>View Your Web Progress</p>
		        <p><a class="btn btn-primary" data-toggle="modal" data-target="#webModal" role="button">Web</a></p>
		      </div>
		    </div>
		    <div class="thumbnail col-xs-12 col-sm-6">
		      <div class="caption">
		        <h3>Control Panel</h3>
		        <p>Go Back to Control Panel</p>
		        <p><a href="http://localhost/ProgramLearnWeb/index" class="btn btn-primary" role="button">Control Panel</a></p>
		      </div>
		    </div>  
</div>    
    </div>
  </div>
  
  <!-- htmlReport Modal --> 
  <div id="webModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">Quiz Overview</h2>
      </div>
      <div class="modal-body">
      <h1>Web Progress</h1>
      
      <?php
			if(count($score)>0)
			{
			?>
				<table class="table table-striped">
			    <thead>
			      <tbody>
			      	<tr>
			      	<th><center>Attempt Num</center></th>
			        <th><center>Score</center></th>
			      </tr>
			    <?php
				foreach($score as $webOverviews)
				{
				?>
				
				
			      
			      <tr>
			      	<td><?php echo "1" ?></td>
			        <td><?php echo $webOverviews['webScore'] , " / ", $questions; ?></td>	  
			      </tr>
				<?php
				}
				?>
				  </tbody>
			  </table>
				<?php
					
			}
			else
				echo "<br> No Progress Made";  
        ?>   
		    	
     </div>
      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- htmlReport Modal -->
 
 <!-- phpReport Modal --> 
  <div id="PhpModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">PHP Report Overview</h2>
      </div>
      <div class="modal-body">
      <h1>PHP Results</h1>
      
      <?php
			if(count($score)>0)
			{
			?>
				<table class="table table-striped">
			    <thead>
			      <tbody>
			      	<tr>
			      	<th><center>Attempt Num</center></th>
			        <th><center>Score</center></th>
			      </tr>
			    <?php
				foreach($score as $webOverviews)
				{
				?>
				
				
			      
			      <tr>
			      	<td><?php echo "1" ?></td>
			        <td><?php echo $webOverviews['phpScore']; ?></td>	  
			      </tr>
				<?php
				}
				?>
				  </tbody>
			  </table>
				<?php
					
			}
			else
				echo "No Results";  
        ?>   
		    	
      </div>
      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- phpReport Modal -->
 
 <!-- JQueryReport Modal --> 
  <div id="JQueryModal" style="color:black" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title font-underline">JQuery Report Overview</h2>
      </div>
      <div class="modal-body">
      <h1>JQuery Results</h1>
      
      <?php
			if(count($score)>0)
			{
			?>
				<table class="table table-striped">
			    <thead>
			      <tbody>
			      	<tr>
			      	<th><center>Attempt Num</center></th>
			        <th><center>Score</center></th>
			      </tr>
			    <?php
				foreach($score as $webOverviews)
				{
				?>
				
				
			      
			      <tr>
			      	<td><?php echo "1" ?></td>
			        <td><?php echo $webOverviews['jqueryScore']; ?></td>	  
			      </tr>
				<?php
				}
				?>
				  </tbody>
			  </table>
				<?php
					
			}
			else
				echo "No Results";  
        ?>   
		    	
      </div>
      <div class="modal-footer">
      	<h4 class = "font-underline text" style = "text-align: center">Copyright - FootyInc Designs</h4>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!-- JQueryReport Modal -->
        
<?php

}//admin
	
}//webReport
?>