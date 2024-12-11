<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'view/compoment/navbar.php' ?>
    <div class="wrapper">
        <h2>Thêm mới sản phẩm</h2>
        <form action="" method="POST" enctype="multipart/form-data" class="insert">
            <p>Ảnh sản phẩm</p><input type="file" name="img">
            <p>Tên sản phẩm</p><input type="text" name="name">
            <p>Giá sản phẩm</p><input type="text" name="price">
            <p>Mô Tả sản phẩm</p><input type="text" name="detail">
            <p>Danh Mục Sản Phẩm</p>
            <select name="cate" id="">
                <?php foreach($all_cate as $row){
                    ?>
                    <option value="<?= $row["cate_id"] ?>"><?= $row["cate_name"] ?></option>
                    <?php 
                } ?>
            </select>
            <br>
            <input type="submit" value="Thêm Sản Phẩm" name="insert" class="btn">
        </form>
    </div>
</body>
</html>