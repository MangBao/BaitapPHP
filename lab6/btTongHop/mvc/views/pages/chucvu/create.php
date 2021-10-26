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
                        <h3 style="text-align: center;" class="title">THÊM CHỨC VỤ MỚI</h3>
                        
                        <form action="ChucVu/SaveCreate" method="post" enctype="multipart/form-data">
                            <div class="form-horizontal">
                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Mã chức vụ: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="macv" value="<?php echo $data['macv'];?>" readonly >
                                    </div>
                                </div>

                                <div class="form-group1">
                                    <label for="" class="control-label col-md-5">Tên chức vụ: </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" required name="tencv">
                                    </div>
                                </div>

                                

                                <div class="form-group">
                                    <div class="col-md-offset-2 col-md-6">
                                        <input type="submit" value="Thêm mới" class="btn btn-primary" />
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