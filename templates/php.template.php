<?php
class phpTemplate extends BaseTemplate
{

	public function __construct($registry)
	{
		$name = "php";		
		parent::__construct($registry);	
		parent::model($name);
		parent::view($name);
	}
	
	public function admin()
	{
		if(isset($_POST['qDes'])){
	   		$this->phpModel->createTest($_POST);
		}
		else {
	     
			$this->phpView->admin();
		 
		 exit;
		}
	
	}//admin
	
	public function normal()
	{
		$key = "chkQustion";
		if(isset($_POST['subaction']) == $key){
			$result = $this->phpModel->chkQuestions($_POST);
			$questions = $this->phpModel->getQuestionsNum();
			$this->phpView->score($result, $questions);
		
		}
		else {
			$questions = $this->phpModel->getQuestions();
	   		$this->phpView->normal($questions); 
		}
	}//normal
	
	public function leader()
	{
	   	$this->phpView->leader();
	}//leader
	
	public function aoh()
	{
	   	$this->phpView->aoh(); 
	}//leader
	
	
	


}//phpTemplate

?>