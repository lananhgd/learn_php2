<?php
/* 13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
*/
    function removeDuplicates($array) {
        return array_values(array_unique($array));
    }

    $array = [7,3,9,9,10,12,12];
    $result = removeDuplicates($array);
    print_r($result);
?>
<?php