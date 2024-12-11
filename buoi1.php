<?php
$name  = "Vu Hai Lam";
echo "hello " . $name;

// hamf trong php
// hàm có sẵn, hàm do người dùng định nghĩa
// có giá trị trả về, không  có giá trị trả về

// xây dựng hàm với giá trị đầu vào: giá tiền, %giảm giá
// đầu ra là số tiền sau giảm giá 
echo "<br>";
function sale($price, $percent)
{
    $sale = $price - ($price * $percent) / 100;
    return $sale;
}
echo "giá sale: " . sale(20, 50) . "vnđ";

// mảng 
// mảng index
// mảng liên hợp
// mảng hỗn hợp mix(key khuyết mix với mnagr index, key khuyết mix với mảng liên hợp)
$product = [
    [
        "img" => "anh1.jpg",
        "id" => "SP01",
        "name" => "Apple",
        "price" => 1000
    ],
    [
        "img" => "anh2.jpg",
        "id" => "SP02",
        "name" => "SamSung",
        "price" => 2000
    ],
    [
        "img" => "anh3.jpeg",
        "id" => "SP03",
        "name" => "Oppo",
        "price" => 3000
    ]
];
echo "<br>";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <em>
        <?php
        print_r($product);
        ?>
    </em>
    <table border="1">
        <thead>
            <tr>
                <td>ảnh sp</td>
                <td>Mã SP</td>
                <td>Name</td>
                <td>Giá</td>
                <td>Giảm Giá 15%</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $products) { ?>
                <tr>
                    <td><img style="width: 200px; height: auto;" src="img/<?php echo $products["img"] ?>" alt=""></td>
                    <td> <?= $products["id"]  ?></td>
                    <td> <?= $products["name"]  ?></td>
                    <td> <?= number_format($products["price"])  ?></td>
                    <td><?= sale($products["price"], 15) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div style='display: fle; ' >

        <table >
            <?php foreach ($product as $products) { ?>
                <tr>
                    <td><img style="width: 200px; height: auto;" src="img/<?php echo $products["img"] ?>" alt=""></td> <br>
                </tr>
                <tr>
                    <td> <?= $products["id"]  ?></td>
                </tr>
                <tr>
                    <td> <?= $products["name"]  ?></td>
                </tr>
                <tr>
                    <td> <?= number_format($products["price"])  ?></td>
                </tr>
                <tr>
                    <td><?= sale($products["price"], 15) ?></td>
                </tr>
            <?php } ?>
        </table>

    </div>

</body>

</html>