<?php
    class accModel{
        public $connect;
        function __construct()
        {
            $this->connect=connectDB();
        }
        function checkAcc($user, $pass){
            $sql="select * from acc where user='$user' and pass='$pass'";
            return $this->connect->query($sql)->rowCount();
        }
    }

?>