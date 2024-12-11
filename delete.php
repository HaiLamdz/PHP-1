<?php
    require_once("connect.php");
    if(isset($_GET["pro_id"])){
        $id = $_GET["pro_id"];
        $sql_delete="delete from product where pro_id=$id";

        $result_delete=$connect->prepare($sql_delete);
        if($result_delete->execute()){
            header("location: showpro.php");
        }else{
            echo "không xóa đc dữ liệu";
        }
    }
?>