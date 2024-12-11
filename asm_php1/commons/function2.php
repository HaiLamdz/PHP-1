<?php 
    function connectData(){
        $host="localhost";
        $dbname="product";
        $username="root";
        $pass="";

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
?>