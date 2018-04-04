<?php
class webTemplate extends BaseTemplate
{

	public function __construct($registry)
	{
		$name = "web";		
		parent::__construct($registry);	
		parent::model($name);
		parent::view($name);
	}
	
	public function admin()
	{
		if(isset($_POST['qDes'])){
	   		$this->webModel->createTest($_POST);
		}
		else {
	     
			$this->webView->admin();
		 
		 exit;
		}
	
	}//admin
	
	public function normal()
	{
		$key = "chkQustion";
		if(isset($_POST['subaction']) == $key){
			$result = $this->webModel->chkQuestions($_POST);
			$questions = $this->webModel->getQuestionsNum();
			$score = $this->webModel->addScore($result);
			$this->webView->score($result, $questions);	
		}
		else {
			$questions = $this->webModel->getQuestions();
	   		$this->webView->normal($questions); 
		}
	}//normal
	public function leader()
	{
		
	   	$this->webView->leader();
	  
	}
	public function aoh()
	{
		
	   	$this->webView->aoh();
	  
	}
	


}//webTemplate

?>