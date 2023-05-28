<?php
/*20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.*/
/*thêm vào cuối*/
    function addToEnd($array, $element) {
        $array[] = $element;
        return $array;
    }

    $array = [3, 4, 5];
    $element = 6;

    $newArray = addToEnd($array, $element);

    echo "Array after adding element at the end: ";
    foreach ($newArray as $value) {
        echo $value . " ";
    }
    ?>
    <?php
    /* thêm vào đầu*/
    function addAtBeginning($array, $element) {
        array_unshift($array, $element);
        return $array;
    }
    
    $array = [5, 6, 7];
    $element = 4;
    $newArray = addAtBeginning($array, $element);

    echo "Array after adding element at the beginning: ";
    foreach ($newArray as $value) {
        echo $value . " ";
    }
    ?>