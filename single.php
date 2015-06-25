<?php $title = "Single"; include('partials/header.php'); 

require_once("classes/Product.class.php"); 

$productObject = new Product();
$product = $productObject->getById($_GET['id']);
$categoryName = $productObject->getCategoryName($_GET['id']);
?>
<div class="mens">    
  <div class="main">
     <div class="wrap">
     	<ul class="breadcrumb breadcrumb__t"><a class="home" href="index.php">Home</a> / <a href="#"><?php echo $categoryName[0]['name'] ?></a> / <?php echo $product[0]['name'] ?></ul>
		<div class="cont span_2_of_3">
		  	<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src=<?php echo "images/" . $product[0]['img'] ?> class="img-responsive" />
								
								</a>
							</li>
							
						</ul>
						 <div class="clearfix"></div>
	            </div>
		         <div class="desc1 span_3_of_2">
		         	<h3 class="m_3"><?php echo $product[0]['name'] ?></h3>
		             <p class="m_5">$<?php echo $product[0]['price'] ?> <a href="#">click for offer</a></p>
		         	 <div class="btn_form" id="form">
						<form>
							<input type="submit" value="buy" title="">
							<input type="hidden" name="id" value=<?php echo $product[0]['id'] ?>>
							<input type="hidden" name="name" value=<?php echo $product[0]['name']  ?>>
							<select name="quantity">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
							</select>
						</form>
					 </div>
					<span class="m_link"><a href="#">login to save in wishlist</a> </span>
				     <p class="m_text2"> <?php echo $product[0]['desc'] ?> </p>
			     </div>
			   <div class="clear"></div>	
	    <div class="clients">
	    	<?php $res=$productObject->getByCategoryid($product[0]['category']);
		 		$cat = $productObject->getCategoryName($product[0]['category'])	;?>
	    <h3 class="m_3"><?php echo count($res)+1; ?> Other Products in the same category</h3>
		 <ul id="flexiselDemo3">
		 	<?php
		 	foreach ($res as $key => $value) {
		 	?>	
			<li><a href=<?php echo '"single.php?id=' . $value['id'].'"' ?>><img <?php echo 'src="images/'.$value['img'].'"'; ?>/><p><?php echo substr($value['name'],0,-5).".."; ?></p></a></li>
			<?php } ?>
		 </ul>
	<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
     </div>

      </div>
						<div class="rsidebar span_1_of_left">
				<h5 class="m_1">Categories</h5>
					<select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Tri-gout</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
					</select>
					<select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Cremeux</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
					</select>
					<ul class="kids">
						<li><a href="#">Fruits</a></li>
					</ul>
                   <section  class="sky-form">
					<h4>Prix</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>0 - 5 e</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>0 - 5 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>5 - 9 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10 - 19 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>20 - 29 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30 - 39 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40 - 49 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>50 - 59 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>60 - 69 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>70 - 79 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>80 - 89 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>90 - 99 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>100 - 109 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>110 - 119 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>120 - 129 e</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>130 - ... </label>	
							</div>
						</div>
		        </section>
		       <section  class="sky-form">
					<h4>Parfums</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Abricot</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Banane</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Cassis</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Citron</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Cocktail d'agrumes</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Figue</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Fraise</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Framboise</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Goyave</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kiwi</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Litchi</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Litchi</label>
							</div>
						</div>
		       </section>
		       <!-- <section  class="sky-form">
					<h4>Frame Shape</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Pilot</label>
							</div>
							<div class="col col-4">
								
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rectangle</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Square</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Round</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Others</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Cat Eyes</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Wrap Around</label>
								
							</div>
						</div>
		       </section> -->
		       <!--<section  class="sky-form">
					<h4>Frame Size</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Small</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Medium</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Large</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Medium</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Large</label>
							</div>
						</div>
		       </section>
		       <section  class="sky-form">
					<h4>Frame Type</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Full Rim</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rim Less</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Half Rim</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rim Less</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Half Rim</label>
							</div>
						</div>
		       </section>
		       <!-- <section  class="sky-form">
					<h4>Colors</h4>
						<ul class="color-list">
							<li><a href="#"> <span class="color1"> </span><p class="red">Red</p></a></li>
							<li><a href="#"> <span class="color2"> </span><p class="red">Green</p></a></li>
							<li><a href="#"> <span class="color3"> </span><p class="red">Blue</p></a></li>
							<li><a href="#"> <span class="color4"> </span><p class="red">Yellow</p></a></li>
							<li><a href="#"> <span class="color5"> </span><p class="red">Violet</p></a></li>
							<li><a href="#"> <span class="color6"> </span><p class="red">Orange</p></a></li>
							<li><a href="#"> <span class="color7"> </span><p class="red">Gray</p></a></li>
					   </ul>
		       </section>-->
		      </div>
		       <script src="js/jquery.easydropdown.js"></script>
		      </div>
		      <div class="clear"></div>
			</div>
			 <div class="clear"></div>
		   </div>
		</div>

		<script>
		
						
			
		      $(function () {

		        $('form').on('submit', function (e) {

		          e.preventDefault();

		          $.ajax({
		            type: 'post',
		            url: 'addProductCart.php',
		            data: $('form').serialize()
		          });
		          
		          myVar=setTimeout(function(){location.reload()},100)
		        });

		      });
		 

		</script>









	<?php include('partials/bottomPage.php'); ?>