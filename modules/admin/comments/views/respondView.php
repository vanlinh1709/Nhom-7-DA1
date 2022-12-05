<?php get_header('', 'Trang phản hồi danh mục') ?>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Phản hồi danh mục sản phẩm</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Form thông tin bình luận khách hàng</h3>
                </div>
                <!--begin::Form-->
                    <div class="card-body">
                        <div class="form-group">
                            <label>Người gửi</label>
                            <input type="text" name="sender_name" class="form-control" value="<?php echo $comment['name_sender']?>" />
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>
                        <div class="form-group">
                            <label>Email người gửi</label>
                            <input type="text" name="sender_email" class="form-control"  value="<?php echo $comment['email_sender']?>"/>
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>
                        <div class="form-group">
                            <label>Sản phẩm</label>
                            <input type="text" name="sender_name" class="form-control"  value="<?php echo $comment['product_name']?>"/>
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>
                            <div class="form-group">
                                <label>Nội dung bình luận</label>
                                <textarea name="contents" class="form-control" ><?php echo $comment['contents']?></textarea>
                                <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                            </div>
                            <hr>
                        <form method="post" action="?role=admin&mod=comments&action=respond&id_sp=<?php echo $comment['id_sp']?>">
                        <div class="form-group">
                                <label>Phản hồi</label>
                                <textarea name="contents_respond" class="form-control" rows="10"></textarea>
                                <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                            </div>
                    </div>


                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Phản hồi</button>
                    </div>
                </form>

                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div><!--end::Entry-->
<?php get_footer() ?>