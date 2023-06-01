<<<<<<< HEAD
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
=======
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
>>>>>>> 2dc1c7a65f6c3bfb77f0b80f0b0ac423d53ec1b6
