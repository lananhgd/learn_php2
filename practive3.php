<?php
/*1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
*/
    function isEven($number) {
        /* hàm này nhận một tham só number*/
        if ($number % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }
    $number = 10;
    if (isEven($number)) {
        /*dùng if để kiểm tra kết quả của hàm*/
        echo "$number là số chẵn.";
    } else {
        echo "$number không là số chẵn.";
    }
    ?>
<?php
/*2.Viết chương trình PHP để tính tổng của các số từ 1 đến n.*/
    function calculateSum($n) {
        $sum = 0;
        for ($i = 1; $i <= $n; $i++) {
            $sum += $i;
        }
        return $sum;
    }
    
    $n = 80;
    $sum = calculateSum($n);
    echo "Tổng các số từ 1 đến $n là: $sum";
?>
<?php
    /*3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.*/
        function printMultiplicationTable($n){
            echo" Multiplication tavle for $n:\n";
            for($i= 1;$i<=10;$i++){
                $result=$n * $i;
                echo "$n x$i=$rusult\n";
            }
            echo"<br>";
        }
        for($j=1;$j<=10;$j++){
            printMutiplicationTable($j);
        }
?>     
<?php
/*4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.*/
        function containsWord($string, $word) {
            if (strpos($string, $word) !== false) {
            /* kiểm tra xem kết quả hàm có khác với false hay không
            nếu mà không phải false thì word được tìm thấy trong string*/
                return true;
            } else {
                return false;
            }
        }
        
        $string = "look at me.";
        $word = "at";
        if (containsWord($string, $word)) {
            echo "String containing the word '$word'.";
        } else {
            echo "String does not contain words '$word'.";
        }
?>
<?php
/*5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.*/
    function findMinMax($array) {
        $minValue = min($array);
        $maxValue = max($array);
        return array("min" => $minValue, "max" => $maxValue);
    }
    $array = array(58,100,50,61);
    $result = findMinMax($array);
    /* gọi hàm và gián kết quả trả về vào biến $result*/
    echo ":The smallest value is " . $result['min'] . "<br>";
    /* truy cập một phần tử có tử khóa min trong results*/
    echo "The largest value in the array is: " . $result['max'];
?>
<?php
/*6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
*/
    function sortArray($array) {
        sort($array);
        /* được dùng để sắp xếp một mảng theo thứ tự tăng dần*/
        return $array;
    }

    $array = array(50,16,21,33,25,37);
    $sortedArray = sortArray($array);
    /*gọi hàm gán biến*/
    echo "Mảng sau khi sắp xếp theo thứ tự tăng dần là: ";
    foreach ($sortedArray as $value) {
        echo $value . " ";
    }
?>
<?php
/*7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.*/
    function calculateFactorial($n) {
        if ($n == 0) {
            return 1;
        } else {
            return $n * calculateFactorial($n - 1);
        }
    }

    $n = 5;
    $factorial = calculateFactorial($n);
    echo "Giai thừa của $n là: $factorial";
?>
<?php
/*8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.*/
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    $start = 1;
    $end = 20;
    echo "Các số nguyên tố trong khoảng $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
?>
<?php
/*9.Viết chương trình PHP để tính tổng của các số trong một mảng.*/
    function calculateSum2($array) {
        return array_sum($array);
    }

    $array = [1, 2, 3, 4, 5];
    $sum = calculateSum2($array);
    echo "Tổng của các số trong mảng là: $sum";
?>
<?php
    /*10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.*/
    function fibonacci($n) {
        if ($n == 0)
            return 0;
        elseif ($n == 1)
            return 1;
        else
            return (fibonacci($n - 1) + fibonacci($n - 2));
    }
    
    function printFibonacciRange($start, $end) {
        for ($i = $start; $i <= $end; $i++) {
            echo fibonacci($i) . " ";
        }
    }
    
    $start = 0;
    $end = 10;
    
    echo "Các số Fibonacci trong khoảng $start đến $end là: ";
    printFibonacciRange($start, $end);
    ?>
    <?php
    /*11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.*/
    function isArmstrongNumber($number) {
        $sum = 0;
        $temp = $number;
        $digits = strlen($number);
        
        while ($temp != 0) {
            $remainder = $temp % 10;
            $sum += pow($remainder, $digits);
            $temp = (int)($temp / 10);
        }
        
        return $sum == $number;
    }
    
    $number = 371;
    if (isArmstrongNumber($number)) {
        echo "$number là số Armstrong.";
    } else {
        echo "$number không là số Armstrong.";
    }
    ?>
<?php
/*12Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
*/
    function insertElement($array, $element, $position) {
        array_splice($array, $position, 0, $element);
        return $array;
    }

    $array = [1, 2, 4, 5];
    $element = 3;
    $position = 2;

    $result = insertElement($array, $element, $position);
    print_r($result);
?>
<?php
/* 13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
*/
    function removeDuplicates($array) {
        return array_values(array_unique($array));
    }

    $array = [1, 2, 2, 3, 4, 4, 5];
    $result = removeDuplicates($array);
    print_r($result);
?>
<?php
/*14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
*/
    function findElementIndex($array, $element) {
        $index = array_search($element, $array);
        return $index !== false ? $index : -1;
    }

    $array = [1, 2, 3, 4, 5];
    $element = 3;

    $index = findElementIndex($array, $element);
    echo "Locations $element in array is: $index";
?>
<?php
/*15.Viết chương trình PHP để đảo ngược một chuỗi.
*/
    function reverseString($string) {
        return strrev($string);
    }

    $string = "Hello, World!";
    $reversedString = reverseString($string);
    echo $reversedString;
    ?>
<?php
/*16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.*/
    function countElements($array) {
        return count($array);
    }

    $array = [1, 2, 3, 4, 5];
    $count = countElements($array);
    echo "Số lượng phần tử trong mảng là: $count";
?>