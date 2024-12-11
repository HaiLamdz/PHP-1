

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

p {
    font-size: 16px;
    margin: 20px;
}

a {
    color: #007BFF;
    text-decoration: none;
    font-size: 16px;
    margin-right: 15px;
}

a:hover {
    text-decoration: underline;
}

nav {
    background-color: #333;
    overflow: hidden;
}

nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

nav ul li {
    float: left;
}

nav ul li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    background-color: #111;
}
h4{
    margin-left: 85%;
}
    </style>
</head>

<body>
<h4>
<?php
if (isset($_SESSION['user'])) {
    echo "Xin chào " . $_SESSION['user'] ."...";
} else {
    header("location:./");
}
?>
<a href="?act=logout" class="logout">Đăng xuất</a>
</h4>

    <nav>
        <ul>
            <li><a href="?act=home">Trang Chủ</a></li>
            <li><a href="?act=allcategory">Quản trị danh mục</a></li>
            <li><a href="?act=listproduct">Quản trị sản phẩm</a></li>
        </ul>
    </nav>

</body>

</html>