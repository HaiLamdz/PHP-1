<?php 
    require_once '../connect/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thêm sản phẩm</title>
</head>
<body>
    <h2>Thêm Tác Phẩm</h2>
    <form action="" method="POST">
        <label for="">title</label>
        <input type="text" name="title">
        <br>
        <br>
        <label for="">author</label>
        <input type="text" name="author">
        <br>
        <br>
        <label for="">year</label>
        <input type="text" name="year">
        <br>
        <br>
        <label for="">genre</label>
        <input type="text" name="genre">
        <br>
        <br>
        <button name="them">Thêm Sản Phẩm</button>
    </form>
    <?php
        if(isset($_POST["them"])){
            $title = $_POST["title"];
            $author = $_POST["author"];
            $year = $_POST["year"];
            $genre = $_POST["genre"];
            $sql = "insert into books value (null, '$title', '$author', '$year', '$genre')";
            $result = $connect->prepare($sql);
            if($result->execute()){
                header("location: ../index.php");
            }else{
                echo "<script> alert'Không Thêm Được Sản Phẩm' </script>";
            }
        }else{
            echo "<script> alert'Không Thêm Được Sản Phẩm' </script>";
        }
    ?>
</body>
</html>