<?php
    $con;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qlbansua";

    $con = mysqli_connect($servername, $username, $password);
    mysqli_select_db($con, $dbname);
    mysqli_query($con, "SET NAMES 'utf8'");

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thong tin hang sua</title>
</head>

<body>
    <?php
    // Ket noi CSDL
    // require("connect.php");
    // Chuan bi cau truy van & Thuc thi cau truy van
    $strSQL = "SELECT * FROM hang_sua";
    $result = mysqli_query($con, $strSQL);
    // Xu ly du lieu tra ve
    if (mysqli_num_rows($result) == 0) {
        echo "Chưa có dữ liệu";
    } else {
        echo "<h1 style='color: blue;' align='center'>THÔNG TIN HÃNG SỮA</h1>
            <table align='center' width='800' border='1' cellpadding='2' cellspacing='2' 
                    style='border-collapse: collapse;'>
                <tr style='background-color: #0084ab;' align='center'>
                    <td><b>Mã HS</b></td>
                    <td><b>Tên hãng sữa</b></td>
                    <td><b>Địa chỉ</b></td>
                    <td><b>Điện thoại</b></td>
                    <td><b>Email</b></td>
                </tr>";
        $stt = 1;
        while ($row = mysqli_fetch_array($result)) {
            if ($stt % 2 != 0) {
                echo "<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "<td>$row[4]</td>";
                echo "</tr>";
            } else {
                echo "<tr style='background-color: #ffb1007a;'>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "<td>$row[4]</td>";
                echo "</tr>";
            }
            $stt += 1;
        }
        echo '</table>';
    }
    //Dong ket noi
    mysqli_close($con);
    ?>
</body>

</html>