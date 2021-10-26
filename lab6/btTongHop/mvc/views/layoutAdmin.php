<!--  -->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Home Admin</title>
    <base href="<?php echo BASE; ?>">
    <link rel="icon" href="public/home/img/logo.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/home/css/bootstrap.min.css" />

    <!-- text editor css -->
    <link rel="stylesheet" href="public/home/vendors/text_editor/summernote-bs4.css" />
    <!-- morris css -->
    <!-- <link rel="stylesheet" href="public/home/vendors/morris/morris.css"> -->
    <!-- metarial icon css -->
    <link rel="stylesheet" href="public/home/vendors/material_icon/material-icons.css" />

    <!-- menu css  -->
    <!-- <link rel="stylesheet" href="public/home/css/metisMenu.css"> -->
    <!-- style CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9315670d89.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/home/css/style.css" />
    <link rel="stylesheet" href="public/home/css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">
    <!-- main content part here -->

    <nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="Home/Index">Bài tập lab 6</a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="NhanVien/Index" aria-expanded="false">
                    <!-- <i class="fas fa-th"></i> -->
                    <div class="icon_menu">
                        <img src="public/home/img/menu-icon/2.svg" alt="">
                    </div>
                    <span>Nhân viên</span>
                </a>                
            </li>
            <li class="">
                <a class="has-arrow" href="PhongBan/Index" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="public/home/img/menu-icon/2.svg" alt="">
                    </div>
                    <span>Phòng ban</span>
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="ChucVu/Index" aria-expanded="false">

                    <div class="icon_menu">
                        <img src="public/home/img/menu-icon/2.svg" alt="">
                    </div>
                    <span>Chức vụ</span>
                </a>
            </li>
        </ul>
    </nav>

    <section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                            <div class="search_inner">
                                
                                <h1 class="search_field" >BÀI TẬP LAB 6</h1>
                            </div>
                            <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">                            
                            <div class="profile_info">
                                <h4 style="cursor: pointer;"><?php echo $_SESSION["user"]["hoNV"]." ".$_SESSION["user"]["tenNV"]; ?></label>
                                <img src="public/home/img/staf/<?php echo $_SESSION["user"]["hinhAnh"]; ?>" alt="">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <!-- <p>Neurologist </p> -->
                                        <h5><?php echo $_SESSION["user"]["hoNV"]." ".$_SESSION["user"]["tenNV"]; ?></h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="#">Thông tin của tôi</a>
                                        <a href="Login/Logout">Đăng xuất</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ menu  -->
        <?php require_once "./mvc/views/pages/" . $data['page'] . ".php" ?>

        <!-- footer part -->
        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2021 © Mang Bảo - 60.CNTT-1 </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main content part end -->

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    <!-- footer  -->
    <!-- <script src="public/home/js/jquery-3.4.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- popper js -->
    <script src="public/home/js/popper.min.js"></script>
    <!-- bootstarp js -->
    <script src="public/home/js/bootstrap.min.js"></script>
    <!-- sidebar menu  -->

    <!-- custom js -->
    <script src="public/home/js/custom.js"></script>
</body>

</html>