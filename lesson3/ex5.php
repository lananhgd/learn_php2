<?php
/*5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.*/
    function findMinMax($array) {
        $minValue = min($array);
        $maxValue = max($array);
        return array("min" => $minValue, "max" => $maxValue);
    }
    $array = array(58,100,50,61);
    $string = implode(", ", $array);
    /*hàm implode để chuyển đổi mảng thành một chuỗi, với phần tử của mảng được ngăn cách nhau bởi dấu phẩy và khoảng trắng*/
    echo $string;
    echo"<br>";
    $result = findMinMax($array);
    /* gọi hàm và gián kết quả trả về vào biến $result*/
    echo "The smallest value is " . $result['min'] . "<br>";
    /* truy cập một phần tử có tử khóa min trong results*/
    echo "The largest value in the array is: " . $result['max'];
?>