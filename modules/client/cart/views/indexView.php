<?php get_header('', 'Trang giỏ hàng') ?>

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
                                    <li class="breadcrumb-item"><a href="shop.html">Shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper section-padding">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                        <form method="post" action="?role=client&mod=cart&action=updateCart">
                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Ảnh sản phẩm</th>
                                            <th class="pro-title">Sản phẩm</th>
                                            <th class="pro-price">Giá tiền</th>
                                            <th class="pro-quantity">Số lượng</th>
                                            <th class="pro-subtotal">Thành tiền</th>
                                            <th class="pro-remove"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($list_product_added as $product):?>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="./public/uploads/images/product/<?php echo $product['thumbnail']?>" alt="Product" /></a></td>
                                            <td class="pro-title"><a href="#"><?php echo $product['title']?></a></td>
                                            <td class="pro-price"><span><?php echo currency_format($product['promo_price'])?></span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty"><input name="<?php echo $product['id']?>" type="number" value="<?php echo $product['amount']?>"></div>
                                            </td>
                                            <td class="pro-subtotal"><span><?php echo currency_format($product['amount'] *  $product['promo_price'], 'đ')?></span></td>
                                            <td class="pro-remove"><a href="?role=client&mod=cart&id_product=<?php echo $product['id']?>&action=del"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Cart Update Option -->
                            <div class="cart-update-option d-block d-md-flex justify-content-between">
                                <div class="apply-coupon-wrapper">
<!--                                    <form action="#" method="post" class=" d-block d-md-flex">-->
<!--                                        <input type="text" placeholder="Enter Your Coupon Code" required />-->
<!--                                        <button class="btn btn-sqr">Nhập mã giảm giá</button>-->
<!--                                    </form>-->
                                </div>
                                <div class="cart-update">
                                    <button class="btn btn-sqr">Cập nhập giỏ hàng</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 ms-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                <div class="cart-calculate-items">
                                    <h6>Cart Totals</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>Tổng tiền</td>
                                                <td>total_price</td>
                                            </tr>
<!--                                            <tr>-->
<!--                                                <td>Shipping</td>-->
<!--                                                <td>$70</td>-->
<!--                                            </tr>-->
                                            <tr class="total">
                                                <td>Total</td>
                                                <td class="total-amount">$300</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <a href="checkout.html" class="btn btn-sqr d-block">Proceed Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
    </main>
<?php get_footer() ?>

