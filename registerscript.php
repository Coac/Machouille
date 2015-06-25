<?php  

    require_once("./classes/User.class.php");
    require_once("./classes/Core.class.php"); 
 

    $user = new User();
    $core = new Core();


		$err=0;		
		if(isset( $_GET['Login'] )&& isset( $_GET['password'] )){
		$login = $_GET['Login'];
		$pass = $_GET['password'] ;
		$name = $_GET['name'] ;

		$email = $_GET['email'] ;

		$adre = $_GET['adress'] ;


		$user->adduserbasic($login,$pass,$name,$adress,$email);
		$core->redirect("./");

		}
		else {
			echo "register failed";

		}
	
		


		

		?>
