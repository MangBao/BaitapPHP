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
<div class="main_content_iner ">
    <div class="container-fluid p-0 ">
        <div class="row ">
            <div class="col-lg-12">
                <div class="checkform">
                    <div class="content">
                        <h3 style="text-align: center;" class="title">THÊM NHÂN VIÊN MỚI</h3>

                        <form action="NhanVien/SaveCreate" method="post" enctype="multipart/form-data">
                            <div class="form-horizontal">
                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Mã nhân viên: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="manv" value="<?php echo $data['manv']; ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Họ nhân viên: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" required name="honv" >                                
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Tên nhân viên: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" required name="tennv">
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Giới tính: </label>
                                    <div class="col-md-7">
                                        <div class="checkbox" style="width: 475px;">
                                            Nam <input type="radio" required name="gioitinh" id="" value="1" checked> &nbsp;
                                            Nữ <input type="radio" required name="gioitinh" id="" value="0">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Ngày sinh: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" required name="ngaysinh" placeholder="Năm-Tháng-Ngày | vd: 2000-01-13">
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Ảnh nhân viên: </label>
                                    <div class="col-md-7">
                                        <input required type="file" name="anh">
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Địa chỉ: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" required name="diachi">
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Phòng ban: </label>
                                    <div class="col-md-7">
                                        <select name="phongban" id="" class="shipper">
                                            <option value="0" class="form-control">Chưa có</option>
                                            <?php
                                            foreach ($data['pb'] as $pb) {

                                                echo '<option value="' . $pb['maphong'] . '" class = "form-control">' . $pb['tenphong'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Chức vụ: </label>
                                    <div class="col-md-7">
                                        <select name="chucvu" id="" class="shipper">
                                            <option value="0" class="form-control">Chưa có</option>
                                            <?php
                                            foreach ($data['cv'] as $cv) {

                                                echo '<option value="' . $cv['maloai'] . '" class = "form-control">' . $cv['tenloai'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-6">
                                        <input type="submit" name="submit" value="Thêm mới" class="btn btn-primary" />
                                    </div>
                                    <div class="col-md-offset-2 col-md-6">
                                        <button class="comeback">
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