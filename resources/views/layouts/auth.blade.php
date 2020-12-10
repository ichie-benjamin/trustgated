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
