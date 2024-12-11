<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list Product</title>
</head>
<body>
    <h2>Danh Sách Sản Phẩm</h2>
    <a href="?act=insertproduct">Thêm sp</a>
    <table border="1">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>img</td>
                <td>description</td>
                <td>num_date</td>
                <td>price</td>
                <td>sale</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($allPro  as $row){
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><img src="../assets/images/<?= $row['images'] ?>" alt=""></td>
                    <td><?= $row['description'] ?></td>
                    <td><?= $row['num_date'] ?></td>
                    <td><?= $row['price'] ?></td>
                    <td><?= $row['sale'] ?></td>
                    <td>
                        <a href="">Sửa</a>
                        <a href="">Xóa</a>
                    </td>
                </tr>
                <?php
            } ?>
        </tbody>
    </table>
</body>
</html>