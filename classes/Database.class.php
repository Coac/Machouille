<?php
		class Database
		{
			private $_link;

			public function __construct()
			{
				try 
				{
					$this->_link = new PDO('mysql:host=127.0.0.1;dbname=machouille', "root", "");
					$this->_link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} 
				catch(PDOException $e) 
				{
					 die('Database error : ' . $e->getMessage());
				}
			}

			public function request($sql, $issend = false)
			{ 
				 $records = $this->_link->prepare($sql); 
				 
				 try 
				 {
				 	$records->execute();
				 } 
				 catch (Exception $e) 
				 {
				 	die("Request error : " . $e->getMessage());
				 }
				
				 if(!$issend) return $records;
			} 

			public function prepare($str)
			{
				return $this->_link->prepare($str);
			}
			public function lastid(){
				return $this->_link->lastInsertId();
			}

			public function execute()
			{
 				$this->_link->execute($str);
			}

		} 
?>