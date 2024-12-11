<?php

class ExercisesModel
{

    public function kiemTraChanLe($n)
    {
        return $n % 2 == 0 ? "Chẵn" : "Lẻ";
    }

    public function inBangCuuChuong($m, $n)
    {
        $result = "";
        for ($i = $m; $i <= $n; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                $result .= "$i x $j = " . ($i * $j) . "<br>";
            }
            $result .= "<br>";
        }
        return $result;
    }

    public function sinhMangVaTimSoChiaHet($n)
    {
        $arr = [];
        $result = "";
        for ($i = 0; $i < $n; $i++) {
            $arr[] = rand(1, 100);
        }
        $result .= implode(", ", $arr) . "<br>Số chia hết cho 3 và 5: ";
        foreach ($arr as $num) {
            if ($num % 15 == 0) {
                $result .= $num . " ";
            }
        }
        return $result;
    }

    public function tongSoChanNhoHon($n)
    {
        $sum = 0;
        for ($i = 0; $i < $n; $i += 2) {
            $sum += $i;
        }
        return $sum;
    }
}
