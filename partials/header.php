<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<!--end slider -->
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>


 <div class="header-top">
		<div class="wrap"> 
		  <div class="header-top-left">
		  	   <div class="box">
				      <select tabindex="4" class="dropdown">
						<option value="" class="label" value="">Language :</option>
						<option value="1">English</option>
						<option value="2">French</option>
						<option value="3">German</option>
				   </select>
				    </div>
				    <div class="box1">
				        <select tabindex="4" class="dropdown">
						<option value="" class="label" value="">Currency :</option>
						<option value="1">$ Dollar</option>
						<option value="2">€ Euro</option>
					</select>
				    </div>
				    <div class="clear"></div>
			 </div>
		 <div class="cssmenu">
			<ul>
				<li class="active"><a href="login.php">Account</a></li> |
				<li><a href="checkout.php">Wishlist</a></li> |
				<li><a href="checkout.php">Checkout</a></li> |

				
				<li>


					<?php
					require_once("./classes/Core.class.php"); 
					$core = new Core();
					if($core->isUserLogged()){
						echo $_SESSION['user']['login'];
					}
					else
						echo "<a href='login.php'> Login </a>";

				?>
				</li> 

				<?php

				if(!$core->isUserLogged()){
					echo "| <li><a href='register.php'>Sign Up</a></li>";
				}
				else{
					echo "| <li><a href='disconnect.php' >Log Out</a></li>";
				}
				?>
			</ul>
		</div>
		<div class="clear"></div>
		</div>
</div>
<div class="header-bottom">
    <div class="wrap">
		<div class="header-bottom-left">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			</div>
			<div class="menu">
            <ul class="megamenu skyblue">
		<li class="active grid"><a href="index.php">Home</a></li>
		<li><a class="color4" href="#">women</a>
			<div class="megapanel">
				<div class="row">
					<div class="col1">
						<div class="h_nav">
							<h4>Contact Lenses</h4>
							<ul>
								<li><a href="womens.php">Daily-wear soft lenses</a></li>
								<li><a href="womens.php">Extended-wear</a></li>
								<li><a href="womens.php">Lorem ipsum </a></li>
								<li><a href="womens.php">Planned replacement</a></li>
							</ul>	
						</div>							
					</div>
					<div class="col1">
						<div class="h_nav">
							<h4>Sun Glasses</h4>
							<ul>
								<li><a href="womens.php">Heart-Shaped</a></li>
								<li><a href="womens.php">Square-Shaped</a></li>
								<li><a href="womens.php">Round-Shaped</a></li>
								<li><a href="womens.php">Oval-Shaped</a></li>
							</ul>	
						</div>							
					</div>
					<div class="col1">
						<div class="h_nav">
							<h4>Eye Glasses</h4>
							<ul>
								<li><a href="womens.php">Anti Reflective</a></li>
								<li><a href="womens.php">Aspheric</a></li>
								<li><a href="womens.php">Bifocal</a></li>
								<li><a href="womens.php">Hi-index</a></li>
								<li><a href="womens.php">Progressive</a></li>
							</ul>	
						</div>												
					</div>
				  </div>
				</div>
			</li>				
			<li><a class="color5" href="#">Men</a>
			<div class="megapanel">
				<div class="col1">
						<div class="h_nav">
							<h4>Contact Lenses</h4>
							<ul>
								<li><a href="mens.php">Daily-wear soft lenses</a></li>
								<li><a href="mens.php">Extended-wear</a></li>
								<li><a href="mens.php">Lorem ipsum </a></li>
								<li><a href="mens.php">Planned replacement</a></li>
							</ul>	
						</div>							
					</div>
					<div class="col1">
						<div class="h_nav">
							<h4>Sun Glasses</h4>
							<ul>
								<li><a href="mens.php">Heart-Shaped</a></li>
								<li><a href="mens.php">Square-Shaped</a></li>
								<li><a href="mens.php">Round-Shaped</a></li>
								<li><a href="mens.php">Oval-Shaped</a></li>
							</ul>	
						</div>							
					</div>
					<div class="col1">
						<div class="h_nav">
							<h4>Eye Glasses</h4>
							<ul>
								<li><a href="mens.php">Anti Reflective</a></li>
								<li><a href="mens.php">Aspheric</a></li>
								<li><a href="mens.php">Bifocal</a></li>
								<li><a href="mens.php">Hi-index</a></li>
								<li><a href="mens.php">Progressive</a></li>
							</ul>	
						</div>												
					</div>
				</div>
			</li>
			<li><a class="color6" href="other.php">Other</a></li>
			<li><a class="color7" href="other.php">Purchase</a></li>
		</ul>
		</div>
	</div>
   <div class="header-bottom-right">
     <div class="search">	  
			<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
			<input type="submit" value="Subscribe" id="submit" name="submit">
			<div id="response"> </div>
	 </div>
  <div class="tag-list">
    <ul class="icon1 sub-icon1 profile_img">
		<li><a class="active-icon c1" href="#"> </a>
			<ul class="sub-icon1 list">
				<li><h3>sed diam nonummy</h3><a href=""></a></li>
				<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
			</ul>
		</li>
	</ul>
	<ul class="icon1 sub-icon1 profile_img">
		<li><a class="active-icon c2" href="#"> </a>
			<ul class="sub-icon1 list">
				<li><h3>Votre panier </h3><?php

				if(isset($_SESSION["order"])){
					echo " <li><p> vous avez   " .count($_SESSION["order"]). "  produits </p></li>"; 
					foreach ($_SESSION["order"] as $key => $value) {
					?>
					<li><p> <?php echo $value["qtt"] . "  ". $value["name"] ;?> </p></li>
					<?php
					}
					echo '<li><p> <a class="btn btn-default" onclick="doSomething();" role="button">Delete all the items</a></p> </li>';
				}

				
				else
					echo '<li><p>  Votre panier est vide </p></li>';
				
				?>
				
			</ul>
		</li>
	</ul>
    <ul class="last"><li><a href="checkout.php">Cart(<?php

				if(isset($_SESSION["order"])){
					echo count($_SESSION["order"]);
				}
				else
					echo '0';
				
					
				
				?>)</a></li></ul>
  </div>
</div>
 <div class="clear"></div>
 </div>
</div>


<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
function doSomething() {
    $.get("destroybasket.php");
 	myVar=setTimeout(function(){location.reload()},100);

    return false;
}
</script>


