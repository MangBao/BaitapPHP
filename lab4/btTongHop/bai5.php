<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị sản phẩm</title>
    <style>
        html {
            height: 100%;
        }
        body {
            display: flex;
            justify-content: center;
            margin-top: 220px;
            background: linear-gradient(113deg, #82f3b5, #ff9ba3 50%, #fdffa3 85%, #ffc894);
        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 50%;
            /* margin-top: 70px;
            display: flex;
            justify-content: center; */
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: rgb(226 223 195 / 33%);
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: rgb(0 130 31 / 52%);
            color: white;
        }
    </style>
</head>

<body>

    <?php
    $mathang = array(
        "mh01" => array("A001", "Sữa tắm XMEN", "Chai 50ml", 50),
        "mh02" => array("A002", "Dầu gội LifeBoy", "Chai 50ml", 20),
        "mh03" => array("B001", "Dầu ăn Cái Lân", "Chai 1 lít", 20),
        "mh04" => array("B002", "Đường cát", "Kg", 15),
        "mh05" => array("C001", "Chén xứ Minh Long", "Bộ 10 cái", 2)
    );
    ?>
    
    <table id="customers">
        <tr>
            <th>Mã mặt hàng</th>
            <th>Tên mặt hàng</th>
            <th>Đơn vị tính</th>
            <th>Số lượng</th>
        </tr>
        <?php
        for ($i = 1; $i <= count($mathang); $i++) {
            echo
            "<tr>
                    <td>" . $mathang['mh0' . $i . ''][0] . "</td>
                    <td>" . $mathang['mh0' . $i . ''][1] . "</td>
                    <td>" . $mathang['mh0' . $i . ''][2] . "</td>
                    <td>" . $mathang['mh0' . $i . ''][3] . "</td>
                </tr>";
        }
        ?>
    </table>
</body>

</html>