<?php
			require_once("../classes/Core.class.php");
			$sssion = new Core();
			$sssion->disconnect();
			header('Location: ../index.php');      
?>
