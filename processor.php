<?php
class Processor{

	private $handle;
	
	function __construct($handle)
	{
		$this->handle = $handle;		
	}
	
	function select($query)
	{
		$stmt = $this->handle->prepare($query);
		$stmt->execute();
		return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);		
	}
	
	function insert($query)
	{
		$stmt = $this->handle->prepare($query);
		$stmt->execute();	
	}
	
	function update($query)
	{
		$stmt = $this->handle->prepare($query);
		$stmt->execute();
	}
	
	function delete()
	{}
}
?>