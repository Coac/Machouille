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
			$data = $this->_db->prepare("INSERT INTO user (login,pwd) VALUES ('" . $log . "','". $pwd ."'); ", false); 
        $data->execute();
	       
		}
		
		public function setParameter($id, $paramName, $param) {
			$_SESSION['user'][$paramName] = $param;
            $data = $this->_db->prepare("UPDATE user SET " . $paramName . " = ' " . $param . " ' WHERE id = " . $id . ";", true);
            $data->execute();
        }

	}


?>