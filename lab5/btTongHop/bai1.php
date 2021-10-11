<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tính chu vi và diện tích</title>
    <style>
        fieldset {
            background-color: #92ffee91;
            width: 700px;
            border-radius: 8px;
            margin: 140px auto;
        }

        legend {
            background-color: #5f32d5;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
        }

        input {
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php

    // use HinhTron as GlobalHinhTron;

    abstract class Hinh
    {
        protected $ten, $dodai;
        public function setTen($ten)
        {
            $this->ten = $ten;
        }
        public function getTen()
        {
            return $this->ten;
        }
        public function setDodai($doDai)
        {
            $this->dodai = $doDai;
        }
        public function getDodai()
        {
            return $this->dodai;
        }
        abstract public function tinh_CV();
        abstract public function tinh_DT();
    }
    class HinhTron extends Hinh
    {
        const PI = 3.14;
        function tinh_CV()
        {
            return round($this->dodai[0] * 2 * self::PI, 2);
        }
        function tinh_DT()
        {
            return round(pow($this->dodai[0], 2) * self::PI, 2);
        }
    }
    class HinhVuong extends Hinh
    {
        public function tinh_CV()
        {
            return round($this->dodai[0] * 4, 2);
        }
        public function tinh_DT()
        {
            return round(pow($this->dodai[0], 2), 2);
        }
    }
    class HinhTamGiacDeu extends Hinh
    {
        public function tinh_CV()
        {
            return round($this->dodai[0] * 3, 2);
        }
        public function tinh_DT()
        {
            return round(pow($this->dodai[0], 2) * sqrt(3) / 4, 2);
        }
    }
    class HinhTamGiacThuong extends Hinh
    {
        public function tinh_CV()
        {
            return round(array_sum($this->dodai), 2);
        }
        public function tinh_DT()
        {
            $p = (1 / 2) * array_sum($this->dodai);
            return round(sqrt($p * ($p - $this->dodai[0]) * ($p - $this->dodai[1]) * ($p - $this->dodai[2])), 2);
        }
    }
    class HinhChuNhat extends Hinh
    {
        public function tinh_CV()
        {
            return round(($this->dodai[0] + $this->dodai[1]) * 2, 2);
        }
        public function tinh_DT()
        {
            return round($this->dodai[0] * $this->dodai[1], 2);
        }
    }
    $str = NULL;
    $error = "";
    if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
        if (isset($_POST['hinh'])) {
            $hinh = $_POST['hinh'];
            $ten = trim($_POST['ten']);
            $doDai = trim($_POST['dodai']);
            $arr = explode(",", $doDai);

            $flag = true; 
            foreach ($arr as $a) {
                if ($a <= 0) {
                    $flag = false;
                    break;
                }
            }
            
            if ($flag) {
                switch ($hinh) {
                    case 'hv':
                        if (count($arr) == 1) {
                            $hv = new HinhVuong();
                            $hv->setTen($ten);
                            $hv->setDodai($arr);
                            $str = "Diện tích hình vuông " . $hv->getTen() . " là : " . $hv->tinh_DT() . " \n" .
                                "Chu vi của hình vuông " . $hv->getTen() . " là : " . $hv->tinh_CV();
                        } else {
                            $error = "Hình vuông chỉ cần 1 giá trị đầu vào";
                        }
                        break;
                    case 'ht':
                        if (count($arr) == 1) {
                            $ht = new HinhTron();
                            $ht->setTen($ten);
                            $ht->setDodai($arr);
                            $str = "Diện tích hình tròn " . $ht->getTen() . " là : " . $ht->tinh_DT() . " \n" .
                                "Chu vi của hình tròn " . $ht->getTen() . " là : " . $ht->tinh_CV();
                        } else {
                            $error = "Hình tròn chỉ cần 1 giá trị đầu vào";
                        }
                        break;
                    case 'htgd':
                        if (count($arr) == 1) {
                            $htgd = new HinhTamGiacDeu();
                            $htgd->setTen($ten);
                            $htgd->setDodai($arr);
                            $str = "Diện tích hình tam giác đều " . $htgd->getTen() . " là : " . $htgd->tinh_DT() . " \n" .
                                "Chu vi của hình tam giác đều " . $htgd->getTen() . " là : " . $htgd->tinh_CV();
                        } else {
                            $error = "Tam giác đều chỉ cần 1 giá trị đầu vào";
                        }
                        break;
                    case 'htgt':
                        // (a + b > c) && (a + c > b) && (b + c > a)
                        if (count($arr) == 3) {
                            if (($arr[0] + $arr[1] > $arr[2]) && ($arr[0] + $arr[2] > $arr[1]) && ($arr[1] + $arr[2] > $arr[0])) {
                                $htgt = new HinhTamGiacThuong();
                                $htgt->setTen($ten);
                                $htgt->setDodai($arr);
                                $str = "Diện tích hình tam giác thường " . $htgt->getTen() . " là : " . $htgt->tinh_DT() . " \n" .
                                    "Chu vi của hình tam giác thường " . $htgt->getTen() . " là : " . $htgt->tinh_CV();
                            } else {
                                $error = "Giá trị bạn nhập không phải 3 cạnh của 1 tam giác";
                            }
                        } else {
                            $error = "Tam giác thường cần 3 giá trị đầu vào";
                        }
                        break;
                    case 'hcn':
                        if (count($arr) == 2) {
                            $hcn = new HinhChuNhat();
                            $hcn->setTen($ten);
                            $hcn->setDodai($arr);
                            $str = "Diện tích hình chữ nhật " . $hcn->getTen() . " là : " . $hcn->tinh_DT() . " \n" .
                                "Chu vi của hình chữ nhật " . $hcn->getTen() . " là : " . $hcn->tinh_CV();
                        } else {
                            $error = "Hình chữ nhật cần 2 giá trị đầu vào";
                        }
                        break;
                }
            }
            // Xuất thông báo lỗi giá trị <= 0 
            else {
                $error = "Hãy nhập giá trị lớn hơn 0";
            }
        } else {
            $error = "Hãy chọn loại hình trước khi tính";
        }
    }
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Tính chu vi và diện tích các hình đơn giản</legend>
            <table border='0'>
                <tr>
                    <td>Chọn hình</td>
                    <td><input type="radio" name="hinh" value="hv" <?php if (isset($_POST['hinh']) && ($_POST['hinh']) == "hv") echo 'checked' ?> />Hình vuông
                        <input type="radio" name="hinh" value="ht" <?php if (isset($_POST['hinh']) && ($_POST['hinh']) == "ht") echo 'checked' ?> />Hình tròn
                        <input type="radio" name="hinh" value="htgd" <?php if (isset($_POST['hinh']) && ($_POST['hinh']) == "htgd") echo 'checked' ?> />Hình tam giác đều
                        <input type="radio" name="hinh" value="htgt" <?php if (isset($_POST['hinh']) && ($_POST['hinh']) == "htgt") echo 'checked' ?> />Hình tam giác thường
                        <input type="radio" name="hinh" value="hcn" <?php if (isset($_POST['hinh']) && ($_POST['hinh']) == "hcn") echo 'checked' ?> />Hình chữ nhật
                    </td>
                </tr>
                <tr>
                    <td>Nhập tên:</td>
                    <td><input type="text" name="ten" value="<?php if (isset($_POST['ten'])) echo $_POST['ten']; ?>" required /></td>
                </tr>
                <tr>
                    <td>Nhập độ dài:</td>
                    <td><input type="text" name="dodai" value="<?php if (isset($_POST['dodai'])) echo $_POST['dodai']; ?>" pattern="[0-9,.]*" /></td>
                </tr>
                <tr>
                    <td>Kết quả:</td>
                    <td><textarea name="ketqua" cols="70" rows="4" disabled="disabled"><?php echo $str; ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="tinh" value="TÍNH" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" style="color: red;">
                        <?php
                        echo $error;
                        ?>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>