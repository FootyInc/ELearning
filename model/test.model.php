<?php
class testModel extends BaseModel
{
	
	function __construct($connection)
	{
		parent::__construct($connection);		
	}
	
	function webTest($info)
	{
		
    
    	
		$query = $this->handle->prepare("INSERT INTO tbltest (creatorID, question, option1, option2, option3, option4, answer) VALUES (:creID, :testQuest, :testOp1, testOp2, testOp3, testOp4, testAns)");
        $query->bindParam(':creID', $info['creID']);
		$query->bindParam(':testQuest', $info['qDes']);
        $query->bindParam(':TestOp1', $info['opOne']);
		$query->bindParam(':TestOp2', $info['opTwo']);
		$query->bindParam(':TestOp3', $info['opThree']);
		$query->bindParam(':TestOp4', $info['opFour']);
		$query->bindParam(':TestAns', $info['qAns']);
        $query->execute();

          if($row = $query->fetch()){		
            $added = 1;
			  echo $added;
	        
          }
		  else 
		  	$added = null;
		  	 echo $added;
        

        
		 
    
		
	}//webTest
}//testModel

?>