<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="../assets/css/cssSV.css"> -->
    <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900");
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;900&display=swap');

        body {
            font-family: "Roboto", sans-serif;
            font-weight: 300;
            font-size: 15px;
            line-height: 1.7;
            color: #c4c3ca;
            background-color: #1f2029;
            overflow-x: hidden;
        }

        a {
            cursor: pointer;
            transition: all 200ms linear;
        }

        a:hover {
            text-decoration: none;
        }

        .link {
            color: #c4c3ca;
        }

        .link:hover {
            color: #ffeba7;
        }

        p {
            font-weight: 500;
            font-size: 14px;
            line-height: 1.7;
        }

        h4 {
            font-weight: 600;
        }

        h6 span {
            padding: 0 20px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .section {
            position: relative;
            width: 100%;
            display: block;
        }

        .full-height {
            min-height: 100vh;
        }

        [type="checkbox"]:checked,
        [type="checkbox"]:not(:checked) {
            position: absolute;
            left: -9999px;
        }

        .checkbox:checked+label,
        .checkbox:not(:checked)+label {
            position: relative;
            display: block;
            text-align: center;
            width: 60px;
            height: 16px;
            border-radius: 8px;
            padding: 0;
            margin: 10px auto;
            cursor: pointer;
            background-color: #ffeba7;
        }

        .checkbox:checked+label:before,
        .checkbox:not(:checked)+label:before {
            position: absolute;
            display: block;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            color: #ffeba7;
            background-color: #102770;
            font-family: "unicons";
            content: "\eb4f";
            z-index: 20;
            top: -10px;
            left: -10px;
            line-height: 36px;
            text-align: center;
            font-size: 24px;
            transition: all 0.5s ease;
        }

        .checkbox:checked+label:before {
            transform: translateX(44px) rotate(-270deg);
        }

        .card-3d-wrap {
            position: relative;
            width: 440px;
            max-width: 100%;
            height: 620px;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            perspective: 800px;
            margin-top: 60px;
        }

        .card-3d-wrapper {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            transition: all 600ms ease-out;
        }

        .card-front,
        .card-back {
            width: 100%;
            height: 100%;
            background-color: #2a2b38;
            background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg");
            background-position: bottom center;
            background-repeat: no-repeat;
            background-size: 300%;
            position: absolute;
            border-radius: 6px;
            left: 0;
            top: 0;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .card-back {
            transform: rotateY(180deg);
        }

        .checkbox:checked~.card-3d-wrap .card-3d-wrapper {
            transform: rotateY(180deg);
        }

        .center-wrap {
            position: absolute;
            width: 100%;
            padding: 0 35px;
            top: 50%;
            left: 0;
            transform: translate3d(0, -50%, 35px) perspective(100px);
            z-index: 20;
            display: block;
        }

        .form-group {
            position: relative;
            display: block;
            margin: 0;
            padding: 0;
        }

        .form-style {
            padding: 13px 20px;
            padding-left: 55px;
            height: 48px;
            width: 100%;
            font-weight: 500;
            border-radius: 4px;
            font-size: 14px;
            line-height: 22px;
            letter-spacing: 0.5px;
            outline: none;
            color: #c4c3ca;
            background-color: #1f2029;
            border: none;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            box-shadow: 0 4px 8px 0 rgba(21, 21, 21, 0.2);
        }

        .form-style:focus,
        .form-style:active {
            border: none;
            outline: none;
            box-shadow: 0 4px 8px 0 rgba(21, 21, 21, 0.2);
        }

        .input-icon {
            position: absolute;
            top: 0;
            left: 18px;
            height: 48px;
            font-size: 24px;
            line-height: 48px;
            text-align: left;
            color: #ffeba7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:-ms-input-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input::-moz-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:-moz-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input::-webkit-input-placeholder {
            color: #c4c3ca;
            opacity: 0.7;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:focus:-ms-input-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:focus::-moz-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:focus:-moz-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .form-group input:focus::-webkit-input-placeholder {
            opacity: 0;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
        }

        .btn {
            border-radius: 4px;
            height: 44px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            padding: 0 30px;
            letter-spacing: 1px;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -moz-align-items: center;
            -ms-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -ms-flex-pack: center;
            text-align: center;
            border: none;
            background-color: #ffeba7;
            color: #102770;
            box-shadow: 0 8px 24px 0 rgba(255, 235, 167, 0.2);
        }

        .btn:active,
        .btn:focus {
            background-color: #102770;
            color: #ffeba7;
            box-shadow: 0 8px 24px 0 rgba(16, 39, 112, 0.2);
        }

        .btn:hover {
            background-color: #102770;
            color: #ffeba7;
            box-shadow: 0 8px 24px 0 rgba(16, 39, 112, 0.2);
        }

        .logo {
            position: absolute;
            top: 30px;
            right: 30px;
            display: block;
            z-index: 100;
            transition: all 250ms linear;
        }

        .logo img {
            height: 26px;
            width: auto;
            display: block;
        }


        /* Modals */


        /* Thiết Lập Modal Background */

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            /* Vị trí của modal */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            /* thiết lập scroll khi cần thiết */
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        #myBtn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.12), 0 2px 2px rgba(0, 0, 0, 0.12), 0 4px 4px rgba(0, 0, 0, 0.12), 0 8px 8px rgba(0, 0, 0, 0.12), 0 16px 16px rgba(0, 0, 0, 0.12);
            outline: none;
        }


        /* Nội Dung Modal */

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.12), 0 2px 2px rgba(0, 0, 0, 0.12), 0 4px 4px rgba(0, 0, 0, 0.12), 0 8px 8px rgba(0, 0, 0, 0.12), 0 16px 16px rgba(0, 0, 0, 0.12);
            border-radius: 25px;
        }


        /* Nút Đóng Modal */

        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
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
</head>

