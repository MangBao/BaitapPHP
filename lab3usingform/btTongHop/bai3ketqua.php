
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html{
            height: 100%;
        }
        body{
            display: flex;
            justify-content: center;
            margin-top: 220px;
            background: linear-gradient(113deg, #82f3b5, #ff9ba3 50%, #fdffa3 85%, #ffc894);
        }
        .content{
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
        .title{
            font-size: 26px;
            font-weight: 700;
            padding-top: 10px;
        }
        .title, .tinh{
            text-align: center;
        }
        
        ul{
            list-style: none;  
            padding: 0;          
        }
        li{
            display: flex;
            align-items: center;   
            justify-content: space-between;
            margin-bottom: 6px;
            padding: 0 26px;
        }
        input{
            outline-style: none;
        }
        label, .title{
            color: #ba0202;
        }
        .tinh>input{
            font-weight: 600;
            font-size: 13.5px;
            border-radius: 5px;
            cursor: pointer;
            color: #ba0202;
            margin-bottom: 10px;
        }
        label{
            font-weight: 600;
        }
        li>div{
            width: 230px;
        }
    </style>
</head>
<body>
    <?php
        $a = $_REQUEST['sothunhat'];
        $b = $_REQUEST['sothuhai'];
        $c = $_REQUEST['pheptinh'];
        if(isset($a)) {
            $a = trim($a);
        }
        else {
            $a = 0;
        }

        if(isset($b)){
            $b = trim($b);
        }
        else {
            $b = 0;
        }

        if(isset($_POST['tinh'])){
            if (is_numeric($a) && is_numeric($b)){
                switch($c){
                    case "cong":
                        $d = ($a + $b);
                        break;
                    case "tru":
                        $d = ($a - $b);
                        break;
                    case "nhan":
                        $d = ($a * $b);
                        break;
                    case "chia":
                        $d = ($a / $b);
                        break;
                    default;
                }
            }
            else {
                $d = "";
            }
        }
        else {
            $d=0;
        }
    ?>
    <div class="content">
        <form action="bai3.php" class="content" method="post">
            <div class="title">Phép tính trên 2 số</div>
            <hr style="width: 70%;"/>
            <ul>
                
                <li style="display: block;">
                    <label for="pheptinh">Chọn phép tính: </label>
                    <label style="margin-left: 80px;" for="">
                    <?php 
                        if(isset($_REQUEST['pheptinh'])){
                            switch($_REQUEST['pheptinh']){
                                case "cong":
                                    echo "Cộng";
                                    break;
                                case "tru":
                                    echo "Trừ";
                                    break;
                                case "nhan":
                                    echo "Nhân";
                                    break;
                                case "chia":
                                    echo "Chia";
                                    break;
                            }
                        }
                    ?>
                    </label>                    
                </li>
                <?php
                    if (empty($_POST["sothunhat"]) || !is_numeric($_POST["sothunhat"])) {  
                        echo "<span style='text-align: center; color:green; margin-left: 38%;' color='green'>Vui lòng nhập số! </span>";           
                    }
                ?>
                <li>
                    <label for="sothunhat">Số thứ nhất: </label>
                    <div>
                        <input type="text" name="sothunhat" value="<?php echo $a; ?>">
                    </div>
                </li>
                <?php
                    if (empty($_POST["sothuhai"]) || !is_numeric($_POST["sothuhai"])) {  
                        echo "<span style='text-align: center; color:green; margin-left: 38%;' color='green'>Vui lòng nhập số! </span>";           
                    }
                ?>
                <li>
                    <label for="sothuhai">Số thứ hai: </label>
                    <div>
                        <input type="text" name="sothuhai" id="" value="<?php echo $b; ?>">
                    </div>
                </li>
                
                <li>
                    <label for="sothuhai">Kết quả: </label>
                    <div>
                        <input type="text" name="sothuhai" id="" value="<?php echo $d; ?>">
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