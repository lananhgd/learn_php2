<?php
/*30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.*/
function isSubstring($string, $substring) {
    if (strpos($string, $substring) !== false) {
        return true;
    } else {
        return false;
    }
}

$string = "lan anh, xin chao!";
$substring = "lan";

if (isSubstring($string, $substring)) {
    echo "The substring \"$substring\" is found in the string \"$string\".";
} else {
    echo "The substring \"$substring\" is not found in the string \"$string\".";
}
?>