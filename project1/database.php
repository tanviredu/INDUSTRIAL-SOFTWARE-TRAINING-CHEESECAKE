<?php 
	
	// import the settings
	require_once("config.php");


	class MySQLDatabase{

		private $connection;


		function __construct(){

			$this->connection();
		}

		public function connection(){
			$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
		}

		public function close_connection(){

			if(isset($this->connection)){
				mysqli_close($this->connection);
				unset($this->connection);
			}
		}


		public function confirm_query($result){
			if(!$result){
				echo "There is a probelm fetching the data";
			}
		}

		public function query($sql){
			// create a connection first
			$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
			$result = mysqli_query($this->connection,$sql);
			$this->confirm_query($result);
			return $result;


		}

		// this function have to call with a loop
		public function fetch_array($result_set){
			return mysqli_fetch_array($result_set);
		}

		// thats a testing function
		public function get_all_info($result_set){
			$result_set = self::fetch_array($result_set);
			foreach ($result_set as $result) {
				echo "</br>";
				echo $result;

			}
		}
	}


	$database = new MySQLDatabase();
	
?>