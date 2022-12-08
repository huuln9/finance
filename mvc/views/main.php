<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>FINANCE</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $appRootURL ?>/public/home/images/favicon.ico">
    <link href="<?php echo $appRootURL ?>/public/main/css/style.css" rel="stylesheet">
</head>

<body class="v-light vertical-nav fix-header fix-sidebar">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div id="main-wrapper">
        <!-- header -->
        <div class="header">
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="<?php echo $appRootURL ?>/admin">
                        <b><img src="<?php echo $appRootURL ?>/public/home/images/logo-2.png" alt=""></b>
                        <span class="brand-title">
                            <img src="<?php echo $appRootURL ?>/public/home/images/logo-3.png" alt="">
                        </span>
                    </a>
                </div>
                <div class="nav-control">
                    <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ header -->
        <!-- sidebar -->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Đầu tư (chứng khoán)</li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-cash"></i> <span class="nav-text">Dòng tiền</span></a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="<?php echo $appRootURL ?>/cashflow/viewhistory"><i class="mdi mdi-history"></i> Lịch sử</a>
                            </li>
                            <li>
                                <a href="<?php echo $appRootURL ?>/cashflow/edit"><i class="mdi mdi-sync"></i> Nạp - rút</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-certificate"></i> <span class="nav-text">Cổ phiếu</span></a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="<?php echo $appRootURL ?>/stock/viewhistory"><i class="mdi mdi-history"></i> Lịch sử</a>
                            </li>
                            <li>
                                <a href="<?php echo $appRootURL ?>/stock/edit"><i class="mdi mdi-sync"></i> Mua - bán</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-cash-100"></i> <span class="nav-text">Mức phí giao dịch</span></a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="<?php echo $appRootURL ?>/transfee/viewhistory"><i class="mdi mdi-menu"></i> Danh sách</a>
                            </li>
                            <li>
                                <a href="<?php echo $appRootURL ?>/transfee/edit"><i class="mdi mdi-playlist-plus"></i> Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-cash-usd"></i> <span class="nav-text">Phí quản lý tài khoản</span></a>
                        <ul aria-expanded="false">
                            <li>
                                <a href="<?php echo $appRootURL ?>/accfee/viewhistory"><i class="mdi mdi-history"></i> Lịch sử</a>
                            </li>
                            <li>
                                <a href="<?php echo $appRootURL ?>/accfee/edit"><i class="mdi mdi-pen"></i> Ghi lại</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-label">Components</li>

                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-chart-bar"></i> <span class="nav-text">Charts</span> <span class="badge badge-danger nav-badge">8</span></a>
                        <ul aria-expanded="false">
                            <li><a href="chart-flot.html">Flot</a>
                            </li>
                            <li><a href="chart-morris.html">Morris</a>
                            </li>
                            <li><a href="chart-chartjs.html">Chartjs</a>
                            </li>
                            <li><a href="chart-chartist.html">Chartist</a>
                            </li>
                            <li><a href="chart-sparkline.html">Sparkline</a>
                            </li>
                            <li><a href="chart-justgage.html">Justgage</a>
                            </li>
                            <li><a href="chart-knob.html">Knob</a>
                            </li>
                            <li><a href="chart-peity.html">Peity</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-email"></i> <span class="nav-text">Email</span></a>
                        <ul aria-expanded="false">
                            <li><a href="email-inbox.html">Inbox</a>
                            </li>
                            <li><a href="email-read.html">Read</a>
                            </li>
                            <li><a href="email-compose.html">Compose</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="calender-event.html"><i class="mdi mdi-calendar-check"></i> <span class="nav-text">Calendar</span></a></li>
                    <li><a href="widget-basic-card.html"><i class="mdi mdi-widgets"></i> <span class="nav-text">Widget</span></a>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-diamond"></i> <span class="nav-text">Components</span> <span class="badge badge-success nav-badge">16</span></a>
                        <ul aria-expanded="false">
                            <li><a href="ui-accordion.html">Accordion</a>
                            </li>
                            <li><a href="ui-alert.html">Alert</a>
                            </li>
                            <li><a href="ui-badge.html">Badge</a>
                            </li>
                            <li><a href="ui-button.html">Button</a>
                            </li>
                            <li><a href="ui-button-group.html">Button Group</a>
                            </li>
                            <li><a href="ui-cards.html">Cards</a>
                            </li>
                            <li><a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li><a href="ui-dropdown.html">Dropdown</a>
                            </li>
                            <li><a href="ui-list-group.html">List Group</a>
                            </li>
                            <li><a href="ui-media-object.html">Media Object</a>
                            </li>
                            <li><a href="ui-modal.html">Modal</a>
                            </li>
                            <li><a href="ui-pagination.html">Pagination</a>
                            </li>
                            <li><a href="ui-popover.html">Popover</a>
                            </li>
                            <li><a href="ui-progressbar.html">Progressbar</a>
                            </li>
                            <li><a href="ui-tab.html">Tab</a>
                            </li>
                            <li><a href="ui-typography.html">Typography</a>
                            </li>
                            <li><a href="uc-nestedable.html">Nestedable</a>
                            </li>
                            <li><a href="uc-sweetalert.html">Sweetalert</a>
                            </li>
                            <li><a href="uc-toastr.html">Toastr</a>
                            </li>
                            <li><a href="uc-weather.html">Weather</a>
                            </li>
                            <li><a href="uc-nestedable.html">Nestedable</a>
                            </li>
                            <li><a href="uc-sweetalert.html">Sweetalert</a>
                            </li>
                            <li><a href="uc-toastr.html">Toastr</a>
                            </li>
                            <li><a href="uc-weather.html">Weather</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-nfc-variant"></i> <span class="nav-text">Form</span></a>
                        <ul aria-expanded="false">
                            <li><a href="form-basic.html">Basic Forms</a>
                            </li>
                            <li><a href="form-addons.html">Form Addons</a>
                            </li>
                            <li><a href="form-validation.html">Form Validation</a>
                            </li>
                            <li><a href="form-editor.html">Form Editor</a>
                            </li>
                            <li><a href="form-pickers.html">Form Pickers</a>
                            </li>
                            <li><a href="form-summernote.html">Form Summernote</a>
                            </li>
                            <li><a href="form-typehead.html">Form Typehead</a>
                            </li>
                            <li><a href="form-xeditable.html">Form Xeditable</a>
                            </li>
                            <li><a href="form-dropzone.html">Form Dropzone</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-table-edit"></i> <span class="nav-text">Table</span></a>
                        <ul aria-expanded="false">
                            <li><a href="table-basic.html">Basic</a>
                            </li>
                            <li><a href="table-layout.html">Table Layout</a>
                            </li>
                            <li><a href="table-dt-basic.html">Datatable Basic</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="map-datamap.html"><i class="mdi mdi-map"></i> <span class="nav-text">Map</span></a></li>
                    <li class="nav-label">Extra</li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-google-pages"></i> <span class="nav-text">Pages</span></a>
                        <ul aria-expanded="false">
                            <li><a href="page-login.html">Login</a>
                            </li>
                            <li><a href="page-register.html">Register</a>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a>
                            </li>
                            <li><a href="page-recover.html">Recover</a>
                            </li>
                            <li><a href="page-error-400.html">Error 400</a>
                            </li>
                            <li><a href="page-error-403.html">Error 403</a>
                            </li>
                            <li><a href="page-error-404.html">Error 404</a>
                            </li>
                            <li><a href="page-error-500.html">Error 500</a>
                            </li>
                            <li><a href="page-error-503.html">Error 503</a>
                            </li>
                            <li><a href="page-one-column.html">One Column</a>
                            </li>
                            <li><a href="page-pricing.html">Pricing</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="page-invoice.html"><i class="mdi mdi-square-edit-outline"></i> <span class="nav-text">Invoice Summary</span></a>
                    </li>
                </ul>
            </div>
            <!-- #/ nk nav scroll -->
        </div>
        <!-- #/ sidebar -->
        <!-- content body -->
        <?php require_once './mvc/views/pages/'.$data['pages'].'.php'; ?>
        <!-- #/ content body -->
        <!-- footer -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; <a href="https://ule.merkulov.design">Ule</a> 2019, by <a href="https://1.envato.market/tf-merkulove" target="_blank">merkulove</a></p>
            </div>
        </div>
        <!-- #/ footer -->
    </div>

    <!-- Common JS -->
    <script src="<?php echo $appRootURL ?>/public/assets/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="<?php echo $appRootURL ?>/public/main/js/custom.min.js"></script>

</body>

</html>