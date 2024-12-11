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
        <h2>Sửa sản phẩm</h2>
        <form action="" method="POST" enctype="multipart/form-data" class="insert">
            <input type="hidden" name="id" value="<?= $oneProduct['pro_id'] ?>">
            <p>Ảnh sản phẩm</p>
            <img src="../assets/img/<?= $oneProduct['pro_img'] ?>" alt="">
            <img src="../assets/img_nhi/<?= $oneProduct['pro_img'] ?>" alt="">
            <img src="../assets/img_phone/<?= $oneProduct['pro_img'] ?>" alt="">
            <input type="file" name="img">
            <p>Tên sản phẩm</p><input type="text" name="name" value="<?= $oneProduct['pro_name'] ?>">
            <p>Giá sản phẩm</p><input type="text" name="price" value="<?= $oneProduct['pro_price'] ?>">
            <p>Mô Tả sản phẩm</p><input type="text" name="detail" value="<?= $oneProduct['pro_detail'] ?>">
            <p>Danh Mục Sản Phẩm</p>
            <select name="cate" id="">
                <?php foreach ($all_cate as $row) {
                    if ($row["cate_id"] == $oneProduct['cate_id']) {
                        echo '<option value="' . $row["cate_id"] . '" selected>' . $row["cate_name"] . '</option>';
                    } else {
                        echo '<option value="' . $row["cate_id"] . '">' . $row["cate_name"] . '</option>';
                    }
                } ?>
            </select>
            <br>
            <input type="submit" value="Sửa Sản Phẩm" name="update" class="btn">
        </form>
    </div>
</body>

</html>