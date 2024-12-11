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
                $title = $_POST["title"];
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];

                move_uploaded_file($tmp,'../assets/img/'.$img);
                $author = $_POST["author"];
                $publisher = $_POST["publisher"];
                $publish_date = $_POST["publish_date"];
                if($this->productModel->insertProduct($title, $img, $author, $publisher, $publish_date)){
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
                $title = $_POST["title"];
                if(empty($_FILES['img']['name'])){
                    $img="";
                }else{
                    $img = $_FILES['img']['name'];
                    $tmp = $_FILES['img']['tmp_name'];

                    move_uploaded_file($tmp,'../assets/img/'.$img);
                }
                
                $author = $_POST["author"];
                $publisher = $_POST["publisher"];
                $publish_date = $_POST["publish_date"];
                if($this->productModel->updateProduct($id, $title, $img, $author, $publisher, $publish_date)){
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