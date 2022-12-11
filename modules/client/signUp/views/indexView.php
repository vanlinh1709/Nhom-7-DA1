<?php
get_header('','Trang đăng ký');
?>
<div class="login-register-wrapper section-padding">
            <div class="container">
                <div class="member-area-from-wrap">
                    <div class="row justify-content-center">

                        <!-- Register Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap sign-up-form">
                                <h4>Đăng ký tài khoản</h4>
                                <form action="" method="post">
                                    <div class="single-input-item">
                                        <input type="text" name="fullname" placeholder="Nhập tên đầy đủ"  />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="text" name="email" placeholder="Nhập email"  />
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" name="pw" placeholder="Nhập mật khẩu"  />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" name="rpw" placeholder="Nhập lại mật khẩu"  />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="subnewsletter">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="btn btn-sqr">Đăng ký</button>
                                    </div>
                                    <div>
                                    <ul class="">
                                        <?php foreach ($notifications as $msg) : ?>
                                            <li class="text-<?php echo $msg['type'] ?>"><?php echo $msg['name'] ?></li>
                                            <li class="text-<?php echo $msg['type'] ?> "><?php echo $msg['email'] ?></li>
                                            <li class="text-<?php echo $msg['type'] ?> "><?php echo $msg['password'] ?></li>
                                            <li class="text-<?php echo $msg['type'] ?> "><?php echo $msg['rpw'] ?></li>
                                            <li class="text-<?php echo $msg['type'] ?> "><?php echo $msg['noMatchPw'] ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Register Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- login register wrapper end -->
<?php
get_footer();
?>