<?php
    require_once("connect.php");
    if(isset($_GET["news_id"])){
        $id = $_GET["news_id"];
        $sql_delete="delete from tintuc where news_id=$id";

        $result_delete=$connect->prepare($sql_delete);
        if($result_delete->execute()){
            header("location: index.php");
        }else{
            echo "không xóa đc dữ liệu";
        }
    }
?>