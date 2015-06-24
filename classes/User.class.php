<?php
	
	Class User
	{
		public function __construct()
		{

		}

		public function adduserbasic($log,$pwd){
		$data = $this->_db->prepare("INSERT INTO user ($log,$pwd) VALUES ('" . $log . "','". $pwd ."'); ", false); 
        $data->execute();
		}
 

	}


?>