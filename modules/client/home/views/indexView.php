<?php get_header('', 'Trang chủ')?>

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
                                                        <a href="?role=client&mod=order&action=orderNow&id=<?php echo $ls['id']?>" class="btn btn-large btn-bg">MUA NGAY</a>
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
    <div class="voucher" style="text-align: center">
            <?php foreach ($list_banner as $b): ?>
                <a href="?role=client&mod=order&action=orderNow&id=<?php echo $b['product_id']?>"><img src="./public/uploads/images/banner/<?php echo $b['banner_img']?>" alt=""></a>
            <?php endforeach?>
    </div>
    <section class="special-products-area section-padding">
        <div class="container">
            <hr>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">GIẢM SỐC HÔM NAY</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="special-product-carousel slick-arrow-style slick-row-15">
                    <?php foreach($list_salest_products as $l):?>
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="?role=client&mod=productDetail&id=<?php echo $l['id'] ?>">
                                    <img src="./layout/assets/img/product/<?php echo $l['thumbnail']?>" alt="product thumb">
                                </a>
                                <div class="button-group">
                                    <a href="#"><span><i class="fa fa-heart-o"></i></span></a>
                                    <a href="#"><span><i class="fa fa-eye"></i></span></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-caption">
                                    <h6 class="product-name">
                                        <a href="?role=client&mod=productDetail&id=<?php echo $l['id'] ?>"><?php echo $l['title']?></a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-old"><del><?php echo currency_format($l['price'])?></del></span>
                                        <span class="price-regular"><?php echo currency_format($l['promo_price'])?></span>
                                    </div>
                                    <a class="add-to-cart" href="?role=client&mod=cart&action=add&id_product=<?php echo $l['id']?>&currentMod=<?php echo get_module()?>"><i class="fa fa-shopping-cart"></i></a>
                                </div>
                                <div class="ratings d-flex justify-content-between align-items-end">
                                    <div class="ratings">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                <div class="text-danger" style="font-size: 30px">-<?php echo ceil((float)$l['percen_promo'] * 100)?>%</div>
