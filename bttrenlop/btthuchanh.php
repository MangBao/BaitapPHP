<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Thông tin SV & GV</title>
    <style>
        fieldset {
            background-color: #eeeeee;
        }

        legend {
            background-color: gray;
            color: white;
            padding: 5px 10px;
        }

        input {
            margin: 5px;
        }

        #result {
            padding: 20px;
            border: 1px solid black;
            font-size: 20px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var checkedValue = $('input[type=radio][name="doiTuong"]:checked').val();
            if (checkedValue == "gv") {
                $(".SV").hide();
                $(".GV").show();
            } else {
                $(".GV").hide();
                $(".SV").show();
            }
            $('input[type=radio][name=doiTuong]').change(function() {
                if (this.value == 'gv') {
                    $(".SV").hide();
                    $(".GV").show();
                } else if (this.value == 'sv') {
                    $(".GV").hide();
                    $(".SV").show();
                }
            });
        });
    </script>
</head>

<body>
    <?php
    class Nguoi
    {
        protected $hoTen, $diaChi, $gioiTinh;

        public function __construct($hoTen, $diaChi, $gioiTinh)
        {
            $this->hoTen = $hoTen;
            $this->diaChi = $diaChi;
            $this->gioiTinh = $gioiTinh;
        }

        public function getHoTen()
        {
            return $this->hoTen;
        }

        public function getDiaChi()
        {

            return $this->diaChi;
        }
        public function getGioiTinh()
        {
            return $this->gioiTinh;
        }
    }
    class SinhVien extends Nguoi
    {
        private $lop, $nganh;

        public function setLop($lop)
        {
            $this->lop = $lop;
        }

        public function getLop()
        {
            return $this->lop;
        }

        public function setNganh($nganh)
        {
            $this->nganh = $nganh;
        }

        public function getNganh()
        {
            return $this->nganh;
        }

        function tinhDiemThuong()
        {
            if ($this->nganh == "CNTT")
                return 1;
            else if ($this->nganh == "KT")
                return 1.5;
            else
                return 0;
        }
    }
    class GiangVien extends Nguoi
    {
        private $trinhDo;
        private const LUONGCOBAN = 1500000;

        public function setTrinhDo($trinhDo)
        {
            $this->trinhDo = $trinhDo;
        }

        public function getTrinhDo()
        {
            return $this->trinhDo;
        }
        public function tinhLuong()
        {
            if ($this->trinhDo == "CN")
                return self::LUONGCOBAN * 2.34;
            else if ($this->trinhDo == "ThS")
                return self::LUONGCOBAN * 3.67;
            else if ($this->trinhDo == "TS")
                return self::LUONGCOBAN * 5.66;
        }
    }
    $str = NULL;
    $errors = [];
    if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
        $dt = $_POST['doiTuong'];
        $hoTen = trim($_POST['hoTen']);
        $gioiTinh = trim($_POST['gioiTinh']);
        $diaChi = trim($_POST['diaChi']);
        $trinhDo = $_POST['trinhDo'];
        $lop = $_POST['lop'];
        $nganh = $_POST['nganh'];
        if ($dt == "gv") {
            $gv = new GiangVien($hoTen, $diaChi, $gioiTinh == "nam" ? "Nam" : "Nữ");
            $gv->setTrinhDo($trinhDo);
            $str .= "<b>Thông tin giảng viên là:</b><br>";
            $str .= "- Họ tên: " . $gv->getHoTen() . "<br>";
            $str .= "- Địa chỉ: " . $gv->getDiaChi() . "<br>";
            $str .= "- Giới tính: " . $gv->getGioiTinh() . "<br>";
            $str .= "- Trình độ: " . $gv->getTrinhDo() . "<br>";
            $str .= "- Lương: " . $gv->tinhLuong() . "<br>";
        } else if ($dt == "sv") {
            $sv = new SinhVien($hoTen, $diaChi, $gioiTinh == "nam" ? "Nam" : "Nữ");
            $sv->setLop($lop);
            $sv->setNganh($nganh);
            $str .= "<b>Thông tin sinh viên là:</b><br>";
            $str .= "- Họ tên: " . $sv->getHoTen() . "<br>";
            $str .= "- Địa chỉ: " . $sv->getDiaChi() . "<br>";
            $str .= "- Giới tính: " . $sv->getGioiTinh() . "<br>";
            $str .= "- Lớp: " . $sv->getLop() . "<br>";
            $str .= "- Ngành: " . $sv->getNganh() . "<br>";
            $str .= "- Điểm thưởng: " . $sv->tinhDiemThuong() . "<br>";
        }
    }
    ?>
    <form action="" method="post">
        <fieldset>
            <legend>Thông tin giảng viên hoặc sinh viên</legend>
            <table border='0'>
                <tr>
                    <td>Chọn đối tượng</td>
                    <td>
                        <input type="radio" name="doiTuong" value="gv" <?php if ((isset($_POST['doiTuong']) && ($_POST['doiTuong']) == "gv") || !isset($_POST['doiTuong'])) echo 'checked' ?> />Giảng viên
                        <input type="radio" name="doiTuong" value="sv" <?php if (isset($_POST['doiTuong']) && ($_POST['doiTuong']) == "sv") echo 'checked' ?> />Sinh Viên
                    </td>
                </tr>
                <tr>
                    <td>Họ tên:</td>
                    <td><input type="text" name="hoTen" value="<?php if (isset($_POST['hoTen'])) echo $_POST['hoTen']; ?>" required /></td>
                </tr>
                <tr>
                    <td>Giới tính:</td>
                    <td>
                        <input type="radio" name="gioiTinh" value="nam" <?php if ((isset($_POST['gioiTinh']) && ($_POST['gioiTinh']) == "nam") || !isset($_POST['gioiTinh'])) echo 'checked' ?> />Nam
                        <input type="radio" name="gioiTinh" value="nu" <?php if (isset($_POST['gioiTinh']) && ($_POST['gioiTinh']) == "nu") echo 'checked' ?> />Nữ
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td><input type="text" name="diaChi" value="<?php if (isset($_POST['diaChi'])) echo $_POST['diaChi']; ?>" required /></td>
                </tr>
                <tr class="GV">
                    <td class="GV">Trình độ:</td>
                    <td class="GV">
                        <input type="radio" name="trinhDo" value="CN" <?php if ((isset($_POST['trinhDo']) && ($_POST['trinhDo']) == "CN") || !isset($_POST['trinhDo'])) echo 'checked' ?> />Cử nhân
                        <input type="radio" name="trinhDo" value="ThS" <?php if (isset($_POST['trinhDo']) && ($_POST['trinhDo']) == "ThS") echo 'checked' ?> />Thạc sĩ
                        <input type="radio" name="trinhDo" value="TS" <?php if (isset($_POST['trinhDo']) && ($_POST['trinhDo']) == "TS") echo 'checked' ?> />Tiến sĩ
                    </td>
                </tr>
                <tr class="SV">
                    <td class="SV">Ngành:</td>
                    <td class="SV">
                        <select name="nganh">
                            <option value="CNTT" <?php if ((isset($_POST['nganh']) && ($_POST['nganh']) == "CNTT") || !isset($_POST['nganh'])) echo 'selected' ?>>Công nghệ thông tin</option>
                            <option value="KT" <?php if (isset($_POST['nganh']) && ($_POST['nganh']) == "KT") echo 'selected' ?>>Kinh tế</option>
                            <option value="NNA" <?php if (isset($_POST['nganh']) && ($_POST['nganh']) == "NNA") echo 'selected' ?>>Ngôn ngữ Anh</option>
                        </select>
                    </td>
                </tr>
                <tr class="SV">
                    <td class="SV">Lớp:</td>
                    <td class="SV"><input type="text" name="lop" value="<?php if (isset($_POST['lop'])) echo $_POST['lop']; ?>" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="tinh" value="HIỂN THỊ THÔNG TIN" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center" style="color: red;">
                        <?php
                        if (count($errors) > 0) {
                            foreach ($errors as $err) {
                                echo $err . "<br>";
                            }
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
    <div id="result">
        <?php echo $str; ?>
    </div>
</body>

</html> -->