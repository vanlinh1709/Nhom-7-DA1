<?php
    $notifications = get_notification();
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- CSS
	============================================ -->
    <!-- google fonts -->
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
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-9 d-flex justify-content-end">
                                <div class="top-left-navigation pl-0">
                                  
                                </div>
                                <ul class="user-info-block">
                                    <li><a href="?role=admin" target="_blank" class="text-warning">
                                            <?php echo is_admin() == true ? 'Trang quản trị' : ''?>
                                        </a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-user-circle"></i><span class="text-info"><?php echo isset($_SESSION['auth']) ? $_SESSION['auth']['fullname'] : ''?></span></a></li>

                                    <li <?php echo isset($_SESSION['auth']) ? 'hidden' : ''?>><a href="?role=client&mod=signUp"><i class="fa fa-credit-card" ></i>Đăng ký</a></li>

                                    <li <?php echo is_admin() ? 'hidden' : ''?>><a href="<?php echo isset($_SESSION['auth']) ? '?role=client&mod=auth&controller=logOut' : '?role=client&mod=auth'?>"><i class="fa fa-sign-in"></i><?php echo isset($_SESSION['auth']) ? 'Đăng xuất' : 'Đăng nhập'?></a></li>
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
                                                    <span>ĐIỆN THOẠI: <?php echo $data['phone']?><a href="tel:0123456789"></a></span>
                                                </li>
                                                <li class="search-wrapper-inner">
                                                    <form class="search-box-2">
                                                        <input type="text" class="search-field-2" placeholder="Tìm kiếm sản phẩm">
                                                        <button class="search-btn-2"><i class="fa fa-search"></i></button>
                                                    </form>
                                                </li>
                                                <li class="mini-cart-wrap">
                                                    <a href="?role=client&mod=cart" class="minicart-btn minicart-btn-style_2">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span class="notification"><?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                                                    </a>
<!--                                                    <div class="cart-list-wrapper">-->
<!--                                                        <ul class="cart-list">-->
<!--                                                            <li>-->
<!--                                                                <div class="cart-img">-->
<!--                                                                    <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg" alt=""></a>-->
<!--                                                                </div>-->
<!--                                                                <div class="cart-info">-->
<!--                                                                    <h6 class="product-name"><a href="product-details.html">7th Generation classic</a></h6>-->
<!--                                                                    <span class="cart-qty">Qty: 1</span>-->
<!--                                                                    <span class="item-price">$60.00</span>-->
<!--                                                                </div>-->
<!--                                                                <div class="del-icon">-->
<!--                                                                    <i class="fa fa-times"></i>-->
<!--                                                                </div>-->
<!--                                                            </li>-->
<!--                                                            <li>-->
<!--                                                                <div class="cart-img">-->
<!--                                                                    <a href="product-details.html"><img src="assets/img/cart/cart-2.jpg" alt=""></a>-->
<!--                                                                </div>-->
<!--                                                                <div class="cart-info">-->
<!--                                                                    <h6 class="product-name"><a href="product-details.html">Digital 8th generation</a></h6>-->
<!--                                                                    <span class="cart-qty">Qty: 2</span>-->
<!--                                                                    <span class="item-price">$70.00</span>-->
<!--                                                                </div>-->
<!--                                                                <div class="del-icon">-->
<!--                                                                    <i class="fa fa-times"></i>-->
<!--                                                                </div>-->
<!--                                                            </li>-->
<!--                                                        </ul>-->
<!--                                                        <ul class="minicart-pricing-box">-->
<!--                                                            <li>-->
<!--                                                                <span>Sub-Total</span>-->
<!--                                                                <span><strong>$300.00</strong></span>-->
<!--                                                            </li>-->
<!--                                                            <li>-->
<!--                                                                <span>Eco Tax (-2.00)</span>-->
<!--                                                                <span><strong>$10.00</strong></span>-->
<!--                                                            </li>-->
<!--                                                            <li>-->
<!--                                                                <span>VAT (20%)</span>-->
<!--                                                                <span><strong>$60.00</strong></span>-->
<!--                                                            </li>-->
<!--                                                            <li class="total">-->
<!--                                                                <span>Total</span>-->
<!--                                                                <span><strong>$370.00</strong></span>-->
<!--                                                            </li>-->
<!--                                                        </ul>-->
<!--                                                        <div class="minicart-button">-->
<!--                                                            <a href="cart.html"><i class="fa fa-shopping-cart"></i> View Cart</a>-->
<!--                                                            <a href="cart.html"><i class="fa fa-share"></i> Checkout</a>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
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
                                                <li><a href="?role=client&mod=contact">Về cửa hàng</a></li>
                                                <li><a href="?role=client&mod=about">Liên hệ</a></li>
                                            </ul>
                                        </nav>
                                        <!-- main menu navbar end -->
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