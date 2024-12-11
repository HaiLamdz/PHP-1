<?php 
require_once './models/saleModel.php';
class saleController{
    public $saleModel;
    function __construct(){
        $this->saleModel = new saleModel();
    }

    function callSale(){
        require_once './views/sale.php';
        if(isset($_POST['btn_sale'])){
            $sale = $this->saleModel->sale($_POST['price'],$_POST['percent']);
            echo "<br> Gia san pham sau khi giam la: $sale";
        }
    }
}
?>