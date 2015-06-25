<?php $title = "Produits"; include('partials/header.php'); ?>
<div class="mens">    
  <div class="main">
     <div class="wrap">
		<div class="cont span_2_of_3">
		  	<h2 class="head">Chewing-gum</h2>
		  	<div class="mens-toolbar">
              <div class="sort">
               	<div class="sort-by">
		            <label>Sort By</label>
		            <select>
		                            <option value="">
		                    Position                </option>
		                            <option value="">
		                    Name                </option>
		                            <option value="">
		                    Price                </option>
		            </select>
		            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
               </div>
    		</div>
        <div class="pager">   
        	<div class="limiter visible-desktop">
            <label>Show</label>
            <select>
                            <option value="" selected="selected">
                    9                </option>
                            <option value="">
                    15                </option>
                            <option value="">
                    30                </option>
                        </select> per page        
             </div>
       		<ul class="dc_pagination dc_paginationA dc_paginationA06">
			    <li><a href="#" class="previous">Pages</a></li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
		  	</ul>
	   		<div class="clear"></div>
    	</div>
     	<div class="clear"></div>
	</div>
	<?php
			if( isset($_GET['category']) &&  $_GET['category'] !="")
				$category = $_GET['category'];
			else if( isset($_GET['search']) &&  $_GET['search'] !="")
				$search = $_GET['search'];
			 include('classes/displayProducts.php'); ?>
		 	 							 			    
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
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>0 - 5 €</label>
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
			<div class="clear"></div>
			</div>
		   </div>
		</div>
		<script src="js/jquery.easydropdown.js"></script>
	<?php include('partials/bottomPage.php'); ?>