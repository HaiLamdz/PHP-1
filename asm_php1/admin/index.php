<?php
    session_start();
    require_once '../commons/function.php';
    require_once 'controllers/dashboardController.php';
    require_once 'controllers/productContrroller.php';
    require_once 'controllers/categoryController.php';
    require_once 'models/categoryModel.php';
    require_once 'models/productModel.php';
    require_once 'controllers/accController.php';
    require_once 'models/accModel.php';

    $act=$_GET['act']??'/';
    match ($act) {
         '/'=> (new accController())->login(),
         'logout'=> (new accController())->logout(),
         'home'=> (new dashboardController())->dashboard(),
         'listproduct'=> (new productController())->index(),
         'insertproduct' => (new productController())->insertProduct($_GET['folder'] ?? 'img'),
         'updateproduct' => (new productController())->updateProduct($_GET['id']),
        'deleteproduct' => (new productController())->deleteProduct($_GET['id']),
        "allcategory" => (new categoryController())->allcate(),
        'insertCategory' => (new categoryController())->insertCategory(),
        'updateCategory' => (new categoryController())->updateCategory($_GET['id']),
        'deletecategory' => (new categoryController())->deleteCategory($_GET['id']),
    }
?>