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
                <td>Title</td>
                <td>Cover_image</td>
                <td>Author</td>
                <td>publisher</td>
                <td>publish_date</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($allPro as $rows){
                ?>
                <tr>
                    <td><?= $rows['id'] ?></td>
                    <td><?= $rows['title'] ?></td>
                    <td><img width="100px" height="auto" src="../assets/img/<?= $rows['cover_image'] ?>" alt="lỗi ảnh"></td>
                    <td><?= $rows['author'] ?></td>
                    <td><?= $rows['publisher'] ?></td>
                    <td><?= $rows['publish_date'] ?></td>
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