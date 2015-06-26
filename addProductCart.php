<?php
$title = "404"; include('partials/header.php'); 
$added = false;
if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['quantity']) && isset($_POST['price']) ) {
	if(isset($_SESSION['order'])) {
		for ($i=0; $i < count($_SESSION['order']); $i++) {
			if($_SESSION['order'][$i]['id'] == $_POST['id']) {
				$_SESSION['order'][$i]['qtt'] += $_POST['quantity'];
				$added = true;
				break;
			}

		}
		if($added == false)
			array_push($_SESSION['order'], array("id"=>$_POST['id'],"qtt"=>$_POST['quantity'], "name"=>$_POST['name'], "price"=>$_POST['price']) );
	}
	else
		$_SESSION['order'][0] = array("id"=>$_POST['id'],"qtt"=>$_POST['quantity'], "name"=>$_POST['name'], "price"=>$_POST['price']);
}
else {
	echo "Problem occured";
}
?>


<?php include('partials/bottomPage.php'); ?>