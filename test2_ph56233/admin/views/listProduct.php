<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list Product</title>
</head>
<body>
    <a href="?act=insertproduct"><button>Thêm sản phẩm</button></a>
    <table border="1">
        <thead>
            <tr>
                <td>Mã Sản Phẩm</td>
                <td>name</td>
                <td>thumbnail</td>
                <td>instructor</td>
                <td>duration</td>
                <td>price</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($allPro as $rows){
                ?>
                <tr>
                    <td><?= $rows['id'] ?></td>
                    <td><?= $rows['name'] ?></td>
                    <td><img width="100px" height="auto" src="../assets/img/<?= $rows['thumbnail'] ?>" alt="lỗi ảnh"></td>
                    <td><?= $rows['instructor'] ?></td>
                    <td><?= $rows['duration'] ?> buổi</td>
                    <td><?= number_format( $rows['price']) ?></td>
                    <td>
                        <a href="?act=updateproduct&id=<?= $rows['id']?>"><button>Sửa</button></a>
                        <a onclick="alert('Ban chac muon xoa san pham nay chu??')" href="?act=deleteproduct&id=<?= $rows['id']?>"><button>Xóa</button></a>
                    </td>
                </tr>
                <?php
            } ?>
        </tbody>
    </table>
</body>
</html>