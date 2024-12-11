<?php 
    require_once 'models/productModel.php';
    class productController{
        public $productModel;
        function __construct()
        {
            $this->productModel = new productModel();;
        }
        function allProduct(){
            $allPro = $this->productModel->allProduct();
            require_once 'views/listProduct.php';
        }
        function insertProduct(){
            require_once 'views/insertProduct.php';
            if(empty($_POST['insert'])){
                $name = $_POST["name"];
                $img = $_FILES["img"]["name"];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp,'../assets/images/'.$img);
                $description = $_POST["description"];
                $num_date = $_POST["num_date"];
                $price = $_POST["price"];
                $sale = $_POST["name"];
                if($this->productModel->insertProduct($name, $img, $description, $num_date, $price, $sale)){
                    header("location:?act=listproduct");
                }
            }
        }
    }
?>