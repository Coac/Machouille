<?php $title = "About"; include('partials/header.php'); ?>
       <div class="login">
          <div class="wrap">
				<ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Home</a>  / About</ul>
				<div class="section group">
				   <div class="labout span_1_of_about">
					 <h3>Testimonials</h3>
					  <div class="testimonials ">
						<div class="testi-item">
						<blockquote class="testi-item_blockquote">
							<a href="#">Ah mais c'est facile </a>
							<div class="clear"></div>
						</blockquote>
							<small class="testi-meta"><span class="user">Victor Le</span>,
							</div>
					   </div>
					   <div class="testimonials ">
						<div class="testi-item">
						<blockquote class="testi-item_blockquote">
							<a href="#">Fuck Le web </a>
							<div class="clear"></div>
						</blockquote>
							<small class="testi-meta"><span class="user">Samy Abdelazim</span>,
							</div>
					   </div>

					   <div class="testimonials ">
						<div class="testi-item">
						<blockquote class="testi-item_blockquote">
							<a href="#">Laissez moi faire les logos lol jsuis trop fort sur paint </a>
							<div class="clear"></div>
						</blockquote>
							<small class="testi-meta"><span class="user">Frank le beauf</span>,
						</div>
					   </div>
				    </div>
				    <div class="cont span_2_of_about">
				       <h3>Our Mission</h3>
					   	
				       <p>Notre mission était de créer un site de gestion de commande de chewingum.</p>
				        <h5 class="m_6">Meet Our Team</h5>	
				     <div class="section group">
						<div class="col_1_of_about-box span_1_of_about-box">
						   <a class="popup-with-zoom-anim" href="#small-dialog3">  <span class="rollover"></span><img src="images/blanc.jpg" title="continue" alt=""/></a>
		                     <div id="small-dialog3" class="mfp-hide">
							   <div class="pop_up2">
							   	 <h2>Lorem ipsum </h2>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								</div>
							 </div>
							 <h4 class="m_7"><a href="#">Etienne Martin : Chef de projet</a></h4>
							 <p>Lorem ipsum dolor consectetur adipisicing elit, sed do eiusmod.</p>
					     </div>
						<div class="col_1_of_about-box span_1_of_about-box">
						   <a class="popup-with-zoom-anim" href="#small-dialog3">  <span class="rollover"></span><img src="images/chinois.png" title="continue" alt=""/></a>
		                    <h4 class="m_7"><a href="#">Victor le developpeur de génie</a></h4>
							 <p>Lorem ipsum dolor consectetur adipisicing elit, sed do eiusmod.</p>
					     </div>
						<div class="col_1_of_about-box span_1_of_about-box">
						   <a class="popup-with-zoom-anim" href="#small-dialog3">  <span class="rollover"></span><img src="images/ui.jpg" title="continue" alt=""/></a>
		                    <h4 class="m_7"><a href="#">Samy L'homme qu'il faut avaoir chez soi</a></h4>
							 <p>Lorem ipsum dolor consectetur adipisicing elit, sed do eiusmod.</p>
					     </div>
					     <div class="col_1_of_about-box span_1_of_about-box">
						   <a class="popup-with-zoom-anim" href="#small-dialog3">  <span class="rollover"></span><img src="images/ui.jpg" title="continue" alt=""/></a>
		                    <h4 class="m_7"><a href="#">Frank le beauf #manquedimage</a></h4>
							 <p>Lorem ipsum dolor consectetur adipisicing elit, sed do eiusmod.</p>
					     </div>
				        <div class="clear"></div> 
							
		   </div>
		   <!-- Add fancyBox main JS and CSS files -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
           </div>
		   <div class="clear"></div>	
		  </div>
	</div>	
   </div>  
   <?php include('partials/bottomPage.php'); ?>