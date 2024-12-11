<?php
require_once 'controlls/ExercisesController.php';

$controller = new ExercisesControllers();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'kiem_tra_chan_le':
            $controller->kiemTraChanLe();
            break;
        case 'bang_cuu_chuong':
            $controller->bangCuuChuong();
            break;
        case 'sinh_mang':
            $controller->sinhMang();
            break;
        case 'tong_so_chan':
            $controller->tongSoChan();
            break;
        default:
            echo "Hành động không hợp lệ.";
            break;
    }
} else {
    // Hiển thị trang chủ với các liên kết đến từng bài tập
    echo '
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bài tập</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .container {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                max-width: 500px;
                width: 100%;
                text-align: center;
            }
            h1 {
                color: #333;
            }
            a {
                display: block;
                margin: 10px 0;
                padding: 10px;
                background-color: #007bff;
                color: #fff;
                text-decoration: none;
                border-radius: 4px;
            }
            a:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Bài tập</h1>
            <a href="index.php?action=kiem_tra_chan_le">Kiểm Tra Chẵn Lẻ</a>
            <a href="index.php?action=bang_cuu_chuong">In Bảng Cửu Chương</a>
            <a href="index.php?action=sinh_mang">Sinh Mảng</a>
            <a href="index.php?action=tong_so_chan">Tính Tổng Số Chẵn</a>
        </div>
    </body>
    </html>';
}

class ExercisesControllers {
    public function kiemTraChanLe() {
        echo '
        <!DOCTYPE html>
        <html lang="vi">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Kiểm Tra Chẵn Lẻ</title>
        </head>
        <body>
            <div class="container">
                <h1>Kiểm Tra Chẵn Lẻ</h1>
                <form action="ExercisesModel.php?action=kiem_tra_chan_le" method="post">
                    <label for="number">Nhập số để kiểm tra chẵn lẻ:</label>
                    <input type="number" id="number" name="number" required>
                    <button type="submit">Kiểm tra</button>
                </form>
            </div>
        </body>
        </html>';
    }

    public function bangCuuChuong() {
        echo '
        <!DOCTYPE html>
        <html lang="vi">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Bảng Cửu Chương</title>
        </head>
        <body>
            <div class="container">
                <h1>In Bảng Cửu Chương</h1>
                <form action="index.php?action=bang_cuu_chuong" method="post">
                    <label for="m">Nhập m:</label>
                    <input type="number" id="m" name="m" required>
                    <label for="n">Nhập n:</label>
                    <input type="number" id="n" name="n" required>
                    <button type="submit">In Bảng</button>
                </form>
            </div>
        </body>
        </html>';
    }

    public function sinhMang() {
        echo '
        <!DOCTYPE html>
        <html lang="vi">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sinh Mảng</title>
        </head>
        <body>
            <div class="container">
                <h1>Sinh Mảng</h1>
                <form action="index.php?action=sinh_mang" method="post">
                    <label for="number">Nhập số để sinh mảng:</label>
                    <input type="number" id="number" name="number" required>
                    <button type="submit">Sinh Mảng</button>
                </form>
            </div>
        </body>
        </html>';
    }

    public function tongSoChan() {
        echo '
        <!DOCTYPE html>
        <html lang="vi">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tính Tổng Số Chẵn</title>
        </head>
        <body>
            <div class="container">
                <h1>Tính Tổng Số Chẵn</h1>
                <form action="index.php?action=tong_so_chan" method="post">
                    <label for="number">Nhập số để tính tổng các số chẵn nhỏ hơn:</label>
                    <input type="number" id="number" name="number" required>
                    <button type="submit">Tính Tổng</button>
                </form>
            </div>
        </body>
        </html>';
    }
}
?>
