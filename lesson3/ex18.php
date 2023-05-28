<?php
/*18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.*/
    function countElementOccurrences($array, $element) {
        $count = 0;
        foreach ($array as $value) {
            if ($value == $element) {
                $count++;
            }
        }
        return $count;
    }

    $array = [7, 9, 9, 9, 8, 8];
    $element = 9;
    $occurrences = countElementOccurrences($array, $element);
    echo "The element $element appears $occurrences times in the array.";