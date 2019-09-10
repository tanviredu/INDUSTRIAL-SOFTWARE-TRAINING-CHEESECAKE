<?php 
	require_once("config.php");
	require_once("database.php");
	require_once("user.php");
	require_once("store.php");
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>

		<h1>Welcome User (provid login info) and session for user</h1>
		
		<table>
			<thead>
				<tr>
					<th> Product Name</th>
					<th> Product quantity</th>
					<th> Product price</th>
					<th> Add to cart</th>

				</tr>

			</thead>

			<tbody>


<?php 
	$products = $store->get_all_the_product();	

	foreach ($products as $product) {
		
	
?>
					<tr>
						<td> <?php echo $product['product_name']; ?></td>
						<td> <?php echo $product['quantity']; ?></td>
						<td> <?php echo $product['price']; ?></td>
						<td> <a href="products.php?id=<?php echo $product['id']?>"><button>Add To cart +</button></a></td>

					
					</tr>				
				<?php }?>
			</tbody>
			</table>

			<h1>YOUR CART</h1>



<!-------------------------------------------------------------------------- >
	 <!---------------THis code have to change------------------------------->


<table>
		<thead>
				<tr>
					<th> Product Name</th>

				</tr>

		</thead>

		<tbody>


				<tr>
	

<?php 
	//this part will process the data to add with the cart
	// echo $_GET['username'];
	$_SESSION['id']=[];
	if(isset($_GET['id'])){
	$item =  $_GET['id'];
	// make the query here
	$item_name = $store->get_product_name($item);
	// adding to the session
	$_SESSION['item_name'][] = $item_name;

	// printing the value
	 foreach($_SESSION['item_name'] as $item){
	 	echo "<td>";
	 	echo $item;
	 	echo "</td>";
	 	echo "</tr>";
	 }


	//print_r($_SESSION['item']);
}
else{
	$_SESSION['item'] = [];
}
?>

</tbody>
<form method="POST" ><input type="submit" name="submit" value="CLEAR CART"></form>
<?php 
	if(isset($_POST['submit'])){
		//$_SESSION['id']=[];
		session_destroy();
			
	}
?>


	</center>
</body>
</html>