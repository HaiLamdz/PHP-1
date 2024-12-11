<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/navbar.css">
</head>

<body>
    <div class="warrper">
        <div class="atricle">
            <div class="container">
                <img src="http://asc-public.oss-ap-southeast-1.aliyuncs.com/lsa-logo-658424540-3A0787DD-A860-4716-A882-36E0A9AF67EB.png"
                    alt="">
                <div class="search">
                    <input type="text" placeholder="   Tìm Kiếm"><i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="location">
                    <i class="fa-solid fa-location-dot"></i>Hà Nội
                </div>
                <div class="number_phone">
                    <i class="fa-solid fa-phone-volume"></i>0966701154
                </div>
                <p class="free">FREE</p>
                <div class="flash_phone">
                    Đặt Hàng Gọi <i class="fa-solid fa-phone-volume"></i>0123456789
                </div>
            </div>
            <div class="navbar">
                <ul>
                    <li>Nam</li>
                    <li>Nữ</li>
                    <li>Trẻ Em</li>
                    <li>Bộ Sưu Tập</li>
                    <li>Đồng Phục</li>
                    <li>
                        <div class="gio_hang">
                            <i class="fa-solid fa-cart-shopping"></i>Giỏ Hàng
                        </div>
                    </li>
                </ul>

                <div class="account">
                    <i class="fa-solid fa-user"></i>
                    <a href="">Đăng Ký</a>
                    <a href="">Đăng Nhập</a>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="imgstyle">
            <img src="https://bizweb.dktcdn.net/100/438/408/themes/950002/assets/slider_4.jpg?1717667908828" alt="">
        </div>
        <div class="imgstyle">
            <img src="https://bizweb.dktcdn.net/100/438/408/themes/950002/assets/slider_1.jpg?1717667908828" alt="">
        </div>
        <div class="next">
            <button onclick="chuyenanh(-1)"><i class="fa-solid fa-chevron-left"></i></button>
            <button onclick="chuyenanh(1)"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        <button hidden onclick="auto()">tự động</button>
    </div>
    <div class="logo">
        <img src="../assets/img/banner.png" alt="">
    </div>
    <div class="product">
        <div class="product_item">
            <img src="https://bizweb.dktcdn.net/100/438/408/themes/950002/assets/home_danhmuc_1_child_3_image.png?1717667908828"
                alt="">
            <p>Áo PoLo</p>
        </div>
        <div class="product_item">
            <img src="https://bizweb.dktcdn.net/100/438/408/themes/950002/assets/home_danhmuc_1_child_6_image.png?1717667908828"
                alt="">
            <p>Chân Váy</p>
        </div>
        <div class="product_item">
            <img src="https://bizweb.dktcdn.net/100/438/408/themes/950002/assets/home_danhmuc_1_child_9_image.png?1717667908828"
                alt="">
            <p>Áo Sơ Mi</p>
        </div>
        <div class="product_item">
            <img src="https://bizweb.dktcdn.net/100/438/408/themes/950002/assets/home_danhmuc_1_child_11_image.png?1717667908828"
                alt="">
            <p>Quần Short</p>
        </div>
        <div class="product_item">
            <img src="https://bizweb.dktcdn.net/100/438/408/themes/950002/assets/home_danhmuc_1_child_7_image.png?1717667908828"
                alt="">
            <p>Quần Âu</p>
        </div>
        <div class="product_item">
            <img src="https://bizweb.dktcdn.net/100/438/408/themes/950002/assets/home_danhmuc_1_child_1_image.png?1717667908828"
                alt="">
            <p>Áo Khoác</p>
        </div>
        <div class="product_item">
            <img src="https://bizweb.dktcdn.net/100/438/408/themes/950002/assets/home_danhmuc_1_child_8_image.png?1717667908828"
                alt="">
            <p>Váy Đầm</p>
        </div>
    </div>
</body>
<script src="../assets/js/navbar.js"></script>

</html>