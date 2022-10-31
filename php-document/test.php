<!DOCTYPE HTML> 
<html>
<body>
<?php
$name = $email = $website = $comment = $gender ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = input_test($_POST["name"]);
	$email = input_test($_POST["email"]);
	$website = input_test($_POST["website"]);
	$comment = input_test($_POST["comment"]);
	$gender = input_test($_POST["gender"]);
}

function input_test($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<h1>PHP Form Validation Example</h1>
<p style="color:red">* required filed</p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Name: <input type="text" name="name" value="<?php echo $name;?>"><span style="color:red">*</span> <br>
	<br>
	E-mail: <input type="text" name="email" value="<?php echo $email;?>"><span style="color:red">*</span> <br>
	<br>
	Website: <input type="text" name="website" value="<?php echo $website;?>"> <br>
	<br>
	Comment: <textarea name="comment" id="" cols="30" rows="10"><?php echo $comment;?></textarea> <br>
	<br>
	Gender: <input type="radio" name="gender" value="Female" <?php if(isset($gender) && $gender == "Female") echo "checked" ;?>>Female
			<input type="radio" name="gender" value="Male"  <?php if(isset($gender) && $gender == "Male") echo "checked" ;?>>Male
			<input type="radio" name="gender" value="other"  <?php if(isset($gender) && $gender == "other") echo "checked" ;?>>other <span style="color:red">*</span>
	<br>
	<br>
	<input type="submit" name="submit" value="submit">

	<?php
	echo "<h2>Your Input:</h2>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $website;
	echo "<br>";
	echo $comment;
	echo "<br>";
	echo $gender;
	?>
</form>
</body>
</html>