<?php
	require_once("./classes/Core.class.php");
	unset($_SESSION["order"]);
	$core= new Core();
	$core->redirect("checkout.php");
?>