<?php 
    class homeModel{
        public $connect;
        function __construct()
        {
            $this->connect=connectDB();
        }
        function allProduct(){}
    }
?>