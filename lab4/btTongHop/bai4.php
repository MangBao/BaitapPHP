<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma trận</title>
</head>
<body>
    <form action="" method="post">
    Nhập vào ma trận: 
    <input type="text" name="m" value="<?php echo $_POST["m"]?>">
    <input type="text" name="n" value="<?php echo $_POST["n"]?>"> 
    <input type="submit" value="In ma trận" name="submit">
    <br>
    </form>
<table border="1px">

<?php

    $a = array();

    if(isset($_POST["n"]) && isset($_POST["m"])){
        $m = $_POST["m"];
        $n = $_POST["n"];
        echo "Ma trận có kích thước $m x $n: <br>";
        for($i = 0; $i < $m; $i++)
        {
            echo '<tr>';
            for($j = 0; $j < $n; $j++)
            {
                $a[$i][$j] = rand(-200,200);
                // if($a[$i][$j] % 2 != 0){
                    
                // }              
                echo "<td>". $a[$i][$j] ."</td>";
            }
            echo '</tr>';
        }     
    }
    else {
        $m = (int)0;
        $n = (int)0;
    }

?>

</table>
</body>
</html>