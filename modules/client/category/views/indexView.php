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
                            <a href="?role=client&mod=productDetail&id=<?php echo $key['id']?>">
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
                                    <span class="price-old"><del><?php echo currency_format($key['price']) ?></del></span>
                                    <span class="price-regular"><?php echo currency_format($key['promo_price']) ?></span>
                                </div>
                                <a class="add-to-cart" href="
                                 <?php if(isset($_GET['id'])) echo '?role=client&mod=cart&action=add&id_product='. $key['id'].'&currentMod=category&cate_id='.$_GET['id'];
                                        elseif (isset($_GET['brand_id'])) echo '?role=client&mod=cart&action=add&id_product='. $key['id'].'&currentMod=category'.'&brand_id='.$_GET['brand_id'];
                                        ?>
                                                           "
                                ><i class="fa fa-shopping-cart"></i></a>
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