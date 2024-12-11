<?php 
    require_once 'commons/function.php';
    require_once 'commons/function2.php';
    require_once 'commons/function3.php';
    class homeModel{
        public $connect;
        public $conn;
        public $con;
        function __construct()
        {
            $this->connect=connectDB();
            $this->conn=connectData();
            $this->con=connect();
        }
        function allproduct_older(){
            $sql="select * from list_product order by pro_id asc";
            return $this->connect->query($sql);
        }
        function allproduct_children(){
            $sql="select * from list_product_children order by children_id asc";
            return $this->conn->query($sql);
        }
        function allproduct_man(){
            $sql="select * from list_product_man order by man_id asc";
            return $this->con->query($sql);
        }
        function findProduct($id){
            $sql="select * from list_product where pro_id=$id";
            return $this->connect->query($sql)->fetch();
        }
    }
?>