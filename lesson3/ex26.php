<?php
/*26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.*/
function findLargestPositive($array) {
    $largestPositive = null;

    foreach ($array as $number) {
        if ($number > 0) {
            if ($largestPositive === null || $number > $largestPositive) {
                $largestPositive = $number;
            }
        }
    }

    return $largestPositive;
}

$numbers = [-1,-6,2,5,8,9];

$largestPositive = findLargestPositive($numbers);

if ($largestPositive !== null) {
    echo "The largest positive number in the array is: " . $largestPositive;
} else {
    echo "No positive numbers found in the array.";
}
?>