<body>
    <?php
    abstract class Nguoi
    {
        protected $maso, $hoten, $gioitinh, $ngaysinh;

        public function __construct($maso, $hoten, $gioitinh, $ngaysinh)
        {
            $this->name = $maso;
            $this->hoten = $hoten;
            $this->gioitinh = $gioitinh;
            $this->ngaysinh = $ngaysinh;
        }

        public function getMaSo()
        {
            return $this->name;
        }

        public function getHoTen()
        {
            return $this->hoten;
        }

        public function getSex()
        {
            return $this->gioitinh;
        }

        public function getNgaySinh()
        {
            return $this->ngaysinh;
        }

        abstract public function tinhDiemThuong();
    }

    class NhanVienPhucVu extends Nguoi
    {
        private $chucvu, $songaycong;

        public function setChucVu($val)
        {
            $this->chucvu = $val;
        }

        public function getChucVu()
        {
            return $this->chucvu;
        }

        public function setSoNgayCong($val)
        {
            $this->songaycong = $val;
        }

        public function getSoNgayCong()
        {
            return $this->songaycong;
        }

        function tinhDiemThuong()
        {
            if ($this->songaycong >= 28) {
                return 50000 * $this->songaycong;
            } else if ($this->songaycong < 28) {
                return 40000 * $this->songaycong;;
            }
        }
    }

    class NhanVienVanPhong extends Nguoi
    {
        private $sonamct;
        private const luongcb = 1500000;

        public function setSoNamCT($val)
        {
            $this->sonamct = $val;
        }

        public function getSoNamCT()
        {
            return $this->sonamct;
        }

        public function tinhDiemThuong()
        {
            $tuoi = 0;
            $date = str_replace('-', '/', $this->ngaysinh);
            $tuoi = 2021 - date('Y', strtotime($date));

            if ($tuoi >= 22 && $tuoi <= 25) {
                return self::luongcb * 1.1 * $this->sonamct;
            } else if ($tuoi >= 26 && $tuoi <= 30) {
                return self::luongcb * 1.2 * $this->sonamct;
            } else if ($tuoi > 30) {
                return self::luongcb * $this->sonamct;
            }
        }
    }
    $error = "";
    $infor = array();
    // $inforSV = array();

    if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
        $dt = $_POST['dt'];
        $maso = trim($_POST['maso']);
        $hoten = trim($_POST['hoten']);
        $gioitinh = $_POST['gioitinh'];
        $ngaysinh = $_POST['ngaysinh'];
        $chucvu = trim($_POST['chucvu']);
        $sonamct = trim($_POST['sonamct']);
        $songaycong = trim($_POST['songaycong']);

        if (isset($_POST['show'])) {
            if ($dt == "nvvp") {
                $nvvp = new NhanVienVanPhong($maso, $hoten, $gioitinh == "nam" ? "Nam" : "Nữ", $ngaysinh);
                $nvvp->setSoNamCT($sonamct);

                // if ($gv->getTrinhDo() == "cunhan") {
                //     $tenTD = "Cử nhân";
                // } else if ($gv->getTrinhDo() == "tiensi") {
                //     $tenTD = "Tiến sĩ";
                // } else if ($gv->getTrinhDo() == "thacsi") {
                //     $tenTD = "Thạc sĩ";
                // }
                array_push(
                    $infor,
                    $nvvp->getMaSo(),
                    $nvvp->getHoTen(),
                    $nvvp->getSex(),
                    $nvvp->getNgaySinh(),
                    $nvvp->getSoNamCT(),
                    $nvvp->tinhDiemThuong()
                );
            } else if ($dt == "nvpv") {
                $nvpv = new NhanVienPhucVu($maso, $hoten, $gioitinh == "nam" ? "Nam" : "Nữ", $ngaysinh);
                $nvpv->setChucVu($chucvu);
                $nvpv->setSoNgayCong($songaycong);

                array_push(
                    $infor,
                    $nvpv->getMaSo(),
                    $nvpv->getHoTen(),
                    $nvpv->getSex(),
                    $nvpv->getNgaySinh(),
                    $nvpv->getChucVu(),
                    $nvpv->getSoNgayCong(),
                    $nvpv->tinhDiemThuong()
                );
            }
        }
    }
    ?>

    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <form action="" method="post" class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Thông tin</h4>
                                            <input type="radio" name="dt" value="nvvp" <?php if ((isset($_POST["dt"]) && ($_POST["dt"]) == "nvvp") || !isset($_POST["dt"])) echo "checked" ?> checked>Nhân viên văn phòng
                                            <input type="radio" name="dt" value="nvpv" <?php if (isset($_POST["dt"]) && ($_POST["dt"]) == "nvpv") echo "checked" ?>>Nhân viên phục vụ
                                            <div class="form-group">
                                                <input placeholder="Mã số" required type="text" class="form-style" name="maso" value="<?php if (isset($_POST['maso'])) echo $_POST['maso']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input placeholder="Họ tên" required type="text" class="form-style" name="hoten" value="<?php if (isset($_POST['hoten'])) echo $_POST['hoten']; ?>">
                                            </div>
                                            <div class="form-group mt-2" style="display: flex; justify-content: space-evenly; margin-top: 12px !important;">
                                                <label for="sex">Giới tính: </label>
                                                <div style="align-items: center;">
                                                    <input type="radio" name="gioitinh" value="nam" <?php if ((isset($_POST["gioitinh"]) && ($_POST["gioitinh"]) == "nam") || !isset($_POST["gioitinh"])) echo "checked" ?>>Nam
                                                </div>
                                                <div style="align-items: center;">
                                                    <input type="radio" name="gioitinh" value="nu" <?php if (isset($_POST["gioitinh"]) && ($_POST["gioitinh"]) == "nu") echo "checked" ?>>Nữ
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input placeholder="Ngày sinh" required type="text" class="form-style" name="ngaysinh" value="<?php if (isset($_POST['ngaysinh'])) echo $_POST['ngaysinh']; ?>">
                                            </div>

                                            <div class="form-group GV" style="display: flex; justify-content: space-evenly; margin-top: 12px;">
                                                <div class="form-group GV">
                                                    <input placeholder="Số năm công tác"  type="text" class="form-style" name="sonamct" value="<?php if (isset($_POST['sonamct'])) echo $_POST['sonamct']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group SV" style="display: flex; justify-content: space-evenly; margin-top: 12px;">
                                                <div class="form-group SV">
                                                    <input placeholder="Chức vụ"  type="text" class="form-style" name="chucvu" value="<?php if (isset($_POST['chucvu'])) echo $_POST['chucvu']; ?>">
                                                </div>
                                                <div class="form-group SV">
                                                    <input placeholder="Số ngày công"  type="text" class="form-style" name="songaycong" value="<?php if (isset($_POST['songaycong'])) echo $_POST['songaycong']; ?>">
                                                </div>
                                            </div>

                                            <input type="submit" id="" name="show" class="btn mt-4">
                                            <!-- <input type="submit" value="Gui" name="show"> -->
                                            <input style="width: 100px;" type="button" id="myBtn" href="#" name="show_modal" value="Hiển thị" class="btn mt-4 p-0"></input>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal">
        <!-- Nội Dung Modal -->
        <div class="modal-content">
            <span class="close">×</span>
            <p>
                <?php
                foreach ($infor as $i) {
                    echo $i . " ";
                }
                ?>
            </p>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var checkedValue = $('input[type=radio][name="dt"]:checked').val();
            if (checkedValue == "nvvp") {
                $(".SV").hide();
                $(".GV").show();
            } else {
                $(".GV").hide();
                $(".SV").show();
            }
            $('input[type=radio][name=dt]').change(function() {
                if (this.value == 'nvvp') {
                    $(".SV").hide();
                    $(".GV").show();
                } else if (this.value == 'nvpv') {
                    $(".GV").hide();
                    $(".SV").show();
                }
            });


            var modal = document.getElementById("myModal");
            var btn = document.getElementById("myBtn");
            var span = document.getElementsByClassName("close")[0];

            btn.onclick = function() {
                modal.style.display = "block";
            }
            /* Sẽ đóng modal khi nhấn dấu x */
            span.onclick = function() {
                modal.style.display = "none";
            }
            /*Sẽ đóng modal khi nhấp ra ngoài màn hình*/
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>
</body>

</html>