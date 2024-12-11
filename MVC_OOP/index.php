<?php 
require_once './controllers/controllerSale.php';
require_once './models/saleModel.php';


// router
$act=$_GET['act']??'/';
match($act){
    '/'=>(new saleController())->callSale(),
};
?>