
<?php
	$title = "Votre profil" ;
	include('partials/headertop.php');
?>
<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript">
function doSomething() {


$('#info').slideToggle();

document.getElementById("updateFrm").style.visibility = "visible";


myVar=setTimeout(function(){$('#updateFrm').slideToggle();},800)

}
</script>


<script type="text/javascript">
function doSomethingt() {


$('#updateFrm').slideToggle();

myVar=setTimeout(function(){$('#info').slideToggle();},800)

}
</script>


<script type="text/javascript">
	jQuery(document).ready(function() {
		$('#updateFrm').slideToggle();

	});
</script>
<h1>

</h1>
</br></br>
<style type="text/css">
  #updateFrm {
    visibility: hidden;
    margin-bottom: 8%;

 }
 #info{
 	    margin-bottom: 8%;

 }
 #nothing{
 	 	    margin-bottom: 8%;

 }

  </style>


<div class="row">
	<div class="col-md-2"></div>

<div class="col-md-4" id="info">
					<h4 class="title"> <?php echo $_SESSION['user']['login'] ;?>  General Information</h4>
					
					<p> First name : <?php echo $_SESSION['user']['firstname'] ; ?></p>
					<p> Last name : <?php echo $_SESSION['user']['lastname'] ; ?> </p>
					<p> Date of birth : <?php echo $_SESSION['user']['datebirth'] ; ?></p>
					<p> Adress : <?php echo $_SESSION['user']['adress'] ; ?></p>
					<div class="clear"></div>
					

					<div class="button1">
					   <a class="btn btn-default" onclick="doSomething();" role="button">Edit the info</a>
					 </div>

				</div>

<div class="col-md-6" id="updateFrm">
	<h4 class="title">Edit your profil </h4>
	<div id="form">
<form >
	<p>New Password  <input id="password" class="form-control" type="password" name="password"> </p>
	<p>New First Name   <input id="fName" class="form-control" type="text" name="fname"></p>
	<p>New Last Name   	<input id="lName" class="form-control" type="text" name="lname"></p>
	<p>New Adress <input id="adress" class="form-control" type="text" name="adress">
	</p>
	
			<a class="btn btn-default" onclick="doSomethingt();" role="button">See the info</a>
			<input class="btn btn-default" type="submit" value="Submit" id="btn">

</form>

</div>
</div>

</div>




<div class="row">
	<div class="col-md-2"></div>
<div class="col-md-6">
				    
				    	<h4 class="title">Orders Timeline</h2>
				    	<table class="table table-hover">
			      <thead>
			        <tr>
			          <th>Category id</th>
			          <th>Name product</th>
			          <th>Price</th>
			          <th></th>
			        </tr>
			      </thead>
			      <tbody>	

<?php
	include("classes/Product.class.php");
	$product = new Product();
	$p = $product->getUserOrders($_SESSION['user']['id']);
	//var_dump($p);
	if(count($p)>0){
	for($i = 0; $i < count($p); $i++) {



		?>

	


		<tr>
		  <th scope='row'><?php $p[$i]['category']?> </th>
          <td><?php echo $p[$i]['name'] ?></td>
          <td><?php echo $p[$i]['price'] ?></td>
        </tr> 


		
<?php	}}
	else{
		echo '<h4 class="title" id="nothing">Aucunes commandes à afficher</h4>';
	}
?>

 </tbody>
</table>
</body>

<script type="text/javascript">
	
		      $(function () {

		        $('form').on('submit', function (e) {

		          e.preventDefault();

		          $.ajax({
		            type: 'post',
		            url: 'setUserParams.php',
		            data: $('form').serialize(),
		            success: function () {
		             myVar=setTimeout(function(){location.reload()},100)

		            }
		          });

		        });

		      });
		 

</script>
</div>

</div>




<?php include('partials/bottomPage.php'); ?>
</html>