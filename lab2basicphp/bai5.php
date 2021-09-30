<h4>Bài 5:</h4>
<?php
    require_once "../lab2basicphp/bai1.php";

    function openWriteFile($p, $n) {
        if(file_exists($p)){
            // echo "File ton tai";
            $fp = @fopen($p, "a+");

            if(!$fp){
                echo "Mở file lỗi";
            }else{
                $data = $n." ";
                fwrite($fp, $data);
                fclose($fp);
            }
        }
        return $fp;
    }

    $numRand = rand(-100,100);
    $path = "../assets/other/soNT.txt";

    if(checkSNT($numRand)){
        // echo "La so nguyen to";
        openWriteFile($path, $numRand);
        echo "$numRand Là số nguyên tố, và đã được ghi vào file soNT.txt";


    } else {
        echo "$numRand Không phải là số nguyên tố";
    }

?>