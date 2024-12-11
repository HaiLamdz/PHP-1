<?php 
    class accController{
        public $accModel;
        function __construct()
        {
            $this->accModel=new accModel();
        }
        function login(){
            require_once 'view/login.php';
            if(isset($_POST['login'])){
                if($this->accModel->checkAcc($_POST['user'], $_POST['pass'])>0){
                    $_SESSION['user'] = $_POST['user'];
                    header("location: ?act=home");
                }else{
                    echo "<script> alert('Đăng Nhập Thất Bại') </script>";
                }
            }
        }
        function logout(){
            unset($_SESSION['user']);
            header("location:./");
        }
    }
?>