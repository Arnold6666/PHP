<?php
    include("function.php");
    $posts = showAllPosts();
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
    <nav>
        <a href="post_create.php">新增文章</a>
        <a href="category_create.php">新增分類</a>
        <a href="user_create.php">會員註冊</a>
        <a href="user_login.php">登入</a>
        <a href="logout.php">登出</a>
    </nav>
    
    <div>
        <?php foreach($posts as $post){?>
            <div>
                <h2><?php echo $post["title"];?></h2>
                <div>
                    文章分類:<?php echo $post["c_title"];?>
                </div>
                <div>
                    <?php echo $post["content"];?>
                </div>
                <div>
            
                    <a href="post_show.php?id=<?php echo $post["id"];?>">繼續閱讀</a> 
                </div>
                <div>
                    建立時間<?php echo $post["created_at"];?>
                </div>
            </div>
        <?php }?>
    </div>
</body>
</html>