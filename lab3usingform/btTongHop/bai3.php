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
            width: 230px;
        }
    </style>
</head>

<body>

    <div class="content">
        <form action="bai3ketqua.php" class="content" method="post">
            <div class="title">Phép tính trên 2 số</div>
            <hr style="width: 70%;"/>
            <ul>
                <li style="display: block;">
                    <label for="pheptinh">Chọn phép tính: </label>
                    <input style="margin-left: 18px;" type="radio" name="pheptinh" value="cong" checked <?php
                                                                                                        if (isset($_POST['pheptinh']) && $_POST['pheptinh'] == 'cong') echo 'checked ="checked"';
                                                                                                        ?> />
                    <label for="">Cộng</label>
                    <input style="margin-left: 10px;" type="radio" name="pheptinh" value="tru" <?php
                                                                                                if (isset($_POST['pheptinh']) && $_POST['pheptinh'] == 'tru') echo 'checked ="checked"';
                                                                                                ?> />
                    <label for="">Trừ</label>
                    <input style="margin-left: 10px;" type="radio" name="pheptinh" value="nhan" <?php
                                                                                                if (isset($_POST['pheptinh']) && $_POST['pheptinh'] == 'nhan') echo 'checked ="checked"';
                                                                                                ?> />
                    <label for="">Nhân</label>
                    <input style="margin-left: 10px;" type="radio" name="pheptinh" value="chia" <?php
                                                                                                if (isset($_POST['pheptinh']) && $_POST['pheptinh'] == 'chia') echo 'checked ="checked"';
                                                                                                ?> />
                    <label for="">Chia</label>
                </li>

                <li>
                    <label for="sothunhat">Số thứ nhất: </label>
                    <div>
                        <input type="text" name="sothunhat" value="<?php if (isset($_POST['sothunhat'])) echo $_POST['sothunhat']; ?>">
                    </div>
                </li>

                <li>
                    <label for="sothuhai">Số thứ hai: </label>
                    <div>
                        <input type="text" name="sothuhai" id="" value="<?php if (isset($_POST['sothuhai']))  echo $_POST['sothuhai']; ?>">
                    </div>
                </li>

            </ul>
            <div class="tinh">
                <input type="submit" name="tinh" value="Tính" class="btn btn-sm animated-button victoria-one">
            </div>
        </form>
    </div>
</body>

</html>