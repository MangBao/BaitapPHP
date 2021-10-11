<!DOCTYPE html>
<html lang="en">

<head>
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
    session_start();
    $dv = "";
    $sl = "";
    $mamh = "";
    $tenmh = "";
    $error = "";
    $mathangs = array(
        array("A001", "Sữa tắm XMEN", "Chai 50ml", 50),
        array("A002", "Dầu gội LifeBoy", "Chai 50ml", 20),
        array("B001", "Dầu ăn Cái Lân", "Chai 1 lít", 20),
        array("B002", "Đường cát", "Kg", 15),
        array("C001", "Chén xứ Minh Long", "Bộ 10 cái", 2)
    );

    if (!isset($_SESSION['mathangs'])) {
        $_SESSION['mathangs'] = $mathangs;
    }

    if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
        $sl = $_POST['sl'];
        $dv = trim($_POST['dv']);
        $mamh = trim($_POST['mamh']);
        $tenmh = trim($_POST['tenmh']);

        if (isset($_POST["mamh"]) && isset($_POST["tenmh"]) && isset($_POST["dv"]) && isset($_POST["sl"])) {
            
            if ($_POST['dv'] == "") {
                $error = "Hãy nhập đơn vị";
            }
            if ($_POST['sl'] == "") {
                $error = "Hãy nhập số lượng";
            }            
            if ($_POST['mamh'] == "") {
                $error = "Hãy nhập mã mặt hàng";
            }
            if ($_POST['tenmh'] == "") {
                $error = "Hãy nhập tên mặt hàng";
            }

            $flag = true;
            foreach ($_SESSION['mathangs'] as $mh) {
                if ($mamh == $mh[0]) {
                    $flag = false;
                    break;
                }
            }

            if ($flag == true) {
                // $mh = array($mamh, $tenmh, $dv, $sl);
                array_push($_SESSION['mathangs'], array($mamh, $tenmh, $dv, $sl));
            } else {
                array_push($errors, "Mã mặt hàng này đã tồn tại");
            }
        }
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
                    <input type="text" name="mamh" required>
                </td>
                <td>
                    <input type="text" name="tenmh" required>
                </td>
                <td>
                    <input type="text" name="dv" required>
                </td>
                <td>
                    <input type="text" name="sl" min="1" required>
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
            // session_start();
            // print_r($_SESSION["mathangs"]);

            foreach ($_SESSION["mathangs"] as $mh) {
                echo "<tr>
                    <td>" . $mh[0] . "</td>
                    <td>" . $mh[1] . "</td>
                    <td>" . $mh[2] . "</td>
                    <td>" . $mh[3] . "</td>
                </tr>";
            }
            ?>

        </table>
    </div>
    <span style="color: red;
    font-size: 1.5rem;
    display: flex;
    justify-content: center;
    margin-top: 25px;"><?php echo $error ?></span>
</body>

</html>