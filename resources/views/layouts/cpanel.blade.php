<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blank</title>
    <style>
        #loader {
            transition: all 0.3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000;
        }

        #loader.fadeOut {
            opacity: 0;
            visibility: hidden;
        }



        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
            animation: sk-scaleout 1.0s infinite ease-in-out;
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }

            100% {
                -webkit-transform: scale(1.0);
                opacity: 0;
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            100% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
                opacity: 0;
            }
        }

    </style>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
</head>

<body class="app">
    <!-- @TOC -->
    <!-- =================================================== -->
    <!--
      + @Page Loader
      + @App Content
          - #Left Sidebar
              > $Sidebar Header
              > $Sidebar Menu

          - #Main
              > $Topbar
              > $App Screen Content
    -->

    <!-- @Page Loader -->
    <!-- =================================================== -->
    <div id='loader'>
        <div class="spinner"></div>
    </div>

    <script>
        window.addEventListener('load', function load() {
            const loader = document.getElementById('loader');
            setTimeout(function () {
                loader.classList.add('fadeOut');
            }, 300);
        });

    </script>

    <!-- @App Content -->
    <!-- =================================================== -->
    <div>
        <!-- #Left Sidebar ==================== -->
        <div class="sidebar">
            <div class="sidebar-inner">
                <!-- ### $Sidebar Header ### -->
                <div class="sidebar-logo">
                    <div class="peers ai-c fxw-nw">
                        <div class="peer peer-greed">
                            <a class="sidebar-link td-n" href="index.html">
                                <div class="peers ai-c fxw-nw">
                                    <div class="peer">
                                        <div class="logo">
                                            <img src="{{asset('image/dashboard/images/logo.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="peer peer-greed">
                                        <h5 class="lh-1 mB-0 logo-text">ISSS</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="peer">
                            <div class="mobile-toggle sidebar-toggle">
                                <a href="" class="td-n">
                                    <i class="ti-arrow-circle-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ### $Sidebar Menu ### -->
                <ul class="sidebar-menu scrollable pos-r">
                    <li class="nav-item mT-30 actived">
                        <a class="sidebar-link" href="{{route('modulo.usuario')}}">
                            <span class="icon-holder">
                                <i class="c-blue-500 ti-home"></i>
                            </span>
                            <span class="title">Casa</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href={{ route('register') }}>
                            <span class="icon-holder">
                                <i class="c-brown-500 ti-user"></i>
                            </span>
                            <span class="title">Agregar Usuarios</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class='sidebar-link' href="#">
                            <span class="icon-holder">
                                <i class="c-blue-500 ti-book"></i>
                            </span>
                            <span class="title">Agregar Libros</span>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class='sidebar-link' href="#">
                            <span class="icon-holder">
                                <i class="c-deep-orange-500 ti-book"></i>
                            </span>
                            <span class="title">Prestar Manuales</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class='sidebar-link' href="#">
                            <span class="icon-holder">
                                <i class="c-deep-purple-500 ti-settings"></i>
                            </span>
                            <span class="title">Configuracion</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class='sidebar-link' href="{{ route('register') }}">
                            <span class="icon-holder">
                                <i class="c-indigo-500 ti-user"></i>
                            </span>
                            <span class="title">Agregar usuarios</span>
                        </a>
                    </li> --}}
                    {{--<li class="nav-item">
                        <a class='sidebar-link' href="forms.html">
                            <span class="icon-holder">
                                <i class="c-light-blue-500 ti-pencil"></i>
                            </span>
                            <span class="title">Crear Usuario</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="sidebar-link" href="ui.html">
                            <span class="icon-holder">
                                <i class="c-pink-500 ti-palette"></i>
                            </span>
                            <span class="title">UI Elements</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                                <i class="c-orange-500 ti-layout-list-thumb"></i>
                            </span>
                            <span class="title">Tables</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class='sidebar-link' href="basic-table.html">Basic Table</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="datatable.html">Data Table</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                                <i class="c-purple-500 ti-map"></i>
                            </span>
                            <span class="title">Maps</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="google-maps.html">Google Map</a>
                            </li>
                            <li>
                                <a href="vector-maps.html">Vector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                                <i class="c-red-500 ti-files"></i>
                            </span>
                            <span class="title">Pages</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class='sidebar-link' href="blank.html">Blank</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="404.html">404</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="500.html">500</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="signin.html">Sign In</a>
                            </li>
                            <li>
                                <a class='sidebar-link' href="signup.html">Sign Up</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                                <i class="c-teal-500 ti-view-list-alt"></i>
                            </span>
                            <span class="title">Multiple Levels</span>
                            <span class="arrow">
                                <i class="ti-angle-right"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0);">
                                    <span>Menu Item</span>
                                    <span class="arrow">
                                        <i class="ti-angle-right"></i>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0);">Menu Item</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">Menu Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            <div class="header navbar">
                <div class="header-container">
                    <ul class="nav-left">
                        <li>
                            <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                                <i class="ti-menu"></i>
                            </a>
                        </li>
                        {{-- MODAL FORM --}}
                        <li>
                            <!-- Button trigger modal -->
                            {{-- <a id='sidebar-plus' data-toggle="modal" class="sidebar-plus"
                                href="javascript:void(0);" data-target="#exampleModal">

                                <i class="c-indigo-500 ti-plus"></i> --}}


                                {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <i class="c-indigo-500 ti-plus"></i>
                                </button> --}}

                                <!-- Modal -->
                                {{-- <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <@include('modals.register')
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a> --}}

                        </li>
                        {{-- MODAL FORM --}}
                        <li class="search-box">
                            <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                                <i class="search-icon ti-search pdd-right-10"></i>
                                <i class="search-icon-close ti-close pdd-right-10"></i>
                            </a>
                        </li>
                        <li class="search-input">
                            <input class="form-control" type="text" placeholder="Search...">
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="notifications dropdown">
                            <span class="counter bgc-red">3</span>
                            <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="pX-20 pY-15 bdB">
                                    <i class="ti-bell pR-10"></i>
                                    <span class="fsz-sm fw-600 c-grey-900">Notifications</span>
                                </li>
                                <li>
                                    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                        <li>
                                            <a href=""
                                                class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                                <div class="peer mR-15">
                                                    <img class="w-3r bdrs-50p"
                                                        src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                                                </div>
                                                <div class="peer peer-greed">
                                                    <span>
                                                        <span class="fw-500">John Doe</span>
                                                        <span class="c-grey-600">liked your <span
                                                                class="text-dark">post</span>
                                                        </span>
                                                    </span>
                                                    <p class="m-0">
                                                        <small class="fsz-xs">5 mins ago</small>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=""
                                                class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                                <div class="peer mR-15">
                                                    <img class="w-3r bdrs-50p"
                                                        src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                                                </div>
                                                <div class="peer peer-greed">
                                                    <span>
                                                        <span class="fw-500">Moo Doe</span>
                                                        <span class="c-grey-600">liked your <span
                                                                class="text-dark">cover image</span>
                                                        </span>
                                                    </span>
                                                    <p class="m-0">
                                                        <small class="fsz-xs">7 mins ago</small>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=""
                                                class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                                <div class="peer mR-15">
                                                    <img class="w-3r bdrs-50p"
                                                        src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                                                </div>
                                                <div class="peer peer-greed">
                                                    <span>
                                                        <span class="fw-500">Lee Doe</span>
                                                        <span class="c-grey-600">commented on your <span
                                                                class="text-dark">video</span>
                                                        </span>
                                                    </span>
                                                    <p class="m-0">
                                                        <small class="fsz-xs">10 mins ago</small>
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pX-20 pY-15 ta-c bdT">
                                    <span>
                                        <a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i
                                                class="ti-angle-right fsz-xs mL-10"></i></a>
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown" data-toggle="tooltip" data-placement="bottom" title="Cambiar tema">
                            <a id="theme" href="#" class="nav-link">
                                <ion-icon style="font-size: 20px; margin-bottom: -3px;" name="partly-sunny-outline">
                                </ion-icon>
                            </a>
                        </li>
                        <!--<li class="notifications dropdown">
                            <span class="counter bgc-blue">3</span>
                            <a href="" class="dropdown-toggle no-after" data-toggle="dropdown">
                                <i class="ti-email"></i>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="pX-20 pY-15 bdB">
                                    <i class="ti-email pR-10"></i>
                                    <span class="fsz-sm fw-600 c-grey-900">Emails</span>
                                </li>
                                <li>
                                    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                        <li>
                                            <a href=""
                                                class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                                <div class="peer mR-15">
                                                    <img class="w-3r bdrs-50p"
                                                        src="https://randomuser.me/api/portraits/men/1.jpg" alt="">
                                                </div>
                                                <div class="peer peer-greed">
                                                    <div>
                                                        <div class="peers jc-sb fxw-nw mB-5">
                                                            <div class="peer">
                                                                <p class="fw-500 mB-0">John Doe</p>
                                                            </div>
                                                            <div class="peer">
                                                                <small class="fsz-xs">5 mins ago</small>
                                                            </div>
                                                        </div>
                                                        <span class="c-grey-600 fsz-sm">
                                                            Want to create your own customized data generator for your
                                                            app...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=""
                                                class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                                <div class="peer mR-15">
                                                    <img class="w-3r bdrs-50p"
                                                        src="https://randomuser.me/api/portraits/men/2.jpg" alt="">
                                                </div>
                                                <div class="peer peer-greed">
                                                    <div>
                                                        <div class="peers jc-sb fxw-nw mB-5">
                                                            <div class="peer">
                                                                <p class="fw-500 mB-0">Moo Doe</p>
                                                            </div>
                                                            <div class="peer">
                                                                <small class="fsz-xs">15 mins ago</small>
                                                            </div>
                                                        </div>
                                                        <span class="c-grey-600 fsz-sm">
                                                            Want to create your own customized data generator for your
                                                            app...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=""
                                                class='peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100'>
                                                <div class="peer mR-15">
                                                    <img class="w-3r bdrs-50p"
                                                        src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                                                </div>
                                                <div class="peer peer-greed">
                                                    <div>
                                                        <div class="peers jc-sb fxw-nw mB-5">
                                                            <div class="peer">
                                                                <p class="fw-500 mB-0">Lee Doe</p>
                                                            </div>
                                                            <div class="peer">
                                                                <small class="fsz-xs">25 mins ago</small>
                                                            </div>
                                                        </div>
                                                        <span class="c-grey-600 fsz-sm">
                                                            Want to create your own customized data generator for your
                                                            app...
                                                        </span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pX-20 pY-15 ta-c bdT">
                                    <span>
                                        <a href="email.html" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i
                                                class="fs-xs ti-angle-right mL-10"></i></a>
                                    </span>
                                </li>
                            </ul>
                        </li> -->
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                                <div class="peer mR-10">
                                    <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg"
                                        alt="">
                                </div>
                                <div class="peer">
                                    <span class="fsz-sm c-grey-900">{{Auth::user()->name}}</span>
                                    <br>
                                    @if (Auth::user()->rol_id == 1)
                                    <small>Supervisor</small>
                                    @else
                                    <small>Usuario</small>
                                    @endif
                                </div>
                            </a>
                            <ul class="dropdown-menu fsz-sm">
                                <li>
                                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="ti-settings mR-10"></i>
                                        <span>Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="ti-user mR-10"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="ti-email mR-10"></i>
                                        <span>Messages</span>
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                                        <i class="ti-power-off mR-10"></i>
                                        <span>Logout</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- ### $App Screen Content ### -->
            @yield('content')

            <!-- ### $App Screen Footer ### -->
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                <span>Copyright © 2019 Designed by <a href="https://colorlib.com" target='_blank'
                        title="Colorlib">Colorlib</a>. All rights reserved.</span>
            </footer>
        </div>
    </div>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <!-- IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Datatables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js">
    </script>
    <script>
        if (localStorage.getItem('theme') == null) {
            window.localStorage.setItem('theme', 'light');
        } else {
            var theme = localStorage.getItem('theme');
            window.localStorage.setItem('theme', theme);
        }

        $(document).ready(function () {
            if (localStorage.getItem('theme') === 'light') {
                $('#theme').html(
                    '<ion-icon style="font-size: 20px; margin-bottom: -3px;" name="partly-sunny-outline"></ion-icon>'
                );

                light();
            } else {
                $('#theme').html(
                    '<ion-icon style="font-size: 20px; margin-bottom: -3px;" name="moon"></ion-icon>');
                dark();
            }

            $('#theme').on('click', function () {
                if (localStorage.getItem('theme') === 'light') {
                    $(this).html(
                        '<ion-icon style="font-size: 20px; margin-bottom: -3px;" name="moon"></ion-icon>'
                    );
                    window.localStorage.setItem('theme', 'dark');
                    dark();
                } else {
                    $(this).html(
                        '<ion-icon style="font-size: 20px; margin-bottom: -3px;" name="partly-sunny-outline"></ion-icon>'
                    );
                    window.localStorage.setItem('theme', 'light');
                    light();
                }
            });

            function light() {
                $(".sidebar").css("background-color", "#FFFFFF");
                $(".header").css("background-color", "#FFFFFF");
                $(".card").css("background-color", "#FFFFFF");
                $("footer").css({
                    "background-color": "#E4E2E2",
                    'color': 'white'
                });
                $(".modal").css('color', '#313435');
                $(".title").css("color", "#313435");
                $("table").css("background-color", "#FFFFFF");
                $("body").css("color", "#313435");
                $(".main-content").attr('style', 'background-color: #F9FAFB !important');
                $(".peer span").attr('style', 'color: #313435 !important');
                $(".peer h5").attr('style', 'color: #313435 !important');
            }

            function dark() {
                $(".sidebar").css("background-color", "#263544");
                $(".header").css("background-color", "#263544");
                $(".card").css("background-color", "#263544");
                $("footer").css({
                    "background-color": "#454D55",
                    'color': 'white'
                });
                $(".modal").css('color', 'black');
                $(".title").css("color", "white");
                $("table").css("background-color", "#ECF0F6");
                $("body").css("color", "white");
                $(".main-content").attr('style', 'background-color: #454D55 !important');
                $(".peer span").attr('style', 'color: white !important');
                $(".peer h5").attr('style', 'color: white !important');
            }
        });

    </script>

    @stack('js')
</body>

</html>
