<?php
/*29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.*/
    function findPerfectSquares($start, $end) {
        $perfectSquares = [];

        for ($i = $start; $i <= $end; $i++) {
            if (isPerfectSquare($i)) {
                $perfectSquares[] = $i;
            }
        }

        return $perfectSquares;
    }

    function isPerfectSquare($number) {
        $sqrt = sqrt($number);
        return ($sqrt * $sqrt == $number);
    }

    $start = 1;
    $end = 10;

    $perfectSquares = findPerfectSquares($start, $end);

    echo "Perfect squares between $start and $end: ";
    echo implode(", ", $perfectSquares);
?>