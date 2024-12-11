<?php 
    require_once 'models/productModel.php';
    require_once 'controllers/dashboardController.php';
    require_once 'controllers/productController.php';
    require_once '../commons/function.php';

    $act = $_GET['act'] ?? '/';
    match ($act){
        '/' => (new dashboardController())->dashboard(),
        'listproduct' =>(new productController())->allproduct(),
        'insertproduct' => (new productController())->insertProduct(),
        'updateproduct' => (new productController())->updateProduct($_GET['id']),
        'deleteproduct' => (new productController())->deleteProduct($_GET['id']),
    }
?>