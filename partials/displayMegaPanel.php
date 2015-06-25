<?php 
require_once("classes/Product.class.php");
$productObject = new Product();
$products = $productObject->getByCategoryName($category); 
 ?>

<li><a class="color5" href=<?php echo "products.php?category=" . $category ?>><?php echo $category ?></a>
<div class="megapanel">
	<div class="col1">
			<div class="h_nav">
				<h4><?php echo $category ?></h4>
				<ul>
					<?php for ($i=0; $i < count($products); $i++) { ?>
						<li><a href=<?php echo "products.php?id=" . $products[0]['id'] ?>><?php echo $products[$i]['name'] ?></a></li>
					<?php } ?>
				</ul>	
			</div>												
		</div>
	</div>
</li>