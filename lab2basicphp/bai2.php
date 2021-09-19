<h4>Bài 2:</h4>
<?php

    $numRand = rand(1,10);
    echo "- Số nguyên ngẫu nhiên là: $numRand <br>";
    echo "Bảng cửu chương của $numRand là: <br>";

    for ($i = 1; $i <= 10; $i++) { 
        echo "$numRand x $i = ".$numRand*$i."<br>";
    }

?>
<br>