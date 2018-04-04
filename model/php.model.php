<?php
class phpModel extends BaseModel
{
	
	function __construct($connection)
	{
		parent::__construct($connection);		
	}
	
	function createTest($info)
	{
		$subject = '2';  	
		$query = $this->handle->prepare("INSERT INTO tbltest (questionID, creatorID, question, option1, option2, option3, option4, answer) VALUES (:qusID, :creID, :testQuest, :testOp1, :testOp2, :testOp3, :testOp4, :testAns)");
		$query->bindParam(':qusID', $subject);
		$query->bindParam(':creID', $info['creID']);
		$query->bindParam(':testQuest', $info['qDes']);
		$query->bindParam(':testOp1', $info['opOne']);
		$query->bindParam(':testOp2', $info['opTwo']);
		$query->bindParam(':testOp3', $info['opThree']);
		$query->bindParam(':testOp4', $info['opFour']);
		$query->bindParam(':testAns', $info['qAns']);
        $query->execute();
		
		$url = "Location: php";
	    header($url);
	}//createTest
	
	function getQuestions()
	{	
		
		
		$query = $this->handle->prepare("SELECT * FROM tbltest WHERE questionID = 2");
	//	$query->bindParam(':creID', $info['Id']);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
	}
	
	function getQuestionsNum()
	{	
		
		
		$query = $this->handle->prepare("SELECT testID FROM tbltest WHERE questionID = 2");
		$query->execute();
		$result = $query->rowCount();
		return $result;
	}
	
	function chkQuestions($info)
	{		
		$check=array(); // this will hold the results to return
	    $query=$this->handle->prepare("SELECT `testID`,`answer` FROM tbltest WHERE questionID = 2");
	    $query->execute(); 
	    while($row=$query->fetch(PDO::FETCH_ASSOC)){
	        if($info['answer'][$row['testID']]==$row['answer']){
	            $score = 0;
	            $check[$row['testID']]= $score + 1;
				$result = count($check);
			
	        }else{
	            $check[$row['testID']]="incorrect";
				
	        }
	    }
	    return $result;  // handle this however you like on your main page
	
				
		}//chkQuestions
}//phpModel

?>