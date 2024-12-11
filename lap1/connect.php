<?php
    $host="localhost";
    $dbname="labnews";
    $username="root";
    $password="";

    try{
        $connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        echo "kết nối thành công";
    }catch(PDOException $e){
        echo "lỗi kết nối";
    }

?>