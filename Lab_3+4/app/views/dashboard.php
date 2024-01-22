<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper m-0">
            <div class="header-logo-wrapper p-0">
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img class="img-fluid main-logo" src="<?=_WEB_ROOT?>assets/admin/images/logo/1.png" alt="logo">
                        <img class="img-fluid white-logo" src="<?=_WEB_ROOT?>assets/admin/images/logo/1-white.png" alt="logo">
                    </a>
                </div>
                <div class="toggle-sidebar">
                    <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
                    <a href="index.html">
                        <img src="<?=_WEB_ROOT?>assets/admin/images/logo/1.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>

            <form class="form-inline search-full" action="javascript:void(0)" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                   placeholder="Tìm kiếm ..." name="q" title="" autofocus>
                            <i class="close-search" data-feather="x"></i>
                            <div class="spinner-border Typeahead-spinner" role="status">
                                <span class="sr-only">Đang tải...</span>
                            </div>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="nav-right col-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                            <span class="header-search">
                                <i class="ri-search-line"></i>
                            </span>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="notification-box">
                            <i class="ri-notification-line"></i>
                            <span class="badge rounded-pill badge-theme">4</span>
                        </div>
                        <ul class="notification-dropdown onhover-show-div">
                            <li>
                                <i class="ri-notification-line"></i>
                                <h6 class="f-18 mb-0">Thông báo</h6>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle me-2 font-primary"></i>Xử lý giao hàng <span
                                            class="pull-right">10 min.</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle me-2 font-success"></i>Hoàn thành đơn hàng<span
                                            class="pull-right">1 hr</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle me-2 font-info"></i>Đã tạo vé<span
                                            class="pull-right">3 hr</span>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-circle me-2 font-danger"></i>Giao hàng hoàn thành<span
                                            class="pull-right">6 hr</span>
                                </p>
                            </li>
                            <li>
                                <a class="btn btn-primary" href="javascript:void(0)">Kiểm tra tất cả thông báo</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <div class="mode">
                            <i class="ri-moon-line"></i>
                        </div>
                    </li>
                    <li class="profile-nav onhover-dropdown pe-0 me-0">
                        <div class="media profile-media">
                            <img class="user-profile rounded-circle" src="<?=_WEB_ROOT?>assets/admin/images/users/4.jpg" alt="">
                            <div class="user-name-hide media-body">
                                <span>Emay Walter</span>
                                <p class="mb-0 font-roboto">Quản trị viên<i class="middle ri-arrow-down-s-line"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li>
                                <a href="all-users.html">
                                    <i data-feather="users"></i>
                                    <span>Người dùng</span>
                                </a>
                            </li>
                            <li>
                                <a href="order-list.html">
                                    <i data-feather="archive"></i>
                                    <span>Đơn đặt hàng</span>
                                </a>
                            </li>
                            <li>
                                <a href="support-ticket.html">
                                    <i data-feather="phone"></i>
                                    <span>Vé thể thao</span>
                                </a>
                            </li>
                            <li>
                                <a href="profile-setting.html">
                                    <i data-feather="settings"></i>
                                    <span>Cài đặt</span>
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                   href="javascript:void(0)">
                                    <i data-feather="log-out"></i>
                                    <span>Đăng xuất</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Header Ends-->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div id="sidebarEffect"></div>
            <div>
                <div class="logo-wrapper logo-wrapper-center">
                    <a href="index.html" data-bs-original-title="" title="">
                        <img class="img-fluid for-white" src="<?=_WEB_ROOT?>assets/admin/images/logo/full-white.png" alt="logo">
                    </a>
                    <div class="back-btn">
                        <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="toggle-sidebar">
                        <i class="ri-apps-line status_toggle middle sidebar-toggle"></i>
                    </div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="index.html">
                        <img class="img-fluid main-logo main-white" src="<?=_WEB_ROOT?>assets/admin/images/logo/logo.png" alt="logo">
                        <img class="img-fluid main-logo main-dark" src="<?=_WEB_ROOT?>assets/admin/images/logo/logo-white.png"
                             alt="logo">
                    </a>
                </div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow">
                        <i data-feather="arrow-left"></i>
                    </div>

                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"></li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="index.html">
                                    <i class="ri-home-line"></i>
                                    <span>Tổng Quan Tồn Kho</span>
                                </a>
                            </li>

                            <li class="sidebar-list">
                                <a class="linear-icon-link sidebar-link sidebar-title" href="javascript:void(0)">
                                    <i class="ri-store-3-line"></i>
                                    <span>Sản phẩm</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="products.html">Tất cả sản phẩm</a>
                                    </li>

                                    <li>
                                        <a href="add-new-product.html">Kho sản phẩm</a>
                                    </li>

                                    <li>
                                        <a href="add-new-product.html">Chuyển hàng</a>
                                    </li>

                                    <li>
                                        <a href="add-new-product.html">Bộ sưu tập sản phẩm</a>
                                    </li>

                                    <li>
                                        <a href="add-new-product.html">Đánh giá sản phẩm</a>
                                    </li>

                                    <li>
                                        <a href="add-new-product.html">Nhà cung cấp</a>
                                    </li>

                                    <li>
                                        <a href="add-new-product.html">Nhập hàng</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                    <div class="right-arrow" id="right-arrow">
                        <i data-feather="arrow-right"></i>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- index body start -->
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <!-- chart caard section start -->
                    <div class="col-sm-6 col-xxl-3 col-lg-6">
                        <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                            <div class="custome-1-bg b-r-4 card-body">
                                <div class="media align-items-center static-top-widget">
                                    <div class="media-body p-0">
                                        <span class="m-0">Còn hàng</span>
                                        <h4 class="mb-0 counter">27
                                            <span class="badge badge-light-primary grow">
                                                    <i data-feather="trending-up"></i>8.5%</span>
                                        </h4>
                                    </div>
                                    <div class="align-self-center text-center">
                                        <i class="ri-database-2-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xxl-3 col-lg-6">
                        <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                            <div class="custome-2-bg b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body p-0">
                                        <span class="m-0">Đã ẩn & Đã khóa</span>
                                        <h4 class="mb-0 counter">20
                                            <span class="badge badge-light-danger grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                        </h4>
                                    </div>
                                    <div class="align-self-center text-center">
                                        <i class="ri-shopping-bag-3-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xxl-3 col-lg-6">
                        <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                            <div class="custome-3-bg b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body p-0">
                                        <span class="m-0">Hết hàng</span>
                                        <h4 class="mb-0 counter">1
                                            <a href="add-new-product.html" class="badge badge-light-secondary grow">
                                                ADD NEW</a>
                                        </h4>
                                    </div>

                                    <div class="align-self-center text-center">
                                        <i class="ri-chat-3-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xxl-3 col-lg-6">
                        <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                            <div class="custome-4-bg b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="media-body p-0">
                                        <span class="m-0">Sắp hết hàng</span>
                                        <h4 class="mb-0 counter">10
                                            <span class="badge badge-light-success grow">
                                                    <i data-feather="trending-down"></i>8.5%</span>
                                        </h4>
                                    </div>

                                    <div class="align-self-center text-center">
                                        <i class="ri-user-add-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<!--                    <div class="col-12">-->
