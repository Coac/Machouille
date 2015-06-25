
<?php
	$title = "Hey there, bitch!" ;
	include('partials/headertop.php');
?>
<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript">
function doSomething() {


$('#info').slideToggle();

myVar=setTimeout(function(){$('#updateFrm').slideToggle();},800)

}
</script>


<script type="text/javascript">
function doSomethingt() {


$('#updateFrm').slideToggle();

myVar=setTimeout(function(){$('#info').slideToggle();},800)

}
</script>


<script type="text/javascript">
	jQuery(document).ready(function() {
		$('#updateFrm').slideToggle();

	});
</script>
<h1>

</h1>
</br></br>

<div class="row">
	<div class="col-md-2"></div>

<div class="col-md-4" id="info">
					<h4 class="title"> <?php echo $_SESSION['user']['login'] ;?>  General Information</h4>
					
					<p> First name : <?php echo $_SESSION['user']['firstname'] ; ?></p>
					<p> Last name : <?php echo $_SESSION['user']['lastname'] ; ?> </p>
					<p> Date of birth : <?php echo $_SESSION['user']['datebirth'] ; ?></p>
					<p> Adress : <?php echo $_SESSION['user']['adress'] ; ?></p>
					<div class="clear"></div>
					

					<div class="button1">
					   <a class="btn btn-default" onclick="doSomething();" role="button">Edit the info</a>
					 </div>

				</div>

<div class="col-md-6" id="updateFrm">
	<h4 class="title">Edit your profil </h4>
<form >
	<p>New Password  <input id="password" class="form-control" type="password" name="password"> </p>
	<p>New First Name   <input id="fName" class="form-control" type="text" name="fName"></p>
	<p>New Last Name   	<input id="lName" class="form-control" type="text" name="lName"></p>
	<p>New Adress <input id="adress" class="form-control" type="text" name="adress">
	</p>
</form>
<div class="button1">
		<input class="btn btn-default" id="updating" type="button" value="Set">

					   <a class="btn btn-default" onclick="doSomethingt();" role="button">See the info</a>
					 </div>
</div>

</div>




<div class="row">
	<div class="col-md-2"></div>
<div class="col-md-6">
<h2 class="title">Orders Timeline</h2>
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
</div>

</div>




<?php include('partials/bottomPage.php'); ?>
</html>