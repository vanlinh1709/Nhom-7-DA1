<?php
get_header('','');
?>
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
    <div class="logo-phone" >
        <div class="logo">
            <img src="../assets/img/logo/logo-2.png" alt="">
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
    <div class="menu" style="background-color: #4d4949; ">
        <ul>
            <li><a style="color: #fff;" href="#">HOME <i class="fa fa-angle-down "></i></a></li>
            <li><a style="color: #fff;" href="#">PAGE <i class="fa fa-angle-down "></i></a></li>
            <li><a style="color: #fff;" href="#">SHOP <i class="fa fa-angle-down "></i></a></li>
            <li><a style="color: #fff;" href="#">BLOG <i class="fa fa-angle-down "></i></a></li>
            <li><a style="color: #fff;" href="#">CONTACT US </a></li>
        </ul>
    </div>
    <div class="main-detail">
        <div class="detail-banner">
            <p>PRODUCT</p>
            <a href="./trang-chu.html"><i class="fa fa-home"></i></a>
            <a href="./shop.html">Shop</a>
        </div>
    </div>
</header>
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
                <del><?php echo $product['price'] ?></del><span><?php echo $product['promo_price'] ?></span>
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
    <div class="detail-comment">
        <div class="detail-comment-title">
            <h3>Bình Luận</h3>
        </div>
        <form action="">
            <div class="detail-comment-name">
                <p>Họ tên</p>
                <input type="text">
            </div>
            <div class="detail-comment-email">
                <p>Email</p>
                <input type="text">
            </div>
            <div class="detail-comment-review">
                <p>Bình Luận</p>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="detail-rating">
                <span>Đánh giá: </span>
                <input type="checkbox" >
                <input type="checkbox" >
                <input type="checkbox" >
                <input type="checkbox" >
                <input type="checkbox" >
            </div>
            <div class="submit-review">
                <input type="submit">
            </div>
        </form>
    </div>
    <div class="related-product">
        <div class="related-product-title">
            <h3> SẢN PHẨM LIÊN QUAN</h3>
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