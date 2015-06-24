<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>poker</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

    <body>
    
    <?php require("classes/Database.class.php");
	include 'classes/Core.class.php';

	$db = new Database();
	
	$session = new Core();


	 //$data= $db->request("SELECT * FROM user", false );
	
	 //foreach ($data as $db_field  ) {
		//echo $db_field['id'] . " " . $db_field['login'] . " ".$db_field['passwd'] . " ". $db_field['role'] ."<BR>";
	 //}
	 
	 
	 if ($session->isUserLogged()){
	//if (isset($_SESSION['user']["id"])) {
	  $id = $_SESSION['user']["id"];
	 // echo $id;
	} 
	else {
	  echo "tu n'as rien a faire la";
	}
	 
	 
	 $nbjeton  = $_GET["nbjeton"];
	 
	 $db->request("UPDATE `casinofacile`.`user` SET `nbjeton` = `nbjeton` + '$nbjeton' WHERE `user`.`id` = $id;", true );
	 
	// echo $nbjeton;
	 
	 
	
	?>
 
    <?php
    /*
        //CONNECTION BDD
        $link = mysqli_connect("127.0.0.1", "root" ,"", "casinofacile" ) or die ("error" . mysqli_error($link));
        
        $SQL = "SELECT * FROM user";
        $result = $link->query($SQL);
        
        
        while ( $db_field = mysqli_fetch_array($result) ) {
                print $db_field['id'] . " " . $db_field['login'] . " ".$db_field['passwd'] . " ". $db_field['role'] ."<BR>";
        }
        
        /* Recuperation id par la session */
       /*  session_start();
         $id = $_GET['id'];
         
         //Recuperation nb jeton par GET
         $nbJeton = $_GET['nbJeton'];
        
         
        // update data in mysql database
        $sql="UPDATE `casinofacile`.`user` SET `nbjeton` = '$nbJeton' WHERE `user`.`id` = $id;";
        $result=mysql_query($sql);
    */
    ?>
    
    </body>

</html>