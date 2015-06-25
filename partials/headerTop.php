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
				<li><a href="checkout.php">Wishlist</a></li> |
				<li><a href="checkout.php">Checkout</a></li> |

				
				<li>


					<?php
					require_once("./classes/Core.class.php"); 
					$core = new Core();
					if($core->isUserLogged()){
					?>
					<a href='userProfile.php'>
					<?php
						echo $_SESSION['user']['login'];
					?>
					</a>
					<?php
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