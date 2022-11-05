<?php
	if(isset($_POST["submit"])){
		$username = $_POST["username"];
		$password = $_POST["password"];

		$connection = mysqli_connect('localhost','admin','admin','loginapp');
		if($connection){
			echo "we are connected";
		}else{
			die("Database connect die");
		}
		
		// if($username && $password){
		// 	echo $username . "<br>";
		// 	echo $password;
		// }else{
		// 	echo "this field can not be blank";
		// }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="padding: 100px;">
		<div class="col-sm-6">
			<form action="login.php" method="post">
				<div class="mb-3">
					<label for="username" >Username</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="mb-3">
					<label for="passowrd" >Passowrd</label>
					<input type="password" class="form-control" name="password">
				</div>
				<input type="submit" value="Submit" class="btn btn-primary" name="submit">
			</form>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>