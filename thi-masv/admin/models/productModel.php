<?php 
    class productModel{
        public $conn;
        function __construct()
        {
            $this->conn = connectDB();
        }
        function allProduct(){
            $sql = "select * from khoa_hoc";
            return $this->conn->query($sql);
        }
        function insertProduct($name, $img, $description, $num_date, $price, $sale){
            $sql = "insert into khoa_hoc vulue(null, '$name', '$img', '$description', '$num_date', '$sale')";
            $stmt = $this->conn->query($sql);
            return $stmt->execute();
        }
    }
?>