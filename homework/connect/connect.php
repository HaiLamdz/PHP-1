<?php 
    $host="localhost";
    $username="root";
    $dbname="books";
    $pass="";

    
    try {
        $connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Kết Nối THành Công";
    } catch (PDOException $th) {
        echo $th->getMessage();
    }