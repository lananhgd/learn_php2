<?php
/*Bài 5: Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4….., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
*/
    function printNumbers() {
        for ($i = 1; $i <= 100; $i++) {
            echo $i . " ";
        }
    }
    printNumbers();
    ?>