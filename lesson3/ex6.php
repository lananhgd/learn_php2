<?php
/*6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
*/
    function sortArray($array) {
        sort($array);
        return $array;
    }
    $array = array(50,16,21,33,25,37);
    $sortedArray = sortArray($array);
    echo "Mảng sau khi sắp xếp theo thứ tự tăng dần là: ";
    foreach ($sortedArray as $value) {
        echo $value . " ";
    }
?>