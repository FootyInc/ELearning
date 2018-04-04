<?php
class htmlTemplate extends BaseTemplate
{

	public function __construct($registry)
	{
		$name = "html";		
		parent::__construct($registry);	
		parent::model($name);
		parent::view($name);
	}
	
	public function admin()
	{
		if(isset($_POST['qDes'])){
	   		$this->htmlModel->createTest($_POST);
		}
		else {
	     
			$this->htmlView->admin();
		 
		 exit;
		}
	
	}//admin
	
	public function normal()
	{
		$key = "chkQustion";
		if(isset($_POST['subaction']) == $key){
			$result = $this->htmlModel->chkQuestions($_POST);
			$questions = $this->htmlModel->getQuestionsNum();
			$this->htmlView->score($result, $questions);
		
		}
		else {
			$questions = $this->htmlModel->getQuestions();
	   		$this->htmlView->normal($questions); 
		}
	}//normal
	
	public function leader()
	{
	   	$this->htmlView->leader();
	}//leader
	
	public function aoh()
	{
	   	$this->htmlView->aoh(); 
	}//leader
	
	
				
			
	
	
	


}//webTemplate

?>