<!--                        <div class="card o-hidden card-hover">-->
<!--                            <div class="card-header border-0 pb-1">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <!-- chart card section End -->


                    <!-- Earning chart star-->
                    <div class="col-xl-6">
                        <div class="card o-hidden card-hover">
                            <div class="card-header border-0 pb-1">
                                <div class="card-header-title">
                                    <h4>Báo cáo doanh thu</h4>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div id="report-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Earning chart  end-->


                    <!-- Best Selling Product Start -->
                    <div class="col-xl-6 col-md-12">
                        <div class="card o-hidden card-hover">
                            <div class="card-header card-header-top card-header--2 px-0 pt-0">
                                <div class="card-header-title">
                                    <h4>Sản phẩm bán chạy nhất</h4>
                                </div>

                                <div class="best-selling-box d-sm-flex d-none">
                                    <span>Viết tắt bởi:</span>
                                    <div class="dropdown">
                                        <button class="btn p-0 dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true">Today</button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Hoạt động</a></li>
                                                <li><a class="dropdown-item" href="#">Một hành động khác</a></li>
                                            <li><a class="dropdown-item" href="#">Một cái gì đó khác ở đây</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div>
                                    <div class="table-responsive">
                                        <table class="best-selling-table w-image
                                            w-image
                                            w-image table border-0">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="best-product-box">
                                                        <div class="product-image">
                                                            <img src="<?=_WEB_ROOT?>assets/admin/images/product/1.png"
                                                                 class="img-fluid" alt="Product">
                                                        </div>
                                                        <div class="product-name">
                                                            <h5>bánh quy atta</h5>
                                                            <h6>26-08-2022</h6>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Giá</h6>
                                                        <h5>29.000 đ</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Đơn đặt hàng</h6>
                                                        <h5>62</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Cổ phần</h6>
                                                        <h5>510</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Số lượng</h6>
                                                        <h5>1,798</h5>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Best Selling Product End -->


                    <!-- Recent orders start-->
                    <div class="col-xl-6">
                        <div class="card o-hidden card-hover">
                            <div class="card-header card-header-top card-header--2 px-0 pt-0">
                                <div class="card-header-title">
                                    <h4>những đơn đặt hàng gần đây</h4>
                                </div>

                                <div class="best-selling-box d-sm-flex d-none">
                                    <span>Viết tắt bởi:</span>
                                    <div class="dropdown">
                                        <button class="btn p-0 dropdown-toggle" type="button"
                                                id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                data-bs-auto-close="true">Hôm nay</button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <li><a class="dropdown-item" href="#">Hoạt động</a></li>
                                            <li><a class="dropdown-item" href="#">Một hành động khác</a></li>
                                                <li><a class="dropdown-item" href="#">Một cái gì đó khác ở đây</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div>
                                    <div class="table-responsive">
                                        <table class="best-selling-table table border-0">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="best-product-box">
                                                        <div class="product-name">
                                                            <h5>atta bánh quy</h5>
                                                            <h6>#64548</h6>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Ngày đặt</h6>
                                                        <h5>5/1/22</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Giá</h6>
                                                        <h5>250.000 đ</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Tình trạng đặt hàng</h6>
                                                        <h5>Hoàn thành</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Sự chi trả</h6>
                                                        <h5 class="text-danger">Chưa thanh toán</h5>
                                                    </div>
                                                </td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Recent orders end-->

                    <!-- Earning chart star-->
                    <div class="col-xl-6">
                        <div class="card o-hidden card-hover">
                            <div class="card-header border-0 mb-0">
                                <div class="card-header-title">
                                    <h4>Thu nhập</h4>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div id="bar-chart-earning"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Earning chart end-->


                    <!-- Transactions start-->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card o-hidden card-hover">
                            <div class="card-header border-0">
                                <div class="card-header-title">
                                    <h4>Giao dịch</h4>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <div>
                                    <div class="table-responsive">
                                        <table class="user-table transactions-table table border-0">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="transactions-icon">
                                                        <i class="ri-shield-line"></i>
                                                    </div>
                                                    <div class="transactions-name">
                                                        <h6>Ví</h6>
                                                        <p>Starbucks</p>
                                                    </div>
                                                </td>

                                                <td class="lost">-74,000 đ</td>
                                            </tr>
                                            <tr>
                                                <td class="td-color-1">
                                                    <div class="transactions-icon">
                                                        <i class="ri-check-line"></i>
                                                    </div>
                                                    <div class="transactions-name">
                                                        <h6>Chuyển khoản ngân hàng</h6>
                                                        <p>Thêm tiền</p>
                                                    </div>
                                                </td>

                                                <td class="success">+ 125, 000 đ</td>
                                            </tr>
                                            <tr>
                                                <td class="td-color-2">
                                                    <div class="transactions-icon">
                                                        <i class="ri-exchange-dollar-line"></i>
                                                    </div>
                                                    <div class="transactions-name">
                                                        <h6>Paypal</h6>
                                                        <p>Thêm tiền</p>
                                                    </div>
                                                </td>

                                                <td class="lost">- 50, 000 đ</td>
                                            </tr>
                                            <tr>
                                                <td class="td-color-3">
                                                    <div class="transactions-icon">
                                                        <i class="ri-bank-card-line"></i>
                                                    </div>
                                                    <div class="transactions-name">
                                                        <h6>Mastercard</h6>
                                                        <p>Đặt món ăn</p>
                                                    </div>
                                                </td>

                                                <td class="lost">- 40,000 đ</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Transactions end-->

                    <!-- visitors chart start-->
                    <div class="col-xxl-4 col-md-6">
                        <div class="h-100">
                            <div class="card o-hidden card-hover">
                                <div class="card-header border-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="card-header-title">
                                            <h4>Khách</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="pie-chart">
                                        <div id="pie-chart-visitors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- visitors chart end-->


                    <!-- To Do List start-->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card o-hidden card-hover">
                            <div class="card-header border-0">
                                <div class="card-header-title">
                                    <h4>Những việc cần làm</h4>
                                </div>
                            </div>

                            <div class="card-body pt-0">
                                <ul class="to-do-list">
                                    <li class="to-do-item">
                                        <div class="form-check user-checkbox">
                                            <input class="checkbox_animated check-it" type="checkbox" value=""
                                                   id="flexCheckDefault">
                                        </div>
                                        <div class="to-do-list-name">
                                            <strong></strong>
                                            <p></p>
                                        </div>
                                    </li>
                                    <li class="to-do-item">
                                        <div class="form-check user-checkbox">
                                            <input class="checkbox_animated check-it" type="checkbox" value=""
                                                   id="flexCheckDefault1">
                                        </div>
                                        <div class="to-do-list-name">
                                            <strong></strong>
                                            <p></p>
                                        </div>
                                    </li>
                                    <li class="to-do-item">
                                        <div class="form-check user-checkbox">
                                            <input class="checkbox_animated check-it" type="checkbox" value=""
                                                   id="flexCheckDefault2">
                                        </div>
                                        <div class="to-do-list-name">
                                            <strong></strong>
                                            <p></p>
                                        </div>
                                    </li>
                                    <li class="to-do-item">
                                        <div class="form-check user-checkbox">
                                            <input class="checkbox_animated check-it" type="checkbox" value=""
                                                   id="flexCheckDefault3">
                                        </div>
                                        <div class="to-do-list-name">
                                            <strong></strong>
                                            <p></p>
                                        </div>
                                    </li>

                                    <li class="to-do-item">
                                        <form class="row g-2">
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="name"
                                                       placeholder="Nhập tên nhiệm vụ">
                                            </div>
                                            <div class="col-4">
                                                <button type="submit" class="btn btn-primary w-100 h-100">Thêm vào
                                                    nhiệm vụ</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- To Do List end-->


                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- footer start-->
            <div class="container-fluid">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-12 footer-copyright text-center">
                            <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- footer End-->
        </div>
        <!-- index body end -->

    </div>
    <!-- Page Body End -->
</div>
<!-- page-wrapper End-->

<!-- Modal Start -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="staticBackdropLabel">Thoát ra</h5>
                <p>Bạn có chắc chắn bạn muốn thoát?</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="button-box">
                    <button type="button" class="btn btn--no" data-bs-dismiss="modal">Không</button>
                    <button type="button" class="btn  btn--yes btn-primary">Có</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
