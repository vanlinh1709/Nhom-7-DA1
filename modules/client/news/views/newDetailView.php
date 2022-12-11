<?php get_header('','Trang tin tức');?>
<main>
    <div class="container-shared">
        <div class="news-detail-content">
            <img src="./public/uploads/images/product/<?php echo $detailNew['thumbnail']?>" alt="">
            <div class="news-detail-title">
                <h4><?php echo $detailNew['title']?></h4>
            </div>
            <div class="news-detail-time">
                <span><?php echo $detailNew['created_at']?></span> <span>| <?php echo $detailNew['poster']?></span>
            </div>
            <div class="news-detail-description">
                    <span>
                        <?php echo $detailNew['content']?>
                    </span>
            </div>
            <div class="tag">
                <h4>Tag :</h4>
                <a href="#">Necklaces</a> ,
                <a href="#">Earrings</a>
            </div>
            <div class="share">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-pinterest"></i></a>
                <a href=""><i class="fa fa-google"></i></a>
            </div>
        </div>
        <div class="news-detail-comment">
            <div class="number-comment">
                <h4></h4>
            </div>
            <div class="main-comment">
                <ul>
                    <?php foreach($listComments as $c):?>
                    <li <?php if($c['name_sender'] == 'admin') echo 'class="rep-comment"'?>>
                        <div class="comment-logo">
                            <img src="./layout/assets/img/blog/comment-icon.png" alt="">
                        </div>
                        <div class="comment-body">
                            <span class="reply-btn"><a href="#">Trả lời</a></span>
                            <h5 class="comment-user"><?php echo $c['name_sender']?></h5>
                            <div class="comment-time">
                                <?php echo $c['created_at']?>
                            </div>
                            <p><?php echo $c['contents']?></p>
                        </div>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <div class="write-comment">
            <div class="write-comment-title">
                <h5>Gửi một bình luận</h5>
                <p>Email của bạn sẽ không được công khai</p>
            </div>
            <form action="">
                <label>Bình luận</label>
                <textarea name="" id="" cols="30" rows="10" placeholder="Viết một bình luận"></textarea>
                <div class="information-user-comment">
                    <div class="name-user-comment">
                        <label>Tên</label><br>
                        <input type="text" placeholder="Họ và tên">
                    </div>
                    <div class="email-user-comment">
                        <label>Email</label><br>
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="Website-user-comment">
                        <label>Website</label><br>
                        <input type="text" placeholder="Website">
                    </div>
                </div>
                <input class="btn-submit" type="submit" name="" value="Gửi bình luận">
            </form>
        </div>
        <div class="related-post">
            <h3>BẢN TIN LIÊN QUAN</h3>
            <div class="news-main">
                <?php foreach($list_related_comments as $n):?>
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
    </div>
</main>
<?php get_footer();?>