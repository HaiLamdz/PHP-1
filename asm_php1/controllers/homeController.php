<?php
    require_once 'models/homeModel.php';
    class homeController{
        public $homeModel;
        function __construct()
        {
            $this->homeModel=new homeModel();
        }
        function index() {
            $product_older = $this->homeModel->allproduct_older();
            $product_children = $this->homeModel->allproduct_children();
            $product_man = $this->homeModel->allproduct_man();
            require_once 'views/demo.php';
        }

        function detail($id){
            $productOne=$this->homeModel->findProduct($id);
            require_once 'views/detail.php';
        }
    }
?>
