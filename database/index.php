<?php
    require_once("conn.php");
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
    // var_dump($result);

    // $row = mysqli_fetch_assoc($result);
    // var_dump($row);
    // echo $row["name"];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            table, td,th{
                border: 1px solid #333;
            }
            td,th{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <nav>
            <a href="create.php">建立學員資料</a>
        </nav>
        <table>
            <tr>
                <th>#</th>
                <th>姓名</th>
                <th>電話</th>
                <th>MAIL</th>
                <th>性別</th>
                <th>學歷</th>
                <th>興趣</th>
                <th>備註</th>
                <th>動作</th>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["name"];?></td>
                    <td><?php echo $row["phone"];?></td>
                    <td><?php echo $row["mail"];?></td>
                    <td><?php echo $row["gender"];?></td>
                    <td><?php echo $row["edu"];?></td>
                    <td><?php echo $row["interest"];?></td>
                    <td><?php echo $row["content"];?></td>
                    <td>
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row["id"]?>">
                            <input type="submit" value="刪除">
                        </form>
                        <a href="edit.php?id=<?php echo $row["id"];?>">編輯</a>
                    </td>
                </tr>
            <?php }?>
            <?php 
                // while($row = mysqli_fetch_assoc($result)){
                //     echo "<tr>";
                //     echo "<td>{$row["id"]}</td>";
                //     echo "<td>".$row["name"]."</td>";
                //     echo "<td>".$row["phone"]."</td>";
                //     echo "<td>".$row["mail"]."</td>";
                //     echo "<td>".$row["gender"]."</td>";
                //     echo "<td>".$row["edu"]."</td>";
                //     echo "<td>".$row["interest"]."</td>";
                //     echo "<td>".$row["content"]."</td>";
                //     echo "<br>";
                // }
            ?>
        </table>
    </body>
    </html>