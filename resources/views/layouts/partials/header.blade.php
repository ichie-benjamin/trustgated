<header  class="site-header mo-left header fullwidth">
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
{{--                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                    <span></span>--}}
{{--                    <span></span>--}}
{{--                    <span></span>--}}
{{--                </button>--}}
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
                                <li ><a href="{{ route('recruiters') }}">Recruiters</a></li>
                                <li ><a href="{{ route('application_history') }}">Applications </a></li>
                            @endif

                        @endauth

                        <li ><a href="{{ route('contactus') }}">Contact </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>






    <div class="banner-top">
{{--        <div id="header" >--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm-12">--}}
{{--                        <!-- MENU -->--}}
{{--                        <nav>--}}
{{--                            <a id="mobile-menu-button" href="#"><i class="mt-icons-menu"></i></a>--}}
{{--                            @guest()--}}
{{--                              <ul class="menu clearfix" id="menu">--}}
{{--                                  <li><a style="font-size: 15px" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>--}}
{{--                                  <li><a style="font-size: 15px" href="{{ route('jobseeker.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> Jobseekers</a></li>--}}
{{--                                  <li><a style="font-size: 15px" href="{{ route('searchall') }}"><i class="fa fa-briefcase" aria-hidden="true"></i> Jobs</a></li>--}}
{{--                                  <li><a style="font-size: 15px" href="{{ route('searchall') }}"><i class="fa fa-university" aria-hidden="true"></i> IIT/IIM jobs</a></li>--}}
{{--                                  <li ><a style="font-size: 15px" href="{{ route('job.type','govt-jobs') }}"><i class="fa fa-university" aria-hidden="true"></i> Govt.jobs</a></li>--}}
{{--                                  <li ><a style="font-size: 15px" href="{{ route('job.type','oversea-jobs') }}"><i class="fa fa-globe" aria-hidden="true"></i> Oversea jobs</a></li>--}}
{{--                                  <li ><a style="font-size: 15px" href="{{ route('recruiters') }}"><i class="fa fa-users" aria-hidden="true"></i> Recruiters</a></li>--}}
{{--  --}}{{--                                <li ><a href="index.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/employers-icon.png" /> Employers</a></li>--}}
{{--                                  <li ><a style="font-size: 15px" href="{{ route('contactus') }}"><i class="fa fa-envelope" ></i> Contact us</a></li>--}}
{{--                              </ul>--}}
{{--                            @endguest--}}


{{--                            @auth()--}}
{{--                                @if(Auth::user()->hasRole('employer'))--}}
{{--                                    <ul class="menu clearfix" id="menu">--}}
{{--                                        <li  class="active"  ><a href="{{ route('employer.profile') }}"><i class="fa fa-user"></i> Profile</a></li>--}}
{{--                                        <li ><a href="#"><i class="fa fa-users"></i> Find Candidate</a></li>--}}
{{--                                        <li ><a href="#"><i class="fa fa-university"></i> Resume Access</a></li>--}}
{{--                                        <li ><a href="{{ route('jobs.create') }}"><i class="fa fa-globe"></i> Post Job</a></li>--}}
{{--                                        <li  ><a href="{{ route('jobs.index') }}"><i class="fa fa-briefcase"></i> Posted Job List</a></li>--}}
{{--                                        <li ><a href="{{ route('employer.transactions') }}"><i class="fa fa-bank"></i> Transaction List</a></li>--}}
{{--                                        <!--<li><a href="faq.html">Help / FAQ</a></li>-->--}}

{{--                                        <li ><a style="font-size: 15px" href="{{ route('contactus') }}"><i class="fa fa-envelope" ></i> Contact us</a></li>--}}

{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                    @else--}}
{{--                                        <ul class="menu clearfix" id="menu">--}}
{{--                                            <li><a style="font-size: 15px" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>--}}
{{--                                            <li><a style="font-size: 15px" href="{{ route('jobseeker.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> Jobseekers</a></li>--}}
{{--                                            <li><a style="font-size: 15px" href="{{ route('searchall') }}"><i class="fa fa-briefcase" aria-hidden="true"></i> Jobs</a></li>--}}
{{--                                            <li><a style="font-size: 15px" href="{{ route('searchall') }}"><i class="fa fa-university" aria-hidden="true"></i> IIT/IIM jobs</a></li>--}}
{{--                                            <li ><a style="font-size: 15px" href="{{ route('job.type','govt-jobs') }}"><i class="fa fa-university" aria-hidden="true"></i> Govt.jobs</a></li>--}}
{{--                                            <li ><a style="font-size: 15px" href="{{ route('job.type','oversea-jobs') }}"><i class="fa fa-globe" aria-hidden="true"></i> Oversea jobs</a></li>--}}

{{--                                            <li ><a style="font-size: 15px" href="{{ route('recruiters') }}"><i class="fa fa-users" aria-hidden="true"></i> Recruiters</a></li>--}}
{{--                                            <li ><a style="font-size: 15px" href="{{ route('contactus') }}"><i class="fa fa-envelope" ></i> Contact us</a></li>--}}
{{--                                        </ul>--}}
{{--                                @endif--}}
{{--                                @endauth--}}
{{--                        </nav>--}}
{{--                    </div><!-- col -->--}}
{{--                </div><!-- row -->--}}
{{--            </div><!-- container -->--}}
{{--        </div><!-- header -->--}}
{{--        <script type="text/javascript">--}}

{{--        </script>--}}

{{--        <script type="text/javascript" src="assets/js/ajaxupload.js"></script>--}}

        <!-- SEARCH-start -->

        <div class="container hometom">
            <div class="row">
                <div class="col-sm-12" >

                    <!--<div class="col-sm-1" ></div>-->
                    <div class="col-sm-12" >
                        <form class="form-inline" action="{{ route('jobsearch') }}" name="homeadvancesearch" method="GET">

                            <div class="form-group serww">
                                <input class="form-control2 " id="keyword" name="keyword" type="text"  placeholder="Keywords, Skills, Designation" value="{{ request()->get('keyword') }}" /></div>
                            <div class="form-group"> <input class="form-control2 " id="location" autocomplete="off" name="location"  type="text" value="{{ request()->get('location') }}" placeholder="Location"></div>
                            <div class="form-group">
                                <select id="category" name="category" class="form-control2">
                                    <option value="">select industry</option>
                                @foreach($industries as $key => $value)
                                        <option {{ request()->get('category') == $value ? 'selected' : '' }} value="{{ $value }}">{{ $key }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="form-control2 " id="keyword" name="experience" type="text"  placeholder="experience" value="{{ request()->get('experience') }}" />



                            <!--<input  class="form-control2 input-lg" type="text" name="exp" placeholder="Experience">--></div>
                            <div class="form-group text-center"><button  class="search-btn btn-lg btn-block"  id="homeadvsearch" type="submit" name="homeadvsearch" value="Search"> <img src="/images/search-icon.png" /> Search</button>
                                <!--<span class="avd"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lg" >Advanced Search</a></span>-->
                                <span class="avd"><a href="{{ route('advancedsearch') }}"> Advanced Search</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>            <!--SEARCH-end -->
        <div id="header-bottom" class="hea" >
            <div class="container">
                <div class="col-sm-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span ><i class="fa fa-bars fa-2"></i></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-2">
                        <ul class="nav navbar-nav navbar-left   sss">
                            <li>Browse jobs :</li>
                            <li class="active"><a href="{{ route('all_jobs') }}"><i class="fa fa-shopping-bag"></i> All jobs</a></li>
                            <li class=""><a href="{{ route('company_job') }}"><i class="fa fa-suitcase"></i> Job by Company</a></li>
                            <li class=""><a href="{{ route('category_job') }}"><i class="fa fa-list"></i> Job by Category</a></li>
                            <li class=""><a href="{{ route('job_by_area') }}"><i class="fa fa-location-arrow"></i> Job by Location</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> <!--col-sm-12-->
            </div><!--container-->
        </div><!--header-bottom-->          </div>  <!--banner-top-->
</header>
