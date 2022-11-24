<?php get_header('', 'Chỉnh sửa slideshow') ?>

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Chỉnh sửa slideshow</h5>
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
                    <h3 class="card-title">Form chinh sửa slideshow</h3>
                </div>
                <!--begin::Form-->
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Ảnh slideshow</label>
                            <input type="file" name="slideshow_image" class="form-control" placeholder="" />
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>
                        <div>
                            <input name="id_slideshow" value="<?php echo $_GET['id']?>" hidden/>
                        </div>
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <select name="product_id">
                                <?php foreach($list_products_name_and_id as $p):?>
                                    <option value="<?php echo $p['id']?>" <?php if($product_id_updated['product_id'] == $p['id']) echo 'selected';?>><?php echo $p['title']?></option>
                                <?php endforeach;?>
                            </select>
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Tạo mới</button>
                        <button type="reset" class="btn btn-secondary">Làm lại</button>
                        <a href="?role=admin&mod=users" class="btn btn-default">Quay về</a>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div><!--end::Entry-->
<?php get_footer() ?>