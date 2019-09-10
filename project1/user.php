<?php 
	require_once("config.php");
	require_once("database.php");


	class User{

		// this function will be used by the reg form only

		public function create_user_info($name,$mobile,$username,$image_name){

			global $database;
			$sql = "INSERT INTO user (name,mobile,username,image_name) VALUES ('$name','$mobile','$username','$image_name');";
			$database->query($sql);

		}

		public function get_all_the_user(){
			global $database;
			$sql = "SELECT * FROM user";
			$result = $database->query($sql);
			return $result;
		}

		public function get_user_by_id($id){
			global $database;
			$sql = "SELECT * FROM user WHERE id='$id';";
			$result = $database->query($sql);
			return $result;
		}

		public function user_exists($username){
			global $database;
			$sql = "SELECT username FROM user WHERE username='$username';";
			$result = $database->query($sql);
			$user = $database->fetch_array($result);
			if(!$user){
				echo "NO user found";
			}
			else{
				// do something later
			}
		}
	}

	$user = new User();
	$user->get_all_the_user();
	$user->get_user_by_id(1);

?>