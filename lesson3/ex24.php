<?php
/*24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.*/
    function findLargestOdd($array) {
        $largestOdd = null;

        foreach ($array as $number) {
            if ($number % 2 != 0) {
                if ($largestOdd === null || $number > $largestOdd) {
                    $largestOdd = $number;
                }
            }
        }

        return $largestOdd;
    }

    $numbers = [1,3,5,6,9,8];

    $largestOdd = findLargestOdd($numbers);

    if ($largestOdd !== null) {
        echo "The largest odd number in the array is: " . $largestOdd;
    } else {
        echo "No odd numbers found in the array.";
    }
?>