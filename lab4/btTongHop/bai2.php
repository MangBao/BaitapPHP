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
    <link rel="stylesheet" href="../../assets/css/form.css">
</head>

<body>
    <?php
    $tong = 0;
    
    // $c = $_REQUEST['tinh'];
    if (isset($_POST['mang'])) {
        $a = explode(",", $_POST['mang']);
        $b = implode(",", $a);
        if (isset($_POST['tinh'])) {
            $tong = array_sum($a);
        }
    } else $a = 0;
    ?>

    <form action="" method="POST">
        <!-- <div>
            <h1 style="text-align: center;">Nhập và tính trên dãy số</h1>
            <div style="margin-bottom: 5px;">
                <span>Nhập dãy số: </span>
                <input type="text" name="mang" value="<?php echo $a ?>"><span style="color: red;">(*)</span>
            </div>
            <div style="text-align: center; margin-bottom: 5px;">
                <input type="submit" name="tinh" value="Tổng dãy số">
            </div>
            <div style="margin-bottom: 5px;">
                <span>Tổng dãy số: </span>
                <input type="text" name="kq" readonly value="<?php echo $tong ?>">
            </div>
            <span style="color: red;">(*)</span><span>Các số được nhập cách nhau bằng dấu ","</span>
        </div> -->
        <div class="section">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Nhập và tính trên dãy số</h4>
                                                <!-- <span><?php echo $err; ?></span> -->
                                                <div class="form-group">
                                                    <input style="width: 70%;" type="text" name="mang" class="form-style" placeholder="Nhập vào mảng" value="<?php echo $b ?>">
                                                    <span style="color: red;">(*)</span>
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <input class="btn mt-4" type="submit" name="tinh" value="Tổng dãy số" />
                                                <div class="form-group mt-2">
                                                    <input type="text" class="form-style" name="kq" placeholder="Tổng dãy số" readonly value="<?php echo $tong ?>">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                <span style="color: red; ">(*)</span><span>Các số được nhập cách nhau bằng dấu ","</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</body>

</html>