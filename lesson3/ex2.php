<?php
    function calculateSum($n){
        $sum=0;
        for($i=1;$i<=$n;$i++){
            $sum+=$i;
        }
        return $sum;
    }
    $n=10;
    $sum=calculateSum($n);
    echo"<br>";
    echo "sum 1 between $n is: $sum";
    ?>