<?php get_header('', '') ?>
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
                                            <td class="">
                                                <div class="">
                                                    <input class="form-control" min="1" max="<?php echo $product['number']?>" name="<?php echo $product['id']?>" type="number" value="<?php echo $product['amount']?>">
                                                </div>
                                            </td>
                                            <td class="pro-subtotal"><span><?php echo currency_format($product['total_money'], 'đ')?></span></td>
                                            <td class="pro-remove"><a href="?role=client&mod=cart&id_product=<?php echo $product['id']?>&action=del"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    <?php endforeach?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Cart Update Option -->
                            <div class="cart-update-option d-block d-md-flex justify-content-between">
                                <div class="apply-coupon-wrapper">
                                    <a href="?role=client&mod=cart&action=delCart" style="background: indianred; color: white; padding: 10px; margin: 7px; font-weight: bold">
                                        Xóa giỏ hàng
                                    </a>
                                </div>
                                <div class="cart-update">
                                    <a href="?role=client" style="background: orange; color: white; padding: 10px; margin: 7px; font-weight: bold">
                                       Mua tiếp
                                    </a>
                                    <a href="#update_cart">
                                        <button  class="btn btn-sqr">Cập nhập giỏ hàng</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 ms-auto">
                            <!-- Cart Calculation Area -->
                            <div class="cart-calculator-wrapper">
                                <div class="cart-calculate-items">
                                    <h6>Cart Totals</h6>
                                    <div class="table-responsive">
                                        <table class="table" id="#update_cart">
                                            <tr>
                                                <td>Tổng tiền</td>
                                                <td>
                                                    <?php echo currency_format($_SESSION['final_total_money'], 'đ')?>
                                            </tr>
                                            <tr>
                                                <td>Phí vận chuyển</td>
                                                <td>0</td>
                                            </tr>
                                            <tr class="total">
                                                <td>Total</td>
                                                <td class="total-amount">
                                                    <?php echo currency_format($_SESSION['final_total_money'], 'đ')?>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <a href="?role=client&mod=order" class="btn btn-sqr d-block">Mua hàng</a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
    </main>
<?php get_footer() ?>

