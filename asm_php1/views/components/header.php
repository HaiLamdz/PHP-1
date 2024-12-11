<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.container{
  max-width: 1200px;
  margin: 0 auto;
}
header img {
  margin: 0px;
}

header a {
  float: left;
  line-height: 50px;
}

header nav {
  margin-right: 30px;
}

header nav ul {
  display: flex;
  float: right;
  list-style: none;
  line-height: 50px;
  margin-top: 15px;
}

header nav ul li a {
  text-decoration: none;
  margin: 0 20px;
  color: #fff;
  font-size: 20px;
}

header nav ul li :hover {
  color: red;
}

.menu {
  height: 80px;
  background-color: rgba(255, 68, 0, 0.822);
}

.banner {
  clear: both;
  margin: 0;
}

</style>
<body>
<body>
<div class="container">
      <!-- Menu -->
      <div class="menu">
        <header>
          <a href="#">
            <img
              src="https://i.pinimg.com/736x/9e/f5/b9/9ef5b94af16a6afedb20e7b26d82438b.jpg"
              alt=""
              width="150px"
              height="50px"
              style="margin: 15px"
            />
          </a>
          <nav>
            <ul>
              <li><a href="#">Trang chủ</a></li>
              <li><a href="#">Chi Tiết Sản Phẩm</a></li>
            </ul>
          </nav>
        </header>
      </div>
      <section class="banner">
        <img
        src="assets/logo.png"
          width="1200px"
          style="margin: 0"
          alt=""
        />
      </section>
</body>
</html>