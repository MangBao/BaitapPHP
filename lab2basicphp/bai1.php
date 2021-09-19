<h4>Bài 1: </h4>
<?php

    function checkSNT($num) {
        // so nguyen num < 2 khong phai la so nguyen to
        if ($num < 2) {
            return false;
        }
        // check so nguyen to khi num >= 2
        $sqrtNum = sqrt($num);
        for ($i = 2; $i <= $sqrtNum; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    $numRand = rand(10,1000);
    echo "- Số nguyên ngẫu nhiên là: $numRand <br>";

    // Câu a:
    echo "<b>a)</b> Các số nguyên tố nhỏ hơn $numRand là: <br>";

    for ($i = 3; $i < $numRand; $i+=2) {
        if (checkSNT($i)) {
            echo " " . $i;
        }
    }

    // Câu b:    
    $somu = 10;
    for ($i = 1; $i < $numRand; $i++) { 
        $somu = $somu * 10;
        $k = (int)($numRand/$somu);
        if($k == 0){
            $chuso = $i + 1;
            echo "<br><b>b)</b> Số $numRand có $chuso chữ số.";
            break;
        }
    }

    // Câu c:
    function numMax($num){
        // Hàm kiểm tra chữ số lớn nhất trong số nguyên
        if($num == 0){
            return false;
        }
        $num = abs($num);
        $max = 0;
        while($num > 0){
            $temp = $num % 10;
            $num /= 10;
            if($temp > $max){
                $max = $temp;
            }
        }
        return $max;
    }

    echo "<br><b>c)</b> Chữ số lớn nhất trong $numRand là: ".numMax($numRand);
?>
<br><br>