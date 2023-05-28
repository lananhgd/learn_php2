<?php
/*4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.*/
        function containsWord($string, $word) {
            if (strpos($string, $word) !== false) {
            /* kiểm tra xem kết quả hàm có khác với false hay không
            nếu mà không phải false thì word được tìm thấy trong string*/
                return true;
            } else {
                return false;
            }
        }
        
        $string = "look at me.";
        $word = "at";
        if (containsWord($string, $word)) {
            echo "String containing the word '$word'.";
        } else {
            echo "String does not contain words '$word'.";
        }
?>