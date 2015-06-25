<?php
	session_start();
	var_dump( $_POST );
	include("classes/User.class.php");
	$user = new User();
	$user->setParameter($_SESSION['user']['id'], $_POST['lname'], $_POST['fname'],$_POST['adress']);
?>