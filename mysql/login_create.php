<?php
	include("db.php");
	include("functions.php");

	if(isset($_POST["submit"])){
		CreateUser();
	}
	include("include/header.php");
?>

	<div class="container" style="padding: 100px;">
		<div class="col-sm-6">
			<H1 class="text-center">Create</H1>
			<form action="login_create.php" method="post">
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
<?php include("include/footer.php");?>