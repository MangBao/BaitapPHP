<?php
$n = 100;
$dem = 0;

for($i = 2; $i <= $n-1; $i++){
    if($n % $i == 0){
        $dem++;
        echo $dem;
        // break;
    }
}
