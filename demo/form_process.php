<?php
	if(isset($_POST['submit'])){

		$name = array("Edwin", "Student", "Peter", "Samid");
		$minimum = 5;
		$maximum = 10;
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(strlen($username) < $minimum){
			echo "Username has to be longer than five";
		}
		if(strlen($username) > $maximum){
			echo "Username has to be less than ten";
		}
		if(in_array($username,$name)){
			echo "Sorrr u are not allowed";
		}else{
			echo "u r welcome";
		}

	}
?>