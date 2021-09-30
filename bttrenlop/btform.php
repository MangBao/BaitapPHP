<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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

        .content {
            /* border: 1px solid white; */
            width: 900px;
            /* height: 220px; */
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px,
                rgba(0, 0, 0, 0.07) 0px 2px 4px,
                rgba(0, 0, 0, 0.07) 0px 4px 8px,
                rgba(0, 0, 0, 0.07) 0px 8px 16px,
                rgba(0, 0, 0, 0.07) 0px 16px 32px,
                rgba(0, 0, 0, 0.07) 0px 32px 64px;
        }

        .title {
            font-size: 26px;
            font-weight: 700;
            padding-top: 10px;
        }

        .title, 
        .tinh {
            text-align: center;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 6px;
            padding: 0 26px;
        }

        input {
            outline-style: none;
        }

        label,
        .title {
            color: #ba0202;
        }

        .tinh>input {
            font-weight: 600;
            font-size: 13.5px;
            border-radius: 5px;
            cursor: pointer;
            color: #ba0202;
            margin-bottom: 10px;
        }

        label {
            font-weight: 600;
        }

        li>div {
            width: 230px;
        }
    </style>
</head>

<body>
    <?php
        function checkSNT($num) {
            // so nguyen num < 2 khong phai la so nguyen to
            if ($num < 2) {
                return false;
            }
            // check so nguyen to khi num >= 2
            $sqrtNum = sqrt($num);
            for ($i = 2; $i <= $sqrtNum; $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        if(isset($_POST['n'])) {
            $n = trim($_POST['n']);
        }
        else {
            $n = 0;
        }        

        if(isset($_POST['tinh'])){
            if (is_numeric($n) && ($n >= 10 && $n <= 1000)){
                $so = "Số nguyên n là: $n" ."\n";

                // Câu a:
                $cau_a = "a) Các số nguyên tố nhỏ hơn $n là: " ."\n";

                function cau_a($n) {
                    for ($i = 3; $i < $n; $i+=2) {
                        if (checkSNT($i)) {
                            echo " " . $i;
                        }
                    }
                };

                // Câu b:    
                function cau_b($n){
                    $somu = 10;
                    for ($i = 1; $i < $n; $i++) { 
                        $somu = $somu * 10;
                        $k = (int)($n/$somu);
                        if($k == 0){
                            $chuso = $i + 1;
                            echo "\n"."b)Số $n có $chuso chữ số. ";
                            break;
                        }
                    }
                }

                // Câu c:
                function numMax($num){
                    // Hàm kiểm tra chữ số lớn nhất trong số nguyên
                    if($num == 0){
                        return false;
                    }
                    $num = abs($num);
                    $max = 0;
                    while($num > 0){
                        $temp = $num % 10;
                        $num /= 10;
                        if($temp > $max){
                            $max = $temp;
                        }
                    }
                    return $max;
                }

                $cau_c = "\n"."c) Chữ số lớn nhất trong $n là: ".numMax($n);
            }
        }
    ?>
    <div class="content">
        <form action="btform.php" method="post">
            <div class="title">Nhập số nguyên từ 10 - 1000</div>
            <hr style="width: 70%;"/>
            <ul>
                <?php 
                    if (!is_numeric($n)) 
                        echo "<span style='text-align: center; color:green; margin-left: 28%;' color='green'>Vui lòng nhập vào số! </span>";
                    if ($n < 10 && $n > 1000)
                        echo "<span style='text-align: center; color:green; margin-left: 28%;' color='green'>Vui lòng nhập số từ 10 - 1000! </span>";
                ?>
                <li>
                    <label for="n">Nhập vào N: </label>
                    <input type="text" name="n" value="<?php echo $n; ?>">
                </li>
                <li>
                    <label for="kq">Kết quả: </label>
                    <textarea name="kq" id="" cols="80" rows="20" readonly>
                        <?php
                            echo "$so ";
                            echo "$cau_a";
                            echo cau_a($n);
                            echo cau_b($n);
                            echo $cau_c;
                        ?>
                    </textarea>
                </li>                
            </ul>
            <div class="tinh">
                <input type="submit" name="tinh" value="Tính">
                <!-- <input type="reset" value="Reset"> -->
            </div>
        </form>
    </div>
</body>

</html>