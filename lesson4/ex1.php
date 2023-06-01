<?php
/*Bài 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?*/
    function checkEvenOdd($number){
     if($number%2==0){
        return "Number $number is even.";
     }else {
        return"number $number is odd.";
     }
    }
    echo checkEvenOdd(8);
    echo"<br>";
    echo checkEvenOdd(9);
?>