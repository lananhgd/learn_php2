<?php
/*9.Viết chương trình PHP để tính tổng của các số trong một mảng.*/
    function calculateSum2($array) {
        return array_sum($array);
    }

    $array = [1, 2, 3, 4, 5];
    $sum = calculateSum2($array);
    echo "The sum of the numbers in the array is: $sum";
?>