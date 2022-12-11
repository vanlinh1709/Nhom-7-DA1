<?php get_header('','Trang tin tức');?>
<main>
    <div class="blog-title text-center">
        <h2>BẢN TIN MỚI NHẤT</h2>
    </div>
    <div class="container-shared">
        <div class="news-main">
            <?php foreach($list_news as $n):?>
            <div class="news-content">
                <div class="news-img">
                    <img src="./public/uploads/images/product/<?php echo $n['thumbnail']?>" alt="">
                </div>
                <div class="news-title">
                    <p><?php echo $n['title']?></p>
                </div>
                <div class="time-poster">
                    <div class="news-time">
                        <i class="fa fa-calendar"></i><span><?php echo $n[2]?></span>
                    </div>
                    <div class="poster">
                        <i class="fa fa-user"></i><span><?php echo $n['poster']?></span>
                    </div>
                </div>
                <div class="news-description">
                    <span>
                        <?php echo $n['short_des']?>
                    </span>
                </div>
                <div class="read-more">
                    <a href="?role=client&mod=news&action=newdetail&id=<?php echo $n[0]?>"><span style="display: block; padding-top: 10px ">Đọc Thêm</span></a>
                </div>
            </div>
           <?php endforeach?>
        </div>
    </div>
</main>
<?php get_footer();?>