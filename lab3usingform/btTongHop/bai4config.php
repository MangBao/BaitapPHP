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
    <?php
        $hoten = $_REQUEST['hoten'];
        $diachi = $_REQUEST['diachi'];
        $sdt = $_REQUEST['sdt'];
        $gt = $_REQUEST['sex'];
        $qt = $_REQUEST['qt'];
        // $mon = 
        $note = $_REQUEST['note'];

        if(isset($sdt)) {
            $sdt = trim($sdt);
        }

        $susscess = "Bạn đã đăng nhập thành công, dưới đây là thông tin của bạn 😁";
        $error = "Đăng nhập thất bại, dường như bạn thiếu gì đó!! ☹️";
    ?>
    <div class="content">
        <form action="bai4config.php"  method="post">
            <div class="title">
                <?php
                if(empty($_POST["hoten"]) || empty($_POST["diachi"]) || empty($_POST["sdt"]) || empty($_POST["mon"]) || !is_numeric($_POST["sdt"])){
                    echo $error;
                }
                else echo $susscess;
                ?>
            </div>
            <hr style="width: 70%;"/>
            
            <ul>
                <?php
                    if (empty($_POST["hoten"])) {  
                        echo "<span style='text-align: center; color:green; margin-left: 38%;' color='green'>Vui lòng nhập tên! </span>";           
                    }
                ?>
                <li>
                    <label for="pheptinh">Họ tên: </label>                    
                    <div>
                        <label for="pheptinh"><?php echo $hoten; ?></label>
                    </div>
                </li>
                
                <?php
                    if (empty($_POST["diachi"])) {  
                        echo "<span style='text-align: center; color:green; margin-left: 38%;' color='green'>Vui lòng nhập địa chỉ! </span>";           
                    }
                ?>
                <li>
                    <label for="diachi">Địa chỉ: </label>
                    <div>
                        <label for="pheptinh"><?php echo $diachi; ?></label>
                    </div>
                </li>
                
                <?php
                    if (empty($_POST["sdt"])) {  
                        echo "<span style='text-align: center; color:green; margin-left: 38%;' color='green'>Vui lòng nhập số điện thoại! </span>";           
                    }
                    if (!is_numeric($_POST["sdt"])){
                        echo "<span style='text-align: center; color:green; margin-left: 38%;' color='green'>Vui lòng nhập số, không phải chữ! </span>";
                    }
                ?>
                <li>
                    <label for="sdt">Số điện thoại: </label>
                    <div>
                        <label for="pheptinh"><?php echo $sdt; ?></label>
                    </div>
                </li>

                <li>
                    <label for="sex">Giới tính: </label>
                    <div>                    
                        <label for="pheptinh"><?php if ($gt == 'm')  echo 'Nam'; else echo 'Nữ'; ?></label>                    
                    </div>
                </li>

                <li>
                    <label for="qt">Quốc tịch: </label>
                    <div>
                        <?php 
                            switch($qt){
                                case "vn":
                                    echo "<label>Việt Nam</label>";
                                    break;
                                case "lao":
                                    echo "<label>Lào</label>";
                                    break;
                                case "thai":
                                    echo "<label>Thái Lan</label>";
                                    break;
                                case "trung":
                                    echo "<label>Trung Quốc</label>";
                                    break;
                                case "cam":
                                    echo "<label>Campuchia</label>";
                                    break;
                                default;
                            }
                        ?>
                    </div>
                </li>
                
                <?php
                    if (empty($_POST["mon"])) {  
                        echo "<span style='text-align: center; color:green; margin-left: 38%;' color='green'>Vui lòng chọn môn học! </span>";           
                    }
                ?>
                <li>
                    <label for="mon">Các môn đã học: </label>
                    <div>                        
                        <?php
                            if (isset($_REQUEST['mon'])) {
                                foreach($_REQUEST['mon'] as $value) {
                                    //Xử lý các phần tử được chọn
                                    echo "<label>$value, </label>";
                                }
                            }
                        ?>
                    </div>
                </li>
                
                
                <li>
                    <label for="note">Ghi chú: </label>
                    <div>                        
                        <?php
                            echo "<label>$note</label>";
                        ?>                        
                    </div>
                </li>
            </ul>
            <div class="tinh" style="padding-bottom: 8px;">
                <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
            </div>
        </form>
    </div>
</body>

</html>