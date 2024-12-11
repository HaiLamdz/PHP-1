<?php 
    require_once("connect.php");
    if(isset($_GET["news_id"])){
        $id = $_GET["news_id"];
        $sql="select * from tintuc where news_id=$id";
        $result=$connect->query($sql)->fetch();
        var_dump($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sửa Sản PHẩm</h2>
    <form action="" method="POST"  enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $result["news_id"] ?>" >
        <p>title</p>
        <input type="text"name="title" value="<?= $result["title"] ?>" >
        <p>image</p> <img width="100px" height="auto" src=" img/<?php echo $result["image"] ?>" alt="">
        <input type="file" name="img" >
        <p>intro</p>
        <input type="text" name="intro" value="<?= $result["intro"] ?> ">
        <p>detail</p>
        <input type="text" name="detail" value="<?= $result["detail"] ?> ">
        <p>view</p>
        <input type="text" name="view" value="<?= $result["view"] ?> ">
        <p>status</p>
        <input type="text" name="status" value="<?= $result["status"] ?> ">
        <p>Danh mục</p>
        <select name="cate" id="">
            <option value="1">kinh tế</option>
            <option value="2">xã hội</option>
        </select> <br>
        <input type="submit" value="Sửa snar phẩm" name="sua">
    </form>
    <?php 
        if(isset($_POST["sua"])){
            $id2 = $_POST["id"];
            $name = $_POST["title"];
            $img = isset($_FILES["img"]["name"]) ? $_FILES["img"]["name"] : "";
            $price = $_POST["intro"];
            $detail = $_POST["detail"];
            $cate1 = $_POST["view"];
            $cate2 = $_POST["status"];
            $sql_update = "update tintuc set title='$name', intro='$price', detail='$detail', view=$cate1, status='$cate2' where news_id=$id2";

            $result_update=$connect->prepare($sql_update);
            if($result_update->execute()){
                header("location: index.php");
            }else{
                echo 'không thể sửa sản phẩm';
            }

        }
    ?>
</body>
</html>