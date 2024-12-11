<?php
require_once 'models/categoryModel.php';

class categoryController {
    public $categoryModel;

    function __construct() {
        $this->categoryModel = new categoryModel();
    }

    function allcate() {
        $all_cate = $this->categoryModel->allcate();
        require_once 'view/category.php';
    }
    
    function insertCategory(){
        require_once 'view/insertCategory.php';
        if (isset($_POST['insert'])) {
            $name = $_POST['name'];
            if($this->categoryModel->insertCategory($name)){
                header("location: ?act=allcategory");
            }else{
                echo "không thêm đc danh mục";
            }
        }
    }
    function updateCategory($cate_id) {
        $motProduct = $this->categoryModel->findProductById($cate_id);
        require_once 'view/updateCategory.php';
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            if ($this->categoryModel->updateCategory($id, $name)) {
                header("location:?act=allcategory");
            } else {
                echo "<script> alert 'Không thêm được sản phẩm'</script>";
            }
        }
    }
    function deleteCategory($cate_id)
    {
        if ($this->categoryModel->deleteCategory($cate_id)) {
            header("location:?act=allcategory");
        } else {
            echo "<script>alert('Không xóa được sản phẩm');</script>";
        }
    }
}
?>
