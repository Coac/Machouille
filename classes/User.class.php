<?php

    require_once("Database.class.php");

	
	Class User
	{
		 private $_db;
		public function __construct()
		{
			$this->_db = new Database();
		}

		public function adduserbasic($log,$pwd){
		$data = $this->_db->prepare("INSERT INTO user ($log,$pwd) VALUES ('" . $log . "','". $pwd ."'); ", false); 
        $data->execute();
		}
 

	}


?>