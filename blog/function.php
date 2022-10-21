<?php
    function showAllPosts(){
        require("pdo.php");
        $sql = "SELECT * FROM posts";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = array();
        while($row = $stmt->fetch()){
            $rows[] = $row;
        }
        return $rows;
    }

    function showPost($id){
        require("pdo.php");
        $sql = "SELECT * FROM posts WHERE id =?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row;
    }
    function storePost($request){
        require("pdo.php");
        extract($request);
        $user_id = 1;
        $category_id = 1;

        // 透過以下$k, $v 與 $q可以在未來新增一般欄位時直接加上去，不用修改以下內容
        //key
        $k = array_keys($request);
        array_push($k,"user_id","category_id","created_at","updated_at");
        $k = implode(",",$k); //implode陣列轉字串，分隔點為,
        // var_dump($k);
        // echo "<br>";

        //value
        $v = explode(",",implode(",",$request));
        array_push($v,$user_id,$category_id,$now,$now);
        // var_dump($v);

        //問號 array_map可讓陣列中的值去對應
        $q = implode(",",array_map(function(){
            return "?";
        },$v));
        // echo $q;

        // $sql = "INSERT INTO posts(title,content,user_id,category_id,created_at,updated_at)VALUES(?,?,?,?,?,?)";
        // $stmt = $pdo->prepare($sql);
        // $stmt->execute([$title,$content,$user_id,$category_id,$now,$now]);

        $sql = "INSERT INTO posts(".$k.")VALUES(".$q.")";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($v);
        echo "新增成功";
        header("location:index.php");
    }
    function deletePost($id){
        require("pdo.php");
        extract($_POST);
        $sql = "DELETE FROM posts WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        header("location:index.php");
    }
    function updatePost($request){
        require("pdo.php");
        extract($request);
        $sql="UPDATE posts SET title=?,content=?,category_id=?,updated_at=? WHERE id =?";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$title,$content,$category_id,$now]);
        header("location:index.php");
    }