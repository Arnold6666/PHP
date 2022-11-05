<?php 
	include("db.php");
	include("functions.php");

	UpdateTable();
	include("include/header.php");
?>


	<div class="container" style="padding: 100px;">
		<div class="col-sm-6">
			<h1 class="text-center">UPDATE</h1>
			<form action="login_update.php" method="post">
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
						<?php
							showAllData();
						?>
					</select>
				</div>
				<input type="submit" value="UPDATE" class="btn btn-primary" name="submit">
			</form>
		</div>
	</div>
<?php include("include/footer.php");?>