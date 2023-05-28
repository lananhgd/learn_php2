<?php
/* Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.*/
    function compareDescending($a, $b) {
        if ($a == $b) {
            return 0;
        }
        return ($a > $b) ? -1 : 1;
    }

    $array = [6,8,5,2,5,10];
    usort($array, 'compareDescending');

    echo "Sorted array (descending order): ";
    foreach ($array as $value) {
        echo $value . " ";
    }
?>