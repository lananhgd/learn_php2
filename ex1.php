
<?php
/*1.Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
*/
    echo "<br>";
    echo strlen("hothilananh");
?>

<?php
/*2.Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
*/
function countWords($string) {
    $wordCount = str_word_count($string);
    return $wordCount;
}
$input = "hothilananh";
$wordCount = countWords($input);
echo "bài 2: " . $wordCount;
?>

<?php
/*3.Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
*/
    function reverseString($str) {
        return strrev($str);
    }
    $input = "lananh, xinchao!";
    $reversedString = reverseString($input);
    echo"<br>";
    echo $reversedString;
?>

<?php
/*4.Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
*/
function searchSubstring($string, $substring) {
    return strpos($string, $substring);
}
    $string = "lananh, xinchao";
    $substring = "lananh";
    $result = searchSubstring($string, $substring);
    echo"<br>";
    echo $result;
?>

<?php
/*5.Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
*/
function replaceSubstring($string, $oldSubstring, $newSubstring) {
    return str_replace($oldSubstring, $newSubstring, $string);
}
// Sử dụng hàm replaceSubstring()
    $string = "lananh, xinchao!";
    $oldSubstring = "xinchao";
    $newSubstring = "K56SD1";
    $result = replaceSubstring($string, $oldSubstring, $newSubstring);
    echo"<br>";
    echo $result;
?>



<?php
/*6.Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
*/
function startsWith($string, $substring) {
    return strpos($string, $substring)===0;
}

    $string = "lananh, xinchao!";
    $substring = "lananh";
    $result = startsWith($string, $substring);
    if ($result) {
        echo"<br>";
        echo "Chuỗi bắt đầu bằng chuỗi con.";
    } else {
        echo "Chuỗi không bắt đầu bằng chuỗi con.";
    }
?>


<?php
/* 7.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
*/
    function convertToUpperCase($string) {
    return strtoupper($string);
}

    $string = "lananh, xinchao!";
    $upperCaseString = convertToUpperCase($string);
    echo"<br>";
    echo "Chuỗi gốc: " . $string . "\n";
    echo"<br>";
    echo "Chuỗi chuyển thành chữ hoa: " . $upperCaseString;
    ?>

<?php
/*8.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
*/
    function convertToLowerCase($string) {
        return strtolower($string);
    }
    $string = "lananh, xinchao!";
    $lowerCaseString = convertToLowerCase($string);
    echo"<br>";
    echo "Chuỗi gốc: " . $string . "\n";
    echo "Chuỗi chuyển thành chữ thường: " . $lowerCaseString;
 ?>
 <?php
 /*9.Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
*/
function convertToTitleCase($string) {
    return ucwords($string);
}

    $string = "lananh, xinchao!";
    $titleCaseString = convertToTitleCase($string);

    echo "Chuỗi gốc: " . $string . "\n";
    echo "Chuỗi chuyển thành chuỗi in hoa chữ cái đầu tiên của mỗi từ: " . $titleCaseString;
    ?>
<?php
 /*10.Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
*/

    // Loại bỏ khoảng trắng ở đầu và cuối chuỗi
    function removeWhitespace($string) {
        return trim($string);
    }

    // Sử dụng hàm removeWhitespace
    $string = "lananh, xinchao!";
    $trimmedString = removeWhitespace($string);

    echo "Chuỗi gốc: " . $string . "\n";
    echo "Chuỗi đã loại bỏ khoảng trắng: " . $trimmedString;
    ?>

<?php 
/* 11.Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
*/
function removeFirstCharacter($string) {
    $result = substr($string, 1);
    return $result;
}

    $input = "lananh, xinchao!";
    $removedCharacter = removeFirstCharacter($input);
    echo "Modified string: " . $removedCharacter;
/*12.Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().*/
function removeLastCharacter($string) {
    return rtrim($string, $string[strlen($string)-1]);
}

    $string = "lananh, xinchao!";
    $trimmedString = removeLastCharacter($string);

    echo "Chuỗi gốc: " . $string . "\n";
    echo "Chuỗi đã loại bỏ ký tự cuối cùng: " . $trimmedString;
    ?>
<?php
/*13.Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
*/
function splitString($string, $delimiter) {
    return explode($delimiter, $string);
}
    $string = "k56sd1,k56sd2,k56sd3";
    $delimiter = ",";
    $splitArray = splitString($string, $delimiter);
    print_r($splitArray);
    /* rong câu lệnh $splitArray = splitString($string, $delimiter);, chúng ta gọi hàm splitString() và truyền hai đối số vào đó: $string và $delimiter.*/
    ?>
 
 <?php 
 /*14.Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
 */
// Nối các phần tử của mảng thành chuỗi
function joinArray($array, $delimiter) {
    return implode($delimiter, $array);
}

    // Sử dụng hàm joinArray
    $array = array("Apple", "Banana", "Orange");
    $delimiter = ", ";

    $joinedString = joinArray($array, $delimiter);

    // In ra chuỗi đã nối
    echo $joinedString;
    ?>