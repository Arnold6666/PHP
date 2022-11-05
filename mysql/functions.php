<?php
	include("db.php");
	function showAllData(){
		global $connection;
		$query = "SELECT * FROM users";

		$result = mysqli_query($connection,$query);
		if(!$result){
			die('Query FAILED' . mysqli_error($connection));
		}

		while($row = mysqli_fetch_assoc($result)){
			$id = $row['id'];
			echo "<option value='$id'>$id</option>";
		}
	}

	function UpdateTable(){
		if(isset($_POST['submit'])){
			global $connection;
			$username = $_POST["username"];
			$password = $_POST["password"];
			$id = $_POST["id"];

			$query = "UPDATE users SET ";
			$query .="username = '$username'";
			$query .=",password = '$password' ";
			$query .="WHERE id = $id";

			$result = mysqli_query($connection, $query);
			if(!$result){
				die("QUERY FAILED" . mysqli_error($connection));
			}else{
				echo "Record Updated";
			}
		}
	}

	function CreateUser(){
		global $connection;
		$username = $_POST["username"];
		$password = $_POST["password"];

		$username = mysqli_real_escape_string($connection,$username);
		$password = mysqli_real_escape_string($connection,$password);

		$hashFromat = "$2y$10$";
		$salt = "iusesomecrazystrings22";
		$hashF_and_salt = $hashFromat . $salt;
		$password = crypt($password, $hashF_and_salt);
		
		$query = "INSERT INTO users(username,password) ";
		$query .="VALUE ('$username','$password')";

		$result = mysqli_query($connection,$query);
		if(!$result){
			die('Query FAILED' . mysqli_error($connection));
		}else{
			echo "Record create";
		}
	}
	
	function deleteRows(){
		global $connection;
		$id = $_POST["id"];

		$query = "DELETE FROM users WHERE id = $id";

		$result = mysqli_query($connection, $query);
		if(!$result){
			die("QUERY FAILED" . mysqli_error($connection));
		}else{
			echo "delete success";
		}
	}

	function readRows(){
		global $connection;
		$query = "SELECT * FROM users";

		$result = mysqli_query($connection,$query);
		if(!$result){
			die('Query FAILED' . mysqli_error($connection));
		}

		while($row = mysqli_fetch_assoc($result)){
			print_r($row);
		}
	}

