<?php
/*12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
*/
    function insertElement($array, $element, $position) {
        array_splice($array, $position, 0, $element);
        return $array;
    }

    $array = [5, 9, 11, 13];
    $element = 7;
    $position = 1;

    $result = insertElement($array, $element, $position);
    print_r($result);
?>
<?php