<!--                                Celi: hàm làm tròn số; (float) chuyển string thành số float-->
                                </div>
                            </div>
                        </div>
                    <?php endforeach?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="new-arrival-product">
                <div class="new-arrival-title">
                    <h4 style="font-size: 30px " class="text-center">GỢI Ý CHO BẠN</h4>
                    <br>
                </div>
                <div class="new-arrival-content">
                    <?php foreach($list_featured_product as $index => $p):?>
                    <?php if($index == 3) break?>
                        <div class="product-item">
                            <div class="product-thumb">
                                <a href="?role=client&mod=productDetail&id=<?php echo $p['id'] ?>">
                                    <img src="./layout/assets/img/product/<?php echo $p['thumbnail']?>" alt="product thumb">
                                </a>
                                <div class="button-group">
                                    <a href="#"><span><i class="fa fa-heart-o"></i></span></a>
                                    <a href="#"><span><i class="fa fa-eye"></i></span></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-caption">
                                    <h6 class="product-name">
                                        <a href="?role=client&mod=productDetail&id=<?php echo $p['id'] ?>"><?php echo $p['title']?></a>
                                    </h6>
                                    <div class="price-box">
                                        <span class="price-old"><del><?php echo currency_format($p['price'])?></del></span>
                                        <span class="price-regular"><?php echo currency_format($p['promo_price'])?></span>
                                    </div>
                                    <a class="add-to-cart" href="?role=client&mod=cart&action=add&id_product=<?php echo $p['id']?>&currentMod=<?php echo get_module()?>"><i class="fa fa-shopping-cart"></i></a>
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
                    <?php endforeach?>

                </div>
            </div>
    <div class="product-sale">
        <div class="product-sale-tittle">
            <h3>SẢN PHẨM MỚI NHẤT</h3>
        </div>
        <div class="product-sale-content">
            <?php foreach($list_newest_product as $p):?>
                <div class="product-item">
                    <div class="product-thumb">
                        <a href="?role=client&mod=productDetail&id=<?php echo $p['id'] ?>">
                            <img src="./layout/assets/img/product/<?php echo $p['thumbnail']?>" alt="product thumb">
                        </a>
                        <div class="button-group">
                            <a href="#"><span><i class="fa fa-heart-o"></i></span></a>
                            <a href="#"><span><i class="fa fa-eye"></i></span></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-caption">
                            <h6 class="product-name">
                                <a href="?role=client&mod=productDetail&id=<?php echo $p['id'] ?>"><?php echo $p['title']?></a>
                            </h6>
                            <div class="price-box">
                                <span class="price-old"><del><?php echo currency_format($p['price'])?></del></span>
                                <span class="price-regular"><?php echo currency_format($p['promo_price'])?></span>
                            </div>
                            <a class="add-to-cart" href="?role=client&mod=cart&action=add&id_product=<?php echo $p['id']?>&currentMod=<?php echo get_module()?>"><i class="fa fa-shopping-cart"></i></a>
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
            <?php endforeach?>
        </div>
    </div>
    <div class="product-sale">
        <div class="product-sale-tittle">
            <h3>SẢN PHẨM BÁN CHẠY NHẤT</h3>
        </div>
        <div class="product-sale-content">
            <?php foreach($list_bestseller_product as $s):?>
                <div class="product-item">
                    <div class="product-thumb">
                        <a href="?role=client&mod=productDetail&id=<?php echo $s['id'] ?>">
                            <img src="./layout/assets/img/product/<?php echo $s['thumbnail']?>" alt="product thumb">
                        </a>
                        <div class="button-group">
                            <a href="#"><span><i class="fa fa-heart-o"></i></span></a>
                            <a href="#"><span><i class="fa fa-eye"></i></span></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-caption">
                            <h6 class="product-name">
                                <a href="?role=client&mod=productDetail&id=<?php echo $s['id'] ?>"><?php echo $s['title']?></a>
                            </h6>
                            <div class="price-box">
                                <span class="price-old"><del><?php echo currency_format($s['price'])?></del></span>
                                <span class="price-regular"><?php echo currency_format($s['promo_price'])?></span>
                            </div>
                            <a class="add-to-cart" href="?role=client&mod=cart&action=add&id_product=<?php echo $s['id']?>&currentMod=<?php echo get_module()?>"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                        <div class="ratings d-flex justify-content-between">
                            <div>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                            </div>
                            <div class="text-danger">Đã bán: <?php echo $s['total']?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>
    <div class="product-sale">
        <div class="product-sale-tittle">
            <h3>SẢN PHẨM ĐƯỢC YÊU THÍCH NHẤT</h3>
        </div>
        <div class="product-sale-content">
            <?php foreach($list_featured_product as $f):?>
                <div class="product-item">
                    <div class="product-thumb">
                        <a href="?role=client&mod=productDetail&id=<?php echo $f['id'] ?>">
                            <img src="./layout/assets/img/product/<?php echo $f['thumbnail']?>" alt="product thumb">
                        </a>
                        <div class="button-group">
                            <a href="#"><span><i class="fa fa-heart-o"></i></span></a>
                            <a href="#"><span><i class="fa fa-eye"></i></span></a>
                        </div>
                    </div>
                    <div class="product-content">
                        <div class="product-caption">
                            <h6 class="product-name">
                                <a href="?role=client&mod=productDetail&id=<?php echo $f['id'] ?>"><?php echo $f['title']?></a>
                            </h6>
                            <div class="price-box">
                                <span class="price-old"><del><?php echo currency_format($f['price'])?></del></span>
                                <span class="price-regular"><?php echo currency_format($f['promo_price'])?></span>
                            </div>
                            <a class="add-to-cart" href="?role=client&mod=cart&action=add&id_product=<?php echo $f['id']?>&currentMod=<?php echo get_module()?>"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                        <div class="ratings d-flex justify-content-between">
                            <div>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                            </div>
                            <div class="text-danger">Số lượt xem: <?php echo $f['views']?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach?>
        </div>
    </div>
    <div class="categories text-center">
                <div class="categories-title">
                    <h2>GIÀY TỪ THƯƠNG HIỆU NỔI TIẾNG</h2>
                    <br>
                </div>
                <div class="categories-main">
                    <div class="cate-content">
                        <div class="name-cate">Nike</div>
                        <div class="cate-img">
                            <img src="./assets/img/category/category-1.png" alt="">
                        </div>
                        <br><a class="shop-btn" href="?role=client&mod=category&brand_id=1">XEM DANH MUC</a>

                    </div>
                    <div class="cate-content">
                        <div class="name-cate">Adidas</div>
                        <div class="cate-img">
                            <img src="./assets/img/category/category-2.png" alt="">
                        </div>
                        <br><a class="shop-btn" href="?role=client&mod=category&brand_id=2">XEM DANH MUC</a>

                    </div>
                    <div class="cate-content">
                        <div class="name-cate">Pulma</div>
                        <div class="cate-img">
                            <img src="./assets/img/category/category-3.png" alt="">
                        </div>
                        <br>
                        <a class="shop-btn" href="?role=client&mod=category&brand_id=8">XEM DANH MUC</a>

                    </div>
                </div>
            </div>

    <div class="banner-sale">
        <img src="./layout/assets/img/banner/cms_4.png" alt="">
        <div class="banner-sale-content">
            <h2>Giảm 50%</h2>
            <p>GIÀY NIKE METCON 8</p>
            <button>Đặt ngay</button>
        </div>
    </div>
</main>
<?php get_footer('')?>