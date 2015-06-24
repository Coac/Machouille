<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>poker</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

    <body>
    
    <?php require("../classes/Database.class.php");
	include '../classes/Core.class.php';

	$db = new Database();
	
	$session = new Core(); 
	 
	 if ($session->isUserLogged()){
	//if (isset($_SESSION['user']["id"])) {
	  $id = $_SESSION['user']["id"];
	} 
	else {
	  echo "tu n'as rien a faire la";
	}
	 
	 
	 $nbjeton  = $_GET["nbjeton"];
	 $db->request("UPDATE `casinofacile`.`user` SET `nbjeton` = `nbjeton` + '$nbjeton' WHERE `user`.`id` = $id;", true );
	 header('Location: ./');      
	 
	
	?>
   
    </body>

</html>