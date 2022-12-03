<?php get_header('', '')?>
<header>
            <div class="header">
                <div class="information">
                    <div class="contact">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-pinterest"></i>
                    </div>

                    <div class="menu-header">
                        <i class="fa fa-user-circle"></i>
                        <a href="#"><span>My Account</span></a>
                        <i class="fa fa-credit-card"></i>
                        <a href="#"><span>Checkout</span></a>
                        <i class="fa fa-sign-in"></i>
                        <a href="#"><span>Sign in</span></a>
                    </div>
                </div>
            </div>
            <div class="logo-phone">
                <div class="logo">
                    <img src="./layout/assets/img/logo/logo-2.png" alt="">
                </div>

                <div class="phone">
                    <div class="phone-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="my-phone">
                        <p>PHONE:</p>
                        <span>0123456789</span>
                    </div>
                </div>
                <div class="search">
                    <input type="text" placeholder="Search Our Catalog">
                    <button><i class="fa fa-search"></i></button>
                </div>
                <div class="cart">
                    <button><i class="fa fa-cart-plus	"></i></button>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">TRANG CHỦ <i class="fa fa-angle-down "></i></a></li>
                    <li><a href="#">TIN TỨC <i class="fa fa-angle-down "></i></a></li>
                    <li><a href="#">VỀ CỬA HÀNG <i class="fa fa-angle-down "></i></a></li>
                    <li><a href="#">LIÊN HỆ <i class="fa fa-angle-down "></i></a></li>
                </ul>
            </div>
</header>
<main>
    
    <div class="category-banner">
        <div class="cat">
            <h3>CATEGORIES</h3>
            <ul>
                <?php foreach($categories as $c):?>
                    <li><a href="?role=client&mod=category&id=<?php echo $c['id'] ?>"><?php echo $c['cate_name']?></a></li>
                <?php endforeach?>
            </ul>
        </div>
        <div class="banner">
            <img src="./layout/assets/img/slider/home6-slide1.jpg" alt="">
        </div>
    </div>
    <div class="main-content">
        <div class="main-content-tittle">
            <h3>DEAL OF THE DAYS</h3>
            <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus, qui sequitur mutationem.</p>
        </div>
    </div>
    <div class="main-product">
        <?php
        foreach($list_salest_products as $l):?>
        <div class="product-salient">
            <div class="product-img">
                <a href="?role=client&mod=productDetail&id=<?php echo $l['id'] ?>">
                <img src="./layout/assets/img/product/<?php echo $l['thumbnail'] ?>" alt=""></a>
            </div>
            <div class="product-infor">
                <div class="product-name">
                    <a href="?role=client&mod=productDetail&id=<?php echo $l['id'] ?>">
                    <p> <?php echo $l['title'] ?></p></a>
                </div>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <div class="price-buy">
                    <div class="product-price"><span><?php echo $l['price'] ?></span><span>VNĐ</span></div>
                    <a href="?role=client&mod=productDetail&id=<?php echo $l['id'] ?>">
                    <button>Add To Cart</button></a>
                </div>
            </div>
        </div>                   
        <?php endforeach?>
    </div>
    <div class="banner-sale">
        <img src="./layout/assets/img/banner/cms_4.png" alt="">
        <div class="banner-sale-content">
            <h2>Sale</h2>
            <p>Rexoo Mens shoes</p>
            <span>Investigationes demonstraverunt lectores legere</span>
            <button>Shop Now</button>
        </div>
    </div>
    <div class="categories">
        <div class="categories-title">
            <h4>SHOP BY CATEGORIES PULLMAN</h4>
            <span>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas est etiam processus dynamicus, qui sequitur mutationem.</span>
        </div>
        <div class="categories-main">
            <div class="acte-content">
                <div class="name-cate">tên danh mục</div>
                <div class="cate-img">
                    <img src="./layout/assets/category/category-1.png" alt="">
                </div>
                <button>xem chi tiết</button>
            </div>
            <div class="acte-content">
                <div class="name-cate">tên danh mục</div>
                <div class="cate-img">
                    <img src="/layout/assets/img/category/category-1.png" alt="">
                </div>
                <button>xem chi tiết</button>
            </div>
            <div class="acte-content">
                <div class="name-cate">tên danh mục</div>
                <div class="cate-img">
                    <img src="./layout/assets/category/category-1.png" alt="">
                </div>
                <button>xem chi tiết</button>
            </div>
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
                        <a class="add-to-cart" href="?role=client&mod=productDetail&id=<?php echo $p['id'] ?>"><i class="fa fa-shopping-cart"></i></a>
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
            <h3>SẢN PHẨM SALE</h3>
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
                        <a class="add-to-cart" href="?role=client&mod=productDetail&id=<?php echo $s['id'] ?>"><i class="fa fa-shopping-cart"></i></a>
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
            <h3>SẢN PHẨM BÁN CHẠY</h3>
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
                        <a class="add-to-cart" href="?role=client&mod=productDetail&id=<?php echo $f['id'] ?>"><i class="fa fa-shopping-cart"></i></a>
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
</main>
<?php get_footer('')?>