<?php
/*8.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
*/
    function convertToLowerCase($string) {
        return strtolower($string);
    }
    $string = "LAN ANH, XIN CHOA!!";
    $lowerCaseString = convertToLowerCase($string);
    echo "original string    : " . $string . "\n";
    echo"<br>";
    echo "String converted to uppercase: " . $lowerCaseString;
 ?>
 <?php
