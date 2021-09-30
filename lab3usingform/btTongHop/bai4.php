<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép tính</title>
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
            width: 460px;
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
            width: 280px;
        }
    </style>
</head>

<body>

    <div class="content">
        <form action="bai4config.php"  method="post">
            <div class="title">Enter your information</div>
            <hr style="width: 70%;"/>
            <ul>
                <li>
                    <label for="pheptinh">Họ tên: </label>                    
                    <div>
                        <input type="text" name="hoten" value="<?php if (isset($_POST['hoten'])) echo $_POST['hoten']; ?>"/>
                    </div>
                </li>

                <li>
                    <label for="diachi">Địa chỉ: </label>
                    <div>
                        <input type="text" name="diachi" value="<?php if (isset($_POST['diachi'])) echo $_POST['diachi']; ?>">
                    </div>
                </li>

                <li>
                    <label for="sdt">Số điện thoại: </label>
                    <div>
                        <input type="text" name="sdt" id="" value="<?php if (isset($_POST['sdt']))  echo $_POST['sdt']; ?>">
                    </div>
                </li>

                <li>
                    <label for="sex">Giới tính: </label>
                    <div>
                        <input type="radio" name="sex" value="m" checked 
                        <?php if (isset($_POST['sex']) && $_POST['sex'] == 'm')  echo 'checked = "checked"'; ?>> Nam
                        <input type="radio" name="sex" value="f" 
                        <?php if (isset($_POST['sex']) && $_POST['sex'] == 'f')  echo 'checked = "checked"'; ?>> Nữ
                    </div>
                </li>

                <li>
                    <label for="qt">Quốc tịch: </label>
                    <div>
                        <select name="qt" id="">
                            <option value="vn">Việt Nam</option>
                            <option value="lao">Lào</option>
                            <option value="cam">Cam-pu-chia</option>
                            <option value="thai">Thái Lan</option>
                            <option value="trung">Trung Quốc</option>
                        </select>
                    </div>
                </li>

                <li>
                    <label for="mon">Các môn đã học: </label>
                    <div>
                        <input type="checkbox" name="mon[]" id="" value="PHP & MySQL">PHP & MySQL
                        <input type="checkbox" name="mon[]" id="" value="C#">C#
                        <input type="checkbox" name="mon[]" id="" value="XML">XML
                        <input type="checkbox" name="mon[]" id="" value="Python">Python
                    </div>
                </li>

                <li>
                    <label for="note">Ghi chú: </label>
                    <div>
                        <textarea name="note" id="" cols="30" rows="5">
                            <?php
                                if (isset($_POST['note']))  echo $_POST['note'];
                            ?>
                        </textarea>
                    </div>
                </li>
            </ul>
            <div class="tinh">
                <input type="submit" name="gui" value="Gửi" >
                <input type="submit" name="huy" value="Hủy" >
            </div>
        </form>
    </div>
</body>

</html>