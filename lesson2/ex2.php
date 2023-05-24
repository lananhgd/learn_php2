<?php
/*2.Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
*/
function countWords($string) { 
    return str_word_count($string);
}
$input = "ho thi lan anh";
$wordCount = countWords($input);
echo "Number of words in the string: " . $wordCount;
?>

