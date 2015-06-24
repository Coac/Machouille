<?php 
require_once("classes/Product.class.php"); 

$nbProductToDisplay = 10;

$productObject = new Product();
$products = $productObject->getAll();
?>
<div class="top-box">
<?php
for ($i=0; $i < $nbProductToDisplay && $i<count($products); $i++) {   
	if($i%3 ==0) {
?>
		<div class="clear"></div>
		</div>
				
		<div class="top-box">

<?php 
	}
?>

 <div class="col_1_of_3 span_1_of_3"> 
   <a href=<?php echo 'single.php?id=' . $products[$i]['id'] ?>>
	<div class="inner_content clearfix">
		<div class="product_image">
			<img src="images/bb3.jpg" alt=""/>
		</div>
        <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
        <div class="price">
		   <div class="cart-left">
				<p class="title"><?php echo $products[$i]['name'] ?></p>
				<div class="price1">
				  <span class="actual">$<?php echo $products[$i]['price'] ?></span>
				</div>
			</div>
			<div class="cart-right"> </div>
			<div class="clear"></div>
		 </div>				
       </div>
     </a>
	</div>


<?php
}
?>
<div class="clear"></div>
</div>

