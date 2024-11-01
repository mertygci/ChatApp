<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Chat | Chatvia - Responsive Bootstrap 5 Chat App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive Bootstrap 5 Chat App" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('test/images/favicon.ico')}}">

    <!-- magnific-popup css -->
    <link href="{{asset('test/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('test/libs/owl.carousel/assets/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('test/libs/owl.carousel/assets/owl.theme.default.min.css')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('test/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('test/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('test/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />


</head>

<body>


<div class="layout-wrapper d-lg-flex">

    <!-- Start left sidebar-menu -->
    <div class="side-menu flex-lg-column me-lg-1 ms-lg-0">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo.svg" alt="" height="30">
                        </span>
            </a>

            <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo.svg" alt="" height="30">
                        </span>
            </a>
        </div>
        <!-- end navbar-brand-box -->

        <!-- Start side-menu nav -->
        <div class="flex-lg-column my-auto">
            <ul class="nav nav-pills side-menu-nav justify-content-center" role="tablist">
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Profile">
                    <a class="nav-link" id="pills-user-tab" data-bs-toggle="pill" href="#pills-user" role="tab">
                        <i class="ri-user-2-line"></i>
                    </a>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Chats">
                    <a class="nav-link active" id="pills-chat-tab" data-bs-toggle="pill" href="#pills-chat" role="tab">
                        <i class="ri-message-3-line"></i>
                    </a>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Groups">
                    <a class="nav-link" id="pills-groups-tab" data-bs-toggle="pill" href="#pills-groups" role="tab">
                        <i class="ri-group-line"></i>
                    </a>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Contacts">
                    <a class="nav-link" id="pills-contacts-tab" data-bs-toggle="pill" href="#pills-contacts" role="tab">
                        <i class="ri-contacts-line"></i>
                    </a>
                </li>
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
                    <a class="nav-link" id="pills-setting-tab" data-bs-toggle="pill" href="#pills-setting" role="tab">
                        <i class="ri-settings-2-line"></i>
                    </a>
                </li>
                <li class="nav-item dropdown profile-user-dropdown d-inline-block d-lg-none">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="profile-user rounded-circle">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profile <i class="ri-profile-line float-end text-muted"></i></a>
                        <a class="dropdown-item" href="#">Setting <i class="ri-settings-3-line float-end text-muted"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out <i class="ri-logout-circle-r-line float-end text-muted"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end side-menu nav -->

        <div class="flex-lg-column d-none d-lg-block">
            <ul class="nav side-menu-nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link light-dark-mode" href="#" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" title="Dark / Light Mode">
                        <i class='ri-sun-line theme-mode-icon'></i>
                    </a>
                </li>

                <li class="nav-item btn-group dropup profile-user-dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="profile-user rounded-circle">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profile <i class="ri-profile-line float-end text-muted"></i></a>
                        <a class="dropdown-item" href="#">Setting <i class="ri-settings-3-line float-end text-muted"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="auth-login.html">Log out <i class="ri-logout-circle-r-line float-end text-muted"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Side menu user -->
    </div>
    <!-- end left sidebar-menu -->

    <!-- start chat-leftsidebar -->
    @livewire('user-tabs')

    <!-- end chat-leftsidebar -->

    <!-- Start User chat -->
    @livewire('message-list')
    <!-- end  layout wrapper -->
</div>
    <!-- JAVASCRIPT -->
    <script src="{{asset('test/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('test/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('test/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('test/libs/node-waves/waves.min.js')}}"></script>

    <!-- Magnific Popup-->
    <script src="{{asset('test/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- owl.carousel js -->
    <script src="{{asset('test/libs/owl.carousel/owl.carousel.min.js')}}"></script>

    <!-- page init -->
    <script src="{{asset('test/js/pages/index.init.js')}}"></script>

    <script src="{{asset('test/js/app.js')}}"></script>

</body>
</html>
