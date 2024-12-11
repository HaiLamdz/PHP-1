<!-- lấy đueọc id của đối tượng cần sửa 
gửi bằng method GET 
đến file update.php 
tạo file update.php 
lấy id xuống bằng method GETdựa vào id lấy tất cả thông tin của đối tượng cần sửa
điền vào form
sử dụng câu lẹnh SQL về update table set thuộc tính = giá trị,
sử dụng câu lẹnh SQL về update table set where mã = gtri,
thực thi sql
-->
<?php 
    require_once("connect.php");
    if(isset($_GET["pro_id"])){
        $id_pro= $_GET["pro_id"];
        $sql="select * from product where pro_id=$id_pro";
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
    <h2>Sửa sản phẩm</h2>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $result["pro_id"] ?>" >
        <p>Tên sản phẩm</p>
        <input type="text"name="name" value="<?= $result["pro_name"] ?>" >
        <p>ảnh sản phẩm</p> <img width="100px" height="auto" src=" img/<?php echo $result["pro_img"] ?>" alt="">
        <input type="file" name="img" >
        <p>giá sản phẩm</p>
        <input type="text" name="price" value="<?= $result["price"] ?> ">
        <p>chi tiết sản phẩm</p>
        <input type="text" name="detail" value="<?= $result["detail"] ?> ">
        <p>Danh mục sản phẩm</p>
        <select name="cate" id="">
            <option value="1">phone</option>
            <option value="2">laptop</option>
            <option value="3">ipad</option>
        </select> <br>
        <input type="submit" value="Sửa snar phẩm" name="update">
    </form>
    <?php 
        if(isset($_POST["update"])){
            $id = $_POST["id"];
            $name = $_POST["name"];
            $img = $_POST["img"];
            $price = $_POST["price"];
            $detail = $_POST["detail"];
            $cate = $_POST["cate"];
            $sql_update = "update product set pro_name='$name', price=$price, detail='$detail', cate_id=$cate where pro_id=$id";

            $result_update=$connect->prepare($sql_update);
            if($result_update->execute()){
                header("location: showpro.php");
            }else{
                echo 'không thể sửa sản phẩm';
            }

        }
    ?>
</body>
</html>