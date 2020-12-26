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


    <style>
        .banner-top {
            background-color: #222845;
        }
        #footer {
            padding: 30px 0 0px;
            background-color: #222845;
            color: #d7d7d7;
        }
        #footer-bottom {
            padding: 10px 0;
            background-color: #222845;
            color: #d7d7d7;
        }

        .p-b-53{
            padding-bottom : 5px
        }
        .m-b-20 {
             margin-bottom: 0px;
        }

        .btn-face, .btn-google {
            height: 50px!important;
        }



        .container-login100 {

            min-height: 100%;
        }
    </style>

    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('assets/css/extra.css') }}">

</head>
<body>

<!-- HEADER -->

{{--<header  class="site-header mo-left header fullwidth">--}}
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
        <div class="main-bar clearfix">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header mostion">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="{{ env('APP_URL') }}" class="logo" ></a>
                </div>
                <!-- nav toggle button -->
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- extra nav -->
                <div class="extra-nav">
                    <div class="extra-cell">

                        @guest()
                            <a href="{{ route('jobseeker.login') }}" class="site-button"><i class="fa fa-user"></i> Login</a>
                            <a href="{{ route('jobseeker.register') }}" title="READ MORE" rel="bookmark" class="site-button"><i class="fa fa-lock"></i> Register </a>
                        @endguest
                        @auth
                            @if(auth()->user()->hasRole('employer'))
                                <a href="{{ route('employer.profile') }}" class="site-button"><i class="fa fa-user"></i> {{ auth()->user()->username }} </a>
                            @elseif (auth()->user()->hasRole(['admin','super_admin']))
                                <a href="{{ route('admin.dashboard') }}" class="site-button"><i class="fa fa-user"></i> {{ auth()->user()->username }} </a>
                            @else
                                <a href="{{ route('jobseeker.profile') }}" class="site-button"><i class="fa fa-user"></i> {{ auth()->user()->username }} </a>
                            @endif

                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"
                            >
                                <i class="fa fa-sign-out"></i>Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        @endauth
                    </div>
                </div>
                <!-- main nav -->
                <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
                    <ul class="nav navbar-nav">
                        @guest()
                            <li class="" ><a href="{{ url('/') }}">Home</a></li>
                            <li class="" ><a href="{{ route('searchall') }}">Jobs</a></li>
                            <li ><a href="{{ route('recruiters') }}">Recruiters </a></li>
                        @endguest
                        @auth()
                            @if(Auth::user()->hasRole('employer'))
                                <li class="" ><a href="{{ url('/') }}">Home</a></li>
                                <li class="" ><a href="{{ route('jobs.create') }}">Post Job</a></li>
                                <li ><a href="{{ route('jobs.index') }}">Posted Jobs </a></li>
                                <li ><a href="{{ route('employer.transactions') }}">Transactions </a></li>
                            @else
                                <li class="" ><a href="{{ url('/') }}">Home</a></li>
                                <li class="" ><a href="{{ route('searchall') }}">Jobs</a></li>
                                <li ><a href="{{ route('recruiters') }}">Posted Jobs </a></li>
                                <li ><a href="{{ route('employer.transactions') }}">Transactions </a></li>
                            @endif

                        @endauth

                        <li ><a href="{{ route('contactus') }}">Contact </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>






{{--</header>--}}


@yield('content')




