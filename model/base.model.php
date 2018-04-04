<?php
Abstract class BaseModel 
{
	protected $connection;
	protected $handle;
	
	function __construct($connection)
	{
		$this->connection = $connection;
		$this->handle = $connection->getConnection();
	}
}
?>