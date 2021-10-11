<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 4</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap');
        *{
            font-family: 'Roboto', sans-serif;
        }
        .wrap_form {
            margin: 120px auto;
            width: 600px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding: 2rem;
            border-radius: 8px;
            background: linear-gradient(-242deg, rgb(229 92 92 / 80%) 28.1%, rgb(0 173 255) 86%);
        }
        .title{
            text-align: center;
            font-weight: 600;
        }

        .show{
            text-align: center;
            cursor: pointer;
            margin-top: 8px;
        }
        .show:hover{
            background: #f90045a1;
            color: #fff;
        }
        input {
            outline: none;
            border: none;
            border-radius: 4px;
            padding: 4px;
            background: #ffffff7a;
        }
        textarea{
            outline: none;
            border: none;
            border-radius: 4px;
            padding: 4px;
            background: #ffffff7a;
        }
    </style>
</head>

<body>
    <?php

    $n = "";
    $m = "";
    $count = 0;
    $error = "";
    $cau_a = "";
    $cau_b = "";
    $cau_c = "";

    if (($_SERVER['REQUEST_METHOD'] == 'POST')) {

        $n = $_POST['n'];
        $m = $_POST['m'];

        if (isset($_POST['n']) && isset($_POST['m'])) {

            // Câu a: 
            $arr = array();
            $cau_a .= "\nMa trận mới tạo: \n\t";
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $m; $j++) {
                    $arr[$i][$j] = rand(-200, 200);
                    $cau_a .= $arr[$i][$j] . ' ';

                    if ($arr[$i][$j] % 2 != 0)
                        $count++;
                }
                $cau_a .= "\n\t";
            }

            // Câu b:
            $cau_b .= "\nSố phần tử có chữ số cuối là số lẻ: \n\t";
            $cau_b .= $count . "\n";

            // Câu c:
            $cau_c .= "\nThay thế các phần tử khác 0 thành 1. In ra ma trận sau khi thay thế:\n\t";

            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $m; $j++) {
                    if ($arr[$i][$j] != 0) {
                        $arr[$i][$j] = 1;
                    }
                    $cau_c .= $arr[$i][$j] . ' ';
                }
                $cau_c .= "\n\t";
            }
        } else {
            if (!isset($_POST['n']) || $_POST['n'] == "") {
                $error = "Hãy nhập n vào ô";
            }
            if (!isset($_POST['m']) || $_POST['m'] == "") {
                $error = "Hãy nhập m vào ô";
            }
        }
    }
    ?>
    <div class="wrap_form">
        <h2 class="title">MA TRẬN NGẪU NHIÊN</h2>
        <div class="content">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><b>Nhập n:</b></td>
                        <td>
                            <input type="number" name="n" value="<?php echo $n; ?>" min="1">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Nhập m:</b></td>
                        <td>
                            <input type="number" name="m" value="<?php echo $m; ?>" min="1">
                        </td>
                    </tr>
                    <tr>
                        <td><b>Kết quả:</b></td>
                        <td>
                            <textarea name="" id="" readonly cols="70" rows="15">
                            <?php
                            echo $cau_a . $cau_b . $cau_c;
                            ?>
                            </textarea>
                        </td>
                    </tr>
                </table>
                <div>
                    <input type="submit" value="In ra màn hình" class="show">
                </div>
            </form>
        </div>
        <div id="error">
            <?php
            echo $error;
            ?>
        </div>
    </div>
</body>

</html>