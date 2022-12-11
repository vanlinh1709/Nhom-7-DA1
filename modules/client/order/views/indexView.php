<?php get_header('', 'Thông tin thanh toán');?>
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="assets/img/banner/shop.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <h3 class="breadcrumb-title">SHOP</h3>
                            <ul class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="shop.html">Của hàng</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Thông tin thanh toán</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- checkout main wrapper start -->
    <div class="checkout-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <!-- Checkout Billing Details -->
                <div class="col-lg-6">
                    <div class="checkout-billing-details-wrap">

                        <h5 class="checkout-title">Thông tin thanh toán</h5>
                        <form method="post" action="">

                        <div class="billing-form-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label for="f_name" class="required">Họ và tên</label>
                                            <input type="text" id="f_name" placeholder="Họ và tên" name="name" value="<?php echo $info_user['fullname']?>"/>
                                            <input type="hidden" name="id" value="<?php echo $info_user['id'] ? $info_user['id'] : 0?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="single-input-item">
                                    <label for="email" class="required">Địa chỉ email</label>
                                    <input type="email" id="email" placeholder="Địa chỉ email" name="email" value="<?php echo $info_user['email']?>" />
                                </div>
                                <div class="single-input-item">
                                    <label for="street-address" class="required mt-20">Địa chỉ nhận hàng</label>
                                    <input type="text" id="street-address" placeholder="Địa chỉ" name="address" value="<?php echo $info_user['address']?>"/>
                                </div>

                                <div class="single-input-item">
                                    <label for="phone" class="required mt-20">Số điện thoại</label>
                                    <input type="text" id="phone" placeholder="Phone" name="phone" value="<?php echo $info_user['phone_number']?>" />
                                </div>

                                <div class="checkout-box-wrap">
                                    <div class="single-input-item">
                                            <a href="?role=client&mod=auth">
                                                <span <?php echo isset($_SESSION['auth']) ? 'hidden' : ''?> class="custom-control-label" for="create_pwd">Tạo mới tài khoản để nhận ưu đãi?</span>
                                            </a>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <label for="ordernote">Ghi chú</label>
                                    <textarea name="ordernote" id="ordernote" cols="30" rows="3" placeholder="Ghi ghi cho cho người vận chuyển"></textarea>
                                </div>
                            <ul class="">
                                <?php foreach ($notifications as $msg) : ?>
                                    <li class="text-<?php echo $msg['type'] ?>"><?php if(isset($msg['customer_name'])) echo  $msg['customer_name'] . ' trường tên' ?></li>
                                    <li class="text-<?php echo $msg['type'] ?> "><?php if(isset($msg['customer_phone_number'])) echo $msg['customer_phone_number'] .' số điện thoại' ?></li>
                                    <li class="text-<?php echo $msg['type'] ?> "><?php if(isset($msg['customer_email'])) echo $msg['customer_email'] .' email'?></li>
                                    <li class="text-<?php echo $msg['type'] ?> "><?php if(isset($msg['customer_address'])) echo $msg['customer_address'] .' địa chỉ nhận hàng'?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Order Summary Details -->
                <div class="col-lg-6">
                    <div class="order-summary-details">
                        <h5 class="checkout-title">Chi tiết đơn hàng</h5>
                        <div class="order-summary-content">
                            <!-- Order Summary Table -->
                            <div class="order-summary-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th><b>Sản phẩm</b></th>
                                        <th><b>Tổng</b></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($list_product as $product):?>
                                    <tr>
                                        <td><a href="product-details.html"><?php echo $product['title']?> <strong class="text-danger"> × <?php echo $product['amount'] ?></strong></a>
                                        </td>
                                        <td><?php echo currency_format($product['total_money'], 'đ') ?> </td>
                                    </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td>Thành tiền</td>
                                        <td><?php echo currency_format($_SESSION['final_total_money'], 'đ') ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tiền phí</td>
                                        <td class="d-flex justify-content-center">
                                            <ul class="shipping-type">

                                                <li>
                                                    <div class="custom-control ">
                                                        <label class="custom-control-label" for="freeshipping">0
                                                            </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tổng tiền cho đơn hàng</td>
                                        <td><?php echo currency_format($_SESSION['final_total_money'], 'đ') ?></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- Order Payment Method -->
                            <div class="order-payment-method row">
                                <div class="single-payment-method show col">
                                    <div class="payment-method-name">
                                        <div class="custom-control custom-radio">
                                            <input checked type="radio" id="cashon" name="paymentmethod" value="cash" class="custom-control-input"  />
                                            <label class="custom-control-label" for="cashon">Thanh toán khi nhận hàng</label>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <div class="summary-footer-area col text-center align-center">
                                    <button type="submit" class="btn btn-sqr text-center">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- checkout main wrapper end -->
</main>
<?php get_footer();?>
