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
        <h2>Thêm mới Danh Mục</h2>
        <form action="" method="POST" enctype="multipart/form-data" class="insert">
            <p>Tên Danh Mục</p><input type="text" name="name">
            <input type="submit" value="Thêm Sản Phẩm" name="insert" class="btn">
        </form>
</body>
</html>