<?php
class  webReportTemplate extends BaseTemplate
{

	public function __construct($registry)
	{
		$name = "webReport";		
		parent::__construct($registry);	
		parent::model($name);
		parent::view($name);
	}
	
	public function admin()
	{
		if(isset($_POST['qDes'])){
	   		$this->webReportModel->createTest($_POST);
		}
		else {
	     
			$this->webReportView->admin();
		 
		 exit;
		}
	
	}//admin
	
	public function normal()
	{
		$key = "chkQustion";
		if(isset($_POST['subaction']) == $key){
			$result = $this->webReportModel->chkQuestions($_POST);
			$questions = $this->webReportModel->getQuestionsNum();
			$this->htmlView->score($result, $questions);
		
		}
		else {
			$score = $this->webReportModel->getScore();
			$questions = $this->webReportModel->getQuestionsNum();
	   		$this->webReportView->normal($score, $questions); 
		}
	}//normal
	
	
	
				
			
	
	
	


}//webReportTemplate

