<!DOCTYPE HTML>
<html>
<head>

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
		<?php  $category = "tri-gout";  include("partials/displayMegaPanel.php"); ?>
		<?php  $category = "cremeux";  include("partials/displayMegaPanel.php"); ?>				
		<?php  $category = "fruit";  include("partials/displayMegaPanel.php"); ?>	
		<?php  $category = "" ?>
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
		<li><a class="active-icon c2" href="#"> </a>
			<ul class="sub-icon1 list">
				<li><h3>Votre panier </h3><?php

				if(isset($_SESSION["order"])){
					echo " <li><p> vous avez   " .count($_SESSION["order"]). "  produit(s) </p></li>"; 
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

