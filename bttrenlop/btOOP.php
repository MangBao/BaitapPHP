<?php

require_once "../bttrenlop/inforGV_SV.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin Giảng viên/ Sinh viên</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/cssSV.css">
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

    $errors = [];
    $infor = array();
    // $inforSV = array();

    if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
        $dt = $_POST['dt'];
        $lop = $_POST['lop'];
        $nganh = $_POST['nganh'];
        $trinhdo = $_POST['td'];
        $name = trim($_POST['name']);
        $sex = trim($_POST['sex']);
        $address = trim($_POST['address']);
        $tenTD = "";

        if ($dt == "gv") {
            $gv = new GiangVien($name, $address, $sex == "nam" ? "Nam" : "Nữ");
            $gv->setTrinhDo($trinhdo);

            if ($gv->getTrinhDo() == "cunhan") {
                $tenTD = "Cử nhân";
            } else if ($gv->getTrinhDo() == "tiensi") {
                $tenTD = "Tiến sĩ";
            } else if ($gv->getTrinhDo() == "thacsi") {
                $tenTD = "Thạc sĩ";
            }
            array_push(
                $infor,
                $gv->getName(),
                $gv->getAddress(),
                $gv->getSex(),
                $tenTD,
                $gv->tinhLuong()
            );
        } else if ($dt == "sv") {
            $sv = new SinhVien($name, $address, $sex == "nam" ? "Nam" : "Nữ");
            $sv->setLop($lop);
            $sv->setNganh($nganh);

            array_push(
                $infor,
                $sv->getName(),
                $sv->getAddress(),
                $sv->getSex(),
                $sv->getLop(),
                $sv->getNganh(),
                $sv->tinhDiemThuong()
            );
        }
    }
    ?>
    <!-- <form action="" method="post">
        <fieldset>
            <legend>Thông tin Giảng viên/ Sinh viên</legend>
            <table border='0'>
                <tr>
                    <td>Chọn đối tượng</td>
                    <td>
                        <input type="radio" name="dt" value="gv" <?php if ((isset($_POST["dt"]) && ($_POST["dt"]) == "gv") || !isset($_POST["dt"])) echo "checked" ?>>Giảng viên
                        <input type="radio" name="dt" value="sv" <?php if (isset($_POST["dt"]) && ($_POST["dt"]) == "sv") echo "checked" ?>>Sinh Viên
                    </td>
                </tr>
                <tr>
                    <td>Họ tên: </td>
                    <td><input required type="text" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>"></td>
                </tr>
                <tr>
                    <td>Giới tính: </td>
                    <td>
                        <input type="radio" name="sex" value="nam" <?php if ((isset($_POST["sex"]) && ($_POST["sex"]) == "nam") || !isset($_POST["sex"])) echo "checked" ?>>Nam
                        <input type="radio" name="sex" value="nu" <?php if (isset($_POST["sex"]) && ($_POST["sex"]) == "nu") echo "checked" ?>>Nữ
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td>
                        <input required type="text" name="address" value="<?php if (isset($_POST["address"])) echo $_POST["address"]; ?>">
                    </td>
                </tr>
                <tr class="GV">
                    <td class="GV">Trình độ:</td>
                    <td class="GV">
                        <input type="radio" name="td" value="cunhan" <?php if ((isset($_POST["td"]) && ($_POST["td"]) == "cunhan") || !isset($_POST["td"])) echo "checked" ?>>Cử nhân
                        <input type="radio" name="td" value="thacsi" <?php if (isset($_POST["td"]) && ($_POST["td"]) == "thacsi") echo "checked" ?>>Thạc sĩ
                        <input type="radio" name="td" value="tiensi" <?php if (isset($_POST["td"]) && ($_POST["td"]) == "tiensi") echo "checked" ?>>Tiến sĩ
                    </td>
                </tr>
                <tr class="SV">
                    <td class="SV">Ngành:</td>
                    <td class="SV">
                        <select name="nganh">
                            <option value="cntt" <?php if ((isset($_POST["nganh"]) && ($_POST["nganh"]) == "cntt") || !isset($_POST["nganh"])) echo "selected" ?>>Công nghệ thông tin</option>
                            <option value="kinhte" <?php if (isset($_POST["nganh"]) && ($_POST["nganh"]) == "kinhte") echo "selected" ?>>Kinh tế</option>
                            <option value="khac" <?php if (isset($_POST["nganh"]) && ($_POST["nganh"]) == "khac") echo "selected" ?>>Ngành khác</option>
                        </select>
                    </td>
                </tr>
                <tr class="SV">
                    <td class="SV">Lớp:</td>
                    <td class="SV"><input type="text" name="lop" value="<?php if (isset($_POST["lop"])) echo $_POST["lop"]; ?>" /></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="show" value="HIỂN THỊ THÔNG TIN" /></td>
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
        <?php echo $inforGV[0]; ?>
    </div> -->

    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <!-- <h6 class="mb-0 pb-3"><span>Giảng viên</span><span>Sinh viên</span></h6> -->
                        <!-- <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" value="gv" /> -->
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <form action="" method="post" class="card-front">

                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Thông tin</h4>
                                            <input type="radio" name="dt" value="gv" <?php if ((isset($_POST["dt"]) && ($_POST["dt"]) == "gv") || !isset($_POST["dt"])) echo "checked" ?>>Giảng viên
                                            <input type="radio" name="dt" value="sv" <?php if (isset($_POST["dt"]) && ($_POST["dt"]) == "sv") echo "checked" ?>>Sinh Viên
                                            <div class="form-group">
                                                <input placeholder="Họ tên" required type="text" class="form-style" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
                                            </div>
                                            <div class="form-group mt-2" style="display: flex; justify-content: space-evenly; margin-top: 12px !important;">
                                                <label for="sex">Giới tính: </label>
                                                <div style="align-items: center;">
                                                    <input type="radio" name="sex" value="nam" <?php if ((isset($_POST["sex"]) && ($_POST["sex"]) == "nam") || !isset($_POST["sex"])) echo "checked" ?>>Nam
                                                </div>
                                                <div style="align-items: center;">
                                                    <input type="radio" name="sex" value="nu" <?php if (isset($_POST["sex"]) && ($_POST["sex"]) == "nu") echo "checked" ?>>Nữ
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input placeholder="Địa chỉ" class="form-style" required type="text" name="address" value="<?php if (isset($_POST["address"])) echo $_POST["address"]; ?>">
                                            </div>
                                            <div class="form-group GV" style="display: flex; justify-content: space-evenly; margin-top: 12px;">
                                                <label for="sex" class="GV">Trình độ: </label>
                                                <div class="GV" style="align-items: center;">
                                                    <input type="radio" name="td" value="cunhan" <?php if ((isset($_POST["td"]) && ($_POST["td"]) == "cunhan") || !isset($_POST["td"])) echo "checked" ?>>Cử nhân
                                                </div>
                                                <div style="align-items: center;">
                                                    <input type="radio" name="td" value="thacsi" <?php if (isset($_POST["td"]) && ($_POST["td"]) == "thacsi") echo "checked" ?>>Thạc sĩ
                                                </div>
                                                <div style="align-items: center;">
                                                    <input type="radio" name="td" value="tiensi" <?php if (isset($_POST["td"]) && ($_POST["td"]) == "tiensi") echo "checked" ?>>Tiến sĩ
                                                </div>
                                            </div>
                                            <div class="form-group SV" style="display: flex; justify-content: space-evenly; margin-top: 12px;">
                                                <label class="SV" for="nganh">Ngành: </label>
                                                <select class="SV" name="nganh" style="border: none; outline: none;">
                                                    <option value="cntt" <?php if ((isset($_POST["nganh"]) && ($_POST["nganh"]) == "cntt") || !isset($_POST["nganh"])) echo "selected" ?>>Công nghệ thông tin</option>
                                                    <option value="kinhte" <?php if (isset($_POST["nganh"]) && ($_POST["nganh"]) == "kinhte") echo "selected" ?>>Kinh tế</option>
                                                    <option value="khac" <?php if (isset($_POST["nganh"]) && ($_POST["nganh"]) == "khac") echo "selected" ?>>Ngành khác</option>
                                                </select>
                                            </div>
                                            <div class="form-group SV" style="margin-top: 12px;">
                                                <input class="form-style" placeholder="Lớp" type="text" name="lop" value="<?php if (isset($_POST["lop"])) echo $_POST["lop"]; ?>" />
                                            </div>
                                            <input type="submit" href="#" name="show" class="btn mt-4"></input>
                                            <!-- <div id="result"> -->
                                            <!-- <?php echo $infor[0]; ?> -->
                                            <!-- </div> -->
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

    <script>
        $(document).ready(function() {
            var checkedValue = $('input[type=radio][name="dt"]:checked').val();
            if (checkedValue == "gv") {
                $(".SV").hide();
                $(".GV").show();
            } else {
                $(".GV").hide();
                $(".SV").show();
            }
            $('input[type=radio][name=dt]').change(function() {
                if (this.value == 'gv') {
                    $(".SV").hide();
                    $(".GV").show();
                } else if (this.value == 'sv') {
                    $(".GV").hide();
                    $(".SV").show();
                }
            });
        });
        // const checkbox = document.getElementById('reg-log');

        // checkbox.addEventListener('change', (event) => {
        //     if (event.currentTarget.checked) {
        //         checkbox.value = "sv";
        //         alert('checked' + checkbox.value);

        //     } else {
        //         checkbox.value = "gv";
        //         alert('not checked' + checkbox.value);
        //     }
        // });
    </script>
</body>

</html>