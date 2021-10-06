<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xử lý n</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/form.css">
</head>

<body>
    <?php

    function isFloat($n)
    {
        return $n === +$n && $n !== ($n | 0);
    }

    function Show($n, &$arr, &$result)
    {
        for ($i = 0; $i < $n; $i++) {
            $x = rand(-200, 200);
            $arr[$i] = $x;
        }

        $result = "a) Mảng được tạo là:" . implode(" ", $arr) . "&#13;&#10;";
    }

    function sortAsc(&$arr, &$result)
    {
        asort($arr);
        $sort = "b) Sắp xếp tăng dần: " . implode("  ", $arr) . "\n";
        $result .= $sort;
    }

    function addNum($pos, $x, &$arr, &$result)
    {

        //thêm 1 số vào mảng
        array_splice($arr, $pos, 0, $x);
        $xetpos = $pos + 1;
        $addnum = "c) Mảng sau khi thêm số $x vào vị trí $xetpos: " . implode(" ", $arr) . "\n";
        $result .= $addnum;
    }

    function sapXep($pos, $n, $x, $arr, &$result)
    {
        $arr1 = array();
        for ($i = 0; $i < $pos; $i++) {
            $arr1[$i] = $arr[$i];
        }
        asort($arr1);

        $arr2 = array();
        for ($i = $n; $i > $pos; $i--) {
            $arr2[$i] = $arr[$i];
        }
        //sắp xếp giảm dần
        arsort($arr2);

        array_push($arr1, $x);
        $arr = $arr1 + $arr2;
        $sort = "d) Mảng sau sắp xếp: " . implode(" ", $arr);
        $result .= $sort;
    }

    if (isset($_POST['n'])) {
        $n = $_POST['n'];
        if (is_numeric($n)) {
            $tb = $result = "";
            $x = rand(-100, 100);
            $err = "";

            if ($n < 0) {
                $err = "<font color='red'>Không được nhập số âm! </font>";
            } elseif (isFloat(+$n)) {
                $err = "<font color='red'>Không được nhập số thực! </font>";
            } else {
                if (isset($_POST['tinh'])) {    //Tạo mảng có n phần tử, các phần tử có giá trị [-200,200]
                    $arr = array();
                    Show($n, $arr, $result);
                    sortAsc($arr, $result);
            
                    $pos = rand(0, $n);
                    addNum($pos, $x, $arr, $result);
                    sapXep($pos, $n, $x, $arr, $result);
                }
            }
        } else{
            $err = "<font color='red'>Vui lòng nhập vào số tự nhiên! </font>";
        }
    } else
        $n = 0;
    
    ?>


    <form action="" method="POST">
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
                                                <h4 class="mb-4 pb-3">Xử lý số n</h4>
                                                <span><?php echo $err; ?></span>
                                                <div class="form-group">
                                                    <input type="text" name="n" class="form-style" placeholder="Nhập vào N" value="<?php echo $n ?>">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <input class="btn mt-4" type="submit" name="tinh" value="Show" />
                                                <div class="form-group mt-2">
                                                    <textarea class="form-style" style="height: 220px;" cols="70" rows="10" placeholder="Kết quả" name="ketqua"><?php echo $result; ?></textarea>
                                                    <i class="input-icon uil uil-lock-alt"></i>
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