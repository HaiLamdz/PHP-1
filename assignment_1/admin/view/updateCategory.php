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
        <h2>Sửa sản phẩm</h2>
        <form action="" method="POST" enctype="multipart/form-data" class="insert">
            <input type="hidden" name="id" value="<?= $motProduct['cate_id'] ?>">
            <p>Tên sản phẩm</p><input type="text" name="name" value="<?= $motProduct['cate_name'] ?>">
            <br>
            <input type="submit" value="Sửa Sản Phẩm" name="update" class="btn">
        </form>
    </div>
</body>
</html>