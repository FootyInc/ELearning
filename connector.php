<?php
	//db connection class using singleton pattern
	class Connector
	{	 
		//variable to hold connection object.
		protected static $handle;
		protected static $processor;		
		
		//private construct - class cannot be instatiated externally.
		public function __construct() 
		{	 
			try 
			{
				// assign PDO object to db variable
				self::$handle = new PDO('mysql:host=localhost; dbname=learningwebsite','root','' );
				self::$handle->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				
				require_once('processor.php');
				self::$processor = new Processor(self::$handle);
			}
			catch (PDOException $e) 
			{				
				trigger_error("Connection Error: " . $e->getMessage());
			}	
		}
		
		public static function getConnection() 
		{
			if (!self::$handle) 
			{
				new Connector();
			}
			return self::$handle;
		}	 
		
		public static function closeConnection()
		{
			self::$handle = null;
		}
		
	}
?>