<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HHC - BFH Bee Film Hub</title>
    <meta name="description" content="Ela Admin - Mẫu quản trị HTML5">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: rgba(235, 195, 52, 0.2);
        }

        .container {
            margin: 0 auto;
            max-width: 1300px;
            padding: 30px 20px;
            padding-top: 60px;
        }

        .container .center {
            text-align: center;
        }

        .center h1 {
            font-size: 36px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .our-team-text {
            margin: 0 auto;
            max-width: 700px;
            line-height: 1.8;
            color: #888;
            margin-bottom: 40px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 30px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card img {
            height: 100px;
            width: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 30px;
        }

        .card .card-name {
            margin-bottom: 10px;
            font-weight: 500;
            font-size: 24px;
        }

        .card .card-text {
            font-size: 16px;
            color: #888;
            margin-bottom: 40px;
        }

        .card .btn {
            padding: 15px 60px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
            border-radius: 50px;
            text-decoration: none;
            color: #000;
            transition: 0.3s ease;
        }

        .card .btn:hover {
            box-shadow: -2px -2px rgba(0, 0, 0, 0.3);
            transform: translateY(-5px);
        }

        @media screen and (max-width: 700px) {
            .cards {
                grid-template-columns: 1fr;
            }
        }
        
    </style>
</head>

<body>
    <!-- Thanh bên trái -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-item dropdown">
                        <a href="<?php echo BASE_URL_ADMIN . '?act=quanLiRap' ?>"> <i class="menu-icon fa fa-home"></i>Quản lý rạp</a>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="<?php echo BASE_URL_ADMIN . '?act=quanLiTheLoai' ?>"><i class="menu-icon fa fa-sitemap"></i>Quản lý thể loại phim</a>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="<?php echo BASE_URL_ADMIN . '?act=quanLiPhong' ?>"><i class="menu-icon fa fa-video-camera"></i>Quản lý phòng phim
                        </a>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="<?php echo BASE_URL_ADMIN . '?act=quanLiPhim' ?>"><i class="menu-icon fa fa-film"></i>Quản lý phim
                        </a>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="<?php echo BASE_URL_ADMIN . '?act=quanLiDanhSachVe' ?>"><i class="menu-icon fa fa-shopping-cart"></i>Quản lý danh sách đặt vé xem phim
                        </a>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="<?php echo BASE_URL_ADMIN . '?act=quanLiBinhLuan' ?>"><i class="menu-icon fa fa-comments"></i>Quản lý bình luận
                        </a>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="<?php echo BASE_URL_ADMIN . '?act=thongKe' ?>"><i class="menu-icon fa fa-bar-chart-o"></i>Thống kê </a>
                    </li>
                    <li class="menu-item dropdown">
                        <a href="<?php echo BASE_URL_ADMIN . '?act=quanLiXuatChieu' ?>"><i class="menu-icon fa fa-laptop"></i>Quản lý suất chiếu
                        </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-sitemap"></i>Quản lý tài khoản</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-user"></i><a href="<?php echo BASE_URL_ADMIN . '?act=quanLiNguoiDung' ?>">Tài khoản quản trị</a></li>
                            <li><i class="menu-icon fa fa-users"></i><a href="<?php echo BASE_URL_ADMIN . '?act=quanLiKhachHang' ?>">Tài khoản khách hàng</a></li>
                            <li><i class="menu-icon fa fa-info-circle"></i><a href="<?php echo BASE_URL_ADMIN . '?act=quanLiThongTin' ?>">Thông tin tài khoản</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->

    <!-- Thanh bên phải -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="/duan1_Nhom11/images/logo2.png" alt="Logo" width="260px" height="40px"></a>
                    <a class="navbar-brand hidden" href="./"><img src="/duan1_Nhom11/images/logo2.png" alt="Logo1" width="100px" height="40px"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="/duan1_Nhom11/images/BFH.jpg" alt="Hình đại diện người dùng">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>Thông tin tài khoản</a>
                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Cài đặt</a>
                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="container">
                                <div class="center">
                                    <div class="our-team-text"><b style="color: red;">Bee Film Hub</b> là một nền tảng trực tuyến dành cho những người yêu thích điện ảnh. Chúng tôi cung cấp một loạt các bộ phim từ nhiều thể loại khác nhau, 
                                    bao gồm hành động, hài hước, kinh dị, và nhiều hơn nữa. Mục tiêu của chúng tôi là mang đến cho người xem những trải nghiệm điện ảnh tuyệt vời 
                                    với chất lượng hình ảnh và âm thanh tốt nhất.
                                    </div>
                                </div>
                            <div class="card-header text-center">
                                <strong>Thông tin thành viên</strong>
                            </div>
                                <div class="cards">

                                    <div class="card">
                                        <img src="/duan1_Nhom11/images/thanhvien3.webp" alt="anh1">
                                        <h3 class="card-name">Nguyễn Văn Huy</h3>
                                        <p class="card-text">Sinh viên Fpoly</p>
                                        <a href="#" class="btn">Xem chi tiết</a>
                                    </div>

                                    <div class="card">
                                        <img src="/duan1_Nhom11/images/thanhvien2.png" alt="anh2">
                                        <h3 class="card-name">Vũ Kiều Chi</h3>
                                        <p class="card-text">Sinh viên Fpoly</p>
                                        <a href="#" class="btn">Xem chi tiết</a>
                                    </div>

                                    <div class="card">
                                        <img src="/duan1_Nhom11/images/thanhvien1.png" alt="anh3">
                                        <h3 class="card-name">Đỗ Việt Hòa</h3>
                                        <p class="card-text">Sinh viên Fpoly</p>
                                        <a href="#" class="btn">Xem chi tiết</a>
                                    </div>


                                </div>
                            </div>
                            <div class="card-body">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3879.0249283146527!2d105.74468687542904!3d21.038129780613517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e1!3m2!1svi!2s!4v1730300356908!5m2!1svi!2s"
                                    width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-wrap">
                            <p class="text-center">© 2024 HHC - BFH Bee Film Hub</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div><!-- /#right-panel -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>