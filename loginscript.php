<?php  

    require_once("./classes/User.class.php");
    require_once("./classes/Core.class.php"); 
 

    $user = new User();
    $core = new Core();
    session_start();


		$err=0;		
		if(isset( $_POST['Login'] )&& isset( $_POST['password'] )){
			$login = $_POST['Login'];
			$pass = $_POST['password'] ;

			
			if($core->tryAuth($login,$pass)){
				$core->redirect("./");
				}
			else{
				$_SESSION["error"]="Utilisateur inconnus";
				$core->redirect("login.php");
			}

		}
		else {
			$_SESSION["error"]="informations incompletes";
			$core->redirect("login.php");

		}
	
		


		

		?>
