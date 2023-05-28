<?php
/*8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.*/
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    $start = 1;
    $end = 20;
    echo "Các số nguyên tố trong khoảng $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
?>