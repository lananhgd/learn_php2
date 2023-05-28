<?php
/*3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.*/
        function printMultiplicationTable($n){
            echo" Multiplication table for $n:";
            for($i= 1;$i<=10;$i++){
                echo"<br>";
                $result=$n * $i;
                echo "$n x $i=$result";            
            }
            echo"<br>";
        }
        for ($j = 1; $j <= 10; $j++) {
            printMultiplicationTable($j);
        }
?>     
