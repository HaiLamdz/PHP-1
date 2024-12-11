<?php 
    function connectDB(){
        $host="localhost";
        $dbname="du_an_mau";
        $user="root";
        $pass="";
    
        try {
            $connect = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
?>