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

            background: linear-gradient(113deg, #82f3b5, #ff9ba3 50%, #fdffa3 85%, #ffc894);
        }

        .content {
            display: flex;
            justify-content: center;
            margin-top: 100px;
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

        input {
            outline: none;
            border-radius: 5px;
            border: none;
        }

        #them {
            height: 40px;
            align-self: center;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <?php
    $mathangs = array(
        "mh01" => array("A001", "Sữa tắm XMEN", "Chai 50ml", 50),
        "mh02" => array("A002", "Dầu gội LifeBoy", "Chai 50ml", 20),
        "mh03" => array("B001", "Dầu ăn Cái Lân", "Chai 1 lít", 20),
        "mh04" => array("B002", "Đường cát", "Kg", 15),
        "mh05" => array("C001", "Chén xứ Minh Long", "Bộ 10 cái", 2),
    );

    $err = "";

    if (isset($_POST["mamh"]) && isset($_POST["tenmh"]) && isset($_POST["dv"]) && isset($_POST["sl"])) {
        $mamh = $_POST["mamh"];
        $tenmh = $_POST["tenmh"];
        $dv = $_POST["dv"];
        $sl = $_POST["sl"];
        if (is_numeric($tenmh)) {
            $err = "(*) Tên mặt hàng không phải số!!!";
        }
        
        if(isset($_POST["them"])){
            $mh = array($mamh, $tenmh, $dv, $sl);
            $index = count($mathangs);
            $index +=1;
            
            // $mh_n = "mh"
            if($index < 10){
                $index = "mh0".$index;
            }
            else{
                $index = "mh".$index;
            }

            // array_push($mathangs, $mh_n);
            
        }
        $mathangs[$index] = $mh;
        // echo $index;
        // print_r($mathangs);
    } else {
        $mamh = "";
        $tenmh = "";
        $dv = "";
        $sl = 0;
    }
    ?>

    <form action="" method="post" style="display: flex; justify-content: center;">
        <table id="customers">
            <tr>
                <th>Mã mặt hàng</th>
                <th>Tên mặt hàng</th>
                <th>Đơn vị tính</th>
                <th>Số lượng</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="mamh">
                </td>
                <td>
                    <input type="text" name="tenmh">
                </td>
                <td>
                    <input type="text" name="dv">
                </td>
                <td>
                    <input type="text" name="sl">
                </td>
            </tr>
        </table>
        <input type="submit" value="Thêm sản phẩm" name="them" id="them">

    </form>
    <div class="content">
        <table id="customers">
            <tr>
                <th>Mã mặt hàng</th>
                <th>Tên mặt hàng</th>
                <th>Đơn vị tính</th>
                <th>Số lượng</th>
            </tr>
            <?php
            for ($i = 1; $i <= count($mathangs); $i++) {
                echo
                "<tr>
                    <td>" . $mathangs['mh0' . $i . ''][0] . "</td>
                    <td>" . $mathangs['mh0' . $i . ''][1] . "</td>
                    <td>" . $mathangs['mh0' . $i . ''][2] . "</td>
                    <td>" . $mathangs['mh0' . $i . ''][3] . "</td>
                </tr>";
            }
            ?>
        </table>
    </div>
    <span style="color: red;
    font-size: 1.5rem;
    display: flex;
    justify-content: center;
    margin-top: 25px;"><?php echo $err; ?></span>
</body>

</html>