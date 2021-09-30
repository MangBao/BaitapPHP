<?php
    $time = date_default_timezone_set("Asia/Ho_Chi_Minh"); 

    echo "Xổ số kiến thiết Khánh Hòa $time <br>";

    echo "Giải 8: ";
    for($i = 0; $i < 1; $i++){
        $a = rand(10, 99);
        echo "<span style='color: red'>$a</span>";
    }

    echo "<br> Giải 7: ";
    for($i = 0; $i < 1; $i++){
        $a = rand(100, 999);
        echo "$a";
    }

    echo "<br> Giải 6: ";
    for($i = 0; $i < 3; $i++){
        $a = rand(1000, 9999);
        echo "$a"." ";
    }

    echo "<br> Giải 5: ";
    for($i = 0; $i < 1; $i++){
        $a = rand(1000, 9999);
        echo "$a"." ";
    }

    echo "<br> Giải 4: ";
    for($i = 0; $i < 6; $i++){
        $a = rand(10000, 99999);
        echo "$a"." ";
    }

    echo "<br> Giải 3: ";
    for($i = 0; $i < 2; $i++){
        $a = rand(10000, 99999);
        echo "$a"." ";
    }

    echo "<br> Giải 2: ";
    for($i = 0; $i < 1; $i++){
        $a = rand(10000, 99999);
        echo "$a"." ";
    } 

    echo "<br> Giải 1: ";
    for($i = 0; $i < 1; $i++){
        $a = rand(10000, 99999);
        echo "$a"." ";
    }

    echo "<br> Giải ĐB: ";
    for($i = 0; $i < 1; $i++){
        $a = rand(100000, 999999);
        echo "<span style='color: red'>$a</span>"." ";
    }
?>