<?php  

    require_once("./classes/User.class.php");
    require_once("./classes/Core.class.php"); 
 

    $user = new User();
    $core = new Core();


		$err=0;		
		if(isset( $_GET['Login'] )&& isset( $_GET['password'] )){
		$login = $_GET['Login'];
		$pass = $_GET['password'] ;

		$user->adduserbasic($login,$pass);
		$core->tryAuth($login, $pass);
		$core->redirect("./");

		}
		else {
			echo "register failed";

		}
	
		


		

		?>
