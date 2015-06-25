<?php $title = "Index"; include('partials/header.php'); ?>
<!-- start slider -->

<div id="fwslider">
  <div class="slider_container">
    <div class="slide">
      <!-- Slide image -->
      <img src="images/cg13.jpg" alt=""/>
      <!-- /Slide image -->
      <!-- Texts container -->
      <div class="slide_content">
        <div class="slide_content_wrap">
          <!-- Text title -->
          <h4 class="title">Depuis 1922</h4>     
          <!-- /Text title -->
          <!-- Text description -->
          <p class="description">Pierre-Auguste Gauhm et HEnri Mamacher</p>
          <!-- /Text description -->
        </div>
      </div>
      <!-- /Texts container -->
    </div>
    <!-- /Duplicate to create more slides -->
    <div class="slide"> <img src="images/cg1.jpg" alt=""/>
      <div class="slide_content">
        <div class="slide_content_wrap">
          <h4 class="title">Notre specialite</h4>
          <p class="description">Le Chewing-gum tri-gout</p>
        </div>
      </div>
    </div>
    <!--/slide -->
    <!-- /Duplicate to create more slides -->
    <div class="slide"> <img src="images/cg10.jpg" alt=""/>
      <div class="slide_content">
        <div class="slide_content_wrap">
          <h4 class="title">Notre classique le melange de saveur</h4>
          <p class="description"> Citron / Enrobage Chocolat / Coeur de Coco </p>
        </div>
      </div>
    </div>
    <!--/slide -->
  </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  	
	        <?php include('classes/displayProducts.php'); ?> 						 			    
		  </div>
			<div class="rsidebar span_1_of_left">
				<div class="top-border"> </div>
				 <div class="border">
	             <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
	             <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
				  <script src="js/jquery.nivo.slider.js"></script>
				    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
		    <div class="slider-wrapper theme-default">
              <div id="slider" class="nivoSlider">
                <img src="images/cg12.jpg"  alt="" />
               	<img src="images/cg3.jpg"  alt="" />
                <img src="images/cg4.jpg"  alt="" />
                <img src="images/cg6.jpg"  alt="" />
                <img src="images/cg7.jpg"  alt="" />
              </div>
             </div>
              <div class="btn"><a href="products.php">Check it Out</a></div>
             </div>
           <div class="top-border"> </div>
			<div class="sidebar-bottom">
			    <h2 class="m_1">Newsletters<br> Signup</h2>
			    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer</p>
			    <div class="subscribe">
					 <form>
					    <input name="userName" type="text" class="textbox">
					    <input type="submit" value="Subscribe">
					 </form>
	  			</div>
			</div>
	    </div>
	   <div class="clear"></div>
	</div>
	</div>
	</div>
   <?php include('partials/bottomPage.php'); ?>