<?php
/*3.Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
*/
    function reverseString($str) {
        return strrev($str);
    }
    $input = "lananh, xinchao!";
    $reversedString = reverseString($input);
    echo"<br>";
    echo"Reversed string:". $reversedString;
?>

