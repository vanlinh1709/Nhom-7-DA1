<?php
get_header('','');
?>

        <main>
            <div class="product-sale">
                <div class="product-list-title">
                    <p><?php echo !empty($category_name) ? $category_name['cate_name'] : ''?></p>
                    <p><?php echo !empty($brand_name) ? $brand_name['brand_name'] : ''?></p>
                </div>
                <div class="product-sale-content">
                    <?php foreach($list_product as $key): ?>
                    <div class="product-item">
                        <div class="product-thumb">
                            <a href="#">
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
                                    <a href="#"><?php echo $key['title'] ?></a>
                                </h6>
                                <div class="price-box">
                                    <span class="price-old"><del><?php echo $key['price'] ?></del></span>
                                    <span class="price-regular"><?php echo $key['promo_price'] ?></span>
                                </div>
                                <a class="add-to-cart" href="?role=client&mod=cart&action=add&id_product=<?php echo $key['id']?>&currentMod=<?php echo get_module()?>&cate_id=<?php echo $_GET['id'] ?>"><i class="fa fa-shopping-cart"></i></a>
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
                    <?php endforeach ?>
                    
                </div>
            </div>
        </main>
        <?php get_footer('') ?>