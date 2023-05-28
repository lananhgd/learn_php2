<?php
/*28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.*/
    function sumOddNumbers($n) {
        $sum = 0;

        for ($i = 1; $i <= $n; $i += 2) {
            $sum += $i;
        }

        return $sum;
    }

    $n = 18;

    $oddSum = sumOddNumbers($n);

    echo "The sum of odd numbers from 1 to $n is: " . $oddSum;
?>