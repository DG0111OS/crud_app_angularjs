<!DOCTYPE html>
<html ng-app="myApp" ng-init="data = 'NGO VAN LONG'">
{{--ng-app khởi tạo ứng dụng--}}
{{--ng-init khởi tạo dữ liệu app--}}
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    {{--        nhung angular--}}
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

    {{--    template--}}
    <link rel="stylesheet" href="{{asset('admin_/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin_/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('admin_/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin_/vendors/iconfonts/font-awesome/css/font-awesome.min.css')}}" />
{{--    code javascrip--}}
    <script src="{{asset('js/app.js')}}"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('admin_/css/style.css')}}">

</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.html"><img src="images/logo.svg" alt="logo"></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"></a>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <ul class="nav nav-tabs bg-gradient-primary" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                       aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                       aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
        </div>
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="images/faces/face1.jpg" alt="profile">
                            <span class="login-status online"></span> <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2">David Grey. H</span>
                            <span class="text-secondary text-small">Project Manager</span>
                        </div>
                        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#/">
                        <span class="menu-title">Dashboard</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                       aria-controls="page-layouts">
                        <span class="menu-title">Product</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-apps menu-icon"></i>
                    </a>
                    <div class="collapse" id="page-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="#!product">Danh sách sản phẩm</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#!product/create">Thêm sản phẩm</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/layout/horizontal-menu-1.html">Horizontal
                                    Menu 1</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/layout/horizontal-menu-2.html">Horizontal
                                    Menu 2</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
                       aria-controls="sidebar-layouts">
                        <span class="menu-title">Sidebar Layouts</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-playlist-play menu-icon"></i>
                    </a>
                    <div class="collapse" id="sidebar-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="pages/layout/compact-menu.html">Compact
                                    menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon
                                    menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar
                                    Hidden</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar
                                    Overlay</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar
                                    Fixed</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                       aria-controls="ui-basic">
                        <span class="menu-title">Basic UI Elements</span>
                        <i class="menu-arrow"></i>
                        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/ui-features/accordions.html">Accordions</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/badges.html">Badges</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/modals.html">Modals</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/progress.html">Progress
                                    bar</a></li>
                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/ui-features/pagination.html">Pagination</a></li>
                            <li class="nav-item"><a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                            <li class="nav-item"><a class="nav-link"
                                                    href="pages/ui-features/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">

{{--            router đặt ở đây nhé--}}

            <div ng-view></div>
{{--            hiển thị nội dung ở đây--}}


            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a
                            href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted &amp; made with <i
                            class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="{{asset("admin_/vendors/js/vendor.bundle.base.js")}}"></script>
    <script src="{{asset("admin_/vendors/js/vendor.bundle.addons.js")}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset("admin_/js/off-canvas.js")}}"></script>
    <script src="{{asset("admin_/js/hoverable-collapse.js")}}"></script>
    <script src="{{asset("admin_/js/misc.js")}}"></script>
    <script src="{{asset("admin_/js/settings.js")}}"></script>
    <script src="{{asset("admin_/js/todolist.js")}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset("admin_/js/dashboard.js")}}"></script>

</body>
</html>
