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
</head>

<body>
    <div class="container">
        <header>
            <div class="header">
                <div class="information">
                    <div class="contact">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-pinterest"></i>
                    </div>

                    <div class="menu-header">
                        <a href="#"><i class="fa fa-user-circle"></i><span class="text-info"><?php echo isset($_SESSION['auth']) ? $_SESSION['auth']['fullname'] : ''?></span></a>
                        <a href="?role=admin" target="_blank" class="text-warning">
                            <?php echo is_admin() == true ? 'Trang quản trị' : ''?>
                        </a>
                        <a href="?role=client&mod=signUp" <?php echo isset($_SESSION['auth']) ? 'hidden' : ''?>><i class="fa fa-credit-card" ></i>Đăng ký</a>
                        <a<?php echo is_admin() ? 'hidden' : ''?> href="<?php echo isset($_SESSION['auth']) ? '?role=client&mod=auth&controller=logOut' : '?role=client&mod=auth'?>">
                             <i class="fa fa-sign-in"></i><?php echo isset($_SESSION['auth']) ? 'Đăng xuất' : 'Đăng nhập'?></a>

                    </div>
                </div>
            </div>
            <div class="logo-phone">
                <div class="logo">
                    <img src="./layout/assets/img/logo/logo-2.png" alt="">
                </div>

                <div class="phone">
                    <div class="phone-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="my-phone">
                        <p>LIÊN HỆ:</p>
                        <span><?php echo $data['phone']?></span>
                    </div>
                </div>
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm sản phẩm">
                    <button><i class="fa fa-search"></i></button>
                </div>
                <div class="cart">
                    <a href="?role=client&mod=cart" class="minicart-btn minicart-btn-style_2">
                        <button>
                            <i class="fa fa-cart-plus"></i>
                        </button>
                    </a>
                    <span class="notification"><?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">TRANG CHỦ <i class="fa fa-angle-down "></i></a></li>
                    <li><a href="#">TIN TỨC <i class="fa fa-angle-down "></i></a></li>
                    <li><a href="#">VỀ CỬA HÀNG <i class="fa fa-angle-down "></i></a></li>
                    <li><a href="#">LIÊN HỆ <i class="fa fa-angle-down "></i></a></li>
                </ul>
            </div>
        </header>