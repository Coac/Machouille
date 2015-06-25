<?php

    require_once("Database.class.php");

	
	Class User
	{
		 private $_db;
		public function __construct()
		{
			$this->_db = new Database();
		}

		public function adduserbasic($log,$pwd,$name,$adre,$email){
			$data = $this->_db->prepare("INSERT INTO user (login,pwd,firstname,adress) VALUES ('" . $log . "','". $pwd ."','". $name ."','". $adre ."'); ", false); 
        $data->execute();
	       
		}
		
		public function setParameter($id, $lname, $fname,$adress) {
			$_SESSION['user']['firstname'] = $fname;
			$_SESSION['user']['lastname'] = $lname;
			$_SESSION['user']['adress'] = $adress;

            $data = $this->_db->prepare("UPDATE user SET firstname ='" .$fname . "',lastname='". $lname . "',adress='".$adress."'  WHERE id = " . $id . ";", true);
            var_dump($data);
            $data->execute();
        }

	}


?>