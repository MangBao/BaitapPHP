<h4>Bài 4:</h4>
<!-- <style>
    .square {
    height: 30px;
    width: 30px;
    float: left;
    border: 1px solid #fff;
    margin-left: 5px;
    margin-bottom: 5px;
}
</style> -->
<table border="1px">
<?php

// echo "- Ma trận 2x5: <br>";
// $numRand = rand(-100, 100);
// for($i = 0; $i < 2; $i++){
//     for($j = 0; $j < 5; $j++){
//         echo "<div class='square'>$numRand</div>";
//     }
//     echo "<div style='clear:both'></div>";
// }

    $a=array();
    $m = rand(2,5);
    $n = rand(2,5);
    echo "Ma trận có kích thước $m x $n: <br>";
    for($i = 0; $i < $m; $i++)
    {
        echo '<tr>';
        for($j = 0; $j < $n; $j++)
        {
            $a[$i][$j] = rand(-100,100);
            echo "<td>". $a[$i][$j] ."</td>";
        }
        echo '</tr>';
    }       
?>
</table>

<br>