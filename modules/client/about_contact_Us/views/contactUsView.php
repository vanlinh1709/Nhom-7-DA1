<?php get_header('','Liên hệ với chúng tôi');?>
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="assets/img/banner/shop.jpg" style="background-image: url(&quot;assets/img/banner/shop.jpg&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <h3 class="breadcrumb-title">LIÊN HỆ VỚI CHÚNG TÔI</h3>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liên hệ với chúng tôi</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- google map start -->
        <div class="map-area section-padding text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.844762204788!2d105.81405799999999!3d20.998859000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac908695cd17%3A0xbac7ca116024fdf0!2zMTQ0IMSQLiBOZ3V54buFbiBUcsOjaSwgVGhhbmggWHXDom4gVHJ1bmcsIFRoYW5oIFh1w6JuLCBIw6AgTuG7mWk!5e0!3m2!1sen!2s!4v1670736643151!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- google map end -->
        <!-- contact area start -->
        <div class="contact-area section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-message">
                            <h4 class="contact-title">Nói với chúng tôi</h4>
                            <form id="contact-form" action="https://htmldemo.net/pullman/pullman/assets/php/mail.php" method="post" class="contact-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="first_name" placeholder="Tên *" type="text" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="phone" placeholder="Điện thoại *" type="text" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="email_address" placeholder="Email *" type="text" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input name="contact_subject" placeholder="Chủ đề *" type="text">
                                    </div>
                                    <div class="col-12">
                                        <div class="contact2-textarea text-center">
                                            <textarea placeholder="Tin nhắn *" name="message" class="form-control2" required=""></textarea>
                                        </div>
                                        <div class="contact-btn">
                                            <button class="btn btn-sqr" type="submit">Gửi email</button>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-center">
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-info">
                            <h4 class="contact-title">Contact Us</h4>
                            <p>Liên hệ với chúng tôi tại DHL và chúng tôi sẽ giải đáp mọi điều bạn quan tâm về Kinh doanh, Dịch vụ Khách hàng hoặc Thắc mắc chung.</p>
                            <ul>
                                <li><i class="fa fa-fax"></i> Địa chỉ: 144, Nguyễn Trãi, Thanh Xuân, Hà Nội</li>
                                <li><i class="fa fa-envelope-o"></i> E-mail: pullman@gmai.com.vn</li>
                                <li><i class="fa fa-phone"></i>0852311221</li>
                            </ul>
                            <div class="working-time">
                                <h6></h6>
                                <p><span>Thứ 2-Chủ nhật</span>08AM – 22PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact area end -->
    </main>
<?php get_footer();?>