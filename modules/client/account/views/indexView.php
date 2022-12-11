<?php get_header('','Trang thông tin tài khoản');?>
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="assets/img/banner/shop.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <h3 class="breadcrumb-title">TÀI KHOẢN CỦA TÔI</h3>
                            <ul class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tài khoản của tôi</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- my account wrapper start -->
    <div class="my-account-wrapper section-padding">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="myaccount-tab-menu nav" role="tablist">
                                        <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down" class="active"></i>
                                            Đơn hàng của tôi</a>
                                        <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i>Thông tin tài khoản</a>
                                    </div>
                                </div>
                                <!-- My Account Tab Menu End -->

                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="orders" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h5>Tất cả đơn hàng</h5>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                        <tr>
                                                            <th>Mã đơn</th>
                                                            <th>Ngày đặt</th>
                                                            <th>Trạng thái</th>
                                                            <th>Tổng tiền</th>
                                                            <th>Xem chi tiết</th>
                                                            <th>Hủy đơn</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach ($list_orders as $od):?>
                                                        <tr>
                                                            <td><?php echo $od['id']?></td>
                                                            <td><?php echo $od['created_at']?></td>
                                                            <td>
                                                                <?php foreach ($list_status as $s):?>
                                                                    <?php if($s['id'] == $od['id_status'])
                                                                        echo $s['name']?>
                                                                <?php endforeach;?>
                                                            </td>
                                                            <td><?php echo currency_format($od['total_price'])?></td>
                                                            <td><a href="?role=client&mod=account&action=orders_detail&id_order=<?php echo $od['id']?>" class="btn btn-sqr">Xem</a>
                                                            <td><a <?php if($od['id_status'] != 1) echo 'hidden'?> href="?role=client&mod=order&action=canceOrder&id_order=<?php echo $od['id']?>" class="btn btn-canc">Hủy</a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->
                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade" id="account-info" role="tabpanel">
                                            <div class="myaccount-content">
                                                <h5>Chỉnh sửa tài khoản</h5>
                                                <div class="account-details-form">
                                                    <form action="?role=client&mod=account&action=editAccount&id=<?php echo $_GET['id']?>" method="post">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="last-name" class="required">Họ và tên
                                                                        </label>
                                                                    <input name="fullname" type="text" id="last-name" placeholder="" value="<?php echo $infoUser['fullname']?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="last-name" class="required">Email
                                                                    </label>
                                                                    <input name="email" type="email" id="last-name" placeholder="" value="<?php echo $infoUser['email']?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="last-name" class="required">Địa chỉ
                                                                        </label>
                                                                    <input name="address" type="text" id="last-name" placeholder="" value="<?php echo $infoUser['address']?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="last-name" class="required">Mật khẩu
                                                                    </label>
                                                                    <input name="password" type="password" id="last-name" placeholder="" value="<?php echo $infoUser['password']?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="last-name" class="required">Số điện thoại
                                                                        </label>
                                                                    <input name="phonenumber" type="text" id="last-name" placeholder="" value="<?php echo $infoUser['phone_number']?>" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="text-center align-items-center">
                                                                    <button style="font-size: 20px; padding: 10px; margin: 40px" type="submit" class="btn btn-success btn-lg">CHỈNH SỬA</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>
                                                    <?php foreach ($notifications as $msg) : ?>
                                                        <li class="text-<?php echo $msg['type'] ?>"><?php if(isset($msg['fullname'])) echo  $msg['fullname'] . ' trường tên' ?></li>
                                                        <li class="text-<?php echo $msg['type'] ?> "><?php if(isset($msg['phonenumber'])) echo $msg['phonenumber'] .' số điện thoại' ?></li>
                                                        <li class="text-<?php echo $msg['type'] ?> "><?php if(isset($msg['email'])) echo $msg['email'] .' email'?></li>
                                                        <li class="text-<?php echo $msg['type'] ?> "><?php if(isset($msg['address'])) echo $msg['address'] .' địa chỉ nhận hàng'?></li>
                                                        <li class="text-<?php echo $msg['type'] ?> "><?php if(isset($msg['password'])) echo $msg['password'] .' địa chỉ mật khẩu'?></li>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        </div> <!-- Single Tab Content End -->
                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- my account wrapper end -->
</main>
<?php get_footer();?>
