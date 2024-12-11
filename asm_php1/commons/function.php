<?php
    function connectDB(){
        $host="mysql:host=localhost;dbname=product;charset=utf8";
        $user="root";
        $pass="";
        try {
            $connect = new PDO($host, $user, $pass);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
?>