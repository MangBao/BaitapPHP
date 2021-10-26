<style>
    input#ngaySinh {
        background-color: white;
    }

    input,
    checkbox,
    select {
        margin-bottom: 10px;
    }

    label {
        font-weight: bolder;
    }

    .checkform {
        display: flex;
        justify-content: center;
        margin-top: 1rem;

    }

    .content {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 20px;
        border-radius: 8px;
    }

    .title {
        padding-bottom: 1.5rem;
    }

    .form-group {
        display: flex;
        margin-bottom: 0.2rem;
        /* justify-content: center; */
        text-align: center;
        margin-top: 1.5rem;
    }

    .form-group1 {
        display: flex;
        /* justify-content: ; */
        align-items: center;
        margin-bottom: 0.2rem;
    }

    .shipper {
        border: none;
        outline: none;
        background-color: #eaecf4;
        border-radius: 6px;
        padding: 5px;
    }

    .comeback {
        border: none;
        outline: none;
        background-color: #eaecf4;
        border-radius: 6px;
        padding: 5px;

    }

    .comeback>a {
        text-decoration: none;
    }
</style>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        var fileupload = $("#Avatar");
        var image = $("#FileUpload");
        image.click(function() {
            fileupload.click();
        });
        fileupload.change(function() {
            var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
            document.getElementById("hinhAnh").value = fileName;
        });
    });
</script>
<div class="main_content_iner ">
    <div class="container-fluid p-0 ">
        <div class="row ">
            <div class="col-lg-12">
                <div class="checkform">
                    <div class="content">
                        <h3 style="text-align: center;" class="title">THÔNG TIN NHÂN VIÊN</h3>

                        <form action="NhanVien/Save/<?php echo $data["nv"]['manv'] ?>" method="post" enctype="multipart/form-data">
                            <div class="form-horizontal">
                                <div class="form-group1" style="text-align: center;">

                                    <div class="col-md-12">
                                        <img style='width: 100px; height: 100px; border-radius: 30px; margin-bottom: 10px;' src='public/home/img/staf/<?php echo $data["nv"]['anh'] ?>' alt=''>
                                    </div>
                                </div>
                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Mã nhân viên: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="manv" readonly value="<?php echo $data["nv"]['manv'] ?>">
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Họ nhân viên: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" readonly name="honv" value="<?php echo $data["nv"]['honv'] ?>">
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Tên nhân viên: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" readonly name="tennv" value="<?php echo $data["nv"]['tennv'] ?>">
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Giới tính: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" readonly name="gioitinh" id="" value="<?php if ($data["nv"]['gioitinh'] == 1) echo "Nam";
                                                                                                                        else echo "Nữ"; ?>">
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Ngày sinh: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" readonly name="ngaysinh" value="<?php echo $data["nv"]['ngaysinh'] ?>">
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Địa chỉ: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" readonly name="diachi" value="<?php echo $data["nv"]['diachi'] ?>">
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Phòng ban: </label>
                                    <div class="col-md-7">
                                        <!-- <select name="phongban" id="" class="shipper"> -->
                                        <?php
                                        // foreach ($data['pb'] as $pb) {
                                        //     var_dump($pb) ;
                                        //     if ($data["nv"]["maphong"] == $pb['pb']) {
                                        //         $s = $pb['tenphong'];
                                        //     } else {
                                        //         $s = "";
                                        //     }

                                        // }
                                        echo "<input type='text' readonly name='phongban' value='" . $data["nv"]["tenphong"] . "' class = 'form-control' >";
                                        ?>
                                        <!-- </select> -->
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Chức vụ: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" readonly name="chucvu" value="<?php echo $data["nv"]['tenloai'] ?>">
                                    </div>
                                </div>

                                <div class="form-group" style="justify-content: center;">
                                    <!-- <div class="col-md-offset-2 col-md-6">
                                        <input type="submit" value="Lưu" class="btn btn-primary" />
                                    </div> -->
                                    <div class="col-md-offset-2 col-md-6">
                                        <button class="comeback btn btn-primary">
                                            <a href="javascript:window.history.back(-1);">Quay lại</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.datepicker').datepicker({
            dateFormat: "mm/dd/yy",
            changeMonth: true,
            changeYear: true,
            yearRange: "-60:+0"
        });

    });
</script>