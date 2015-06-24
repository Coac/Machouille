<?php  

    require_once("classes//User.class.php");
    require_once("classes//User.core.php"); 
 

    $user = new User();
    $core = new Core();


		$err=0;		
		if(isset( $_GET['Login'] )&& isset( $_GET['password'] )){
		$login = $_GET['Login'];
		$pass = $_GET['password'] ;

		$user->adduserbasic($login,$pwd);
		$core->redirect("./");

		}
		else {
			echo "register failed";

		}
	
		


		

		?>
