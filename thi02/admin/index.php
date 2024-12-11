<?php
// Require toàn bộ file Commons
 require_once '../commons/function.php';
 // Require toàn bộ file Controllers
 require_once 'controllers/dashboardController.php';
 // Require toàn bộ file 
 require_once 'controllers/productController.php';
 require_once 'models/productModel.php';

 // Route
$act = $_GET['act'] ?? '/';
match ($act) {
    // Trang chủ quản trị
    '/' => (new dashboardController)->dashboard(),
    'listproduct' =>(new productController())->allProduct(),
    'insertproduct' => (new productController())->insertProduct(),
    'updateproduct' => (new productController()) -> updateProduct($_GET['id']),
    'deleteproduct' => (new productController()) -> deleteProduct($_GET['id']),
}
?>