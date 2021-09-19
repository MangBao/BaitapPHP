<h4>Bài 3:</h4>
<table style="border: 1px solid black;">
<tr>
<?php

    echo "- Bảng cửu chương từ 1 đến 10: <br>";

    for($i = 1; $i < 10; $i ++) {
        echo "<td style='border: 1px solid black;'>";
        for($j = 1; $j <= 10; $j ++) {
            echo "$i x $j = " . ($i * $j);
            echo "<br>";
        }
        echo "</td>";
    }

?>
</tr>
</table>
<br>
