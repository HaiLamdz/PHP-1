<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="assets/detail.css">
</head>
<body>
    <?php require_once 'views/components/header.php'; ?>
    <h3 class="warper">
        Chi Tiết Sản Phẩm 
    </h3>
    <div class="pro_warper">
        <div class="pro_item">
            <img src="assets/img/<?=$productOne['pro_img']?>" alt="" class="pro_item_img">
        </div>
        <div class="pro_item">
            <h2 class="pro_name"><?= $productOne['pro_name'] ?></h2>
            <del class="price"><?= number_format($productOne['pro_price'] ) ?>đ</del>
            <p class="sale"><?= number_format($productOne['pro_price']-($productOne['pro_price']*20)/100)  ?>đ</p>
        </div>
    </div>
    <div class="pro_detail">
        <?= $productOne['pro_detail'] ?>
    </div>
    <?php require_once 'views/components/footter.php' ?>
</body>
</html>