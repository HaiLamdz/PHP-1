<?php
    require_once 'models/productModel.php';
    class productController{
        public $productModel;
        function __construct()
        {
            $this->productModel= new productModel();
        }
        function allProduct(){
            $allPro= $this->productModel->allProduct();
            require_once 'views/listProduct.php';
        }
        function insertProduct(){
            require_once 'views/insertProduct.php';
            if(isset($_POST['insert'])){
                $name = $_POST["name"];
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];

                move_uploaded_file($tmp,'../assets/img/'.$img);
                $instructor = $_POST["instructor"];
                $duration = $_POST["duration"];
                $price = $_POST["price"];
                if($this->productModel->insertProduct($name, $img, $instructor, $duration, $price)){
                    header("location:?act=listproduct");
                }else{
                    echo "lỗi";
                }
            }
        }
        function updateProduct($id){
            $findProduct=$this->productModel->findProduct($id);
            require_once 'views/updateProduct.php';
            if(isset($_POST['update'])){
                $id=$_POST['id'];
                $name = $_POST["name"];
                if(empty($_FILES['img']['name'])){
                    $img="";
                }else{
                    $img = $_FILES['img']['name'];
                    $tmp = $_FILES['img']['tmp_name'];

                    move_uploaded_file($tmp,'../assets/img/'.$img);
                }
                
                $instructor = $_POST["instructor"];
                $duration = $_POST["duration"];
                $price = $_POST["price"];
                if($this->productModel->updateProduct($id, $name, $img, $instructor, $duration, $price)){
                    header("location:?act=listproduct");
                }else{
                    echo "lỗi";
                }
            }
        }
        function deleteProduct($id){
            if($this->productModel->deleteProduct($id)){
                header("location:?act=listproduct");
            }else{
                echo "<script> alert('khong xoa duoc san pham') </script>";
            }
        }
    }
?>