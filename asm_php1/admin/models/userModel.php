<?php
    require_once '../commons/function.php';

    class categoryModel
    {
        public $connect;

        function __construct()
        {
            $this->connect = connectDB();
        }

        function alluser()
        {
            $sql = "select * from acc";
            $stmt = $this->connect->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        function insertUser($name)
        {
            $sql = "insert into acc value(null, '$name')";
            $stmt = $this->connect->prepare($sql);
            return $stmt->execute();
        }
        function findProductById($acc_id)
        {
            $sql = "select * from acc where acc_id=$acc_id";
            return $this->connect->query($sql)->fetch();
        }
        function updateUser($id, $acc_name)
        {
            $sql="update acc set acc_name='$acc_name' where acc_id=$id";
            $stmt=$this->connect->prepare($sql);
            return $stmt->execute();
        }
        function deleteCategory($id)
        {
            $sql = "DELETE FROM acc WHERE acc_id = $id";
            $stmt = $this->connect->prepare($sql);
            return $stmt->execute();
        }
    }
    ?>
