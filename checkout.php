

<?php $title = "Checkout"; include('partials/header.php'); ?>

<?php
  if(isset($_GET["id"])){

    foreach ($_SESSION["order"] as $key => $value) {
      if ($value['id']==$_GET["id"]) {
            unset($_SESSION["order"][$key]);
# code...
      }
      # code...
    }
  }
  
  
?>
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
    	     	foreach ($arr as $key => $value) {
   					?>
   							<tr>
					          <th scope='row'><a class="btn btn-default" href=<?php echo 'checkout.php?id=' . $value['id'] ?> role="button">Destroy item</a></th>
					          <td><?php echo $value['name'] ?></td>
					          <td><?php echo $value['qtt'] ?></td>
					          <td><a href=<?php echo 'single.php?id=' .  $value['id'] ?>> voir fiche produit</a></td>
					        </tr> 
				<?php 		}
           ?>
			
				      </tbody>
					    </table>

              <a class="btn btn-default" onclick="destroyb();" role="button">Delete all the items</a>

    	     <?php     }
           ?>



    	   </div>
    	</div>


<script type="text/javascript">
function destroyb() {
    $.get("destroybasket.php");
  myVar=setTimeout(function(){location.reload()},100);

    return false;
}

</script>


  <?php include('partials/bottomPage.php'); ?>