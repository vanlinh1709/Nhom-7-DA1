<?php get_header('', 'Danh sách đơn hàng') ?>
   <main >
       <!--begin::Subheader-->
       <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
           <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
               <!--begin::Info-->
               <div class="d-flex align-items-center flex-wrap mr-2">
                   <!--begin::Page Title-->
                   <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Quản lý danh sách đơn hàng</h5>
                   <!--end::Page Title-->
               </div>
               <!--end::Info-->
           </div>
       </div>
       <!--end::Subheader-->
       <!--begin::Entry-->
       <div class="d-flex flex-column-fluid ">
           <!--begin::Container-->
           <div class="container">

               <!--begin::Card-->
               <div class="card card-custom">
                   <div class="card-header flex-wrap border-0 pt-6 pb-0">
                       <div class="card-title">
                           <h3 class="card-label">Danh sách đơn hàng
                               <span class="d-block text-muted pt-2 font-size-sm">Danh sách các đơn hàng có trong hệ thống</span>
                           </h3>
                       </div>

                   </div>
                   <div class="card-body text-center">
                       <!--begin: Search Form-->
                       <div class="mb-7">
                           <div class="row align-items-center">
                               <div class="col-lg-9 col-xl-8">
                                   <div class="row align-items-center">
                                       <div class="col-md-4 my-2 my-md-0">
                                           <div class="input-icon">
                                               <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                               <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!--end: Search Form-->
                       <!--begin: Datatable-->
                       <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                           <thead>
                           <tr>
                               <th title="Field #1">Mã đơn hàng</th>
                               <th title="Field #6">Xem chi tiết đơn</th>
                               <th title="Field #2">Trạng thái đơn</th>
                               <th title="Field #3">Người nhận</th>
                               <th title="Field #4">Số điện thoại</th>
                               <th title="Field #6">Cập nhập trạng thái đơn hàng</th>
                               <th title="Field #5">Email</th>
                               <th title="Field #5">Nơi nhận</th>
                               <th title="Field #6">Tổng tiền</th>
                               <th title="Field #7">Phương thức thanh toán</th>
                               <th title="Field #8">Thời gian đặt</th>
                           </tr>
                           </thead>
                           <tbody>
                           <?php foreach ($list_orders as $order) : ?>
                               <tr>
                                   <td><?php echo ($order['id']) ?></td>
                                   <td>
                                    <span class="text-center" style="overflow: visible; position: relative; width: 125px;">
                                            <a href="?role=admin&mod=order&action=orders_detail&id_order=<?php echo $order['id']?>" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
                                                <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-medical" viewBox="0 0 16 16">
                                                             <path d="M7.5 5.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L6 7l-.549.317a.5.5 0 1 0 .5.866l.549-.317V8.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L8 7l.549-.317a.5.5 0 1 0-.5-.866l-.549.317V5.5zm-2 4.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                                            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                                        </svg>
                                                    </svg>
                                                </span>
                                            </a>
                                    </span>

                                   </td>
                                   <td><?php
                                       $status = $order['id_status'];
                                       switch($status) {
                                           case '0':
                                               echo 'Đã hủy';
                                               break;
                                           case '1':
                                               echo 'Chờ xác nhận';
                                               break;
                                           case '2':
                                               echo 'Đang vận chuyển';
                                               break;
                                           case '3':
                                               echo 'Giao hàng thành công';
                                               break;
                                           default:
                                               break;
                                       }
                                       ?></td>
                                   <td><?php echo ($order['customer_name']) ?></td>
                                   <td><?php echo ($order['customer_phone_number']) ?></td>
                                   <td>
                                    <span style="overflow: visible; position: relative; width: 125px;">
                                            <a href="?role=admin&mod=order&action=update&id_order=<?php echo $order['id']?>" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
                                                <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <svg stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
                                                        </svg>
                                                    </svg>
                                                </span>
                                            </a>
                                        </span>

                                   </td>
                                   <td><?php echo ($order['customer_email']) ?></td>
                                   <td><?php echo ($order['customer_address']) ?></td>
                                   <td><?php echo currency_format($order['total_price']) ?></td>
                                   <td><?php echo ($order['payment_method']) ?></td>
                                   <td><?php echo ($order['created_at']) ?></td>
                               </tr>
                           <?php endforeach; ?>
                           </tbody>
                       </table>
                       <!--end: Datatable-->
                   </div>
               </div>
               <!--end::Card-->
           </div>
           <!--end::Container-->
       </div><!--end::Entry-->
   </main>
<?php get_footer() ?>