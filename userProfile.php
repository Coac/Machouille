
<?php
	$title = "Hey there, bitch!" ;
	include('partials/header.php');
?>
<script type="text/javascript">
	jQuery(document).ready(function() {
		$('#updateFrm').slideToggle();
	});
</script>
<h1>
<?php
	echo $_SESSION['user']['login'] . " : Profile";
?>
</h1>
</br></br>

<input id="update" type="submit" value="Edit Profile">
<div id="info">
	<h2>General Information</h2>
	</br>  
	<h3>
	First name : <?php echo $_SESSION['user']['firstname'] ; ?>
	</br>  
	Last name : <?php echo $_SESSION['user']['lastname'] ; ?>
	</br>
	Date of birth : <?php echo $_SESSION['user']['datebirth'] ; ?>
	</br>
	Adress : <?php echo $_SESSION['user']['adress'] ; ?>
	</h3>
	</br></br>
</div>


<form id="updateFrm">
	<p>New Login</p><br>
	<input id="login"type="text" name="login">
	<br>
	<p>New Password</p><br>
	<input id="password" type="password" name="password">
	<br>
	<p>New First Name</p><br>
	<input id="fName" type="text" name="fName">
	<br>
	<p>New Last Name</p><br>
	<input id="lName" type="text" name="lName">
	<br>
	<p>New Adress</p><br>
	<input id="adress" type="text" name="adress">
	<br><br>
	<input id="updating" type="button" value="Set">
</form>

<h2>Orders Timeline</h2>
<?php
	include("classes/Product.class.php");
	$product = new Product();
	$p = $product->getUserOrders($_SESSION['user']['id']);
	//var_dump($p);
	for($i = 0; $i < count($p); $i++) {
		echo $p[$i]['category'] . " | " . $p[$i]['name'] . " | " . $p[$i]['price']."</br>";
		
	}
?>
</body>

<script type="text/javascript">
	jQuery(document).ready(function() {
			document.getElementById('updating').onclick = function() {
				var count = 0;
				if(document.getElementById('login').value != '' ) {
					count = count + 1;
					$.ajax( {
					url: "setUserParams.php",
					data: "paramName=login&param=" + document.getElementById('login').value,
					type: 'post',
					});
				}
				if(document.getElementById('password').value != '') {
					count = count + 1;
					$.ajax( {
					url: "setUserParams.php",
					data: "paramName=pwd&param=" + document.getElementById('password').value,
					type: 'post',
					});
				}
				if(document.getElementById('fName').value != '') {
					count = count + 1;
					$.ajax( {
					url: "setUserParams.php",
					data: "paramName=firstname&param=" + document.getElementById('fName').value,
					type: 'post',
					});
				}
				if(document.getElementById('lName').value != '') {
					count = count + 1;
					$.ajax( {
					url: "setUserParams.php",
					data: "paramName=lastname&param=" + document.getElementById('lName').value,
					type: 'post',
					});
				}
				if(document.getElementById('adress').value != '') {
					count = count + 1;
					$.ajax( {
					url: "setUserParams.php",
					data: "paramName=adress&param=" + document.getElementById('adress').value,
					type: 'post',
					});
				}
				if (count > 0) {
					alert("Profile parameters succesfully set ! ");
				}
			};
		});
</script>

<script type="text/javascript">
	jQuery(document).ready(function() {
		$("#update").click(function() {
			$('#info').slideToggle();
			$('#updateFrm').slideToggle();
		});
	});
</script>
<?php include('partials/bottomPage.php'); ?>
</html>