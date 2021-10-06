<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra xổ số kiến thiết</title>
    <link rel="stylesheet" href="../../assets/css/xoso.css">
</head>

<body>
    <!-- Đoạn này em xin phép được tận dụng lại bài xổ số đã code trước đó ở file xoso.php ở folder "bttrenlop" -->
    <?php require_once '../../bttrenlop/xoso.php' ?>
    
    <h1 style=" text-align: center;
                font-size: 2.6rem;
                font-weight: 600;
                font-family: cursive;
                margin-top: 10px;">
        <?php echo $notifi ?>
    </h1>

    <table class="kqmb extendable kqtinh">
        <tbody>
            <tr class="g8">
                <td class="txt-giai"><?php echo $title8 ?></td>
                <td class="v-giai number"><span data-nc="2" class="v-g8" style="color: red;"><?php echo $g8 ?></span></td>
            </tr>
            <tr class="bg_ef">
                <td class="txt-giai"><?php echo $title7 ?></td>
                <td class="v-giai number"><span data-nc="3" class="v-g7 "><?php echo $g7 ?></span></td>
            </tr>
            <tr>
                <td class="txt-giai"><?php echo $title6 ?></td>
                <td class="v-giai number">
                    <span data-nc="4" class="v-g6-0 "><?php echo $g6[0] ?></span>
                    <span data-nc="4" class="v-g6-1 "><?php echo $g6[1] ?></span>
                    <span data-nc="4" class="v-g6-2 "><?php echo $g6[2] ?></span>
                </td>
            </tr>
            <tr class="bg_ef">
                <td class="txt-giai"><?php echo $title5 ?></td>
                <td class="v-giai number"><span data-nc="4" class="v-g5 "><?php echo $g5 ?></span></td>
            </tr>
            <tr class="g4">
                <td class="titgiai"><?php echo $title4 ?></td>
                <td class="v-giai number">
                    <span data-nc="5" class="v-g4-0 "><?php echo $g4[0] ?></span>
                    <span data-nc="5" class="v-g4-1 "><?php echo $g4[1] ?></span>
                    <span data-nc="5" class="v-g4-2 "><?php echo $g4[2] ?></span>
                    <span data-nc="5" class="v-g4-3 "><?php echo $g4[3] ?></span>
                    <span data-nc="5" class="v-g4-4 "><?php echo $g4[4] ?></span>
                    <span data-nc="5" class="v-g4-5 "><?php echo $g4[5] ?></span>
                </td>
            </tr>
            <tr class="bg_ef">
                <td class="txt-giai"><?php echo $title3 ?></td>
                <td class="v-giai number">
                    <span data-nc="5" class="v-g3-0 "><?php echo $g3[0] ?></span>
                    <span data-nc="5" class="v-g3-1 "><?php echo $g3[1] ?></span>
                </td>
            </tr>
            <tr>
                <td class="txt-giai"><?php echo $title2 ?></td>
                <td class="v-giai number"><span data-nc="5" class="v-g2 "><?php echo $g2 ?></span></td>
            </tr>
            <tr class="bg_ef">
                <td class="txt-giai"><?php echo $title1 ?></td>
                <td class="v-giai number"><span data-nc="5" class="v-g1 "><?php echo $g1 ?></span></td>
            </tr>
            <tr class="gdb db">
                <td class="txt-giai"><?php echo $titleDB ?></td>
                <td class="v-giai number"><span data-nc="6" class="v-gdb " style="color: red;"><?php echo $gDB ?></span></td>
            </tr>
        </tbody>
    </table>

    <form onload="" action="" method="get" style="text-align: center; margin-top: 50px;">
        <input type="text" name="giai" id="giai">
        <input id="myBtn" type="button" style="cursor: pointer;" value="Tra cứu">
        <div style="margin-top: 10px; color: red; font-size: large;" id="notifi"></div>
    </form>
    <?php
        // Lưu tất cả giải thưởng và chuyển về JSON để qua javascript xử lý
        $dsGiai = array("gDB" => $gDB, "g1" => $g1, "g2" => $g2, "g3" => $g3, "g4" => $g4, "g5" => $g5, "g6" => $g6, "g7" => $g7, "g8" => $g8);
        $dsGiaiJSON = json_encode($dsGiai);
    ?>
    <!-- 
        * Đoạn kiểm tra giải thưởng em xin phép dùng JS và biến đã lưu ở PHP 
        * vì em dùng hàm kiểm tra ở PHP thì phải sử dụng form
        * mà mỗi lần nhấn submit thì nó sẽ load lại trang thì số sẽ random lại
        * như vậy thì giải thưởng của em nhập vào input để kiểm tra giải 
        * sẽ bị trật với giá trị ban đầu của giải đã tạo random ở PHP trước đó.
    -->
    <script>
        // var g8 = Number("<?php echo $g8; ?>");
        var myPrize;
        var giaithuong = <?php echo $dsGiaiJSON; ?>;
        // document.write(giaithuong.g3[0]);
        document.getElementById("myBtn").addEventListener("click", function() {
            myPrize = document.getElementById("giai");
            // document.getElementById('notifi').innerText = "Chúc mừng bạn đã trúng giải" + g8 + " -- " + myPrize.value;
            if (giaithuong.gDB == myPrize.value) {
                document.getElementById('notifi').innerText = "Chúc mừng bạn đã trúng giải đặc biệt là: " + myPrize.value;
            } else if (giaithuong.g1 == myPrize.value) {
                document.getElementById('notifi').innerText = "Chúc mừng bạn đã trúng giải nhất là: " + myPrize.value;
            } else if (giaithuong.g2 == myPrize.value) {
                document.getElementById('notifi').innerText = "Chúc mừng bạn đã trúng giải nhì là: " + myPrize.value;
            } else if (giaithuong.g3[0] == myPrize.value || giaithuong.g3[1] == myPrize.value) {
                document.getElementById('notifi').innerText = "Chúc mừng bạn đã trúng giải ba là: " + myPrize.value;
            } else if (giaithuong.g4[0] == myPrize.value || giaithuong.g4[1] == myPrize.value || giaithuong.g4[2] == myPrize.value ||
                giaithuong.g4[3] == myPrize.value || giaithuong.g4[4] == myPrize.value || giaithuong.g4[5] == myPrize.value) {
                document.getElementById('notifi').innerText = "Chúc mừng bạn đã trúng giải tư là: " + myPrize.value;
            } else if (giaithuong.g5 == myPrize.value) {
                document.getElementById('notifi').innerText = "Chúc mừng bạn đã trúng giải năm là: " + myPrize.value;
            } else if (giaithuong.g6[0] == myPrize.value || giaithuong.g6[1] == myPrize.value || giaithuong.g6[2] == myPrize.value) {
                document.getElementById('notifi').innerText = "Chúc mừng bạn đã trúng giải sáu là: " + myPrize.value;
            } else if (giaithuong.g7 == myPrize.value) {
                document.getElementById('notifi').innerText = "Chúc mừng bạn đã trúng giải bảy là: " + myPrize.value;
            } else if (giaithuong.g8 == myPrize.value) {
                document.getElementById('notifi').innerText = "Chúc mừng bạn đã trúng giải tám là: " + myPrize.value;
            } else {
                document.getElementById('notifi').innerText = "Chúc bạn may mắn lần sau!!!"
            }
        });
    </script>
</body>

</html>