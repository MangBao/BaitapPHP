<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma trận</title>
</head>
<body>
<table border="1px">
<?php

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
</body>
</html>