<?php
	include("function.php");
	$cates = showAllCateogries();
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
	<a href="index.php">回到首頁</a>
	<form action="category_store.php" method="post">
		<div>
			<label for="">分類標題</label>
			<input type="text" name="title">
		</div>
		<div>
			<label for="">分類英文標題</label>
			<input type="text" name="slug">
		</div>
		<input type="submit" value="送出">
	</form>
	<?php foreach($cates as $cate){?>
		<li>
			<?php echo $cate["title"];?>
			<form action="category_delete.php" method="post">
				<input type="hidden" name="id" value="<?php echo $cate["id"];?>">
				<input type="submit" value="刪除分類" onclick="return confirm('確認刪除?')">
			</form>
		</li>
	<?php }?>	
</body>
</html>