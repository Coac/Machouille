<?php
	include('partials/headerTop.php');
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

<form id="updateFrm" method="post">
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
	<input id="updating" type="submit" value="Valider">
</form>

<h2>Orders Timeline</h2>
<?php
	$connection = mysqli_connect("localhost","root","usbw");				
	if ( ! $connection )
	die ("connection impossible");
	mysqli_select_db($connection, "machouille") or die ("connection error");
	$requete = mysqli_query($connection, "SELECT p.category, p.name, p.price FROM product p, productordered po, user u, order or WHERE u.id = " . $_SESSION['user']['login'] . " and u.id = or.iduser and po.idorder = or.id and p.id = po.idproduct;");
?>
</body>

<script type="text/javascript">
	jQuery(document).ready(function() {
			document.getElementById('updating').onclick = function() {
				if(document.getElementById('login').value != '') {
					$requete = mysqli_query($connection, "UPDATE user SET login = ' " . document.getElementById('login').value . " ' WHERE id = " . $_SESSION['user']['id'] . ";");
				}
				if(document.getElementById('password').value != '') {
					$requete = mysqli_query($connection, "UPDATE user SET pwd = ' " . document.getElementById('password').value . " ' WHERE id = " . $_SESSION['user']['id'] . ";");
				}
				if(document.getElementById('fName').value != '') {
					$requete = mysqli_query($connection, "UPDATE user SET firstname = ' " . document.getElementById('fName').value . " ' WHERE id = " . $_SESSION['user']['id'] . ";");
				}
				if(document.getElementById('lName').value != '') {
					$requete = mysqli_query($connection, "UPDATE user SET lastname = ' " . document.getElementById('lName').value . " ' WHERE id = " . $_SESSION['user']['id'] . ";");
				}
				if(document.getElementById('adress').value != '') {
					$requete = mysqli_query($connection, "UPDATE user SET adress = ' " . document.getElementById('adress').value . " ' WHERE id = " . $_SESSION['user']['id'] . ";");
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