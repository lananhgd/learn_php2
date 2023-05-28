<?php
/*22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.*/
    function findGCD($num1, $num2) {
        while ($num2 != 0) {
            $temp = $num2;
            $num2 = $num1 % $num2;
            $num1 = $temp;
        }

        return $num1;
    }

    function findLCM($num1, $num2) {
        $gcd = findGCD($num1, $num2);
        $lcm = ($num1 * $num2) / $gcd;

        return $lcm;
    }

    $num1 = 36;
    $num2 = 25;

    $gcd = findGCD($num1, $num2);
    $lcm = findLCM($num1, $num2);

    echo "Greatest Common Divisor (GCD) of $num1 and $num2: " . $gcd . "\n";
    echo "Least Common Multiple (LCM) of $num1 and $num2: " . $lcm;
?>