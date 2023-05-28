<?php
/*Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.*/
    function isPerfectNumber($number) {
        $sum = 0;

        for ($i = 1; $i < $number; $i++) {
            if ($number % $i == 0) {
                $sum += $i;
            }
        }

        if ($sum == $number) {
            return true;
        } else {
            return false;
        }
    }

    $number = 300;

    if (isPerfectNumber($number)) {
        echo $number . " is a perfect number.";
    } else {
        echo $number . " is not a perfect number.";
    }
?>