<?php
/*16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.*/
    function countElements($array) {
        return count($array);
    }

    $array = [7, 9, 8, 4, 5,10];
    $count = countElements($array);
    echo "Số lượng phần tử trong mảng là: $count";
?>