<?php
get_header('','Trang chi tiết sản phẩm');
?>
    <!-- offcanvas search form start -->
    <div class="offcanvas-search-wrapper">
        <div class="offcanvas-search-inner">
            <div class="offcanvas-close">
                <i class="fa fa-close"></i>
            </div>
            <div class="container">
                <div class="offcanvas-search-box">
                    <form class="d-flex bdr-bottom w-100">
                        <input type="text" placeholder="Search entire storage here...">
                        <button class="search-btn"><i class="fa fa-search"></i>search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas search form end -->

    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="assets/img/banner/shop.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h3 class="breadcrumb-title">Cửa hàng</h3>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="shop.html">Cửa hàng</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-padding pb-0">
            <div class="container">
                <div class="row">
                    <!-- product details wrapper start -->
                    <div class="col-lg-12 order-1 order-lg-2">
                        <!-- product details inner end -->
                        <div class="product-details-inner">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="product-large-slider">
                                        <div class="pro-large-img img-zoom">
                                            <img src="./public/uploads/images/product/<?php echo $product['thumbnail']?>" alt="product-details" />
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="assets/img/product/product-details-img2.jpg" alt="product-details" />
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="assets/img/product/product-details-img3.jpg" alt="product-details" />
                                        </div>
                                        <div class="pro-large-img img-zoom">
                                            <img src="assets/img/product/product-details-img4.jpg" alt="product-details" />
                                        </div>
                                    </div>
                                    <div class="pro-nav slick-row-10 slick-arrow-style">
                                        <div class="pro-nav-thumb">
                                            <img src="./public/uploads/images/product/<?php echo $product['thumbnail']?>" alt="product-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="assets/img/product/product-details-img2.jpg" alt="product-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="assets/img/product/product-details-img3.jpg" alt="product-details" />
                                        </div>
                                        <div class="pro-nav-thumb">
                                            <img src="assets/img/product/product-details-img4.jpg" alt="product-details" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-details-des">
                                        <h3 class="product-name"><?php echo $product['title']?></h3>
                                        <div class="ratings d-flex">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <div class="pro-review">
                                                <span>1 Reviews</span>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            <span class="price-old"><del><?php echo currency_format($product['promo_price'])?></del></span>
                                            <span class="price-regular"><?php echo currency_format($product['price'])?></span>
                                        </div>
<!--                                        <h5 class="offer-text"><strong>Nhanh lên</strong>! offer ends in:</h5>-->
<!--                                        <div class="product-countdown" data-countdown="2021/09/20"></div>-->
                                        <div class="availability">
                                            <i class="fa fa-check-circle"></i>
                                            <span><?php echo $product['number']?> sản phẩm có sẵn</span>
                                        </div>
                                        <p class="pro-desc"><?php echo $product['description']?></p>
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <h6 class="option-title">qty:</h6>
                                            <div class="quantity">
                                                <div class="pro-qty"><input type="text" value="1"></div>
                                            </div>
                                            <div class="action_link">
                                                <a class="btn btn-cart2" href="?role=client&mod=cart&action=add&id_product=<?php echo $product['id']?>&currentMod=<?php echo get_module()?>">Thêm vào giỏ hàng</a>
                                            </div>
                                        </div>
                                        <div class="useful-links">
                                            <a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                    class="fa fa-refresh"></i>compare</a>
                                            <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i>wishlist</a>
                                        </div>
                                        <div class="like-icon">
                                            <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                            <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                            <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                            <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product details inner end -->

                        <!-- product details reviews start -->
                        <div class="product-details-reviews section-padding pb-0">
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
                    </div>
                    <!-- product details wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->

        <!-- Related product area start -->
        <section class="product-gallery section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title">RELATED PRODUCT</h3>
                            <h4 class="sub-title">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus, qui sequitur mutationem.</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel--4 slick-row-5 slick-arrow-style">
                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-1.jpg" alt="product thumb">
                                    </a>
                                    <div class="button-group">
                                        <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                    </div>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                    <div class="discount-label">
                                        <span>-10% Off</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-caption">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Quickiin Mens shoes</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-old"><del>$90.00</del></span>
                                            <span class="price-regular">$70.00</span>
                                        </div>
                                        <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-2.jpg" alt="product thumb">
                                    </a>
                                    <div class="button-group">
                                        <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                    </div>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-caption">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Womens High Hills</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-old"><del>$80.00</del></span>
                                            <span class="price-regular">$60.00</span>
                                        </div>
                                        <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-3.jpg" alt="product thumb">
                                    </a>
                                    <div class="button-group">
                                        <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                    </div>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-caption">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Leather Mens slippers</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-old"><del>$60.00</del></span>
                                            <span class="price-regular">$50.00</span>
                                        </div>
                                        <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-4.jpg" alt="product thumb">
                                    </a>
                                    <div class="button-group">
                                        <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                    </div>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                    <div class="discount-label">
                                        <span>-15% Off</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-caption">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Rexpo Womens shoes</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-old"><del>$100.00</del></span>
                                            <span class="price-regular">$85.00</span>
                                        </div>
                                        <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                            <!-- product single item end -->

                            <!-- product single item start -->
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/product-5.jpg" alt="product thumb">
                                    </a>
                                    <div class="button-group">
                                        <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                    </div>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-caption">
                                        <h6 class="product-name">
                                            <a href="product-details.html">Primitive Mens shoes</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-old"><del>$75.00</del></span>
                                            <span class="price-regular">$55.00</span>
                                        </div>
                                        <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
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
                            <!-- product single item end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related product area end -->
    </main>
<?php
get_footer();
?>