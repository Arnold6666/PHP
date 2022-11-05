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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="form.php" method="post">
		<input type="text" placeholder="Enter Username" name="username"><br>
		<input type="password" placeholder="Enter Password" name="password"><br>
		<input type="submit" name="submit">
	</form>
	<?php
	
	?>

</body>
</html>