<?php 
    class productModel{
        public $conn;
        function __construct()
        {
            $this->conn = connectDB();
        }
        function allproduct(){
            $sql = "select * from books_sach";
            return $this->conn->query($sql);
        }
        function insertProduct($title, $img, $author, $publisher, $publish_date){
            $sql = "insert into books_sach value(null, '$title', '$img', '$author', '$publisher', '$publish_date')";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
        function findProduct($id){
            $sql = "select * from books_sach where id=$id";
            return $this->conn->query($sql)->fetch();
        }
        function updateProduct($id, $title, $img, $author, $publisher, $publish_date){
            if(empty($_FILES['img']['name'])){
                $sql = "update books_sach set title='$title', author='$author', publisher='$publisher', publish_date='$publish_date' where id=$id";
            }else{
                $sql = "update books_sach set title='$title', cover_image='$img', author='$author', publisher='$publisher', publish_date='$publish_date' where id=$id";
            }
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
        function deleteProduct($id){
            $sql = "delete from books_sach where id=$id";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute();
        }
    }

?>