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

<div class="header-bottom">
    <div class="wrap">
		<div class="header-bottom-left">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			</div>
			<div class="menu">
            <ul class="megamenu skyblue">
		<li class="active grid"><a href="index.php">Home</a></li>
		<li><a class="color4" href="products.php?category=tri-gout">Tri-gout</a>
			<div class="megapanel">
				<div class="row">
					<div class="col1">
						<div class="h_nav">
							<h4>Contact Lenses</h4>
							<ul>
								<li><a href="products.php?category=tri-gout">Daily-wear soft lenses</a></li>
								<li><a href="products.php?category=tri-gout">Extended-wear</a></li>
								<li><a href="products.php?category=tri-gout">Lorem ipsum </a></li>
								<li><a href="products.php?category=tri-gout">Planned replacement</a></li>
							</ul>	
						</div>							
					</div>
					<div class="col1">
						<div class="h_nav">
							<h4>Sun Glasses</h4>
							<ul>
								<li><a href="products.php?category=tri-gout">Heart-Shaped</a></li>
								<li><a href="products.php?category=tri-gout">Square-Shaped</a></li>
								<li><a href="products.php?category=tri-gout">Round-Shaped</a></li>
								<li><a href="products.php?category=tri-gout">Oval-Shaped</a></li>
							</ul>	
						</div>							
					</div>
					<div class="col1">
						<div class="h_nav">
							<h4>Eye Glasses</h4>
							<ul>
								<li><a href="products.php?category=tri-gout">Anti Reflective</a></li>
								<li><a href="products.php?category=tri-gout">Aspheric</a></li>
								<li><a href="products.php?category=tri-gout">Bifocal</a></li>
								<li><a href="products.php?category=tri-gout">Hi-index</a></li>
								<li><a href="products.php?category=tri-gout">Progressive</a></li>
							</ul>	
						</div>												
					</div>
				  </div>
				</div>
			</li>				
			<li><a class="color5" href="products.php?category=cremeux">Cremeux</a>
			<div class="megapanel">
				<div class="col1">
						<div class="h_nav">
							<h4>Contact Lenses</h4>
							<ul>
								<li><a href="products.php?category=cremeux">Daily-wear soft lenses</a></li>
								<li><a href="products.php?category=cremeux">Extended-wear</a></li>
								<li><a href="products.php?category=cremeux">Lorem ipsum </a></li>
								<li><a href="products.php?category=cremeux">Planned replacement</a></li>
							</ul>	
						</div>							
					</div>
					<div class="col1">
						<div class="h_nav">
							<h4>Sun Glasses</h4>
							<ul>
								<li><a href="products.php?category=cremeux">Heart-Shaped</a></li>
								<li><a href="products.php?category=cremeux">Square-Shaped</a></li>
								<li><a href="products.php?category=cremeux">Round-Shaped</a></li>
								<li><a href="products.php?category=cremeux">Oval-Shaped</a></li>
							</ul>	
						</div>							
					</div>
					<div class="col1">
						<div class="h_nav">
							<h4>Eye Glasses</h4>
							<ul>
								<li><a href="products.php?category=cremeux">Anti Reflective</a></li>
								<li><a href="products.php?category=cremeux">Aspheric</a></li>
								<li><a href="products.php?category=cremeux">Bifocal</a></li>
								<li><a href="products.php?category=cremeux">Hi-index</a></li>
								<li><a href="products.php?category=cremeux">Progressive</a></li>
							</ul>	
						</div>												
					</div>
				</div>
			</li>
			<li><a class="color6" href="products.php?category=fruit">Fruit</a></li>
			<li><a class="color7" href="about.php">About</a></li>
		</ul>
		</div>
	</div>
   <div class="header-bottom-right">
          <div class="search">
     		<form methode="get"	action="products.php">  
				<input type="text" name="search" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit">
				<div id="response"> </div>
			</form>
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

