<?php
	include("db.php");
	include("functions.php");

	if(isset($_POST["submit"])){
		deleteRows();
	}
?>
<?php include("include/header.php");?>
	<div class="container" style="padding: 100px;">
		<div class="col-sm-6">
			<form action="login_delete.php" method="post">
				<h1 class="text-center">DELETE</h1>
				<div class="mb-3">
					<label for="username" >Username</label>
					<input type="text" class="form-control" name="username">
				</div>
				<div class="mb-3">
					<label for="passowrd" >Passowrd</label>
					<input type="password" class="form-control" name="password">
				</div>
				<div class="mb-3">
					<select name="id" id="">
						<?php showAllData();?>
					</select>
				</div>
				<input type="submit" value="DELETE" class="btn btn-primary" name="submit">
			</form>
		</div>
	</div>
<?php include("include/footer.php");?>