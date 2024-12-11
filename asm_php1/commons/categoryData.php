<?php 
    function category(){
        $host="localhost:81";
        $dbname="product";
        $username="root";
        $password="";
    
        try {
            $connect= new PDO("mysql:host=$host,dbname=$dbname", $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connect;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
        
    }
?>