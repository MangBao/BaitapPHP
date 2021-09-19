<h4>Bài 5:</h4>
<?php
    require_once "./lab2basicphp/bai1.php";
    // function ktSNT($num) {
    //     // so nguyen num < 2 khong phai la so nguyen to
    //     if ($num < 2) {
    //         return false;
    //     }
    //     // check so nguyen to khi num >= 2
    //     $sqrtNum = sqrt($num);
    //     for ($i = 2; $i <= $sqrtNum; $i++) {
    //         if ($num % $i == 0) {
    //             return false;
    //         }
    //     }
    //     return true;
    // }

    $numRand = rand(-100,100);
    $path = "./assets/other/soNT.txt";

    if(checkSNT(2)){
        echo "So nt";
    } else {
        echo "Ko phai so nt";
    }

    if(file_exists($path)){
        echo "File ton tai";
    }
    // if(checkSNT($numRand)){

    // }

?>