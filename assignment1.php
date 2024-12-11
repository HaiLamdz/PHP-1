
<?php
    // tạo 1 bảng dữ liệu sản phẩm (mảng hai chiều ) có các thuộc tính :
    // mã sản phẩm, tên sản phẩm, số lượng, giá, ngày nhập, trạng thái (0 là hết hàng,1là còn hàng)
    // Xây dựng giao diện danh sách sản phẩm 
    // hiện thị tất cả trong mảng sản phẩm trên ra bảng ở trang danh sách sản phẩm 
    // thực hiện tìm kiếm sản phẩm theo mã sản phẩm(tìm kiếm tuyệt đối) 
    // nội dung tìm kiếm khai báo giá trị vào 1 biến 
    $Products = [
        [
            "ma_sp" => "SP01",
            "ten_sp" => "Bánh Phu Thê",
            "soLuong_sp" => 0,
            "gia_sp" => "30000",
            "ngaynhap" => "12/01/2024",
            "trangThai_sp" => 0,    
        ],
        [
            "ma_sp" => "SP02",
            "ten_sp" => "Bánh Oreo",
            "soLuong_sp" => 56,
            "gia_sp" => "15000",
            "ngaynhap" => "12/01/2024",
            "trangThai_sp" => 1,
        ],
        [
            "ma_sp" => "SP03",
            "ten_sp" => "Bánh Chocopie",
            "soLuong_sp" => 24,
            "gia_sp" => "30000",
            "ngaynhap" => "12/01/2024",
            "trangThai_sp" => 1, 
        ]
    ];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table{
            width: 80%;
            margin: 0 auto;
            border: 1px solid gray;
            border-collapse: collapse;
        }
        .table tr, .table td{
            border: 1px solid gray;
            padding: 8px;
        }
        h3, h2{
            margin-left: 170px;
        }
        .table tr {
            background-color: #ccc;
        }
    </style>
</head>
<body>

    
    <h2 >Danh sách sản phẩm</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Mã Sản Phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Só lượng sản phẩm</th>
                <th>Ngày nhập</th>
                <th>Trạng thái của sản phẩm</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Products as $Product) { ?>
                <tr>
                    <td align="center"><?= $Product["ma_sp"] ?></td>
                    <td align="center"><?= $Product["ten_sp"] ?></td>
                    <td align="center"><?= $Product["soLuong_sp"]?></td>
                    <td align="center"><?= $Product["gia_sp"] ?></td>
                    <td align="center"><?= $Product["ngaynhap"]?></td>
                    <td align="center"><?php $trangthai = $Product["trangThai_sp"] == 0 ? "Hết hàng" : "Còn hàng";
                        echo $trangthai ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php $id = "SP01"; ?>
            <h3 >Kết quả tìm kiếm cho mã sản phẩm <?= $id ?></h3>
            <!-- <table class="table">  -->
            <table class="table">
                <thead>
                    <tr>
                        <th>Mã Sản Phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Só lượng sản phẩm</th>
                        <th>Ngày nhập</th>
                        <th>Trạng thái của sản phẩm</th>
                    </tr>
                </thead>
            <?php foreach($Products as $Product){
                if($Product["ma_sp"] == $id){
                    ?>
                    <tr>
                        <td><?= $Product["ma_sp"]?></td>
                        <td><?= $Product["ten_sp"]?></td>
                        <td><?= $Product["soLuong_sp"]?></td>
                        <td><?= $Product["gia_sp"]?></td>
                        <td><?= $Product["ngaynhap"]?></td>
                        <td><?php echo $Product["trangThai_sp"] == 1 ? "còn hàng" : "hết hàng"; ?> </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </table>
</body>
</html>
