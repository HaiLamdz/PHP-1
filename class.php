<?php 
// tạo 1 lớp
    class myRec{
        public $X, $y; // thuôc tính

        // hàm tạo
        function __construct($x,$y)
        {
            $this->x=$x;
            $this->y=$y;
        }

        // phương thức tính diện tích
        function myArea(){ 
            return $this->x * $this->y;
        }
    }
    $rec2= new myRec(3,5);

    // $rec1= new myRec(); // khoiwir tạo 1 hướng đối tượng $rec1 của lớp
    // $rec1->x=10;
    // $rec1->y=4;

     echo " diwwnj tích của hcn là: " . $rec2->myArea();


     class product{
        public $name, $price, $percent;

        function __construct()
        {
            $this->name=$name;
            $this->price=$price;
            $this->percent=$percent;
        }
        function name(){ 
            return $this->name;
        }

        function price(){
            return $this->price;
        }
        function percent(){
            return $this->percent * $this->price;
        }
     }
     $pro = new product("sản Phẩm 1", "12", "20%");
     echo $pro;
?>