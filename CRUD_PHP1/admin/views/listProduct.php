<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list Product</title>
</head>
<body>
    <h2>Danh Sách Sản Phẩm</h2>
    <a href="?act=insertproduct"><button>Thêm Sản Phẩm</button></a>
    <table style="text-align: center; border-collapse: collapse;" border="1">
        <thead>
            <tr>
                <td>id</td>
                <td>title</td>
                <td>image</td>
                <td>author</td>
                <td>publisher</td>
                <td>publish_date</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($allpro as $row){
                    ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['title'] ?></td>
                        <td><img width="100px" src="../assets/img/<?= $row['cover_image'] ?>" alt=""></td>
                        <td><?= $row['author'] ?></td>
                        <td><?= $row['publisher'] ?></td>
                        <td><?= $row['publish_date'] ?></td>
                        <td>
                            <a href="?act=updateproduct&id=<?= $row['id'] ?>"><button>Sửa</button></a>
                            <a onclick="alert('Xác nhận xóa <?= $row['title'] ?>')" href="?act=deleteproduct&id=<?= $row['id'] ?>"><button>Xóa</button></a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>