<?php get_header();?>
    <main>
        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper section-padding">
            <div class="container">
                <div class="section-bg-color">
                    <div class="row">
                            <div class="col-lg-12">
                                <!-- Cart Table Area -->
                                <div class="cart-table table-responsive ">
                                    <table class="table table-bordered">
                                        <thead class="">
                                        <tr>
                                            <th class="pro-thumbnail">Ảnh sản phẩm</th>
                                            <th class="pro-title">Sản phẩm</th>
                                            <th class="pro-price">Giá tiền</th>
                                            <th class="pro-quantity">Số lượng</th>
                                            <th class="pro-subtotal">Thành tiền</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($product_of_orders_detail as $index => $product):?>
                                            <tr>
                                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="./public/uploads/images/product/<?php echo $product[0]['thumbnail']?>" alt="Product" width="75" height="75"/></a></td>
                                                <td class="pro-title"><a href="?role=client&mod=productDetail&id=<?php echo $product[0]['id']?>"><?php echo $product[0]['title']?></a></td>
                                                <td class="pro-price"><span><?php echo currency_format($product[0]['promo_price'])?></span></td>
                                                <td class="pro-quantity">
                                                  <span><?php echo $orders_detail[$index]['quantity_product']?></span>
                                                </td>
                                                <td class="pro-subtotal"><span><?php echo currency_format($orders_detail[$index]['total_money'])?></span></td>
                                            </tr>
                                        <?php endforeach?>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 ms-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h6></h6>
                                <div class="table-responsive">
                                    <table class="table" id="#update_cart">
                                        <tr>
                                            <td>Tổng tiền đơn hàng:</td>
                                            <td>
                                                <?php echo currency_format($order['total_price'])?>
                                        </tr>
                                        <tr>
                                            <td>Người mua</td>
                                            <td>
                                                <?php echo $order['customer_name']?>
                                        </tr>
                                        <tr>
                                            <td>Số điện thoại</td>
                                            <td>
                                                <?php echo $order['customer_phone_number']?>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <?php echo $order['customer_email']?>
                                        </tr>
                                        <tr>
                                            <td>Nơi nhận</td>
                                            <td>
                                                <?php echo $order['customer_address']?>
                                        </tr>
                                        <tr>
                                            <td>Phương thức thanh toán</td>
                                            <td>
                                                <?php echo 'Thanh toán khi nhận hàng'?>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
    </main>
<?php get_footer() ?>