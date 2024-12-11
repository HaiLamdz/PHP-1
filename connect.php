<?php
    $host = "localhost";
    $dbname = "wed2014su24";
    $username = "root";
    $passwork = "";
    try {
        $connect=new PDO("mysql:host=$host;dbname=$dbname",$username,$passwork);
    } catch (\Throwable $th) {
        echo "lỗi kết nối";
    }
?>