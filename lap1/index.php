<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="them.php">Thêm sản phẩm</a>
    <div class="container">
        <table border="1">
             <thead>
                <tr>
                    <td>id</td>
                    <td>title</td>
                    <td>image</td>
                    <td>intro</td>
                    <td>detail</td>
                    <td>view</td>
                    <td>status</td>
                    <td>cate_id</td>
                    <td>sửa</td>
                    <td>xóa</td>
                </tr>
             </thead>
             <tbody>
                <?php
                    require_once("connect.php");
                    $sql = "select * from danhmuc join tintuc on tintuc.cate_id=danhmuc.cate_id";
                    $results = $connect->query($sql);
                    foreach($results as $result){
                ?>
                <tr>
                    <td><?= $result["news_id"] ?></td>
                    <td><?= $result["title"] ?></td>
                    <td><?= $result["image"] ?></td>
                    <td><?= $result["intro"] ?></td>
                    <td><?= $result["detail"] ?></td>
                    <td><?= $result["view"] ?></td>
                    <td><?= $result["status"] ?></td>
                    <td><?= $result["cate_name"] ?></td>
                    <td><a href="sua.php?news_id=<?php echo $result["news_id"] ?>">Sửa</a></td>
                    <td><a onclick="alert('bạn chắc chắn muốn xóa')" href="xoa.php?news_id=<?php echo $result["news_id"] ?>">Xóa</a></td>
                </tr>
                <?php } ?>
             </tbody>
        </table>
    </div>
</body>
</html>