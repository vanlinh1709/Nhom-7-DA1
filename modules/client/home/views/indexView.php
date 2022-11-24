<?php get_header('', 'Trang chủ') ?>
<?php //var_dump($categories);?>
<main>
    <!-- slider area start -->
    <section class="hero-slider hero-slider--style-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="category-toggle-wrap categories-style-5">
                        <div class="category-toggle">
                            Danh mục sản phẩm
                            <i class="fa fa-angle-down"></i>
                        </div>
                        <nav class="category-menu">
                            <ul class="categories-list">
                                <?php foreach($categories as $c):?>
                                <li class="menu-item-has-children"><a href="?role=client&mod=category&id=<?php echo $c['id']?>"><?php echo $c['cate_name']?></a>
                                </li>
                                <?php endforeach;?>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                        <!-- single slider item start -->
                        <?php foreach ($list_slide_show as $ls):?>
                        <div class="hero-single-slide">
                            <div class="hero-slider-item bg-img" data-bg="./public/uploads/images/slideshow/<?php echo $ls['slideshow_img']?>">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="hero-slider-content slide-1 row">
                                               <div class="col-md-7">
                                                   <h6 class="slide-title text-white"><?php echo $ls['title']?></h6>
                                                   <a href="?role=client&mod=productDetail&id=<?php echo $ls['id']?>" class="btn btn-large btn-bg">Shop Now</a>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider area end -->

    <!-- banner statistics area start -->
    <div class="banner-statistics-area section-padding pb-0">
        <div class="container">
            <div class="row mtn-30">
                <div class="col-md-4">
                    <div class="banner-statistics mt-30">
                        <a href="#">
                            <img src="assets/img/banner/cms_3.1.jpg" alt="banner thumb">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner-statistics mt-30">
                        <a href="#">
                            <img src="assets/img/banner/cms_3.2.jpg" alt="banner thumb">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner-statistics mt-30">
                        <a href="#">
                            <img src="assets/img/banner/cms_3.3.jpg" alt="banner thumb">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner statistics area end -->

    <!-- special product area start -->
    <section class="special-products-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">GIÁ SỐC HÔM NAY</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="special-product-carousel slick-arrow-style slick-row-15">
                        <div class="sp-product-item">
                            <div class="sp-product-thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-details-img1.jpg" alt="product thumb">
                                </a>
                            </div>
                            <div class="sp-product-content">
                                <h2 class="sp-title"><a href="product-details.html">Top Mens slippers</a></h2>
                                <div class="ratings">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="price-box">
                                        <span class="price-regular">$70.00</span>
                                    </div>
                                    <a class="btn btn-large hover-color" href="shop.html">Add To Cart</a>
                                </div>
                            </div>
                            <div class="product-countdown product-countdown--sp-product" data-countdown="2021/10/10"></div>
                        </div>
                        <div class="sp-product-item">
                            <div class="sp-product-thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-details-img3.jpg" alt="product thumb">
                                </a>
                            </div>
                            <div class="sp-product-content">
                                <h2 class="sp-title"><a href="product-details.html">Primitive Mens shoes</a></h2>
                                <div class="ratings">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="price-box">
                                        <span class="price-regular">$30.00</span>
                                    </div>
                                    <a class="btn btn-large hover-color" href="shop.html">Add To Cart</a>
                                </div>
                            </div>
                            <div class="product-countdown product-countdown--sp-product" data-countdown="2021/11/15"></div>
                        </div>
                        <div class="sp-product-item">
                            <div class="sp-product-thumb">
                                <a href="product-details.html">
                                    <img src="assets/img/product/product-details-img2.jpg" alt="product thumb">
                                </a>
                            </div>
                            <div class="sp-product-content">
                                <h2 class="sp-title"><a href="product-details.html">Rexpo Womens shoes</a></h2>
                                <div class="ratings">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="price-box">
                                        <span class="price-regular">$50.00</span>
                                    </div>
                                    <a class="btn btn-large hover-color" href="shop.html">Add To Cart</a>
                                </div>
                            </div>
                            <div class="product-countdown product-countdown--sp-product" data-countdown="2021/12/25"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- special product area end -->

    <!-- product gallery area start -->
    <section class="product-gallery section-padding bg-img" data-bg="assets/img/bg/bg-testimonial.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title text-white">SẢN PHẨM MỚI NHẤT</h3>
                        <h4 class="sub-title text-muted">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus, qui sequitur mutationem.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-carousel--4 slick-row-5 slick-arrow-style">
                        <?php foreach($list_newest_product as $newProduct):?>
                        <!-- product single item start -->
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="?role=client&mod=productDetail&id=<?php echo $newProduct['id']?>">
                                    <img src="./public/uploads/images/product/<?php echo $newProduct['thumbnail']?>" alt="product thumb">
                                </a>
                                <div class="button-group">
                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                </div>
                                <div class="product-label">
                                    <span>Hàng mới</span>
                                </div>
                                <div class="discount-label">
                                    <span>-10% giảm giá</span>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-caption">
                                    <h6 class="product-name">
                                        <a href="?role=client&mod=productDetail&id=<?php echo $newProduct['id']?>"><?php echo $newProduct['title']?></a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-old"><del><?php echo currency_format($newProduct['price'], 'đ')?></del></span>
                                        <span class="price-regular"><?php echo currency_format($newProduct['promo_price'], 'đ')?></span>
                                    </div>
                                    <a class="add-to-cart" href="?role=client&mod=cart&action=add&id_product=<?php echo $newProduct['id']?>&currentMod=<?php echo get_module()?>"><i class="fa fa-shopping-cart"></i></a>
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
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product gallery area end -->


    <!-- banner statistics area start -->
    <div class="banner-statistics-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="banner-promotion-thumb">
                        <img src="assets/img/banner/cms_4.png" alt="banner thumb">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promotion-banner">
                        <h1 class="promotion-title">Sale</h1>
                        <h2 class="promotion-subtitle">Rexoo Mens shoes</h2>
                        <h4 class="promotion-desc">Investigationes demonstraverunt lectores legere</h4>
                        <a href="#" class="btn btn-large btn-bg">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner statistics area end -->

    <!-- category area start -->
    <section class="category-area bg-set bg-img section-padding pb-0" data-bg="assets/img/bg/bg-listcate.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title text-white">SHOP BY CATEGORIES PULLMAN</h3>
                        <h4 class="sub-title text-white">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus, qui sequitur mutationem.</h4>
                    </div>
                </div>
            </div>
            <div class="row category-wrapper">
                <div class="col-12">
                    <div class="catagory-carousel-active slick-row-15">
                        <div class="single-category-item">
                            <div class="category-title">
                                <a href="shop.html">MEN</a>
                            </div>
                            <div class="category-thumb">
                                <a href="shop.html">
                                    <img src="assets/img/category/category-1.png" alt="category thumb">
                                </a>
                            </div>
                            <div class="shop-collection text-center">
                                <a class="shop-btn" href="shop.html">Shop Collections</a>
                            </div>
                        </div>
                        <div class="single-category-item">
                            <div class="category-title">
                                <a href="shop.html">WOMEN</a>
                            </div>
                            <div class="category-thumb">
                                <a href="shop.html">
                                    <img src="assets/img/category/category-2.png" alt="category thumb">
                                </a>
                            </div>
                            <div class="shop-collection text-center">
                                <a class="shop-btn" href="shop.html">Shop Collections</a>
                            </div>
                        </div>
                        <div class="single-category-item">
                            <div class="category-title">
                                <a href="shop.html">QUICKIIN</a>
                            </div>
                            <div class="category-thumb">
                                <a href="shop.html">
                                    <img src="assets/img/category/category-3.png" alt="category thumb">
                                </a>
                            </div>
                            <div class="shop-collection text-center">
                                <a class="shop-btn" href="shop.html">Shop Collections</a>
                            </div>
                        </div>
                        <div class="single-category-item">
                            <div class="category-title">
                                <a href="shop.html">Kids</a>
                            </div>
                            <div class="category-thumb">
                                <a href="shop.html">
                                    <img src="assets/img/category/category-2.png" alt="category thumb">
                                </a>
                            </div>
                            <div class="shop-collection text-center">
                                <a class="shop-btn" href="shop.html">Shop Collections</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category area end -->

    <!-- product gallery area start -->
    <section class="product-gallery section-padding mt-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">OUR IN STORE</h3>
                        <h4 class="sub-title">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus, qui sequitur mutationem.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-container">
                        <!-- product tab menu start -->
                        <div class="product-tab-menu">
                            <ul class="nav justify-content-center">
                                <li><a href="#tab1" class="active" data-bs-toggle="tab">New Arrival</a></li>
                                <li><a href="#tab2" data-bs-toggle="tab">Best Seller</a></li>
                                <li><a href="#tab3" data-bs-toggle="tab">Featured Products</a></li>
                            </ul>
                        </div>
                        <!-- product tab menu end -->

                        <!-- product tab content start -->
                        <div class="tab-content">
                            <!-- single tab item start -->
                            <div class="tab-pane fade show active" id="tab1">
                                <div class="product-carousel-4_2 slick-row-5 slick-arrow-style">
                                <?php foreach($list_newest_product as $newProduct):?>
                                    <!-- product single item start -->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="<?php echo $newProduct['id']?>">
                                                <img src="./public/uploads/images/product/<?php echo $newProduct['thumbnail']?>" alt="product thumb">
                                            </a>
                                            <div class="button-group">
                                                <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                            </div>
                                            <div class="product-label">
                                                <span>Hàng mới</span>
                                            </div>
                                            <div class="discount-label">
                                                <span>-10% giảm giá</span>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-caption">
                                                <h6 class="product-name">
                                                    <a href="product-details.html"><?php echo $newProduct['title']?></a>
                                                </h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del><?php echo currency_format($newProduct['price'], 'đ')?></del></span>
                                                    <span class="price-regular"><?php echo currency_format($newProduct['promo_price'], 'đ')?></span>
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
                                <?php endforeach;?>
                                </div>
                            </div>
                            <!-- single tab item end -->

                            <!-- single tab item start -->
                            <div class="tab-pane fade" id="tab2">
                                <div class="product-carousel-4_2 slick-row-5 slick-arrow-style">
                                    <?php foreach($list_bestseller_product as $bestSellerProduct):?>
                                        <!-- product single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="<?php echo $bestSellerProduct['id']?>">
                                                    <img src="./public/uploads/images/product/<?php echo $bestSellerProduct['thumbnail']?>" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>Hàng mới</span>
                                                </div>
                                                <div class="discount-label">
                                                    <span>-10% giảm giá</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="product-details.html"><?php echo $bestSellerProduct['title']?></a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del><?php echo currency_format($bestSellerProduct['price'], 'đ')?></del></span>
                                                        <span class="price-regular"><?php echo currency_format($bestSellerProduct['promo_price'], 'đ')?></span>
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
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <!-- single tab item end -->

                            <!-- single tab item start -->
                            <div class="tab-pane fade" id="tab3">
                                <div class="product-carousel-4_2 slick-row-5 slick-arrow-style">
                                    <?php foreach($list_featured_product as $featuredProduct):?>
                                        <!-- product single item start -->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="<?php echo $featuredProduct['id']?>">
                                                    <img src="./public/uploads/images/product/<?php echo $featuredProduct['thumbnail']?>" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>Hàng mới</span>
                                                </div>
                                                <div class="discount-label">
                                                    <span>-10% giảm giá</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="product-details.html"><?php echo $featuredProduct['title']?></a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del><?php echo currency_format($featuredProduct['price'])?></del></span>
                                                        <span class="price-regular"><?php echo currency_format($featuredProduct['promo_price'])?></span>
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
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <!-- single tab item end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product gallery area end -->

    <!-- group product area start -->
    <section class="group-product-area section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="category-group-item">
                        <h3 class="title">MỚI NHẤT</h3>
                        <div class="group-product-wrapper">
                            <div class="group-carousel--3">
                                <?php $i = 0?>
                            <?php foreach($list_newest_product as $newProduct):?>
                                <!-- group item start -->
                                <div class="slide-item">
                                    <div class="group-item">
                                        <div class="group-thumb">
                                            <a href="product-details.html">
                                                <img src="./public/uploads/images/product/<?php echo $newProduct['thumbnail']?>" alt="product thumb">
                                            </a>
                                        </div>
                                        <div class="group-desc">
                                            <h6 class="group-pro-name"><a href="product-details.html"><?php echo $newProduct['title']?></a></h6>
                                            <div class="price-box">
                                                <span class="price-old"><del><?php echo currency_format($newProduct['price'])?></del></span>
                                                <span class="price-regular"><?php echo currency_format($newProduct['promo_price'])?></span>
                                            </div>
                                            <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- group item end -->
                                <?php
                                    $i++;
                                    if($i == 3) {
                                        break;
                                    }
                                ?>
                            <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-group-item">
                        <h3 class="title">YÊU THÍCH NHẤT</h3>
                        <div class="group-product-wrapper">
                            <div class="group-carousel--3">
                                <?php $i = 0?>
                                <?php foreach($list_bestseller_product as $bestsellerProduct):?>
                                    <!-- group item start -->
                                    <div class="slide-item">
                                        <div class="group-item">
                                            <div class="group-thumb">
                                                <a href="product-details.html">
                                                    <img src="./public/uploads/images/product/<?php echo $bestsellerProduct['thumbnail']?>" alt="product thumb">
                                                </a>
                                            </div>
                                            <div class="group-desc">
                                                <h6 class="group-pro-name"><a href="product-details.html"><?php echo $bestsellerProduct['title']?></a></h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del><?php echo currency_format($bestsellerProduct['price'])?></del></span>
                                                    <span class="price-regular"><?php echo currency_format($bestsellerProduct['promo_price'])?></span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group item end -->
                                    <?php
                                    $i++;
                                    if($i == 3) {
                                        break;
                                    }
                                    ?>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-group-item">
                        <h3 class="title">BÁN CHẠY NHẤT</h3>
                        <div class="group-product-wrapper">
                            <div class="group-carousel--3">
                                <?php $i = 0?>
                                <?php foreach($list_featured_product as $featureProduct):?>
                                    <!-- group item start -->
                                    <div class="slide-item">
                                        <div class="group-item">
                                            <div class="group-thumb">
                                                <a href="product-details.html">
                                                    <img src="./public/uploads/images/product/<?php echo $featureProduct['thumbnail']?>" alt="product thumb">
                                                </a>
                                            </div>
                                            <div class="group-desc">
                                                <h6 class="group-pro-name"><a href="product-details.html"><?php echo $featureProduct['title']?></a></h6>
                                                <div class="price-box">
                                                    <span class="price-old"><del><?php echo currency_format($featureProduct['price'])?></del></span>
                                                    <span class="price-regular"><?php echo currency_format($featureProduct['promo_price'])?></span>
                                                </div>
                                                <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- group item end -->
                                    <?php
                                    $i++;
                                    if($i == 3) {
                                        break;
                                    }
                                    ?>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- group product area end -->
</main>
<?php get_footer() ?>