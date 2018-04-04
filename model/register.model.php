<?php

class registerModel extends BaseModel
{
	function __construct($connection)
	{
		parent::__construct($connection);		
	}
	
	function createUser($info)
	{
		
        $query = $this->handle->prepare("INSERT INTO tblusers (username, password, firstname, lastname) VALUES (:username, :password, :firstname, :lastname)");
        $query->bindParam(':username', $info['inputUName']);
        $query->bindParam(':password', $info['inputPassword']);
		$query->bindParam(':firstname', $info['inputFName']);
        $query->bindParam(':lastname', $info['inputLName']);
        $query->execute();

       // if($row = $query->fetch()){		
        //    $url = "Location: login";
	     //   header($url);
      //  }
		 
    
		
	}//createUser
}//regModel




?>