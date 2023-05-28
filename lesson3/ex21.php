<?php
/*Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.*/
    function findSecondLargest($array) {
        $max = $array[0];
        $secondMax = null;

        foreach ($array as $value) {
            if ($value > $max) {
                $secondMax = $max;
                $max = $value;
            } elseif ($value < $max && ($secondMax === null || $value > $secondMax)) {
                $secondMax = $value;
            }
        }

        return $secondMax;
    }

    $array = [35, 16, 23, 27, 22];
    $secondLargest = findSecondLargest($array);

    echo "Second largest number in the array: " . $secondLargest;
    ?>