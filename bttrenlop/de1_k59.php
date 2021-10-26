<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            background-color: #92ffee91;
            width: 700px;
            border-radius: 8px;
            margin: 20px auto;
        }

        legend {
            background-color: #5f32d5;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
        }

        /* input {
            margin: 5px;
        } */
        .row_1, .row_2, .row_3 {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <div style="text-align: center;">
            <h2>HIỂN THỊ THÔNG TIN SINH VIÊN</h2>
            <select class="SV" name="nganh" style="border: none; outline: none;">
                <option value="cntt" <?php if ((isset($_POST["nganh"]) && ($_POST["nganh"]) == "cntt") || !isset($_POST["nganh"])) echo "selected" ?>>Công nghệ thông tin</option>
                <option value="kinhte" <?php if (isset($_POST["nganh"]) && ($_POST["nganh"]) == "kinhte") echo "selected" ?>>Kinh tế</option>
                <option value="khac" <?php if (isset($_POST["nganh"]) && ($_POST["nganh"]) == "khac") echo "selected" ?>>Ngành khác</option>
            </select>
        </div>
        <fieldset>
            <legend>Thông tin sinh viên</legend>
            <div class="content">
                <div class="row_1">
                    <div>
                        <label for="">Mã số sinh viên: </label>
                        <input type="text" name="mssv" value="<?php if (isset($_POST['mssv'])) echo $_POST['mssv']; ?>" required /></td>
                    </div>
                    <div>
                        <label for="">Họ tên: </label>
                        <input type="text" name="hoten" value="<?php if (isset($_POST['hoten'])) echo $_POST['hoten']; ?>" required /></td>
                    </div>
                </div>
                <div class="row_2">
                    <div>
                        <label for="">Giới tính: </label>
                        <input type="text" name="gt" value="<?php if (isset($_POST['gt'])) echo $_POST['ten']; ?>" required /></td>
                    </div>
                    <div>
                        <label for="">Lớp: </label>
                        <input required type="text" name="lop" value="<?php if (isset($_POST["lop"])) echo $_POST["lop"]; ?>" />
                    </div>
                </div>
                <div class="row_3">
                    <div>
                        <label for="">Ngày sinh: </label>
                        <input style="cursor: pointer;" type="date" name="birth" value="<?php if (isset($_POST['birth'])) echo $_POST['birth']; ?>" required /></td>
                    </div>
                    <div>
                        <label for="">Địa chỉ: </label>
                        <input required type="text" name="diachi" value="<?php if (isset($_POST['diachi'])) echo $_POST['diachi']; ?>" /></td>
                    </div>
                </div>
            </div>

        </fieldset>
    </form>
</body>

</html>