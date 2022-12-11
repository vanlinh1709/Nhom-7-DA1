<?php
get_header('','Trang chi tiết sản phẩm');
?>
<main>
    <div class="product-detail">
        <div class="product-detail-img text-center" style="text-align: center">
            <img class="rounded" src="./layout/assets/img/product/<?php echo $product['thumbnail'] ?>" alt="">
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
                <span>Còn <?php echo $product['number'] ?> sản phẩm</span>
            </div>
            <div class="detail-des">
                <span><?php echo $product['description'] ?></span>
            </div>
            <div class="quantity">
                <div class="quantity-text"><span>Số lượng:</span></div>
                <form method="post" action="?role=client&mod=cart&action=add&id_product=<?php echo $product['id']?>&currentMod=<?php echo get_module()?>">
                  <div class="d-flex justify-content-between">
                      <div class="quantity-input">
                          <input name="qty" type="number" min="1" max="<?php echo $product['number']?>" value="1" id="num">
                      </div>
                      <button onclick="" style="border-radius: 10px" class="btn btn-info" type="submit">Thêm vào giỏ hàng</button>
                  </div>
                </form>
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
                            <a class="active" data-bs-toggle="tab" href="#tab_two">Đánh giá</a>
                        </li>
                        <li>
                            <a data-bs-toggle="tab" href="#tab_one">Mô tả</a>
                        </li>
                    </ul>
                    <div class="tab-content reviews-tab">
                        <div class="tab-pane fade active" id="tab_two">
                            <?php foreach ($listComments as $item):?>
                                <div class="total-reviews  <?php if($item['name_sender'] == 'admin') echo " rep-comment"?>">
                                    <div class="rev-avatar">
                                        <img src="<?php if($item['name_sender'] == 'admin') echo "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYiu0iwsKgppDcIbARpYQymEL9nhTkSJGgZ6C1ULoJfLchwTTgKc8Fpucbhs0Zn834tFY&usqp=CAU";
                                        else echo './layout/assets/img/blog/comment-icon.png'?>" alt="">
                                    </div>
                                    <div class="review-box">
                                        <div class="post-author">
                                            <p><span><?php echo $item['name_sender']?> -</span><?php echo $item['created_at']?> </p>
                                        </div>
                                        <p><?php echo $item['contents']?></p>
                                    </div>
                                </div>
                            <?php endforeach?>
                            <form action="?role=client&mod=productDetail&action=sendComment&id_product=<?php echo $product['id']?>" class="review-form" method="post">
                                <div class="form-group row" <?php echo isset($_SESSION['auth']) ? 'hidden' : ''?>>
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Tên của bạn</label>
                                        <input type="text" name="name_sender" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row" <?php echo isset($_SESSION['auth']) ? 'hidden' : ''?>>
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Email của bạn</label>
                                        <input type="email" name="email_sender" class="form-control" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label class="col-form-label"><span class="text-danger">*</span>
                                            Bình luận</label>
                                        <textarea name="contents" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <button class="btn btn-sqr" type="submit">Gửi</button>
                                </div>
                                <div>
                                    <p class="text-danger">
                                        <?php echo !is_array($notifications) ?  $notifications : ''?>
                                    </p>
                                </div>
                            </form> <!-- end of review-form -->

                        </div>
                        <div class="tab-pane fade show " id="tab_one">
                            <div class="tab-two">
                                <p>
                                    <?php echo $product['description']?>
                                </p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details reviews end -->
    <br>
    <div class="related-product">
        <div class="related-product-title text-center">
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
                            <span class="price-old"><del><?php echo currency_format($key['price']) ?></del></span>
                            <span class="price-regular"><?php echo currency_format($key['promo_price']) ?></span>
                        </div>
                        <a class="add-to-cart" href="?role=client&mod=cart&action=add&id_product=<?php echo $key['id']?>&currentMod=<?php echo get_module()?>"><i class="fa fa-shopping-cart"></i></a>
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
<script>

</script>
