
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trang Chủ</title>
    <link rel="stylesheet" href="assets/demo.css">
</head>
<body>
    <?php require_once 'views/components/header.php'; ?>
    <div class="container">
        <h1 class="wraper">Show sản Phẩm</h1>
        
        <div class="hr-with-text">
        <hr>
        <span class="span_iphone">Đồ Nam</span>
        <hr>
    </div>
    <div class="product_warper">
            <?php
            foreach ($product_man as $key => $row) {
            ?>
                <div class="pro_items">
                    <img src="assets/img_nam/<?= $row['man_img'] ?>" alt="">
                    <h3 class="pro_name"><a href="?act=detailpro&id=<?= $row['man_id'] ?>"><?= $row['man_name'] ?></a></h3>
                    <p class="price"><?= number_format($row['man_price'] ) ?>đ</p>
                </div>
            <?php } ?>
            
        </div>
        <div class="xemthem">
            <h2>Xem Thêm</h2>
        </div>
        <div class="hr-with-text">
        <hr>
        <span class="span_iphone">Đồ Nữ</span>
        <hr>
    </div>
        <div class="product_warper">
            <?php
            foreach ($product_older as $key => $row) {
            ?>
                <div class="pro_items">
                    <img src="assets/img/<?= $row['pro_img'] ?>" alt="">
                    <h3 class="pro_name"><a href="?act=detailpro&id=<?= $row['pro_id'] ?>"><?= $row['pro_name'] ?></a></h3>
                    <p class="price"><?= number_format($row['pro_price'] ) ?>đ</p>
                </div>
            <?php } ?>
            
        </div>
        <div class="xemthem">
            <h2>Xem Thêm</h2>
        </div>
        
        <div class="hr-with-text">
        <hr>
        <span class="span_iphone">Đồ trẻ em</span>
        <hr>
    </div>
        <div class="product_warper">
            <?php
            if (isset($product_children) && !empty($product_children)) {
                foreach ($product_children as $rows) {
            ?>
                    <div class="pro_items">
                        <img src="assets/img_nhi/<?= htmlspecialchars($rows['children_img']) ?>" alt="">
                        <h3 class="pro_name"><a href="?act=detailpro&id=<?= htmlspecialchars($rows['children_id']) ?>"><?= htmlspecialchars($rows['children_name']) ?></a></h3>
                        <p class="price"><?= number_format($rows['children_price']) ?>đ</p>
                    </div>
            <?php
                }
            } else {
                echo "<p>No children products found.</p>";
            }
            ?>
        </div>
    </div>
    <?php require_once 'views/components/footter.php' ?>
</body>

</html>