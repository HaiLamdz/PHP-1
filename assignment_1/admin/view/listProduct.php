<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table td {
            width: 14%;
            /* Đặt chiều rộng cố định cho mỗi cột */
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
            text-align: center;
        }
        h1{
            background: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);
            background-clip: text;
            display: inline;
            color: transparent;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php require_once 'view/compoment/navbar.php' ?>
    <h1>Quản Trị Sản Phẩm</h1>
    <p class="warrper"><a href="?act=insertproduct"><button>Thêm Sản Phẩm</button></a></p>
    <h3 align="center">Đồ Nữ</h3>
    <table class="warrper_product" cellspacing='0' border="1px" style="width: 100%;">
        <tr>
            <td>Mã Sp</td>
            <td>Ảnh Sản Phẩm</td>
            <td>tên Sản Phẩm</td>
            <td>Giá Sản Phẩm</td>
            <td>Mô Tả</td>
            <td>Loại Sản Phẩm</td>
            <td>Action</td>
        </tr>
        <?php
        foreach ($product_older as $key => $rows) {
        ?>
            <tr>
                <td><?= $rows['pro_id'] ?></td>
                <td>
                    <img width="100px" height="auto" src="../assets/img/<?= $rows['pro_img'] ?>" alt="">
                </td>
                <td><?= $rows['pro_name'] ?></td>
                <td><?= $rows['pro_price'] ?></td>
                <td><?= $rows['pro_detail'] ?></td>
                <td><?= $rows['cate_name'] ?></td>
                <td>
                    <a href="?act=updateproduct&id=<?= $rows['pro_id'] ?>">Sửa</a>
                    <a onclick="alert('bạn có chắc chắn muốn xóa không??')" href="?act=deleteproduct&id=<?= $rows["pro_id"];  ?>">Xóa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <h3 align="center">Đồ Nam</h3>
    <table class="warrper_product" cellspacing='0' border="1px" style="width: 100%;">
        <tr>
            <td>Mã Sp</td>
            <td>Ảnh Sản Phẩm</td>
            <td>tên Sản Phẩm</td>
            <td>Giá Sản Phẩm</td>
            <td>Mô Tả</td>
            <td>Loại Sản Phẩm</td>
            <td>Action</td>
        </tr>
        <?php
        foreach ($product_man as $key => $rows) {
        ?>
            <tr>
                <td><?= $rows['man_id'] ?></td>
                <td>
                    <img width="100px" height="auto" src="../assets/img_nam/<?= $rows['man_img'] ?>" alt="">
                </td>
                <td><?= $rows['man_name'] ?></td>
                <td><?= $rows['man_price'] ?></td>
                <td><?= $rows['man_detail'] ?></td>
                <td><?= $rows['cate_name'] ?></td>
                <td>
                    <a href="?act=updateproduct&id=<?= $rows['man_id'] ?>">Sửa</a>
                    <a onclick="alert('bạn có chắc chắn muốn xóa không??')" href="?act=deleteproduct&id=<?= $rows["man_id"];  ?>">Xóa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>    
    <h3 align="center">Đồ Trẻ Em</h3>
    <table class="warrper_product" cellspacing='0' border="1px" style="width: 100%;">
        <tr>
            <td>Mã Sp</td>
            <td>Ảnh Sản Phẩm</td>
            <td>tên Sản Phẩm</td>
            <td>Giá Sản Phẩm</td>
            <td>Mô Tả</td>
            <td>Loại Sản Phẩm</td>
            <td>Action</td>
        </tr>
        <?php
        foreach ($product_children as $key => $rows) {
        ?>
            <tr>
                <td><?= $rows['children_id'] ?></td>
                <td>
                    <img width="100px" height="auto" src="../assets/img_nhi/<?= $rows['children_img'] ?>" alt="">
                </td>
                <td><?= $rows['children_name'] ?></td>
                <td><?= $rows['children_price'] ?></td>
                <td><?= $rows['children_detail'] ?></td>
                <td><?= $rows['cate_name'] ?></td>
                <td>
                    <a href="?act=updateproduct&id=<?= $rows['children_id'] ?>">Sửa</a>
                    <a onclick="alert('bạn có chắc chắn muốn xóa không??')" href="?act=deleteproduct&id=<?= $rows["children_id"];  ?>">Xóa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
   
</body>

</html>