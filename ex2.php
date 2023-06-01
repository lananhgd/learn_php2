<<<<<<< HEAD
<?php
/*Bài 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.*/
    function calculateAcademicRank($midTermScore, $finalTermScore) {
        $averageScore = ($midTermScore * 0.3) + ($finalTermScore * 0.7);

        if ($averageScore >= 9.0) {
            return "Excellent";
        } elseif ($averageScore >= 7.0 && $averageScore < 9.0) {
            return "Good";
        } elseif ($averageScore >= 5.0 && $averageScore < 7.0) {
            return "Fair";
        } else {
            return "Average - Weak";
        }
    }
    $midTermScore = 8.5;
    $finalTermScore = 7.2;
    $academicRank = calculateAcademicRank($midTermScore, $finalTermScore);
    echo "Academic Rank: " . $academicRank;
    ?>
=======
<?php
/*Bài 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.*/
    function calculateAcademicRank($midTermScore, $finalTermScore) {
        $averageScore = ($midTermScore * 0.3) + ($finalTermScore * 0.7);

        if ($averageScore >= 9.0) {
            return "Excellent";
        } elseif ($averageScore >= 7.0 && $averageScore < 9.0) {
            return "Good";
        } elseif ($averageScore >= 5.0 && $averageScore < 7.0) {
            return "Fair";
        } else {
            return "Average - Weak";
        }
    }
    $midTermScore = 8.5;
    $finalTermScore = 7.2;
    $academicRank = calculateAcademicRank($midTermScore, $finalTermScore);
    echo "Academic Rank: " . $academicRank;
    ?>
>>>>>>> 2dc1c7a65f6c3bfb77f0b80f0b0ac423d53ec1b6
