<?php
    $a = rand(1, 5);
    $b = rand(10, 100);

    switch($a){
        case 1:
            $cv = $b * 4;
            $dt = $b * $b;
            echo "Hình vuông cạnh $b có chu vi $cv và diện tích $dt <br>";
            break;
        case 2:
            $cv = 2 * $b * pi();
            $dt = pow($b, 2) * pi();
            echo "Hình tròn bán kính $b có chu vi $cv và diện tích $dt <br>";
            break;
        case 3: 
            $cv = 3 * $b;
            $dt = pow($b, 2) * (sqrt(3)/4);
            echo "Hình tam giác đều cạnh $b có chu vi $cv và diện tích $dt <br>";
            break;
        case 4: 
            $cv = 2 * ($b + $a);
            $dt = $a * $b;
            echo "Hình chữ nhật cạnh $b có chu vi $cv và diện tích $dt <br>";
            break;
        default:
    }

?>