<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./layout/assets/css/css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title><?php echo $title?></title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,600,700,800,900%7CPoppins:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <!-- Nice Select css -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <!-- jquery UI css -->
    <link rel="stylesheet" href="assets/css/plugins/jqueryui.min.css">
    <!-- main style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="./public/images/favicon.ico">
</head>
<body>
<!-- Start Header Area -->
<header class="header-area header-style__3 header-box header-box__3">
    <!-- main header start -->
    <div class="main-header d-none d-lg-block">
        <!-- header top start -->
        <div class="header-top p-0 black-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="header-social-link">
                                    <a href="<?php echo $infoShop['link_face']?>"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo $infoShop['link_twitter']?>"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo $infoShop['link_insta']?>"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-9 d-flex justify-content-end">
                                <div class="top-left-navigation pl-0">

                                </div>
                                <ul class="user-info-block">
                                    <li <?php echo is_auth() == true ? '' : 'hidden'?>><a href="?role=client&mod=account&id=<?php echo $user['id']?>"><i class="<?php echo isset($_SESSION['auth']) ? 'fa fa-user-circle' : ''?>"></i><span class="text-info"><?php echo isset($_SESSION['auth']) ? $_SESSION['auth']['fullname'] : ''?></span></a></li>
                                    <li>
                                        <a href="?role=admin" target="_blank" class="text">
                                            <?php echo is_admin() == true ? 'Trang quản trị' : ''?>
                                        </a>
                                    </li>
                                    <li <?php echo isset($_SESSION['auth']) ? 'hidden' : ''?>><a href="?role=client&mod=signUp"><i class="fa fa-credit-card" ></i>Đăng ký</a></li>
                                    <li><a href="<?php echo isset($_SESSION['auth']) ? '?role=client&mod=auth&controller=logOut' : '?role=client&mod=auth'?>"><i class="fa fa-sign-in"></i><?php echo isset($_SESSION['auth']) ? 'Đăng xuất' : 'Đăng nhập'?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top end -->

        <!-- header middle area start -->
        <div class="header-middle-area p-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="white-bg">
                            <div class="row">
                                <!-- start logo area -->
                                <div class="col-lg-4">
                                    <div class="logo-2">
                                        <a href="?role=client">
                                            <img src="assets/img/logo/logo-2.png" alt="Brand Logo">
                                        </a>
                                    </div>
                                </div>
                                <!-- start logo area -->

                                <!-- mini cart area start -->
                                <div class="col-lg-8">
                                    <div class="header-right">
                                        <div class="header-configure-area">
                                            <ul class="nav justify-content-between">
                                                <li class="header-call d-flex align-items-center">
                                                    <div class="call-icon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <span>ĐIỆN THOẠI: <?php echo $infoShop['phone']?><a href="tel:0123456789"></a></span>
                                                </li>
                                                <li class="search-wrapper-inner">
                                                    <form class="search-box-2" action="?role=client&mod=category&action=findProducts" method="post">
                                                        <input type="text" name="keyword" class="search-field-2" placeholder="Tìm kiếm sản phẩm">
                                                        <button class="search-btn-2"><i class="fa fa-search"></i></button>
                                                    </form>
                                                </li>
                                                <li class="mini-cart-wrap">
                                                    <a href="?role=client&mod=cart" class="minicart-btn minicart-btn-style_2">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span class="notification"><?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- mini cart area end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header middle area end -->
        <div class="header-main-area sticky">
            <div class="container">
                <div class="row position-relative">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-12 position-static">
                                <!-- main menu area start -->
                                <div class="main-menu-area">
                                    <div class="main-menu">
                                        <!-- main menu navbar start -->
                                        <nav class="desktop-menu">
                                            <ul>
                                                <li class="active"><a href="?role=client">Trang chủ<i class="fa"></i></a>
                                                </li>
                                                <li><a href="?role=client&mod=news">Tin tức<i class="fa"></i></a>
                                                </li>
                                                <li><a href="?role=client&mod=about_contact_Us&action=about">Về cửa hàng</a></li>
                                                <li><a href="?role=client&mod=about_contact_Us&action=contact">Liên hệ</a></li>
                                            </ul>
                                        </nav>
                                        <!-- main menu navbar end -->
                                    </div>
                                    </div>
                                </div>
                                <!-- main menu area end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end Header Area -->