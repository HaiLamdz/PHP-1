<?php

class ExercisesController {

    public function kiemTraChanLe() {
        // require_once './views/check_even_odd.php';
        if (isset($_POST['number'])) {
            $number = $_POST['number'];
            if ($number % 2 == 0) {
                echo "$number là số chẵn.";
            } else {
                echo "$number là số lẻ.";
            }
        }
    }

    public function bangCuuChuong() {
        if (isset($_POST['m']) && isset($_POST['n'])) {
            $m = $_POST['m'];
            $n = $_POST['n'];
            for ($i = 1; $i <= $n; $i++) {
                echo "$m x $i = " . ($m * $i) . "<br>";
            }
        }
    }

    public function sinhMang() {
        if (isset($_POST['number'])) {
            $number = $_POST['number'];
            $array = range(1, $number);
            echo "Mảng được sinh ra: " . implode(', ', $array);
        }
    }

    public function tongSoChan() {
        if (isset($_POST['number'])) {
            $number = $_POST['number'];
            $sum = 0;
            for ($i = 0; $i < $number; $i += 2) {
                $sum += $i;
            }
            echo "Tổng các số chẵn nhỏ hơn $number là: $sum";
        }
    }
}
?>
