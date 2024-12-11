<?php
require_once 'models/productModel.php';
class productController
{
    public $productModel;
    function __construct()
    {
        $this->productModel = new productModel();
    }
    function index() {
        $product_older = $this->productModel->getAllProduct();
        $product_children = $this->productModel->getAllProduct_children();
        $product_man = $this->productModel->getAllProduct_man();
        require_once 'view/listProduct.php';
    }
    function insertProduct($folder)
{
    $all_cate = $this->productModel->allcate();
    require_once 'view/insertProduct.php';
    if (isset($_POST['insert'])) {
        $img = $_FILES['img']['name'];
        $tmp = $_FILES['img']['tmp_name'];
        move_uploaded_file($tmp, '../assets/' . $folder . '/' . $img); // Sử dụng biến $folder để chỉ định thư mục đích của ảnh sản phẩm
        $name = $_POST['name'];
        $price = $_POST['price'];
        $detail = $_POST['detail'];
        $cate = $_POST['cate'];
        if ($folder == 'img') {
            if ($this->productModel->insertProduct($name, $img, $price, $detail, $cate)) {
                header("location:?act=listproduct");
            } else {
                echo "<script> alert 'Không thêm được sản phẩm'</script>";
            }
        } elseif ($folder == 'img_nhi') {
            if ($this->productModel->insertProduct_children($name, $img, $price, $detail, $cate)) {
                header("location:?act=listproduct");
            } else {
                echo "<script> alert 'Không thêm được sản phẩm'</script>";
            }
        } elseif ($folder == 'img_nam') {
            if ($this->productModel->insertProduct_man($name, $img, $price, $detail, $cate)) {
                header("location:?act=listproduct");
            } else {
                echo "<script> alert 'Không thêm được sản phẩm'</script>";
            }
        }
    }
}
    function updateProduct($id)
    {
        $all_cate = $this->productModel->allcate();
        $oneProduct = $this->productModel->findProductById($id);
        require_once 'view/updateProduct.php';
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
            $detail = $_POST['detail'];
            $cate_id = $_POST['cate'];
            if (empty($_FILES['img']['name'])) {
                $img = "";
            } else {
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, '../assets/img' . $img);
            }
            if ($this->productModel->updateProduct($id, $name, $img, $price, $detail, $cate_id)) {
                header("location:?act=listproduct");
            } else {
                echo "<script> alert 'Không thêm được sản phẩm'</script>";
            }
        }
    }
    function deleteProduct($id)
    {
        if ($this->productModel->deleteProduct($id)) {
            header("location:?act=listproduct");
        } else {
            echo "<script>alert('Không xóa được sản phẩm');</script>";
        }
    }
}
