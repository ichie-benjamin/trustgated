<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trustgated Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ setting('favicon') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ setting('favicon') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages-style.css') }}">

    <!--===============================================================================================-->
</head>
<body>

<!-- HEADER -->

<div id="header-top" >
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <!-- LOGO -->
                <a id="logo" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.png')}}" alt="{{ env('APP_NAME')}}">
                </a>
            </div><!-- col -->
            <div class="col-sm-4">

            </div><!-- col -->
            <div class="col-sm-5 logme">
                <div class="widget widget-pages">
                    @auth()

                        <ul >
                            <div class="dropdown2">
                                <li><a href="{{ auth()->user()->url() }}" class="dropbtn2"><i class="fa fa-lock"></i> <strong> {{ auth()->user()->username }}</strong></a></li>
                                <div class="dropdown-content2">
                                    <a href="#">Edit Profile</a>
                                    <a href="#">Saved Jobs</a>
                                    <a href="#">Change Password</a>

                                </div>
                            </div>
                            <li>

                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>

                    @endauth

                    @guest()

                        <ul >

                            <li><a href="{{ route('jobseeker.login') }}" class="dropbtn2"><i class="fa fa-lock"></i> <strong> Login </strong></a></li>


                        </ul>

                    @endguest

                </div><!-- widget-pages -->


            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- header-top -->



<div id="header" >
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- MENU -->
                <nav>
                    <a id="mobile-menu-button" href="#"><i class="mt-icons-menu"></i></a>
                    <ul class="menu clearfix" id="menu">
                        <li><a style="font-size: 15px" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                        <li><a style="font-size: 15px" href="{{ route('jobseeker.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> Jobseekers</a></li>
                        <li><a style="font-size: 15px" href="{{ route('searchall') }}"><i class="fa fa-briefcase" aria-hidden="true"></i> Jobs</a></li>
                        {{--                            <li><a style="font-size: 15px" href="{{ route('searchall') }}"><i class="fa fa-university" aria-hidden="true"></i> IIT/IIM jobs</a></li>--}}
                        {{--                            <li ><a style="font-size: 15px" href="{{ route('job.type','govt-jobs') }}"><i class="fa fa-university" aria-hidden="true"></i> Govt.jobs</a></li>--}}
                        {{--                            <li ><a style="font-size: 15px" href="{{ route('job.type','overseas-jobs') }}"><i class="fa fa-globe" aria-hidden="true"></i> Oversea jobs</a></li>--}}
                        <li ><a style="font-size: 15px" href="{{ route('recruiters') }}"><i class="fa fa-users" aria-hidden="true"></i> Recruiters</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- CONTENT -->

@yield('content')


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/bootstrap/js/popper.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/daterangepicker/moment.min.js"></script>
<script src="/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/js/main.js"></script>

</body>
</html>
