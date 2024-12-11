<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show product</title>
    
</head>
<body>
    <table border="1">
        <tr>
            <td>pro_id</td>
            <td>pro_name</td>
            <td>pro_img</td>
            <td>pro_price</td>
            <td>pro_detail</td>
            <td>Danh mục</td>
            <td>Sửa</td>
            <td>Xóa</td>
        </tr>
        <tbody>
            <?php 
                require_once("connect.php");
                $sql = "select * from product join categary on product.cate_id=categary.cate_id";
                $results = $connect->query($sql);
                foreach($results as $result){
            ?>
                <tr>
                    <td><?= $result["pro_id"] ?></td>
                    <td><?= $result["pro_name"] ?></td>
                    <td><img style="width: 100px; height: auto;" src="img/<?= $result["pro_img"] ?>" alt=""></td>
                    <td><?= $result["price"] ?></td>
                    <td><?= $result["detail"] ?></td>
                    <td><?= $result["cate_name"] ?></td>
                    <td><a href="update.php?pro_id=<?= $result['pro_id'] ?>">Sửa</a></td>
                    <td><a onclick="alert('bạn chắc chắn muốn xóa')" href="delete.php?pro_id=<?= $result["pro_id"] ?>">Xóa</a></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>