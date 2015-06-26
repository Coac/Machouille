<?php
session_start();
var_dump($_SESSION['order']);
require_once("./classes/product.class.php");
$core = new Product();
$core->addorder($_SESSION['order'],$_SESSION['user']['id']);
unset($_SESSION['order']);
header('Location: ./');      


?>