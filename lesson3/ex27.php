<?php
/* 27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.*/
    function findLargestNegative($array) {
        $largestNegative = null;

        foreach ($array as $number) {
            if ($number < 0) {
                if ($largestNegative === null || $number > $largestNegative) {
                    $largestNegative = $number;
                }
            }
        }

        return $largestNegative;
    }

    $numbers = [-5,-6,-8,1,2,5,9];

    $largestNegative = findLargestNegative($numbers);

    if ($largestNegative !== null) {
        echo "The largest negative number in the array is: " . $largestNegative;
    } else {
        echo "No negative numbers found in the array.";
    }
?>