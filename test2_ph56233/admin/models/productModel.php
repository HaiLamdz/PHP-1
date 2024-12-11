<?php
    class productModel{
        public $conn;
        function __construct()
        {
            $this->conn = connectDB();
        }
        function allProduct(){
            $sql="select * from `courses-khoahoc`";
            return $this->conn->query($sql);
        }
        function insertProduct($name, $thumbnail, $instructor, $duration, $price){
            $sql="insert into `courses-khoahoc` value(null, '$name', '$thumbnail', '$instructor', '$duration', '$price')";
            $stmt = $this->conn->query($sql);
            return $stmt->execute();
        }
        function findProduct($id){
            $sql = "select * from `courses-khoahoc` where id=$id";
            return $this->conn->query($sql)->fetch();
        }
        function updateProduct($id, $name, $thumbnail, $instructor, $duration, $price){
            if(empty($img)){
                $sql="update `courses-khoahoc` set name='$name',instructor='$instructor', duration='$duration',price='$price' where id=$id";
            }else{
                $sql="update `courses-khoahoc` set name='$name',thumbnail='$thumbnail',instructor='$instructor', duration='$duration',price='$price' where id=$id";
            }
            $stmt=$this->conn->prepare($sql);
            return $stmt->execute();
        }
        function deleteProduct($id){
            $sql="delete from `courses-khoahoc`where id=$id";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
    }
?>