<?php

class loginModel extends BaseModel
{
	
	function __construct($connection)
	{
		parent::__construct($connection);		
	}
	
	function checklogin($info)
	{
		session_start();
        $query = $this->handle->prepare("SELECT * FROM tblusers WHERE username=:username AND password=:password");
        $query->bindParam(':username', $info['inputUName']);
        $query->bindParam(':password', $info['inputPassword']);
        $query->execute();

        if($row = $query->fetch()){
            $_SESSION['loggedin'] = "YES";
			$_SESSION['userID'] = $row["userID"];
			$_SESSION['fname'] = $row["firstname"];
			$_SESSION['lname'] = $row["lastname"];
	        $_SESSION['accountype'] = $row["accountType"];		
            $url = "Location: index";
	        header($url);
        }
		 	
	}//checkLogin
}//logModel




?>
