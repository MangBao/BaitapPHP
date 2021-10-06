<?php
    $time = date_default_timezone_set("Asia/Ho_Chi_Minh"); 
    $date = date('d/m/Y');

    $notifi = "Xổ số kiến thiết Khánh Hòa $date.";

    $title8 = "Giải 8: ";
    for($i = 0; $i < 1; $i++){
        $a = rand(0, 99);
        if($a < 10){
            $a = "0$a";
        }
        $g8 = $a;
    }

    $title7 = "Giải 7: ";
    for($i = 0; $i < 1; $i++){
        $a = rand(0, 999);
        if($a < 100 && $a >= 10){
            $a = "0$a";
        } elseif ($a < 10){
            $a = "00$a";
        }
        $g7 = $a;        
    }

    $title6 = "Giải 6: ";
    $g6 = array();
    for($i = 0; $i < 3; $i++){
        $a = rand(0, 9999);
        if($a < 1000 && $a >= 100){
            $a = "0$a";
        } elseif ($a < 100 && $a >= 10){
            $a = "00$a";
        } elseif ($a < 10){
            $a = "000$a";
        }
        // $g6 = "$a";
        array_push($g6, $a);
    }

    $title5 = "Giải 5: ";
    for($i = 0; $i < 1; $i++){
        $a = rand(0, 9999);
        if($a < 1000 && $a >= 100){
            $a = "0$a";
        } elseif ($a < 100 && $a >= 10){
            $a = "00$a";
        } elseif ($a < 10){
            $a = "000$a";
        }
        $g5 = $a;
    }

    $title4 = "Giải 4: ";
    $g4 = array();
    for($i = 0; $i < 6; $i++){
        $a = rand(0, 99999);
        if($a < 10000 && $a >= 1000){
            $a = "0$a";
        }elseif ($a < 1000 && $a >= 100){
            $a = "00$a";
        } elseif ($a < 100 && $a >= 10){
            $a = "000$a";
        } elseif ($a < 10){
            $a = "0000$a";
        }
        array_push($g4, $a);
    }

    $title3 = "Giải 3: ";
    $g3 = array();
    for($i = 0; $i < 2; $i++){
        $a = rand(0, 99999);
        if($a < 10000 && $a >= 1000){
            $a = "0$a";
        }elseif ($a < 1000 && $a >= 100){
            $a = "00$a";
        } elseif ($a < 100 && $a >= 10){
            $a = "000$a";
        } elseif ($a < 10){
            $a = "0000$a";
        }
        array_push($g3, $a);
    }

    $title2 = "<br> Giải 2: ";
    for($i = 0; $i < 1; $i++){
        $a = rand(0, 99999);
        if($a < 10000 && $a >= 1000){
            $a = "0$a";
        }elseif ($a < 1000 && $a >= 100){
            $a = "00$a";
        } elseif ($a < 100 && $a >= 10){
            $a = "000$a";
        } elseif ($a < 10){
            $a = "0000$a";
        }
        $g2 = $a;
    } 

    $title1 = "Giải 1: ";
    for($i = 0; $i < 1; $i++){
        $a = rand(0, 99999);
        if($a < 10000 && $a >= 1000){
            $a = "0$a";
        }elseif ($a < 1000 && $a >= 100){
            $a = "00$a";
        } elseif ($a < 100 && $a >= 10){
            $a = "000$a";
        } elseif ($a < 10){
            $a = "0000$a";
        }
        $g1 = $a;
    }

    $titleDB = "Giải ĐB: ";
    for($i = 0; $i < 1; $i++){
        $a = rand(0, 999999);
        if($a < 100000 && $a >= 10000){
            $a = "0$a";
        } elseif($a < 10000 && $a >= 1000){
            $a = "00$a";
        }elseif ($a < 1000 && $a >= 100){
            $a = "000$a";
        } elseif ($a < 100 && $a >= 10){
            $a = "0000$a";
        } elseif ($a < 10){
            $a = "00000$a";
        }
        $gDB = $a;
    }
?>