<?php
/*17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.*/
/* chữ đọc qua trái hay qua phải đều không tay đổi ý nghĩa"*/   
function isPalindrome($string) {
        $reverse = strrev($string);
        if ($string == $reverse) {
            return true;
        } else {
            return false;
        }
    }

    $string = "lananh";
    if (isPalindrome($string)) {
        echo "$string is a palindrome.";
    } else {
        echo "$string is not a palindrome.";
    }
?>