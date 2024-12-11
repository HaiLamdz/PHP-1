<?php
require_once '../commons/function2.php';
require_once '../commons/function3.php';
require_once '../commons/function.php';
class productModel
{
    public $connect;
    public $conn;
    public $con;
    function __construct()
    {
        $this->connect = connectDB();
        $this->conn = connectData();
        $this->con = connect();
    }
    function allcate()
        {
            $sql = "select * from categary";
            $stmt = $this->connect->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    function getAllProduct()
    {
        $sql = "select * from list_product join categary on list_product.cate_id=categary.cate_id";
        return $this->connect->query($sql);
    }
    function getAllProduct_children()
    {
        $sql = "select * from list_product_children join categary on list_product_children.cate_id=categary.cate_id";
        return $this->conn->query($sql);
    }
    function getAllProduct_man()
    {
        $sql = "select * from list_product_man join categary on list_product_man.cate_id=categary.cate_id";
        return $this->con->query($sql);
    }
    
    function insertProduct($img, $name, $price, $detail, $cate_id)
    {
        $sql = "insert into list_product value(null, '$img', '$name', '$price', '$detail', '$cate_id')";
        $stmt = $this->connect->prepare($sql);
        return $stmt->execute();
    }
    function insertProduct_children($img, $name, $price, $detail, $cate_id)
    {
        $sql = "insert into list_product_children value(null, '$img', '$name', '$price', '$detail', '$cate_id')";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute();
    }
    function insertProduct_man($img, $name, $price, $detail, $cate_id)
    {
        $sql = "insert into list_product_man value(null, '$img', '$name', '$price', '$detail', '$cate_id')";
        $stmt = $this->con->prepare($sql);
        return $stmt->execute();
    }
    function findProductById($id)
    {
        $sql = "select * from list_product where pro_id=$id";
        return $this->connect->query($sql)->fetch();
    }
    function updateProduct($id, $name, $img, $price, $detail, $cate_id)
    {
        if (empty($img)) {
            $sql = "update list_product set pro_name='$name', pro_price='$price', pro_detail='$detail', cate_id=$cate_id where pro_id=$id";
        } else {
            $sql = "update list_product set pro_name='$name', pro_img='$img', pro_price='$price', pro_detail='$detail', cate_id=$cate_id where pro_id=$id";
        }
        $stmt = $this->connect->prepare($sql);
        return $stmt->execute();
    }
    function deleteProduct($id)
    {
        $sql = "DELETE FROM list_product WHERE pro_id = $id";
        $stmt = $this->connect->prepare($sql);
        return $stmt->execute();
    }
}
