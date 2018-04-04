<?php
class jQueryTemplate extends BaseTemplate
{

	public function __construct($registry)
	{
		$name = "jQuery";		
		parent::__construct($registry);	
		parent::model($name);
		parent::view($name);
	}
	
	public function admin()
	{
		if(isset($_POST['qDes'])){
	   		$this->jQueryModel->createTest($_POST);
		}
		else {
	     
			$this->jQueryView->admin();
		 
		 exit;
		}
	
	}//admin
	
	public function normal()
	{
		$key = "chkQustion";
		if(isset($_POST['subaction']) == $key){
			$result = $this->jQueryModel->chkQuestions($_POST);
			$questions = $this->jQueryModel->getQuestionsNum();
			$this->jQueryView->score($result, $questions);
		
		}
		else {
			$questions = $this->jQueryModel->getQuestions();
	   		$this->jQueryView->normal($questions); 
		}
	}//normal
	
	public function leader()
	{
	   	$this->jQueryView->leader();
	}//leader
	
	public function aoh()
	{
	   	$this->jQueryView->aoh(); 
	}//leader
	
	
	


}//phpTemplate

?>