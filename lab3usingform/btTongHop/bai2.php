<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán tiền điện</title>
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
            width: 225px;
        }
    </style>
</head>

<body>
    <?php
        define("dongia", 20000);

        if(isset($_POST['ten'])) {
            $ten = trim($_POST['ten']);
        }

        if(isset($_POST['chisocu'])) {
            $chisocu = trim($_POST['chisocu']);
        }
        else {
            $chisocu = 0;
        }

        if(isset($_POST['chisomoi'])){
            $chisomoi = trim($_POST['chisomoi']);
        }
        else {
            $chisomoi = 0;
        }

        if(isset($_POST['tinh'])){
            if (is_numeric($chisocu) && is_numeric($chisomoi) && !empty($ten)){
                $thanhtoan = ($chisomoi - $chisocu) * dongia;
            }
            else {
                $thanhtoan="";
            }
        }
        else {
            $thanhtoan = 0;
        }
    ?>
    <div class="content">
        <form action="bai2.php" class="content" method="post">
            <div class="title">Thanh toán tiền điện</div>
            <hr style="width: 70%;"/>
            <ul>
                <?php
                    if (empty($_POST["ten"])) {  
                        echo "<span style='text-align: center; color:green; margin-left: 38%;' color='green'>Vui lòng nhập tên! </span>";           
                    }
                ?>                
                <li>
                    <label for="ten">Tên chủ hộ: </label>
                    <div>
                        <input type="text" name="ten" value="<?php echo $ten; ?>">
                    </div>
                </li>
                <?php
                    if (!is_numeric($chisocu)) {  
                        echo "<span style='text-align: center; color:green; margin-left: 38%;' color='green'>Vui lòng nhập số! </span>";           
                    }
                ?>   
                <li>                    
                    <label for="chisocu">Chỉ số cũ: </label>
                    <div>
                        <input type="text" name="chisocu" value="<?php echo $chisocu; ?>"> (Kw)
                    </div>
                </li>
                <?php
                    if (!is_numeric($chisomoi)) {  
                        echo "<span style='text-align: center; color:green; margin-left: 38%;' color='green'>Vui lòng nhập số! </span>";           
                    }
                ?>
                <li>
                    <label for="chisomoi">Chỉ số mới: </label>
                    <div>
                        <input type="text" name="chisomoi" value="<?php echo $chisomoi; ?>"> (Kw)
                    </div>
                </li>
                <li>
                    <label for="dongia">Đơn giá: </label>
                    <div>
                        <input type="text" name="dongia" disabled value="<?php echo dongia; ?>"> (VNĐ)
                    </div>
                </li>
                <li>
                    <label for="thanhtoan">Thanh toán: </label>
                    <div>
                        <input type="text" name="thanhtoan" value="<?php echo $thanhtoan; ?>"> (VNĐ)
                    </div>
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