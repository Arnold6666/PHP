<?php
try{
    require_once("pdo.php");
    // var_dump($_FILES["gallery"]);
    // echo "<br>";
    // echo $_FILES["gallery"]["name"];
    // echo "<br>";
    // echo $_FILES["gallery"]["type"];
    // echo "<br>";
    // echo $_FILES["gallery"]["tmp_name"];
    // echo "<br>";
    // echo $_FILES["gallery"]["error"];
    // echo "<br>";
    // echo $_FILES["gallery"]["size"];
    // echo "<br>";

    extract($_FILES["gallery"]);
    // echo $name;
    // echo "<br>";
    // echo $type;
    // echo "<br>";
    // echo $tmp_name;
    // echo "<br>";
    // echo $error;
    // echo "<br>";
    // echo $size;
    // echo "<br>";
    // switch($type){
    //     case "image/jpeg":
    //         $gallery_name = md5(uniqid()).".jpg";
    //         break;
    //     case "image/gif":
    //         $gallery_name = md5(uniqid()).".gif";
    //         break;
    //     case "image/png":
    //         $gallery_name = md5(uniqid()).".png";
    //         break;
    //     default:
    //         header("location:index.php?error=1");
    // }

    $extension = strtolower(pathinfo($name,PATHINFO_EXTENSION));

    if($extension != "jpg" && $extension != "jpeg" && $extension != "gif" && $extension != "png"){
        header("location:index.php?error=2");
        return;
    }

    $gallery_name = md5(uniqid()).".".$extension;

    // echo $extension;

    $target = "images/".$gallery_name;

    if(!is_dir("images")){
        mkdir("images");
    }

    
    
    $sql = "INSERT INTO galleries (gallery_name, name, created_at)VALUES(?,?,?)";
    // $sql = "INSERT INTO galleries (gallery_name, name, created_at)VALUES(:gallery_name, :name, :created_at)";

    $stmt = $pdo->prepare($sql);
    // $stmt->bindParam(":gallery_name",$gallery_name);
    // $stmt->bindParam(":name",$name);
    // $stmt->bindParam(":created_at",$now);
    
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo "δΈε³ζε";
            $stmt->execute([$gallery_name,$name,$now]);
            // $stmt->execute();
            header("Refresh:1;url=index2.php");
        }else{
            echo "δΈε³ε€±ζ";
        }
    }else{
        echo "δΈε³ι―θͺ€.";
    }
}catch(PDOException $e){
    echo $e->getMessage();
}

