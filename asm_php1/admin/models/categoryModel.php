    <?php
    require_once '../commons/function.php';

    class categoryModel
    {
        public $connect;

        function __construct()
        {
            $this->connect = connectDB();
        }

        function allcate()
        {
            $sql = "select * from categary";
            $stmt = $this->connect->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        function insertCategory($name)
        {
            $sql = "insert into categary value(null, '$name')";
            $stmt = $this->connect->prepare($sql);
            return $stmt->execute();
        }
        function findProductById($cate_id)
        {
            $sql = "select * from categary where cate_id=$cate_id";
            return $this->connect->query($sql)->fetch();
        }
        function updateCategory($id, $cate_name)
        {
            $sql="update categary set cate_name='$cate_name' where cate_id=$id";
            $stmt=$this->connect->prepare($sql);
            return $stmt->execute();
        }
        function deleteCategory($id)
        {
            $sql = "DELETE FROM categary WHERE cate_id = $id";
            $stmt = $this->connect->prepare($sql);
            return $stmt->execute();
        }
    }
    ?>
