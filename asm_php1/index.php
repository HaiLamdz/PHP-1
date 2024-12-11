<?php
require_once 'commons/function.php';
require_once 'controllers/homeController.php';
require_once 'models/homeModel.php';

$action = $_GET['act'] ?? '/';

$controller = new homeController();

match($action) {
    '/' => $controller->index(),
    'detailpro' => $controller->detail($_GET['id'] ?? null),
    default => print("Unknown action.")
};
?>
