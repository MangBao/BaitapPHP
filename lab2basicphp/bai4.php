<h4>Bài 4:</h4>
<style>
    .square {
    height: 30px;
    width: 30px;
    float: left;
    border: 1px solid black;
    margin-left: 5px;
    margin-bottom: 5px;
}
</style>
<?php

    echo "- Ma trận 2x5: <br>";
    $numRand = rand(-100, 100);
    for($i = 0; $i < 2; $i++){
        for($j = 0; $j < 5; $j++){
            echo "<div class='square'>$numRand</div>";
        }
        echo "<div style='clear:both'></div>";
    }
?>