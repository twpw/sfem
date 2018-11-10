<?php 
	class Employee{
		public $connect;
		private $host = "localhost";
		private $userName = "root";
		private $userPass = "password";
		private $BDName   = "monitor"; 

		public function __construct(){
			$this->BDConnect();
		}

		public function BDConnect(){
			$this->connect = mysqli_connect($this->host,$this->userName,$this->userPass,$this->BDName);
		}
		public function query_execute($sql){
			return mysqli_query($this->connect,$sql);
		}
		public function upload($file){
		$extention = 	explode('.', $file['name']);
		$newName = 	rand().'.'.$extention[1];
		$destination = './upload/'.$newName;
		move_uploaded_file($file['tmp_name'], $destination);
		return $newName;
		}

	}

?>sssssssssssssssssssssssssssssssssssss