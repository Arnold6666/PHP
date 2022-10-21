<?php
    require_once("pdo.php");
    $sql = "SELECT * FROM galleries";
    $stmt = $pdo->prepare($sql); //statement預備陳述式 可以保護sql
    $stmt->execute(); //mysqli_query;
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // PDO::FETCH_ASSOC
        // PDO::FETCH_NUM
        // PDO::FETCH_BOTH
        // var_dump($row);
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
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="gallery">
        <input type="submit" value="上傳">
    </form>
    <div>
        <?php 
            $galleries = glob("images/*");
            var_dump($galleries);
            foreach($galleries as $g){
        ?>
            <div>
                <a href="<?php echo $g;?>" target="_blank"><?php echo $g;?></a>
                <form action="delete.php" method="post">
                    <input type="hidden" name="g" value="<?php echo $g;?>">
                    <input type="submit" value="刪除" onclick="return confirm('確認刪除?')">
                </form>
                <!-- <img src="<?php echo $g;?>" alt="" width="200"> -->
            </div>
            
        <?php } ?>
    </div>
</body>
</html>