<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once 'view/compoment/navbar.php' ?>
<h2 align="center">Quản Trị Danh Mục</h2>
    <div>
        <a href="?act=insertCategory">Thêm sản Phẩm</a>
        <table border="1" style="text-align: center;">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Tên Danh Mục</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($all_cate as $row){
                    ?>
                    <tr>
                        <td><?= $row["cate_id"] ?></td>
                        <td><?= $row["cate_name"] ?></td>
                        <td>
                            <a href="?act=updateCategory&id=<?= $row['cate_id'] ?>">Sửa </a>
                            <a onclick="alert('bạn có chắc chắn muốn xóa không??')" href="?act=deletecategory&id=<?= $row["cate_id"];  ?> ">Xóa</a>
                        </td>
                    </tr>
                    <?php
                } ?>
            </tbody>
        </table>
    </div>
</body>
</html>