<!-- FOOTER -->
<footer>

    <div id="footer">

        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-2">

                    <div class="widget widget-contact">
                        <h4 class="widget-title">Information</h4>
                        <ul>
                            <li><a href="{{ route('about') }}" > About Us </a> </li>
                            <li><a href="{{ route('terms') }}" > Terms & Conditions </a></li>
                            <li><a href="{{ route('privacy') }}" > Privacy Policy </a></li>
                            <li><a href="{{ route('contactus') }}" > Contact Us </a></li>
                            <li><a href="{{ route('faq') }}" > Help / FAQ </a></li>

                        </ul>

                    </div><!-- widget-contact -->

                </div><!-- col -->
                <div class="col-sm-2">

                    <div class="widget widget-contact">
                        @guest()
                            <h4 class="widget-title">Jobseekers </h4>
                            <ul>
                                <li><a href="{{ route('jobseeker.login') }}" > Login/Register </a> </li>
                            </ul>
                        @endguest

                        <h4 class="widget-title"> Recruiters </h4>
                        <ul>
                            <li><a href="{{ route('recruiters') }}" > Browse All Recruiters </a> </li>

                            <!--<li><a href="recruiter-listing.html" > Go to OwoRecruiters </a></li>-->
                            <!--<li><a href="#" > Report a Problem </a></li>-->
                        </ul>
                    </div><!-- widget-contact -->

                </div><!-- col -->
                <div class="col-sm-2">

                    <div class="widget widget-contact">

                        <h4 class="widget-title">Browse Jobs</h4>

                        <ul>
                            <li><a href="{{ route('all_jobs') }}" > Browse All Jobs </a> </li>
                            <!--<li><a href="#" > Premium MBA Jobs </a></li>
                            <li><a href="#" > Premium Engineering Jobs </a></li>-->
                            {{--                                <li><a href="jobsearch_all.html?sch=1" > Govt. Jobs </a></li>--}}
                            {{--                                <li><a href="jobsearch_all.html?sch=2" > International Jobs </a></li>--}}
                            <li><a href="{{ route('category_job') }}" > Jobs by Company </a> </li>
                            <li><a href="{{ route('company_job') }}" > Jobs by Category </a></li>
                            <li><a href="{{ route('job_by_area') }}" > Jobs by Location </a></li>
                        </ul>

                    </div><!-- widget-contact -->

                </div><!-- col -->
                <div class="col-sm-2">

                    <div class="widget widget-contact">
                        {{--                            <h4 class="widget-title">GOVT. JOBS</h4>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="job_by_location.html?loc=1" > Location </a></li>--}}
                        {{--                            </ul>--}}

                        {{--                            <h4 class="widget-title"> Oversea jobs</h4>--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="job_by_location.html?loc=2" > All Countries </a> </li>--}}
                        {{--                            </ul>--}}

                        <h4 class="widget-title"> Employers</h4>
                        <ul>
                            <li><a href="{{ route('jobs.create') }}" > Post Jobs </a> </li>
                            <!--<li><a href="#" > Search Resumes</a> </li>-->
                        </ul>



                    </div><!-- widget-contact -->


                </div><!-- col -->
                <div class="col-sm-2">

                    <!--	<div class="widget widget-contact">
                            <h4 class="widget-title">SERVICES</h4>

                            <ul>
                                <li><a href="#" > In-house Consultants </a> </li>
                                <li><a href="#" > Resume Writing </a></li>
                                <li><a href="#" > Featured Resume </a></li>
                                <li><a href="#" > Priority Applicant </a></li>
                                <li><a href="#" > Recruiters Connent </a></li>
                            </ul>

                        </div>--><!-- widget-contact -->

                    <div class="widget widget-social">
                        <h4 class="widget-title">FOLLOW US</h4>

                        <div class="social-media">

                            <a class="facebook" href="{{ setting('facebook_link') }}" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a class="twitter" href="{{ setting('twitter_link') }}" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a class="google" href="{{ setting('google_link') }}" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a class="linkedin" href="{{ setting('linkedin_link') }}" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div><!-- social-media -->
                    </div><!-- widget-social -->
                </div><!-- col -->
                <div class="col-sm-1"> </div>
            </div><!-- row -->
        </div><!-- container -->

    </div><!-- footer -->

    <div id="footer-bottom">

        <div class="container">
            <div class="row">

                <div class="col-sm-12">

                    <div class="widget widget-text">

                        <div  class="copy-right"><p></p>
                            <p>All rights reserved &copy; {{ date('Y') }} {{ setting('site_name') }}</p>
                        </div>

                    </div><!-- widget-text -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

    </div><!-- footer-bottom -->

</footer>
<!-- FOOTER -->

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
