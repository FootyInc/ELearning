<?php

class webReportModel extends BaseModel
{
	
	function __construct($connection)
	{
		parent::__construct($connection);		
	}
	
	function getScore()
	{
		//session_start();
		
		$query = $this->handle->prepare("SELECT webScore FROM tblscore WHERE user_ID = :userID ");
		$query->bindParam(':userID', $_SESSION['userID']);
		$query->execute();
		$result = $query->fetchAll();
		return $result;
		
	}//getScore
	
	function getQuestionsNum()
	{	
		
		
		$query = $this->handle->prepare("SELECT testID FROM tbltest");
		$query->execute();
		$result = $query->rowCount();
		return $result;
	}
}//webReportModel
?>