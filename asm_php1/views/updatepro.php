<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once 'views/components/header.php'; ?>
    <div class="wrapper">
        <h2>Sửa Sản Phẩm</h2>
        <form action="" class="insert" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$productOne['pro_id']?>">
            <p>Ảnh Sản Phẩm</p><input type="text" name="img" value="<?= $productOne['pro_img'] ?>">
            <p>Tên Sản Phẩm</p><input type="text" name="name" value="<?= $productOne['name'] ?>" >
            <p>Giá Sản Phẩm</p><input type="text" name="price" value="<?= $productOne['pro_price'] ?>">
        </form>
    </div>
</body>
</html>