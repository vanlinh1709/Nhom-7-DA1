<?php
get_header('','');
?>
<main>
    <div class="product-detail">
        <div class="product-detail-img">
            <img src="./layout/assets/img/product/<?php echo $product['thumbnail'] ?>" alt="">
        </div>
        <div class="product-detail-infor">
            <div class="product-detail-name">
                <p><?php echo $product['title'] ?></p>
            </div>
            <div class="detail-star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="product-detail-price">
                <del><?php echo currency_format( $product['price']) ?></del><span><?php echo currency_format( $product['promo_price']) ?></span>
            </div>
            <div class="number-in-stock">
                <i class="fa fa-check"></i>
                <span><?php echo $product['number'] ?> IN STOCK</span>
            </div>
            <div class="detail-des">
                <span><?php echo $product['description'] ?></span>
            </div>
            <div class="quantity">
                <div class="quantity-text"><span>Qty:</span></div>
                <div class="quantity-input">
                    <input type="number" min="0" placeholder="0">
                </div>
                <div class="quantity-buy">
                    <button>Add To Cart</button>
                </div>
            </div>
            <div class="detail-contact">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-pinterest"></i>
                <i class="fa fa-google"></i>
            </div>
        </div>
    </div>

    <!-- product details reviews start -->
    <div class="container product-details-reviews section-padding pb-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-review-info">
                    <ul class="nav review-tab">
                        <li>
                            <a class="active" data-bs-toggle="tab" href="#tab_one">Mô tả</a>
                        </li>
                        <li>
                            <a data-bs-toggle="tab" href="#tab_two">Thông tin sản phẩm</a>
                        </li>
                        <li>
                            <a data-bs-toggle="tab" href="#tab_three">Đánh giá</a>
                        </li>
                    </ul>
                    <div class="tab-content reviews-tab">
                        <div class="tab-pane fade show active" id="tab_one">
                            <div class="tab-one">
                                <p>
                                    <?php echo $product['description']?>
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab_two">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td>color</td>
                                    <td>black, blue, red</td>
                                </tr>
                                <tr>
                                    <td>size</td>
                                    <td>L, M, S</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="tab_three">
                            <form action="#" class="review-form">
                                <h5>1 review for <span>Chaz Kangeroo</span></h5>
                                <div class="total-reviews">
                                    <div class="rev-avatar">
                                        <img src="assets/img/about/avatar.jpg" alt="">
                                    </div>
                                    <div class="review-box">
                                        <div class="ratings">
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span class="good"><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                        <div class="post-author">
                                            <p><span>admin -</span> 30 Mar, 2021</p>
                                        </div>
                                        <p>Aliquam fringilla euismod risus ac bibendum. Sed sit
                                            amet sem varius ante feugiat lacinia. Nunc ipsum nulla,
                                            vulputate ut venenatis vitae, malesuada ut mi. Quisque
                                            iaculis, dui congue placerat pretium, augue erat
                                            accumsan lacus</p>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Tên của bạn</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Email của bạn</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Đánh giá của bạn</label>
                                        <textarea class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Rating</label>
                                        &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                        <input type="radio" value="1" name="rating">
                                        &nbsp;
                                        <input type="radio" value="2" name="rating">
                                        &nbsp;
                                        <input type="radio" value="3" name="rating">
                                        &nbsp;
                                        <input type="radio" value="4" name="rating">
                                        &nbsp;
                                        <input type="radio" value="5" name="rating" checked>
                                        &nbsp;Good
                                    </div>
                                </div>
                                <div class="buttons">
                                    <button class="btn btn-sqr" type="submit">Continue</button>
                                </div>
                            </form> <!-- end of review-form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details reviews end -->
    <br>
    <div class="related-product">
        <div class="related-product-title">
            <h3> SẢN PHẨM LIÊN QUAN</h3>
            <br>
        </div>
    </div>
    <div class="product-sale">
        <div class="product-sale-content">
        <?php foreach($list_related_products as $key): ?>
            <div class="product-item">
                <div class="product-thumb">
                    <a href="?role=client&mod=productDetail&id=<?php echo $key['id'] ?>">
                        <img src="./layout/assets/img/product/<?php echo $key['thumbnail'] ?>" alt="product thumb">
                    </a>
                    <div class="button-group">
                        <a href="#"><span><i class="fa fa-heart-o"></i></span></a>
                        <a href="#"><span><i class="fa fa-eye"></i></span></a>
                    </div>
                </div>
                <div class="product-content">
                    <div class="product-caption">
                        <h6 class="product-name">
                            <a href="?role=client&mod=productDetail&id=<?php echo $key['id'] ?>"><?php echo $key['title'] ?></a>
                        </h6>
                        <div class="price-box">
                            <span class="price-old"><del><?php echo $key['price'] ?></del></span>
                            <span class="price-regular"><?php echo $key['promo_price'] ?></span>
                        </div>
                        <a class="add-to-cart" href="?role=client&mod=productDetail&id=<?php echo $key['id'] ?>"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                    <div class="ratings">
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?php
get_footer('');
?>