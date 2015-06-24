


<?php $title = "Checkout"; include('partials/header.php'); ?>
         <div class="register_account">
           <div class="wrap">
    	     <?php
    	     if(!isset($_SESSION["order"])){
    	     	echo '<h4 class="title">Shopping cart is empty</h4>' ;
    	     	echo  '<p class="cart">You have no items in your shopping cart.<br>Click<a href="index.html"> here</a> to continue shopping</p>';
    	     }
    	     else{
    	     	$comp = 1;
    	     	$arr =$_SESSION["order"];
    	     	?>
    	     	<h4 class="title">Your shopping cart</h4>
    	     	<table class="table table-hover">
			      <thead>
			        <tr>
			          <th>#</th>
			          <th>Name product</th>
			          <th>Quantity</th>
			          <th></th>
			        </tr>
			      </thead>
			    <tbody>
			   <?php
    	     	foreach ($arr as &$value) {
   					?>
   							<tr>
					          <th scope='row'></th>
					          <td><?php echo $value['name'] ?></td>
					          <td><?php echo $value['qtt'] ?></td>
					          <td><a href=<?php echo 'single.php?id=' . $value['id'] ?>> voir fiche produit</a></td>
					        </tr> 
				<?php 		}
			
				echo   '</tbody>
					    </table>

              <a class="btn btn-default" href="destroybasket.php" role="button">Delete all the items</a>';

    	     }


    	     ?>

    	   </div>
    	</div>
  <?php include('partials/bottomPage.php'); ?>