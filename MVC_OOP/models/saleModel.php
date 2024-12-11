<?php 
class saleModel {
    function sale($price,$percent){
        return $price-($price*$percent)/100;
    }
}
?>