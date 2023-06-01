<?php
/* Bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.*/
function checkYearEvenOdd() {
    $year = date('Y'); 

    if ($year % 2 == 0) {
        return "The year $year is an even year.";
    } else {
        return "The year $year is an odd year.";
    }
}

echo checkYearEvenOdd();
?>
