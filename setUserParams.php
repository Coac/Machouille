<?php
	session_start();
	include("classes/User.class.php");
	$user = new User();
	$user->setParameter($_SESSION['user']['id'], $_POST['paramName'], $_POST['param']);
?>