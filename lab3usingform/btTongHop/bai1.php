<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diện tích HCN</title>
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
            width: 300px;
            height: 160px;
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
    </style>
</head>

<body>
    <?php
        $err = "";
        if(isset($_POST['chieudai'])) {
            $chieudai = trim($_POST['chieudai']);
        }
        else {
            $chieudai = 0;
        }

        if(isset($_POST['chieurong'])){
            $chieurong = trim($_POST['chieurong']);
        }
        else {
            $chieurong = 0;
        }

        if(isset($_POST['tinh'])){
            if (is_numeric($chieudai) && is_numeric($chieurong)){
                $dientich = $chieudai * $chieurong;
            }
            else {
                $dientich="";
            }
        }
        else {
            $dientich=0;
        }
    ?>
    <div class="content">
        <form action="bai1.php" class="content" method="post">
            <div class="title">Diện tích hình chữ nhật</div>
            <ul>
                <?php 
                    if (!is_numeric($chieudai) || !is_numeric($chieurong)) 
                        echo "<span style='text-align: center; color:green; margin-left: 28%;' color='green'>Vui lòng nhập vào số! </span>";
                ?>
                <li>
                    <label for="chieudai">Chiều dài: </label>
                    <input type="text" name="chieudai" value="<?php echo $chieudai; ?>">
                </li>
                <li>
                    <label for="chieurong">Chiều rộng: </label>
                    <input type="text" name="chieurong" value="<?php echo $chieurong; ?>">
                </li>
                <li>
                    <label for="dientich">Diện tích: </label>
                    <input type="text" name="" id="" disabled value="<?php echo $dientich; ?>">
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