<?php
/*14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
*/
    function findElementIndex($array, $element) {
        $index = array_search($element, $array);
        return $index !== false ? $index : -1;
    }

    $array = [7,9,10,2,8];
    $element = 10;

    $index = findElementIndex($array, $element);
    echo "Locations $element in array is: $index";
?>