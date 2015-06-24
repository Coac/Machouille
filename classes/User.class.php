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
		$data = $this->_db->prepare("SELECT * FROM product, productcategory WHERE product.category=productcategory.id And login='" . $user . "' AND passwd = '". $password ."' ", true); 
        $data->execute();
        $result = $data->fetchAll();
        if(empty($result)) 
            return false;
        else
        {
             $_SESSION["user"] = $result[0];
             return true;
        }
		}
 

	}


?>