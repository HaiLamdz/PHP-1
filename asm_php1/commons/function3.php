<?php 
    function connect(){
        $host="localhost";
        $dbname="product";
        $username="root";
        $pass="";

        try {
            $con = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
?>