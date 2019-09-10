<?php 
	require_once("config.php");
	require_once("database.php");
	require_once("user.php");


	class store{

		// this function will be used by the reg form only

		public function create_product($product_name,$quantity,$price,$image_name){

			global $database;
			$sql = "INSERT INTO store (product_name,quantity,price,image_name) VALUES ('$product_name','$quantity','$price','$image_name');";
			$database->query($sql);

		}

		public function get_all_the_product(){
			global $database;
			$sql = "SELECT * FROM store";
			$result = $database->query($sql);
			return $result;
		}

		public function get_product_by_id($id){
			global $database;
			$sql = "SELECT * FROM store WHERE id='$id';";
			$result = $database->query($sql);
			return $result;
		}

		public function product_exists($username){
			global $database;
			$sql = "SELECT product_name FROM store WHERE product_name='$product_name';";
			$result = $database->query($sql);
			$product = $database->fetch_array($result);
			if(!$product){
				echo "NO product found";
			}
			else{
				// do something later
			}
		}

		public	function get_product_name($id){
			global $database;
			$result = self::get_product_by_id($id);
			$result_set = mysqli_fetch_array($result);
			return $result_set['product_name'];
		}


//	public	function get_product_price($id){
//			global $database;
//			$result = self::get_product_by_id($id);
//			$result_set = mysqli_fetch_array($result);
//			return $result_set['price'];
//		}


	





	}

	$store = new store();
	



?>